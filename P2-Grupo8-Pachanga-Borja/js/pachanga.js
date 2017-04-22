/***************************************************************************************************************************
  Index
****************************************************************************************************************************/
/***************************************************************************************************************************
  Change the nav in orange when do scroll.
****************************************************************************************************************************/

$(document).ready(function(){


  var flag = false;
  var scroll;

  $(window).scroll(function(){
    scroll = $(window).scrollTop();

    if (scroll > 100) {

      if (!flag){
        $("#nav").css({"background-color" : "orange"});
        flag = true;
      }

    } else {
      if (flag) {
        $("#nav").css({"background-color" : "transparent"});
        flag = false;
      }

    }

  });

});

/***************************************************************************************************************************
  Change the visibility of formulario according to the action.
****************************************************************************************************************************/
function changeFormulario(id){

  if (id == "login") {
    document.getElementById("signUp").style.display = "none";
  } else {
    document.getElementById("login").style.display = "none";
  }

  if (document.getElementById(id).style.display == "block") {
    document.getElementById(id).style.display = "none";
  }else{
    document.getElementById(id).style.display = "block"
    cerrar(id);
  }

}
/***************************************************************************************************************************
  When the user clicks anywhere outside of the login/register, close it
****************************************************************************************************************************/


function cerrar(id) {
  var cerrar = document.getElementById(id);

  window.onclick = function(event) {
      if (event.target == cerrar) {
          cerrar.style.display = "none";
      }
  }
}


/***************************************************************************************************************************
  Login
****************************************************************************************************************************/

function checkUser(){
	var x = document.getElementById("username");



	if (x.value.length < 5) {
		$("#usernameError").css({"display" : "inline"});
		$("#usernameSucces").css({"display" : "none"});
		x.classList.remove('form-control-ok');
		x.classList.add('form-control-error')
	} else {
		$("#usernameError").css({"display" : "none"});
		$("#usernameSucces").css({"display" : "inline"});
		x.classList.remove('form-control-error');
		x.classList.add('form-control-ok');
	}

}



function checkPass(){

	var x = document.getElementById("pass");

	if (x.value.length < 5) {
		$("#passError").css({"display" : "inline"});
		$("#passSucces").css({"display" : "none"});
		x.classList.remove('form-control-ok');
		x.classList.add('form-control-error')
	} else {

		$("#passSucces").css({"display" : "inline"});
		$("#passError").css({"display" : "none"});
		x.classList.remove('form-control-error');
		x.classList.add('form-control-ok');
	}

}




/***************************************************************************************************************************
  Register
****************************************************************************************************************************/
function checkPass2(){
	var x = document.getElementById("pass2");
  var y = document.getElementById("pass");

	if (x.value != y.value) {
    $("#pass2Error").css({"display" : "inline"});
    $("#pass2Succes").css({"display" : "none"});

		x.classList.remove('form-control-ok');
		x.classList.add('form-control-error')
	} else {

    $("#pass2Succes").css({"display" : "inline"});
    $("#pass2Error").css({"display" : "none"});
		x.classList.remove('form-control-error');
		x.classList.add('form-control-ok');
	}

}



function checkEmail(){
	var x = document.getElementById("email");
  var patron = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

	if (x.value.search(patron)) {
    $("#emailError").css({"display" : "inline"});
    $("#emailSucces").css({"display" : "none"});
    x.classList.remove('form-control-ok');
    x.classList.add('form-control-error');
	} else {

    $("#emailSucces").css({"display" : "inline"});
    $("#emailError").css({"display" : "none"});
    x.classList.remove('form-control-error');
    x.classList.add('form-control-ok');

	}

}
