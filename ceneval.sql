-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-03-2021 a las 02:10:38
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ceneval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(32) NOT NULL,
  `contrasena` varchar(32) DEFAULT NULL,
  `puntuacion` float DEFAULT NULL,
  `correctas` int(11) DEFAULT NULL,
  `incorrectas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `usuario`, `contrasena`, `puntuacion`, `correctas`, `incorrectas`) VALUES
(1, 'pablo0899', '0899', NULL, NULL, NULL),
(2, 'alere_exp', '12345', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`id_pregunta`, `area`, `pregunta`, `opcionA`, `opcionB`, `opcionC`, `opcionD`, `opcionE`, `justificacion`) VALUES
(1, 'Programacion', 'Es un lenguaje orientado a objetos', 'C++', 'Python', 'PHP', 'Pearl', 'Ninguno de los anteriores', 'C++ es un lenguaje orientado a objetos, ya que permite trabajar con Entidades (Objetos)'),
(2, 'Bases de datos', 'Sentencia para ingresar datos a una tabla', 'INSERT INTO', 'ALTER TABLE', 'INSERT', 'DROP', 'SELECT', 'INSERT INTO es la sentencia utilizada para ingresar datos a una base de datos');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
