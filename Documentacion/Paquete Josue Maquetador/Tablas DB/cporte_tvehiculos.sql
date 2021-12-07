-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2021 a las 23:02:10
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
-- Estructura de tabla para la tabla `cporte_tvehiculos`
--

CREATE TABLE `cporte_tvehiculos` (
  `id` int(15) NOT NULL,
  `id_sucursal` smallint(6) DEFAULT NULL,
  `handel` tinyint(4) DEFAULT NULL,
  `no_economico` varchar(15) DEFAULT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `subMarca` varchar(35) DEFAULT NULL,
  `id_Color` int(11) DEFAULT '-1',
  `placa` varchar(20) DEFAULT NULL,
  `id_combustible` int(11) DEFAULT '-1',
  `fecha_registro` datetime DEFAULT NULL,
  `lectura_odometro` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `ban_disponible` int(1) DEFAULT '1',
  `id_pais_ubica` int(11) DEFAULT NULL,
  `id_estado_ubica` int(11) DEFAULT NULL,
  `id_ciudad_ubica` int(11) DEFAULT NULL,
  `cancel` int(2) NOT NULL DEFAULT '0',
  `id_socio` int(11) NOT NULL DEFAULT '-1',
  `id_status_bitacora` int(11) NOT NULL DEFAULT '-1',
  `motor` varchar(80) NOT NULL,
  `id_clasificacion_registro` int(11) NOT NULL DEFAULT '-1',
  `PermisoSCT` varchar(25) DEFAULT NULL,
  `NombreAseguradoraResponsabilidadCivil` varchar(80) DEFAULT NULL,
  `NombreAseguradoraMedioAmbiente` varchar(80) DEFAULT NULL,
  `NumeroPermisoSCT` varchar(25) DEFAULT NULL,
  `NumeroPolizaResponsabilidadCivil` varchar(35) DEFAULT NULL,
  `NumeroPolizaMedioAmbiente` varchar(35) DEFAULT NULL,
  `NombreAseguradoraCarga` varchar(80) DEFAULT NULL,
  `PrimaSeguro` varchar(35) DEFAULT NULL,
  `NumeroPolizaCarga` varchar(35) DEFAULT NULL,
  `TipoAutoTransporte` varchar(25) DEFAULT NULL,
  `Anio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cporte_tvehiculos`
--
ALTER TABLE `cporte_tvehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sucursal` (`id_sucursal`),
  ADD KEY `handel` (`handel`),
  ADD KEY `id_combustible` (`id_combustible`),
  ADD KEY `fk_id_status_bitacora` (`id_status_bitacora`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cporte_tvehiculos`
--
ALTER TABLE `cporte_tvehiculos`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cporte_tvehiculos`
--
ALTER TABLE `cporte_tvehiculos`
  ADD CONSTRAINT `cporte_fk_id_status_bitacora` FOREIGN KEY (`id_status_bitacora`) REFERENCES `cporte_tstatus_bitacora_viajes` (`id`),
  ADD CONSTRAINT `cporte_tvehiculos_ibfk_1` FOREIGN KEY (`id_sucursal`) REFERENCES `tsucursales` (`id`),
  ADD CONSTRAINT `cporte_tvehiculos_ibfk_2` FOREIGN KEY (`handel`) REFERENCES `tempresas` (`handel`),
  ADD CONSTRAINT `cporte_tvehiculos_ibfk_4` FOREIGN KEY (`id_combustible`) REFERENCES `cporte_ttipos_combustibles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
