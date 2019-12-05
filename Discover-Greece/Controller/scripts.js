function loginValidation()
{
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var passwordConfirm = document.getElementById('passwordConfirm').value;

  //regexpression is used to check if the email format conforms with standard email rules
  var mailRegExpression = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (password == passwordConfirm)
  {
    if (username.value.match(mailRegExpression))
    {
      return true;
    }

    else
    {
      alert('Your email is not written properly');
      return false;
    }

  }

  else {
    alert('The password you have entered does not match!');

    return false;
  }


}


var passwordField = document.getElementById('password');
var small = document.getElementById('small');
var capital = document.getElementById('capital');
var number = document.getElementById('number');
var specialChar = document.getElementById('specialChar');
var length = document.getElementById('length');

//shows the password guidlines if the user is in the password field
passwordField.onfocus = function(){

  document.getElementById('passwordVer').style.display = "block";

}

//hides the password guidlines if the user is NOT in the password field
passwordField.onblur = function(){

  document.getElementById('passwordVer').style.display = "none";

}


// When the user starts to type something inside the password field
passwordField.onkeyup = function() {

  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(passwordField.value.match(lowerCaseLetters)) {
    small.classList.remove("invalid");
    small.classList.add("valid");
  } else {
    small.classList.remove("valid");
    small.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(passwordField.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(passwordField.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(passwordField.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }

  // Validate special char
  var numbers = /[!£$%^&*?#@]/g;
  if(passwordField.value.match(numbers)) {
    specialChar.classList.remove("invalid");
    specialChar.classList.add("valid");
  } else {
    specialChar.classList.remove("valid");
    specialChar.classList.add("invalid");
  }

}
