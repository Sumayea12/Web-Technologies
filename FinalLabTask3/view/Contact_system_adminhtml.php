<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>contact with admin</title>
</head>
<body style="background-color:skyBlue;">
		<a href="home.php">Back</a> | 
		<a href="logout.php"> logout </a>

		
		<form action="Contact_system_admin.php" method="post" enctype="">
			<fieldset>
				<legend><h1>Contact Admin</h1></legend>
				<table>
					<tr>
						<td>Seller Name</td></tr>
						<tr>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>User ID</td>
						</tr>
						<tr>
						<td><input type="Number" name="id" value=""></td>
					</tr>
					<tr>
						<td>Message</td>
						</tr>
						<tr>
						<td><input type="text" name="comment" value=""></td>
					</tr>

				
					<td><br></td>
					
					<tr>
						<td align="Center">
							<input type="submit" name="" value="send">
						
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>