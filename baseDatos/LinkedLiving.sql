-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2019 a las 06:52:11
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
-- Base de datos: `linkedliving`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acuerdos`
--

CREATE TABLE `acuerdos` (
  `IdAcuerdo` int(4) NOT NULL,
  `IdArrendatario` int(4) NOT NULL,
  `IdEstudiante` int(4) NOT NULL,
  `IdUniversidad` int(4) NOT NULL,
  `Volante` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `IdAdmin` int(4) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`IdAdmin`, `Nombre`, `Usuario`, `Contrasena`) VALUES
(1, 'Alejandro', 'Ale', '1234'),
(2, 'Santi', 'Santi', '1234'),
(3, 'Andres', 'Andres', '1234'),
(4, 'Carla', 'Krla', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `IdAdmin` int(4) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` int(20) NOT NULL,
  `E-mail` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`IdAdmin`, `Nombre`, `Apellido`, `Celular`, `E-mail`) VALUES
(1, 'Alejandro', 'Manotas', 312285019, 'manotasja@uninorte.e'),
(2, 'Santiago', 'Zuñiga', 32222222, 'sazuñiga@uninorte.ed'),
(3, 'Andres', 'Betancourt', 386868686, 'andresbetancourt@uni'),
(4, 'Carla', 'Duran', 329393939, 'cmariota@uninorte.ed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendatarios`
--

CREATE TABLE `arrendatarios` (
  `IdArrendatario` int(4) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` int(20) NOT NULL,
  `E-mail` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `arrendatarios`
--

INSERT INTO `arrendatarios` (`IdArrendatario`, `Nombre`, `Apellidos`, `Celular`, `E-mail`) VALUES
(1, 'Carlos Bustamante', 'Bustamante', 3433423, 'Carlos27@gmail.com'),
(2, 'LaNorte ', 'Casas', 3222222, 'lanorte@uninorte.edu'),
(3, 'CasasBakanas', 'CasasBakanas', 302444213, 'cbakanas@gmail.com'),
(4, 'Carlos ', 'Bustamante', 366677652, 'elpeter@gmail.com'),
(5, '11-11', 'SA', 3699666, 'enmicuadranadacuadra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `IdEstudiante` int(4) NOT NULL,
  `Universidad` int(4) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Celular` int(20) NOT NULL,
  `E-mail` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`IdEstudiante`, `Universidad`, `Nombre`, `Apellidos`, `Celular`, `E-mail`) VALUES
(1, 1, 'Carlos', 'Herrerra', 3222222, 'herre@gmail.com'),
(2, 2, 'Santiago', 'Fernandez', 386868686, 'fer@gmail.com'),
(3, 3, 'Andres', 'Jackson', 39382894, 'jacki@gmail.com'),
(4, 4, 'Carla', 'Mississ', 384957487, 'miss@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `IdHabitacion` int(4) NOT NULL,
  `Hospedaje` int(4) NOT NULL,
  `NumberRoom` int(4) NOT NULL,
  `Foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospedajes`
--

CREATE TABLE `hospedajes` (
  `IdHospedaje` int(4) NOT NULL,
  `Arrendatario` int(4) NOT NULL,
  `Location` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `hospedajes`
--

INSERT INTO `hospedajes` (`IdHospedaje`, `Arrendatario`, `Location`, `Direccion`, `Telefono`, `Descripcion`) VALUES
(1, 1, '2', 'Cra 2g # 34C Sur - 2', 3433423, 'desde 32 m2 hasta 64 m2'),
(2, 2, '1', 'Clle 84 #54 - 72', 3222222, 'desde 80 m2 hasta 112 m2'),
(3, 3, '1', 'Clle 52 #23 - 22', 30244421, 'desde 56 m2 hasta 76 m2'),
(4, 4, '1', 'Clle 8B #35A 59', 36667765, 'Área construida: 245.0 m2\r\nHab: 3\r\nBaños: 4\r\nGarajes: 2'),
(5, 5, '2', 'Cra 54 #84 - 33', 36996666, 'Área construida: 300.0 m2\r\nHab: 4\r\nBaños: 3\r\nGarajes: 2'),
(6, 1, '1', 'Cra24 # 45-23', 3433423, 'Área construida: 86.0 m2\r\nHab: 3\r\nBaños: 3\r\nGarajes: 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE `locations` (
  `IdLocation` int(4) NOT NULL,
  `Sector` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`IdLocation`, `Sector`) VALUES
(1, 'Barranquilla'),
(2, 'Soledad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidades`
--

CREATE TABLE `universidades` (
  `IdUniversidad` int(4) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Location` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `NoContacto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `universidades`
--

INSERT INTO `universidades` (`IdUniversidad`, `Nombre`, `Location`, `NoContacto`) VALUES
(1, 'Uninorte', 'Barranquilla', 32222222),
(2, 'Universidad Atlántic', 'Barranquilla', 386868686),
(3, 'CUC', 'Barranquilla', 180010020),
(4, 'UniSimon', 'Barranquilla', 312294844);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Usuario`, `Contrasena`) VALUES
(1, 'Carlos Bustamante', 'Carlos27', '1234'),
(2, 'LaNorte Casas', 'LaNorteC', '1234'),
(3, 'CasasBakanas', 'CasasBakanas33', '1234'),
(4, 'Carlos Bustamante', 'El Peter', '1234'),
(5, '11-11 SA', '11-11SA', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `volantes`
--

CREATE TABLE `volantes` (
  `IdVolante` int(4) NOT NULL,
  `TipoAcuerdo` int(20) NOT NULL,
  `Valor` int(40) NOT NULL,
  `Pago` int(40) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `volantes`
--

INSERT INTO `volantes` (`IdVolante`, `TipoAcuerdo`, `Valor`, `Pago`, `FechaInicio`, `FechaFinal`) VALUES
(1, 1, 120000000, 120000000, '2019-12-10', '2020-05-14'),
(2, 2, 265700000, 265700000, '2019-12-25', '2021-05-25'),
(3, 2, 302958560, 302958560, '2020-01-23', '2020-11-17'),
(4, 1, 950000000, 950000000, '2019-12-01', '2023-05-01'),
(5, 1, 560000000, 560000000, '2020-04-01', '2021-02-25'),
(6, 2, 299000000, 299000000, '2020-07-07', '2022-08-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acuerdos`
--
ALTER TABLE `acuerdos`
  ADD PRIMARY KEY (`IdAcuerdo`);

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indices de la tabla `arrendatarios`
--
ALTER TABLE `arrendatarios`
  ADD PRIMARY KEY (`IdArrendatario`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`IdEstudiante`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`IdHabitacion`);

--
-- Indices de la tabla `hospedajes`
--
ALTER TABLE `hospedajes`
  ADD PRIMARY KEY (`IdHospedaje`);

--
-- Indices de la tabla `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`IdLocation`);

--
-- Indices de la tabla `universidades`
--
ALTER TABLE `universidades`
  ADD PRIMARY KEY (`IdUniversidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `volantes`
--
ALTER TABLE `volantes`
  ADD PRIMARY KEY (`IdVolante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acuerdos`
--
ALTER TABLE `acuerdos`
  MODIFY `IdAcuerdo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `IdAdmin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `IdAdmin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `arrendatarios`
--
ALTER TABLE `arrendatarios`
  MODIFY `IdArrendatario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `IdEstudiante` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `IdHabitacion` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hospedajes`
--
ALTER TABLE `hospedajes`
  MODIFY `IdHospedaje` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `locations`
--
ALTER TABLE `locations`
  MODIFY `IdLocation` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `universidades`
--
ALTER TABLE `universidades`
  MODIFY `IdUniversidad` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `volantes`
--
ALTER TABLE `volantes`
  MODIFY `IdVolante` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
