<?php echo "<!-- HEADER HTML -->" ?>

<nav id = 'nav' class="navbar navbar-default navbar-fixed-top topnav">
  <div class="container">
    <div class="navbar-header ">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <img src="assets/img/iconos/user.png" class="img-responsive" alt="">
      </button>

      <a href="<?php echo $helper->url('view', 'home') ?>"><img id = "logo" src="assets/img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a>
    <!-- div navbar-header  -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse centrar" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right centrar">
          <li>
            <button id = "register1" type="button" onclick="changeFormulario('signUp')" onkeypress="changeFormulario('signUp')" class="btn btn-default btn-header btn-register">Registrarse</button>
          </li>
          <li>
            <button type="button" onclick="changeFormulario('login')"  onkeypress="changeFormulario('login')" class="btn btn-default btn-header btn-login">Iniciar Sesión</button>
          </li>
        </ul>
    </div>

  <!-- div container  -->
  </div>

</nav>
