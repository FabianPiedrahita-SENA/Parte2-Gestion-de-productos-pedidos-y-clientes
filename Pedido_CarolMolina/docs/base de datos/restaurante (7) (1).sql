-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2020 a las 17:52:12
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--
CREATE DATABASE IF NOT EXISTS `restaurante` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `restaurante`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `numeroDocumento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrocompras`
--

CREATE TABLE `carrocompras` (
  `id` int(11) NOT NULL,
  `identificadorProducto` int(11) NOT NULL,
  `precioTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `numeroDocumento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domiciliario`
--

CREATE TABLE `domiciliario` (
  `numeroDocumento` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `identificador` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `valor` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `numeroDocumentoCliente` varchar(11) NOT NULL,
  `numeroDocumentoDomiciliario` varchar(11) NOT NULL,
  `idCarroCompras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `identificador` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(10) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`identificador`, `nombre`, `descripcion`, `foto`, `precio`) VALUES
(21, 'Bandeja', 'grande', 'https://www.unacolom', 2000),
(22, 'Carne', 'grande', 'https://storage.cont', 15000),
(23, 'Tamal', 'grande', 'https://cdn.colombia', 8000),
(24, 'Lechona', 'grande', 'https://upload.wikim', 7000),
(25, 'Sancocho', 'grande', 'https://t1.rg.ltmcdn', 12000),
(26, 'Pechuga', 'grande', 'https://t1.rg.ltmcdn', 13000),
(27, 'Cazuela', 'grande', 'https://www.goya.com', 15000),
(28, 'Gaseosa', 'Bebidas', 'https://www.cruzverd', 3000),
(29, 'Colombiana', 'Bebidas', 'https://jumbocolombi', 2000),
(30, 'Sprite', 'Bebidas', 'https://metrocolombi', 3000),
(31, 'Agua', 'Bebidas', 'https://cdn2.totalco', 500),
(35, 'Jugo', 'Bebidas', 'https://t1.rg.ltmcdn', 4500),
(38, 'Postre', 'Postres', 'https://t2.rg.ltmcdn', 4000),
(40, 'Postre de galleta oreo ', 'Postres', 'postre-de-galletas-o', 8000),
(41, 'Postre de tiramisu', 'Postres', 'https://cdn.colombia', 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `numeroDocumento` varchar(11) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`numeroDocumento`),
  ADD KEY `numeroDocumento` (`numeroDocumento`);

--
-- Indices de la tabla `carrocompras`
--
ALTER TABLE `carrocompras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `identificadorProducto` (`identificadorProducto`),
  ADD KEY `identificadorProducto_2` (`identificadorProducto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`numeroDocumento`),
  ADD KEY `numeroDocumento` (`numeroDocumento`),
  ADD KEY `numeroDocumento_2` (`numeroDocumento`),
  ADD KEY `numeroDocumento_3` (`numeroDocumento`);

--
-- Indices de la tabla `domiciliario`
--
ALTER TABLE `domiciliario`
  ADD PRIMARY KEY (`numeroDocumento`),
  ADD KEY `numeroDocumento` (`numeroDocumento`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`identificador`),
  ADD UNIQUE KEY `numeroDocumentoDomiciliario` (`numeroDocumentoDomiciliario`),
  ADD UNIQUE KEY `idCarroCompras` (`idCarroCompras`),
  ADD KEY `numeroCliente` (`numeroDocumentoCliente`),
  ADD KEY `numeroDocumentoCliente` (`numeroDocumentoCliente`),
  ADD KEY `numeroDocumentoDomiciliario_2` (`numeroDocumentoDomiciliario`),
  ADD KEY `idCarroCompras_2` (`idCarroCompras`),
  ADD KEY `idCarroCompras_3` (`idCarroCompras`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`identificador`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numeroDocumento`),
  ADD KEY `numeroDocumento` (`numeroDocumento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrocompras`
--
ALTER TABLE `carrocompras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`numeroDocumento`) REFERENCES `usuario` (`numeroDocumento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrocompras`
--
ALTER TABLE `carrocompras`
  ADD CONSTRAINT `carrocompras_ibfk_1` FOREIGN KEY (`identificadorProducto`) REFERENCES `producto` (`identificador`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`numeroDocumento`) REFERENCES `usuario` (`numeroDocumento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `domiciliario`
--
ALTER TABLE `domiciliario`
  ADD CONSTRAINT `domiciliario_ibfk_1` FOREIGN KEY (`numeroDocumento`) REFERENCES `usuario` (`numeroDocumento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`numeroDocumentoCliente`) REFERENCES `cliente` (`numeroDocumento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`numeroDocumentoDomiciliario`) REFERENCES `domiciliario` (`numeroDocumento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`idCarroCompras`) REFERENCES `carrocompras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`numeroDocumento`) REFERENCES `domiciliario` (`numeroDocumento`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
