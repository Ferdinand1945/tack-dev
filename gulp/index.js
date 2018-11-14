'use strict';

const gulp     = require('gulp');
const settings = require('./settings');
const tasks    = require('require-dir')('./tasks');

for (var k of Object.keys(tasks)) {
    gulp.task(k, tasks[k]);
}

gulp.task('vendor', ['vendor-js', 'css'], () => {});

gulp.task('watch', ['less', 'js', 'vendor-js', 'css'], () => {
    gulp.watch(settings.css.less, ['less']);
});

gulp.task('default', ['watch']);
