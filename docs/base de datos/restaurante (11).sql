-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2020 a las 14:23:50
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
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
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
  `descripcion` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`identificador`, `nombre`, `descripcion`, `foto`, `precio`) VALUES
(48, 'Bandeja paisa', 'carne extra jugosa', 'https://cdn.colombia.com/gastronomia/2011/08/02/bandeja-paisa-1616.gif', 30000),
(49, 'Carne llanera', 'extra grande ', 'https://storage.contextoganadero.com/s3fs-public/blog/field_image/2020-05/1188_gastronomia-carne-a-la-llanera_1024x600.jpg', 10000),
(50, 'Tamal', 'doble arepa y gaseosa incluida', 'https://2.bp.blogspot.com/-sPZyekqGxy0/VH1BYUwrnmI/AAAAAAAAB_w/vqwgdrsL-HI/s1600/Tamales%2BTolimenses%2BSySPMS.jpg', 10000),
(51, 'lechona', 'con insulso', 'https://cuponassets.cuponatic-latam.com/backendCo/uploads/imagenes_descuentos/137423/6226266bf23a1e98cd37aa401c52bfbca97efa28.S.jpg', 5000),
(52, 'Sancocho de gallina', 'doble pollo', 'https://t1.rg.ltmcdn.com/es/images/1/8/1/img_sancocho_de_gallina_o_pollo_12181_600.jpg', 4000),
(53, 'Pechuga de pollo con champiñon', 'con gaseosa incluida', 'https://t1.rg.ltmcdn.com/es/images/3/1/1/img_pechugas_en_crema_de_champinones_16113_orig.jpg', 6000),
(54, 'Cazuela de mariscos', 'con lgaseosa incluida', 'https://www.goya.com/media/4126/cazuela-de-mariscos_spanish-style-shellfish-stew.jpg?quality=80', 3000),
(55, 'Gaseosa Coca-cola', 'con y sin azucar', 'https://www.cocacola.es/content/dam/GO/CokeZone/Spain/Coca-Cola-Full-vidrio-Red-Zero.jpg', 2000),
(56, 'gaseosa Colombiana', 'personal ', 'https://jumbocolombiafood.vteximg.com.br/arquivos/ids/176120-1000-1000/7702090022766-281-29.jpg?v=636114531436370000', 2000),
(57, 'Sprite', 'personal', 'https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3651212-750-750/7702535009666.jpg?v=637406174057700000', 1000),
(58, 'Agua con gas ', 'personal ', 'https://cdn2.totalcode.net/homesentry/product-zoom/es/agua-con-gas-cristal-600ml-2.jpg', 1000),
(59, 'Agua sin gas', 'personal ', 'https://exitocol.vtexassets.com/arquivos/ids/1978221-800-auto?width=800&height=auto&aspect=true', 500),
(60, 'Jugo de mango ', 'extra fruta', 'https://saboreando.tips/wp-content/uploads/jugo-de-mango.jpg', 2000),
(61, 'Jugo de lulo', 'extra fruta', 'https://t1.rg.ltmcdn.com/es/images/2/9/3/img_jugo_de_lulo_6392_600_square.jpg', 2000),
(62, 'Jugo de fresa', 'extra fruta', 'https://t1.rg.ltmcdn.com/es/images/2/9/3/img_jugo_de_lulo_6392_600_square.jpg', 2000),
(63, 'Jugo de guanabana ', 'extra fruta y saludable', 'https://saboreando.tips/wp-content/uploads/jugo-de-guanabana.jpg', 2500),
(64, 'Postre de tres leches ', 'con galletas ducales incluidas', 'https://t2.rg.ltmcdn.com/es/images/0/3/4/postre_de_tres_leches_frio_34430_600.jpg', 4000),
(65, 'Postre de maracuya', 'con galletas saltin incluidas', 'https://t2.rg.ltmcdn.com/es/images/2/3/9/img_postre_de_maracuya_con_galletas_y_gelatina_58932_600_square.jpg', 4000),
(66, 'Postre de frutos rojos', 'con galletas ducales incluidas', 'https://gastronomiaycia.republica.com/wp-content/photos/hangop_frutos2.jpg', 5000),
(67, 'Postre de galleta oreo ', 'con galletas saltin incluidas', 'https://img-global.cpcdn.com/recipes/2589772_ed5c09bd56ae2a9d/1200x630cq70/photo.jpg', 4000),
(68, 'Postre de tiramisu', 'sin galletas pero una porcion extra', 'https://cdn.colombia.com/sdi/2011/08/05/tiramisu-689581.jpg', 4000);

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
  `contrasenia` varchar(255) NOT NULL
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
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
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
  ADD PRIMARY KEY (`numeroDocumento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`numeroDocumento`) REFERENCES `usuario` (`numeroDocumento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `carro`
--
ALTER TABLE `carro`
  ADD CONSTRAINT `carro_ibfk_1` FOREIGN KEY (`identificadorProducto`) REFERENCES `producto` (`identificador`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`idCarroCompras`) REFERENCES `carro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
