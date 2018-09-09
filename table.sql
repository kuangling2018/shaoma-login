set names utf8;
drop database if exists shaoma;
create database shaoma charset=utf8;
use shaoma;
create table login
(
	id int primary key auto_increment,
	randnumber char(8) not null,
	name varchar(20) 
);
insert into login values(1,'12345678','kuangling');