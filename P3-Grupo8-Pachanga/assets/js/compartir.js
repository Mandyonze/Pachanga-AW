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
