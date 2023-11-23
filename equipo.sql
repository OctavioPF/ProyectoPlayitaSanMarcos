-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-12-2022 a las 00:31:29
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `idProducto` int(10) NOT NULL AUTO_INCREMENT,
  `nomProducto` varchar(26) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(26) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(5) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`idProducto`, `nomProducto`, `categoria`, `precio`, `descripcion`, `status`) VALUES
(1, 'RIB EYE', 'plato fuerte', 200, 'T ERMINO DE SU PREFERENCIA, ACOMPAï¿½ADO DE PURE DE PAPA CON VEGETALES Y ARROZ', 'Disponible'),
(2, 'MARGARITA', 'Postre', 75, 'BEBIDA REFRESCANTE CON ALCOHOL', 'Disponible'),
(8, 'T-BONE', 'Plato fuerte', 200, 'TERMINO DE SU PREFERENCIA, ACOMPANADO DE PURE DE PAPA CON VEGETALES Y ARROZ', 'Disponible'),
(9, 'PICANA', 'Plato fuerte', 230, 'TERMINO DE SU PREFERENCIA, ACOMPAÃ‘ADO DE PURE DE PAPA CON VEGETALES Y ARROZ', 'Disponible'),
(10, 'MOJITO', 'Bebida', 70, 'BEBIDA REFRESCANTE CON ALCOHOL', 'Disponible'),
(11, 'CERVEZA', 'Bebida', 35, 'LA QUE SEA DE SU PREFERENCIA', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(26) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(26) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `correo`, `password`) VALUES
(1, 'admin', 'admin@playita.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
