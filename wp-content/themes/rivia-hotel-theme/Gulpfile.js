'use strict';

let project_name = 'rivia-hotel';

var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var browserify = require('browserify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync').create();
var iconfont = require('gulp-iconfont');
var iconfontCss = require('gulp-iconfont-css');

gulp.task('sass', function () {
    return gulp.src('assets/scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('dist'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('js', function () {
    return browserify('assets/js/site.js', { allowEmpty: true })
        .bundle()
        .pipe(source('site.js'))
        .pipe(buffer())
        .pipe(browserSync.stream())
        .pipe(gulp.dest('dist'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('browserSync', function () {
    browserSync.init({
        proxy: 'http://localhost/' + project_name,
    })
});

gulp.task('fonticons', function() {

	return gulp.src(['assets/icons/*.svg'])

		.pipe(iconfontCss({
			fontName: 'font-icons',
			cssClass: 'icon',
			path: 'assets/scss/utilities/_icon-font-config.scss',
			targetPath: '../../scss/general/_icon-font.scss',
			fontPath: '../assets/fonts/font-icons/'
		}))
		.pipe(iconfont({
			fontName: 'font-icons', 
			prependUnicode: true,
			formats: ['woff2', 'woff', 'ttf'],
			normalize: true,
			// fontHeight: 1000,
			centerHorizontally: true
		}))
		.pipe(gulp.dest('assets/fonts/font-icons/'))
});

gulp.task('watch', gulp.parallel('sass', 'js', 'browserSync', function () {
    gulp.watch('assets/scss/**/*.scss', gulp.series('sass'));
    gulp.watch('assets/js/**/*.js', gulp.series('js'));
}));