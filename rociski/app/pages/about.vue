<template>
    <div class="relative min-h-[calc(100vh-80px)]">
        <!-- Background Image -->
        <div class="absolute inset-0 min-h-[800px]">
            <img 
                src="/img/main.jpg" 
                alt="Cross-country skiing" 
                class="w-full h-full object-cover object-[65%_10%] sm:object-[2%_10%] lg:object-[0%_10%]"
            />
        </div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex items-start py-8 px-4 md:px-8 lg:px-16">
            <!-- Text Box -->
            <div class="bg-white/80 backdrop-blur-xs px-6 py-4 max-w-lg shadow-lg rounded-2xl">
                <h1 class="text-3xl italic text-gray-900 mb-1">O NÁS</h1>
                
                <div class="space-y-4 text-gray-800 italic text-sm leading-relaxed">
                    <p>
                        Už je to pár let, co jsme se závoděním skončili. Byla to poměrně dlouhá cesta, během níž jsme se snažili zdokonalovat nejen z hlediska fyzické kondice, ale také techniky běhu na lyžích. Kdybychom měli na začátku tolik znalostí, kolik jsme jich měli na konci kariéry, všechno by bylo snazší a výsledky možná ještě lepší. Rádi bychom předali nabyté zkušenosti dalším lyžařům bez ohledu na jejich výkonnost.
                    </p>
                    
                    <p>
                        Adéla Boudíková (nyní Ročárková) se dostala k běžkám a závodění až na vysoké škole, ale s o to větším zápalem se do sportu vrhla. Nejlepší umístění, které získala v seriálu Ski Classics, bylo 2x 4. a 5. místo a dále vyhrála několik závodů ze série Worldloppet a Euroloppet.
                    </p>
                    
                    <p>
                        Jiří Ročárek se sice narodil do lyžařské rodiny, ale běžky začal brát vážně až od 15 let. Závodil v klasickém lyžování, velmi brzy se však přeorientoval na dálkové běhy, které mu seděly. Stal se dvojnásobným Mistrem Evropy v dálkových bězích, drží rekordních 10 vítězství na Jizerské 25 a ve Ski Classics se často pohyboval mezi nejlepšími 20 - 30 závodníky. Dále je několikanásobným medailistou ve Worldloppetu a vítězem mnoha závodů Euroloppetu.
                    </p>
                    
                    <p>
                        Nepatřili jsme sice mezi absolutní profesionály a částečně vedle trénování pracovali, ale snažili jsme sportu dávat maximum. Závodní kariéra nám přinesla hezké vzpomínky, kdy jsme procestovali celou řadu krásných míst po celé Evropě a potkali mnoho milých lidí.
                    </p>
                    
                    <p>
                        Nyní jsme usazeni v srdci Vysočiny nedaleko Nového Města na Moravě, máme spolu tři děti a sport je pro nás stále velmi důležitý.
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script setup>
useSeoMeta({
  title: 'O nás | Ročiski',
  description: 'Adéla a Jiří Ročárkovi – dvojnásobný Mistr Evropy v dálkových bězích a vítězka Worldloppetu. Předáváme zkušenosti dalším lyžařům na Vysočině.',
  ogTitle: 'O nás | Ročiski',
  ogDescription: 'Adéla a Jiří Ročárkovi – dvojnásobný Mistr Evropy v dálkových bězích. Předáváme zkušenosti dalším lyžařům.',
  ogUrl: 'https://rociski.cz/about',
})
</script>
