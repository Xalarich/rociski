<template>
    <div class="relative min-h-[calc(100vh-80px)] flex items-start justify-end">
        <!-- Background Image -->
        <div class="absolute inset-0 min-h-[800px]">
            <img 
                src="/img/kurzy.jpg" 
                alt="Cross-country skiing" 
                class="w-full h-full object-cover object-[30%_0%] md:object-[75%_0%]"
            />
        </div> 
        
        <!-- Content Overlay -->
        <div class="relative z-10 py-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-6 sm:p-8 max-w-lg shadow-lg rounded-2xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl italic text-gray-900 mb-4 md:mb-6">Kurzy běžeckého lyžování</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm md:text-base leading-relaxed">
                    <p>Dva bývalí přední čeští laufaři by chtěli předat své zkušenosti a pomoct Ti se zlepšením techniky běhu na lyžích.</p>
                    <p>Chceš se zlepšit v klasickém, volném stylu či soupaži? Záleží na tobě, na co se chceš zaměřit. Jsi začátečník, pokročilý nebo závodník? Je nám to jedno, každému rádi pomůžeme.</p>
                    <p>Pokud podmínky dovolí, trénujeme v okolí mezi Novým Městem na Moravě, Vlachovicemi, Třemi Studněmi a Fryšavou. Skvělé podmínky bývají na Fryšavském ledovci. Když nebude přát počasí, můžeme se přesunout do Vysočina areny.</p>
                    <p>Po domluvě je možné za větší skupinou lyžařů dojet a udělat kurz i v jiné české lokalitě, nebo zahraničí.</p>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script setup>
useHead({
  title: 'Kurzy běžeckého lyžování | Ročiski',
  meta: [
    { name: 'description', content: 'Kurzy běžeckého lyžování pro začátečníky i pokročilé. Klasický styl, volný styl, soupaž. Trénujeme v okolí Nového Města na Moravě a Vysočina areny.' }
  ]
})
</script>
