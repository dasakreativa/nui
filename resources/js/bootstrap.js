import _ from 'lodash';
window._ = _;

/**
 * Core Nusantara UI Kit
 *
 * Mengimpor Bootstrap, jQuery dan @PopperJS/core secara otomatis ke dalam package
 * supaya dapat digunakan secara menyeluruh.
 */
import { popper } from '@popperjs/core'
import * as bootstrap from 'bootstrap'

try {
	window.Popper = popper
	window.bootstrap = bootstrap;
} catch(err) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
*/


import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
