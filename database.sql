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
