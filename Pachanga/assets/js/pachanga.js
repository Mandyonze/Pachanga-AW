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
function changeCompartir(id, partido){

  if (document.getElementById(id).style.display == "block") {
    document.getElementById(id).style.display = "none";
  }else{
    document.getElementById('idpar').value = partido;
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

var username = false;


function checkUser(x, aux){
	// var x = document.getElementById("username");

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

function checkNombre(x, aux){
	// var x = document.getElementById("username");

  if (x.value.length < 5) {
    $("#nombreErrorRegister").css({"display" : "inline"});
    $("#nombreSuccesRegister").css({"display" : "none"});
    x.classList.remove('form-control-ok');
    x.classList.add('form-control-error')
  } else {
    $("#nombreErrorRegister").css({"display" : "none"});
    $("#nombreSuccesRegister").css({"display" : "inline"});
    x.classList.remove('form-control-error');
    x.classList.add('form-control-ok');
  }

}

var pass = false;

function checkPass(x, aux){

    if (x.value.length < 5) {
      $("#passErrorRegister").css({"display" : "inline"});
      $("#passSuccesRegister").css({"display" : "none"});
      x.classList.remove('form-control-ok');
      x.classList.add('form-control-error')
      pass = false;
      } else {
      $("#passErrorRegister").css({"display" : "none"});
      $("#passSuccesRegister").css({"display" : "inline"});
      x.classList.remove('form-control-error');
      x.classList.add('form-control-ok');
      pass = true;
    }

}




/***************************************************************************************************************************
  Register
****************************************************************************************************************************/
function checkPass2(){
	var x = document.getElementById("pass2");
  var y = document.getElementById("pass");

	if (x.value != y.value || !pass) {
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

// Scroll to top of page when loading
$(document).ready(function(){
    $(this).scrollTop(0);
});


/***************************************************************************************/


// document.getElementById("mapa").innerHTML = "";


  function mostrarMapa(polideportivo) {
    if(polideportivo == "") {
      document.getElementById("mapa").innerHTML = "";
    } else {
      if (window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
      } else {
        xmlhttp = new ActiveXObject(Microsoft.XMLHTTP);
      }

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("mapa").innerHTML = this.responseText;
        }
      }

      xmlhttp.open("GET","index.php?controller=partidos&action=mapa&polideportivo="+polideportivo, true);
      xmlhttp.send();
    }
  }


  function mostrarPolideportivo(distrito) {
    if(distrito == "") {
      document.getElementById("polideportivos").innerHTML = "";


    } else {
      if (window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
      } else {
        xmlhttp = new ActiveXObject(Microsoft.XMLHTTP);
      }

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("polideportivos").innerHTML = this.responseText;
          document.getElementById("mapa").innerHTML = "";
        }
      }

      xmlhttp.open("GET","index.php?controller=partidos&action=elegirPolideportivo&distrito="+distrito, true);
      xmlhttp.send();
    }

  }
