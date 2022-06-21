<?php <?php sion_start();

	$Id = $_POST['Id'];
	$password = $_POST['password'];
	$Name = $_POST['Name'];

	if($Id == null || $password == null || $name == null){
		echo "null Id/password/name";
	}else{

		$user = $Id."|".$password."|".$name."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);

		if($fname == 'create'){
			header('location: home.php');
		}else{
			header('location: login.html');
		}

	} ?>
