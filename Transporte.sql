-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para senatransporte
CREATE DATABASE IF NOT EXISTS `senatransporte` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `senatransporte`;

-- Volcando estructura para tabla senatransporte.busetas
CREATE TABLE IF NOT EXISTS `busetas` (
  `Placa` varchar(45) NOT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Seguro` varchar(50) DEFAULT NULL,
  `TecnoMecanica` varchar(50) DEFAULT NULL,
  `IdConductor` int(11) DEFAULT NULL,
  PRIMARY KEY (`Placa`),
  KEY `IdConductor` (`IdConductor`),
  CONSTRAINT `FK_busetas_empleados_2` FOREIGN KEY (`IdConductor`) REFERENCES `empleados` (`Id_Empleados`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senatransporte.busetas: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `busetas` DISABLE KEYS */;
INSERT INTO `busetas` (`Placa`, `Modelo`, `Marca`, `Color`, `Seguro`, `TecnoMecanica`, `IdConductor`) VALUES
	('FBY -12 B', '2013', 'Audi', 'Gris-Champan', 'No', 'Si', 1),
	('KLQ - 14 B', '2012', 'suzuki', 'Blanca', 'Si', 'No', 2147483647),
	('NIB - 20 A', '2002', 'Yamaha', 'Rojo', 'No', 'No', 15048895);
/*!40000 ALTER TABLE `busetas` ENABLE KEYS */;

-- Volcando estructura para tabla senatransporte.cargos
CREATE TABLE IF NOT EXISTS `cargos` (
  `Id_Cargo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Cargo`),
  KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senatransporte.cargos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` (`Id_Cargo`, `Nombre`) VALUES
	(4, 'Administrador'),
	(1, 'Conductor'),
	(2, 'Limpieza'),
	(3, 'Secretari@');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;

-- Volcando estructura para tabla senatransporte.detalleventas
CREATE TABLE IF NOT EXISTS `detalleventas` (
  `Id_Venta` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Rutas` int(11) DEFAULT NULL,
  `Id_Usuarios` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `NombreRuta` varchar(50) DEFAULT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`Id_Venta`),
  KEY `NombreRuta` (`NombreRuta`),
  KEY `FK_detalleventas_registros` (`Id_Usuarios`),
  KEY `FK_detalleventas_rutas` (`Id_Rutas`),
  KEY `FK_detalleventas_tipo-venta` (`Tipo`),
  CONSTRAINT `FK_detalleventas_registros` FOREIGN KEY (`Id_Usuarios`) REFERENCES `registros` (`Id_Usuarios`) ON UPDATE CASCADE,
  CONSTRAINT `FK_detalleventas_rutas` FOREIGN KEY (`Id_Rutas`) REFERENCES `rutas` (`Id_Rutas`) ON UPDATE CASCADE,
  CONSTRAINT `FK_detalleventas_rutas_2` FOREIGN KEY (`NombreRuta`) REFERENCES `rutas` (`Nombre`) ON UPDATE CASCADE,
  CONSTRAINT `FK_detalleventas_tipo-venta` FOREIGN KEY (`Tipo`) REFERENCES `tipo-venta` (`Tipo`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senatransporte.detalleventas: ~39 rows (aproximadamente)
/*!40000 ALTER TABLE `detalleventas` DISABLE KEYS */;
INSERT INTO `detalleventas` (`Id_Venta`, `Id_Rutas`, `Id_Usuarios`, `Cantidad`, `Precio`, `Total`, `NombreRuta`, `Tipo`, `Fecha`) VALUES
	(1, 1, 1102887756, 1, 120000, 120000, 'Medellin - Antioquia', 'Compra', '2021-09-17'),
	(2, 1, 1102887756, 12, 80000, 960000, 'Monteria - Cordoba ', 'Compra', '2021-09-16'),
	(3, 1, 1, 1, 20000, 20000, 'Sincelejo-Sucre', 'Reserva', '2021-09-17'),
	(6, 1, 1102887756, 1, 25000, 25000, 'Sincelejo-Sucre', 'Reserva', '2021-09-17'),
	(7, 1, 1102887756, 1, 25000, 25000, 'Sincelejo-Sucre', 'Reserva', '2021-09-17'),
	(10, 3, 1102887756, 2, 12000, 24000, 'Barranquilla - Atlantico', 'Reserva', '2021-01-17'),
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
	(21, 2, 2, 1, 80000, 80000, 'Monteria - Cordoba ', 'Reserva', '2021-09-17'),
	(22, 2, 11028877, 15, 80000, 1200000, 'Monteria - Cordoba ', 'Reserva', '2021-11-10'),
	(23, 2, 11028877, 13, 80000, 1040000, 'Monteria - Cordoba ', 'Reserva', '2021-11-10'),
	(24, 2, 11028877, 1, 80000, 80000, 'Monteria - Cordoba ', 'Reserva', '2021-11-10'),
	(25, 1, 2, 9, 25000, 225000, 'Sincelejo-Sucre', 'Reserva', '2021-11-11'),
	(49, 2, 2, 3, 80000, 240000, 'Monteria - Cordoba ', 'Reserva', '2021-11-11'),
	(50, 2, 2, 9, 80000, 720000, 'Monteria - Cordoba ', 'Reserva', '2021-11-11'),
	(51, 1, 2, 1, 25000, 25000, 'Sincelejo-Sucre', 'Reserva', '2021-11-11'),
	(52, 1, 2, 1, 25000, 25000, 'Sincelejo-Sucre', 'Reserva', '2021-11-11'),
	(53, 1, 2, 2, 25000, 50000, 'Sincelejo-Sucre', 'Reserva', '2021-11-11'),
	(54, 1, 2, 2, 25000, 50000, 'Sincelejo-Sucre', 'Reserva', '2021-11-11'),
	(55, 2, 2, 1, 80000, 80000, 'Monteria - Cordoba ', 'Reserva', '2021-11-11'),
	(56, 2, 2, 1, 80000, 80000, 'Monteria - Cordoba ', 'Reserva', '2021-11-11'),
	(57, 3, 2, 2, 120000, 240000, 'Barranquilla - Atlantico', 'Reserva', '2021-11-11'),
	(58, 1, 2, 2, 25000, 50000, 'Sincelejo-Sucre', 'Reserva', '2021-11-11'),
	(59, 1, 2, 2, 25000, 50000, 'Sincelejo-Sucre', 'Reserva', '2021-11-11'),
	(60, 2, 2, 2, 80000, 160000, 'Monteria - Cordoba ', 'Reserva', '2021-11-11'),
	(61, 2, 2, 2, 80000, 160000, 'Monteria - Cordoba ', 'Reserva', '2021-11-11'),
	(62, 2, 2, 2, 80000, 160000, 'Monteria - Cordoba ', 'Reserva', '2021-11-11'),
	(63, 3, 2, 2, 120000, 240000, 'Barranquilla - Atlantico', 'Reserva', '2021-11-11'),
	(64, 3, 2, 2, 120000, 240000, 'Barranquilla - Atlantico', 'Reserva', '2021-11-11'),
	(66, 2, 1102887756, 8, 80000, 640000, 'Monteria - Cordoba ', 'Reserva', '2021-11-11'),
	(67, 1, 1102887756, 16, 25000, 400000, 'Sincelejo-Sucre', 'Compra', '2021-11-11');
/*!40000 ALTER TABLE `detalleventas` ENABLE KEYS */;

-- Volcando estructura para tabla senatransporte.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `Id_Empleados` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `FechaDeNacimiento` date DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `Cargo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Empleados`),
  KEY `Cargo` (`Cargo`),
  CONSTRAINT `FK_empleados_cargos` FOREIGN KEY (`Cargo`) REFERENCES `cargos` (`Nombre`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senatransporte.empleados: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` (`Id_Empleados`, `Nombre`, `Apellido`, `Telefono`, `Direccion`, `Correo`, `FechaDeNacimiento`, `Imagen`, `Cargo`) VALUES
	(1, '1', '1', '1', '1', '1', '2021-09-03', '1', 'Conductor'),
	(2, '22', '2', '2', '2', '2', '2022-09-03', '2', 'Conductor'),
	(110288, 'Jesus', 'Vidal', '3015977587', 'Calle 27f No 4 -75', 'Jesus@gmail.com', '2021-11-10', NULL, 'Administrador '),
	(1234567, 'Gustavo david', 'Bolivar Hernadndez', '3120123512', 'Calle 4 # 24-2', 'Gusboli@outlook.com', '2021-07-27', 'Url', 'Limpieza'),
	(15048895, 'Eloy de jesus ', 'Vidal Vega', '31054921', 'Calle 27f # 4 -74', 'VegaVidal@hotmail.com', '1963-04-28', 'Url', 'Conductor'),
	(1102887756, 'Jesus', 'Vidal', '3155982121', 'Calle 3 # 24 a .14', 'ElCorreo@gmail.com', '2004-08-28', 'url', 'Administrador'),
	(2147483647, 'Andres ', 'Berrocal', '3009871234', 'Carrera 15 # 54- 4', 'Berrocal@hotmail.com', '2001-07-20', 'Url', 'Conductor');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla senatransporte.registros
CREATE TABLE IF NOT EXISTS `registros` (
  `Id_Usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Usuarios`),
  KEY `Rol` (`Rol`),
  CONSTRAINT `FK_registros_roles` FOREIGN KEY (`Rol`) REFERENCES `roles` (`Rol`)
) ENGINE=InnoDB AUTO_INCREMENT=1102887757 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senatransporte.registros: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` (`Id_Usuarios`, `Nombre`, `Apellido`, `Correo`, `Password`, `Telefono`, `Direccion`, `Rol`) VALUES
	(1, 'Primero', 'Primerito', 'Ramirez_Vidal@outlook.com', '1234', '3015977587', NULL, 'ADMIN'),
	(2, 'Segundo', 'Segundito', 'Jesus_vidal@sena.com', '1234', '3116541672', NULL, 'USER'),
	(11028877, 'Jesus', 'David', 'Jesus@gmail.com', '1234', '3015977587', 'Calle 27f No 4 -74', 'ADMIN'),
	(1102887756, ' Jesus David ', 'Vidal Ramirez', 'Jesus_vidal@outlook.com', '1234', '3015977587', 'Calle 3c # 24 -32', 'USER');
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;

-- Volcando estructura para tabla senatransporte.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `Rol` varchar(50) NOT NULL,
  PRIMARY KEY (`Rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senatransporte.roles: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`Rol`) VALUES
	('ADMIN'),
	('USER');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla senatransporte.rutas
