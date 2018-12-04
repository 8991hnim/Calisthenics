<?php
	include('../config/configDb.php');
	include('object/user.php');

	if(isset($_POST["account"]) && isset($_POST["password"])){
		$account = $_POST["account"];
		$password = $_POST["password"];

		$stmt = $conn->prepare("SELECT * FROM user WHERE Account = :account AND Pass = :password");
		$stmt->bindParam(':account', $account);
   		$stmt->bindParam(':password', $password);
   		$stmt ->execute();
   		$num = $stmt ->rowCount();
   		if($num>0){
   			include_once("../config/core.php");

   			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			$user = new User;
			$user->id = $row['ID'];
	        $user->account = $row['Account'];
	        $user->password = $row['Pass'];
	        $user->type = $row['Type'];
	        $user->username = $row['Username'];

	         $_SESSION['current_user'] = serialize($user);
	         $_SESSION['logged_in'] = true;

	         echo ("Xin chao ".$user->username);
   		}else{
   			echo "Fail";
   		}
	}

?>