// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true },
  
  modules: [
    '@nuxtjs/tailwindcss',
    'nuxt-headlessui',
  ],
  
  css: ['~/assets/main.css'],

  // Site URL for sitemap, canonical URLs, etc.
  site: {
    url: 'https://rociski.cz',
    name: 'Ročiski',
  },


  app: {
    head: {
      htmlAttrs: {
        lang: 'cs',
      },
      charset: 'utf-8',
      viewport: 'width=device-width, initial-scale=1',
      
      // Favicon and icons
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
        { rel: 'icon', type: 'image/png', sizes: '32x32', href: '/favicon-32x32.png' },
        { rel: 'icon', type: 'image/png', sizes: '16x16', href: '/favicon-16x16.png' },
        { rel: 'apple-touch-icon', sizes: '180x180', href: '/apple-touch-icon.png' },
        { rel: 'manifest', href: '/site.webmanifest' },
      ],
      
      // Default meta tags
      meta: [
        { name: 'theme-color', content: '#0ea5e9' },
        { name: 'author', content: 'Ročiski - Adéla a Jiří Ročárkovi' },
        { name: 'robots', content: 'index, follow' },
        // Open Graph
        { property: 'og:type', content: 'website' },
        { property: 'og:site_name', content: 'Ročiski' },
        { property: 'og:locale', content: 'cs_CZ' },
        { property: 'og:image', content: 'https://rociski.cz/img/main.jpg' },
        { property: 'og:image:width', content: '1200' },
        { property: 'og:image:height', content: '630' },
        // Twitter Card
        { name: 'twitter:card', content: 'summary_large_image' },
        { name: 'twitter:image', content: 'https://rociski.cz/img/main.jpg' },
      ],

      // Analytics scripts
      script: [
        // Initialize dataLayer first
        {
          innerHTML: `window.dataLayer = window.dataLayer || [];`,
        },
        // Google Tag Manager
        {
          innerHTML: `(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5PX6XSTG');`,
        },
        // Google Analytics 4
        {
          src: 'https://www.googletagmanager.com/gtag/js?id=G-Q4QE1EN7Z7',
          async: true,
        },
        {
          innerHTML: `function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-Q4QE1EN7Z7');`,
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