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
                    <li class="text-gray-800">Péče o NO WAX běžky</li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-2xl sm:text-3xl font-light text-gray-800 mb-4 leading-tight">
                    Péče o NO WAX běžky: Kompletní průvodce údržbou lyží se skinem, šupinami i nanogripem
                </h1>
                <div class="w-24 h-1 bg-sky-500"></div>
            </header>

            <!-- Featured Image -->
            <div class="mb-10 rounded-2xl overflow-hidden shadow-lg">
                <img 
                    src="/img/clanky/no-wax.jpg" 
                    alt="Péče o NO WAX běžky"
                    class="w-full h-auto object-cover"
                />
            </div>

            <!-- Article Content -->
            <article class="prose prose-lg max-w-none">
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Klasické běžecké lyže, které nevyžadují aplikaci stoupacího vosku, souhrnně označované jako NO WAX (nebo "nemazací" lyže), se staly fenoménem. Většina rekreačních běžkařů si je pořizuje, aby ušetřila čas a vyhnula se složitému mazání a následnému čištění lyží.
                    </p>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Ačkoli odpadá starost se stoupacími vosky, péče o tyto lyže je stále nezbytná. V dnešní době již výrobci nabízejí i modely odpovídající nejvyšším závodním standardům (zejména s mohérovým pásem – tzv. skin lyže).
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        I na NO WAX lyžích se mohou usazovat nečistoty, zbytky vosků či prach, které vedou ke zpomalování lyží ve fázi skluzu. Kritické jsou hlavně podmínky kolem 0 °C a na novém sněhu, kdy lyže snadno namrzají nebo začnou nepříjemně "drhnout". V extrémních případech je nutné namrzlou vrstvu mechanicky odstranit.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Pravidla údržby skluzné a odrazové části</h2>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        NO WAX lyže mají dvě klíčové zóny, které vyžadují odlišný přístup k údržbě: skluznou část (před a za odrazovou zónou) a odrazovou část (Skin, kožíšek, chlup, šupiny, nanogrip).
                    </p>

                    <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">1. Údržba skluzné části</h3>

                    <p class="text-gray-700 leading-relaxed mb-4">
                        Péče o skluzné zóny je stejná jako u jakýchkoli tradičních běžek.
                    </p>

                    <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                        <li>Před nanášením skluzného vosku je třeba skluznici řádně vyčistit.</li>
                        <li>Použijte běžný parafín (zažehlení, seškrábnutí, vykartáčování) pro dlouhodobou ochranu a rychlost.</li>
                        <li>Pro rychlou péči aplikujte tekuté skluzné vosky.</li>
                    </ul>

                    <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">2. Čištění odrazové zóny</h3>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Odrazovou zónu je nutné pravidelně udržovat čistou a skluznou, popřípadě ošetřenou přípravky proti namrzání a nečistotám.
                    </p>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                        <h2 class="text-lg md:text-xl font-semibold text-gray-800">Doporučené čisticí prostředky podle typu NO WAX technologie</h2>
                    </div>

                    <!-- Responsive Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[500px]">
                            <thead>
                                <tr class="border-b-2 border-sky-200">
                                    <th class="text-left py-4 px-2 sm:px-4 font-semibold text-gray-700 text-xs sm:text-sm md:text-base">
                                        Typ NO WAX Technologie
                                    </th>
                                    <th class="text-left py-4 px-2 sm:px-4 font-semibold text-gray-700 text-xs sm:text-sm md:text-base">
                                        <span class="text-sky-700">Doporučené čisticí prostředky</span>
                                    </th>
                                    <th class="text-left py-4 px-2 sm:px-4 font-semibold text-gray-700 text-xs sm:text-sm md:text-base">
                                        <span class="text-amber-700">Upozornění</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(row, index) in cleaningData" :key="row.type" 
                                    class="border-b border-gray-100 hover:bg-sky-50 transition-colors"
                                    :class="{ 'bg-gray-50': index % 2 === 1 }"
                                >
                                    <td class="py-4 px-2 sm:px-4 text-gray-800 font-medium text-xs sm:text-sm md:text-base">
                                        {{ row.type }}
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 text-sky-700 text-xs sm:text-sm md:text-base">
                                        {{ row.cleaners }}
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 text-amber-700 text-xs sm:text-sm md:text-base">
                                        {{ row.warning }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Warning Note -->
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <div class="flex items-start p-4 bg-amber-50 rounded-xl">
                            <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <p class="text-sm text-amber-800">
                                <strong>Důležité:</strong> U skin lyží s mohérovou vložkou nikdy nepoužívejte běžné smývače s rozpouštědly – mohou poškodit lepidlo a narušit soudržnost mohérové vložky!
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</template>

<script setup>
const cleaningData = [
    { 
        type: 'Šupiny a Nanogrip/Optigrip', 
        cleaners: 'Běžné smývače vosků', 
        warning: 'Žádné zvláštní omezení' 
    },
    { 
        type: 'Mohérová vložka (Skin lyže)', 
        cleaners: 'Výhradně smývače na lihové bázi (tzv. Cleanery)', 
        warning: 'Běžné smývače s rozpouštědly mohou poškodit lepidlo!' 
    },
]

useSeoMeta({
    title: 'Péče o NO WAX běžky | Údržba lyží se skinem, šupinami i nanogripem',
    description: 'Kompletní průvodce údržbou NO WAX běžek. Jak správně pečovat o lyže se skinem, šupinami a nanogripem. Tipy pro čištění a údržbu odrazové i skluzné zóny.',
    ogTitle: 'Péče o NO WAX běžky | Ročiski',
    ogDescription: 'Kompletní průvodce údržbou NO WAX běžek - skin lyže, šupiny, nanogrip.',
    ogUrl: 'https://rociski.cz/clanky/pece-o-no-wax-bezky',
    ogImage: 'https://rociski.cz/img/clanky/no-wax.jpg',
})
</script>
