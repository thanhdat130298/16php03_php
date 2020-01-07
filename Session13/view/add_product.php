<?php

?>
<form method="POST" action="index.php?action=add_product">
	<p>
		Name: <input type="text" name="name">
	</p>
	<p>
		Decription: <input type="text" name="decription"> 
	</p>
	<p>
		Image: <input type="file" name="image">
	</p>
	<p>Category:
		<?php
			echo "<select name = 'idCATEGORY'>";
			while ($row = $getCategory->fetch_assoc()) {
						echo "<option value='".$row['idCATEGORY']."'>".$row['TenDM']."</option>";}
			echo "</select>";
					# code...
		?>
	</p>
	<p>
		<input type="submit" name="submit">
	</p>
</form>