<template>
    <div class="bg-gradient-to-br from-slate-50 to-sky-50 py-16 px-4 min-h-[calc(100vh-216px)]">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-light text-gray-800 mb-4">Ceník</h1>
                <div class="w-24 h-1 bg-sky-500 mx-auto"></div>
            </div>

            <!-- Pricing Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 mb-8">
                <div class="flex items-center mb-8">
                    <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Ceník výuky</h2>
                </div>

                <!-- Pricing Table -->
                <div class="overflow-x-auto">
                    <table class="w-full min-w-112">
                        <thead>
                            <tr class="border-b-2 border-sky-200">
                                <th class="text-left py-4 px-2 sm:px-4 font-semibold text-gray-700">Počet osob</th>
                                <th class="text-center py-4 px-2 sm:px-4 font-semibold text-gray-700">
                                    <span class="block text-sm text-gray-500">Všední den</span>
                                    <span class="text-sky-700">Kč</span>
                                </th>
                                <th class="text-center py-4 px-2 sm:px-4 font-semibold text-gray-700">
                                    <span class="block text-sm text-gray-500">Víkend</span>
                                    <span class="text-sky-700">Kč</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-100 hover:bg-sky-50 transition-colors">
                                <td class="py-4 px-2 sm:px-4 text-gray-600">
                                    <div class="flex items-center">
                                        <span class="w-8 h-8 bg-sky-100 rounded-full flex items-center justify-center text-sky-700 font-semibold mr-3 text-sm">1</span>
                                        1 osoba / 1,5 hodiny
                                    </div>
                                </td>
                                <td class="py-4 px-2 sm:px-4 text-center font-semibold text-gray-800">1 400</td>
                                <td class="py-4 px-2 sm:px-4 text-center font-semibold text-gray-800">1 800</td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-sky-50 transition-colors">
                                <td class="py-4 px-2 sm:px-4 text-gray-600">
                                    <div class="flex items-center">
                                        <span class="w-8 h-8 bg-sky-100 rounded-full flex items-center justify-center text-sky-700 font-semibold mr-3 text-sm">2</span>
                                        2 osoby / 1,5 hodiny
                                    </div>
                                </td>
                                <td class="py-4 px-2 sm:px-4 text-center font-semibold text-gray-800">1 200</td>
                                <td class="py-4 px-2 sm:px-4 text-center font-semibold text-gray-800">1 600</td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-sky-50 transition-colors">
                                <td class="py-4 px-2 sm:px-4 text-gray-600">
                                    <div class="flex items-center">
                                        <span class="w-8 h-8 bg-sky-100 rounded-full flex items-center justify-center text-sky-700 font-semibold mr-3 text-sm">3</span>
                                        3 osoby / 1,5 hodiny
                                    </div>
                                </td>
                                <td class="py-4 px-2 sm:px-4 text-center font-semibold text-gray-800">1 000</td>
                                <td class="py-4 px-2 sm:px-4 text-center font-semibold text-gray-800">1 400</td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-sky-50 transition-colors">
                                <td class="py-4 px-2 sm:px-4 text-gray-600">
                                    <div class="flex items-center">
                                        <span class="w-8 h-8 bg-sky-100 rounded-full flex items-center justify-center text-sky-700 font-semibold mr-3 text-sm">4</span>
                                        4 osoby / 1,5 hodiny
                                    </div>
                                </td>
                                <td class="py-4 px-2 sm:px-4 text-center font-semibold text-gray-800">800</td>
                                <td class="py-4 px-2 sm:px-4 text-center font-semibold text-gray-800">1 200</td>
                            </tr>
                            <tr class="hover:bg-sky-50 transition-colors">
                                <td class="py-4 px-2 sm:px-4 text-gray-600">
                                    <div class="flex items-center">
                                        <span class="w-8 h-8 bg-sky-100 rounded-full flex items-center justify-center text-sky-700 font-semibold mr-3 text-sm">5+</span>
                                        5 a více / 1,5 hodiny
                                    </div>
                                </td>
                                <td class="py-4 px-2 sm:px-4 text-center text-gray-600 italic">dle domluvy</td>
                                <td class="py-4 px-2 sm:px-4 text-center text-gray-600 italic">dle domluvy</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Additional Services Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Další služby</h2>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                        <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <span class="font-medium text-gray-700">Přednáška o servisu lyží</span>
                            <span class="text-gray-500"> – cena dle domluvy</span>
                        </div>
                    </div>
                    <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                        <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <span class="font-medium text-gray-700">Příprava lyží</span>
                            <span class="text-gray-500"> – cena dle domluvy</span>
                        </div>
                    </div>
                    <div class="flex items-start p-4 bg-gray-50 rounded-xl">
                        <svg class="w-5 h-5 text-sky-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <span class="font-medium text-gray-700">Průvodcování Vysočinou</span>
                            <span class="text-gray-500"> – cena dle domluvy</span>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-6 border-t border-gray-100">
                    <p class="text-sm text-gray-500 italic">
                        Cena těchto služeb je stanovena na základě množství zájemců a dalších okolností. Neváhejte nás kontaktovat pro individuální nabídku.
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
                    Kontaktujte nás
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </NuxtLink>
            </div>
        </div>
    </div>
</template>
