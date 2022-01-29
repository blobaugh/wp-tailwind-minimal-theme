module.exports = {
	important: true,
	content: [
		"./templates/**/*.{php,html}",
		"./*.php"
	],
	theme: {
		extend: {
		},
	},
	plugins: [
    		require('@tailwindcss/typography'),
	],
}
