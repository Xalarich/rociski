<template>
    <div class="bg-gradient-to-br from-slate-50 to-sky-50 py-16 px-4 min-h-[calc(100vh-216px)]">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-light text-gray-800 mb-4">Články</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Užitečné tipy a rady pro běžecké lyžování</p>
                <div class="w-24 h-1 bg-sky-500 mx-auto mt-4"></div>
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article Card -->
                <NuxtLink 
                    v-for="article in articles" 
                    :key="article.slug"
                    :to="`/clanky/${article.slug}`"
                    class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                >
                    <div class="aspect-video overflow-hidden">
                        <img 
                            :src="article.image" 
                            :alt="article.title"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 object-top"
                        />
                    </div>
                    <div class="p-6">
                        <h2 class="text-lg md:text-xl font-semibold text-gray-800 mb-3 group-hover:text-sky-700 transition-colors">
                            {{ article.title }}
                        </h2>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            {{ article.excerpt }}
                        </p>
                        <div class="flex items-center text-sky-600 font-medium text-sm">
                            <span>Číst více</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </NuxtLink>
            </div>
        </div>
    </div>
</template>

<script setup>
const articles = [
    {
        slug: 'delka-a-typ-lyzi',
        title: 'Délka a typ lyží: Průvodce výběrem běžek',
        excerpt: 'Přemýšlíte nad novým běžkařským vybavení? Ať už jste začátečník, turista, výkonnostní lyžař či závodník, tento průvodce vám pomůže zorientovat se v typech běžek a zvolit si správnou délku.',
        image: '/img/servis.jpg'
    },
    {
        slug: 'delka-holi',
        title: 'Jakou zvolit délku holí pro běžky',
        excerpt: 'Než se pustíte do výběru běžeckých holí, je zásadní si ujasnit, pro jaký styl jízdy je budete používat. Pro bruslařskou techniku se volí delší hole, zatímco pro klasický styl jsou vhodnější kratší varianty.',
        image: '/img/clanky/delka-holi.jpg'
    },
    {
        slug: 'pece-o-no-wax-bezky',
        title: 'Péče o NO WAX běžky',
        excerpt: 'Klasické běžecké lyže, které nevyžadují aplikaci stoupacího vosku, souhrnně označované jako NO WAX, se staly fenoménem. Ačkoli odpadá starost se stoupacími vosky, péče o tyto lyže je stále nezbytná.',
        image: '/img/clanky/no-wax.jpg'
    },
    {
        slug: 'vybaveni-na-soupaz',
        title: 'Jak vybrat vybavení na soupaž',
        excerpt: 'Určitě si nemusíte pořizovat nové speciální lyže na soupaž, ale kvalitní lyže jsou obrovskou výhodou. Zjistěte, jaké lyže, boty a hole zvolit pro dálkové běžecké závody.',
        image: '/img/clanky/soupaz.jpg'
    },
    {
        slug: 'soupaz-na-bezkach',
        title: 'Soupaž na běžkách: Průvodce pro začátečníky',
        excerpt: 'Stále častěji můžeme ve stopě potkat lyžaře, kteří se odpichují pouze holemi. Proč je soupaž tak výhodná a jak s ní začít? Kompletní průvodce pro začátečníky i pokročilé.',
        image: '/img/clanky/jak-na-soupaz.jpg'
    }
]

useSeoMeta({
    title: 'Články o běžkování | Tipy a rady pro běžecké lyžování',
    description: 'Články a tipy pro běžecké lyžování. Jak vybrat správnou délku holí, techniky běhu na lyžích a další užitečné informace pro běžkaře.',
    ogTitle: 'Články o běžkování | Ročiski',
    ogDescription: 'Užitečné články a tipy pro běžecké lyžování od zkušených instruktorů.',
    ogUrl: 'https://rociski.cz/clanky',
})
</script>
