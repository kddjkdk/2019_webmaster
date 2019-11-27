
<?
	$kor=85;	// 국어
	$eng=90;	// 영어
	$math=98;	// 수학
	$soc=80;	// 사회	
	$sci=90;	// 과학

	$sum = $kor + $eng + $math + $soc + $sci; //다섯과목 점수 합계

	$avg = $sum/5;

	echo "국어 : $kor, 영어: $eng, 수학: $math, 사회: $soc, 과학: $sci <br>";
	echo "합계 : $sum, 평균 : $avg";

?>