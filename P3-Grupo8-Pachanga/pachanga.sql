-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2017 at 12:22 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pachanga`
--

-- --------------------------------------------------------

--
-- Table structure for table `distritos`
--

CREATE TABLE `distritos` (
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participantes`
--

CREATE TABLE `participantes` (
  `partido` int(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `equipo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partidos`
--

CREATE TABLE `partidos` (
  `id` int(20) NOT NULL,
  `polideportivo` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `creador` varchar(20) NOT NULL,
  `GolesEquipo1` int(11) DEFAULT NULL,
  `GolesEquipo2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `polideportivos`
--

CREATE TABLE `polideportivos` (
  `id` varchar(20) NOT NULL,
  `distrito` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `distrito` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `skill` int(10) DEFAULT NULL,
  `valoracion` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participantes`
--
ALTER TABLE `participantes`
  ADD KEY `partido` (`partido`),
  ADD KEY `usuario` (`usuario`);

--
-- Indexes for table `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `polideportivo` (`polideportivo`),
  ADD KEY `creador` (`creador`);

--
-- Indexes for table `polideportivos`
--
ALTER TABLE `polideportivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distrito` (`distrito`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distrito` (`distrito`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`partido`) REFERENCES `partidos` (`id`),
  ADD CONSTRAINT `participantes_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `partidos`
--
ALTER TABLE `partidos`
  ADD CONSTRAINT `partidos_ibfk_1` FOREIGN KEY (`polideportivo`) REFERENCES `polideportivos` (`id`),
  ADD CONSTRAINT `partidos_ibfk_2` FOREIGN KEY (`creador`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `polideportivos`
--
ALTER TABLE `polideportivos`
  ADD CONSTRAINT `polideportivos_ibfk_1` FOREIGN KEY (`distrito`) REFERENCES `distritos` (`id`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`distrito`) REFERENCES `distritos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
