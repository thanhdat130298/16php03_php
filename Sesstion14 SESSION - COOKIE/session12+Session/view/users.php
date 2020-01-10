<table>
	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Password</th>
	</tr>
	
	<?php 
		while ($row = $listUser->fetch_assoc()) {
			$id = $row['id'];
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td><a href='index.php?action=delete_news&id=".$id."''>Delete</a> | <a href='index.php?action=edit_news&id=".$id."''>Edit</a></td>";
			echo "</tr>";
		}
	?>
</table>