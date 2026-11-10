<template>
    <div class="flex flex-col justify-between min-h-[1000px]">
        <div :class="[isFullHeightPage ? 'lg:h-screen h-full' : '', 'flex flex-col justify-start min-h-[880px]']">
            <Header />
            <slot />
        </div>
      <Footer />
    </div>
</template>

<script setup>
const route = useRoute()

const noFullHeightPages = ['/cenik', '/darkovy-poukaz', '/kontakt', '/about']

const isFullHeightPage = computed(() => {
  // URL mají lomítko na konci (/cenik/), seznam je bez něj
  const path = route.path.replace(/\/$/, '')
  if (path === '/clanky' || path.startsWith('/clanky/')) {
    return false
  }
  return !noFullHeightPages.includes(path)
})
</script>