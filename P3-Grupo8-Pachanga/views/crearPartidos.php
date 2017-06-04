<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title>Crear Partido</title>
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

          <?php if (isset($info) && ($info == 1 || $info == 2)) {
            echo "<div class='alert alert-danger'>";
            echo "<strong>ERROR!</strong> No se ha podido crear el partido.";
            echo "</div>";
          }
          ?>
          <?php if (isset($info) && $info == 0) {
            echo "<div class='alert alert-success alert-dismissable' data-dismiss='alert'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
            echo "¡<strong>Enhorabuena</strong> Has creado un partido!";
            echo "</div>";
          }
          ?>



          <!-- /********************************************************************/ -->

          <div class="container-fluid details-titulo">
            <h2>Crear Partido</h2>
          </div>

          <div class="container-fluid crearpartido">


            <form action="<?php echo $helper->url('partidos', 'nuevoPartido') ?>" method="post">

              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-tags"></span></span>
                <input type="text" name="nombre" class="form-control " id="nombre" placeholder="Nombre del partido" onchange="checkUser()" required>
                <span id="usernameSucces" class="glyphicon glyphicon-ok"></span>
                <span id="usernameError" class="glyphicon glyphicon-remove"></span>
              </div>

              <br>

              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                <input id='datepicker' name="fecha" data-date-format="dd-mm-yyyy" class="form-control feedback-input feedback-input-cal" placeholder="Fecha" required>
                <span id="usernameSucces" class="glyphicon glyphicon-ok"></span>
                <span id="usernameError" class="glyphicon glyphicon-remove"></span>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                <input type="number" name="hora" min="0" max="24" class="form-control " placeholder="Hora" required>
                <input type="number" name="minutos" min="0" max="59" class="form-control " placeholder="Minutos" required>
                <!-- <input  type="number" class="form-control "   required> -->
              </div>

              <br>

              <div class="input-group ">
                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                <select name="distrito" class="form-control buscar-partido-distrito" onchange="mostrarPolideportivo(this.value)" required>
                  <option selected disabled hidden requiered>Distrito</option>
                  <?php
                    foreach ($distritos as $distrito) {
                      echo "<option>";
                      echo $distrito->getId();
                      echo "</option>";
                    }
                   ?>
                </select>
              </div>

              <!-- <br> -->
              <div id="polideportivos">
                <!-- Auí se pintarán los polideportivos con ajax -->
              </div>

              <br>
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                <input type="number" name="skill" min="0" class="form-control " placeholder="Skill recomendado" required>
                <!-- <input  type="number" class="form-control "   required> -->
              </div>
              <br>
              <div id="mapa">
                <!-- Auí se pintarán el mapa con ajax -->
              </div>
              <br>
              <div class="centrar">
                <button type="reset" class="btn btn-danger button-ver-sin-float"> Borrar </button>
                <button type="submit" class="btn btn-warning button-ver-sin-float"> Enviar </button></div>
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
