<?php
require 'db_connect.php';

if (isset($_POST["CompleteReservation"])) {

	/* retrieve reservation data values */
	$checkin = $_POST['in'];
	$checkout = $_POST['out'];
	$nights = $_POST['nights'];
	$rooms = $_POST['rooms'];
	$villas = $_POST['villas'];
	$adults = $_POST['adults'];
	$children = $_POST['children'];

	/* retrieve customer data values */
	$nic = $_POST["nic"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$city = $_POST["city"];
	$province = $_POST["prvnc"];
	$country = $_POST["country"];
	$zipcode = $_POST["zip"];

	/* retrieve payment data values */
	$cardNo = $_POST["cardNo"];
	$cardtype = $_POST["type"];
	$bank = $_POST["cardName"];

	/* retrieve customer contact data values */
	$cid = $_POST["nic"];
	$phone = $_POST["tel"];
	$email = $_POST["email"];

	/*inserting customer data*/
	$insertString = "INSERT INTO customer VALUES ('$nic','$fname','$lname','$city','$province','$country','$zipcode')";
	if (!mysql_query($insertString)) {
		die('Error:' . mysql_error());
	} else {
		echo "<br>";
		echo "1 record added";
	}

	/*inserting payment data*/
	$insertString = "INSERT INTO payment(`Card Type`,`Card No`,Bank) VALUES ('$cardtype','$cardNo','$bank')";
	if (!mysql_query($insertString)) {
		die('Error:' . mysql_error());
	} else {
		echo "<br>";
		echo "1 record added";
	}

	/*inserting phone_info*/
	$insertString = "INSERT INTO phone_info VALUES ('$cid','$phone')";
	if (!mysql_query($insertString)) {
		die('Error:' . mysql_error());
	} else {
		echo "<br>";
		echo "1 record added";
	}

	/*inserting email_info*/
	$insertString = "INSERT INTO email_info VALUES ('$cid','$email')";
	if (!mysql_query($insertString)) {
		die('Error:' . mysql_error());
	} else {
		echo "<br>";
		echo "1 record added";
	}

	/*inserting reservation data*/
	$insertString = "INSERT INTO reservation(CID,Check_in,Check_out,Rooms,Villas,Adults,Children) VALUES ('$cid','$checkin','$checkout',$rooms,$villas,$adults,$children)";
	if (!mysql_query($insertString)) {
		die('Error:' . mysql_error());
	} else {
		echo "<br>";
		echo "1 record added";
	}

}

/*riservation table*/
/*if (isset($_POST["book"])) {
 //$username=$_POST["userName"];
 //$password=$_post["password"];
 $checkin = $_POST["in"];
 $checkout = $_POST["out"];
 $Rooms = $_POST["rooms"];
 $villas = $_POST["villas"];
 $adults = $_POST["adults"];
 $children = $_POST["children"];
 $insertString = "INSERT INTO reservation(CID,Check_in,Check_out,Rooms,Villas,Adults,Children) VALUES ('$checkin','$checkout','$Rooms','$villas','$adults','$children')";
 if (!mysql_query($insertString)) {
 die('Error:' . mysql_error());
 } else {
 echo "<br>";
 echo "1 record added";
 }

 }*/
/*phoneInfo table*/
/*	if(isset($_POST["CompleteResevation"])){
 $cid=$_POST["nic"];
 $phone=$_POST["tel"];

 $insertString="INSERT INTO phone_info VALUES ('$cid','$phone')";
 if(!mysql_query($insertString)){
 die('Error:'.mysql_error());
 }
 else{
 echo"<br>";
 echo"1 record added";
 }
 }*/
/*emailinfo table*/
/*   if(isset($_POST["CompleteResevation"])){
 $cid=$_POST["nic"];
 $email=$_POST["email"];

 $insertString="INSERT INTO email_info VALUES ('$cid','$email')";
 if(!mysql_query($insertString)){
 die('Error:'.mysql_error());
 }
 else{
 echo"<br>";
 echo"1 record added";
 }
 }*/
/*payment table*/
/*if(isset($_POST["CompleteResevation"])){
 $cardNo=$_POST["cardNo"];
 $cardtype=$_POST["type"];
 $bank=$_POST["cardName"];

 $insertString="INSERT INTO payment VALUES ('$cardtype',$cardNo,'$bank')";
 if(!mysql_query($insertString)){
 die('Error:'.mysql_error());
 }
 else{
 echo"<br>";
 echo"1 record added";
 }
 }*/

/* admin table*/
/*if(isset($_POST["CompleteResevation"])){
 $username=$_POST["admin"];
 $password=$_POST["adminpass"];

 $insertString="INSERT INTO admin VALUES ('$username','$password')";
 if(!mysql_query($insertString)){
 die('Error:'.mysql_error());
 }
 else{
 echo"<br>";
 echo"1 record added";
 }
 }*/

/* make table*/
/*if(isset($_POST["CompleteResevation"])){
 $nic=$_POST["nic"];
 $cardNo=$_POST[""];

 $insertString="INSERT INTO ADMIN VALUES ('$username','$cardNo')";
 if(!mysql_query($insertString)){
 die('Error:'.mysql_error());
 }
 else{
 echo"<br>";
 echo"1 record added";
 }
 }*/
/*update*/
if (isset($_POST["edit"])) {
	$checkin = $_POST['arival'];
	$checkout = $_POST['depature'];
	$child = $_POST['child'];
	$rooms = $_POST['rm'];
	$villas = $_POST['vlls'];
	$adults = $_POST['ad'];
	$NIC = $_POST['nic'];
	$updateString = "UPDATE reservation SET check_in='$checkin',check_out='$checkout',Rooms='$rooms',Villas='$villas',Adults='$adults',Children='$child'  WHERE CID='$NIC'";
	if (!mysql_query($updateString)) {
		die('Error:' . mysql_error());
	} else {
		echo "<br>";
		echo "1 record updated";
	}
}
/*delete*/
if (isset($_POST["cancel"])) {
	$nic = $_POST["nic"];
	$deleteString = "DELETE FROM customer WHERE CID='$nic' ";
	if (!mysql_query($deleteString)) {
		die('Error:' . mysql_error());
	} else {
		echo "<br>";
		echo "1 record deleted";
	}
}
?>