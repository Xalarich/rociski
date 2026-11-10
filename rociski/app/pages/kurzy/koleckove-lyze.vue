<template>
    <div class="relative min-h-[800px] md:min-h-[calc(100vh-80px)] flex items-end justify-start">
        <!-- Background Image -->
        <div class="absolute inset-0 min-h-[800px]">
            <img 
                src="/img/koleckace.webp" srcset="/img/koleckace-960.webp 960w, /img/koleckace.webp 1200w" fetchpriority="high" sizes="100vw" 
                alt="Kolečkové lyže" 
                class="w-full h-full object-cover"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 items-center py-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-6 sm:p-8 max-w-lg shadow-lg rounded-2xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl italic text-gray-900 mb-4 md:mb-6">Kolečkové lyže</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm md:text-base leading-relaxed">
                    <p>Mimo zimní měsíce nabízíme kurzy tréninku na kolečkových lyžích na vhodných asfaltových cestách bez provozu v okolí Nového Města na Moravě na Vysočině. </p>
                    <p>I v létě se s tebou můžeme zaměřit na jakoukoliv z technik jízdy – ať už je to technika bruslení nebo klasická technika běhu na lyžích.</p>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script setup>
useSeoMeta({
  title: 'Kurz na kolečkových lyžích – Vysočina',
  description: 'Letní kurzy na kolečkových lyžích u Nového Města na Moravě. Technika bruslení i klasiky jako příprava na zimu.',
  ogImage: 'https://rociski.cz/img/koleckace.jpg',
})
</script>
