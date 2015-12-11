create table employee(
	id int PRIMARY key not null auto_increment,
   name varchar(100) not null,
   salary float,
   grade tinyint
);

insert into employee(name,code,salary,grade) values ('小A','000010',20000,10);
insert into employee(name,code,salary,grade) values ('小B','000011',19000,10);
insert into employee(name,code,salary,grade) values ('小C','000012',18000,9);
insert into employee(name,code,salary,grade) values ('小D','000013',10000,5);
insert into employee(name,code,salary,grade) values ('小E','000014',9000,4);
insert into employee(name,code,salary,grade) values ('小F','000015',8000,4);