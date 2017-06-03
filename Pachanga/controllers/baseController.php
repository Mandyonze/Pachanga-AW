<?php

class BaseController {

    private $notificacion;

    function __construct() {
        require_once ('models/entityBase.php');
    }

    //Plugins y funcionalidades

    public function view($vista, $entity, $datos){

        require_once('models/notificaciones.php');
        $this->notificacion = new Notificaciones();


        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc} = $valor;
        }

        if(isset($data)){
          $terminados = $this->notificacion->misFinalizados($data[0]->getId());
          $compartidos = $this->notificacion->misCompartidos($data[0]->getId());
        }

        require_once 'models/helperView.php';

        $helper = new HelperView();

        require_once 'views/'.$vista.$entity.'.php';
    }

    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }

}
