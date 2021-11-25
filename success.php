<?php 
    $title = "Request Submitted";
     require_once "includes/header.php";
     require_once "db/db_config.php";
     if(isset($_POST['submit'])){
         $fullname = strip_tags($_POST['review_name']);
         $email = strip_tags($_POST['review_email']);
         $message = strip_tags($_POST['review_text']);
         $isSuccess = $crud->insertClientRequest($fullname, $email, $message);
     }
 
     if($isSuccess){
         echo "<h1 class='text-center alert-success'> Successfully Registered </h1>";
     }
     else{
         echo "<h1 class='alert alert-danger text-center'> Process was not complete </h1>";
     }
?>