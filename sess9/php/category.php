<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>CATEGORY</title>
</head>
<body>
	<?php INCLUDE "connect.php"; ?>
	<?php 
		$sqlSelectCATE = "SELECT * FROM category";
		$result = mysqli_query($connect, $sqlSelectCATE);
	?>
	<h1>CATEGORY</h1>
	<table class="table">
		<th>ID_Category</th>
		<th>NAME</th>
		<th>ACTION</th>
		<?php
			while ($row = $result->fetch_assoc()) {
			$idCate = $row['idCATEGORY'];
			echo "<tr>";
				echo "<td class='column' id='id'>".$idCate."</td>";
				echo "<td class='column' id='tt'>".$row['TenDM']."</td>";	
				echo "<td class='column'><a href='newCategory.php?Category=".$idCate."'>NEW</a><br><a href='delectCategory.php?ID_Category=".$idCate."'>DELETE</a><a href='editCategory.php?ID_Category=".$idCate."'><br>EDIT</a></td>";
				
			echo "</tr>";
			}
		?>
	</table>
			<?php echo "<div class='bao'><a href='add_category.php'><input type='button' name='add' class='add' value='ADD CATEGORY'></a></div>"; ?>
			
</body>
</html>