<?
session_start();
$Connect = mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("board", $Connect);
mysql_query("insert into tail (username, content, wdate, wtime, id)
									values('$username', '$conten
									t', now(), curtime(), '$id')");
mysql_close($Connect);
echo"<html><body><script>alert('��ϵǾ����ϴ�.');
document.location.herf='dbTest02.php';
</script>
</body></html>";
?>
