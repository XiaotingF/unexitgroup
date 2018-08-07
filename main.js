function validateSignUp() {

	var password = document.getElementById("password1")
  , confirm_password = document.getElementById("password2");

  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
    alert("Passwords do not match");
  } else {
    confirm_password.setCustomValidity('');
  }


password.onchange = validateSignUp;
confirm_password.onkeyup = validateSignUp;
}


function validateLogin() {

	var email = document.forms["loginForm"]["email1"].value;
	var password = document.forms["loginForm"]["password1"].value;

	/*Other way for getting values
	var email = document.getElementById("email");
	  if(email.value == null) */

	if(email == null || email == "" || password == null || password == ""){
		alert("Please fill in both email and password fields");

		return false;
	}
}


/*
function validateSignUp() {


	var firstname = document.forms["signUpForm"]["firstname"].value;
	var email = document.forms["signUpForm"]["email1"].value;

	alert("Passwojhgjhgjhgkjhgjh hkkjhvgrds do not match");

	var password = document.forms["signUpForm"]["password2"].value;
	var password2 = document.forms["signUpForm"]["conpassword2"].value;

	

	if (password != password2) {


		password2.setCustomValidity("Passwords do not match");

	}


	

	if(firstname == null || firstname == "" || lastname == null || lastname == "" ||
		email == null || email == "" || password == null || password == "" ||
		password2 == null || password2 == ""){
		alert("Please fill all fields");

		return false;
	}



	



	/*var password = document.getElementById("password1")
  , confirm_password = document.getElementById("password2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


}
*/



