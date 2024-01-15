var gulp         = require('gulp');
var svgmin       = require('gulp-svgmin');

// utils
var pumped       = require('../../utils/pumped');

// config
var config       = require('../../config/svg');


/**
 * Compress Svgs and
 * move them to the
 * built theme
 *
 */
module.exports = function () {
	return gulp.src(config.paths.src)

		.pipe(svgmin(config.options.svgmin))

		.pipe(gulp.dest(config.paths.dest))
};
