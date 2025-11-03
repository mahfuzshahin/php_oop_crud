<?php
class Database{
    public $host = 'localhost';
    public $user = 'root';
    public $password = '';
    public $database = 'crud_app';
    public $conn;
    public function __construct(){
        $this->connect();
    }
    public function connect(){
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);

        if($this->conn->connect_error){
            Die('Failed Connection'.$this->conn->connect_error);
        }
    }
    
    
}