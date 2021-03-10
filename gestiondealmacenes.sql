-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-03-2021 a las 01:40:59
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestiondealmacenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenes`
--

CREATE TABLE `almacenes` (
  `id_almacen` int(5) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `id_sucursal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacenes`
--

INSERT INTO `almacenes` (`id_almacen`, `nombre`, `descripcion`, `id_sucursal`) VALUES
(3, 'Almacen norte - Cochabamba', 'Almacen ubicado en la zona norte', 3),
(4, 'Almacén sud- Santa Cruz', 'Almacén ubicado en la sucursal de Santa Cruz', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(5) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'Carnes', 'Carnes congeladas de la mejor calidad'),
(2, 'Conservas y salsas', 'Variedad de conservas y salsas'),
(3, 'Mariscos', 'Variedad de mariscos y pescados congelados'),
(4, 'Verduras', 'Amplia selección de verduras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `fecha_de_registro` datetime NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `stock` int(10) NOT NULL,
  `id_almacen` int(5) NOT NULL,
  `id_categoria` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `fecha_de_registro`, `descripcion`, `stock`, `id_almacen`, `id_categoria`) VALUES
(3, 'Alas de pollo', '35', '2021-03-09 18:06:10', 'Paquete de alas de pollo, contiene 10 unidades', 100, 3, 1),
(4, 'Carne picada', '40', '2021-03-09 18:06:10', 'Paquete de 1 kg de carne picada', 150, 3, 1),
(5, 'Chuletas de cordero', '45', '2021-03-09 18:06:10', 'Paquete de 1 kg de chuletas de cerdo', 50, 3, 1),
(6, 'Calabaza trozeada', '25', '2021-03-09 18:06:10', 'Paquete de 1kg de calabaza en trozos', 50, 3, 4),
(7, 'Brocoli', '30', '2021-03-09 18:06:10', 'Paquete de 1 kg de brócoli de huerta', 15, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(5) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `ciudad` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `direccion`, `ciudad`) VALUES
(1, 'av. Litoral', 'Santa Cruz'),
(2, 'av. Beijing', 'Cochabamba'),
(3, 'av. Circunvalacion', 'Cochabamba'),
(4, 'av. San Jose', 'La Paz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abigail Escobar Lazarte', 'abi@gmail.com', NULL, '$2y$10$3R/KnJ94o8vFCDxuoEgQp.aMTpALXmQRd796FnIDwPor1Xhx7BJGa', NULL, '2021-03-09 20:56:54', '2021-03-09 20:56:54'),
(2, 'Luis Perez Torrez', 'luis@gmail.com', NULL, '$2y$10$gQeYvl9x7j6xoEgAUqFkouGq3DWhBog3qob1Nqcjv87yj7ATvLNSW', NULL, '2021-03-09 21:26:13', '2021-03-09 21:26:13'),
(3, 'Alejandra Tatiana Rodriguez Pedraza', 'Ale@gmail.com', NULL, '$2y$10$ttaDT2Cu8WDnPAXZS8qdH.r/CbulqXwjnKsLHn7XM3RjSxAJwuGr2', NULL, '2021-03-09 21:26:35', '2021-03-09 21:26:35'),
(4, 'Karina Duran Cardenas', 'Karina@gmail.com', NULL, '$2y$10$0r09znVdODtcQ.dDktnZHOvW9GUo5u7GDE09niCnyN61ITINg1fv2', NULL, '2021-03-09 21:26:57', '2021-03-09 21:26:57'),
(5, 'Raiza Perez', 'rai@gmail.com', NULL, '$2y$10$446Sdb1xHSMnZArAJ9bOG.mirk8u7QWvy7eQrCthsUKZaXvALYLUW', NULL, '2021-03-09 21:27:20', '2021-03-09 21:27:20'),
(6, 'Carlos Iglesias Vargas', 'Carlos@gmail.com', NULL, '$2y$10$tTHFrBMKZcAB.6VS76OUEulJsATpag1qehBqE6cnhH4QbqFHcXwHm', NULL, '2021-03-09 21:28:05', '2021-03-09 21:28:05'),
(7, 'Daniela Torrez Duran', 'dani@gmail.com', NULL, '$2y$10$M5clLWx.dzZ18QwUEhHsD.JdlpnNtZZh1bEOv7kslBzVTvHYkWGvC', NULL, '2021-03-09 23:18:03', '2021-03-09 23:18:03'),
(8, 'Roberto Crespo', 'Roberto@gmail.com', NULL, '$2y$10$2XcNdol5iUAWLCGR7aX/.eA6ue8sjGVjKQO0kB9aGoVfxlYsbBRXm', NULL, '2021-03-09 23:37:51', '2021-03-09 23:37:51'),
(9, 'Nayeli Andrea', 'nayeli@gmail.com', NULL, '$2y$10$4X41CCia6EyRMNr7aDDNbOG6k8s/VxIZF2lkwqYTsXCx5G8CxHYaW', NULL, '2021-03-10 02:01:44', '2021-03-10 02:01:44'),
(10, 'Jhonny Gutierrez Cossio', 'Jhonny@gmail.com', NULL, '$2y$10$9YoXHZCPh.QwZcGEB8WwU.AOHXfJ9OOgPIl7SuG0eA63J0yJ8Z76C', NULL, '2021-03-10 05:39:36', '2021-03-10 05:39:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD PRIMARY KEY (`id_almacen`),
  ADD KEY `fk_sucursal` (`id_sucursal`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_categoria` (`id_categoria`),
  ADD KEY `fk_almacen` (`id_almacen`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  MODIFY `id_almacen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD CONSTRAINT `fk_sucursal` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id_sucursal`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_almacen` FOREIGN KEY (`id_almacen`) REFERENCES `almacenes` (`id_almacen`),
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
