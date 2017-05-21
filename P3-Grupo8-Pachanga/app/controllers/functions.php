<?php
  function loadController($controller){
      $controlador = ucfirst($controller).'Controller';
      $strFileController = BASE_PATH . '/app/controllers/'.$controlador.'.php';

      if(!is_file($strFileController)){
          $strFileController= BASE_PATH . '/app/controllers/'.ucfirst(DEFAULT_CONTROLLER).'Controller.php';
      }

      require_once $strFileController;
      $controllerObj = new $controlador();
      return $controllerObj;
  }

  function loadAction($controllerObj, $action){
      $accion = $action;
      $controllerObj->$accion();
  }

  function execAction($controllerObj){
      if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
          loadAction($controllerObj, $_GET["action"]);
      }else{
          loadAction($controllerObj, DEFAULT_ACTION);
      }
  }
?>
