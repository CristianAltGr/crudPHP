-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2023 a las 19:37:36
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projecte_uf4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producte`
--

CREATE TABLE `producte` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `descripcio` text DEFAULT NULL,
  `preu` decimal(10,2) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `stock` tinyint(1) NOT NULL,
  `menu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producte`
--

INSERT INTO `producte` (`id`, `nom`, `descripcio`, `preu`, `foto`, `stock`, `menu`) VALUES
(1, 'kebab de pollo', 'Tiernos trozos de pollo marinados con una mezcla de especias cuidadosamente seleccionadas, que se asan en un pincho vertical y se cortan en finas y deliciosas tiras. Servido en un pan de pita suave y fresco, nuestro kebab de pollo se complementa con crujiente lechuga, tomate fresco, cebolla y una variedad de salsas para elegir, desde nuestra suave y cremosa salsa blanca hasta nuestra picante y sabrosa salsa de chile. Además, puedes acompañarlo con patatas fritas para hacer de tu experiencia gastronómica un verdadero placer. ¡Ven y prueba nuestro delicioso kebab de pollo en nuestro restaurante hoy mismo!', '5.00', 'https://i.blogs.es/f03b7f/shawarma/450_1000.jpg', 1, 1),
(2, 'durum de pollo', 'Tiernos trozos de pollo marinados con una mezcla de especias cuidadosamente seleccionadas, que se asan en un pincho vertical y se cortan en finas y deliciosas tiras. Servido en un pan de pita suave y fresco, nuestro kebab de pollo se complementa con crujiente lechuga, tomate fresco, cebolla y una variedad de salsas para elegir, desde nuestra suave y cremosa salsa blanca hasta nuestra picante y sabrosa salsa de chile. Además, puedes acompañarlo con patatas fritas para hacer de tu experiencia gastronómica un verdadero placer. ¡Ven y prueba nuestro delicioso kebab de pollo en nuestro restaurante hoy mismo!', '6.00', 'https://babycocina.com/wp-content/uploads/2021/02/durum-kebab.jpg', 1, 1),
(3, 'kebab de ternera', '¡Prueba nuestro exquisito kebab de ternera! Preparado con tierna y jugosa carne de ternera marinada en una mezcla de especias selectas, asada en un pincho vertical y cortada en finas tiras, este plato de comida rápida es una verdadera delicia para los amantes de la carne. Servido en un pan de pita recién horneado, nuestro kebab de ternera viene con una deliciosa ensalada de lechuga, tomate, cebolla y una variedad de salsas para elegir, desde nuestra suave y cremosa salsa blanca hasta nuestra picante y sabrosa salsa de ajo. Puedes agregar patatas fritas crujientes para disfrutar de una experiencia de comida completa. ¡No te pierdas la oportunidad de probar este delicioso kebab de ternera en nuestro restaurante!', '5.00', 'https://www.laperlaarabe.com/wp-content/uploads/2019/09/ulti.jpg', 1, 1),
(4, 'durum de ternera', '¡Prueba nuestro exquisito durum de ternera! Preparado con tierna y jugosa carne de ternera marinada en una mezcla de especias selectas, asada en un pincho vertical y cortada en finas tiras, este plato de comida rápida es una verdadera delicia para los amantes de la carne. Servido en una fajita de durum recién horneado, nuestro durum de ternera viene con una deliciosa ensalada de lechuga, tomate, cebolla y una variedad de salsas para elegir, desde nuestra suave y cremosa salsa blanca hasta nuestra picante y sabrosa salsa de ajo. Puedes agregar patatas fritas crujientes para disfrutar de una experiencia de comida completa. ¡No te pierdas la oportunidad de probar este delicioso durum de ternera en nuestro restaurante!', '6.00', 'https://img.bekiacocina.com/cocina/0000/651-c.jpg', 1, 1),
(5, 'falafel', '¡Prueba nuestro increíble falafel! Hecho con garbanzos y una mezcla de especias cuidadosamente seleccionadas, nuestro falafel es una delicia vegetariana que no te puedes perder. Cada bola de falafel se fríe hasta quedar dorada y crujiente por fuera, mientras que el interior se mantiene suave y deliciosamente sabroso. Servido en un pan de pita suave y fresco, nuestro falafel viene con una ensalada fresca de lechuga, tomate, pepino y cebolla, y una selección de salsas para elegir, desde nuestra suave salsa de yogur hasta nuestra picante salsa de tahini. Además, nuestro falafel es una opción saludable y nutritiva, perfecta para aquellos que buscan opciones vegetarianas. ¡Ven a probar nuestro delicioso falafel en nuestro restaurante hoy mismo!', '4.00', 'https://elcordelbarri.com/wp-content/uploads/2021/08/Falafel-Durum.-Enciam-tomaquet-ceba-i-col-i-salsa-iogurt..jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `usuari` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producte`
--
ALTER TABLE `producte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producte`
--
ALTER TABLE `producte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
