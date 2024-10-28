import type { Config } from 'tailwindcss'
import colors from 'tailwindcss/colors'

export default <Partial<Config>>{
	theme: {
		extend: {
			colors: {
				primary: {
					DEFAULT: '#fdd33f',
					'50': '#fffbeb',
					'100': '#fef4c7',
					'200': '#fee889',
					'300': '#fdd33f',
					'400': '#fcc323',
					'500': '#f7a109',
					'600': '#da7a05',
					'700': '#b55508',
					'800': '#93420d',
					'900': '#79360e',
					'950': '#451b03',
				},
				dark: '#010220',
			},
			screens: {
				mobile: { max: '767px' },
				tablet: { min: '768px', max: '1260px ' },
				desktop: { min: '1260px' },
			},
		},
	},
}
