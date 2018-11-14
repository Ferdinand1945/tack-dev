'use strict';

const cleanCSS   = require('gulp-clean-css');
const concat     = require('gulp-concat');
const gulp       = require('gulp');
const less       = require('gulp-less');
const pump       = require('pump');
const rename     = require('gulp-rename');
const settings   = require('../settings');
const sourcemaps = require('gulp-sourcemaps');

module.exports = cb => {
    gulp.start('lint-less');

    pump([
        gulp.src(settings.css.less),
        sourcemaps.init(),
        concat('main.css'),
        rename({suffix: '.min'}),
        less(),
        cleanCSS(),
        sourcemaps.write('./'),
        gulp.dest(settings.dest)
    ], cb);
};
