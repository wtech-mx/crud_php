-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2021 a las 23:03:10
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
-- Estructura de tabla para la tabla `tsucursales`
--

CREATE TABLE `tsucursales` (
  `id` smallint(6) NOT NULL,
  `handel` tinyint(4) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `serieen_uso` varchar(5) NOT NULL,
  `folio_actual` int(11) NOT NULL,
  `pos_decimales` tinyint(4) NOT NULL,
  `folio_actual_nota_c` int(11) NOT NULL DEFAULT '100' COMMENT 'Folio actual de la nota de credito',
  `serieen_uso_nota_c` varchar(10) NOT NULL DEFAULT 'NC' COMMENT 'Serie de las notas de credito',
  `folio_actual_re` int(11) NOT NULL DEFAULT '100' COMMENT 'Folio del recibo electrónico de pago o complemento de pago',
  `serieen_uso_re` varchar(10) NOT NULL DEFAULT 'PA' COMMENT 'Serie del recibo electrónico de pago',
  `config_gral` varchar(1000) NOT NULL DEFAULT '{"tam_log":"100","alig_log":"center","color_1":"#8DE2FF","color_2":"#0099cb"}'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tsucursales`
--

INSERT INTO `tsucursales` (`id`, `handel`, `nombre`, `serieen_uso`, `folio_actual`, `pos_decimales`, `folio_actual_nota_c`, `serieen_uso_nota_c`, `folio_actual_re`, `serieen_uso_re`, `config_gral`) VALUES
(114, 16, 'PRINCIPAL', 'A', 252, 2, 4, 'NC', 113, 'PA', '{\"tam_log\":\"60\",\"alig_log\":\"center\",\"color_1\":\"#e1b684\",\"color_2\":\"#f5a824\"}');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tsucursales`
--
ALTER TABLE `tsucursales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `handel` (`handel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tsucursales`
--
ALTER TABLE `tsucursales`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
