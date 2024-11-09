<?php 
session_start();
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
            <button class="Btn " id="loginBtn">SignIN</a></button>
          <button class="Btn white-Btn" id="signBtn"><a href="signup.php">SignUP</a> </button>
    </div>
    <div class="nav-menu-Btn">
        <i class="bx bx-menu"></i>
    </div>
    </nav>
    <!-------------------FORM BOX----------------->
    <div class="'form-box">
        <!-----------------LOGIN---------------->
        <div class="login-container" id="login">
            <div class="top">
             <span>you dont have account?<a href="signup.html" onclick="signup()">signup</a></span>
             <header>LOGIN</header>
            </div>
         <div class="input-box">
             <input name="username" type="text" class="input-field" placeholder="Username">
             <span style='color:red'><?php echo $emailErrormsg ?> </span>
             <i class="bx bx-user"></i>
         </div>
         <div class="input-box">
             <input name="passname" type="password" class="input-field" placeholder="Password">
             <span style='color:red'><?php echo $passwordErrormsg ?> </span>
             <i class="bx bx-lock-alt"></i>
         </div>
         <div class="input-box">
         <input type="submit" class="submit" name="login" value="login" >
        </div>
     <div class="two-col">
        <div class="one">
           <input type="checkbox" id="login-check">
           <label for="login-check">Remember Me</label>
        </div>
        <div class="two">
         <label><a for="#">Forgot password ? </a></label>
        </div>
     </div>
  </div>
</div>
</form>
  </body>
  </html>
  

   