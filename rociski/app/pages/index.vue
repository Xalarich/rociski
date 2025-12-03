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
                        Jsme Adéla a Jiří Ročárkovi – bývalí závodníci v dálkových bězích na lyžích s bohatými zkušenostmi z mezinárodních soutěží.
                    </p>
                    <p>
                        Nabízíme výuku běžeckého lyžování pro všechny úrovně, od úplných začátečníků po pokročilé lyžaře. Působíme v srdci Vysočiny nedaleko Nového Města na Moravě.
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
useHead({
  title: 'Ročiski – Výuka běžeckého lyžování',
  meta: [
    { name: 'description', content: 'Jsme Adéla a Jiří Ročárkovi – bývalí závodníci v dálkových bězích na lyžích. Nabízíme výuku běžeckého lyžování pro všechny úrovně v srdci Vysočiny.' }
  ]
})
</script>
