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
                    <li class="text-gray-800">Délka holí</li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-2xl sm:text-3xl font-light text-gray-800 mb-4 leading-tight">
                    Jakou zvolit délku holí pro jednotlivé techniky běhu na lyžích
                </h1>
                <div class="w-24 h-1 bg-sky-500"></div>
            </header>

            <!-- Featured Image -->
            <div class="mb-10 rounded-2xl overflow-hidden shadow-lg">
                <img 
                    src="/img/clanky/delka-holi.jpg" 
                    alt="Délka holí pro běžky"
                    class="w-full h-auto object-cover"
                />
            </div>

            <!-- Article Content -->
            <article class="prose prose-lg max-w-none">
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10 mb-8">
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Než se pustíte do výběru běžeckých holí, je zásadní si ujasnit, pro jaký styl jízdy je budete používat. Pro bruslařskou techniku se volí delší hole, zatímco pro klasický styl jsou vhodnější kratší varianty.
                    </p>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Výrobci běžně nabízejí hole pro dospělé v rozmezí přibližně 140 až 175 cm, zpravidla po pěti centimetrech. Pokud vám žádná z nabízených délek zcela nevyhovuje, není úprava hole na požadovaný rozměr nijak složitá. Pomoc vám mohou poskytnout ve specializovaném servisu, případně si lze délku upravit i svépomocí.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Je však dobré mít na paměti, že udávaná délka hole nemusí být u všech značek zcela srovnatelná. Konstrukce madel holí se totiž u jednotlivých výrobců liší a rozdíl může být i 2-3 cm. Důležité je měřit délku hole od hrotu po místo uchycení poutka do madla.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Ideální délka holí se může lišit podle individuálních preferencí každého lyžaře, přesto existují obecná doporučení. U klasického stylu by hole měly sahat přibližně do podpaží, u bruslení zhruba k bradě nebo rtům. Délka holí určených pro soupaž je pak stanovena pravidly FIS (Mezinárodní lyžařská federace), která určují maximální délku na 83 % výšky postavy závodníka. Toto omezení bylo zavedeno s cílem omezit využívání soupaže v závodech a ztížit podmínky zejména těm, kteří volí jízdu na lyžích bez vosku.
                    </p>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-10">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                            </svg>
                        </div>
                        <h2 class="text-lg md:text-xl font-semibold text-gray-800">Tabulka doporučených délek holí</h2>
                    </div>

                    <!-- Responsive Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[400px]">
                            <thead>
                                <tr class="border-b-2 border-sky-200">
                                    <th class="text-left py-4 px-2 sm:px-4 font-semibold text-gray-700 text-xs sm:text-sm md:text-base">
                                        Výška lyžaře (cm)
                                    </th>
                                    <th class="text-center py-4 px-2 sm:px-4 font-semibold text-gray-700 text-xs sm:text-sm md:text-base">
                                        <span class="text-sky-700">Klasický styl (cm)</span>
                                    </th>
                                    <th class="text-center py-4 px-2 sm:px-4 font-semibold text-gray-700 text-xs sm:text-sm md:text-base">
                                        <span class="text-emerald-700">Bruslení / Skate (cm)</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(row, index) in poleData" :key="row.height" 
                                    class="border-b border-gray-100 hover:bg-sky-50 transition-colors"
                                    :class="{ 'bg-gray-50': index % 2 === 1 }"
                                >
                                    <td class="py-4 px-2 sm:px-4 text-gray-800 font-medium text-xs sm:text-sm md:text-base">
                                        <div class="flex items-center">
                                            <span class="w-6 h-6 sm:w-8 sm:h-8 bg-sky-100 rounded-full flex items-center justify-center text-sky-700 font-semibold mr-2 sm:mr-3 text-xs sm:text-sm">
                                                {{ row.height }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 text-center font-semibold text-sky-700 text-xs sm:text-sm md:text-base">
                                        {{ row.classic }}
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 text-center font-semibold text-emerald-700 text-xs sm:text-sm md:text-base">
                                        {{ row.skate }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Note -->
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <p class="text-sm text-gray-500 italic">
                            <strong>Poznámka:</strong> Tabulka vychází z orientačního pravidla, že hole pro klasiku odpovídají přibližně 83 % výšky postavy a bruslařské hole asi 90 % výšky postavy.
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</template>

<script setup>
const poleData = [
    { height: 150, classic: 125, skate: 135 },
    { height: 155, classic: 130, skate: 140 },
    { height: 160, classic: 135, skate: 145 },
    { height: 165, classic: 140, skate: 150 },
    { height: 170, classic: 145, skate: 155 },
    { height: 175, classic: 150, skate: 160 },
    { height: 180, classic: 155, skate: 165 },
    { height: 185, classic: 160, skate: 170 },
    { height: 190, classic: 165, skate: 175 },
]

useSeoMeta({
    title: 'Jakou zvolit délku holí pro běžky | Tabulka doporučených délek',
    description: 'Jak vybrat správnou délku běžeckých holí pro klasický styl a bruslení. Tabulka doporučených délek holí podle výšky lyžaře.',
    ogTitle: 'Délka holí pro běžky | Ročiski',
    ogDescription: 'Jak vybrat správnou délku běžeckých holí. Tabulka doporučených délek pro klasiku a skate.',
    ogUrl: 'https://rociski.cz/clanky/delka-holi',
    ogImage: 'https://rociski.cz/img/clanky/delka-holi.jpg',
})
</script>
