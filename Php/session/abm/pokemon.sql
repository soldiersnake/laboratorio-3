-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2023 a las 05:07:17
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
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `ataque_principal` varchar(30) DEFAULT NULL,
  `debilidad` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `nombre`, `tipo`, `ataque_principal`, `debilidad`) VALUES
(1, 'Bulbasaur', 'Planta', 'Placaje', 'Fuego'),
(2, 'Ivysaur', 'Planta', 'Hoja Afilada', 'Fuego'),
(3, 'Venusaur', 'Planta', 'Látigo Cepa', 'Fuego'),
(4, 'Charmander', 'Fuego', 'Llama', 'Agua'),
(5, 'Charmeleon', 'Fuego', 'Ascuas', 'Agua'),
(6, 'Charizard', 'Fuego', 'Lanzallamas', 'Agua'),
(7, 'Squirtle', 'Agua', 'Burbuja', 'Planta'),
(8, 'Wartortle', 'Agua', 'Acua Cola', 'Planta'),
(9, 'Blastoise', 'Agua', 'Hidrobomba', 'Planta'),
(10, 'Caterpie', 'Bicho', 'Placaje', 'Fuego'),
(11, 'Metapod', 'Bicho', 'Duro Ataque', 'Fuego'),
(12, 'Butterfree', 'Bicho', 'Confusión', 'Eléctrico'),
(13, 'Weedle', 'Bicho', 'Picadura', 'Fuego'),
(14, 'Kakuna', 'Bicho', 'Doblebofetón', 'Fuego'),
(15, 'Beedrill', 'Bicho', 'Ataque Furia', 'Fuego'),
(16, 'Pidgey', 'Normal/Volador', 'Tornado', 'Eléctrico'),
(17, 'Pidgeotto', 'Normal/Volador', 'Ataque Ala', 'Eléctrico'),
(18, 'Pidgeot', 'Normal/Volador', 'Vendaval', 'Eléctrico'),
(19, 'Rattata', 'Normal', 'Ataque Rápido', 'Lucha'),
(20, 'Raticate', 'Normal', 'Hipercolmillo', 'Lucha'),
(21, 'Spearow', 'Normal/Volador', 'Picotazo', 'Eléctrico'),
(22, 'Fearow', 'Normal/Volador', 'Ataque Aéreo', 'Eléctrico'),
(23, 'Ekans', 'Veneno', 'Mordisco', 'Psíquico'),
(24, 'Arbok', 'Veneno', 'Carga Tóxica', 'Psíquico'),
(25, 'Pikachu', 'Eléctrico', 'Impactrueno', 'Tierra'),
(26, 'Raichu', 'Eléctrico', 'Electrocañón', 'Tierra'),
(27, 'Sandshrew', 'Tierra', 'Raspado', 'Agua'),
(28, 'Sandslash', 'Tierra', 'Excavar', 'Agua'),
(29, 'Nidoran F', 'Veneno', 'Picotazo Veneno', 'Psíquico'),
(30, 'Nidorina', 'Veneno', 'Bofetón Lodo', 'Psíquico'),
(31, 'Nidoqueen', 'Veneno/Tierra', 'Terremoto', 'Agua'),
(32, 'Nidoran M', 'Veneno', 'Picotazo Veneno', 'Psíquico'),
(33, 'Nidorino', 'Veneno', 'Doble Patada', 'Psíquico'),
(34, 'Nidoking', 'Veneno/Tierra', 'Megacuerno', 'Agua'),
(35, 'Clefairy', 'Hada', 'Canto', 'Acero'),
(36, 'Clefable', 'Hada', 'Brillo Mágico', 'Acero'),
(37, 'Vulpix', 'Fuego', 'Llama Embravecida', 'Agua'),
(38, 'Ninetales', 'Fuego', 'Pulso Ígneo', 'Agua'),
(39, 'Jigglypuff', 'Normal/Hada', 'Dulce Voz', 'Acero'),
(40, 'Wigglytuff', 'Normal/Hada', 'Hiperrayo', 'Acero'),
(41, 'Zubat', 'Veneno/Volador', 'Ataque Ala', 'Eléctrico'),
(42, 'Golbat', 'Veneno/Volador', 'Ataque Aéreo', 'Eléctrico'),
(43, 'Oddish', 'Planta/Veneno', 'Placaje', 'Fuego'),
(44, 'Gloom', 'Planta/Veneno', 'Absorber', 'Fuego'),
(45, 'Vileplume', 'Planta/Veneno', 'Polvo Veneno', 'Fuego'),
(46, 'Paras', 'Bicho/Planta', 'Arañazo', 'Fuego'),
(47, 'Parasect', 'Bicho/Planta', 'Megagolpe', 'Fuego'),
(48, 'Venonat', 'Bicho/Veneno', 'Confusión', 'Fuego'),
(49, 'Venomoth', 'Bicho/Veneno', 'Polvo Veneno', 'Fuego');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
