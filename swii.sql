-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-05-2015 a las 20:47:25
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `swii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE IF NOT EXISTS `publicacion` (
  `Id_pub` int(10) NOT NULL AUTO_INCREMENT,
  `Pu_pub` varchar(500) NOT NULL,
  `Fe_pub` datetime NOT NULL,
  `Ar_pub` varchar(1) NOT NULL,
  `usu_pub` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Id_pub`),
  KEY `fk_usu` (`usu_pub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`Id_pub`, `Pu_pub`, `Fe_pub`, `Ar_pub`, `usu_pub`) VALUES
(19, 'Hello madafakas', '2015-05-14 20:19:32', '', '2'),
(23, 'Tomatela', '2015-05-14 22:50:52', '', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_usu` varchar(15) NOT NULL,
  `Nom_usu` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usu`, `Nom_usu`) VALUES
('1', 'Pepita'),
('2', 'Edward'),
('3', 'Pepiti');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `fk_usu` FOREIGN KEY (`usu_pub`) REFERENCES `usuario` (`Id_usu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
