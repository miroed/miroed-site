var gulp = require('gulp'),
	sass = require('gulp-sass');
	cssnano = require('cssnano');
	postcss = require('gulp-postcss'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	autoprefixer = require('autoprefixer'),
	changed = require('gulp-changed'),
	watch = require('gulp-watch'),
	express = require('gulp-express'),
	theme = 'wp-content/themes/miroed-theme/';


gulp.task('css', function () {
	var processors = [
        autoprefixer,
        cssnano
    ];

    return gulp.src( theme + 'styles/sass/main.scss' )
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss(processors))
        .pipe(gulp.dest( theme + 'styles/' ));
});

gulp.task('js', function () {

	return gulp.src([theme + 'js/vendor/jquery.color-2.1.0.js', theme + 'js/native/color.js'])
		.pipe(concat( 'main.min.js' ))
		.pipe(uglify())
		.pipe(gulp.dest( theme + 'js/' ));

});

gulp.task('default',function() {
    gulp.watch(theme + 'styles/sass/**/*.scss',['css']);
    gulp.watch(theme + 'js/**/*.js',['js']);
});