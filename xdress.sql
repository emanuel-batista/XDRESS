create database xdress;
use xdress;

create table usuario(
	id int primary key auto_increment,
    usuario varchar(10),
	senha varchar(10)
);