<?php
/**
 * Created by IntelliJ IDEA.
 * User: mcardenas
 * Date: 11/05/17
 * Time: 0:16
 */

class HelperView{

    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }

}
?>