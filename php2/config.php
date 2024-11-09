<?php 
$firstnameErrormsg="";
$lastnameErrormsg="";
$emailErrormsg ="";
$passwordErrormsg ="";

if(isset($_POST["login"])){

  $_SESSION["username"]= $_POST["username"];
  $_SESSION["passname"]= $_POST["passname"];

  if(!empty($_POST["username"]) &&!empty($_POST["passname"])){
    
  $_SESSION["username"]= $_POST["username"];
  $_SESSION["passname"]= $_POST["passname"];

  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["passname"] . "<br>";
  header("location: home.php");
  }
  else{
      
  $passwordErrormsg= "missing username/password <br>";
 
  }
 }

#verification des champs (si click sur submit )
if(isset($_POST["signup"])){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $emailvalue=$_POST["email"];
    $passvalue=$_POST["password"];


  if(empty($firstname)){
    
    $firstnameErrormsg="first name must be filled out";
  }  
  if(empty($lastname)){
    $lastnameErrormsg="last name must be filled out";

  }
#verification si email et empty ou non 
  if($emailvalue == ""); {
    $emailErrormsg = "email must be filled out ";
  }

#regex si le char respect le pattern retourne 1 sinon 0
  if(preg_match("/\w+(@emsi.ma){1}$/", $emailvalue)==0){
  $emailErrormsg = "please enter a valid emsi email";

  }

#si le password et empty
if($passvalue == ""){
    $passwordErrormsg = "password must be filled out ";
}    
#si tt les infos et valid va m'envoyer ->home avec header pour la redirection + je veux lense session
else{
    session_start();
    $_SESSION["emailS"]=$emailvalue;
    $_SESSION["passS"]=$passlvalue;

    header("location:login.php"); 
}
}

?>