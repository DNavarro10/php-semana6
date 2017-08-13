-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 06:20 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computodo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `descripcion` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `descripcion`) VALUES
(1, 'Caballeros'),
(2, 'Damas'),
(3, 'Chicos'),
(4, 'Chicas');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `cedula` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `idItem` int(11) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `nombreImagen` varchar(15) DEFAULT NULL,
  `descTalla1` varchar(5) DEFAULT NULL,
  `stockTalla1` int(11) DEFAULT NULL,
  `descTalla2` varchar(5) DEFAULT NULL,
  `stockTalla2` int(11) DEFAULT NULL,
  `descTalla3` varchar(5) DEFAULT NULL,
  `stockTalla3` int(11) DEFAULT NULL,
  `descTalla4` varchar(5) DEFAULT NULL,
  `stockTalla4` int(11) DEFAULT NULL,
  `descTalla5` varchar(5) DEFAULT NULL,
  `stockTalla5` int(11) DEFAULT NULL,
  `precioUnitario` int(11) DEFAULT NULL,
  `descripcionLarga` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`idItem`, `descripcion`, `idCategoria`, `nombreImagen`, `descTalla1`, `stockTalla1`, `descTalla2`, `stockTalla2`, `descTalla3`, `stockTalla3`, `descTalla4`, `stockTalla4`, `descTalla5`, `stockTalla5`, `precioUnitario`, `descripcionLarga`) VALUES
(1, 'Camisa', 1, 'camisa1.png', 'XS', 10, 'S', 4, 'M', 6, 'L', 10, 'XL', 15, 3000, 'Camisa de punto de alta calidad'),
(2, 'Pantalon', 1, 'pantalon1.png', 'XS', 10, 'S', 4, 'M', 6, 'L', 10, 'XL', 15, 5000, 'Pantalon de mezclilla'),
(3, 'Sueter', 1, 'sueter1.png', 'XS', 10, 'S', 4, 'M', 6, 'L', 10, 'XL', 15, 3600, 'Sueter de lana'),
(4, 'Corbata', 1, 'corbata1.png', 'XS', 10, 'S', 4, 'M', 6, 'L', 10, 'XL', 15, 3000, 'Corbata de razo');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `precioUnitario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE `servicios` (
  `idServicio` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precioHora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` int(11) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `clave` int(11) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `rol`, `nombre`, `clave`, `direccion`, `telefono`) VALUES
(123, 'administrador', 'diego', 123123, 'canoas', 123212);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`cedula`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`idItem`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`);

--
-- Indexes for table `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
