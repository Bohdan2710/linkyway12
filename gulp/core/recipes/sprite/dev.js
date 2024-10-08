var gulp        = require('gulp');
var svgSprite   = require('gulp-svg-sprite');
var svgmin      = require('gulp-svgmin');
var log 		= require('fancy-log');
var path        = require('path');
var mergeStream = require('merge-stream');
var browserSync = require('browser-sync');

// utils
var getFolders  = require('../../utils/getFolders');
var pumped      = require('../../utils/pumped');

// config
var config      = require('../../config/sprite');


/**
 * Create single svg sprite given
 * a name and a src pattern
 *
 * @param name
 * @param src
 * @returns {*}
 */
function spriteTask(name, src) {
	return gulp.src(src)

		.pipe(svgSprite(config.options.svgSprite(name)))

		.on('error', function(error) {
			log.error(error);
		})

		.pipe(svgmin(config.options.svgmin))

		.pipe(gulp.dest(config.paths.dest));
}


/**
 * Create Sprite from individual
 * svg files to be <use>d in
 * templates
 *
 */
module.exports = function () {
	var subDirs = getFolders(config.paths.src).map(function (folder) {
		return spriteTask(folder, path.join(config.paths.src, folder, '/**/*.svg'));
	});

	var root = spriteTask('default', path.join(config.paths.src, '/*.svg'));

	return mergeStream(subDirs, root)
		.on('end', browserSync.reload);
};
