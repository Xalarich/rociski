# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Co to je

Statický prezentační web **Ročiski** (https://rociski.cz) — výuka běžeckého lyžování na Vysočině, servis lyží, články. Provozují Adéla a Jiří Ročárkovi. Jen česky, bez backendu, bez formulářů (kontakt přes `tel:` a `mailto:`).

Repo: https://github.com/Xalarich/rociski, je **veřejné**. Do repa nepatří přístupy, hesla ani odkazy do administrací.

## Stack a příkazy

Nuxt 4 (adresář `app/`), Vue 3, Tailwind v3 přes `@nuxtjs/tailwindcss`, Headless UI, Heroicons, `@nuxtjs/sitemap`. Testy ani linter nejsou.

Nuxt projekt je v podsložce `rociski/`, všechny příkazy se spouští tam:

```bash
npm ci                # instalace
npm run dev           # http://localhost:3000
npm run generate      # statický build do .output/public (tohle se nasazuje)
npm run preview       # náhled buildu
```

## Nasazení

CI ani deploy skript nejsou. Postup: `npm run generate` a obsah `.output/public/` nahrát přes FTP na hosting Webglobe (nginx, statické soubory). FTP údaje jsou mimo repo, má je uživatel.

**Produkce a git se už jednou rozešly.** Článek `zaletneni-lyzi` byl nasazený 2026-04-06, ale nikdy necommitnutý. 2026-11-10 byl obnoven z produkčního HTML a od té doby se repo s produkcí shoduje (text všech stránek, markup, meta i sitemap). Protože se nasazuje ručně, může se to stát znovu. Před nasazením porovnat obsah na rociski.cz s `.output/public` a po nasazení commitnout.

Duplicitní hosty: `www.rociski.cz` a `vps.rociski.cz` servírují stejný web s HTTP 200. Google má zaindexované kopie z `vps`, který má navíc neplatný certifikát. Řeší to `public/.htaccess` (301 www/vps → apex, 301 `index.html`, `ErrorDocument 404`, cache, HSTS, `noindex` pro `200.html` a `404.html`). Webglobe má Apache za nginx, ale funkčnost `.htaccess` je potřeba po prvním nasazení ověřit přes `curl -I`. FTP klient musí nahrávat i soubory začínající tečkou. `vps` s neplatným certifikátem by bylo nejčistší smazat z DNS.

Na Windows `generate` spadne s `EBUSY ... rmdir .output\public`, když má nějaký shell nebo editor pracovní adresář uvnitř `.output`.

## Architektura

- **Každá stránka je samostatné SFC** v `app/pages/`, s textem napsaným přímo v šabloně. Na konci je `useSeoMeta({ title, description, ogImage? })`. Titulek se píše **bez** značky, protože „ | Ročiski“ doplňuje `titleTemplate` v `app.vue`. `ogUrl`, `ogTitle` ani twitter meta se do stránek nepíší.
- **`app/app.vue` je centrální místo pro SEO:** canonical a `og:url` (z `route.path`, vždy s lomítkem), `og:type` (`article` pro `/clanky/<slug>/`), `titleTemplate`, JSON-LD `@graph` (firma `SportsActivityLocation` a 2× `Person`, jen ověřená fakta z webu) a GA4 událost `click_contact` při kliknutí na `tel:` nebo `mailto:`. Globální výchozí hodnoty (lang, og:image, favicony, písmo Inter přes `<link>`, GA4 `G-Q4QE1EN7Z7`) jsou v `app.head` v `nuxt.config.ts`. GTM byl prázdný a 2026-11-10 se odstranil.
- **URL s lomítkem na konci:** `site.trailingSlash` a `nuxtLink.trailingSlash: 'append'` v `nuxt.config.ts`. Při porovnávání `route.path` je potřeba lomítko odříznout. Header a layout to dělají přes `path.replace(/\/$/, '')`. Bez toho se rozbije zvýraznění menu a layout a vzniknou chyby hydratace.
- **Interní odkazy:** Google vidí jen skutečné `<a href>`. Patička (`Footer.vue`) proto odkazuje na všechny stránky služeb, obsahuje NAP a pruh CTA (tel/mailto, skrytý na /kontakt). Panely menu v Headeru mají `:unmount="false"`, takže odkazy zůstávají v HTML i zavřené. Prerender vygeneruje i stránky bez odkazu, ale bez odkazu je Google nenajde.
- **Obrázky:** ke každému JPG v `public/img` existuje `x.webp` (max. 1920 px) a `x-960.webp`. `<img>` používá `srcset` a JPG zůstávají pro og:image. Nový obrázek se převede přes PIL stejně (kvalita ~78, u už optimalizovaných JPG nižší, pokud by WebP vyšel větší).
- **Nový článek**: vytvořit `app/pages/clanky/<slug>.vue` podle existujícího (drobečková navigace, hlavička, úvodní obrázek, bílé karty uvnitř `<article>`, `useSeoMeta`). Pak přidat položku **na začátek** pole `articles` v `app/pages/clanky/index.vue` (`slug`, `title`, `excerpt`, `image`). Nejnovější článek je první. Obrázky patří do `public/img/clanky/`.
- **Navigace** (`app/components/Header.vue`): podmenu se plní z polí `kurzy` a `servisLyzi`, která používá desktop i mobil. Odkazy v hlavní úrovni (O nás, Články, Ceník, Dárkové poukazy, Kontakt) jsou napsané dvakrát, v desktopovém `PopoverGroup` i v mobilním `Dialog`, takže se musí upravit na obou místech. Nová stránka služby patří i do patičky.
- **Layout** (`app/layouts/default.vue`): stránky s velkým obrázkem přes celou plochu (index, kurzy/*, servis-lyzi/*) dostanou `lg:h-screen`. Textové stránky musí být v `noFullHeightPages` (`/clanky/*` je vyjmuté automaticky). Nová textová stránka mimo `/clanky` → přidat ji do tohoto seznamu.
- **Sitemap** generuje `@nuxtjs/sitemap` z vygenerovaných stránek (URL s lomítkem). Statický `public/sitemap.xml` se smazal. `lastmod` se zatím negeneruje.
- **Cookies:** GA4 běží v Consent Mode v2, výchozí stav je `denied` (inline skript v `nuxt.config.ts`). Lišta je ve `Footer.vue`, renderuje se jen na klientu a volbu ukládá do `localStorage` pod klíčem `rociski-consent`. Ten klíč čte i inline skript, takže se musí měnit na obou místech. Odkaz „Nastavení cookies“ v patičce lištu znovu otevře. Odmítnutí smaže už uložené `_ga*` cookies. Ověřeno 2026-11-10: bez souhlasu se nevytvoří žádné `_ga` cookies.
- `app/error.vue` je česká stránka 404. Na `404.html` (SPA fallback) se její head nepropíše, protože chyba vzniká už při inicializaci, proto má výchozí titulek „Ročiski“ z configu.

## Konvence

- Slugy URL česky bez diakritiky (`delka-holi`, `servis-lyzi`).
- SEO titulky: každá stránka cílí na jednu hlavní frázi a nesdílí ji s jinými stránkami. Tvar je „Hlavní fráze – odlišení“, značku doplní šablona, celkem do 60 znaků. Popis má do 160 znaků. Titulky „fráze | fráze | fráze“ si kradly dotazy a 2026-11-10 se všechny přepsaly.
- Neověřená tvrzení o úspěších majitelů (2× mistr Evropy, 10× Jizerská 25) nedávat do titulků ani do JSON-LD, dokud je majitelé nedoloží (SEO audit 2026-11-10).
