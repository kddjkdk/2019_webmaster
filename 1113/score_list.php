<?
    $connect = mysql_connect("localhost","root","apmsetup"); // DB ����
    mysql_select_db("kdhong_db", $connect);                // DB ����
 
    if ($mode == "insert")                       	   // ������ �Է� ���
    {   
        $sum = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;           // �հ� ���ϱ�
        $avg = $sum/5;                           		// ��� ���ϱ�
 
        $sql = "insert into stud_score (name, sub1, sub2, sub3, sub4, sub5, sum, avg) values";
        $sql .= "('$name', $sub1, $sub2, $sub3, $sub4, $sub5, $sum, $avg)";
 
        $result = mysql_query($sql, $connect);
    }
?>
 
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" /> 
<h3>1) ���� �Է� �ϱ�</h3>

<form action="score_list.php?mode=insert" method='post'>
<table width="720" border="1" cellpadding="5">
    <tr><td> �̸� : <input type="text" size="6" name="name">&nbsp;
             ����1 : <input type="text" size="3" name="sub1">&nbsp;
             ����2 : <input type="text" size="3" name="sub2">&nbsp;
             ����3 : <input type="text" size="3" name="sub3">&nbsp;
             ����4 : <input type="text" size="3" name="sub4">&nbsp;
             ����5 : <input type="text" size="3" name="sub5">
	</td>
       <td align="center">
	    <input type="submit" value="�Է��ϱ�">	
       </td>
    </tr>
 </table>
 </form>
 
<p>
<h3>2) ���� ��� �ϱ�</h3>  
<p><a href ="score_list.php?mode=big_first">[������ ����]</a> 
   <a href ="score_list.php?mode=small_first">[�������� ����]</a></p>
<p>
 <!-- ���� ǥ�� ���� -->
 <table width="720" border="1" cellpadding="5">
 <tr align="center" bgcolor="#eeeeee">
 <td>��ȣ</td>
 <td>�̸�</td>
 <td>����1</td>
 <td>����2</td>
 <td>����3</td>
 <td>����4</td>
 <td>����5</td>
 <td>�հ�</td>
 <td>���</td>
 <td>&nbsp;</td>
 </tr>
 <!-- ���� ǥ�� �� -->
 
 <?
 // select �� ����
    if ($mode == "big_first")          // ������ ����(��������)
       $sql = "select * from stud_score order by sum desc";
    else if ($mode == "small_first")   // ������ ����(��������)
       $sql = "select * from stud_score order by sum";
    else 
       $sql = "select * from stud_score";
 
    $result = mysql_query($sql);
 
    $count = 1;                        // ȭ�� ��� �� �ϷĹ�ȣ
 
 // DB ������ ��� ����
    while ($row = mysql_fetch_array($result))
    {   
       $avg = round($row[avg], 1);
 
       $num = $row[num];

       echo "<tr align='center'>
                <td> $count     </td>
       		<td> $row[name] </td>
       		<td> $row[sub1] </td>
       		<td> $row[sub2] </td>
       		<td> $row[sub3] </td>
       		<td> $row[sub4] </td>
       		<td> $row[sub5] </td>
       		<td> $row[sum]  </td>
       		<td> $avg  </td>
       		<td> <a href='score_delete.php?num=$num'>[����]</a></td>
	      </tr>
             ";
     
       $count++;
     }
 // DB ������ ��� ��
 
     mysql_close();                   // DB ���� ����
 ?>
  
 </table>
