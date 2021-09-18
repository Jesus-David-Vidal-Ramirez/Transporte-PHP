-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2021 a las 02:20:16
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `senatransporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `busetas`
--

CREATE TABLE `busetas` (
  `Placa` varchar(45) NOT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Seguro` varchar(50) DEFAULT NULL,
  `TecnoMecanica` varchar(50) DEFAULT NULL,
  `IdConductor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `busetas`
--

INSERT INTO `busetas` (`Placa`, `Modelo`, `Marca`, `Color`, `Seguro`, `TecnoMecanica`, `IdConductor`) VALUES
('FBY -12 B', '2013', 'Audi', 'Gris-Champan', 'No', 'Si', 1),
('KLQ - 14 B', '2012', 'suzuki', 'Blanca', 'Si', 'No', 2147483647),
('NIB - 20 A', '2002', 'Yamaha', 'Rojo', 'No', 'No', 15048895);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `Id_Cargo` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`Id_Cargo`, `Nombre`) VALUES
(4, 'Administrador'),
(1, 'Conductor'),
(2, 'Limpieza'),
(3, 'Secretari@');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `Id_Venta` int(11) NOT NULL,
  `Id_Rutas` int(11) DEFAULT NULL,
  `Id_Usuarios` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `NombreRuta` varchar(50) DEFAULT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalleventas`
--

