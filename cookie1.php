<?
	$a = setcookie("userid", "kdhong");
	$b = setcookie("username", "È«±æµ¿", time()+60);
	
	if($a and $b){
		echo "ÄíÅ° 'userid'¿Í 'username' »ý¼º¿Ï·á<br>";
		echo "ÄíÅ° 'username'Àº 60ÃÊ(1ºÐ)°£ Áö¼ÓµÊ!";
	}
?>
