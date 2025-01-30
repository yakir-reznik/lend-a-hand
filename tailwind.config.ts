import type { Config } from 'tailwindcss'

export default <Partial<Config>>{
	theme: {
		extend: {
			colors: {
				primary: {
					DEFAULT: '#ffd33c',
					'50': '#fffbeb',
					'100': '#fff4c6',
					'200': '#ffe888',
					'300': '#ffd33c',
					'400': '#ffc320',
					'500': '#f9a107',
					'600': '#dd7902',
					'700': '#b75506',
					'800': '#94400c',
					'900': '#7a360d',
					'950': '#461b02',
				},
				secondary: {
					DEFAULT: '#1043b8',
					'50': '#edf7ff',
					'100': '#d8edff',
					'200': '#b9dfff',
					'300': '#89ccff',
					'400': '#52afff',
					'500': '#298dff',
					'600': '#126cfe',
					'700': '#0b55ea',
					'800': '#1043b8',
					'900': '#143e94',
					'950': '#11275a',
				},

				dark: {
					'800': '#333333',
					'900': '#010120',
				},
				mid: '#334D6E',
				gray: {
					DEFAULT: '#ededed',
					'50': '#f8f8f8',
					'100': '#ededed',
					'200': '#dcdcdc',
					'300': '#bdbdbd',
					'400': '#989898',
					'500': '#7c7c7c',
					'600': '#656565',
					'700': '#525252',
					'800': '#464646',
					'900': '#3d3d3d',
					'950': '#292929',
				},
				bluegray: {
					DEFAULT: '#F1F4FB',
				},
			},
			fontFamily: {
				heebo: ['Heebo', 'sans-serif'],
			},
			screens: {
				mobile: { max: '767px' },
				tablet: { min: '768px', max: '1260px ' },
				desktop: { min: '1260px' },
			},
			spacing: {
				'56': '14rem',
			},
		},
	},
}
