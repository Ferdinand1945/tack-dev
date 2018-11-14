'use strict';

const eslint   = require('gulp-eslint');
const gulp     = require('gulp');
const pump     = require('pump');
const settings = require('../settings');

module.exports = cb => {
    pump([
        gulp.src(settings.js.glob),
        eslint(),
        eslint.format()
    ], cb);
};
