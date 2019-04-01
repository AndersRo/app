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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accesoplataformadetalle`
--

/*!40000 ALTER TABLE `accesoplataformadetalle` DISABLE KEYS */;
INSERT INTO `accesoplataformadetalle` (`IdAccesoDetalle`,`IdAcceso`,`IdContrato`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`) VALUES 
 (9,25,24,'2019-03-28 15:04:05','klien','::1','2019-03-28 15:04:05','klien','::1','0'),
 (10,26,25,'2019-03-28 15:18:24','klien','::1','2019-03-28 15:18:24','klien','::1','0'),
 (11,27,26,'2019-03-28 15:36:00','klien','::1','2019-03-28 15:36:00','klien','::1','0'),
 (12,28,27,'2019-03-28 16:24:39','klien','::1','2019-03-28 16:24:39','klien','::1','0'),
 (13,29,28,'2019-03-28 16:49:43','klien','::1','2019-03-28 16:49:43','klien','::1','0'),
 (14,29,29,'2019-03-28 17:08:05','klien','::1','2019-03-28 17:08:05','klien','::1','0'),
 (15,30,30,'2019-03-28 17:25:24','klien','::1','2019-03-28 17:25:24','klien','::1','0'),
 (16,31,31,'2019-03-28 17:58:35','klien','::1','2019-03-28 17:58:35','klien','::1','0'),
 (17,32,32,'2019-03-28 18:10:02','klien','::1','2019-03-28 18:10:02','klien','::1','0'),
 (18,33,33,'2019-03-28 18:22:21','klien','::1','2019-03-28 18:22:21','klien','::1','0'),
 (19,34,34,'2019-03-28 18:32:12','klien','::1','2019-03-28 18:32:12','klien','::1','0'),
 (20,35,35,'2019-03-28 18:40:07','klien','::1','2019-03-28 18:40:07','klien','::1','0'),
 (21,36,36,'2019-03-28 19:02:09','klien','::1','2019-03-28 19:02:09','klien','::1','0'),
 (22,37,37,'2019-03-29 09:19:23','klien','::1','2019-03-29 09:19:23','klien','::1','0'),
 (23,38,38,'2019-03-29 09:32:15','klien','::1','2019-03-29 09:32:15','klien','::1','0'),
 (24,33,39,'2019-03-29 10:00:32','klien','::1','2019-03-29 10:00:32','klien','::1','0'),
 (25,39,40,'2019-03-29 10:30:37','klien','::1','2019-03-29 10:30:37','klien','::1','0'),
 (26,40,41,'2019-03-29 11:00:33','klien','::1','2019-03-29 11:00:33','klien','::1','0'),
 (27,41,42,'2019-03-29 11:40:46','klien','::1','2019-03-29 11:40:46','klien','::1','0'),
 (28,32,43,'2019-03-29 11:57:56','klien','::1','2019-03-29 11:57:56','klien','::1','0'),
 (29,42,44,'2019-03-29 14:36:30','klien','::1','2019-03-29 14:36:30','klien','::1','0'),
 (30,43,45,'2019-03-29 14:46:27','klien','::1','2019-03-29 14:46:27','klien','::1','0'),
 (31,44,46,'2019-03-29 14:54:32','klien','::1','2019-03-29 14:54:32','klien','::1','0'),
 (32,45,47,'2019-03-29 15:08:21','klien','::1','2019-03-29 15:08:21','klien','::1','0'),
 (33,46,48,'2019-03-29 15:28:44','klien','::1','2019-03-29 15:28:44','klien','::1','0'),
 (34,47,50,'2019-03-29 16:11:42','klien','::1','2019-03-29 16:11:42','klien','::1','0'),
 (35,48,54,'2019-03-29 16:56:17','klien','::1','2019-03-29 16:56:17','klien','::1','0'),
 (36,49,55,'2019-03-29 17:29:34','klien','::1','2019-03-29 17:29:34','klien','::1','0'),
 (37,50,56,'2019-03-29 17:41:25','klien','::1','2019-03-29 17:41:25','klien','::1','0'),
 (38,51,58,'2019-03-29 18:03:07','klien','::1','2019-03-29 18:03:07','klien','::1','0'),
 (39,52,59,'2019-03-29 18:12:01','klien','::1','2019-03-29 18:12:01','klien','::1','0'),
 (40,53,60,'2019-03-29 18:42:17','klien','::1','2019-03-29 18:42:17','klien','::1','0'),
 (41,54,61,'2019-03-29 18:51:47','klien','::1','2019-03-29 18:51:47','klien','::1','0'),
 (42,27,62,'2019-03-30 09:34:17','klien','::1','2019-03-30 09:34:17','klien','::1','0'),
 (43,27,63,'2019-03-30 09:52:16','klien','::1','2019-03-30 09:52:16','klien','::1','0'),
 (44,55,65,'2019-03-30 10:31:30','klien','::1','2019-03-30 10:31:30','klien','::1','0'),
 (45,56,68,'2019-03-30 11:08:20','klien','::1','2019-03-30 11:08:20','klien','::1','0'),
 (46,57,69,'2019-03-30 11:20:37','klien','::1','2019-03-30 11:20:37','klien','::1','0'),
 (47,58,70,'2019-03-30 11:28:47','klien','::1','2019-03-30 11:28:47','klien','::1','0'),
 (48,59,71,'2019-03-30 11:59:51','klien','::1','2019-03-30 11:59:51','klien','::1','0'),
 (49,60,72,'2019-03-30 12:09:40','klien','::1','2019-03-30 12:09:40','klien','::1','0'),
 (50,61,73,'2019-03-30 12:18:16','klien','::1','2019-03-30 12:18:16','klien','::1','0'),
 (51,62,74,'2019-03-30 12:28:54','klien','::1','2019-03-30 12:28:54','klien','::1','0'),
 (52,63,75,'2019-03-30 12:40:30','klien','::1','2019-03-30 12:40:30','klien','::1','0'),
 (53,64,76,'2019-03-30 13:01:50','klien','::1','2019-03-30 13:01:50','klien','::1','0'),
 (54,65,77,'2019-03-30 13:17:06','klien','::1','2019-03-30 13:17:06','klien','::1','0'),
 (55,66,78,'2019-03-30 13:26:29','klien','::1','2019-03-30 13:26:29','klien','::1','0');
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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accesosplataforma`
--

/*!40000 ALTER TABLE `accesosplataforma` DISABLE KEYS */;
INSERT INTO `accesosplataforma` (`IdAcceso`,`IdCliente`,`FlgAccesoApp`,`FlgAccesoWeb`,`IdEmpresa`,`MaxConexiones`,`LoginAcceso`,`ContrasnaPlataforma`,`ContrasenaComados`,`FchCrea`,`WksCrea`,`UsrCrea`,`FchMod`,`WksMod`,`UsrMod`,`FlgEli`,`EstadoAcceso`) VALUES 
 (25,21,'0','1',1,3,'21815450','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e','2019-03-28 15:03:55','::1','klien','2019-03-28 15:40:34','::1','klien','0','001001'),
 (26,22,'0','1',1,3,'21873305','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e','2019-03-28 15:18:12','::1','klien','2019-03-28 15:52:53','::1','klien','0','001001'),
 (27,23,'0','1',1,3,'42081052','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e','2019-03-28 15:35:47','::1','klien','2019-03-28 15:52:33','::1','klien','0','001001'),
 (28,24,'0','1',1,3,'48085988','b1bcafd9d998c964a44fffacb6c6b0fb','dfbfa7ddcfffeb581f50edcf9a0204bb','2019-03-28 16:24:27','::1','klien','2019-03-28 16:24:27','::1','klien','0','001001'),
 (29,26,'o','1',1,3,'71319691','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e','2019-03-28 16:49:33','::1','klien','2019-03-28 17:26:34','::1','klien','0','001001'),
 (30,27,'o','1',1,3,'21498333','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e','2019-03-28 17:25:15','::1','klien','2019-03-28 17:26:25','::1','klien','0','001001'),
 (31,28,'0','1',1,3,'21839149','c9018880abbbec21a7d55339467eaf52','c292b3e9629fee6bbb741eb109321cf8','2019-03-28 17:58:26','::1','klien','2019-03-28 17:58:26','::1','klien','0','001001'),
 (32,29,'0','1',1,3,'41738766','5ef2dc3a7f60c6289b6f2d03261e340d','5d7009220a974e94404889274d3a9553','2019-03-28 18:09:51','::1','klien','2019-03-28 18:09:51','::1','klien','0','001001'),
 (33,30,'0','1',1,3,'47066098','e0d80514f58ea47aa90ce32090a9256b','34e420f6e47d96669897a45586997a57','2019-03-28 18:22:10','::1','klien','2019-03-28 18:22:10','::1','klien','0','001001'),
 (34,31,'0','1',1,3,'43682607','0a66b3626061c287c23cd1368e17c09a','53c6de78244e9f528eb3e1cda69699bb','2019-03-28 18:32:00','::1','klien','2019-03-28 18:32:00','::1','klien','0','001001'),
 (35,32,'0','1',1,3,'20564454','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e','2019-03-28 18:39:57','::1','klien','2019-03-28 18:40:26','::1','klien','0','001001'),
 (36,33,'0','1',1,3,'41033074','29ce1a1267b19dfe441a742dd6305243','639d79cc857a6c76c2723b7e014fccb0','2019-03-28 19:01:42','::1','klien','2019-03-28 19:01:42','::1','klien','0','001001'),
 (37,34,'0','1',1,3,'42546858','9ff497bde8b5fe88468bba909bf18fbe','c55430fdfdac11fc3771a9b94e2bb854','2019-03-29 09:19:12','::1','klien','2019-03-29 09:19:12','::1','klien','0','001001'),
 (38,35,'0','1',1,3,'46375024','6dbc445e5b8f9e0332746e23bb54b845','d62bcf67cf8ef4536d0ff0204922214b','2019-03-29 09:32:05','::1','klien','2019-03-29 09:32:05','::1','klien','0','001001'),
 (39,37,'0','1',1,3,'21857222','8eee6ec76a03059a772307902b6d9305','3c5be6328b5f6a0a5980341230b8ac05','2019-03-29 10:30:28','::1','klien','2019-03-29 10:30:28','::1','klien','0','001001'),
 (40,38,'0','1',1,3,'41396493','4b1e1ede3dd663ff5372f7da48058bb5','def130d0b67eb38b7a8f4e7121ed432c','2019-03-29 11:00:23','::1','klien','2019-03-29 11:00:23','::1','klien','0','001001'),
 (41,39,'0','1',1,3,'44545597','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e','2019-03-29 11:40:36','::1','klien','2019-03-29 11:57:24','::1','klien','0','001001'),
 (42,40,'0','1',1,3,'41440632','481d28c2fdc2da7c2f803656dd618dc2','2521f126b3296e2016091b3f576bb77f','2019-03-29 14:36:17','::1','klien','2019-03-29 14:36:17','::1','klien','0','001001'),
 (43,41,'0','1',1,3,'40756647','021c93768e88c221cd3768eb4c73a7e5','8ce8b102d40392a688f8c04b3cd6cae0','2019-03-29 14:46:16','::1','klien','2019-03-29 14:46:16','::1','klien','0','001001'),
 (44,42,'0','1',1,3,'71666958','c0797014d212b4f6f9e104eee406a26f','27e9661e033a73a6ad8cefcde965c54d','2019-03-29 14:54:20','::1','klien','2019-03-29 14:54:20','::1','klien','0','001001'),
 (45,43,'0','1',1,3,'60344871','0161d314b6a1c8b020d5b1e649c6c6bd','a9c397afa342c368ba24e7620ee41a94','2019-03-29 15:07:51','::1','klien','2019-03-29 15:07:51','::1','klien','0','001001'),
 (46,45,'0','1',1,3,'72787336','ad7888bf413d85219ed3c37eb94b67bb','285c595717332b49cfb72d1d48a5a962','2019-03-29 15:28:33','::1','klien','2019-03-29 15:28:33','::1','klien','0','001001'),
 (47,47,'0','1',1,3,'21860067','d59bf12fff6c3a19d021aabb8b2e1b3a','75f56f82bbabc12898b7ff63ebebe482','2019-03-29 16:11:14','::1','klien','2019-03-29 16:11:14','::1','klien','0','001001'),
 (48,50,'0','1',1,3,'76189582','5dbe6c3df189157d1e9ae1b3f91ea5ed','e20b21ae6508f22fc189c60a0880d0b8','2019-03-29 16:55:56','::1','klien','2019-03-29 16:55:56','::1','klien','0','001001'),
 (49,51,'0','1',1,3,'41346275','c52275f4e2689b3d50144c676ead9256','22c432f46fd86e1be5bc4429282eb65d','2019-03-29 17:29:21','::1','klien','2019-03-29 17:29:21','::1','klien','0','001001'),
 (50,52,'0','1',1,3,'001281933','fb9268f23d7e3ae2008172044b16f6a4','1e913e1b06ead0b66e30b6867bf63549','2019-03-29 17:41:14','::1','klien','2019-03-29 17:41:14','::1','klien','0','001001'),
 (51,54,'0','1',1,3,'48226720','e72750582a6a83126fd7a433c34dc715','41f860e3b7f548abc1f8b812059137bf','2019-03-29 18:02:56','::1','klien','2019-03-29 18:02:56','::1','klien','0','001001'),
 (52,55,'0','1',1,3,'21873268','7f3746220a93b07e68c65f2e0587a1a6','a4d92e2cd541fca87e4620aba658316d','2019-03-29 18:11:50','::1','klien','2019-03-29 18:11:50','::1','klien','0','001001'),
 (53,56,'0','1',1,3,'44818830','d00361649e649a522bc75d5ec1530af6','376d41c34fac1e911e7e197b6a28270e','2019-03-29 18:42:06','::1','klien','2019-03-29 18:42:06','::1','klien','0','001001'),
 (54,57,'0','1',1,3,'06272496','1c55cef99f4947bf509e4a195679a631','12ffb0968f2f56e51a59a6beb37b2859','2019-03-29 18:51:32','::1','klien','2019-03-29 18:51:32','::1','klien','0','001001'),
 (55,62,'o','o',1,3,'21816544','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e','2019-03-30 10:31:18','::1','klien','2019-03-30 10:32:52','::1','klien','0','001002'),
 (56,65,'0','1',1,3,'47926580','d96f8d4fafa69a24caec0b6594f78f37','1ef03ed0cd5863c550128836b28ec3e9','2019-03-30 11:08:06','::1','klien','2019-03-30 11:08:06','::1','klien','0','001001'),
 (57,66,'0','1',1,3,'21803855','088ad47d610c3e2f2f8e0be419476c26','d58f855fdcc76daf232aee454c4e59f7','2019-03-30 11:20:27','::1','klien','2019-03-30 11:20:27','::1','klien','0','001001'),
 (58,67,'0','1',1,3,'41143441','d41d8cd98f00b204e9800998ecf8427e','d41d8cd98f00b204e9800998ecf8427e','2019-03-30 11:28:36','::1','klien','2019-03-30 11:30:11','::1','klien','0','001001'),
 (59,68,'0','1',1,3,'21823539','b154af8aa983c8af7a99412db752c4fe','142c65e00f4f7cf2e6c4c996e34005df','2019-03-30 11:59:39','::1','klien','2019-03-30 11:59:39','::1','klien','0','001001'),
 (60,70,'0','1',1,3,'04082362','fd5e53bcf6cb935649282622cb7a38cf','8aec51422b30d61bce078b27f0babeb1','2019-03-30 12:09:29','::1','klien','2019-03-30 12:09:29','::1','klien','0','001001'),
 (61,71,'0','1',1,3,'21853295','9dc010fc328e0f96de3ec188c0fc0398','d5d7f5bba709f5cbbe1f74977096feb3','2019-03-30 12:18:06','::1','klien','2019-03-30 12:18:06','::1','klien','0','001001'),
 (62,72,'0','1',1,3,'21788409','eb6d3711492b2ad83c61c5ccd07e2703','b18e8fb514012229891cf024b6436526','2019-03-30 12:28:44','::1','klien','2019-03-30 12:28:44','::1','klien','0','001001'),
 (63,73,'0','1',1,3,'21838208','eeb57bffdbd791884cfca13381c5012a','342c472b95d00421be10e9512b532866','2019-03-30 12:40:19','::1','klien','2019-03-30 12:40:19','::1','klien','0','001001'),
 (64,74,'0','1',1,3,'06768000','0c8165d29c009c0e8520862faf65bd4f','67ff32d40fb51f1a2fd2c4f1b1019785','2019-03-30 13:01:39','::1','klien','2019-03-30 13:01:39','::1','klien','0','001001'),
 (65,75,'0','1',1,3,'77694236','672b8ae9d85a33ce2dc6875460f66be0','70d5212dd052b2ef06e5e562f6f9ab9c','2019-03-30 13:16:56','::1','klien','2019-03-30 13:16:56','::1','klien','0','001001'),
 (66,76,'0','1',1,3,'70070200','cad2c3b95b283a8d9492e86e51c58e46','864c210c868936ae8d1fdfd8e0efdb54','2019-03-30 13:26:18','::1','klien','2019-03-30 13:26:18','::1','klien','0','001001');
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
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actor`
--

