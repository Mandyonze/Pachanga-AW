<?php
  /**
  * Controlador base
  */
  class BaseController {

      function __construct() {
          require_once (BASE_PATH . '/app/models/EntityBase.php');
      }

      //Funcionalidades

      public function view($view, $entity, $data){
          if($data != ""){
            foreach ($data as $id_assoc => $valor) {
                ${$id_assoc} = $valor;
            }
          }

          require_once 'app/models/HelperView.php';

          $helper = new HelperView();

          require_once 'app/views/'.$view.$entity.'.php';
      }

      public function redirect($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION){
          header("Location:index.php?controller=".$controller."&action=".$action);
      }

  }
?>
