var theme = './wp-content/themes/miroed-theme/',
	dist = {
		js : theme + 'dist/js',
		styles : theme + 'dist/styles',
	};

 module.exports = {
     entry: theme + 'js/main.js',
     output: {
         path: dist.js,
         filename: 'main.min.js'
     }
 };