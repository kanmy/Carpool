<html>
<head>
<style type="text/css">
body{background:#F7BE8D;}
h1{align:center;}
</style>
</head>
<body><?php 
  
$test = mysql_connect ("localhost","root","");
$form = mysql_select_db("sign_in",$test);

if(!$test)
{
echo " This is a php code ";
}

 
 echo "<br/>";
 echo "<br/>";
 echo " <h1> All Carpools</h1>";
 echo "(sorted on the basis of start time)";
 echo "<br/>";
 $data2 = mysql_query("SELECT * FROM details ORDER BY start_time") 
 or die(mysql_error()); 
 Print "<table border cellpadding=3 bgcolor=#F1E9E3>"; 
 while($info = mysql_fetch_array( $data2 )) 
 { 
 Print "<tr>"; 
 Print "<th>Source City:</th> <td>".$info['s_city'] . "</td> "; 
 Print "<th>From:</th> <td>".$info['s_location'] . "</td> ";  
 Print "<th>Destination City:</th> <td>".$info['d_city'] . "</td> "; 
 Print "<th>To:</th> <td>".$info['d_location'] . " </td>";
 Print "<th>Start time :</th> <td>".$info['start_time'] . "</td> ";
 Print "<th>Return time :</th> <td>".$info['return_time'] . "</td> ";
 Print "<th>Car number:</th> <td>".$info['car_number'] . "</td> </tr>"; 
 } 
 Print "</table>"; 
 
 ?> 
 </body>
 </html>