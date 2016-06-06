var gulp = require('gulp'),
	util = require('gulp-util'),
	sass = require('gulp-sass'),
	cssnano = require('cssnano'),
	postcss = require('gulp-postcss'),
	sourcemaps = require('gulp-sourcemaps'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	autoprefixer = require('autoprefixer'),
	changed = require('gulp-changed'),
	watch = require('gulp-watch'),
	webpack = require('webpack'),
	stream = require('webpack-stream'),
	theme = 'wp-content/themes/miroed-theme/',
	dist = {
		js : theme + 'dist/js',
		styles : theme + 'dist/styles',
	};


gulp.task('css', function () {
	var processors = [
        autoprefixer,
        cssnano
    ];

    return gulp.src( theme + 'styles/sass/main.scss' )
        .pipe(sass().on('error', util.log))
        .pipe(postcss(processors))
        .pipe(gulp.dest( dist.styles ));
});

gulp.task('js', function () {
	return gulp.src(theme + 'js/main.js')
		.pipe(stream({
			devtool: 'source-map',
		})
			.on('error', util.log))
		.pipe(gulp.dest(dist.js));
});

gulp.task('default',function() {
    gulp.watch(theme + 'styles/sass/**/*.scss',['css']);
    gulp.watch(theme + 'js/**/*.js',['js']);
});