INSERT INTO `detalleventas` (`Id_Venta`, `Id_Rutas`, `Id_Usuarios`, `Cantidad`, `Precio`, `Total`, `NombreRuta`, `Tipo`, `Fecha`) VALUES
(1, 1, 1102887756, 1, 120000, 120000, NULL, NULL, '2021-09-17'),
(2, 1, 1102887756, 12, 80000, 960000, 'Monteria - Cordoba ', 'Compra', '2021-09-16'),
(3, 3, 1, 1, 20000, 20000, 'Sincelejo-Sucre', 'Reserva', '2021-09-17'),
(6, 1, 1102887756, 1, 25000, 25000, 'Sincelejo-Sucre', 'Reserva', '2021-09-17'),
(7, 1, 1102887756, 1, 25000, 25000, 'Sincelejo-Sucre', 'Reserva', '2021-09-17'),
(8, 1, 1102887756, 1, 25000, 25000, 'Sincelejo-Sucre', 'Reserva', '2021-09-17'),
(10, 3, 1102887756, 2, 12000, 24000, 'Barranquilla - Atlantico', 'Reserva', '2021-09-17'),
(11, 3, 1102887756, 2, 12000, 24000, 'Barranquilla - Atlantico', 'Reserva', '2021-09-17'),
(12, 3, 1102887756, 2, 12000, 24000, 'Barranquilla - Atlantico', 'Reserva', '2021-09-17'),
(13, 3, 1102887756, 2, 12000, 24000, 'Barranquilla - Atlantico', 'Reserva', '2021-09-17'),
(14, 3, 1102887756, 2, 12000, 24000, 'Barranquilla - Atlantico', 'Reserva', '2021-09-17'),
(15, 3, 1102887756, 2, 120000, 240000, 'Barranquilla - Atlantico', 'Reserva', '2021-09-17'),
(16, 1, 1102887756, 2, 25000, 50000, 'Sincelejo-Sucre', 'Reserva', '2021-09-17'),
(17, 1, 1102887756, 1, 25000, 25000, 'Sincelejo-Sucre', 'Reserva', '2021-09-17'),
(18, 2, 1102887756, 1, 80000, 80000, 'Monteria - Cordoba ', 'Reserva', '2021-09-17'),
(19, 3, 1102887756, 2, 12000, 24000, 'Barranquilla - Atlantico', 'Reserva', '2021-09-17'),
(20, 3, 1102887756, 2, 12000, 24000, 'Barranquilla - Atlantico', 'Reserva', '2021-09-17'),
(21, 2, 2, 1, 80000, 80000, 'Monteria - Cordoba ', 'Reserva', '2021-09-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_Empleados` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `FechaDeNacimiento` date DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `Cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_Empleados`, `Nombre`, `Apellido`, `Telefono`, `Direccion`, `Correo`, `FechaDeNacimiento`, `Imagen`, `Cargo`) VALUES
(1, '1', '1', '1', '1', '1', '2021-09-03', '1', 'Conductor'),
(2, '22', '2', '2', '2', '2', '2022-09-03', '2', 'Conductor'),
(1234567, 'Gustavo david', 'Bolivar Hernadndez', '3120123512', 'Calle 4 # 24-2', 'Gusboli@outlook.com', '2021-07-27', 'Url', 'Limpieza'),
(15048895, 'Eloy de jesus ', 'Vidal Vega', '31054921', 'Calle 27f # 4 -74', 'VegaVidal@hotmail.com', '1963-04-28', 'Url', 'Conductor'),
(1102887756, 'Jesus', 'Vidal', '3155982121', 'Calle 3 # 24 a .14', 'ElCorreo@gmail.com', '2004-08-28', 'url', 'Administrador'),
(2147483647, 'Andres ', 'Berrocal', '3009871234', 'Carrera 15 # 54- 4', 'Berrocal@hotmail.com', '2001-07-20', 'Url', 'Conductor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `Id_Usuarios` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`Id_Usuarios`, `Nombre`, `Apellido`, `Correo`, `Password`, `Telefono`, `Direccion`, `Rol`) VALUES
(1, 'Primero', 'Primerito', 'Ramirez_Vidal@outlook.com', '1234', '3015977587', NULL, 'ADMIN'),
(2, 'Segundo', 'Segundito', 'Jesus_vidal@sena.com', '1234', '3116541672', NULL, 'USER'),
(1102887756, ' Jesus David ', 'Vidal Ramirez', 'Jesus_vidal@outlook.com', '1234', '3015977587', 'Calle 3c # 24 -32', 'USER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Rol`) VALUES
('ADMIN'),
('USER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `Id_Rutas` int(11) NOT NULL,
  `Placa` varchar(45),
  `Nombre` varchar(50) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `Informacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`Id_Rutas`, `Placa`, `Nombre`, `Precio`, `Imagen`, `Informacion`) VALUES
(1, 'NIB - 20 A', 'Sincelejo-Sucre', 25000, 'Sincelejo.png', 'Sincelejo es una ciudad del norte de Colombia conocida por su festival de corridas de toros Corralejas y su patrimonio musical. En el corazón de la ciudad, se encuentra la Catedral de San Francisco de Asís, del siglo XIX, frente al Parque Santander. La Plaza de Majagual, con un diseño de mosaicos, le da su nombre a varias canciones populares y a la banda colombiana Los Corraleros de Majagual.'),
(2, 'KLQ - 14 B', 'Monteria - Cordoba ', 80000, 'Monteria.png', 'Montería es una ciudad del norte de Colombia. Es conocida por su cultura ganadera y los planchones (balsas techadas) que transportan a los pasajeros a través del río Sinú. El frondoso Parque Ronda del Sinú se extiende a lo largo del río, con senderos y monos, iguanas y perezosos. En el área norte del parque, se encuentra la torre El Mirador, con vista panorámica del río.'),
(3, 'FBY -12 B', 'Barranquilla - Atlantico', 120000, 'Barranquilla.png', 'Barranquilla, es la capital del departamento Atlántico de Colombia y es un desbordante puerto marino, bordeado por el río Magdalena. La ciudad es conocida por su enorme Carnaval, que reúne a artistas con extravagantes disfraces, carros elaborados y música cumbia, En el elegante vecindario El Prado, el Museo Romántico exhibe artefactos de festivales, y muchos lugares mas.'),
(4, NULL, 'Cali - Valle del Cauca', 15000, 'Cali.png', 'Cali es una ciudad colombiana ubicada en el departamento del Valle del Cauca, al suroeste de Bogotá. Es conocida por el baile de la salsa, del que hay muchos clubes en el suburbio de Juanchito. En el barrio más antiguo de Cali, la catedral neoclásica de San Pedro alberga pinturas de la Escuela de Quito.......!!!!! .'),
(5, NULL, 'Medellin - Antioquia', 100000, 'Medellin.png', 'Medellín es la capital de la provincia montañosa de Antioquia en Colombia. Es apodada la \"Ciudad de la eterna primavera\" por su clima templado y alberga la famosa Feria de las Flores anual. El moderno Metrocable conecta la ciudad con los barrios circundantes y tiene vistas del Valle de Aburrá que se encuentra debajo.'),
(6, NULL, 'Santa Marta - Magdalena', 150000, 'SantaMarta.png', 'Tierra del pibe y de carlos vives');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo-venta`
--

CREATE TABLE `tipo-venta` (
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo-venta`
--

INSERT INTO `tipo-venta` (`Tipo`) VALUES
('Compra'),
('Reserva');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `busetas`
--
ALTER TABLE `busetas`
  ADD PRIMARY KEY (`Placa`),
  ADD KEY `IdConductor` (`IdConductor`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`Id_Cargo`),
  ADD KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD PRIMARY KEY (`Id_Venta`),
  ADD KEY `NombreRuta` (`NombreRuta`),
  ADD KEY `FK_detalleventas_registros` (`Id_Usuarios`),
  ADD KEY `FK_detalleventas_rutas` (`Id_Rutas`),
  ADD KEY `FK_detalleventas_tipo-venta` (`Tipo`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleados`),
  ADD KEY `Cargo` (`Cargo`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`Id_Usuarios`),
  ADD KEY `Rol` (`Rol`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Rol`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`Id_Rutas`),
  ADD KEY `Placa` (`Placa`),
  ADD KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `tipo-venta`
--
ALTER TABLE `tipo-venta`
  ADD PRIMARY KEY (`Tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `Id_Cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  MODIFY `Id_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `Id_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1102887757;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `Id_Rutas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `busetas`
--
ALTER TABLE `busetas`
  ADD CONSTRAINT `FK_busetas_empleados_2` FOREIGN KEY (`IdConductor`) REFERENCES `empleados` (`Id_Empleados`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD CONSTRAINT `FK_detalleventas_registros` FOREIGN KEY (`Id_Usuarios`) REFERENCES `registros` (`Id_Usuarios`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_detalleventas_rutas` FOREIGN KEY (`Id_Rutas`) REFERENCES `rutas` (`Id_Rutas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_detalleventas_rutas_2` FOREIGN KEY (`NombreRuta`) REFERENCES `rutas` (`Nombre`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_detalleventas_tipo-venta` FOREIGN KEY (`Tipo`) REFERENCES `tipo-venta` (`Tipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `FK_empleados_cargos` FOREIGN KEY (`Cargo`) REFERENCES `cargos` (`Nombre`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `FK_registros_roles` FOREIGN KEY (`Rol`) REFERENCES `roles` (`Rol`);

--
-- Filtros para la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD CONSTRAINT `FK_rutas_busetas` FOREIGN KEY (`Placa`) REFERENCES `busetas` (`Placa`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
