<?php include 'connect.php';?>
<?php 
 	$id = $_GET['id'];
 	$sqlDelete = "DELETE FROM school WHERE id = $id";
 	if (mysqli_query($connect, $sqlDelete) === TRUE) {
 		// chuyen trang
 		header('Location: addSchool.php');
 	}
 ?> 