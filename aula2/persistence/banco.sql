drop database if exists aula2;

create database aula2;

use aula2;

create table funcionario(
    id int auto_increment primary key,
    nome varchar(40) not null,
    email varchar(50) not null,
    salario double,
    cpf varchar(15) not null
);

desc funcionario;
