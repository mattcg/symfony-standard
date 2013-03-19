'use strict';

/*jshint node:true*/

var str_rot13 = require('./lib/str_rot13');

window.addEventListener('load', function() {
	var name, nameRot13Placeholder;

	name = document.getElementById('name').textContent;
	nameRot13Placeholder = document.getElementById('name-rot13');
	nameRot13Placeholder.textContent = str_rot13(name) + '. It worked!';
}, false);
