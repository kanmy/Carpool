<?php

session_start();


$car_no = $_POST["carno"];
$license = $_POST["license"];
$lift = $_POST["lift"];
$source = $_POST["source"];
$slocation = $_POST["sourcee"];
$destination = $_POST["dest"];
$dlocation = $_POST["Cities"];
$start= $_POST["pickup"];
$return= $_POST["return"];
$phone= $_POST["phone"];



$test = mysql_connect ("localhost","root","");
$form = mysql_select_db("sign_in",$test);

if(!$test)
{
echo " This is a php code ";
}
$query=mysql_query("SELECT * FROM details WHERE car_number='$car_no' ");
$checkuser=mysql_num_rows($query);
if($checkuser != 0)
{ echo "Sorry, a car is already registered with ".$car_no." number."; }

 
else//if($password == $cpass )
{

$insert_user=mysql_query("INSERT INTO details (car_number,driving_license,lift,s_city,s_location,d_city,d_location,start_time,return_time,phone) VALUES ('$car_no','$license', '$lift','$source','$slocation','$destination','$dlocation','$start','$return','$phone')");
 
if($insert_user)
{ echo "Registration Succesfull"; 
  header("Location:http://localhost/carpool/printdatabase.php");//$insertuser");
  exit;}
else
{ echo "error in registration".mysql_error(); }
 
 }
 
 
 
 ?>