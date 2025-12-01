<script setup lang="ts">
// You might choose this based on an API call or logged-in status
const layout = 'default'

// Google Tag Manager noscript
useHead({
  noscript: [
    {
      children: `<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PX6XSTG" height="0" width="0" style="display:none;visibility:hidden"></iframe>`,
      body: true,
    },
  ],
})
</script>

<template>
  <NuxtLayout :name="layout">
    <NuxtPage />
  </NuxtLayout>
</template>
