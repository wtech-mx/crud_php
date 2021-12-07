-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2021 a las 23:02:37
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
-- Estructura de tabla para la tabla `cporte_tstatus_bitacora_viajes`
--

CREATE TABLE `cporte_tstatus_bitacora_viajes` (
  `id` int(15) NOT NULL,
  `id_sucursal` smallint(6) DEFAULT NULL,
  `handel` tinyint(4) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `cancel` varchar(2) NOT NULL DEFAULT '0',
  `orden` int(11) DEFAULT '1',
  `finalizador` int(2) DEFAULT '0',
  `trayecto` int(2) NOT NULL DEFAULT '0',
  `ban_control_tiempo` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cporte_tstatus_bitacora_viajes`
--
ALTER TABLE `cporte_tstatus_bitacora_viajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sucursal` (`id_sucursal`),
  ADD KEY `handel` (`handel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cporte_tstatus_bitacora_viajes`
--
ALTER TABLE `cporte_tstatus_bitacora_viajes`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cporte_tstatus_bitacora_viajes`
--
ALTER TABLE `cporte_tstatus_bitacora_viajes`
  ADD CONSTRAINT `cporte_tstatus_bitacora_viajes_ibfk_1` FOREIGN KEY (`id_sucursal`) REFERENCES `tsucursales` (`id`),
  ADD CONSTRAINT `cporte_tstatus_bitacora_viajes_ibfk_2` FOREIGN KEY (`handel`) REFERENCES `tempresas` (`handel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
