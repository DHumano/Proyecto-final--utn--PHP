-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-11-2018 a las 16:12:28
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_producto`
--

INSERT INTO `categoria_producto` (`id_categoria`, `nombre`) VALUES
(1, 'lacteos'),
(3, 'asdasdasd');

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

--
-- Volcado de datos para la tabla `cuota_mensual`
--

INSERT INTO `cuota_mensual` (`mes`, `anio`, `importe`) VALUES
('02', '1977', '200.00');

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

--
-- Volcado de datos para la tabla `cuota_socio`
--

INSERT INTO `cuota_socio` (`nro_cliente`, `mes`, `anio`) VALUES
(1, '02', '1977');

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

--
-- Volcado de datos para la tabla `factura_prod_venta`
--

INSERT INTO `factura_prod_venta` (`nro_factura_venta`, `codigo_producto`, `cantidad`, `precio`) VALUES
(1, 1, 3, '22.00');

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

--
-- Volcado de datos para la tabla `factura_venta`
--

INSERT INTO `factura_venta` (`nro_factura_venta`, `fecha_factura`, `forma_pago`, `importe_bruto`, `importe_neto`, `descuento`, `impuestos`, `nro_cliente`, `nro_pago`) VALUES
(1, '2018-10-18', 'efectivo', '223.00', '222.00', '22.00', '2.00', 1, 1);

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

--
-- Volcado de datos para la tabla `maquinarias`
--

INSERT INTO `maquinarias` (`nro_maquinaria`, `modelo`, `fabricante`, `periodo_garantia`, `resumen_de_uso`, `estado_maq`, `ultimo_mant`, `proximo_mant`, `periodo_mant`, `cuit`, `nro_sala`) VALUES
(1, 'alfa', 'fabr', 'enero', 'poco uso', 'bueno', '1977', '1978', '6 meses', '12312312322', 1);

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

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`id_matricula`, `importe`, `fecha_inicio_vigencia`) VALUES
(1, '122.00', '2018-10-17');

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

--
-- Volcado de datos para la tabla `pagos_clientes`
--

INSERT INTO `pagos_clientes` (`nro_pago`, `fecha_pago`, `forma_pago`, `importe_pago`, `nro_cliente`) VALUES
(1, '2018-10-10', 'efectivo', '222.00', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`nro_pedido`, `codigo_producto`, `cantidad`, `precio_compra`, `entrega`, `cuit`) VALUES
(39, 1, 44, '1012.00', '2018-11-21', '2222'),
(38, 5, 22, '484.00', '2018-11-21', '2222'),
(37, 1, 2, '46.00', '2018-11-21', '2222'),
(35, 1, 22, '506.00', '2018-11-21', '2222'),
(36, 5, 10, '220.00', '2018-11-21', '2222');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre`, `precio_venta`, `stock`, `pto_reposicion`, `id_categoria`) VALUES
(1, 'leche', '22.50', 83, 3, 1),
(3, 'coco', '22.00', 22, 22, 1),
(4, 'sdasdasd', '22.00', 22, 22, 1),
(5, 'dar', '22.00', 54, 22, 1),
(6, 'darito', '22.00', 22, 22, 1),
(7, 'asd', '22.00', 22, 22, 1),
(8, 'dario', '22.00', 22, 22, 2),
(11, 'caca2', '22.00', 22, 22, 3),
(10, 'sara', '33.00', 3, 3, 3),
(12, 'caca', '22.00', 22, 22, 1);

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
(8, 414141, '22.00'),
(1, 2222, '23.00'),
(3, 414, '33.00'),
(11, 123, '22.00'),
(5, 414141, '22.00'),
(11, 414141, '22.00'),
(5, 2222, '22.00'),
(6, 123, '44.00'),
(1, 414141, '22.00'),
(3, 17, '97.00'),
(10, 443, '90.00');

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
('414141', 'proveedor', 'prov', 'falsa 123', 'falsa@asd.com', '123123123'),
('2222', 'asdasd', 'jaun', 'calle true 123', 'dario@da', '123123123'),
('123', 'dara', 'jaun', 'calle tr', 'dario@da', '123123'),
('443', 'dar3', 'jaun', 'calle tr', 'dario@da', '123123'),
('13', 'b2', 'jaun', 'calle tr', 'dario@da', '123123'),
('17', 'b5', 'jaun', 'calle tr', 'dario@da', '123123'),
('1233', 'a11', 'jaun', 'calle tr', 'dario@da', '123123'),
('123123', 'a22', 'jaun', 'calle tr', 'dario@da', '123123');

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

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`nro_cliente`, `apellido`, `nombre`, `direccion`, `fecha_nacimiento`, `sexo`, `tipo_documento`, `nro_documento`, `apto_medico`, `telefono`, `email`, `id_matricula`) VALUES
(1, 'fernandez', 'juan', 'falsa 123', '2018-07-11', 'masculino', 'dni', '36666666', 'si', '123123', 'asd@asd.com', 1);

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

--
-- Volcado de datos para la tabla `solicitud_mantenimiento`
--

INSERT INTO `solicitud_mantenimiento` (`nro_sol_mant`, `fecha_solicitud`, `motivo`, `nro_maquinaria`, `estado_sol`, `cuit`) VALUES
(1, '2018-10-16', 'reparar', 1, 'entregado', '12312312322');

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
