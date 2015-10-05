'use strict';

var config = require('./config');


var watch = {

  gruntfile: {
    files: [
      'Gruntfile.js',
      'gruntconfig/**/*.js'
    ],
    tasks: [
      'jshint:gruntfile'
    ]
  },

  js: {
    files: [
      config.src + '/**/*.js'
    ],
    options: {
      livereload: config.liveReloadPort
    },
    tasks: [
      'jshint:scripts'
    ]
  },

  src: {
    files: [
      config.src + '/**/*',
      '!' + config.src + '/**/*.js'
    ],
    options: {
      livereload: config.liveReloadPort
    }
  }

};


module.exports = watch;
