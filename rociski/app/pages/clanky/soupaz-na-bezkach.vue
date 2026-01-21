<template>
    <div class="bg-gradient-to-br from-slate-50 to-sky-50 py-16 px-4 min-h-[calc(100vh-216px)]">
        <div class="max-w-4xl mx-auto">
            <!-- Breadcrumb -->
            <nav class="mb-8">
                <ol class="flex items-center text-sm text-gray-500">
                    <li>
                        <NuxtLink to="/clanky" class="hover:text-sky-600 transition-colors">Články</NuxtLink>
                    </li>
                    <li class="mx-2">/</li>
                    <li class="text-gray-800">Soupaž na běžkách</li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-2xl sm:text-3xl font-light text-gray-800 mb-4 leading-tight">
                    Soupaž na běžkách: Průvodce pro začátečníky a pokročilé
                </h1>
                <div class="w-24 h-1 bg-sky-500"></div>
            </header>

            <!-- Featured Image -->
            <div class="mb-10 rounded-2xl overflow-hidden shadow-lg">
                <img 
                    src="/img/clanky/jak-na-soupaz.jpg" 
                    alt="Soupaž na běžkách"
                    class="w-full h-auto object-cover"
                />
            </div>

            <!-- Article Content -->
            <article class="prose prose-lg max-w-none">
                <!-- Intro Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Stále častěji můžeme ve stopě potkat lyžaře, kteří se odpichují pouze holemi a nejedná se o profesionální závodníky. Pro soupaž se běžkaři rozhodují z několika důvodů: nechce se jim mazat stoupací vosky, špatně namazali a nic jiného jim nezbývá, vlastní jen skejtové lyže a nechce se jim zrovna bruslit, nebo prostě trénují na laufy...
                    </p>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Proč je ale soupaž tak výhodná, že se k ní upíná stále více běžců na lyžích? Dálkové běhy se pohybují svou délkou od 20 km až po slavný Vasův běh na 90 km, nebo dokonce 220 km dlouhý Nordenskiöldsloppet, často se startem a cílem v jiném místě. Navíc málokterý závod je rovinatý, často musíte na trati nastoupat několik stovek výškových metrů. Během závodu se tedy setkáte s různými typy sněhu, přičemž někdy dokonce může být namixovaný technický sníh s přírodním.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Dalším faktorem je čas. Laufy se startují mezi 8.-10. hodinou a do cíle se dojíždí kolem poledne či v odpoledních hodinách. Rozdíl teplot po promrzlém ránu a slunečném odpoledni může být i 10°C či více. Myslet si, že namažete optimální stoupací vosk, který vám bude fungovat na celé trati, je utopií.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Lyžaři se někdy uchylují k soupaži i proto, že si ráno chtějí přispat, nebo nesnáší stresy spojené s ranním testováním a přimazáváním stoupacích vosků. Hodně faktorů hraje do karet soupaži, jenže udělat ze dne na den rozhodnutí a objet 50 km závod „pouze rukama" není zdaleka jednoduché.
                    </p>
                </div>

                <!-- Jak začít Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <!-- Play/Start icon -->
                            <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Jak začít?</h2>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Pokud koketujete s myšlenkou, že chcete zkusit jet v nejbližší době nějaký závod soupaží, dobře to promyslete. Ideální je si pro první test vybrat závod s co nejlehčím profilem a v co nejkratší délce. Nabízí se například půlmaratony od 20 do 30 km.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Jestli si chcete hned na první pokus střihnout delší a profilově náročnější závod, zaměřte se na přípravu několik měsíců dopředu, v nejlepším případě už v létě na kolečkových lyžích. Když tak neuděláte, snadno se může stát, že vám během závodu horní polovina těla vypoví službu a do cíle se dostanete s velkou časovou ztrátou a v křečích, nebo se tam nedostanete vůbec.
                    </p>

                    <div class="flex items-start p-4 bg-amber-50 rounded-xl mb-6">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <p class="text-sm text-amber-800">
                            Lyžaři, kteří se nevěnují v tréninku síle a soupaži, často porušují pravidla a na trati si přibruslují, protože prostě nemohou a někdy bohužel nechtějí dodržet styl.
                        </p>
                    </div>

                    <p class="text-gray-700 leading-relaxed">
                        Začněte tedy včas a zařaďte do tréninku více posilování a v nejlepším případě také soupaž na kolečkových lyžích. Když váš vysněný závod objedete například za čtyři hodiny, zkuste si někdy podobně dlouhou, nebo delší zátěž i v tréninku. Pokud to vydržíte, stoupne vám sebevědomí a budete si více věřit i do samotného závodu.
                    </p>
                </div>

                <!-- Soupaž je hračka? Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <!-- Muscle/Strength icon -->
                            <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Soupaž je hračka?</h2>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Ač se může zdát, že soupaž je technicky nejjednodušší ze všech stylů běhu na lyžích, je to omyl. Sice neřešíte načasování odrazu lyže z podložky podobně jako u klasiky nebo bruslení, ale zase musíte být vybaveni výbornou rovnováhou při přenosu těžiště těla nad lyže, při kterém by měly pracovat všechny svalové partie. Proto jsou nejlepší závodníci schopni dosáhnout při závodě maximální srdeční frekvence, podobně jako u ostatních stylů běhu na lyžích či běhu na suchu.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Na první pohled se zdá, že pracují jen horní končetiny, ale musíte mít komplexně naposilovanou horní část těla, a to zejména břicho, ramena a záda. Svaly horních končetin by ve finále měly hrát nejmenší roli, neobsahují totiž takové množství svalů jako svaly trupu (břišní svaly či zádové), a snadno se proto unaví. Často se také může stát, že vás druhý den budou bolet stehna. Prakticky celý závod při každém odpichu lehce přidřepujete, takže není čemu se divit.
                    </p>

                    <div class="flex items-start p-4 bg-sky-50 rounded-xl">
                        <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm text-sky-800">
                            <strong>Tip:</strong> Technika soupaže je důležitá. Když se jí budete věnovat, zadarmo získáte cenné vteřiny, nebo dokonce minuty na své soupeře. Pokud máte možnost, nechejte si poradit od zkušenějších, anebo aspoň jednorázově zaplatit výuku v některé z lyžařských škol.
                        </p>
                    </div>
                </div>

                <!-- Jak soupaž trénovat Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <!-- Calendar/Schedule icon for training -->
                            <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Jak soupaž trénovat</h2>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Možná budete mít pocit, že když se chcete zaměřit na soupaž, nesmíte v tréninku jezdit nic jiného. Držte se však stále pestrého tréninku, kam patří v létě běh, kolečkové lyže, posilování, kolektivní hry, kolo, horolezení, kajak a další. V zimě samozřejmě lyže - bruslení, klasika a soupaž.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Když se striktně věnujete jen soupaži, ve většině případů se nejste schopni dostat na svou maximální tepovou frekvenci a časem se doslova ubijete k monotónnímu tempu. Zejména s přibývajícím věkem je potřeba si udržet univerzálnost, rozsah a dynamiku pohybu.
                    </p>

                    <div class="flex items-start p-4 bg-amber-50 rounded-xl mb-6">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <p class="text-sm text-amber-800">
                            <strong>Pozor:</strong> Soupaž jako jednostranný pohyb může vést ke zdravotním problémům, jakými jsou například bolesti zad, nebo zápěstí a loktů. Hlavně vazy upínající se na lokty jsou velmi namáhany na kolečkových lyžích, kde se nevyhnete tvrdým nárazům do asfaltu.
                        </p>
                    </div>

                    <div class="flex items-start p-4 bg-emerald-50 rounded-xl mb-6">
                        <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm text-emerald-800">
                            <strong>Doporučení:</strong> Ze 100 % vašeho absolvovaného tréninku byste se měli věnovat zhruba z 30 % soupaži.
                        </p>
                    </div>

                    <p class="text-gray-700 leading-relaxed">
                        Abyste si udrželi správnou techniku během závodu, musíte na to být silově připraveni. Vhodné je kombinovat posilovnu a cviky s vlastním tělem. A nezapomínat na neoblíbené posilování břišních svalů, kterým je vhodné se věnovat velmi často, klidně i 2-3x týdně aspoň na 10 minut.
                    </p>
                </div>

                <!-- Pozor na pravidla Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mr-4">
                            <!-- Rules/Document icon -->
                            <svg class="w-6 h-6 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Pozor na pravidla</h2>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Když se rozhodnete pro soupaž, je vaší povinností dodržovat pravidla a dbát, abyste v prudkých pasážích, kde se jde stromečkem, nepřibruslovali. Udržte nervy na uzdě, do kopce budete většinou soupaží ztrácet na ostatní klasiky, ale na rovinách či sjezdech budete mít obrovskou výhodu.
                    </p>

                    <div class="flex items-start p-4 bg-sky-50 rounded-xl">
                        <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm text-sky-800">
                            <strong>Tip:</strong> Doporučujeme každému, aby si v tréninku stromeček vyzkoušel v závodním tempu a pořádně natrénoval zaseknutí boční hrany lyže do sněhu. Jde to dobře i na skejtových lyžích, pokud nejedete na ledu. Důležité je chtít dodržovat pravidla a zkusit si to v tréninku, abyste nebyli při závodě zaskočení.
                        </p>
                    </div>
                </div>

                <!-- Co ještě dodat? Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Co ještě dodat?</h2>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Někdy je velmi obtížné před závodem vyhodnotit, jestli mazat či ne. Zvažte všechny okolnosti: sněhové podmínky a počasí, s tím související případné promazání, profil a délku trati, absolvovanou tréninkovou přípravu a svou momentální kondici, lyžařský materiál a potom se rozhodněte.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Je to jen na vás. Můžete to i risknout a být mile překvapeni, že jste to zvládli, nebo naopak získat zkušenost, že příště je vhodné za této situace radši vytáhnout stoupací vosky či no-wax (nemazací) běžky.
                    </p>
                </div>
            </article>
        </div>
    </div>
</template>

<script setup>
useSeoMeta({
    title: 'Soupaž na běžkách | Průvodce pro začátečníky a pokročilé',
    description: 'Kompletní průvodce soupaží na běžkách. Jak začít, jak trénovat, technika soupaže a pravidla pro dálkové běžecké závody. Tipy pro začátečníky i pokročilé.',
    ogTitle: 'Soupaž na běžkách | Ročiski',
    ogDescription: 'Průvodce soupaží na běžkách pro začátečníky a pokročilé. Jak začít, jak trénovat a co vědět o pravidlech.',
    ogUrl: 'https://rociski.cz/clanky/soupaz-na-bezkach',
    ogImage: 'https://rociski.cz/img/clanky/jak-na-soupaz.jpg',
})
</script>
