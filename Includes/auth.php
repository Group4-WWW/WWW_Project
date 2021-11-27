<?php 
    $flag = false;
    if($_SERVER['REQUEST_METHOD']== "POST"){
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        $salt = $userNew->getSalt();
        $encryptedPass = md5($password.$username.$salt);
        $result = $userNew->getUser($username,$encryptedPass);
        if(!$result){
            $flag = true;
        }
        else{
            $id = $result['user_id'];
            $_SESSION['id'] = $id;
        }
    }


?>