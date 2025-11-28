<template>
    <div class="bg-gradient-to-br from-slate-50 to-sky-50 py-16 px-4 min-h-[calc(100vh-216px)]">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-light text-gray-800 mb-4">Dárkové poukazy</h1>
                <div class="w-24 h-1 bg-sky-500 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Nevíte co dát blízkým k Vánocům? Napište nám a zašleme vám poukaz.
                </p>
            </div>

            <!-- Gift Voucher Options -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <!-- Individual Lesson -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-2 border-transparent hover:border-sky-200">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-7 h-7 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Individuální lekce</h2>
                            <span class="text-sky-600 font-medium">od 1 400 Kč</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Osobní výuka běžeckého lyžování s plnou pozorností instruktora. Ideální pro začátečníky i pokročilé, kteří chtějí zlepšit techniku.
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-sky-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            1,5 hodiny výuky
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-sky-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Individuální přístup
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-sky-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Přizpůsobeno úrovni lyžaře
                        </li>
                    </ul>
                </div>

                <!-- Couple/Pair Lesson -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-2 border-transparent hover:border-sky-200">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-7 h-7 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Lekce pro dva</h2>
                            <span class="text-sky-600 font-medium">od 2 400 Kč</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Sdílený zážitek pro páry nebo přátele. Společné lyžování je zábavnější a můžete se navzájem motivovat.
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-sky-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            1,5 hodiny výuky pro 2 osoby
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-sky-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Společný zážitek
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-sky-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Výhodná cena
                        </li>
                    </ul>
                </div>

                <!-- Group Lesson -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-2 border-transparent hover:border-sky-200">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-7 h-7 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Skupinová lekce</h2>
                            <span class="text-sky-600 font-medium">od 3 000 Kč</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Ideální pro rodiny nebo partu přátel. Společné lyžování v krásné přírodě Vysočiny.
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-sky-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            1,5 hodiny výuky pro 3-4 osoby
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-sky-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Rodinná zábava
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-sky-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Nejlepší poměr cena/výkon
                        </li>
                    </ul>
                </div>

                <!-- Custom Voucher -->
                <div class="bg-gradient-to-br from-sky-500 to-sky-600 rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 text-white">
                    <div class="flex items-center mb-6">
                        <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold">Poukaz na míru</h2>
                            <span class="text-sky-100 font-medium">dle vašeho přání</span>
                        </div>
                    </div>
                    <p class="text-sky-100 mb-4">
                        Máte speciální přání? Vytvořte si poukaz přesně podle vašich představ – kombinace lekcí, průvodcování nebo servis lyží.
                    </p>
                    <ul class="space-y-2 text-sky-100 text-sm">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Libovolná kombinace služeb
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Vlastní hodnota poukazu
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Osobní věnování
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Info Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Jak to funguje?</h2>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-sky-700 font-bold text-lg">1</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Vyberte poukaz</h3>
                        <p class="text-gray-600 text-sm">Zvolte typ lekce nebo nás kontaktujte pro poukaz na míru.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-sky-700 font-bold text-lg">2</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Kontaktujte nás</h3>
                        <p class="text-gray-600 text-sm">Domluvíme detaily a připravíme krásný dárkový poukaz.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-sky-700 font-bold text-lg">3</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Darujte zážitek</h3>
                        <p class="text-gray-600 text-sm">Poukaz zašleme elektronicky nebo osobně předáme.</p>
                    </div>
                </div>

                <div class="mt-6 pt-6 border-t border-gray-100">
                    <p class="text-sm text-gray-500 italic text-center">
                        Platnost poukazu je 12 měsíců od data vystavení. Poukaz je přenosný na jinou osobu.
                    </p>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="mt-12 text-center">
                <NuxtLink 
                    to="/kontakt" 
                    class="inline-flex items-center px-8 py-4 bg-sky-500 text-white font-semibold rounded-full shadow-lg hover:bg-sky-600 hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Objednat dárkový poukaz
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </NuxtLink>
            </div>
        </div>
    </div>
</template>
