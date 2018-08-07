--Script inicial da base de cadastro
    create database if not exists db_cadastro default character set utf8 default collate utf8_general_ci;

    create table if not exists tb_clientes(
        id int AUTO_INCREMENT not null PRIMARY key,
        nome varchar (40) not null,
        email varchar (50) not null unique,
        telefone varchar (15) not null,
        endereco varchar (50) not null
    ) default character set utf8 default collate utf8_general_ci;

