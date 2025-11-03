<?php
require_once 'model/User.php';
class UserController{
    public $user;

    public function __construct(){
        $this->user = new User();
    }

    public function createUser(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->user->createUser($name, $email, $password);
            header('Location: index.php?action=login');
        }
        include 'view/user/create.php';
    }
    public function login(){
        session_start();
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result = $this->user->login($email);
            if($result->num_rows == 1){
                $user = $result->fetch_assoc();
                if(password_verify($password, $user['password'])){
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['name'] = $user['name'];
                    header('Location: index.php');
                }else{
                    echo 'Icorrect Passowrd';
                }
            }else{
                echo 'Email not Exist';
            }
        }
        include('view/user/login.php');
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php");
        exit;
    }
}
?>
