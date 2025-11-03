<?php
require_once 'model/Student.php';
class StudentController{
    public $student;

    public function __construct(){
        $this->student = new Student();
        // session_start();
        // if(!isset($_SESSION['user_id'])){
        //     header('Location: login.php');
        // }
    }

    public function getStudent(){
        $student_data = $this->student->getStudent();
        include 'view/student/index.php';
    }
    public function createStudent(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $this->student->createStudent($_POST['name'], $_POST['email'], $_POST['roll']);
            header('Location: index.php');
        }
        include 'view/student/create.php';
    }
    public function editStudent($id){
        $studentInfo = $this->student->findStudentById($id);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $this->student->editStudent($id, $_POST['name'], $_POST['email'], $_POST['roll']);
            header('Location: index.php');
        }
        include 'view/student/edit.php';
    }
    public function deleteStudent($id){
        $this->student->deleteStudent($id);
        header('Location: index.php');
        exit;
    }
}
?>