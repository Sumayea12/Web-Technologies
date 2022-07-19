<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>Request_Deactivate_Profile</title>
</head>
<body style="background-color:skyBlue;">
		<a href="home.php">Back</a> | 
		<a href="logout.php"> logout </a>

		
		<form action="Request_Deactivate_Profile.php" method="post" enctype="">
			<fieldset>
				<legend><h1>Deactivate Profile</h1></legend>
				<table>
					<tr>
						<td>Seller Name</td></tr>
						<tr>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>Seller ID</td>
						</tr>
						<tr>
						<td><input type="Number" name="id" value=""></td>
					</tr>
			    	<tr>
						<td>Request_message</td>
						</tr>
						<tr>
						<td><input type="text" name="requestmessage" value=""></td>
					</tr>


				
					<td><br></td>
					
					<tr>
						<td align="Center">
							<input type="submit" name="" value="Send">
							
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>