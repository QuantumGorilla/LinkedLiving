-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 05:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carritocompras`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `usuario`, `contrasena`) VALUES
(1, 'marvin henriquez', 'marvinh', '1234'),
(23, 'miguel', 'migell', '1234'),
(29, 'helda gomez', 'heldag', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `Id` int(11) NOT NULL,
  `Cliente` text COLLATE utf8_spanish_ci NOT NULL,
  `numeroventa` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8_spanish_ci NOT NULL,
  `subtotal` text COLLATE utf8_spanish_ci NOT NULL,
  `despachador` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`Id`, `Cliente`, `numeroventa`, `nombre`, `imagen`, `precio`, `cantidad`, `subtotal`, `despachador`, `estado`) VALUES
(55, 'marvin henriquez', 8, 'Monopoly', '370119_mono.jpg', '70000', '1', '70000', 'pedro perez', 'Listo'),
(56, 'helda gomez', 9, 'Arroz Diana Lb', '353269_diana.jpg', '1800', '1', '1800', 'pedro perez', 'Listo'),
(57, 'helda gomez', 9, 'Aceite RicaPalma lts', '578023_aceite.jpg', '4500', '1', '4500', 'pedro perez', 'Listo'),
(61, 'marvin henriquez', 13, 'Camisa colombia', '579822_colo.jpg', '120000', '1', '120000', 'pedro perez', 'Listo'),
(63, 'helda gomez', 15, 'Conjunto Mueble', '919958_muebles.jpg', '700000', '1', '700000', 'pedro perez', 'Listo'),
(65, 'marvin henriquez', 17, 'Conjunto Mueble', '919958_muebles.jpg', '700000', '1', '700000', 'pedro perez', 'Listo'),
(66, 'marvin henriquez', 18, 'Arroz Diana Lb', '353269_diana.jpg', '1800', '1', '1800', 'pedro perez', 'Listo');

-- --------------------------------------------------------

--
-- Table structure for table `despachadores`
--

CREATE TABLE `despachadores` (
  `id` int(11) NOT NULL,
  `nombred` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` text COLLATE utf8_spanish_ci NOT NULL,
  `cantPedidos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `despachadores`
--

INSERT INTO `despachadores` (`id`, `nombred`, `usuario`, `contrasena`, `cantPedidos`) VALUES
(1, 'pedro perez', 'pedrop', '1234', 1),
(2, 'shelse ramirez', 'shelser', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `Categoria`, `descripcion`, `imagen`, `precio`) VALUES
(7, 'Xiaomi Redmi note 5', 'Tecnologia', 'El mejor celular que puedes comprar en este rango de precio', '721317_descarga.jpg', 670000),
(9, 'Balon', 'Deportes', 'Para niÃ±os y adultos', '681916_descarga.jpg', 65000),
(10, 'Arroz Diana Lb', 'Comida', 'Arroz de las seÃ±oras', '353269_diana.jpg', 1800),
(11, 'Aceite RicaPalma lts', 'Comida', 'Gran rendimiento', '578023_aceite.jpg', 4500),
(12, 'Conjunto Mueble', 'Hogar', 'Ideal para el hogar', '919958_muebles.jpg', 700000),
(13, 'Cama', 'Hogar', 'Para 2 personas', '452004_cama.jpg', 1000000),
(14, 'Lego Classic', 'Juguetes', 'Para niÃ±os mayores de 3 aÃ±os', '520286_lego.jpg', 250000),
(15, 'Monopoly', 'Juguetes', 'Monopoly familia', '370119_mono.jpg', 70000),
(16, 'Camisa colombia', 'Ropa', 'Camisa colombia hombre talla S', '579822_colo.jpg', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `Password` text COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Apellido`, `Usuario`, `Password`, `Imagen`) VALUES
(1, 'kebin', 'ramirez', 'Kebinr', '1234', 'imagen.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `despachadores`
--
ALTER TABLE `despachadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `despachadores`
--
ALTER TABLE `despachadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
