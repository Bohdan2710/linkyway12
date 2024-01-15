var gulp         = require('gulp');
var named        = require('vinyl-named');
var webpack 	 = require('webpack');
var gulpWebpack  = require('webpack-stream');

// utils
var deepMerge    = require('../../utils/deepMerge');
var pumped       = require('../../utils/pumped');

// config
var config       = require('../../config/scripts');

/**
 * Create minified JS
 * packages with webpack
 *
 * @returns {*}
 */
module.exports = function () {
	return gulp.src(config.paths.src)

		.pipe(named()) // vinyl-named is used to allow for
									 // multiple entry files
		.pipe(gulpWebpack(
			deepMerge(
				config.options.webpack.defaults,
				config.options.webpack.prod
			), webpack
		))

		.pipe(gulp.dest(config.paths.dest))
};
