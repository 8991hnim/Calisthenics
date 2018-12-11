<?php
	include('../../config/configDb.php');
	include('../../model/user.php');
	include_once("../../config/core.php");

	if(isset($_POST["nameChange"]))
	{
		$user = unserialize($_SESSION['current_user']);
		$id_user = $user->id;

		$username = $_POST["nameChange"];

		$stmt = $conn->prepare(" UPDATE user SET Username = :username WHERE ID = $id_user ");
		$stmt->bindParam(':username', $username);
   		$stmt ->execute();

   		$query = $conn->prepare(" SELECT * FROM user WHERE ID = $id_user ");
   		$query ->execute();
   		$row = $query->fetch(PDO::FETCH_ASSOC);
   		if(isset($row)){

			$user = new User;
			$user->id = $row['ID'];
	        $user->account = $row['Account'];
	        $user->password = $row['Pass'];
	        $user->type = $row['Type'];
	        $user->username = $row['Username'];
	        $user->email = $row['Email'];

	        $_SESSION['current_user'] = serialize($user);

	        echo('change Success');

   		}else{
   			echo "fail";
   		}

	}



	if(isset($_POST["oldPass"]))
	{
		$user = unserialize($_SESSION['current_user']);
		$id_user = $user->id;

		$oldPass = $_POST["oldPass"];
		$hash_pass = password_hash($oldPass, PASSWORD_DEFAULT);

		echo($hash_pass);

		
   		$query = $conn->prepare(" SELECT * FROM user WHERE ID = $id_user AND Pass = :oldPass ");
   		$query->bindParam(':oldPass', $hash_pass);
   		$query ->execute();
   		$row = $query->fetch(PDO::FETCH_ASSOC);
   		if ($row > 1){
   			echo "yes";
   		}else{
   			echo('fail');
   		}


	}

?>