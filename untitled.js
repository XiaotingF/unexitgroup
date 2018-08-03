function validateSignUp() {

	var password = document.getElementById("password1")
  , confirm_password = document.getElementById("password2");

  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }


password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
}