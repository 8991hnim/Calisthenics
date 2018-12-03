<?php
	include('../config/configDb.php');
	include('object/user.php');
	include('../config/core.php');

	if(isset($_POST["userName"]) && isset($_POST["account"]) && isset($_POST["password"]) && isset($_POST["confirmPassword"]))
	{
		$userName = $_POST["userName"];
		$account = $_POST["account"];
		$password = $_POST["password"];
		$confirmPassword = $_POST["confirmPassword"];

		$stmt = $conn->prepare("SELECT * FROM user WHERE Account = :account");
		$stmt->bindParam(':account', $account);
   		$stmt ->execute();
   		$num = $stmt ->rowCount();

   		if( $num > 0){
   			echo 'existAccount';
   		}
   		else{
			$insert = $conn->prepare("INSERT INTO user VALUES(:userName, :account, :password, :confirmPassword, 2)");
	        $insert->bindParam(':userName', $userName);
	        $insert->bindParam(':account', $account);
	        $insert->bindParam(':password', $password);
	        $insert->bindParam(':confirmPassword', $confirmPassword);
	        $insert->execute();

	        echo('xong');
            $_SESSION['signup_success'] = true;
	        
   		}

	}

?>