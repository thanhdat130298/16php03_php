<table>
	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Password</th>
		<th>Action	</th>
	</tr>
	
	<?php 
		while ($row = $listUsers->fetch_assoc()) {
			$id = $row['id'];
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td><a href='index.php?action=delete_users&id=".$id."''>Delete</a> | <a href='index.php?action=edit_users&id=".$id."''>Edit</a></td>";
			echo "</tr>";
		}
	?>
</table>