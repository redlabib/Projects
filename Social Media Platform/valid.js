	
var name = document.forms['form']['name'];
var numb = document.forms['form']['numb'];
var email = document.forms['form']['email'];
var gender = document.forms['form']['gender'];

var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var numb_error = document.getElementById('numb_error');
var gender_error = document.getElementById('gender_error');

function validated(){
    'use strict';
	if (name.value.length < 5 || name.value.length > 20) {
		name.style.border = "1px solid red";
		name_error.style.display = "block";
		name.focus();
		return false;
	}
	if (numb.value.length < 10 || numb.value.length > 10) {
		numb.style.border = "1px solid red";
		numb_error.style.display = "block";
		numb.focus();
		return false;
	}

}
function name_Verify(){
    'use strict';
	if (name.value.length > 5 && name.value.length < 20) {
		name.style.border = "1px solid silver";
		name_error.style.display = "none";
		return true;
	}
function email_Verify(){
	if (email.value.length >= 8) {
		email.style.border = "1px solid silver";
		email_error.style.display = "none";
		return true;
	}
}
function numb_Verify(){
	if(numb.value.length === 10) {
		numb.style.border = "1px solid silver";
		numb.style.display = "none";
		return true;
	}
}
name.addEventListener('textInput', name_Verify);
numb.addEventListener('textInput', numb_Verify);
email.addEventListener('textInput', email_Verify);
