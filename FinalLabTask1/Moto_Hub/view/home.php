<?php 
	//session_start();
	if(isset($_COOKIE['status'])){
?>


<html>
<head>
	<title>Home Page</title>
</head>
<body style="background-color:skyBlue;">
<br>
<br>
		<h1 align="Center"><b>Welcome to MOTO HUB!</b></h1>
		<hr>
		
		<table width="1600" >
		<tr>
    <td align="right"><a href="Create_Product_Sell_Post.php"><h3>Create Post</h3></a></td>
    <td align="Center"><a href="Edit_Product_Information.php"> <h3>Edit Product Info</h3> </a> </td>
    <td align="left"><a href="Contact_system_adminhtml.php"><h3>Contact Admin</h3>  </a></td>
  </tr>
  <tr>
    <td align="right"><a href="Delete_Product_Sell_Post.php"><h3>Delete Post </h3> </a></td>
    <td align="Center"><a href="Edit_Profile_Information.php"> <h3>Edit Profile</h3> </a></td>
    <td align="left"><a href="Contact_Customerhtml.php"><h3>Contact Customer</h3>  </a><br></td>

  </tr>
  <tr>
    <td align="right"><a href="Comment_on_Sell_Posthtml.php"> <h3>Comment Post </h3></a></td>
    <td align="Center"><a href="Mark_Product_Avalavility.php"><h3>Product Avalavility</h3> </a><br> </td>
	<td align="left"><a href="Request_Deactivate_Profilehtml.php"> <h3>Deactivate Profie </h3></a><br></td>
  
</tr>
<tr>
<td align="right"><a href="Receive_Payment.php"> <h3>Receive Payment </h3></a> </td>
<td align="center">  <a href="../controller/logout.php"><h2>logout </h2> </a><br>  </td>
</tr>
  
	<br>
	 <br> 
	</table> 
  
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>

