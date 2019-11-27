<?

echo "당신의 이름은 $NAME, 암호는 $PASS <p>";
echo "당신이 좋아하는 음식은 $FOOD1 $FOOD2 $FOOD3 입니다.<p>";
echo "당신의 좋아하는 애완동물은 $PET <p>";
echo "당신의 직업은 $JOB <p>";

$opinion = str_replace("연수 소견 : ",'', $INTEXT);

echo "당신이 입력한 의견은 $opinion <p>";

$host = 'giantstar115.dothome.co.kr';
$user = 'giantstar115';
$pw = '';
$dbName ="ex01";
$mysqli = new mysqli($host, $user, $pw, $dbName);

if($mysqli){
	echo "
}

?>
