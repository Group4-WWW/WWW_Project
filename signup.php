<?php 
	    $title = "Sign Up";
		require_once "includes/header.php";
		require_once "db/db_config.php";
        $flag=false;

        if($_SERVER['REQUEST_METHOD'] == "POST"){
                                                        //get the user name and password from the user
            $username = strip_tags($_POST['username']);
            $password = $_POST['password'];
            $confirmPass = $_POST['confirmPass'];
                                                        //check if the passwords match
            if(!($password == $confirmPass)){
                $flag = true;                           //if they don't raise a flag
            }
            else{                                       //if passwords match try to insert user in the user_login table
                $result = $userNew->insertUser($username,$password);
                if(!$result){                           //if the return is false, then there's already a user
                    echo "<p>User by this name already exists! Please try a different username</p>";
                }
                else{                                   //else insert the user in the user_info table
                    $fullname = strip_tags($_POST['fullname']);
                    $email = strip_tags($_POST['email']);
                    $security1 = strip_tags($_POST['security1']);
                    $security2 = strip_tags($_POST['security2']);
                    $dob = $_POST['dob'];
                    $userId = $userNew->getUserId($username); //get the user id from the user_login table

                    $insertUserInfo = $crud->insertUserInfo($fullname,$email,$userId['user_id'],$dob,$security1,$security2); //insert user in user_info table
                    
                    if(!$insertUserInfo){   //if the insertion operation fails, also delete the user from user_login table
                        $deleteUser = $userNew->deleteByUserId($userId['user_id']);
                    }
                    else{
                        header("location: welcome.php");
                    }
                }
            }
        }
?>	

			
		<div class="site_content">
			
			<div class="sidebar_container">

				<div class="sidebar">
					<h2>Updates</h2>
					<span>16.10.2021</span>
					<p>We lauched a new course for Spanish </p>
					<a href="#">read more</a>
				</div>

				<div class="sidebar">
					<h2>Future courses</h2>
					<ul>
						<li>Spanish course A1-B1</li>
						<li>Spanish course B1-C1</li>
					</ul>
				</div>

			</div>
            
            <div class="sign_up_form">
                <h1> Sign up now </h1>
                <form method="post" action= "<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
                    <input required type="text" class="input-box" placeholder="Full Name" name="fullname" value="<?php if($_SERVER['REQUEST_METHOD']== 'POST') echo strip_tags($_POST['fullname']);?>">
                    <input required type="email" class="input-box" placeholder="Email" name="email" value="<?php if($_SERVER['REQUEST_METHOD']== 'POST') echo strip_tags($_POST['email']);?>">  
                    <input required type="date" class="input-box" placeholder="Date of birth" name = "dob" value="<?php if($_SERVER['REQUEST_METHOD']== 'POST') echo $_POST['dob'];?>">
                    <br>
                    <br>
                    <p>Security Questions
                        <input required type="question" class="input-box" placeholder="What's your favourite hobby?" name="security1" value="<?php if($_SERVER['REQUEST_METHOD']== 'POST') echo strip_tags($_POST['security1']);?>">
                        <input required type="question" class="input-box" placeholder="What's the name of your favourite professor?" name="security2" value="<?php if($_SERVER['REQUEST_METHOD']== 'POST') echo strip_tags($_POST['security2']);?>">
                    </p>
                    <p>
                        <input required type="username" class="input-box" placeholder="Create Username" name="username"> 
                        <input required type="password" class="input-box" placeholder="Create Password" name="password">
                        <input required type="password" class="input-box" placeholder="Confirm Password" name="confirmPass">
                        <?php if($flag) echo "Please type in the same password"                         //if flag is raised prompt the user that passwords didn't match?> 
                    </p>
                    <p>Add a profile picture below: <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*"></p>
                    <p><span><input required type="checkbox"></span> I agree to the terms and conditions</p>
                    <button type="submit"class="sign_btn" name="signup">Sign up</button>
                </form>
            </div>
<?php include_once "includes/footer.php"?>