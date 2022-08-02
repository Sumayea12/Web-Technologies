<?php 
	session_start();
$Name = $_REQUEST['username'];
	$Id = $_REQUEST['id'];
	

	if ($Name == null || $Id == null ) {
		echo "Customer not found <br>";
	}else{
		$data = $Name."|".$Id."\r\n";
		$file = fopen('Contact_Customer.txt', 'a');
		fwrite($file, $data);

			header('location: Contact_Customerhtml.php');
	
	}



?>