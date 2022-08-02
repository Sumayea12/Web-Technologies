<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>contact customer</title>
</head>
<body style="background-color:skyBlue;">
		<a href="home.php">Back</a> | 
		<a href="logout.php"> logout </a>

		
		<form action="Contact_Customer.php" method="post" enctype="">
			<fieldset>
				<legend><h1>contact customer</h1></legend>
				<table>
					<tr>
						<td>Seller Name</td></tr>
						<tr>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>Customer ID</td>
						</tr>
						<tr>
						<td><input type="Number" name="id" value=""></td>
					</tr>

				
					<td><br></td>
					
					<tr>
						<td>
							<input type="submit" name="" value="Submit">
							
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>