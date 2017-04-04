function checkUser(){
	var x = document.getElementById("username");

	if (x.value.length < 5) {
		document.getElementById("usernameError").src = "img/iconos/error.png";
		x.classList.remove('form-control-ok');
		x.classList.add('form-control-error')
	} else {

		document.getElementById("usernameError").src = "img/iconos/ok.png";
		x.classList.remove('form-control-error');
		x.classList.add('form-control-ok');
	}

}



function checkPass(){
	var x = document.getElementById("pass");

	if (x.value.length < 5) {
		document.getElementById("passError").src = "img/iconos/error.png";

		x.classList.remove('form-control-ok');
		x.classList.add('form-control-error')
	} else {

		document.getElementById("passError").src = "img/iconos/ok.png";
		x.classList.remove('form-control-error');
		x.classList.add('form-control-ok');
	}

}







// function checkPassword(){
// 	var x = document.getElementById("pasword");
//
// 	if (x.value.length < 5) {
// 		document.getElementById("passwordError").innerHTML = "Debes introducir tu nombre de USUARIO correcto";
// 		x.classList.add('form-control-error')
// 	} else {
// 		document.getElementById("passwordError").innerHTML = "";
// 		x.classList.remove('form-control-error')
// 	}
//
// }
