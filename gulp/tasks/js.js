'use strict';

const browserify = require('browserify');
const buffer     = require('vinyl-buffer');
const gulp       = require('gulp');
const pump       = require('pump');
const settings   = require('../settings');
const source     = require('vinyl-source-stream');
const sourcemaps = require('gulp-sourcemaps');
const uglify     = require('gulp-uglify');
const watchify   = require('watchify');

let b = watchify(browserify(settings.js_main, {
        debug: true,
        cache: {},
        packageCache: {}}
    )
    .transform('babelify', {sourceMaps: true}));

/**
 * @param  {Function} cb
 * @return {void}
 */
function bundle(cb) {
    gulp.start('lint-js');
    console.log('-> bundling ☺ ☺ ☺');
    pump([
        b.bundle(),
        source('main.min.js'),
        buffer(),
        sourcemaps.init({loadMaps: true}),
        uglify(),
        sourcemaps.write('./'),
        gulp.dest(settings.dest)
    ], cb);
}

b.on('update', bundle);

module.exports = bundle;
