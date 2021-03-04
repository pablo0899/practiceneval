DROP DATABASE IF EXISTS `ceneval`;
CREATE DATABASE `ceneval`;
USE `ceneval`;
DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(32) NOT NULL,
  `contrasena` varchar(32) DEFAULT NULL,
  `puntuacion` float DEFAULT NULL,
  `correctas` int(11) DEFAULT NULL,
  `incorrectas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(32) DEFAULT NULL,
  `pregunta` varchar(64) DEFAULT NULL,
  `opcionA` varchar(64) DEFAULT NULL,
  `opcionB` varchar(64) DEFAULT NULL,
  `opcionC` varchar(64) DEFAULT NULL,
  `opcionD` varchar(64) DEFAULT NULL,
  `opcionE` varchar(64) DEFAULT NULL,
  `justificacion` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`)
);
