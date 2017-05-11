<?php

/**
 * Class PagesController
 */
class ViewController extends BaseController {

    private $entity;

    function __construct() {
        parent::__construct();
        $this->entity = "";

    }

    public function home() {
        $this->view("home", $this->entity, array(
            "first_name" => "Estudiante",
            "last_name" => "UCM"
        ));
    }

    public function error() {
        $this->view("error", $this->entity, array(
            "first_name" => "Estudiante",
            "last_name" => "UCM"
        ));
    }

}