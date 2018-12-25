<?php
	include('../../config/configDb.php');
	include('../../config/core.php');

	if(isset($_POST['exerciseID'])){

		$exerciseID = $_POST['exerciseID'];

		echo $exerciseID;
		
		$stmt2 = $conn->prepare("UPDATE exercise SET isActive = 0 WHERE ID = $exerciseID");
		
		$stmt2 ->execute();

		echo "delete success";
	}
?>