<template>
    <div class="bg-gradient-to-br from-slate-50 to-sky-50 py-16 px-4 min-h-[calc(100vh-216px)]">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-light text-gray-800 mb-4">Kontaktujte nás ❄</h1>
                <div class="w-24 h-1 bg-sky-500 mx-auto"></div>
            </div>

            <!-- Contact Cards -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Contact Info Card -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Adéla Ročárková</h2>
                    </div>
                    
                    <div class="space-y-4 text-gray-600">
                        <!-- Address -->
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-sky-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <p>Vlachovická 450</p>
                                <p>592 31 Nové Město na Moravě</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-sky-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <a href="tel:+420777845298" class="hover:text-sky-700 transition-colors">
                                +420 777 845 298
                            </a>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-sky-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:rociski@gmail.com" class="hover:text-sky-700 transition-colors">
                                rociski@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Business Info Card -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Fakturační údaje</h2>
                    </div>
                    
                    <div class="space-y-4 text-gray-600">
                        <div class="flex items-center">
                            <span class="font-medium text-gray-700 w-16">IČO:</span>
                            <span>08172561</span>
                        </div>
                        <div class="flex items-center">
                            <span class="font-medium text-gray-700 w-16">DIČ:</span>
                            <span>CZ8656092731</span>
                        </div>
                    </div>

                    <!-- Decorative Element -->
                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <p class="text-sm text-gray-500 italic">
                            Neváhejte nás kontaktovat s jakýmkoliv dotazem ohledně kurzů či servisu lyží.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Map or Additional Section (optional placeholder) -->
            <div class="mt-12 bg-white rounded-2xl shadow-lg p-8 text-center">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Nové Město na Moravě</h3>
                <p class="text-gray-600">V srdci Vysočiny – ideální místo pro běžecké lyžování</p>
            </div>
        </div>
    </div>
</template>
