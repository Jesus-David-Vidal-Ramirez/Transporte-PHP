-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.38-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para logina1
CREATE DATABASE IF NOT EXISTS `logina1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `logina1`;

-- Volcando estructura para tabla logina1.busetas
CREATE TABLE IF NOT EXISTS `busetas` (
  `Modelo` varchar(50) DEFAULT NULL,
  `Placa` varchar(50) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla logina1.busetas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `busetas` DISABLE KEYS */;
INSERT INTO `busetas` (`Modelo`, `Placa`, `Marca`, `Color`) VALUES
	('2002', 'FER-123', 'Ferrari', 'RojoPasion'),
	('2000', 'AUD-321', 'Audi', 'Gris-Champan');
/*!40000 ALTER TABLE `busetas` ENABLE KEYS */;

-- Volcando estructura para tabla logina1.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `Identificacion` varchar(50) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla logina1.empleados: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` (`Identificacion`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Direccion`, `Foto`) VALUES
	('13', 'Frank', 'Clavado', 'Franklina@gmail.com', '323', 'Calle peligrosa', NULL),
	('105', 'Jesus', 'Ramirez', 'Ramirez_Vidal@outlook.com', '315', 'calle 12 # 12', NULL);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla logina1.registro
CREATE TABLE IF NOT EXISTS `registro` (
  `Usuario` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Identificacion` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla logina1.registro: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` (`Usuario`, `Password`, `Nombre`, `Identificacion`, `Telefono`, `Direccion`, `Rol`) VALUES
	('12345@gmail.com', 'Colombia', 'Jesus', '1221', '1231231', '1313', 2),
	('1@gmail.com', '1', 'Jesus', '1102887756', '3015977587', 'Calle-3c#24-39', 1),
	('2@gmail.com', '2', '2', '2', '2', '2', 2);
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;

-- Volcando estructura para tabla logina1.rutas
CREATE TABLE IF NOT EXISTS `rutas` (
  `Nombre` varchar(50) CHARACTER SET ascii DEFAULT NULL,
  `Info` text CHARACTER SET ascii,
  `Imagen` varchar(50) DEFAULT NULL,
  `Precio` varchar(50) DEFAULT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla logina1.rutas: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `rutas` DISABLE KEYS */;
INSERT INTO `rutas` (`Nombre`, `Info`, `Imagen`, `Precio`, `Id`) VALUES
	('Sincelejo-Sucre', 'Sincelejo es una ciudad del norte de Colombia conocida por su festival de corridas de toros Corralejas y su patrimonio musical. En el coraz?n de la ciudad, se encuentra la Catedral de San Francisco de As?s, del siglo XIX, frente al Parque Santander. La Plaza de Majagual, con un dise?o de mosaicos, le da su nombre a varias canciones populares y a la banda colombiana Los Corraleros de Majagual.', 'Sincelejo.png', '50.000', 1),
	('Monteria - Cordoba ', 'Monter?a es una ciudad del norte de Colombia. Es conocida por su cultura ganadera y los planchones (balsas techadas) que transportan a los pasajeros a trav?s del r?o Sin?. El frondoso Parque Ronda del Sin? se extiende a lo largo del r?o, con senderos y monos, iguanas y perezosos. En el ?rea norte del parque, se encuentra la torre El Mirador, con vista panor?mica del r?o.', 'Monteria.png', '80.000', 2),
	('Barranquilla - Atlantico', 'Barranquilla, es la capital del departamento Atl?ntico de Colombia y es un desbordante puerto marino, bordeado por el r?o Magdalena. La ciudad es conocida por su enorme Carnaval, que re?ne a artistas con extravagantes disfraces, carros elaborados y m?sica cumbia, En el elegante vecindario El Prado, el Museo Rom?ntico exhibe artefactos de festivales, y muchos lugares mas.', 'Barranquilla.png', '120.000', 3),
	('Cali - Valle del cauca', 'Cali es una ciudad colombiana ubicada en el departamento del Valle del Cauca, al suroeste de Bogot?. Es conocida por el baile de la salsa, del que hay muchos clubes en el suburbio de Juanchito. En el barrio m?s antiguo de Cali, la catedral neocl?sica de San Pedro alberga pinturas de la Escuela de Quito.......!!!!! .', 'Cali.png', '250.000', 4),
	('Medellin - Antioquia', 'Medell?n es la capital de la provincia monta?osa de Antioquia en Colombia. Es apodada la "Ciudad de la eterna primavera" por su clima templado y alberga la famosa Feria de las Flores anual. El moderno Metrocable conecta la ciudad con los barrios circundantes y tiene vistas del Valle de Aburr? que se encuentra debajo.', 'Medellin.png', '150.000', 5),
	('Sincelejo - Cove?a', 'Cove?as es una ciudad tur?stica del Golfo de Morrosquillo en el norte de Colombia. Es conocida por sus largas playas con aguas tranquilas y poco profundas. La playa Primera Ensenada es un centro de deportes acu?ticos. Al noreste de la ciudad, la Ci?naga de la Caimanera es una laguna costear con abundante fauna y una reserva natural con mangles', 'Covenas.jpeg', '30.000', 6),
	('corozal', 'coorozal', NULL, '15000', 8);
/*!40000 ALTER TABLE `rutas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
