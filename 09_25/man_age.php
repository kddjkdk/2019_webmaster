<?
// 현재 날짜 받기
	$now_year = $_POST["year"];
	$now_month = $_POST["month"];
	$now_day = $_POST["day"];

	$birth_year = $_POST["birth_year"];
	$birth_month = $_POST["birth_month"];
	$birth_day = $_POST["birth_day"];

	if($$birth_month < $now_month)			//생일(월) 지남
		$age = $now_year - $birth_year;
	else if($birth_month == $now_month)		// 생일(월) 같음
	{
		if($birth_day <= $now_day)			//생일(일) 안지남 or 같음
			$age = $now_year - $birth_year;
		else 								//생일(일) 지남
			$age = $now_year - $birth_year-1;
	}
	else 									//생일(월) 안지남
		$age = $now_year - $birth_year -1;

	echo "오늘 날짜: $now_year 년 $now_month 월 $now_day 일<br>";
	echo "생년월일 : $birth_year 년 $birth_month 월 $birth_day 일<br>";
	echo "만 나이: $age 세<br>";

?>