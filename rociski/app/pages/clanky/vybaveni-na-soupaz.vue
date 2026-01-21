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
                    <li class="text-gray-800">Vybavení na soupaž</li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-2xl sm:text-3xl font-light text-gray-800 mb-4 leading-tight">
                    Jak vybrat vybavení na soupaž: Ideální délka holí, boty a lyže pro dálkové běhy
                </h1>
                <div class="w-24 h-1 bg-sky-500"></div>
            </header>

            <!-- Featured Image -->
            <div class="mb-10 rounded-2xl overflow-hidden shadow-lg">
                <img 
                    src="/img/clanky/soupaz.jpg" 
                    alt="Vybavení na soupaž"
                    class="w-full h-auto object-cover"
                />
            </div>

            <!-- Article Content -->
            <article class="prose prose-lg max-w-none">
                <!-- Lyže Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <!-- Ski icon -->
                            <img src="/img/clanky/ski.svg" class="w-6 h-6" alt="Lyže" />
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Lyže</h2>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Určitě si nemusíte pořizovat nové speciální lyže na soupaž, ale kvalitní lyže, ať už klasické nebo bruslařské jsou obrovskou výhodou. Jestli vlastníte pouze jedny, nebo uvažujete o jejich koupi, zvolte pro laufařské závody univerzální skluznici s univerzální strukturou, které jsou nejvhodnější pro sněhové podmínky ve střední Evropě.
                    </p>

                    <div class="flex items-start p-4 bg-amber-50 rounded-xl">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <p class="text-sm text-amber-800">
                            <strong>Důležité:</strong> Nikdy soupažové lyže nerozbrušujte, nebo jestli máte nějaké s rozbroušenou stoupací komorou, tak je na závody, které budete chtít objet soupaží, nepoužívejte. Může se zdát, že když rozbroušenou zónu dobře zaparafinujete a vosk strhnete, že je to v pohodě. Ale při každém pohybu a přenosu těžiště nad lyži vás bude rozbroušená část přibržďovat v místě dotyku stoupací komory a sněhové podložky a v závodě tím můžete ztratit cenné minuty.
                        </p>
                    </div>
                </div>

                <!-- Boty Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <!-- Boot/shoe icon -->
                            <svg class="w-6 h-6 text-sky-700" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18,11H15V2a1,1,0,0,0-1-1H4A1,1,0,0,0,3,2V20a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V16A5.006,5.006,0,0,0,18,11ZM13,3v9a1,1,0,0,0,1,1h4a3,3,0,0,1,3,3v2H5V3Zm7,18H6a1,1,0,0,1-1-1H21A1,1,0,0,1,20,21Z"/>
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Boty</h2>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Pro soupažáky - začátečníky bychom spíš doporučili boty na bruslení, které mají zpevněný kotník a snadněji na nich udržíte rovnováhu. Rozhodně nejsou na škodu zateplenější modely bot než závodní karbonové, ve kterých vám snadno při soupaži zmrznou nohy.
                    </p>

                    <div class="flex items-start p-4 bg-sky-50 rounded-xl">
                        <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm text-sky-800">
                            <strong>Tip:</strong> Při nižších teplotách se dají využít návleky přes boty, nebo hřejivé polštářky, které vložíte do boty a několik hodin vás mohou hřát.
                        </p>
                    </div>
                </div>

                <!-- Hole Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <!-- Pole icon -->
                            <img src="/img/clanky/poles.svg" class="w-8 h-8" alt="Hole" />
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Hole</h2>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Hůlky se vyplatí mít lehčí, ale v hromadných startech hrozí kolize a zlomení holí, takže je dobré zvolit kompromis mezi cenou a výkonem. Pokud se nevyvarujete zlomení hole, existuje u nás pár opraven, které jsou schopné spravit jak 100% karbonové hole, tak i kompozitní s nižším obsahem karbonu za velice přijatelnou cenu.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Délka holí je ve Ski Classics dána 83% výšky lyžaře včetně podrážky bot, ale na jiných závodech toto pravidlo neplatí, takže tam si můžete délku uzpůsobit podle potřeby.
                    </p>

                    <div class="flex items-start p-4 bg-emerald-50 rounded-xl">
                        <svg class="w-5 h-5 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm text-emerald-800">
                            <strong>Doporučení:</strong> Na rovinatějších závodech se vyplatí mít delší hole, na kopcovitějších kratší.
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</template>

<script setup>
useSeoMeta({
    title: 'Jak vybrat vybavení na soupaž | Lyže, boty a hole pro dálkové běhy',
    description: 'Kompletní průvodce výběrem vybavení na soupaž. Jaké lyže, boty a hole zvolit pro dálkové běžecké závody. Tipy pro začátečníky i pokročilé soupažáky.',
    ogTitle: 'Vybavení na soupaž | Ročiski',
    ogDescription: 'Jak vybrat ideální lyže, boty a hole pro soupaž a dálkové běžecké závody.',
    ogUrl: 'https://rociski.cz/clanky/vybaveni-na-soupaz',
    ogImage: 'https://rociski.cz/img/clanky/soupaz.jpg',
})
</script>
