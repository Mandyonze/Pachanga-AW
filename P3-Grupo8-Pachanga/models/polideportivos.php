<?php

  /**
   * Modelo Polideportivos
   */
  class Polideportivos extends EntityBase
  {

    private $id;
    private $distrito;
    private $url;

    /**
    * Constructor
    */
    function __construct()
    {
      $this->table = 'polideportivos';
      $this->class = "Polideportivos";
      parent::__construct($this->table, $this->class);
    }

    /**
    * Devuelve todos los polideportivos que hay en un distrito
    */
    public function getByDistrito($distrito){
      $req = $this->db()->prepare("SELECT * FROM $this->table  WHERE distrito = :distrito");
      $req->execute(array('distrito' => $distrito));
      $result = $req->fetchAll(PDO::FETCH_CLASS, $this->class);
      return $result;
    }

    // Getters y setters

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getUrl() {
      return $this->url;
    }

    public function setUrl($id) {
      $this->url = $url;
    }

    public function getDistrito() {
      return $this->distrito;
    }

    public function setDistrito($distrito) {
      $this->distrito = $distrito;
    }
  }
 ?>
