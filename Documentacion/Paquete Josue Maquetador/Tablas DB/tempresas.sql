-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2021 a las 23:03:00
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
-- Estructura de tabla para la tabla `tempresas`
--

CREATE TABLE `tempresas` (
  `id` smallint(6) NOT NULL,
  `handel` tinyint(4) NOT NULL,
  `rfc` varchar(20) NOT NULL,
  `razon_social` varchar(150) NOT NULL,
  `fisicao_moral` varchar(10) NOT NULL,
  `calle` varchar(200) NOT NULL,
  `num_exterior` varchar(19) NOT NULL,
  `num_interior` varchar(19) DEFAULT NULL,
  `colonia` varchar(39) NOT NULL,
  `localidad` varchar(60) DEFAULT NULL,
  `referencia` varchar(200) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `id_pais` smallint(6) NOT NULL,
  `id_estado` smallint(6) NOT NULL,
  `cod_pos` varchar(10) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `email_altern` varchar(80) DEFAULT NULL,
  `contrasenia_clave_privada` varchar(40) DEFAULT NULL,
  `num_aprobacion` varchar(15) NOT NULL,
  `num_certificado` varchar(40) NOT NULL,
  `num_serie` varchar(5) NOT NULL,
  `registroPatronal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tempresas`
--

INSERT INTO `tempresas` (`id`, `handel`, `rfc`, `razon_social`, `fisicao_moral`, `calle`, `num_exterior`, `num_interior`, `colonia`, `localidad`, `referencia`, `municipio`, `id_pais`, `id_estado`, `cod_pos`, `fax`, `email`, `email_altern`, `contrasenia_clave_privada`, `num_aprobacion`, `num_certificado`, `num_serie`, `registroPatronal`) VALUES
(60, 16, 'EKU9003173C9', 'SÍSTEM GRÉY S.A DE C.V.', 'MORAL', 'FELICIANO NOEL', '5', '', 'CENTRO', 'TLACOTALPAN', '', 'VERACRUZ', 1, 30, '95460', '', 'masterdinner2013@gmail.com', NULL, '12345678a', '11254', '30001000000400002434', 'a', '');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tempresas`
--
ALTER TABLE `tempresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `handel` (`handel`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tempresas`
--
ALTER TABLE `tempresas`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
