<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<h1><a> LIST NEWS <a></h1>
	<?php include "php/connect.php";?>
	
	<?php 
		$sqlSelect = "SELECT * FROM products";
		$result = mysqli_query($connect, $sqlSelect);
	 	$find = $errFind = $errFind2 = $find2 = "";
	 	//nếu bấm nút tìm title / decription
		if (isset($_GET['butFind'])) {
		    $find = addslashes($_GET['find']);
		    
		    if (empty($find)) {
		        $errFind = "<span class='ketqua'>Không có kết quả!</span>";
		    } 
		    else if($find) {
		    	$sqlFind = "SELECT * FROM products WHERE TITLE LIKE '%$find%' OR DECRIPTION LIKE '%$find%'";
		    	$result = mysqli_query($connect, $sqlFind);
				$count = $result->num_rows;
				$errFind = "<p>Có " . $count . " kết quả tìm : <span class= 'ketqua'>" . $find. "</span></p>";
			 	
			 	
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
		  
		}

	?>
	<form action="#" method="get" id="find">
		<input type="text" name="find" class="findInput" >
		<input type="submit" name="butFind" class="findButton" value="FưưD">
		
		<span><?php echo $errFind?></span>
	</form>
	<div id="back">
		<a href="php\category.php"><button class="butBack">CATEGORY</button></a>
	</div>
	<?php
		if (isset($_GET['butFind']) and isset($find)) {
			$sqlFind2 = "SELECT * FROM products INNER JOIN category ON products.idCATEGORY = category.idCATEGORY ";
			$sqlResult2 = mysqli_query($connect, $sqlFind2);
			$count2=$sqlResult2->num_rows;
			}
		while ($row = $sqlResult2->fetch_assoc()) {
				echo "<div class='list'>";		
					echo $row['TenDM'].$count2;	
				echo "</div>";
		}

		
	?>
	<?php
		echo "<div class='container'>";
			while ($row = $result->fetch_assoc()) {
				// 	# code...
				//$id = $row['ID'];
				echo "<div id='tin'>";
					echo "<img src='uploads/".$row['IMG']."' class='imgTin'>";
					echo "<div class='contentTin'>";
						echo "<div class='titleTin'><h3>".$row['TITLE']."</h3></div>";
						echo "<div class='decTin'>".$row['DECRIPTION']."</div>";
					echo "</div>";
				echo "</div>";
			}
		echo "</div>";
	?>




<!-- 	<table>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Decription</th>
			<th>Content</th>
			<th>Day up</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		<?php 
			//while ($row = $result->fetch_assoc()) {
			// 	# code...
			//	$id = $row['ID'];
			//	echo "<tr>";
			//	echo "<td class='column' id='id'>".$id."</td>";
			//	echo "<td class='column' id='tt'>".$row['TITLE']."</td>";
			//	echo "<td class='column' id='decr'>".$row['DECRIPTION']."</td>";
			//	echo "<td class='column' id='cc'>".$row['CONTENT']."</td>";
			//	echo "<td class='column'>".$row['DAYUP']."</td>";
			//	echo "<td class='column'><img class='img' src='uploads/".$row['IMG']."'></td>";
			//	echo "<td class='column'><a href='php/delete.php?ID=".$id."'>DELETE</a> <a href='php/edit.php?ID=".$id."'><br>EDIT</a></td>";
			//	echo "</tr>";
		//	}
		?>
	</table>
 --></body>
</html>