-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2019 a las 03:03:59
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_control_trayectoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `numControl` int(9) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `primerAp` varchar(30) NOT NULL,
  `segundoAp` varchar(30) NOT NULL,
  `edad` int(2) NOT NULL,
  `semestre` int(2) NOT NULL,
  `carrera` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`numControl`, `Nombre`, `primerAp`, `segundoAp`, `edad`, `semestre`, `carrera`) VALUES
(15070123, 'Juan Antonio', 'Perez', 'Morales', 20, 2, 'IngenierÃ­a en Sistemas Computacionales'),
(15070129, 'Mario', 'Quintana', 'Flores', 22, 9, 'Licenciatura en administraciÃ³n'),
(15070130, 'Juan Antonio', 'Perez', 'Morales', 22, 1, 'IngenierÃ­a en Sistemas Computacionales'),
(15070136, 'Luis', 'De la Rosa', 'Morales', 22, 4, 'IngenierÃ­a en Industrias Alimentarias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_alumnos_tutores`
--

CREATE TABLE `gestion_alumnos_tutores` (
  `id_alumno` int(9) NOT NULL,
  `id_tutor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `NombreCompleto` varchar(60) NOT NULL,
  `NombreUsuario` varchar(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contrasena` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `NombreCompleto`, `NombreUsuario`, `Correo`, `Contrasena`, `created_at`) VALUES
(1, 'ITSJ', 'Bryan Enrique Caldera ', 'enrrique1642@hotmail.com', '1234', '2019-11-05 11:57:19'),
(2, 'JuanISC', 'Juan Antonio Sanchez', 'juan@gmail.com', '12345', '2019-11-06 15:36:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `clave_tutor` varchar(20) NOT NULL,
  `nombreTutor` varchar(20) NOT NULL,
  `primerApTutor` varchar(20) NOT NULL,
  `segundoApTutor` varchar(20) NOT NULL,
  `gradoAcademico` varchar(60) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`clave_tutor`, `nombreTutor`, `primerApTutor`, `segundoApTutor`, `gradoAcademico`, `telefono`) VALUES
('ISC-2010-10', 'Manuel', 'Larez', 'Dominguez', 'Perez', 123245),
('ISC-2010-12', 'Luis', 'Medina', 'Fuentes', 'M.C.E', 2147483647),
('ISC-2010-13', 'Reynaldo', 'Arellano', 'Ruiz', 'I.S.C', 2147483647),
('ISC-2010-14', 'Manuel', 'De la rosa', 'De la cruz', 'M.G.T', 2147483647),
('ISC-2010-9', ' Salvador', 'Acevedo', 'Sandoval', 'M.T.I', 455256234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numControl`);

--
-- Indices de la tabla `gestion_alumnos_tutores`
--
ALTER TABLE `gestion_alumnos_tutores`
  ADD PRIMARY KEY (`id_alumno`,`id_tutor`),
  ADD KEY `id_tutor` (`id_tutor`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`clave_tutor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gestion_alumnos_tutores`
--
ALTER TABLE `gestion_alumnos_tutores`
  ADD CONSTRAINT `gestion_alumnos_tutores_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`numControl`),
  ADD CONSTRAINT `gestion_alumnos_tutores_ibfk_2` FOREIGN KEY (`id_tutor`) REFERENCES `tutores` (`clave_tutor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
