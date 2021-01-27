window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');

import 'bootstrap'
import { result } from 'lodash';

import 'select2'

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// select2
$(document).ready(function() {
    $('.select2Choice').select2({
        placeholder : "Choose Courses",
    });
    
});

