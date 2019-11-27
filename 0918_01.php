<HTML>
<HEAD>

</HEAD>
<BODY>
<h1>다음 설문지를 작성해 주십시요.</h1>
<form method = post action = formTag/output.php>
이름 : <INPUT TYPE=TEXT NAME=NAME><p>
암호 : <INPUT TYPE=PASSWORD NAME=PASS SIZE = 20><P>

어떤 음식을 좋아하십니까?(Checkbox)<p>
<INPUT TYPE = CHECKBOX NAME = FOOD1 VALUE ="양식">양식
<INPUT TYPE = CHECKBOX NAME = FOOD2 VALUE ="중식">중식
<INPUT TYPE = CHECKBOX NAME = FOOD3 VALUE ="한식">한식<P>

좋아하는 애완 동물을 선택하세요(RADIO)<p>
<INPUT TYPE = RADIO NAME = PET VALUE="고양이">고양이
<INPUT TYPE = RADIO NAME = PET VALUE="강아지">강아지
<INPUT TYPE = RADIO NAME = PET VALUE="새">새<P>

당신의 직업은 무엇입니까?(SELECT)<P>
<SELECT NAME = "JOB" SIZE=4 >
	<OPTION VALUE ="보험설계사">보험설계사</OPTION>
	<OPTION VALUE ="대학생">대학생</OPTION>
	<OPTION VALUE ="의상디자이너">의상디자이너</OPTION>
	<OPTION VALUE ="간호사">간호사</OPTION>
</SELECT><P>

현재까지의 연수 내용에 관한 의견을 간략하게 적어주세요.(Textarea) <P>
<TEXTAREA ROWS=8 COLS=50 NAME=INTEXT MAXLENGTH=30 >연수 소견 : </TEXTAREA><P>

<INPUT TYPE="SUBMIT" VALUE="보내기"> <INPUT TYPE="RESET" VALUE="다시쓰기">
</form>
</BODY>
</HTML>
