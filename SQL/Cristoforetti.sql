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
('James', 'Bond', '12G863HU8KBFSADG', '03/03/12', '22:00', true),
('Piero', 'Pirlo', '12GRG6789HTFSADG', '01/10/05', '06:50', false),
('Paolo', 'Giancarlo', '12FJESEWR423D6DG', '98/09/03', '13:32:00', true),
('Gino', 'Prati', '45THRDEWR523D6DR', '02/11/24', '12:50', true),
('Andrea', 'Trota', '15GRDT654HTD65GD', '96/04/05', '13:22', false),
('Marco', 'Romagni', '63FHTYDR456DSRTR', '94/05/19', '15:26', true);

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

SELECT:
SELECT nome, cognome
FROM tcontatti

/* Select all: */
SELECT *
FROM tconatti

/* Select / where: */
SELECT *
FROM tcontatti
WHERE nome = 'Gianluca'

/* Select / where / and: */
SELECT *
FROM tcontatti
WHERE nome = 'Marco' AND YEAR(data_nascita) >(<) 2000;

/* Select / where / or: */
SELECT *
FROM tcontatti
WHERE nome = 'Alessio' OR YEAR(data_nascita) > 2000;  

/* Select / where / not: */
SELECT *
FROM tcontatti
WHERE NOT nome = 'Paolo'

/* Select / distinct: */
SELECT DISTINCT nome, cognome
FROM tcontatti;

/* Select / distinct / count: */
SELECT count(DISTINCT operatore)
FROM ttelefoni

/* Select / as: */
SELECT nome AS name, cognome AS surname
FROM tcontatti;

/* Select / as/ concat: */
SELECT CONCAT(nome, '  ', cognome) AS full_name
FROM tcontatti;

/* Select / limit / offset */
SELECT nome			
FROM tcontatti 			
LIMIT 2 OFFSET 3                


/* Select / in: */
SELECT nome 
FROM tcontatti
WHERE nome IN ('Pino', 'Andrea') OR 'Rossi' IN (cognome)

/* Select / between: */
SELECT id_contatti
FROM tcontatti
WHERE id_contatti (NOT) BETWEEN 1 AND 30

/* Select / null: */
SELECT COUNT(*)
FROM tcontatti
WHERE nome IS (NOT) NULL

/* Select / max / min: */
SELECT MAX(id_telefoni)  AS max_id /* oppure min_id */
FROM ttelefoni 

/* Select / count / where: */
SELECT COUNT(*) AS ncontatti
FROM tcontatti

/* Select as */
SELECT count( DISTINCT id_contatti) AS ncontatti 
FROM tcontatti
WHERE nome = 'Matteo'

/* Select / order by: */
SELECT *
FROM tcontatti
ORDER BY cognome, nome(ASC) /* oppure DESC */

/* Select / group by */
SELECT id_contatti, nome
FROM tcontatti 
GROUP BY id_contatti, nome

/* select / like */
SELECT * 
FROM tcontatti
WHERE nome LIKE 'M%o'

/* select / union: */
SELECT nome
FROM tcontatti
UNION
SELECT operatore
FROM ttelefoni

/* subquery */
SELECT id_contatti 
FROM tcontatti
WHERE id_contatti IN (
	SELECT fk_contatti 
FROM tappartiene
)

/* join */
SELECT id_contatti
FROM tcontatti
INNER JOIN tappartiene
ON tcontatti.idcontatti = tappartiene.fk_contatti


/* insert into */
INSERT INTO tabella(campo1, campo2 …)
VALUES (valore1, valore2  ...)

/* update */
UPDATE tcontatti
SET nome = 'Paolo', cognome = 'Piero'
WHERE id_contatti = 1

/* select / into: */
SELECT *
into copiacontatti(colonna1, colonna2)
from tcontatti

/* delete: */
DELETE FROM tcontatti
WHERE id_contatti > 5

/* truncate: */
TRUNCATE TABLE tcontatti

ALTER TABLE tcontatti
ADD COLUMN citta    varchar(20);


/* query esercizio */
SELECT citta, COUNT(*) AS numContatti
FROM tcontatti
GROUP BY citta

SELECT *
FROM tcontatti
ORDER BY citta 

SELECT *
FROM tcontatti
ORDER BY data_nascita DESC
LIMIT 1

SELECT *
FROM tcontatti, ttelefoni
WHERE tcontatti.id_contatti = ttelefoni.fk_contatti
AND ttelefoni.operatore = 'Vodafone'

SELECT operatore, COUNT(*) AS numContatti
FROM ttelefoni
GROUP BY operatore

SELECT operatore, COUNT(*) AS numContatti
FROM ttelefoni
GROUP BY operatore
HAVING numContatti = (SELECT COUNT(*) AS numContatti
FROM ttelefoni
GROUP BY operatore
ORDER BY numContatti
LIMIT 1);