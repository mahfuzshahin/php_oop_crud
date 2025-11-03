<?php
require_once 'config/Database.php';
class Student extends Database{
    public function __construct(){
        parent::__construct();
    }

    public function getStudent(){
        $sql = "SELECT * FROM students";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function createStudent($name, $email, $roll){
        // $name = $this->conn->real_escape_string($name);
        // $email = $this->conn->real_escape_string($email);
        // $roll = $this->conn->real_escape_string($roll);
        $sql = "INSERT INTO students (name, email, roll) VALUES ('$name', '$email', '$roll') ";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function findStudentById($id){
        $sql = "SELECT * FROM students where id='$id' ";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
    public function editStudent($id, $name, $email, $roll){
        $sql = "UPDATE students SET name='$name', email='$email', roll='$roll' WHERE id='$id' ";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteStudent($id){
        $sql = "DELETE FROM students where id = '$id' ";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>