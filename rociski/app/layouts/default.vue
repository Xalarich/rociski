<template>
    <div class="flex flex-col justify-between min-h-[1000px]">
        <div class="h-screen flex flex-col justify-start">
            <Header />
            <slot />
        </div>
      <Footer />
    </div>
  </template>