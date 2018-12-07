<?php
	include('../config/configDb.php');
	include('../config/core.php');
	include('object/progress_training.php');

	if(isset($_POST['userID'])){
		$userID = $_POST['userID'];
		$stmt = $conn->prepare("SELECT * FROM progress_training WHERE UserID = $userID");
		$stmt ->execute();

		$arrayDayTrained = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$progressTraining = new ProgressTraining();
			$progressTraining->userID = $row['UserID'];
			$progressTraining->levelID = $row['LevelID'];
			$progressTraining->dayTrained = $row['DayTrained'];
			array_push($arrayDayTrained, $progressTraining);
        }
		
		$_SESSION['progress_training'] = serialize($progressTraining);
		echo json_encode($arrayDayTrained);
	}
?>