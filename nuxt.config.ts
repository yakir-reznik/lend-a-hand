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
		},
	},
	ssr: false,
	nitro: { preset: 'static' },
	routeRules: {
		// disable prerendering for all routes except home
		'**': { prerender: true },
	},

	devtools: { enabled: false },

	hooks: {
		close: () => {
			// const src = path.join(__dirname) + '/php'
			// const dest = path.join(__dirname, '.output/public/php')
			const src = '/Applications/MAMP/htdocs/lend-a-hand/php'
			const dest = '/Applications/MAMP/htdocs/lend-a-hand/.output/public/php'

			console.log('Copying PHP files...')
			fs.cpSync(src, dest, { recursive: true })

			// for (const file of files) {
			// 	const src = path.join(__dirname, file)
			// 	const dest = path.join(output, file)
			// 	fs.copySync(src, dest)
			// }
		},
	},
})
