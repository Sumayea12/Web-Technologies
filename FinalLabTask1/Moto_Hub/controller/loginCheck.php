<?php 
	session_start();
    require_once "../model/userModel.php";
	$Id = $_REQUEST['id'];
	$Password= $_REQUEST['password'];

	if ($Id == null || $Password == null) {
		echo "invalid username/password <br>";
	}else{
		$file = fopen('../model/user.txt', 'r');
		while (!feof($file)) {
				$line = fgets($file);
				$user = explode('|', $line);
				print_r($user);
				echo "<br>";
				if($Id == trim($user[1]) && $Password == trim($user[2])){
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../view/home.php');
				}
		}
		echo "invalid user!";
	}



?>