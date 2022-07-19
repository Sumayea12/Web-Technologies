<?php 
    require_once "userdb.php";

    function login($user){
        $conn = getConnection();
		$sql = "insert into users values('{$user['Id']}', '{$user['Password']}')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>