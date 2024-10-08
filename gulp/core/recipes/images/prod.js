var gulp         = require('gulp');
var path 		 = require('path');

// utils
var pumped       = require('../../utils/pumped');

// config
var config       = require('../../config/images');


/**
 * Compress Images and
 * move them to the
 * built theme
 *
 */
module.exports = function () {
	return gulp.src(config.paths.src)

		// TODO find new image compression lib

		.pipe(gulp.dest(config.paths.dest))
};
