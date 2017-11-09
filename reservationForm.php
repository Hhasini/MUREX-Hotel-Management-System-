<?php 
	$in=$_POST['in'];
	$out=$_POST['out'];
	$nights=$_POST['nights'];
	$rooms=$_POST['rooms'];
	$villas=$_POST['villas'];
	$adults=$_POST['adults'];
	$children=$_POST['children'];
	$cost=$_POST['cost'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="frmvalid.js"></script>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>reservationForm</title>
		<meta name="description" content="">
		<meta name="author" content="Lihini Avanthika">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
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
		
		
		<div>
			<p style="font-size: 20px" align="center"><b>Please complete all of the required fields below to make a reservation and cancellation.</b></p>
			<p align="center">72 hours cancellation notice required.<br>Holiday and Special Events require 10 day cancellation notice.</p>
			<p align="center"><b>Important Note:$15 surchage will be added to your reservation for each additional person.<br>This is a secure form.</b></p>
			<hr size="5px">
			
		</div>
		
		<div style="float: left; width: 25%;">
			<p style="color:#483D8B;text-decoration:underline;padding-top:90px;font-size:20px" align="center">
				<b>Reservation Summary</b>
			</p>
			<p align="center">
				<?php 
					echo "<br/><br/>Check-In Date : ".$in."<br/>";
					echo "Check-Out Date : ".$out."<br/>";
					echo "Nights : ".$nights."<br/>";
					echo "Rooms : ".$rooms."<br/>";
					echo "Villas : ".$villas."<br/>";
					echo "Adults : ".$adults."<br/>";
					echo "Children : ".$children."<br/>";
					echo "Total Cost : ".$cost."<br/>";				
				?>
			</p>			
		</div>
		<div align="center" style="float: left; width: 50%;">
			<form name="f2" onsubmit="return formValidate()" action="database.php" method="post">
				<h1 style="font-size: 25px"><b>Confirm Your Stay</b></h1>
				<input type="hidden" name="in" value="<?=$in?>">
				<input type="hidden" name="out" value="<?=$out?>">
				<input type="hidden" name="nights" value="<?=$nights?>">
				<input type="hidden" name="rooms" value="<?=$rooms?>">
				<input type="hidden" name="villas" value="<?=$villas?>">
				<input type="hidden" name="adults" value="<?=$adults?>">
				<input type="hidden" name="children" value="<?=$children?>">
				<input type="hidden" id="cost" value="0">				
				
				<table width="600" style="border: solid;background-color: #E6E6FA;border-color: white;padding-left: 55px;padding-top: 25px;padding-bottom: 25px">
					<tr><th align="left" colspan="2">Billing and Reservation Information </th></tr>
					<tr>
						<td>Prefix First Name</td>
						<td>Last Name</td>
					</tr>
					<tr>
						<td><select>
							<option>Mr</option>
							<option>Mrs</option>
							
						</select> <input type="text" name="fname"></td>
						<td><input type="text" name="lname"></td>
					</tr>
					<tr>
						<td> NIC Number</td>
						<td></td>
					</tr>
					<tr>
						<td><input type="text" name="nic"></td>
						<td></td>
					</tr>
					<tr>
						<td>Email Address</td>
						<td>Telephone number</td>
					</tr>
					<tr>
						<td><input type="text" name="email"></td>
						<td><input type="text" name="tel"></td>
					</tr>
					<tr>
						<td>zip/postal</td>
						<td>City</td>
					</tr>
					<tr>
						<td><input type="text" name="zip"></td>
						<td><input type="text" name="city"></td>
					</tr>
					<tr>
						<td>state/province</td>
						<td>Country</td>
					</tr>
					<tr>
						<td><input type="text" name="prvnc"></td>
						<td><input type="text" name="country"></td>
					</tr>
					<th align="left"><b>Billing Information</b></th>
					<tr>
						<td>Card Type</td>
						<td><input type="text" name="cardName"></td>
						
					</tr>
					<tr>
						<td>Card Number</td>
						<td><input type="text" name="cardNo"></td>
						
					</tr>
					<tr>
						<td>Expires on</td>
						<td><input type="text" id="datepicker"></td>
					</tr>
					<tr>
						<td>Accepted card</td>
						<td><select name="type"><option>select</option>
							        <option>credit</option>
							        <option>debit</option>
						</select></td>
					</tr>
					<tr><th align="center" colspan="2"><input type="checkbox" id="c1">My contact address is different from my billing address.</th></tr>
					<tr><th align="center" colspan="2">Do you have any special request? <input type="radio" name="r">Yes<input type="radio" name="r">No</th></tr>
					<tr><th align="left" colspan="2"><b>Special Request</b><br>Note:These are not guaranteed.</th></tr>
					<tr>
						<td>Arrival Time</td>
						<td><input type="text" id="T14"></td>
					</tr>
					<tr>
						<td>Additional Comment</td>
						<td><textarea></textarea></td>
					</tr>
					
					<tr><th align="left" colspan="2">I have read and agree to the terms and conditions.</th></tr>
					<tr>
						<td><input type="submit" name="CompleteReservation" value="CompleteReservation"></td>
						<td></td>
					</tr>
				</table>
			</form>
		</div>
		
		<div style="float: right; width: 25%" >
			<p align="left" style="padding-top: 90px;color: #483D8B">Estimated total cost of rooms, service charges and applicable package inclusions. Estimated total cost does not include airport transfers or requested amenities. Service charges, levies and surcharges are calculated upon check-out and are subject to change without notice. Extra person/extra bed charges are additional to the rates displayed unless otherwise noted. Early departure fees may apply. Should you shorten your stay prior to arrival or during your stay, your room rate may change..

Reservation deposit amout US$ 35.53 will be charged at the time of booking and may vary depending on the terms and conditions of the rate booked.
Must guarantee room with deposit,AMX,HMC,HVC</p><br>
<a style="color:red" href="cancellation.html">Cancel reservation</a><br><br>
<a style="color: red" href="checkAvailability.html">Check Avalability</a><br><br>
<a style="color: red" href="login.html">Update Reservation</a>
		</div>
		<br>
		<div style="clear:both;"><p align="center" style="color: #483D8B">All offers are subject to availability at the time of reservation offers are not valid in conjunction with any other offer or contractand do not apply to groups.Rates are per room,per night vary by arival<br>date and/or length of stay.Rates do not include service charges,levies,gratuities or surcharges unless otherwise noted Early departure fees may apply.<br>Rate are subject to change.</p></div>
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
