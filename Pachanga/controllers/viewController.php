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

    public function alert($msg) {
      echo "<script type='text/javascript'>alert('$msg');</script>";
    }


    public function home() {

        $this->view("home", $this->entity, array(
        ));
    }

    public function login() {


      $this->view("login", $this->entity, array(
        "error" => "User or password invalid"
      ));
    }

    public function error() {
        $this->view("error", $this->entity, array(
            "first_name" => "Estudiante",
            "last_name" => "UCM"
        ));
    }

}
