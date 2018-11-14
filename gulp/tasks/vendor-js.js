'use strict';

const browserify = require('browserify');
const buffer     = require('vinyl-buffer');
const concat     = require('gulp-concat');
const gulp       = require('gulp');
const pump       = require('pump');
const settings   = require('../settings');
const source     = require('vinyl-source-stream');
const sourcemaps = require('gulp-sourcemaps');
const uglify     = require('gulp-uglify');
const watchify   = require('watchify');

module.exports = () => {
    pump([
        gulp.src(settings.js.vendor),
        buffer(),
        sourcemaps.init({loadMaps: true}),
        concat('vendor.min.js'),
        uglify(),
        sourcemaps.write('./'),
        gulp.dest(settings.dest)
    ]);
};
