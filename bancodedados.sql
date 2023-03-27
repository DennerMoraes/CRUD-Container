CREATE DATABASE container;

USE container;

CREATE TABLE continfo (
	id int PRIMARY KEY AUTO_INCREMENT,
	cliente VARCHAR(100),
	numero VARCHAR(100),
	tipo int,
	statuss VARCHAR(5),
	categoria VARCHAR(20)
);

CREATE TABLE contmov(
	id int PRIMARY KEY,
	movimentacao VARCHAR(20),
	datainicio DATETIME,
	datafim DATETIME,
	nummov int
);