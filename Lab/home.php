<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome home!</h1>
	<a href="create.php"> Create New </a> | 
	<a href="userlist.php"> User List </a> |
	<a href="logout.php"> logout </a>
</body>
</html>


<?php 
	}else{
		echo "invalid request";
	}  
?>
