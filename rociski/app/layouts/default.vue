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
  // Check if it's a clanky page (main or any article)
  if (route.path === '/clanky' || route.path.startsWith('/clanky/')) {
    return false
  }
  return !noFullHeightPages.includes(route.path)
})
</script>