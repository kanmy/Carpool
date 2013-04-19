<html>
<head>

<style type="text/css">
#line
{
    background-color:660099;
}
#main
{
height:510px; width:400px; border-radius:20px; background-color:#CCFFCC;
}
#details
{
background-color:#660099;
}
#dest
{
background-color:#660099;
}
</style>
</head>
<body>
<div id="main" style="border:3px solid black">
<form method="POST" action="registeration.php">
<div id="details">
<h4 style="color:white"> Enter Some Details :</h4>
</div>
<div id="id1" style="margin:7px">
<div >
<table>
<tr>
<td> Car Number </td>
<td>:</td>
<td><input type="text" name="carno"/></td>
</tr>
<tr><td> </td></tr>

<br />
<tr>
<td> Driving License  </td>
<td>:</td>
<td>Yes<input type="radio" name="license"/>
No<input type="radio" name="license"/></td>
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
<td><select name="source">
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
<option value="Ambavadi">Ambavadi</option>
<option value="Naranpura">Naranpura</option>
<option value="CG Road">CG Road</option>
<option value="SG Highway">SG Highway</option>
<option value="Bopal">Bopal</option>
</select>
</td>
</tr>
<br />
<tr><td><br/></td></tr>
</table>
</div>

<div id="id3">
<table>
<div id="dest" style="color:white">Details about the Destination</div>
<!--<tr><td> </td></tr>
<tr><td> </td></tr>
<div id="dest">
<tr><td><b style="color:white">Details about the Destination</b></td></tr>
</div>
<tr><td> </td></tr>
<tr><td> </td></tr>
-->
<tr>
<td>City</td>
<td>:</td>
<td><select name="destination">
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
<td><select name="destinatione">
<option value="loc">-Location-</option>
<option value="Ambavadi">Ambavadi</option>
<option value="Naranpura">Naranpura</option>
<option value="CG Road">CG Road</option>
<<option value="SG Highway">SG Highway</option>
<option value="Bopal">Bopal</option>
</select>
</td>
</tr>
<br />

<!--

Comments

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

</div>
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













</form>

</div>
</body>
</html>