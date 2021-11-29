<?php 
	    $title = "Professional Courses";
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
					<a href="information.php">read more</a>
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
				<h2> Graphic Design for beginners </h2>
				<a href="#"><img src="assets/img/beginners.jpg" height="200" width="350" > </a>
				<br>
				<?php if(!isset($_SESSION['id'] )){
					echo "<a onclick='pleaseLogin()' href='#'><img src='assets\img\button.png' alt= 'Design for beginners' height='70px'></a>";
				 }
				 else{
					echo "<a href='downloads/Graphic Design for beginners.pdf' download=''><img src='assets\img\button.png' alt= 'Design for beginners' height='70px'></a>";
					$userId = $_SESSION['id'];
					$incrementDownloads = $crud->incrementDownloadsCount($userId);
				}?>
				<br>
				<hr>
				<br>
			</div>

			<div class= "container">
				<h2> Graphic Design for Pro </h2>
				<a href="#"><img src="assets/img/profession.jpeg" height="200" width="350" > </a>
				<br>
				<?php if(!isset($_SESSION['id'] )){
					echo "<a onclick='pleaseLogin()' href='#'><img src='assets\img\button.png' alt= 'Design for beginners' height='70px'></a>";
				 }
				 else{
					echo "<a href='downloads/Design for Pro.pdf' download=''><img src='assets\img\button.png' alt= 'Design for Pro' height='70px'></a>";
					$userId = $_SESSION['id'];
					$incrementDownloads = $crud->incrementDownloadsCount($userId);
				}?>
				<br>
				<hr>
				<br>
			</div>
			<script>
					function pleaseLogin(){
						alert("Please Login to download!");
					}
			</script>

		</div>

	</div>

		
<?php include_once "includes/footer.php";?>