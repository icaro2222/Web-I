

CREATE DATABASE IFhealth;

USE IFhealth;

CREATE TABLE usuario(
	idUsuario INT PRIMARY KEY,
	nome VARCHAR(45),
	senha INT(45),
	num_registro INT(14)
);


CREATE TABLE Discente(
	idDiscente INT PRIMARY KEY,
	nome VARCHAR(45),
	senha VARCHAR(45),
	numMatricula VARCHAR(14),
	peso FLOAT,
	sexo VARCHAR(20),
	idade INT,
	altura FLOAT,
	bloqueado BOOLEAN
);

CREATE TABLE Disponibilidade(
	idDisponibilidade INT PRIMARY KEY,
	dia date,
	hora time,
	livre BOOLEAN
);

CREATE TABLE Agendamento(
	idAgendamento INT PRIMARY KEY,
	fkTutor INT,
	fkDiscente INT,
	fkDisponibilidade INT
);

CREATE TABLE Anotacoes(
	idAnotacoes INT PRIMARY KEY,
	descricao TEXT
);

CREATE TABLE Bloqueio(
	idBloqueio INT PRIMARY KEY,
	idDiscente INT,
	idTutor INT,
	
);

ALTER TABLE Agendamento ADD CONSTRAINT `fk_Agendamento_idTutor` 
FOREIGN KEY (fkTutor) REFERENCES Usuario(idUsuario);

ALTER TABLE Agendamento ADD CONSTRAINT `fk_Agendamento_idDisponivel` 
FOREIGN KEY (fkDisponivel) REFERENCES Disponibilidade(idDisponivel);


ALTER TABLE Agendamento ADD CONSTRAINT `fk_Agendamento_idDiscente` 
FOREIGN KEY (fkDiscente) REFERENCES Discente(idDiscente);

