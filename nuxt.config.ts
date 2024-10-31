// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
	compatibilityDate: '2024-04-03',
	modules: ['@nuxtjs/tailwindcss', '@nuxt/fonts', '@pinia/nuxt'],
	app: {
		head: {
			htmlAttrs: { lang: 'he', dir: 'rtl' },
			charset: 'utf-8',
			viewport: 'width=device-width, initial-scale=1, maximum-scale=1.0',
			title: 'ישראלים מובילים לשחרור החטופים',
		},
	},
	ssr: false,
	nitro: { preset: 'static' },
	routeRules: {
		// disable prerendering for all routes except home
		'**': { prerender: true },
	},

	devtools: { enabled: false },
})
