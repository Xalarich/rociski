<template>
    <div class="relative min-h-[calc(100vh-80px)] flex items-start justify-end">
        <!-- Background Image -->
        <!-- Fotka na výšku displeje: sticky drží záběr při scrollu, overflow-clip (ne hidden) sticky nezruší -->
        <div class="absolute inset-0 overflow-clip">
            <img 
                src="/img/kurzy.webp" srcset="/img/kurzy-960.webp 960w, /img/kurzy.webp 1920w" fetchpriority="high" sizes="100vw" 
                alt="Kurz běžkování u Nového Města na Moravě" 
                class="sticky top-0 w-full h-screen max-h-full object-cover object-[33%_50%] lg:landscape:object-[75%_85%]"
            />
        </div> 
        
        <!-- Content Overlay -->
        <div class="relative z-10 py-8 pt-[50svh] lg:landscape:pt-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-6 sm:p-8 max-w-lg shadow-lg rounded-2xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl italic text-gray-900 mb-4 md:mb-6">Kurzy běžkování</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm md:text-base leading-relaxed">
                    <p>Dva bývalí přední čeští laufaři by chtěli předat své zkušenosti a pomoct Ti se zlepšením techniky běhu na lyžích. Nabízíme individuální výuku běžkování i skupinové kurzy běžkování.</p>
                    <p>Chceš se zlepšit v klasice? Přijď na výuku klasiky na běžkách. Nebo tě zajímá běžkování skatem? Nabízíme kurz bruslení, kde tě naučíme vše co se týče techniky. Jsi začátečník, pokročilý nebo závodník? Je nám to jedno, každému rádi pomůžeme.</p>
                    <p>Nevíš, kam na běžky na Vysočině? Trénujeme v okolí mezi Novým Městem na Moravě, Vlachovicemi, Třemi Studněmi a Fryšavou ve Žďárských vrších. Skvělé podmínky bývají na Fryšavském ledovci. Běžky Vysočina aréna – když nebude přát počasí, můžeme se přesunout právě tam.</p>
                    <p>Po domluvě je možné za větší skupinou lyžařů dojet a udělat kurz na běžkách i v jiné české lokalitě nebo zahraničí.</p>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script setup>
useSeoMeta({
  title: 'Kurz běžkování a běžeckého lyžování na Vysočině',
  description: 'Individuální i skupinové kurzy běžeckého lyžování u Nového Města na Moravě. Klasika i bruslení pro začátečníky, pokročilé i závodníky. Od 1 200 Kč.',
  ogImage: 'https://rociski.cz/img/kurzy.jpg',
})
</script>
