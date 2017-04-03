//Checks if user field is empty
function checkUser(){
	var user=document.getElementById("username");
	if(document.form.username.value == "")
		document.getElementById("usernameError").innerHTML = "Debes introducir un nombre de usuario";
	else
}

//Checks if email field is empty
function checkEmail(){
	var user=document.getElementById("email");
	if(document.form.username.value == "")
		document.getElementById("usernameError").innerHTML = "Debes introducir un correo electrónico";
	else
}

//Checks if password field is empty
function checkPassword(){
	var pass=document.getElementById("password");
	if(document.form.password.value == "")
		document.getElementById("passwordError").innerHTML = "Debes introducir una contraseña";
}
