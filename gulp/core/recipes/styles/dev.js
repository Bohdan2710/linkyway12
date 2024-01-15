var gulp         = require('gulp');
var filter       = require('gulp-filter');
var sourcemaps   = require('gulp-sourcemaps');
var sass         = require('gulp-sass')(require('sass'));
var browserSync  = require('browser-sync');
var autoprefixer = require('autoprefixer');
var postcss      = require('gulp-postcss');

// config
var config       = require('../../config/styles');

// utils
var pumped       = require('../../utils/pumped');

// postcss
var plugins = [
	autoprefixer(config.options.autoprefixer)
];

/**
 * Compile SCSS to CSS,
 * create Sourcemaps
 * and trigger
 * Browser-sync
 *
 *
 */
module.exports = function (cb) {
	var filterCSS = filter('**/*.css', { restore: true });

	return gulp.src(config.paths.src)

		.pipe(sourcemaps.init())
		.pipe(sass.sync(config.options.sass))
		.pipe(postcss(plugins))
		.pipe(sourcemaps.write('./'))

		.pipe(gulp.dest(config.paths.dest))

		.pipe(filterCSS) // sourcemaps adds `.map` files to the gulp
						 // stream, but we only want to trigger
						 // Browser-sync on CSS files so we need to
						 // filter the stream for the css files
		.pipe(browserSync.reload({ stream: true }))
		.pipe(filterCSS.restore)
};
