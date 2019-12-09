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
	 	$find = $errFind = $errFind2 = $find2 = "";
	 	//nếu bấm nút tìm title / decription
		if (isset($_GET['butFind'])) {
		    $find = addslashes($_GET['find']);
		    
		    if (empty($find)) {
		        $errFind = "<span class='ketqua'>Không có kết quả!</span>";
		    } 
		    else if($find) {
		    	$sqlFind = "SELECT * FROM news WHERE TITLE LIKE '%$find%' OR DECRIPTION LIKE '%$find%'";
		    	$result = mysqli_query($connect, $sqlFind);
				$count = $result->num_rows;
				$errFind = "<p><br><br>Có " . $count . " kết quả tìm title hoặc decription: <span class= 'ketqua'>" . $find. "</span></p>";
	    	}
		}
		else 
			$from = $to = '';
			if (isset($_GET['butFind2'])) {
		    $from = addslashes($_GET['from']);
		    $to = addslashes($_GET['to']);
		    if (empty($from) || empty($to) ) {
		        $errFind = "Chọn ngày đi cha!";
		    } 
		    else if(is_string($from) || is_string($to)){
		    	$errFind = "Hãy nhập Năm tháng ngày!";
		    }
		    else {
		    	$sqlFind2 = "SELECT * FROM news WHERE dayUp >= '$from' AND dayUp <= '$to'";
		    	$result = mysqli_query($connect, $sqlFind2);
				$count = $result->num_rows;
				$errFind =  "<p><br><br>Có " . $count . " kết quả tìm kiếm từ ngày <span class='ketqua'>".$from."</span> đến ngày <span class='ketqua'>".$to."</span></p>";
	   		}
		}

	?>
	<form action="#" method="get" id="find">
		<input type="text" name="find" class="findInput" placeholder="Find TITLE or DECRIPTION">
		<input type="submit" name="butFind" class="findButton" value="FIND">
		<br>
		<br>
		<input type="text" name="from" class="findInput" placeholder="FROM...">
		<input type="text" name="to" class="findInput2" placeholder="...TO">
		<input type="submit" name="butFind2" class="findButton" value="FIND">
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
			<th>Day up</th>
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
				echo "<td class='column'>".$row['dayUp']."</td>";
				echo "<td class='column'><img class='img' src='../uploads/".$row['Image']."'></td>";
				echo "<td class='column'><a href='delete.php?ID=".$id."'>DELETE</a> <a href='edit.php?ID=".$id."'><br>EDIT</a></td>";
			}
		?>
	</table>
</body>
</html>