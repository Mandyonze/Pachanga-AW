<?php
  class Usuarios extends EntityBase {

    private $id;
    private $nombre;
    private $password;
    private $distrito;
    private $correo;
    private $skill;
    private $valoracion;

    public function __construct() {
      $this->table = "usuarios";
      $this->class = "Usuarios";
      parent::__construct($this->table, $this->class);
    }

    public function create() {
        $insert = $this->db()->prepare("INSERT INTO usuarios (id,  password, nombre, distrito, correo, skill, valoracion) VALUES (?, ?, ?, ?, ?, ?, ?)");

        $insert->bindParam(1, $this->id);
        $insert->bindParam(2, $this->password);
        $insert->bindParam(3, $this->nombre);
        $insert->bindParam(4, $this->distrito);
        $insert->bindParam(5, $this->correo);
        $insert->bindParam(6, $this->skill);
        $insert->bindParam(7, $this->valoracion);

        //Ejecutar la sentencia preparada
        $insert->execute();
    }

    public function ajustePuntes($jugador, $puntos){

      if($puntos < 0){
        $sql = "UPDATE usuarios SET skill = skill + '$puntos' WHERE id = '$jugador' and skill >= 10";
      }
      else {
        $sql = "UPDATE usuarios SET skill = skill + '$puntos' WHERE id = '$jugador'";
      }
      $stmt =  $this->db()->prepare($sql);
      $stmt->execute();
    }

    public function mejores($distrito) {

        $query=$this->db()->query("SELECT * FROM $this->table WHERE distrito = '$distrito' ORDER BY skill DESC"); //ORDER BY id DESC
        $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
        return $resultSet;
    }

    public function ckLogin($username, $password)
    {

      $pruebas = $this->getBy("id", $username);

      if (empty($pruebas)) {
        return 1;
      }

      $pass = $pruebas[0]->getPassword();
      $parts = explode('$', $pass);
      $test_hash = crypt($password, sprintf('$%s$%s$%s$', $parts[1], $parts[2], $parts[3]));

      if ($pass != $test_hash) {
        return 1;
      }

      session_start();
       $_SESSION['loggedin'] = true;
       $_SESSION['username'] = $username;
       $_SESSION['start'] = time();


       return 0;

    }

    public function ckRegister($username, $nombre,  $distrito, $mail, $password, $password2)
    {
      $pruebas = $this->getBy("id", $username);

      if (!empty($pruebas)) {
        return 1;
      }
      elseif ($password != $password2) {
        return 2;
      }

      $this->setId($username);
      $this->setNombre($nombre);
      $this->setDistrito($distrito);
      $this->setPassword($password);
      $this->setCorreo($mail);
      $this->setSkill(0);
      $this->setValoracion(0);

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

    // Name
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
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
