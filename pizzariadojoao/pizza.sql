create database pizzaria;
use pizzaria;

create table usuarios(
id int primary key auto_increment,
nome varchar (20),
email varchar(100),
password varchar(60)
);


create table pedidos(
pedidos_id int(11) primary key auto_increment,
nome_cliente varchar(100),
statusPizza varchar(20),
sabor1 varchar(50),
sabor2 varchar(50),
sabor3 varchar(50),
massa varchar(50),
borda varchar(50)
);