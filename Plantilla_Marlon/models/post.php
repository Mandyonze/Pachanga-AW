<?php

/**
 * Class Post
 * @
 */

class Post extends EntityBase {

    private $id;
    private $author;
    private $content;
    private $email;
    private $user_create;
    private $telephone;
    private $table;

    public function __construct() {
        $this->table = "post";
        $class = "Post";
        parent::__construct($this->table, $class);
    }

    /**
     * @return bool|mysqli_result
     */
    public function create() {
        $key = "";
        try {
            if ($insert = $this->db()->prepare("INSERT INTO post (author, email, telephone, content, user_create) VALUES (?, ?, ?, ?, ?)")) {
                $insert->bind_param('sssss', $this->author, $this->email, $this->telephone, $this->content, $this->user_create);
                if (!$insert->execute()) {
                    $key = "901"; //Codigo Error/Informacion "El registro no se ha podido crear correctamente"
                } else {
                    $key = "100"; //Codigo Error/Informacion "Registro creado correctamente"
                }
            } else {
                $key = $this->db()->error; //Codigo Error/Informacion "Error directo de base de datos"
            }
        } catch (Exception $e) {
            header('Location: ../error.php?err=' . $e->getMessage() . "\n");
        }
        return $key;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUserCreate()
    {
        return $this->user_create;
    }

    /**
     * @param mixed $user_create
     */
    public function setUserCreate($user_create)
    {
        $this->user_create = $user_create;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }
}
?>