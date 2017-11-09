
   <html>
	<head>
		<script>
			function formValidate() {
	var username = document.forms["adlogin"]["un"].value;
	var password = document.forms["adlogin"]["pswrd"].value;
	
	
	if (!isEmpty(username, " Uauser name") && !isEmpty(password, "Password")) {
		alert("yes");
	} else {
	}
	
	}
	function isEmpty(elemValue, field) {
	if (elemValue == "" || elemValue == null) {
		alert("You have" + field + " field Empty");
		return true;
	} else
		return false;
}
	
		</script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body style="background-color:#F0F8FF">
		

		<div >
	    <img src="image/main1.jpg" height="210" width="1356" style="z-index: -1;position: absolute"/>
	    <img src="image/slide-bar/murex-hotel logo.png" height="200px" width="530px">
	    <div class="text">
       <p class="p3">Be happy for this moment. 
       	This moment is your life
</p>
    </div>
		</div>
		
		<div align="center" style="text-align: center;width: 1200px;height: 300px;margin-top: 76px;" >
  	
  	<center>
  	<form name="adlogin" method="post" action="admin.php">
  	<table cellpadding="10px">
  		<tr><th></th></tr>
  		<tr>
  			<td style="color: red"><h3>Authorized only</h3></td>
  		</tr>
  		<tr>
  			<td> Username.</td>
  			<td><input type="text" name="un"</td>
  		</tr>
  		<tr>
  			<td>Password</td>
  			<td><input type="text" name="pswrd"></td>
  		</tr> 
  		<tr>
  			<td><input type="submit" name="adlog" value="LOGIN" onclick="return formValidate()"></td>
  		</tr>
  		
  	</table>
  	
  	
  	
  </form>
  
  </center>
  
  	
  </div>
  
  
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
	</body>
</html>

