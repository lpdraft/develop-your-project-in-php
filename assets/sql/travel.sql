-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-10-2022 a las 10:34:10
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.34

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
-- Estructura de tabla para la tabla `travel`
--

CREATE TABLE `travel` (
  `Origin` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Destination` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `entrance` date NOT NULL,
  `departure` date NOT NULL,
  `price` int(20) NOT NULL,
  `id_dest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `travel`
--

INSERT INTO `travel` (`Origin`, `Destination`, `entrance`, `departure`, `price`, `id_dest`) VALUES
('barcelona', 'egipto', '2022-10-15', '2022-10-22', 989, 1),
('madrid', 'londres', '2022-10-17', '2022-11-23', 250, 2),
('Malaga', 'Berlin', '2022-10-12', '2022-10-22', 345, 3),
('barcelona', 'New York', '2022-10-12', '2022-10-11', 999, 4),
('Sevilla', 'Beijing', '2022-10-12', '2022-10-21', 999, 5),
('Malaga', 'San Francisco', '2022-10-10', '2022-10-15', 989, 6),
('Malaga', 'Copenhague', '2022-10-18', '2022-10-10', 345, 7),
('Sevilla', 'Barcelona', '2022-10-11', '2022-10-14', 345, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id_dest`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `travel`
--
ALTER TABLE `travel`
  MODIFY `id_dest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
