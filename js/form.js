// create input element for testing
var input = document.createElement('input');

// create the supports object
var supports = {};

supports.autofocus = 'autofocus' in input;
supports.required = 'required' in input;
supports.placeholder = 'placeholder' in input;

// fallback for autofocus attribute
if (!supports.autofocus) {
  document.getElementById('name').focus();
}

// validates form inputs
function validateForm() {
  // fallback for required attribute
  if (!supports.required) {
    // TODO need to check if any of the fields are empty
    // alertUser("empty");
  }

  // check if email is valid
  var email = document.forms["form"]["email"].value;
  var atpos = email.indexOf("@");
  var dotpos = email.lastIndexOf(".");

  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
      alertUser("email");
      return false;
  }

  // check if website is a valid url
  // var url = document.forms["form"]["website"].value;
  // console.log("website value is: " + url)

  // if (url != null || url != "") {
  //   if (!url.includes(".")) {
  //     alertUser("website");
  //     return false;
  //   }
  // }

  alertUser("success");
  // setTimeout(function() {
    return true;
  // }, 5000);
}

// shows alert for invalid form fields
// or for a successful submission
function alertUser(type) {
  switch (type) {
    case "success":
      // document.getElementById("error").innerHTML = "<div class='alert alert-success'>Thank you for contacting me!<br />I will be in touch within 48h.</div>";
      alert("Thank you for contacting me! I will be in touch within 48h.");
      break;
    case "empty":
      document.getElementById("error").innerHTML = '<div class="alert alert-danger">You have one or more empty fields. Please try again.</div>';
      break;
    case "email":
      document.getElementById("error").innerHTML = '<div class="alert alert-danger">You entered an invalid email. Please try again.</div>';
      break;
    case "website":
      document.getElementById("error").innerHTML = '<div class="alert alert-danger">The website you entered is invalid. Please try again.</div>';
      break;
    default:
      document.getElementById("error").innerHTML = "";
  }
}
