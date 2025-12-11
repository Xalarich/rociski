<template>
    <div class="relative min-h-[800px] md:min-h-[calc(100vh-80px)] flex items-end justify-end">
        <!-- Background Image -->
        <div class="absolute inset-0 min-h-[800px]">
            <img 
                src="/img/pruvodce.jpg" 
                alt="Průvodce srdcem Vysočiny" 
                class="w-full h-full object-cover"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex justify-start items-center py-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-6 sm:p-8 max-w-lg shadow-lg rounded-2xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl italic text-gray-900 mb-4 md:mb-6">Průvodce srdcem Vysočiny</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm md:text-base leading-relaxed">
                    <p>Chceš si zasportovat a přitom poznat krásy Vysočiny i mimo zimní měsíce? Chceš si projet na kole singltreky kolem Vysočina areny nebo poznat se svými blízkými nejmalebnější místa Žďárských vrchů? Můžeme vám udělat průvodce a zajistit i zapůjčení kol, nebo vyrazit pěšky po svých.</p>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script setup>
useSeoMeta({
  title: 'Průvodce srdcem Vysočiny | Ročiski',
  description: 'Průvodcování po Vysočině – singltreky kolem Vysočina areny, nejhezčí místa Žďárských vrchů. Výlety na kole i pěšky s možností zapůjčení kol.',
  ogTitle: 'Průvodce srdcem Vysočiny | Ročiski',
  ogDescription: 'Průvodcování po Vysočině – singltreky kolem Vysočina areny, nejhezčí místa Žďárských vrchů.',
  ogUrl: 'https://rociski.cz/kurzy/pruvodce',
  ogImage: 'https://rociski.cz/img/pruvodce.jpg',
})
</script>
