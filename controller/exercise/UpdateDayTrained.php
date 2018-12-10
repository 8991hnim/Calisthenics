<?php
	include('../../config/configDb.php');

	if(isset($_POST['level']) && isset($_POST['dayTrained']) && isset($_POST['userID'])){
			$userID = $_POST['userID'];
			$levelID = $_POST['level'];
			$dayTrained = $_POST['dayTrained'];

			$stmt = $conn->prepare("UPDATE progress_training SET DayTrained = $dayTrained WHERE UserID = $userID AND LevelID = $levelID");
			if($stmt ->execute()) echo "success";
			else echo "fail";
	}		
?>