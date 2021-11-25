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
            
            <div class="Edit_Form">
                <h1> Edit your profile </h1>
                <form>
                    <input type="name" class="input-box" placeholder="Edit your Full Name">
                    <input type="email" class="input-box" placeholder="Edit your Email">  
                    <input type="date" class="input-box" placeholder="Date of birth">
                    <input type="password" class="input-box" placeholder="Create New Password"> 
                    <input type="password" class="input-box" placeholder="Confirm New Password">
                    <p>Add another profile picture below: <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*"></p>
                    <p><span><input type="checkbox"></span> I agree to the terms and coditions</p>
                    <button type="button"class="Save_btn">Save</button>
                </form>
            </div>

            <div class="footer">
                <p>Viktoryia Hrechka</p>
                <p><a href = "contacts.html"> viktoryia.hrechka@knf.stud.vu.lt</a></p>
                <p>Vilnius University, Kaunas Faculty, ISCSen0</p>
                <p>2021-2022</p>
            
            </div>
            
        </body>
        </html>