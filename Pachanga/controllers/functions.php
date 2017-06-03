<?php

function loadController($controller){
    $controlador = lcfirst($controller).'Controller';
    $strFileController = 'controllers/'.$controlador.'.php';

    if(!is_file($strFileController)){
        $strFileController='controllers/'.lcfirst(CONTROLADOR_DEFECTO).'Controller.php';
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
        loadAction($controllerObj, ACCION_DEFECTO);
    }
}

function urlSinSesion(){

  session_start();
  if(isset($_SESSION['username'])){
    return false;
  }
  if(isset($_GET['controller'])){
    $contr = ucfirst($_GET['controller']);
  }else {
    return true;
  }
  if(isset($_GET['action'])){
    $act = ucfirst($_GET['action']);
  }else {
    return true;
  }
  if($_GET['action'] == 'login' || $_GET['action'] == 'register'){
    return false;
  }
  if($contr == 'View'){
    return false;
  }
  return true;
}

?>
