<?php 
	session_start();
$Name = $_REQUEST['productName'];
	$Id = $_REQUEST['Pid'];
	

	if ($Name == null || $Id == null ) {
		echo "please enter product name and product id <br>";
	}else{
		$data = $Name."|".$Id."\r\n";
		$file = fopen('productList.txt', 'a');
		fwrite($file, $data);

			header('location: showProduct.php');
	
	}

?>