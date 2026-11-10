<template>
  <NuxtLayout>
    <div class="bg-gradient-to-br from-slate-50 to-sky-50 py-24 px-4 text-center">
      <h1 class="text-3xl sm:text-4xl font-light text-gray-800 mb-4">
        {{ error?.statusCode === 404 ? 'Stránka nenalezena' : 'Něco se pokazilo' }}
      </h1>
      <p class="text-gray-600 mb-8">Tahle stránka neexistuje nebo byla přesunuta.</p>
      <NuxtLink to="/" class="inline-flex px-6 py-3 bg-sky-700 text-white font-semibold rounded-full hover:bg-sky-800">
        Zpět na úvod
      </NuxtLink>
    </div>
  </NuxtLayout>
</template>

<script setup>
defineProps({ error: Object })
useSeoMeta({ title: 'Stránka nenalezena', robots: 'noindex' })
</script>
