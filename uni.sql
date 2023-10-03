-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2023 a las 22:16:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `clases_registradas` varchar(150) NOT NULL,
  `apellidos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `clases_registradas`, `apellidos`) VALUES
(1, 'Juan', 'Matemáticas', 'poso'),
(2, 'José', 'Lenguaje', 'Palomino'),
(3, 'Angel Gabriel', 'Matemáticas, Programación', 'Tenor'),
(4, 'pepe', 'Mate5144', 'mendez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_clases`
--

CREATE TABLE `alumnos_clases` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos_clases`
--

INSERT INTO `alumnos_clases` (`id`, `id_alumno`, `id_clase`) VALUES
(4, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `nombre`) VALUES
(1, 'Matemáticas'),
(2, 'Lenguaje'),
(3, 'Astronomia ii'),
(4, 'Programación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `clases_asignadas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id`, `nombre`, `clases_asignadas`) VALUES
(1, 'Hernesto murillas', 'Matemáticas'),
(2, 'Juan segundo', 'Química'),
(3, 'Hulk incredible', 'Astronomia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros_cursos`
--

CREATE TABLE `maestros_cursos` (
  `id` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maestros_cursos`
--

INSERT INTO `maestros_cursos` (`id`, `id_maestro`, `id_curso`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `rol`, `username`, `contrasena`) VALUES
(52, 'Armando rodriguez', 'Administrador', 'admin@admin', '$2y$10$4jEjn4XAOfT.42bIBHuBm.GKtUYdjI4lCN1DaiNiGzOzT/QpoUPVy'),
(53, 'Eugenio Gamarra', 'Maestro', 'maestro@maestro', '$2y$10$/0ELg7k2Ram/p.xkEPQQD.JNp2XwxuluJjatUQ1EeNGeG5vk3Pa7.'),
(54, 'Efrain lopez', 'Alumno', 'alumno@alumno', '$2y$10$akz2Gg9xm19Dvhjo36vfNeUiw9SWqHU/owA/EFthgXveNxWhmO0sC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumnos_clases`
--
ALTER TABLE `alumnos_clases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_clase` (`id_clase`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maestros_cursos`
--
ALTER TABLE `maestros_cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_maestro` (`id_maestro`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `alumnos_clases`
--
ALTER TABLE `alumnos_clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `maestros_cursos`
--
ALTER TABLE `maestros_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos_clases`
--
ALTER TABLE `alumnos_clases`
  ADD CONSTRAINT `alumnos_clases_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `alumnos_clases_ibfk_2` FOREIGN KEY (`id_clase`) REFERENCES `clases` (`id`);

--
-- Filtros para la tabla `maestros_cursos`
--
ALTER TABLE `maestros_cursos`
  ADD CONSTRAINT `maestros_cursos_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id`),
  ADD CONSTRAINT `maestros_cursos_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `clases` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
