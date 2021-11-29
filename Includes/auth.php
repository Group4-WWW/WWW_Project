<?php 
    $flag = false;
    $attemptsByExistingUser = false;
    if($_SERVER['REQUEST_METHOD']== "POST"){
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        if(!empty($_POST['remember'])){
            $remember = $_POST['remember'];
            if($remember == 1){
                setcookie('username', $username, time()+60*60*24*10,"/");
                setcookie('password', $password, time()+60*60*24*10,"/");
    
            }
        }

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