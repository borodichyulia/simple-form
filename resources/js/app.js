import './bootstrap';

import  '../scss/app.scss';

import * as bootstrap from 'bootstrap';

var input = document.getElementById('photos');    
input.addEventListener('change', function(event) {
    if (event.target.files.length > 5) {
        event.target.value = '';
        alert('Максимальное количество файлов: 5');
    }
});