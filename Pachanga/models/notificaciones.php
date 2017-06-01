<?php


/**
 *
 */
class Notificaciones extends EntityBase
{

  private $id;
  private $partido;
  private $usuario;
  private $tipo;

  function __construct()
  {
    $this->table = 'notificaciones';
    $this->class = "Notificaciones";
    parent::__construct($this->table, $this->class);
  }

  public function create() {

      $insert = $this->db()->prepare("INSERT INTO notificaciones (id, partido, usuario, tipo) VALUES (?, ?, ?, ?)");

      $insert->bindParam(1, $this->id);
      $insert->bindParam(2, $this->partido);
      $insert->bindParam(3, $this->usuario);
      $insert->bindParam(4, $this->tipo);

      //Ejecutar la sentencia preparada
      $insert->execute();
  }

  public function insertNotificacion($partido, $usuario, $tipo){

    $this->setPartido($partido);
    $this->setUsuario($usuario);
    $this->setTipo($tipo);

    $this->create();
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
  public function getPartido() {
    return $this->partido;
  }
  //SETTERS
  public function setPartido($partido) {
    $this->partido = $partido;
  }

  //GETTERS
  public function getUsuario() {
    return $this->usuario;
  }
  //SETTERS
  public function setUsuario($usuario) {
    $this->usuario = $usuario;
  }

  //GETTERS
  public function getTipo() {
    return $this->tipo;
  }
  //SETTERS
  public function setTipo($tipo) {
    $this->tipo = $tipo;
  }
}
 ?>
