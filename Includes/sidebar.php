   
<div class="sidebar">
    <?php if(!isset($_SESSION['id'])){?>
    <h2>Login</h2>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
        
        <input type="text"  placeholder="username" name="username" value="<?php
            if($_SERVER['REQUEST_METHOD']== 'POST') {echo strip_tags($_POST['username']);}
            else if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}
         ?>"/>
        <input type="password" name="password" placeholder="password" value= "<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>"/>
        <input type="submit" class="btn" value="sign in" name="login"/>
        <p><span><input type="checkbox" name="remember" value="1"></span> Remember me</p>
        <p><?php if($flag) echo "Username or password incorrect or you've made too many attempts! Please click Forgot Password"?></p>
        <div class="lables_passreg_text">
            <span><a href="#">Forgot your password?</a></span> | <span><a href="signup.php">Sign up</a></span>
        </div>
    </form>
    <?php }else{ $username = $userNew->getUserNameById($_SESSION['id']);$result = $userNew->getUserByUserName($username['username']);?>
        
    <a href="profile.php?id=<?php echo $_SESSION['id']?>">
        <h2>Profile</h2>
            <div class="image">
                <img src="<?php if(empty($result['avatar'])){echo "assets/img/2688063.png";}else{ echo $result['avatar'];}?>">
            </div>
            <p><?php echo $result['fullname']?></p>
            <a href="logout.php">Logout</a>
    </a>
    <?php }?>
</div>

