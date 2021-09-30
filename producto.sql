-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2021 a las 23:47:58
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pandequesos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) NOT NULL,
  `nombreProducto` varchar(30) NOT NULL,
  `precio` decimal(50,0) NOT NULL,
  `tipoProducto` varchar(50) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `precio`, `tipoProducto`, `imagen`) VALUES
(8, 'Pandequeso Santa rosa', '6000', 'Pan', 'PanDqueso.jpg'),
(9, 'Pandeyuca Santa Rosa', '8000', 'Pan de Yuca', 'PanDyuca.jpg'),
(10, 'Pancañon Santa rosa', '7000', 'Pan Cañon', 'Pancañon.jpg'),
(11, 'Pan Casero', '3500', 'Pan Casero', 'PanCasero.jpg'),
(12, 'Pan de Uva', '2500', 'Pan de Uva', 'PandeUva.jpg'),
(13, 'Pan Frances', '5000', 'Pan', 'PanFrances.jpg'),
(14, 'Pastel de 3 Leches', '45000', 'Pastel', 'Pastel3leches.jpg'),
(15, 'Pastel de Fresa', '35000', 'Pastel', 'PastelFresa.jpg'),
(16, 'Pastel de chocolate', '45000', 'Pastel', 'PastelChocolate.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
