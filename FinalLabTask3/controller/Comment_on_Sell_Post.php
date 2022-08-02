<?php 
	session_start();
$Name = $_REQUEST['username'];
	$Id = $_REQUEST['id'];
	$Comment = $_REQUEST['comment'];
	

	if ($Name == null || $Id == null || $Comment==null) {
		echo " NO post found<br>";
	}else{
		$data = $Name."|".$Id."|".$Comment."\r\n";
		$file = fopen('Comment_on_Sell_Post.txt', 'a');
		fwrite($file, $data);

			header('location: Comment_on_Sell_Posthtml.php');
	
	}



?>