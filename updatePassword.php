<?php
    $title = "Forgot Password";
    require_once "includes/header.php";
    require_once "db/db_config.php";

    $flag = false;
    $weakPass = false;
    $notComplete = false;

    if(!isset($_SESSION['username'])){
        header("location: index.php");
    }
    else if(isset($_SESSION['id'])){
        header("location: index.php");
    }
    else{
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            //get the user name and password from the user
            $password = strip_tags($_POST['password']);
            $confirmPass = strip_tags($_POST['confirmPass']);
            $username = strip_tags($_SESSION['username']);

            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
                                                        //check if the passwords match
            if(!($password == $confirmPass)){
                $flag = true;                           //if they don't, raise a flag
            }
            else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
                $weakPass = true;
            }
            else{
                $result = $userNew->updatePass($username,$password);
                if(!$result){
                    $notComplete = true;
                }
                else{
                    header("location: updatedPass.php");
                }
            }

        }
?>
    <form method="post" action= "<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
        <input required type="password" class="input-box" placeholder="Create New Password" name="password">
        <input required type="password" class="input-box" placeholder="Confirm Password" name="confirmPass">
        <?php if($flag) echo "Please type in the same password";  
              if($weakPass) echo '<br/>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
              if($notComplete) echo "<br/> The process was not complete due to an error!"
              ?> 
        <button type="submit"class="sign_btn" name="updatePass">Update</button>
    </form>
<?php } include_once "includes/footer.php";?>