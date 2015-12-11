create table manager(
	id int PRIMARY key not null auto_increment,
	code varchar(100) not null,
   name varchar(100) not null,
   password varchar(100) not null
);

insert into manager (code,name,password) values ('admin','系统管理员',md5('123456'));