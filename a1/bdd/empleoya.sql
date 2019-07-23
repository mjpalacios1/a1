-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2019 a las 23:08:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleoya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `verificacion` int(11) DEFAULT NULL,
  `fechaFundacion` date NOT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `nivelEducacion` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `edadMinima` int(2) NOT NULL,
  `edadMaxima` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codigo`, `nombre`, `descripcion`, `verificacion`, `fechaFundacion`, `email`, `telefono`, `nivelEducacion`, `edadMinima`, `edadMaxima`) VALUES
(1, 'Patito', 'La mejor empresa de Patos', 123, '2019-05-23', '', '123654', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `segundoNombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `segundoApellido` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `genero` varchar(1) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `estadoCivil` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `numeroHijos` int(2) DEFAULT NULL,
  `estatura` float NOT NULL,
  `peso` float NOT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `educacion` date DEFAULT NULL,
  `fechaEgreso` date NOT NULL,
  `fechaRegistro` date NOT NULL,
  `horaRegistro` time NOT NULL,
  `hojaVida` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `numeroVerificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `nombre`, `segundoNombre`, `apellido`, `segundoApellido`, `genero`, `fechaNacimiento`, `estadoCivil`, `numeroHijos`, `estatura`, `peso`, `email`, `telefono`, `educacion`, `fechaEgreso`, `fechaRegistro`, `horaRegistro`, `hojaVida`, `numeroVerificacion`) VALUES
(1, 'Karla', 'Yazmin', 'Enriquez', 'Hernandez', 'F', '1997-01-17', 'Soltera', 0, 0, 0, '0', '0', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '0', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
