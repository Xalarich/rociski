<template>
    <div class="relative min-h-[calc(100vh-80px)] flex items-end justify-center lg:items-start lg:justify-start">
        <!-- Background Image -->
        <div class="absolute inset-0 min-h-[800px]">
            <img 
                src="/img/main.jpg" 
                alt="Cross-country skiing" 
                class="w-full h-full object-cover object-[65%_10%] lg:object-[0%_10%]"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex items-start py-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-6 sm:p-8 max-w-md shadow-lg rounded-2xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl italic text-gray-900 mb-4 md:mb-6">Vítejte na stránkách Ročiski</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm md:text-base leading-relaxed">
                    <p>
                        Jsme Adéla a Jiří Ročárkovi – bývalí závodníci v dálkových bězích na lyžích a instruktoři běžkování s bohatými zkušenostmi z mezinárodních soutěží.
                    </p>
                    <p>
                        Nabízíme kurzy běžkování pro všechny úrovně – od úplných začátečníků po pokročilé lyžaře. Naše škola běžkování působí v srdci Vysočiny nedaleko Nového Města na Moravě, v oblasti Žďárských vrchů.
                    </p>
                    <p>
                        Rádi vám předáme naše zkušenosti a pomůžeme vám objevit krásu běžeckého lyžování.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
useSeoMeta({
  title: 'Ročiski – Kurz běžkování Vysočina | Škola běžkování Nové Město na Moravě',
  description: 'Kurzy běžkování a výuka běžkování na Vysočině. Instruktor běžkování Nové Město na Moravě. Individuální i skupinové kurzy běžkování, běžecké lyžování Žďárské vrchy.',
  ogTitle: 'Ročiski – Kurz běžkování Vysočina | Škola běžkování',
  ogDescription: 'Kurzy běžkování a výuka běžkování na Vysočině. Škola běžkování Nové Město na Moravě, Žďárské vrchy.',
  ogUrl: 'https://rociski.cz',
  twitterTitle: 'Ročiski – Kurz běžkování Vysočina | Výuka běžkování',
  twitterDescription: 'Kurzy běžkování a výuka běžkování na Vysočině. Instruktor běžkování Nové Město na Moravě.',
})
</script>
