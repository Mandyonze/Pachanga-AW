<?php
class Usuarios extends EntityBase
{

  private $id;
  private $password;
  private $distrito;
  private $correo;
  private $skill;
  private $valoracion;

  public function __construct() {
    $this->table = "usuarios";
    $class = "Usuarios";
    parent::__construct($this->table, $class);
  }

public function create() {
    $insert = $this->db()->prepare("INSERT INTO usuarios (id, password, distrito, correo, skill, valoracion) VALUES (?, ?, ?, ?, ?, ?)");

    $insert->bindParam(1, $this->id);
    $insert->bindParam(2, $this->password);
    $insert->bindParam(3, $this->distrito);
    $insert->bindParam(4, $this->correo);
    $insert->bindParam(5, $this->skill);
    $insert->bindParam(6, $this->valoracion);

    //Ejecutar la sentencia preparada
    $insert->execute();
}


public function ckLogin($username, $password)
{

  $pruebas = $this->getBy("id", $username);

  if (empty($pruebas) || $pruebas[0]->getPassword() != $password) {
    return 1;
  }

  session_start();
   $_SESSION['loggedin'] = true;
   $_SESSION['username'] = $username;
   $_SESSION['start'] = time();


   return 0;

}

public function ckRegister($username, $distrito, $mail, $password, $password2)
{
  $pruebas = $this->getBy("id", $username);

  if (!empty($pruebas)) {
    return 1;
  }
  elseif ($password != $password2) {
    return 2;
  }

  $this->setId($username);
  $this->setDistrito($distrito);
  $this->setPassword($password);
  $this->setCorreo($mail);
  $this->setSkill(5);
  $this->setValoracion(5);

  $this->create();

  session_start();
   $_SESSION['loggedin'] = true;
   $_SESSION['username'] = $username;
   $_SESSION['start'] = time();


   return 0;
}

/*Métodos get() y set()*/

// Id
public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

// Password
public function getPassword(){
    return $this->password;
}

public function setPassword($password){
    $this->password = $password;
}

// Distrito
public function getDistrito(){
    return $this->distrito;
}

public function setDistrito($distrito){
    $this->distrito = $distrito;
}

// Correo
public function getCorreo(){
    return $this->correo;
}

public function setCorreo($correo){
    $this->correo = $correo;
}

// Skill
public function getSkill(){
    return $this->skill;
}

public function setSkill($skill){
    $this->skill = $skill;
}

// Valoracion
public function getValoracion(){
    return $this->valoracion;
}

public function setValoracion($valoracion){
    $this->valoracion = $valoracion;
}

}


 ?>
