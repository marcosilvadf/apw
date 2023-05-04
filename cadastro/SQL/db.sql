-- Active: 1683154794252@@127.0.0.1@3306@cadastro
CREATE TABLE usuario (
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100)
);

CREATE TABLE venda(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomeVendedor VARCHAR(100),
    valor DECIMAL(5,2),
    desconto DECIMAL(5,2)
);