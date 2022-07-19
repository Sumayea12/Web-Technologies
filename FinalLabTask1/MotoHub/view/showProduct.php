<?php 
	require_once('header.php');
?>

<html>
<head>

	<title>User list</title>
</head>
<body style="background-color:skyBlue;">
		<a href="home.php"> Back </a> | 
		<a href="logout.php"> logout </a>
		<br>
		<br>
		<table border="1">
			<tr>
				
				<th><H3>PRODUCT NAME</H3></th>
				<th><H3>PRODUCT ID</H3></th>
				
			</tr>

			<?php 
				$file = fopen('productList.txt', 'r');
				while(!feof($file)){
					$user = fgets($file);
					$user = explode("|", $user);
					if(count($user) > 1){
			?>
			<tr>
				<th><?=$user[0]?></th>
				<th><?=$user[1]?></th>
				
			</tr>
			<?php
					}
				}
			?>
		</table>
</body>
</html>