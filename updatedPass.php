<?php 
    $title = "Password Updated";
    require_once "includes/header.php";
    require_once "db/db_config.php";

    if(isset($_SESSION['username'])){
        echo "<h2  class = 'mycss_2'>Your Password has been updated please try to login again. Thank you!</h2>";
    }
    else{
        header("location: index.php");
    }
?>