<?php

  /**
   * Clase Grupo
   * @
   */
  class Partido extends EntityBase {
      private $id;
      private $polideportivo;
      private $fecha;
      private $creador;
      private $GolesEquipo1;
      private $GolesEquipo2;

      public function __construct() {
          $this->table = "partidos";
          $class = "Partido";
          parent::__construct($this->table, $class);
      }

      /**
       * Crear Partido
       */
      public function create() {
          $insert = $this->db()->prepare("INSERT INTO partidos (id, polideportivo, fecha, creador, GolesEquipo1, GolesEquipo2) VALUES (?, ?, ?, ?, ?, ?)");

          //Variables a insertar
          $id = $this->getId();
          $polideportivo = $this->getPolideportivo();
          $fecha = $this->getFecha();
          $creador = $this->getCreador();
          $GolesEquipo1 = $this->getGolesEquipo1();
          $GolesEquipo2 = $this->getGolesEquipo2();

          $insert->bindParam(1, $id, PDO::PARAM_STR);
          $insert->bindParam(2, $polideportivo, PDO::PARAM_STR);
          $insert->bindParam(3, $fecha, PDO::PARAM_STR);
          $insert->bindParam(4, $creador, PDO::PARAM_STR);
          $insert->bindParam(5, $GolesEquipo1, PDO::PARAM_INT);
          $insert->bindParam(6, $GolesEquipo2, PDO::PARAM_INT);

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

      // polideportivo
      public function getPolideportivo(){
          return $this->polideportivo;
      }

      public function setPolideportivo($polideportivo){
          $this->polideportivo = $polideportivo;
      }

      // fecha
      public function getFecha(){
          return $this->fecha;
      }

      public function setFecha($fecha){
          $this->fecha = $fecha;
      }

      // creador
      public function getCreador(){
          return $this->creador;
      }

      public function setCreador($creador){
          $this->creador = $creador;
      }

      // GolesEquipo1
      public function getGolesEquipo1(){
          return $this->GolesEquipo1;
      }

      public function setGolesEquipo1($GolesEquipo1){
          $this->GolesEquipo1 = $GolesEquipo1;
      }

      // GolesEquipo2
      public function getGolesEquipo2(){
          return $this->GolesEquipo2;
      }

      public function setGolesEquipo2($GolesEquipo2){
          $this->GolesEquipo2 = $GolesEquipo2;
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
