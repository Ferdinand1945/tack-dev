'use strict';

const gulp     = require('gulp');
const lesshint = require('gulp-lesshint');
const pump     = require('pump');
const settings = require('../settings');

module.exports = cb => {
    pump([
        gulp.src(settings.css.less),
        lesshint({}),
        lesshint.reporter()
    ], cb);
};
