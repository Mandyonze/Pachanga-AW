<?php
  require_once(BASE_PATH . '/app/models/EntityBase.php');

  class ViewController extends BaseController {
      private $entity;

      function __construct() {
          parent::__construct();
          $this->entity = "";
      }

      public function home() {
          $this->view("home", $this->entity, "");
      }
  }
?>
