<?php
	include('../../config/configDb.php');
	include('../../config/core.php');
	include('../../model/post.php');

	if(isset($_POST['cat']) && isset($_POST['page'])){
		$cat = $_POST['cat'];
		$page = $_POST['page'];

		//lấy tổng số trang
		$stmt = $conn->prepare("SELECT COUNT(*) FROM post WHERE CategoryID = ( SELECT ID FROM category WHERE Name = '$cat')");
		$stmt ->execute();
		$number_of_rows = $stmt->fetchColumn(); 
		$number_of_pages = ceil($number_of_rows / $limit); 

		//tính offset
		$offset = ($page-1)* $limit;

		//truy vấn với limit, offset
		$stmt2 = $conn->prepare("SELECT * FROM post WHERE CategoryID = ( SELECT ID FROM category WHERE Name = '$cat') LIMIT $offset, $limit");
		$stmt2 ->execute();

		$arrayPost = array();
		while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
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