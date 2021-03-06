module.exports = {
	mode: 'jit',
	purge: {
		content: [
			'!node_modules/**/*',
			'!first-demo/**/*',
			'**/*.html',
			'**/*.php',
			// './src/**/*.php',
			// './template-parts/**/*.php',
			// './*.php',
			// './inc/**/*.php',
			// './inc/*.php',
			'assets/**/*.js',
		],
	},
	darkMode: false, //you can set it to media(uses prefers-color-scheme) or class(better for toggling modes via a button)
	theme: {
		extend: {
			scale: ['group-hover'],
			backgroundColor: ['checked'],
		},
		screens: {
      'sm': '576px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '992px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1200px',
      // => @media (min-width: 1280px) { ... }
    }
	},
	variants: {},
	plugins: [],
}
