<?php

session_start();

	$user = $_POST["loginID"];
	echo "<br/>";
    $password= $_POST["password"];
    echo "<br/>";
	
$_SESSION['user']=$user;

$formphp = mysql_connect ("localhost","root","");
$form2 = mysql_select_db("sign_in",$formphp);

if(!$formphp)
{
echo " This is an internal error. Please retry ";
}

$query = mysql_query("SELECT * FROM login");

while($result = mysql_fetch_array($query))
	{ if( $user == $result["username"] && $password == $result["password"]){
	      
	  	  header("Location:start.php");
	      
		  $flag=0;
		  break;
		  exit;
	 
	  }
     else {
			echo " Invalid Login " ;
			
			$flag=1;
	}
}
if($flag==1)
{
header("Location:logincarpool.php/");
			exit;
}
 

	
?>
