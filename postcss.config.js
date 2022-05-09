module.exports = {
	plugins: [
		require('postcss-import'),
		require('tailwindcss'),
    require('postcss-mixins'),
    require('postcss-simple-vars'),
    require('postcss-nested'),
    require('autoprefixer')
  ]
}
