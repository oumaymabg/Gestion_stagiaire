-- GRANT ALL PRIVILEGES ON . TO 'php' @'localhost' IDENTIFIED BY '123456' WITH GRANT OPTION;
-- GRANT ALL PRIVILEGES ON . TO 'php' @'%' IDENTIFIED BY '123456' WITH GRANT OPTION;

DROP DATABASE IF EXISTS gestion_stage;
CREATE DATABASE IF NOT EXISTS gestion_stage;
USE gestion_stage;

-- Table Etudiant
CREATE TABLE ETUDIANT (
	ID_ETUDIANT int(4) AUTO_INCREMENT PRIMARY KEY,
	NOM VARCHAR(100) NOT NULL,
	PRENOM VARCHAR(100) NOT NULL,
	CIN int(8) NOT NULL,
	EMAIL VARCHAR(255) NOT NULL,
	ID_SPECIALITE int(4) NOT NULL,
	UNIVERSITE VARCHAR(255) NOT NULL,
	PIECE VARCHAR(255) NOT NULL
);

-- Table SUJET
CREATE TABLE SUJET (
	ID_SUJET INT(4) AUTO_INCREMENT PRIMARY KEY,
	TITRE_SUJET VARCHAR(100) NOT NULL,
	DESCRIPTIONS VARCHAR(255) NOT NULL,
	DEPARTEMENT	VARCHAR(50)	NOT NULL,
	DATE_DEBUT DATE,
	DATE_FIN DATE
);

-- Table stagiaire
CREATE TABLE STAGIAIRE (
	ID_STAGIAIRE INT(4) AUTO_INCREMENT PRIMARY KEY,
	ID_ETUDIANT INT(4), 
	ID_SUJET INT(4),
	TITRE VARCHAR(100) NOT NULL,
	NOM VARCHAR(100) NOT NULL,
	PRENOM VARCHAR(100) NOT NULL,
	DEPARTEMENT VARCHAR(50)	NOT NULL,
	DATE_DEBUT DATE,
	DATE_FIN DATE
);

ALTER TABLE STAGIAIRE ADD constraint fk10 foreign key(ID_ETUDIANT) references ETUDIANT(ID_ETUDIANT);
ALTER TABLE STAGIAIRE ADD constraint fk11 foreign key(ID_SUJET) references SUJET(ID_SUJET);
-- table specialite
CREATE TABLE SPECIALITE (
	ID_SPECIALITE  INT(4) AUTO_INCREMENT PRIMARY KEY,
	SPEC_COURT VARCHAR(50) NOT NULL,
	SPEC_LONG VARCHAR(255) NOT NULL
);
ALTER TABLE ETUDIANT ADD constraint fk12 foreign key(ID_SPECIALITE) references SPECIALITE(ID_SPECIALITE);

-- table User 
CREATE TABLE USERS (
	ID_USER INT(4) AUTO_INCREMENT PRIMARY KEY,
	UTILISATEUR VARCHAR(100) NOT NULL,
	PASS VARCHAR(100) NOT NULL
);


INSERT INTO USERS VALUES 
(1,'admin',md5('123'));

