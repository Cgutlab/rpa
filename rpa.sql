-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-11-2018 a las 16:36:17
-- Versión del servidor: 10.1.36-MariaDB-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rpacom_osole`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidades`
--

CREATE TABLE `calidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `ruta` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `calidades`
--

INSERT INTO `calidades` (`id`, `titulo`, `descripcion`, `imagen`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(1, '<p><em>Asumiento un compromiso<br />\r\nde excelencia en la calidad<br />\r\nde nuestros productos</em></p>', '<p>Diatex es una empresa que desde sus inicios se ha dedicado a brindar a sus clientes productos de calidad y otorgarles todo el apoyo t&eacute;cnico que estos requieran. Hemos tomado un compromiso de calidad y eficiencia que quedan demostrados en cada uno de nuestros pasos.<br />\r\n<br />\r\nDiatex cuenta con una extensa variedad de productos para distintos tipos de industria. Entre los mismos podemos dividirlos y enumerarlos en dos: La rama textil y otra dedicada a la fabricaci&oacute;n de adhesivos industriales de diferentes caracter&iacute;sticas.</p>', 'imagen1.png', 'ruta', 'AA', NULL, '2018-06-13 08:04:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `id_padre` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `imagen`, `titulo`, `id_padre`, `orden`, `created_at`, `updated_at`) VALUES
(0, 'NO TOCAR', 'CATEGORIAS', NULL, 'A', '2018-09-19 14:19:57', '2018-09-19 14:19:57'),
(1, 'img_cat__ropa-de-trabajo.jpg', 'Ropa de Trabajo', '0', 'AA', '2018-09-26 22:16:20', '2018-09-26 22:43:13'),
(2, 'img_cat__buzo_gris.jpg', 'Ropa Urbana', '0', 'bb', '2018-09-26 22:27:57', '2018-10-04 17:05:24'),
(3, 'img_cat__z-remera-001.jpg', 'Indumentaria Publicitaria', '0', 'cc', '2018-09-26 22:28:52', '2018-09-26 22:31:40'),
(4, 'img_cat__calzado-seguridad.jpg', 'Calzado De Seguridad', '0', 'dd', '2018-09-26 22:36:08', '2018-09-26 22:36:08'),
(5, 'img_cat__prote-personal.jpg', 'Elementos de Protección Personal', '0', 'ee', '2018-09-26 22:39:38', '2018-09-26 22:39:38'),
(6, 'img_cat__promocionales.jpg', 'Artículos Promocionales', '0', 'ff', '2018-09-26 22:41:44', '2018-09-26 22:47:01'),
(7, 'img_cat__imagen-no-disponible.jpg', 'Complementos', '4', 'dd', '2018-09-27 15:42:27', '2018-10-04 14:36:23'),
(8, 'img_cat__17-Auditivo-Copa.jpg', 'Protección Auditiva', '5', 'ab', '2018-09-27 16:32:01', '2018-09-27 16:37:54'),
(11, 'img_cat__18--CASCO-con-Arnes.jpg', 'Protección de Cabeza y Rostro', '5', 'ae', '2018-09-27 16:37:55', '2018-09-27 16:40:41'),
(12, 'img_cat__imagen-no-disponible.jpg', 'Descartables', '5', 'af', '2018-09-27 16:38:25', '2018-10-04 15:08:44'),
(16, 'img_cat__Zapatilla-ATTACK.jpg', 'Zapatillas', '4', 'ff', '2018-09-27 16:44:52', '2018-10-04 14:44:07'),
(17, 'img_cat__20 TRAJE AGUA - CAMPERA y PANTALON b.jpg', 'Protección Impermeable', '1', 'hh', '2018-09-27 16:45:12', '2018-10-03 22:34:47'),
(18, 'img_cat__Zapato-OCKER.jpg', 'Zapatos', '4', 'gg', '2018-09-27 16:45:18', '2018-10-04 14:44:59'),
(20, 'img_cat__20 FAJA LUMBAR - Reforzada.jpg', 'Protección Lumbar', '5', 'al', '2018-09-27 16:48:12', '2018-09-27 17:39:59'),
(22, 'img_cat__23-Anteojo-Transparente.jpg', 'Protección Ocular', '5', 'an', '2018-09-27 16:49:04', '2018-09-27 17:41:29'),
(24, 'img_cat__imagen-no-disponible.jpg', 'Señalización y Emergencias', '5', 'ap', '2018-09-27 16:50:13', '2018-09-27 16:50:13'),
(26, 'img_cat__22  Guante Anticorte Latex Nitrilo.jpg', 'Guantes', '5', 'aq', '2018-09-27 16:51:12', '2018-10-04 15:15:16'),
(28, 'img_cat__24-RESPIRADOR-Descartable-BARBIJO.jpg', 'Respiradores Descartables', '23', 'as', '2018-09-27 16:52:14', '2018-09-27 17:19:48'),
(31, 'img_cat__ultralivianos.jpg', 'Ultralivianos', '4', 'eef', '2018-09-27 18:17:31', '2018-10-04 14:52:58'),
(32, 'img_cat__12-CAMISA-TRABAJO-industrial.jpg', 'Camisas', '1', 'aa', '2018-10-03 22:30:19', '2018-10-03 22:30:19'),
(33, 'img_cat__14-DELANTAL-con-PECHERA.jpg', 'Delantales', '1', 'bb', '2018-10-03 22:31:04', '2018-10-03 22:31:04'),
(34, 'img_cat__guarda-broches.png', 'Guardapolvos / ambos', '1', 'cc', '2018-10-03 22:31:32', '2018-10-03 22:31:32'),
(35, 'img_cat__10-PANTALON-JEAN-buffalo.jpg', 'Jeans', '1', 'dd', '2018-10-03 22:32:13', '2018-10-03 22:32:13'),
(36, 'img_cat__13-MAMELUCO-grafa-70.jpg', 'Mamelucos', '1', 'ee', '2018-10-03 22:33:01', '2018-10-03 22:33:01'),
(37, 'img_cat__11-PANTALON-TRABAJO-RECTO.jpg', 'Pantalones', '1', 'ff', '2018-10-03 22:33:50', '2018-10-03 22:34:10'),
(38, 'img_cat__buzo_gris.jpg', 'Buzos', '2', 'aa', '2018-10-03 22:50:07', '2018-10-03 22:50:07'),
(39, 'img_cat__chombas-de-jersey-blanca-con-cuello-tejido-D_NQ_NP_656187-MLA26689840970_012018-F.jpg', 'Chombas', '2', 'bb', '2018-10-03 22:51:39', '2018-10-03 22:51:39'),
(40, 'img_cat__campera-trucker-008.jpg', 'Camperas', '2', 'cc', '2018-10-03 22:52:11', '2018-10-03 22:52:11'),
(41, 'img_cat__campera-polar-007.jpg', 'Polares', '2', 'dd', '2018-10-03 22:52:39', '2018-10-03 22:54:33'),
(42, 'img_cat__remera.jpg', 'Remeras', '2', 'ee', '2018-10-03 22:54:09', '2018-10-03 22:54:09'),
(43, 'img_cat__alpargatas1.jpg', 'Alpargatas', '4', 'aa', '2018-10-04 14:39:26', '2018-10-04 14:39:26'),
(44, 'img_cat__bota-goma.jpg', 'Botas de Goma', '4', 'bb', '2018-10-04 14:41:57', '2018-10-04 14:41:57'),
(45, 'img_cat__botin-steel.jpg', 'Botines', '4', 'cc', '2018-10-04 14:42:30', '2018-10-04 14:42:30'),
(46, 'img_cat__buzofrisa-002.jpg', 'Buzos con logo', '3', 'aa', '2018-10-03 22:50:07', '2018-10-04 17:04:08'),
(47, 'img_cat__CHOMBA-PIQUE-PREMIUM---Manga-Corta.jpg', 'Chombas con logo', '3', 'bb', '2018-10-03 22:51:39', '2018-10-04 17:06:11'),
(48, 'img_cat__campera-004.jpg', 'Camperas con logo', '3', 'cc', '2018-10-03 22:52:11', '2018-10-04 17:06:35'),
(49, 'img_cat__buzo-polar-006.jpg', 'Polares con logo', '3', 'dd', '2018-10-03 22:52:39', '2018-10-04 17:08:19'),
(50, 'img_cat__remera.jpg', 'Remeras con logo', '3', 'ee', '2018-10-03 22:54:09', '2018-10-03 22:54:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_novedads`
--

