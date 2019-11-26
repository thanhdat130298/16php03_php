<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="..\css\style.css">
</head>
<body>
	<h1><a> LIST PRODUCT <a></h1>
	<?php include "connect.php";?>
	
	<?php 
		$sqlSelect = "SELECT * FROM news";
		$result = mysqli_query($connect, $sqlSelect);
	 	$find = $errFind = "";
		if (isset($_GET['butFind'])) {
		    $find = addslashes($_GET['find']);
		    
		    if (empty($find)) {
		        $errFind = "";
		    } else if($find) {
		    	$sqlFind = "SELECT * FROM news WHERE TITLE LIKE '%$find%'";
		    	$result = mysqli_query($connect, $sqlFind);
	    	}
		}
	?>
	<form action="#" method="get" id="find">
		<input type="text" name="find" class="findInput" placeholder="Find Your News">
		<input type="submit" name="butFind" class="findButton" value="FIND">
		<span><?php echo $errFind?></span>
	</form>
	<div id="back">
		<a href="..\index.php"><button class="butBack">Add Product</button></a>
	</div><br>
	<table>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Decription</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		<?php 
			while ($row = $result->fetch_assoc()) {
			// 	# code...
				$id = $row['ID'];
				echo "<tr>";
				echo "<td class='column'>".$id."</td>";
				echo "<td class='column'>".$row['TITLE']."</td>";
				echo "<td class='column'>".$row['DECRIPTION']."</td>";
				echo "<td class='column'><img class='img' src='../uploads/".$row['Image']."'></td>";
				echo "<td class='column'><a href='delete.php?ID=".$id."'>DELETE</a> <a href='edit.php?ID=".$id."'><br>EDIT</a></td>";
			}
		?>
	</table>
</body>
</html>