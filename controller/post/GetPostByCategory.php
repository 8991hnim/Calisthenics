<?php
	include('../../config/configDb.php');
	include('../../config/core.php');
	include('../../model/post.php');

	if(isset($_POST['cat'])){
		$cat = $_POST['cat'];

		$stmt = $conn->prepare("SELECT * FROM post WHERE CategoryID = ( SELECT ID FROM category WHERE Name = '$cat')");
		$stmt ->execute();

		$arrayPost = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$post = new Post();
			$post->id = $row['ID'];
			$post->title = $row['Title'];
			$post->content = $row['Content'];
			$post->shortContent = $row['ShortContent'];
			$post->linkYoutube = $row['LinkYoutube'];
			$post->image = $row['Image'];

			array_push($arrayPost, $post);
        }
		
		echo json_encode($arrayPost);
	}
?>