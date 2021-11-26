<?php
        $title = "Welcome!";
        require_once "includes/header.php";
        require_once "db/db_config.php";
        header("refresh:5;url:index.php" );
?>

You have been successfully registered. Please login using your credentials. Thank you for registering!

<div class="site_content">
			
			<div class="sidebar_container">
                
				<div class="sidebar">
					<h2>Login</h2>
					<form method="post" action="#" id="login">
						
						<input type="text" name="login_field" placeholder="email" />
						<input type="password" name="password_field" placeholder="password" />
						<input type="submit" class="btn" value="sign in" />
						<div class="lables_passreg_text">
							<span><a href="#">Forgot your password?</a></span> | <span><a href="signup.php">Sign up</a></span>
						</div>

					</form>
				</div>

				<div class="sidebar">
					<h2>Updates</h2>
					<span>16.10.2021</span>
					<p>We launched a new course for Spanish </p>
					<a href="#">read more</a>
				</div>
	
		</div>
