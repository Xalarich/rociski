<template>
    <header class="bg-white z-50">
      <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-2 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <NuxtLink to="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Ročiski</span>
            <img class="h-16 w-auto" src="/img/logo.png" alt="logo ročiski" />
          </NuxtLink>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="mobileMenuOpen = true">
            <span class="sr-only">Otevřít hlavní menu</span>
            <Bars3Icon class="size-6" aria-hidden="true" />
          </button>
        </div>
        <PopoverGroup class="hidden lg:flex lg:gap-x-8">
          <NuxtLink 
            to="/about" 
            class="relative text-sm/6 font-semibold text-blue-950 px-3 py-2 rounded-lg transition-all duration-300 hover:bg-sky-50 hover:text-sky-700"
            :class="{ 'text-sky-700 bg-sky-50': route.path === '/about' }"
          >
            O nás
            <span 
              v-if="route.path === '/about'" 
              class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[calc(100%-24px)] h-0.5 bg-sky-500 rounded-full"
            ></span>
          </NuxtLink>

          <Popover class="relative" v-slot="{ open, close }">
            <PopoverButton 
              class="flex items-center gap-x-1 text-sm/6 font-semibold text-blue-950 px-3 py-2 rounded-lg transition-all duration-300 hover:bg-sky-50 hover:text-sky-700 outline-none"
              :class="{ 'text-sky-700 bg-sky-50': route.path.startsWith('/kurzy') || open }"
            >
              Kurzy
              <ChevronDownIcon 
                class="size-5 flex-none transition-transform duration-300" 
                :class="[open ? 'rotate-180 text-sky-500' : 'text-gray-400']" 
                aria-hidden="true" 
              />
              <span 
                v-if="route.path.startsWith('/kurzy')" 
                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[calc(100%-24px)] h-0.5 bg-sky-500 rounded-full"
              ></span>
            </PopoverButton>
  
            <transition enter-active-class="transition ease-out duration-300" enter-from-class="opacity-0 translate-y-1" enter-to-class="translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="translate-y-0" leave-to-class="opacity-0 translate-y-1">
              <PopoverPanel class="absolute left-1/2 z-10 mt-3 w-64 -translate-x-1/2 rounded-xl bg-white p-2 shadow-lg ring-1 ring-gray-900/5">
                <NuxtLink 
                  v-for="item in kurzy" 
                  :key="item.name" 
                  :to="item.href" 
                  class="block rounded-lg px-3 py-2 text-sm/6 font-semibold text-blue-950 transition-colors duration-150 hover:bg-sky-50 hover:text-sky-700 mb-1"
                  :class="{ 'bg-sky-50 text-sky-700': route.path === item.href }"
                  @click="close"
                >
                  {{ item.name }}
                </NuxtLink>
              </PopoverPanel>
            </transition>
          </Popover>

          <Popover class="relative" v-slot="{ open, close }">
            <PopoverButton 
              class="flex items-center gap-x-1 text-sm/6 font-semibold text-blue-950 px-3 py-2 rounded-lg transition-all duration-300 hover:bg-sky-50 hover:text-sky-700 outline-none"
              :class="{ 'text-sky-700 bg-sky-50': route.path.startsWith('/servis-lyzi') || open }"
            >
              Servis lyží
              <ChevronDownIcon 
                class="size-5 flex-none transition-transform duration-300" 
                :class="[open ? 'rotate-180 text-sky-500' : 'text-gray-400']" 
                aria-hidden="true" 
              />
              <span 
                v-if="route.path.startsWith('/servis-lyzi')" 
                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[calc(100%-24px)] h-0.5 bg-sky-500 rounded-full"
              ></span>
            </PopoverButton>
  
            <transition enter-active-class="transition ease-out duration-300" enter-from-class="opacity-0 translate-y-1" enter-to-class="translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="translate-y-0" leave-to-class="opacity-0 translate-y-1">
              <PopoverPanel class="absolute left-1/2 z-10 mt-3 w-56 -translate-x-1/2 rounded-xl bg-white p-2 shadow-lg ring-1 ring-gray-900/5">
                <NuxtLink 
                  v-for="item in servisLyzi" 
                  :key="item.name" 
                  :to="item.href" 
                  class="block rounded-lg px-3 py-2 text-sm/6 font-semibold text-blue-950 transition-colors duration-150 hover:bg-sky-50 hover:text-sky-700 mb-1"
                  :class="{ 'bg-sky-50 text-sky-700': route.path === item.href }"
                  @click="close"
                >
                  {{ item.name }}
                </NuxtLink>
              </PopoverPanel>
            </transition>
          </Popover>
  
          <NuxtLink 
            to="/cenik" 
            class="relative text-sm/6 font-semibold text-blue-950 px-3 py-2 rounded-lg transition-all duration-300 hover:bg-sky-50 hover:text-sky-700"
            :class="{ 'text-sky-700 bg-sky-50': route.path === '/cenik' }"
          >
            Ceník
            <span 
              v-if="route.path === '/cenik'" 
              class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[calc(100%-24px)] h-0.5 bg-sky-500 rounded-full"
            ></span>
          </NuxtLink>

          <NuxtLink 
            to="/darkovy-poukaz" 
            class="relative text-sm/6 font-semibold text-blue-950 px-3 py-2 rounded-lg transition-all duration-300 hover:bg-sky-50 hover:text-sky-700"
            :class="{ 'text-sky-700 bg-sky-50': route.path === '/darkovy-poukaz' }"
          >
            Dárkové poukazy
            <span 
              v-if="route.path === '/darkovy-poukaz'" 
              class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[calc(100%-24px)] h-0.5 bg-sky-500 rounded-full"
            ></span>
          </NuxtLink>

          <NuxtLink 
            to="/kontakt" 
            class="relative bg-sky-200 text-sm/6 font-semibold text-blue-950 px-3 py-2 rounded-lg transition-all duration-300 hover:bg-sky-500 hover:text-white"
            :class="{ 'text-sky-700 bg-sky-50': route.path === '/kontakt' }"
          >
          Kontaktujte nás
            <span 
              v-if="route.path === '/kontakt'" 
              class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[calc(100%-24px)] h-0.5 bg-sky-500 rounded-full"
            ></span>
          </NuxtLink>
        </PopoverGroup>
      </nav>

      <!-- Mobile Menu -->
      <Dialog class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
        <div class="fixed inset-0 z-50 bg-black/20 backdrop-blur-xs"></div>
        <DialogPanel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <div class="flex items-center justify-between">
            <NuxtLink to="/" class="-m-1.5 p-1.5" @click="mobileMenuOpen = false">
              <span class="sr-only">Ročiski</span>
              <img class="h-8 w-auto" src="/img/logo.png" alt="logo ročiski" />
            </NuxtLink>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 hover:bg-gray-100 transition-colors" @click="mobileMenuOpen = false">
              <span class="sr-only">Zavřít menu</span>
              <XMarkIcon class="size-6" aria-hidden="true" />
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-1 py-6">
                <NuxtLink 
                  to="/about" 
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-sky-50 hover:text-sky-700 transition-colors"
                  :class="{ 'bg-sky-50 text-sky-700 border-l-4 border-sky-500': route.path === '/about' }"
                  @click="mobileMenuOpen = false"
                >
                  O nás
                </NuxtLink>

                <Disclosure as="div" class="-mx-3" v-slot="{ open }">
                  <DisclosureButton 
                    class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-sky-50 hover:text-sky-700 transition-colors"
                    :class="{ 'bg-sky-50 text-sky-700': route.path.startsWith('/kurzy') }"
                  >
                    Kurzy
                    <ChevronDownIcon :class="[open ? 'rotate-180' : '', 'size-5 flex-none transition-transform duration-300']" aria-hidden="true" />
                  </DisclosureButton>
                  <DisclosurePanel class="mt-2 space-y-1">
                    <NuxtLink 
                      v-for="item in kurzy" 
                      :key="item.name" 
                      :to="item.href" 
                      class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-sky-50 hover:text-sky-700 transition-colors"
                      :class="{ 'bg-sky-50 text-sky-700': route.path === item.href }"
                      @click="mobileMenuOpen = false"
                    >
                      {{ item.name }}
                    </NuxtLink>
                  </DisclosurePanel>
                </Disclosure>
  
                <Disclosure as="div" class="-mx-3" v-slot="{ open }">
                  <DisclosureButton 
                    class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-sky-50 hover:text-sky-700 transition-colors"
                    :class="{ 'bg-sky-50 text-sky-700': route.path.startsWith('/servis-lyzi') }"
                  >
                    Servis lyží
                    <ChevronDownIcon :class="[open ? 'rotate-180' : '', 'size-5 flex-none transition-transform duration-300']" aria-hidden="true" />
                  </DisclosureButton>
                  <DisclosurePanel class="mt-2 space-y-1">
                    <NuxtLink 
                      v-for="item in servisLyzi" 
                      :key="item.name" 
                      :to="item.href" 
                      class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-sky-50 hover:text-sky-700 transition-colors"
                      :class="{ 'bg-sky-50 text-sky-700': route.path === item.href }"
                      @click="mobileMenuOpen = false"
                    >
                      {{ item.name }}
                    </NuxtLink>
                  </DisclosurePanel>
                </Disclosure>

                <NuxtLink 
                  to="/cenik" 
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-sky-50 hover:text-sky-700 transition-colors"
                  :class="{ 'bg-sky-50 text-sky-700 border-l-4 border-sky-500': route.path === '/cenik' }"
                  @click="mobileMenuOpen = false"
                >
                  Ceník
                </NuxtLink>

                <NuxtLink 
                  to="/darkovy-poukaz" 
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-sky-50 hover:text-sky-700 transition-colors"
                  :class="{ 'bg-sky-50 text-sky-700 border-l-4 border-sky-500': route.path === '/darkovy-poukaz' }"
                  @click="mobileMenuOpen = false"
                >
                  Dárkové poukazy
                </NuxtLink>

                <NuxtLink 
                  to="/kontakt" 
                  class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-sky-50 hover:text-sky-700 transition-colors"
                  :class="{ 'bg-sky-50 text-sky-700 border-l-4 border-sky-500': route.path === '/kontakt' }"
                  @click="mobileMenuOpen = false"
                >
                  Kontakt
                </NuxtLink>
              </div>
            </div>
          </div>
        </DialogPanel>
      </Dialog>
    </header>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  import {
    Dialog,
    DialogPanel,
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Popover,
    PopoverButton,
    PopoverGroup,
    PopoverPanel,
  } from '@headlessui/vue'
  import {
    Bars3Icon,
    XMarkIcon,
  } from '@heroicons/vue/24/outline'
  import { ChevronDownIcon } from '@heroicons/vue/20/solid'

  const route = useRoute()
  
  const kurzy = [
    { name: 'Běžky', href: '/kurzy/bezky' },
    { name: 'Kolečkové lyže', href: '/kurzy/koleckove-lyze' },
    { name: 'Průvodce srdcem Vysočiny', href: '/kurzy/pruvodce' },
  ]
  const servisLyzi = [
    { name: 'Servis lyží', href: '/servis-lyzi/servis' },
    { name: 'Přednášky o servisu lyží', href: '/servis-lyzi/prednasky' },
  ]
  
  const mobileMenuOpen = ref(false)
  </script>
