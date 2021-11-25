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
	
		</div>

			
			<div class="posts">
					<hr>	
					<h2> Who we are?</h2>
					<div class="posts_content">
						<p> We are Owl online school. We teach Graphic Design from scratch or for professionals. <br> We also teach English and German languages for kids and for adults as well. Our online courses will help you develop real-world language skills and achieve your goals faster, wherever you are. No matter what online course you choose, you’ll get effective results. <br>All our online courses include support and guidance from  instructors, access to an <br>interactive student portal.</p>
			        </div>
			</div>
			<!-- Gallery section starts  -->

<section class="facility" id="facility">

	<div class="container">
	
	<h1 class="heading"><span>'</span> Gallery <span>'</span></h1>
	
	<div class="box-container">
	
		<div class="box" data-aos="zoom-in">
			<a href="assets/img/download (1).jpg" title="Our beloved students working together with a beautiful smile">
				<img src="assets/img/download (1).jpg" alt="">
			</a>
		</div>
	
		<div class="box" data-aos="zoom-in">
			<a href="assets/img/download (2).jpg" title="Grade 10 students">
				<img src="assets/img/download (2).jpg" alt="">
			</a>
		</div>
	
		<div class="box" data-aos="zoom-in">
			<a href="assets/img/download (3).jpg" title="Our classes">
				<img src="assets/img/download (3).jpg" alt="">
			</a>
		</div>
	
		<div class="box" data-aos="zoom-in">
			<a href="assets/img/download (5).jpg" title="Grade 8 students while having an exam">
				<img src="assets/img/download (5).jpg" alt="">
			</a>
		</div>
	
		<div class="box" data-aos="zoom-in">
			<a href="assets/img/download.jpg" title="Our Grade 12 students with their class teacher">
				<img src="assets/img/download.jpg" alt="">
			</a>
		</div>
	
		<div class="box" data-aos="zoom-in">
			<a href="assets/img/images (1).jpg" title="Math class">
				<img src="assets/img/images (1).jpg" alt="">
			</a>
		</div>
	
		<div class="box" data-aos="zoom-in">
			<a href="assets/img/images.jpg" title="Our students having some teamwork">
				<img src="assets/img/images.jpg" alt="">
			</a>
		</div>
	
		<div class="box" data-aos="zoom-in">
			<a href="assets/img/images (2).jpg" title="Wearing masks nowadays is important">
				<img src="assets/img/images (2).jpg" alt="">
			</a>
		</div>
	
	
	</div>
	
	</div>
	
	</section>
	
	<!-- Gallery section ends -->
			<div class="posts">
					<hr>
					<h2> How we teach? </h2>
					<div class="posts_content">
						<p>You can choose to learn in small groups of under 7 people or take individual classes. <br>We use Whereby or Zoom for our virtual classrooms. <br>Our approach to teaching is to deliver value and easy learning. We love what we do!</p>
		             </div>
			</div>	 
			<div class="posts">
					<hr>
		            <h2>Payment and prices</h2>
		            <div class="posts_content">
		              <p>Our prices range from 6o euro till 100 euro per a month. <br>You can pay via your credit card by simply having a monthly subscription.</p>
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