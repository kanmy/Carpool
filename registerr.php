
<?php

session_start();


$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$cpass = $_POST["confirmpass"];



$test = mysql_connect ("localhost","root","");
$form = mysql_select_db("sign_in",$test);

if(!$test)
{
echo " This is a php code ";
}
//<?php
//$email = $_POST["email"];
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
  echo "E-mail is not valid";
  }
else
  {
  echo "E-mail is valid";
  }
//


$query=mysql_query("SELECT * FROM login WHERE username='$username' OR email='$email' ");
$checkuser=mysql_num_rows($query);

if($checkuser != 0)
{ echo "Sorry, username ".$username." is already been taken or email id  ". $email." is already registered"; 
  echo "<br/>";
  echo "Please try to sign up with different username ";
  echo "<br/>";
  echo "If you have already registered, please visit the sign in page ";
}
elseif($password == $cpass )
{

$insert_user=mysql_query("INSERT INTO login (username,password,phone,email) VALUES ('$username', '$password', '$phone', '$email')");
// $insert_user1=mysql_query("INSERT INTO details (username) VALUES ('$username')");
if($insert_user)// && $insert_user1)
{ echo "Registration Succesfull. <a href='http://localhost/carpool/information.html'>Click here to enter into your world </a>     "; 
 $_SESSION['username']=$username;
  //header("Location:http://localhost/carpool/loginsuccess.php?x={$username}");//$insertuser");
  exit;}

else
{ echo "error in registration".mysql_error(); }
} 
 
 
 else 
echo " Passwords donot match " ;
 
 ?>