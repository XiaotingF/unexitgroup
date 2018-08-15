


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



function validateSignUp() {


	var firstname = document.forms["signUpForm"]["firstname"].value;
	var lastname = document.forms["signUpForm"]["lastname"].value;
	var email = document.forms["signUpForm"]["email1"].value;
	var password = document.forms["signUpForm"]["password2"].value;
	var password2 = document.forms["signUpForm"]["conpassword2"].value;

	

	if(firstname == null || firstname == "" || lastname == null || lastname == "" ||
		email == null || email == "" || password == null || password == "" ||
		password2 == null || password2 == ""){
		alert("Please fill all fields");

		return false;
	}

	if (password != password2) {
		alert("Passwords do not match")
		password2.setCustomValidity("Passwords do not match");

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
confirm_password.onkeyup = validatePassword;*/


}