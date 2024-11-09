<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <title>HOME</title> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
            <li><a href="login.php" class="link">logout</a></li>
        </ul>
            </div>
        <div class="nav-menu-Btn">
            <i class="bx bx-menu"></i>
        </div>
        </nav>
 <span style='color:white'><?php 

 #l'affichage des session
 
 echo 'Welcome to home , your informarion: <br>';
 echo "username:";
 echo $_SESSION['username']. '<br>';
 echo "password:";
 echo $_SESSION['passname']. '<br>';
       
    ?></span>
</body>
</html>