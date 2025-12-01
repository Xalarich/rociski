<template>
    <div class="relative min-h-[calc(100vh-96px)] flex items-start justify-start">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img 
                src="/img/prednaska.jpg" 
                alt="Přednášky o servisu lyží" 
                class="w-full h-full object-cover"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex justify-start items-center py-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-8 md:p-12 max-w-lg shadow-lg rounded-2xl">
                <h1 class="text-4xl md:text-5xl italic text-gray-900 mb-6">Přednášky o servisu lyží</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm md:text-base leading-relaxed">
                    <p>Pro větší skupinu lidí můžeme naplánovat přednášku o servisu lyží. Čas a místo je možné dohodnout po telefonické nebo emailové domluvě.</p>
                </div>
            </div>
        </div>
        
    </div>
</template>
