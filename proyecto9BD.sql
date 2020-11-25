-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2020 a las 19:54:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto9bd`
--
CREATE DATABASE IF NOT EXISTS `proyecto9bd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `proyecto9bd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `NumComentario` int(11) NOT NULL,
  `Contenido` varchar(350) NOT NULL,
  `Fecha` date NOT NULL,
  `UsuarioId` int(11) NOT NULL,
  `ProductoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
-- 

INSERT INTO `comentario` (`NumComentario`, `Contenido`, `Fecha`, `UsuarioId`, `ProductoId`) VALUES
(1, 'Es una bicicleta espectacular.', '2020-04-07', 1, 1),
(2, 'La relación calidad-precio no es buena.', '2020-04-06', 2, 2),
(3, 'El Servicio que da en Madrid es bueno. Dispone de dos modelos de coche eléctrico para dos personas o 4 personas', '2020-04-05', 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ProductoId` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(150) NOT NULL,
  `Foto` text NOT NULL,
  `SeccionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ProductoId`, `Nombre`, `Descripcion`, `Foto`, `SeccionId`) VALUES
(1, 'xioami m365', 'fds', 'foto1.jpg', 2),
(2, 'BMW i3', 'BMW i3', 'foto2.jpg', 2),
(3, 'xioami m365 pro', 'm365', 'foto3.jpg', 2),
(4, 'QICYCLE EF1 c', ' XIAOMI QICYCLE EF1 c', 'foto4.jpg', 1),
(5, 'soonerbike', 'soonerbike', 'foto5.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `SeccionId` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`SeccionId`, `Nombre`) VALUES
(1, 'Bicicletas'),
(2, 'Patinetes'),
(3, 'Servicios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `UsuarioId` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Registro` date NOT NULL,
  `Experiencia` enum('Principiante','Intermedio','Experto') DEFAULT 'Principiante',
  `Activo` tinyint(1) DEFAULT 1,
  `Administrador` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`UsuarioId`, `Username`, `Contrasena`, `Email`, `Registro`, `Experiencia`, `Activo`, `Administrador`) VALUES
(1, 'Raul', '123', 'raul@gmail.com', '2020-04-05', 'Principiante', 1, 1),
(2, 'Paco', '123', 'paco@gmail.com', '2020-04-06', 'Intermedio', 1, 0),
(3, 'Javier', '1234', 'javier@gmail.com', '2020-04-06', 'Principiante', 1, 0),
(4, 'Jordi', '1234', 'jordi@gmail.com', '2020-04-06', 'Principiante', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `Puntuacion` int(11) NOT NULL,
  `UsuarioId` int(11) NOT NULL,
  `ProductoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`Puntuacion`, `UsuarioId`, `ProductoId`) VALUES
(4, 1, 1),
(2, 2, 2),
(3, 4, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`NumComentario`,`UsuarioId`,`ProductoId`),
  ADD UNIQUE KEY `NumComentario` (`NumComentario`),
  ADD KEY `UsuarioId` (`UsuarioId`),
  ADD KEY `ProductoId` (`ProductoId`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ProductoId`),
  ADD KEY `SeccionId` (`SeccionId`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`SeccionId`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`UsuarioId`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`UsuarioId`,`ProductoId`),
  ADD KEY `ProductoId` (`ProductoId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `NumComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ProductoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `SeccionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `UsuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`UsuarioId`) REFERENCES `usuario` (`UsuarioId`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`ProductoId`) REFERENCES `producto` (`ProductoId`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`SeccionId`) REFERENCES `seccion` (`SeccionId`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`UsuarioId`) REFERENCES `usuario` (`UsuarioId`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`ProductoId`) REFERENCES `producto` (`ProductoId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
