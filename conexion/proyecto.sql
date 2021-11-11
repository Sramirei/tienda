-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 04:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `consolas`
--

CREATE TABLE `consolas` (
  `id_consola` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio_uni` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consolas`
--

INSERT INTO `consolas` (`id_consola`, `nombre`, `precio_uni`) VALUES
('1', 'Play 3', '600000'),
('2', 'Xbox One', '1000000'),
('3', 'Nintengo Switch', '1200000'),
('4', 'Play 4', '950000');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
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

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_Productos`, `Nombres`, `Descripcion`, `Valor_unitario`, `Cantidad`, `Imagen`, `id_consola2`) VALUES
(2, 'Grand Theft Auto V', 'Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto desarrollado por el estudio ', '65000', 1, 'https://i.ebayimg.com/images/g/o7gAAOSwCU1Yv9pE/s-l1600.jpg', '1'),
(3, 'Call Of Duty Black Ops 1 ', 'COD Black Ops1, es un videojuego de disparos en primera persona de estilo bélico fue desarrollado po', '70000', 1, 'https://gamefaqs1.cbsistatic.com/box/6/7/6/112676_front.jpg', '1'),
(4, 'Fortnite', 'Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic Games, lanzado como diferent', '30000', 1, 'https://media.gamestop.com/i/gamestop/10149560/Fortnite-Deluxe-Edition?$zoom$', '2'),
(5, 'Gears 5', 'Gears 5 es un videojuego de acción en tercera persona desarrollado por The Coalition y publicado por', '34000', 1, 'https://media.gamestop.com/i/gamestop/11094778/Gears-5?$pdp$', '2'),
(6, 'The Witcher 3', 'The Witcher 3: Wild Hunt es un videojuego de rol desarrollado por CD Projekt RED.', '40000', 1, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.de%2FWitcher-Wild-Guide-Walkthrough-Eng', '2'),
(7, 'The Legend of Zelda: Breath of the Wild', 'The Legend of Zelda: Breath of the Wild es el título oficial del videojuego de acción-aventura de la serie The Legend of Zelda, desarrollado por Nintendo EPD', '180000', 1, 'https://media.gamestop.com/i/gamestop/10141904/The-Legend-of-Zelda-Breath-of-the-Wild?$pdp$', '3'),
(8, 'Super Smash Bros. Ultimate', 'Super Smash Bros. Ultimate es un videojuego de lucha crossover de la serie Super Smash Bros. desarrollada por Bandai Namco Games y Sora Ltd. y publicado por Nintendo', '140000', 1, 'https://media.real-onlineshop.de/images/items/1024x1024/2f53041b723972d41c90acfa94b76ebe.jpg', '3'),
(9, 'Dragon Ball FighterZ', 'Dragon Ball FighterZ es un videojuego de lucha en 2D desarrollado por Arc System Works y distribuido por Bandai Namco Entertainment, basado en la franquicia Dragon Ball.?', '160000', 1, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.com.mx%2FDragon-Ball-FighterZ-Nintendo-Standard%2Fdp%2FB07DL1RJW8&psig=AOvVaw3yR2iD4450Zb-y3wnXMeLq&ust=1583245761137000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIDx852A_OcCFQAAAAAdAAAAABAK', '3'),
(10, 'Dragon Ball Z: Kakarot', 'Dragon Ball Z: Kakarot es un videojuego de rol de acción, desarrollado por CyberConnect2 y publicado por Bandai Namco Entertainment', '170000', 1, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.de%2FBandai-Dragon-KAKAROT-PLAYSTATION-JAPANESE%2Fdp%2FB07XS1QM6R&psig=AOvVaw0K1vEpJFdAITmyfSyA73kl&ust=1583246071579000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOjE6bGB_OcCFQAAAAAdAAAAABAF', '4'),
(11, 'Days Gone', 'Days Gone es un videojuego de acción-aventura y horror de supervivencia, desarrollado por el estudio SIE Bend Studio y que fue publicado por Sony Interactive', '165000', 1, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.elkjop.no%2Fproduct%2Fgaming%2Fspill%2Fspill-playstation-4%2FPS4DAYSGONE%2Fdays-gone-ps4&psig=AOvVaw1jcwulLQPx9yLaGGagrqVx&ust=1583246214074000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKiekvWB_OcCFQAAAAAdAAAAABAK', '4'),
(12, 'Horizon Zero Dawn', 'Horizon Zero Dawn es un videojuego de acción, aventura y de mundo abierto desarrollado por Guerrilla Games y distribuido por Sony Interactive Entertainment para PlayStation 4. ', '180000', 1, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fgameplanet.com%2Fhorizon-zero-dawn.html&psig=AOvVaw16SauU0GgkvP2r9vrs89SV&ust=1583246349745000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPiY07WC_OcCFQAAAAAdAAAAABAQ', '4');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roles_id` int(11) NOT NULL,
  `descripcion` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roles_id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
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
  `Foto` varchar(100) NOT NULL,
  `Roles_idroles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `Nombre`, `Apellido`, `Email`, `Clave`, `Telefono`, `Direccion`, `Ciudad`, `Foto`, `Roles_idroles`) VALUES
(1, 'Sebastian|', 'Ramirez', 'seebaastiian24@gmail.com', '12345', '4256352', 'calle siempre viva 123', 'sprinfield', '', 1),
(2, 'Nicolas', 'Ramirez', 'Nr19@gamail.com', '123456', '3127644196', 'calle siempre viva 123', 'cali', '', 2),
(8, 'Pepe', 'asd', 'pepe@hotmail.com', '123', '123', 'xd', 'xd', 'http://localhost/Finaql/registro/imagenes/1584401902_', 2);

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE `venta` (
  `Id_venta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(50) NOT NULL,
  `monto` varchar(300) NOT NULL,
  `usuario_id2` int(11) NOT NULL,
  `id_Productos1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`Id_venta`, `fecha`, `cantidad`, `monto`, `usuario_id2`, `id_Productos1`) VALUES
(33, '2020-03-17', 3, '4500', 8, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consolas`
--
ALTER TABLE `consolas`
  ADD PRIMARY KEY (`id_consola`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_Productos`),
  ADD KEY `id_consola2` (`id_consola2`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roles_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `Roles_idroles` (`Roles_idroles`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`Id_venta`),
  ADD KEY `usuario_id2` (`usuario_id2`,`id_Productos1`),
  ADD KEY `id_Productos` (`id_Productos1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_Productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `venta`
--
ALTER TABLE `venta`
  MODIFY `Id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_consola2`) REFERENCES `consolas` (`id_consola`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Roles_idroles`) REFERENCES `roles` (`roles_id`);

--
-- Constraints for table `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_Productos1`) REFERENCES `producto` (`id_Productos`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`usuario_id2`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
