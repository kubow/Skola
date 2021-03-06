CREATE TABLE lektori( 
	ID INT NOT NULL AUTO_INCREMENT,
	ZKR VARCHAR(25) NOT NULL,
	JMENO VARCHAR(25) NOT NULL,
	PRIJM VARCHAR(50) NOT NULL,
	OBORY VARCHAR(255) NOT NULL,
	MISTA VARCHAR(255) NOT NULL,
	DOMA CHAR(1) NOT NULL,
	DOJEZD CHAR(1) NOT NULL,
	RANK INT,
	FOTO VARCHAR(50),
	POPIS VARCHAR(255),
	DIPL VARCHAR(255),
	REG DATETIME NOT NULL,
);

CREATE TABLE mista( 
	ID INT NOT NULL AUTO_INCREMENT,
	KOD VARCHAR(5) NOT NULL,
	NAZEV VARCHAR(100) NOT NULL,
	POPIS VARCHAR(255) NOT NULL,
);

CREATE TABLE obory( 
	ID INT NOT NULL AUTO_INCREMENT,
	OBOR VARCHAR(25) NOT NULL,
	NAZEV VARCHAR(100) NOT NULL,
	UROVEN VARCHAR(100) NOT NULL,
	KATEGORIE VARCHAR(50),
	POPIS VARCHAR(255),
);

CREATE TABLE lekce( 
	ID INT NOT NULL AUTO_INCREMENT,
	ZKR VARCHAR(25) NOT NULL,
	OBOR VARCHAR(10) NOT NULL,
	CAS_OD DATETIME NOT NULL,
	CAS_DO DATETIME NOT NULL,
	FINAL CHAR(1) NOT NULL,
	TYP VARCHAR(25) NOT NULL,
);

CREATE TABLE login( 
	ID INT NOT NULL AUTO_INCREMENT,
	USR VARCHAR(25) NOT NULL,
	PWD VARCHAR(80) NOT NULL,
	HASH VARCHAR(10) NOT NULL,
	ROLE ,
);

INSERT INTO lektori (ID, ZKR, JMENO, PRIJM, OBORY, MISTA, DOMA, DOJEZD, RANK, FOTO, POPIS, DIPL, REG)
VALUES (1, kubow, Jakub, Vajda, che, mat, pha6 zlin, 0, 1, 0, , , , 2. 1. 2015)
VALUES (2, kami_v, Kamila, Varcholáková, eng, pha6, 1, 0, 999, , , , 6. 1. 2015)

INSERT INTO mista (ID, KOD, NAZEV, POPIS)
VALUES (1, pha, Praha celá, )
VALUES (2, pha_1, Praha - Nové město, )
VALUES (3, pha_2, , )
VALUES (4, pha_3, , )
VALUES (5, pha_4, , )
VALUES (6, pha_5, , )
VALUES (7, pha_6, Praha 6, )

INSERT INTO obory (ID, OBOR, NAZEV, UROVEN, KATEGORIE, POPIS)
VALUES (1, eng_1, Angličtina, Basic, výuka jazyků, )
VALUES (2, eng_2, Angličtina, Elementary, výuka jazyků, )
VALUES (3, eng_3, Angličtina, Pre-Intermediate, výuka jazyků, )
VALUES (4, eng_4, Angličtina, Intermediate, výuka jazyků, )
VALUES (5, eng_5, Angličtina, Advanced, výuka jazyků, )
VALUES (6, eng_6, Angličtina, master, výuka jazyků, )
VALUES (7, che_1, Chemie - základy, začátečník, ostatní, )
VALUES (8, che_2, Chemie - maturita, pokročilý, ostatní, )
VALUES (9, che_3, Chemie - aplikace, master, ostatní, )
VALUES (10, mat1, Matematika, začátečník, ostatní, )
VALUES (11, mat2, Matematika, pokročilý, ostatní, )
VALUES (12, mat3, Matematika - VŠ, master, ostatní, )
VALUES (13, pc_off_1, MS Office, začátečník, ostatní, )
VALUES (14, pc_off_2, MS Office, pokročilý, ostatní, )
VALUES (15, pc_off_3, MS Office, master, ostatní, )
VALUES (16, pc_net_1, Síťování, LAN, WIFI, 3G…, , ostatní, )
VALUES (17, pc_net_2, HTML, CSS, stadardy, pokročilý, ostatní, )
VALUES (18, pc_net_3, WebDevelopement, pokročilý, ostatní, )
VALUES (19, pc_java, JAVA programování, , ostatní, )
VALUES (20, pc_php, PHP MySQL programování, , ostatní, )
VALUES (21, pc_py, Python programování, , ostatní, )
VALUES (22, hkl_1, Hra na klavír, začátečník, ostatní, )
VALUES (23, kr_1, Kreslení, , ostatní, )

INSERT INTO lekce (ID, ZKR, OBOR, CAS_OD, CAS_DO, FINAL, TYP)
VALUES (1, kubow, pc_php, 4. 1. 2015 22:00:08, 4. 1. 2015 23:12:08, 1, lekce)
VALUES (2, kubow, pc_php, 5. 1. 2015 22:00:08, 5. 1. 2015 23:12:08, 1, lekce)

INSERT INTO login (ID, USR, PWD, HASH, ROLE)
VALUES (1, kubow, , md5, admin)
VALUES (2, kami_v, , md5, admin)
VALUES (3, kama, , md5, user)

