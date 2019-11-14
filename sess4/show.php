<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<style type="text/css">
	table {
		width: 100%;
		border: 1px solid black;
	}
	tr, td, th {
		
		border: 1px solid black;}
</style>
<body>
	<?php include "connect.php";?>
	
	<?php 
		$errFind = '';
		$sqlSelect = "SELECT * FROM news";
		$result = mysqli_query($connect, $sqlSelect);
		$sqlFind = "SELECT * FROM news WHERE TITLE = %TITLE%";
		$finded = mysql_query($connect, $sqlFind);
	?>

	<label>Find: </label>
	<input type="text" name="find">
	<input type="button" name="butFind" value="FIND">
	<span><?php echo $errFind; ?></span>
	<table>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Decription</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		<?php 
			while ($row = $result->fetch_assoc()) {
				# code...
				$id = $row['ID'];
				echo "<tr>";
				echo "<td>".$id."</td>";
				echo "<td>".$row['TITLE']."</td>";
				echo "<td>".$row['DECRIPTION']."</td>";
				echo "<td><img  src='uploads/".$row['Image']."'></td>";
				echo "<td><a href='delete.php?ID=".$id."'>Delete</a></td>";

			}

		?>
	</table>
</body>
</html>