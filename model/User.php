<?php
require_once 'config/Database.php';
class User extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function createUser($name, $email, $password){
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password') ";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function login($email){
        $sql = "SELECT * FROM users WHERE email = '$email' ";
        $result = $this->conn->query($sql);
        return $result;
    }

}