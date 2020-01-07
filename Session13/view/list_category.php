<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>List product</title>
</head>
<body>
	<table>
		<tr>
			<th>No.</th>
			<th>Category</th>
			<th>Action</th>
	
		</tr>
		
		<?php 
			while($row = $list_category->fetch_assoc()) {
				$id = $row['idCATEGORY'];
				echo "<tr>";
					echo "<td>".$id."</td>";
					echo "<td>".$row['TenDM']."</td>";
					echo "<td><a href='index.php?action=delete_cate&id=".$id."'>DELETE</a>|<a href = 'index.php?action=edit_cate&id=".$id."'>EDIT</a></td>";
				echo "</tr>";
			}
		?>

	</table>
	<a href="index.php?action=add_cate">ADD CATEGORY</a>
</body>
</html>