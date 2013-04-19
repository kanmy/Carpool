
<html>
<head>
    <title>Untitled Page</title>
    <script type="text/javascript" src="jquery-1.7.2.js"></script>
    <script type="text/javascript" >
        $(document).ready(function () {
            $("#slide1").mouseover(function () {
                $("#slide1").animate({ left: "10%" });
            });

            $("#slide1").mouseout(function () {
                $("#slide1").animate({ left: "70%" });
            });

            $("#slide2").mouseover(function () {
                $("#slide2").animate({ left: "20%" });
            });

            $("#slide2").mouseout(function () {
                $("#slide2").animate({ left: "85%" });
            });

            
        });
</script>

    <style type="text/css">
        #login{ float:left; margin:8px; height:250; width:243; border-radius:20px;}
       
       
       #para
       {
           font-family:Comic Sans MS;
       }
       #lgn
       {
           font-family:Comic Sans MS;
       }
       
       #slider
        {
           height:100%;
            
            overflow:hidden;
            
           
            
            }
    .slide1
    {
        
        position:absolute;
        left:70%;
        top:0%;
        height:100%;
        overflow:hidden;
        
        
        }
        
        .slide2
    {
        
        position:absolute;
        left:85%;
        height:100%;
        top:0%;
        overflow:hidden;
   }
        
        #logo
        {
            position:absolute;
            left:0%;
            width:100%;
            height:100%;
            overflow:hidden;
            }
			
			.left{position:absolute;
            left:0%;
            width:100%;
            height:100%;}
     
    
    
    </style>


</head>
<body style="overflow: hidden" bgcolor="#B2CEEA"> 
<div id="login" style="border:3px solid black">
<form id="test" method="post" action="trial.php">
<table id="lgn">
<tr>
<td bgcolor=#660099 colspan="3"><h1 style="color:white;">Login</h1><td/>
<tr/>
<tr><td><br/></td></tr>
<tr>
<td>Username:</td>
<td><input type="text" name="loginID" value=""></td>
</tr><td><br/></td></tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" value=""></td>

</tr>
<tr><td><br/></td></tr>
<tr>
<td><a href="registerpage.php" style="text-decoration: none;"><input type="button" name="newuser" value="New User"></a></td>
<td><input type="submit" name="login" value="Login"></td>
</tr>


</table>
<br />
<br />
<table id="para">
<tr>
<td>
Carpool and tourpool are the reason behind happpiness of commuters.
</td>
</tr>
<tr>
<td>
They reduce environmental pollution, traffic congestion and save fuel costs and also relieve a large number of people from the stress of driving.
</td>
</tr>
<tr>
<td>
So why wait, join the enthrailing word of carpool and Tourpool !!! 
</td>
</tr>
</table>
</p>
</form>
</div>
<a href="http://google.com">
<img src="blue12.jpg" id="slide1"  class="slide1" /></a>
<div id="slider">
<a href="http://google.com">
<img src="tourpoolj1.jpg" id="slide2" class="slide2"  /></a>

</div>

</body>
</html>
