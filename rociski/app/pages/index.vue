<template>
    <div class="relative min-h-[calc(100vh-80px)] flex items-start justify-center lg:justify-start">
        <!-- Background Image -->
        <!-- Fotka na výšku displeje: sticky drží záběr při scrollu, overflow-clip (ne hidden) sticky nezruší -->
        <div class="absolute inset-0 overflow-clip">
            <img 
                src="/img/main.webp" srcset="/img/main-960.webp 960w, /img/main.webp 1920w" fetchpriority="high" sizes="100vw" 
                alt="Běžecké lyžování na Vysočině" 
                class="sticky top-0 w-full h-screen max-h-full object-cover object-[39%_50%] lg:landscape:object-[0%_50%]"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex items-start py-8 pt-[50svh] lg:landscape:pt-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs p-6 sm:p-8 max-w-md shadow-lg rounded-2xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl italic text-gray-900 mb-4 md:mb-6">Ročiski – škola běžeckého lyžování na Vysočině</h1>
                
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

                <div class="mt-6 flex flex-wrap gap-2 text-sm font-semibold">
                    <NuxtLink to="/kurzy/bezky" class="px-4 py-2 rounded-full bg-sky-700 text-white hover:bg-sky-800">Kurzy běžkování</NuxtLink>
                    <NuxtLink to="/servis-lyzi/servis" class="px-4 py-2 rounded-full bg-white text-sky-800 ring-1 ring-sky-200 hover:bg-sky-50">Servis běžek</NuxtLink>
                    <NuxtLink to="/cenik" class="px-4 py-2 rounded-full bg-white text-sky-800 ring-1 ring-sky-200 hover:bg-sky-50">Ceník</NuxtLink>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
useSeoMeta({
  title: 'Škola běžeckého lyžování na Vysočině',
  description: 'Kurzy běžkování u Nového Města na Moravě pro začátečníky i pokročilé. Klasika i bruslení s bývalými závodníky Adélou a Jiřím Ročárkovými.',
})
</script>