CREATE TABLE `categorias_novedads` (
  `id` int(11) NOT NULL,
  `imagen` text,
  `titulo` text,
  `texto` text,
  `orden` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_novedads`
--

INSERT INTO `categorias_novedads` (`id`, `imagen`, `titulo`, `texto`, `orden`, `created_at`, `updated_at`) VALUES
(9, NULL, 'Exposición Rpa', NULL, 'AA', '2018-09-28 20:55:17', '2018-09-28 20:55:17'),
(10, NULL, 'RPA - NEWS', NULL, 'AB', '2018-10-12 23:45:29', '2018-10-12 23:45:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `imagen`, `titulo`, `texto`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'clientes__1.jpg', 'Volkswagen', NULL, 'AA', '2018-06-26 20:01:03', '2018-06-26 20:01:03'),
(2, 'clientes__2.jpg', 'FAVRA', NULL, 'BB', '2018-06-26 20:01:13', '2018-06-26 20:01:13'),
(3, 'clientes__3.jpg', 'INDAVE', NULL, 'CC', '2018-06-26 20:01:20', '2018-06-26 20:01:20'),
(4, 'clientes__4.jpg', 'GOLDCORP', NULL, 'DD', '2018-06-26 20:02:09', '2018-06-26 20:02:09'),
(5, 'clientes__5.jpg', 'MINERA SANTA CRUZ', NULL, 'EE', '2018-06-26 20:02:18', '2018-06-26 20:02:18'),
(6, 'clientes__6.jpg', 'National Oilwell Varco', NULL, 'FF', '2018-06-26 20:02:27', '2018-06-26 20:02:27'),
(7, 'clientes__7.jpg', 'CALDERA DE VAPOR', NULL, 'GG', '2018-06-26 20:02:34', '2018-06-26 20:02:34'),
(8, 'clientes__8.jpg', 'FLOWSERVE', NULL, 'HH', '2018-06-26 20:02:42', '2018-06-26 20:03:16'),
(9, 'clientes__9.jpg', 'VORTEX DESIGN SOLUTIONS', NULL, 'II', '2018-06-26 20:02:49', '2018-06-26 20:03:33'),
(10, 'clientes__10.jpg', 'GOLDCORP', NULL, 'JJ', '2018-06-26 20:02:57', '2018-06-26 20:03:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `codigo` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id`, `titulo`, `codigo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Blanco', 'white', 'AA', '2018-08-31 17:17:07', '2018-09-26 23:01:04'),
(2, 'Azul Marino', '#2f3662', 'BB', '2018-08-31 17:17:17', '2018-09-26 23:02:00'),
(3, 'Rojo', '#F44336', 'CC', '2018-08-31 17:17:26', '2018-09-26 23:02:14'),
(4, 'Gris Melange', '#b5b7ba', 'dd', '2018-09-19 14:25:28', '2018-09-27 14:20:19'),
(5, 'Azul Oscuro', '#0A1C34', 'BB', '2018-09-19 14:25:50', '2018-09-19 14:25:50'),
(6, 'Marrón', '#654A3F', 'CC', '2018-09-19 14:26:04', '2018-09-19 14:26:04'),
(7, 'Negro', '#000000', 'ab', '2018-09-19 14:26:17', '2018-09-27 14:17:40'),
(8, 'Marrón Claro', '#BD9F88', 'FF', '2018-09-19 14:29:48', '2018-09-19 14:29:48'),
(9, 'Verde', '#4CAF50', 'dd', '2018-09-27 14:18:10', '2018-09-27 14:18:10'),
(10, 'Gris Topo', '#675e61', 'ee', '2018-09-27 14:21:38', '2018-09-27 14:21:38'),
(11, 'Azulino', '#4187eb', 'gg', '2018-09-27 14:26:03', '2018-09-27 14:26:03'),
(12, 'Bordó', '#6a0d1f', 'hh', '2018-09-27 14:26:56', '2018-09-27 14:26:56'),
(13, 'Celeste', '#03A9F4', 'ii', '2018-09-27 14:27:19', '2018-09-27 14:27:19'),
(14, 'Azul Stone Wash', '#3c486e', 'jj', '2018-09-27 14:28:14', '2018-09-27 14:28:14'),
(15, 'Naranja', '#FF5722', 'kk', '2018-09-27 14:28:58', '2018-09-27 14:28:58'),
(16, 'Beige', '#fae7c7', 'll', '2018-09-27 14:29:43', '2018-09-27 14:29:43'),
(17, 'Amarillo', '#FFEB3B', 'mm', '2018-09-27 14:30:42', '2018-09-27 14:30:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color_producto`
--

CREATE TABLE `color_producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_color` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `color_producto`
--

INSERT INTO `color_producto` (`id`, `id_color`, `id_producto`, `created_at`, `updated_at`) VALUES
(44, 1, 1, NULL, NULL),
(45, 7, 1, NULL, NULL),
(46, 2, 1, NULL, NULL),
(47, 3, 1, NULL, NULL),
(48, 4, 1, NULL, NULL),
(49, 9, 1, NULL, NULL),
(50, 1, 2, NULL, NULL),
(51, 7, 2, NULL, NULL),
(52, 2, 2, NULL, NULL),
(53, 3, 2, NULL, NULL),
(54, 4, 2, NULL, NULL),
(55, 9, 2, NULL, NULL),
(56, 1, 3, NULL, NULL),
(57, 7, 3, NULL, NULL),
(58, 2, 3, NULL, NULL),
(59, 10, 3, NULL, NULL),
(60, 1, 4, NULL, NULL),
(61, 7, 4, NULL, NULL),
(62, 2, 4, NULL, NULL),
(63, 3, 4, NULL, NULL),
(64, 9, 4, NULL, NULL),
(65, 10, 4, NULL, NULL),
(66, 2, 5, NULL, NULL),
(68, 1, 7, NULL, NULL),
(69, 2, 7, NULL, NULL),
(70, 1, 8, NULL, NULL),
(71, 2, 8, NULL, NULL),
(72, 12, 8, NULL, NULL),
(73, 13, 8, NULL, NULL),
(74, 14, 9, NULL, NULL),
(75, 14, 10, NULL, NULL),
(78, 2, 12, NULL, NULL),
(79, 9, 12, NULL, NULL),
(80, 15, 12, NULL, NULL),
(81, 16, 12, NULL, NULL),
(82, 2, 13, NULL, NULL),
(83, 9, 13, NULL, NULL),
(84, 16, 13, NULL, NULL),
(85, 7, 14, NULL, NULL),
(86, 2, 14, NULL, NULL),
(87, 9, 14, NULL, NULL),
(88, 16, 14, NULL, NULL),
(89, 2, 15, NULL, NULL),
(90, 9, 15, NULL, NULL),
(91, 15, 15, NULL, NULL),
(92, 16, 15, NULL, NULL),
(93, 2, 16, NULL, NULL),
(94, 9, 16, NULL, NULL),
(95, 16, 16, NULL, NULL),
(96, 2, 17, NULL, NULL),
(97, 1, 18, NULL, NULL),
(98, 7, 18, NULL, NULL),
(99, 3, 18, NULL, NULL),
(103, 1, 24, NULL, NULL),
(104, 2, 24, NULL, NULL),
(105, 3, 24, NULL, NULL),
(106, 9, 24, NULL, NULL),
(107, 17, 24, NULL, NULL),
(108, 2, 27, NULL, NULL),
(109, 17, 27, NULL, NULL),
(110, 7, 28, NULL, NULL),
(111, 7, 29, NULL, NULL),
(112, 7, 30, NULL, NULL),
(113, 6, 30, NULL, NULL),
(114, 1, 32, NULL, NULL),
(115, 7, 42, NULL, NULL),
(116, 6, 53, NULL, NULL),
(117, 10, 53, NULL, NULL),
(118, 7, 60, NULL, NULL),
(119, 6, 60, NULL, NULL),
(120, 10, 60, NULL, NULL),
(121, 16, 60, NULL, NULL),
(122, 7, 61, NULL, NULL),
(123, 2, 61, NULL, NULL),
(124, 7, 63, NULL, NULL),
(125, 6, 63, NULL, NULL),
(126, 6, 64, NULL, NULL),
(130, 7, 65, NULL, NULL),
(131, 6, 65, NULL, NULL),
(132, 11, 6, NULL, NULL),
(133, 7, 55, NULL, NULL),
(134, 5, 66, NULL, NULL),
(135, 6, 66, NULL, NULL),
(136, 16, 66, NULL, NULL),
(137, 1, 68, NULL, NULL),
(138, 7, 68, NULL, NULL),
(139, 1, 81, NULL, NULL),
(140, 7, 81, NULL, NULL),
(141, 2, 81, NULL, NULL),
(142, 3, 81, NULL, NULL),
(143, 4, 81, NULL, NULL),
(144, 9, 81, NULL, NULL),
(145, 1, 82, NULL, NULL),
(146, 7, 82, NULL, NULL),
(147, 2, 82, NULL, NULL),
(148, 3, 82, NULL, NULL),
(149, 4, 82, NULL, NULL),
(150, 9, 82, NULL, NULL),
(151, 7, 83, NULL, NULL),
(152, 2, 83, NULL, NULL),
(153, 3, 83, NULL, NULL),
(154, 9, 83, NULL, NULL),
(155, 10, 83, NULL, NULL),
(156, 1, 84, NULL, NULL),
(157, 7, 84, NULL, NULL),
(158, 2, 84, NULL, NULL),
(159, 3, 84, NULL, NULL),
(160, 9, 84, NULL, NULL),
(161, 10, 84, NULL, NULL),
(162, 2, 85, NULL, NULL),
(163, 7, 98, NULL, NULL),
(164, 10, 98, NULL, NULL),
(165, 16, 98, NULL, NULL),
(166, 7, 99, NULL, NULL),
(167, 10, 99, NULL, NULL),
(168, 16, 99, NULL, NULL),
(169, 1, 86, NULL, NULL),
(170, 7, 86, NULL, NULL),
(171, 2, 86, NULL, NULL),
(172, 3, 86, NULL, NULL),
(173, 4, 86, NULL, NULL),
(174, 9, 86, NULL, NULL),
(175, 15, 86, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `subtitulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `ruta` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `imagen`, `titulo`, `subtitulo`, `texto`, `ruta`, `created_at`, `updated_at`) VALUES
(1, 'contenido__home-chica.jpg', 'SOMOS FABRICANTES', 'Soluciones Textiles para su Imagen Corporativa', '<p style=\"text-align:center\">Asesoramiento Integral para la Imagen de su Empresa.<br />\r\nExpertos en Soluciones Textiles que brinden Confort y Seguridad al Trabajador.</p>', 'familia', NULL, '2018-09-27 16:22:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci,
  `titulo` text COLLATE utf8_spanish_ci,
  `texto` text COLLATE utf8_spanish_ci,
  `orden` text COLLATE utf8_spanish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `correos`
--

INSERT INTO `correos` (`id`, `imagen`, `titulo`, `texto`, `orden`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Visión', '<p>&middot; Constituir una cartera comercial diversificada en n&uacute;mero de clientes y dirigida a diferentes sectores para asegurar la estabilidad.</p>\r\n\r\n<p>&middot; Consolidar las relaciones con nuevos clientes mediante b&uacute;squeda activa y conseguir el reconocimiento de sus profesionales.</p>\r\n\r\n<p>&middot; Mantener un crecimiento constante y sostenido.</p>\r\n\r\n<p>&middot; Hacer que la mejora de calidad y la innovaci&oacute;n impregnen nuestro d&iacute;a a d&iacute;a.</p>\r\n\r\n<p>&middot; Encontrar soluciones t&eacute;cnicas para el sector industrial y sus procesos productivos, de acuerdo con las nuevas tecnolog&iacute;as y materiales.</p>', 'AA', NULL, '2018-06-25 22:29:31'),
(2, '2__publications.jpg', 'Política de Calidad', '<p>INDOMATRIX est&aacute; gestionada por un ERP que ayuda a dirigir todos sus procesos y llevar un control exhaustivo, con trazabilidad inclusive, de todos los proyectos que realiza. Adicionalmente el portal Tecnonet proporciona a nuestros clientes transparencia y trazabilidad de los proyectos actuales o pasados. Nuestro sistema de gesti&oacute;n de la calidad, basado en las normas ISO 9001:2000 y EN9100, nos permite mejorar continuamente la eficacia y eficiencia de nuestros procesos y aumentar la satisfacci&oacute;n de nuestros clientes.</p>', 'CC', NULL, '2018-06-25 22:31:34'),
(3, NULL, '3', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `nombre`, `email`, `contrasena`, `created_at`, `updated_at`) VALUES
(1, 'PABLO OSOLE', 'pablo@osole.es', 'pablo', '2018-06-03 09:50:41', '2018-06-03 09:50:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `tipo`, `texto`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'titulo1', 'CASA CENTRAL', NULL, 'aa', NULL, '2018-10-04 15:48:17'),
(2, 'direccion1', 'Av. Bartolomé Mitre 1732<br>Florida Oeste, Buenos Aires', NULL, 'bb', NULL, '2018-09-27 19:05:58'),
(3, 'telefono1', '(+5411) 4760-4200', NULL, 'cc', NULL, '2018-10-02 19:41:11'),
(4, 'correo1', 'info@rpaweb.com.ar', NULL, 'dd', NULL, '2018-09-18 00:00:37'),
(5, 'titulo2', 'SUCURSAL  PACHECO', NULL, 'ee', NULL, '2018-08-23 22:47:15'),
(6, 'direccion2', 'A. Palacios 331, Troncos del Talar, Gral. Pacheco, Bs As', NULL, 'ff', NULL, '2018-09-27 19:07:09'),
(7, 'telefono2', '(011) 4859-2475', NULL, 'gg', NULL, '2018-08-23 22:47:36'),
(8, 'correo2', 'pacheco@rpa.com.ar', NULL, 'hh', NULL, '2018-08-23 22:47:43'),
(9, 'titulo3', 'SUCURSAL  MONTE HERMOSO', NULL, 'ii', NULL, '2018-08-23 22:48:02'),
(10, 'direccion3', 'San Lorenzo 88 y Av. Int. Majluf, Local 3, Monte Hermoso, Bs. As.', NULL, 'jj', NULL, '2018-09-27 19:07:38'),
(11, 'telefono3', '(02921) 48-4068', NULL, 'kk', NULL, '2018-08-23 22:48:14'),
(12, 'correo3', 'montehermoso@rpa.com.ar', NULL, 'll', NULL, '2018-08-23 22:48:21'),
(13, 'sucursales', 'Sucursales', NULL, 'mm', NULL, '2018-08-23 22:44:40'),
(14, 'imagen1', 'Imagen1', 'imgcontact__Foto-Florida-Local-1.jpg', 'aa', NULL, '2018-10-04 16:11:49'),
(15, 'imagen2', 'imagen2', 'imgcontact__local-pacheco.jpg', 'bb', NULL, '2018-10-04 16:11:56'),
(16, 'imagen3', 'imagen3', 'imgcontact__montehermoso.jpg', 'cc', NULL, '2018-10-11 19:05:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `subtitulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`id`, `titulo`, `subtitulo`, `texto`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'ISO 9001:2015', 'Ver Certificación', '', 'archivo1.pdf', '', NULL, NULL),
(2, 'Política de Calidad', 'Ver Certificación', '', 'archivo2.pdf', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `ruta` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `titulo`, `texto`, `imagen`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Pantalón Trabajo Recto Pampero', '<p>Somos los &uacute;nicos representantes en el pa&iacute;s &nbsp;de la firma &ldquo;DUPONT Chemicals Company&rdquo;. Tenemos a nuestro cargo la comercializaci&oacute;n de los productos ELVANOL T-25 y ELVANOL T-66, alcoholes polivin&iacute;licos desarrollados especialmente.</p>', 'destacados__11 PANTALON TRABAJO RECTO pampero.jpg', 'producto/13', 'AA', NULL, '2018-09-27 16:19:02'),
(2, 'Camisa Trabajo Pampero', '<p>Fabricaci&oacute;n de adhesivos industriales de diferentes caracter&iacute;sticas cubriendo las distintas gamas de pegado y maquinarias tales como cart&oacute;n corrugado, cerrado de cajas, pegado de estuches, trabajos de imprenta, etiquetado, carpinter&iacute;a.</p>', 'destacados__12-CAMISA-TRABAJO-pampero.jpg', 'producto/16', 'BB', NULL, '2018-09-27 16:19:57'),
(3, 'Indumentaria Publicitaria', '<p>Contamos con un equipo de ingenieros y t&eacute;cnicos expertos en el rubro, capacitados para comprender las necesidades de nuestros clientes, y as&iacute; poder ofrecer las soluci&oacute;n a medida apropiada.</p>', 'destacados__remera-001.jpg', 'categoria/3', 'CC', NULL, '2018-09-27 16:21:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `titulo2` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `texto2` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `politica` text COLLATE utf8_unicode_ci,
  `descripcion` text COLLATE utf8_unicode_ci,
  `imagen2` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `titulo`, `titulo2`, `texto`, `texto2`, `imagen`, `politica`, `descripcion`, `imagen2`, `created_at`, `updated_at`) VALUES
(1, 'EMPRESA', NULL, '<p>Hace ya m&aacute;s de 20 a&ntilde;os, en RPA fabricamos INDUMENTARIA PERSONALIZADA y de PROMOCION TEXTIL.</p>\r\n\r\n<p>Nuestros art&iacute;culos abarcan:</p>\r\n\r\n<p><span style=\"color:#e67e22\"><strong>REMERAS - CHOMBAS - CAMPERAS - CAMISAS - BUZOS - POLARES - NAUTICOS - GORROS y otros</strong></span>,&nbsp;</p>\r\n\r\n<p>que personalizamos con logos estampados, bordados y vinilos.</p>\r\n\r\n<p>Comercializamos tambi&eacute;n&nbsp;ROPA DE TRABAJO, CALZADO DE SEGURIDAD Y ELEMENTOS DE PROTECCION PERSONAL.</p>\r\n\r\n<p>Especializados en la confecci&oacute;n de <span style=\"color:#ff5506\">remeras, chombas, camisas, buzos, gorros, camperas, banderas y accesorios varios, estampados o bordados con logos, slogans y distintivos</span>, quienes formamos parte de esta empresa, nos hemos adaptado, a lo largo de nuestra trayectoria, a las necesidades de nuestros Clientes, necesidades que se han convertido en nuestros principales objetivos a cumplir a diario:</p>\r\n\r\n<p>- Optima calidad de materia prima y manufactura,</p>\r\n\r\n<p>- Optima relaci&oacute;n precio + calidad</p>\r\n\r\n<p>- Atenci&oacute;n personalizada de cada Cliente.</p>', '', 'empresa__RPA LOGO ICONO.jpg', NULL, NULL, 'empresa__empresa-novapaking-b.jpg', NULL, '2018-10-11 22:31:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipamientos`
--

CREATE TABLE `equipamientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `orden` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `imagen`, `orden`, `id_producto`, `created_at`, `updated_at`) VALUES
(1, 'galerias__remera-001.jpg', 'aa', 1, '2018-09-26 22:58:26', '2018-09-26 22:58:26'),
(2, 'galerias__buzofrisa-002.jpg', 'aa', 2, '2018-09-27 14:45:40', '2018-09-27 14:45:40'),
(3, 'galerias__imagen-no-disponible.jpg', 'aa', 3, '2018-09-27 14:48:35', '2018-09-27 14:48:35'),
(4, 'galerias__campera-polar-007.jpg', 'aa', 4, '2018-09-27 14:51:33', '2018-09-27 14:51:33'),
(5, 'galerias__campera-trucker-008.jpg', 'aa', 5, '2018-09-27 14:59:07', '2018-09-27 14:59:07'),
(6, 'galerias__guardapolvo.png', 'aa', 6, '2018-09-27 15:08:21', '2018-09-27 15:08:21'),
(7, 'galerias__guarda-broches.png', 'aa', 7, '2018-09-27 15:16:30', '2018-09-27 15:16:30'),
(8, 'galerias__08-PANTALON-NAUTICO.jpg', 'aa', 8, '2018-09-27 15:19:38', '2018-09-27 15:19:38'),
(9, 'galerias__imagen-no-disponible.jpg', 'aa', 9, '2018-09-27 15:21:16', '2018-09-27 15:21:16'),
(10, 'galerias__10-PANTALON-JEAN-buffalo.jpg', 'aa', 10, '2018-09-27 15:22:53', '2018-09-27 15:22:53'),
(11, 'galerias__11-PANTALON-TRABAJO-RECTO.jpg', 'aa', 12, '2018-09-27 15:53:16', '2018-09-27 15:53:16'),
(12, 'galerias__11 PANTALON TRABAJO RECTO pampero.jpg', 'aa', 13, '2018-09-27 15:55:19', '2018-09-27 15:55:19'),
(13, 'galerias__11 PANTALON CARGO REFORZADO.jpg', 'aa', 14, '2018-09-27 15:57:59', '2018-09-27 15:57:59'),
(14, 'galerias__12-CAMISA-TRABAJO-industrial.jpg', 'aa', 15, '2018-09-27 16:00:30', '2018-09-27 16:00:30'),
(15, 'galerias__12-CAMISA-TRABAJO-pampero.jpg', 'aa', 16, '2018-09-27 16:02:27', '2018-09-27 16:02:27'),
(16, 'galerias__13-MAMELUCO-grafa-70.jpg', 'aa', 17, '2018-09-27 16:03:29', '2018-09-27 16:03:29'),
(17, 'galerias__14-DELANTAL-con-PECHERA.jpg', 'aa', 18, '2018-09-27 16:13:37', '2018-09-27 16:13:37'),
(18, 'galerias__calzado-seguridad.jpg', 'aa', 29, '2018-09-27 16:48:17', '2018-09-27 16:48:17'),
(19, 'galerias__calzado-seguridad-b.jpg', 'bb', 29, '2018-09-27 16:48:24', '2018-09-27 16:48:24'),
(20, 'galerias__Zapato-TAURO-NEGRO.jpg', 'aa', 30, '2018-09-27 16:52:08', '2018-09-27 16:52:08'),
(21, 'galerias__Zapato-TAURO-NEGROb.jpg', 'bb', 30, '2018-09-27 16:52:12', '2018-09-27 16:52:12'),
(22, 'galerias__Zapato-Tauro-Blanco.jpg', 'aa', 32, '2018-09-27 16:54:16', '2018-09-27 16:54:16'),
(23, 'galerias__Zapato-Tauro-Blancob.jpg', 'bb', 32, '2018-09-27 16:54:21', '2018-09-27 16:54:21'),
(24, 'galerias__Botin-ARGOS-.jpg', 'aa', 37, '2018-09-27 16:59:52', '2018-09-27 16:59:52'),
(25, 'galerias__Botin-ARGOS-b.jpg', 'bb', 37, '2018-09-27 16:59:56', '2018-09-27 16:59:56'),
(26, 'galerias__zapa-break.jpg', 'aa', 42, '2018-09-27 17:02:36', '2018-09-27 17:02:36'),
(27, 'galerias__zapa-break-b.jpg', 'bb', 42, '2018-09-27 17:02:40', '2018-09-27 17:02:40'),
(28, 'galerias__Zapatilla-ATTACK.jpg', 'aa', 47, '2018-09-27 17:05:16', '2018-09-27 17:05:16'),
(29, 'galerias__Zapatilla-ATTACK-b.jpg', 'bb', 47, '2018-09-27 17:05:20', '2018-09-27 17:05:20'),
(30, 'galerias__zapa-vanguard.jpg', 'aa', 53, '2018-09-27 17:10:34', '2018-09-27 17:10:34'),
(31, 'galerias__zapa-vanguard-z.jpg', 'bb', 53, '2018-09-27 17:10:38', '2018-09-27 17:10:38'),
(32, 'galerias__imagen-no-disponible.jpg', 'aa', 20, '2018-09-27 17:14:02', '2018-09-27 17:14:02'),
(33, 'galerias__17Auditivo-Tapon.jpg', 'aa', 22, '2018-09-27 17:14:42', '2018-09-27 17:14:42'),
(34, 'galerias__17-Auditivo-Copa.jpg', 'aa', 54, '2018-09-27 17:15:19', '2018-09-27 17:15:19'),
(35, 'galerias__18--CASCO-con-Arnes.jpg', 'aa', 24, '2018-09-27 17:16:28', '2018-09-27 17:16:28'),
(36, 'galerias__imagen-no-disponible.jpg', 'aa', 25, '2018-09-27 17:17:04', '2018-09-27 17:17:04'),
(37, 'galerias__imagen-no-disponible.jpg', 'aa', 26, '2018-09-27 17:18:31', '2018-09-27 17:18:31'),
(38, 'galerias__24-RESPIRADOR-Descartable-BARBIJO.jpg', 'aa', 34, '2018-09-27 17:20:01', '2018-09-27 17:20:01'),
(39, 'galerias__20 CAPA AGUA - PILOTO Impermeable.jpg', 'aa', 27, '2018-09-27 17:24:16', '2018-09-27 17:24:16'),
(40, 'galerias__20 CAPA AGUA - PILOTO Impermeable b.jpeg', 'bb', 27, '2018-09-27 17:24:48', '2018-09-27 17:24:48'),
(41, 'galerias__20 TRAJE AGUA - CAMPERA y PANTALON.jpg', 'aa', 28, '2018-09-27 17:25:36', '2018-09-27 17:25:36'),
(42, 'galerias__20 TRAJE AGUA - CAMPERA y PANTALON b.jpg', 'ab', 28, '2018-09-27 17:25:44', '2018-09-27 17:25:44'),
(43, 'galerias__20 FAJA LUMBAR - Reforzada.jpg', 'aa', 51, '2018-09-27 17:40:19', '2018-09-27 17:40:19'),
(44, 'galerias__imagen-no-disponible.jpg', 'aa', 33, '2018-09-27 17:42:18', '2018-09-27 17:42:18'),
(45, 'galerias__imagen-no-disponible.jpg', 'aa', 31, '2018-09-27 17:42:31', '2018-09-27 17:42:31'),
(57, 'galerias__23-Anteojo-Transparente.jpg', 'aa', 35, '2018-09-27 17:55:31', '2018-09-27 17:55:31'),
(58, 'galerias__23-Anteojo-Transparente-b.jpg', 'bb', 35, '2018-09-27 17:55:39', '2018-09-27 17:55:39'),
(59, 'galerias__23-Anteojo-Oscuro.jpg', 'aa', 36, '2018-09-27 17:55:43', '2018-09-27 17:55:43'),
(60, 'galerias__bombacha-campo.jpg', 'aa', 66, '2018-09-27 18:11:47', '2018-09-27 18:11:47'),
(61, 'galerias__imagen-no-disponible.jpg', 'aa', 67, '2018-09-27 18:19:09', '2018-09-27 18:19:09'),
(63, 'galerias__funcional-spider.jpg', 'AA', 55, '2018-10-02 18:21:42', '2018-10-09 01:00:58'),
(64, 'galerias__funcional-iron.jpg', 'AA', 56, '2018-10-02 18:21:59', '2018-10-09 01:01:10'),
(65, 'galerias__funcional-ocker.jpg', 'AA', 57, '2018-10-02 18:22:12', '2018-10-09 01:01:23'),
(66, 'galerias__funcional-steel.jpg', 'AA', 58, '2018-10-02 18:25:01', '2018-10-09 01:01:34'),
(67, 'galerias__fuicional-cross.jpg', 'AA', 59, '2018-10-02 18:25:13', '2018-10-09 00:59:36'),
(68, 'galerias__funcional-lander.jpg', 'AA', 60, '2018-10-02 18:25:26', '2018-10-09 00:59:50'),
(69, 'galerias__soul-ultraliv.jpg', 'AA', 61, '2018-10-02 18:25:41', '2018-10-09 01:33:50'),
(70, 'galerias__horizon-ultraliv.jpg', 'AA', 62, '2018-10-02 18:25:53', '2018-10-09 01:34:00'),
(71, 'galerias__city-ultra.jpg', 'AA', 63, '2018-10-02 18:26:06', '2018-10-09 01:39:08'),
(72, 'galerias__frontier-ultra.jpg', 'AA', 64, '2018-10-02 18:26:17', '2018-10-09 01:42:15'),
(73, 'galerias__Zapatilla-Ultraliviana-Street-3.jpg', 'AA', 65, '2018-10-02 18:26:28', '2018-10-09 01:44:05'),
(74, 'galerias__noimg.jpg', 'AA', 68, '2018-10-02 23:54:13', '2018-10-02 23:54:13'),
(75, 'galerias__22-Guantes-de-Latex-Descartables.jpg', 'aa', 70, '2018-10-04 15:28:41', '2018-10-04 15:28:41'),
(76, 'galerias__22-Guante-Jersey-Precision-Impregnado.jpg', 'aa', 78, '2018-10-04 15:28:54', '2018-10-04 15:28:54'),
(77, 'galerias__22-Guante Acrilonitrilo.jpg', 'aa', 72, '2018-10-04 15:29:11', '2018-10-04 15:29:11'),
(78, 'galerias__22 Guante Impregnado Corto.jpg', 'aa', 79, '2018-10-04 15:29:36', '2018-10-04 15:29:36'),
(79, 'galerias__22  Guante Anticorte Latex Nitrilo.jpg', 'aa', 80, '2018-10-04 15:29:59', '2018-10-04 15:29:59'),
(80, 'galerias__imagen-no-disponible.jpg', 'aa', 71, '2018-10-04 15:31:39', '2018-10-04 15:31:39'),
(81, 'galerias__imagen-no-disponible.jpg', 'aa', 77, '2018-10-04 15:31:45', '2018-10-04 15:31:45'),
(82, 'galerias__imagen-no-disponible.jpg', 'aa', 76, '2018-10-04 15:31:50', '2018-10-04 15:31:50'),
(83, 'galerias__imagen-no-disponible.jpg', 'aa', 75, '2018-10-04 15:31:55', '2018-10-04 15:31:55'),
(84, 'galerias__imagen-no-disponible.jpg', 'aa', 74, '2018-10-04 15:32:00', '2018-10-04 15:32:00'),
(85, 'galerias__imagen-no-disponible.jpg', 'aa', 73, '2018-10-04 15:32:06', '2018-10-04 15:32:06'),
(86, 'galerias__buzo-003-sin-logo.jpg', 'aa', 81, '2018-10-04 15:53:16', '2018-10-04 15:53:16'),
(87, 'galerias__004-campera-frisa-de-algo.jpg', 'aa', 82, '2018-10-04 16:00:27', '2018-10-04 16:00:27'),
(88, 'galerias__sin-logo-chaleco-polar-005.jpg', 'aa', 83, '2018-10-04 16:09:35', '2018-10-04 16:09:35'),
(89, 'galerias__sin-logobuzo-polar-006.jpg', 'aa', 84, '2018-10-04 16:30:01', '2018-10-04 16:30:01'),
(90, 'galerias__sin-logochaleco-trucker-009.jpg', 'aa', 85, '2018-10-04 16:36:57', '2018-10-04 16:36:57'),
(91, 'galerias__buzofrisa-002.jpg', 'aa', 86, '2018-10-04 17:04:39', '2018-10-04 17:04:39'),
(92, 'galerias__buzo-003.jpg', 'aa', 87, '2018-10-04 17:04:48', '2018-10-04 17:04:48'),
(93, 'galerias__CHOMBA-PIQUE-PREMIUM---Manga-Corta.jpg', 'aa', 88, '2018-10-04 17:05:53', '2018-10-04 17:06:25'),
(94, 'galerias__campera-trucker-008.jpg', 'aa', 89, '2018-10-04 17:06:54', '2018-10-04 17:06:54'),
(95, 'galerias__campera-004.jpg', 'aa', 90, '2018-10-04 17:07:04', '2018-10-04 17:07:04'),
(96, 'galerias__chaleco-trucker-009.jpg', 'aa', 91, '2018-10-04 17:07:18', '2018-10-04 17:07:18'),
(97, 'galerias__campera-polar-007.jpg', 'aa', 92, '2018-10-04 17:09:02', '2018-10-04 17:09:02'),
(98, 'galerias__chaleco-polar-005.jpg', 'aa', 93, '2018-10-04 17:09:11', '2018-10-04 17:09:11'),
(99, 'galerias__buzo-polar-006.jpg', 'aa', 94, '2018-10-04 17:09:22', '2018-10-04 17:09:22'),
(100, 'galerias__funcional-lander2.jpg', 'bb', 60, '2018-10-09 00:59:57', '2018-10-09 00:59:57'),
(101, 'galerias__funcional-lander3.jpg', 'cc', 60, '2018-10-09 01:00:04', '2018-10-09 01:00:04'),
(102, 'galerias__funcional-lander4.jpg', 'dd', 60, '2018-10-09 01:00:08', '2018-10-09 01:00:08'),
(103, 'galerias__funcional-steel.jpg', 'aa', 96, '2018-10-09 01:06:26', '2018-10-09 01:06:26'),
(104, 'galerias__funcional-kupra.jpg', 'aa', 97, '2018-10-09 01:16:56', '2018-10-09 01:16:56'),
(105, 'galerias__capri-mujer-2.jpg', 'aa', 98, '2018-10-09 01:30:38', '2018-10-09 01:30:38'),
(106, 'galerias__capri-mujer3.jpg', 'aaa', 98, '2018-10-09 01:30:46', '2018-10-09 01:30:46'),
(107, 'galerias__capri-mujer.jpg', 'cc', 98, '2018-10-09 01:30:52', '2018-10-09 01:30:52'),
(108, 'galerias__bali-mujer-2.jpg', 'aa', 99, '2018-10-09 01:31:14', '2018-10-09 01:31:14'),
(109, 'galerias__bali-mujer.jpg', 'bb', 99, '2018-10-09 01:31:18', '2018-10-09 01:31:18'),
(110, 'galerias__bali-mujer-3.jpg', 'cc', 99, '2018-10-09 01:31:24', '2018-10-09 01:31:24'),
(111, 'galerias__city-ultra2.jpg', 'bb', 63, '2018-10-09 01:39:27', '2018-10-09 01:39:27'),
(112, 'galerias__city-ultra3.jpg', 'cc', 63, '2018-10-09 01:39:31', '2018-10-09 01:39:31'),
(113, 'galerias__city-ultra4.jpg', 'dd', 63, '2018-10-09 01:39:48', '2018-10-09 01:39:48'),
(114, 'galerias__Zapatilla-Ultraliviana-Street.jpg', 'bb', 65, '2018-10-09 01:44:16', '2018-10-09 01:44:16'),
(115, 'galerias__Zapatilla-Ultraliviana-Street--2.jpg', 'cc', 65, '2018-10-09 01:44:22', '2018-10-09 01:44:22'),
(116, 'galerias__Zapatilla-Ultraliviana-Street-4.jpg', 'dd', 65, '2018-10-09 01:44:27', '2018-10-09 01:44:27'),
(117, 'galerias__imagen-no-disponible.jpg', 'AA', 95, '2018-10-09 22:54:25', '2018-10-09 22:54:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias_novedads`
--

CREATE TABLE `galerias_novedads` (
  `id` int(11) NOT NULL,
  `imagen` text,
  `orden` text,
  `id_productos_novedads` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galerias_novedads`
--

INSERT INTO `galerias_novedads` (`id`, `imagen`, `orden`, `id_productos_novedads`, `created_at`, `updated_at`) VALUES
(1, 'img__instagram.png', 'AA', '1', '2018-09-28 17:13:39', '2018-09-28 17:22:49'),
(3, 'img__instag.png', 'AA', '1', '2018-09-28 17:23:24', '2018-09-28 17:23:24'),
(4, 'img__logos__favicon.png', 'AA', '2', '2018-09-28 17:58:20', '2018-09-28 17:58:20'),
(5, 'img__pinterest.png', 'BB', '2', '2018-09-28 17:58:28', '2018-09-28 17:58:28'),
(6, 'img__imgfacebook.png', 'AA', '3', '2018-09-28 17:58:37', '2018-09-28 17:58:37'),
(7, 'img__imgfacebook.png', 'BB', '3', '2018-09-28 17:58:46', '2018-09-28 17:58:46'),
(8, 'galerianovedad__WhatsApp Image 2018-09-27 at 15.12.39.jpeg', 'AA', '4', '2018-09-28 20:23:47', '2018-09-28 20:23:47'),
(9, 'galerianovedad__a1.jpg', 'BB', '4', '2018-09-28 20:28:33', '2018-09-28 20:28:33'),
(10, 'galerianovedad__f1.jpg', 'AA', '5', '2018-09-28 20:45:22', '2018-09-28 20:45:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home_clientes`
--

CREATE TABLE `home_clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `orden` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci,
  `tipo` text COLLATE utf8_unicode_ci,
  `orden` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `nombre`, `imagen`, `tipo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'header', 'logos__header.jpg', 'header', 'AA', NULL, '2018-07-11 14:38:08'),
(2, 'footer', 'logos__footer.png', 'footer', 'BB', NULL, '2018-08-23 16:31:01'),
(3, 'favicon', 'logos__logos__favicon.png', 'favicon', 'cc', NULL, '2018-09-27 16:45:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `imagen`, `titulo`, `orden`, `created_at`, `updated_at`) VALUES
(3, 'marcas__funcional.png', 'Funcional', 'aa', '2018-09-17 22:53:46', '2018-09-27 17:47:28'),
(4, 'marcas__gaucho.png', 'Gaucho', 'bb', '2018-09-17 22:54:00', '2018-09-27 17:47:40'),
(5, 'marcas__pampero.png', 'Pampero', 'dd', '2018-09-17 22:55:44', '2018-09-17 22:55:44'),
(6, 'marcas__ombu-logo-b.jpg', 'Ombu', 'ee', '2018-09-17 22:56:18', '2018-10-03 20:37:43'),
(7, 'marcas__libus.png', 'Libus', 'ff', '2018-09-17 22:56:33', '2018-09-27 17:48:07'),
(8, 'marcas__grafa.png', 'Grafa 70', 'gg', '2018-09-17 22:56:41', '2018-09-27 17:48:16'),
(9, 'marcas__voran.png', 'Voran', 'AA', '2018-09-19 14:22:43', '2018-09-27 17:48:30'),
(10, 'marcas__rpa.png', 'RPA', 'AA', '2018-09-24 23:43:50', '2018-09-27 17:48:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatos`
--

CREATE TABLE `metadatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `orden` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `metadatos`
--

INSERT INTO `metadatos` (`id`, `nombre`, `descripcion`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Home', 'AA', NULL, NULL),
(2, 'Empresa', 'Empresa', 'BB', NULL, NULL),
(3, 'Marcas', 'Marcas', 'CC', NULL, '2018-09-06 22:57:43'),
(4, 'Productos', 'Productos', 'DD', NULL, '2018-07-17 15:33:09'),
(5, 'Ofertas', 'Ofertas', 'EE', NULL, '2018-09-06 22:57:55'),
(6, 'Contacto', 'Contacto', 'FF', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_29_213140_create_redes_table', 1),
(4, '2018_04_29_213158_create_metadatos_table', 1),
(5, '2018_04_29_213216_create_sliders_table', 1),
(6, '2018_04_29_213239_create_destacados_table', 1),
(7, '2018_04_29_213253_create_datos_table', 1),
(8, '2018_04_29_213310_create_logos_table', 1),
(9, '2018_04_29_213326_create_empresas_table', 1),
(10, '2018_04_29_213344_create_equipamientos_table', 1),
(11, '2018_04_29_213400_create_servicios_table', 1),
(12, '2018_04_29_213418_create_clientes_table', 1),
(13, '2018_04_29_213549_create_descargas_table', 1),
(14, '2018_04_29_213638_create_home_clientes_table', 1),
(15, '2018_05_10_185158_create_productos_table', 1),
(18, '2018_05_17_145758_create_contenidos_table', 1),
(19, '2018_05_17_145826_create_categorias_table', 1),
(20, '2018_05_17_151858_create_listas_table', 1),
(22, '2018_05_10_185258_create_cuentas_table', 3),
(27, '2018_05_10_185258_create_productos_table', 4),
(28, '2018_05_10_185258_create_galerias_table', 5),
(29, '2018_05_10_185258_create_novedades_table', 5),
(30, '2018_05_10_185258_create_calidades_table', 6),
(56, '2014_10_12_100000_create_banner_contenido_table', 8),
(57, '2014_10_12_100000_create_banner_iconos_table', 8),
(58, '2014_10_12_100000_create_categorias_compresores_table', 8),
(59, '2014_10_12_100000_create_categorias_luminarias_table', 8),
(60, '2014_10_12_100000_create_categorias_novedads_table', 8),
(61, '2014_10_12_100000_create_clientes_table', 8),
(62, '2014_10_12_100000_create_modelos_contenidos_table', 9),
(63, '2014_10_12_100000_create_modelos_galerias_table', 9),
(65, '2014_10_12_100000_create_publicacions_table', 10),
(66, '2014_10_12_100000_create_tiempo_table', 10),
(67, '2014_10_12_100000_create_productos_compresors_table', 11),
(68, '2014_10_12_100000_create_productos_luminarias_table', 11),
(69, '2014_10_12_100000_create_productos_novedads_table', 11),
(70, '2015_10_12_100000_create_productos_compresors_table', 12),
(71, '2015_10_12_100000_create_productos_luminarias_table', 12),
(72, '2015_10_12_100000_create_productos_novedads_table', 12),
(73, '2015_10_12_100000_create_galerias_novedads_table', 13),
(77, '2015_10_12_100000_create_nova_anuncios_table', 14),
(78, '2015_10_12_100000_create_nova_categorias_table', 14),
(79, '2015_10_12_100000_create_nova_contenido_table', 14),
(80, '2015_10_12_100000_create_nova_productos_table', 15),
(81, '2015_10_12_100000_create_tecno_contenido_table', 15),
(82, '2015_10_12_100000_create_tecno_items_table', 16),
(83, '2015_10_12_100000_create_tecno_galerias_table', 17),
(86, '2021_10_12_100000_create_prc_items_table', 18),
(87, '2022_10_12_100000_create_prc_galerias_table', 18),
(90, '2020_01_01_100010_create_colores_table', 19),
(91, '2020_01_01_100010_create_tallas_table', 19),
(92, '2020_01_01_100040_create_categorias_table', 19),
(93, '2020_01_01_100040_create_marcas_table', 19),
(94, '2020_01_01_100050_create_productos_table', 19),
(95, '2020_01_01_100060_create_galerias_table', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modal_realizados`
--

CREATE TABLE `modal_realizados` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci,
  `imagen1` text COLLATE utf8_spanish_ci,
  `imagen2` text COLLATE utf8_spanish_ci,
  `titulo` text COLLATE utf8_spanish_ci,
  `subtitulo` text COLLATE utf8_spanish_ci,
  `texto` text COLLATE utf8_spanish_ci,
  `ruta` text COLLATE utf8_spanish_ci,
  `orden` text COLLATE utf8_spanish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modal_realizados`
--

INSERT INTO `modal_realizados` (`id`, `imagen`, `imagen1`, `imagen2`, `titulo`, `subtitulo`, `texto`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'modalrealizados__1.jpg', NULL, NULL, 'Cercos Perimetrales', 'Alambrado de Campos', '<p><strong><span style=\"color:#d41517\">TAREAS REALIZADAS</span></strong></p>\r\n\r\n<p>Instalamos cercos para piletas que te dar&aacute;n toda la tranquilidad que necesitas para la SEGURIDAD de tus chiquitos sin tener que renunciar a la est&eacute;tica ni a la facilidad de acceso a tu PILETA.</p>\r\n\r\n<p>Nuestra especializaci&oacute;n nos ha convertido en expertos en este sistema de protecci&oacute;n y en l&iacute;deres en su desarrollo, garantizando la m&aacute;xima calidad y seguridad.</p>', NULL, 'AA', '2018-07-03 21:22:05', '2018-07-03 21:22:05'),
(2, 'modalrealizados__2.jpg', 'modalrealizados__z1.jpg', 'modalrealizados__z2.jpg', 'Malla Hércules', 'Protección Infantil a Piletas', '<p><strong><span style=\"color:#d41517\">TAREAS REALIZADAS</span></strong></p>\r\n\r\n<p>Instalamos cercos para piletas que te dar&aacute;n toda la tranquilidad que necesitas para la SEGURIDAD de tus chiquitos sin tener que renunciar a la est&eacute;tica ni a la facilidad de acceso a tu PILETA.</p>\r\n\r\n<p>Nuestra especializaci&oacute;n nos ha convertido en expertos en este sistema de protecci&oacute;n y en l&iacute;deres en su desarrollo, garantizando la m&aacute;xima calidad y seguridad.</p>', NULL, 'BB', '2018-07-03 21:22:44', '2018-07-06 20:14:21'),
(3, 'modalrealizados__3.jpg', NULL, NULL, 'Alambrado Industrial', 'Seguridad y Tranquilidad de la mejor calidad', '<p><strong><span style=\"color:#d41517\">TAREAS REALIZADAS</span></strong></p>\r\n\r\n<p>Instalamos cercos para piletas que te dar&aacute;n toda la tranquilidad que necesitas para la SEGURIDAD de tus chiquitos sin tener que renunciar a la est&eacute;tica ni a la facilidad de acceso a tu PILETA.</p>\r\n\r\n<p>Nuestra especializaci&oacute;n nos ha convertido en expertos en este sistema de protecci&oacute;n y en l&iacute;deres en su desarrollo, garantizando la m&aacute;xima calidad y seguridad.</p>', NULL, 'CC', '2018-07-03 21:23:32', '2018-07-03 21:23:32'),
(4, 'modalrealizados__4.jpg', NULL, NULL, 'Portón de Quebracho Colorado', 'Instalación en Barrios Privados', '<p><strong><span style=\"color:#d41517\">TAREAS REALIZADAS</span></strong></p>\r\n\r\n<p>Instalamos cercos para piletas que te dar&aacute;n toda la tranquilidad que necesitas para la SEGURIDAD de tus chiquitos sin tener que renunciar a la est&eacute;tica ni a la facilidad de acceso a tu PILETA.</p>\r\n\r\n<p>Nuestra especializaci&oacute;n nos ha convertido en expertos en este sistema de protecci&oacute;n y en l&iacute;deres en su desarrollo, garantizando la m&aacute;xima calidad y seguridad.</p>', NULL, 'DD', '2018-07-03 21:23:55', '2018-07-03 21:25:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_contenidos`
--

CREATE TABLE `modelos_contenidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `seccion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modelos_contenidos`
--

INSERT INTO `modelos_contenidos` (`id`, `titulo`, `texto`, `seccion`, `created_at`, `updated_at`) VALUES
(1, 'Modelos para Fundición', '<p>A partir de los datos suministrados por el cliente (en formato CAD 2D CAD 3D, planos, piezas propias existentes o prototipos) nuestra oficina t&eacute;cnica realiza un estudio de viabilidad y adaptaci&oacute;n para fundici&oacute;n, de acuerdo con las indicaciones y criterios de las fundiciones y el cliente final, detectando inconvenientes y proponiendo posibles mejoras. S&oacute;lo entonces comienza el plan de producci&oacute;n, empleando la metodolog&iacute;a necesaria para garantizar la calidad y plazo de entrega exigido, con controles de verificaci&oacute;n intermedia propios de MEGAMODEL S.A. y en algunos casos del cliente</p>', 1, NULL, '2018-06-26 18:39:37'),
(2, 'Mecanizado de Piezas', 'Textos', 2, NULL, NULL),
(3, 'Indomatrix Energía', 'Textos', 3, NULL, NULL),
(4, 'Calibres de Control', 'Textos', 4, NULL, NULL),
(5, 'Mecanizados', 'Textos', 5, NULL, NULL),
(6, 'MATRICERÍA', 'Textos', 6, NULL, NULL),
(7, 'Servicios de Fundición', 'Textos', 7, NULL, NULL),
(8, 'Epoxies / Composites', 'Textos', 8, NULL, NULL),
(9, 'Ingeniería', 'Textos', 9, NULL, NULL),
(10, 'Desarrollo de Ideas', 'Textos', 10, NULL, NULL),
(11, 'Máquinas', 'Textos', 11, NULL, NULL),
(12, 'Compresores Airdin', 'Textos', 12, NULL, NULL),
(13, 'Minería', 'Textos', 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_galerias`
--

CREATE TABLE `modelos_galerias` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `seccion` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modelos_galerias`
--

INSERT INTO `modelos_galerias` (`id`, `imagen`, `titulo`, `orden`, `seccion`, `created_at`, `updated_at`) VALUES
(6, 'modelogaleria__1.jpg', '<p>ESPECIALISTAS EN V&Aacute;LVULAS, BOMBAS E IMPULSORES</p>', 'AA', '1', '2018-06-26 18:53:15', '2018-06-26 18:53:15'),
(7, 'modelogaleria__2.jpg', '<p>MODELO PARA CARTER DE TRACTOR</p>', 'BB', '1', '2018-06-26 18:53:24', '2018-06-26 18:53:24'),
(8, 'modelogaleria__3.jpg', '<p>MODELOS DE ALUMINIO</p>', 'CC', '1', '2018-06-26 18:53:31', '2018-06-26 18:53:31'),
(9, 'modelogaleria__4.jpg', '<p>MODELO MECANIZADO CNC PARA MATRIZ DE EPS</p>', 'DD', '1', '2018-06-26 18:53:38', '2018-06-26 18:53:38'),
(10, 'modelogaleria__5.jpg', '<p>MODELOS PARA ESFERAS &nbsp;CON MU&Ntilde;ON</p>', 'EE', '1', '2018-06-26 18:53:45', '2018-06-26 18:53:45'),
(11, 'modelogaleria__6.jpg', '<p>MODELOS DE MADERA</p>', 'FF', '1', '2018-06-26 18:53:56', '2018-06-26 18:53:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `correo` text COLLATE utf8_spanish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `newsletter`
--

INSERT INTO `newsletter` (`id`, `correo`, `created_at`, `updated_at`) VALUES
(2, 'correo2@correo.es', '2018-09-26 20:52:19', '2018-09-26 20:52:19'),
(3, 'nuevo@correo.es', '2018-09-26 20:53:27', '2018-09-26 20:53:27'),
(4, 'asdas@asdas.asd', '2018-09-26 21:02:55', '2018-09-26 21:02:55'),
(5, NULL, '2018-09-27 22:48:49', '2018-09-27 22:48:49'),
(6, 'info@rpaweb.com.ar', '2018-10-05 18:31:24', '2018-10-05 18:31:24'),
(7, 'info@rpaweb.com.ar', '2018-10-05 18:31:37', '2018-10-05 18:31:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nova_anuncios`
--

CREATE TABLE `nova_anuncios` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nova_anuncios`
--

INSERT INTO `nova_anuncios` (`id`, `imagen`, `titulo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'novaanuncio__1.jpg', 'Envases resistente', 'AA', '2018-07-16 20:23:28', '2018-07-31 19:34:01'),
(2, 'novaanuncio__2.jpg', 'Materiales de primera  calidad y larga vida útil', 'BB', '2018-07-16 20:23:36', '2018-07-16 20:23:36'),
(3, 'novaanuncio__3.jpg', 'Sistema de impresión de alta fidelidad', 'CC', '2018-07-16 20:23:42', '2018-07-16 20:23:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nova_categorias`
--

CREATE TABLE `nova_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nova_categorias`
--

INSERT INTO `nova_categorias` (`id`, `imagen`, `titulo`, `texto`, `orden`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Alimentos', NULL, 'AA', '2018-07-12 15:09:16', '2018-07-12 15:09:16'),
(2, NULL, 'Bolsas', NULL, 'BB', '2018-07-12 15:09:32', '2018-07-12 15:09:32'),
(3, NULL, 'Cuidado del Hogar', NULL, 'CC', '2018-07-12 15:09:39', '2018-07-12 15:09:39'),
(4, NULL, 'Cuidado Personal', NULL, 'DD', '2018-07-12 15:09:49', '2018-07-12 15:09:49'),
(5, NULL, 'Especiales', NULL, 'EE', '2018-07-12 15:09:54', '2018-07-12 15:09:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nova_contenido`
--

CREATE TABLE `nova_contenido` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nova_contenido`
--

INSERT INTO `nova_contenido` (`id`, `imagen`, `titulo`, `texto`, `created_at`, `updated_at`) VALUES
(1, 'novacontenido__productos.jpg', 'Líneas de Productos', NULL, NULL, '2018-07-16 15:20:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nova_galerias`
--

CREATE TABLE `nova_galerias` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `id_nova_productos` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nova_galerias`
--

INSERT INTO `nova_galerias` (`id`, `imagen`, `titulo`, `texto`, `orden`, `id_nova_productos`, `created_at`, `updated_at`) VALUES
(1, 'novaimg__bolsas-especiales.jpg', 'Bolsas Especiales', NULL, 'cc', 9, '2018-07-12 15:21:13', '2018-08-10 17:31:17'),
(2, 'novaimg__whey-03.jpg', 'Envases', NULL, 'zz', 4, '2018-07-12 15:22:27', '2018-08-10 17:46:49'),
(3, 'novaimg__karinat-frutas.jpg', 'Doy Pack Zipper', NULL, 'AA', 1, '2018-07-12 15:23:22', '2018-08-10 17:21:22'),
(4, 'novaimg__karinat-frutas-02.jpg', 'Cierre Zipper', NULL, 'BB', 1, '2018-07-12 15:23:40', '2018-08-10 17:21:31'),
(5, 'novaimg__karinat-frutas-03.jpg', 'Cierre Zipper', NULL, 'CC', 1, '2018-07-12 15:23:49', '2018-08-10 17:21:36'),
(6, 'novaimg__doypack2.jpg', 'Alimentos', NULL, 'AA', 2, '2018-07-12 15:24:29', '2018-07-31 19:12:52'),
(7, 'novaimg__suavizantes.jpg', 'Hogar ~ Higiene', NULL, 'AA', 5, '2018-07-12 15:25:13', '2018-08-10 18:08:24'),
(8, 'novaimg__jabones.jpg', 'Doy Pack Jabón Líquido', NULL, 'AA', 6, '2018-07-12 15:25:49', '2018-08-10 17:31:47'),
(9, 'novaimg__doypack.jpg', 'Alimentos', NULL, 'AA', 3, '2018-07-12 15:27:02', '2018-07-31 19:13:58'),
(10, 'novaimg__bebe-.jpg', 'Cuidado Personal', NULL, 'AA', 8, '2018-07-12 15:27:32', '2018-08-10 17:32:14'),
(11, 'novaimg__ii.jpg', 'Hogar ~ Higiene', NULL, 'AA', 7, '2018-07-12 15:27:59', '2018-07-12 15:27:59'),
(16, 'novaimg__florida-02.jpg', 'Doy Pack con Pico Corner', NULL, 'aa', 10, '2018-07-31 19:18:01', '2018-08-10 17:49:53'),
(17, 'novaimg__don-can.jpg', 'Bolsas Alimento para Perros', NULL, 'aa', 11, '2018-07-31 19:32:47', '2018-08-10 18:00:38'),
(18, 'novaimg__suavizantes-02.jpg', 'Doy Pack Suavizante', NULL, 'bb', 5, '2018-07-31 19:35:42', '2018-08-10 18:08:28'),
(19, 'novaimg__flower.jpg', 'Doy Pack', NULL, 'bb', 6, '2018-07-31 19:39:57', '2018-07-31 19:39:57'),
(20, 'novaimg__doypack-puzzle.jpg', 'Puzzle Avengers', NULL, 'cc', 12, '2018-07-31 19:43:38', '2018-08-10 17:19:55'),
(21, 'novaimg__whey-protein.jpg', 'Suplemento', NULL, 'aa', 13, '2018-07-31 20:23:06', '2018-07-31 20:23:06'),
(22, 'novaimg__whey-proteinb.jpg', 'Suplemento', NULL, 'bb', 13, '2018-07-31 20:23:16', '2018-07-31 20:23:16'),
(23, 'novaimg__candela-04.jpg', 'Bolsas', NULL, 'aa', 14, '2018-07-31 20:25:53', '2018-08-10 17:56:31'),
(24, 'novaimg__candela-02.jpg', 'Bolsas Indumentaria', NULL, 'bb', 14, '2018-07-31 20:26:22', '2018-08-10 17:56:41'),
(25, 'novaimg__havana-y-top-04.jpg', 'Bolsa Zipper', NULL, 'aa', 15, '2018-07-31 20:30:37', '2018-08-10 17:54:50'),
(26, 'novaimg__havana-y-top.jpg', 'Mini Alfajores', NULL, 'bb', 15, '2018-07-31 20:30:48', '2018-08-10 17:55:05'),
(27, 'novaimg__plasma-.jpg', 'Cierre Zipper', NULL, 'aa', 16, '2018-07-31 20:33:24', '2018-08-10 17:26:26'),
(28, 'novaimg__mayo-01.jpg', 'Aderezos', NULL, 'aa', 17, '2018-07-31 20:35:33', '2018-08-10 17:50:48'),
(29, 'novaimg__aiken-.jpg', 'Alimentos', NULL, 'cc', 18, '2018-07-31 20:40:55', '2018-08-10 17:25:53'),
(30, 'novaimg__babysec-clasica.jpg', 'Babysec', NULL, 'aa', 19, '2018-07-31 20:45:45', '2018-07-31 20:45:45'),
(31, 'novaimg__whey.jpg', 'Bolsa', NULL, 'aa', 4, '2018-07-31 22:06:44', '2018-08-10 17:46:40'),
(33, 'novaimg__rebelle.jpg', 'Bolsas Pouch', NULL, 'aa', 20, '2018-08-10 17:18:18', '2018-08-10 17:18:18'),
(34, 'novaimg__rebelle002.jpg', 'Bolsas Pouch', NULL, 'bb', 20, '2018-08-10 17:18:33', '2018-08-10 17:18:33'),
(35, 'novaimg__puzzle-avengers.jpg', 'Puzzle Avengers', NULL, 'aa', 12, '2018-08-10 17:19:21', '2018-08-10 17:19:21'),
(36, 'novaimg__puzzle-avengers-02.jpg', 'Puzzle Avengers', NULL, 'bb', 12, '2018-08-10 17:19:41', '2018-08-10 17:19:41'),
(37, 'novaimg__budget.jpg', 'Doy Pack', NULL, 'aa', 21, '2018-08-10 17:23:44', '2018-08-10 17:23:44'),
(38, 'novaimg__budget-02.jpg', 'Doy Pack', NULL, 'bb', 21, '2018-08-10 17:24:05', '2018-08-10 17:24:05'),
(39, 'novaimg__budget-03.jpg', 'Doy Pack', NULL, 'cc', 21, '2018-08-10 17:24:14', '2018-08-10 17:24:14'),
(40, 'novaimg__aiken-03.jpg', 'Cierre Zipper y Ventana', NULL, 'aa', 18, '2018-08-10 17:24:48', '2018-08-10 17:24:48'),
(41, 'novaimg__aiken-02.jpg', 'Cierre Zipper y Ventana', NULL, 'bb', 18, '2018-08-10 17:25:00', '2018-08-10 17:25:00'),
(42, 'novaimg__plasma-02.jpg', 'Cierre Zipper', NULL, 'bb', 16, '2018-08-10 17:26:44', '2018-08-10 17:26:44'),
(43, 'novaimg__doypack-solo.jpg', 'Doy Pack simple', NULL, 'aa', 22, '2018-08-10 17:29:07', '2018-08-10 17:29:07'),
(44, 'novaimg__kraft.jpg', 'Kraft', NULL, 'aa', 9, '2018-08-10 17:29:59', '2018-08-10 17:29:59'),
(45, 'novaimg__kraft-02.jpg', 'Doy Pack', NULL, 'bb', 9, '2018-08-10 17:30:53', '2018-08-10 17:30:53'),
(46, 'novaimg__bebe-02.jpg', 'Doy Pack', NULL, 'bb', 8, '2018-08-10 17:32:36', '2018-08-10 17:32:36'),
(47, 'novaimg__bebe-03.jpg', 'Doy Pack cierre Zipper', NULL, 'cc', 8, '2018-08-10 17:33:47', '2018-08-10 17:33:47'),
(48, 'novaimg__bebe-04.jpg', 'Doy Pack', NULL, 'dd', 8, '2018-08-10 17:34:16', '2018-08-10 17:34:16'),
(49, 'novaimg__leven.jpg', 'Puntas redondeadas', NULL, 'aa', 23, '2018-08-10 17:36:40', '2018-08-10 17:36:40'),
(50, 'novaimg__leven-02.jpg', 'Puntas redondeadas', NULL, 'bb', 23, '2018-08-10 17:36:52', '2018-08-10 17:36:52'),
(51, 'novaimg__leven-03.jpg', 'Puntas redondeadas', NULL, 'cc', 23, '2018-08-10 17:37:00', '2018-08-10 17:37:00'),
(52, 'novaimg__chicago.jpg', 'Chicago', NULL, 'aa', 24, '2018-08-10 17:41:31', '2018-08-10 17:41:31'),
(53, 'novaimg__whey-02.jpg', 'Cierre Zipper', NULL, 'cc', 4, '2018-08-10 17:47:23', '2018-08-10 17:47:23'),
(54, 'novaimg__whey-06.jpg', 'Suplemento', NULL, 'cc', 13, '2018-08-10 17:48:15', '2018-08-10 17:48:15'),
(55, 'novaimg__florida-01.jpg', 'Pico Corner', NULL, 'bb', 10, '2018-08-10 17:50:04', '2018-08-10 17:50:04'),
(56, 'novaimg__mayo-04.jpg', 'Mayonesa', NULL, 'aa', 25, '2018-08-10 17:51:40', '2018-08-10 17:51:40'),
(57, 'novaimg__mayo-03.jpg', 'Mayonesas', NULL, 'bb', 17, '2018-08-10 17:52:02', '2018-08-10 17:52:02'),
(58, 'novaimg__canfeed-01.jpg', 'Alimento para mascotas', NULL, 'aa', 26, '2018-08-10 17:54:17', '2018-08-10 17:54:17'),
(59, 'novaimg__havana-y-top-02.jpg', 'Mini Alfajores', NULL, 'cc', 15, '2018-08-10 17:55:44', '2018-08-10 17:55:44'),
(60, 'novaimg__candela-03.jpg', 'Bolsas Indumentaria', NULL, 'cc', 14, '2018-08-10 17:57:03', '2018-08-10 17:57:03'),
(61, 'novaimg__jazmin.jpg', 'Jazmin chebar', NULL, 'aa', 27, '2018-08-10 17:59:40', '2018-08-10 17:59:40'),
(62, 'novaimg__jazmin02.jpg', 'Jazmin chebar', NULL, 'bb', 27, '2018-08-10 17:59:48', '2018-08-10 17:59:48'),
(63, 'novaimg__don-can-03.jpg', 'Pet Food', NULL, 'bb', 11, '2018-08-10 18:01:02', '2018-08-10 18:01:02'),
(64, 'novaimg__don-can-02.jpg', 'Pet Food', NULL, 'cc', 11, '2018-08-10 18:01:13', '2018-08-10 18:01:13'),
(65, 'novaimg__don-can-04.jpg', 'Pet Food', NULL, 'aa', 28, '2018-08-10 18:02:31', '2018-08-10 18:02:31'),
(66, 'novaimg__don-can-05.jpg', 'Pet Food', NULL, 'bb', 28, '2018-08-10 18:02:39', '2018-08-10 18:02:39'),
(67, 'novaimg__don-can-06.jpg', 'Pet Food', NULL, 'cc', 28, '2018-08-10 18:02:46', '2018-08-10 18:02:46'),
(68, 'novaimg__baudap-.jpg', 'Bolsas Agricultura', NULL, 'aa', 29, '2018-08-10 18:04:32', '2018-08-10 18:04:32'),
(69, 'novaimg__baudap-02.jpg', 'Bolsas Agricultura', NULL, 'bb', 29, '2018-08-10 18:04:39', '2018-08-10 18:04:39'),
(70, 'novaimg__baudap-03.jpg', 'Bolsas Agricultura', NULL, 'cc', 29, '2018-08-10 18:04:47', '2018-08-10 18:04:47'),
(71, 'novaimg__glifomax.jpg', 'Bolsas Agricultura', NULL, 'dd', 30, '2018-08-10 18:06:19', '2018-08-10 18:07:29'),
(72, 'novaimg__glifomax01.jpg', 'Fondo pegado', NULL, 'bb', 30, '2018-08-10 18:06:31', '2018-08-10 18:06:31'),
(73, 'novaimg__glifomax02.jpg', 'Cosido crepe', NULL, 'aa', 30, '2018-08-10 18:06:44', '2018-08-10 18:07:34'),
(74, 'novaimg__suavizantes-04.jpg', 'Suavizantes', NULL, 'cc', 5, '2018-08-10 18:08:52', '2018-08-10 18:08:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nova_productos`
--

CREATE TABLE `nova_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `subtitulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `ruta` text COLLATE utf8_unicode_ci,
  `id_nova_categorias` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nova_productos`
--

INSERT INTO `nova_productos` (`id`, `titulo`, `subtitulo`, `texto`, `orden`, `ruta`, `id_nova_categorias`, `created_at`, `updated_at`) VALUES
(1, 'Doy Pack cierre Zipper', 'Aderezos y Encurtidos', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita.</p>', 'CC', NULL, 1, '2018-07-12 15:13:01', '2018-07-31 20:35:59'),
(2, 'Doy Pack', 'Encurtidos', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita.</p>', 'DD', NULL, 1, '2018-07-12 15:14:12', '2018-07-31 20:36:20'),
(4, 'Cierre Zipper y Manija', 'Bolsas', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'BB', NULL, 2, '2018-07-12 15:15:39', '2018-07-31 19:28:34'),
(5, 'Doy Pack Simple', 'Cuidado del Hogar', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita</p>', 'EE', NULL, 3, '2018-07-12 15:16:47', '2018-07-31 19:35:10'),
(6, 'Doy Pack Simple', 'Cuidado Personal', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita</p>', 'aa', NULL, 4, '2018-07-12 15:17:42', '2018-07-31 20:46:10'),
(8, 'Doy Pack cierre Zipper', 'Cuidado Personal', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita.</p>', 'bb', NULL, 4, '2018-07-12 15:19:15', '2018-08-10 17:33:16'),
(9, 'Doy Pack Kraft con Ventana', 'Desarrollos Especiales', '<p>Desarrollos especiales para necesidades espec&iacute;ficas.</p>', 'AA', NULL, 5, '2018-07-12 15:20:00', '2018-08-10 17:30:13'),
(10, 'Doy Pack con Pico Corner', 'Alimentos', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita.</p>', 'gg', NULL, 1, '2018-07-31 19:17:00', '2018-07-31 19:17:00'),
(11, 'Bolsas', 'Bolsas Pet Food', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros</p>', 'bb', NULL, 2, '2018-07-31 19:32:11', '2018-07-31 19:32:11'),
(12, 'Cierre Zipper', 'Bolsas Especiales', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita</p>', 'bb', NULL, 2, '2018-07-31 19:43:21', '2018-08-06 20:42:37'),
(13, 'Cierre Zipper y Manija', 'Bolsas Suplementos', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'cc', NULL, 2, '2018-07-31 20:22:41', '2018-07-31 20:22:41'),
(14, 'Bolsas', 'Bolsas Especiales', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'dd', NULL, 2, '2018-07-31 20:25:33', '2018-07-31 22:10:31'),
(15, 'Cierre Zipper y Manija', 'Alimentos', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'dd', NULL, 2, '2018-07-31 20:30:06', '2018-07-31 20:30:06'),
(16, 'Cierre Zipper', 'Polvo Decolorante', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita</p>', 'cc', NULL, 4, '2018-07-31 20:32:36', '2018-07-31 20:32:36'),
(17, 'Doy Pack Aderezos', 'Aderezos', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita</p>', 'dd', NULL, 1, '2018-07-31 20:35:15', '2018-07-31 20:35:15'),
(18, 'Cierre Zipper y Ventana', 'Alimentos', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita.</p>', 'ff', NULL, 1, '2018-07-31 20:40:35', '2018-07-31 20:41:19'),
(19, 'Con Cierre Zipper', 'Cuidado Personal', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita</p>', 'dd', NULL, 4, '2018-07-31 20:45:25', '2018-07-31 20:45:25'),
(20, 'Bolsas Pouch', 'Indumentaria', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'ff', NULL, 2, '2018-08-10 17:17:57', '2018-08-10 17:17:57'),
(21, 'Doy Pack con cierre Zipper', 'Snack', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'ff', NULL, 1, '2018-08-10 17:23:05', '2018-08-10 17:23:05'),
(22, 'Variedad de terminaciones', 'Sin impresión', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'bb', NULL, 5, '2018-08-10 17:28:12', '2018-08-10 17:28:12'),
(23, 'Doy Pack Puntas Redondeadas', 'Snacks saludables', '<p>Desarrollos especiales para necesidades espec&iacute;ficas.</p>\r\n\r\n<p>Envase con terminaci&oacute;n de puntas redondeadas</p>', 'cc', NULL, 5, '2018-08-10 17:36:18', '2018-08-10 17:36:18'),
(24, 'Doy Pack cierre Zipper', 'Cosmética', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita.</p>', 'hh', NULL, 2, '2018-08-10 17:41:05', '2018-08-10 19:31:34'),
(25, 'Doy Pack pico superior', 'Aderezos', '<p>Sin dudas un formato de envase que brinda m&uacute;ltiples beneficios:</p>\r\n\r\n<p>-Marketing, permite una comunicaci&oacute;n 360&ordm; de imagen y texto.</p>\r\n\r\n<p>-Consumidor: F&aacute;cil de usar, Con Pico Frontal o Pico Corner, Con cierre tipo Zipper.</p>\r\n\r\n<p>-Log&iacute;stica, mayor eficiencia en el transporte.</p>\r\n\r\n<p>En Novapaking tenemos el Doy Pack que su producto necesita</p>', 'zz', NULL, 1, '2018-08-10 17:51:23', '2018-08-10 17:52:38'),
(26, 'Doy Pack cierre Zipper y Manija', 'Pet Food', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros</p>', 'ii', NULL, 2, '2018-08-10 17:53:50', '2018-08-10 17:53:50'),
(27, 'Terminación Crepe cosido', 'Bolsas Indumentaria', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'ea', NULL, 2, '2018-08-10 17:59:18', '2018-08-10 17:59:18'),
(28, 'Pet Food Grandes', 'Pet Food', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'kk', NULL, 2, '2018-08-10 18:02:17', '2018-08-10 18:02:17'),
(29, 'Bolsas Agricultura', 'Bolsas', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'll', NULL, 2, '2018-08-10 18:04:10', '2018-08-10 18:04:10'),
(30, 'Cierre Crepe Cosido', 'Bolsas', '<p>Nuestra versatilidad y flexibilidad nos permiten ofrecer al mercado casi cualquier formato de bolsa confeccionada y lista para usar.</p>\r\n\r\n<p>En Novapaking producimos Bolsas de diferentes tama&ntilde;os y estructuras que nos permiten abastecer a sectores como Pet Food, Semillas, Caf&eacute;, Yerba Mate, Harinas, Productos c&aacute;rnicos, entre otros.</p>', 'mm', NULL, 2, '2018-08-10 18:05:52', '2018-08-10 18:07:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `visible` tinyint(1) DEFAULT '1',
  `oferta` enum('ninguna','descuento','oportunidad','ultimos') COLLATE utf8_unicode_ci DEFAULT NULL,
  `ficha` text COLLATE utf8_unicode_ci,
  `id_categoria` int(10) UNSIGNED DEFAULT NULL,
  `id_marca` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `titulo`, `texto`, `orden`, `visible`, `oferta`, `ficha`, `id_categoria`, `id_marca`, `created_at`, `updated_at`) VALUES
(1, '-', 'Remera (Jersey Algodón)', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Manga Recta - Corta<br />\r\n&middot; Manga Recta - Larga<br />\r\n&middot; Manga Ranglan - Corta</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 4XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'aa', 1, 'oportunidad', NULL, 42, 10, '2018-09-26 22:57:30', '2018-09-27 14:39:11'),
(2, '-', 'Buzo (Frisa Algodón)', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Buzo - Cuello Redondo<br />\r\n&middot; Buzo - Cuello Alto Medio Cierre<br />\r\n&middot; Campera Cierre Entero<br />\r\n&middot; Opcional: Capucha</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 4XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'ab', 1, 'descuento', NULL, 38, 10, '2018-09-27 14:44:48', '2018-09-27 14:44:48'),
(3, '-', 'Chomba (Pique Algodón)', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Manga Corta<br />\r\n&middot; Manga&nbsp;Larga<br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado &middot; Vinilo</p>\r\n\r\n<p>&nbsp;</p>', 'ac', 1, 'ninguna', NULL, 39, 10, '2018-09-27 14:47:52', '2018-09-27 14:47:52'),
(4, '-', 'Campera Polar', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cuello Alto&nbsp;<br />\r\n&middot; Cierre Completo<br />\r\n&middot; Con Bolsillos<br />\r\n&middot; Opcional en Cintura: Tankas y Tiras de Ajuste</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado</p>', 'ad', 1, 'ninguna', NULL, 41, 10, '2018-09-27 14:50:33', '2018-10-04 16:32:11'),
(5, '-', 'Trucker', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; CAMPERA Sin Capucha - con Guata Matelaseada Interior<br />\r\n&middot; CAMPERA con CAPUCHA - con Guata Matelaseada Interior<br />\r\n&middot; CHALECO - con Polar Interior</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado</p>', 'ae', 1, 'ninguna', NULL, 40, 10, '2018-09-27 14:58:40', '2018-09-27 14:58:40'),
(6, '-', 'Guardapolvo Modelo Botones', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Tela Algod&oacute;n Poliester</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 64</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'aa', 1, 'ultimos', NULL, 34, 10, '2018-09-27 15:07:59', '2018-09-27 18:06:48'),
(7, '-', 'Guardapolvo Modelo Broches', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Tela Algod&oacute;n Poli&eacute;ster</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 60</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'ab', 1, 'ninguna', NULL, 34, 10, '2018-09-27 15:10:24', '2018-09-27 15:10:24'),
(8, '-', 'Pantalón Náutico', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cintura Elastizada<br />\r\n&middot; Tela Algod&oacute;n Poli&eacute;ster</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 64</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'ac', 1, 'ninguna', NULL, 37, 10, '2018-09-27 15:19:16', '2018-09-27 15:19:16'),
(9, '-', 'Camisa Jean', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Azul Stone Wash</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 56</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'ad', 1, 'ninguna', NULL, 35, 10, '2018-09-27 15:20:53', '2018-09-27 15:20:53'),
(10, '-', 'Pantalón Jean Buffalo', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Azul Stone Wash<br />\r\n&middot; Marca Buffalo</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 60</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'ae', 1, 'ninguna', NULL, 35, 10, '2018-09-27 15:22:33', '2018-09-27 15:22:33'),
(12, '-', 'Pantalón Trabajo Recto', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cl&aacute;sico - Con Cierre<br />\r\n&middot; Tela Gabardina<br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 60</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'af', 1, 'ninguna', NULL, 37, 10, '2018-09-27 15:52:45', '2018-09-27 15:52:45'),
(13, '-', 'Pantalón Trabajo Recto Pampero', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cl&aacute;sico - Con Cierre<br />\r\n&middot; Tela Gabardina<br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 64</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'ag', 1, 'oportunidad', NULL, 37, 5, '2018-09-27 15:55:02', '2018-09-27 15:55:02'),
(14, '-', 'Pantalón Cargo Reforzado', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Siete Bolsillos&nbsp;<br />\r\n&middot; Costuras Reforzadas<br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 60</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'ah', 1, 'ninguna', NULL, 37, 5, '2018-09-27 15:57:08', '2018-09-27 15:57:08'),
(15, '-', 'Camisa Trabajo', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cl&aacute;sica<br />\r\n&middot; Bolsillos al frente<br />\r\n&middot; Tela Gabardina</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 56</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'ai', 1, 'descuento', NULL, 37, 10, '2018-09-27 16:00:08', '2018-09-27 16:00:08'),
(16, '-', 'Camisa Trabajo', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cl&aacute;sica<br />\r\n&middot; Bolsillos al frente<br />\r\n&middot; Tela Gabardina</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 38 al 56</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPERSONALIZACION DE PRENDAS</span></p>\r\n\r\n<p>ESTAMPADO - BORDADO - VINILO</p>', 'aj', 1, 'ninguna', NULL, 32, 4, '2018-09-27 16:01:54', '2018-10-12 23:59:03'),
(17, '-', 'Mameluco', '<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 48&nbsp;al 70</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'ak', 1, 'ninguna', NULL, 36, 8, '2018-09-27 16:03:10', '2018-10-12 22:40:00'),
(18, '-', 'Delantal con Pechera', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Con Pechera y Tiras de atar&nbsp;<br />\r\n&middot; Tela Gabardina</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; &Uacute;nico</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'al', 1, 'oportunidad', NULL, 33, 10, '2018-09-27 16:08:32', '2018-10-12 22:36:48'),
(20, '-', 'Medias de Trabajo', '<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&middot;Reforzado&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&middot; Talle &Uacute;nico</p>\r\n\r\n<p>&nbsp;</p>', 'aa', 1, 'ninguna', NULL, 7, 10, '2018-09-27 16:29:52', '2018-10-12 22:40:50'),
(22, '-', 'Auditivo Tapón', NULL, 'ab', 1, 'oportunidad', NULL, 8, 10, '2018-09-27 16:36:43', '2018-09-27 17:11:35'),
(24, '-', 'Casco con Arnés', NULL, 'aa', 1, 'ninguna', NULL, 11, 7, '2018-09-27 16:41:36', '2018-10-12 21:50:08'),
(25, '-', 'Cofia Descartable', NULL, 'ab', 1, 'ninguna', NULL, 12, 10, '2018-09-27 16:42:21', '2018-09-27 17:14:24'),
(26, '-', 'Mameluco Descartable', NULL, 'aa', 1, 'ninguna', NULL, 12, 10, '2018-09-27 16:44:37', '2018-09-27 17:14:56'),
(27, '-', 'Capa Agua Piloto - Impermeable', NULL, 'aa', 1, 'oportunidad', NULL, 17, 6, '2018-09-27 16:46:44', '2018-09-27 17:15:50'),
(28, '-', 'Traje Agua Campera - Pantalón', NULL, 'ab', 1, 'ninguna', NULL, 17, 6, '2018-09-27 16:47:34', '2018-10-12 23:51:57'),
(29, '-', 'Botín Cronos · Negro', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Bot&iacute;n de Seguridad Modelo Prusiano Cuero Box. Dise&ntilde;o industrial. Diel&eacute;ctrico. Ideal para trabajar c&oacute;modos en condiciones muy exigidas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'aa', 1, 'descuento', NULL, 45, 9, '2018-09-27 16:47:36', '2018-09-27 16:51:46'),
(30, '-', 'Zapato Tauro · Negro', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Opci&oacute;n Puntera Polipropileno<br />\r\n&middot; Opci&oacute;n Marr&oacute;n</p>\r\n\r\n<p>Zapato de Seguridad Modelo Franc&eacute;s Cuero Flor de primera calidad. Dise&ntilde;o industrial. DIEL&Eacute;CTRICO. Ideal para trabajar c&oacute;modos en condiciones muy exigidas</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ab', 1, 'oportunidad', NULL, 18, 3, '2018-09-27 16:51:28', '2018-09-27 16:51:28'),
(31, '-', 'Botiquín Sanitario', NULL, 'aa', 1, 'ninguna', NULL, 24, 10, '2018-09-27 16:53:49', '2018-09-27 17:08:51'),
(32, '-', 'Zapato Tauro · Blanco', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapato de Seguridad Modelo Franc&eacute;s Cuero Flor de primera calidad. Dise&ntilde;o industrial. Diel&eacute;ctrico. Ideal para trabajar c&oacute;modos en condiciones muy exigidas</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ac', 1, 'ninguna', NULL, 18, 9, '2018-09-27 16:54:03', '2018-09-27 16:54:03'),
(33, '-', 'Cinta Peligro', NULL, 'aa', 1, 'ninguna', NULL, 24, 10, '2018-09-27 16:54:28', '2018-09-27 17:20:47'),
(34, '-', 'Respirador Descartable Barbijo', NULL, 'aa', 1, 'ninguna', NULL, 12, 10, '2018-09-27 16:55:57', '2018-09-27 17:20:30'),
(35, '-', 'Anteojos Transparentes', NULL, 'aa', 1, 'ninguna', NULL, 22, 7, '2018-09-27 16:56:53', '2018-09-27 17:19:58'),
(36, '-', 'Anteojos Oscuros', NULL, 'ab', 1, 'ninguna', NULL, 22, 7, '2018-09-27 16:57:23', '2018-09-27 17:20:12'),
(37, '-', 'Botín Argos', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Bot&iacute;n de Seguridad Modelo Franc&eacute;s Cuero Flor de primera calidad. Dise&ntilde;o industrial. Diel&eacute;ctrico. Ideal para trabajar c&oacute;modos en condiciones muy exigidas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ad', 1, 'ninguna', NULL, 45, 3, '2018-09-27 16:58:09', '2018-09-27 16:58:09'),
(42, '-', 'Zapatilla Break', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapatilla de seguridad ultraventilada. Dise&ntilde;o y comodidad. Diel&eacute;ctrica.</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ae', 1, 'ninguna', NULL, 16, 9, '2018-09-27 17:01:56', '2018-09-27 17:01:56'),
(47, '-', 'Zapatilla Attack', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapatilla de seguridad. Dise&ntilde;o industrial. Diel&eacute;ctrica.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ag', 1, 'descuento', NULL, 16, 9, '2018-09-27 17:04:39', '2018-10-12 22:37:53'),
(51, '-', 'Faja Lumbar Reforzada', NULL, 'aa', 1, 'ninguna', NULL, 20, 6, '2018-09-27 17:07:13', '2018-09-27 17:17:13'),
(53, '-', 'Zapatilla Vanguard', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapatilla de seguridad. Dise&ntilde;o y comodidad. Diel&eacute;ctrica.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ag', 1, 'ninguna', NULL, 16, 9, '2018-09-27 17:10:13', '2018-09-27 17:10:13'),
(54, '-', 'Auditivo Copa', NULL, 'aa', 1, 'ninguna', NULL, 8, 10, '2018-09-27 17:12:49', '2018-09-27 17:12:49'),
(55, '-', 'Zapato Spider', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapato de seguridad super liviano. Confort, calidad y precio al alcance de cualquier industria.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'aa', 18, 'ninguna', NULL, 18, 3, '2018-09-27 17:43:33', '2018-09-27 17:43:33'),
(56, '-', 'Zapato Iron', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Seguridad, tecnolog&iacute;a, dise&ntilde;o y confort. El mejor en su categor&iacute;a.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ab', 18, 'ninguna', NULL, 18, 3, '2018-09-27 17:49:16', '2018-09-27 17:49:16'),
(57, '-', 'Zapato Ocker', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapato de seguridad. Confort Plus. Dise&ntilde;o original. Materiales Premium. Ideal para profesionales exigentes</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ac', 18, 'ninguna', NULL, 18, 3, '2018-09-27 17:50:29', '2018-09-27 17:50:29'),
(58, '-', 'Zapato Steel', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Seguridad, tecnolog&iacute;a, dise&ntilde;o y confort. El mejor en su categor&iacute;a.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ad', 1, 'ninguna', NULL, 18, 3, '2018-09-27 17:52:19', '2018-09-27 17:52:19'),
(59, '-', 'Zapatilla Cross', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapatilla de alta ventilaci&oacute;n. El equilibrio exacto entre est&eacute;tica, confort y seguridad.</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ae', 1, 'ninguna', NULL, 16, 3, '2018-09-27 17:53:56', '2018-09-27 17:57:51'),
(60, '-', 'Zapatilla Lander', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapatilla de seguridad ultra ventilada de muy alta gama. Confort extremo. Dise&ntilde;o exclusivo. Est&eacute;tica, tecnolog&iacute;a y componentes de vanguardia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'af', 1, 'ninguna', NULL, 16, 3, '2018-09-27 17:56:49', '2018-09-27 17:57:35'),
(61, '-', 'Zapatilla Ultraliviana Soul', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapatilla ultraliviana de seguridad. Dise&ntilde;o, tecnolog&iacute;a y materiales de vanguardia. Confort sin l&iacute;mites y m&aacute;xima proteccion.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ag', 1, 'ninguna', NULL, 31, 3, '2018-09-27 17:59:24', '2018-09-27 18:00:29'),
(62, '-', 'Zapatilla Ultraliviana Horizon', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapato urbano ultraliviano de seguridad. Cuero ultra premium, diseño y tecnología de vanguardia. Confort sin límites y máxima protección.\r\n</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ah', 1, 'ninguna', NULL, 31, 3, '2018-09-27 18:00:16', '2018-09-27 18:00:16'),
(63, '-', 'Zapatilla Ultraliviana City', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapato urbano ultraliviano de seguridad. Cuero 100% natural, dise&ntilde;o y tecnolog&iacute;a de vanguardia. Confort sin l&iacute;mites y m&aacute;xima protecci&oacute;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">COLORES </span></p>\r\n\r\n<p>Negro, Marr&oacute;n, Vison, Carmel</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ai', 1, 'ninguna', NULL, 31, 3, '2018-09-27 18:03:20', '2018-09-27 18:03:20'),
(64, '-', 'Zapatilla Ultraliviana Frontier', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Botín urbano ultraliviano de seguridad. Cuero ultra premium, diseño y tecnología de vanguardia. Confort sin límites y máxima protección.\r\n</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'aj', 1, 'ninguna', NULL, 31, 3, '2018-09-27 18:05:06', '2018-09-27 18:05:06'),
(65, '-', 'Zapatilla Ultraliviana Street', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Bot&iacute;n urbano ultraliviano de seguridad. Cuero 100% natural, dise&ntilde;o y tecnolog&iacute;a de vanguardia. Confort sin l&iacute;mites y m&aacute;xima protecci&oacute;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'ak', 1, 'ninguna', NULL, 31, 3, '2018-09-27 18:06:25', '2018-09-27 18:06:25'),
(66, '-', 'Bombacha de Campo', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Lisa o Alforzada<br />\r\n&middot; Dama / Hombre / Ni&ntilde;o</p>\r\n\r\n<p>&nbsp;</p>', 'am', 1, 'ninguna', NULL, 37, 4, '2018-09-27 18:08:04', '2018-09-27 18:08:04'),
(67, '-', 'Alpargatas', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Modelo Invierno / Modelo Verano</p>', 'aa', 1, 'ninguna', NULL, 43, 10, '2018-09-27 18:15:11', '2018-10-01 21:23:49'),
(68, '-', 'Bota Goma', NULL, 'aa', 1, 'ninguna', NULL, 44, 5, '2018-09-27 18:18:19', '2018-09-27 18:18:19'),
(70, '-', 'Guantes de Latex Descartables', '<p>Guantes descartables</p>\r\n\r\n<p>Cajas de 100 unidades</p>\r\n\r\n<p>Marca: Kimberly Clark</p>', 'aa', 1, 'ninguna', NULL, 26, 10, '2018-10-04 15:19:16', '2018-10-04 15:19:53'),
(71, '-', 'Guante Moteado', NULL, 'bb', 1, 'ninguna', NULL, 26, 10, '2018-10-04 15:20:13', '2018-10-04 15:20:13'),
(72, '-', 'Guante Acrilonitrilo', '<p>Guante de acr&iacute;lico-nitrilo flocado de algod&oacute;n.</p>\r\n\r\n<p>Resistencia confiable a solventes.<br />\r\nInterior flocado de puro algod&oacute;n para absorci&oacute;n de humedad.<br />\r\nM&aacute;xima resistenia a la abrasi&oacute;n.<br />\r\nTextura antideslizante para agarre &oacute;ptimo en superficies h&uacute;medas y secas.<br />\r\nMayor sensibilidad que facilita la precisi&oacute;n.<br />\r\nLibre de prote&iacute;nas extra&iacute;bles.<br />\r\nFabricado bajo un riguroo est&aacute;ndar de calidad.&nbsp;</p>', 'cc', 1, 'ninguna', NULL, 26, 6, '2018-10-04 15:21:33', '2018-10-04 15:22:04'),
(73, '-', 'Guante Goma Látex Industrial Negro', NULL, 'dd', 1, 'ninguna', NULL, 26, 6, '2018-10-04 15:23:00', '2018-10-12 23:53:59'),
(74, '-', 'Guante Goma PVC Rojo Largo', NULL, 'ee', 1, 'ninguna', NULL, 26, 10, '2018-10-04 15:23:21', '2018-10-12 23:54:12'),
(75, '-', 'Guante Cuero Descarne', NULL, 'ff', 1, 'ninguna', NULL, 26, 10, '2018-10-04 15:23:37', '2018-10-04 15:23:37'),
(76, '-', 'Guante Medio Paseo', NULL, 'gg', 1, 'ninguna', NULL, 26, 10, '2018-10-04 15:23:55', '2018-10-04 15:23:55'),
(77, '-', 'Guante Soldador', NULL, 'hh', 1, 'ninguna', NULL, 26, 10, '2018-10-04 15:24:11', '2018-10-04 15:24:11'),
(78, '-', 'Guante Jersey Precisión Impregnado', '<p><span style=\"color:#e67e22\">Marca: </span>Jackson</p>', 'ii', 1, 'ninguna', NULL, 26, 10, '2018-10-04 15:25:28', '2018-10-04 15:25:28'),
(79, '-', 'Guante Impregnado Corto', '<p>Guante Ba&ntilde;o Completo de Nitrilo con soporte de algod&oacute;n y pu&ntilde;o elastizado.</p>\r\n\r\n<p>Gruesa capa de nitrilo para una gran performance.<br />\r\nExcelente resistencia mec&aacute;nica.<br />\r\nTejido 100% algod&oacute;n que absorbe la transpiraci&oacute;n y mejora el confort.&nbsp;<br />\r\nPu&ntilde;o elastizado que previene el ingreso de part&iacute;culas.<br />\r\nDurable y lavable.</p>', 'jj', 1, 'ninguna', NULL, 26, 6, '2018-10-04 15:26:23', '2018-10-04 15:26:23'),
(80, '-', 'Guante Anticorte Latex/ Nitrilo', '<p>Fabricado con hilos especiales incluyendo HPPE para una excelente resistencia al corte.</p>\r\n\r\n<p>Tejido sin costuras para m&aacute;ximo confort y excelente calce.<br />\r\nDorso ventilado para mayor respirabilidad.<br />\r\nTextura antideslizante para agarre &oacute;ptimo en superficies h&uacute;medas y secas.<br />\r\nNitrilo para resistencia a las grasas.</p>', 'kk', 1, 'oportunidad', NULL, 26, 6, '2018-10-04 15:27:17', '2018-10-12 22:44:50'),
(81, '-', 'Buzo Frisa Cuello Alto con Medio Cierre', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Buzo - Cuello Alto Medio Cierre<br />\r\n&middot; Mangas Largas<br />\r\n&middot; Cuello Recto</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 4XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'bb', 1, 'ninguna', NULL, 38, 10, '2018-10-04 15:51:27', '2018-10-04 15:51:27'),
(82, '-', 'Campera Frisa de Algodón', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cuello Alto<br />\r\n&middot; Cierre Central Completo<br />\r\n&middot; Con bolsillos</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 4XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'aa', 1, 'ninguna', NULL, 40, 10, '2018-10-04 15:59:41', '2018-10-04 15:59:41'),
(83, '-', 'Chaleco Polar', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Chaleco Polar<br />\r\n&middot; Cuello Alto<br />\r\n&middot; Cierre Central Completo<br />\r\n&middot; Con bolsillos<br />\r\n&middot; Opcional en cintura: Tankas y Tiras de Ajuste</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado</p>', 'aa', 1, 'ninguna', NULL, 41, 10, '2018-10-04 16:08:42', '2018-10-04 16:08:42'),
(84, '-', 'Buzo Polar', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cuello Alto<br />\r\n&middot; Medio Cierre<br />\r\n&middot; Opcional en Cintura: Tankas y Tiras de Ajuste<br />\r\n&middot; Cuello Recto</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado</p>', 'cc', 1, 'ninguna', NULL, 41, 10, '2018-10-04 16:29:20', '2018-10-04 16:29:20'),
(85, '-', 'Chaleco Trucker', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cuello Alto<br />\r\n&middot; Cierre central Completo<br />\r\n&middot; Con bolsillos<br />\r\n&middot; Opcional:&nbsp;Interior forrado en Guata Matelaseada<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado / Vinilo</p>', 'bb', 1, 'ninguna', NULL, 40, 10, '2018-10-04 16:35:48', '2018-10-04 16:35:48'),
(86, '-', 'Buzo (Frisa Algodón)', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Buzo - Cuello Redondo<br />\r\n&middot; Buzo - Cuello Alto Medio Cierre<br />\r\n&middot; Campera Cierre Entero<br />\r\n&middot; Opcional: Capucha</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 4XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'cc', 1, 'ninguna', NULL, 46, 10, '2018-09-27 14:44:48', '2018-10-13 00:00:28'),
(87, '-', 'Buzo Frisa Cuello Alto con Medio Cierre', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Buzo - Cuello Alto Medio Cierre<br />\r\n&middot; Mangas Largas<br />\r\n&middot; Cuello Recto</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 4XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'bb', 1, 'ninguna', NULL, 46, 10, '2018-10-04 15:51:27', '2018-10-04 15:51:27'),
(88, '-', 'Chomba (Pique Algodón)', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Manga Corta<br />\r\n&middot; Manga&nbsp;Larga<br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado &middot; Vinilo</p>\r\n\r\n<p>&nbsp;</p>', 'ac', 1, 'ninguna', NULL, 47, 10, '2018-09-27 14:47:52', '2018-09-27 14:47:52'),
(89, '-', 'Trucker', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; CAMPERA Sin Capucha - con Guata Matelaseada Interior<br />\r\n&middot; CAMPERA con CAPUCHA - con Guata Matelaseada Interior<br />\r\n&middot; CHALECO - con Polar Interior</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado</p>', 'ae', 1, 'ninguna', NULL, 48, 10, '2018-09-27 14:58:40', '2018-09-27 14:58:40'),
(90, '-', 'Campera Frisa de Algodón', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cuello Alto<br />\r\n&middot; Cierre Central Completo<br />\r\n&middot; Con bolsillos</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 4XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'aa', 1, 'ninguna', NULL, 48, 10, '2018-10-04 15:59:41', '2018-10-04 15:59:41'),
(91, '-', 'Chaleco Trucker', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cuello Alto<br />\r\n&middot; Cierre central Completo<br />\r\n&middot; Con bolsillos<br />\r\n&middot; Opcional:&nbsp;Interior forrado en Guata Matelaseada<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado / Vinilo</p>', 'bb', 1, 'ninguna', NULL, 48, 10, '2018-10-04 16:35:48', '2018-10-04 16:35:48'),
(92, '-', 'Campera Polar', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cuello Alto&nbsp;<br />\r\n&middot; Cierre Completo<br />\r\n&middot; Con Bolsillos<br />\r\n&middot; Opcional en Cintura: Tankas y Tiras de Ajuste</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado</p>', 'ad', 1, 'ninguna', NULL, 49, 10, '2018-09-27 14:50:33', '2018-10-04 16:32:11'),
(93, '-', 'Chaleco Polar', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Chaleco Polar<br />\r\n&middot; Cuello Alto<br />\r\n&middot; Cierre Central Completo<br />\r\n&middot; Con bolsillos<br />\r\n&middot; Opcional en cintura: Tankas y Tiras de Ajuste</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado</p>', 'aa', 1, 'ninguna', NULL, 49, 10, '2018-10-04 16:08:42', '2018-10-04 16:08:42'),
(94, '-', 'Buzo Polar', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Cuello Alto<br />\r\n&middot; Medio Cierre<br />\r\n&middot; Opcional en Cintura: Tankas y Tiras de Ajuste<br />\r\n&middot; Cuello Recto</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 3XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Bordado</p>', 'cc', 1, 'ninguna', NULL, 49, 10, '2018-10-04 16:29:20', '2018-10-04 16:29:20'),
(95, '-', 'Remera (Jersey Algodón)', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>&middot; Manga Recta - Corta<br />\r\n&middot; Manga Recta - Larga<br />\r\n&middot; Manga Ranglan - Corta</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; S al 4XL</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">OPCIONALES<br />\r\nPersonalizaci&oacute;n de prendas</span></p>\r\n\r\n<p>&middot; Estampado &middot; Bordado &middot; Vinilo</p>', 'aa', 1, 'oportunidad', NULL, 50, 10, '2018-09-26 22:57:30', '2018-09-27 14:39:11'),
(96, '-', 'Botín Steel', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Seguridad, tecnolog&iacute;a, dise&ntilde;o y confort. El mejor en su categor&iacute;a.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'cc', 1, 'oportunidad', NULL, 45, 3, '2018-10-09 01:05:51', '2018-10-12 23:50:09'),
(97, '-', 'Botín Kupra', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Bot&iacute;n de seguridad. Confort Plus. Dise&ntilde;o original. Materiales Premium. Ideal para profesionales exigentes.<br />\r\n<em>L&iacute;nea </em><br />\r\nPU/TPU MULTIDENSIDAD</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 36&nbsp;al 46</p>', 'dd', 1, 'ultimos', NULL, 45, 3, '2018-10-09 01:16:28', '2018-10-09 01:16:28'),
(98, '-', 'Dama Capri', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Botita urbana ultraliviana de seguridad. Dise&ntilde;ada por y para mujeres. Materiales nobles ultra premium y tecnolog&iacute;a de vanguardia. Confort sin l&iacute;mites, femineidad y m&aacute;xima protecci&oacute;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 34&nbsp;al 42</p>', 'ff', 1, 'ninguna', NULL, 31, 3, '2018-10-09 01:29:13', '2018-10-09 01:29:13'),
(99, '-', 'Dama Bali', '<p><span style=\"color:#e67e22\">DETALLES</span></p>\r\n\r\n<p>Zapatilla ultraliviana de seguridad. Dise&ntilde;ada por y para mujeres. Materiales nobles ultra premium y tecnolog&iacute;a de vanguardia. Confort sin l&iacute;mites, femineidad y m&aacute;xima protecci&oacute;n.<br />\r\n&nbsp;</p>\r\n\r\n<p><span style=\"color:#e67e22\">TALLES</span></p>\r\n\r\n<p>&middot; 34&nbsp;al 42</p>', 'hh', 1, 'ninguna', NULL, 31, 3, '2018-10-09 01:30:05', '2018-10-09 01:30:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_novedads`
--

CREATE TABLE `productos_novedads` (
  `id` int(11) NOT NULL,
  `imagen` text,
  `titulo` text,
  `extracto` text,
  `texto` text,
  `orden` text,
  `ficha` text,
  `fecha` text,
  `id_categorias_novedads` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_novedads`
--

INSERT INTO `productos_novedads` (`id`, `imagen`, `titulo`, `extracto`, `texto`, `orden`, `ficha`, `fecha`, `id_categorias_novedads`, `created_at`, `updated_at`) VALUES
(1, 'productonovedad__imagen-no-disponible.jpg', 'BB', '<p>BB</p>', '<p>BB</p>', 'BB', NULL, '2018-09-28', '2', '2018-09-28 16:43:24', '2018-09-28 16:43:24'),
(2, 'productonovedad__facebook.png', 'Item Cat Dos', '<p>Item Cat Dos</p>', '<p>Item Cat Dos</p>', 'AA', NULL, '2018-09-28', '3', '2018-09-28 17:57:26', '2018-09-28 17:57:26'),
(3, 'productonovedad__favicon.png', 'Item Cat Dos22', '<p>Item Cat Dos22</p>', '<p>Item Cat Dos22</p>', 'BB', NULL, '2018-09-28', '3', '2018-09-28 17:57:45', '2018-09-28 17:57:45'),
(4, 'productonovedad__voran.jpg', 'New Noveedad PRO', '<p>New Noveedad PRO</p>', '<p>New Noveedad PRO</p>', 'AA', 'productonovedad__voran.jpg', '2018-09-28', '7', '2018-09-28 20:23:29', '2018-09-28 20:23:29'),
(5, 'productonovedad__f1.jpg', 'Other New', '<p>Other New</p>', '<p>Other New</p>', 'AA', 'productonovedad__f4.jpg', '2018-09-28', '8', '2018-09-28 20:45:06', '2018-09-28 20:45:06'),
(6, 'productonovedad__mameluco.jpg', 'Mameluco', '<p>Mameluco modelo trabajo -&nbsp;original<br />\r\n(cumple todas las normas de seguridad)<br />\r\ndetalles de confecci&oacute;n del mameluco mas resistente del mercado</p>', '<p>Mameluco modelo trabajo - original<br />\r\n(cumple todas las normas de seguridad)</p>\r\n\r\n<p>Detalles de confecci&oacute;n del mameluco m&aacute;s resistente del mercado</p>\r\n\r\n<p>- 2 bolsillos delanteros con tapa<br />\r\n- 2 bolsillos delantero en el pantalon&nbsp;<br />\r\n- cuello volcado<br />\r\n- cierre doble cursor cocido con doble pespunte<br />\r\n- pu&ntilde;o tipo camisa<br />\r\n- cintura parte trasera elastizada<br />\r\n- bolsillo trasero<br />\r\n- bolsillo metro<br />\r\ntodo el armado es con triple costura con la mejor gabardina del mercado, hecha en argentina<br />\r\n- no encoge&nbsp;</p>', 'AA', NULL, '2018-09-28', '9', '2018-09-28 21:20:06', '2018-10-11 15:54:45'),
(7, 'productonovedad__local-pacheco.jpg', 'Nuevos Precios', '<p>Quienes formamos parte de esta empresa, nos hemos adaptado, a lo largo de nuestra trayectoria, a las necesidades de nuestros Clientes, necesidades que se han convertido en nuestros principales objetivos a cumplir a diario:</p>', '<p>Quienes formamos parte de esta empresa, nos hemos adaptado, a lo largo de nuestra trayectoria, a las necesidades de nuestros Clientes, necesidades que se han convertido en nuestros principales objetivos a cumplir a diario:</p>\r\n\r\n<p>- Optima calidad de materia prima y manufactura,</p>\r\n\r\n<p>- Optima relaci&oacute;n precio + calidad</p>\r\n\r\n<p>- Atenci&oacute;n personalizada de cada Cliente.</p>', 'BB', NULL, '2018-10-10', '9', '2018-10-10 15:09:38', '2018-10-11 15:52:27'),
(9, 'productonovedad__VORAN BREAK + ATTACK + VANGUARD.png', 'LANZAMIENTO 2018 - VORAN - LINEA ZAPATILLAS -', NULL, NULL, 'ac', NULL, '2018-10-12', '9', '2018-10-12 23:44:04', '2018-10-12 23:44:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacions`
--

CREATE TABLE `publicacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `publicacions`
--

INSERT INTO `publicacions` (`id`, `imagen`, `titulo`, `texto`, `orden`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Visión', '<p>&middot; Constituir una cartera comercial diversificada en n&uacute;mero de clientes y dirigida a diferentes sectores para asegurar la estabilidad.</p>\r\n\r\n<p>&middot; Consolidar las relaciones con nuevos clientes mediante b&uacute;squeda activa y conseguir el reconocimiento de sus profesionales.</p>\r\n\r\n<p>&middot; Mantener un crecimiento constante y sostenido.</p>\r\n\r\n<p>&middot; Hacer que la mejora de calidad y la innovaci&oacute;n impregnen nuestro d&iacute;a a d&iacute;a.</p>\r\n\r\n<p>&middot; Encontrar soluciones t&eacute;cnicas para el sector industrial y sus procesos productivos, de acuerdo con las nuevas tecnolog&iacute;as y materiales.</p>', 'AA', '2018-06-26 14:38:20', '2018-06-26 14:38:20'),
(2, NULL, 'Valores', '<p>&middot; Orientaci&oacute;n al cliente y al resultado: para garantizar la permanencia de la compa&ntilde;&iacute;a, del servicio futuro y la estabilidad de los colaboradores.</p>\r\n\r\n<p>&middot; Potenciaci&oacute;n del capital humano: el principal recurso de INDOMATRIX son las personas, su experiencia y sus conocimientos profesionales y t&eacute;cnicos.</p>\r\n\r\n<p>&middot; Satisfacci&oacute;n del cliente: es garant&iacute;a de &eacute;xito.</p>\r\n\r\n<p>&middot; Apuesta por la innovaci&oacute;n: tanto la tecnol&oacute;gica como la de gesti&oacute;n.</p>\r\n\r\n<p>&middot; La calidad: viene determinada por todos los integrantes del equipo, internos y externos, y est&aacute; impulsada por la filosof&iacute;a de a&ntilde;adir valor a los clientes.</p>\r\n\r\n<p>&middot; Trabajo en equipo: comunicaci&oacute;n, disponibilidad, cooperaci&oacute;n y esfuerzo.</p>', 'BB', '2018-06-26 14:38:50', '2018-06-26 14:39:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci,
  `seccion` text COLLATE utf8_unicode_ci,
  `ruta` text COLLATE utf8_unicode_ci,
  `code` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `nombre`, `imagen`, `seccion`, `ruta`, `code`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'redes__imgfacebook.png', 'superior', 'https://es-la.facebook.com/RPA-Remeras-Publicitarias-Argentinas-277741499039810/', '<i class=\"fab fa-facebook\"></i>', 'AA', '2018-06-21 03:19:26', '2018-10-11 22:15:04'),
(4, 'instagram', 'redes__instag.png', 'superior', 'https://www.instagram.com/?hl=es-la', '<i class=\"fab fa-instagram\"></i>', 'BB', '2018-09-27 21:57:57', '2018-10-02 19:00:31'),
(5, 'Pinterest', 'redes__pinterest.png', 'superior', 'https://www.pinterest.es/', '<i class=\"fab fa-pinterest\"></i>', 'CC', '2018-09-27 22:30:52', '2018-10-02 19:01:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci,
  `titulo` text COLLATE utf8_unicode_ci,
  `texto` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serv_contenido`
--

CREATE TABLE `serv_contenido` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci,
  `titulo` text COLLATE utf8_spanish_ci,
  `texto` text COLLATE utf8_spanish_ci,
  `ruta` text COLLATE utf8_spanish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `serv_contenido`
--

INSERT INTO `serv_contenido` (`id`, `imagen`, `titulo`, `texto`, `ruta`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Nuestros Servicios', '<p>Somos una Empresa dedicada a la Venta e Instalaci&oacute;n de Alambrados Perimetrales y Rurales, Cercos, Puertas y Portones. Ofrecemos Nuestros Servicios a Particulares, Industrias, Entidades Deportivas, Barrios Privados y Countries. Brindamos Calidad, Seguridad y Garant&iacute;a de Todos los Trabajos que Realizamos.</p>', NULL, '2018-07-03 15:43:44', '2018-07-03 15:49:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serv_destacados`
--

CREATE TABLE `serv_destacados` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci,
  `titulo` text COLLATE utf8_spanish_ci,
  `texto` text COLLATE utf8_spanish_ci,
  `ruta` text COLLATE utf8_spanish_ci,
  `orden` text COLLATE utf8_spanish_ci,
  `seccion` text COLLATE utf8_spanish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `serv_destacados`
--

INSERT INTO `serv_destacados` (`id`, `imagen`, `titulo`, `texto`, `ruta`, `orden`, `seccion`, `created_at`, `updated_at`) VALUES
(1, 'ihome__contenido-1.jpg', 'INDUMENTARIA', 'PERSONALIZADA', 'familia', 'AA', NULL, '2018-07-03 15:55:48', '2018-09-18 21:03:26'),
(2, 'ihome__contenido-2.jpg', 'ROPA DE', 'TRABAJO', 'familia', 'BB', NULL, '2018-07-03 15:56:02', '2018-09-18 21:03:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serv_items`
--

CREATE TABLE `serv_items` (
  `id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci,
  `titulo` text COLLATE utf8_spanish_ci,
  `texto` text COLLATE utf8_spanish_ci,
  `ruta` text COLLATE utf8_spanish_ci,
  `orden` text COLLATE utf8_spanish_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `serv_items`
--

INSERT INTO `serv_items` (`id`, `imagen`, `titulo`, `texto`, `ruta`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'servitems__1.jpg', 'Cercos Perimetrales', '<p>Instalamos cercos perimetrales en todo el pa&iacute;s. Para cualquier prop&oacute;sito y necesidad. Ya sea en cercos perimetrales para campo, alambrado industrial, alambrados para predios deportivos, para el hogar, para su terreno o cualquier otra necesidad.</p>', NULL, 'AA', '2018-07-03 16:01:17', '2018-07-03 16:01:17'),
(2, 'servitems__2.jpg', 'Cercos para Piletas', '<p>Instalamos cercos para piletas que te dar&aacute;n toda la tranquilidad que necesitas para la SEGURIDAD de tus chiquitos sin tener que renunciar a la est&eacute;tica ni a la facilidad de acceso a tu PILETA.</p>\r\n\r\n<p>Nuestra especializaci&oacute;n nos ha convertido en expertos en este sistema de protecci&oacute;n y en l&iacute;deres en su desarrollo, garantizando la m&aacute;xima calidad y seguridad.</p>', NULL, 'BB', '2018-07-03 16:01:42', '2018-07-03 16:01:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `subtitulo` text COLLATE utf8_unicode_ci,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `boton` text COLLATE utf8_unicode_ci,
  `ruta` text COLLATE utf8_unicode_ci,
  `seccion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `titulo`, `subtitulo`, `imagen`, `boton`, `ruta`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(4, 'SOLUCIONES', 'TEXTILES', 'sliders__s2.jpg', NULL, NULL, '2', 'AA', '2018-07-02 17:16:11', '2018-08-28 14:52:26'),
(6, 'CALIDAD', 'ASEGURADA', 'sliders__s1.jpg', NULL, NULL, '1', 'ab', '2018-07-31 15:24:41', '2018-09-27 21:18:07'),
(7, 'ENVÍOS A', 'TODO EL PAÍS', 'sliders__slider-envios-rpa', 'Button', '#!', '1', 'BB', '2018-09-28 15:51:30', '2018-10-04 21:05:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci,
  `orden` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`id`, `titulo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'S', 'AA', '2018-08-31 17:16:43', '2018-09-27 14:39:34'),
(2, 'M', 'BB', '2018-08-31 17:16:49', '2018-09-27 14:39:57'),
(3, 'L', 'CC', '2018-08-31 17:16:54', '2018-09-27 14:40:02'),
(4, 'XL', 'dd', '2018-09-27 14:40:19', '2018-09-27 14:40:19'),
(5, '2XL', 'ee', '2018-09-27 14:40:51', '2018-09-27 14:40:51'),
(6, '3XL', 'ff', '2018-09-27 14:40:58', '2018-09-27 14:40:58'),
(7, '4XL', 'GG', '2018-09-27 14:41:03', '2018-09-27 14:41:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla_producto`
--

CREATE TABLE `talla_producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_talla` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `talla_producto`
--

INSERT INTO `talla_producto` (`id`, `id_talla`, `id_producto`, `created_at`, `updated_at`) VALUES
(24, 1, 1, NULL, NULL),
(25, 2, 1, NULL, NULL),
(26, 3, 1, NULL, NULL),
(27, 4, 1, NULL, NULL),
(28, 5, 1, NULL, NULL),
(29, 6, 1, NULL, NULL),
(30, 7, 1, NULL, NULL),
(31, 1, 2, NULL, NULL),
(32, 2, 2, NULL, NULL),
(33, 3, 2, NULL, NULL),
(34, 4, 2, NULL, NULL),
(35, 5, 2, NULL, NULL),
(36, 6, 2, NULL, NULL),
(37, 7, 2, NULL, NULL),
(38, 1, 3, NULL, NULL),
(39, 2, 3, NULL, NULL),
(40, 3, 3, NULL, NULL),
(41, 4, 3, NULL, NULL),
(42, 5, 3, NULL, NULL),
(43, 6, 3, NULL, NULL),
(44, 1, 4, NULL, NULL),
(45, 2, 4, NULL, NULL),
(46, 3, 4, NULL, NULL),
(47, 4, 4, NULL, NULL),
(48, 5, 4, NULL, NULL),
(49, 6, 4, NULL, NULL),
(50, 1, 5, NULL, NULL),
(51, 2, 5, NULL, NULL),
(52, 3, 5, NULL, NULL),
(53, 4, 5, NULL, NULL),
(54, 5, 5, NULL, NULL),
(55, 6, 5, NULL, NULL),
(57, 2, 26, NULL, NULL),
(58, 3, 26, NULL, NULL),
(59, 4, 26, NULL, NULL),
(60, 5, 26, NULL, NULL),
(61, 6, 26, NULL, NULL),
(62, 2, 27, NULL, NULL),
(63, 3, 27, NULL, NULL),
(64, 4, 27, NULL, NULL),
(65, 5, 27, NULL, NULL),
(66, 6, 27, NULL, NULL),
(67, 2, 28, NULL, NULL),
(68, 3, 28, NULL, NULL),
(69, 4, 28, NULL, NULL),
(70, 5, 28, NULL, NULL),
(71, 6, 28, NULL, NULL),
(72, 2, 51, NULL, NULL),
(73, 3, 51, NULL, NULL),
(74, 4, 51, NULL, NULL),
(75, 5, 51, NULL, NULL),
(80, 1, 81, NULL, NULL),
(81, 2, 81, NULL, NULL),
(82, 3, 81, NULL, NULL),
(83, 4, 81, NULL, NULL),
(84, 5, 81, NULL, NULL),
(85, 6, 81, NULL, NULL),
(86, 7, 81, NULL, NULL),
(87, 1, 82, NULL, NULL),
(88, 2, 82, NULL, NULL),
(89, 3, 82, NULL, NULL),
(90, 4, 82, NULL, NULL),
(91, 5, 82, NULL, NULL),
(92, 6, 82, NULL, NULL),
(93, 7, 82, NULL, NULL),
(94, 1, 83, NULL, NULL),
(95, 2, 83, NULL, NULL),
(96, 3, 83, NULL, NULL),
(97, 4, 83, NULL, NULL),
(98, 5, 83, NULL, NULL),
(99, 6, 83, NULL, NULL),
(100, 1, 84, NULL, NULL),
(101, 2, 84, NULL, NULL),
(102, 3, 84, NULL, NULL),
(103, 4, 84, NULL, NULL),
(104, 5, 84, NULL, NULL),
(105, 6, 84, NULL, NULL),
(106, 1, 85, NULL, NULL),
(107, 2, 85, NULL, NULL),
(108, 3, 85, NULL, NULL),
(109, 4, 85, NULL, NULL),
(110, 5, 85, NULL, NULL),
(111, 6, 85, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pablo', 'pablo', '$2y$10$XlOopRLeg45MV4WTZsevmungGPfpyvO3puI6hRGlAjdm2XPIqFQlO', 'JDmvd6iNT6FAl1Njpy97JeIkPsaF6NJYminEVndMiAaTK0QVgHvSvdfUNa2P', NULL, '2018-06-04 16:47:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calidades`
--
ALTER TABLE `calidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias_novedads`
--
ALTER TABLE `categorias_novedads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `color_producto`
--
ALTER TABLE `color_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_producto_id_color_foreign` (`id_color`),
  ADD KEY `color_producto_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipamientos`
--
ALTER TABLE `equipamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galerias_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `galerias_novedads`
--
ALTER TABLE `galerias_novedads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `home_clientes`
--
ALTER TABLE `home_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modal_realizados`
--
ALTER TABLE `modal_realizados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelos_contenidos`
--
ALTER TABLE `modelos_contenidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelos_galerias`
--
ALTER TABLE `modelos_galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nova_anuncios`
--
ALTER TABLE `nova_anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nova_categorias`
--
ALTER TABLE `nova_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nova_contenido`
--
ALTER TABLE `nova_contenido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nova_galerias`
--
ALTER TABLE `nova_galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nova_productos`
--
ALTER TABLE `nova_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_productos_id_nova_categorias_foreign` (`id_nova_categorias`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id_categoria_foreign` (`id_categoria`),
  ADD KEY `productos_id_marca_foreign` (`id_marca`);

--
-- Indices de la tabla `productos_novedads`
--
ALTER TABLE `productos_novedads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicacions`
--
ALTER TABLE `publicacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `serv_contenido`
--
ALTER TABLE `serv_contenido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `serv_destacados`
--
ALTER TABLE `serv_destacados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `serv_items`
--
ALTER TABLE `serv_items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `talla_producto`
--
ALTER TABLE `talla_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `talla_producto_id_talla_foreign` (`id_talla`),
  ADD KEY `talla_producto_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_unique` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calidades`
--
ALTER TABLE `calidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `categorias_novedads`
--
ALTER TABLE `categorias_novedads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `color_producto`
--
ALTER TABLE `color_producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `correos`
--
ALTER TABLE `correos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `equipamientos`
--
ALTER TABLE `equipamientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de la tabla `galerias_novedads`
--
ALTER TABLE `galerias_novedads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `home_clientes`
--
ALTER TABLE `home_clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `modal_realizados`
--
ALTER TABLE `modal_realizados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modelos_contenidos`
--
ALTER TABLE `modelos_contenidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `modelos_galerias`
--
ALTER TABLE `modelos_galerias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `nova_anuncios`
--
ALTER TABLE `nova_anuncios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nova_categorias`
--
ALTER TABLE `nova_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `nova_contenido`
--
ALTER TABLE `nova_contenido`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nova_galerias`
--
ALTER TABLE `nova_galerias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `nova_productos`
--
ALTER TABLE `nova_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `productos_novedads`
--
ALTER TABLE `productos_novedads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `publicacions`
--
ALTER TABLE `publicacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `serv_contenido`
--
ALTER TABLE `serv_contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `serv_destacados`
--
ALTER TABLE `serv_destacados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `serv_items`
--
ALTER TABLE `serv_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `talla_producto`
--
ALTER TABLE `talla_producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `color_producto`
--
ALTER TABLE `color_producto`
  ADD CONSTRAINT `color_producto_id_color_foreign` FOREIGN KEY (`id_color`) REFERENCES `colores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `color_producto_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD CONSTRAINT `galerias_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `nova_productos`
--
ALTER TABLE `nova_productos`
  ADD CONSTRAINT `nova_productos_id_nova_categorias_foreign` FOREIGN KEY (`id_nova_categorias`) REFERENCES `nova_categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_id_marca_foreign` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `talla_producto`
--
ALTER TABLE `talla_producto`
  ADD CONSTRAINT `talla_producto_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `talla_producto_id_talla_foreign` FOREIGN KEY (`id_talla`) REFERENCES `tallas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
