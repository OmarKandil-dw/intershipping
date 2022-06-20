<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
<a href="#0" class="cd-popup-trigger">View Pop-up</a>

<div class="cd-popup" role="alert">

  <div class="container">
    
        <div class="login">
            <div class="form login">
                <div style="text-align:center;"> <h2>SIGN-UP</h2> </div>


                <form action="" method="POST">
    <?php
    include 'connection.php';
    if(isset($_POST['submit'])){
      $email = htmlspecialchars($_POST['email']);
      $pwd =  htmlspecialchars($_POST['pwd']);
      //validation
      $valid = 0;
          //email validation
          $checkEmail = mysqli_query($conn, "SELECT email from client WHERE email = '$email'");
          if (mysqli_num_rows($checkEmail) == 0) {
            $valid++;
          }
          //password validation
          $checkPwd = mysqli_query($conn, "SELECT pwd from client WHERE pwd = '$pwd'");
          if (mysqli_num_rows($checkPwd) == 0) {
            $valid++;
          }
          if($valid != 0){
            echo  "<p style=\"color: red;\">wrong email or password</p>";
          }else{
            header("Location: index2.php"); 
            exit(); 
          }
        }
    ?>


                    <div class="input-field">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    
                    <div class="input-field">
                        <input type="pwd" name="pwd" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a  class="text" href="inscription1.php">SIGN IN?</a>
                    </div>

                    <div class="sub">
                       <button class="button" name="submit">Submit</button>
                    </div>                
                </form>

           
            
            
           
        </div>
    


  </div>


   
</div> <!-- cd-popup -->
<script>

jQuery(document).ready(function($){
	//open popup
	$('.cd-popup-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
	});
	
	//close popup
	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup').removeClass('is-visible');
	    }
    });
});
</script>
</body>
</html>