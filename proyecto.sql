-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-11-2018 a las 16:46:22
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--
CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_producto`
--

DROP TABLE IF EXISTS `categoria_producto`;
CREATE TABLE IF NOT EXISTS `categoria_producto` (
  `id_categoria` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_producto`
--

INSERT INTO `categoria_producto` (`id_categoria`, `nombre`) VALUES
(1, 'cat1'),
(4, 'cat3'),
(3, 'cat2'),
(5, 'cat4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota_mensual`
--

DROP TABLE IF EXISTS `cuota_mensual`;
CREATE TABLE IF NOT EXISTS `cuota_mensual` (
  `mes` varchar(2) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `importe` decimal(10,2) NOT NULL,
  PRIMARY KEY (`mes`,`anio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota_socio`
--

DROP TABLE IF EXISTS `cuota_socio`;
CREATE TABLE IF NOT EXISTS `cuota_socio` (
  `nro_cliente` int(5) UNSIGNED NOT NULL,
  `mes` varchar(2) NOT NULL,
  `anio` varchar(4) NOT NULL,
  PRIMARY KEY (`nro_cliente`,`mes`,`anio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_prod_venta`
--

DROP TABLE IF EXISTS `factura_prod_venta`;
CREATE TABLE IF NOT EXISTS `factura_prod_venta` (
  `nro_factura_venta` int(4) UNSIGNED NOT NULL,
  `codigo_producto` int(4) UNSIGNED NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  PRIMARY KEY (`codigo_producto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_venta`
--

DROP TABLE IF EXISTS `factura_venta`;
CREATE TABLE IF NOT EXISTS `factura_venta` (
  `nro_factura_venta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha_factura` date NOT NULL,
  `forma_pago` varchar(20) NOT NULL,
  `importe_bruto` decimal(10,2) NOT NULL,
  `importe_neto` decimal(10,2) NOT NULL,
  `descuento` decimal(10,2) NOT NULL,
  `impuestos` decimal(10,2) NOT NULL,
  `nro_cliente` int(5) NOT NULL,
  `nro_pago` int(5) NOT NULL,
  PRIMARY KEY (`nro_factura_venta`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinarias`
--

DROP TABLE IF EXISTS `maquinarias`;
CREATE TABLE IF NOT EXISTS `maquinarias` (
  `nro_maquinaria` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `modelo` varchar(40) NOT NULL,
  `fabricante` varchar(40) NOT NULL,
  `periodo_garantia` varchar(30) NOT NULL,
  `resumen_de_uso` varchar(50) NOT NULL,
  `estado_maq` varchar(15) NOT NULL,
  `ultimo_mant` varchar(10) NOT NULL,
  `proximo_mant` varchar(20) NOT NULL,
  `periodo_mant` varchar(20) NOT NULL,
  `cuit` varchar(11) NOT NULL,
  `nro_sala` int(5) NOT NULL,
  PRIMARY KEY (`nro_maquinaria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
CREATE TABLE IF NOT EXISTS `matriculas` (
  `id_matricula` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `importe` decimal(10,2) NOT NULL,
  `fecha_inicio_vigencia` date NOT NULL,
  PRIMARY KEY (`id_matricula`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_clientes`
--

DROP TABLE IF EXISTS `pagos_clientes`;
CREATE TABLE IF NOT EXISTS `pagos_clientes` (
  `nro_pago` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha_pago` date NOT NULL,
  `forma_pago` varchar(20) NOT NULL,
  `importe_pago` decimal(10,2) NOT NULL,
  `nro_cliente` int(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`nro_pago`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `nro_pedido` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `codigo_producto` int(5) UNSIGNED NOT NULL,
  `cantidad` int(3) NOT NULL,
  `precio_compra` decimal(10,2) NOT NULL,
  `entrega` date DEFAULT NULL,
  `cuit` varchar(13) NOT NULL,
  PRIMARY KEY (`nro_pedido`,`codigo_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`nro_pedido`, `codigo_producto`, `cantidad`, `precio_compra`, `entrega`, `cuit`) VALUES
(123, 1, 3, '183.00', '2018-11-28', '13'),
(122, 1, 22, '902.00', '2018-11-28', '2222'),
(121, 1, 2, '82.00', '2018-11-28', '414141'),
(120, 1, 1, '41.00', '2018-11-26', '414141');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `codigo_producto` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `precio_venta` decimal(10,2) NOT NULL,
  `stock` int(6) NOT NULL,
  `pto_reposicion` int(4) NOT NULL,
  `id_categoria` int(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`codigo_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre`, `precio_venta`, `stock`, `pto_reposicion`, `id_categoria`) VALUES
(1, 'gatorade', '22.50', 874, 3, 1),
(3, 'gymtonic', '22.00', 22, 22, 1),
(4, 'product1', '22.00', 22, 22, 1),
(5, 'product2', '27.00', 54, 4, 1),
(6, 'product3', '22.00', 22, 22, 1),
(7, 'product6', '22.00', 22, 22, 1),
(8, 'product4', '22.00', 22, 22, 2),
(15, 'product5', '1231.00', 123, 123123, 1),
(10, 'product7', '33.00', 3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_prov`
--

DROP TABLE IF EXISTS `productos_prov`;
CREATE TABLE IF NOT EXISTS `productos_prov` (
  `codigo_producto` int(5) UNSIGNED NOT NULL,
  `cuit` int(11) UNSIGNED NOT NULL,
  `precio_producto` decimal(10,2) NOT NULL,
  PRIMARY KEY (`codigo_producto`,`cuit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_prov`
--

INSERT INTO `productos_prov` (`codigo_producto`, `cuit`, `precio_producto`) VALUES
(8, 414141, '27.00'),
(1, 2222, '13.00'),
(3, 414, '33.00'),
(11, 123, '29.00'),
(5, 414141, '12.00'),
(11, 414141, '14.00'),
(5, 2222, '75.00'),
(6, 123, '17.00'),
(1, 414141, '41.00'),
(3, 17, '97.00'),
(10, 443, '90.00'),
(1, 13, '61.00'),
(3, 443, '22.00'),
(4, 443, '33.00'),
(4, 17, '42.00'),
(3, 13, '53.00'),
(6, 17, '53.00'),
(5, 13, '13.00'),
(7, 414141, '62.00'),
(7, 2222, '32.00'),
(8, 13, '77.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `cuit` varchar(11) NOT NULL,
  `razon_social` varchar(40) NOT NULL,
  `persona_de_contacto` varchar(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  PRIMARY KEY (`cuit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`cuit`, `razon_social`, `persona_de_contacto`, `direccion`, `email`, `telefono`) VALUES
('414141', 'proveedor1', 'prov', 'falsa 123', 'falsa@asd.com', '123123123'),
('2222', 'proveedor7', 'jaun', 'calle true 123', 'dario@da', '123123123'),
('123', 'proveedor2', 'jaun', 'calle tr', 'dario@da', '123123'),
('443', 'proveedor3', 'jaun', 'calle tr', 'dario@da', '123123'),
('13', 'proveedor5', 'jaun', 'calle tr', 'dario@da', '123123'),
('17', 'proveedor4', 'jaun', 'calle tr', 'dario@da', '123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

DROP TABLE IF EXISTS `socios`;
CREATE TABLE IF NOT EXISTS `socios` (
  `nro_cliente` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `apellido` varchar(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `tipo_documento` varchar(3) NOT NULL,
  `nro_documento` varchar(8) NOT NULL,
  `apto_medico` varchar(2) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_matricula` int(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`nro_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_mantenimiento`
--

DROP TABLE IF EXISTS `solicitud_mantenimiento`;
CREATE TABLE IF NOT EXISTS `solicitud_mantenimiento` (
  `nro_sol_mant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha_solicitud` date NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `nro_maquinaria` int(5) NOT NULL,
  `estado_sol` varchar(15) NOT NULL,
  `cuit` varchar(11) NOT NULL,
  PRIMARY KEY (`nro_sol_mant`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`password`, `email`) VALUES
('f10e2821bbbea527ea02200352313bc059445190', 'asd@asd.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
