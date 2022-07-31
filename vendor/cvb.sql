-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2022 a las 03:37:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cvb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s1`
--

CREATE TABLE `s1` (
  `s1_id` int(11) NOT NULL,
  `s1_name` varchar(50) NOT NULL,
  `s1_email` varchar(50) NOT NULL,
  `s1_phone` varchar(20) NOT NULL,
  `s1_city` varchar(20) NOT NULL,
  `s4_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s2`
--

CREATE TABLE `s2` (
  `s2_id` int(11) NOT NULL,
  `estudio1_display` varchar(15) NOT NULL,
  `s2_year` varchar(5) NOT NULL,
  `s2_year_end` varchar(5) NOT NULL,
  `s2_title` varchar(50) NOT NULL,
  `s2_place` varchar(50) NOT NULL,
  `s2_studytype` varchar(50) NOT NULL,
  `s2_description` varchar(150) NOT NULL,
  `estudio2_display` varchar(15) NOT NULL,
  `s2_year_b` varchar(5) NOT NULL,
  `s2_year_end_b` varchar(5) NOT NULL,
  `s2_title_b` varchar(50) NOT NULL,
  `s2_place_b` varchar(50) NOT NULL,
  `s2_studytype_b` varchar(50) NOT NULL,
  `s2_description_b` varchar(150) NOT NULL,
  `estudio3_display` varchar(15) NOT NULL,
  `s2_year_c` varchar(5) NOT NULL,
  `s2_year_end_c` varchar(5) NOT NULL,
  `s2_title_c` varchar(50) NOT NULL,
  `s2_place_c` varchar(50) NOT NULL,
  `s2_studytype_c` varchar(50) NOT NULL,
  `s2_description_c` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s3`
--

CREATE TABLE `s3` (
  `s3_id` int(11) NOT NULL,
  `trabajo1_display` varchar(15) NOT NULL,
  `s3_year_a` varchar(5) NOT NULL,
  `s3_year_end_a` varchar(5) NOT NULL,
  `s3_position_a` varchar(50) NOT NULL,
  `s3_place_a` varchar(50) NOT NULL,
  `s3_tasks_a` varchar(150) NOT NULL,
  `trabajo2_display` varchar(15) NOT NULL,
  `s3_year_b` varchar(5) NOT NULL,
  `s3_year_end_b` varchar(5) NOT NULL,
  `s3_position_b` varchar(50) NOT NULL,
  `s3_place_b` varchar(50) NOT NULL,
  `s3_tasks_b` varchar(150) NOT NULL,
  `trabajo3_display` varchar(15) NOT NULL,
  `s3_year_c` varchar(5) NOT NULL,
  `s3_year_end_c` varchar(5) NOT NULL,
  `s3_position_c` varchar(50) NOT NULL,
  `s3_place_c` varchar(50) NOT NULL,
  `s3_tasks_c` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s4`
--

CREATE TABLE `s4` (
  `s4_id` int(11) NOT NULL,
  `curso1_display` varchar(15) NOT NULL,
  `s4_time` varchar(5) NOT NULL,
  `s4_name` varchar(50) NOT NULL,
  `s4_place` varchar(50) NOT NULL,
  `s4_description` varchar(150) NOT NULL,
  `curso2_display` varchar(15) NOT NULL,
  `s4_time_b` varchar(5) NOT NULL,
  `s4_name_b` varchar(50) NOT NULL,
  `s4_place_b` varchar(50) NOT NULL,
  `s4_description_b` varchar(150) NOT NULL,
  `curso3_display` varchar(15) NOT NULL,
  `s4_time_c` varchar(5) NOT NULL,
  `s4_name_c` varchar(50) NOT NULL,
  `s4_place_c` varchar(50) NOT NULL,
  `s4_description_c` varchar(150) NOT NULL,
  `curso4_display` varchar(15) NOT NULL,
  `s4_time_d` varchar(5) NOT NULL,
  `s4_name_d` varchar(50) NOT NULL,
  `s4_place_d` varchar(50) NOT NULL,
  `s4_description_d` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'no_image.jpg',
  `active` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `s1`
--
ALTER TABLE `s1`
  ADD PRIMARY KEY (`s1_id`);

--
-- Indices de la tabla `s2`
--
ALTER TABLE `s2`
  ADD PRIMARY KEY (`s2_id`);

--
-- Indices de la tabla `s3`
--
ALTER TABLE `s3`
  ADD PRIMARY KEY (`s3_id`);

--
-- Indices de la tabla `s4`
--
ALTER TABLE `s4`
  ADD PRIMARY KEY (`s4_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `s1`
--
ALTER TABLE `s1`
  MODIFY `s1_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `s2`
--
ALTER TABLE `s2`
  MODIFY `s2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `s3`
--
ALTER TABLE `s3`
  MODIFY `s3_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `s4`
--
ALTER TABLE `s4`
  MODIFY `s4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
