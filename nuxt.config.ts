import fs from 'fs'

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
	compatibilityDate: '2024-04-03',
	modules: ['@nuxtjs/tailwindcss', '@nuxt/fonts', '@pinia/nuxt'],
	app: {
		head: {
			htmlAttrs: { lang: 'he', dir: 'rtl' },
			charset: 'utf-8',
			viewport: 'width=device-width, initial-scale=1, maximum-scale=1.0',
			title: 'נותנים יד לשחרור החטופים',
			link: [
				{ rel: 'icon', type: 'image/png', href: '/favicon-96x96.png' },
				{ rel: 'icon', type: 'image/svg+xml', href: '/favicon.svg' },
				{ rel: 'shortcut icon', href: '/favicon.ico' },
				{ rel: 'apple-touch-icon', sizes: '180x180', href: '/apple-touch-icon.png' },
				{ rel: 'manifest', href: '/site.webmanifest' },
				{ rel: 'manifest', href: '/site.webmanifest' },
				{ rel: 'preload', href: '/img/two-yellow-hands-white-border.svg', as: 'image' },
			],
			meta: [
				{ name: 'apple-mobile-web-app-title', content: 'נותנים יד לשחרור החטופים' },
				{
					name: 'description',
					content:
						'נותנים יד להשבת כל החטופים הביתה. ישראלים מובילים לשחרור החטופים. תנו יד ועזרו להשיב את כולם הביתה',
				},
				{
					name: 'og:image',
					content: 'https://notnim-yad.net/img/notnim-yad-screenshot.jpg',
				},
			],
			script: [
				{
					// Google tag manager
					innerHTML: `(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WCPFT2XM');`,
				},
			],
		},
	},

	nitro: { preset: 'static' },
	routeRules: {
		// disable prerendering for all routes except home
		'**': { prerender: false },
		'/': { prerender: true },
		'/about': { prerender: true },
		'/activityPlans': { prerender: true },
		'/activity?type': { prerender: true },
	},

	devtools: { enabled: false },

	hooks: {
		// When build finishes -> Copy php files to .output so they can be deployed with the frontend app
		close: () => {
			const src = './php'
			const dest = './.output/public/php'
			console.log('Copying PHP files...')
			fs.cpSync(src, dest, { recursive: true })
		},
	},
})
