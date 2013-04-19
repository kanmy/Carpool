<html>
<head>
<script language="JavaScript1.1">
<!--

/*
JavaScript Image slideshow:
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free JavaScript here!
*/

var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++){
slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]
}
}

function slideshowlinks(){
for (i=0;i<slideshowlinks.arguments.length;i++)
slidelinks[i]=slideshowlinks.arguments[i]
}

function gotoshow(){
if (!window.winslide||winslide.closed)
winslide=window.open(slidelinks[whichlink])
else
winslide.location=slidelinks[whichlink]
winslide.focus()
}

//-->
</script>
<style type="text/css">
#benefits{background-color:#D8D8D8; height:750px; width:700px; border-radius:20px; position:absolute;left:320px; margin:20px;}
#dash{background-color:#480000;}
#Places { float: left; border:4px; background:#480000; font-weight: bold; width:200px; height:220px; line-height=150px; margin:20px; position:absolute;left:35px; }
#head1{font-size:40px; background-color:#080000; font-family:Zapf Chancery, cursive ; font-weight:bold;
}
body{background-color:#F1E9E3}
#places {font-size:20px;}

#main{width:1100px;height:800px; background-color:#F7BE8D; position:absolute; left:120px; margin:10px; border-radius:25px;}
h2{color:#660000;}
h3{color:#660000; }     
h4{color:#660000 ;}
#header{font-size:30px; background-color:#D8D8D8; font-family:Zapf Chancery, cursive ; font-weight:bold; color:#480000;text-align:center;
}
#tbl{font-size:15px; background-color:#D8D8D8; font-family:Zapf Chancery, cursive ; font-weight:bold; color:#480000;
}
#tbl2{font-size:15px; background-color:#D8D8D8; font-family:Zapf Chancery, cursive ; font-weight:bold; color:#480000;
}#a{font-size:25px;color:#480000;text-align:center ;}
}#aa{font-size:25px;color:#480000;text-align:center ;}
}#aaa{font-size:25px;color:#480000;text-align:center ;}
}#aaaa{font-size:25px;color:#480000;}
p{font-family:Times New Roman, serif; font-style:italic; margin:10px;}
#slide{position:relative; left:35px; top:260px; width:250px;}
</style>
</head>
<body>

<div id="head1" align="center" style="color:white">
Don't be FUELISH...Join a CARPOOL</div>
<div id="dash">
<!--
<table cellspacing="10">
<tr >
<td><br/></td><td><br/></td><td><br/></td><td><br/></td><td><br/></td><td><br/></td><td><br/></td>
<td><br/></td>
<td><br/></td><td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><font size="5.5"><a href="http://localhost/carpool/carpool.htm" style="color:white">Home</a></font></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><font size="5.5" ><a href="http://localhost/carpool/start.html"style="color:white" >Start a Pool</a></font></td>

<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><font size="5.5" ><a href="http://localhost/carpool/join.html" style="color:white" >Join a Pool</a></font></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<!--
<td><font size="5.5" ><a href="homepage.html" style="color:white">Logout</a></font></td>
<td><br/></td>
<td><br/></td>
<td><br/></td><td><br/></td>
<td><br/></td>
<td><br/></td>

<td><font size="5.5"><a href="http://localhost/carpool/aboutus.html" style="color:white">About us</a></font></td>
</tr>
</table>
-->
</div>
<div id="main">
<div id="benefits">
<!--<h2 align="center">Please login to enter</h2>-->

<center>
<div id="login" style="border:0px solid black">
<form id="test" method="post" action="trial.php">
<table id="lgn">
<tr>
<td bgcolor=#D8D8D8 colspan="3" id="tbl" ><h1 id="header">Login</h1><td/>
<tr/>
<tr><td><br/></td></tr>
<tr>
<td id="tbl">Username:</td>
<td><input type="text" name="loginID" value=""></td>
</tr><td><br/></td></tr>
<tr>
<td id="tbl2">Password:</td>
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

</form>
</div>
</center>

<p id="aaaa">With our webstite, you will be able to see if anyone in your neighbourhood is a <i><b>Pooler</b></i>. </p>
<br/>
<p id="a"> Dont be FUELISH </P>
<p id="aa"> Be Green</p>
<P id="aaa"> Join a Carpool </p>

</div>


<div id="Places" class="names" align="center">

<a href="http://localhost/carpool/carpool.htm" style="color:white">Home</a><br/><br/>

<a href="http://localhost/carpool/information.html" style="color:white">Information</a><br/><br/>

<a href="http://localhost/carpool/benefits.html" style="color:white">Benefits</a><br/><br/>

<a href="http://localhost/carpool/etiquettes.html" style="color:white">Etiquitte</a><br/><br/>

<a href="http://localhost/carpool/aboutus.html" style="color:white">About us</a><br/><br/>


</div>
<div id="slide" style="border:3px solid black">
<a href="javascript:gotoshow()"><img src="food1.jpg" name="slide" border=0 width=250 height=260></a>
<script>
<!--

//configure the paths of the images, plus corresponding target links
slideshowimages("carpool.png","carsharing photo.jpg","uow095854.jpg","carpool_2.jpg","cp1.jpg")
//slideshowlinks("C:\Users\Arti Prasad\Desktop\New folder\","http://food.epicurious.com/run/recipe/view?id=10092","http://food.epicurious.com/run/recipe/view?id=100975","http://food.epicurious.com/run/recipe/view?id=2876","http://food.epicurious.com/run/recipe/view?id=20010")

//configure the speed of the slideshow, in miliseconds
var slideshowspeed=2000

var whichlink=0
var whichimage=0
function slideit(){
if (!document.images)
return
document.images.slide.src=slideimages[whichimage].src
whichlink=whichimage
if (whichimage<slideimages.length-1)
whichimage++
else
whichimage=0
setTimeout("slideit()",slideshowspeed)
}
slideit()

//-->
</script>
</div>
</div>

</body>
</html>