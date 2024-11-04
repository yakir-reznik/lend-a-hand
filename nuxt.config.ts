import fs from 'fs'
import path from 'path'

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
				{ name: 'apple-mobile-web-app-title', content: 'ישראלים מובילים לשחרור החטופים' },
				{
					name: 'description',
					content:
						'נותנים יד להשבת כל החטופים הביתה. ישראלים מובילים לשחרור החטופים. תנו יד ועזרו להשיב את כולם הביתה',
				},
				{
					name: 'og:image',
					content: 'https://yakirr12.sg-host.com/img/notnim-yad-screenshot.jpg',
				},
			],
		},
	},

	nitro: { preset: 'static' },
	routeRules: {
		// disable prerendering for all routes except home
		'**': { prerender: false },
		'/': { prerender: true },
	},

	devtools: { enabled: false },

	hooks: {
		// Copy php files to .output
		close: () => {
			const src = '/Applications/MAMP/htdocs/lend-a-hand/php'
			const dest = '/Applications/MAMP/htdocs/lend-a-hand/.output/public/php'

			console.log('Copying PHP files...')
			fs.cpSync(src, dest, { recursive: true })
		},
	},
})
