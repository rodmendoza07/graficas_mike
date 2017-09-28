-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2017 a las 12:26:00
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `edusystem2017`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prepauno`
--

CREATE TABLE IF NOT EXISTS `prepauno` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `resultadoVOCABULARIO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `resultadoANALOGIAS` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `resultadoLECTURA` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `resultadoMATEMATICAS` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `resultadoLOGICO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `prepauno`
--

INSERT INTO `prepauno` (`id`, `resultadoVOCABULARIO`, `resultadoANALOGIAS`, `resultadoLECTURA`, `resultadoMATEMATICAS`, `resultadoLOGICO`) VALUES
(1, '8', '4', '5', '8', '7'),
(2, '7', '6', '6', '7', '7'),
(3, '5', '2', '7', '9', '3'),
(4, '3', '7', '4', '5', '2'),
(5, '7', '5', '8', '3', '2'),
(6, '2', '4', '5', '8', '9'),
(7, '7', '5', '8', '3', '2'),
(8, '2', '4', '5', '8', '9'),
(9, '7', '5', '8', '3', '2'),
(10, '2', '4', '5', '8', '9'),
(11, '4', '3', '8', '3', '1'),
(12, '2', '4', '5', '8', '9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
