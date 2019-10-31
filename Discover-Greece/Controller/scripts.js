function loginValidation()
{
  var username = document.getElementById('username');
  var password = document.getElementById('password');
  //regexpression is used to check if the email format conforms with standard email rules
  var mailRegExpression = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

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
