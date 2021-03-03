drop database if exists ceneval;
create database ceneval;
use ceneval;

create table Alumno(
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `usuario` varchar(32) NOT NULL,
    `contraseña` varchar(32) NOT NULL,
    `puntuacion` float NOT NULL,
    `correctas` int NOT NULL,
    `incorrectas` int NOT NULL
);

create table Examen(
    `id_pregunta` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `area` varchar(32),
    `pregunta` varchar(64),
    `opcion A` varchar(64),
    `opcion B` varchar(64),
    `opcion C` varchar(64),
    `opcion D` varchar(64),
    `opcion E` varchar(64),
    `justificacion` varchar(128) 
);
