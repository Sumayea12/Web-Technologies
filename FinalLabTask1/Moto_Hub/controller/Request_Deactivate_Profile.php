<?php 
	session_start();
$Name = $_REQUEST['username'];
	$Id = $_REQUEST['id'];
	$Request_message = $_REQUEST['requestmessage'];
	

	if ($Name == null || $Id == null || $Request_message==null) {
		echo "invalid username/password <br>";
	}else{
		$data = $Name."|".$Id."|".$Request_message."\r\n";
		$file = fopen('Request_Deactivate_Profile.txt', 'a');
		fwrite($file, $data);

			header('location: Request_Deactivate_Profilehtml.php');
	
	}



?>