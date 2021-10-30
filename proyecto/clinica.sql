-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost: 8111
-- Generation Time: Oct 29, 2021 at 09:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Table structure for table `encargado`
--

CREATE TABLE `encargado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `encargado`
--

INSERT INTO `encargado` (`id`, `nombre`, `apellido`, `telefono`, `correo`) VALUES
(1, 'juan', 'lopez', 55314884, 'asda@fads'),
(2, 'juan', 'lopez', 5533243, 'asda@tree');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `nombre`, `apellido`, `telefono`, `correo`) VALUES
(1, 'pedro', 'mendez', 98776543, 'pmendez@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_in` date NOT NULL,
  `idtu` int(11) NOT NULL,
  `iden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `apellido`, `fecha_in`, `idtu`, `iden`) VALUES
(1, 'adolfo', 'juarez', '2010-08-10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tratamiento`
--

CREATE TABLE `tratamiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_t` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tratamiento`
--

INSERT INTO `tratamiento` (`id`, `nombre`, `apellido`, `tipo_t`) VALUES
(1, 'pedro', 'aguirre', 'hidroterapi');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `contraseña`) VALUES
(2, 'ealvarezj1@miumg.edu.gt', '$2y$10$EJVRPjyEuo9iVKxHaXCWGOCZiEJOffgu4I.j8v..3yeqSFO53QHIK'),
(4, 'adolfo.a.juerz@gmail.com', '$2y$10$sqWVnrKj9fcD5.WecpqQa.9CzIgPpFORtKJBMzJTVmkikWbf1uCyK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
