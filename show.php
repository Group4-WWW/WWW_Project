<?php 
	    $title = "Index";
		require_once "includes/header.php";
		require_once "db/db_config.php";
		require_once "includes/auth.php";
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

				<?php require_once "includes/sidebar.php";?>

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

			<div class= "container">
				<br>
				<h2> English from A1-B1 </h2>
				<a href="#"><img src="assets/img/english.png" height="200" width="350" > </a>
				<br>
				<a href="Complete English Course A1-A2.pdf"  download=""><img src="assets\img\button.png" alt= "English A1-A2 " height="70px"></a>  
				<br>
				<hr>
			</div>
			

			<div class= "container">
				<br>
				<h2>  English from B2-C1</h2>
				<a href="#"><img src="assets/img/level EN.png" height="200" width="350" > </a>
				<br>
				<a href="Complete English Course B2- C1.pdf"  download=""><img src="assets\img\button.png" alt= "English B1-C1" height="70px"></a>
				<hr>
			</div>
			

			<div class= "container">
				<br>
				<h2> German from A1-B1 </h2>
				<a href="#"><img src="assets/img/de.png" height="200" width="350" > </a>
				<br>
				<a href="Learn German Language A1-A2 .pdf"  download=""><img src="assets\img\button.png" alt= "German A1-A2" height="70px"></a>
				<hr>
				<br>
			</div>

			<div class= "container">
			<h2> German from  B2-C1 </h2>
			<a href="#"><img src="assets/img/level EN.png" height="200" width="350" > </a>
			<br>
			<a href="Learn German Language B2- C1.pdf"  download=""><img src="assets\img\button.png" alt= "German B1-C1" height="70px"></a>
			<br>
		     </div>
		
			</div>

		</div>


<?php include_once "includes/footer.php";?>