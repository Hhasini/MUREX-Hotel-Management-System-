<?php

require 'db_connect.php';



?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link href="css/jquery-ui.css" rel="stylesheet">
	</head>
<body>
	<div >
	    <img src="image/main1.jpg" height="210" width="1356" style="z-index: -1;position: absolute"/>
	    <img src="image/slide-bar/murex-hotel logo.png" height="200px" width="530px">
	    <div class="text">
       <p class="p3">Be happy for this moment. 
       	This moment is your life
</p>
    </div>
		</div>
		
		<div class="nav">
	
	<a class="n1" href="#"> Murex |</a>
    <a class="n1" href="rooms.html"> Rooms   |</a>
    <a class="n1" href="#"> Book Now   |</a>
    <a class="n1" href="#"> Dining   |</a>
    <a class="n1" href="#"> Photos  &  Videos |</a>
    <a class="n1" href="#"> Facilities  |</a>
    <a class="n1" href="#"> Events  &  Meetings  | </a>
    <a class="n1" href="#"> FAQ </a>   			
			
</div>
<center>
		<div align="center" style="background-color:#87CEEB;width: 600">
<form name="update" method="post" action="database.php">
					<input type="hidden" name="nic" value="<?php $n1=$_POST['nic1']?>">		

	  <h1>UPDATE RESERVATION</h1>
			<table>
				<tr><th align="left" colspan="2">By filling the following form,your previous reservation will be updated with the filled information.</th></tr>
				<tr>
					<TD>ARIVAL DATES</TD>
					<td><input type="text" name="arival" class="datepicker"></td>
				</tr>
				<tr>
					<td>DEPATURE</td>
					<td><input type="text" name="depature" class="datepicker"></td>
				</tr>
				<tr>
					<td>NO OF ROOMS</td>
					<td><input type="text" name="rm"></td>
				</tr>
				<td>NO OF VILLAS</td>
					<td><input type="text" name="vlls"></td>
					
				</tr>
				<tr>
					<td>ADULTS</td>
					<td><input type="text" name="ad"></td>
					
				</tr>
				<tr>
					<td>CHILDREN</td>
					<td><input type="text" name="child"></td>
				</tr>
				
				
				<tr>
					<td><input type="submit" name="edit" value="Update"></td>
					<td></td>
				</tr>
				
				
			</table>
			
			
			
			
			
		</form>
		</div>
		</center>
		<br>
		<br>
		<div class="footer">
			
			TEL : +96123345567 <br>
			
			Email : @murex.com
			<br><br>
			
			
			<div class="i1">
			<img src="image/icons/fb.jpg" width="40px" height="40px">
            <img src="image/icons/tweeter.jpg" width="40px" height="40px">
			<img src="image/icons/youtube.jpg" width="40px" height="40px">

			
			</div>
			&copy; copyright 2014 murex.com.All Rights Reserved.
		</div>	
		<script src="js/jquery.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script>
		
		$( "#datepicker" ).datepicker({
			dateFormat: "yy-mm-dd"
		});
		
		</script>	
		
		
	</body>
	
	
	
	
	
</html>