# EXEMPLO N:N

USE gbd;

DROP TABLE IF EXISTS departamento_localidade;
DROP TABLE IF EXISTS departamento;
DROP TABLE IF EXISTS localidade;


CREATE TABLE IF NOT EXISTS departamento (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS localidade (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS departamento_localidade (
	departamento_id INT UNSIGNED NOT NULL,
	localidade_id INT UNSIGNED NOT NULL,
  
	PRIMARY KEY (departamento_id, localidade_id),
  
	INDEX fk_departamento_has_localidade_localidade_idx (localidade_id ASC),
	INDEX fk_departamento_has_localidade_departamento_idx (departamento_id ASC),
  
	CONSTRAINT fk_departamento_has_localidade_departamento
		FOREIGN KEY (departamento_id)
		REFERENCES departamento (id),
        
	CONSTRAINT fk_departamento_has_localidade_localidade
		FOREIGN KEY (localidade_id)
		REFERENCES localidade (id)
);

DESCRIBE departamento;
DESCRIBE localidade;
DESCRIBE departamento_localidade;