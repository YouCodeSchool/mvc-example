<?php
abstract class Model{

    // infos de base de donnees
    private $host = "localhost";
    private $db_name = "mvc";
    private $user = "root";
    private $password = "";

    protected $connection;

    public $table;
    public $id;

    public function get_connection(){
        $this->connection = null;
        try{
            $this->connection = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name, $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $this->connection->exec();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function get_all(){
        $sql = "SELECT * FROM " . $this->table;
        $query = $this->connection->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function get_one(){
        $sql = "SELECT * FROM " . $this->table . " WHERE id = " . $this->id;
        $query = $this->connection->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}