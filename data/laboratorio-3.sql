-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2023 a las 02:34:18
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
-- Base de datos: `laboratorio-3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `description` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `description`) VALUES
(1, 'Ford'),
(2, 'Fiat'),
(3, 'Porsche'),
(4, 'Volkswagen'),
(5, 'Renault'),
(6, 'Citroen'),
(7, 'Honda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `marca_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `description`, `precio`, `color`, `modelo`, `marca_id`) VALUES
(1, 'Fiesta', '15000.00', 'Rojo', '2022', 1),
(2, 'Focus', '20000.00', 'Azul', '2022', 1),
(3, 'Mustang', '50000.00', 'Negro', '2022', 1),
(4, 'Ranger', '25000.00', 'Blanco', '2022', 1),
(5, 'Explorer', '40000.00', 'Gris', '2022', 1),
(6, '500', '18000.00', 'Verde', '2022', 2),
(7, 'Punto', '22000.00', 'Blanco', '2022', 2),
(8, 'Tipo', '25000.00', 'Gris', '2022', 2),
(9, 'Doblò', '27000.00', 'Azul', '2022', 2),
(10, '500X', '30000.00', 'Negro', '2022', 2),
(11, '911', '90000.00', 'Rojo', '2022', 3),
(12, 'Panamera', '120000.00', 'Gris', '2022', 3),
(13, 'Cayenne', '100000.00', 'Negro', '2022', 3),
(14, 'Macan', '80000.00', 'Blanco', '2022', 3),
(15, 'Taycan', '110000.00', 'Azul', '2022', 3),
(16, 'Golf', '25000.00', 'Azul', '2022', 4),
(17, 'Polo', '20000.00', 'Blanco', '2022', 4),
(18, 'Passat', '30000.00', 'Gris', '2022', 4),
(19, 'Tiguan', '35000.00', 'Negro', '2022', 4),
(20, 'Arteon', '40000.00', 'Rojo', '2022', 4),
(21, 'Clio', '18000.00', 'Negro', '2022', 5),
(22, 'Megane', '22000.00', 'Blanco', '2022', 5),
(23, 'Captur', '25000.00', 'Rojo', '2022', 5),
(24, 'Kadjar', '27000.00', 'Gris', '2022', 5),
(25, 'Talisman', '30000.00', 'Azul', '2022', 5),
(26, 'C3', '16000.00', 'Rojo', '2022', 6),
(27, 'C4', '20000.00', 'Gris', '2022', 6),
(28, 'C5', '25000.00', 'Blanco', '2022', 6),
(29, 'Berlingo', '22000.00', 'Azul', '2022', 6),
(30, 'Cactus', '18000.00', 'Negro', '2022', 6),
(31, 'Civic', '22000.00', 'Negro', '2022', 7),
(32, 'Accord', '28000.00', 'Blanco', '2022', 7),
(33, 'CR-V', '32000.00', 'Gris', '2022', 7),
(34, 'HR-V', '25000.00', 'Rojo', '2022', 7),
(35, 'Jazz', '20000.00', 'Azul', '2022', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marca_id` (`marca_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
