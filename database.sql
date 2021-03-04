drop database if exists ceneval;
create database ceneval;
use ceneval;


DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
`id` int NOT NULL AUTO_INCREMENT,
`usuario` varchar(32) NOT NULL,
`contrasena` varchar(32) NOT NULL,
`puntuacion` float NOT NULL,
`correctas` int NOT NULL,
`incorrectas` int NOT NULL,
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
`respuesta_correcta` char(1) DEFAULT NULL,
PRIMARY KEY (`id_pregunta`)
);
INSERT INTO `examen` (`area`, `pregunta`, `opcionA`, `opcionB`, `opcionC`, `opcionD`, `opcionE`, `justificacion`, `respuesta_correcta`) VALUES
('Area', 'PREGUNTA 1', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','A'),
('Area', 'PREGUNTA 2', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','C'),
('Area', 'PREGUNTA 3', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','E'),
('Area', 'PREGUNTA 4', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','A'),
('Area', 'PREGUNTA 5', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','B'),
('Area', 'PREGUNTA 6', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','C'),
('Area', 'PREGUNTA 7', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','C'),
('Area', 'PREGUNTA 8', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','E'),
('Area', 'PREGUNTA 9', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','B'),
('Area', 'PREGUNTA 10', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','E'),
('Area', 'PREGUNTA 11', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','B'),
('Area', 'PREGUNTA 12', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','D'),
('Area', 'PREGUNTA 13', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','E'),
('Area', 'PREGUNTA 14', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','A'),
('Area', 'PREGUNTA 15', 'OPCION A', 'OPCION B', 'OPCION C', 'OPCION D', 'OPCION E', 'ESTO ES UNA JUSTIFICACION','D');
