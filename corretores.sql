CREATE DATABASE cadastro_corretores;

USE cadastro_corretores;

CREATE TABLE corretores (
    id int NOT NULL auto_increment,
    nome varchar(30) NOT NUll,
    cpf int(11) NOT NULL,
    creci int(6) NOT NULL,
    primary key (id)
) DEFAULT CHARSET = utf8;

