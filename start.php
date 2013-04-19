<html>
<head>
<script type="text/javascript" >
    var i;
    function myfunct(i) {
        var form1 = document.getElementById("formshrey");
        document.formshrey.Cities.options.length = 0;
        switch (i) {
            case 1:
                formshrey.Cities.options[0] = new Option('Ambawadi', 'Ambawadi');
                formshrey.Cities.options[1] = new Option('Navrangpura', 'Navrangpura');
                formshrey.Cities.options[2] = new Option('Thaltej', 'Thaltej');
                break;
            case 2:
                formshrey.Cities.options[0] = new Option('Pathika', 'Pathika');
                formshrey.Cities.options[1] = new Option('InfoCity', 'InfoCity');
                formshrey.Cities.options[2] = new Option('AksharDham', 'AksharDham');
                break;
            case 3:
                formshrey.Cities.options[0] = new Option('Lohana Para', 'Lohana Para');
                formshrey.Cities.options[1] = new Option('Kasturbadham ', 'Kasturbadham ');
                formshrey.Cities.options[2] = new Option('Green Chowk ', 'Green Chowk ');
				break;
			case 4:
                formshrey.Cities.options[0] = new Option('SVNIT', 'SVNIT');
                formshrey.Cities.options[1] = new Option('Dumas', 'Dumas');
                formshrey.Cities.options[2] = new Option('GodDhod', 'GodDhod');
				break;
			case 5:
				formshrey.Cities.options[0] = new Option('Kirti Mandir', 'Kirti Mandir');
                formshrey.Cities.options[1] = new Option('Sayaji Baug', 'Sayaji Baug');
                formshrey.Cities.options[2] = new Option('Aurobindo Ashram', 'Aurobindo Ashram');
				break;
        }
    }

    var j;
    function myfunct1(j) {
        var form1 = document.getElementById("formshrey");
        document.formshrey.sourcee.options.length = 0;
        switch (j) {
            case 1:
                formshrey.sourcee.options[0] = new Option('Ambawadi', 'Ambawadi');
                formshrey.sourcee.options[1] = new Option('Navrangpura', 'Navrangpura');
                formshrey.sourcee.options[2] = new Option('Thaltej', 'Thaltej');
                break;
            case 2:
                formshrey.sourcee.options[0] = new Option('Pathika', 'Pathika');
                formshrey.sourcee.options[1] = new Option('InfoCity', 'InfoCity');
                formshrey.sourcee.options[2] = new Option('AksharDham', 'AksharDham');
                break;
            case 3:
                formshrey.sourcee.options[0] = new Option('Lohana Para', 'Lohana Para');
                formshrey.sourcee.options[1] = new Option('Kasturbadham ', 'Kasturbadham ');
                formshrey.sourcee.options[2] = new Option('Green Chowk ', 'Green Chowk ');
				break;
				
			case 4:
                formshrey.sourcee.options[0] = new Option('SVNIT', 'SVNIT');
                formshrey.sourcee.options[1] = new Option('Dumas', 'Dumas');
                formshrey.sourcee.options[2] = new Option('GodDhod', 'GodDhod');
				break;
				
			case 5:
				formshrey.sourcee.options[0] = new Option('Kirti Mandir', 'Kirti Mandir');
                formshrey.sourcee.options[1] = new Option('Sayaji Baug', 'Sayaji Baug');
                formshrey.sourcee.options[2] = new Option('Aurobindo Ashram', 'Aurobindo Ashram');
				break;
        }
    }
</script>

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
#car{

color:red;
}

#line
{
    background-color:660099;
}
#pool
{
height:700px; width:500px; border-radius:20px; background-color:#CCFFCC; position:absolute;left:350px; top:20px;
}
#details
{
background-color:#660099;
}
#dest
{
background-color:#660099;
}

