<!DOCTYPE html>
<html>
<head>
<title>Application Form</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="demo.css" media="all" />
<script language="JavaScript" src="inputsscript.js"/></script>
    
</head>
<body>

<?php
session_start();
$session = 'allowed';
$_SESSION['allowed']=$session;

?>
<div class="container">
<!-- freshdesignweb top bar -->
<div class="freshdesignweb-top">


<div class="clr"></div>
</div><!--/ freshdesignweb top bar -->
<header> <h1><span>Goverment of the Punajab</span>
<span> Director General Mines and Minerals</span>
<span>PONCH HOUSE MULTAN ROAD, LAHORE </span>
</h1>
<p style="font-size:  large"> <b>Application
<span>for</span>
A Prospecting License or Mining lease under Rule 95 (1) of Punjab Mining, Concession Rules, 2002</b> </p>
</header>       

<div  class="form">
<form id="frm" action="insertData.php" method="post"> 
<p class="contact"><label for="name">Name</label></p> 
<input id="name" name="in[]" placeholder="First and last name" required="" tabindex="1" type="text"> 

<p class="contact"><label> Address </label></p> 
<input id="address" name="in[]" placeholder="Address" required="" type="text"> 
<p class="contact"><label for="email">Email</label></p> 
<input type="email" id="nic" name="in[]" > 
<p class="contact"><label for="city">City</label></p> 
<input id="city" name="in[]" placeholder="city" required="" tabindex="2" type="text"> 

<p class="contact"><label >Nationality</label></p> 
<input type="text" id="nationality" name="in[]" required=""> 

<p class="contact"><label for="ID">NIC</label></p> 
<input type="text" id="nic" name="in[]" required=""> 
<p class="contact"><label for="ID">IF Application by Firm<br>
Name of Nationality Share Partner No. Holding</label></p> 
<input type="text" id="nic" name="in[]" >
<p class="contact"><label for="Address">Address of Firm</label></p> 
<input type="text" id="faddress" name="in[]" > 
<p class="contact"><label for="capability">Capability</label></p> 
<input type="text" id="capability" name="in[]" placeholder="">                         
<p class="contact"><label for="phone">Mobile phone</label></p> 
<input id="phone" name="in[]" placeholder="phone number" required="" type="text"> <br>
<p id="contact"><b>Application area</b></p><br><br>
<p class="contact"><label for="Mineral">Mineral</label></p> 
<input type="text" id="mineral" name="in[]" required="" placeholder="coal etc">
<select class="select-style gender" name="in[]" required="">
<option value="select">License Type</option>
<option value="ML">Mining Lease </option>
<option value="PL">Prospecting License</option>

</select><br><br>
<p class="contact"><label for="period">Period for which license is required </label></p> 
<input type="text" id="mineral" name="in[]" required="" placeholder="years">
<p class="contact"><label for="address">Address</label></p> 
<input type="text" id="maddress" name="in[]" required="" placeholder="Dist.Chakwal">
<p class="contact"><label for="Sheet">Topo Sheet No.</label></p> 
<input type="text" id="sheet" name="in[]" required="" placeholder="43_D14"> 
<p style="font-size:  larger; font-weight:  bold;color: red"> Enter Coordinates of Sketch Plan</p><br>
<p style="color:red">Remember the coordinates must be in order of clockwise or anticlockwise</p><br>
<p class="contact"> Enter Easting </p>
<input type="text" name="X[]" required=""/><br>
<p class="contact"> Enter Northing </p>
<input type="text" name="X[]" required=""/><br>
<p class="contact"> Enter Easting </p>
<input type="text" name="X[]" required=""/><br>
<p class="contact"> Enter Northing </p>
<input type="text" name="X[]" required=""/><br>
<p class="contact"> Enter Easting </p>
<input type="text" name="X[]" required=""/><br>
<p class="contact"> Enter Northing </p>
<input type="text" name="X[]" required=""/><br>
<input id='s' type="submit" name="Submit" class="button"/>
<input id='b' type='button' value='Add Fields' class='button' onclick='addfield();'/>
</form> 
</div>      
</div>

</body>
</html>
