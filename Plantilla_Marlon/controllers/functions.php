<?php
/**
 * Created by IntelliJ IDEA.
 * User: mcardenas
 * Date: 11/05/17
 * Time: 0:23
 */
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