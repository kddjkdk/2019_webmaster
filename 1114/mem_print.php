<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?
   echo "아이디   : $id<br>";
   echo "이름     : $name<br>";
   echo "비밀번호 : $passwd<br>";
   echo "성별     : $gender<br>";
   echo "제목(hidden 타입에서 전달) : $title<br>";
   
    $connect = mysql_connect("localhost","root","apmsetup"); // DB 연결
    mysql_select_db("kdhong_db", $connect);                // DB 선택
 
                   
    $sql = "insert into mem (id, name, passwd, gender) values";
    $sql .= "('$id', '$name', $passwd, '$gender')";
 
    $result = mysql_query($sql, $connect);
    
?>
