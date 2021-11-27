<?php
    require_once "includes/header.php";
    require_once "db/db_config.php";
    if(!isset($_SESSION['id'])){
        header('location: index.php');
    }
    else{
        if(isset($_POST['submit'])){
            $fullname = strip_tags($_POST['fullname']);
            $email= strip_tags($_POST['email']);
            $dob = $_POST['dob'];
            $security1 = strip_tags($_POST['security1']);
            $security2 = strip_tags($_POST['security2']);
            $userId = $_SESSION['id'];
            $isSuccess = $crud->editUserInfo($fullname, $email, $dob, $security1, $security2, $userId);
        }
        if($isSuccess){
            header("Location: profile.php?id=$userId");
        }
        else{
            echo "<h1 class=''> Process was not complete! </h1>";
        }
    }
?>