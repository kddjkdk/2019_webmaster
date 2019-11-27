<meta http-equiv = "Copntent-Type" content"text/html; charset = euc-kr"/>
<?
	$conn = mysql_connect("localhost", "root", "apmsetup");
	$dbconn = mysql_select_db("kdhong_db", $conn);

	$sql = "create table mem(";
	$sql .="id varchar(12),";
	$sql .="name varchar(12),";
	$sql .="passwd int,";
	$sql .="gender char(4) );";


	$res = mysql_query($sql, $conn);

	if($res)
		echo"db table 'mem' create complete";
	else
		echo "db table create error";
?>
