<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?
   echo "���̵�   : $id<br>";
   echo "�̸�     : $name<br>";
   echo "��й�ȣ : $passwd<br>";
   echo "����     : $gender<br>";
   echo "����(hidden Ÿ�Կ��� ����) : $title<br>";
   
    $connect = mysql_connect("localhost","root","apmsetup"); // DB ����
    mysql_select_db("kdhong_db", $connect);                // DB ����
 
                   
    $sql = "insert into mem (id, name, passwd, gender) values";
    $sql .= "('$id', '$name', $passwd, '$gender')";
 
    $result = mysql_query($sql, $connect);
    
?>
