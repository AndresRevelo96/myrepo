-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2019 a las 17:34:08
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
-- Base de datos: `banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `iddepart` int(11) NOT NULL,
  `nomdepart` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `abrevdepart` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codigodepart` int(11) DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `idmun` int(11) NOT NULL,
  `nommuni` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `abrevmuni` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codigomuni` int(11) DEFAULT NULL,
  `id_depart` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `idpais` int(11) NOT NULL,
  `nompais` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `abrevpais` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codpais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_identificacion`
--

CREATE TABLE `tipos_identificacion` (
  `idtipide` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `abrev_tipide` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `idtipusu` int(11) NOT NULL,
  `nomtipusu` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `abrev_tipusu` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_tip_ident` int(11) DEFAULT NULL,
  `numero_ident` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` char(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_electronico` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contraseña` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ruta_foto` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `id_tip_usuario` int(11) DEFAULT NULL,
  `id_lugar_nacimiento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`iddepart`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`idmun`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idpais`);

--
-- Indices de la tabla `tipos_identificacion`
--
ALTER TABLE `tipos_identificacion`
  ADD PRIMARY KEY (`idtipide`);

--
-- Indices de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`idtipusu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
