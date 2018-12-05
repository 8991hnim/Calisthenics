<?php
	include('../config/configDb.php');
	include('object/exercise.php');

	if(isset($_GET["level"]) && isset($_GET["day"])){
		$level = $_GET["level"];
		$day = $_GET["day"];

		$stmt = $conn->prepare("SELECT ID,Name,Gif,`Set`,Rep,BreakTime FROM training,exercise WHERE LevelID =".$level." AND Day = ".$day." AND ID = ExerciseID");
   		$stmt ->execute();
  //  		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// $json = json_encode($results);
   		$arrayExercise = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$exercise = new Exercise();
			$exercise->id = $row['ID'];
			$exercise->name = $row['Name'];
			$exercise->gif = "https://www.youtube.com/embed/".$row['Gif'];
			$exercise->set = $row['Set'];
			$exercise->rep = $row['Rep'];
			$exercise->breakTime = $row['BreakTime'];
			array_push($arrayExercise, $exercise);
        }

		echo json_encode($arrayExercise);
	}
?>