-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
<<<<<<< HEAD
-- Tiempo de generación: 11-10-2022 a las 17:52:07
=======
-- Tiempo de generación: 18-10-2022 a las 16:18:12
>>>>>>> main
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
<<<<<<< HEAD
  `name` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `surname` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL
=======
  `adminName` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `adminUname` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `adminEmail` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `adminCity` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `adminPhone` int(11) NOT NULL,
  `adminPwd` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pwdRepeat` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
>>>>>>> main
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
=======
INSERT INTO `admins` (`id_admin`, `adminName`, `adminUname`, `adminEmail`, `adminCity`, `adminPhone`, `adminPwd`, `pwdRepeat`) VALUES
(4, 'lokes', 'lokk', 'lo@lo.com', 'Ferrol', 334254314, '$2y$10$qWHNwyrSPtk5rB6EjHjw3.Ta1H999J0JgyE2WYacNrtZa/30dOB36', '1234bb'),
(5, 'paus', 'pa', 'pa@pa.com', 'vigo', 56455766, '$2y$10$mO/lqynSf.usZpru/M/T2eXLYK4KwZgt3YURlcDxkBNO/./7IEPs2', '1234ff'),
(6, 'thalita', 'tha', 'tha@tha.com', 'Pelotas', 442256666, '$2y$10$3bIT52AjUIZZM8kAz3uBBeLwOZR/hKFhKQPmZoweCjF2VUO8Mm1RS', '123tt'),
(7, 'Lokesh Pereiro', 'lokesh', 'lokesh@lok.com', 'Ferrol', 2147483647, '$2y$10$XhlpSmvTGSd3AZV8qXi9LO8Stvkb14prICZyuDphadzTarZq9pQKy', '123ll');
>>>>>>> main

-- --------------------------------------------------------

--
<<<<<<< HEAD
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
=======
-- Estructura de tabla para la tabla `clients`
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
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id_client`, `name`, `surname`, `email`, `city`, `phone_number`) VALUES
(2, 'Lokesh', 'Pereiro', 'aaa@correo.com', 'Sevilla', 6675353),
(9, 'Jack', 'paus', 'ff@ff.vom', 'ibiza', 55432),
(10, 'Maria', 'Perez', 'ma@ma.com', 'new york', 556633),
(12, 'Maria Galletas', 'Perez', 'ma@ma.com', 'new york', 556633),
(15, 'Jack', 'Sparrow', 'jaaccc@jaac.com', 'Namibia', 556633),
(16, 'Pau', 'Tomas', 'pauss@pauss.com', 'Mallorca', 556633),
(17, 'Paula', 'Mar', 'pau@pau.com', 'Menorca', 556633),
(18, 'Paula', 'Zumos', 'pau@pau.com', 'Menorca', 556633);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `travel`
--

CREATE TABLE `travel` (
  `Origin` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Destination` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `departure` date NOT NULL,
  `arrival` date NOT NULL,
  `price` char(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_dest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `travel`
--

INSERT INTO `travel` (`Origin`, `Destination`, `departure`, `arrival`, `price`, `id_dest`) VALUES
('madrid', 'londres', '2022-10-17', '2022-11-23', '250', 2),
('Malaga', 'Berlin', '2022-10-12', '2022-10-22', '345', 3),
('barcelona', 'New York', '2022-10-12', '2022-10-11', '999', 4),
('Sevilla', 'Beijing', '2022-10-12', '2022-10-21', '999', 5),
('Malaga', 'San Francisco', '2022-10-10', '2022-10-15', '989€', 6),
('Sevilla', 'BCN', '2022-10-19', '2022-10-23', '50€', 10);

--
>>>>>>> main
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
<<<<<<< HEAD
-- Indices de la tabla `destination`
--
ALTER TABLE `destination`
=======
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indices de la tabla `travel`
--
ALTER TABLE `travel`
>>>>>>> main
  ADD PRIMARY KEY (`id_dest`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
<<<<<<< HEAD
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `destination`
--
ALTER TABLE `destination`
  MODIFY `id_dest` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `travel`
--
ALTER TABLE `travel`
  MODIFY `id_dest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
>>>>>>> main
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
<<<<<<< HEAD
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> main
