<?php
    $ci = $_POST["ci"];
	$co = $_POST["co"];
	
	echo "RESPONSE FROM SERVER <br/> <br/>";
	
	if (strcmp($ci, "") !== 0) {	
		$ciArr = explode('/', $ci);
		echo "Check-in Date : ".$ciArr[1].", Month : ".$ciArr[0].", Year : ".$ciArr[2];
	}else{
		echo "Check-in Date not specified";
	}
	
	echo "<br/>";
	
	if (strcmp($co, "") !== 0) {
		$coArr = explode('/', $co);
		echo "Check-out Date : ".$coArr[1].", Month : ".$coArr[0].", Year : ".$coArr[2];
	}else{
		echo "Check-out Date not specified";		
	}
	
	echo "<br/>";
	echo "<br/>";
	
	

?>
<!DOCTYPE >
<html>
	<form name="f1">
		<table style="border: solid;border-color: white;background-color:#ADD8E6" width="980">
			<tr>
				<td>Guest Rooms</td>
				<td>Room Type</td>
				<td>No of Rooms</td>
			</tr>
		<tr>
			<td><img src="image/28.jpg" width="150" height="150"></td>
			<td><b>DELUX DOUBLE ROOM CITY VIEW</b><br><a href="Room.html">see more details</a></td>
			<td><?php echo "jkdjdjkdkjdkj"; ?></td>
		</tr>
		<tr>
			<td><img src="image/40.jpg" width="150" height="150"></td>
			<td><b>DELUX DOUBLE ROOM SEA VIEW</b><br><a href="Room.html">see more details</a></td>
			<td></td>
		</tr>
		<tr>
			<td><img src="image/04_premium_deluxe_spa_water_villa_9.jpg" width="150" height="150"></td>
			<td><b>DELUX TRIPPLE ROOM SEA VIEW</b><br><a href="Room.html">see more details</a></td>
			<td></td>
		</tr>
		<tr>
			<td>Villas</td>
			<td>Villa Type</td>
			<td>No of Villas</td>
		</tr>
		<tr>
			<td><img src="image/v1.jpg" width="150" height="150"></td>
			<td><b>BEACH VILLA</b><br><a href="Room.html">see more details</a></td>
			<td></td>
		</tr>
		<tr>
			<td><img src="image/v2.jpg" width="150" height="150"></td>
			<td><b>FAMILY BEACH VILLA</b><br><a href="Room.html">see more details</a></td>
			<td></td>
		</tr>
		<tr>
			<td><img src="image/vw3.jpg" width="150" height="150"></td>
			<td><b>DELUX WATER VILLA</b><br><a href="Room.html">see more details</a></td>
			<td></td>
		</tr>
		</table>
	</form>
</html>