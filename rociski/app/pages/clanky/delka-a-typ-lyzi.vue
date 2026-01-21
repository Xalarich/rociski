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
                    <li class="text-gray-800">Délka a typ lyží</li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-2xl sm:text-3xl font-light text-gray-800 mb-4 leading-tight">
                    Délka a typ lyží: Kompletní průvodce výběrem běžek pro začátečníky, sportovce a závodníky
                </h1>
                <div class="w-24 h-1 bg-sky-500"></div>
            </header>

            <!-- Featured Image -->
            <div class="mb-10 rounded-2xl overflow-hidden shadow-lg">
                <img 
                    src="/img/servis.jpg" 
                    alt="Běžecké lyže"
                    class="w-full h-auto object-cover"
                />
            </div>

            <!-- Article Content -->
            <article class="prose prose-lg max-w-none">
                <!-- Intro -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <p class="text-gray-700 leading-relaxed">
                        Přemýšlíte nad novým běžkařským vybavení? Ať už jste začátečník, turista, výkonnostní lyžař či závodník, tento průvodce vám pomůže zorientovat se v typech běžek a zvolit si správnou délku.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-4">
                        Na základě vaší fyzické zdatnosti a stylu jízdy rozdělujeme běžky do několika hlavních kategorií.
                    </p>
                </div>

                <!-- Section 1: Typy běžeckých lyží -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-sky-700 font-bold text-lg">1</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Typy běžeckých lyží (Podle technologie a použití)</h2>
                    </div>

                    <!-- A) Nemazací běžky -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center mr-3 text-amber-700 font-bold text-sm">A</span>
                            Nemazací běžky (NO WAX)
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Tyto lyže jsou oblíbené hlavně u turistů, ale také zdatnějších lyžařů, protože eliminují nutnost nanášení stoupacích vosků.
                        </p>

                        <!-- NO WAX Table -->
                        <div class="overflow-x-auto mb-6">
                            <table class="w-full min-w-[500px] border-collapse">
                                <thead>
                                    <tr class="border-b-2 border-sky-200 bg-sky-50">
                                        <th class="text-left py-3 px-4 font-semibold text-gray-700 text-sm">Technologie</th>
                                        <th class="text-left py-3 px-4 font-semibold text-gray-700 text-sm">Popis</th>
                                        <th class="text-left py-3 px-4 font-semibold text-gray-700 text-sm">Pro koho vhodné</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-100 hover:bg-sky-50 transition-colors">
                                        <td class="py-3 px-4 text-gray-700 text-sm font-medium">Lyže se šupinami</td>
                                        <td class="py-3 px-4 text-gray-600 text-sm">Mechanické drážkování pro odraz</td>
                                        <td class="py-3 px-4 text-gray-600 text-sm">Turisté, děti. Nejpomalejší, ale velmi jistý odraz.</td>
                                    </tr>
                                    <tr class="border-b border-gray-100 hover:bg-sky-50 transition-colors">
                                        <td class="py-3 px-4 text-gray-700 text-sm font-medium">Lyže s mohérem (Skin lyže)</td>
                                        <td class="py-3 px-4 text-gray-600 text-sm">Speciální vložka (skin) pro odraz</td>
                                        <td class="py-3 px-4 text-gray-600 text-sm">Rekreace, sportovní lyžaři. Rychlejší než šupiny, funguje ve většině podmínek.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="flex items-start p-4 bg-sky-50 rounded-xl mb-4">
                            <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm text-sky-800">
                                <strong>Údržba NO WAX lyží:</strong> Ačkoli nemusíte mazat stoupací vosk, o skluzné zóny (špička a pata) je nutné pečovat parafinováním. Skin lyže vyžadují navíc speciální spreje proti namrzání a také čističe, které skin zbavují nachytaných nečistot.
                            </p>
                        </div>

                        <div class="flex items-start p-4 bg-amber-50 rounded-xl">
                            <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <p class="text-sm text-amber-800">
                                <strong>Zero lyže (Mikrokontakty):</strong> Speciální model, u něhož se v místě odrazové zóny rozbrousí skluznice smirkovým papírem, vhodný pouze na čerstvý mokrý sníh (často používaný závodníky ve specifických podmínkách).
                            </p>
                        </div>
                    </div>

                    <!-- B) Univerzální běžky -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center mr-3 text-amber-700 font-bold text-sm">B</span>
                            Univerzální (Kombi) běžky
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Jde o hybridní modely navržené pro klasickou i volnou techniku. Jsou kompromisem v délce a tvrdosti.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="flex items-start p-4 bg-emerald-50 rounded-xl">
                                <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-sm text-emerald-800">
                                    <strong>Výhoda:</strong> Umožní jezdit oběma styly s jedním párem.
                                </p>
                            </div>
                            <div class="flex items-start p-4 bg-red-50 rounded-xl">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-sm text-red-800">
                                    <strong>Nevýhoda:</strong> Mohou být příliš měkké na bruslení (nepohodlné) a nebo příliš tvrdé na klasiku (obtížný odraz).
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- C) Backcountry běžky -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <span class="w-8 h-8 bg-amber-100 rounded-full flex items-center justify-center mr-3 text-amber-700 font-bold text-sm">C</span>
                            Backcountry (BC) lyže
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Jsou určeny pro jízdu mimo upravené běžecké stopy v hlubším sněhu.
                        </p>
                        <div class="bg-gray-50 rounded-xl p-4">
                            <p class="text-sm text-gray-700 mb-2">
                                <strong>Vlastnosti:</strong> Jsou širší, často vybavené ocelovými hranami pro lepší stabilitu na zledovatělém povrchu. Vyznačují se vyšší hmotností.
                            </p>
                            <p class="text-sm text-gray-700">
                                <strong>Délka:</strong> Cca 10 až 15 cm nad výšku postavy.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Výběr lyží podle výkonnosti -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-sky-700 font-bold text-lg">2</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Výběr lyží podle výkonnosti a délky</h2>
                    </div>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Rozdělení lyžařů pomůže určit správnou tvrdost a délku lyží:
                    </p>

                    <!-- Main Table -->
                    <div class="overflow-x-auto mb-6">
                        <table class="w-full min-w-[700px] border-collapse">
                            <thead>
                                <tr class="border-b-2 border-sky-200 bg-sky-50">
                                    <th class="text-left py-3 px-3 font-semibold text-gray-700 text-sm">Skupina</th>
                                    <th class="text-left py-3 px-3 font-semibold text-gray-700 text-sm">Charakteristika</th>
                                    <th class="text-left py-3 px-3 font-semibold text-gray-700 text-sm">Typ lyží</th>
                                    <th class="text-left py-3 px-3 font-semibold text-gray-700 text-sm">Doporučená délka</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-100 hover:bg-sky-50 transition-colors align-top">
                                    <td class="py-4 px-3 text-gray-700 text-sm font-medium flex flex-col items-center w-full gap-1">
                                        <span class="inline-flex items-center justify-center w-6 h-6 bg-sky-100 rounded-full text-sky-700 font-bold text-xs">1</span>
                                        <span class="text-center">Turisté</span>
                                    </td>
                                    <td class="py-4 px-3 text-gray-600 text-sm">Relax, rodinné výlety, méně zdatná technika. Vyžadují snadný odraz a jistotu.</td>
                                    <td class="py-4 px-3 text-gray-600 text-sm">Měkčí lyže (klasika, šupiny, skin).</td>
                                    <td class="py-4 px-3 text-gray-600 text-sm">
                                        <strong>Klasika:</strong> ≈15 až 25 cm vyšší než lyžař<br>
                                        <strong>Skate:</strong> ≈5 až 10 cm vyšší (začátečníci raději kratší)
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-100 hover:bg-sky-50 transition-colors align-top">
                                    <td class="py-4 px-3 text-gray-700 text-sm font-medium flex flex-col items-center w-full gap-1">
                                        <span class="inline-flex items-center justify-center w-6 h-6 bg-sky-100 rounded-full text-sky-700 font-bold text-xs">2</span>
                                        <span class="text-center">Sportovní lyžaři</span>
                                    </td>
                                    <td class="py-4 px-3 text-gray-600 text-sm">Pravidelný sport, chtějí dobrý skluz a výkon. Ocení kvalitnější skluznici.</td>
                                    <td class="py-4 px-3 text-gray-600 text-sm">Závodní/Sportovní modely (klasika, skin, skate). Vyhýbat se kombi a šupinám.</td>
                                    <td class="py-4 px-3 text-gray-600 text-sm">
                                        <strong>Klasika:</strong> ≈20 až 30 cm vyšší než lyžař<br>
                                        <strong>Skate:</strong> ≈5 až 15 cm vyšší (záleží na technice)
                                    </td>
                                </tr>
                                <tr class="hover:bg-sky-50 transition-colors align-top">
                                    <td class="py-4 px-3 text-gray-700 text-sm font-medium flex flex-col items-center w-full gap-1">
                                        <span class="inline-flex items-center justify-center w-6 h-6 bg-sky-100 rounded-full text-sky-700 font-bold text-xs">3</span>
                                        <span class="text-center">Závodníci</span>
                                    </td>
                                    <td class="py-4 px-3 text-gray-600 text-sm">Maximální výkon, často více párů lyží pro různé podmínky.</td>
                                    <td class="py-4 px-3 text-gray-600 text-sm">Výhradně závodní modely (klasika, skate). Vyhýbat se kombi a šupinám.</td>
                                    <td class="py-4 px-3 text-gray-600 text-sm">
                                        <strong>Klasika:</strong> ≈25 až 30 cm vyšší než lyžař<br>
                                        <strong>Skate:</strong> 10 až 15 cm vyšší
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Section 3: Další poznámky -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Další poznámky k výběru</h2>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                            <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                            <p class="text-sm text-gray-700">
                                <strong>Hmotnost a tvrdost:</strong> Řiďte se hmotnostním štítkem na lyži, nebo doporučením prodejce. Zkušení lyžaři s dobrou technikou si mohou dovolit lyže určené pro postavu o pár kg těžší, než jsou oni sami (díky silnějšímu odrazu).
                            </p>
                        </div>

                        <div class="flex items-start p-4 bg-emerald-50 rounded-xl">
                            <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm text-emerald-800">
                                <strong>Posuvné vázání:</strong> Skvělá volba! Umožňuje posunout těžiště vpřed nebo vzad, a tím korigovat odraz a skluz, což pomáhá doladit lyži, která vám sedne "téměř" dokonale. Výborné v případě skinů, kdy je těžké odhadnout přesnou tuhost lyží.
                            </p>
                        </div>

                        <div class="flex items-start p-4 bg-sky-50 rounded-xl">
                            <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-sm text-sky-800">
                                <strong>Tipy pro mládež:</strong> Závodní lyže se vyrábí i v juniorských délkách pro nižší váhové kategorie, které mohou být vhodné také pro menší ženy. Jsou cenově mnohem dostupnější, ale liší se kvalitou skluznice.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</template>

<script setup>
useSeoMeta({
    title: 'Délka a typ lyží | Průvodce výběrem běžek',
    description: 'Kompletní průvodce výběrem běžeckých lyží. Jakou délku zvolit pro začátečníky, sportovce a závodníky. Typy běžek: šupiny, skin, kombi, backcountry.',
    ogTitle: 'Délka a typ lyží | Ročiski',
    ogDescription: 'Kompletní průvodce výběrem běžeckých lyží pro začátečníky, sportovce a závodníky.',
    ogUrl: 'https://rociski.cz/clanky/delka-a-typ-lyzi',
    ogImage: 'https://rociski.cz/img/servis.jpg',
})
</script>
