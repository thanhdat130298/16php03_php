<?php include 'connect.php';?>
<?php 
 	$id = $_GET['ID'];
 	echo $ID;
 	$sqlDelete = "DELETE FROM products WHERE ID = $id";
 	if (mysqli_query($connect, $sqlDelete) === TRUE) {
 		// chuyen trang
 		header('Location: ../show.php');
 	}
 ?> 