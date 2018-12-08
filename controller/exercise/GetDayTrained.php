<?php
	include('../../config/configDb.php');

	if(isset($_POST['userID']) && isset($_POST['level'])){
			$userID = $_POST['userID'];
			$levelID = $_POST['level'];

			$stmt = $conn->prepare("SELECT * FROM progress_training WHERE UserID = $userID AND LevelID = $levelID");
			$stmt ->execute();
		
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			echo $row['DayTrained'];
	}		
?>