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
      <div class="col-xs-12 col-sm-12 col-md-9">
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

          <div class="container-fluid details-titulo">
            <h2>Crear Partido</h2>
          </div>

          <div class="container-fluid crearpartido">


            <form action="<?php echo $helper->url('partidos', 'nuevoPartido') ?>" method="post">
              <div class="input-group ">
                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                <select name="polideportivo" class="form-control buscar-partido-distrito" required>
                  <option selected disabled hidden requiered>Polideportivo</option>
                  <?php
                    foreach ($polideportivos as $polideportivo) {
                      echo "<option>";
                      echo $polideportivo->getId();
                      echo "</option>";
                    }
                   ?>
                   <input name="nombre" value="<?php echo $_POST["nombre"]; ?>"  type="text" required hidden>
                   <input name="fecha" value="<?php echo $_POST["fecha"]; ?>"  type="text" required hidden>
                   <input name="hora" value="<?php echo $_POST["hora"]; ?>"  type="number" required hidden>
                   <input name="minutos" value="<?php echo $_POST["minutos"]; ?>"  type="number" required hidden>
                   <input name="skill" value="<?php echo $_POST["skill"]; ?>"  type="number" required hidden>
                </select>
              </div>
              <br>
              <div class="centrar">
                <button type="reset" class="btn btn-danger"> Borrar </button>
                <button type="submit" class="btn btn-warning"> Crear </button></div>
            </form>
          </div>

          <!-- /********************************************************************/ -->
        </div>
      </div>
    </div>
  </div>



  <?php require_once('layout/footer.php'); ?>
  <?php require_once('layout/script.php'); ?>

  <script src='assets/js/datepicker.js'></script>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>


</body>

</html>
