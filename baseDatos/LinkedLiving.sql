-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2019 a las 06:29:28
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `LinkedLiving`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Acuerdos`
--

CREATE TABLE `Acuerdos` (
  `IdAcuerdo` int(4) NOT NULL,
  `IdArrendatario` int(4) NOT NULL,
  `IdEstudiante` int(4) NOT NULL,
  `IdUniversidad` int(4) NOT NULL,
  `Volante` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Administradores`
--

CREATE TABLE `Administradores` (
  `IdAdmin` int(4) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` int(20) NOT NULL,
  `E-mail` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Arredantarios`
--

CREATE TABLE `Arredantarios` (
  `IdArrendatario` int(4) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` int(20) NOT NULL,
  `E-mail` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estudiante`
--

CREATE TABLE `Estudiante` (
  `IdEstudiante` int(4) NOT NULL,
  `Universidad` int(4) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` int(20) NOT NULL,
  `E-mail` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Habitaciones`
--

CREATE TABLE `Habitaciones` (
  `IdHabitacion` int(4) NOT NULL,
  `Hospedaje` int(4) NOT NULL,
  `NumberRoom` int(4) NOT NULL,
  `Foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Hospedajes`
--

CREATE TABLE `Hospedajes` (
  `IdHospedaje` int(4) NOT NULL,
  `Arrendatario` int(4) NOT NULL,
  `Location` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Locations`
--

CREATE TABLE `Locations` (
  `IdLocation` int(4) NOT NULL,
  `Sector` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Universidades`
--

CREATE TABLE `Universidades` (
  `IdUniversidad` int(4) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Location` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `NoContacto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Volantes`
--

CREATE TABLE `Volantes` (
  `IdVolante` int(4) NOT NULL,
  `TipoAcuerdo` int(20) NOT NULL,
  `Valor` int(40) NOT NULL,
  `Pago` int(40) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Acuerdos`
--
ALTER TABLE `Acuerdos`
  ADD PRIMARY KEY (`IdAcuerdo`);

--
-- Indices de la tabla `Administradores`
--
ALTER TABLE `Administradores`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indices de la tabla `Arredantarios`
--
ALTER TABLE `Arredantarios`
  ADD PRIMARY KEY (`IdArrendatario`);

--
-- Indices de la tabla `Estudiante`
--
ALTER TABLE `Estudiante`
  ADD PRIMARY KEY (`IdEstudiante`);

--
-- Indices de la tabla `Habitaciones`
--
ALTER TABLE `Habitaciones`
  ADD PRIMARY KEY (`IdHabitacion`);

--
-- Indices de la tabla `Hospedajes`
--
ALTER TABLE `Hospedajes`
  ADD PRIMARY KEY (`IdHospedaje`);

--
-- Indices de la tabla `Locations`
--
ALTER TABLE `Locations`
  ADD PRIMARY KEY (`IdLocation`);

--
-- Indices de la tabla `Universidades`
--
ALTER TABLE `Universidades`
  ADD PRIMARY KEY (`IdUniversidad`);

--
-- Indices de la tabla `Volantes`
--
ALTER TABLE `Volantes`
  ADD PRIMARY KEY (`IdVolante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Acuerdos`
--
ALTER TABLE `Acuerdos`
  MODIFY `IdAcuerdo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Administradores`
--
ALTER TABLE `Administradores`
  MODIFY `IdAdmin` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Arredantarios`
--
ALTER TABLE `Arredantarios`
  MODIFY `IdArrendatario` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Estudiante`
--
ALTER TABLE `Estudiante`
  MODIFY `IdEstudiante` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Habitaciones`
--
ALTER TABLE `Habitaciones`
  MODIFY `IdHabitacion` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Hospedajes`
--
ALTER TABLE `Hospedajes`
  MODIFY `IdHospedaje` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Locations`
--
ALTER TABLE `Locations`
  MODIFY `IdLocation` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Universidades`
--
ALTER TABLE `Universidades`
  MODIFY `IdUniversidad` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Volantes`
--
ALTER TABLE `Volantes`
  MODIFY `IdVolante` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
