# EXEMPLO 1:N

USE gbd;

DROP TABLE IF EXISTS telefone;
DROP TABLE IF EXISTS cliente;

CREATE TABLE cliente (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)    
);


CREATE TABLE telefone (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	numero VARCHAR(17) NOT NULL,
    cliente_id INT UNSIGNED NOT NULL,
    
    PRIMARY KEY (id),
    
    INDEX fk_telefone_cliente_idx 
		(cliente_id ASC),
        
	CONSTRAINT fk_telefone_cliente
    FOREIGN KEY (cliente_id)
    REFERENCES cliente(id)
);

DESCRIBE cliente;
DESCRIBE telefone;