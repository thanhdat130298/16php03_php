<!DOCTYPE html>
<html>
<head>
	<title>List product</title>
</head>
<body>
	<table>
		<?php 
		echo "<tr>";
			echo "<th>No.</th>";
			echo "<th>Name</th>";
			echo "<th>Decription</th>";
			echo "<th>Category</th>";
			echo "<th>Image</th>";
			if(isset($_SESSION['login']))
			echo "<th>Action</th>";
		echo "</tr>";
		
		
			while($row = $list_category->fetch_assoc()) {
				$id = $row['id'];
				echo "<tr>";
					echo "<td>".$id."</td>";
					echo "<td>".$row['title']."</td>";
					echo "<td>".$row['decription']."</td>";
					echo "<td>".$row['TenDM']."</td>";
					echo "<td><img src='./uploads/".$row['IMG']."'></td>";
					if (isset($_SESSION['login'])) {
					echo "<td><a href='index.php?action=delete_pro&id=".$id."'>DELETE</a>|<a href = 'index.php?action=edit_pro&id=".$id."'>EDIT</a></td>";
					}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>