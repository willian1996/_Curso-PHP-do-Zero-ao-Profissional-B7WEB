# DROP DATABASE virtual;
DROP DATABASE IF EXISTS gbd;

# CREATE DATABASE virtual;
CREATE DATABASE IF NOT EXISTS gbd;

USE gbd;

# SHOW DATABASES;

CREATE TABLE funcionario (
	id INTEGER UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(40) NOT NULL,
	departamento CHAR(2),
	funcao VARCHAR(20),
	salario DECIMAL(6, 2)
);

# SHOW TABLES;

# DESCRIBE funcionario;
# DESCRIBE funcionario id;
# DESCRIBE funcionario nome;

INSERT INTO funcionario
	(id, nome, departamento, funcao, salario)
VALUES
	(12, 'Carlos Alberto', '3', 'Vendedor', 1530.00);
    
INSERT INTO funcionario VALUES 
(1, 'celia nascimento', '2', 'secretaria', 1200.50), 
(2, 'wilson de macedo', '3', 'programador', 1050.00),
(3, 'ana bastos', '5', 'vendedora', 1530.00),
(4, 'carlos bastos', '5', 'vendedor', 1530.00),
(5, 'augusto souza', '3', 'programador', 1050.00),
(6, 'marcelo souza', '3', 'analista', 2250.11),
(7, 'aparecida silva', '3', 'secretaria', 1200.50),
(9, 'solange pacheco', '5', 'supervisora', 1599.51),
(10, 'paulo da silva', '2', 'vendedor', 1530.00),
(15, 'marcos henrique', '2', 'gerente', 1985.75),
(25, 'pedro silva', '3', 'supervisor', 1599.51);

SELECT * FROM funcionario;
