<?php
	include "connect.php";
	$ID = $_GET['ID'];
	$sqlDelete = "DELETE FROM student WHERE id = $ID ";
	
	if (mysqli_query($connect, $sqlDelete)===TRUE){
		header('Location: index.php');
	}
	var_dump($sqlDelete);exit();
?>