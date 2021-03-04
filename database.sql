drop database if exists ceneval;
create database ceneval;
use ceneval;

create table Alumno(
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `usuario` varchar(32) NOT NULL,
    `contrasena` varchar(32) NOT NULL,
    `puntuacion` float NOT NULL,
    `correctas` int NOT NULL,
    `incorrectas` int NOT NULL
);

create table Examen(
    `id_pregunta` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `area` varchar(32),
    `pregunta` varchar(64),
    `opcionA` varchar(64),
    `opcionB` varchar(64),
    `opcionC` varchar(64),
    `opcionD` varchar(64),
    `opcionE` varchar(64),
    `justificacion` varchar(128) 
);

INSERT INTO examen (area,pregunta,opcionA, opcionB, opcionC, opcionD, opcionE, justificacion) 
VALUES ('Programacion','Es un lenguaje orientado a objetos','C++','Python','PHP','Pearl','Ninguno de los anteriores','C++ es un lenguaje orientado a objetos, ya que permite trabajar con Entidades (Objetos)');

INSERT INTO examen (area,pregunta,opcionA, opcionB, opcionC, opcionD, opcionE, justificacion) 
VALUES ('Bases de datos','Sentencia para ingresar datos a una tabla','INSERT INTO','ALTER TABLE','INSERT','DROP','SELECT','INSERT INTO es la sentencia utilizada para ingresar datos a una base de datos');
