<script setup lang="ts">
const route = useRoute()

// Kanonická URL vždy s lomítkem na konci, jeden zdroj pravdy pro canonical i og:url
const canonical = computed(() => `https://rociski.cz${route.path.replace(/\/?$/, '/')}`)
const isArticle = computed(() => /^\/clanky\/[^/]+\/?$/.test(route.path))

useHead({
  titleTemplate: (t?: string) => (t && t !== 'Ročiski' ? `${t} | Ročiski` : 'Ročiski'),
  link: [{ rel: 'canonical', href: canonical }],
  script: [{
    type: 'application/ld+json',
    innerHTML: JSON.stringify({
      '@context': 'https://schema.org',
      '@graph': [
        {
          '@type': 'SportsActivityLocation',
          '@id': 'https://rociski.cz/#business',
          name: 'Ročiski',
          description: 'Výuka běžeckého lyžování, kurzy na kolečkových lyžích a servis běžek u Nového Města na Moravě.',
          url: 'https://rociski.cz/',
          logo: 'https://rociski.cz/img/logo.png',
          image: 'https://rociski.cz/img/main.jpg',
          telephone: '+420777845298',
          email: 'jiri.rocarek@seznam.cz',
          address: {
            '@type': 'PostalAddress',
            streetAddress: 'Vlachovická 450',
            addressLocality: 'Nové Město na Moravě',
            postalCode: '592 31',
            addressCountry: 'CZ',
          },
          areaServed: ['Nové Město na Moravě', 'Žďárské vrchy', 'Vysočina'],
          priceRange: 'od 1 200 Kč',
          founder: [{ '@id': 'https://rociski.cz/#adela' }, { '@id': 'https://rociski.cz/#jiri' }],
        },
        {
          '@type': 'Person',
          '@id': 'https://rociski.cz/#adela',
          name: 'Adéla Ročárková',
          jobTitle: 'Instruktorka běžeckého lyžování',
          worksFor: { '@id': 'https://rociski.cz/#business' },
        },
        {
          '@type': 'Person',
          '@id': 'https://rociski.cz/#jiri',
          name: 'Jiří Ročárek',
          jobTitle: 'Instruktor běžeckého lyžování',
          worksFor: { '@id': 'https://rociski.cz/#business' },
        },
      ],
    }),
  }],
})

useSeoMeta({
  ogUrl: canonical,
  ogType: () => (isArticle.value ? 'article' : 'website'),
})

// GA4: kliknutí na telefon a e-mail jako událost click_contact (klíčovou událost z ní udělat v GA4)
onMounted(() => {
  document.addEventListener('click', (e) => {
    const a = (e.target as HTMLElement).closest<HTMLAnchorElement>('a[href^="tel:"], a[href^="mailto:"]')
    if (a && typeof (window as any).gtag === 'function') {
      ;(window as any).gtag('event', 'click_contact', {
        method: a.protocol === 'tel:' ? 'phone' : 'email',
        page_path: route.path,
      })
    }
  })
})
</script>

<template>
  <NuxtLayout>
    <NuxtPage />
  </NuxtLayout>
</template>
