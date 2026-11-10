<template>
    <div class="relative min-h-[calc(100vh-80px)] flex items-start lg:landscape:items-end justify-end">
        <!-- Background Image -->
        <!-- Fotka na výšku displeje: sticky drží záběr při scrollu, overflow-clip (ne hidden) sticky nezruší -->
        <div class="absolute inset-0 overflow-clip">
            <img 
                src="/img/pruvodce.webp" srcset="/img/pruvodce-960.webp 960w, /img/pruvodce.webp 1920w" fetchpriority="high" sizes="100vw" 
                alt="Průvodce srdcem Vysočiny" 
                class="sticky top-0 w-full h-screen max-h-full object-cover object-center"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex justify-start items-center py-8 pt-[50svh] lg:landscape:pt-8 px-4 md:px-8 lg:px-16">
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
  title: 'Průvodce po Vysočině – kolo i pěší výlety',
  description: 'Provedeme vás po nejhezčích místech Žďárských vrchů a singltrecích kolem Vysočina Areny. Výlety na kole i pěšky, možnost zapůjčení kol.',
  ogImage: 'https://rociski.cz/img/pruvodce.jpg',
})
</script>
