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
  Change the visibility of share form.
****************************************************************************************************************************/
function changeCompartir(id){

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

function checkUser(x, aux){
	// var x = document.getElementById("username");

if (aux == "login") {
  if (x.value.length < 5) {
		$("#usernameErrorLogin").css({"display" : "inline"});
		$("#usernameSuccesLogin").css({"display" : "none"});
		x.classList.remove('form-control-ok');
		x.classList.add('form-control-error')
	} else {
		$("#usernameErrorLogin").css({"display" : "none"});
		$("#usernameSuccesLogin").css({"display" : "inline"});
		x.classList.remove('form-control-error');
		x.classList.add('form-control-ok');
	}
} else {
  if (x.value.length < 5) {
    $("#usernameErrorRegister").css({"display" : "inline"});
    $("#usernameSuccesRegister").css({"display" : "none"});
    x.classList.remove('form-control-ok');
    x.classList.add('form-control-error')
  } else {
    $("#usernameErrorRegister").css({"display" : "none"});
    $("#usernameSuccesRegister").css({"display" : "inline"});
    x.classList.remove('form-control-error');
    x.classList.add('form-control-ok');
  }
}


}



function checkPass(x, aux){

	// var x = document.getElementById("pass");

  if (aux == "login") {
    if (x.value.length < 5) {
  		$("#passErrorLogin").css({"display" : "inline"});
  		$("#passSuccesLogin").css({"display" : "none"});
  		x.classList.remove('form-control-ok');
  		x.classList.add('form-control-error')
  	} else {
  		$("#passErrorLogin").css({"display" : "none"});
  		$("#passSuccesLogin").css({"display" : "inline"});
  		x.classList.remove('form-control-error');
  		x.classList.add('form-control-ok');
  	}
  } else {
    if (x.value.length < 5) {
      $("#passErrorRegister").css({"display" : "inline"});
      $("#passSuccesRegister").css({"display" : "none"});
      x.classList.remove('form-control-ok');
      x.classList.add('form-control-error')
    } else {
      $("#passErrorRegister").css({"display" : "none"});
      $("#passSuccesRegister").css({"display" : "inline"});
      x.classList.remove('form-control-error');
      x.classList.add('form-control-ok');
    }
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


/*******************************************/
