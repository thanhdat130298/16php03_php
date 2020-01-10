<?php session_start(); ?>
<!-- Su dung session -->
<?php 
	$a = "Hello ".$_SESSION['name'];
	echo "<br>";
	echo $a;
?>