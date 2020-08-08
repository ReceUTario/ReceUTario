-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2020 a las 06:31:09
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `receutuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `comentarios` varchar(400) NOT NULL,
  `fechareg` varchar(30) NOT NULL,
  `clave` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id_r` int(10) NOT NULL,
  `nombre_r` varchar(45) NOT NULL,
  `ingredientes` varchar(300) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id_r`, `nombre_r`, `ingredientes`, `url`) VALUES
(1, 'brownies', 'chocolate, mantequilla, azúcar,azúcar moreno,huevos, vainilla, harina,cacao en polvo, nueces.\r\n', ' <a class=\"dropdown-item\" href=\"app/login.php\">IR</a>'),
(2, 'carlota de limon', 'leche condensada, leche evaporada, limon, grenetina hidratada, galletas marias, Hojas de menta fresca desinfectadas', ''),
(3, 'cheesecake', 'migajas de galletas graham, azúcar granulada, mantequilla, margarina, queso crema, azúcar granulada, vainilla, huevos\r\n', ''),
(4, 'ensalada de fruta', 'yogurt natural, miel de abeja, menta, Azucar mascabado, Canela, sandia, melon, kiwi, higo, Amaranto', ''),
(5, 'fresas con crema', 'fresas,leche condensada, crema vegetal, esencia de vainilla', ''),
(6, 'gelatina con leche y fresas', 'fresas, piña, grenetina, agua, leche, azucar', ''),
(7, 'hot-cakes', 'leche evaporada, huevo,Mantequilla,esencia de vainilla,harina para hot cakes,Mantequilla,leche Condensada lechera, Fresas \r\n', ''),
(8, 'Musse de mango', 'mantequilla, avena,amaranto, azucar morena, lechera, yogurt natural,mango,gelatina,agua, Mango, miel, grenetina, fresa \r\n', ''),
(9, 'Paletas de mora', 'mora,leche condensada,agua', ''),
(10, 'Pastel de zanahorias', 'zanahoria,piña en almibar,nuez,pasitas,harina,royal,bicarbonato,canela,azucar,aceite,huevos,sal,vainilla', ''),
(11, 'Pastel de galleta oreo', 'galleta de chocolate molidas,margarina,grenetina,queso crema,azucar,crema para batir,galletas de tipo sandwich', ''),
(12, 'pay de queso', 'huevos,leche condensada,leche evaporada,queso crema,galletas de vainilla,mantequilla,vainilla liquida', ''),
(13, 'Postre de limon y arandano', 'leche condensada,queso crema,limones,arandanos,claras,azucar', ''),
(14, 'Postre frio de piña', 'Bote de piña en almibar,nata para montar, creo de leche,Paquete de gelatina neutra, grenetina,Bizcocho base de tarta redonda\r\n', ''),
(15, 'Tapioca con leche', 'perlas de tapioca,leche de coco,crema de coco,cubos de durazno,menta para decorar\r\n', ''),
(16, 'Chiles rellenos', 'chiles poblanos,Jitomates,cebolla, ajo,caldo de pollo,queso manchego,huevos, aceite,harina', ''),
(17, 'Sopes con frijoles', 'frijoles,chorizo casero,ajo aceite\r\n', ''),
(18, 'Chuletas con pepinos', 'chuletas,Sal,pimienta,aceite,pepinos,limon,te de hierva buena', ''),
(19, 'Enchiladas', 'pechuga de pollo,tortilla,chiles guajillos,chiles anchos,jitomate rojo,dientes de ajo,cebolla blanca,comino molido,consomé de pollo granulado, aceite,sal,aguacate,queso,crema\r\n', ''),
(20, 'Enfrijoladas', 'frijoles,tortillas de maiz, queso rallado', ''),
(21, 'Huevos a la mexicana', 'huevos,cebolla,Jitomates,chile serrano,aceite,sal', ''),
(22, 'Huevos con salchicha', 'huevos,salchichas,aceite,sal', ''),
(23, 'Lentejas', 'lentejas,jitomates,cebolla,ajo,sal,Pimienta \r\n', ''),
(24, 'Pure de papa', 'papas, agua,matequilla,leche', ''),
(25, 'Quesadillas de manzana', 'Tortillas de harina,Queso: gouda,manchego,chihuahua,\r\nManzana: roja, granny smith, peron, golden', ''),
(26, 'Sopa de pollo', 'piezas de pollo,zanahorias,chayote,papas,calabazas,apio,agua,cebolla,Rama Hievabuena,Sal,pimienta', ''),
(27, 'Sopes', 'tazas de maseca,agua,sal,frijol refrito,pollo,queso requesón,lechuga orejona, picadas,salsa verde,\r\naceite vegetal', ''),
(28, 'Spaguetty rojo', 'ajo,tomates,pasta,mantequilla,crema,caldo de pollo,cebolla,sal', ''),
(29, 'Tinga de pollo con chorizo', 'pechuga pollo,chorizo,cebolla,chile chipotle,tomatea,ajo,aceite,agua,repollo, \r\nLimones,consome de pollo,tortilla', ''),
(30, 'Tortita de papa', 'papas,queso panela,huevos,pan molido,cilantro,aceite vegetal', ''),
(31, 'Piña colada', 'Tazas de avena,Litro de agua,leche de coco,jugo de piña natural,6 Rodajas de piña,Hielos\r\n', ''),
(32, 'Jugo de manzanas', 'manzanas rojas grandes,limones,Endulzante', ''),
(33, 'Agua de tamarindo', 'tamarindos,agua,azúcar\r\nhielos,chiles piquín', ''),
(34, 'Agua de sandia', 'Sadia,agua,hielo,azucar\r\n', ''),
(35, 'Agua de pepino', 'agua,limones, Pepino,Hojas de menta\r\n', ''),
(36, 'Agua de naranja', 'jugo de naranja,naranja,agua,azúcar,hielo\r\n', ''),
(37, 'Agua de melon', 'melon,agua,azucar,endulzante,hojas de menta,hielo', ''),
(38, 'Agua de maracuya', 'maracuya,agua,azucar', ''),
(39, 'Agua de mango', 'azucar, agua, mango,Hielo ', ''),
(40, 'Agua de limon', 'azucar,limon amarillo,jugo de limon verde,agua mineral,Cubos de hielo,\r\nHojas de menta', ''),
(41, 'Agua kiwi', 'agua,kiwi pelado,Fresas rebanadas', ''),
(42, 'Agua de jamaica', 'jamaica,agua,azucar ,hielos', ''),
(43, 'Agua de orchata', 'arroz,\r\ncanela,\r\nleche condensada,\r\nagua,\r\nextrato de vainilla,\r\nAzucar', ''),
(44, 'Agua de fruta', 'manzanas,\r\nesencia de vainilla,\r\nleche condensada,\r\nleche evaporada,\r\nplátanos,\r\nfresas,\r\nguayabas,\r\nagua,\r\nHielos,\r\nAzúcar\r\n', ''),
(45, 'Agua de frutas', 'fresa\r\nleche entera\r\nleche evaporada,\r\ncrema de coco,\r\ncrema para batir,\r\nvainilla,\r\nHielo,\r\nagua,\r\n', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` mediumint(8) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`) VALUES
(42, 'Eliodoro Ramos Rauda', 'elio.aguilas@live.com', '$2y$10$uSpWWu4WAQ.VdpFpM2.C8uxoJbVTG3P2HlUygWDcaC1lE6ZLxoTs6'),
(43, 'Angel Dewing', 'dewing@gmail.com', '$2y$10$Lu2J4a8yhOkc3aPbA4g02OczjsLJ4IPj6SV3euyYyOQKwZQqAOZ6K');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id_r`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id_r` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
