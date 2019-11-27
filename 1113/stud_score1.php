<meta http-equiv = "Copntent-Type" content"text/html; charset = euc-kr"/>
<?
	$conn = mysql_connect("localhost", "root", "apmsetup");
	$dbconn = mysql_select_db("kdhong_db", $conn);

	$sql = "create table stud_score1(";
	$sql .="id varchar(12)";
	$sql .="name varchar(12)";
	$sql .="pass int";
	$sql .="gender char(4)";
	$sql .="primary key(id) );";

	$res = mysql_query($sql, $conn);

	if($res)
		echo"db table 'stud_score1' create complete";
	else
		echo "db table create error";
?>
