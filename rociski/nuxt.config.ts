// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true },
  
  modules: [
    '@nuxtjs/tailwindcss',
    'nuxt-headlessui',
    '@nuxtjs/sitemap',
  ],
  
  css: ['~/assets/main.css'],

  // Site URL for sitemap, canonical URLs, etc.
  site: {
    url: 'https://rociski.cz',
    name: 'Ročiski',
    trailingSlash: true,
  },

  // Kanonické URL s lomítkem (nginx /x → /x/ stejně přesměrovává)
  experimental: {
    defaults: {
      nuxtLink: { trailingSlash: 'append' },
    },
  },


  app: {
    head: {
      htmlAttrs: {
        lang: 'cs',
      },
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      title: 'Ročiski', // výchozí pro 404/200.html, šablonu titulku nastavuje app.vue

      // Favicon and icons
      link: [
        { rel: 'preconnect', href: 'https://fonts.googleapis.com' },
        { rel: 'preconnect', href: 'https://fonts.gstatic.com', crossorigin: '' },
        { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300..700;1,400&display=swap' },
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
        { rel: 'icon', type: 'image/png', sizes: '48x48', href: '/favicon-48x48.png' },
        { rel: 'icon', type: 'image/png', sizes: '32x32', href: '/favicon-32x32.png' },
        { rel: 'icon', type: 'image/png', sizes: '16x16', href: '/favicon-16x16.png' },
        { rel: 'apple-touch-icon', sizes: '180x180', href: '/apple-touch-icon.png' },
        { rel: 'manifest', href: '/site.webmanifest' },
      ],
      
      // Default meta tags
      meta: [
        { name: 'theme-color', content: '#0ea5e9' },
        { name: 'author', content: 'Ročiski - Adéla a Jiří Ročárkovi' },
        // Open Graph (og:type, og:url a canonical nastavuje app.vue podle URL)
        { property: 'og:site_name', content: 'Ročiski' },
        { property: 'og:locale', content: 'cs_CZ' },
        { property: 'og:image', content: 'https://rociski.cz/img/main.jpg' },
        // Twitter Card (obrázek bere z og:image stránky)
        { name: 'twitter:card', content: 'summary_large_image' },
      ],

      // GA4 s Consent Mode v2: bez souhlasu žádné cookies (lišta je ve Footer.vue).
      // GTM kontejner byl prázdný, odstraněn 2026-11-10.
      script: [
        {
          innerHTML: `window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('consent', 'default', { ad_storage: 'denied', ad_user_data: 'denied', ad_personalization: 'denied', analytics_storage: 'denied' });
try { if (localStorage.getItem('rociski-consent') === 'granted') gtag('consent', 'update', { analytics_storage: 'granted' }); } catch (e) {}
gtag('js', new Date());
gtag('config', 'G-Q4QE1EN7Z7');`,
        },
        {
          src: 'https://www.googletagmanager.com/gtag/js?id=G-Q4QE1EN7Z7',
          async: true,
        },
      ],
    },
  },

  // Nitro configuration for static generation
  nitro: {
    prerender: {
      crawlLinks: true,
      routes: ['/'],
    },
  },
})