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
    pump([
        gulp.src(settings.css.vendor),
        sourcemaps.init(),
        concat('vendor.min.css'),
        cleanCSS(),
        sourcemaps.write('./'),
        gulp.dest(settings.dest)
    ], cb);
};
