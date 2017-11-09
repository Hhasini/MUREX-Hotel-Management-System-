<?php
    require 'db_connect.php';
?>


<html>
	<body>
		
	<h2>CUSTOMER DETAILS</h2>
<table>
	<tr>
		<th>
			CID
		</th>
		<th>
			
			FIRST NAME
		</th>
		<th>
			LAST NAME
		</th>
		<th>
			CITY
		</th>
		<th>
			PROVINCE
		</th>
		<th>
			COUNTRY
		</th>
		<th>
			ZIP CODE
		</th>
	</tr>
<?php

//
 //select all the data 
// if (isset($_POST["cv"])) {
 $selectString = "SELECT * FROM customer"; 
        $comments = mysql_query($selectString);
  while($row = mysql_fetch_array($comments))
   {
	 ?> 
	 <tr> 
	 	<td> <?php echo $row['CID']; ?> </td> 
	 	<td> <?php echo $row['First name']; ?></td> 
	 	<td> <?php echo $row['Last name']; ?></td> 
	 	<td><?php echo $row['City']; ?></td>	 	  
	 	<td><?php echo $row['Province']; ?></td>	 	  
	 	<td><?php echo $row['Country']; ?></td>	 	  
	 	<td><?php echo $row['Zip code']; ?></td>	 	  
	 		</tr> 	  
	 		 	<?php
	 		 	  } 
	 		 	?>
	 		</table>  


		
	<h2>RESERVATION DETAILS</h2>
<table>
	<tr>
		<th>
			RID
		</th>
		<th>
			
			CID
		</th>
		<th>
			CHECK-IN
		</th>
		<th>
			CHECK-OUT
		</th>
		<th>
			ROOMS
		</th>
		<th>
			VILLA
		</th>
		<th>
			ADULTS
		</th>
		<th>
			CHILDREN
		</th>

	</tr>
<?php

//
 //select all the data 
// if (isset($_POST["cv"])) {
 $selectString = "SELECT * FROM reservation"; 
        $comments = mysql_query($selectString);
  while($row = mysql_fetch_array($comments))
   {
	 ?> 
	 <tr> 
	 	<td> <?php echo $row['RID']; ?> </td> 
	 	<td> <?php echo $row['CID']; ?></td> 
	 	<td> <?php echo $row['Check_in']; ?></td> 
	 	<td><?php echo $row['Check_out']; ?></td>	 	  
	 	<td><?php echo $row['Rooms']; ?></td>	 	  
	 	<td><?php echo $row['Villas']; ?></td>	 	  
	 	<td><?php echo $row['Adults']; ?></td>	 	  
	 	<td><?php echo $row['Children']; ?></td>	 	  
	 	
	 		</tr> 	  
	 		 	<?php
	 		 	  } 
	 		 	?>
	 		</table>  


	<h2>ROOMS AND VILLA DETAILS</h2>
<table>
	<tr>
		<th>
			ID
		</th>
		<th>
			
			TYPE
		</th>
		<th>
			COST
		</th>
		<th>
			RID
		</th>
		<th>
			AID
		</th>
			</tr>
<?php

//
 //select all the data 
// if (isset($_POST["cv"])) {
 $selectString = "SELECT * FROM rooms_villa"; 
        $comments = mysql_query($selectString);
  while($row = mysql_fetch_array($comments))
   {
	 ?> 
	 <tr> 
	 	<td> <?php echo $row['ID']; ?> </td> 
	 	<td> <?php echo $row['Type']; ?></td> 
	 	<td> <?php echo $row['Cost']; ?></td> 
	 	<td><?php echo $row['RID']; ?></td>	 	  
	 	<td><?php echo $row['AID']; ?></td>	 	  
	 	
	 		</tr> 	  
	 		 	<?php
	 		 	  } 
	 		 	?>
	 		</table>  


	<h2>ADMIN DETAILS</h2>
<table>
	<tr>
		<th>
			AID
		</th>
		<th>
			
			NAME
		</th>
		<th>
			USER NAME
		</th>
		<th>
			PASS WORD
		</th>
		
			</tr>
<?php

//
 //select all the data 
// if (isset($_POST["cv"])) {
 $selectString = "SELECT * FROM admin"; 
        $comments = mysql_query($selectString);
  while($row = mysql_fetch_array($comments))
   {
	 ?> 
	 <tr> 
	 	<td> <?php echo $row['AID']; ?> </td> 
	 	<td> <?php echo $row['Name']; ?></td> 
	 	<td> <?php echo $row['User name']; ?></td> 
	 	<td><?php echo $row['Password']; ?></td>	 	  
	 	 	  
	 	
	 		</tr> 	  
	 		 	<?php
	 		 	  } 
	 		 	?>
	 		</table>


	<h2>PAYMENT DETAILS</h2>
<table>
	<tr>
		<th>
			PID
		</th>
		<th>
			
			CARD TYPE
		</th>
		<th>
			CARD NO
		</th>
		<th>
			BANK
		</th>
		<th>
			COST
		</th>
		
			</tr>
<?php

//
 //select all the data 
// if (isset($_POST["cv"])) {
 $selectString = "SELECT * FROM payment"; 
        $comments = mysql_query($selectString);
  while($row = mysql_fetch_array($comments))
   {
	 ?> 
	 <tr> 
	 	<td> <?php echo $row['PID']; ?> </td> 
	 	<td> <?php echo $row['Card Type']; ?></td> 
	 	<td> <?php echo $row['Card No']; ?></td> 
	 	<td><?php echo $row['Bank']; ?></td>	 	  
	 	<td><?php echo $row['Cost']; ?></td>	 	  
	 	 	  
	 	
	 		</tr> 	  
	 		 	<?php
	 		 	  } 
	 		 	?>
	 		</table>




</body>
</html>

