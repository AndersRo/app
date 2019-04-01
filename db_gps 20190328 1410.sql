-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.35-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema gps_web
--

CREATE DATABASE IF NOT EXISTS gps_web;
USE gps_web;

--
-- Definition of table `accesoplataformacomandos`
--

DROP TABLE IF EXISTS `accesoplataformacomandos`;
CREATE TABLE `accesoplataformacomandos` (
  `IdAccesoDetalle` int(11) DEFAULT NULL,
  `IdAccesoComandos` int(11) NOT NULL AUTO_INCREMENT,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  PRIMARY KEY (`IdAccesoComandos`),
  KEY `R_40` (`IdAccesoDetalle`),
  CONSTRAINT `R_40` FOREIGN KEY (`IdAccesoDetalle`) REFERENCES `accesoplataformadetalle` (`IdAccesoDetalle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accesoplataformacomandos`
--

/*!40000 ALTER TABLE `accesoplataformacomandos` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesoplataformacomandos` ENABLE KEYS */;


--
-- Definition of table `accesoplataformadetalle`
--

DROP TABLE IF EXISTS `accesoplataformadetalle`;
CREATE TABLE `accesoplataformadetalle` (
  `IdAccesoDetalle` int(11) NOT NULL AUTO_INCREMENT,
  `IdAcceso` int(11) DEFAULT NULL,
  `IdContrato` int(11) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  PRIMARY KEY (`IdAccesoDetalle`),
  KEY `R_36` (`IdAcceso`),
  KEY `R_39` (`IdContrato`),
  CONSTRAINT `R_36` FOREIGN KEY (`IdAcceso`) REFERENCES `accesosplataforma` (`IdAcceso`),
  CONSTRAINT `R_39` FOREIGN KEY (`IdContrato`) REFERENCES `contrato` (`IdContrato`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accesoplataformadetalle`
--

/*!40000 ALTER TABLE `accesoplataformadetalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesoplataformadetalle` ENABLE KEYS */;


--
-- Definition of table `accesosplataforma`
--

DROP TABLE IF EXISTS `accesosplataforma`;
CREATE TABLE `accesosplataforma` (
  `IdAcceso` int(11) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(11) DEFAULT NULL,
  `FlgAccesoApp` char(1) DEFAULT NULL,
  `FlgAccesoWeb` char(1) DEFAULT NULL,
  `IdEmpresa` int(11) DEFAULT NULL,
  `MaxConexiones` int(11) DEFAULT NULL,
  `LoginAcceso` varchar(30) DEFAULT NULL,
  `ContrasnaPlataforma` varchar(32) DEFAULT NULL,
  `ContrasenaComados` varchar(32) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  `EstadoAcceso` char(18) DEFAULT NULL,
  PRIMARY KEY (`IdAcceso`),
  KEY `R_34` (`IdCliente`),
  KEY `R_38` (`IdEmpresa`),
  CONSTRAINT `R_34` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`),
  CONSTRAINT `R_38` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`IdEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accesosplataforma`
--

/*!40000 ALTER TABLE `accesosplataforma` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesosplataforma` ENABLE KEYS */;


--
-- Definition of table `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE `actor` (
  `IdActor` int(11) NOT NULL AUTO_INCREMENT,
  `TipoPersona` char(6) DEFAULT NULL,
  `Apellido_Paterno` varchar(80) DEFAULT NULL,
  `Apellido_Materno` varchar(80) DEFAULT NULL,
  `PrimerNombre` varchar(80) DEFAULT NULL,
  `SegundoNombre` varchar(80) DEFAULT NULL,
  `RazonSocial` varchar(100) DEFAULT NULL,
  `TipoDocumento` char(6) DEFAULT NULL,
  `CodigoIdentificacion` varchar(15) DEFAULT NULL,
  `RUC` char(11) DEFAULT NULL,
  `IdEmpresa` int(11) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Ubigeo` varchar(100) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`IdActor`),
  KEY `R_22` (`IdEmpresa`),
  CONSTRAINT `R_22` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`IdEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actor`
--

/*!40000 ALTER TABLE `actor` DISABLE KEYS */;
INSERT INTO `actor` (`IdActor`,`TipoPersona`,`Apellido_Paterno`,`Apellido_Materno`,`PrimerNombre`,`SegundoNombre`,`RazonSocial`,`TipoDocumento`,`CodigoIdentificacion`,`RUC`,`IdEmpresa`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`WksMod`,`UsrMod`,`FlgEli`,`Direccion`,`Ubigeo`,`Telefono`) VALUES 
 (1,'003005','ROMERO','QUISPE','ANDERS','NEILL','SAD E.I.R.L.','002003','70303721','10703037211',1,'2018-11-07 12:13:05','USER003','127.0.0.1','2018-12-13 11:31:54','::1','user','0','','','');
/*!40000 ALTER TABLE `actor` ENABLE KEYS */;


--
-- Definition of table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `IdActor` int(11) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`),
  KEY `R_14` (`IdActor`),
  CONSTRAINT `R_14` FOREIGN KEY (`IdActor`) REFERENCES `actor` (`IdActor`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Definition of table `comandos`
--

DROP TABLE IF EXISTS `comandos`;
CREATE TABLE `comandos` (
  `IdComandos` int(11) NOT NULL AUTO_INCREMENT,
  `CodTipoComandos` char(6) DEFAULT NULL,
  `Comandos` varchar(50) DEFAULT NULL,
  `IdModelo` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdComandos`),
  KEY `R_37` (`IdModelo`),
  CONSTRAINT `R_37` FOREIGN KEY (`IdModelo`) REFERENCES `modelo` (`IdModelo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comandos`
--

/*!40000 ALTER TABLE `comandos` DISABLE KEYS */;
/*!40000 ALTER TABLE `comandos` ENABLE KEYS */;


--
-- Definition of table `contrato`
--

DROP TABLE IF EXISTS `contrato`;
CREATE TABLE `contrato` (
  `IdContrato` int(11) NOT NULL AUTO_INCREMENT,
  `CodTipoServicio` char(6) DEFAULT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `CodTipoContrato` char(6) DEFAULT NULL,
  `IdEmpresa` int(11) DEFAULT NULL,
  `IdVehiculo` int(11) DEFAULT NULL,
  `EstadoContrato` char(6) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  `CodContrato` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdContrato`),
  KEY `R_26` (`IdCliente`),
  KEY `R_28` (`IdEmpresa`),
  KEY `R_31` (`IdVehiculo`),
  CONSTRAINT `R_26` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`),
  CONSTRAINT `R_28` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`IdEmpresa`),
  CONSTRAINT `R_31` FOREIGN KEY (`IdVehiculo`) REFERENCES `vehiculo` (`IdVehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contrato`
--

/*!40000 ALTER TABLE `contrato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contrato` ENABLE KEYS */;


--
-- Definition of table `contrato_anexo`
--

DROP TABLE IF EXISTS `contrato_anexo`;
CREATE TABLE `contrato_anexo` (
  `IdContratoAnexo` int(11) NOT NULL AUTO_INCREMENT,
  `IdContrato` int(11) DEFAULT NULL,
  `CodDocumentoAnexo` char(6) DEFAULT NULL,
  `RutaDocumento` varchar(250) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  PRIMARY KEY (`IdContratoAnexo`),
  KEY `R_30` (`IdContrato`),
  CONSTRAINT `R_30` FOREIGN KEY (`IdContrato`) REFERENCES `contrato` (`IdContrato`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contrato_anexo`
--

/*!40000 ALTER TABLE `contrato_anexo` DISABLE KEYS */;
/*!40000 ALTER TABLE `contrato_anexo` ENABLE KEYS */;


--
-- Definition of table `contrato_ordenes`
--

DROP TABLE IF EXISTS `contrato_ordenes`;
CREATE TABLE `contrato_ordenes` (
  `IdContratoOrdenes` int(11) NOT NULL AUTO_INCREMENT,
  `IdContrato` int(11) DEFAULT NULL,
  `IdOrden` int(11) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  PRIMARY KEY (`IdContratoOrdenes`),
  KEY `R_32` (`IdContrato`),
  KEY `R_33` (`IdOrden`),
  CONSTRAINT `R_32` FOREIGN KEY (`IdContrato`) REFERENCES `contrato` (`IdContrato`),
  CONSTRAINT `R_33` FOREIGN KEY (`IdOrden`) REFERENCES `ordentrabajo` (`IdOrden`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contrato_ordenes`
--

/*!40000 ALTER TABLE `contrato_ordenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `contrato_ordenes` ENABLE KEYS */;


--
-- Definition of table `dispositivos`
--

DROP TABLE IF EXISTS `dispositivos`;
CREATE TABLE `dispositivos` (
  `IdDispositivo` int(11) NOT NULL AUTO_INCREMENT,
  `Serie` varchar(100) DEFAULT NULL,
  `IMEI` varchar(100) DEFAULT NULL,
  `IdModelo` int(11) DEFAULT NULL,
  `NroSim` varchar(15) DEFAULT NULL,
  `NroIDN` varchar(50) DEFAULT NULL,
  `IdEmpresa` int(11) DEFAULT NULL,
  `fchcrea` datetime DEFAULT NULL,
  `usrcrea` varchar(30) DEFAULT NULL,
  `fchmod` datetime DEFAULT NULL,
  `usrmod` varchar(30) DEFAULT NULL,
  `flgeli` char(1) DEFAULT NULL,
  PRIMARY KEY (`IdDispositivo`),
  KEY `R_7` (`IdModelo`),
  KEY `R_16` (`IdEmpresa`),
  CONSTRAINT `R_16` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`IdEmpresa`),
  CONSTRAINT `R_7` FOREIGN KEY (`IdModelo`) REFERENCES `modelo` (`IdModelo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dispositivos`
--

/*!40000 ALTER TABLE `dispositivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `dispositivos` ENABLE KEYS */;


--
-- Definition of table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `RUC` char(11) DEFAULT NULL,
  `RazonSocial` varchar(100) DEFAULT NULL,
  `NombreComercial` varchar(100) DEFAULT NULL,
  `RutaLogo` varchar(250) DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  `Representante` varchar(80) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Ubigeo` varchar(15) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Celular` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`IdEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `empresa`
--

/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`IdEmpresa`,`RUC`,`RazonSocial`,`NombreComercial`,`RutaLogo`,`UsrCrea`,`WksCrea`,`FchCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`,`Representante`,`Direccion`,`Ubigeo`,`Telefono`,`Celular`) VALUES 
 (1,'10703037211','ARIFE EMPRESA INDIVIDUAL DE RESPONSABILIDAD LIMITADA','ARIFE E.I.R.L','','user002','127.0.0.1','2018-11-02 11:45:55','2019-03-11 10:03:28','user','127.0.0.1','0','Tovar Saldaña Ofelia Iluvina','Calle Alva Maurtua nro 256','Chincha Alta - ','933264537','056123456');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;


--
-- Definition of table `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca` (
  `IdMarca` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  PRIMARY KEY (`IdMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marca`
--

/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;


--
-- Definition of table `mecanico`
--

DROP TABLE IF EXISTS `mecanico`;
CREATE TABLE `mecanico` (
  `IdActor` int(11) DEFAULT NULL,
  `IdMecanico` int(11) NOT NULL AUTO_INCREMENT,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  PRIMARY KEY (`IdMecanico`),
  KEY `R_15` (`IdActor`),
  CONSTRAINT `R_15` FOREIGN KEY (`IdActor`) REFERENCES `actor` (`IdActor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mecanico`
--

/*!40000 ALTER TABLE `mecanico` DISABLE KEYS */;
/*!40000 ALTER TABLE `mecanico` ENABLE KEYS */;


--
-- Definition of table `modelo`
--

DROP TABLE IF EXISTS `modelo`;
CREATE TABLE `modelo` (
  `IdModelo` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  `FotoReferencial` varchar(250) DEFAULT NULL,
  `IdMarca` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdModelo`),
  KEY `R_2` (`IdMarca`),
  CONSTRAINT `R_2` FOREIGN KEY (`IdMarca`) REFERENCES `marca` (`IdMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modelo`
--

/*!40000 ALTER TABLE `modelo` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo` ENABLE KEYS */;


--
-- Definition of table `opciones`
--

DROP TABLE IF EXISTS `opciones`;
CREATE TABLE `opciones` (
  `IdOpciones` char(18) NOT NULL,
  `IdParent` char(18) DEFAULT NULL,
  `Nombre` char(18) DEFAULT NULL,
  `Ruta` char(18) DEFAULT NULL,
  `Icono` char(18) DEFAULT NULL,
  PRIMARY KEY (`IdOpciones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `opciones`
--

/*!40000 ALTER TABLE `opciones` DISABLE KEYS */;
INSERT INTO `opciones` (`IdOpciones`,`IdParent`,`Nombre`,`Ruta`,`Icono`) VALUES 
 ('1','0','Home',NULL,NULL),
 ('10','9','Registro Ordenes',NULL,NULL),
 ('11','9','Contratos','contratos',NULL),
 ('12','9','Orden Trabajo',NULL,NULL),
 ('13','9','Ordenes','ordenes',NULL),
 ('14','9','Anexo',NULL,NULL),
 ('15','1','Configuracion',NULL,NULL),
 ('16','15','Comandos','comandos',NULL),
 ('17','15','Plataforma Comando',NULL,NULL),
 ('18','15','Plataforma','plataforma',NULL),
 ('19','15','Usuarios','usuarios',NULL),
 ('2','1','Mantenimientos',NULL,NULL),
 ('20','1','Sistema',NULL,NULL),
 ('21','20','Creacion Usuario',NULL,NULL),
 ('22','20','Tablas',NULL,NULL),
 ('23','2','Marca','marcas',NULL),
 ('24','2','Modelo','modelos',NULL),
 ('3','2','Dispositivos','dispositivos',NULL),
 ('4','2','Clientes','clientes',NULL),
 ('5','2','Mecanicos','mecanicos',NULL),
 ('6','2','Taller','talleres',NULL),
 ('7','2','Vehiculo','vehiculos',NULL),
 ('8','2','Empresa','empresas',NULL),
 ('9','1','Procesos',NULL,NULL);
/*!40000 ALTER TABLE `opciones` ENABLE KEYS */;


--
-- Definition of table `ordentrabajo`
--

DROP TABLE IF EXISTS `ordentrabajo`;
CREATE TABLE `ordentrabajo` (
  `IdOrden` int(11) NOT NULL AUTO_INCREMENT,
  `IdEmpresa` int(11) DEFAULT NULL,
  `IdMecanico` int(11) DEFAULT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `IdVehiculo` int(11) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  `EstadoOrden` char(6) DEFAULT NULL,
  `Obsvacion` varchar(250) DEFAULT NULL,
  `FechaRegistro` datetime DEFAULT NULL,
  `FechaProgramada` datetime DEFAULT NULL,
  `FechaEjecutada` datetime DEFAULT NULL,
  `IdTaller` int(11) DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  PRIMARY KEY (`IdOrden`),
  KEY `R_17` (`IdEmpresa`),
  KEY `R_19` (`IdMecanico`),
  KEY `R_21` (`IdCliente`),
  KEY `R_24` (`IdVehiculo`),
  KEY `R_41` (`IdTaller`),
  CONSTRAINT `R_17` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`IdEmpresa`),
  CONSTRAINT `R_19` FOREIGN KEY (`IdMecanico`) REFERENCES `mecanico` (`IdMecanico`),
  CONSTRAINT `R_21` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`),
  CONSTRAINT `R_24` FOREIGN KEY (`IdVehiculo`) REFERENCES `vehiculo` (`IdVehiculo`),
  CONSTRAINT `R_41` FOREIGN KEY (`IdTaller`) REFERENCES `taller` (`IdTaller`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordentrabajo`
--

/*!40000 ALTER TABLE `ordentrabajo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordentrabajo` ENABLE KEYS */;


--
-- Definition of table `ordentrabajo_detalle`
--

DROP TABLE IF EXISTS `ordentrabajo_detalle`;
CREATE TABLE `ordentrabajo_detalle` (
  `IdOrdenDetalle` int(11) NOT NULL AUTO_INCREMENT,
  `IdOrden` int(11) DEFAULT NULL,
  `IdDispositivo` int(11) DEFAULT NULL,
  `CodTipoTrabajo` char(6) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  PRIMARY KEY (`IdOrdenDetalle`),
  KEY `R_8` (`IdOrden`),
  KEY `R_10` (`IdDispositivo`),
  CONSTRAINT `R_10` FOREIGN KEY (`IdDispositivo`) REFERENCES `dispositivos` (`IdDispositivo`),
  CONSTRAINT `R_8` FOREIGN KEY (`IdOrden`) REFERENCES `ordentrabajo` (`IdOrden`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordentrabajo_detalle`
--

/*!40000 ALTER TABLE `ordentrabajo_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordentrabajo_detalle` ENABLE KEYS */;


--
-- Definition of table `tablas`
--

DROP TABLE IF EXISTS `tablas`;
CREATE TABLE `tablas` (
  `IdTabla` char(3) NOT NULL,
  `Descripcion` varchar(30) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  PRIMARY KEY (`IdTabla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablas`
--

/*!40000 ALTER TABLE `tablas` DISABLE KEYS */;
INSERT INTO `tablas` (`IdTabla`,`Descripcion`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`) VALUES 
 ('001','estado de login',NULL,NULL,NULL,NULL,NULL,NULL,'0'),
 ('002','tipos de documento','2018-11-29 00:00:00','user002','localhost','2018-11-29 00:00:00','user002','localhost','0'),
 ('003','tipos de personas','2018-12-05 10:53:38','user','localhost','2018-12-05 10:53:38','user','localhost','0'),
 ('004','tipos de trabajos','2018-12-26 10:16:23','user','localhost','2018-12-26 10:16:23','user','localhost','0'),
 ('005','estado de orden','2019-01-03 17:59:29','user','localhost','2019-01-03 17:59:29','user','localhost','0'),
 ('006','tipos de servicio','2019-01-10 10:19:00','user','localhost','2019-01-10 10:19:00','user','localhost','0'),
 ('007','tipos de documentos anexos','2019-01-11 00:00:00','user','localhost','2019-01-11 00:00:00','user','localhost','0'),
 ('008','tipos de contrato','2019-03-18 17:04:00','user','localhost','2019-03-18 17:04:00','user','localhost','0');
/*!40000 ALTER TABLE `tablas` ENABLE KEYS */;


--
-- Definition of table `tablas_detalle`
--

DROP TABLE IF EXISTS `tablas_detalle`;
CREATE TABLE `tablas_detalle` (
  `IdTablaDetalle` char(6) NOT NULL,
  `IdTabla` char(3) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  KEY `R_23` (`IdTabla`),
  CONSTRAINT `R_23` FOREIGN KEY (`IdTabla`) REFERENCES `tablas` (`IdTabla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablas_detalle`
--

/*!40000 ALTER TABLE `tablas_detalle` DISABLE KEYS */;
INSERT INTO `tablas_detalle` (`IdTablaDetalle`,`IdTabla`,`Descripcion`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`) VALUES 
 ('001','001','ACTIVO',NULL,NULL,NULL,NULL,NULL,NULL,'0'),
 ('002','001','SUSPENDIDO',NULL,NULL,NULL,NULL,NULL,NULL,'0'),
 ('003','002','DNI','2018-11-29 00:00:00','user002','localhost','2018-11-29 00:00:00','user002','localhost','0'),
 ('004','002','RUC','2018-11-29 00:00:00','user002','localhost','2018-11-29 00:00:00','user002','localhost','0'),
 ('005','003','NATURAL','2018-12-05 10:57:54','user','localhost','2018-12-05 10:57:54','user','localhost','0'),
 ('006','003','JURIDICA','2018-12-05 10:58:12','user','localhost','2018-12-05 10:58:12','user','localhost','0'),
 ('007','004','INSTALACION','2018-12-26 10:21:44','user','localhost','2018-12-26 10:21:44','user','localhost','0'),
 ('008','004','RENOVACION','2018-12-26 10:22:12','user','localhost','2018-12-26 10:22:12','user','localhost','0'),
 ('009','004','CAMBIO SIM','2018-12-26 10:22:59','user','localhost','2018-12-26 10:22:59','user','localhost','0'),
 ('010','005','CREACION','2019-01-03 18:17:59','user','localhost','2019-01-03 18:17:59','user','localhost','0'),
 ('011','005','ATENDIDO','2019-01-03 18:19:23','user','localhost','2019-01-03 18:19:23','user','localhost','0'),
 ('012','005','ANULADO','2019-01-03 18:19:30','user','localhost','2019-01-03 18:19:30','user','localhost','0'),
 ('013','006','CORPORATIVO','2019-01-10 10:19:00','user','localhost','2019-01-10 10:19:00','user','localhost','0'),
 ('014','006','PLUS','2019-01-10 10:19:00','user','localhost','2019-01-10 10:19:00','user','localhost','0'),
 ('015','006','BASICO','2019-01-10 10:19:00','user','localhost','2019-01-10 10:19:00','user','localhost','0'),
 ('016','007','DNI','2018-01-11 00:00:00','user','localhost','2018-01-11 00:00:00','user','localhost','0'),
 ('017','007','TARJETA','2018-01-11 00:00:00','user','localhost','2018-01-11 00:00:00','user','localhost','0'),
 ('018','007','LICENCIA','2018-01-11 00:00:00','user','localhost','2018-01-11 00:00:00','user','localhost','0'),
 ('019','008','NUEVO','2019-03-18 00:00:00','user','localhost','2019-03-18 00:00:00','user','localhost','0'),
 ('020','008','RENOVACION','2019-03-18 00:00:00','user','localhost','2019-03-18 00:00:00','user','localhost','0');
/*!40000 ALTER TABLE `tablas_detalle` ENABLE KEYS */;


--
-- Definition of table `taller`
--

DROP TABLE IF EXISTS `taller`;
CREATE TABLE `taller` (
  `IdTaller` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(80) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  PRIMARY KEY (`IdTaller`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taller`
--

/*!40000 ALTER TABLE `taller` DISABLE KEYS */;
/*!40000 ALTER TABLE `taller` ENABLE KEYS */;

--
-- Definition of table `usuarioempresa`
--

DROP TABLE IF EXISTS `usuarioempresa`;
CREATE TABLE `usuarioempresa` (
  `IdUsuarioEmpresa` char(18) NOT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdUsuarioEmpresa`),
  KEY `R_44` (`id`),
  CONSTRAINT `R_44` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarioempresa`
--

/*!40000 ALTER TABLE `usuarioempresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarioempresa` ENABLE KEYS */;


--
-- Definition of table `usuarioopciones`
--

DROP TABLE IF EXISTS `usuarioopciones`;
CREATE TABLE `usuarioopciones` (
  `IdUsuarioOpciones` int(11) NOT NULL AUTO_INCREMENT,
  `IdOpciones` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdUsuarioOpciones`),
  KEY `R_45` (`IdOpciones`),
  KEY `FK_id` (`id`),
  CONSTRAINT `FK_id` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarioopciones`
--

/*!40000 ALTER TABLE `usuarioopciones` DISABLE KEYS */;
INSERT INTO `usuarioopciones` (`IdUsuarioOpciones`,`IdOpciones`,`id`) VALUES 
 (1,1,3),
 (2,2,3),
 (3,3,3),
 (4,4,3),
 (5,5,3),
 (6,6,3),
 (7,7,3),
 (8,8,3),
 (9,9,3),
 (10,10,3),
 (11,11,3),
 (12,12,3),
 (13,13,3),
 (14,14,3),
 (15,15,3),
 (16,16,3),
 (17,17,3),
 (18,18,3),
 (19,19,3),
 (20,20,3),
 (21,21,3),
 (22,22,3),
 (23,23,3),
 (24,24,3);
/*!40000 ALTER TABLE `usuarioopciones` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idempresa` int(11) DEFAULT NULL,
  `idactor` int(11) DEFAULT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fchcrea` datetime DEFAULT NULL,
  `fchmod` datetime DEFAULT NULL,
  `usrcrea` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usrmod` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codestado` char(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flgeli` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `EMP` (`idempresa`),
  KEY `ACT` (`idactor`),
  CONSTRAINT `ACT` FOREIGN KEY (`idactor`) REFERENCES `actor` (`IdActor`),
  CONSTRAINT `EMP` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`IdEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`,`idempresa`,`idactor`,`login`,`password`,`fchcrea`,`fchmod`,`usrcrea`,`usrmod`,`codestado`,`flgeli`) VALUES 
 (1,1,1,'klien','827ccb0eea8a706c4c34a16891f84e7b','2018-11-19 00:00:00','2019-03-08 09:08:59','user002','user','001001','0');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;


--
-- Definition of table `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
CREATE TABLE `vehiculo` (
  `IdVehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `Placa` varchar(15) DEFAULT NULL,
  `Chasis` varchar(50) DEFAULT NULL,
  `Motor` varchar(50) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `Color` varchar(100) DEFAULT NULL,
  `FchCrea` datetime DEFAULT NULL,
  `UsrCrea` varchar(30) DEFAULT NULL,
  `WksCrea` varchar(30) DEFAULT NULL,
  `FchMod` datetime DEFAULT NULL,
  `UsrMod` varchar(30) DEFAULT NULL,
  `WksMod` varchar(30) DEFAULT NULL,
  `FlgEli` char(1) DEFAULT NULL,
  `RutaReferencia` char(18) DEFAULT NULL,
  `RutaTarjeta` char(18) DEFAULT NULL,
  `IdEmpresa` int(11) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdVehiculo`),
  KEY `R_29` (`IdEmpresa`),
  CONSTRAINT `R_29` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`IdEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehiculo`
--

/*!40000 ALTER TABLE `vehiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `vehiculo` ENABLE KEYS */;


--
-- Definition of procedure `sp_get_actor`
--

DROP PROCEDURE IF EXISTS `sp_get_actor`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_actor`(
	pidactor int
)
begin
	select
     IdActor
    ,TipoPersona
    ,Apellido_Paterno
    ,Apellido_Materno
    ,PrimerNombre
    ,SegundoNombre
    ,RazonSocial
    ,TipoDocumento
    ,CodigoIdentificacion
    ,Ruc
    ,IdEmpresa
    ,Direccion
    ,Ubigeo
    ,Telefono
    from actor
    where IdActor=pidactor;
end $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_clientes`
--

DROP PROCEDURE IF EXISTS `sp_get_clientes`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_clientes`(

)
BEGIN

	select
	c.IdCliente
	,concat(a.Apellido_Paterno,' ',a.Apellido_Materno, ' ' ,a.PrimerNombre) as Cliente
	from cliente c
	inner join actor a
	on a.IdActor=c.IdActor where c.FlgEli=0;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_comandosid`
--

DROP PROCEDURE IF EXISTS `sp_get_comandosid`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_comandosid`(
	pidcomandos int(11)
)
BEGIN
	select
    IdComandos
    ,CodTipoComandos
    ,Comandos
    ,IdModelo
    from comandos
    where IdComandos=pidcomandos;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_detorden`
--

DROP PROCEDURE IF EXISTS `sp_get_detorden`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_detorden`(
   p_sidx VARCHAR(100)
  ,p_sord VARCHAR(100)
  ,p_start VARCHAR(100)
  ,p_limit VARCHAR(100)
  ,p_search VARCHAR(8000)
  ,p_empresa INT(11)
)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* from (SELECT ');
  set @vsql=concat(@vsql, ' o.IdOrden ');
  set @vsql=concat(@vsql, ' ,od.IdOrdenDetalle ');
  set @vsql=concat(@vsql, ' ,o.IdEmpresa ');
  set @vsql=concat(@vsql, ' ,e.NombreComercial ');
  set @vsql=concat(@vsql, ' ,o.IdMecanico ');
  set @vsql=concat(@vsql, ' ,concat(am.Apellido_Paterno,'' '',am.Apellido_Materno,'' '',am.PrimerNombre) as Mecanico ');
  set @vsql=concat(@vsql, ' ,o.IdCliente ');
  set @vsql=concat(@vsql, ' ,concat(ac.Apellido_Paterno,'' '',ac.Apellido_Materno,'' '',ac.PrimerNombre) as Cliente ');
  set @vsql=concat(@vsql, ' ,o.IdVehiculo ');
  set @vsql=concat(@vsql, ' ,IF(v.Chasis=null,v.Placa,v.Chasis) as Vehiculo ');
  set @vsql=concat(@vsql, ' ,o.IdTaller ');
  set @vsql=concat(@vsql, ' ,t.Descripcion as Taller ');
  set @vsql=concat(@vsql, ' ,o.EstadoOrden as CodOrd');
  set @vsql=concat(@vsql, ' ,td.Descripcion as EstadoOrden ');
  set @vsql=concat(@vsql, ' ,o.Obsvacion ');
  set @vsql=concat(@vsql, ' ,o.FechaProgramada ');
  set @vsql=concat(@vsql, ' ,o.FechaEjecutada ');
  set @vsql=concat(@vsql, ' ,o.FechaFin ');
  set @vsql=concat(@vsql, ' ,od.IdDispositivo ');
  set @vsql=concat(@vsql, ' ,od.CodTipoTrabajo ');
  set @vsql=concat(@vsql, ' ,eo.Descripcion TipoTrabajo ');
  set @vsql=concat(@vsql, ' ,d.Serie ');
  set @vsql=concat(@vsql, ' ,d.NroSim ');
  set @vsql=concat(@vsql, ' ,d.NroIDN ');
  set @vsql=concat(@vsql, ' FROM ordentrabajo o ');
  set @vsql=concat(@vsql, ' inner join ordentrabajo_detalle od ');
  set @vsql=concat(@vsql, ' on o.IdOrden=od.IdOrden ');
  set @vsql=concat(@vsql, ' inner join dispositivos d ');
  set @vsql=concat(@vsql, ' on od.IdDispositivo=d.IdDispositivo ');
  set @vsql=concat(@vsql, ' inner join empresa e ');
  set @vsql=concat(@vsql, ' on o.IdEmpresa=e.IdEmpresa ');
  set @vsql=concat(@vsql, ' inner join mecanico m ');
  set @vsql=concat(@vsql, ' on o.IdMecanico=m.IdMecanico ');
  set @vsql=concat(@vsql, ' inner join actor am ');
  set @vsql=concat(@vsql, ' on m.IdActor=am.IdActor ');
  set @vsql=concat(@vsql, ' inner join cliente c ');
  set @vsql=concat(@vsql, ' on o.IdCliente=c.IdCliente ');
  set @vsql=concat(@vsql, ' inner join actor ac ');
  set @vsql=concat(@vsql, ' on c.IdActor=ac.IdActor ');
  set @vsql=concat(@vsql, ' inner join vehiculo v ');
  set @vsql=concat(@vsql, ' on o.IdVehiculo=v.IdVehiculo ');
  set @vsql=concat(@vsql, ' inner join taller t ');
  set @vsql=concat(@vsql, ' on o.IdTaller=t.IdTaller ');
  set @vsql=concat(@vsql, ' inner join tablas_detalle td ');
  set @vsql=concat(@vsql, ' on o.EstadoOrden=concat(td.IdTabla,td.IdTablaDetalle) ');
  set @vsql=concat(@vsql, ' inner join tablas_detalle eo ');
  set @vsql=concat(@vsql, ' on od.CodTipoTrabajo=concat(eo.IdTabla,eo.IdTablaDetalle) ');
  set @vsql=concat(@vsql, ' where o.FlgEli=',@c,'0',@c,' ');
  set @vsql=concat(@vsql, ' and od.FlgEli=',@c,'0',@c,' ');
  set @vsql=concat(@vsql, ' and o.IdEmpresa=',@c,p_empresa,@c,' )datos ');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_detordenes`
--

DROP PROCEDURE IF EXISTS `sp_get_detordenes`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_detordenes`(
    pidorden int(11)
)
BEGIN

SELECT
  o.IdOrden
  ,od.IdOrdenDetalle
  ,o.IdEmpresa
  ,o.IdMecanico
  ,o.IdCliente
  ,o.IdVehiculo
  ,o.IdTaller
  ,o.EstadoOrden
  ,o.Obsvacion
  ,o.FechaProgramada
  ,o.FechaEjecutada
  ,od.IdDispositivo
  ,m.Descripcion as Modelo
  ,mr.Descripcion as Marca
  ,od.CodTipoTrabajo
  ,d.Serie
  ,d.IMEI
  ,d.NroSim
  ,d.NroIDN
  FROM ordentrabajo o inner join ordentrabajo_detalle od
  on o.IdOrden=od.IdOrden
  inner join dispositivos d
  on od.IdDispositivo=d.IdDispositivo
  inner join modelo m
  on d.IdModelo=m.IdModelo
  inner join marca mr
  on m.IdMarca = mr.IdMarca
  where o.FlgEli=0
  and od.FlgEli=0
  and o.IdOrden=pidorden
  and o.IdEmpresa=1;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_dispositivos`
--

DROP PROCEDURE IF EXISTS `sp_get_dispositivos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_dispositivos`(

)
BEGIN

  SELECT
  IdDispositivo
  ,concat(Serie,' | ', IMEI)as Descripcion
  ,IdModelo
  ,NroSim
  ,NroIDN
FROM dispositivos where FlgEli=0;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_dispositivosid`
--

DROP PROCEDURE IF EXISTS `sp_get_dispositivosid`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_dispositivosid`(
  piddispositivo int
)
BEGIN

SELECT
  IdDispositivo
  ,Serie
  ,IMEI as Imei
  ,IdModelo
  ,NroSim
  ,NroIDN
  ,IdEmpresa
FROM dispositivos where IdDispositivo=piddispositivo;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_empresaid`
--

DROP PROCEDURE IF EXISTS `sp_get_empresaid`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_empresaid`(
	pidempresa int(11)
)
BEGIN

	select
    IdEmpresa
    ,RUC as Ruc
    ,RazonSocial
    ,NombreComercial
    ,RutaLogo
    ,Representante
    ,Direccion
    ,Ubigeo
    ,Telefono
    ,Celular
    from empresa
    where IdEmpresa=pidempresa and FlgEli=0;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_empresas`
--

DROP PROCEDURE IF EXISTS `sp_get_empresas`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_empresas`(

)
BEGIN
	select
    IdEmpresa
    ,NombreComercial
    from empresa
    where FlgEli=0;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_iddetord`
--

DROP PROCEDURE IF EXISTS `sp_get_iddetord`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_iddetord`(
    pidordendetalle int(11)
)
BEGIN

  SELECT
o.IdOrden
,od.IdOrdenDetalle
,o.IdEmpresa
,e.NombreComercial
,o.IdMecanico
,concat(am.Apellido_Paterno,' ',am.Apellido_Materno,' ',am.PrimerNombre) as Mecanico
,o.IdCliente
,concat(ac.Apellido_Paterno,' ',ac.Apellido_Materno,' ',ac.PrimerNombre) as Cliente
,o.IdVehiculo
,IF(v.Chasis=null,v.Placa,v.Chasis) as Vehiculo
,o.IdTaller
,t.Descripcion as Taller
,o.EstadoOrden as CodOrd
,td.Descripcion as EstadoOrden
,o.Obsvacion
,o.FechaProgramada
,o.FechaEjecutada
,od.IdDispositivo
,od.CodTipoTrabajo
,eo.Descripcion TipoTrabajo
,d.Serie
,d.NroSim
,d.NroIDN
FROM ordentrabajo o
inner join ordentrabajo_detalle od
on o.IdOrden=od.IdOrden
inner join dispositivos d
on od.IdDispositivo=d.IdDispositivo
inner join empresa e
on o.IdEmpresa=e.IdEmpresa
inner join mecanico m
on o.IdMecanico=m.IdMecanico
inner join actor am
on m.IdActor=am.IdActor
inner join cliente c
on o.IdCliente=c.IdCliente
inner join actor ac
on c.IdActor=ac.IdActor
inner join vehiculo v
on o.IdVehiculo=v.IdVehiculo
inner join taller t
on o.IdTaller=t.IdTaller
inner join tablas_detalle td
on o.EstadoOrden=concat(td.IdTabla,td.IdTablaDetalle)
inner join tablas_detalle eo
on od.CodTipoTrabajo=concat(eo.IdTabla,eo.IdTablaDetalle)
where o.FlgEli=0
and od.FlgEli=0
and o.IdEmpresa=1
and od.IdOrdenDetalle=pidordendetalle;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_idorden`
--

DROP PROCEDURE IF EXISTS `sp_get_idorden`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_idorden`(
  pidorden int(11)
)
BEGIN

SELECT
ot.IdOrden
,ot.IdCliente
,concat(ac.PrimerNombre,' ',ac.Apellido_Paterno) as NomCli
,ot.IdMecanico
,concat(am.PrimerNombre,' ',am.Apellido_Paterno) as NomMec
,ot.IdEmpresa
,e.NombreComercial
,ot.IdTaller
,t.Descripcion as Taller
,ot.EstadoOrden
,td.Descripcion
,ot.FechaProgramada
,ot.FechaEjecutada
FROM ordentrabajo ot
inner join cliente c
on ot.IdCliente=c.IdCliente
inner join actor ac
on c.IdActor=ac.IdActor
inner join mecanico m
on ot.IdMecanico=m.IdMecanico
inner join actor am
on m.IdActor=am.IdActor
inner join empresa e
on ot.IdEmpresa=e.IdEmpresa
inner join taller t
on ot.IdTaller=t.IdTaller
inner join tablas_detalle td
on ot.EstadoOrden=concat(td.IdTabla,td.IdTablaDetalle)
where ot.IdOrden=pidorden and ot.IdEmpresa=1;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_idordenpdf`
--

DROP PROCEDURE IF EXISTS `sp_get_idordenpdf`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_idordenpdf`(
    pidorden int(11)
)
BEGIN

    SELECT
   o.IdOrden
  ,o.IdEmpresa
  ,e.NombreComercial
  ,o.IdMecanico
  ,concat(am.Apellido_Paterno,' ',am.Apellido_Materno,', ',am.PrimerNombre) as Mecanico
  ,am.CodigoIdentificacion as codmecdni
  ,o.IdCliente
  ,concat(ac.Apellido_Paterno,' ',ac.Apellido_Materno,', ',ac.PrimerNombre) as Cliente
  ,ac.CodigoIdentificacion
  ,ac.Direccion
  ,ac.Ubigeo
  ,ac.Telefono
  ,o.IdVehiculo
  ,IFNULL(v.Placa,'EN TRAMITE') as Placa
  ,v.Marca
  ,v.Modelo
  ,v.Color
  ,v.Chasis
  ,v.Motor
  ,o.Obsvacion
  ,o.FechaProgramada
  ,o.FechaEjecutada
  ,o.FechaFin
  ,o.IdTaller
  ,t.Descripcion
  ,od.IdOrdenDetalle
  ,od.CodTipoTrabajo
  ,td.Descripcion as TipoTrabajo
  ,d.Serie
  ,d.IMEI
  ,d.NroSim
  ,d.NroIDN
  ,mo.Descripcion as Modelo
FROM ordentrabajo o
inner join empresa e
on o.IdEmpresa=e.IdEmpresa
inner join mecanico m
on o.IdMecanico=m.IdMecanico
inner join actor am
on m.IdActor=am.IdActor
inner join cliente c
on o.IdCliente=c.IdCliente
inner join actor ac
on c.IdActor=ac.IdActor
inner join vehiculo v
on o.IdVehiculo=v.IdVehiculo
inner join taller t
on o.IdTaller=t.IdTaller
inner join ordentrabajo_detalle od
on o.IdOrden=od.IdOrden
inner join dispositivos d
on od.IdDispositivo=d.IdDispositivo
inner join tablas_detalle td
on od.CodTipoTrabajo=concat(td.IdTabla,td.IdTablaDetalle)
inner join modelo mo
on d.IdModelo=mo.IdModelo
where o.IdOrden=pidorden and o.IdEmpresa=1 and o.FlgEli=0;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listadispositivosall`
--

DROP PROCEDURE IF EXISTS `sp_get_listadispositivosall`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listadispositivosall`(`p_sidx` VARCHAR(100), `p_sord` VARCHAR(100), `p_start` VARCHAR(100), `p_limit` VARCHAR(100), `p_search` VARCHAR(8000), `p_empresa` INT)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

    set @vsql=concat(@vsql, ' Select datos.* From ( SELECT ');
    set @vsql=concat(@vsql, ' a.iddispositivo ');
    set @vsql=concat(@vsql, ' ,a.serie ');
    set @vsql=concat(@vsql, ' ,a.imei ');
    set @vsql=concat(@vsql, ' ,a.idmodelo ');
    set @vsql=concat(@vsql, ' ,b.descripcion modelo ');
    set @vsql=concat(@vsql, ' ,m.descripcion marca ');
    set @vsql=concat(@vsql, ' ,a.nrosim  ');
    set @vsql=concat(@vsql, ' ,a.nroIDN  ');
    set @vsql=concat(@vsql, ' ,a.idempresa   ');
    set @vsql=concat(@vsql, ' FROM dispositivos   a  ');
    set @vsql=concat(@vsql, '   inner join modelo b   ');
    set @vsql=concat(@vsql, '     on a.idmodelo=b.idmodelo  ');
    set @vsql=concat(@vsql, ' inner join marca m ');
    set @vsql=concat(@vsql, ' on b.IdMarca=m.IdMarca ');
    set @vsql=concat(@vsql, '  where a.flgeli=',@c,'0',@c,' ');
    set @vsql=concat(@vsql, '  and   a.idempresa=',@c,p_empresa,@c,') datos');
    set @vsql=concat(@vsql, ' ', p_search);
    set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
    set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

    PREPARE pexec FROM @vsql;
    EXECUTE pexec;
    DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listamarcas`
--

DROP PROCEDURE IF EXISTS `sp_get_listamarcas`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listamarcas`(
p_sidx VARCHAR(100)
,p_sord VARCHAR(100)
,p_start VARCHAR(100)
,p_limit VARCHAR(100)
,p_search VARCHAR(8000)
)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' Select datos.* From( select ');
  set @vsql=concat(@vsql, ' IdMarca ');
  set @vsql=concat(@vsql, ' ,Descripcion ');
  set @vsql=concat(@vsql, ' from Marca ');
  set @vsql=concat(@vsql, ' where FlgEli=',@c,'0',@c,' ) datos');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listamodelos`
--

DROP PROCEDURE IF EXISTS `sp_get_listamodelos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listamodelos`(
   p_sidx VARCHAR(100)
  ,p_sord VARCHAR(100)
  ,p_start VARCHAR(100)
  ,p_limit VARCHAR(100)
  ,p_search VARCHAR(8000)
)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' Select datos.* From(select ');
  set @vsql=concat(@vsql, ' mo.IdModelo ');
  set @vsql=concat(@vsql, ' ,mo.IdMarca ');
  set @vsql=concat(@vsql, ' ,mo.Descripcion as modelo');
  set @vsql=concat(@vsql, ' ,ma.Descripcion as Marca ');
  set @vsql=concat(@vsql, ' from Modelo mo');
  set @vsql=concat(@vsql, ' inner join Marca ma ');
  set @vsql=concat(@vsql, ' on mo.IdMarca=ma.IdMarca ');
  set @vsql=concat(@vsql, ' where mo.FlgEli=',@c,'0',@c,' )datos');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;


END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listaopcionesmenu`
--

DROP PROCEDURE IF EXISTS `sp_get_listaopcionesmenu`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listaopcionesmenu`(`pusuario` VARCHAR(30))
BEGIN

select
a.id as idusuario
,a.login
,c.idopciones id
,c.idparent parent
,c.nombre
,c.ruta as url
,c.icono
,ifnull(f.count,0) as count
from usuarios a
  inner join usuarioopciones b
    on a.id=b.id
  inner join opciones c
    on b.idopciones=c.idopciones
  left join (select idparent,count(*) as count from opciones x
              group by x.idparent)                f
    on b.idopciones=f.idparent
where a.login=pusuario
and   a.flgeli='0';

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listaraccesodet`
--

DROP PROCEDURE IF EXISTS `sp_get_listaraccesodet`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listaraccesodet`(
`p_sidx` VARCHAR(100),
`p_sord` VARCHAR(100),
`p_start` VARCHAR(100),
`p_limit` VARCHAR(100),
`p_search` VARCHAR(8000),
#`p_idcontrato` INT(11),
`p_empresa` INT (11)
)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* From (SELECT ');
  set @vsql=concat(@vsql, '  ad.IdAccesoDetalle ');
  set @vsql=concat(@vsql, '  ,ad.IdAcceso ');
  set @vsql=concat(@vsql, '  ,ad.IdContrato ');
  set @vsql=concat(@vsql, '  ,ap.LoginAcceso ');
  set @vsql=concat(@vsql, '  ,c.IdVehiculo ');
  set @vsql=concat(@vsql, '  ,v.Chasis ');
  set @vsql=concat(@vsql, '  ,c.CodTipoContrato ');
  set @vsql=concat(@vsql, '  ,td.Descripcion ');
  set @vsql=concat(@vsql, '  FROM accesoplataformadetalle ad ');
  set @vsql=concat(@vsql, '  inner join accesosplataforma ap ');
  set @vsql=concat(@vsql, '  on ap.IdAcceso=ad.IdAcceso ');
  set @vsql=concat(@vsql, '  inner join contrato c ');
  set @vsql=concat(@vsql, '  on ad.IdContrato=c.IdContrato ');
  set @vsql=concat(@vsql, '  inner join vehiculo v ');
  set @vsql=concat(@vsql, '  on c.IdVehiculo=v.IdVehiculo ');
  set @vsql=concat(@vsql, '  inner join tablas_detalle td ');
  set @vsql=concat(@vsql, '  on c.CodTipoContrato=concat(td.IdTabla,td.IdTablaDetalle) ');
  set @vsql=concat(@vsql, '  where c.CodTipoContrato=',@c,'008019',@c,' ');
  #set @vsql=concat(@vsql, '  and ad.IdContrato=',@c,p_idcontrato,@c,' ');
  set @vsql=concat(@vsql, '  and ap.IdEmpresa=',@c,p_empresa,@c,' )datos');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listaraccesoplataforma`
--

DROP PROCEDURE IF EXISTS `sp_get_listaraccesoplataforma`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listaraccesoplataforma`(
`p_sidx` VARCHAR(100),
`p_sord` VARCHAR(100),
`p_start` VARCHAR(100),
`p_limit` VARCHAR(100),
`p_search` VARCHAR(8000),
`p_empresa` INT (11)
)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* From (select');
  set @vsql=concat(@vsql, '  p.IdAcceso ');
  set @vsql=concat(@vsql, ' ,p.IdCliente ');
  set @vsql=concat(@vsql, ' ,concat(a.Apellido_Paterno,'' '',a.Apellido_Materno, '' '' ,a.PrimerNombre) as Cliente ');
  set @vsql=concat(@vsql, ' ,p.FlgAccesoApp ');
  set @vsql=concat(@vsql, ' ,p.FlgAccesoWeb ' );
  set @vsql=concat(@vsql, ' ,p.MaxConexiones ');
  set @vsql=concat(@vsql, ' ,p.LoginAcceso ');
  set @vsql=concat(@vsql, ' ,p.EstadoAcceso ');
  set @vsql=concat(@vsql, ' ,td.Descripcion ');
  set @vsql=concat(@vsql, ' FROM accesosplataforma p' );
  set @vsql=concat(@vsql, ' inner join cliente c' );
  set @vsql=concat(@vsql, ' on c.IdCliente=p.IdCliente' );
  set @vsql=concat(@vsql, ' inner join actor a' );
  set @vsql=concat(@vsql, ' on a.IdActor=c.IdActor' );
  set @vsql=concat(@vsql, ' inner join tablas_detalle td ');
  set @vsql=concat(@vsql, ' on p.EstadoAcceso=concat(td.IdTabla,td.IdTablaDetalle) ');
  set @vsql=concat(@vsql, ' where p.FlgEli=',@c,'0',@c,' ');
  set @vsql=concat(@vsql, ' and p.IdEmpresa=',@c,p_empresa,@c,' )datos');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listarclientes`
--

DROP PROCEDURE IF EXISTS `sp_get_listarclientes`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listarclientes`(`p_sidx` VARCHAR(100), `p_sord` VARCHAR(100), `p_start` VARCHAR(100), `p_limit` VARCHAR(100), `p_search` VARCHAR(8000), `p_empresa` INT)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

    set @vsql=concat(@vsql, ' select datos.* From (SELECT');
    set @vsql=concat(@vsql, ' c.IdCliente ');
    set @vsql=concat(@vsql, ' ,a.IdActor ');
    set @vsql=concat(@vsql, ' ,a.Apellido_Paterno ');
    set @vsql=concat(@vsql, ' ,a.Apellido_Materno ');
    set @vsql=concat(@vsql, ' ,a.PrimerNombre ');
    set @vsql=concat(@vsql, ' ,a.RazonSocial ');
    set @vsql=concat(@vsql, ' ,a.TipoDocumento ');
    set @vsql=concat(@vsql, ' ,td.Descripcion ');
    set @vsql=concat(@vsql, ' ,a.CodigoIdentificacion ');
    set @vsql=concat(@vsql, ' ,a.RUC ');
    set @vsql=concat(@vsql, ' FROM actor a ');
    set @vsql=concat(@vsql, ' inner join cliente c ');
    set @vsql=concat(@vsql, ' on a.IdActor=c.IdActor ');
    set @vsql=concat(@vsql, ' inner join tablas_detalle td ');
    set @vsql=concat(@vsql, ' on a.TipoDocumento=concat(td.IdTabla,td.IdTablaDetalle) ');
    set @vsql=concat(@vsql, ' where c.FlgEli=',@c,'0',@c,' ');
	set @vsql=concat(@vsql, ' and a.IdEmpresa=',@c,p_empresa,@c,')datos ');
    set @vsql=concat(@vsql, ' ', p_search);
    set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
    set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listarcomandos`
--

DROP PROCEDURE IF EXISTS `sp_get_listarcomandos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listarcomandos`(

)
BEGIN

 select
  co.IdComandos
  ,co.IdModelo
  ,mo.Descripcion
  ,co.CodTipoComandos
  ,co.Comandos
  from comandos co
  inner join modelo mo
  on co.IdModelo=mo.IdModelo
  where mo.FlgEli=0;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listarcontratos`
--

DROP PROCEDURE IF EXISTS `sp_get_listarcontratos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listarcontratos`(`p_sidx` VARCHAR(100), `p_sord` VARCHAR(100), `p_start` VARCHAR(100), `p_limit` VARCHAR(100), `p_search` VARCHAR(8000), `p_empresa` INT)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' Select datos.* From (select ');
  set @vsql=concat(@vsql, ' co.IdContratoOrdenes ');
  set @vsql=concat(@vsql, ' ,co.IdContrato ');
  set @vsql=concat(@vsql, ' ,co.IdOrden ');
  set @vsql=concat(@vsql, ' ,c.CodTipoServicio ');
  set @vsql=concat(@vsql, ' ,tds.Descripcion as TipServ ');
  set @vsql=concat(@vsql, ' ,c.CodTipoContrato ');
  set @vsql=concat(@vsql, ' ,tdc.Descripcion as TipoCont ');
  set @vsql=concat(@vsql, ' ,c.IdCliente ');
  set @vsql=concat(@vsql, ' ,concat(ac.PrimerNombre,'' '',ac.Apellido_Paterno) as NomCli ');
  set @vsql=concat(@vsql, ' ,c.IdEmpresa ');
  set @vsql=concat(@vsql, ' ,emp.RazonSocial ');
  set @vsql=concat(@vsql, ' ,c.IdVehiculo ');
  set @vsql=concat(@vsql, ' ,v.chasis ');
  set @vsql=concat(@vsql, ' ,c.EstadoContrato ');
  set @vsql=concat(@vsql, ' ,tde.Descripcion as StdCont ');
  set @vsql=concat(@vsql, ' ,c.FechaInicio ');
  set @vsql=concat(@vsql, ' ,c.FechaFin ');
  set @vsql=concat(@vsql, ' from contrato_ordenes co ');
  set @vsql=concat(@vsql, ' inner join contrato c ');
  set @vsql=concat(@vsql, ' on co.IdContrato=c.IdContrato ');
  set @vsql=concat(@vsql, ' inner join cliente cli ');
  set @vsql=concat(@vsql, ' on c.IdCliente=cli.IdCliente ');
  set @vsql=concat(@vsql, ' inner join actor ac ');
  set @vsql=concat(@vsql, ' on cli.IdActor=ac.IdActor ');
  set @vsql=concat(@vsql, ' inner join empresa emp ');
  set @vsql=concat(@vsql, ' on c.IdEmpresa=emp.IdEmpresa ');
  set @vsql=concat(@vsql, ' inner join vehiculo v ');
  set @vsql=concat(@vsql, ' on c.IdVehiculo=v.IdVehiculo ');
  set @vsql=concat(@vsql, ' inner join tablas_detalle tds ');
  set @vsql=concat(@vsql, ' on c.CodTipoServicio=concat(tds.IdTabla,tds.IdTablaDetalle) ');
  set @vsql=concat(@vsql, ' inner join tablas_detalle tdc ');
  set @vsql=concat(@vsql, ' on c.CodTipoContrato=concat(tdc.IdTabla,tdc.IdTablaDetalle) ');
  set @vsql=concat(@vsql, ' inner join tablas_detalle tde ');
  set @vsql=concat(@vsql, ' on c.EstadoContrato=concat(tde.IdTabla,tde.IdTablaDetalle) ');
  set @vsql=concat(@vsql, ' where c.FlgEli=',@c,'0',@c,' ');
  set @vsql=concat(@vsql, ' and c.IdEmpresa=',@c,p_empresa,@c,' )datos');
  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);
  
  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;


END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listarempresa`
--

DROP PROCEDURE IF EXISTS `sp_get_listarempresa`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listarempresa`(`p_sidx` VARCHAR(100), `p_sord` VARCHAR(100), `p_start` VARCHAR(100), `p_limit` VARCHAR(100), `p_search` VARCHAR(8000))
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* From (select');
  set @vsql=concat(@vsql, ' IdEmpresa ');
  set @vsql=concat(@vsql, ' ,RUC ');
  set @vsql=concat(@vsql, ' ,RazonSocial ');
  set @vsql=concat(@vsql, ' ,NombreComercial ');
  set @vsql=concat(@vsql, ' ,Representante ');
  set @vsql=concat(@vsql, ' from Empresa ');
  set @vsql=concat(@vsql, ' where FlgEli=',@c,'0',@c,' )datos');
  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listarmecanicos`
--

DROP PROCEDURE IF EXISTS `sp_get_listarmecanicos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listarmecanicos`(`p_sidx` VARCHAR(100), `p_sord` VARCHAR(100), `p_start` VARCHAR(100), `p_limit` VARCHAR(100), `p_search` VARCHAR(8000), `p_empresa` INT)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

    set @vsql=concat(@vsql, ' select datos.* From (SELECT');
    set @vsql=concat(@vsql, ' m.IdMecanico ');
    set @vsql=concat(@vsql, ' ,a.IdActor ');
    set @vsql=concat(@vsql, ' ,a.Apellido_Paterno ');
    set @vsql=concat(@vsql, ' ,a.Apellido_Materno ');
    set @vsql=concat(@vsql, ' ,a.PrimerNombre ');
    set @vsql=concat(@vsql, ' ,a.RazonSocial ');
    set @vsql=concat(@vsql, ' ,a.TipoDocumento ');
    set @vsql=concat(@vsql, ' ,td.Descripcion ');
    set @vsql=concat(@vsql, ' ,a.CodigoIdentificacion ');
    set @vsql=concat(@vsql, ' ,a.RUC ');
    set @vsql=concat(@vsql, ' FROM actor a ');
    set @vsql=concat(@vsql, ' inner join mecanico m ');
    set @vsql=concat(@vsql, ' on a.IdActor=m.IdActor ');
    set @vsql=concat(@vsql, ' inner join tablas_detalle td ');
    set @vsql=concat(@vsql, ' on a.TipoDocumento=concat(td.IdTabla,td.IdTablaDetalle) ');
    set @vsql=concat(@vsql, ' where m.FlgEli=',@c,'0',@c,' ');
	  set @vsql=concat(@vsql, ' and a.IdEmpresa=',@c,p_empresa,@c,')datos ');
    set @vsql=concat(@vsql, ' ', p_search);
    set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
    set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listaropciones`
--

DROP PROCEDURE IF EXISTS `sp_get_listaropciones`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listaropciones`(

   p_sidx VARCHAR(100)
  ,p_sord VARCHAR(100)
  ,p_start VARCHAR(100)
  ,p_limit VARCHAR(100)
  ,p_search VARCHAR(8000)

)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* From (select ');
  set @vsql=concat(@vsql, ' o.IdOpciones ');
  set @vsql=concat(@vsql, ' ,o.Nombre ');
  set @vsql=concat(@vsql, ' from opciones o )datos');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listarordenes`
--

DROP PROCEDURE IF EXISTS `sp_get_listarordenes`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listarordenes`(
  `p_sidx` VARCHAR(100),
  `p_sord` VARCHAR(100),
  `p_start` VARCHAR(100),
  `p_limit` VARCHAR(100),
  `p_search` VARCHAR(8000),
  `p_empresa` INT(11)
)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* from ( select ');
  set @vsql=concat(@vsql, ' ot.IdOrden ');
  set @vsql=concat(@vsql, ' ,ot.IdCliente ');
  set @vsql=concat(@vsql, ' ,concat(ac.PrimerNombre,'' '',ac.Apellido_Paterno) as NomCli ');
  set @vsql=concat(@vsql, ' ,ot.IdMecanico ');
  set @vsql=concat(@vsql, ' ,concat(am.PrimerNombre,'' '',am.Apellido_Paterno) as NomMec ');
  set @vsql=concat(@vsql, ' ,ot.IdEmpresa ');
  set @vsql=concat(@vsql, ' ,e.NombreComercial ');
  set @vsql=concat(@vsql, ' ,ot.IdTaller ');
  set @vsql=concat(@vsql, ' ,t.Descripcion as Taller ');
  set @vsql=concat(@vsql, ' ,ot.EstadoOrden ');
  set @vsql=concat(@vsql, ' ,td.Descripcion ');
  set @vsql=concat(@vsql, ' ,ot.FechaProgramada ');
  set @vsql=concat(@vsql, ' ,ot.FechaEjecutada ');
  set @vsql=concat(@vsql, ' ,ot.FechaFin ');
  set @vsql=concat(@vsql, ' FROM ordentrabajo ot ');
  set @vsql=concat(@vsql, ' inner join cliente c ');
  set @vsql=concat(@vsql, ' on ot.IdCliente=c.IdCliente ');
  set @vsql=concat(@vsql, ' inner join actor ac ');
  set @vsql=concat(@vsql, ' on c.IdActor=ac.IdActor ');
  set @vsql=concat(@vsql, ' inner join mecanico m ');
  set @vsql=concat(@vsql, ' on ot.IdMecanico=m.IdMecanico ');
  set @vsql=concat(@vsql, ' inner join actor am ');
  set @vsql=concat(@vsql, ' on m.IdActor=am.IdActor ');
  set @vsql=concat(@vsql, ' inner join empresa e ');
  set @vsql=concat(@vsql, ' on ot.IdEmpresa=e.IdEmpresa ');
  set @vsql=concat(@vsql, ' inner join taller t ');
  set @vsql=concat(@vsql, ' on ot.IdTaller=t.IdTaller ');
  set @vsql=concat(@vsql, ' inner join tablas_detalle td ');
  set @vsql=concat(@vsql, ' on ot.EstadoOrden=concat(td.IdTabla,td.IdTablaDetalle) ');
  set @vsql=concat(@vsql, ' where ot.FlgEli=',@c,'0',@c,' ');
  set @vsql=concat(@vsql, ' and ot.IdEmpresa=',@c,p_empresa,@c,' )datos');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listartalleres`
--

DROP PROCEDURE IF EXISTS `sp_get_listartalleres`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listartalleres`(`p_sidx` VARCHAR(100), `p_sord` VARCHAR(100), `p_start` VARCHAR(100), `p_limit` VARCHAR(100), `p_search` VARCHAR(8000))
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* from (SELECT ');
  set @vsql=concat(@vsql, ' IdTaller ');
  set @vsql=concat(@vsql, ' ,Descripcion ');
  set @vsql=concat(@vsql, ' FROM taller ');
  set @vsql=concat(@vsql, ' where flgEli=',@c,'0',@c,' )datos');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listarusuarios`
--

DROP PROCEDURE IF EXISTS `sp_get_listarusuarios`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listarusuarios`(`p_sidx` VARCHAR(100), `p_sord` VARCHAR(100), `p_start` VARCHAR(100), `p_limit` VARCHAR(100), `p_search` VARCHAR(8000), `p_empresa` INT)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* from (SELECT ');
  set @vsql=concat(@vsql, ' u.id ');
  set @vsql=concat(@vsql, ' ,u.idactor ');
  set @vsql=concat(@vsql, ' ,u.login ');
  set @vsql=concat(@vsql, ' ,u.codestado ');
  set @vsql=concat(@vsql, ' ,td.Descripcion ');
  set @vsql=concat(@vsql, ' ,a.Apellido_Paterno ');
  set @vsql=concat(@vsql, ' ,a.Apellido_Materno ');
  set @vsql=concat(@vsql, ' ,a.PrimerNombre ');
  set @vsql=concat(@vsql, ' ,a.SegundoNombre ');
  set @vsql=concat(@vsql, ' ,a.TipoDocumento ');
  set @vsql=concat(@vsql, ' ,a.RazonSocial ');
  set @vsql=concat(@vsql, ' ,a.CodigoIdentificacion ');
  set @vsql=concat(@vsql, ' ,a.Direccion ');
  set @vsql=concat(@vsql, ' ,a.Ubigeo ');
  set @vsql=concat(@vsql, ' ,a.Telefono ');
  set @vsql=concat(@vsql, ' FROM usuarios u ');
  set @vsql=concat(@vsql, ' inner join actor a ');
  set @vsql=concat(@vsql, ' on u.idactor=a.idactor ');
  set @vsql=concat(@vsql, ' inner join tablas_detalle td ');
  set @vsql=concat(@vsql, ' on u.codestado=concat(td.IdTabla,td.IdTablaDetalle) ');
  set @vsql=concat(@vsql, ' where u.FlgEli=',@c,'0',@c,' ');
  set @vsql=concat(@vsql, ' and u.IdEmpresa=',@c,p_empresa,@c,' )datos ');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_listarvehiculos`
--

DROP PROCEDURE IF EXISTS `sp_get_listarvehiculos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_listarvehiculos`(`p_sidx` VARCHAR(100), `p_sord` VARCHAR(100), `p_start` VARCHAR(100), `p_limit` VARCHAR(100), `p_search` VARCHAR(8000), `p_empresa` INT)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* From (SELECT');
  set @vsql=concat(@vsql, ' IdVehiculo ');
  set @vsql=concat(@vsql, ' ,Placa ');
  set @vsql=concat(@vsql, ' ,Chasis ');
  set @vsql=concat(@vsql, ' ,Motor ');
  set @vsql=concat(@vsql, ' ,Modelo ');
  set @vsql=concat(@vsql, ' ,Color ');
  set @vsql=concat(@vsql, ' ,Marca ');
  set @vsql=concat(@vsql, ' FROM vehiculo ');
  set @vsql=concat(@vsql, ' where FlgEli=',@c,'0',@c,' ');
  set @vsql=concat(@vsql, ' and IdEmpresa=',@c,p_empresa,@c,' )datos ');
  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_marcas`
--

DROP PROCEDURE IF EXISTS `sp_get_marcas`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_marcas`(

)
BEGIN
	select
	IdMarca
	,Descripcion
	from Marca
	where FlgEli=0;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_marcasid`
--

DROP PROCEDURE IF EXISTS `sp_get_marcasid`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_marcasid`(
	pidmarca int
)
BEGIN
	select IdMarca, Descripcion from marca where IdMarca=pidMarca;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_mecanicos`
--

DROP PROCEDURE IF EXISTS `sp_get_mecanicos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_mecanicos`(

)
BEGIN

select
	m.IdMecanico
	,concat(a.Apellido_Paterno,' ',a.Apellido_Materno, ' ' ,a.PrimerNombre) as Mecanico
	from mecanico m
	inner join actor a
	on a.IdActor=m.IdActor where m.FlgEli=0;
    
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_modelos`
--

DROP PROCEDURE IF EXISTS `sp_get_modelos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_modelos`(

)
BEGIN
	select
    IdModelo
    ,Descripcion
	from Modelo 
    where FlgEli=0;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_modelosid`
--

DROP PROCEDURE IF EXISTS `sp_get_modelosid`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_modelosid`(
	pidmodelo int
)
BEGIN
	select IdModelo
    ,Descripcion
    ,IdMarca
    from modelo where IdModelo=pidmodelo;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_numorden`
--

DROP PROCEDURE IF EXISTS `sp_get_numorden`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_numorden`(

)
BEGIN

  SET @idorden = (SELECT IdOrden FROM OrdenTrabajo_detalle order by IdOrden desc limit 1);
  if(@idorden < 10) then
  SET @idorden= CONCAT('P00',IdOrden);
      elseif (@idorden < 100) then
        SET @idorden = CONCAT('P0' ,IdOrden);
        elseif (@idorden < 1000) then
          SET @idorden = CONCAT('P', IdOrden);
  end if;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_obtuser`
--

DROP PROCEDURE IF EXISTS `sp_get_obtuser`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_obtuser`(
    pidcontrato int(11)
)
BEGIN

SELECT
 ap.IdAcceso
,c.IdCliente
,concat(a.Apellido_Paterno,' ',a.Apellido_Materno,' ',a.PrimerNombre) as cliente
,a.CodigoIdentificacion
,ap.LoginAcceso
FROM contrato c
inner join cliente cl
on c.IdCliente=cl.IdCliente
inner join actor a
on cl.IdActor = a.IdActor
inner join accesosplataforma ap
on c.IdCliente=ap.IdCliente where c.IdContrato=pidcontrato and c.IdEmpresa=1 and c.FlgEli=0;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_opcionesuser`
--

DROP PROCEDURE IF EXISTS `sp_get_opcionesuser`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_opcionesuser`(
 p_sidx VARCHAR(100)
,p_sord VARCHAR(100)
,p_start VARCHAR(100)
,p_limit VARCHAR(100)
,p_search VARCHAR(8000)
,p_idusuario INT (11)
)
BEGIN

  Set @c="'";
  Set @e=CHAR(13);
  Set @vsql='';

  set @vsql=concat(@vsql, ' select datos.* From (select ');
  set @vsql=concat(@vsql, ' u.IdOpciones ');
  set @vsql=concat(@vsql, ' ,o.Nombre ');
  set @vsql=concat(@vsql, ' ,us.idactor ');
  set @vsql=concat(@vsql, ' ,us.login ');
  set @vsql=concat(@vsql, ' ,concat(a.Apellido_Paterno,'' '',a.Apellido_Materno,'', '',a.PrimerNombre) as usuario ');
  set @vsql=concat(@vsql, ' from usuarioopciones u ');
  set @vsql=concat(@vsql, ' inner join opciones o ');
  set @vsql=concat(@vsql, ' on u.IdOpciones=o.IdOpciones ');
  set @vsql=concat(@vsql, ' inner join usuarios us ');
  set @vsql=concat(@vsql, ' on u.id=us.id ');
  set @vsql=concat(@vsql, ' inner join actor a ');
  set @vsql=concat(@vsql, ' on us.idactor=a.idactor ');
  set @vsql=concat(@vsql, ' where u.id=',@c,p_idusuario,@c,' )datos');

  set @vsql=concat(@vsql, ' ', p_search);
  set @vsql=concat(@vsql,  ' Order By ',p_sidx,' ',p_sord);
  set @vsql=concat(@vsql,  ' LIMIT ',p_start,',',p_limit);

  PREPARE pexec FROM @vsql;
  EXECUTE pexec;
  DEALLOCATE PREPARE pexec;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_ordcli`
--

DROP PROCEDURE IF EXISTS `sp_get_ordcli`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_ordcli`(
  pidcliente int
)
BEGIN

  select
  ot.IdOrden
  ,ot.IdCliente
  ,ot.IdVehiculo
  ,v.Chasis
  from ordentrabajo ot
    inner join vehiculo v
    on ot.IdVehiculo=v.IdVehiculo
  where IdCliente=pidcliente;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_registraempresas`
--

DROP PROCEDURE IF EXISTS `sp_get_registraempresas`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_registraempresas`(
    popcion char(1)
    ,pidempresa int(11)
    ,pruc varchar(11)
    ,prazonsocial varchar(100)
    ,pnombrecomercial varchar(100)
    ,prutalogo varchar(250)
    ,pusuario varchar(30)
    ,pwks varchar(30)
    ,prepresentante varchar(80)
    ,pdireccion varchar(100)
    ,pubigeo varchar(15)
    ,ptelefono varchar(15)
    ,pcelular varchar(15)

)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';


if (popcion='N') then

  insert into empresa
  (RUC
,RazonSocial
,NombreComercial
,RutaLogo
,UsrCrea
,WksCrea
,FchCrea
,FchMod
,UsrMod
,WksMod
,FlgEli
,Representante
,Direccion
,Ubigeo
,Telefono
,Celular)
values (pruc,prazonsocial,pnombrecomercial,prutalogo,pusuario,
pwks,Now(),now(),pusuario,pwks,0,prepresentante,pdireccion,pubigeo,ptelefono,pcelular);

    set pidempresa=LAST_INSERT_ID();
    if (pidempresa=0) then
        set verror=1;
        set vmensaje='Hubo problemas al insertar!';
        select sqlcode;
    end if;

elseif(popcion='U') then

  update empresa set
  RUC= pruc
,RazonSocial = prazonsocial
,NombreComercial  = pnombrecomercial
,RutaLogo = prutalogo
,FchMod = now()
,UsrMod = pusuario
,Representante = prepresentante
,Direccion = pdireccion
,Ubigeo = pubigeo
,Telefono = ptelefono
,Celular = pcelular

where IdEmpresa=pidempresa;

elseif(popcion='D') then
  update empresa set
   FlgEli = '1'
  ,UsrMod = pusuario
  ,FchMod = now()
  where IdEmpresa=pidempresa;
  
else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
    
end if;

select verror as Code,vmensaje as Message, pidempresa as Id ;

 commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_registraorden`
--

DROP PROCEDURE IF EXISTS `sp_get_registraorden`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_registraorden`(
    popcion char(1)
  ,pidorden int(11)
  ,pidempresa int(11)
  ,pidmecanico int(11)
  ,pidcliente int(11)
  ,pidvehiculo int(11)
  ,pusuario varchar(30)
  ,pwks varchar(30)
  ,pestado char(6)
  ,pobservacion varchar(250)
  ,pfchprog DATETIME
  ,pfchejec DATETIME
  ,pidtaller int(11)
  ,pcaddetalle varchar(8000)
)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

Declare  pos int;
Declare  len int;
Declare cadena Varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';

  #Creando Tablas Temporales

  drop table if exists tbltmp_odet_0001;
  Create table tbltmp_odet_0001(
                                                codtipotrabajo      char(6)
                                               ,iddispositivo       int(11)
                                               ,nrosim              varchar(15)
                                               ,nroidn              varchar(50)
                                             );

  #Llegando Primera Tabla
   Set cadena=pcaddetalle;
   Set @codtipotrabajo='';set @iddispositivo='';set @nrosim='';set @nroidn='';
   Set len=length(cadena);
   WHILE len>0 DO
		 set pos=instr(cadena,'|');
		 set @codtipotrabajo=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set @iddispositivo=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set @nrosim=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set @nroidn=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set len=length(cadena);
		   insert into tbltmp_odet_0001 values(@codtipotrabajo,@iddispositivo,@nrosim,@nroidn);
   END WHILE;

   #Ejecutando insert

   if (popcion='N') then

  insert into ordentrabajo
  (IdEmpresa
,IdMecanico
,IdCliente
,IdVehiculo
,FchCrea
,UsrCrea
,WksCrea
,FchMod
,UsrMod
,WksMod
,FlgEli
,EstadoOrden
,Obsvacion
,FechaRegistro
,FechaProgramada
,FechaEjecutada
,IdTaller
)
values (
pidempresa
,pidmecanico
,pidcliente
,pidvehiculo
,now()
,pusuario
,pwks
,now()
,pusuario
,pwks
,0
,pestado
,pobservacion
,now()
,pfchprog
,pfchejec
,pidtaller
);

set pidorden=LAST_INSERT_ID();
if (pidorden=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

 insert into ordentrabajo_detalle
  (IdOrden
,IdDispositivo
,CodTipoTrabajo
,FchCrea
,UsrCrea
,WksCrea
,FchMod
,UsrMod
,WksMod
,FlgEli
,FechaInicio
,FechaFin
)
select
pidorden
,td.iddispositivo
,td.codtipotrabajo
,now()
,pusuario
,pwks
,now()
,pusuario
,pwks
,0
,now()
,(select (DATE_ADD(now(), INTERVAL 1 YEAR)))
from (select distinct
   d.iddispositivo
   ,d.codtipotrabajo
   from tbltmp_odet_0001 d
) td;

set @newcodigo=ifnull((select max(IdOrdenDetalle) from ordentrabajo_detalle),0);

set @newcodigo=LAST_INSERT_ID();
if (@newcodigo=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar en el detalle!';
    select sqlcode;
end if;

#update dispositivos set
#NroSim = (select nrosim from tbltmp_odet_0001)
#,NroIDN = (select nroidn from tbltmp_odet_0001)
#,fchmod = now()
#,usrmod = pusuario
#where IdDispositivo = (select iddispositivo from tbltmp_odet_0001);

elseif(popcion='U') then

  update modelo set
 Descripcion = pdescripcion
,IdMarca = pidmarca
,FotoReferencial  = pfotoref
,FchMod = now()
,UsrMod = pusuario
,WksMod = pwks
where IdModelo=pidmodelo;

elseif(popcion='D') then
  update modelo set
   FlgEli = '1'
  ,FchMod = now()
  ,UsrMod = pusuario
  ,WksMod = pwks
  where IdModelo=pidmodelo;
else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidorden as Id ;

commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_tablas`
--

DROP PROCEDURE IF EXISTS `sp_get_tablas`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_tablas`(
	in _cod char(6)
)
BEGIN
  select
  concat(td.IdTabla,td.IdTablaDetalle) as codigo
  ,td.Descripcion
  from tablas t
  inner join tablas_detalle td
  on t.IdTabla=td.IdTabla
  where td.FlgEli=0 and t.IdTabla=_cod;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_taller`
--

DROP PROCEDURE IF EXISTS `sp_get_taller`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_taller`(

)
BEGIN
	select IdTaller, Descripcion from taller;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_tallerid`
--

DROP PROCEDURE IF EXISTS `sp_get_tallerid`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_tallerid`(
	pidtaller int
)
BEGIN
	select IdTaller, Descripcion from taller where IdTaller= pidtaller;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_validarcredenciales`
--

DROP PROCEDURE IF EXISTS `sp_get_validarcredenciales`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_validarcredenciales`(
plogin VARCHAR(30)
,pclave VARCHAR(8000)
,pidempresa INT
)
BEGIN



declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;


  set verror=0;
  set vmensaje='';

set @c_empresa=ifnull((select count(*) from empresa where IdEmpresa=pidempresa
               and FlgEli='0'),0);

if (@c_empresa=0) then
  set verror=1;
  set vmensaje='La empresa seleccionada no existe';
  select sqlcode;
end if;


set @c_usuario=ifnull((select
count(*)
from usuarios a
  inner join empresa b
    on a.idempresa=b.idempresa
where a.login=plogin
and   a.flgeli='0'
and   b.flgeli='0'),0);

if (@c_usuario=0) then
  set verror=1;
  set vmensaje='El Usuario ingresado no existe';
  select sqlcode;
end if;

set @c_usuario=ifnull((select
count(*)
from usuarios a
  inner join empresa b
    on a.idempresa=b.idempresa
where a.login=plogin
and   b.IdEmpresa=pidempresa
and   a.flgeli='0'
and   b.flgeli='0'),0);

if (@c_usuario=0) then
  set verror=1;
  set vmensaje='El usuario no pertenece a esta empresa';
  select sqlcode;
end if;




set @c_estusuario=ifnull((select
count(*)
from usuarios a
  inner join empresa b
    on a.idempresa=b.idempresa
where a.login=plogin
and   a.flgeli='0'
and   a.codestado='001001'
and   b.flgeli='0'),0);


if (@c_estusuario=0) then
  set @get_estado=ifnull((
                    select
                    b.Descripcion
                    from usuarios a
                      inner join tablas_detalle b
                        on a.codestado=concat(b.IdTabla,b.IdTablaDetalle)
                        where a.login=plogin
                  ),0);
  set verror=1;
  set vmensaje=concat('El Usuario se encuentra ',@get_estado);
  select sqlcode;
end if;


set @c_espassword=ifnull((select
count(*)
from usuarios a
  inner join empresa b
    on a.idempresa=b.idempresa
where a.login=plogin
and   a.flgeli='0'
and   a.codestado='001001'
and   a.password=md5(pclave)
and   b.flgeli='0'),0);

if (@c_espassword=0) then
  set verror=1;
  set vmensaje='El Password ingresado es incorrecto!';
  select sqlcode;
end if;

select verror as Code,vmensaje as Message;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_vehiculos`
--

DROP PROCEDURE IF EXISTS `sp_get_vehiculos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_vehiculos`()
BEGIN

select
IdVehiculo
,concat(Placa, ' | ' ,Modelo, ' | ' ,Color) as vehiculo
from vehiculo;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_get_vehiculosid`
--

DROP PROCEDURE IF EXISTS `sp_get_vehiculosid`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_vehiculosid`(
 pidvehiculo int
)
BEGIN

	select 
    IdVehiculo
	  ,Placa
    ,Chasis
    ,Motor
	  ,Modelo
    ,Color
    ,RutaReferencia
    ,RutaTarjeta
    ,Marca
    from vehiculo where IdVehiculo=pidvehiculo;
    
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_cliente`
--

DROP PROCEDURE IF EXISTS `sp_set_cliente`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_cliente`(
    _UsrCrea varchar(30)
    ,_wksCrea varchar(30)
    ,_WksMod varchar(30)
    ,_UsrMod varchar(30)
    ,_FlgEli char(1)
)
BEGIN

insert into cliente (
	IdActor
    ,FchCrea
    ,UsrCrea
    ,WksCrea
    ,FchMod
    ,WksMod
    ,UsrMod
    ,FlgEli
)
values(
	(select IdActor from actor order by IdActor desc limit 1)
    ,NOW()
    ,_UsrCrea
    ,_WksCrea
    ,NOW()
    ,_WksMod
    ,_UsrMod
    ,_FlgEli
);

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_contrato`
--

DROP PROCEDURE IF EXISTS `sp_set_contrato`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_contrato`(
       popcion char(1)
      ,pidcontrato int(11)
      ,pcodtiposervis char(6)
      ,pidcliente int(11)
      ,pcodtipocontrato char(6)
      ,pidempresa int(11)
      ,pidvehiculo int(11)
      ,pestadocontrato char(6)

      ,pidcontratoorden int(11)
      ,pidorden int(11)

      ,pusuario varchar(30)
      ,pwks varchar(30)

      ,pidcontratoanexo int(11)
      ,pcadanex varchar(8000)

)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

Declare  pos int;
Declare  len int;
Declare cadena Varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';

  #Creando Tablas Temporales

  drop table if exists tbltmp_contax_0001;
  Create table tbltmp_contax_0001(
                                                coddoc        char(6)
                                               ,rutadoc       varchar(250)
                                             );

  #Llegando Primera Tabla
   Set cadena=pcadanex;
   Set @coddoc='';set @rutadoc='';
   Set len=length(cadena);
   WHILE len>0 DO
		 set pos=instr(cadena,'|');
		 set @coddoc=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set @rutadoc=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set len=length(cadena);
		   insert into tbltmp_contax_0001 values(@coddoc,@rutadoc);
   END WHILE;

    #Ejecutando insert
    set @newcodigo=ifnull((select max(IdContrato) from contrato),0)+1;

   if (popcion='N') then

  insert into contrato
  (CodTipoServicio
,FechaInicio
,FechaFin
,IdCliente
,CodTipoContrato
,IdEmpresa
,IdVehiculo
,EstadoContrato
,FchCrea
,UsrCrea
,WksCrea
,FchMod
,UsrMod
,WksMod
,FlgEli
,CodContrato
)
values (
pcodtiposervis
,now()
,(select (DATE_ADD(now(), INTERVAL 1 YEAR)))
,pidcliente
,pcodtipocontrato
,pidempresa
,pidvehiculo
,pestadocontrato
,now()
,pusuario
,pwks
,now()
,pusuario
,pwks
,0
,(concat(CURDATE()+0,'-',@newcodigo))
);

set pidcontrato=LAST_INSERT_ID();
if (pidcontrato=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

 insert into contrato_ordenes
  (IdContrato
,IdOrden
,FchCrea
,UsrCrea
,WksCrea
,FchMod
,WksMod
,UsrMod
,FlgEli
)
values(
pidcontrato
,pidorden
,now()
,pusuario
,pwks
,now()
,pwks
,pusuario
,0
);

set @newcodigo=ifnull((select max(IdContratoOrdenes) from contrato_ordenes),0);

set @newcodigo=LAST_INSERT_ID();
if (@newcodigo=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar en el detalle!';
    select sqlcode;
end if;

insert into contrato_anexo
(
   IdContrato
   ,CodDocumentoAnexo
   ,RutaDocumento
   ,FchCrea
   ,UsrCrea
   ,WksCrea
   ,FchMod
   ,UsrMod
   ,WksMod
   ,FlgEli
)
select
  pidcontrato
  ,cx.coddoc
  ,cx.rutadoc
  ,now()
  ,pusuario
  ,pwks
  ,now()
  ,pusuario
  ,pwks
  ,0
   from (select distinct
   d.coddoc
   ,d.rutadoc
   from tbltmp_contax_0001 d
) cx;


set @newcodigo1=ifnull((select max(IdContratoAnexo) from contrato_anexo),0);

set @newcodigo1=LAST_INSERT_ID();
if (@newcodigo1=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar en el anexo!';
    select sqlcode;
end if;

#where IdDispositivo = (select distinct d.iddispositivo from tbltmp_odet_0001 d);

elseif(popcion='U') then

  update modelo set
 Descripcion = pdescripcion
,IdMarca = pidmarca
,FotoReferencial  = pfotoref
,FchMod = now()
,UsrMod = pusuario
,WksMod = pwks
where IdModelo=pidmodelo;

elseif(popcion='D') then
  update contrato set
   FlgEli = 1
  ,EstadoContrato = pestadocontrato
  ,FchMod = now()
  ,UsrMod = pusuario
  ,WksMod = pwks
  where IdContrato=pidcontrato;

  update contrato_ordenes co inner join contrato c
  on co.IdContrato = c.IdContrato
  set
   co.FlgEli = 1
  ,co.FchMod = now()
  ,co.UsrMod = pusuario
  ,co.WksMod = pwks
  where c.IdContrato=pidcontrato;

else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidcontrato as Id ;

commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_dispositivos`
--

DROP PROCEDURE IF EXISTS `sp_set_dispositivos`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_dispositivos`(
	popcion char(1)
    ,piddispositivo int
    ,pserie varchar(100)
    ,pimei varchar(100)
    ,pidmodelo int
    ,pnrosim varchar(15)
    ,pnroidn varchar(50)
    ,pidempresa int
    ,pusuario varchar(30)
)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';


if (popcion='N') then

  insert into dispositivos
  (Serie
,IMEI
,IdModelo
,NroSim
,NroIDN
,IdEmpresa
,fchcrea
,usrcrea
,fchmod
,usrmod
,flgeli)
values (pserie,pimei,pidmodelo,pnrosim,pnroidn
,pidempresa,Now(),pusuario,now(),pusuario,0);

	set piddispositivo=LAST_INSERT_ID();
	if (piddispositivo=0) then
		set verror=1;
		set vmensaje='Hubo problemas al insertar!';
		select sqlcode;
	end if;

elseif(popcion='U') then

  update dispositivos set
 Serie = pserie
,IMEI = pimei
,IdModelo  = pidmodelo
,nrosim = pnrosim
,nroidn = pnroidn
,IdEmpresa = pidempresa
,fchmod = now()
,usrmod = pusuario
where IdDispositivo=piddispositivo
and   IdEmpresa=pidempresa;

elseif(popcion='D') then
  update dispositivos set
   flgeli = '1'
  ,usrmod = pusuario
  ,fchmod = now()
  where IdDispositivo=piddispositivo
  and   IdEmpresa=pidempresa;
else
	set verror=1;
	set vmensaje='Opción inválida!';
	select sqlcode;
end if;

select verror as Code,vmensaje as Message, piddispositivo as Id ;

commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_registraactor`
--

DROP PROCEDURE IF EXISTS `sp_set_registraactor`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_registraactor`(
     popcion char(1)
    ,ptipoact char(1)
	  ,pidactor int
	  ,ptipopersona char(6)
    ,papellidopa varchar(80)
    ,papellidoma varchar(80)
    ,pnombre varchar(80)
    ,psnombre varchar(80)
    ,prazonsocial varchar(100)
    ,ptipodoc char(6)
    ,pcodindentificacion varchar(15)
    ,pruc char(11)
    ,pempresa int(1)
    ,pusuario varchar(30)
    ,pwks varchar(30)
	  ,pdirec varchar(100)
    ,pubigeo varchar(100)
    ,ptelefono varchar(15)

    ,pidusuario int
    ,plogin varchar(30)
    ,ppass varchar(255)
    ,pcodestado char(6)
)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  SHOW ERRORS;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';

	if (popcion='N') then
  
	insert into actor
		(TipoPersona
		,Apellido_Paterno
		,Apellido_Materno
		,PrimerNombre
		,SegundoNombre
		,RazonSocial
		,TipoDocumento
		,CodigoIdentificacion
		,Ruc
		,IdEmpresa
		,FchCrea
		,UsrCrea
		,WksCrea
		,FchMod
		,WksMod
		,UsrMod
		,FlgEli
        ,Direccion
        ,Ubigeo
        ,Telefono)
		values (ptipopersona, papellidopa, papellidoma, pnombre, psnombre, prazonsocial, ptipodoc, pcodindentificacion, pruc, pempresa, now(), pusuario, pwks, now(), pwks, pusuario, 0,pdirec, pubigeo, ptelefono);
	
	set pidactor=LAST_INSERT_ID();
	
	
  if(ptipoact='C')then 
  
			insert into cliente (
				IdActor
				,FchCrea
				,UsrCrea
				,WksCrea
				,FchMod
				,WksMod
				,UsrMod
				,FlgEli
			)
			values(
				pidactor
				,NOW()
				,pusuario
				,pwks
				,NOW()
				,pwks
				,pusuario
				,0
			);

	end if;
	if(ptipoact='M')then
		insert into mecanico (
				IdActor
				,FchCrea
				,UsrCrea
				,WksCrea
				,FchMod
				,WksMod
				,UsrMod
				,FlgEli
			)
			values(
				pidactor
				,NOW()
				,pusuario
				,pwks
				,NOW()
				,pwks
				,pusuario
				,0
			);
	end if;
  if(ptipoact='S')then
		insert into usuarios (
         id
				,idempresa
				,idactor
				,login
				,password
				,fchcrea
        ,fchmod
				,usrcrea
        ,usrmod
        ,codestado
				,flgeli
			)
			values(
			   pidusuario
				,pempresa
				,pidactor
        ,plogin
        ,ppass
        ,now()
        ,now()
        ,pusuario
        ,pusuario
        ,pcodestado
				,0
			);
	end if;
  
  
  elseif(popcion='U') then

	  update actor set
		 Apellido_Paterno = papellidopa
		,Apellido_Materno = papellidoma
		,PrimerNombre = pnombre
		,SegundoNombre = psnombre
    ,TipoPersona = ptipopersona
		,RazonSocial = prazonsocial
		,TipoDocumento = ptipodoc
		,CodigoIdentificacion = pcodindentificacion
		,Ruc = pruc
		,IdEmpresa = pempresa
		,FchMod = now()
		,WksMod = pwks
		,UsrMod = pusuario
        ,Direccion = pdirec
        ,Ubigeo = pubigeo
        ,Telefono = ptelefono
		where IdActor=pidactor;
		
		set @idcliente = (select IdCliente from cliente c inner join actor a on c.IdActor=a.IdActor where a.IdActor=pidactor);
		
		if(ptipoact='C') then
			update cliente set
			FchMod = now()
			,WksMod = pwks
			,UsrMod = pusuario
			where IdCliente=@idcliente;
		end if;
		
		set @idmecanico = (select IdMecanico from mecanico m inner join actor a on m.IdActor=a.IdActor where a.IdActor=pidactor);
		
		if(ptipoact='M') then
			update mecanico set
			FchMod = now()
			,WksMod = pwks
			,UsrMod = pusuario
			where IdMecanico=@idmecanico;
		end if;

    if(ptipoact='S') then
			update usuarios set
       login = plogin
      ,codestado= pcodestado
      ,fchmod = now()
			,usrmod = pusuario
			where id=pidusuario;
		end if;
   
   elseif(popcion='D') then
	  update actor set
	   FlgEli = '1'
	  ,FchMod = now()
	  ,UsrMod = pusuario
	  ,WksMod = pwks
	  where IdActor=pidactor;
	  
	  set @idcliente = (select IdCliente from cliente c inner join actor a on c.IdActor=a.IdActor where a.IdActor=pidactor);
	  
	  if(ptipoact='C') then
			update cliente set
			FlgEli = '1'
			,FchMod = now()
			,WksMod = pwks
			,UsrMod = pusuario
			where IdCliente=@idcliente;
		end if;
		
		set @idmecanico = (select IdMecanico from mecanico m inner join actor a on m.IdActor=a.IdActor where a.IdActor=pidactor);
		
		if(ptipoact='M') then
			update mecanico set
			 FlgEli = '1'
			,FchMod = now()
			,WksMod = pwks
			,UsrMod = pusuario
			where IdMecanico=@idmecanico;
		end if;

    if(ptipoact='S') then
			update usuarios set
			 flgeli = '1'
			,fchmod = now()
			,usrmod = pusuario
			where id=pidusuario;
		end if;
		
	else
		set verror=1;
		set vmensaje='Opción inválida!';
		select sqlcode;
	end if;
 
   select verror as Code,vmensaje as Message, pidactor as Id;

  commit;
 
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_registracliuser`
--

DROP PROCEDURE IF EXISTS `sp_set_registracliuser`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_registracliuser`(

   popcion char(1)
  ,pidacceso int(11)
  ,pidcliente int(11)
  #,pidcontrato int(11)
  ,pflgacceapp char(1)
  ,pflgacceweb char(1)
  ,pidempresa int(11)
  ,pmaxconex int(11)
  ,ploguser varchar(30)
  ,ppassplataforma varchar(32)
  ,ppasscomandos varchar(32)
  ,pwks varchar(30)
  ,pusuario varchar(30)
  ,pstdacce char(18)

)
BEGIN

   declare verror int;
   declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';


  if (popcion='N') then

  insert into accesosplataforma
  (IdCliente
  ,FlgAccesoApp
	,FlgAccesoWeb
	,IdEmpresa
  ,MaxConexiones
  ,LoginAcceso
  ,ContrasnaPlataforma
  ,ContrasenaComados
  ,FchCrea
  ,WksCrea
  ,UsrCrea
  ,FchMod
  ,WksMod
  ,UsrMod
  ,FlgEli
  ,EstadoAcceso)
	values (
  pidcliente
  ,pflgacceapp
  ,pflgacceweb
  ,pidempresa
  ,pmaxconex
  ,ploguser
  ,ppassplataforma
  ,ppasscomandos
  ,now()
  ,pwks
  ,pusuario
  ,now()
  ,pwks
  ,pusuario
  ,0
  ,pstdacce);

set pidacceso=LAST_INSERT_ID();
if (pidacceso=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

elseif(popcion='U') then

  update accesosplataforma set
   FlgAccesoApp = pflgacceapp
	,FlgAccesoWeb = pflgacceweb
	,IdEmpresa = pidempresa
  ,MaxConexiones = pmaxconex
  ,LoginAcceso = ploguser
  ,ContrasnaPlataforma = ppassplataforma
  ,ContrasenaComados = ppasscomandos
  ,FchMod = now()
  ,WksMod = pwks
  ,UsrMod = pusuario
  ,EstadoAcceso = pstdacce
where IdAcceso=pidacceso;

elseif(popcion='D') then
  update accesosplataforma set
   FlgEli = '1'
  ,UsrMod = pusuario
  ,FchMod = now()
  where IdAcceso=pidacceso;

  set @pidcontrato=(select pd.IdContrato from accesosplataforma ap inner join accesoplataformadetalle pd on ap.IdAcceso=pd.IdAcceso where ap.IdAcceso=pidacceso);

  update contrato set
  EstadoContrato = '005010'
  where IdContrato=@pidcontrato;

else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidacceso as Id ;

commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_registracomando`
--

DROP PROCEDURE IF EXISTS `sp_set_registracomando`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_registracomando`(
	popcion char(1)
    ,pidcomando int(11)
    ,pcodtipocomando char(6)
    ,pcomandos varchar(50)
    ,pidmodelo int(11)
)
BEGIN
	declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';


if (popcion='N') then

  insert into comandos
  (CodTipoComandos
	,Comandos
	,IdModelo)
	values (pcodtipocomando,pcomandos,pidmodelo);

set pidcomando=LAST_INSERT_ID();
if (pidcomando=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

elseif(popcion='U') then

  update comandos set
 CodTipoComandos = pcodtipocomando
,Comandos = pcomandos
,IdModelo = pidmodelo
where IdComandos=pidcomando;

elseif(popcion='D') then
  update marca set
   FlgEli = '1'
  ,UsrMod = pusuario
  ,FchMod = now()
  where IdComandos=pidcomando;
else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidcomando as Id ;

commit;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_registramarca`
--

DROP PROCEDURE IF EXISTS `sp_set_registramarca`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_registramarca`(
	popcion     char(1)
  
	,pidmarca int (11)
	,pdescripcion varchar (100)
	,pwks varchar (30)
 
	,pusuario    varchar(30)
)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';


if (popcion='N') then

  insert into marca
  (Descripcion
,UsrCrea
,WksCrea
,FchCrea
,UsrMod
,WksMod
,FchMod
,FlgEli)
values (pdescripcion,pusuario,pwks,now(),pusuario,pwks,now(),0);

set pidmarca=LAST_INSERT_ID();
if (pidmarca=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

elseif(popcion='U') then

  update marca set
 Descripcion = pdescripcion
,UsrMod = pusuario
,FchMod = now()
where IdMarca=pidmarca;

elseif(popcion='D') then
  update marca set
   FlgEli = '1'
  ,UsrMod = pusuario
  ,FchMod = now()
  where IdMarca=pidmarca;
else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidmarca as Id ;

commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_registramodelo`
--

DROP PROCEDURE IF EXISTS `sp_set_registramodelo`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_registramodelo`(

   popcion char(1)
  ,pidmodelo int(11)
  ,pidmarca int(11)
  ,pmodelo varchar(100)
  ,pwks varchar(30)
  ,pfotoref varchar(250)
  ,pusuario varchar(30)

)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';


if (popcion='N') then

  insert into modelo
  (Descripcion
  ,FchCrea
  ,UsrCrea
  ,WksCrea
  ,FchMod
  ,UsrMod
  ,WksMod
  ,FlgEli
  ,FotoReferencial
  ,IdMarca)
  values (pmodelo,now(),pusuario,pwks,now(),pusuario,pwks,0,pfotoref,pidmarca);

set pidmodelo=LAST_INSERT_ID();
if (pidmodelo=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

elseif(popcion='U') then

  update modelo set
 Descripcion = pmodelo
,UsrMod = pusuario
,FchMod = now()
,WksMod = pwks
,FotoReferencial = pfotoref
,IdMarca = pidmarca
where IdModelo=pidmodelo;

elseif(popcion='D') then
  update modelo set
   FlgEli = '1'
  ,UsrMod = pusuario
  ,FchMod = now()
  where IdModelo=pidmodelo;
else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidmodelo as Id ;

commit;


END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_registraorden`
--

DROP PROCEDURE IF EXISTS `sp_set_registraorden`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_registraorden`(
   popcion char(1)
  ,pidorden int(11)
  ,pidempresa int(11)
  ,pidmecanico int(11)
  ,pidcliente int(11)
  ,pidvehiculo int(11)
  ,pusuario varchar(30)
  ,pwks varchar(30)
  ,pestado char(6)
  ,pobservacion varchar(250)
  ,pfchprog DATETIME
  ,pfchfin DATETIME
  ,pidtaller int(11)
  ,pcaddetalle varchar(8000)
)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

Declare  pos int;
Declare  len int;
Declare cadena Varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';

  #Creando Tablas Temporales

  drop table if exists tbltmp_odet_0001;
  Create table tbltmp_odet_0001(
                                                codtipotrabajo      char(6)
                                               ,iddispositivo       int(11)
                                               ,nrosim              varchar(15)
                                               ,nroidn              varchar(50)
                                             );

  #Llegando Primera Tabla
   Set cadena=pcaddetalle;
   Set @codtipotrabajo='';set @iddispositivo='';set @nrosim='';set @nroidn='';
   Set len=length(cadena);
   WHILE len>0 DO
		 set pos=instr(cadena,'|');
		 set @codtipotrabajo=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set @iddispositivo=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set @nrosim=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set @nroidn=left(cadena,pos-1);
		 set cadena=substring(cadena,pos+1);
		 set pos=instr(cadena,'|');
		 set len=length(cadena);
		   insert into tbltmp_odet_0001 values(@codtipotrabajo,@iddispositivo,@nrosim,@nroidn);
   END WHILE;

   #Ejecutando insert

   if (popcion='N') then

  insert into ordentrabajo
  (IdEmpresa
,IdMecanico
,IdCliente
,IdVehiculo
,FchCrea
,UsrCrea
,WksCrea
,FchMod
,UsrMod
,WksMod
,FlgEli
,EstadoOrden
,Obsvacion
,FechaRegistro
,FechaProgramada
,IdTaller
)
values (
pidempresa
,pidmecanico
,pidcliente
,pidvehiculo
,now()
,pusuario
,pwks
,now()
,pusuario
,pwks
,0
,pestado
,pobservacion
,now()
,pfchprog
,pidtaller
);

set pidorden=LAST_INSERT_ID();
if (pidorden=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

 insert into ordentrabajo_detalle
  (IdOrden
,IdDispositivo
,CodTipoTrabajo
,FchCrea
,UsrCrea
,WksCrea
,FchMod
,UsrMod
,WksMod
,FlgEli
,FechaInicio
)
select
pidorden
,td.iddispositivo
,td.codtipotrabajo
,now()
,pusuario
,pwks
,now()
,pusuario
,pwks
,0
,now()
from (select distinct
   d.iddispositivo
   ,d.codtipotrabajo
   from tbltmp_odet_0001 d
) td;

set @newcodigo=ifnull((select max(IdOrdenDetalle) from ordentrabajo_detalle),0);

set @newcodigo=LAST_INSERT_ID();
if (@newcodigo=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar en el detalle!';
    select sqlcode;
end if;

update dispositivos d inner join tbltmp_odet_0001 td
on d.IdDispositivo=td.iddispositivo
set
d.NroSim = td.nrosim
,d.NroIDN = td.nroidn
,d.fchmod = now()
,d.usrmod = pusuario;
#where IdDispositivo = (select distinct d.iddispositivo from tbltmp_odet_0001 d);

elseif(popcion='U') then

  update modelo set
 Descripcion = pdescripcion
,IdMarca = pidmarca
,FotoReferencial  = pfotoref
,FchMod = now()
,UsrMod = pusuario
,WksMod = pwks
where IdModelo=pidmodelo;

elseif(popcion='E') then

   update ordentrabajo set
    EstadoOrden='005011'
   ,FechaEjecutada = pfchprog
   ,FechaFin = pfchfin
   where IdOrden=pidorden;

   update ordentrabajo_detalle od inner join ordentrabajo o
   on o.IdOrden=od.IdOrden
   set
    od.FechaInicio = pfchprog
   ,od.FechaFin = pfchfin
   where o.IdOrden=pidorden;

elseif(popcion='D') then
  update ordentrabajo set
   FlgEli = '1'
  ,EstadoOrden = '005012'
  ,FchMod = now()
  ,UsrMod = pusuario
  ,WksMod = pwks
  where IdOrden=pidorden;
else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidorden as Id ;

commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_registrapdetalle`
--

DROP PROCEDURE IF EXISTS `sp_set_registrapdetalle`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_registrapdetalle`(

   popcion char(1)
  ,pidacceso int(11)
  ,pidcontrato int(11)
  ,pusuario varchar(30)
  ,pwks varchar(30)


)
BEGIN

declare verror int;
   declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';

  if (popcion='N') then

   insert into accesoplataformadetalle
  (IdAccesoDetalle
  ,IdAcceso
  ,IdContrato
  ,FchCrea
  ,UsrCrea
  ,WksCrea
  ,FchMod
  ,UsrMod
  ,WksMod
  ,FlgEli
  )
  values (
   0
  ,pidacceso
  ,pidcontrato
  ,now()
  ,pusuario
  ,pwks
  ,now()
  ,pusuario
  ,pwks
  ,0
  );

  update contrato set
   EstadoContrato = '005011'
  where IdContrato=pidcontrato;

  set @newcodigo=LAST_INSERT_ID();

if (@newcodigo=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar detalle!';
    select sqlcode;
end if;

elseif(popcion='U') then

  update comandos set
 CodTipoComandos = pcodtipocomando
,Comandos = pcomandos
,IdModelo = pidmodelo
where IdComandos=pidcomando;

elseif(popcion='D') then
  update accesoplataformadetalle set
   FlgEli = '1'
  ,UsrMod = pusuario
  ,FchMod = now()
  ,WksMod = pwks
  where IdAccesoDetalle=pidaccesodet;

else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidacceso as Id ;

commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_registravehiculo`
--

DROP PROCEDURE IF EXISTS `sp_set_registravehiculo`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_registravehiculo`(
	popcion char(1)
  ,pidvehiculo int(11)
  ,pplaca varchar(15)
  ,pchasis varchar(50)
	,pmotor varchar(50)
	,pmodelo varchar(100)
	,pcolor varchar(100)
	,pusuario varchar(30)
	,pwks varchar(30)
	,prutaref char(18)
	,prutatar char(18)
	,pidempresa int(11)
  ,pmarca varchar(50)
)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  SHOW ERRORS;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';
  
  if (popcion='N') then

  insert into vehiculo
  (Placa
,Chasis
,Motor
,Modelo
,Color
,FchCrea
,UsrCrea
,WksCrea
,FchMod
,UsrMod
,WksMod
,FlgEli
,RutaReferencia
,RutaTarjeta
,IdEmpresa
,Marca)
values (pplaca, pchasis, pmotor, pmodelo, pcolor, now(), pusuario, pwks, now(), pusuario, pwks, 0, prutaref, prutatar, pidempresa, pmarca);

set pidvehiculo=LAST_INSERT_ID();
if (pidvehiculo=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

elseif(popcion='U') then

  update vehiculo set
 Placa = pplaca
,Chasis = pchasis
,Motor  = pmotor
,Modelo = pmodelo
,Color = pcolor
,FchMod = now()
,UsrMod = pusuario
,WksMod = pwks
,RutaReferencia = prutaref
,RutaTarjeta = prutatar
,Marca = pmarca
where IdVehiculo=pidvehiculo;

elseif(popcion='D') then
  update vehiculo set
   FlgEli = '1'
  ,FchMod = now()
  ,UsrMod = pusuario
  ,WksMod = pwks
  where IdVehiculo=pidvehiculo;
else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidvehiculo as Id ;

commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_regitrataller`
--

DROP PROCEDURE IF EXISTS `sp_set_regitrataller`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_regitrataller`(
	popcion char(1)
    , pidtaller int
    , pdescripcion varchar(100)
    , pusuario varchar(30)
    , pwks varchar(30)
)
BEGIN

declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';


if (popcion='N') then

  insert into taller
  (Descripcion
,FchCrea
,UsrCrea
,WksCrea
,FchMod
,UsrMod
,WksMod
,FlgEli)
values (pdescripcion, now(), pusuario, pwks, now(), pusuario, pwks, 0);

set pidtaller=LAST_INSERT_ID();
if (pidtaller=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

elseif(popcion='U') then

  update taller set
 Descripcion = pdescripcion
,FchMod = now()
,UsrMod = pusuario
,WksMod = pwks
where IdTaller=pidtaller;

elseif(popcion='D') then
  update taller set
   FlgEli = '1'
  ,FchMod = now()
  ,UsrMod = pusuario
  ,WksMod = pwks
  where IdTaller=pidtaller;
else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidtaller as Id ;

commit;

END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `sp_set_usuarioopcion`
--

DROP PROCEDURE IF EXISTS `sp_set_usuarioopcion`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_set_usuarioopcion`(
    popcion char(1)
   ,pidusuarioopciones int(11)
   ,pidopciones int(11)
   ,pidusuario int(11)
)
BEGIN

 declare verror int;
declare vmensaje varchar(8000);

DECLARE exit handler for sqlexception
  BEGIN
  if (verror=0) then
    SHOW ERRORS;
  else
    select verror as Code,vmensaje as Message;
  end if;
  ROLLBACK;
END;

DECLARE exit handler for sqlwarning
 BEGIN

 SHOW ERRORS;
 ROLLBACK;
END;

DECLARE exit handler for NOT FOUND
 BEGIN
 SHOW ERRORS;
 ROLLBACK;
END;

  SET autocommit = 0;
  START TRANSACTION;

  set verror=0;
  set vmensaje='';


if (popcion='N') then

  insert into usuarioopciones
  (IdOpciones
  ,id
  )
values (pidopciones,pidusuario);

set pidusuarioopciones=LAST_INSERT_ID();
if (pidusuarioopciones=0) then
    set verror=1;
    set vmensaje='Hubo problemas al insertar!';
    select sqlcode;
end if;

elseif(popcion='U') then

  update usuarioopciones set
 IdOpciones = pidopciones
,UsrMod = pusuario
,FchMod = now()
where IdMarca=pidmarca;

elseif(popcion='D') then
  delete from usuarioopciones
  where IdOpciones=pidopciones
  and id=pidusuario;
else
    set verror=1;
    set vmensaje='Opción inválida!';
    select sqlcode;
end if;

select verror as Code,vmensaje as Message, pidusuarioopciones as Id ;

commit;


END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
