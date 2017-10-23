-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2017 a las 01:44:46
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contable`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balc`
--

CREATE TABLE `balc` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `debebal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `haberbal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saldo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `balc`
--

INSERT INTO `balc` (`id`, `descripcion`, `debebal`, `haberbal`, `saldo`) VALUES
(1, 'Activo', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balclas`
--

CREATE TABLE `balclas` (
  `id` int(11) NOT NULL,
  `descrip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `debebalcla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `haberbalcla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saldobalcla` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `id` int(11) NOT NULL,
  `numcuenta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuentacorriente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sucrusal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ejecutivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`id`, `numcuenta`, `nombre`, `cuentacorriente`, `email`, `fono`, `sucrusal`, `ejecutivo`) VALUES
(1, '112101', 'BANCO SECURITY US$', 'E-1033700-01', 'skdvbk', 'lknb', 'lfnl', 'kldnbk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caract`
--

CREATE TABLE `caract` (
  `id` int(11) NOT NULL,
  `empleado` tinyint(1) NOT NULL,
  `cliente` tinyint(1) NOT NULL,
  `proveedor` tinyint(1) NOT NULL,
  `honorarios` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contabilizar`
--

CREATE TABLE `contabilizar` (
  `id` int(11) NOT NULL,
  `ctare` tinyint(1) NOT NULL,
  `flujo` tinyint(1) NOT NULL,
  `item` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctaesp`
--

CREATE TABLE `ctaesp` (
  `id` int(11) NOT NULL,
  `ivacredito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proveedores` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `retimphon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `honorarios` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ivadebito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ivaretenido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bancocheques` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipovou_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `rut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dedica` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correlativo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sitadminproye` tinyint(1) NOT NULL,
  `rutre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombrere` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccionre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cellre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `centro` tinyint(1) NOT NULL,
  `flujo` tinyint(1) NOT NULL,
  `item` tinyint(1) NOT NULL,
  `rutac` tinyint(1) NOT NULL,
  `td1` tinyint(1) NOT NULL,
  `doc1` tinyint(1) NOT NULL,
  `td2` tinyint(1) NOT NULL,
  `doc2` tinyint(1) NOT NULL,
  `proyec` tinyint(1) NOT NULL,
  `fecven` tinyint(1) NOT NULL,
  `glolin` tinyint(1) NOT NULL,
  `vouegre` tinyint(1) NOT NULL,
  `vouhono` tinyint(1) NOT NULL,
  `voucomp` tinyint(1) NOT NULL,
  `vouven` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `rut`, `nombre`, `dedica`, `direccion`, `email`, `fono`, `correlativo`, `sitadminproye`, `rutre`, `nombrere`, `direccionre`, `cellre`, `centro`, `flujo`, `item`, `rutac`, `td1`, `doc1`, `td2`, `doc2`, `proyec`, `fecven`, `glolin`, `vouegre`, `vouhono`, `voucomp`, `vouven`) VALUES
(1, '1234567', 'Empresa1', 'p', 'p', 'p', 'p', 'p', 1, 'p', 'p', 'p', 'p', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujo`
--

CREATE TABLE `flujo` (
  `id` int(11) NOT NULL,
  `grupo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descrip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `debe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `haber` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `flujo`
--

INSERT INTO `flujo` (`id`, `grupo`, `descrip`, `debe`, `haber`) VALUES
(1, 'Ingerso y Egresos', 'Ingerso y Egresos', 'jd', 'jabd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folisist`
--

CREATE TABLE `folisist` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `codvou` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codcompra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opetesore` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `ivacredito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proveedores` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `retimphon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `honorarios` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ivadebito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ivaretenido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bancocheques` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nopedido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nofactura` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `folisist`
--

INSERT INTO `folisist` (`id`, `fecha`, `codvou`, `codcompra`, `entidad`, `opetesore`, `empresa_id`, `ivacredito`, `proveedores`, `retimphon`, `honorarios`, `ivadebito`, `cliente`, `ivaretenido`, `bancocheques`, `nopedido`, `nofactura`) VALUES
(1, '0000-00-00 00:00:00', '17081', 'o', 'o', 'o', 1, 'o', 'o', 'o', 'o', 'o', 'o', 'oo', 'o', 'o', 'o'),
(2, '0000-00-00 00:00:00', '17080001', 'e', 't', 'h', 1, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h'),
(3, '0000-00-00 00:00:00', '17080001', 't', 't', 'y', 1, 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y'),
(4, '2012-01-01 00:00:00', '17080001', 'f', 'f', 'f', 1, 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f'),
(5, '2012-01-01 00:00:00', '1708002', 'f', 'f', 'f', 1, 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f'),
(6, '2016-08-15 08:00:00', '17080001', 'j', 'j', 'j', 1, 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j'),
(7, '2017-08-18 00:00:00', '17080002', 'u', 'u', 'u', 1, 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'user', 'user', 'user@example.com', 'user@example.com', 1, 'amtmxez5kco4wwoo4o44sggok480cs4', '$2y$13$amtmxez5kco4wwoo4o44sevRbXsL3zPpiAQHnM7xgDKBDTYEvME4K', '2017-08-21 14:48:17', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(4, 'adminuser', 'adminuser', 'superadmin@example.com', 'superadmin@example.com', 1, 'fgld8lxv7qoswo8gc00o8o44s048cgw', '$2y$13$fgld8lxv7qoswo8gc00o8eFs68PC/O7vaXr3L.gxGJUWVkiGgHO1.', '2017-08-24 18:57:19', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrerut`
--

CREATE TABLE `ingrerut` (
  `id` int(11) NOT NULL,
  `rut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comuna` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `encargado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codpostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formapago` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empleado` tinyint(1) NOT NULL,
  `cliente` tinyint(1) NOT NULL,
  `proveedor` tinyint(1) NOT NULL,
  `honorarios` tinyint(1) NOT NULL,
  `ctare` tinyint(1) NOT NULL,
  `flujo` tinyint(1) NOT NULL,
  `item` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingrerut`
--

INSERT INTO `ingrerut` (`id`, `rut`, `nombre`, `direccion`, `comuna`, `ciudad`, `encargado`, `giro`, `fono`, `celular`, `email`, `codpostal`, `formapago`, `empleado`, `cliente`, `proveedor`, `honorarios`, `ctare`, `flujo`, `item`) VALUES
(1, '646841864', 'MODELOS AL DIA LIMITADA', 'gigi', 'gigi', 'gig', 'igig', 'giigi', 'gigi', 'igi', 'gig', 'igi', 'igi', 1, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingre_rut`
--

CREATE TABLE `ingre_rut` (
  `id` int(11) NOT NULL,
  `rut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comuna` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `encargado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codpostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formapago` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empleado` tinyint(1) NOT NULL,
  `cliente` tinyint(1) NOT NULL,
  `proveedor` tinyint(1) NOT NULL,
  `honorarios` tinyint(1) NOT NULL,
  `ctare` tinyint(1) NOT NULL,
  `flujo` tinyint(1) NOT NULL,
  `item` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingre_rut`
--

INSERT INTO `ingre_rut` (`id`, `rut`, `nombre`, `direccion`, `comuna`, `ciudad`, `encargado`, `giro`, `fono`, `celular`, `email`, `codpostal`, `formapago`, `empleado`, `cliente`, `proveedor`, `honorarios`, `ctare`, `flujo`, `item`) VALUES
(3, '75871975', 'igjchg', 'jjkbkhv', 'kj.bk.hv', 'jhgkg', 'kgk.g', 'kgkhghj', '45474747', '7473', 'jfjjf', 'jgfjf', 'jgg', 1, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id`, `descripcion`) VALUES
(1, 'TECNICOS POR PELICULAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE `moneda` (
  `id` int(11) NOT NULL,
  `fecha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipom` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `okpide`
--

CREATE TABLE `okpide` (
  `id` int(11) NOT NULL,
  `centro` tinyint(1) NOT NULL,
  `flujo` tinyint(1) NOT NULL,
  `item` tinyint(1) NOT NULL,
  `rut` tinyint(1) NOT NULL,
  `td1` tinyint(1) NOT NULL,
  `doc1` tinyint(1) NOT NULL,
  `td2` tinyint(1) NOT NULL,
  `doc2` tinyint(1) NOT NULL,
  `proyec` tinyint(1) NOT NULL,
  `fecven` tinyint(1) NOT NULL,
  `glolin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opecredito`
--

CREATE TABLE `opecredito` (
  `id` int(11) NOT NULL,
  `tipovou_id` int(11) NOT NULL,
  `codoperacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `monto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numcuotas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `okvigente` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `opecredito`
--

INSERT INTO `opecredito` (`id`, `tipovou_id`, `codoperacion`, `descripcion`, `fecha`, `monto`, `numcuotas`, `okvigente`) VALUES
(1, 1, '0638517', 'Ptmo M$170.000', '2016-12-02', '170000000.00', 'd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `presup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `informe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exento` tinyint(1) NOT NULL,
  `afecto` tinyint(1) NOT NULL,
  `iva` tinyint(1) NOT NULL,
  `ivat` tinyint(1) NOT NULL,
  `impesp` tinyint(1) NOT NULL,
  `rethon` tinyint(1) NOT NULL,
  `arut` tinyint(1) NOT NULL,
  `oprcredit` tinyint(1) NOT NULL,
  `concilia` tinyint(1) NOT NULL,
  `flujo` tinyint(1) NOT NULL,
  `ccosto` tinyint(1) NOT NULL,
  `item` tinyint(1) NOT NULL,
  `grafica` tinyint(1) NOT NULL,
  `aproyecto` tinyint(1) NOT NULL,
  `tesorero` tinyint(1) NOT NULL,
  `egresos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rinicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rfin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmdifcamdio` tinyint(1) NOT NULL,
  `cmctasresul` tinyint(1) NOT NULL,
  `contradifcam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ctaresul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `numcuenta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id`, `presup`, `informe`, `exento`, `afecto`, `iva`, `ivat`, `impesp`, `rethon`, `arut`, `oprcredit`, `concilia`, `flujo`, `ccosto`, `item`, `grafica`, `aproyecto`, `tesorero`, `egresos`, `rinicio`, `rfin`, `cmdifcamdio`, `cmctasresul`, `contradifcam`, `ctaresul`, `empresa_id`, `numcuenta`, `descripcion`) VALUES
(2, 'h', 'j', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'y', 'y', 'y', 0, 0, 'h', 'h', 1, '120075', 'PROD. CRISTAL ENYESADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preimp`
--

CREATE TABLE `preimp` (
  `id` int(11) NOT NULL,
  `vouegre` tinyint(1) NOT NULL,
  `vouhono` tinyint(1) NOT NULL,
  `voucomp` tinyint(1) NOT NULL,
  `vouven` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repre`
--

CREATE TABLE `repre` (
  `id` int(11) NOT NULL,
  `rut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `repre`
--

INSERT INTO `repre` (`id`, `rut`, `nombre`, `direccion`, `cell`) VALUES
(1, 'bmwñkbn', 'knñbwk', 'ñknñ', 'ñknñ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tclave`
--

CREATE TABLE `tclave` (
  `id` int(11) NOT NULL,
  `descriptc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cdebe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chaber` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tclave`
--

INSERT INTO `tclave` (`id`, `descriptc`, `cdebe`, `chaber`) VALUES
(1, 'Santa Isabel Festival', 'r', 'f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposvoucher`
--

CREATE TABLE `tiposvoucher` (
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `idTiposvoucher` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tiposvoucher`
--

INSERT INTO `tiposvoucher` (`descripcion`, `idTiposvoucher`) VALUES
('Apertura', 1),
('Ingreso', 2),
('Egreso', 3),
('Traspaso', 4),
('Compras', 5),
('Honorarios', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovou`
--

CREATE TABLE `tipovou` (
  `id` int(11) NOT NULL,
  `cod` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipovou`
--

INSERT INTO `tipovou` (`id`, `cod`) VALUES
(1, 'AP'),
(2, 'BC'),
(3, 'BH'),
(4, 'CB'),
(5, 'CH'),
(6, 'CT'),
(7, 'DP'),
(8, 'FC'),
(9, 'FR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `nopedido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nofactura` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voucompra`
--

CREATE TABLE `voucompra` (
  `codvou` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `detalle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numdocu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaven` date NOT NULL,
  `fecharecep` date NOT NULL,
  `debe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `haber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saldo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numoreden` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idVoucompra` bigint(20) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `tipovou_id` int(11) NOT NULL,
  `tiposvoucher` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Ingrerut_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `voucompra`
--

INSERT INTO `voucompra` (`codvou`, `fecha`, `detalle`, `numdocu`, `fechaven`, `fecharecep`, `debe`, `haber`, `saldo`, `numoreden`, `idVoucompra`, `plan_id`, `tipovou_id`, `tiposvoucher`, `Ingrerut_id`) VALUES
('17090001', '2017-09-05', 'anvanjld', ',av', '2017-09-06', '2017-09-05', 'dvbd', 'w', 's', 'va', 1, 2, 8, 'Compras', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `balc`
--
ALTER TABLE `balc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `balclas`
--
ALTER TABLE `balclas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `caract`
--
ALTER TABLE `caract`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contabilizar`
--
ALTER TABLE `contabilizar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ctaesp`
--
ALTER TABLE `ctaesp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A02A2F003EBE953B` (`tipovou_id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `flujo`
--
ALTER TABLE `flujo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `folisist`
--
ALTER TABLE `folisist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_88BAF089521E1991` (`empresa_id`);

--
-- Indices de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- Indices de la tabla `ingrerut`
--
ALTER TABLE `ingrerut`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingre_rut`
--
ALTER TABLE `ingre_rut`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `okpide`
--
ALTER TABLE `okpide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opecredito`
--
ALTER TABLE `opecredito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_63B408CE3EBE953B` (`tipovou_id`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DD5A5B7D521E1991` (`empresa_id`);

--
-- Indices de la tabla `preimp`
--
ALTER TABLE `preimp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repre`
--
ALTER TABLE `repre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tclave`
--
ALTER TABLE `tclave`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposvoucher`
--
ALTER TABLE `tiposvoucher`
  ADD PRIMARY KEY (`idTiposvoucher`);

--
-- Indices de la tabla `tipovou`
--
ALTER TABLE `tipovou`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A25194771D6A7E42` (`cod`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `voucompra`
--
ALTER TABLE `voucompra`
  ADD PRIMARY KEY (`idVoucompra`),
  ADD KEY `IDX_FD287336CD0531B` (`Ingrerut_id`),
  ADD KEY `IDX_FD287336E899029B` (`plan_id`),
  ADD KEY `IDX_FD2873363EBE953B` (`tipovou_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `balc`
--
ALTER TABLE `balc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `balclas`
--
ALTER TABLE `balclas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `caract`
--
ALTER TABLE `caract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contabilizar`
--
ALTER TABLE `contabilizar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ctaesp`
--
ALTER TABLE `ctaesp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `flujo`
--
ALTER TABLE `flujo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `folisist`
--
ALTER TABLE `folisist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ingrerut`
--
ALTER TABLE `ingrerut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ingre_rut`
--
ALTER TABLE `ingre_rut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `moneda`
--
ALTER TABLE `moneda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `okpide`
--
ALTER TABLE `okpide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `opecredito`
--
ALTER TABLE `opecredito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `preimp`
--
ALTER TABLE `preimp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `repre`
--
ALTER TABLE `repre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tclave`
--
ALTER TABLE `tclave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tiposvoucher`
--
ALTER TABLE `tiposvoucher`
  MODIFY `idTiposvoucher` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipovou`
--
ALTER TABLE `tipovou`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `voucompra`
--
ALTER TABLE `voucompra`
  MODIFY `idVoucompra` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD CONSTRAINT `FK_A02A2F003EBE953B` FOREIGN KEY (`tipovou_id`) REFERENCES `tipovou` (`id`);

--
-- Filtros para la tabla `folisist`
--
ALTER TABLE `folisist`
  ADD CONSTRAINT `FK_88BAF089521E1991` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `opecredito`
--
ALTER TABLE `opecredito`
  ADD CONSTRAINT `FK_63B408CE3EBE953B` FOREIGN KEY (`tipovou_id`) REFERENCES `banco` (`id`);

--
-- Filtros para la tabla `voucompra`
--
ALTER TABLE `voucompra`
  ADD CONSTRAINT `FK_FD2873363EBE953B` FOREIGN KEY (`tipovou_id`) REFERENCES `tipovou` (`id`),
  ADD CONSTRAINT `FK_FD287336CD0531B` FOREIGN KEY (`Ingrerut_id`) REFERENCES `ingrerut` (`id`),
  ADD CONSTRAINT `FK_FD287336E899029B` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