/*!40000 ALTER TABLE `actor` DISABLE KEYS */;
INSERT INTO `actor` (`IdActor`,`TipoPersona`,`Apellido_Paterno`,`Apellido_Materno`,`PrimerNombre`,`SegundoNombre`,`RazonSocial`,`TipoDocumento`,`CodigoIdentificacion`,`RUC`,`IdEmpresa`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`WksMod`,`UsrMod`,`FlgEli`,`Direccion`,`Ubigeo`,`Telefono`) VALUES 
 (1,'','ROMERO','QUISPE','ANDERS','NEILL','','002003','70303721','',1,'2018-11-07 12:13:05','USER003','127.0.0.1','2019-03-28 15:07:55','::1','klien','0','','','922178381'),
 (31,'003005','TRILLO','ORE','LUZ','MARINA','','002003','21815450','',1,'2019-03-28 14:50:15','klien','::1','2019-03-28 14:50:15','::1','klien','0','','CHINCHA',''),
 (32,'003005','QUISPE','BARRETO','CESAR','MANUEL','','002003','09762997','',1,'2019-03-28 14:57:31','klien','::1','2019-03-29 15:41:33','::1','klien','0','','CHINCHA',''),
 (33,'003005','SARAVIA','TASAYCO','MARIA','ELENA','','002003','21873305','',1,'2019-03-28 15:09:23','klien','::1','2019-03-28 15:09:23','::1','klien','0','','CHINCHA',''),
 (34,'003005','HUAMAN','PACHAS','ROXANA','MARISOL','','002003','42081052','',1,'2019-03-28 15:28:14','klien','::1','2019-03-28 15:29:04','::1','klien','0','','CHINCHA',''),
 (35,'003005','DE LA CRUZ','CASTILLA','JOSE','JAVIER','','002003','48085988','',1,'2019-03-28 16:18:05','klien','::1','2019-03-28 16:18:05','::1','klien','0','','CHINCHA',''),
 (36,'003005','PACHAS','AVALOS','GLENDA','JACKELINE','','002003','46310045','',1,'2019-03-28 16:26:46','klien','::1','2019-03-28 16:26:46','::1','klien','0','','CHINCHA',''),
 (37,'003005','BAUTISTA','MORALES','JHONY','JUSEPI','','002003','71319691','',1,'2019-03-28 16:39:50','klien','::1','2019-03-28 16:39:50','::1','klien','0','','CHINCHA',''),
 (38,'003005','BERNAOLA','MUÑOZ','MIGUEL','ANGEL','','002003','21498333','',1,'2019-03-28 17:16:40','klien','::1','2019-03-28 17:16:40','::1','klien','0','','CHINCHA',''),
 (39,'003005','VERGARA','HUARCAYA','JUSTINO','','','002003','21839149','',1,'2019-03-28 17:50:46','klien','::1','2019-03-28 17:50:46','::1','klien','0','','CHINCHA',''),
 (40,'003005','HUAMAN','PEÑA','LINDA','JACKELINE','','002003','41738766','',1,'2019-03-28 18:00:45','klien','::1','2019-03-29 11:44:01','::1','klien','0','AAHH MICAELA BASTIDAS PUEBLO NUEVO','CHINCHA',''),
 (41,'003005','PAYANO','ORTIZ','JUAN','FERMIN','','002003','47066098','',1,'2019-03-28 18:15:27','klien','::1','2019-03-28 18:15:27','::1','klien','0','','CHINCHA',''),
 (42,'003005','MAGALLANES','LUDEÑA','PATRICIA','','','002003','43682607','',1,'2019-03-28 18:24:08','klien','::1','2019-03-28 18:24:08','::1','klien','0','','CHINCHA',''),
 (43,'003005','SEDANO','TORRES','ALBERTO','','','002003','20564454','',1,'2019-03-28 18:35:32','klien','::1','2019-03-28 18:35:32','::1','klien','0','','CHINCHA',''),
 (44,'003005','CRISOSTOMO','RAMOS','SARA','','','002003','41033074','',1,'2019-03-28 18:42:10','klien','::1','2019-03-28 18:52:56','::1','klien','0','URB. CASA GRANDE Y6','CHINCHA','920160918'),
 (45,'003005','MARTINEZ','MAGALLANES','KARINA','SILVANA','','002003','42546858','',1,'2019-03-29 09:10:25','klien','::1','2019-03-29 09:10:25','::1','klien','0','PANAMERICANA DEL SUR KM 199 PASAJE ESPINOZA','CHINCHA','993554404'),
 (46,'003005','RUBIO','FLORES','VILIGRAN','','','002003','46375024','',1,'2019-03-29 09:22:09','klien','::1','2019-03-29 09:22:09','::1','klien','0','ASENTAMIENTO H. MIGUEL GRAU','CHINCHA','921077621'),
 (47,'003005','AYON','KU','DOMINGO','MANUEL','','002003','21815760','',1,'2019-03-29 09:35:45','klien','::1','2019-03-29 09:35:45','::1','klien','0','MARISCAL CASTILLA 212','CHINCHA','987239637'),
 (48,'003005','BAUTISTA','OLAVARRIA','JOSE','LUIS','','002003','21857222','',1,'2019-03-29 10:20:24','klien','::1','2019-03-29 10:20:24','::1','klien','0','SEBASTIAN BARRANCA PUEBLO NUEVO','CHINCHA','989631152'),
 (49,'003005','DE LA CRUZ','FELIX','MIGUEL','ANGEL','','002003','41396493','',1,'2019-03-29 10:55:26','klien','::1','2019-03-29 10:55:26','::1','klien','0','BARRIO LIGURIA CALLE NUEVA','CHINCHA','977462941'),
 (50,'003005','ESPINOZA','NORIEGA','RENATO','GILMAR','','002003','44545597','',1,'2019-03-29 11:28:36','klien','::1','2019-03-29 11:28:36','::1','klien','0','GIRON LOS JAZMINES CAÑETE','CHINCHA','935390079'),
 (51,'003005','SOTELO','CARBAJAL','HENRY','','','002003','41440632','',1,'2019-03-29 14:13:12','klien','::1','2019-03-29 14:13:12','::1','klien','0','CALLE HERNESTO VELIT','CHINCHA','981058659'),
 (52,'003005','PACHAS','CASTILLA','GISELA','','','002003','40756647','',1,'2019-03-29 14:39:37','klien','::1','2019-03-29 14:39:37','::1','klien','0','AV PROGRESO PUEBLO NUEVO','CHINCHA',''),
 (53,'003005','CARRILLO','FLORES','JAIME','ALEJANDRO','','002003','71666958','',1,'2019-03-29 14:48:49','klien','::1','2019-03-29 14:48:49','::1','klien','0','JIRON MIRAFLORES 361 PUEBLO NUEVO','CHINCHA','924635060'),
 (54,'003005','MAGALLANES','MURILLO','XIAN','ENRIQUE','','002003','60344871','',1,'2019-03-29 14:59:56','klien','::1','2019-03-29 14:59:56','::1','klien','0','CALLE LIMA 440 CHINCHA ALTA','CHINCHA','914641309'),
 (55,'003005','RAMOS','PAREJA','FREDDY','MANUEL','','002003','21881608','',1,'2019-03-29 15:10:40','klien','::1','2019-03-29 15:10:40','::1','klien','0','AV PROGRESO PUEBLO NUEVO','CHINCHA','993995483'),
 (56,'003005','LLANOS','RIVAS','ALONSO','ENRIQUE','','002003','72787336','',1,'2019-03-29 15:17:41','klien','::1','2019-03-29 15:17:41','::1','klien','0','AV. LA VICTORIA','CHINCHA',''),
 (57,'003005','LEVANO','ZEGARRA','MARIELA','HAYDE','','002003','47198440','',1,'2019-03-29 15:33:53','klien','::1','2019-03-29 15:33:53','::1','klien','0','PROLONGACION MARISCAL CASTILLA','CHINCHA','956864381'),
 (58,'003005','TASAYCO','DELGADO','CARLOS','CESAR','','002003','21860067','',1,'2019-03-29 15:44:47','klien','::1','2019-03-29 15:44:47','::1','klien','0','ACEQUIA GRANDE 351-06','CHINCHA','949456921'),
 (59,'003005','ROJAS','DONAYRE','EDUARDO','ISAIAS','','002003','43608864','',1,'2019-03-29 16:06:28','klien','::1','2019-03-29 16:06:28','::1','klien','0','','CHINCHA',''),
 (60,'003005','CARVALLO','ALBARRACIN','LEONEL','MARTIN','','002003','70365605','',1,'2019-03-29 16:14:32','klien','::1','2019-03-29 16:14:32','::1','klien','0','CALLE SATELITE Nº 460 GROCIO PRADO','CHINCHA','974146277'),
 (61,'003005','CARBAJAL','GONZALEZ','DIANA','RUTH','','002003','40651693','',1,'2019-03-29 16:22:43','klien','::1','2019-03-29 16:22:43','::1','klien','0','UPIS KEYKO SOFIA Nº13 PUEBLO NUEVO','CHINCHA','937193776'),
 (62,'003005','YATACO','RODRIGUEZ','SARA','ANDREA','','002003','76189582','',1,'2019-03-29 16:49:53','klien','::1','2019-03-29 16:49:53','::1','klien','0','URBANIZACION CASA GRANDE MZ V11 LT5','CHINCHA','945993724'),
 (63,'003005','CANELO','MAGALLANES','JEAN','CARLOS','','002003','41346275','',1,'2019-03-29 17:20:23','klien','::1','2019-03-29 17:20:23','::1','klien','0','BARRIO EL TIGRE CHINCHA ALTA','CHINCHA','923122352'),
 (64,'003005','HOLGUIN','FLORES','JUAN','CARLOS','','002003','001281933','',1,'2019-03-29 17:33:53','klien','::1','2019-03-29 17:33:53','::1','klien','0','GROCIO PRADO CALLE ROSARIO','CHINCHA','944419720'),
 (65,'003005','SAAVEDRA','MIGUEL DEL PRIEGO','OSCAR','GONZALO','','002003','42305257','',1,'2019-03-29 17:45:51','klien','::1','2019-03-29 17:45:51','::1','klien','0','AA.HH VIRGEN DEL CARMEN MZ H LT 12','CHINCHA','991776188'),
 (66,'003005','MEDRANO','CHAVEZ','ERICK','','','002003','48226720','',1,'2019-03-29 17:55:03','klien','::1','2019-03-29 17:55:03','::1','klien','0','','CHINCHA','924587044'),
 (67,'003005','MANRIQUE','SARAVIA','MARIA','DELIA','','002003','21873268','',1,'2019-03-29 18:05:46','klien','::1','2019-03-29 18:05:46','::1','klien','0','GROCIO PRADO BARRIO EL POR VENIR S/N LT2','CHINCHA','922817433'),
 (68,'003005','LOZANO','BLANCO','LUIS','MIGUEL','','002003','44818830','',1,'2019-03-29 18:32:54','klien','::1','2019-03-29 18:32:54','::1','klien','0','JR MIRAFLORES Nº366 PUEBLO NUEVO','CHINCHA',''),
 (69,'003005','ECHEVARRIA','ROCHA','JORGE','JESUS','','002003','06272496','',1,'2019-03-29 18:45:49','klien','::1','2019-03-29 18:45:49','::1','klien','0','','CHINCHA',''),
 (70,'003005','DE LA CRUZ','MUNAYCO','PABLO','ANTONIO','','002003','47138834','',1,'2019-03-29 18:55:25','klien','::1','2019-03-29 18:55:25','::1','klien','0','','CHINCHA',''),
 (71,'003005','CARRILLO','RAMOS','LUIS','ALBERTO','','002003','21798544','',1,'2019-03-30 09:03:31','klien','::1','2019-03-30 09:03:31','::1','klien','0','PROLONGACION NICOLAS DE PIEROLA','CHINCHA',''),
 (72,'003005','VILLALOBOS','ECHANDIA','ROBERTH','JEFFERSON','','002003','46993859','',1,'2019-03-30 09:13:33','klien','::1','2019-03-30 09:13:33','::1','klien','0','','CHINCHA',''),
 (73,'003005','PACHAS','MESIAS','CESAR','MANUEL','','002003','21793309','',1,'2019-03-30 09:38:41','klien','::1','2019-03-30 09:38:41','::1','klien','0','URB. TUPAC AMARU 715','CHINCHA',''),
 (74,'003005','PACHAS','URIBE','FREDY','MARTIN','','002003','49400009','',1,'2019-03-30 10:11:55','klien','::1','2019-03-30 10:11:55','::1','klien','0','JIRON MIRAFLORES 266 - PUEBLO NUEVO','CHINCHA','924635860'),
 (75,'003005','ABURTO','VILCA','ROLANDO','FELIX','','002003','21816544','',1,'2019-03-30 10:21:28','klien','::1','2019-03-30 10:21:28','::1','klien','0','AV ARENALES H30','CHINCHA','923500934'),
 (76,'003005','HURTADO','PACHAS','JUAN','CARLOS','','002003','42545847','',1,'2019-03-30 10:35:54','klien','::1','2019-03-30 10:35:54','::1','klien','0','AV. SANTA RITA - PSJ JABONCILLO B1','CHINCHA','967315535'),
 (77,'003005','CABRERA','CARBAJAL','ROSA','ELENA','','002003','21808684','',1,'2019-03-30 10:50:12','klien','::1','2019-03-30 10:50:12','::1','klien','0','CALLE GARCILAZO DE LA VEGA 470','CHINCHA','934637313'),
 (78,'003005','MUNAYCO','MONDALGO','BRYAM','FERNANDO','','002003','47926580','',1,'2019-03-30 11:00:16','klien','::1','2019-03-30 11:00:16','::1','klien','0','AA.HH PILAR NORES DE GARCIA MZ. B LT. 20','CHINCHA','966359548'),
 (79,'003005','YATACO','DE SALVADOR','JESUS','MARGARITA','','002003','21803855','',1,'2019-03-30 11:13:13','klien','::1','2019-03-30 11:13:13','::1','klien','0','AV. ATAHUALPA MZ 12 LT 9A','CHINCHA','986923605'),
 (80,'003005','PEÑA','HUACA','JUANA','ROSA','','002003','41143441','',1,'2019-03-30 11:22:58','klien','::1','2019-03-30 11:22:58','::1','klien','0','AV. SANTA ROSA 341 SUNAMPE','CHINCHA',''),
 (81,'003005','HERNANDEZ','GONZALES','EDUARDO','FELIX','','002003','21823539','',1,'2019-03-30 11:32:33','klien','::1','2019-03-30 11:32:33','::1','klien','0','PSJE. SIMON BOLIVAR 03','ICA - PERU','920160918'),
 (82,'003005','APOLAYA','RAMOS','JUAN','ANDRES','','002003','21827933','',1,'2019-03-30 11:40:58','klien','::1','2019-03-30 11:40:58','::1','klien','0','FCO. FELIX BALCONCITO S/N','GROCIO PRADO - PERU','972685815'),
 (83,'003005','TACSA','CABELLO','FLORA','','','002003','04082362','',1,'2019-03-30 12:03:20','klien','::1','2019-03-30 12:03:20','::1','klien','0','AA.HH AURORA CASTILLA LEVANO D10','CHINCHA','931259896'),
 (84,'003005','MENESES CANELO','DE AEDO','FLOR','DE MARIA','','002003','21853295','',1,'2019-03-30 12:12:50','klien','::1','2019-03-30 12:12:50','::1','klien','0','MIRAMAR 158','TAMBO DE MORA - PERU','969240860'),
 (85,'003005','ALCA','HUAROTE','ERNESTO','','','002003','21788409','',1,'2019-03-30 12:22:24','klien','::1','2019-03-30 12:22:24','::1','klien','0','AV. PROGRESO Nº 259 BARRIO CHACARITA','SUNAMPE - PERU','956120527'),
 (86,'003005','TUBILLA','SOLANO','MARIA','EDITH','','002003','21838208','',1,'2019-03-30 12:32:08','klien','::1','2019-03-30 12:32:08','::1','klien','0','ALVA MAURTUA 649','CHINCHA - PERU','959949094'),
 (87,'003005','ÑAÑEZ','MARTINEZ','TEODOCIA','VALERIA','','002003','06768000','',1,'2019-03-30 12:43:00','klien','::1','2019-03-30 12:43:00','::1','klien','0','AA.HH MIGUEL GRAU MZ I LT 14','CHINCHA - PERU',''),
 (88,'003005','QUISPE','VAZQUEZ','JOSE','ALEXANDER','','002003','75449009','',1,'2019-03-30 12:54:41','klien','::1','2019-03-30 12:54:41','::1','klien','0','','CHINCHA',''),
 (89,'003005','CHOQUE','DIAZ','LUIS','ALBERTO','','002003','77694236','',1,'2019-03-30 13:06:20','klien','::1','2019-03-30 13:06:20','::1','klien','0','','CHINCHA - PERU',''),
 (90,'003005','CHOQUE','DIAZ','LUIS','ALBERTO','','002003','77694236','',1,'2019-03-30 13:11:08','klien','::1','2019-03-30 13:14:37','::1','klien','1','','CHINCHA - PERU',''),
 (91,'003005','PEREZ','SANCHEZ','ODALY','YOMIRA','','002003','70070200','',1,'2019-03-30 13:20:06','klien','::1','2019-03-30 13:20:06','::1','klien','0','CALLE SAN MARCELO 168 MZ S LT 9 MINA DE ORO','CHINCHA ALTA - PERU','930627597');
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
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`IdCliente`,`IdActor`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`WksMod`,`UsrMod`,`FlgEli`) VALUES 
 (21,31,'2019-03-28 14:50:15','klien','::1','2019-03-28 14:50:15','::1','klien','0'),
 (22,33,'2019-03-28 15:09:23','klien','::1','2019-03-28 15:09:23','::1','klien','0'),
 (23,34,'2019-03-28 15:28:14','klien','::1','2019-03-28 15:29:04','::1','klien','0'),
 (24,35,'2019-03-28 16:18:05','klien','::1','2019-03-28 16:18:05','::1','klien','0'),
 (25,36,'2019-03-28 16:26:46','klien','::1','2019-03-28 16:26:46','::1','klien','0'),
 (26,37,'2019-03-28 16:39:50','klien','::1','2019-03-28 16:39:50','::1','klien','0'),
 (27,38,'2019-03-28 17:16:40','klien','::1','2019-03-28 17:16:40','::1','klien','0'),
 (28,39,'2019-03-28 17:50:46','klien','::1','2019-03-28 17:50:46','::1','klien','0'),
 (29,40,'2019-03-28 18:00:45','klien','::1','2019-03-29 11:44:01','::1','klien','0'),
 (30,41,'2019-03-28 18:15:27','klien','::1','2019-03-28 18:15:27','::1','klien','0'),
 (31,42,'2019-03-28 18:24:08','klien','::1','2019-03-28 18:24:08','::1','klien','0'),
 (32,43,'2019-03-28 18:35:32','klien','::1','2019-03-28 18:35:32','::1','klien','0'),
 (33,44,'2019-03-28 18:42:10','klien','::1','2019-03-28 18:52:57','::1','klien','0'),
 (34,45,'2019-03-29 09:10:25','klien','::1','2019-03-29 09:10:25','::1','klien','0'),
 (35,46,'2019-03-29 09:22:09','klien','::1','2019-03-29 09:22:09','::1','klien','0'),
 (36,47,'2019-03-29 09:35:45','klien','::1','2019-03-29 09:35:45','::1','klien','0'),
 (37,48,'2019-03-29 10:20:24','klien','::1','2019-03-29 10:20:24','::1','klien','0'),
 (38,49,'2019-03-29 10:55:27','klien','::1','2019-03-29 10:55:27','::1','klien','0'),
 (39,50,'2019-03-29 11:28:36','klien','::1','2019-03-29 11:28:36','::1','klien','0'),
 (40,51,'2019-03-29 14:13:12','klien','::1','2019-03-29 14:13:12','::1','klien','0'),
 (41,52,'2019-03-29 14:39:37','klien','::1','2019-03-29 14:39:37','::1','klien','0'),
 (42,53,'2019-03-29 14:48:49','klien','::1','2019-03-29 14:48:49','::1','klien','0'),
 (43,54,'2019-03-29 14:59:56','klien','::1','2019-03-29 14:59:56','::1','klien','0'),
 (44,55,'2019-03-29 15:10:40','klien','::1','2019-03-29 15:10:40','::1','klien','0'),
 (45,56,'2019-03-29 15:17:41','klien','::1','2019-03-29 15:17:41','::1','klien','0'),
 (46,57,'2019-03-29 15:33:53','klien','::1','2019-03-29 15:33:53','::1','klien','0'),
 (47,58,'2019-03-29 15:44:47','klien','::1','2019-03-29 15:44:47','::1','klien','0'),
 (48,60,'2019-03-29 16:14:32','klien','::1','2019-03-29 16:14:32','::1','klien','0'),
 (49,61,'2019-03-29 16:22:43','klien','::1','2019-03-29 16:22:43','::1','klien','0'),
 (50,62,'2019-03-29 16:49:53','klien','::1','2019-03-29 16:49:53','::1','klien','0'),
 (51,63,'2019-03-29 17:20:23','klien','::1','2019-03-29 17:20:23','::1','klien','0'),
 (52,64,'2019-03-29 17:33:53','klien','::1','2019-03-29 17:33:53','::1','klien','0'),
 (53,65,'2019-03-29 17:45:51','klien','::1','2019-03-29 17:45:51','::1','klien','0'),
 (54,66,'2019-03-29 17:55:03','klien','::1','2019-03-29 17:55:03','::1','klien','0'),
 (55,67,'2019-03-29 18:05:46','klien','::1','2019-03-29 18:05:46','::1','klien','0'),
 (56,68,'2019-03-29 18:32:54','klien','::1','2019-03-29 18:32:54','::1','klien','0'),
 (57,69,'2019-03-29 18:45:49','klien','::1','2019-03-29 18:45:49','::1','klien','0'),
 (58,70,'2019-03-29 18:55:25','klien','::1','2019-03-29 18:55:25','::1','klien','0'),
 (59,71,'2019-03-30 09:03:32','klien','::1','2019-03-30 09:03:32','::1','klien','0'),
 (60,73,'2019-03-30 09:38:41','klien','::1','2019-03-30 09:38:41','::1','klien','0'),
 (61,74,'2019-03-30 10:11:55','klien','::1','2019-03-30 10:11:55','::1','klien','0'),
 (62,75,'2019-03-30 10:21:28','klien','::1','2019-03-30 10:21:28','::1','klien','0'),
 (63,76,'2019-03-30 10:35:54','klien','::1','2019-03-30 10:35:54','::1','klien','0'),
 (64,77,'2019-03-30 10:50:12','klien','::1','2019-03-30 10:50:12','::1','klien','0'),
 (65,78,'2019-03-30 11:00:16','klien','::1','2019-03-30 11:00:16','::1','klien','0'),
 (66,79,'2019-03-30 11:13:13','klien','::1','2019-03-30 11:13:13','::1','klien','0'),
 (67,80,'2019-03-30 11:22:58','klien','::1','2019-03-30 11:22:58','::1','klien','0'),
 (68,81,'2019-03-30 11:32:33','klien','::1','2019-03-30 11:32:33','::1','klien','0'),
 (69,82,'2019-03-30 11:40:58','klien','::1','2019-03-30 11:40:58','::1','klien','0'),
 (70,83,'2019-03-30 12:03:20','klien','::1','2019-03-30 12:03:20','::1','klien','0'),
 (71,84,'2019-03-30 12:12:50','klien','::1','2019-03-30 12:12:50','::1','klien','0'),
 (72,85,'2019-03-30 12:22:24','klien','::1','2019-03-30 12:22:24','::1','klien','0'),
 (73,86,'2019-03-30 12:32:08','klien','::1','2019-03-30 12:32:08','::1','klien','0'),
 (74,87,'2019-03-30 12:43:00','klien','::1','2019-03-30 12:43:00','::1','klien','0'),
 (75,89,'2019-03-30 13:06:20','klien','::1','2019-03-30 13:06:20','::1','klien','0'),
 (76,91,'2019-03-30 13:20:06','klien','::1','2019-03-30 13:20:06','::1','klien','0');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contrato`
--

/*!40000 ALTER TABLE `contrato` DISABLE KEYS */;
INSERT INTO `contrato` (`IdContrato`,`CodTipoServicio`,`FechaInicio`,`FechaFin`,`IdCliente`,`CodTipoContrato`,`IdEmpresa`,`IdVehiculo`,`EstadoContrato`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`,`CodContrato`) VALUES 
 (24,'006015','2019-02-05 15:02:41','2020-02-05 15:02:41',21,'008019',1,10,'005011','2019-03-28 15:02:41','klien','::1','2019-03-28 15:02:41','klien','::1','0','20190328-1'),
 (25,'006015','2019-02-05 15:17:35','2020-02-05 15:17:35',22,'008020',1,11,'005011','2019-03-28 15:17:35','klien','::1','2019-03-28 15:17:35','klien','::1','0','20190328-25'),
 (26,'006015','2019-01-28 15:35:00','2020-01-28 15:35:00',23,'008019',1,12,'005011','2019-03-28 15:35:00','klien','::1','2019-03-28 15:35:00','klien','::1','0','20190328-26'),
 (27,'006015','2019-01-28 16:23:45','2020-01-28 16:23:45',24,'008019',1,13,'005011','2019-03-28 16:23:45','klien','::1','2019-03-28 16:23:45','klien','::1','0','20190328-27'),
 (28,'006015','2019-01-24 16:47:33','2020-01-24 16:47:33',26,'008019',1,14,'005011','2019-03-28 16:47:33','klien','::1','2019-03-28 16:47:33','klien','::1','0','20190328-28'),
 (29,'006015','2019-01-24 16:54:49','2020-01-24 16:54:49',26,'008019',1,15,'005011','2019-03-28 16:54:49','klien','::1','2019-03-28 16:54:49','klien','::1','0','20190328-29'),
 (30,'006015','2019-01-18 17:23:03','2020-01-18 17:23:03',27,'008019',1,16,'005011','2019-03-28 17:23:03','klien','::1','2019-03-28 17:23:03','klien','::1','0','20190328-30'),
 (31,'006015','2018-12-15 17:55:32','2019-12-15 17:55:32',28,'008019',1,17,'005011','2019-03-28 17:55:32','klien','::1','2019-03-28 17:55:32','klien','::1','0','20190328-31'),
 (32,'006015','2018-12-18 18:08:07','2019-12-18 18:08:07',29,'008020',1,18,'005011','2019-03-28 18:08:07','klien','::1','2019-03-28 18:08:07','klien','::1','0','20190328-32'),
 (33,'006015','2018-12-07 18:20:29','2019-12-07 18:20:29',30,'008019',1,19,'005011','2019-03-28 18:20:29','klien','::1','2019-03-28 18:20:29','klien','::1','0','20190328-33'),
 (34,'006015','2018-12-03 18:30:44','2019-12-03 18:30:44',31,'008019',1,20,'005011','2019-03-28 18:30:44','klien','::1','2019-03-28 18:30:44','klien','::1','0','20190328-34'),
 (35,'006015','2018-11-25 18:39:21','2019-11-25 18:39:21',32,'008019',1,21,'005011','2019-03-28 18:39:21','klien','::1','2019-03-28 18:39:21','klien','::1','0','20190328-35'),
 (36,'006013','2018-11-21 18:57:00','2019-11-21 18:57:00',33,'008020',1,23,'005011','2019-03-28 18:57:00','klien','::1','2019-03-28 18:57:00','klien','::1','0','20190328-36'),
 (37,'006015','2018-11-15 09:15:35','2019-11-15 09:15:35',34,'008019',1,24,'005011','2019-03-29 09:15:35','klien','::1','2019-03-29 09:15:35','klien','::1','0','20190329-37'),
 (38,'006015','2018-11-15 09:31:01','2019-11-15 09:31:01',35,'008019',1,25,'005011','2019-03-29 09:31:01','klien','::1','2019-03-29 09:31:01','klien','::1','0','20190329-38'),
 (39,'006015','2018-11-14 09:58:12','2019-11-14 09:58:12',30,'008020',1,26,'005011','2019-03-29 09:58:12','klien','::1','2019-03-29 09:58:12','klien','::1','0','20190329-39'),
 (40,'006015','2018-11-08 10:28:58','2019-11-08 10:28:58',37,'008019',1,27,'005011','2019-03-29 10:28:58','klien','::1','2019-03-29 10:28:58','klien','::1','0','20190329-40'),
 (41,'006015','2018-11-03 10:59:53','2019-11-03 10:59:53',38,'008019',1,28,'005011','2019-03-29 10:59:53','klien','::1','2019-03-29 10:59:53','klien','::1','0','20190329-41'),
 (42,'006015','2018-10-31 11:38:13','2019-10-31 11:38:13',39,'008019',1,29,'005011','2019-03-29 11:38:13','klien','::1','2019-03-29 11:38:13','klien','::1','0','20190329-42'),
 (43,'006015','2018-10-24 11:56:12','2019-10-24 11:56:12',29,'008020',1,30,'005011','2019-03-29 11:56:12','klien','::1','2019-03-29 11:56:12','klien','::1','0','20190329-43'),
 (44,'006015','2018-10-19 14:35:44','2019-10-19 14:35:44',40,'008019',1,31,'005011','2019-03-29 14:35:44','klien','::1','2019-03-29 14:35:44','klien','::1','0','20190329-44'),
 (45,'006015','2018-10-19 14:43:25','2019-10-19 14:43:25',41,'008019',1,32,'005011','2019-03-29 14:43:25','klien','::1','2019-03-29 14:43:25','klien','::1','0','20190329-45'),
 (46,'006015','2018-10-18 14:53:34','2019-10-18 14:53:34',42,'008019',1,33,'005011','2019-03-29 14:53:34','klien','::1','2019-03-29 14:53:34','klien','::1','0','20190329-46'),
 (47,'006015','2018-10-19 15:05:06','2019-10-19 15:05:06',43,'008019',1,34,'005011','2019-03-29 15:05:06','klien','::1','2019-03-29 15:05:06','klien','::1','0','20190329-47'),
 (48,'006015','2018-06-20 15:25:02','2019-06-15 15:25:02',45,'008019',1,36,'005011','2019-03-29 15:25:02','klien','::1','2019-03-29 15:25:02','klien','::1','0','20190329-48'),
 (49,'006015','2018-09-15 15:39:39','2019-09-15 15:39:39',46,'008019',1,37,'005010','2019-03-29 15:39:39','klien','::1','2019-03-29 15:39:39','klien','::1','0','20190329-49'),
 (50,'006015','2018-09-15 16:09:13','2019-09-15 16:09:13',47,'008019',1,38,'005011','2019-03-29 16:09:13','klien','::1','2019-03-29 16:09:13','klien','::1','0','20190329-50'),
 (51,'006015','2018-09-15 16:18:14','2019-09-15 16:18:14',48,'008019',1,39,'005010','2019-03-29 16:18:14','klien','::1','2019-03-29 16:18:14','klien','::1','0','20190329-51'),
 (52,'006015','2018-09-05 16:27:21','2019-09-05 16:27:21',49,'008019',1,40,'005010','2019-03-29 16:27:21','klien','::1','2019-03-29 16:27:21','klien','::1','0','20190329-52'),
 (53,'006015','2018-09-04 16:44:31','2019-09-04 16:44:31',25,'008019',1,41,'005010','2019-03-29 16:44:31','klien','::1','2019-03-29 16:44:31','klien','::1','0','20190329-53'),
 (54,'006015','2018-08-29 16:54:16','2019-08-29 16:54:16',50,'008019',1,42,'005011','2019-03-29 16:54:16','klien','::1','2019-03-29 16:54:16','klien','::1','0','20190329-54'),
 (55,'006015','2018-08-28 17:28:03','2019-08-28 17:28:03',51,'008019',1,43,'005011','2019-03-29 17:28:03','klien','::1','2019-03-29 17:28:03','klien','::1','0','20190329-55'),
 (56,'006015','2018-08-27 17:40:31','2019-08-27 17:40:31',52,'008020',1,44,'005011','2019-03-29 17:40:31','klien','::1','2019-03-29 17:40:31','klien','::1','0','20190329-56'),
 (57,'006015','2018-08-23 17:50:52','2019-08-23 17:50:52',53,'008019',1,45,'005010','2019-03-29 17:50:52','klien','::1','2019-03-29 17:50:52','klien','::1','0','20190329-57'),
 (58,'006015','2018-08-23 18:00:13','2019-08-23 18:00:13',54,'008019',1,46,'005011','2019-03-29 18:00:13','klien','::1','2019-03-29 18:00:13','klien','::1','0','20190329-58'),
 (59,'006015','2018-08-22 18:10:22','2019-08-22 18:10:22',55,'008019',1,47,'005011','2019-03-29 18:10:22','klien','::1','2019-03-29 18:10:22','klien','::1','0','20190329-59'),
 (60,'006015','2018-08-09 18:39:56','2019-08-09 18:39:56',56,'008019',1,48,'005011','2019-03-29 18:39:56','klien','::1','2019-03-29 18:39:56','klien','::1','0','20190329-60'),
 (61,'006015','2018-07-27 18:50:05','2019-07-27 18:50:05',57,'008019',1,49,'005011','2019-03-29 18:50:05','klien','::1','2019-03-29 18:50:05','klien','::1','0','20190329-61'),
 (62,'006015','2018-07-23 09:31:54','2019-07-23 09:31:54',23,'008019',1,50,'005011','2019-03-30 09:31:54','klien','::1','2019-03-30 09:31:54','klien','::1','0','20190330-62'),
 (63,'006015','2018-07-02 09:49:52','2019-07-02 09:49:52',23,'008019',1,51,'005011','2019-03-30 09:49:52','klien','::1','2019-03-30 09:49:52','klien','::1','0','20190330-63'),
 (64,'006015','2018-06-23 10:16:41','2019-06-23 10:16:41',61,'008019',1,52,'005010','2019-03-30 10:16:41','klien','::1','2019-03-30 10:16:41','klien','::1','0','20190330-64'),
 (65,'006015','2018-06-23 10:29:18','2019-06-23 10:29:18',62,'008019',1,53,'005011','2019-03-30 10:29:18','klien','::1','2019-03-30 10:29:18','klien','::1','0','20190330-65'),
 (66,'006015','2018-06-23 10:42:44','2019-06-23 10:42:44',63,'008019',1,54,'005010','2019-03-30 10:42:44','klien','::1','2019-03-30 10:42:44','klien','::1','0','20190330-66'),
 (67,'006015','2018-06-21 10:54:53','2019-06-21 10:54:53',64,'008019',1,55,'005010','2019-03-30 10:54:53','klien','::1','2019-03-30 10:54:53','klien','::1','0','20190330-67'),
 (68,'006015','2018-02-20 11:05:31','2019-02-20 11:05:31',65,'008019',1,56,'005011','2019-03-30 11:05:31','klien','::1','2019-03-30 11:05:31','klien','::1','0','20190330-68'),
 (69,'006015','2018-02-14 11:19:12','2019-02-14 11:19:12',66,'008019',1,57,'005011','2019-03-30 11:19:12','klien','::1','2019-03-30 11:19:12','klien','::1','0','20190330-69'),
 (70,'006015','2018-02-14 11:27:49','2018-02-14 11:27:49',67,'008019',1,58,'005011','2019-03-30 11:27:49','klien','::1','2019-03-30 11:27:49','klien','::1','0','20190330-70'),
 (71,'006015','2018-02-14 11:57:05','2018-02-14 11:57:05',68,'008019',1,59,'005011','2019-03-30 11:57:05','klien','::1','2019-03-30 11:57:05','klien','::1','0','20190330-71'),
 (72,'006015','2018-02-13 12:08:11','2019-02-13 12:08:11',70,'008019',1,60,'005011','2019-03-30 12:08:11','klien','::1','2019-03-30 12:08:11','klien','::1','0','20190330-72'),
 (73,'006015','2018-02-12 12:17:03','2019-02-12 12:17:03',71,'008019',1,61,'005011','2019-03-30 12:17:03','klien','::1','2019-03-30 12:17:03','klien','::1','0','20190330-73'),
 (74,'006015','2018-02-09 12:27:06','2019-02-09 12:27:06',72,'008019',1,62,'005011','2019-03-30 12:27:06','klien','::1','2019-03-30 12:27:06','klien','::1','0','20190330-74'),
 (75,'006015','2018-02-06 12:39:06','2019-02-06 12:39:06',73,'008019',1,63,'005011','2019-03-30 12:39:06','klien','::1','2019-03-30 12:39:06','klien','::1','0','20190330-75'),
 (76,'006015','2018-02-06 12:58:48','2019-02-06 12:58:48',74,'008019',1,64,'005011','2019-03-30 12:58:48','klien','::1','2019-03-30 12:58:48','klien','::1','0','20190330-76'),
 (77,'006015','2018-02-06 13:15:34','2019-02-06 13:15:34',75,'008019',1,65,'005011','2019-03-30 13:15:34','klien','::1','2019-03-30 13:15:34','klien','::1','0','20190330-77'),
 (78,'006015','2018-02-02 13:24:29','2019-02-02 13:24:29',76,'008019',1,66,'005011','2019-03-30 13:24:29','klien','::1','2019-03-30 13:24:29','klien','::1','0','20190330-78');
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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contrato_anexo`
--

/*!40000 ALTER TABLE `contrato_anexo` DISABLE KEYS */;
INSERT INTO `contrato_anexo` (`IdContratoAnexo`,`IdContrato`,`CodDocumentoAnexo`,`RutaDocumento`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`) VALUES 
 (30,24,'007016','','2019-03-28 15:02:41','klien','::1','2019-03-28 15:02:41','klien','::1','0'),
 (31,25,'007016','','2019-03-28 15:17:35','klien','::1','2019-03-28 15:17:35','klien','::1','0'),
 (32,26,'007016','','2019-03-28 15:35:00','klien','::1','2019-03-28 15:35:00','klien','::1','0'),
 (33,27,'007016','','2019-03-28 16:23:45','klien','::1','2019-03-28 16:23:45','klien','::1','0'),
 (34,28,'007016','','2019-03-28 16:47:33','klien','::1','2019-03-28 16:47:33','klien','::1','0'),
 (35,29,'007016','','2019-03-28 16:54:49','klien','::1','2019-03-28 16:54:49','klien','::1','0'),
 (36,30,'007016','','2019-03-28 17:23:03','klien','::1','2019-03-28 17:23:03','klien','::1','0'),
 (37,31,'007016','','2019-03-28 17:55:32','klien','::1','2019-03-28 17:55:32','klien','::1','0'),
 (38,32,'007016','','2019-03-28 18:08:08','klien','::1','2019-03-28 18:08:08','klien','::1','0'),
 (39,33,'007016','','2019-03-28 18:20:29','klien','::1','2019-03-28 18:20:29','klien','::1','0'),
 (40,34,'007016','','2019-03-28 18:30:44','klien','::1','2019-03-28 18:30:44','klien','::1','0'),
 (41,35,'007016','','2019-03-28 18:39:21','klien','::1','2019-03-28 18:39:21','klien','::1','0'),
 (42,36,'007016','','2019-03-28 18:57:00','klien','::1','2019-03-28 18:57:00','klien','::1','0'),
 (43,37,'007016','','2019-03-29 09:15:35','klien','::1','2019-03-29 09:15:35','klien','::1','0'),
 (44,38,'007016','','2019-03-29 09:31:01','klien','::1','2019-03-29 09:31:01','klien','::1','0'),
 (45,39,'007016','','2019-03-29 09:58:12','klien','::1','2019-03-29 09:58:12','klien','::1','0'),
 (46,40,'007016','','2019-03-29 10:28:58','klien','::1','2019-03-29 10:28:58','klien','::1','0'),
 (47,41,'007016','','2019-03-29 10:59:54','klien','::1','2019-03-29 10:59:54','klien','::1','0'),
 (48,42,'007016','','2019-03-29 11:38:13','klien','::1','2019-03-29 11:38:13','klien','::1','0'),
 (49,43,'007016','','2019-03-29 11:56:12','klien','::1','2019-03-29 11:56:12','klien','::1','0'),
 (50,44,'007016','','2019-03-29 14:35:44','klien','::1','2019-03-29 14:35:44','klien','::1','0'),
 (51,45,'007016','','2019-03-29 14:43:25','klien','::1','2019-03-29 14:43:25','klien','::1','0'),
 (52,46,'007016','','2019-03-29 14:53:34','klien','::1','2019-03-29 14:53:34','klien','::1','0'),
 (53,47,'007016','','2019-03-29 15:05:06','klien','::1','2019-03-29 15:05:06','klien','::1','0'),
 (54,48,'007016','','2019-03-29 15:25:02','klien','::1','2019-03-29 15:25:02','klien','::1','0'),
 (55,49,'007016','','2019-03-29 15:39:39','klien','::1','2019-03-29 15:39:39','klien','::1','0'),
 (56,50,'007016','','2019-03-29 16:09:13','klien','::1','2019-03-29 16:09:13','klien','::1','0'),
 (57,51,'007016','','2019-03-29 16:18:14','klien','::1','2019-03-29 16:18:14','klien','::1','0'),
 (58,52,'007016','','2019-03-29 16:27:21','klien','::1','2019-03-29 16:27:21','klien','::1','0'),
 (59,53,'007016','','2019-03-29 16:44:31','klien','::1','2019-03-29 16:44:31','klien','::1','0'),
 (60,54,'007016','','2019-03-29 16:54:16','klien','::1','2019-03-29 16:54:16','klien','::1','0'),
 (61,55,'007016','','2019-03-29 17:28:03','klien','::1','2019-03-29 17:28:03','klien','::1','0'),
 (62,56,'007016','','2019-03-29 17:40:31','klien','::1','2019-03-29 17:40:31','klien','::1','0'),
 (63,57,'007016','','2019-03-29 17:50:52','klien','::1','2019-03-29 17:50:52','klien','::1','0'),
 (64,58,'007016','','2019-03-29 18:00:13','klien','::1','2019-03-29 18:00:13','klien','::1','0'),
 (65,59,'007016','','2019-03-29 18:10:22','klien','::1','2019-03-29 18:10:22','klien','::1','0'),
 (66,60,'007016','','2019-03-29 18:39:56','klien','::1','2019-03-29 18:39:56','klien','::1','0'),
 (67,61,'007016','','2019-03-29 18:50:05','klien','::1','2019-03-29 18:50:05','klien','::1','0'),
 (68,62,'007016','','2019-03-30 09:31:54','klien','::1','2019-03-30 09:31:54','klien','::1','0'),
 (69,63,'007016','','2019-03-30 09:49:52','klien','::1','2019-03-30 09:49:52','klien','::1','0'),
 (70,64,'007016','','2019-03-30 10:16:41','klien','::1','2019-03-30 10:16:41','klien','::1','0'),
 (71,65,'007016','','2019-03-30 10:29:18','klien','::1','2019-03-30 10:29:18','klien','::1','0'),
 (72,66,'007016','','2019-03-30 10:42:44','klien','::1','2019-03-30 10:42:44','klien','::1','0'),
 (73,67,'007016','','2019-03-30 10:54:53','klien','::1','2019-03-30 10:54:53','klien','::1','0'),
 (74,68,'007016','','2019-03-30 11:05:31','klien','::1','2019-03-30 11:05:31','klien','::1','0'),
 (75,69,'007016','','2019-03-30 11:19:12','klien','::1','2019-03-30 11:19:12','klien','::1','0'),
 (76,70,'007016','','2019-03-30 11:27:49','klien','::1','2019-03-30 11:27:49','klien','::1','0'),
 (77,71,'007016','','2019-03-30 11:57:05','klien','::1','2019-03-30 11:57:05','klien','::1','0'),
 (78,72,'007016','','2019-03-30 12:08:11','klien','::1','2019-03-30 12:08:11','klien','::1','0'),
 (79,73,'007016','','2019-03-30 12:17:03','klien','::1','2019-03-30 12:17:03','klien','::1','0'),
 (80,74,'007016','','2019-03-30 12:27:06','klien','::1','2019-03-30 12:27:06','klien','::1','0'),
 (81,75,'007016','','2019-03-30 12:39:06','klien','::1','2019-03-30 12:39:06','klien','::1','0'),
 (82,76,'007016','','2019-03-30 12:58:48','klien','::1','2019-03-30 12:58:48','klien','::1','0'),
 (83,77,'007016','','2019-03-30 13:15:34','klien','::1','2019-03-30 13:15:34','klien','::1','0'),
 (84,78,'007016','','2019-03-30 13:24:29','klien','::1','2019-03-30 13:24:29','klien','::1','0');
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
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contrato_ordenes`
--

/*!40000 ALTER TABLE `contrato_ordenes` DISABLE KEYS */;
INSERT INTO `contrato_ordenes` (`IdContratoOrdenes`,`IdContrato`,`IdOrden`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`WksMod`,`UsrMod`,`FlgEli`) VALUES 
 (23,24,43,'2019-03-28 15:02:41','klien','::1','2019-03-28 15:02:41','::1','klien','0'),
 (24,25,44,'2019-03-28 15:17:35','klien','::1','2019-03-28 15:17:35','::1','klien','0'),
 (25,26,45,'2019-03-28 15:35:00','klien','::1','2019-03-28 15:35:00','::1','klien','0'),
 (26,27,46,'2019-03-28 16:23:45','klien','::1','2019-03-28 16:23:45','::1','klien','0'),
 (27,28,47,'2019-03-28 16:47:33','klien','::1','2019-03-28 16:47:33','::1','klien','0'),
 (28,29,48,'2019-03-28 16:54:49','klien','::1','2019-03-28 16:54:49','::1','klien','0'),
 (29,30,49,'2019-03-28 17:23:03','klien','::1','2019-03-28 17:23:03','::1','klien','0'),
 (30,31,50,'2019-03-28 17:55:32','klien','::1','2019-03-28 17:55:32','::1','klien','0'),
 (31,32,51,'2019-03-28 18:08:08','klien','::1','2019-03-28 18:08:08','::1','klien','0'),
 (32,33,52,'2019-03-28 18:20:29','klien','::1','2019-03-28 18:20:29','::1','klien','0'),
 (33,34,53,'2019-03-28 18:30:44','klien','::1','2019-03-28 18:30:44','::1','klien','0'),
 (34,35,54,'2019-03-28 18:39:21','klien','::1','2019-03-28 18:39:21','::1','klien','0'),
 (35,36,55,'2019-03-28 18:57:00','klien','::1','2019-03-28 18:57:00','::1','klien','0'),
 (36,37,56,'2019-03-29 09:15:35','klien','::1','2019-03-29 09:15:35','::1','klien','0'),
 (37,38,57,'2019-03-29 09:31:01','klien','::1','2019-03-29 09:31:01','::1','klien','0'),
 (38,39,58,'2019-03-29 09:58:12','klien','::1','2019-03-29 09:58:12','::1','klien','0'),
 (39,40,59,'2019-03-29 10:28:58','klien','::1','2019-03-29 10:28:58','::1','klien','0'),
 (40,41,60,'2019-03-29 10:59:53','klien','::1','2019-03-29 10:59:53','::1','klien','0'),
 (41,42,61,'2019-03-29 11:38:13','klien','::1','2019-03-29 11:38:13','::1','klien','0'),
 (42,43,62,'2019-03-29 11:56:12','klien','::1','2019-03-29 11:56:12','::1','klien','0'),
 (43,44,63,'2019-03-29 14:35:44','klien','::1','2019-03-29 14:35:44','::1','klien','0'),
 (44,45,64,'2019-03-29 14:43:25','klien','::1','2019-03-29 14:43:25','::1','klien','0'),
 (45,46,65,'2019-03-29 14:53:34','klien','::1','2019-03-29 14:53:34','::1','klien','0'),
 (46,47,66,'2019-03-29 15:05:06','klien','::1','2019-03-29 15:05:06','::1','klien','0'),
 (47,48,68,'2019-03-29 15:25:02','klien','::1','2019-03-29 15:25:02','::1','klien','0'),
 (48,49,69,'2019-03-29 15:39:39','klien','::1','2019-03-29 15:39:39','::1','klien','0'),
 (49,50,70,'2019-03-29 16:09:13','klien','::1','2019-03-29 16:09:13','::1','klien','0'),
 (50,51,71,'2019-03-29 16:18:14','klien','::1','2019-03-29 16:18:14','::1','klien','0'),
 (51,52,72,'2019-03-29 16:27:21','klien','::1','2019-03-29 16:27:21','::1','klien','0'),
 (52,53,73,'2019-03-29 16:44:31','klien','::1','2019-03-29 16:44:31','::1','klien','0'),
 (53,54,74,'2019-03-29 16:54:16','klien','::1','2019-03-29 16:54:16','::1','klien','0'),
 (54,55,75,'2019-03-29 17:28:03','klien','::1','2019-03-29 17:28:03','::1','klien','0'),
 (55,56,76,'2019-03-29 17:40:31','klien','::1','2019-03-29 17:40:31','::1','klien','0'),
 (56,57,77,'2019-03-29 17:50:52','klien','::1','2019-03-29 17:50:52','::1','klien','0'),
 (57,58,78,'2019-03-29 18:00:13','klien','::1','2019-03-29 18:00:13','::1','klien','0'),
 (58,59,79,'2019-03-29 18:10:22','klien','::1','2019-03-29 18:10:22','::1','klien','0'),
 (59,60,80,'2019-03-29 18:39:56','klien','::1','2019-03-29 18:39:56','::1','klien','0'),
 (60,61,81,'2019-03-29 18:50:05','klien','::1','2019-03-29 18:50:05','::1','klien','0'),
 (61,62,82,'2019-03-30 09:31:54','klien','::1','2019-03-30 09:31:54','::1','klien','0'),
 (62,63,83,'2019-03-30 09:49:52','klien','::1','2019-03-30 09:49:52','::1','klien','0'),
 (63,64,84,'2019-03-30 10:16:41','klien','::1','2019-03-30 10:16:41','::1','klien','0'),
 (64,65,85,'2019-03-30 10:29:18','klien','::1','2019-03-30 10:29:18','::1','klien','0'),
 (65,66,86,'2019-03-30 10:42:44','klien','::1','2019-03-30 10:42:44','::1','klien','0'),
 (66,67,87,'2019-03-30 10:54:53','klien','::1','2019-03-30 10:54:53','::1','klien','0'),
 (67,68,88,'2019-03-30 11:05:31','klien','::1','2019-03-30 11:05:31','::1','klien','0'),
 (68,69,89,'2019-03-30 11:19:12','klien','::1','2019-03-30 11:19:12','::1','klien','0'),
 (69,70,90,'2019-03-30 11:27:49','klien','::1','2019-03-30 11:27:49','::1','klien','0'),
 (70,71,91,'2019-03-30 11:57:05','klien','::1','2019-03-30 11:57:05','::1','klien','0'),
 (71,72,92,'2019-03-30 12:08:11','klien','::1','2019-03-30 12:08:11','::1','klien','0'),
 (72,73,93,'2019-03-30 12:17:03','klien','::1','2019-03-30 12:17:03','::1','klien','0'),
 (73,74,94,'2019-03-30 12:27:06','klien','::1','2019-03-30 12:27:06','::1','klien','0'),
 (74,75,95,'2019-03-30 12:39:06','klien','::1','2019-03-30 12:39:06','::1','klien','0'),
 (75,76,96,'2019-03-30 12:58:48','klien','::1','2019-03-30 12:58:48','::1','klien','0'),
 (76,77,97,'2019-03-30 13:15:34','klien','::1','2019-03-30 13:15:34','::1','klien','0'),
 (77,78,98,'2019-03-30 13:24:29','klien','::1','2019-03-30 13:24:29','::1','klien','0');
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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dispositivos`
--

