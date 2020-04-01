-- Criando um banco de dados
CREATE DATABASE `db_list_phone`;

-- Criando a Tabela
CREATE TABLE `tb_list` (
	`id_list` INT AUTO_INCREMENT PRIMARY KEY,
	`user_name` VARCHAR(255) NOT NULL,
	`number_fone` VARCHAR(16) NOT NULL UNIQUE KEY
);