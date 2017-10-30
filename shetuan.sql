create table code(
	id int auto_increment,
	code varchar(6),
	primary key(id)
)default charset=utf8;

create table user(
	id int auto_increment,
	password varchar(32),
	name varchar(32),
	phone varchar(20),

	primary key(id)
)default charset=utf8;

create table type(
	id int auto_increment,
	pid int,
	name varchar(64),
	manageid int,
	managename varchar(64),
	phone varchar(20),
	weixin varchar(32),
	gongzhonghao varchar(32),
	email varchar(32),
	qianming varchar(32),

	description text,
	award text,
	bumenhuafen text,
	naxinduixiang text,
	jiezhiriqi timestamp,
	primary key(id)
)default charset=utf8;

create table apply(
	id int auto_increment,
	name varchar(32),
	gender tinyint(4),
	department varchar(32),
	majoy varchar(32),
	grade varchar(32),
	introduce text,
	techang text,
	yixiangbumen text,
	tiaoji tinyint(4),
	primary key(id)
)default charset=utf8;