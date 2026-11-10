<template>
    <div class="relative min-h-[800px] md:min-h-[calc(100vh-80px)] flex items-start justify-start">
        <!-- Background Image -->
        <div class="absolute inset-0 min-h-[800px]">
            <img 
                src="/img/prednaska.webp" srcset="/img/prednaska-960.webp 960w, /img/prednaska.webp 1920w" fetchpriority="high" sizes="100vw" 
                alt="Přednášky o servisu lyží" 
                class="w-full h-full object-cover"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex justify-start items-center py-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-6 sm:p-8 max-w-lg shadow-lg rounded-2xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl italic text-gray-900 mb-4 md:mb-6">Přednášky o servisu běžek</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm md:text-base leading-relaxed">
                    <p>Pro větší skupinu lidí můžeme naplánovat přednášku o servisu běžek. Naučíme vás, jak namazat běžky správně, vysvětlíme mazání běžek klistrem i vosky. Poradíme také, jak vybrat běžky pro vaše potřeby. Čas a místo je možné dohodnout po telefonické nebo emailové domluvě.</p>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script setup>
useSeoMeta({
  title: 'Kurz mazání běžek – přednášky o servisu',
  description: 'Přednášky o servisu a mazání běžek pro skupiny: stoupací a skluzné vosky, klistr i jak vybrat běžky. Termín a místo dle domluvy.',
  ogImage: 'https://rociski.cz/img/prednaska.jpg',
})
</script>
