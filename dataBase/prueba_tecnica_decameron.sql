-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2019 a las 23:56:41
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_tecnica_decameron`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acomodacion_hab`
--

CREATE TABLE `acomodacion_hab` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `acomodacion_hab`
--

INSERT INTO `acomodacion_hab` (`id`, `nombre`) VALUES
(1, 'Sencilla'),
(2, 'Doble'),
(3, 'Triple'),
(4, 'Cuadruple');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `acomodacion_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id`, `tipo_id`, `acomodacion_id`, `hotel_id`) VALUES
(1, 1, 1, 1),
(3, 2, 3, 1),
(4, 2, 3, 1),
(5, 2, 3, 1),
(7, 1, 1, 1),
(8, 1, 1, 1),
(9, 1, 1, 1),
(11, 3, 1, 1),
(12, 3, 1, 1),
(13, 3, 2, 1),
(14, 3, 2, 1),
(15, 3, 2, 1),
(16, 3, 2, 1),
(17, 3, 3, 1),
(18, 3, 3, 1),
(19, 3, 1, 1),
(20, 3, 1, 1),
(21, 3, 1, 1),
(22, 3, 1, 2),
(23, 3, 1, 2),
(26, 3, 1, 1),
(27, 3, 3, 1),
(28, 3, 3, 1),
(42, 1, 2, 2),
(43, 1, 2, 2),
(44, 1, 2, 2),
(45, 1, 2, 2),
(46, 1, 2, 2),
(47, 1, 2, 2),
(48, 1, 2, 2),
(49, 1, 2, 2),
(50, 1, 2, 2),
(51, 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nit` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nro_habitaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`id`, `nombre`, `ciudad`, `direccion`, `nit`, `nro_habitaciones`) VALUES
(1, 'Decameron Cartagena', 'Cartagena', 'calle 23 58-25', '12345678-9', 42),
(2, 'Decameron Bogota', 'Bogota', 'calle 105 25-48', '98765432-1', 30),
(3, 'Decameron Santander', 'Santander', 'calle 25 15-34', '14725836-9', 36);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_hab`
--

CREATE TABLE `tipo_hab` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_hab`
--

INSERT INTO `tipo_hab` (`id`, `nombre`) VALUES
(1, 'Estandar'),
(2, 'Junior'),
(3, 'Suite');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acomodacion_hab`
--
ALTER TABLE `acomodacion_hab`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_hab`
--
ALTER TABLE `tipo_hab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acomodacion_hab`
--
ALTER TABLE `acomodacion_hab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_hab`
--
ALTER TABLE `tipo_hab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
