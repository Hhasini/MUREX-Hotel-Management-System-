<?php
require 'db_connect.php';

    if (isset($_POST["cpwd"])) {
	$pass = $_POST['cpswrd'];
	$cun = $_POST['cun'];	
	
	$updateString = "UPDATE admin SET Password='$pass'  WHERE `User name`='$cun'";
	if (!mysql_query($updateString)) {
		die('Error:' . mysql_error());
	} else {
		echo "<br>";
		echo "password Changed.";
	}
}
?>