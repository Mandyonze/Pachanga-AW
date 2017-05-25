
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title> PACHANGA </title>
  <link rel="stylesheet" href="assets/css/crearPartidos.css">
</head>

<body>
  <header>
    <?php require_once('layout/header.php'); ?>
  </header>


  <div class="container  profile-container">
    <div class="row profile">
      <div class="hidden-xs hidden-sm col-md-3">
        <?php include('layout/menu.php'); ?>
      </div>
      <div class = "col-xs-12 col-sm-12 col-md-9">
        <div class="profile-content">

          <?php if (isset($error)) {
            echo "<div class='alert alert-danger'>";
            echo "<strong>ERROR!</strong> $error";
            echo "</div>";
          }
          ?>
          <?php if (isset($_GET["success"])) {
            echo "<div class='alert alert-success alert-dismissable' data-dismiss='alert'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
            if ($_GET["success"] == 0) {
              echo "¡<strong>Bienvenido</strong>  a pachanga!";
            }
            echo "</div>";
          }
          ?>



          <!-- /********************************************************************/ -->

          Inicio > Crear Partido  <br><br><br>

          <div class="container-fluid crearpartido">


            <form action="<?php echo $helper->url('usuarios' , 'login') ?>" method="post">

              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></span>
                <input type="text" name = "nombre" class="form-control " id ="nombre" placeholder="Nombre del partido" onchange="checkUser()"  required>
                <span id="usernameSucces" class="glyphicon glyphicon-ok"></span>
                <span id="usernameError" class="glyphicon glyphicon-remove"></span>
              </div>

              <br>


              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" name = "password" class="form-control" id ="pass" placeholder="Contraseña" onchange="checkPass()" required>
                <span id="passSucces" class="glyphicon glyphicon-ok"></span>
                <span id="passError" class="glyphicon glyphicon-remove"></span>
              </div>

              <br>


              <div class = "centrar">
              <button type="reset" class="btn-formulario cancelbtn"> Borrar </button>
              <button type="submit" class="btn-formulario sendbtn"> Crear </button></div>
          </form>
          </div>

          <!-- /********************************************************************/ -->
        </div>
      </div>
    </div>
  </div>



  <?php require_once('layout/footer.php'); ?>
  <?php require_once('layout/script.php'); ?>
</body>

</html>
