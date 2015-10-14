CREATE DATABASE EMPRESA;

CREATE TABLE empresa.departamento (
id_departamento INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(40) NOT NULL
);

CREATE TABLE empresa.cargo (
id_cargo INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(40) NOT NULL
);

CREATE TABLE empresa.funcionario (
id_funcionario INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(80) NOT NULL,
dt_contratacao DATE NOT NULL,
id_cargo INTEGER NOT NULL,
  FOREIGN KEY (id_cargo) REFERENCES empresa.cargo (id_cargo) ON DELETE CASCADE,
id_departamento INTEGER NOT NULL,
  FOREIGN KEY (id_departamento) REFERENCES empresa.departamento (id_departamento) ON DELETE CASCADE
);