// Creat input element for testing
var input = document.createElement('input');

// Create the supports object
var supports = {};

supports.autofocus = 'autofocus' in input;
supports.required = 'required' in input;
supports.placeholder = 'placeholder' in input;

// Fallback for autofocus attribute
if (!supports.autofocus) {
  document.getElementById('name').focus();
}

// Fallback for required attribute
if (!supports.required) {
}

// Checks if given email is valid
function validEmail(emailInput) {
  // validate email
  // return boolean (valid/not valid)
}

// Checks if website is a valid url
function validUrl(urlInput) {
  // validate url
  // return boolean (valid/not valid)
}

function validMsg(msgInput) {
}
