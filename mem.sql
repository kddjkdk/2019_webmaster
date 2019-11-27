create table mem(
num int not null,
id char(15) not null,
name char(10) not null,
gender char(1),
post_num char(8),
address char(80),
tel char(20),
age int, 
primary key(num)
);

insert into mem values
(1, 'yjhwang', '황영주', 'M', '100-011', '서울시 중구 충무로 1가', '234-8879', 35),
(2, 'khshul', '설기형', 'M', '607-010', '부산시 동래구 명륜동', '764-3784', 33),
(3, 'chpark', '박철호', 'M', '503-200', '광주시 남구 지석동', '298-9730', 34),
(4, 'jwkim', '김지우', 'M', '100-101', '서울시 중구 동구로 2가', '243-9959', 36),
(5, 'shbbark', '빡스호', 'M', '300-141', '포항시 포동구 강로 5가', '553-1234', 24),
(6, 'ybbbark', '빡빡이', 'W', '675-325', '울산시 무슨동 무슨로 0가', '753-4587', 44),
(7, 'chul', '금부장', 'W', '457-321', '강원시 무슨동 강원랜드로', '456-9856', 54);