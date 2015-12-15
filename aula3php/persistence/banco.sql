
drop database if exists aula3;

create database aula3;

use aula3;

create table funcionario(
    id int auto_increment,
    nome varchar(40) not null,
    cpf varchar(15) not null,
    email varchar(50) not null,
    salario double,
    primary key(id)
);

desc funcionario;