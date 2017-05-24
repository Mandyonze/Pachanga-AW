<?php
/**
 * Created by IntelliJ IDEA.
 * User: mcardenas
 * Date: 11/05/17
 * Time: 0:06
 */

class BaseController {

    function __construct() {
        require_once ('models/entityBase.php');
    }

    //Plugins y funcionalidades

    public function view($vista, $entity, $datos){
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc} = $valor;
        }

        require_once 'models/helperView.php';

        $helper = new HelperView();

        require_once 'views/'.$vista.$entity.'.php';
    }

    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }

}