const { popper } = require('@popperjs/core');
window._ = require('lodash');

try {
    window.Popper = popper;
    window.$ = window.jQuery = jQuery = require('jquery');
    global.bootstrap = window.bootstrap = require('bootstrap');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
