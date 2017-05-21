<?php
    //Path por defecto del proyecto
    define("BASE_PATH", realpath(dirname(__FILE__)));

    require_once(BASE_PATH . '/app/config/global.php');
    require_once(BASE_PATH . '/app/config/DAO.php');
    require_once(BASE_PATH . '/app/controllers/functions.php');
    require_once(BASE_PATH . '/app/controllers/BaseController.php');

    if(isset($_GET["controller"])){
        $controllerObj = loadController($_GET["controller"]);
        execAction($controllerObj);
    }else{
        //Definimos el controlador por defecto
        $controllerObj = loadController(DEFAULT_CONTROLLER);
        execAction($controllerObj);
    }
?>
