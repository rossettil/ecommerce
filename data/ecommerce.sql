-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2026 a las 06:56:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `idCategoriaPadre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombre`, `idCategoriaPadre`) VALUES
(1, 'Componentes', NULL),
(2, 'Periféricos', NULL),
(3, 'PCs', NULL),
(4, 'Notebooks', NULL),
(5, 'Procesadores', 1),
(6, 'Motherboards', 1),
(7, 'Placas de video', 1),
(8, 'Memorias RAM', 1),
(9, 'Almacenamiento', 1),
(10, 'Fuentes de poder', 1),
(11, 'Refrigeración', 1),
(12, 'Gabinetes', 1),
(13, 'Teclados', 2),
(14, 'Mouses', 2),
(15, 'Auriculares', 2),
(16, 'Monitores', 2),
(17, 'Webcams', 2),
(18, 'Mouse pads', 2),
(19, 'Sillas', NULL),
(20, 'Sillas de oficina', 19),
(21, 'Sillas gamer', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `idItem` int(11) NOT NULL,
  `idVenta` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `marca`, `codigo`, `idCategoria`, `descripcion`, `costo`, `precio`, `foto`, `stock`, `activo`) VALUES
(1, 'Ryzen 5 7600', 'AMD', 'CPU-001', 5, '6 núcleos, 12 hilos, 3.8 GHz (5.1 GHz boost), socket AM5', 220000.00, 299000.00, 'ryzen5-7600.jpg', 10, 1),
(2, 'Core i5-12400F', 'Intel', 'CPU-002', 5, '6 núcleos, 12 hilos, 2.5 GHz (4.4 GHz boost), socket LGA1700, sin gráficos integrados', 150000.00, 205000.00, 'i5-12400f.jpg', 8, 1),
(3, 'B650M Aorus Elite AX', 'Gigabyte', 'MB-001', 6, 'Socket AM5, DDR5, formato Micro-ATX, WiFi 6E', 230000.00, 315000.00, 'b650m-aorus.jpg', 5, 1),
(4, 'GeForce RTX 4060 Ventus 2X', 'MSI', 'GPU-001', 7, '8 GB GDDR6, DLSS 3, ray tracing', 420000.00, 569000.00, 'rtx4060-ventus.jpg', 4, 1),
(5, 'Fury Beast 16GB DDR5', 'Kingston', 'RAM-001', 8, '16 GB (1x16), DDR5 5600 MHz', 65000.00, 89000.00, 'fury-beast-16.jpg', 20, 1),
(6, 'SSD 970 EVO Plus 1TB', 'Samsung', 'SSD-001', 9, 'NVMe M.2, lectura 3500 MB/s', 95000.00, 129000.00, 'samsung-970evo.jpg', 0, 1),
(7, 'Fuente 650W 80 Plus Bronze', 'Corsair', 'PSU-001', 10, '650 W, certificación 80 Plus Bronze, semi-modular', 85000.00, 115000.00, 'corsair-650w.jpg', 7, 1),
(8, 'Kumara K552', 'Redragon', 'TEC-001', 13, 'Teclado mecánico TKL, switches red, retroiluminado, en español con ñ', 28000.00, 39000.00, 'redragon-kumara.jpg', 15, 1),
(9, 'G203 Lightsync', 'Logitech', 'MOU-001', 14, 'Mouse gamer 8000 DPI, RGB, 6 botones', 18000.00, 26000.00, 'logitech-g203.jpg', 25, 1),
(10, 'Vivobook 15', 'Asus', 'NB-001', 4, 'Intel Core i5, 16 GB RAM, SSD 512 GB, pantalla 15.6\"', 650000.00, 849000.00, 'asus-vivobook15.jpg', 3, 1),
(11, 'Silla Gamer Ergonómica', 'Corsair', 'SIL-001', 21, 'Respaldo reclinable, apoyabrazos 4D, almohadón lumbar', 280000.00, 379000.00, 'silla-gamer.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipo` enum('cliente','admin') NOT NULL DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `estadoPago` char(1) NOT NULL,
  `estadoEnvio` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `idPadre` (`idCategoriaPadre`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`idItem`),
  ADD KEY `idVenta` (`idVenta`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
