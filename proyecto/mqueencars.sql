-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2021 a las 21:32:46
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mqueencars`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mqueencars`
--

CREATE TABLE `mqueencars` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `marca_coche` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `numero_de_competidor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mqueencars`
--

INSERT INTO `mqueencars` (`id`, `nombre`, `apellido`, `edad`, `categoria`, `marca_coche`, `modelo`, `numero_de_competidor`) VALUES
(0, 'Alejandra', 'Luna', 20, '44', 'Ducati', '407', '64');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mqueencars`
--
ALTER TABLE `mqueencars`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
