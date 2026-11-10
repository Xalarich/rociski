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
                    <li class="text-gray-800">Zaletnění lyží</li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-2xl sm:text-3xl font-light text-gray-800 mb-4 leading-tight">
                    Zaletnění lyží: Jak správně ošetřit běžky po sezóně
                </h1>
                <div class="w-24 h-1 bg-sky-500"></div>
            </header>

            <!-- Featured Image -->
            <div class="mb-10 rounded-2xl overflow-hidden shadow-lg">
                <img
                    src="/img/prednaska.webp" srcset="/img/prednaska-960.webp 960w, /img/prednaska.webp 1920w" fetchpriority="high" sizes="(max-width: 896px) 100vw, 896px" width="1920" height="1280"
                    alt="Příprava lyží na letní uskladnění"
                    class="w-full h-auto object-cover"
                />
            </div>

            <!-- Intro -->
            <div class="mb-8 px-1">
                <p class="text-lg text-gray-600 leading-relaxed border-l-4 border-sky-400 pl-5">
                    S blížícím se koncem lyžařské sezóny je vhodné věnovat lyžím základní péči, aby zůstaly přes léto v dobré kondici. Správné očištění, naparafínování a uskladnění pomáhá chránit skluznici před oxidací, prachem i drobným poškozením.
                </p>
            </div>

            <!-- Steps -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
                <div class="bg-white rounded-xl shadow p-5 flex flex-col items-center text-center">
                    <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-sky-600 uppercase tracking-wider mb-1">Krok 1</span>
                    <span class="text-gray-800 font-medium">Očistit lyže</span>
                </div>
                <div class="bg-white rounded-xl shadow p-5 flex flex-col items-center text-center">
                    <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-sky-600 uppercase tracking-wider mb-1">Krok 2</span>
                    <span class="text-gray-800 font-medium">Naparafínovat</span>
                </div>
                <div class="bg-white rounded-xl shadow p-5 flex flex-col items-center text-center">
                    <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-sky-600 uppercase tracking-wider mb-1">Krok 3</span>
                    <span class="text-gray-800 font-medium">Správně uskladnit</span>
                </div>
            </div>

            <!-- Article Content -->
            <article class="prose prose-lg max-w-none space-y-8">
                <!-- Očištění -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-sky-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Očištění lyží před uskladněním</h2>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Pokud máte ve stoupací komoře zbytky tuhého vosku nebo klistru, nejprve je hrubě odstraňte škrabkou nebo špachtlí. Nejlépe to jde v teple, například když lyže necháte chvíli ve vytápěné místnosti. Díky tomu spotřebujete méně smývače a práce bude rychlejší.
                    </p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Zbytky vosku a nečistot setřete hadříkem nebo měkkým čisticím papírem navlhčeným ve smývači. Důkladně očistěte skluznici, boky i horní část lyže.
                    </p>
                    <div class="flex items-start p-4 bg-sky-50 rounded-xl">
                        <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm text-sky-800">
                            <strong>Tip:</strong> Na skluzné části je vhodnější používat přípravky typu cleaner, které jsou ke skluznici šetrnější. Smývač nikdy nelijte přímo na skluznici.
                        </p>
                    </div>
                </div>

                <!-- Parafinování -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-sky-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Parafinování lyží na léto</h2>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Na skluznou část lyže naneste měkký parafín, který během léta chrání skluznici před oxidací. Někteří servisní technici doporučují použít i o něco tvrdší vosky, které se při vyšších letních teplotách nerozpouštějí tak rychle. Fluorové vosky zde nepřinášejí oproti běžným parafínům žádnou výhodu.
                    </p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Servisní žehličku nastavte na nižší teplotu, aby nedošlo k přehřátí skluznice. Parafín rovnoměrně roztavte od špičky k patce a vytvořte souvislou, dostatečně silnou vrstvu. Tak se vosk lépe dostane do pórů skluznice a zároveň do sebe naváže zbylé nečistoty.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li v-for="tip in waxTips" :key="tip" class="flex items-start">
                            <span class="w-5 h-5 bg-emerald-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                <svg class="w-3 h-3 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="text-gray-700 text-sm leading-relaxed">{{ tip }}</span>
                        </li>
                    </ul>
                    <div class="flex items-start p-4 bg-amber-50 rounded-xl">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <p class="text-sm text-amber-800">
                            <strong>Pozor:</strong> U lyží pro klasický styl není nutné vosk aplikovat do stoupací zóny. Ochranný vosk ze skluzných částí odstraňte až před první vyjížďkou příští sezóny.
                        </p>
                    </div>
                </div>

                <!-- Uskladnění -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-sky-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Jak lyže správně uskladnit</h2>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div v-for="item in storage" :key="item.title" class="bg-slate-50 rounded-xl p-4 text-center">
                            <div class="text-2xl mb-2">{{ item.icon }}</div>
                            <div class="text-sm font-semibold text-gray-800 mb-1">{{ item.title }}</div>
                            <div class="text-xs text-gray-500 leading-relaxed">{{ item.text }}</div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</template>

<script setup>
// Obnoveno z produkce (rociski.cz, nasazeno 2026-04-06) — zdrojový soubor chyběl v gitu.
const waxTips = [
    'Žehličkou pohybujte pomalu a plynule od špičky k patce.',
    'Pokud se vosk někde rychle vsakuje, přidejte další vrstvu.',
    'Silnější vrstva vosku lépe chrání před prachem i oxidací.',
]

const storage = [
    { icon: '🌡️', title: 'Sucho a chlad', text: 'Skladujte na suchém a chladném místě, mimo přímé sluneční záření.' },
    { icon: '🎿', title: 'Volně svázané', text: 'Pásky příliš neutahujte – lyže by neměly být celé léto pevně stažené k sobě.' },
    { icon: '👜', title: 'V lyžařském vaku', text: 'Vak zabrání prašení a ochrání lyže před poškozením.' },
]

useSeoMeta({
    title: 'Zaletnění lyží – jak uskladnit běžky přes léto',
    description: 'Praktický návod, jak po sezóně správně očistit, naparafínovat a uskladnit běžky, aby zůstaly v perfektní kondici.',
    ogImage: 'https://rociski.cz/img/prednaska.jpg',
})
</script>