/*!40000 ALTER TABLE `dispositivos` DISABLE KEYS */;
INSERT INTO `dispositivos` (`IdDispositivo`,`Serie`,`IMEI`,`IdModelo`,`NroSim`,`NroIDN`,`IdEmpresa`,`fchcrea`,`usrcrea`,`fchmod`,`usrmod`,`flgeli`) VALUES 
 (14,'AFN0001','867162035870153',11,'+51970511648','67162035870153',1,'2019-03-28 14:55:25','klien','2019-03-28 15:01:11','klien','0'),
 (15,'ANF0002','69013024243209',11,'+51922922182','69013024243209',1,'2019-03-28 15:10:40','klien','2019-03-28 15:16:15','klien','0'),
 (16,'AFN0003','67162035869908',11,'+51923762265','67162035869908',1,'2019-03-28 15:32:26','klien','2019-03-28 15:33:53','klien','0'),
 (17,'AFN0004','67162035843325',11,'+51954831603','67162035843325',1,'2019-03-28 16:18:49','klien','2019-03-28 16:21:00','klien','0'),
 (18,'AFN0005','67162035782671',11,'+51923173782','67162035782671',1,'2019-03-28 16:40:47','klien','2019-03-28 16:44:22','klien','0'),
 (19,'AFN0006','67162035782333',11,'+51922683539','67162035782333',1,'2019-03-28 16:51:04','klien','2019-03-28 16:53:59','klien','0'),
 (20,'AFN0007','67162035782416',11,'+51934947341','67162035782416',1,'2019-03-28 17:18:16','klien','2019-03-28 17:21:23','klien','0'),
 (21,'AFN0008','67162036091379',11,'+51936038621','67162036091379',1,'2019-03-28 17:51:51','klien','2019-03-28 17:54:22','klien','0'),
 (22,'AFN0009','67162035786044',11,'+51960797889','67162035786044',1,'2019-03-28 18:01:14','klien','2019-03-28 18:07:02','klien','0'),
 (23,'AFN0010','67162036022283',11,'+51934637112','67162036022283',1,'2019-03-28 18:16:35','klien','2019-03-28 18:19:34','klien','0'),
 (24,'AFN0011','63977032135043',11,'+51947247853','63977032135043',1,'2019-03-28 18:26:16','klien','2019-03-28 18:29:50','klien','0'),
 (25,'AFN0012','67162035898584',11,'+51936210483','67162035898584',1,'2019-03-28 18:36:13','klien','2019-03-28 18:38:38','klien','0'),
 (26,'AFN0013','63977032006384',11,'+51972088825','63977032006384',1,'2019-03-28 18:42:59','klien','2019-03-28 18:55:22','klien','0'),
 (27,'AFN0014','67162036022135',11,'+51922203496','67162036022135',1,'2019-03-29 09:11:07','klien','2019-03-29 09:14:47','klien','0'),
 (28,'AFN0015','67162036177632',11,'+51951725447','67162036177632',1,'2019-03-29 09:23:05','klien','2019-03-29 09:29:40','klien','0'),
 (29,'AFN0016','63977032009339',11,'+51970485340','63977032009339',1,'2019-03-29 09:53:52','klien','2019-03-29 09:57:19','klien','0'),
 (30,'AFN0017','63977032014560',11,'+51933886237','63977032014560',1,'2019-03-29 10:25:13','klien','2019-03-29 10:28:00','klien','0'),
 (31,'AFN0018','67162035843465',11,'+51924460436','67162035843465',1,'2019-03-29 10:56:45','klien','2019-03-29 10:58:54','klien','0'),
 (32,'AFN0019','67162035782978',11,'+51912001643','67162035782978',1,'2019-03-29 11:29:33','klien','2019-03-29 11:37:26','klien','0'),
 (33,'AFN0020','69013024271127',11,'+51946138638','69013024271127',1,'2019-03-29 11:48:46','klien','2019-03-29 11:55:18','klien','0'),
 (34,'AFN0021','67162036022705',11,'+51977529400','67162036022705',1,'2019-03-29 14:13:52','klien','2019-03-29 14:34:00','klien','0'),
 (35,'AFN0022','67162035898402',11,'+51924195364','67162035898402',1,'2019-03-29 14:40:38','klien','2019-03-29 14:42:45','klien','0'),
 (36,'AFN0023','67162036021145',11,'+51983509584','67162036021145',1,'2019-03-29 14:49:46','klien','2019-03-29 14:52:30','klien','0'),
 (37,'AFN0024','67162036022689',11,'+51946072941','67162036022689',1,'2019-03-29 15:00:55','klien','2019-03-29 15:04:11','klien','0'),
 (38,'AFN0025','67162035870278',11,'+51994090882','67162035870278',1,'2019-03-29 15:11:05','klien','2019-03-29 15:14:50','klien','0'),
 (39,'AFN0026','67162036022820',11,'+51923550652','67162036022820',1,'2019-03-29 15:18:49','klien','2019-03-29 15:21:08','klien','0'),
 (40,'AFN0027','67162036026259',11,'+51926771159','67162036026259',1,'2019-03-29 15:35:05','klien','2019-03-29 15:38:47','klien','0'),
 (41,'AFN0028','67162035869163',11,'+51926869251','67162035869163',1,'2019-03-29 15:45:45','klien','2019-03-29 16:08:14','klien','0'),
 (42,'AFN0029','67162036022218',11,'+51933644929','67162036022218',1,'2019-03-29 16:15:16','klien','2019-03-29 16:17:26','klien','0'),
 (43,'AFN0030','67162035870435',11,'+51912393585','67162035870435',1,'2019-03-29 16:23:19','klien','2019-03-29 16:35:26','klien','0'),
 (44,'AFN0031','67162035844729',11,'+51912391248','67162035844729',1,'2019-03-29 16:38:38','klien','2019-03-29 16:43:24','klien','0'),
 (45,'AFN0032','67162036051407',11,'+51926998034','67162036051407',1,'2019-03-29 16:51:20','klien','2019-03-29 16:53:23','klien','0'),
 (46,'AFN0033','67162035869999',11,'+51934342650','67162035869999',1,'2019-03-29 17:21:12','klien','2019-03-29 17:25:00','klien','0'),
 (47,'AFN0034','69013024220033',11,'+51963966154','69013024220033',1,'2019-03-29 17:35:06','klien','2019-03-29 17:38:12','klien','0'),
 (48,'AFN0035','67162035876440',11,'+51924184753','67162035876440',1,'2019-03-29 17:47:05','klien','2019-03-29 17:50:10','klien','0'),
 (49,'AFN0036','67162035870021',11,'+51937293306','67162035870021',1,'2019-03-29 17:56:33','klien','2019-03-29 17:59:15','klien','0'),
 (50,'AFN0037','67162036035806',11,'+51936358960','67162036035806',1,'2019-03-29 18:06:50','klien','2019-03-29 18:09:35','klien','0'),
 (51,'AFN0038','67162036176428',11,'+51933229672','67162036176428',1,'2019-03-29 18:33:54','klien','2019-03-29 18:39:05','klien','0'),
 (52,'AFN0039','67162035870047',11,'+51936125613','67162035870047',1,'2019-03-29 18:46:17','klien','2019-03-29 18:49:16','klien','0'),
 (53,'AFN0040','67162035807353',11,'+51922310609','67162035807353',1,'2019-03-30 09:26:19','klien','2019-03-30 09:30:46','klien','0'),
 (54,'AFN0041','67162035858836',11,'+51970783638','67162035858836',1,'2019-03-30 09:45:39','klien','2019-03-30 09:48:42','klien','0'),
 (55,'AFN0042','67162035807197',11,'+51934989776','67162035807197',1,'2019-03-30 10:12:44','klien','2019-03-30 10:15:47','klien','0'),
 (56,'AFN0043','63977032089265',11,'+51936103720','63977032089265',1,'2019-03-30 10:23:36','klien','2019-03-30 10:27:32','klien','0'),
 (57,'AFN0044','67162036028769',11,'+51936444089','67162036028769',1,'2019-03-30 10:37:14','klien','2019-03-30 10:45:32','klien','0'),
 (58,'AFN0045','63162035782556',11,'+51960969792','63162035782556',1,'2019-03-30 10:50:56','klien','2019-03-30 10:53:35','klien','0'),
 (59,'AFN0046','63977032006269',11,'+51924330053','63977032006269',1,'2019-03-30 11:01:35','klien','2019-03-30 11:04:42','klien','0'),
 (60,'AFN0047','63977032018256',11,'+51960232038','63977032018256',1,'2019-03-30 11:14:16','klien','2019-03-30 11:18:11','klien','0'),
 (61,'AFN0048','63977032049400',11,'+51977483404','63977032049400',1,'2019-03-30 11:24:29','klien','2019-03-30 11:26:16','klien','0'),
 (62,'AFN0049','63977032055449',11,'+51922728494','63977032055449',1,'2019-03-30 11:33:18','klien','2019-03-30 11:53:33','klien','0'),
 (63,'AFN290817090','63977032014297',11,'+51914547959','63977032014297',1,'2019-03-30 12:03:51','klien','2019-03-30 12:05:56','klien','0'),
 (64,'AFN290817089','63977032079720',11,'+51913263906','63977032079720',1,'2019-03-30 12:13:25','klien','2019-03-30 12:16:12','klien','0'),
 (65,'AFN290817085','63977032023926',11,'+51923038874','63977032023926',1,'2019-03-30 12:23:16','klien','2019-03-30 12:25:43','klien','0'),
 (66,'AFN290817079','63977032038718',11,'+51946484945','63977032038718',1,'2019-03-30 12:34:05','klien','2019-03-30 12:36:28','klien','0'),
 (67,'AFN290817078','63977032078268',11,'+51936624834','63977032078268',1,'2019-03-30 12:45:32','klien','2019-03-30 12:55:49','klien','0'),
 (68,'AFN290817077','63977032104833',11,'+51936562945','63977032104833',1,'2019-03-30 13:07:21','klien','2019-03-30 13:12:14','klien','0'),
 (69,'AFN290817076','63977032010584',11,'+51963337217','63977032010584',1,'2019-03-30 13:21:30','klien','2019-03-30 13:23:37','klien','0');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marca`
--

/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` (`IdMarca`,`Descripcion`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`,`FchCrea`) VALUES 
 (10,'ARIFE','klien','::1','2019-03-28 14:31:40','klien','::1','0','2019-03-28 14:31:40');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mecanico`
--

/*!40000 ALTER TABLE `mecanico` DISABLE KEYS */;
INSERT INTO `mecanico` (`IdActor`,`IdMecanico`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`) VALUES 
 (32,4,'2019-03-28 14:57:31','klien','::1','2019-03-29 15:41:34','klien','::1','0'),
 (59,5,'2019-03-29 16:06:28','klien','::1','2019-03-29 16:06:28','klien','::1','0'),
 (72,6,'2019-03-30 09:13:33','klien','::1','2019-03-30 09:13:33','klien','::1','0'),
 (88,7,'2019-03-30 12:54:41','klien','::1','2019-03-30 12:54:41','klien','::1','0'),
 (90,8,'2019-03-30 13:11:08','klien','::1','2019-03-30 13:14:37','klien','::1','1');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modelo`
--

/*!40000 ALTER TABLE `modelo` DISABLE KEYS */;
INSERT INTO `modelo` (`IdModelo`,`Descripcion`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`,`FotoReferencial`,`IdMarca`) VALUES 
 (11,'GT08','2019-03-28 14:32:17','klien','::1','2019-03-28 14:32:17','klien','::1','0','',10);
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
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordentrabajo`
--

/*!40000 ALTER TABLE `ordentrabajo` DISABLE KEYS */;
INSERT INTO `ordentrabajo` (`IdOrden`,`IdEmpresa`,`IdMecanico`,`IdCliente`,`IdVehiculo`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`,`EstadoOrden`,`Obsvacion`,`FechaRegistro`,`FechaProgramada`,`FechaEjecutada`,`IdTaller`,`FechaFin`) VALUES 
 (43,1,4,21,10,'2019-03-28 15:01:11','klien','::1','2019-03-28 15:01:11','klien','::1','0','005011','NUEVA INSTALACION','2019-03-28 15:01:11','2019-01-31 00:00:00','2019-01-31 00:00:00',3,'2019-01-31 00:00:00'),
 (44,1,4,22,11,'2019-03-28 15:16:15','klien','::1','2019-03-28 15:16:15','klien','::1','0','005011','RENOVACION DE GPS','2019-03-28 15:16:15','2019-01-31 00:00:00','2019-02-05 00:00:00',3,'2019-02-05 00:00:00'),
 (45,1,4,23,12,'2019-03-28 15:33:53','klien','::1','2019-03-28 15:33:53','klien','::1','0','005011','','2019-03-28 15:33:53','2019-01-28 00:00:00','2019-01-28 00:00:00',3,'2019-01-28 00:00:00'),
 (46,1,4,24,13,'2019-03-28 16:21:00','klien','::1','2019-03-28 16:21:00','klien','::1','0','005011','','2019-03-28 16:21:00','2019-01-28 00:00:00','2019-01-28 00:00:00',3,'2019-01-28 00:00:00'),
 (47,1,4,26,14,'2019-03-28 16:44:22','klien','::1','2019-03-28 16:44:22','klien','::1','0','005011','NUEVA INSTALACION','2019-03-28 16:44:22','2019-01-24 00:00:00','2019-01-24 00:00:00',3,'2019-01-24 00:00:00'),
 (48,1,4,26,15,'2019-03-28 16:53:59','klien','::1','2019-03-28 16:53:59','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-28 16:53:59','2019-01-24 00:00:00','2019-01-24 00:00:00',3,'2019-01-24 00:00:00'),
 (49,1,4,27,16,'2019-03-28 17:21:23','klien','::1','2019-03-28 17:21:23','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-28 17:21:23','2019-01-18 00:00:00','2019-01-18 00:00:00',3,'2019-01-18 00:00:00'),
 (50,1,4,28,17,'2019-03-28 17:54:22','klien','::1','2019-03-28 17:54:22','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-28 17:54:22','2018-12-15 00:00:00','2018-12-15 00:00:00',3,'2018-12-15 00:00:00'),
 (51,1,4,29,18,'2019-03-28 18:07:02','klien','::1','2019-03-28 18:07:02','klien','::1','0','005011','RENOVACION GPS','2019-03-28 18:07:02','2018-12-18 00:00:00','2018-12-18 00:00:00',3,'2018-12-18 00:00:00'),
 (52,1,4,30,19,'2019-03-28 18:19:34','klien','::1','2019-03-28 18:19:34','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-28 18:19:34','2018-12-07 00:00:00','2018-12-07 00:00:00',3,'2018-12-07 00:00:00'),
 (53,1,4,31,20,'2019-03-28 18:29:50','klien','::1','2019-03-28 18:29:50','klien','::1','0','005011','NUEVA INSTALACION','2019-03-28 18:29:50','2018-12-03 00:00:00','2018-12-03 00:00:00',3,'2018-12-03 00:00:00'),
 (54,1,4,32,21,'2019-03-28 18:38:38','klien','::1','2019-03-28 18:38:38','klien','::1','0','005011','NUEVA INSTALACION','2019-03-28 18:38:38','2018-11-25 00:00:00','2018-11-25 00:00:00',3,'2018-11-25 00:00:00'),
 (55,1,4,33,23,'2019-03-28 18:55:22','klien','::1','2019-03-28 18:55:22','klien','::1','0','005011','RENOVACION','2019-03-28 18:55:22','2018-11-21 00:00:00','2019-11-21 00:00:00',3,'2018-11-21 00:00:00'),
 (56,1,4,34,24,'2019-03-29 09:14:47','klien','::1','2019-03-29 09:14:47','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 09:14:47','2018-11-15 00:00:00','2018-11-15 00:00:00',3,'2018-11-15 00:00:00'),
 (57,1,4,35,25,'2019-03-29 09:29:40','klien','::1','2019-03-29 09:29:40','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 09:29:40','2018-11-15 00:00:00','2018-11-15 00:00:00',3,'2018-11-15 00:00:00'),
 (58,1,4,30,26,'2019-03-29 09:57:19','klien','::1','2019-03-29 09:57:19','klien','::1','0','005011','RENOVACION GPS','2019-03-29 09:57:19','2018-11-14 00:00:00','2018-11-14 00:00:00',3,'2018-11-14 00:00:00'),
 (59,1,4,37,27,'2019-03-29 10:28:00','klien','::1','2019-03-29 10:28:00','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 10:28:00','2018-11-08 00:00:00','2018-11-08 00:00:00',3,'2018-11-08 00:00:00'),
 (60,1,4,38,28,'2019-03-29 10:58:54','klien','::1','2019-03-29 10:58:54','klien','::1','0','005011','NUEVA INSTALACION','2019-03-29 10:58:54','2018-11-03 00:00:00','2018-11-03 00:00:00',3,'2018-11-03 00:00:00'),
 (61,1,4,39,29,'2019-03-29 11:37:26','klien','::1','2019-03-29 11:37:26','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 11:37:26','2018-10-31 00:00:00','2018-10-31 00:00:00',3,'2018-10-31 00:00:00'),
 (62,1,4,29,30,'2019-03-29 11:55:18','klien','::1','2019-03-29 11:55:18','klien','::1','0','005011','RENOVACION GPS','2019-03-29 11:55:18','2018-10-24 00:00:00','2018-10-24 00:00:00',3,'2018-10-24 00:00:00'),
 (63,1,4,40,31,'2019-03-29 14:34:00','klien','::1','2019-03-29 14:34:00','klien','::1','0','005011','NUEVA INSTALACION','2019-03-29 14:34:00','2018-10-19 00:00:00','2018-10-19 00:00:00',3,'2018-10-19 00:00:00'),
 (64,1,4,41,32,'2019-03-29 14:42:45','klien','::1','2019-03-29 14:42:45','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 14:42:45','2018-10-19 00:00:00','2018-10-19 00:00:00',3,'2018-10-19 00:00:00'),
 (65,1,4,42,33,'2019-03-29 14:52:30','klien','::1','2019-03-29 14:52:30','klien','::1','0','005011','NUEVA INSTALACION','2019-03-29 14:52:30','2018-10-18 00:00:00','2018-10-18 00:00:00',3,'2018-10-18 00:00:00'),
 (66,1,4,43,34,'2019-03-29 15:04:11','klien','::1','2019-03-29 15:04:11','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 15:04:11','2018-10-19 00:00:00','2018-10-19 00:00:00',3,'2018-10-19 00:00:00'),
 (67,1,4,44,35,'2019-03-29 15:14:50','klien','::1','2019-03-29 15:14:50','klien','::1','0','005011','NUEVA INSTALACION','2019-03-29 15:14:50','2018-09-20 00:00:00','2018-09-20 00:00:00',3,'2018-09-20 00:00:00'),
 (68,1,4,45,36,'2019-03-29 15:21:08','klien','::1','2019-03-29 15:21:08','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 15:21:08','2018-06-20 00:00:00','2018-06-20 00:00:00',3,'2018-06-20 00:00:00'),
 (69,1,4,46,37,'2019-03-29 15:38:47','klien','::1','2019-03-29 15:38:47','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 15:38:47','2018-09-14 00:00:00','2018-09-14 00:00:00',3,'2018-09-14 00:00:00'),
 (70,1,5,47,38,'2019-03-29 16:08:14','klien','::1','2019-03-29 16:08:14','klien','::1','0','005011','NUEVA INSTALACION','2019-03-29 16:08:14','2018-09-15 00:00:00','2018-09-15 00:00:00',3,'2018-09-15 00:00:00'),
 (71,1,4,48,39,'2019-03-29 16:17:26','klien','::1','2019-03-29 16:17:26','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 16:17:26','2018-09-15 00:00:00','2018-09-15 00:00:00',3,'2018-09-15 00:00:00'),
 (72,1,4,49,40,'2019-03-29 16:26:17','klien','::1','2019-03-29 16:26:17','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 16:26:17','2018-09-05 00:00:00','2018-09-05 00:00:00',3,'2018-09-05 00:00:00'),
 (73,1,4,25,41,'2019-03-29 16:43:24','klien','::1','2019-03-29 16:43:24','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 16:43:24','2018-09-04 00:00:00','2018-09-04 00:00:00',3,'2018-09-04 00:00:00'),
 (74,1,5,50,42,'2019-03-29 16:53:22','klien','::1','2019-03-29 16:53:22','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 16:53:22','2018-08-29 00:00:00','2018-08-29 00:00:00',3,'2018-08-29 00:00:00'),
 (75,1,4,51,43,'2019-03-29 17:25:00','klien','::1','2019-03-29 17:25:00','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 17:25:00','2018-08-28 00:00:00','2018-08-28 00:00:00',3,'2018-08-28 00:00:00'),
 (76,1,4,52,44,'2019-03-29 17:38:12','klien','::1','2019-03-29 17:38:12','klien','::1','0','005011','RENOVACION GPS','2019-03-29 17:38:12','2018-08-27 00:00:00','2018-08-27 00:00:00',3,'2018-08-27 00:00:00'),
 (77,1,4,53,45,'2019-03-29 17:50:10','klien','::1','2019-03-29 17:50:10','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 17:50:10','2018-08-23 00:00:00','2018-08-23 00:00:00',3,'2018-08-23 00:00:00'),
 (78,1,5,54,46,'2019-03-29 17:59:15','klien','::1','2019-03-29 17:59:15','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 17:59:15','2018-08-23 00:00:00','2018-08-23 00:00:00',3,'2018-08-23 00:00:00'),
 (79,1,5,55,47,'2019-03-29 18:09:35','klien','::1','2019-03-29 18:09:35','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 18:09:35','2018-08-22 00:00:00','2018-08-22 00:00:00',3,'2018-08-22 00:00:00'),
 (80,1,4,56,48,'2019-03-29 18:39:05','klien','::1','2019-03-29 18:39:05','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 18:39:05','2018-08-09 00:00:00','2018-08-09 00:00:00',3,'2018-08-09 00:00:00'),
 (81,1,4,57,49,'2019-03-29 18:49:16','klien','::1','2019-03-29 18:49:16','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-29 18:49:16','2018-07-27 00:00:00','2018-07-27 00:00:00',3,'2018-07-27 00:00:00'),
 (82,1,6,23,50,'2019-03-30 09:30:46','klien','::1','2019-03-30 09:30:46','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 09:30:46','2018-07-23 00:00:00','2018-07-23 00:00:00',3,'2018-07-23 00:00:00'),
 (83,1,6,23,51,'2019-03-30 09:48:42','klien','::1','2019-03-30 09:48:42','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 09:48:42','2018-07-02 00:00:00','2018-07-02 00:00:00',3,'2018-07-02 00:00:00'),
 (84,1,6,61,52,'2019-03-30 10:15:47','klien','::1','2019-03-30 10:15:47','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 10:15:47','2018-06-25 00:00:00','2018-06-25 00:00:00',3,'2018-06-25 00:00:00'),
 (85,1,6,62,53,'2019-03-30 10:27:32','klien','::1','2019-03-30 10:27:32','klien','::1','0','005011','NUEVA INSTALACION','2019-03-30 10:27:32','2018-06-23 00:00:00','2018-06-23 00:00:00',3,'2018-06-23 00:00:00'),
 (86,1,6,63,54,'2019-03-30 10:40:26','klien','::1','2019-03-30 10:40:26','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 10:40:26','2018-06-23 00:00:00','2018-06-23 00:00:00',3,'2018-06-23 00:00:00'),
 (87,1,6,64,55,'2019-03-30 10:53:35','klien','::1','2019-03-30 10:53:35','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 10:53:35','2018-06-22 00:00:00','2018-06-22 00:00:00',3,'2018-06-22 00:00:00'),
 (88,1,6,65,56,'2019-03-30 11:04:42','klien','::1','2019-03-30 11:04:42','klien','::1','0','005011','NUEVA INSTALACION','2019-03-30 11:04:42','2018-02-20 00:00:00','2018-02-20 00:00:00',3,'2018-02-20 00:00:00'),
 (89,1,6,66,57,'2019-03-30 11:18:11','klien','::1','2019-03-30 11:18:11','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 11:18:11','2018-02-14 00:00:00','2018-02-14 00:00:00',3,'2018-02-14 00:00:00'),
 (90,1,6,67,58,'2019-03-30 11:26:16','klien','::1','2019-03-30 11:26:16','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 11:26:16','2018-02-14 00:00:00','2018-02-14 00:00:00',3,'2018-02-14 00:00:00'),
 (91,1,6,68,59,'2019-03-30 11:53:33','klien','::1','2019-03-30 11:53:33','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 11:53:33','2018-02-14 00:00:00','2018-02-14 00:00:00',3,'2018-02-14 00:00:00'),
 (92,1,6,70,60,'2019-03-30 12:05:56','klien','::1','2019-03-30 12:05:56','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 12:05:56','2018-02-14 00:00:00','2018-02-13 00:00:00',3,'2018-02-13 00:00:00'),
 (93,1,6,71,61,'2019-03-30 12:16:12','klien','::1','2019-03-30 12:16:12','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 12:16:12','2018-02-12 00:00:00','2018-02-12 00:00:00',3,'2018-02-12 00:00:00'),
 (94,1,6,72,62,'2019-03-30 12:25:43','klien','::1','2019-03-30 12:25:43','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 12:25:43','2018-02-09 00:00:00','2018-02-09 00:00:00',3,'2018-02-09 00:00:00'),
 (95,1,6,73,63,'2019-03-30 12:36:28','klien','::1','2019-03-30 12:36:28','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 12:36:28','2018-02-06 00:00:00','2018-02-06 00:00:00',3,'2018-02-06 00:00:00'),
 (96,1,7,74,64,'2019-03-30 12:55:49','klien','::1','2019-03-30 12:55:49','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 12:55:49','2018-02-06 00:00:00','2018-02-06 00:00:00',3,'2018-02-06 00:00:00'),
 (97,1,7,75,65,'2019-03-30 13:12:14','klien','::1','2019-03-30 13:12:14','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 13:12:14','2018-02-06 00:00:00','2018-02-06 00:00:00',3,'2018-02-06 00:00:00'),
 (98,1,7,76,66,'2019-03-30 13:23:37','klien','::1','2019-03-30 13:23:37','klien','::1','0','005011','NUEVA INSTALACION GPS','2019-03-30 13:23:37','2018-02-02 00:00:00','2018-02-02 00:00:00',3,'2018-02-02 00:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordentrabajo_detalle`
--

/*!40000 ALTER TABLE `ordentrabajo_detalle` DISABLE KEYS */;
INSERT INTO `ordentrabajo_detalle` (`IdOrdenDetalle`,`IdOrden`,`IdDispositivo`,`CodTipoTrabajo`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`,`FechaInicio`,`FechaFin`) VALUES 
 (44,43,14,'004007','2019-03-28 15:01:11','klien','::1','2019-03-28 15:01:11','klien','::1','0','2019-01-31 00:00:00','2019-01-31 00:00:00'),
 (45,44,15,'004008','2019-03-28 15:16:15','klien','::1','2019-03-28 15:16:15','klien','::1','0','2019-02-05 00:00:00','2019-02-05 00:00:00'),
 (46,45,16,'004007','2019-03-28 15:33:53','klien','::1','2019-03-28 15:33:53','klien','::1','0','2019-01-28 00:00:00','2019-01-28 00:00:00'),
 (47,46,17,'004007','2019-03-28 16:21:00','klien','::1','2019-03-28 16:21:00','klien','::1','0','2019-01-28 00:00:00','2019-01-28 00:00:00'),
 (48,47,18,'004007','2019-03-28 16:44:22','klien','::1','2019-03-28 16:44:22','klien','::1','0','2019-01-24 00:00:00','2019-01-24 00:00:00'),
 (49,48,19,'004007','2019-03-28 16:53:59','klien','::1','2019-03-28 16:53:59','klien','::1','0','2019-01-24 00:00:00','2019-01-24 00:00:00'),
 (50,49,20,'004007','2019-03-28 17:21:23','klien','::1','2019-03-28 17:21:23','klien','::1','0','2019-01-18 00:00:00','2019-01-18 00:00:00'),
 (51,50,21,'004007','2019-03-28 17:54:22','klien','::1','2019-03-28 17:54:22','klien','::1','0','2018-12-15 00:00:00','2018-12-15 00:00:00'),
 (52,51,22,'004008','2019-03-28 18:07:02','klien','::1','2019-03-28 18:07:02','klien','::1','0','2018-12-18 00:00:00','2018-12-18 00:00:00'),
 (53,52,23,'004007','2019-03-28 18:19:34','klien','::1','2019-03-28 18:19:34','klien','::1','0','2018-12-07 00:00:00','2018-12-07 00:00:00'),
 (54,53,24,'004007','2019-03-28 18:29:50','klien','::1','2019-03-28 18:29:50','klien','::1','0','2018-12-03 00:00:00','2018-12-03 00:00:00'),
 (55,54,25,'004007','2019-03-28 18:38:38','klien','::1','2019-03-28 18:38:38','klien','::1','0','2018-11-25 00:00:00','2018-11-25 00:00:00'),
 (56,55,26,'004008','2019-03-28 18:55:22','klien','::1','2019-03-28 18:55:22','klien','::1','0','2018-11-21 00:00:00','2018-11-21 00:00:00'),
 (57,56,27,'004007','2019-03-29 09:14:47','klien','::1','2019-03-29 09:14:47','klien','::1','0','2018-11-15 00:00:00','2018-11-15 00:00:00'),
 (58,57,28,'004007','2019-03-29 09:29:40','klien','::1','2019-03-29 09:29:40','klien','::1','0','2018-11-15 00:00:00','2018-11-15 00:00:00'),
 (59,58,29,'004008','2019-03-29 09:57:19','klien','::1','2019-03-29 09:57:19','klien','::1','0','2018-11-14 00:00:00','2018-11-14 00:00:00'),
 (60,59,30,'004007','2019-03-29 10:28:00','klien','::1','2019-03-29 10:28:00','klien','::1','0','2018-11-08 00:00:00','2018-11-08 00:00:00'),
 (61,60,31,'004007','2019-03-29 10:58:54','klien','::1','2019-03-29 10:58:54','klien','::1','0','2018-11-03 00:00:00','2018-11-03 00:00:00'),
 (62,61,32,'004007','2019-03-29 11:37:26','klien','::1','2019-03-29 11:37:26','klien','::1','0','2018-10-31 00:00:00','2018-10-31 00:00:00'),
 (63,62,33,'004008','2019-03-29 11:55:18','klien','::1','2019-03-29 11:55:18','klien','::1','0','2018-10-24 00:00:00','2018-10-24 00:00:00'),
 (64,63,34,'004007','2019-03-29 14:34:00','klien','::1','2019-03-29 14:34:00','klien','::1','0','2018-10-19 00:00:00','2018-10-19 00:00:00'),
 (65,64,35,'004007','2019-03-29 14:42:45','klien','::1','2019-03-29 14:42:45','klien','::1','0','2018-10-19 00:00:00','2018-10-19 00:00:00'),
 (66,65,36,'004007','2019-03-29 14:52:30','klien','::1','2019-03-29 14:52:30','klien','::1','0','2018-10-18 00:00:00','2018-10-18 00:00:00'),
 (67,66,37,'004007','2019-03-29 15:04:11','klien','::1','2019-03-29 15:04:11','klien','::1','0','2018-10-19 00:00:00','2018-10-19 00:00:00'),
 (68,67,38,'004007','2019-03-29 15:14:50','klien','::1','2019-03-29 15:14:50','klien','::1','0','2018-09-20 00:00:00','2018-09-20 00:00:00'),
 (69,68,39,'004007','2019-03-29 15:21:08','klien','::1','2019-03-29 15:21:08','klien','::1','0','2018-06-20 00:00:00','2018-06-20 00:00:00'),
 (70,69,40,'004007','2019-03-29 15:38:47','klien','::1','2019-03-29 15:38:47','klien','::1','0','2018-09-14 00:00:00','2018-09-14 00:00:00'),
 (71,70,41,'004007','2019-03-29 16:08:14','klien','::1','2019-03-29 16:08:14','klien','::1','0','2018-09-15 00:00:00','2018-09-15 00:00:00'),
 (72,71,42,'004007','2019-03-29 16:17:26','klien','::1','2019-03-29 16:17:26','klien','::1','0','2018-09-15 00:00:00','2018-09-15 00:00:00'),
 (73,72,43,'004007','2019-03-29 16:26:17','klien','::1','2019-03-29 16:26:17','klien','::1','0','2018-09-05 00:00:00','2018-09-05 00:00:00'),
 (74,73,44,'004007','2019-03-29 16:43:24','klien','::1','2019-03-29 16:43:24','klien','::1','0','2018-09-04 00:00:00','2018-09-04 00:00:00'),
 (75,74,45,'004007','2019-03-29 16:53:22','klien','::1','2019-03-29 16:53:22','klien','::1','0','2018-08-29 00:00:00','2018-08-29 00:00:00'),
 (76,75,46,'004007','2019-03-29 17:25:00','klien','::1','2019-03-29 17:25:00','klien','::1','0','2018-08-28 00:00:00','2018-08-28 00:00:00'),
 (77,76,47,'004008','2019-03-29 17:38:12','klien','::1','2019-03-29 17:38:12','klien','::1','0','2018-08-27 00:00:00','2018-08-27 00:00:00'),
 (78,77,48,'004007','2019-03-29 17:50:10','klien','::1','2019-03-29 17:50:10','klien','::1','0','2018-08-23 00:00:00','2018-08-23 00:00:00'),
 (79,78,49,'004007','2019-03-29 17:59:15','klien','::1','2019-03-29 17:59:15','klien','::1','0','2018-08-23 00:00:00','2018-08-23 00:00:00'),
 (80,79,50,'004007','2019-03-29 18:09:35','klien','::1','2019-03-29 18:09:35','klien','::1','0','2018-08-22 00:00:00','2018-08-22 00:00:00'),
 (81,80,51,'004007','2019-03-29 18:39:05','klien','::1','2019-03-29 18:39:05','klien','::1','0','2018-08-09 00:00:00','2018-08-09 00:00:00'),
 (82,81,52,'004007','2019-03-29 18:49:16','klien','::1','2019-03-29 18:49:16','klien','::1','0','2018-07-27 00:00:00','2018-07-27 00:00:00'),
 (83,82,53,'004007','2019-03-30 09:30:46','klien','::1','2019-03-30 09:30:46','klien','::1','0','2018-07-23 00:00:00','2018-07-23 00:00:00'),
 (84,83,54,'004007','2019-03-30 09:48:42','klien','::1','2019-03-30 09:48:42','klien','::1','0','2018-07-02 00:00:00','2018-07-02 00:00:00'),
 (85,84,55,'004007','2019-03-30 10:15:47','klien','::1','2019-03-30 10:15:47','klien','::1','0','2018-06-25 00:00:00','2018-06-25 00:00:00'),
 (86,85,56,'004007','2019-03-30 10:27:32','klien','::1','2019-03-30 10:27:32','klien','::1','0','2018-06-23 00:00:00','2018-06-23 00:00:00'),
 (87,86,57,'004007','2019-03-30 10:40:26','klien','::1','2019-03-30 10:40:26','klien','::1','0','2018-06-23 00:00:00','2018-06-23 00:00:00'),
 (88,87,58,'004007','2019-03-30 10:53:35','klien','::1','2019-03-30 10:53:35','klien','::1','0','2018-06-22 00:00:00','2018-06-22 00:00:00'),
 (89,88,59,'004007','2019-03-30 11:04:42','klien','::1','2019-03-30 11:04:42','klien','::1','0','2018-02-20 00:00:00','2018-02-20 00:00:00'),
 (90,89,60,'004007','2019-03-30 11:18:11','klien','::1','2019-03-30 11:18:11','klien','::1','0','2018-02-14 00:00:00','2018-02-14 00:00:00'),
 (91,90,61,'004007','2019-03-30 11:26:16','klien','::1','2019-03-30 11:26:16','klien','::1','0','2018-02-14 00:00:00','2018-02-14 00:00:00'),
 (92,91,62,'004007','2019-03-30 11:53:33','klien','::1','2019-03-30 11:53:33','klien','::1','0','2018-02-14 00:00:00','2018-02-14 00:00:00'),
 (93,92,63,'004007','2019-03-30 12:05:56','klien','::1','2019-03-30 12:05:56','klien','::1','0','2018-02-13 00:00:00','2018-02-13 00:00:00'),
 (94,93,64,'004007','2019-03-30 12:16:12','klien','::1','2019-03-30 12:16:12','klien','::1','0','2018-02-12 00:00:00','2018-02-12 00:00:00'),
 (95,94,65,'004007','2019-03-30 12:25:43','klien','::1','2019-03-30 12:25:43','klien','::1','0','2018-02-09 00:00:00','2018-02-09 00:00:00'),
 (96,95,66,'004007','2019-03-30 12:36:28','klien','::1','2019-03-30 12:36:28','klien','::1','0','2018-02-06 00:00:00','2018-02-06 00:00:00'),
 (97,96,67,'004007','2019-03-30 12:55:49','klien','::1','2019-03-30 12:55:49','klien','::1','0','2018-02-06 00:00:00','2018-02-06 00:00:00'),
 (98,97,68,'004007','2019-03-30 13:12:14','klien','::1','2019-03-30 13:12:14','klien','::1','0','2018-02-06 00:00:00','2018-02-06 00:00:00'),
 (99,98,69,'004007','2019-03-30 13:23:37','klien','::1','2019-03-30 13:23:37','klien','::1','0','2018-02-02 00:00:00','2018-02-02 00:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taller`
--

/*!40000 ALTER TABLE `taller` DISABLE KEYS */;
INSERT INTO `taller` (`IdTaller`,`Descripcion`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`) VALUES 
 (3,'MAURTUA','2019-03-28 14:47:14','klien','::1','2019-03-28 14:47:14','klien','::1','0');
/*!40000 ALTER TABLE `taller` ENABLE KEYS */;


--
-- Definition of table `tbltmp_contax_0001`
--

DROP TABLE IF EXISTS `tbltmp_contax_0001`;
CREATE TABLE `tbltmp_contax_0001` (
  `coddoc` char(6) DEFAULT NULL,
  `rutadoc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltmp_contax_0001`
--

/*!40000 ALTER TABLE `tbltmp_contax_0001` DISABLE KEYS */;
INSERT INTO `tbltmp_contax_0001` (`coddoc`,`rutadoc`) VALUES 
 ('007016','');
/*!40000 ALTER TABLE `tbltmp_contax_0001` ENABLE KEYS */;


--
-- Definition of table `tbltmp_odet_0001`
--

DROP TABLE IF EXISTS `tbltmp_odet_0001`;
CREATE TABLE `tbltmp_odet_0001` (
  `codtipotrabajo` char(6) DEFAULT NULL,
  `iddispositivo` int(11) DEFAULT NULL,
  `nrosim` varchar(15) DEFAULT NULL,
  `nroidn` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltmp_odet_0001`
--

/*!40000 ALTER TABLE `tbltmp_odet_0001` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbltmp_odet_0001` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarioopciones`
--

/*!40000 ALTER TABLE `usuarioopciones` DISABLE KEYS */;
INSERT INTO `usuarioopciones` (`IdUsuarioOpciones`,`IdOpciones`,`id`) VALUES 
 (1,1,1),
 (2,2,1),
 (3,3,1),
 (4,4,1),
 (5,5,1),
 (6,6,1),
 (7,7,1),
 (8,8,1),
 (9,9,1),
 (10,10,1),
 (11,11,1),
 (12,12,1),
 (13,13,1),
 (14,14,1),
 (15,15,1),
 (16,16,1),
 (17,17,1),
 (18,18,1),
 (19,19,1),
 (20,20,1),
 (21,21,1),
 (22,22,1),
 (23,23,1),
 (24,24,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`,`idempresa`,`idactor`,`login`,`password`,`fchcrea`,`fchmod`,`usrcrea`,`usrmod`,`codestado`,`flgeli`) VALUES 
 (1,1,1,'klien','827ccb0eea8a706c4c34a16891f84e7b','2018-11-19 00:00:00','2019-03-28 15:07:55','user002','klien','001001','0');
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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehiculo`
--

/*!40000 ALTER TABLE `vehiculo` DISABLE KEYS */;
INSERT INTO `vehiculo` (`IdVehiculo`,`Placa`,`Chasis`,`Motor`,`Modelo`,`Color`,`FchCrea`,`UsrCrea`,`WksCrea`,`FchMod`,`UsrMod`,`WksMod`,`FlgEli`,`RutaReferencia`,`RutaTarjeta`,`IdEmpresa`,`Marca`) VALUES 
 (10,'','MD2A45AZ0KWE0025','AZZWJE14181','TORITO 4T GLP','ROJO','2019-03-28 14:51:38','klien','::1','2019-03-28 14:51:38','klien','::1','0','','',1,'BAJAJ'),
 (11,'CH-E004847','MD2A45AZ7HWE00470','AZZWGE96844','TORITO 4T GLP','ROJO','2019-03-28 15:12:37','klien','::1','2019-03-28 15:13:15','klien','::1','0','','',1,'BAJAJ'),
 (12,'','MD2A45AZXKWD00581','AZZWJD21433','TORITO 4T GLP','AZUL','2019-03-28 15:30:15','klien','::1','2019-03-28 15:30:15','klien','::1','0','','',1,'BAJAJ'),
 (13,'','MD2A45AZ5KWE00958','AZZWJE17310','TORITO 4T GLP','VERDE','2019-03-28 16:19:42','klien','::1','2019-03-28 16:19:42','klien','::1','0','','',1,'BAJAJ'),
 (14,'','MD2A45AZ7KWE00072','AZZWJE45372','TORITO 4T GLP','AZUL','2019-03-28 16:41:58','klien','::1','2019-03-28 16:41:58','klien','::1','0','','',1,'BAJAJ'),
 (15,'','MD2A45AZ0KWE00009','AZZWJE45245','TORITO 4T GLP','AZUL','2019-03-28 16:52:35','klien','::1','2019-03-28 16:52:35','klien','::1','0','','',1,'BAJAJ'),
 (16,'','LRPRPL901JA001024','RW167FML1805000598','ITALIKA FIERA 200 EURO III','NEGRO/AMARILLO','2019-03-28 17:19:10','klien','::1','2019-03-28 17:19:10','klien','::1','0','','',1,'ITALIKA'),
 (17,'','MD2A45AZ8JWC19805','AZZWJC38734','TORITO 4T GLP','AZUL','2019-03-28 17:52:43','klien','::1','2019-03-28 17:52:43','klien','::1','0','','',1,'BAJAJ'),
 (18,'','MD2A45AZ0HWB33477','AZZWHB57296','TORITO 4T GLP','AZUL','2019-03-28 18:03:58','klien','::1','2019-03-28 18:03:58','klien','::1','0','','',1,'BAJAJ'),
 (19,'','MD2A45AZ8KWD01647','AZZWJD35591','TORITO 4T GLP','ROJO','2019-03-28 18:17:48','klien','::1','2019-03-28 18:17:48','klien','::1','0','','',1,'BAJAJ'),
 (20,'Y1Z-021','MALA751AAJM626378','G3LAHM301791','GRAND I10','AZUL','2019-03-28 18:27:12','klien','::1','2019-03-28 18:27:12','klien','::1','0','','',1,'HYUNDAI'),
 (21,'','MD2A45AZXKWD01780','AZZWJD36190','TORITO 4T GLP','ROJO','2019-03-28 18:36:54','klien','::1','2019-03-28 18:36:54','klien','::1','0','','',1,'BAJAJ'),
 (22,'','MD2A45AZ7HWB4237','AZZWHB65675','TORITO 4T GLP','ROJO','2019-03-28 18:44:13','klien','::1','2019-03-28 18:44:13','klien','::1','0','','',1,'BAJAJ'),
 (23,'7366-4Y','MD2A45AZ7HWB4237','AZZWHB65675','TORITO 4T GLP','ROJO','2019-03-28 18:52:17','klien','::1','2019-03-28 18:52:17','klien','::1','0','','',1,'BAJAJ'),
 (24,'','MD2A45AZXJWC10037','AZZWJC40887','TORITO 4T GLP','AZUL','2019-03-29 09:12:09','klien','::1','2019-03-29 09:12:09','klien','::1','0','','',1,'BAJAJ'),
 (25,'','MD2A45AZ4KWD01869','AZZWJD36684','TORITO 4T GLP','ROJO','2019-03-29 09:25:20','klien','::1','2019-03-29 09:25:20','klien','::1','0','','',1,'BAJAJ'),
 (26,'','MD2A45AZ6JWD00088','AZZWHD93647','TORITO 4T GLP','AZUL','2019-03-29 09:54:36','klien','::1','2019-03-29 09:54:36','klien','::1','0','','',1,'BAJAJ'),
 (27,'ASU-913','LA61AAA32HB507259','GW28TC1703466861','IVA POWER KING','PLATA','2019-03-29 10:26:08','klien','::1','2019-03-29 10:26:08','klien','::1','0','','',1,'BAJAJ'),
 (28,'','MD2A45AZ0JWC19992','AZZWWJC40370','TORITO 4T GLP','AZUL','2019-03-29 10:57:26','klien','::1','2019-03-29 10:57:26','klien','::1','0','','',1,'BAJAJ'),
 (29,'7145-4Y','MD2A45AZ4HWB33787','AZZWHB60590','TORITO 4T GLP','ROJO','2019-03-29 11:30:12','klien','::1','2019-03-29 11:42:21','klien','::1','0','','',1,'BAJAJ'),
 (30,'','MD2A45AZXHWB33440','AZZWHB57336','TORITO 4T GLP','AZUL','2019-03-29 11:49:27','klien','::1','2019-03-29 11:49:27','klien','::1','0','','',1,'BAJAJ'),
 (31,'','MD2A45AZ0JWC10709','AZZWJC00587','TORITO 4T GLP','ROJO','2019-03-29 14:32:28','klien','::1','2019-03-29 14:32:28','klien','::1','0','','',1,'BAJAJ'),
 (32,'3355-9D','MD2A45AZ2HWD00180','AZZWGD63012','TORITO 4T GLP','AZUL','2019-03-29 14:41:29','klien','::1','2019-03-29 14:41:29','klien','::1','0','','',1,'BAJAJ'),
 (33,'','MD2A45AZ5JWC10334','AZZWJC45916','TORITO 4T GLP','AZUL','2019-03-29 14:50:46','klien','::1','2019-03-29 14:50:46','klien','::1','0','','',1,'BAJAJ'),
 (34,'1316-4Y','MD2A45BZ9FWF00503','AZZWEF32176','TORITO 4T GLP','AZUL','2019-03-29 15:01:48','klien','::1','2019-03-29 15:01:48','klien','::1','0','','',1,'BAJAJ'),
 (35,'','MD2A45AZ7JWB18495','AZZWJB23897','TORITO 4T GLP','AZUL','2019-03-29 15:11:44','klien','::1','2019-03-29 15:11:44','klien','::1','0','','',1,'BAJAJ'),
 (36,'','MD2A45AZ9JWL14824','AZZWJL43458','TORITO 4T GLP','AZUL','2019-03-29 15:19:41','klien','::1','2019-03-29 15:19:41','klien','::1','0','','',1,'BAJAJ'),
 (37,'','MD2A45AZ4JWB16767','AZZWJB12869','TORITO 4T GLP','ROJO','2019-03-29 15:35:41','klien','::1','2019-03-29 15:35:41','klien','::1','0','','',1,'BAJAJ'),
 (38,'0937-5Y','MD2A45AZ0JWH00020','AZZWHH76175','TORITO 4T GLP','AZUL','2019-03-29 15:46:51','klien','::1','2019-03-29 15:46:51','klien','::1','0','','',1,'BAJAJ'),
 (39,'','MD2A45AZ7JWB16696','AZZWJB11851','TORITO 4T GLP','ROJO','2019-03-29 16:15:50','klien','::1','2019-03-29 16:15:50','klien','::1','0','','',1,'BAJAJ'),
 (40,'','MD2A45AZ9JWB18353','AZZWBJ23340','TORITO 4T GLP','AZUL','2019-03-29 16:24:35','klien','::1','2019-03-29 16:24:35','klien','::1','0','','',1,'BAJAJ'),
 (41,'','LRPRPH705JA000426','RW152FMH1801016036','AT110RT EURO III','NEGRO/ROJO','2019-03-29 16:39:22','klien','::1','2019-03-29 16:39:22','klien','::1','0','','',1,'ITALIKA'),
 (42,'','MD2A45AZ5JWB16700','AZZWJB11837','TORITO 4T GLP','ROJO','2019-03-29 16:52:03','klien','::1','2019-03-29 16:52:03','klien','::1','0','','',1,'BAJAJ'),
 (43,'','MD2A45AZXJWB16529','AZZWJB10431','TORITO 4T GLP','AZUL','2019-03-29 17:21:58','klien','::1','2019-03-29 17:21:58','klien','::1','0','','',1,'BAJAJ'),
 (44,'4164-4Y','LZSJCMLC8H5008370','ZS167FML35H113636','LINEAL DM200','VERDE','2019-03-29 17:35:58','klien','::1','2019-03-29 17:35:58','klien','::1','0','','',1,'ITALIKA'),
 (45,'','MD2A45AZ9JWA11299','AZZWJA93186','TORITO 4T GLP','AZUL','2019-03-29 17:47:43','klien','::1','2019-03-29 17:47:43','klien','::1','0','','',1,'BAJAJ'),
 (46,'2486-5Y','MD2A45AZ4JWL14844','AZZWJL43489','TORITO 4T GLP','AZUL','2019-03-29 17:57:37','klien','::1','2019-03-29 17:57:37','klien','::1','0','','',1,'BAJAJ'),
 (47,'Y1Z-054','MALA751AAJM626363','G3LAHM301764','GRAND I10','ROJO','2019-03-29 18:07:32','klien','::1','2019-03-29 18:07:32','klien','::1','0','','',1,'HYUNDAI I10'),
 (48,'','MD2A45AZ8JWA18969','AZZWJM62632','TORITO 4T GLP','AZUL','2019-03-29 18:34:45','klien','::1','2019-03-29 18:34:45','klien','::1','0','','',1,'BAJAJ'),
 (49,'','MD2A45AZ0JWB15020','AZZWJA93127','TORITO 4T GLP','ROJO','2019-03-29 18:47:14','klien','::1','2019-03-29 18:47:14','klien','::1','0','','',1,'BAJAJ'),
 (50,'','MD2A45AZ9JWM17158','AZZWJM61360','TORITO 4T GLP','AZUL','2019-03-30 09:28:37','klien','::1','2019-03-30 09:28:37','klien','::1','0','','',1,'BAJAJ'),
 (51,'','MD2A45AZ9JWM16849','AZZWJM57596','TORITO 2T','ROJO','2019-03-30 09:46:30','klien','::1','2019-03-30 09:46:30','klien','::1','0','','',1,'BAJAJ'),
 (52,'2008-5Y','MD2A45AZXJWJ00618','AZZWHJ0931','TORITO 2T','AZUL','2019-03-30 10:13:46','klien','::1','2019-03-30 10:13:46','klien','::1','0','','',1,'BAJAJ'),
 (53,'1617-5Y','MD2A45AZ2JWJ00242','AZZWHJ95333','TORITO 2T','AZUL','2019-03-30 10:24:34','klien','::1','2019-03-30 10:24:34','klien','::1','0','','',1,'BAJAJ'),
 (54,'','MD2A23AZ6JWL16122','24ZWJL00846','TORITO 2T','AZUL','2019-03-30 10:38:59','klien','::1','2019-03-30 10:38:59','klien','::1','0','','',1,'BAJAJ'),
 (55,'','MALA251AAJM571343','G3HAHM531390','TORITO 2T','AZUL','2019-03-30 10:52:03','klien','::1','2019-03-30 10:52:03','klien','::1','0','','',1,'BAJAJ'),
 (56,'','MD2A45AZ1JWF00666','AZZWHF47778','TORITO 4T GLP','AZUL','2019-03-30 11:02:30','klien','::1','2019-03-30 11:02:30','klien','::1','0','','',1,'BAJAJ'),
 (57,'','LZSJCMLC0H5006435','ZS167FML35H106675','ITALIKA DM200 VR','VERDE','2019-03-30 11:15:20','klien','::1','2019-03-30 11:15:20','klien','::1','0','','',1,'ITALIKA'),
 (58,'','MD2A45AZ7JWF00493','AZZWHF41786','TORITO 4T GLP','ROJO','2019-03-30 11:25:04','klien','::1','2019-03-30 11:25:04','klien','::1','0','','',1,'BAJAJ'),
 (59,'F5G638','KL1MJ6A43DC061261','A08S3081484KD2','SPARK LITE','NEGRO','2019-03-30 11:35:22','klien','::1','2019-03-30 11:35:22','klien','::1','0','','',1,'CHEVROLET'),
 (60,'','MD2A45AZ6JWF00436','AZZWHF39924','TORITO 4T GLP','ROJO','2019-03-30 12:04:45','klien','::1','2019-03-30 12:04:45','klien','::1','0','','',1,'BAJAJ'),
 (61,'2080-9D','MD2A45AZ4GWC13136','AZZWGC41613','TORITO 4T GLP','AZUL','2019-03-30 12:14:16','klien','::1','2019-03-30 12:14:16','klien','::1','0','','',1,'BAJAJ'),
 (62,'0807-4Y','MD2A45AZ2GWC11742','AZZWGC31635','TORITO 4T GLP','ROJO/NEGRO','2019-03-30 12:24:18','klien','::1','2019-03-30 12:24:18','klien','::1','0','','',1,'BAJAJ'),
 (63,'','MD2A45AZXJWF00438','AZZWHF39918','TORITO 4T GLP','ROJO','2019-03-30 12:34:51','klien','::1','2019-03-30 12:34:51','klien','::1','0','','',1,'BAJAJ'),
 (64,'','MD2A45AZ3JWF00409','AZZWHF38601','TORITO 4T GLP','ROJO','2019-03-30 12:46:23','klien','::1','2019-03-30 12:46:23','klien','::1','0','','',1,'BAJAJ'),
 (65,'V8J-537','MALA251AAHM520730','G3HAGM476642','EON','BLANCO','2019-03-30 13:08:46','klien','::1','2019-03-30 13:08:46','klien','::1','0','','',1,'HYUNDAI'),
 (66,'','MD2A45AZ6JWF00386','AZZWHF38006','TORITO 4T GLP','ROJO','2019-03-30 13:22:00','klien','::1','2019-03-30 13:22:00','klien','::1','0','','',1,'BAJAJ');
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
  set @vsql=concat(@vsql, '  or c.CodTipoContrato=',@c,'008020',@c,' ');
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
  where IdCliente=pidcliente order by IdOrden DESC LIMIT 1;

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
