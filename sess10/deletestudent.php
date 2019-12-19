<?php include 'connect.php';?>
<?php 
 	$id = $_GET['ID'];
 	$sqlDelete = "DELETE FROM student WHERE id = $id";
 	if (mysqli_query($connect, $sqlDelete) === TRUE) {
 		// chuyen trang
 		header('Location: index.php');
 	}
 ?> 