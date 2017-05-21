<?php

  /**
   * Clase Usuario
   * @
   */
  class Usuario extends EntityBase {
      private $id;
      private $password;
      private $distrito;
      private $correo;
      private $skill;
      private $valoracion;

      public function __construct() {
          $this->table = "usuarios";
          $class = "usuario";
          parent::__construct($this->table, $class);
      }

      /**
       * Crear usuario
       */
      public function create() {
          $insert = $this->db()->prepare("INSERT INTO usuarios (id, password, distrito, correo, skill, valoracion) VALUES (?, ?, ?, ?, ?, ?)");

          //Variables a insertar
          $id = $this->getId();
          $password = $this->getPassword();
          $distrito = $this->getDistrito();
          $correo = $this->getCorreo();
          $skill = $this->getSkill();
          $valoracion = $this->getValoracion();

          $insert->bindParam(1, $id, PDO::PARAM_STR);
          $insert->bindParam(2, $password, PDO::PARAM_STR);
          $insert->bindParam(3, $distrito, PDO::PARAM_STR);
          $insert->bindParam(4, $correo, PDO::PARAM_STR);
          $insert->bindParam(5, $skill, PDO::PARAM_INT);
          $insert->bindParam(6, $valoracion, PDO::PARAM_INT);

          //Ejecutar la sentencia preparada
          $insert->execute();
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

      // Tabla de la BD
      public function getTable(){
          return $this->table;
      }

      function setTable($table){
          $this->table = $table;
      }
  }
?>
