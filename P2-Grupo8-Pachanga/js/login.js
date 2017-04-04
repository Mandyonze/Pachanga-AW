function checkUser(){
	var x = document.getElementById("username");

	if (x.value.length < 5) {
		document.getElementById("usernameError").innerHTML = "Debes introducir tu nombre de USUARIO correcto";
		x.classList.add('form-control-error')
	} else {
		document.getElementById("usernameError").innerHTML = "";
		x.classList.remove('form-control-error')
	}

}

function checkPassword(){
	var x = document.getElementById("pasword");

	if (x.value.length < 5) {
		document.getElementById("passwordError").innerHTML = "Debes introducir tu nombre de USUARIO correcto";
		x.classList.add('form-control-error')
	} else {
		document.getElementById("passwordError").innerHTML = "";
		x.classList.remove('form-control-error')
	}

}
