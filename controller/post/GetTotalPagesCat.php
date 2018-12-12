<?php
    include('../../config/configDb.php');
    include('../../config/core.php');

    if(isset($_POST['cat'])){
        $cat = $_POST['cat'];

        //lấy tổng số trang
        $stmt = $conn->prepare("SELECT COUNT(*) FROM post WHERE CategoryID = ( SELECT ID FROM category WHERE Name = '$cat')");
        $stmt ->execute();
        $number_of_rows = $stmt->fetchColumn(); 
        $number_of_pages = ceil($number_of_rows / $limit); 

        echo $number_of_pages;
    }
?>