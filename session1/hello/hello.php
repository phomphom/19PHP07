<?php 
	echo '<h1 style="color:red"> hello world</h1>';
?>
<h2>thong tin</h2>
<?php 
	$userName = 'php03';
	echo $userName;
	echo "<br>";
	$adress = 'Da Nang';
	echo $adress;
	echo "<br>";
	$phone = "0349818101";
	echo $phone;
	echo "<br>";
?>
<?php 
	$i = '';
	echo 'moi nhap i : ' + $i;
	echo "<br>";
	for ($i=1; $i<=12 ; $i++) { 
		if ($i <= 12) {
			switch ($i) {
			case '1':
			case '3':
			case '5':
			case '7':
			case '8':
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
			
				break;
			}
		}		
	}
?>

