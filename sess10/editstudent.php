

<!DOCTYPE html>
<html>
<head>
	<title>add student</title>
</head>
<body>
	<?php include "connect.php"; ?> 
	<?php
		$sqlGetSchool = "SELECT * FROM school";
		$result = mysqli_query($connect, $sqlGetSchool);
		$id = $_GET['ID'];
		if (isset($_POST['done'])){
			$name = $_POST['name'];
			$sex = $_POST['sex'];
			$idSC = $_POST['id_SC'];
			$sqlinsert = "UPDATE student idSc='$idSC', name='$name' ,sex='$sex')";
			if (mysqli_query($connect,$sqlinsert)===TRUE) {
				header('Location: index.php');
				# code...
			}
		}
	?>
	<form method="POST">
		<p>
			<label>NAME: </label>
			<input type="text" name="name"><br>
			<label>GENDER:</label>
			<label>MALE</label>
			<input type="radio" value="male" name="sex">
			<label>FEMALE</label>
			<input type="radio" value="female" name="sex"><br>
			<?php 
				
					echo "<select name='id_SC'>";
					while ($row = $result->fetch_assoc()) {
						echo "<option value='".$row['id']."'>".$row['nameSC']."</option>";}
					echo "</select>";
					# code...
				
			?>
			<input type="submit" name="done">
		</p>
	</form>
</body>
</html>