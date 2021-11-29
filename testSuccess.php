<?php 
    $title = "Request Submitted";
     require_once "includes/header.php";
     require_once "db/db_config.php";
     if(isset($_POST['submit'])){
        $fullname = strip_tags($_POST['review_name']);
        $email = strip_tags($_POST['review_email']);
        $message = strip_tags($_POST['review_text']);
        $time = time();
        $file = "messages/".$fullname.$time.'.txt';
        $writeFile = fopen($file, "w") or die("Unable to open file!");
        fwrite($writeFile, $message);
        fclose($writeFile);

         $isSuccess = $crud->insertClientRequest($fullname, $email, $file, $time);
         if($isSuccess){
            echo "<h1 class= 'mycss '> Your message has been registered in the system! Thank you! </h1>";
        }
        else{
           echo "<h1 class='mycss_1'> Process was not complete </h1>";
        }
     }
     else{
        echo "<h1 class='mycss_1'> Error! Process was not complete </h1>";
     }
?>