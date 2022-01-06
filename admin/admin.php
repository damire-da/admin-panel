<?php
require_once('../models/connect.php');
require_once('../models/student.php');


$link = db_connect();

if(isset($_GET['action']))
    $action = $_GET['action'];
else    
    $action = "";

if($action == "add"){
    if(!empty($_POST)){
        student_add($link, $_POST['last_name'],
        $_POST['birthday'], $_POST['gender'],
        $_POST['team'], $_POST['facult'],
        $_POST['place_work'], $_POST['city']);
        header("Location: admin.php");
    }
    include("../views/add.php");
}
else if($action == "edit"){
    if(!isset($_GET['id']))
        header("Location: admin.php");
    $id = (int)$_GET['id'];

    if(!empty($_POST) && $id > 0){
        student_edit($link, $id, $_POST['last_name'],
         $_POST['birthday'], $_POST['gender'],
        $_POST['team'], $_POST['facult'],
        $_POST['place_work'], $_POST['city']);
        header("Location: admin.php");
    }
    $student = student_get($link, $id);
    include("../views/edit.php");
}
else if($action == "remove"){
    $id = $_GET['id'];
    $student = student_remove($link, $id);
    header("Location: admin.php");
}else{
    $students = students_all($link);
    include('../views/table.php');
}

?>