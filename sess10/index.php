<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Student Of School</title>
</head>
<body>
	<?php include "connect.php"; ?>
	<?php
		$sqlShow = "SELECT name, idSC, student.id, sex, nameSC FROM student INNER JOIN school ON student.idSC  = school.id";
		
		$sqlGetSchool = "SELECT * FROM school";
		$result = mysqli_query($connect, $sqlGetSchool);
		
		$errFind = '';
		$find ='';
		if (isset($_POST['findButton'])) {
			# code...
			$idSC = $_POST['id_SC'];
			$find = $_POST['find'];
			if(empty($find) and ($idSC!='ok')){
				$sqlShow = "SELECT name, idSC, student.id, sex, nameSC FROM student INNER JOIN school ON student.idSC  = school.id WHERE idSC = $idSC";	

			}
			else if(empty($find) AND ($idSC='ok')){
				$sqlShow = "SELECT name, idSC, student.id, sex, nameSC FROM student INNER JOIN school ON student.idSC  = school.id";
			}
			else if (isset($find) and ($idSC='ok')){
				$sqlShow = "SELECT name, idSC, student.id, sex, nameSC FROM student INNER JOIN school ON student.idSC  = school.id WHERE name LIKE '%$find%'";		
			}
			
		}
		$sqlResult = mysqli_query($connect, $sqlShow);
		 $count = $sqlResult->num_rows; 


	?>



	<a href="addSV.php"><input type="button" class="findButton" value="ADD Student"></a>
	<a href="addSchool.php"><input type="button" class="findButton" value="ADD School"></a>
	<form method="POST">	
		<input type="text" name="find" value="<?php echo "$find";?>">
		<?php 	
			echo "<select name='id_SC' >";

				echo "<option value='ok'>--Tất cả--</option>";
			while ($row = $result->fetch_assoc()) {
				echo "<option value='".$row['id']."'>".$row['nameSC']."</option>";

				
			}
			echo "</select><br>";
			# code...
				
		?>
		<input type="submit" name="findButton" class="findButton" value="FIND"><br>
		<span><?php echo "$count Kết quả";?></span>
	</form>
	
	<table>
		<th>Student Name</th>
		<th>Gender</th>
		<th>School Name</th>
		<th>Action</th>
		<tr>
			<?php
				while($row = $sqlResult->fetch_assoc()){
					echo "<tr>";
						$id = $row['id'];
						echo "<td class='column'>".$row['name']."</td>";
						echo "<td class='column'>".$row['sex']."</td>";
						echo "<td class='column'>".$row['nameSC']."</td>";
						echo "<td class='column'><a href='deletestudent.php?ID=".$id."'>DELETE</a> <a href='editstudent.php?ID=".$id."'><br>EDIT</a></td>";
					echo "</tr>";
				}
			?>
		</tr>
	</table>
</body>
</html>