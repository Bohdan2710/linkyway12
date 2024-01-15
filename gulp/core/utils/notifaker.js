var notifier = require('node-notifier');
var log 	 = require('fancy-log');
var c 		 = require('ansi-colors');

/**
 * Fake the gulp-notfy functionality
 * to provide a consistent interface
 * for non-stream notifications
 *
 * @param message
 */
module.exports = function (message) {

	log(
		c.cyan('gulp-notifier'),
		'[' + c.blue('Gulp notification') + ']',
		c.green(message)
	);
};
