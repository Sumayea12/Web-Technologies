<?php 
    require_once "userdb.php";

    function login($user){
        $conn = getConnection();
		$sql = "select * from users where Id = '{$user['Id']}' and Password = '{$user['Password']}')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>