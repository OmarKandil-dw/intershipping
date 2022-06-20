<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="form.css">
    
</head>
<body>
    
    <div class="container">
        <div class="forms" style="height: 600px;">
            <div class="form login" >
                <div style="text-align:center;margin-top:8%;"> <img src="shipping-removebg-preview.png" alt="" width="50%"> </div>


                <form action="" method="POST">
    <?php

    session_start();
    include 'connection.php';

    if(isset($_POST['submit'])){

      $name = htmlspecialchars($_POST['fname']);
      $phone = htmlspecialchars($_POST['phone']);
      $email = htmlspecialchars($_POST['email']);
      $pwd =  htmlspecialchars($_POST['pwd']);
      //validation


    $valid = 0;

      
    $checkemail = mysqli_query($conn, "SELECT email from client WHERE email = '$email'");
    if (mysqli_num_rows($checkemail) > 0) {
    echo  "<p style=\"color: red;\">this email is already used</p>";
    $valid++;
    }


    $checkphone = mysqli_query($conn, "SELECT phone from client WHERE phone = '$phone'");
    if (mysqli_num_rows($checkphone) > 0) {
    echo  "<p style=\"color: red;\">this phone is already used</p>";
    $valid++;
    }


    if ($valid == 0) {

        //data info >> database >> client
        $sql = "INSERT INTO Client (fname,phone,email,pwd) VALUES ('$name','$phone','$email','$pwd')";
        $query = mysqli_query($conn, $sql);
        header("location: log-in.php");

    }
        }
    ?>
                    <div class="input-field" >
                        <input type="text"  id="fname"   name="fname" placeholder="Enter your name" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                  
                    <div class="input-field">
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone" required>
                        <i class="uil uil-phone icon"></i>
                    </div>
                    
                    <div class="input-field">
                        <input type="email"  id="email"  name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    
                    <div class="input-field">
                        <input type="pwd" name="pwd" id="pwd" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="log-in.php" class="text">SIGN IN?</a>
                    </div>

                    <div class="sub">
                       <button class="button" id="sub" name="submit">Submit</button>
                    </div>                
                </form>
            </div>   
        </div>
    </div>



<script>

    // validation
    
    let fname = document.getElementById('fname');
    let email = document.getElementById('email');
    let phone = document.getElementById('phone');
    let pwd = document.getElementById('pwd');
    let submit = document.getElementById('sub');
      

    // create a listener for both input fields(on change)s

    fname.addEventListener('change', toggleDisable);
    email.addEventListener('change', toggleDisable);
    phone.addEventListener('change', toggleDisable);
    pwd.addEventListener('change', toggleDisable);


    // evaluate input fields when either one changes (invoked by listeneres above)
    function toggleDisable() {
      const fnameregex = /^[a-zA-Z]+$/.test(fname.value);
      const emailregex =/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email.value);
      const phoneregex = /^[0-9]+$/.test(phone.value)
   
      if (!fnameregex || !emailregex || !(phone.value.length == 10) || !phoneregex || pwd.value.length =="" ) {
        submit.disabled = true;
    } else {
        submit.disabled = false;
    }
    }





    // showpwd
















      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

 
</script>
</body>
</html>