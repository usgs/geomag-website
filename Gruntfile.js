'use strict';

module.exports = function (grunt) {

	var gruntConfig = require('./gruntconfig');

  gruntConfig.tasks.forEach(grunt.loadNpmTasks);
	grunt.initConfig(gruntConfig);

	grunt.registerTask('default', [
		'jshint',
		'configureProxies:src',
		'connect:template',
		'connect:src',
		'watch'
	]);

};
