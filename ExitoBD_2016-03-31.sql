# ************************************************************
# Sequel Pro SQL dump
# Version 4529
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.46-0ubuntu0.14.04.2)
# Database: ExitoBD
# Generation Time: 2016-03-31 19:19:47 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Cuestionario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Cuestionario`;

CREATE TABLE `Cuestionario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `ciudaduser` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `conocimientoInmobil` varchar(50) DEFAULT NULL,
  `PrincipalRazon` varchar(50) DEFAULT NULL,
  `ObjIngresos` varchar(50) DEFAULT NULL,
  `MayorObstaculo` varchar(50) DEFAULT NULL,
  `OpcionRespuesta` varchar(50) DEFAULT NULL,
  `fecha-_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(10) DEFAULT NULL,
  `hash` int(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Cuestionario` WRITE;
/*!40000 ALTER TABLE `Cuestionario` DISABLE KEYS */;

INSERT INTO `Cuestionario` (`id`, `mail`, `nom`, `ciudaduser`, `tel`, `conocimientoInmobil`, `PrincipalRazon`, `ObjIngresos`, `MayorObstaculo`, `OpcionRespuesta`, `fecha-_registro`, `status`, `hash`)
VALUES
	(2,'romano@hotmail.com','erik','erik','erik','erik','erik','erik','erik',NULL,'2016-03-23 19:00:59',1,NULL),
	(3,'romano@hotmail.com','kjkjk','jk','jk','jk','jkjjkj','kjkjj','jkjkjk',NULL,'2016-03-23 19:01:00',1,NULL),
	(4,'romano@hotmail.com','jA','ja','ja','ja','ja','ja','ja',NULL,'2016-03-23 19:01:01',1,NULL),
	(5,'romano@hotmail.com','mexicali','123456','yeah','yeah','yeah','yeah','yeah',NULL,'2016-03-23 19:01:02',1,NULL),
	(6,'romano@hotmail.com','llkl','kl','klklk','lklkl','kl','klkl','klklkl',NULL,'2016-03-23 19:01:03',1,NULL),
	(7,'romano@hotmail.com','lklklklklklkklklkl','lkk','lkl','lkl','ll','l','llk',NULL,'2016-03-23 19:01:04',1,NULL),
	(8,'romano@hotmail.com','kkjJKJKJ','kjkjk','jkj','jk','jk','jk','jkjkjk',NULL,'2016-03-23 19:01:05',1,NULL),
	(9,'romano@hotmail.com','kjk','kjk','jk','jkj','kj','kjk','jkjkjkj',NULL,'2016-03-23 19:01:06',1,NULL),
	(10,'romano@hotmail.com',',mlmlmlmlllklk','lkl','l,l','lkl','ll','l','p',NULL,'2016-03-23 19:01:07',1,NULL),
	(11,'romano@hotmail.com','lk','kj','kj','kj','kj','kjkjk','jkjk',NULL,'2016-03-23 19:01:08',1,NULL),
	(12,'romano@hotmail.com','kkjKJkjk','jkj','kjk','jkjk','j','kkj','kjkj',NULL,'2016-03-23 19:01:09',1,NULL),
	(14,'','kjk','jk','jk','jk','jk','jkj','k',NULL,'2016-03-23 19:01:09',1,NULL),
	(22,'default@gmail.com','jkjKJKJ','jkjk','jk','jjk','jkjk','jkjk','jkjkkjk',NULL,'2016-03-23 19:01:10',1,NULL),
	(23,'zoka@entertainment.mx','i','u','u','ui','ui','ui','ui',NULL,'2016-03-23 19:01:11',1,NULL),
	(24,'cool@gmail.com','kjk','j','kj','kjk','jkjk','jkjk','jkjk',NULL,'2016-03-23 19:01:13',1,NULL),
	(25,'rosita@gmail.com','kjk','kkkk','k','jk','jjkjk','jkjk','jk',NULL,'2016-03-23 19:01:14',1,NULL),
	(26,'rene@hotmail.com','k','jk','j','jk','jk','jk','jkjk',NULL,'2016-03-23 19:01:15',1,NULL),
	(27,'nuevo@hotmail.com','ui','ui','uu','iui','i','uiui','uiui',NULL,'2016-03-23 19:01:16',1,NULL),
	(28,'yisus@hotmail.com','m,','9','m,','m,','m,','m,','m,m',NULL,'2016-03-23 19:01:17',1,NULL),
	(30,'eu@gmail.com','kjk','j','kjk','jk','jkj','kj','kjkj',NULL,'2016-03-23 19:01:18',1,NULL),
	(31,'ezequiel@hotmail.com','l','jkl','l','jk','jk','jk','jkj',NULL,'2016-03-23 19:01:19',1,NULL),
	(32,'arely@hot.com','ciudad','12345678','jkjk','jkjkjk','jkjkjk','jkjkj','kjkjk',NULL,'2016-03-23 19:01:20',1,NULL),
	(33,'jevus@hotmail.com','m','m','km','km','kmk','mkmkm','kmk',NULL,'2016-03-23 19:00:38',1,NULL),
	(34,'goku@kaiosama.com','oj','ioji','iojoj','iojo','jjo','jio','jojio',NULL,'2016-03-23 19:02:00',1,NULL),
	(35,'kaiosama@hotmail.com','lÃ±Ã±,',',,',',l',',l',',l',',l','k',NULL,'2016-03-23 19:10:44',1,NULL),
	(36,'pokedan@gmail.com','ko','k','okok','ok','ok','ok','oko','Agusta Koala','2016-03-23 19:59:45',1,NULL),
	(39,'grn@gmail.com','m','lm','mkm','km','kmk','mkm','kmkm','Agusta Koala','2016-03-23 20:05:04',1,NULL),
	(40,'augusto@gmail.com','kjk','j','jk','j','j','kjk','jk','Tienes los recursos financieros para invertir en u','2016-03-23 20:07:08',1,NULL),
	(41,'bueno@hotmail.com','Ã±mmmk','kmm','mkm','km','kmk','mkmk','mkmkmk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 20:09:19',1,NULL),
	(42,'erro@hotmail.com','erik','njn','jn','jn','jn','jn','nnjn','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 20:24:49',1,NULL),
	(43,'roost@gmail.com','Roosty','ko','ko','ko','ko','ko','ko','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 20:26:25',1,NULL),
	(44,'razon@gmail.com','erik','erik','erik','kmk','k','mk','mk','Tienes los recursos financieros para invertir en u','2016-03-23 20:47:28',1,NULL),
	(45,'naruto@gmail.com','kmk','mk','mkm','k','mk','mk','mkmkm','Tienes los recursos financieros para invertir en u','2016-03-23 20:49:01',1,NULL),
	(46,'apurar@hotmail.com','alcohol','turns ','i just ','hold','you','burn','sick','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:10:02',1,NULL),
	(48,'tich@gmail.com','ko','ko','ko','ko','ko','ko','ko','Tienes los recursos financieros para invertir en u','2016-03-23 22:12:05',1,NULL),
	(49,'stitch@hotmail.com','mkmk','mk','k','mk','km','kk','mkmkm','Tienes los recursos financieros para invertir en u','2016-03-23 22:13:58',1,NULL),
	(50,'chava@gmail.com','chava','k','k','k','k','k','k','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:17:05',1,NULL),
	(51,'exito@gmail.com','km','k','mk','km','km','kmkmkm','kmmkmk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:19:05',1,NULL),
	(52,'honey@gmail.com','honey','honey','honey','ko','ko','ko','ok','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:20:49',1,NULL),
	(53,'where@hotmail.com','where','where','where','where','where','where','where','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:23:18',1,NULL),
	(54,'yeah@yeahyeahs.com','hola','holahola','kok','oko','ko','k','o','Tienes los recursos financieros para invertir en u','2016-03-23 22:26:25',1,NULL),
	(55,'firefly@gmail.com','ook','o','ko','ko','ko','kokoo','okkoko','Tienes los recursos financieros para invertir en u','2016-03-23 22:30:23',1,NULL),
	(57,'dou@gmail.comm','ok','ok','oko','k','ok','okok','oko','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:31:38',1,NULL),
	(58,'esyes@gmail.com','mkmk','mk','mkm','km','km','km','kmkmkm','Tienes los recursos financieros para invertir en u','2016-03-23 22:34:14',1,NULL),
	(59,'she@gmail.com','ok','oko','ko','ko','ko','ko','ko','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:35:23',1,NULL),
	(60,NULL,'oko','ok','ok','ok','o','ko','ko','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:37:30',1,NULL),
	(61,'tellme@gmail.com','kmkkm','kmk','mk','m','kmkmk','mk','mk','Tienes los recursos financieros para invertir en u','2016-03-23 22:38:52',1,NULL),
	(64,'exta@gmail.com','km','kmk','mk','m','kmk','mk','m','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 23:02:26',1,NULL),
	(65,'extasy@gmail.com','km','m','k','mk','mkm','mk','mk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 23:00:39',1,NULL),
	(66,'weekend@gmail.com','kmk','m','km','kmk','mk','mk','mkm','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:57:38',1,NULL),
	(67,'hotbook@gmail.com','mm','m','km','km','km','km','kmk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:57:15',1,NULL),
	(68,'book@gmail.com','kmk','m','km','km','km','km','kmk','Tienes los recursos financieros para invertir en u','2016-03-23 22:56:29',1,NULL),
	(72,'usere@gmail.com','ki','ki','ki','k','ik','iki','ki','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:55:58',1,NULL),
	(73,'userrr@gmail.com','kmmk','mk','mk','mk','mk','mk','mkm','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:55:00',1,NULL),
	(74,'eddie@gmail.com','kmk','m','km','k','m','km','kmkmk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:53:52',1,NULL),
	(75,'edier@gmail.com','mkkmk','mk','mkmk','mkm','km','kmmkm','kmmk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 22:51:50',1,NULL),
	(76,'complete@gmail.com','km','km','km','km','kmk','mk','mk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 23:03:13',1,NULL),
	(77,'bird@gmail.com','kmk','mk','mk','mk','mk','mkm','km','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 23:04:37',1,NULL),
	(78,'hurts@gmail.com','km','kmk','mk','mk','mkmk','kmkkmk','mkmk','Tienes los recursos financieros para invertir en u','2016-03-23 23:05:17',1,NULL),
	(79,'danielogro@gmail.com','iij','i','ji','ji','ji','iji','ji','Tienes los recursos financieros para invertir en u','2016-03-23 23:17:56',1,NULL),
	(80,'okok@gmail.com','km','km','km','km','km','km','k','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 23:18:31',1,NULL),
	(81,'exitos@gmail.com','m','km','km','k','mkm','km','kmk','Tienes los recursos financieros para invertir en u','2016-03-23 23:19:10',1,NULL),
	(82,'just@gmail.com','kmk','m','m','km','km','km','km','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 23:20:05',1,NULL),
	(84,'mala@gmail.com','km','km','m','km','k','mk','mk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 23:23:38',1,NULL),
	(85,'hllo@gmail.com','km','kmk','m','km','m','m','k','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 23:24:23',1,NULL),
	(87,'kmkm@gmail.com','km','km','m','km','mk','kmk','k','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-23 23:27:36',1,NULL),
	(88,'getter@gmail.com','km','k','kk','mk','mk','mkmkm','mkmk','Tienes los recursos financieros para invertir en u','2016-03-23 23:29:43',1,NULL),
	(89,'mailchi@gmail.com','km','km','km','km','km','km','m','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-24 04:53:09',1,NULL),
	(91,'sancho@gmail.com','km','k','m','k','mk','mk','mk','Tienes los recursos financieros para invertir en u','2016-03-24 05:05:47',1,NULL),
	(94,'igto@gmail.com','hgo','hgo','k','l,','l','l,','l','Tienes los recursos financieros para invertir en u','2016-03-24 05:21:12',1,NULL),
	(96,'free@gmail.com','k','mk','m','k','mkm','km','km','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-24 06:36:41',1,NULL),
	(97,'time@gmail.com','time','time','time viber','team veaber','k','k','ok','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-24 13:06:51',1,NULL),
	(98,'rare@gmail.com','mkmk','mk','mk','mk','mk','mk','mkmkmk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-24 14:20:27',1,NULL),
	(99,'VodkaSpritze@gmail.com','lil','tu','676767','kjkjk','kkk','kkk','jjj','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-27 04:12:27',1,NULL),
	(105,'tintin@gmail.com','kj','jkjk','909099090','klklk','lklk','lklk','lklk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-27 04:41:16',1,NULL),
	(108,'blackman@gmail.com','kjkjkjkjkjk','kjkjk','kjk','kkj','kjkj','kjk','kjkj','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-27 04:50:25',1,NULL),
	(116,'gansos@gmail.com','jkjkjkjkjkjkjkjk','jkj','kj','kjk','kk','kj','kk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-27 05:10:57',1,NULL),
	(119,'hello@gmail.com','jkk','kj','k','jk','jk','jk','jk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-28 06:12:53',1,NULL),
	(120,'wololui11@gmail.com','luis','18','5534321354','nel','sepa','100','asd','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-28 06:27:42',1,NULL),
	(126,'email@gmail.com','jk','j','kj','kj','k','k','j','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-28 19:22:38',1,NULL),
	(127,'cuate@gmail.com','kjk','k','jk','jk','jk','jk','jk','Tienes los recursos financieros para invertir en u','2016-03-28 22:13:15',1,NULL),
	(128,'cuatitos@gmail.com','kj','k','jj','k','jk','jk','jkj','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-28 22:13:26',1,NULL),
	(136,'jennygarciatqm@gmail.com','l','kl','kl','kl','kl','kl','kl','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-28 23:02:47',1,NULL),
	(155,'alex@gmail.com','klk','lkl','k','lk','ll','kl','klkl','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 00:29:18',1,NULL),
	(156,'cierre@hotmail.com','kj','kjk','j','k','kj','j','jkjkj','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 00:39:15',1,NULL),
	(157,'tumail@hotmail.com','k','k','j','j','kj','kjk','jk','Tienes los recursos financieros para invertir en u','2016-03-29 00:40:43',1,NULL),
	(159,'motionme@gmail.com','erik','erik','erik','erik','erik','erik','erik','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 22:29:05',1,NULL),
	(160,'helloow@gmail.com','k','j','kj','kj','kj','kjkj','kjk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 22:31:38',1,NULL),
	(161,'kakaka@gmail.com','jk','j','km','j','j','kj','kj','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 22:36:21',1,NULL),
	(162,'asha@hotmail.com','kj','k','jkj','kj','kj','kj','kj','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 22:38:40',1,NULL),
	(163,'thinking@gmail.com','kjk','jk','k','jk','jk','jkjk','jk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 22:41:09',1,NULL),
	(164,'maestro@gmail.com','jk','j','kj','kj','kj','kj','kj','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 22:44:15',1,588),
	(165,'office@gmail.com','kj','k','jk','jkj','kj','kj','kj','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 22:52:28',1,NULL),
	(166,'atocha@gmail.com','di','m','kj','j','kj','k','jk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 22:53:55',1,1),
	(167,'todo@gmail.com','k','j','jk','jk','j','kjk','j','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 23:02:59',1,13),
	(168,'grats@gmail.com','jhj','hj','h','jh','jh','jhjh','jh','Tienes los recursos financieros para invertir en u','2016-03-29 23:16:05',1,2),
	(169,'lin@gmail.com','j','kj','kj','kj','kjk','jk','j','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-29 23:24:17',1,0),
	(170,'today@gmail.com','kj','kj','kj','kj','kjk','jk','j','on','2016-03-30 01:10:06',1,3352),
	(175,'new@gmail.com','lk','l','kl','kl','kl','kl','kl','on','2016-03-30 01:11:21',1,0),
	(176,'datos@gmail.com','j','j','j','j','j','j','j','on','2016-03-30 18:12:51',1,89),
	(177,'correcto@gmail.com','jk','jk','j','kj','kj','kj','k','on','2016-03-30 18:13:56',1,0),
	(179,'allan@gmail.com','kj','k','jk','kj','k','jkj','kjk','on','2016-03-30 19:22:28',1,2147483647),
	(180,'ogro@gmail.com','k','kjk','jk','jk','jk','j','kj','on','2016-03-30 19:23:19',1,2),
	(181,'poke@poke.com','poke','poke','5555555555','no','si','si','si','on','2016-03-30 19:26:25',1,2),
	(182,'good@gmail.com','kl','kl','kl','kl','l','kl','klklklkl','on','2016-03-30 19:33:40',1,9),
	(183,'ruby@gmail.com','kl','kl','kl','kl','kl','klk','l','on','2016-03-30 19:34:55',1,8),
	(184,'leo@gmail.com','kj','k','k','kj','k','jk','jkj','on','2016-03-30 19:38:34',1,7),
	(185,'redlights@gmail.com','kj','kj','k','kj','kj','kj','kjk','on','2016-03-30 19:39:37',1,89),
	(186,'trick@gmail.com','lkk','kl','k','lk','lk','lkl','kl','on','2016-03-30 19:42:03',1,0),
	(187,'places@gmail.com','jajaj','k','j','j','j','j','j','on','2016-03-30 19:44:42',1,2147483647),
	(188,'tete@gmail.com','k','k','k','k','k','k','k','on','2016-03-30 19:45:25',1,3977),
	(205,'lolol@gmail.com','m','km','km','km','km','km','km','on','2016-03-30 22:55:40',1,8),
	(206,'genius@gmail.com','mk','mkm','km','kmk','mk','mkm','kmkmkmkm','on','2016-03-30 22:56:56',1,5),
	(207,'lopez@gmail.com','mk','mk','mk','mkm','kmkmk','mkmk','kmkm','on','2016-03-30 22:58:21',1,14),
	(208,'holo@gmail.com','mkm','km','km','mk','mkm','kmkmkmk','mkmkmkmk','Tienes los recursos financieros para invertir en u','2016-03-30 23:02:45',1,97),
	(209,'notienes@gmail.com','k','k','mk','mk','mkm','km','kmkmkmk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-30 23:04:01',1,343),
	(214,'gepo@gmail.com','mkm','km','km','kmk','mk','mk','mk','Tienes los recursos financieros para invertir en u','2016-03-31 00:01:19',1,9),
	(216,'temas@consultanos.com','mkm','k','m','km','kmk','mk','mkm','Tienes los recursos financieros para invertir en u','2016-03-31 00:45:04',1,8949),
	(220,'erik.genaro@gmail.com','erik','erik','9999999999','kkkkk','kkkk','kkkk','kkkk','No cuentas con recursos, pero estÃ¡s muy interesad','2016-03-31 19:08:01',1,89),
	(222,'erikgrl@hotmail.com','kok','o','kok','oko','kokoko','kokoko','kokoko','Tienes los recursos financieros para invertir en u','2016-03-31 19:18:11',1,733);

/*!40000 ALTER TABLE `Cuestionario` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Formulario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Formulario`;

CREATE TABLE `Formulario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hash` int(40) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Formulario` WRITE;
/*!40000 ALTER TABLE `Formulario` DISABLE KEYS */;

INSERT INTO `Formulario` (`id`, `nombre`, `correo`, `fecha_registro`, `hash`, `status`)
VALUES
	(2,'mojojojo','mojojojo@gmail.com','2016-03-23 18:41:14',2147483647,0),
	(3,'erik','erik@get.com','2016-03-23 18:41:16',0,0),
	(6,'genaro','genaro@gmail.com','2016-03-23 18:41:18',0,0),
	(7,'erik','hola@hotmail.com','2016-03-23 18:41:38',0,0),
	(8,'erik','erik@ge.com','2016-03-23 18:41:20',193,0),
	(9,'gogo','go@hotmail.com','2016-03-23 18:41:22',8,0),
	(10,'erik','word@hotmail.com','2016-03-23 18:41:24',4396,0),
	(11,'firmas','firmas@hotmail.com','2016-03-23 18:41:26',2147483647,0),
	(12,'erik','firm@hotmail.com','2016-03-23 18:41:40',0,0),
	(13,'jesus','roman@yahoo.com','2016-03-23 18:41:30',7110,0),
	(14,'jesus','romano@hotmail.com','2016-03-23 18:41:41',10309,0),
	(15,'erik','nombre@hotmail.com','2016-03-23 18:41:31',0,0),
	(16,'hashing','codigoabierto@hotmail.com','2016-03-23 18:41:43',264,0),
	(17,'challenger ','cha@yahoo.com','2016-03-23 18:41:32',0,0),
	(18,'susie','sussan@gmail.com','2016-03-23 18:41:44',0,0),
	(19,'zacarias','zac@gmail.com','2016-03-23 18:41:34',2,0),
	(20,'erik','mail@hotmail.com','2016-03-23 18:41:45',2815,0),
	(21,'erik','default@hotmail.com','2016-03-23 18:41:46',0,0),
	(22,'erik','default@gmail.com','2016-03-23 18:41:33',9,0),
	(23,'zoka','zoka@entertainment.mx','2016-03-23 18:41:48',668,0),
	(24,'referi','cool@gmail.com','2016-03-23 18:41:35',842066,0),
	(25,'rosario','rosita@gmail.com','2016-03-23 18:41:49',32,0),
	(26,'rene','rene@hotmail.com','2016-03-23 18:41:37',828,0),
	(27,'nuevo','nuevo@hotmail.com','2016-03-23 18:41:50',0,0),
	(28,'JESUS','yisus@hotmail.com','2016-03-23 18:41:52',22,0),
	(29,'becker','becker@hotmail.com','2016-03-23 18:41:53',0,0),
	(30,'Eugenio','eu@gmail.com','2016-03-23 18:41:54',389,0),
	(31,'ezequiates','ezequiel@hotmail.com','2016-03-23 18:40:38',4,0),
	(32,'arely','arely@hot.com','2016-03-23 18:42:14',93,0),
	(33,'jevus','jevus@hotmail.com','2016-03-23 19:00:31',0,0),
	(34,'GokÃ¹','goku@kaiosama.com','2016-03-23 19:01:47',2815,0),
	(35,'kaiosama','kaiosama@hotmail.com','2016-03-23 19:10:12',461742,0),
	(36,'pokedan','pokedan@gmail.com','2016-03-23 19:11:15',5580,0),
	(37,'thor','asgardiano@hotmail.com','2016-03-23 20:01:34',5,0),
	(38,'three','thr@gmail.com','2016-03-23 20:04:01',784,0),
	(39,'erik','grn@gmail.com','2016-03-23 20:04:47',3717862,0),
	(40,'augusto','augusto@gmail.com','2016-03-23 20:06:55',0,0),
	(41,'bueno','bueno@hotmail.com','2016-03-23 20:09:05',0,0),
	(42,'erik','erro@hotmail.com','2016-03-23 20:24:32',0,0),
	(43,'roost','roost@gmail.com','2016-03-23 20:25:55',7127,0),
	(44,'razon','razon@gmail.com','2016-03-23 20:46:48',0,0),
	(45,'naruto','naruto@gmail.com','2016-03-23 20:48:51',0,0),
	(46,'apurar','apurar@hotmail.com','2016-03-23 22:09:23',0,0),
	(47,'tichi','tichi@gmail.com','2016-03-23 22:11:29',708,0),
	(48,'tichi','tich@gmail.com','2016-03-23 22:11:50',0,0),
	(49,'stitch','stitch@hotmail.com','2016-03-23 22:13:48',752,0),
	(50,'chava','chava@gmail.com','2016-03-23 22:16:51',9,0),
	(51,'exito','exito@gmail.com','2016-03-23 22:18:25',2,0),
	(52,'honey','honey@gmail.com','2016-03-23 22:20:37',0,0),
	(53,'where','where@hotmail.com','2016-03-23 22:22:56',9,0),
	(54,'yeahs','yeah@yeahyeahs.com','2016-03-23 22:25:15',0,0),
	(55,'firefly','firefly@gmail.com','2016-03-23 22:29:28',3219,0),
	(56,'download','dou@gmail.com','2016-03-23 22:31:26',0,0),
	(57,'download','dou@gmail.comm','2016-03-23 22:31:29',6,0),
	(58,'eyes','esyes@gmail.com','2016-03-23 22:31:55',581,0),
	(59,'shes','she@gmail.com','2016-03-23 22:35:11',6,0),
	(60,'kkkk','kk@gmail.com','2016-03-23 22:35:41',0,0),
	(61,'tell','tellme@gmail.com','2016-03-23 22:38:43',828,0),
	(62,'tellk','fall@gmail.com','2016-03-23 22:41:24',22,0),
	(63,'here','here@gmail.com','2016-03-23 22:41:38',3352,0),
	(64,'exta','exta@gmail.com','2016-03-23 22:42:11',0,0),
	(65,'extacy','extasy@gmail.com','2016-03-23 22:42:32',9170981,0),
	(66,'week','weekend@gmail.com','2016-03-23 22:43:08',89,0),
	(67,'hotthot','hotbook@gmail.com','2016-03-23 22:44:16',7110,0),
	(68,'book','book@gmail.com','2016-03-23 22:44:29',0,0),
	(69,'uxer','uxer@gail.com','2016-03-23 22:49:17',9,0),
	(70,'user','user@gmail.com','2016-03-23 22:49:31',2147483647,0),
	(71,'user','usar@gmail.com','2016-03-23 22:49:50',0,0),
	(72,'user','usere@gmail.com','2016-03-23 22:50:16',5,0),
	(73,'usar','userrr@gmail.com','2016-03-23 22:50:33',0,0),
	(74,'eddie','eddie@gmail.com','2016-03-23 22:51:13',63573,0),
	(75,'edier','edier@gmail.com','2016-03-23 22:51:27',154,0),
	(76,'complete','complete@gmail.com','2016-03-23 23:03:06',0,0),
	(77,'birid','bird@gmail.com','2016-03-23 23:04:29',1,0),
	(78,'hurts','hurts@gmail.com','2016-03-23 23:05:10',500000,0),
	(79,'danileogro','danielogro@gmail.com','2016-03-23 23:17:27',784,0),
	(80,'okoi','okok@gmail.com','2016-03-23 23:18:23',8,0),
	(81,'exitos','exitos@gmail.com','2016-03-23 23:19:00',84,0),
	(82,'just','just@gmail.com','2016-03-23 23:19:58',49000,0),
	(83,'before','before@gmail.com','2016-03-23 23:20:40',2147483647,0),
	(84,'mala','mala@gmail.com','2016-03-23 23:21:05',0,0),
	(85,'hello','hllo@gmail.com','2016-03-23 23:24:15',708,0),
	(86,'erik','erik@gmail.com','2016-03-23 23:26:25',0,0),
	(87,'kmkm','kmkm@gmail.com','2016-03-23 23:27:27',8,0),
	(88,'gett','getter@gmail.com','2016-03-23 23:29:34',0,0),
	(89,'erik','mailchi@gmail.com','2016-03-24 04:51:08',43,0),
	(90,'exis','exis@gmail.com','2016-03-24 05:03:17',2147483647,0),
	(91,'sanco','sancho@gmail.com','2016-03-24 05:05:36',5,0),
	(92,'erik','eriklll@hot.com','2016-03-24 05:10:28',2147483647,0),
	(93,'noto','noto@gmail.com','2016-03-24 05:10:41',0,0),
	(94,'i got ','igto@gmail.com','2016-03-24 05:20:54',367,0),
	(95,'night','night@gmail.com','2016-03-24 06:35:36',2147483647,0),
	(96,'free','free@gmail.com','2016-03-24 06:36:04',0,0),
	(97,'atime','time@gmail.com','2016-03-24 13:06:16',6,0),
	(98,'rare','rare@gmail.com','2016-03-24 14:20:15',9,0),
	(99,'usernew','VodkaSpritze@gmail.com','2016-03-27 04:11:37',93,0),
	(100,'suit','suitandtie@gmail.com','2016-03-27 04:23:19',6,0),
	(101,'huhu','huhu@gmail.com','2016-03-27 04:32:39',0,0),
	(102,'tupac','tupac@amaru.com','2016-03-27 04:34:28',601,0),
	(103,'video','video@gmail.com','2016-03-27 04:37:06',9,0),
	(104,'biggie','biggie@gmail.com','2016-03-27 04:39:07',0,0),
	(105,'tinn','tintin@gmail.com','2016-03-27 04:41:05',0,0),
	(106,'lectura','lectura@gmail.com','2016-03-27 04:46:35',16,0),
	(107,'clown','clown@gmail.com','2016-03-27 04:48:39',0,0),
	(108,'black','blackman@gmail.com','2016-03-27 04:50:00',4,0),
	(109,'shia','shia@gmail.com','2016-03-27 04:52:39',0,0),
	(110,'wonder','wonderland@gmail.com','2016-03-27 04:57:01',0,0),
	(111,'allk','alll@gmail.com','2016-03-27 05:01:51',79816,0),
	(112,'message','message@gmail.com','2016-03-27 05:02:31',40,0),
	(113,'cents','cents@gmail.com','2016-03-27 05:08:36',2147483647,0),
	(114,'adol','adol@gmail.com','2016-03-27 05:08:56',0,0),
	(115,'ganso','ganso@gmail.com','2016-03-27 05:09:49',0,0),
	(116,'gansos','gansos@gmail.com','2016-03-27 05:10:32',0,0),
	(117,'bull','bull@gmail.com','2016-03-27 23:08:00',0,0),
	(118,'kopl','ioio@gmail.com','2016-03-28 06:10:40',758,0),
	(119,'helloo','hello@gmail.com','2016-03-28 06:11:14',19187,0),
	(120,'luis','wololui11@gmail.com','2016-03-28 06:24:24',43095,0),
	(121,'kiko','wolo@gmail.com','2016-03-28 06:29:28',0,0),
	(122,'sofia','godofwar@gmail.com','2016-03-28 06:30:40',0,0),
	(123,'scroll','scroll@gmail.com','2016-03-28 06:31:30',2,0),
	(124,'allan Thome','correo@gmail.mx','2016-03-28 18:52:52',2147483647,0),
	(125,'poke','poke@gmail.com','2016-03-28 18:53:28',0,0),
	(126,'nombre','email@gmail.com','2016-03-28 19:22:01',7,0),
	(127,'cuate','cuate@gmail.com','2016-03-28 22:12:26',708,0),
	(128,'cuatitos','cuatitos@gmail.com','2016-03-28 22:12:50',0,0),
	(133,'test','testergena@gmail.com','2016-03-28 22:42:13',2147483647,0),
	(134,'regitro','regitro@gmail.com','2016-03-28 22:51:33',8,0),
	(137,'erik','mailinexistente@gmail.com','2016-03-28 23:15:39',5,0),
	(139,'marca','marca@gmail.com','2016-03-28 23:30:53',7,0),
	(151,'nuevo','nuevo@gmail.com','2016-03-29 00:15:43',4728,0),
	(152,'glenn quagmire','glennquagmire@gmail.com','2016-03-29 00:17:01',0,0),
	(154,'erik','geop@gmail.com','2016-03-29 00:24:50',71,0),
	(155,'alex','alex@gmail.com','2016-03-29 00:29:02',5,0),
	(156,'cierre','cierre@hotmail.com','2016-03-29 00:38:55',0,0),
	(157,'erik','tumail@hotmail.com','2016-03-29 00:40:21',887309,0),
	(159,'motion','motionme@gmail.com','2016-03-29 22:23:52',7,0),
	(160,'helloou','helloow@gmail.com','2016-03-29 22:31:22',12,0),
	(161,'kjkjkk','kakaka@gmail.com','2016-03-29 22:32:28',5,0),
	(162,'asha','asha@hotmail.com','2016-03-29 22:38:27',0,0),
	(163,'think','thinking@gmail.com','2016-03-29 22:40:56',0,0),
	(164,'maestro','maestro@gmail.com','2016-03-29 22:43:50',0,0),
	(165,'poder','office@gmail.com','2016-03-29 22:47:04',392330,0),
	(166,'atocha','atocha@gmail.com','2016-03-29 22:52:39',90,0),
	(167,'todo','todo@gmail.com','2016-03-29 22:55:29',0,0),
	(168,'grats','grats@gmail.com','2016-03-29 23:03:20',84,0),
	(169,'lino','lin@gmail.com','2016-03-29 23:18:36',0,0),
	(170,'oioi','today@gmail.com','2016-03-29 23:25:17',8383,0),
	(171,'alala','alala@gmail.com','2016-03-29 23:30:20',6,0),
	(172,'miss','miss@gmaill.com','2016-03-29 23:31:11',0,0),
	(174,'erik','pokedanogro@gmail.com','2016-03-30 00:16:44',708,0),
	(175,'nuevos','new@gmail.com','2016-03-30 00:18:54',0,0),
	(176,'datos','datos@gmail.com','2016-03-30 18:11:58',55,0),
	(177,'correcto','correcto@gmail.com','2016-03-30 18:13:43',15,0),
	(179,'allan','allan@gmail.com','2016-03-30 19:21:55',1,0),
	(180,'ogro','ogro@gmail.com','2016-03-30 19:23:07',0,0),
	(181,'pokepoke','poke@poke.com','2016-03-30 19:25:28',3028,0),
	(182,'erik','good@gmail.com','2016-03-30 19:32:45',6216,0),
	(183,'rails','ruby@gmail.com','2016-03-30 19:34:27',0,0),
	(184,'leon','leo@gmail.com','2016-03-30 19:37:25',5,0),
	(185,'redligh','redlights@gmail.com','2016-03-30 19:39:10',4,0),
	(186,'trick','trick@gmail.com','2016-03-30 19:41:48',0,0),
	(187,'erik','places@gmail.com','2016-03-30 19:44:17',0,0),
	(188,'twte','tete@gmail.com','2016-03-30 19:45:06',0,0),
	(202,'brow','brow@gmail.com','2016-03-30 22:47:59',7,0),
	(203,'erik','eroo@gmail.com','2016-03-30 22:52:09',2147483647,0),
	(204,'erik','eo@gmail.com','2016-03-30 22:52:13',1,0),
	(205,'kkkk','lolol@gmail.com','2016-03-30 22:52:27',0,0),
	(206,'geno','genius@gmail.com','2016-03-30 22:56:39',9,0),
	(207,'lope','lopez@gmail.com','2016-03-30 22:58:04',0,0),
	(208,'holo','holo@gmail.com','2016-03-30 23:02:28',4,0),
	(209,'notienes','notienes@gmail.com','2016-03-30 23:03:45',6,0),
	(210,'status','status2@gmail.com','2016-03-30 23:13:43',0,0),
	(213,'erik','testera@gmail.com','2016-03-31 00:00:12',2147483647,0),
	(214,'gepo','gepo@gmail.com','2016-03-31 00:00:57',5,0),
	(215,'eirk','actual@gmail.com','2016-03-31 00:42:17',3741,0),
	(216,'tema','temas@consultanos.com','2016-03-31 00:44:38',20,0),
	(220,'thome','erik.genaro@gmail.com','2016-03-31 19:06:48',0,0),
	(222,'erik','erikgrl@hotmail.com','2016-03-31 19:16:52',7719,0);

/*!40000 ALTER TABLE `Formulario` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
