<html>
<head>
<style type="text/css">
body{background:#F7BE8D;}
#demo{background-color:#F1E9E3; width:300px;position:absolute; left:550px;}
</style>
</head>
<body>
<div id="demo" style="border:3px solid black">
<?php
  
  
  
  $test = mysql_connect ("localhost","root","");
  $form = mysql_select_db("sign_in",$test);

   
$term = $_POST['term'];
$tterm = $_POST['tterm'];

 echo "<h1>Related POOLS</h1>";
$sql = mysql_query("select * from details where s_city like '%$term%'&& d_city like'%$tterm%'");
 
while ($row = mysql_fetch_array($sql)){

    echo 'Lift Type: '.$row['lift'];
    echo '<br/> Source city: '.$row['s_city'];
	echo '<br/> Exact start Location: '.$row['s_location'];
    echo '<br/> Destination city: '.$row['d_city'];
    echo '<br/> Exact end location: '.$row['d_location'];
	echo '<br/> Start time: '.$row['start_time'];
	echo '<br/> Return time: '.$row['return_time'];
	echo '<br/> Contact Number: '.$row['phone'];
    echo '<br/><br/>';
    }
  
  ?>
  </div>
  </body>
  </html>