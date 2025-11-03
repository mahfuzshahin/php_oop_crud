<?php
require_once 'controller/StudentController.php';
require_once 'controller/UserController.php';
$controller = new StudentController();
$userCont = new UserController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;
switch($action){
    case 'create':
        $controller->createStudent();
        break;
    case 'edit':
        $controller->editStudent($id);
        break;
    case 'delete':
        $controller->deleteStudent($id);
        break;
    case 'registration':
        $userCont->createUser();
        break;
    case 'login':
        $userCont->login();
        break;
    case 'logout':
        $userCont->logout();
        break;
    default:
        $controller->getStudent();
        break;

}
?>