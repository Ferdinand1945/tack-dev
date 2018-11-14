'use strict';

module.exports = {
    dest: './public/dist',
    css: {
        vendor: ['./src/css/**/*.css'],
        less: [
            './src/less/*.less',
            './src/less/components/**/*.less'
        ]
    },
    js: {
        vendor: ['./src/js/vendor/**/*.js'],
        glob: ['./src/js/components/**/*.js']
    },
    js_main: './src/js/main.js'
};
