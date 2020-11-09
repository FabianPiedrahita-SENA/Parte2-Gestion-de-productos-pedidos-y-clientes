-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2020 a las 02:31:27
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
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `numeroDocumento` varchar(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospedido`
--

CREATE TABLE `datospedido` (
  `identificadorPedido` int(11) NOT NULL,
  `identificadorProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domiciliario`
--

CREATE TABLE `domiciliario` (
  `numeroDocumento` varchar(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `identificadorPedido` int(11) NOT NULL
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
  `numeroCliente` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `identificador` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `foto` blob NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`identificador`, `nombre`, `descripcion`, `foto`, `precio`) VALUES
(21, 'Bandeja paisa', 'grande', 0x62616e64656a612d70616973612d313631362e676966, 2000),
(22, 'Carne llanera', 'grande', 0x313138385f67617374726f6e6f6d69612d6361726e652d612d6c612d6c6c616e6572615f31303234783630302e6a7067, 15000),
(23, 'Tamal', 'grande', 0x6d617872657364656661756c742e6a7067, 8000),
(24, 'Lechona', 'grande', 0x363232363236366266323361316539386364333761613430316335326266626361393765666132382e532e6a7067, 7000),
(25, 'Sancocho de gallina', 'grande', 0x696d675f73616e636f63686f5f64655f67616c6c696e615f6f5f706f6c6c6f5f31323138315f3630302e6a7067, 12000),
(26, 'Pechuga de pollo con champiñon', 'grande', 0x39383262323033396265383963356464303365386262636563663331666232302e6a7067, 13000),
(27, 'Cazuela de mariscos', 'grande', 0x63617a75656c612d64652d6d61726973636f735f7370616e6973682d7374796c652d7368656c6c666973682d737465772e6a7067, 15000),
(28, 'Gaseosa Coca-cola', 'Bebidas ', 0x373730323533353030313735322e6a7067, 3000),
(29, 'Colombiana', 'Bebidas ', 0x373730323039303032393530352d32302d3238312d32392e6a7067, 2000),
(30, 'Sprite', 'Bebidas ', 0x373730323533353031323038362e6a7067, 3000),
(31, 'Agua con gas ', 'Bebidas ', 0x494d475f303037332e6a7067, 500),
(32, 'Agua sin gas', 'Bebidas ', 0x426562696461732d416775612d792d74652d6672696f2d416775612d4369656c6f2d782d3632302d6d6c2d3934393932303230303631323232343830362e6a7067, 1000),
(33, 'Jugo de mango ', 'Bebidas ', 0x64657363617267612e6a7067, 3000),
(34, 'Jugo de lulo', 'Bebidas ', 0x6a75676f2d64652d6d617261637579612e6a7067, 4000),
(35, 'Jugo de fresa', 'Bebidas ', 0x6465736361726761202831292e6a7067, 4500),
(36, 'Jugo de guanabana ', 'Bebidas ', 0x39332e2d62617469646f2d64652d6775616e6162616e612d642e6a7067, 5000),
(37, 'Postre de tres leches ', 'Postres', 0x706f737472655f64655f747265735f6c65636865735f6672696f5f33343433305f3630302e6a7067, 65000),
(38, 'Postre de maracuya', 'Postres', 0x696d675f706f737472655f64655f6d617261637579615f636f6e5f67616c6c657461735f795f67656c6174696e615f35383933325f3630305f7371756172652e6a7067, 4000),
(39, 'Postre de frutos rojos', 'Postres', 0x6d617872657364656661756c74202831292e6a7067, 5500),
(40, 'Postre de galleta oreo ', 'Postres', 0x706f737472652d64652d67616c6c657461732d6f72656f2d6672696f2d73696e2d686f726e6f2e6a7067, 8000),
(41, 'Postre de tiramisu', 'Postres', 0x746972616d6973752d3638393538312e6a7067, 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`numeroDocumento`);

--
-- Indices de la tabla `datospedido`
--
ALTER TABLE `datospedido`
  ADD PRIMARY KEY (`identificadorPedido`),
  ADD KEY `identificadorProducto` (`identificadorProducto`),
  ADD KEY `identificadorPedido` (`identificadorPedido`);

--
-- Indices de la tabla `domiciliario`
--
ALTER TABLE `domiciliario`
  ADD PRIMARY KEY (`numeroDocumento`),
  ADD KEY `identificadorPedido` (`identificadorPedido`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`identificador`),
  ADD KEY `numeroCliente` (`numeroCliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`identificador`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `nombre` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datospedido`
--
ALTER TABLE `datospedido`
  MODIFY `identificadorPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
