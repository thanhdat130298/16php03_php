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
			<th>Name</th>
			<th>Decription</th>
			<th>Action</th>
		</tr>
		
		<?php 
			while($row = $list_product->fetch_assoc()) {
				$id = $row['id'];
				echo "<tr>";
					echo "<td>".$id."</td>";
					echo "<td>".$row['title']."</td>";
					echo "<td>".$row['decription']."</td>";
					echo "<td><a href='index.php?action=delete_pro&id=".$id."'>DELETE</a>|<a href = 'index.php?action=edit_pro&id=".$id."'>EDIT</a></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>