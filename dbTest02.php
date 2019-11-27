<?
$conn = mysql_connect("localhost", "root", "apmsetup");		// enter to Mysql sever
$db_id = mysql_select_db("board", $conn);						// select db
$sql = "select * from tail";		// query to search
$sql_result = mysql_query($sql, $conn);	//질의수행		
$count = mysql_num_rows($sql_result);		// result = number of record 

for($i = 0; $i<$count; $i++){
  $username = mysql_result($sql_result, $i, username);// record print
  $content = mysql_result($sql_result, $i, content);
  echo $username."    ".$content."<br>";
}
/*
$sql_result = mysql_query($sql, $conn);	// query start
$count = mysql_num_rows($sql_result);	

for($i=0; $i < $count; $i++){
  $result_array = mysql_fetch_array($sql_result);
  echo $result_array[username]." ".$result_array[content]."<br>";
}*/
?>
