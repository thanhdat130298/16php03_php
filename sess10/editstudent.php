

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
		$sqlGetStudent = "SELECT * from student where id=$id";
		$get = mysqli_query($connect,$sqlGetStudent);
		$hihi = $get->fetch_assoc();
		if (isset($_POST['done'])){
			$name = $_POST['name'];
			$sex = $_POST['sex'];			

			$idSC = $_POST['id_SC'];
			$sqlinsert = "UPDATE student SET idSc='$idSC', name='$name' ,sex='$sex'";			//var_dump($sqlinsert);exit();

			if (mysqli_query($connect,$sqlinsert)===TRUE) {
				header('Location: index.php');
				# code...
			}
		}
	?>
	<form method="POST">
		<p>
			<label>NAME: </label>
			<input type="text" name="name" value="<?php echo $hihi['name']; ?>"><br>
			<label>GENDER:</label>
			<label>MALE</label>
			<input type="radio" value="male" name="sex" <?php if ($hihi['sex'] == 'male') echo 'checked'; ?>>
			<label>FEMALE</label>
			<input type="radio" value="female" name="sex" <?php if ($hihi['sex'] == 'female') echo 'checked'; ?>><br>
			<?php 
				
					echo "<select name='id_SC'>";
					while ($row = $result->fetch_assoc()) {
						echo "<option value='".$row['id']."' echo ($idSC == ".$row['id'].")?'selected':"">".$row['nameSC']."</option>";}
					echo "</select>";
					# code...
				
			?>
			<input type="submit" name="done">
		</p>
	</form>
</body>
</html>