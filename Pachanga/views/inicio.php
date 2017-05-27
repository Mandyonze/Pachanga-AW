<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title> PACHANGA </title>
  <link rel="stylesheet" href="assets/css/inicio.css">
  <link rel="stylesheet" href="assets/css/listaPartidos.css">
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

          <?php print_r($partidos)?>

        </div>
      </div>
    </div>
  </div>



  <?php require_once('layout/footer.php'); ?>
  <?php require_once('layout/script.php'); ?>
</body>

</html>




<!-- ***************************************************************** -->

<div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <div class="row">
          <div class="col-xs-4 col-md-3">Champions 201</div>
          <div class="col-xs-4 col-md-3">Moncloa-Aravaca</div>
          <div class="hidden-xs hidden-sm col-md-2">7/14</div>
          <div class="col-xs-4 col-md-2">22-5-2017</div>
          <div class="hidden-xs hidden-sm col-md-2">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star grey"></span>
            <span class="glyphicon glyphicon-star grey"></span>
            <span class="glyphicon glyphicon-star grey"></span>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div id="collapse1" class="panel-collapse collapse in">
    <div class="panel-body back-white back-white">
      <div class="row">
        <div class="col-xs-6 col-md-6"><a href="datosPartido.html" class="btn btn-warning button-ver mouse-over" role="button">Ver</a></div>
        <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick='changeCompartir("compartir")' role="button">Compartir</a></div>
      </div>
    </div>
  </div>
</div>
