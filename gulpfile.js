var gulp = require('gulp'),
	sass = require('gulp-sass'),
	cssnano = require('cssnano'),
	postcss = require('gulp-postcss'),
	sourcemaps = require('gulp-sourcemaps'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	autoprefixer = require('autoprefixer'),
	changed = require('gulp-changed'),
	watch = require('gulp-watch'),
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

gulp.task('default',function() {
    gulp.watch(theme + 'styles/sass/**/*.scss',['css']);
});