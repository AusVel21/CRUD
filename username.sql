-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2024 a las 20:34:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `username`
--

CREATE TABLE `username` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo_electronico` varchar(255) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `username`
--

INSERT INTO `username` (`id`, `nombre`, `direccion`, `telefono`, `correo_electronico`, `estado`, `password`) VALUES
(2, 'Agatha Rosalía maldonado', 'quetzaltenango', '2543523544', 'agaR@gmail.com', '0', NULL),
(3, 'evelyn morales canil', 'Quetzaltenango', '63545432', 'evy@gmail.com', '0', NULL),
(30, 'Francisco Tiriquiz', 'Quiche', '4524354', 'fran@gmail.com', '1', '$2y$10$yTRQMmgn/39.Ns5J.LxwW.bK1szZ8.mCBeN6uID3IPoCHegGCiK52'),
(31, 'Merlina Álvarez', 'Guatemala', '54557542', 'mer@gmail.com', '0', '$2y$10$3YznE7maERlQzcICx05sEeEqRMgCTBwlryQRXWaNR0JA6BOtE3YM2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
