<?php 
	echo '<h1 style="color:red"> hello world</h1>';
?>
<h2 style="color:blue" >Thông Tin -  Bài 4</h2>
<?php 
	$userName = 'php03';
	echo $userName;
	echo "<br>";
	$adress = 'Quang Binh';
	echo $adress;
	echo "<br>";
	$phone = "0349818101";
	echo $phone;
	echo "<br>";
?>
<!-- <?php 
	$i = '';
	echo 'moi nhap tháng: ';
	echo "<br>";
	for ($i=1; $i<=12 ; $i++) { 
		if ($i <= 12) {
			switch ($i) {
			case '1':
			case '3':
			case '5':
			case '7':
			case '8':
			case '10':
			case '12':
				echo " thang  $i co 31 ngay";
				echo "<br>";
				break;
			case '4':	
			case '6':	
			case '9':
			case '11':
				echo "thang $i co 30 ngay";
				echo "<br>";
				break;
			case '2':
				echo "thang $i co 28 hoac 29 ngay";
				echo "<br>";
				break;
			default:
				echo "khong phai thang trong nam";
				break;
			}
		}		
	}
?> -->
<h2 style=" color:pink " >Ngày Tháng - bài 5</h2>
<?php 
	$i = 5;
	echo " moi nhap thang: " ;
	echo $i;
	echo "<br>";
	if ($i <= 12) {
		echo " $i la thang trong nam ";
		if ($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 8 || $i == 10 || $i == 12) {
			echo " va thang $i co 31 ngay";
		} else if ($i == 2) {
			echo " <br> ";
			echo " va thang $i co 28 hoac 29 ngay ";
		} else {
			echo " va thang $i co 30 ngay ";
		}
	}
	else {
		echo " $i khong phai la thang trong nam ";
	}
?>
