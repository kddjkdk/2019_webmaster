<?
$connect = mysql_connect("localhost","root","apmsetup");
mysql_select_db("class", $connect);
$result=mysql_query("select * from insa", $connect);
$name=mysql_result($result, 0, "name");
$age = mysql_result($result, 0, "age");
echo"�̸�: $name ����: $age";
mysql_close($connect);
?>
