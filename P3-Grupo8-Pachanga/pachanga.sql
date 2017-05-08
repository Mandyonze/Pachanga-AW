-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2017 a las 17:56:53
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pachanga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE `distritos` (
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `Partido` int(20) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Equipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `Id` int(20) NOT NULL,
  `Polideportivo` varchar(30) NOT NULL,
  `Fecha` date NOT NULL,
  `Creador` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `polideportivos`
--

CREATE TABLE `polideportivos` (
  `Nombre` varchar(30) NOT NULL,
  `Distrito` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(20) NOT NULL,
  `Distrito` varchar(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Score` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD KEY `Partido` (`Partido`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Polideportivo` (`Polideportivo`),
  ADD KEY `Creador` (`Creador`);

--
-- Indices de la tabla `polideportivos`
--
ALTER TABLE `polideportivos`
  ADD PRIMARY KEY (`Nombre`),
  ADD KEY `Distrito` (`Distrito`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Nombre`),
  ADD KEY `Distrito` (`Distrito`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`Partido`) REFERENCES `partidos` (`Id`),
  ADD CONSTRAINT `participantes_ibfk_2` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Nombre`);

--
-- Filtros para la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD CONSTRAINT `partidos_ibfk_1` FOREIGN KEY (`Polideportivo`) REFERENCES `polideportivos` (`Nombre`),
  ADD CONSTRAINT `partidos_ibfk_2` FOREIGN KEY (`Creador`) REFERENCES `usuarios` (`Nombre`);

--
-- Filtros para la tabla `polideportivos`
--
ALTER TABLE `polideportivos`
  ADD CONSTRAINT `polideportivos_ibfk_1` FOREIGN KEY (`Distrito`) REFERENCES `distritos` (`Nombre`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Distrito`) REFERENCES `distritos` (`Nombre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
