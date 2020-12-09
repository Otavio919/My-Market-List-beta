CREATE DATABASE DB_MARKET_LIST;
USE DB_MARKET_LIST;

CREATE TABLE TB_USUARIO(
 CD_USUARIO INT primary key  NOT NULL AUTO_INCREMENT UNIQUE,
 NM_USUARIO VARCHAR(45) NOT NULL, 
 NM_LOGIN VARCHAR(45) NOT NULL,
 CD_SENHA VARCHAR(45) NOT NULL,
 IDADE_USUARIO INT NOT NULL,
 FT_PERFIL LONGTEXT 
);

CREATE TABLE TB_LISTA(
 CD_LISTA INT primary key  NOT NULL AUTO_INCREMENT UNIQUE,
 NM_LISTA VARCHAR(45) NOT NULL,
 DT_LISTA DATE NOT NULL,
 ID_USUARIO INT,
FOREIGN KEY(ID_USUARIO) REFERENCES TB_USUARIO(CD_USUARIO)
);

CREATE TABLE TB_ITEM(
CD_ITEM INT primary key  NOT NULL AUTO_INCREMENT UNIQUE,
NM_ITEM VARCHAR(45) NOT NULL,
QT_ITEM INT NOT NULL,
DS_ITEM LONGTEXT,
CP_ITEM BOOLEAN

);

CREATE TABLE TB_ITEM_LISTA(
ID_LISTA int,
ID_ITEM INT,
FOREIGN KEY(ID_LISTA) REFERENCES TB_LISTA(CD_LISTA),
FOREIGN KEY(ID_ITEM) REFERENCES TB_ITEM(CD_ITEM)
);