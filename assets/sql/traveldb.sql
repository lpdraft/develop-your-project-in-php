-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 11-10-2022 a las 17:52:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

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

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `surname` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `admins`
--

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

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
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `destination`
--
ALTER TABLE `destination`
  MODIFY `id_dest` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
