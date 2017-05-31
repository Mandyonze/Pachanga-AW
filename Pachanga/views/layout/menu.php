<div class="profile-sidebar">
  <!-- SIDEBAR USERPIC -->
  <div class="profile-userpic">
    <img src="assets/img/iconos/huevo.png" class="img-responsive">
  </div>
  <!-- END SIDEBAR USERPIC -->
  <!-- SIDEBAR USER TITLE -->
  <div class="profile-usertitle">
    <div class="profile-usertitle-name">
        <?php  echo $data[0]->getNombre();?>
    </div>

    <div class="profile-usertitle-username">
      @<?php  echo $data[0]->getId();?>
    </div>
    </div>
    <!-- END SIDEBAR USER TITLE -->
    <!-- SIDEBAR BUTTONS -->
    <div class="profile-userbuttons">
      <a role = "button" class="btn btn-success btn-sm" href="<?php  echo $helper->url('usuarios' , 'perfil')?>&id=<?php echo $data[0]->getId();?>">Mi perfil </a>
      <button onclick="window.location.href='index.php?controller=partidos&action=inicio&logout=1'" type="button" class="btn btn-danger btn-sm">Logout</button>

      <?php
        if(isset($_GET['logout'])) {
          session_unset();
          session_destroy();
          header('Location: index.php?controller=View&action=home' );
        };
      ?>
    </div>
    <!-- END SIDEBAR BUTTONS -->
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu">
      <ul class="nav">
        <li <?php  echo  ($_GET["action"] == "inicio" || $_GET["action"] == "filtro") ? "class='active'" : ""; ?>>
          <a href="<?php  echo $helper->url('partidos' , 'inicio')?>">
        <i class="glyphicon glyphicon-home"></i>
        Inicio </a>
        </li>
        <li <?php  echo  ($_GET["action"] == "crear") ? "class='active'" : ""; ?>>
          <a href="<?php  echo $helper->url('partidos' , 'crear')?>">
        <i class="glyphicon glyphicon-plus"></i>
        Crear Partido </a>
        </li>
        <li <?php  echo  ($_GET["action"] == "mis") ? "class='active'" : ""; ?>>
          <a href="<?php  echo $helper->url('partidos' , 'mis')?>">
        <i class="glyphicon glyphicon-ok-circle"></i>
        Mis partidos </a>
        </li>
        <li <?php  echo  ($_GET["action"] == "mejores") ? "class='active'" : ""; ?>>
          <a href="<?php  echo $helper->url('usuarios' , 'mejores')?>">
        <i class="glyphicon glyphicon-heart-empty"></i>
        Mejores Jugadores </a>
        </li>
      </ul>
    </div>
    <!-- END MENU -->
</div>
