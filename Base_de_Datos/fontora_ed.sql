-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2025 a las 01:07:38
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
-- Base de datos: `fontora_ed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Admin', 'Principal', 'admin', 'admin@admin.com', '$2y$10$tmDI1WMXflFsoHJk9XCnW./PlLqpWtOjyY8VNsKrBQ0kAXKFX6SZu', 1, 'NO'),
(2, 'Edu', 'Fontora', 'edu22', 'eduar@correo.com', '$2y$10$b7HeG4oXtkv4xgZylSHMjOi8XSunSFEk1acule.iM32BYH/bSUZ5O', 0, ''),
(4, 'Facundo', 'Gomez', 'facu12', 'facugo@correo.com', '$2y$10$2NeBGnqbJSkJfoJpxuLmmuQ8rqlKOfxJumRdYBut.wkPrL4GagPdu', 2, 'NO'),
(5, 'Ramon', 'Valdez', 'ramonval12', 'ramon@correo.com', '$2y$10$DBCmvfZElCToN/5IwYZYEORkN7Ns2ZD1DFwZUTwLHrVvN.0APRM4y', 2, 'NO'),
(7, 'Franco', 'Mastantuono', 'mastan123', 'francocarp@river.com', '$2y$10$7cN7gQvDpmsJ.l3bMcSg0eJP8hXI2vV3Gwqb3vw39f53jSTLH3qR6', 2, 'NO'),
(8, 'Gonzalo', 'Montiel', 'gonzamonti', 'somostodosmontiel@river.com', '$2y$10$HjOhb1rISuhuSvKU3H8hm.EVaWgckR/9JLncCxyFa4kfM0yUOlIUS', 2, 'NO'),
(9, 'Alvaro', 'Montoro', 'alvarobota123', 'alvaromontoro@botafogo.com', '$2y$10$v.Q1lRjPxMKyNh6RWeRa0eWEJivw9rpNP3YnsFZrN/R0ijRHKbJqS', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