CREATE TABLE IF NOT EXISTS `rutas` (
  `Id_Rutas` int(11) NOT NULL AUTO_INCREMENT,
  `Placa` varchar(45) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `Informacion` text DEFAULT NULL,
  PRIMARY KEY (`Id_Rutas`),
  KEY `Placa` (`Placa`),
  KEY `Nombre` (`Nombre`),
  CONSTRAINT `FK_rutas_busetas` FOREIGN KEY (`Placa`) REFERENCES `busetas` (`Placa`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senatransporte.rutas: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `rutas` DISABLE KEYS */;
INSERT INTO `rutas` (`Id_Rutas`, `Placa`, `Nombre`, `Precio`, `Imagen`, `Informacion`) VALUES
	(1, 'NIB - 20 A', 'Sincelejo-Sucre', 25000, 'Sincelejo.png', 'Sincelejo es una ciudad del norte de Colombia conocida por su festival de corridas de toros Corralejas y su patrimonio musical. En el corazón de la ciudad, se encuentra la Catedral de San Francisco de Asís, del siglo XIX, frente al Parque Santander. La Plaza de Majagual, con un diseño de mosaicos, le da su nombre a varias canciones populares y a la banda colombiana Los Corraleros de Majagual.'),
	(2, 'KLQ - 14 B', 'Monteria - Cordoba ', 80000, 'Monteria.png', 'Montería es una ciudad del norte de Colombia. Es conocida por su cultura ganadera y los planchones (balsas techadas) que transportan a los pasajeros a través del río Sinú. El frondoso Parque Ronda del Sinú se extiende a lo largo del río, con senderos y monos, iguanas y perezosos. En el área norte del parque, se encuentra la torre El Mirador, con vista panorámica del río.'),
	(3, 'FBY -12 B', 'Barranquilla - Atlantico', 120000, 'Barranquilla.png', 'Barranquilla, es la capital del departamento Atlántico de Colombia y es un desbordante puerto marino, bordeado por el río Magdalena. La ciudad es conocida por su enorme Carnaval, que reúne a artistas con extravagantes disfraces, carros elaborados y música cumbia, En el elegante vecindario El Prado, el Museo Romántico exhibe artefactos de festivales, y muchos lugares mas.'),
	(4, NULL, 'Cali - Valle del Cauca', 15000, 'Cali.png', 'Cali es una ciudad colombiana ubicada en el departamento del Valle del Cauca, al suroeste de Bogotá. Es conocida por el baile de la salsa, del que hay muchos clubes en el suburbio de Juanchito. En el barrio más antiguo de Cali, la catedral neoclásica de San Pedro alberga pinturas de la Escuela de Quito.......!!!!! .'),
	(5, NULL, 'Medellin - Antioquia', 100000, 'Medellin.png', 'Medellín es la capital de la provincia montañosa de Antioquia en Colombia. Es apodada la "Ciudad de la eterna primavera" por su clima templado y alberga la famosa Feria de las Flores anual. El moderno Metrocable conecta la ciudad con los barrios circundantes y tiene vistas del Valle de Aburrá que se encuentra debajo.');
/*!40000 ALTER TABLE `rutas` ENABLE KEYS */;

-- Volcando estructura para tabla senatransporte.tipo-venta
CREATE TABLE IF NOT EXISTS `tipo-venta` (
  `Tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senatransporte.tipo-venta: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo-venta` DISABLE KEYS */;
INSERT INTO `tipo-venta` (`Tipo`) VALUES
	('Compra'),
	('Reserva');
/*!40000 ALTER TABLE `tipo-venta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
