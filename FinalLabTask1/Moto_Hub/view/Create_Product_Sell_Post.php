<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>Create New sell post</title>
</head>
<body style="background-color:skyBlue;">
		
      <a href="home.php">Back</a> | 
		<a href="logout.php"> logout </a>
		<br>
		<br>

		
		<form action="productList.php" method="post" enctype="">
			<fieldset>
				<legend><h1>Create post</h1></legend>
				<table>
					<tr>
						<td>Product Name</td></tr>
						<tr>
						<td><input type="text" name="productName" value=""></td>
					</tr>
					<tr>
						<td>Product ID</td>
						</tr>
						<tr>
						<td><input type="Number" name="Pid" value=""></td>
					</tr>

				
					<td><br></td>
					
					<tr>
						<td align="Center">
							<input type="submit" name="" value="Post">
							
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>