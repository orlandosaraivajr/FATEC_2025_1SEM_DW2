CREATE DATABASE IF NOT EXISTS estacionamento_fatec;
USE estacionamento_fatec;

CREATE TABLE IF NOT EXISTS carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    placa VARCHAR(10) NOT NULL UNIQUE,
    nome_condutor VARCHAR(100) NOT NULL,
    renavam VARCHAR(20) NOT NULL
);
