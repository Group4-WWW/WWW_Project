<?php 
	    $title = "Contacts";
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

			<div class="content">
				
				<h1>Contacts</h1>
				<p>Send your requests or questions to our online school </p>
	
				<div class="send send_contact">	
					<form method="post" id="contactForm" >
						<input required type="text" name="review_name" id="review_name" placeholder="Enter your name">
						<input required type="email" name="review_email" id="review_email" placeholder="Your email">
						<textarea name="review_text"></textarea>
						<input class="btn" type="submit" value="send" name="submit" id = "submit">
						<span id="error_message" class="text-danger"></span>  
                     	<span id="success_message" class="text-success"></span>
					</form>
				</div>
<?php /*				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer">
					$(document).ready(function(){
						$('#contactForm').submit(function(e){
							$.ajax({
								type: "POST",
								url: "success.php",
								data: $("#contactForm").serialize(),
								success: function(data){
									
								}
							})	
							e.preventDefault();
						})
					})
				</script>
*/?>
				<script>  
					$(document).ready(function(){  
					$('#submit').click(function(){  
						var name = $('#review_name').val();  
						var email = $('#review_email').val();  
						if(name == '' || email == '')  
						{  
								$('#error_message').html("Full name and email must be filled!");  
						}  
						else  
						{  
								$('#error_message').html('');  
								$.ajax({  
									url:"testSuccess.php",  
									method:"POST",  
									//data:{name:name, message:message},  
									data: $("#contactForm").serialize(),
									success:function(data){  
										$("form").trigger("reset");  
										$('#success_message').fadeIn().html(data);  
										setTimeout(function(){  
											$('#success_message').fadeOut("Slow");  
										}, 2000);  
									}  
								});  
						}  
					});  
				});  
				</script>  

			</div>

		</div>




<?php include_once "includes/footer.php";?>