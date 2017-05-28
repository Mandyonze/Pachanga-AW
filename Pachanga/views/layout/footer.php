<?php echo "<!-- FOOTER HTML -->" ?>
<!-- ******************************************footer******************************************-->
<footer >
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="centrar">
          Join us
        </div>
        <hr>
        <a href="<?php echo $helper->url('view', 'register') ?>">Registrarse</a>
        <br>
        <a href="<?php echo $helper->url('view', 'login') ?>">Iniciar Sesión</a>
      </div>
      <div class="col-sm-4">
        <div class="centrar">
          Sobre Pachanga
        </div>
        <hr>
        <a href="<?php echo $helper->url('view', 'faq') ?>">Preguntas Frecuentes</a>
        <br>
        <a href="<?php echo $helper->url('view', 'legal') ?>">Aviso Legal</a>
</div>

      <div class="col-sm-4">
        <div class="centrar">
          ¿Quiénes somos?
        </div>
        <hr>
        <a href="<?php echo $helper->url('view', 'about') ?>">Sobre Nosotros</a>
        <br>
        <a href="<?php echo $helper->url('view', 'contacto') ?>">Contacto</a>
        <br><br>
        <a href="#" class="fa fa-facebook"></a> &nbsp;
        <a href="#" class="fa fa-twitter"></a> &nbsp;

      </div>

    <!-- row -->
    </div>
  </div>




  <br><br><br><br><br><br>
</footer>
