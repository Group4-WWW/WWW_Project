<style>
.mycss{
	color: green;
   
    padding: 10px;
    margin-top: 5%;
    text-align: center;
    font-size: 50px;
}
</style>

<style>
.mycss_1{
	color: red;
   
    padding: 10px;
    margin-top: 5%;
    text-align: center;
    font-size: 50px;
}
</style>

<?php 
    $title = "Request Submitted";
     require_once "includes/header.php";
     require_once "db/db_config.php";
     if(isset($_POST['submit'])){
         $fullname = strip_tags($_POST['review_name']);
         $email = strip_tags($_POST['review_email']);
         $message = strip_tags($_POST['review_text']);
         $isSuccess = $crud->insertClientRequest($fullname, $email, $message);
         if($isSuccess){
            echo "<h1 class= 'mycss '> You Are Successfully Registered </h1>";
        }
        else{
           echo "<h1 class='mycss_1'> Process was not complete </h1>";
        }
     }
     else{
        echo "<h1 class='mycss_1'> Error! Process was not complete </h1>";
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
					<h2>Future Courses</h2>
					<ul>
						<li>Spanish course A1-B1</li>
						<li>Spanish course B1-C1</li>
					</ul>
				</div>

				
				</div>
                <div class="image_Success">
                    <img src="assets/img/1965319.png" alt="Profile picture">
                </div>

                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>


                <?php 
		           require_once "includes/footer.php";
                ?>