<?php 
	    $title = "Index";
		require_once "includes/header.php";
		require_once "db/db_config.php";
	
?>	

			
		<div class="site_content">
			
			<div class="sidebar_container">
				
				<div class="sidebar">
					<h2>Search</h2>
					<form method="post" action="#" id="search_form" >
						<input type="search" name="search_field" placeholder="your request" />
						<input type="submit" class="btn" value="find" />
					</form>
				</div>

				<div class="sidebar">
					<h2>Login</h2>
					<form method="post" action="#" id="login">
						
						<input type="text" name="login_field" placeholder="email" />
						<input type="password" name="password_field" placeholder="password" />
						<input type="submit" class="btn" value="sign in" />
						<div class="lables_passreg_text">
							<span><a href="#">Forgot your password?</a></span> | <span><a href="#">Sign up</a></span>
						</div>

					</form>
				</div>

				<div class="sidebar">
					<h2>Updates</h2>
					<span>16.10.2021</span>
					<p>We launched a new course for Spanish </p>
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

			<div class="content">
				
				<h1>Contacts</h1>
				<p>Send your requests or questions to our online school </p>
	
				<div class="send send_contact">	
					<form method="post" action="#" id="contact">
						<input type="text" name="review_name" placeholder="Enter your name">
						<input type="text" name="review_email" placeholder="Your email">
						<textarea name="review_text"></textarea>
						<input class="btn" type="submit" value="send">
					</form>
				</div>


			

			</div>

		</div>





	<div class="footer">
		<p>Viktoryia Hrechka</p>
		<p><a href = "contacts.html"> viktoryia.hrechka@knf.stud.vu.lt</a></p>
		<p>Vilnius University, Kaunas Faculty, ISCSen0</p>
		<p>2021-2022</p>
	</div>
	
</body>
</html>