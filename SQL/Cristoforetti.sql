DROP DATABASE IF EXISTS my_contatti;

CREATE DATABASE IF NOT EXISTS my_contatti DEFAULT CHARACTER SET = utf8; /* Creo Database */

USE my_contatti;

CREATE TABLE tcontatti ( /* Creo Tabella */
    id_contatti                 BIGINT              NOT NULL    AUTO_INCREMENT, /* AUTO INCREMENT Field */
    nome                        VARCHAR(20),        /* NULL */    
    cognome                     VARCHAR(20)         NOT NULL, /* NOT NULL Constraint */
    codice_fiscale              CHAR(16)            UNIQUE,    /* UNIQUE Constraint */
    data_nascita                DATE, /* Data type */
    ora_nascita                 TIME,    
    attivo                      BOOLEAN             DEFAULT /* DEFAULT Constraint */    TRUE,
    PRIMARY KEY(id_contatti), /* PRIMARY KEY Constraint */
    INDEX icontatti (nome)    
) ENGINE = InnoDB;

CREATE TABLE ttelefoni (
    id_telefoni                 BIGINT              NOT NULL    AUTO_INCREMENT,
    numero                      VARCHAR(20),
    operatore                   VARCHAR(20),
    tipo                        ENUM('P', 'C', 'L'), /* Personale - Casa - Lavoro */
    fk_contatti                 BIGINT              NOT NULL,
    PRIMARY KEY(id_telefoni),
    INDEX itelefoni (numero),
    FOREIGN KEY(fk_contatti) REFERENCES tcontatti(id_contatti) /* FOREIGN KEY Constraint */
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;

CREATE TABLE trandom (
    id_random                   BIGINT              NOT NULL    AUTO_INCREMENT,
    random                      INT,
    PRIMARY KEY(id_random),
    ADD CONSTRAINT CHK_random CHECK (random>7), /* CHECK Constraint */  
)

CREATE INDEX INX_random    /* creo un index */
ON trandom (random, id_random);

ALTER TABLE trandom ( /* modifica tabella */
ADD newRand                VARCHAR(20),
    tipo                        ENUM('P', 'C', 'L'), /* Personale - Casa - Lavoro */
    fk_contatti                 BIGINT              NOT NULL,
    PRIMARY KEY(id_telefoni),
    INDEX itelefoni (numero),
    FOREIGN KEY(fk_contatti) REFERENCES tcontatti(id_contatti) /* FOREIGN KEY Constraint */
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;

CREATE TABLE toperatori (
    id_operatori                INT                 NOT NULL    AUTO_INCREMENT,
    nome                        VARCHAR(20),    
    PRIMARY KEY(id_operatori),
    INDEX ioperatori (nome)
) ENGINE = InnoDB;

CREATE TABLE tgruppi (
    id_gruppi                   BIGINT              NOT NULL    AUTO_INCREMENT,
    nome                        VARCHAR(20)         NOT NULL,
    PRIMARY KEY(id_gruppi),
    INDEX igruppi (nome)
) ENGINE = InnoDB;

CREATE TABLE tappartiene (    
    fk_contatti                 BIGINT              NOT NULL,
    fk_gruppi                   BIGINT              NOT NULL,
    PRIMARY KEY(fk_contatti, fk_gruppi),
    FOREIGN KEY(fk_contatti) REFERENCES tcontatti(id_contatti)
      ON UPDATE CASCADE
        ON DELETE CASCADE,    
    FOREIGN KEY(fk_gruppi) REFERENCES tgruppi(id_gruppi)
    ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE = InnoDB;

INSERT INTO tcontatti(nome, cognome, codice_fiscale, data_nascita, ora_nascita, attivo) /* inserire valori nel database */
VALUES
('James', 'Bond', '12G863HU8KBFSADG', '12/03/03', '22:00', true),
('Piero', 'Pirlo', '12GRG6789HTFSADG', '05/10/01', '06:50', false),
('Marco', 'Romagni', '12FJESEWR423D6DG', '08/09/98', '13:62', true);

UPDATE tcontatti
SET nome = 'Rhon'
WHERE id_contatti = 1;

CREATE VIEW contattiAtt AS    /* Views */
SELECT nome, cognome
FROM tcontatti
WHERE Attivo = true;

SELECT * FROM contattiAtt

/* SELECT - extracts data from a database
UPDATE - updates data in a database
DELETE - deletes data from a database
INSERT INTO - inserts new data into a database
CREATE DATABASE - creates a new database
ALTER DATABASE - modifies a database
CREATE TABLE - creates a new table
ALTER TABLE - modifies a table
DROP TABLE - deletes a table
CREATE INDEX - creates an index (search key)
DROP INDEX - deletes an index */

SELECT *    /* ritorna tutto tcontatti */
FROM tcontatti;

SELECT nome    /* ritorna solo il nome */
FROM tcontatti;

SELECT nome, cognome    /* ritorna il nome e il cognome dei contatti attivi */
FROM tcontatti
WHERE Attivo = true;

SELECT nome, cognome
FROM tcontatti
WHERE nome = 'Rhon' AND Attivo = true;

SELECT nome, cognome
FROM tcontatti
WHERE nome = 'Rhon' OR Attivo = true;

SELECT nome, cognome    /* ritorna il nome e il cognome dei contatti attivi */
FROM tcontatti
WHERE NOT Attivo = true;

SELECT DISTINCT Attivo
FROM tcontatti;

SELECT Attivo AS StatoUtente
FROM tcontatti;

SELECT TOP 2 *
FROM tcontatti;

SELECT nome, cognome
FROM tcontatti
LIMIT 2 OFFSET 3;

SELECT *
FROM tcontatti
FETCH FIRST 2 ROWS ONLY; /*only oracle*/

SELECT COUNT *
FROM tcontatti;

DROP DATABASE my_contatti; /* Elimino Database */ INT,
DROP COLUMN random;

DROP TABLE trandom /* elimino Tabella */




