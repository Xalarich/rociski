<template>
    <div class="relative min-h-[calc(100vh-80px)] flex items-end justify-start">
        <!-- Background Image -->   
        <div class="absolute inset-0 min-h-[800px]">
            <img 
                src="/img/servis.jpg" 
                alt="Servis lyží" 
                class="w-full h-full object-cover"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex justify-start items-center py-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-6 sm:p-8 max-w-lg shadow-lg rounded-2xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl italic text-gray-900 mb-4 md:mb-6">Servis lyží</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm md:text-base leading-relaxed">
                    <p>Potřebuješ nachystat lyže na trénink, nebo závod? Zajistíme ti profesionální servis. Naše služby můžete využít v letošní sezóně 2025/26 přímo na závodě Toblach-Cortina, dále budeme přítomni i na slavné italské Marcialonze a domácí Jizerské 50.</p>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script setup>
useHead({
  title: 'Servis lyží | Ročiski',
  meta: [
    { name: 'description', content: 'Profesionální servis běžeckých lyží na závody. Přítomni na Toblach-Cortina, Marcialonga a Jizerské 50. Sezóna 2025/26.' }
  ]
})
</script>
