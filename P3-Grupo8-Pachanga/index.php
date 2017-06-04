<?php
    require_once('config/global.php');
    require_once('config/dbconnect.php');
    require_once('controllers/functions.php');
    require_once('controllers/baseController.php');

    if(urlSinSesion()){
      header('Location:index.php?controller=View&action=home');
    }

    if(isset($_GET["controller"])){
        $controllerObj = loadController($_GET["controller"]);
        execAction($controllerObj);
    }else{
        $controllerObj=loadController(CONTROLADOR_DEFECTO);
        execAction($controllerObj);
    }
?>
