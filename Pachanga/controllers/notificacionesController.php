
<?php

class NotificacionesController extends BaseController{

    private $entity;
    private $notificacion;

    public function __construct() {
        parent::__construct();
        require_once('models/notificaciones.php');

        $this->notificacion = new Notificaciones();
        $this->entity = "Notificaciones";
    }

    public function partidoCompartido(){

      session_start();
      $receptor = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $partido = filter_var($_POST['idpar'], FILTER_SANITIZE_NUMBER_INT);
      $emisor = $_SESSION['username'];
      $this->notificacion->insertNotificacion($partido, $receptor, 2, $emisor);
      header('Location:index.php?controller=partidos&action=inicio');
    }
}

?>
