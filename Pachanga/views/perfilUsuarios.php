
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title> PACHANGA </title>
  <link rel="stylesheet" href="assets/css/listaPartidos.css">
  <link rel="stylesheet" href="assets/css/miPerfil.css">
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

          <div class="container-fluid miperfil">
                <h1 class="profile-name">@<?php echo $data[0]->getId(); ?></h1>
          </div>

          <!-- /********************************************************************/ -->

          <br>
          <div class="row ">
            <div class="col-xs-offset-1 col-xs-5 col-md-offset-3 col-md-3 cuadro_naranja">Distrito</div>
            <div class="col-xs-5 col-md-3 cuadro_negro"> Moncloa-Aravaca</div>
          </div>

          <div class="row ">
            <div class="col-xs-offset-1 col-xs-5 col-md-offset-3 col-md-3 cuadro_naranja">Email</div>
            <div class="col-xs-5 col-md-3 cuadro_negro"><?php echo $data[0]->getCorreo(); ?></div>
          </div>

          <div class="row ">
            <div class="col-xs-offset-1 col-xs-5 col-md-offset-3 col-md-3 cuadro_naranja">Skill</div>
            <div class="col-xs-5 col-md-3 cuadro_negro">
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star grey"></span>
              <span class="glyphicon glyphicon-star grey"></span>
              <span class="glyphicon glyphicon-star grey"></span>
            </div>
          </div>

          <div class="row ">
            <div class="col-xs-offset-1 col-xs-5 col-md-offset-3 col-md-3 cuadro_naranja ">Valoracion Media</div>
            <div class="col-xs-5 col-md-3 cuadro_negro">
              <span class="glyphicon glyphicon-heart"></span>
              <span class="glyphicon glyphicon-heart"></span>
              <span class="glyphicon glyphicon-heart"></span>
              <span class="glyphicon glyphicon-heart"></span>
              <span class="glyphicon glyphicon-heart grey"></span>
            </div>
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