#dash{background-color:#480000;}
#Places { float: left; border:4px; background:#480000; font-weight: bold; width:200px; height:220px; line-height=150px; margin:20px; position:absolute;left:35px; }
#head1{font-size:40px; background-color:#080000; font-family:Zapf Chancery, cursive ; font-weight:bold;
}
body{background-color:#F1E9E3}
#places {font-size:20px;}

#main{width:1100px;height:780px; background-color:#F7BE8D; position:absolute; left:120px; margin:10px; border-radius:25px;}
#slide{position:relative; left:35px; top:260px; width:250px;}
</style>
</head>
<body>

<div id="head1" align="center" style="color:white">
Don't be FUELISH...Join a CARPOOL</div>
<div id="dash">
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
<td><font size="5.5" ><a href="http://localhost/final/start.php"style="color:white" >Start a Pool</a></font></td>

<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><font size="5.5" ><a href="http://www.google.co.in/" style="color:white" >Join a Pool</a></font></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>
<td><br/></td>

<td><font size="5.5" ><a href="http://www.google.co.in/" style="color:white">Logout</a></font></td>
<td><br/></td>
<td><br/></td>
<td><br/></td><td><br/></td>
<td><br/></td>
<td><br/></td>
<td><font size="5.5"><a href="http://www.google.co.in/" style="color:white">About us</a></font></td>
</tr>
</table>
</div>

<div id="main">



<div id="Places" class="names" align="center">

<a href="http://localhost/carpool/create.html" style="color:white">Find a Pool</a><br/><br/>

<a href="http://localhost/carpool/information.html" style="color:white">Information</a><br/><br/>

<a href="http://localhost/carpool/benefits.html" style="color:white">Benefits</a><br/><br/>

<a href="http://localhost/carpool/etiquettes.html" style="color:white">Etiquitte</a><br/><br/>

<a href="http://www.google.com" style="color:white">About us</a><br/><br/>


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

<div id="pool" style="border:3px solid black">
<form method="POST" action="registeration.php" name="formshrey">
<div id="details">
<h3 style="color:white">  <?php
	session_start();
	if($_SESSION['user'])
	echo " Welcome ".$_SESSION['user']."  Please Enter Some Details : !! <br/>";
    else
	die("You must be logged in <a href='carpool.htm'>Click here to go to homepage</a>");
 
//$username=$_GET['x'];
//echo $username;
?>
</h3>
</div>
<div id="id1" style="margin:7px">
<table>
<tr>
<td> Car Number </td>
<td>:</td>
<td><input type="text" name="carno"/></td><td><div id="car">If you dont have car leave blank</div></td>
</tr>
<tr><td> </td></tr>

<br />
<tr>
<td> Driving License  </td>
<td>:</td>
<td>Yes<input type="radio" name="license" value="yes"/>
No<input type="radio" name="license" value="no"/></td>
</td>
</tr>
<tr><td> </td></tr>
<br />
<tr>
<td> You Consider  </td>
<td>:</td>
<td> <select name="lift">
<option value="Giving Lift">Giving Lift</option>
<option value="Taking Lift">Taking Lift</option>
<option value="Both">Both</option>
</select>
</tr>

<tr>
<td> Phone number to Contact </td>
<td>:</td>
<td><input type="text" name="phone"/></td><td><div id="car">MUST</div></td>
</tr>
<tr><td> </td></tr>

<br />

<tr><td> </td></tr>
<tr><td> </td></tr>
<tr><td> </td></tr>
</table>
</div>


<div id="id2">
<table>
<tr><td> </td></tr>
<tr><td> </td></tr>
</table>


<table>
<div id="line" style="color:white">Details about the source</div>
<tr>
<td>City</td>
<td>:</td>
<td><select name="source" onChange="myfunct1(document.formshrey.source.selectedIndex)">
<option value="des">-City-</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Gandhinagar">Gandhinagar</option>
<option value="Rajkot">Rajkot</option>
<option value="Surat">Surat</option>
<option value="Vadodara">Vadodara</option>
</select>
</td>
</tr>
<br />
<tr>
<td>Exact Location</td>
<td>:</td>
<td><select name="sourcee">
<option value="loc">-Location-</option>

</select>
</td>
</tr>
<br />
<tr><td><br/></td></tr>

</table>
</div>


<div id="dest" style="color:white">Details about the Destination</div>
<!--<tr><td> </td></tr>
<tr><td> </td></tr>
<div id="dest">
<tr><td><b style="color:white">Details about the Destination</b></td></tr>
</div>
<tr><td> </td></tr>
<tr><td> </td></tr>
-->
<table>
<tr>
<td>City</td>
<td>:</td>
<td><select name="dest" onChange="myfunct(document.formshrey.dest.selectedIndex)">
<option value="des">-City-</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Gandhinagar">Gandhinagar</option>
<option value="Rajkot">Rajkot</option>
<option value="Surat">Surat</option>
<option value="Vadodara">Vadodara</option>
</select>
</td>
</tr>
<br />
<tr>
<td>Exact Location</td>
<td>:</td>
<td><select name="Cities">
<option value="loc">-Location-</option>

</select>
</td>
</tr>
<br />



<tr>
<td>Timings</td>
<td>:</td>
<td><table>
<tr>
<td>Pick up</td>
<td>:</td>
<td>
<select name="pickup" >
<option value="0000_hrs">00:00</option>
<option value="0100_hrs">01:00</option>
<option value="0200_hrs">02:00</option>
<option value="0300_hrs">03:00</option>
<option value="0400_hrs">04:00</option>
<option value="0500_hrs">05:00</option>
<option value="0600_hrs">06:00</option>
<option value="0700_hrs">07:00</option>
<option value="0800_hrs">08:00</option>
<option value="0900_hrs">09:00</option>
<option value="1000_hrs">10:00</option>
<option value="1100_hrs">11:00</option>
<option value="1200_hrs">12:00</option>
<option value="1300_hrs">13:00</option>
<option value="1400_hrs">14:00</option>
<option value="1500_hrs">15:00</option>
<option value="1600_hrs">16:00</option>
<option value="1700_hrs">17:00</option>
<option value="1800_hrs">18:00</option>
<option value="1900_hrs">19:00</option>
<option value="2000_hrs">20:00</option>
<option value="2100_hrs">21:00</option>
<option value="2200_hrs">22:00</option>
<option value="2300_hrs">23:00</option>
<option value="2400_hrs">24:00</option>


</select>
</td>
</tr>
<tr>
<td>Return</td>
<td>:</td>
<td>
<select name="return" >
<option value="0000_hrs">00:00</option>
<option value="0100_hrs">01:00</option>
<option value="0200_hrs">02:00</option>
<option value="0300_hrs">03:00</option>
<option value="0400_hrs">04:00</option>
<option value="0500_hrs">05:00</option>
<option value="0600_hrs">06:00</option>
<option value="0700_hrs">07:00</option>
<option value="0800_hrs">08:00</option>
<option value="0900_hrs">09:00</option>
<option value="1000_hrs">10:00</option>
<option value="1100_hrs">11:00</option>
<option value="1200_hrs">12:00</option>
<option value="1300_hrs">13:00</option>
<option value="1400_hrs">14:00</option>
<option value="1500_hrs">15:00</option>
<option value="1600_hrs">16:00</option>
<option value="1700_hrs">17:00</option>
<option value="1800_hrs">18:00</option>
<option value="1900_hrs">19:00</option>
<option value="2000_hrs">20:00</option>
<option value="2100_hrs">21:00</option>
<option value="2200_hrs">22:00</option>
<option value="2300_hrs">23:00</option>
<option value="2400_hrs">24:00</option>
</select>
</td>
</tr>
<!--

Comments
<tr><td>Days of travel in a week</td>
<td>
:</td>
<td>
<select name="traveldays" >
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option></td></tr>
<br />
-->

</table>


<br />




<input type="submit" name="submit"value="Save your details" />
<!--
Comments
<table>
<tr><td>Preferences :</td></tr>
<tr><td> </td></tr>
<tr>
<td>Male<input type="radio" value="male" name="sex" /></td>

<td>Female<input type="radio" value="female"name="sex" /></td>
<td>Any<input type="radio" value="any"name="sex" /></td>
<tr><td> </td></tr>

<tr><td>Smoker<input type="radio" value="smoker" name="smoke" /></td>
<td>Non-smoker<input type="radio" value="non-smoker"name="smoke" /></td></tr>

</table>
-->










</div>



</form>

</div>
</div>

</body>
</html>