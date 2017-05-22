<?php
  require_once(BASE_PATH . '/app/models/EntityBase.php');

  class PartidoController extends BaseController{

      private $partido;
      private $entity;

      public function __construct() {
          parent::__construct();
          require_once(BASE_PATH . '/app/models/Partido.php');

          $this->partido = new Partido();
          $this->entity = "Partidos";
      }

      /**
      * Mostrar todos los partidos registrados
      */
      public function lista() {
          // Guardar el partido en un array
          $partidos = $this->partido->getAll();
          $this->view("lista", $this->entity, array(
              "partidos" => $partidos
          ));
      }

      /**
      * Mostrar un partido en concreto
      */
      public function mostrar() {
          if (!isset($_GET['id'])) {
              $this->view("error", "", "");
          }
          else{
            $partidos = $this->partido->getById($_GET['id']);
            $this->view("mostrar", $this->entity, array(
                "partidos" => $partidos
            ));
          }
      }
  }

?>
