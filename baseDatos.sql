CREATE DATABASE tienda;
USE  tienda;
CREATE TABLE PRODUCTO (
PRO_CVE_CLAVE INT AUTO_INCREMENT  PRIMARY KEY, 
PRO_NOMBRE VARCHAR(50) NOT NULL,
PRO_DESCRIPCION VARCHAR(250) NOT NULL, 
PRO_CATEGORIA VARCHAR(50) NOT NULL,
PRO_INSTRUCTOR VARCHAR(50) NOT NULL,
PRO_DURACION VARCHAR(30),
PRO_PRECIO DECIMAL(30) NOT NULL
);
CREATE TABLE USUARIO (
USU_CVE_CLAVE INT AUTO_INCREMENT  PRIMARY KEY,
USU_NOMBRE VARCHAR(50) NOT NULL,
USU_APELLIDOP VARCHAR(50) NOT NULL,
USU_NOM_USUARIO VARCHAR(50) NOT NULL,
USU_EMAIL VARCHAR(50) NOT NULL,
USU_PASSWORD VARCHAR(50) NOT NULL,
USU_TELEFONO VARCHAR(50) NOT NULL,
USU_ROL CHAR(1)
);
CREATE TABLE VENTAS (
VEN_CVE_CLAVE INT AUTO_INCREMENT  PRIMARY KEY,
VEN_USU_NOMBRE VARCHAR(50) NOT NULL,
VEN_EMAIL VARCHAR(50) NOT NULL,
VEN_NOMBRE_CURSO VARCHAR(50) NOT NULL,
VEN_PRECIO_TOTAL DECIMAL(30) NOT NULL
)