'use strict';
require('./components/claper');
require('./components/main');

// *****************************************************************************
// Automatically send CSRF token with each AJAX request
// *****************************************************************************
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
