create database sistema_simples_davi_sehnem;

use sistema_simples_davi_sehnem;

create table usuario(
    id int auto_increment primary key,
    usuario varchar(255) not null,
    senha varchar(255) not null
);

insert into usuario (usuario, senha) value ('admin','123');