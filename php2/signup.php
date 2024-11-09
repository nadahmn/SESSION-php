<?php
session_start();
session_destroy();
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>login/signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<form aaction="" method="post"> 
    <!---------------Nav----------------->
    <div class="wrapper">
    <nav class="nav">
        <div class="nav-Logo">
            <p>LOGO</p>
        </div>
        <div class="nav-menu">
    <ul>
        <li><a href="#" class="link active">home</a></li>
        <li><a href="#" class="link">Blog</a></li>
        <li><a href="#" class="link">services</a></li>
        <li><a href="#" class="link">about</a></li>
    
    </ul>
        </div>
    <div class="nav-button">
          <button class="Btn white-Btn" id="loginBtn"><a href="login.php">SignIN</a></button>
          <button class="Btn" id="signBtn"> SignUP</button>
    </div>
    <div class="nav-menu-Btn">
        <i class="bx bx-menu"></i>
    </div>
    </nav>
    <!-------------------FORM BOX----------------->
    <div class="'form-box">

        <!-----------------SignUP---------------->
        <div class="signup-container" id="signup">
            <div class="top">
             <span>have an account?<a href="login.php" onclick="Login()">login</a></span>
             <header>Sign UP</header>
            </div>
    <div class="two-forms">
         <div class="input-box">
             <input type="text" name="firstname" class="input-field" placeholder="Firstname">
             <span style='color:red'><?php echo $firstnameErrormsg ; ?> </span>
             <i class="bx bx-user"></i>
         </div>
         <div class="input-box">
             <input type="text" name="lastname" class="input-field" placeholder="Lastname">
             <span style='color:red'><?php echo $lastnameErrormsg ; ?> </span>
             <i class="bx bx-user"></i>
             </div>
         </div>
         <div class="input-box">
             <input type="email" name="email" class="input-field" placeholder="Email">
             <span style='color:red'><?php echo $emailErrormsg ; ?> </span>
             <i class="bx bx-envelope"></i>
         </div>
         <div class="input-box">
             <input type="password" name="password" class="input-field" placeholder="Password">
             <span style='color:red'><?php echo $passwordErrormsg ; ?> </span>
             <i class="bx bx-lock-alt"></i>
         </div>
         <div class="input-box">
         <input name="signup" type="submit" class="submit"  value="signup" >
        </div>
     <div class="two-col">
        <div class="one">
           <input type="checkbox" id="signup">
           <label for="registre-check">Remember Me</label>
        </div>
        <div class="two">
         <label><a for="#">Terms & conditions</a></label>
        </div>
     </div>
  </div>
         
</div>
     
</form>
  </body>
  </html>
 