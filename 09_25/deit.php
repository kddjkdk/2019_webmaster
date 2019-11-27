
<?
#chorn -R apache:apache /var/www/html/
	#chmod 711 -R/var/www/html
	//다이어트가 필요한지 판정: 몸무게 > (키 - 100)*0.9 => 다이어트 필요

	$h = $_POST["h"];
	$w = $_POST["w"];
	$a = ($h-100)*0.9;

	echo "키: $h <br>";
	echo "몸무게 : $w <br>";

if($w > $a)
	echo "다이어트 필요!";
else
	echo "다이어트 필요 안함.";
?>