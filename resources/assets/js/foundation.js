window._ = require('lodash');
try {
    window.$ = window.jQuery = require('jquery');

    require('foundation-sites');
} catch (e) {}

Foundation.addToJquery($);
$(document).foundation();