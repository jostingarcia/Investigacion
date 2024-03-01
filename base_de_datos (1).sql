-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2023 a las 14:42:09
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
-- Base de datos: `base_de_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoderado_alumno`
--

CREATE TABLE `apoderado_alumno` (
  `id_apoderado` bigint(20) UNSIGNED NOT NULL,
  `id_estudiante` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_admin`
--

CREATE TABLE `login_admin` (
  `ID_ADMIN` bigint(20) UNSIGNED NOT NULL,
  `L_ADMIN` varchar(255) NOT NULL,
  `L_PASS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login_admin`
--

INSERT INTO `login_admin` (`ID_ADMIN`, `L_ADMIN`, `L_PASS`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_apoderado`
--

CREATE TABLE `login_apoderado` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `l_nombre` varchar(255) NOT NULL,
  `l_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_profesor`
--

CREATE TABLE `login_profesor` (
  `ID_PROF` bigint(20) UNSIGNED NOT NULL,
  `L_NOMBRE` varchar(255) NOT NULL,
  `L_PASS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_estudiantes_materias`
--

CREATE TABLE `notas_estudiantes_materias` (
  `nota_id` bigint(20) UNSIGNED NOT NULL,
  `estu_id` bigint(20) UNSIGNED NOT NULL,
  `mat_id` bigint(20) UNSIGNED NOT NULL,
  `nota_pun` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_materia`
--

CREATE TABLE `profesor_materia` (
  `ID_PROF` bigint(20) UNSIGNED NOT NULL,
  `ID_MATERIA` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_admin`
--

CREATE TABLE `table_admin` (
  `ID_ADMIN` bigint(20) UNSIGNED NOT NULL,
  `NOMBRE_ADMIN` varchar(255) NOT NULL,
  `APE_ADMIN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `table_admin`
--

INSERT INTO `table_admin` (`ID_ADMIN`, `NOMBRE_ADMIN`, `APE_ADMIN`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_apoderado`
--

CREATE TABLE `tm_apoderado` (
  `apo_id` bigint(20) UNSIGNED NOT NULL,
  `apo_nom` varchar(255) NOT NULL,
  `apo_ape` varchar(255) NOT NULL,
  `fech_crea` date DEFAULT NULL,
  `fech_modi` date DEFAULT NULL,
  `fech_elim` date DEFAULT NULL,
  `est` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tm_apoderado`
--

INSERT INTO `tm_apoderado` (`apo_id`, `apo_nom`, `apo_ape`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(3, 'Pedro', 'Torres', '2023-07-09', '2023-07-10', NULL, 1),
(4, 'Santiago', 'Villanueva', '2023-07-09', NULL, NULL, 1),
(5, 'Zoila', 'Paulina', '2023-07-10', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_estudiante`
--

CREATE TABLE `tm_estudiante` (
  `estu_id` bigint(20) UNSIGNED NOT NULL,
  `estu_nom` varchar(255) NOT NULL,
  `estu_grup` varchar(255) NOT NULL,
  `estu_ape` varchar(50) NOT NULL,
  `fech_crea` date DEFAULT NULL,
  `fech_modi` date DEFAULT NULL,
  `fech_elim` date DEFAULT NULL,
  `est` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tm_estudiante`
--

INSERT INTO `tm_estudiante` (`estu_id`, `estu_nom`, `estu_grup`, `estu_ape`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(1, 'Ronald', '5B', 'Ricaldi', NULL, NULL, '2023-07-09', 0),
(2, 'Ronald', '5G', 'Casimiro', '2023-07-09', '2023-07-09', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_materia`
--

CREATE TABLE `tm_materia` (
  `mat_id` bigint(20) UNSIGNED NOT NULL,
  `mat_nom` varchar(255) NOT NULL,
  `fech_crea` date DEFAULT NULL,
  `fech_modi` date DEFAULT NULL,
  `fech_elim` date DEFAULT NULL,
  `est` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tm_materia`
--

INSERT INTO `tm_materia` (`mat_id`, `mat_nom`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(6, 'Algebra', '2023-07-09', '2023-07-10', '2023-07-09', 1),
(7, 'Fisica', '2023-07-09', '2023-07-09', NULL, 1),
(8, 'Quimica', '2023-07-10', NULL, NULL, 1),
(9, 'ss', '2023-07-10', NULL, '2023-07-10', 0),
(10, 'computo', '2023-07-10', NULL, NULL, 1),
(11, 'computo', '2023-07-10', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_profesor`
--

CREATE TABLE `tm_profesor` (
  `prof_id` bigint(20) UNSIGNED NOT NULL,
  `prof_nom` varchar(255) NOT NULL,
  `prof_ape` varchar(255) NOT NULL,
  `prof_sue` decimal(9,2) NOT NULL,
  `fech_crea` date DEFAULT NULL,
  `fech_modi` date DEFAULT NULL,
  `fech_elim` date DEFAULT NULL,
  `est` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tm_profesor`
--

INSERT INTO `tm_profesor` (`prof_id`, `prof_nom`, `prof_ape`, `prof_sue`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(4, 'Ronald', 'Hancco', 4000.00, '2023-07-09', '2023-07-10', NULL, 1),
(5, 'Ramiro', 'Torres', 4000.00, '2023-07-09', NULL, NULL, 1),
(6, 'Santiago', 'Villanueva', 5000.00, '2023-07-09', NULL, NULL, 1),
(7, 'Elias', 'Torres', 4000.00, '2023-07-09', NULL, NULL, 1),
(8, 'Jenny', 'Yapo', 4000.00, '2023-07-09', NULL, NULL, 1),
(9, 'Jose', 'Yapo', 5000.00, '2023-07-09', NULL, NULL, 1),
(10, 'Emily', 'Ricaldi', 7000.00, '2023-07-09', NULL, NULL, 1),
(11, 'Fredy', 'Pala', 5000.00, '2023-07-09', NULL, NULL, 1),
(12, 'Abigail', 'Ricaldi', 7000.00, '2023-07-09', '2023-07-09', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apoderado_alumno`
--
ALTER TABLE `apoderado_alumno`
  ADD KEY `id_apoderado` (`id_apoderado`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indices de la tabla `login_apoderado`
--
ALTER TABLE `login_apoderado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_profesor`
--
ALTER TABLE `login_profesor`
  ADD PRIMARY KEY (`ID_PROF`);

--
-- Indices de la tabla `notas_estudiantes_materias`
--
ALTER TABLE `notas_estudiantes_materias`
  ADD PRIMARY KEY (`nota_id`),
  ADD KEY `id_estudiante` (`estu_id`),
  ADD KEY `id_materia` (`mat_id`);

--
-- Indices de la tabla `profesor_materia`
--
ALTER TABLE `profesor_materia`
  ADD KEY `ID_PROF` (`ID_PROF`),
  ADD KEY `ID_MATERIA` (`ID_MATERIA`);

--
-- Indices de la tabla `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indices de la tabla `tm_apoderado`
--
ALTER TABLE `tm_apoderado`
  ADD PRIMARY KEY (`apo_id`);

--
-- Indices de la tabla `tm_estudiante`
--
ALTER TABLE `tm_estudiante`
  ADD PRIMARY KEY (`estu_id`);

--
-- Indices de la tabla `tm_materia`
--
ALTER TABLE `tm_materia`
  ADD PRIMARY KEY (`mat_id`);

--
-- Indices de la tabla `tm_profesor`
--
ALTER TABLE `tm_profesor`
  ADD PRIMARY KEY (`prof_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `notas_estudiantes_materias`
--
ALTER TABLE `notas_estudiantes_materias`
  MODIFY `nota_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `ID_ADMIN` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tm_apoderado`
--
ALTER TABLE `tm_apoderado`
  MODIFY `apo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tm_estudiante`
--
ALTER TABLE `tm_estudiante`
  MODIFY `estu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tm_materia`
--
ALTER TABLE `tm_materia`
  MODIFY `mat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tm_profesor`
--
ALTER TABLE `tm_profesor`
  MODIFY `prof_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apoderado_alumno`
--
ALTER TABLE `apoderado_alumno`
  ADD CONSTRAINT `apoderado_alumno_ibfk_1` FOREIGN KEY (`id_apoderado`) REFERENCES `tm_apoderado` (`apo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apoderado_alumno_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `tm_estudiante` (`estu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login_admin`
--
ALTER TABLE `login_admin`
  ADD CONSTRAINT `login_admin_ibfk_1` FOREIGN KEY (`ID_ADMIN`) REFERENCES `table_admin` (`ID_ADMIN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login_apoderado`
--
ALTER TABLE `login_apoderado`
  ADD CONSTRAINT `login_apoderado_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tm_apoderado` (`apo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login_profesor`
--
ALTER TABLE `login_profesor`
  ADD CONSTRAINT `login_profesor_ibfk_1` FOREIGN KEY (`ID_PROF`) REFERENCES `tm_profesor` (`prof_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notas_estudiantes_materias`
--
ALTER TABLE `notas_estudiantes_materias`
  ADD CONSTRAINT `notas_estudiantes_materias_ibfk_1` FOREIGN KEY (`estu_id`) REFERENCES `tm_estudiante` (`estu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_estudiantes_materias_ibfk_2` FOREIGN KEY (`mat_id`) REFERENCES `tm_materia` (`mat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor_materia`
--
ALTER TABLE `profesor_materia`
  ADD CONSTRAINT `profesor_materia_ibfk_1` FOREIGN KEY (`ID_PROF`) REFERENCES `tm_profesor` (`prof_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profesor_materia_ibfk_2` FOREIGN KEY (`ID_MATERIA`) REFERENCES `tm_materia` (`mat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
