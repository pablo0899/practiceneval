-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-03-2021 a las 23:34:04
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `usuario`, `contrasena`, `puntuacion`, `correctas`, `incorrectas`) VALUES
(1, 'pablo', '1234', NULL, NULL, NULL),
(2, 'pablo', '1234', NULL, NULL, NULL),
(3, '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(32) DEFAULT NULL,
  `pregunta` varchar(64) DEFAULT NULL,
  `opcion A` varchar(64) DEFAULT NULL,
  `opcion B` varchar(64) DEFAULT NULL,
  `opcion C` varchar(64) DEFAULT NULL,
  `opcion D` varchar(64) DEFAULT NULL,
  `opcion E` varchar(64) DEFAULT NULL,
  `justificacion` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
