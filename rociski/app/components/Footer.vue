<template>
  <footer class="bg-white border-t border-gray-100">
    <!-- CTA: kontakt z každé stránky -->
    <div v-if="!isContactPage" class="bg-sky-50">
      <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8 text-center">
        <p class="text-lg md:text-xl font-semibold text-gray-800 mb-2">Chcete kurz běžkování nebo servis běžek?</p>
        <p class="text-gray-600 mb-6">Zavolejte nebo napište, domluvíme termín i místo.</p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
          <a href="tel:+420777845298" class="inline-flex justify-center items-center px-6 py-3 bg-sky-700 text-white font-semibold rounded-full hover:bg-sky-800 transition-colors">
            Zavolat +420 777 845 298
          </a>
          <a href="mailto:jiri.rocarek@seznam.cz" class="inline-flex justify-center items-center px-6 py-3 bg-white text-sky-800 font-semibold rounded-full ring-1 ring-sky-200 hover:bg-sky-100 transition-colors">
            Napsat e-mail
          </a>
        </div>
      </div>
    </div>

    <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8 grid gap-8 sm:grid-cols-3 text-sm">
      <div>
        <p class="font-semibold text-gray-800 mb-3">Kurzy</p>
        <ul class="space-y-2">
          <li><NuxtLink to="/kurzy/bezky" class="text-gray-600 hover:text-sky-700">Kurzy běžkování</NuxtLink></li>
          <li><NuxtLink to="/kurzy/koleckove-lyze" class="text-gray-600 hover:text-sky-700">Kolečkové lyže</NuxtLink></li>
          <li><NuxtLink to="/kurzy/pruvodce" class="text-gray-600 hover:text-sky-700">Průvodce srdcem Vysočiny</NuxtLink></li>
          <li><NuxtLink to="/darkovy-poukaz" class="text-gray-600 hover:text-sky-700">Dárkové poukazy</NuxtLink></li>
        </ul>
      </div>
      <div>
        <p class="font-semibold text-gray-800 mb-3">Servis lyží</p>
        <ul class="space-y-2">
          <li><NuxtLink to="/servis-lyzi/servis" class="text-gray-600 hover:text-sky-700">Servis běžek</NuxtLink></li>
          <li><NuxtLink to="/servis-lyzi/prednasky" class="text-gray-600 hover:text-sky-700">Přednášky o servisu lyží</NuxtLink></li>
          <li><NuxtLink to="/cenik" class="text-gray-600 hover:text-sky-700">Ceník</NuxtLink></li>
          <li><NuxtLink to="/clanky" class="text-gray-600 hover:text-sky-700">Články</NuxtLink></li>
        </ul>
      </div>
      <div class="text-gray-600 space-y-2">
        <p class="font-semibold text-gray-800 mb-3">Ročiski</p>
        <p>Vlachovická 450, 592 31 Nové Město na Moravě</p>
        <p><a href="tel:+420777845298" class="hover:text-sky-700">+420 777 845 298</a></p>
        <p><a href="mailto:jiri.rocarek@seznam.cz" class="hover:text-sky-700">jiri.rocarek@seznam.cz</a></p>
        <p><NuxtLink to="/about" class="hover:text-sky-700">O nás</NuxtLink> · <NuxtLink to="/kontakt" class="hover:text-sky-700">Kontakt</NuxtLink></p>
      </div>
    </div>

    <p class="pb-8 text-center text-sm/6 text-gray-600">
      &copy; {{ year }} Ročiski ·
      <button type="button" class="hover:text-sky-700 underline" @click="showConsent = true">Nastavení cookies</button>
    </p>

    <!-- Cookie lišta: jen na klientu (volba je v localStorage), odmítnutí stejně snadné jako souhlas -->
    <div v-if="showConsent" role="dialog" aria-label="Souhlas s cookies" class="fixed inset-x-0 bottom-0 z-50 bg-white border-t border-gray-200 shadow-lg">
      <div class="mx-auto max-w-4xl px-6 py-4 flex flex-col md:flex-row gap-4 md:items-center text-sm text-gray-700">
        <p class="flex-1">
          Rádi bychom měřili návštěvnost přes Google Analytics. Pomůže nám zjistit, co na webu funguje.
          Ukládá analytické cookies <code>_ga</code> až na 2 roky. Souhlas můžete kdykoli změnit odkazem „Nastavení cookies“ v patičce.
        </p>
        <div class="flex gap-2 shrink-0">
          <button type="button" class="px-5 py-2 rounded-full bg-sky-700 text-white font-semibold hover:bg-sky-800" @click="setConsent('denied')">Odmítnout</button>
          <button type="button" class="px-5 py-2 rounded-full bg-sky-700 text-white font-semibold hover:bg-sky-800" @click="setConsent('granted')">Přijmout</button>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
const route = useRoute()
const isContactPage = computed(() => route.path.startsWith('/kontakt'))
const year = new Date().getFullYear()

const CONSENT_KEY = 'rociski-consent' // čte ho i inline skript v nuxt.config.ts
const showConsent = ref(false)
onMounted(() => {
  try { showConsent.value = !localStorage.getItem(CONSENT_KEY) } catch { showConsent.value = true }
})

function setConsent(value) {
  try { localStorage.setItem(CONSENT_KEY, value) } catch {}
  window.gtag?.('consent', 'update', { analytics_storage: value })
  if (value === 'denied') {
    // odvolání souhlasu: smazat už uložené GA cookies
    for (const name of document.cookie.split(';').map(c => c.split('=')[0].trim()).filter(n => n.startsWith('_ga'))) {
      document.cookie = `${name}=; Max-Age=0; path=/`
      document.cookie = `${name}=; Max-Age=0; path=/; domain=.${location.hostname}`
    }
  }
  showConsent.value = false
}
</script>
