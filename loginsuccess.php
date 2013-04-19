<html>

<body>
<center><h1> HOME PAGE </h1></center>

<?php
session_start();
echo " hi ".$_SESSION['username']." !! <br/> <a href='logout.php'>Logout</a>";
//$username=$_GET['x'];
//echo $username;
?>
 you are logged in 
 
  
 <img src="https://10.100.56.31:8443/webapp/intranet/StudentPhotos/<?php echo $username?>.jpg"/>
</body>
</html>