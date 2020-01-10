<form method="POST" action="index.php?action=add_cate">
	<p>
		Name category: <input type="text" name="name">
	</p>
	<p>
		<input type="submit" name="submit">
		<?php echo $errCate;?>
	</p>