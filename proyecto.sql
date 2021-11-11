-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2020 a las 21:23:01
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consolas`
--

CREATE TABLE `consolas` (
  `id_consola` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio_uni` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consolas`
--

INSERT INTO `consolas` (`id_consola`, `nombre`, `precio_uni`) VALUES
('1', 'Play 3', '600000'),
('2', 'Xbox One', '1000000'),
('3', 'Nintengo Switch', '1200000'),
('4', 'Play 4', '950000'),
('5', 'Asesorio', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio_pago`
--

CREATE TABLE `medio_pago` (
  `Id_mediopago` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medio_pago`
--

INSERT INTO `medio_pago` (`Id_mediopago`, `Nombre`) VALUES
(1, 'Paypal'),
(2, 'Terjeta Debito'),
(3, 'Tarjeta Credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_Productos` int(11) NOT NULL,
  `Nombres` varchar(45) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Valor_unitario` varchar(100) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Imagen` varchar(300) NOT NULL,
  `id_consola2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `roles_id` int(11) NOT NULL,
  `descripcion` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`roles_id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Clave` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `Foto` varchar(300) NOT NULL,
  `Roles_idroles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `Nombre`, `Apellido`, `Email`, `Clave`, `Telefono`, `Direccion`, `Ciudad`, `Foto`, `Roles_idroles`) VALUES
(26, 'Sebastian', 'Ramirez', 'seebaastiian24@gmail.com', '12345', '3127644196', 'calle siempre viva 123', 'Sprinfield', 'http://localhost/php/Finaql/registro/imagenes/1585182420_descarga.jpg', 1),
(30, 'Nicolas', 'Ramirez', 'nicolaas.ramirez1799@gmail.com', '12345', '4525855', 'calle siempre viva 123', 'cali', 'http://localhost/php/Finaql/registro/imagenes/1585184896_images.jpg', 2),
(33, 'Lucia', 'Ibarra', 'senima918@hotmail.com', '12345', '4525855', 'calle siempre viva 123', 'cali', 'http://localhost/php/Finaql/registro/imagenes/1585234428_1452399_662180343804296_691860759_n.jpg', 2),
(34, 'luis', 'ospina', 'lcospina9@misena.edu.co', '12345', '320565658', 'calle siempre viva 123', 'cali', 'http://localhost/php/Finaql/registro/imagenes/1585251028_7d8e764b5b9d7e11ac1edebbea5f5c8c.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `Id_venta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(50) NOT NULL,
  `monto` varchar(300) NOT NULL,
  `usuario_id2` int(11) NOT NULL,
  `id_Productos1` int(11) NOT NULL,
  `Id_mediopago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`Id_venta`, `fecha`, `cantidad`, `monto`, `usuario_id2`, `id_Productos1`, `Id_mediopago`) VALUES
(42, '2020-03-25', 4, '60', 30, 22, 1),
(43, '2020-03-25', 4, '60', 30, 22, 1),
(47, '2020-03-26', 8, '440', 33, 24, 2),
(48, '2020-03-26', 16, '160', 33, 27, 1),
(49, '2020-03-26', 4, '440', 33, 30, 1),
(50, '2020-03-26', 8, '120', 34, 22, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consolas`
--
ALTER TABLE `consolas`
  ADD PRIMARY KEY (`id_consola`);

--
-- Indices de la tabla `medio_pago`
--
ALTER TABLE `medio_pago`
  ADD PRIMARY KEY (`Id_mediopago`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_Productos`) USING BTREE,
  ADD KEY `id_consola2` (`id_consola2`) USING BTREE;

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roles_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`) USING BTREE,
  ADD KEY `Roles_idroles` (`Roles_idroles`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`Id_venta`),
  ADD KEY `usuario_id2` (`usuario_id2`,`id_Productos1`),
  ADD KEY `id_Productos` (`id_Productos1`),
  ADD KEY `Id_mediopago` (`Id_mediopago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medio_pago`
--
ALTER TABLE `medio_pago`
  MODIFY `Id_mediopago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_Productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `roles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `Id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_consola2`) REFERENCES `consolas` (`id_consola`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Roles_idroles`) REFERENCES `roles` (`roles_id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_Productos1`) REFERENCES `producto` (`id_Productos`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`usuario_id2`) REFERENCES `usuario` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`Id_mediopago`) REFERENCES `medio_pago` (`Id_mediopago`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
