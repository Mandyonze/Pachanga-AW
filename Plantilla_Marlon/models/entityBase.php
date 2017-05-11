<?php
/**
 * Created by IntelliJ IDEA.
 * User: mcardenas
 * Date: 10/05/17
 * Time: 12:21
 */

class EntityBase{

    /**
     * @var string
     */
    private $table;
    private $class;

    private $db;

    public function db() {
        return $this->db;
    }

    /**
     * EntityBase constructor.
     * @param $table
     */
    public function __construct($table, $class) {
        $this->table=(string) $table;
        $this->class=(string) $class;
        $this->db = ConnDB::getConn();
    }

    public function getAll(){
        $query=$this->db()->query("SELECT * FROM $this->table  ORDER BY id DESC");
        $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
        return $resultSet;
    }

    public function getById($id){
        $id = intval($id);
        $req = $this->db()->prepare("SELECT * FROM $this->table  WHERE id = :id");
        $req->execute(array('id' => $id));
        $result = $req->fetchAll(PDO::FETCH_CLASS, $this->class);
        return $result;
    }

    public function getBy($column, $value){
        $req = $this->db()->prepare("SELECT * FROM $this->table WHERE $column = :value");
        $req->execute(array('value' => $value));
        $result = $req->fetchAll(PDO::FETCH_CLASS, $this->class);
        return $result;
    }

    public function deleteById($id){
        $id = intval($id);
        $query=$this->db()->query("DELETE FROM $this->table WHERE id = $id");
        return $query;
    }

    public function deleteBy($column,$value){
        $query=$this->db()->query("DELETE FROM $this->table WHERE $column = '$value'");
        return $query;
    }

}
?>