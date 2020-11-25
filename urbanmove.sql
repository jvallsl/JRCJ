-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql110.epizy.com
-- Tiempo de generación: 25-11-2020 a las 15:41:22
-- Versión del servidor: 5.6.48-88.0
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_27129111_urbanmove`
--

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `Descripcion` varchar(250) NOT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `SeccionId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ProductoId`, `Nombre`, `Descripcion`, `Imagen`, `SeccionId`) VALUES
(1, 'Bicicleta eléctrica MY-SM26 Samebike', 'Aleación de aluminio 6061, 220-240V, 170 * 67 * 102 cm / 66.9 * 26.4 * 40.2in; Altura ajustable: 82-102cm / 32.3-40.2in; Max. Velocidad: 30 km / h; Ra', 'bici1.jpg', 1),
(2, 'Patinete eléctrico Bongo Serie Z Blue', 'Patinete eléctrico capaz de subir pendientes gracias a una potencia nominal de 500 W y máxima de hasta 1100 W, para uso urbano con unas sensaciones in', 'patin1.jpg', 2),
(3, 'Car2go', 'Empresa para uso temporal o préstamo de vehículos. Tiene en Austria, Dinamarca, Francia, Hungría, Países Bajos, Alemania, Italia y España. Salvo Alema', 'car2go.png', 3),
(8, 'Bici eléctrica Carmela 24', 'La Carmela 24 es una bicicleta eléctrica diseñada en Barcelona, ​compacta y excepcionalmente ligera en su categoría (15 kgs).', 'bici2.jpg', 1),
(9, 'Mi Go XMI Negro', 'Concebido como el patinete ideal para los trayectos por la ciudad de media y larga distancia con autonomía de 25 km y velocidad máxima de 25 km/h.', 'patin2.jpg', 2),
(10, 'Zity', 'Servicio de carsharing flexible, pensado para adaptarse a tus necesidades.', 'Zity.jpg', 3),
(11, 'xioami m365', 'fds', 'foto1.jpg', 2),
(12, 'BMW i3', 'BMW i3', 'foto2.jpg', 2),
(13, 'xioami m365 pro', 'm365', 'foto3.jpg', 2),
(14, 'QICYCLE EF1 c', ' XIAOMI QICYCLE EF1 c', 'foto4.jpg', 1),
(15, 'soonerbike', 'soonerbike', 'foto5.jpg', 1),
(16, 'xioami m365', 'fds', 'foto1.jpg', 2),
(17, 'BMW i3', 'BMW i3', 'foto2.jpg', 2),
(18, 'xioami m365 pro', 'm365', 'foto3.jpg', 2),
(19, 'QICYCLE EF1 c', ' XIAOMI QICYCLE EF1 c', 'foto4.jpg', 1),
(20, 'soonerbike', 'soonerbike', 'foto5.jpg', 1),
(21, 'xioami m365', 'fds', 'foto1.jpg', 2),
(22, 'BMW i3', 'BMW i3', 'foto2.jpg', 2),
(23, 'xioami m365 pro', 'm365', 'foto3.jpg', 2),
(24, 'QICYCLE EF1 c', ' XIAOMI QICYCLE EF1 c', 'foto4.jpg', 1),
(25, 'soonerbike', 'soonerbike', 'foto5.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `SeccionId` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `Activo` tinyint(1) DEFAULT '1',
  `Administrador` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`UsuarioId`, `Username`, `Contrasena`, `Email`, `Registro`, `Experiencia`, `Activo`, `Administrador`) VALUES
(1, 'Raul', '123', 'raul@gmail.com', '2020-04-05', 'Principiante', 1, 1),
(2, 'Paco', '123', 'paco@gmail.com', '2020-04-06', 'Intermedio', 1, 0),
(3, 'Javier', '1234', 'javier@gmail.com', '2020-04-06', 'Principiante', 1, 0),
(4, 'Jordi', '1234', 'jordi@gmail.com', '2020-04-06', 'Principiante', 1, 0),
(7, 'Votador', '123', 'votador@gmail.com', '2020-11-01', 'Principiante', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `Puntuacion` int(11) NOT NULL,
  `UsuarioId` int(11) NOT NULL,
  `ProductoId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`Puntuacion`, `UsuarioId`, `ProductoId`) VALUES
(4, 1, 1),
(3, 1, 10),
(3, 2, 1),
(2, 2, 2),
(4, 2, 9),
(5, 2, 10),
(4, 3, 1),
(4, 3, 8),
(5, 4, 1),
(3, 4, 3),
(2, 4, 8),
(3, 5, 2),
(4, 5, 3),
(2, 6, 1),
(1, 6, 3),
(2, 6, 9),
(4, 7, 1),
(2, 7, 2),
(3, 7, 3),
(3, 7, 8),
(4, 7, 10);

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
  MODIFY `ProductoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `SeccionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `UsuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
