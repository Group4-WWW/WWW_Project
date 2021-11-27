<?php 
	    $title = "Index";
		require_once "includes/header.php";
		require_once "db/db_config.php";
	
?>	

			
            <div class="information">
                <hr>	
                <div class="image">
                    <img src="assets/img/2688063.png" alt="Profile picture">
                </div>

                <div class="profile_form">
                <h1> Profile Information </h1>
                
                    <input type="name" class="input-box" placeholder="Student name">
                    <input type="email" class="input-box" placeholder="Student Email">  
                    <input type="name" class="input-box" placeholder="favourite hobby">  
                    <input type="number" class="input-box" placeholder="number of Downloads:"> 
                    
                   
                    <input type="button" class="sign_btn" value="Edit" />
                    <input type="button" class="sign_btn" value="Delete" /> 

                   
                
            </div>




               
               
        </div>
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
            
           
            
        </body>
        </html>