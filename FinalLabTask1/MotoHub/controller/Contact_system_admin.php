<?php 
	session_start();
$Name = $_REQUEST['username'];
	$Id = $_REQUEST['id'];
	$Comment = $_REQUEST['comment'];
	

	if ($Name == null || $Id == null|| $Comment==null ) {
		echo "Please Enter your Info";
	}else{
		$data = $Name."|".$Id."|".$Comment."\r\n";
		$file = fopen('Contact_system_admin.txt', 'a');
		fwrite($file, $data);


			header('location: Contact_system_adminhtml.php');
	
	}


?>