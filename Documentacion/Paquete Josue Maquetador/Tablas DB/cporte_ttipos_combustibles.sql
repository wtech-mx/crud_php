-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2021 a las 23:02:31
-- Versión del servidor: 5.5.68-MariaDB
-- Versión de PHP: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaspro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cporte_ttipos_combustibles`
--

CREATE TABLE `cporte_ttipos_combustibles` (
  `id` int(11) NOT NULL,
  `id_sucursal` smallint(6) DEFAULT NULL,
  `handel` tinyint(4) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL,
  `ultima_actualizacion` datetime NOT NULL,
  `u_medida` varchar(5) NOT NULL DEFAULT 'l'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cporte_ttipos_combustibles`
--

INSERT INTO `cporte_ttipos_combustibles` (`id`, `id_sucursal`, `handel`, `nombre`, `fecha_registro`, `ultima_actualizacion`, `u_medida`) VALUES
(-1, 114, 16, '( SIN ASIGNAR )', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'l');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cporte_ttipos_combustibles`
--
ALTER TABLE `cporte_ttipos_combustibles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sucursal` (`id_sucursal`),
  ADD KEY `handel` (`handel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cporte_ttipos_combustibles`
--
ALTER TABLE `cporte_ttipos_combustibles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cporte_ttipos_combustibles`
--
ALTER TABLE `cporte_ttipos_combustibles`
  ADD CONSTRAINT `Restriccion_2` FOREIGN KEY (`handel`) REFERENCES `tempresas` (`handel`),
  ADD CONSTRAINT `Restriccion_1` FOREIGN KEY (`id_sucursal`) REFERENCES `tsucursales` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
