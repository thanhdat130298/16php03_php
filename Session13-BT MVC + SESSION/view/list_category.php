<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>List product</title>
</head>
<body>
	<table>
		<?php
		echo "<tr>";
			echo "<th>No.</th>";
			echo "<th>Category</th>";
			if(isset($_SESSION['login']))
				echo "<th>Action</th>";
		echo "</tr>";
			while($row = $list_category->fetch_assoc()) {
				$id = $row['idCATEGORY'];
				echo "<tr>";
					echo "<td>".$id."</td>";
					echo "<td>".$row['TenDM']."</td>";
					if(isset($_SESSION['login']))
						echo "<td><a href='index.php?action=delete_cate&id=".$id."'>DELETE</a>|<a href = 'index.php?action=edit_cate&id=".$id."'>EDIT</a></td>";
				echo "</tr>";
			}
		?>

	</table>
	<?php if(isset($_SESSION['login'])) {?>
		<a href="index.php?action=add_cate">ADD CATEGORY</a>
	<?php }?>
</body>
</html>