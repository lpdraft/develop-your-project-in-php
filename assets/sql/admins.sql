-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Servidor: localhost:3307
-- Tiempo de generación: 11-10-2022 a las 17:52:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6
=======
-- Servidor: localhost
-- Tiempo de generación: 14-10-2022 a las 12:31:08
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.34
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `traveldb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `surname` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `admins`
--

<<<<<<< HEAD
INSERT INTO `admins` (`id_admin`, `name`, `surname`, `username`, `email`, `city`, `phone_number`, `password`) VALUES
(1, 'lokes', 'pere', 'lokks', 'lok@lok.com', 'ferr', 5566335, '224db'),
(2, 'Lokesh', 'Pereiro', 'lokks', 'aaa@correo.com', 'Ferrol', 6675353, '123'),
(9, 'Jack', 'paus', 'ff', 'ff@ff.vom', 'ibiza', 55432, '3333'),
(10, 'Jack', 'paus', 'ff', 'ff@ff.vom', 'ibiza', 55432, '3333'),
(11, 'Jack', 'paus', 'ff', 'ff@ff.vom', 'ibiza', 55432, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destination`
--

CREATE TABLE `destination` (
  `id_dest` int(11) NOT NULL,
  `origin` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `destination` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `entrance` date NOT NULL,
  `departure` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
=======
INSERT INTO `clients` (`id_client`, `name`, `surname`, `email`, `city`, `phone_number`) VALUES
(2, 'Lokesh', 'Pereiro', 'aaa@correo.com', 'Sevilla', 6675353),
(9, 'Jack', 'paus', 'ff@ff.vom', 'ibiza', 55432);
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indices de la tabla `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id_dest`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
<<<<<<< HEAD
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `destination`
--
ALTER TABLE `destination`
  MODIFY `id_dest` int(11) NOT NULL AUTO_INCREMENT;
=======
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;