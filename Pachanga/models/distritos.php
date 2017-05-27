<?php


/**
 *
 */
class Distritos extends EntityBase
{

  private $id;
  private $url;

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

  //GETTERS

  public function getUrl() {
    return $this->url;
  }


  //SETTERS

  public function setUrl($url) {
    $this->url = $url;
  }
}
 ?>
