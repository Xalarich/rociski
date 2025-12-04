<template>
    <div class="flex flex-col justify-between min-h-[1000px]">
        <div :class="[isFullHeightPage ? 'h-screen' : '', 'flex flex-col justify-start min-h-[880px]']">
            <Header />
            <slot />
        </div>
      <Footer />
    </div>
</template>

<script setup>
const route = useRoute()

const isFullHeightPage = computed(() => {
  const noFullHeightPages = ['/cenik', '/darkovy-poukaz', '/kontakt', '/about']
  return !noFullHeightPages.includes(route.path)
})
</script>