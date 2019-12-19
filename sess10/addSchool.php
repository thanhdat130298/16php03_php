<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>ADD SCHOOL</title>
</head>
<body>
	<?php INCLUDE "connect.php"	?>
	<?php 

		$sqlShow = "SELECT * from school";
		$result2 = mysqli_query($connect, $sqlShow);
		$name =$errName= '';
		$check = true;
		if (isset($_POST['submit'])){
			$name = $_POST['name'];
			
			if(empty($name)){
				$errName="Input the name of school";
				$check = false;
			}
			else {
				$sqlIN = "INSERT INTO school (nameSC) VALUES ('$name')";
				$result = mysqli_query($connect, $sqlIN);
				$sqlShow = "SELECT * from school";
				$result2 = mysqli_query($connect, $sqlShow);
				//var_dump($sqlShow);exit();
			}
		}
	?>
	<form action="#" method="POST">
		<p>
			<label>School name:</label>
			<input type="text" name="name">
			<span><?php echo "$errName";?></span>
			<input type="submit" name="submit" value="ADD" class="findButton">
			<a href="index.php"><input type="button"  value="BACK" class="findButton"><a>
		</p>

	</form>
	<table>
		<th>Name school</th>
		<th>Action</th>
		<?php
			while ($row = $result2->fetch_assoc()) {
				# code...
				echo "<tr>";
					$id = $row['id'];
					echo "<td>".$row['nameSC']."</td>";
					echo "<td><a href='deleteschool.php?id=$id'>DELETE</a>-<a href='editSchool.php?id=$id'>EDIT</a></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>