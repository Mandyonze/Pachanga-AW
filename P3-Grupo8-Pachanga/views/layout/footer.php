<?php echo "<!-- FOOTER HTML -->" ?>
<!-- ******************************************footer******************************************-->
<footer >
  <br><br>
  <div class="container">
    <div class="row">
        <?php
          // Si el usuario ha iniciado sesión no le mostramos la opción de
          // iniciar sesión o registrarse
          if(isset($_SESSION['loggedin'])){
            $columns = 6;
          }else{
            $columns = 4
        ?>
        <div class="col-sm-<?php echo $columns; ?>">
          <div class="centrar">
            Join us
          </div>
          <hr>
          <a href="<?php echo $helper->url('view', 'register') ?>">Registrarse</a>
          <br>
          <a href="<?php echo $helper->url('view', 'login') ?>">Iniciar Sesión</a>
        </div>
      <?php } ?>
      <div class="col-sm-<?php echo $columns; ?>">
        <div class="centrar">
          Sobre Pachanga
        </div>
        <hr>
        <a href="<?php echo $helper->url('view', 'faq') ?>">Preguntas Frecuentes</a>
        <br>
        <a href="<?php echo $helper->url('view', 'legal') ?>">Aviso Legal</a>
        <br>
        <a href="<?php echo $helper->url('view', 'teacher') . "#cabecera" ?>">Documentación para el profesor</a>
      </div>

      <div class="col-sm-<?php echo $columns; ?>">
        <div class="centrar">
          ¿Quiénes somos?
        </div>
        <hr>
        <a href="<?php echo $helper->url('view', 'about') ?>">Sobre Nosotros</a>
        <br>
        <a href="<?php echo $helper->url('view', 'contacto') ?>">Contacto</a>
        <br><br>
        <a href="https://www.facebook.com" class="fa fa-facebook"></a> &nbsp;
        <a href="https://twitter.com" class="fa fa-twitter"></a> &nbsp;

      </div>

    <!-- row -->
    </div>
  </div>




  <br><br><br><br><br><br>
</footer>
