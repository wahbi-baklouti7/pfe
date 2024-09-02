window._ = require('lodash');

try {
    require('bootstrap');
} catch (e) {}

// Import axios for HTTP requests
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
