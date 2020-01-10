<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>ADD NEWS</title>
</head>
<body>
	<table>
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		
		<?php 
			while ($row = $newsData->fetch_assoc()) {
				$id = $row['id'];
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['title']."</td>";
				echo "<td>".$row['description']."</td>";
				echo "<td><a href='index.php?action=delete_news&id=".$id."''>Delete</a> | <a href='index.php?action=edit_news&id=".$id."''>Edit</a></td>";
				echo "</tr>";
			}
		?>
	</table>
	<a class="but" href="index.php?action=add_news">Add news</a>
</body>
</html>
