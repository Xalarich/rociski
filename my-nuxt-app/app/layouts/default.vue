<template>
    <div class="flex flex-col justify-between">
        <div class="min-h-screen flex flex-col justify-start">
            <Header />
            <slot />
        </div>
      <Footer />
    </div>
  </template>