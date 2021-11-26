<?php 
	    $title = "Index";
		require_once "includes/header.php";
		require_once "db/db_config.php";
	
?>	

			
		<div class="site_content">
			
			<div class="sidebar_container">

				<div class="sidebar">
                    <h2><a href="Profile.html">Profile</a></h2>
					<form method="post" action="#" id="Profile">
						<div class="image">
                            <img src="" alt="Profile picture">
                        </div>
						<p>Student name</p>
						<p>Student email</p>
					</form>
				</div>

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
            <div class="information">
                <hr>	
                <div class="image">
                    <img src="assets/img/download (1).jpg" alt="Profile picture">
                </div>
                <h2> Student name</h2>
                <p>Student Email</p>
                <p>Date of birth</p>
                <p>favourite hobby</p>
                <p>You have 'number' Downloads as shown below:</p>
                <input type="button" class="btn" value="Edit" />
                <input type="button" class="btn" value="Delete" /> 
        </div>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>

<?php include_once "includes/footer.php";?>