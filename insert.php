<meta http-equiv="Content-Type" content="text/html; charset= euc-kr"/>

<?
	$conn = mysql_connect("localhost", "root", "apmsetup");
	mysql_select_db("kdhong_db", $conn);
	
	
	$sql2="select * from biz_card";
	$res2 = mysql_query($sql2, $conn);
	
	$count = mysql_num_rows($res2);
	
	$sql="insert into biz_card(num, name, company, tel, hp, addr)";
	$sql .="values(".$count.", '������', '�̷�����','031-276-1829,',";
	$sql .="'010-8888-8818', '��⵵ ���� ������ �����')";
	
	$res = mysql_query($sql);
	
	
	
	if($res)
		echo "���ڵ� ���� �Ϸ�!";
	else
		echo "���ڵ� ���� ����. ���� Ȯ��";
		
	mysql_close($conn);

?>
