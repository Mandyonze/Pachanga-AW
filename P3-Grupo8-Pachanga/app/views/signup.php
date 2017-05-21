<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title>Registro</title>

    <!--Metadatos-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Grupo 08: Borja Lorenzo, Guillermo Rius, Andrés Herranz y Axel Junestrand">
    <meta name="description" content="Proyecto 'Pachanga'">

    <!--Links-->
    <!-- FavIcon -->
    <link rel="icon" href="img/logos/Icono-Naranja.png" type="image/x-icon"/>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body class="back">

    <div class="container">
        <div class="formulario formulario-container">
          <div class="header-formulario">
            <div class = "centrar"><a href="index.html"><img class = "logo-formulario" src="img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a></div>
          </div>

          <div class="body-formulario">
            <div class = "centrar"><h3>Registrarse</h3></div>

            <form>

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control " id ="username" placeholder="Username" onchange="checkUser()">
                  <span id="usernameSucces" class="glyphicon glyphicon-ok"></span>
                  <span id="usernameError" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="input-group ">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                  <select class="form-control buscar-partido-distrito">
                    <option selected disabled hidden>Distrito</option>
                    <option>Fuencarral-El Pardo</option>
                    <option>Moncloa-Aravaca</option>
                    <option>Tetuán</option>
                    <option>Hortaleza</option>
                    <option>Chamartín</option>
                    <option>Ciudad Lineal</option>
                    <option>Chamberí</option>
                    <option>Barrio de Salamanca</option>
                    <option>San Blas</option>
                    <option>Barajas</option>
                    <option>Centro</option>
                    <option>Retiro</option>
                    <option>Arganzuela</option>
                    <option>Moratalaz</option>
                    <option>Villaverde</option>
                    <option>Usera</option>
                    <option>Latina</option>
                    <option>Carabanchel</option>
                    <option>Vicálvaro</option>
                    <option>Puente de Vallecas</option>
                    <option>Villa de Vallecas</option>
                  </select>
                </div>

                <!-- distrito -->

                <br>

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                  <input type="text" class="form-control" id ="email" placeholder="Correo electrónico" onchange="checkEmail()">
                  <span id="emailSucces" class="glyphicon glyphicon-ok"></span>
                  <span id="emailError" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>


      					<div class="input-group">
      						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
      						<input type="password" class="form-control" name = "pass" id ="pass" placeholder="Contraseña" onchange="checkPass()">
                  <span id="passSucces" class="glyphicon glyphicon-ok"></span>
                  <span id="passError" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

      					<div class="input-group">
      						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
      						<input type="password" class="form-control" name = "pass" id ="pass2" placeholder="Repetir Contraseña" onchange="checkPass2()">
                  <span id="pass2Succes" class="glyphicon glyphicon-ok"></span>
                  <span id="pass2Error" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="g-recaptcha" data-sitekey="6LdLhxsUAAAAAGKP4We-p1QlE9S7Wpf1eUc9UDa2"></div>

                <br>

                <div class="links">
                    ¿Ya tienes cuenta?<br><a href="index.html"> Iniciar Sesión</a>
                </div>

                <br>

                <div class = "centrar"><button type="button" onclick="window.location.href='index.html'" class="btn-formulario cancelbtn">Cancel</button>
                <button type="button" onclick="window.location.href='inicio.html'" class="btn-formulario sendbtn"> Entrar </button></div>
            </form>
          <!-- formulario-container -->
          </div>
        <!-- register formulario-container -->
        </div>
    <!-- container -->
    </div>



    <!--*********************************JAVASCRIPT*********************************-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>

    <script src='js/pachanga.js'></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>
