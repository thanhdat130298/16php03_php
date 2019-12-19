<!DOCTYPE html>
<html>
<head>
	<title>List product</title>
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
<?php 
	include 'connect.php';
	// get category
		$sqlCate = "SELECT * FROM product_categories";
		$categories = mysqli_query($connect, $sqlCate);
		// end get category
	$sqlSelect = "SELECT products.id, products.title, products.image, products.description, product_categories.name
			 FROM products
			INNER JOIN product_categories ON products.product_category_id = product_categories.id";
	// Thuc hien chuc nang tim kiem
	$keyword = '';
	if (isset($_POST['search'])) {
		$keyword = $_POST['keyword'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		// search keyword
		if ($keyword != '') {
			$product_category_id = $_POST['product_category_id'];
			$sqlSelect = "SELECT products.id, products.title, products.image, products.description, product_categories.name
			 FROM products
			INNER JOIN product_categories ON products.product_category_id = product_categories.id WHERE (title LIKE '%$keyword%' OR description LIKE '%$keyword%') AND product_category_id = $product_category_id";
		}
	}
	$result = mysqli_query($connect, $sqlSelect);
?>
	<h1>List product</h1>
	<form action="#" method="POST" name="search-product">
		<p>
			Keywords
			<input type="text" name="keyword" value="<?php echo $keyword;?>">
		</p>
		<p>
			Category
			<select name="product_category_id">
				<?php 
						while ($row = $categories->fetch_assoc()) {
							echo "<option value='".$row['id']."'>".$row['name']."</option>";
						}
				?>
			</select>
		</p>
		<p>
			Start date
			<input type="date" name="start">
		</p>
		<p>
			End date
			<input type="date" name="end">
		</p>
		<p>
			<input type="submit" name="search">
		</p>
	</form>
	<table>
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Category</th>
			<th>Description</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		<?php 
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				// var_dump($row);
				// exit();
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['title']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['description']."</td>";
				echo "<td><img src='uploads/".$row['image']."'></td>";
				echo "<td><a href='delete.php?id=".$id."''>Delete</a> | <a href='edit.php?id=".$id."''>Edit</a></td>";
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>