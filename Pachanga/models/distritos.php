<?php


/**
 *
 */
class Distritos extends EntityBase
{

  private $id;

  function __construct()
  {
    $this->table = 'distritos';
    $class = "Distritos";
    parent::__construct($this->table, $class);
  }


  //GETTERS

  public function getId() {
    return $this->id;
  }


  //SETTERS

  public function setId($id) {
    $this->id = $id;
  }
}
 ?>
