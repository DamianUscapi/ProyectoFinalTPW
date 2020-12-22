-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-12-2020 a las 20:47:44
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lara_reposteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Tortas', 'tortas de todo tipo', '2020-11-24 18:35:51', '2020-11-24 18:35:51'),
(2, 'Panes', 'panes de todo tipo', '2020-11-24 18:36:09', '2020-11-24 18:36:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2020_11_19_004533_create_categorias_table', 1),
(26, '2020_11_19_090708_create_usuarios_table', 1),
(27, '2020_11_19_105455_create_productos_table', 1),
(28, '2020_11_24_002146_create_rols_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_categoria_foreign` (`categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `ruta`, `categoria`, `created_at`, `updated_at`) VALUES
(1, ' De chocolate', 'torta deliciosa sabor a chocolate con relleno de vainilla y fresas decorado', 5, 34.99, '1606224917chocolate.jpg', 1, '2020-11-24 18:35:17', '2020-11-24 19:08:35'),
(2, 'Torta cuajada', 'torta cuajada deliciosa', 3, 39.99, '1606226668cuajada.jpg', 1, '2020-11-24 19:04:28', '2020-11-24 19:04:28'),
(3, 'Fresa batida', 'Fresa batida Descip', 4, 40.44, '1606226721fresa-batida.jpg', 1, '2020-11-24 19:05:21', '2020-11-24 19:05:21'),
(4, 'Pan Vienas', 'Pan Vienas Descrip', 30, 2.00, '1606226770pan-4-vienas.jpg', 2, '2020-11-24 19:06:10', '2020-11-24 19:06:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

DROP TABLE IF EXISTS `rols`;
CREATE TABLE IF NOT EXISTS `rols` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'vendedor', '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(2, 'vendedor', '2020-11-24 18:23:58', '2020-11-24 18:23:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios_rol_foreign` (`rol`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `nombre`, `password`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'dianna50@reilly.com', 'Prof. Timothy Russel', 'e23c3eefce7261e1ef0e2be245b27cdcc23182e4', 2, '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(2, 'jzemlak@hotmail.com', 'Krystina Connelly', '8d76aa9bf0106d6c04a6d617393ac4af19150191', 2, '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(3, 'raoul.murazik@schmidt.net', 'Edwin Balistreri', 'b503aa1b2ef798767cf7f37bc73886a055737f3c', 1, '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(4, 'vincenza93@collins.com', 'Reta Smith', 'f723c826b6890bd45a0683f1572827f15ee1c83b', 2, '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(5, 'ryan.kadin@hotmail.com', 'Garry Zieme', '190869bfd96f2a0a93258ba9752bdc185a16babe', 1, '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(6, 'conn.raoul@frami.com', 'Ms. Estel Harvey V', 'c918aba6f48e253b518d758b2983c2a11431eb52', 2, '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(7, 'johan51@pollich.com', 'Gay Hudson', '09d60441a11d34dc1d555eac4a2a28d17c9d421a', 1, '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(8, 'clovis.grimes@bechtelar.com', 'Dr. Charley Hilpert DVM', 'b4589e4a85474193987d4febaf76cb336379a527', 1, '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(9, 'wprosacco@sanford.com', 'Janiya Predovic', '27e7bada7a9be25f1bc20dc5e5874b34bdfcdef7', 1, '2020-11-24 18:23:58', '2020-11-24 18:23:58'),
(10, 'nschoen@mraz.com', 'Fae Barrows', 'f0ef0382889340c72512fc97aaa9f5b3f076beed', 1, '2020-11-24 18:23:58', '2020-11-24 18:23:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
