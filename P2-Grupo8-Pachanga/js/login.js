function checkUser(){
	var user=document.getElementById("username");
	if(document.form.username.value == "")
		document.getElementById("usernameError").innerHTML = "Debes introducir un nombre de usuario";
	else
}

function checkPassword(){
	var pass=document.getElementById("password");
	if(document.form.password.value == "")
		document.getElementById("passwordError").innerHTML = "Debes introducir una contraseña";
}