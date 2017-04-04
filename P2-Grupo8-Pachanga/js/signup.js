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


function checkDistrict(){
	var x = document.getElementById("distrito");

	if (x.value.length < 5) {
		document.getElementById("distritoError").src = "img/iconos/error.png";

		x.classList.remove('form-control-ok');
		x.classList.add('form-control-error')
	} else {

		document.getElementById("distritoError").src = "img/iconos/ok.png";
		x.classList.remove('form-control-error');
		x.classList.add('form-control-ok');
	}

}



function checkPass2(){
	var x = document.getElementById("pass2");
  var y = document.getElementById("pass");

	if (x.value != y.value) {
		document.getElementById("pass2Error").src = "img/iconos/error.png";

		x.classList.remove('form-control-ok');
		x.classList.add('form-control-error')
	} else {

		document.getElementById("pass2Error").src = "img/iconos/ok.png";
		x.classList.remove('form-control-error');
		x.classList.add('form-control-ok');
	}

}



function checkEmail(){
	var x = document.getElementById("email");
  var patron = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

	if (x.value.search(patron)) {
    document.getElementById("emailError").src = "img/iconos/error.png";
    x.classList.remove('form-control-ok');
    x.classList.add('form-control-error');
	} else {

    document.getElementById("emailError").src = "img/iconos/ok.png";
    x.classList.remove('form-control-error');
    x.classList.add('form-control-ok');

	}

}
