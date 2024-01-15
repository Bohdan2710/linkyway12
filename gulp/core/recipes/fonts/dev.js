var gulp         = require('gulp');
var browserSync  = require('browser-sync');

// utils
var pumped       = require('../../utils/pumped');

// config
var config       = require('../../config/fonts');


/**
 * Move Fonts to
 * the built theme
 *
 */
module.exports = function () {
	return gulp.src(config.paths.src)

		.pipe(gulp.dest(config.paths.dest))

		.on('end', browserSync.reload);
};
