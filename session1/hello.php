
<?php
	echo "<h1>Hello</h1>";
	$name = 'Nguyen Thanh Dat';
	$address ='Quang Nam';
	$phoneNum ='12345679';
	echo $name; echo '<br>';
	echo $address; echo '<br>';
	echo $phoneNum; echo '<br>';
	echo "\n";
	$month=$_POST["month"];
	if (($month<1)||($month>12)) {
		echo $month; echo " Khong phai la thang trong nam!";
	}
	else {
		echo $month; echo " La thang trong nam.";
		switch ($month) {
			case 1:
				echo " Thang 1 co 31 ngay";
				break;
			case 2:
				echo " Tháng 2 co 28 hoac 29 ngay";
				break;
			case 3:
				echo " Thang 3 co 31 ngay";
				break;
			case 4:
				echo " Thang 4 co 30 ngay";
				break;
			case 5:
				echo " Thang 5 co 31 ngay";
				break;
			case 6:
				echo " Thang 6 co 30 ngay";
				break;
			case 7:
				echo " Thang 7 co 31 ngay";
				break;
			case 8:
				echo " Thang 8 co 31 ngay";
				break;
			case 9:
				echo " Thang 9 co 30 ngay";
				break;
			case 10:
				echo " Thang 10 co 31 ngay";
				break;
			case 11:
				echo " Thang 11 co 30 ngay";
				break;
			case 12:
				echo " Thang 12 co 31 ngay";
				break;
			
			default:
				# code...
				echo "nonono";
				break;
		}
	}
?>
