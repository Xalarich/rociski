<template>
    <div class="relative min-h-[calc(100vh-80px)] flex items-start lg:landscape:items-end justify-start">
        <!-- Background Image -->   
        <!-- Fotka na výšku displeje: sticky drží záběr při scrollu, overflow-clip (ne hidden) sticky nezruší -->
        <div class="absolute inset-0 overflow-clip">
            <img 
                src="/img/servis.webp" srcset="/img/servis-960.webp 960w, /img/servis.webp 1920w" fetchpriority="high" sizes="100vw" 
                alt="Servis a mazání běžek" 
                class="sticky top-0 w-full h-screen max-h-full object-cover object-center"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex justify-start items-center py-8 pt-[50svh] lg:landscape:pt-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-6 sm:p-8 max-w-lg shadow-lg rounded-2xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl italic text-gray-900 mb-4 md:mb-6">Servis běžek</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm md:text-base leading-relaxed">
                    <p>Potřebuješ nachystat lyže na trénink nebo závod? Zajistíme ti profesionální servis běžek na Vysočině. Poradíme, jak namazat běžky stoupacími i skluznými vosky. Naše služby můžete využít v letošní sezóně 2026/27 přímo na 3 Zinnen maratonu v Toblachu, dále budeme přítomni na slavné italské Marcialonze, domácí Jizerské 50 a podle zájmu na Gsieser Tal Laufu. Běžky ti samozřejmě rádi namažeme i doma na Vysočině u Nového Města na Moravě.</p>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script setup>
useSeoMeta({
  title: 'Servis běžek Nové Město na Moravě',
  description: 'Servis a mazání běžek u Nového Města na Moravě na trénink i závod. V sezóně 2026/27 také na 3 Zinnen, Marcialonze a Jizerské 50.',
  ogImage: 'https://rociski.cz/img/servis.jpg',
})
</script>
