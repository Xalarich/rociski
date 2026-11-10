<?php
// Kontaktní formulář (/kontakt/#formular) → e-mail majitelům + potvrzení zákazníkovi přes SMTP Webglobe.
// Přístupy jsou v config.php vedle tohoto souboru. Ten není v gitu (repo je veřejné),
// nahrává se jen přes FTP a .htaccess k němu zakazuje přístup. Vrací pole:
//   'server' => 'ssl://smtp.webglobe.cz:465', 'user' => 'info@rociski.cz', 'pass' => '…'
//   volitelně 'to' => příjemce (výchozí níže)

ini_set('display_errors', '0');
date_default_timezone_set('Europe/Prague');
header('Content-Type: application/json; charset=utf-8');

const FAIL = 'Zprávu se nepodařilo odeslat. Zavolejte nám prosím na +420 777 845 298.';

function reply(int $code, array $data): void
{
    http_response_code($code);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}

// Hlavičky s diakritikou jako base64 encoded-word: zároveň znemožní vložení dalších hlaviček.
function enc(string $s): string
{
    return '=?UTF-8?B?' . base64_encode($s) . '?=';
}

function message(string $fromName, string $from, string $to, string $replyTo, string $subject, string $body): string
{
    $body = str_replace("\n", "\r\n", str_replace(["\r\n", "\r"], "\n", $body));
    return implode("\r\n", [
        'Date: ' . date('r'),
        'From: ' . enc($fromName) . " <$from>",
        "To: <$to>",
        "Reply-To: $replyTo",
        'Subject: ' . enc($subject),
        'Message-ID: <' . bin2hex(random_bytes(16)) . '@rociski.cz>',
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: base64',
    ]) . "\r\n\r\n" . chunk_split(base64_encode($body)); // base64 končí CRLF a nikdy nezačíná tečkou
}

function smtp_send(array $c, string $to, string $data): void
{
    $s = stream_socket_client($c['server'], $errno, $err, 15);
    if (!$s) throw new RuntimeException("connect: $err");
    stream_set_timeout($s, 15);
    $cmd = function (?string $line, string $expect) use ($s): void {
        if ($line !== null) fwrite($s, $line . "\r\n");
        $r = '';
        while (($l = fgets($s, 515)) !== false) {
            $r .= $l;
            if (!isset($l[3]) || $l[3] !== '-') break; // poslední řádek víceřádkové odpovědi
        }
        if (strncmp($r, $expect, 3) !== 0) throw new RuntimeException('SMTP: ' . trim($r));
    };
    $cmd(null, '220');
    $cmd('EHLO rociski.cz', '250');
    $cmd('AUTH LOGIN', '334');
    $cmd(base64_encode($c['user']), '334');
    $cmd(base64_encode($c['pass']), '235');
    $cmd("MAIL FROM:<{$c['user']}>", '250');
    $cmd("RCPT TO:<$to>", '250');
    $cmd('DATA', '354');
    $cmd($data . '.', '250');
    $cmd('QUIT', '221');
    fclose($s);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') reply(405, ['ok' => false]);

// Skryté pole vyplní jen robot. Tváříme se, že je odesláno.
if (!empty($_POST['web'])) reply(200, ['ok' => true]);

$f = fn(string $k): string => is_string($_POST[$k] ?? null) ? trim($_POST[$k]) : '';
$name = $f('jmeno');
$email = $f('email');
$phone = $f('telefon');
$msg = $f('zprava');

if ($name === '' || strlen($name) > 200 || strlen($email) > 200 || !filter_var($email, FILTER_VALIDATE_EMAIL)
    || strlen($phone) > 50 || $msg === '' || strlen($msg) > 10000) {
    reply(400, ['ok' => false, 'error' => 'Vyplňte prosím jméno, platný e-mail a zprávu.']);
}

// Formulář posílá potvrzení na libovolnou zadanou adresu, proto max. 5 odeslání za hodinu z jedné IP.
// ponytail: když Apache za nginx nevidí skutečnou IP, platí limit pro celý web. Pro malý web to stačí.
$rlFile = sys_get_temp_dir() . '/rociski-kontakt-' . md5($_SERVER['REMOTE_ADDR'] ?? '');
$hits = array_filter((array) json_decode((string) @file_get_contents($rlFile), true), fn($t) => $t > time() - 3600);
if (count($hits) >= 5) reply(429, ['ok' => false, 'error' => 'Odeslali jste už několik zpráv. Zkuste to prosím později, nebo nám zavolejte na +420 777 845 298.']);
$hits[] = time();
@file_put_contents($rlFile, json_encode(array_values($hits)));

$configFile = __DIR__ . '/config.php';
if (!is_file($configFile)) {
    error_log('kontakt: chybí config.php');
    reply(500, ['ok' => false, 'error' => FAIL]);
}
$c = require $configFile;
$to = $c['to'] ?? 'jiri.rocarek@seznam.cz';

$ownerBody = "Jméno: $name\nE-mail: $email\nTelefon: " . ($phone !== '' ? $phone : '–') . "\n\n$msg\n\n-- \nOdesláno z formuláře na rociski.cz";

// Potvrzení schválně neopakuje text zprávy ani jméno: jinak by šel formulář zneužít
// k rozesílání cizího obsahu na libovolné adresy z info@rociski.cz.
$confirmBody = <<<TXT
Dobrý den,

děkujeme za zprávu z webu rociski.cz. Ozveme se vám co nejdříve.

Pokud chcete něco doplnit, stačí odpovědět na tento e-mail. Spěcháte? Zavolejte nám na +420 777 845 298.

Adéla a Jiří Ročárkovi
Ročiski – běžecké lyžování na Vysočině
https://rociski.cz

--
Tento e-mail přišel, protože někdo zadal vaši adresu do kontaktního formuláře na rociski.cz. Pokud jste to nebyli vy, e-mail prosím ignorujte.
TXT;

try {
    smtp_send($c, $to, message('Web Ročiski', $c['user'], $to, enc($name) . " <$email>", "Zpráva z webu: $name", $ownerBody));
} catch (Throwable $e) {
    error_log('kontakt: ' . $e->getMessage());
    reply(500, ['ok' => false, 'error' => FAIL]);
}

// Majitelé zprávu mají. Když selže jen potvrzení, zákazníkovi se to nehlásí jako chyba.
try {
    smtp_send($c, $email, message('Ročiski', $c['user'], $email, "<$to>", 'Děkujeme za zprávu – Ročiski', $confirmBody));
} catch (Throwable $e) {
    error_log('kontakt (potvrzení): ' . $e->getMessage());
}
reply(200, ['ok' => true]);
