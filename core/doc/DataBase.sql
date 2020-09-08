CREATE DATABASE  IF NOT EXISTS `db_danza` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `db_danza`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: db_danza
-- ------------------------------------------------------
-- Server version	5.7.28-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_acerca`
--

DROP TABLE IF EXISTS `tbl_acerca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_acerca` (
  `id_acerca` int(11) NOT NULL DEFAULT '1',
  `titulo_acerca` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `acerca` varchar(500) COLLATE utf8_spanish_ci DEFAULT 'default',
  `imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT 'default',
  PRIMARY KEY (`id_acerca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_acerca`
--

LOCK TABLES `tbl_acerca` WRITE;
/*!40000 ALTER TABLE `tbl_acerca` DISABLE KEYS */;
INSERT INTO `tbl_acerca` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus modi, ipsa ratione eius et placeat minus eos vel veritatis, temporibus, voluptates ducimus commodi doloremque adipisci dolor omnis rerum vero explicabo!  ','														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus modi, ipsa ratione eius et placeat minus eos vel veritatis, temporibus, voluptates ducimus commodi doloremque adipisci dolor omnis rerum vero explicabo!	\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus modi, ipsa ratione eius et placeat minus eos vel veritatis, temporibus, voluptates ducimus commodi doloremque adipisci dolor omnis rerum vero explicabo!																						','~99e1ba73.jpg');
/*!40000 ALTER TABLE `tbl_acerca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_banner`
--

DROP TABLE IF EXISTS `tbl_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_msj` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mensaje` text CHARACTER SET utf8,
  `imagen` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `face` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `twitter` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `instagram` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_banner`
--

LOCK TABLES `tbl_banner` WRITE;
/*!40000 ALTER TABLE `tbl_banner` DISABLE KEYS */;
INSERT INTO `tbl_banner` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, nulla?','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis et consectetur, aliquid! Sapiente esse minus dignissimos, assumenda unde labore incidunt tempore quisquam reiciendis reprehenderit in accusantium, quaerat, saepe mollitia magnam!','~0a2c83f5.png','dffd','dfdf','fd','df');
/*!40000 ALTER TABLE `tbl_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ciudad`
--

DROP TABLE IF EXISTS `tbl_ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ciudad` (
  `id_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `id_estado` int(11) DEFAULT NULL,
  `ciudad` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `capital` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ciudad`),
  KEY `id_estado_idx` (`id_estado`),
  CONSTRAINT `id_estado` FOREIGN KEY (`id_estado`) REFERENCES `tbl_estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=341 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ciudad`
--

LOCK TABLES `tbl_ciudad` WRITE;
/*!40000 ALTER TABLE `tbl_ciudad` DISABLE KEYS */;
INSERT INTO `tbl_ciudad` VALUES (1,1,'La Esmeralda',0),(2,1,'San Fernando de Atabapo',0),(3,1,'Puerto Ayacucho',1),(4,1,'Isla Ratón',1),(5,1,'Maroa',1),(6,1,'San Juan de Manapiare',1),(7,1,'San Carlos de Río Negro',1),(8,2,'Anaco',0),(9,2,'Aragua de Barcelona',0),(10,2,'Puerto Píritu',0),(11,2,'Pariaguán',0),(12,2,'Barcelona',1),(13,2,'Clarines',0),(14,2,'Onoto',0),(15,2,'Valle de Guanape',0),(16,2,'Lechería',0),(17,2,'Cantaura',0),(18,2,'San José de Guanipa',0),(19,2,'Guanta',0),(20,2,'Soledad',0),(21,2,'San Mateo Anzoátegui',0),(22,2,'El Chaparro',0),(23,2,'San Diego de Cabrutica',0),(24,2,'Píritu',0),(25,2,'Boca de Uchire',0),(26,2,'Santa Ana de Anzoátegui',0),(27,2,'El Tigre',0),(28,2,'Puerto La Cruz',0),(29,2,'Mapire',0),(30,2,'Lecherias',0),(31,3,'Achaguas',0),(32,3,'Biruaca',0),(33,3,'Bruzual',0),(34,3,'Guasdualito',0),(35,3,'San Juan de Payara',0),(36,3,'Elorza',0),(37,3,'San Fernando de Apure',1),(38,4,'San Mateo',0),(39,4,'Camatagua',0),(40,4,'Santa Rita',0),(41,4,'Maracay',1),(42,4,'Santa Cruz de Aragua',0),(43,4,'La Victoria',0),(44,4,'El Consejo',0),(45,4,'Palo Negro',0),(46,4,'El Limon',0),(47,4,'Ocumare de La Costa',0),(48,4,'San Casimiro',0),(49,4,'San Sebastián',0),(50,4,'Turmero',0),(51,4,'Las Tejerías',0),(52,4,'Cagua',0),(53,4,'Colonia Tovar',0),(54,4,'Barbacoas',0),(55,4,'Villa de Cura',0),(56,5,'Sabaneta',0),(57,5,'El Cantón',0),(58,5,'Socopó',0),(59,5,'Arismendi',0),(60,5,'Barinas',1),(61,5,'Barinitas',0),(62,5,'Barrancas',0),(63,5,'Santa Bárbara de Barinas',0),(64,5,'Obispos',0),(65,5,'Ciudad Bolivia',0),(66,5,'Libertad',0),(67,5,'Ciudad de Nutrias',0),(68,6,'Ciudad Guayana',0),(69,6,'Caicara del Orinoco',0),(70,6,'El Callao',0),(71,6,'Santa Elena de Uairén',0),(72,6,'Ciudad Bolívar',1),(73,6,'Upata',0),(74,6,'Ciudad Piar',0),(75,6,'Guasipati',0),(76,6,'Tumeremo',0),(77,6,'Maripa',0),(78,6,'El Palmar',0),(79,7,'Bejuma',0),(80,7,'Belén',0),(81,7,'Guigue',0),(82,7,'Guacara',0),(83,7,'Morón',0),(84,7,'Tocuyito',0),(85,7,'Los Guayos',0),(86,7,'Miranda',0),(87,7,'Montalbán',0),(88,7,'Naguanagua',0),(89,7,'Puerto Cabello',0),(90,7,'San Diego',0),(91,7,'San Joaquín',0),(92,7,'Valencia',1),(93,7,'Campo de Carabobo',0),(94,7,'Canoabo',0),(95,7,'Central Tacarigua',0),(96,7,'Chirgua',0),(97,7,'Ciudad Alianza',0),(98,7,'El Palito',0),(99,7,'Las Trincheras',0),(100,7,'Mariara',0),(101,7,'Urama',0),(102,7,'Vigirimita',0),(103,8,'Cojedes',0),(104,8,'Tinaquillo',0),(105,8,'El Baúl',0),(106,8,'Macapo',0),(107,8,'El Pao Cojedes',0),(108,8,'Libertad de Cojedes',0),(109,8,'Tinaco',0),(110,8,'Las Vegas',0),(111,8,'San Carlos',1),(112,9,'Curiapo',1),(113,9,'Sierra Imataca',1),(114,9,'Pedernales',1),(115,9,'Tucupita',1),(116,10,'San Juan de Los Cayos',0),(117,10,'San Luis',0),(118,10,'Capatárida',0),(119,10,'Yaracal',0),(120,10,'Punto Fijo',0),(121,10,'La Vela de Coro',0),(122,10,'Dabajuro',0),(123,10,'Pedregal',0),(124,10,'Pueblo Nuevo Falcón',0),(125,10,'Churuguara',0),(126,10,'Judibana',0),(127,10,'La Cruz de Los Taques',0),(128,10,'Mene de Mauroa',0),(129,10,'Santa Ana Falcón',0),(130,10,'Chichiriviche',0),(131,10,'Palmasola',0),(132,10,'Cabure',0),(133,10,'Píritu Falcón',0),(134,10,'Mirimire',0),(135,10,'Tucacas',0),(136,10,'La Cruz de Taratara',0),(137,10,'Tocopero',0),(138,10,'Santa Cruz De Bucaral',0),(139,10,'Urumaco',0),(140,10,'Puerto Cumarebo',0),(141,11,'Camaguán',0),(142,11,'Chaguaramas Guárico',0),(143,11,'El Socorro',0),(144,11,'Calabozo',0),(145,11,'Tucupido',0),(146,11,'Altagracia de Orituco',0),(147,11,'San Juan de Los Morros',1),(148,11,'El Sombrero',0),(149,11,'Las Mercedes de Los Llanos',0),(150,11,'Valle de La Pascua',0),(151,11,'Zaraza',0),(152,11,'Ortíz',0),(153,11,'Guayabal',0),(154,11,'San José de Guaribe',0),(155,11,'Santa María de Ipire',0),(156,11,'Cabruta',0),(157,11,'Lezama',0),(158,11,'Onoto',0),(159,11,'San Rafael de Laya',0),(160,12,'Sarare',0),(161,12,'Duaca',0),(162,12,'Barquisimeto',1),(163,12,'Quíbor',0),(164,12,'El Tocuyo',0),(165,12,'Cabudare',0),(166,12,'Sarare',0),(167,12,'Carora',0),(168,12,'Siquisique',0),(169,13,'El Vigía',0),(170,13,'La Azulita',0),(171,13,'Santa Cruz de Mora',0),(172,13,'Lagunillas Mérida',0),(173,13,'Tovar',0),(174,13,'Nueva Bolivia',0),(175,13,'Zea',0),(176,13,'Aricagua',0),(177,13,'Canagua',0),(178,13,'Ejido',0),(179,13,'Tucaní',0),(180,13,'Santo Domingo',0),(181,13,'Guaraque',0),(182,13,'Arapuey',0),(183,13,'Torondoy',0),(184,13,'Mérida',0),(185,13,'Timotes',0),(186,13,'Santa Elena de Arenales',0),(187,13,'Santa María de Caparo',0),(188,13,'Pueblo Llano',0),(189,13,'Mucuchíes',0),(190,13,'Bailadores',0),(191,13,'Tabay',0),(192,14,'Caucagua',0),(193,14,'San José de Barlovento',0),(194,14,'Baruta',0),(195,14,'Higuerote',0),(196,14,'Mamporal',0),(197,14,'Carrizal',0),(198,14,'Chacao',0),(199,14,'Charallave',0),(200,14,'El Jarillo',0),(201,14,'Santa Teresa del Tuy',0),(202,14,'Ocumare del Tuy',0),(203,14,'San Antonio de Los Altos',0),(204,14,'Río Chico',0),(205,14,'Santa Lucía',0),(206,14,'Cupira',0),(207,14,'Guarenas',0),(208,14,'San Francisco de Yare',0),(209,14,'Petare',0),(210,14,'Cúa',0),(211,14,'Guatire',0),(212,15,'San Antonio de Capayacuar',0),(213,15,'Aguasay',0),(214,15,'Caicara de Maturín',0),(215,15,'Punta de Mata',0),(216,15,'Temblador',0),(217,15,'Maturín',1),(218,15,'Aragua de Maturín',0),(219,15,'Quiriquire',0),(220,15,'Santa Bárbara',0),(221,15,'Barrancas del Orinoco',0),(222,15,'Uracoa',0),(223,15,'Caripito',0),(224,15,'Caripe',0),(225,16,'La Plaza de Paraguachí',0),(226,16,'La Asunción',1),(227,16,'San Juan Bautista',0),(228,16,'El Valle del Espíritu Santo',0),(229,16,'Santa Ana de Nueva Esparta',0),(230,16,'Pampatar',0),(231,16,'Juan Griego',0),(232,16,'Porlamar',0),(233,16,'Boca de Río',0),(234,16,'Punta de Piedras',0),(235,16,'San Pedro de Coche',0),(236,17,'Agua Blanca',0),(237,17,'Araure',0),(238,17,'Píritu de Portuguesa',0),(239,17,'Guanare',1),(240,17,'Guanarito',0),(241,17,'Chabasquén de Unda',0),(242,17,'Ospino',0),(243,17,'Acarigua',0),(244,17,'Papelón',0),(245,17,'Boconoito',0),(246,17,'San Rafael de Onoto',0),(247,17,'El Playon',0),(248,17,'Biscucuy',0),(249,17,'Villa Bruzual',0),(250,17,'Agua Blanca',0),(251,18,'Casanay',0),(252,18,'San José de Aerocuar',0),(253,18,'Río Caribe',0),(254,18,'El Pilar',0),(255,18,'Carúpano',0),(256,18,'Mariguitar',0),(257,18,'Yaguaraparo',0),(258,18,'Araya',0),(259,18,'Tunapuy',0),(260,18,'Irapa',0),(261,18,'San Antonio del Golfo',0),(262,18,'Cumanacoa',0),(263,18,'Cariaco',0),(264,18,'Cumaná',1),(265,18,'Guiria',0),(266,19,'Cordero',0),(267,19,'Las Mesas',0),(268,19,'Colón',0),(269,19,'San Antonio del Tachira',0),(270,19,'Tariba',0),(271,19,'Santa Ana Táchira',0),(272,19,'El Pinal',0),(273,19,'San José de Bolívar',0),(274,19,'La Fría',0),(275,19,'Palmira',0),(276,19,'Capacho Nuevo',0),(277,19,'La Grita',0),(278,19,'El Cobre',0),(279,19,'Rubio',0),(280,19,'Umuquena',0),(281,19,'Capacho Viejo',0),(282,19,'Abejales',0),(283,19,'Lobatera',0),(284,19,'Michelena',0),(285,19,'Coloncito',0),(286,19,'Ureña',0),(287,19,'Las Delicias',0),(288,19,'La Tendida',0),(289,19,'San Cristobal',1),(290,19,'Seboruco',0),(291,19,'San Simon',0),(292,19,'Queniquea',0),(293,19,'San Josecito',0),(294,19,'Pregonero',0),(295,20,'Santa Isabel',0),(296,20,'Boconó',0),(297,20,'Sabana Grande',0),(298,20,'Chejende',0),(299,20,'Carache',0),(300,20,'Escuque',0),(301,20,'El Paradero',0),(302,20,'Campo Elias',0),(303,20,'Santa Apolonia',0),(304,20,'El Dividive',0),(305,20,'Pampán',0),(306,20,'Trujillo',1),(307,20,'San Lázaro',0),(308,20,'Pampanito',0),(309,20,'Monte Carmelo',0),(310,20,'Motatán',0),(311,20,'Betijoque',0),(312,20,'Carvajal',0),(313,20,'Sabana de Mendoza',0),(314,20,'La Quebrada',0),(315,20,'Valera',0),(316,21,'La Guaira',0),(317,22,'Aroa',0),(318,22,'Boraure',0),(319,22,'Campo Elías de Yaracuy',0),(320,22,'Chivacoa',0),(321,22,'Cocorote',0),(322,22,'Farriar',0),(323,22,'Guama',0),(324,22,'Marín',0),(325,22,'Nirgua',0),(326,22,'Sabana de Parra',0),(327,22,'Salom',0),(328,22,'San Felipe',1),(329,22,'San Pablo de Yaracuy',0),(330,22,'Urachiche',0),(331,22,'Yaritagua',0),(332,22,'Yumare',0),(333,23,'El Toro',0),(334,23,'San Timoteo',0),(335,23,'Cabimas',0),(336,23,'Encontrados',0),(337,23,'San Carlos del Zulia',0),(338,23,'Pueblo Nuevo El Chivo',0),(339,23,'La Concepción',0),(340,23,'Casigua El Cubo',0);
/*!40000 ALTER TABLE `tbl_ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estado`
--

DROP TABLE IF EXISTS `tbl_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `iso_3166-2` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estado`
--

LOCK TABLES `tbl_estado` WRITE;
/*!40000 ALTER TABLE `tbl_estado` DISABLE KEYS */;
INSERT INTO `tbl_estado` VALUES (1,'Amazonas','VE-X'),(2,'Anzoátegui','VE-B'),(3,'Apure','VE-C'),(4,'Aragua','VE-D'),(5,'Barinas','VE-E'),(6,'Bolívar','VE-F'),(7,'Carabobo','VE-G'),(8,'Cojedes','VE-H'),(9,'Delta Amacuro','VE-Y'),(10,'Falcón','VE-I'),(11,'Guárico','VE-J'),(12,'Lara','VE-K'),(13,'Mérida','VE-L'),(14,'Miranda','VE-M'),(15,'Monagas','VE-N'),(16,'Nueva Esparta','VE-O'),(17,'Portuguesa','VE-P'),(18,'Sucre','VE-R'),(19,'Táchira','VE-S'),(20,'Trujillo','VE-T'),(21,'Vargas','VE-W'),(22,'Yaracuy','VE-U'),(23,'Zulia','VE-V'),(24,'Distrito Capital','VE-A'),(25,'Dependencias Federales','VE-Z');
/*!40000 ALTER TABLE `tbl_estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estatus`
--

DROP TABLE IF EXISTS `tbl_estatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estatus` (
  `id_estatus` int(11) NOT NULL AUTO_INCREMENT,
  `estaus` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estatus`
--

LOCK TABLES `tbl_estatus` WRITE;
/*!40000 ALTER TABLE `tbl_estatus` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_estatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_imagenes`
--

DROP TABLE IF EXISTS `tbl_imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `file_hash` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `extension` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_imagenes`
--

LOCK TABLES `tbl_imagenes` WRITE;
/*!40000 ALTER TABLE `tbl_imagenes` DISABLE KEYS */;
INSERT INTO `tbl_imagenes` VALUES (1,'thumb-1920-779395','59df5042','jpg','banner'),(2,'g1','0c038772','jpg','acerca'),(3,'p2','17bf949d','jpg','acerca'),(4,'t1','cfd29c08','jpg','acerca'),(5,'thumb-1920-779395','085eadfc','jpg','banner'),(6,'thumb-1920-779395','997b6d46','jpg','banner'),(7,'thumb-1920-696454','0a2c83f5','png','banner'),(8,'g9','99e1ba73','jpg','acerca');
/*!40000 ALTER TABLE `tbl_imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_municipio`
--

DROP TABLE IF EXISTS `tbl_municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_municipio` (
  `id_municipio` int(11) NOT NULL AUTO_INCREMENT,
  `id_ciudad` int(11) DEFAULT NULL,
  `municipio` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_municipio`),
  KEY `id_ciudad_idx` (`id_ciudad`),
  CONSTRAINT `id_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `tbl_ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_municipio`
--

LOCK TABLES `tbl_municipio` WRITE;
/*!40000 ALTER TABLE `tbl_municipio` DISABLE KEYS */;
INSERT INTO `tbl_municipio` VALUES (1,1,'Alto Orinoco'),(2,2,'Atabapo'),(3,3,'Atures'),(4,4,'Autana'),(5,6,'Manapiare'),(6,5,'Maroa'),(7,7,'Río Negro'),(8,8,'Anaco'),(9,9,'Aragua'),(10,10,'Peñalver'),(11,11,'Miranda'),(12,12,'Bolívar'),(13,13,'Bruzual'),(14,14,'Cajigal'),(15,15,'Carvajal'),(16,16,'Diego Bautista Urbaneja'),(17,17,'Freites'),(18,18,'Guanipa'),(19,19,'Guanta'),(20,20,'Independencia'),(21,21,'Libertad'),(22,22,'McGregor'),(23,23,'Monagas'),(24,24,'Píritu'),(25,25,'San Juan de Capistrano'),(26,26,'Santa Ana'),(27,27,'Simón Rodriguez'),(28,28,'Sotillo'),(29,29,'José Gregorio Monagas'),(30,30,'Diego Bautista Urbaneja'),(31,31,'Achaguas'),(32,32,'Biruaca'),(33,33,'Muñoz'),(34,34,'Páez'),(35,35,'Pedro Camejo'),(36,36,'Rómulo Gallegos'),(37,37,'San Fernando'),(38,38,'Bolívar'),(39,39,'Camatagua'),(40,40,'Francisco Linares Alcántara'),(41,41,'Girardot'),(42,42,'José Ángel Lamas'),(43,43,'José Félix Ribas'),(44,44,'José Rafael Revenga'),(45,45,'Libertador'),(46,46,'Mario Briceño Iragorry'),(47,47,'Ocumare de la Costa de Oro'),(48,48,'San Casimiro'),(49,49,'San Sebastián'),(50,50,'Santiago Mariño'),(51,51,'Santos Michelena'),(52,52,'Sucre'),(53,53,'Tovar'),(54,54,'Urdaneta'),(55,55,'Zamora'),(56,56,'Alberto Arvelo Torrealba'),(57,57,'Andrés Eloy Blanco'),(58,58,'Antonio José de Sucre'),(59,59,'Arismendi'),(60,60,'Barinas'),(61,61,'Bolívar'),(62,62,'Cruz Paredes'),(63,63,'Ezequiel Zamora'),(64,64,'Obispos'),(65,65,'Pedraza'),(66,66,'Rojas'),(67,67,'Sosa'),(68,68,'Caroní'),(69,69,'Cedeño'),(70,70,'El Callao'),(71,71,'Gran Sabana'),(72,72,'Heres'),(73,73,'Piar'),(74,74,'Raúl Leoni'),(75,75,'Roscio'),(76,76,'Sifontes'),(77,77,'Sucre'),(78,78,'Padre Pedro Chen'),(79,79,'Bejuma'),(80,81,'Carlos Arvelo'),(81,100,'Diego Ibarra'),(82,82,'Guacara'),(83,83,'Juan José Mora'),(84,84,'Libertador'),(85,85,'Los Guayos'),(86,86,'Miranda'),(87,87,'Montalbán'),(88,88,'Naguanagua'),(89,89,'Puerto Cabello'),(90,90,'San Diego'),(91,91,'San Joaquín'),(92,92,'Valencia'),(93,103,'Anzoátegui'),(94,104,'Falcón'),(95,105,'Girardot'),(96,106,'Lima Blanco'),(97,107,'Pao de San Juan Bautista'),(98,108,'Ricaurte'),(99,110,'Rómulo Gallegos'),(100,111,'Ezequiel Zamora'),(101,109,'Tinaco'),(102,112,'Antonio Díaz Curiapo'),(103,113,'Casacoima'),(104,114,'Pedernales'),(105,115,'Tucupita'),(106,116,'Acosta'),(107,117,'Bolívar'),(108,118,'Buchivacoa'),(109,119,'Cacique Manaure'),(110,120,'Carirubana'),(111,121,'Colina'),(112,122,'Dabajuro'),(113,123,'Democracia'),(114,124,'Falcón'),(115,125,'Federación'),(116,127,'Los Taques'),(117,126,'Jacura'),(118,128,'Mauroa'),(119,129,'Miranda'),(120,130,'Monseñor Iturriza'),(121,131,'Palmasola'),(122,132,'Petit'),(123,133,'Píritu'),(124,134,'San Francisco'),(125,135,'Silva'),(126,136,'Sucre'),(127,137,'Tocópero'),(128,138,'Unión'),(129,139,'Urumaco'),(130,140,'Zamora'),(131,141,'Esteros de Camaguan'),(132,142,'Chaguaramas'),(133,143,'El Socorro'),(134,144,'Francisco de Miranda'),(135,145,'José Félix Ribas'),(136,146,'José Tadeo Monagas'),(137,147,'Juan Germán Roscio'),(138,148,'Julián Mellado'),(139,148,'Las Mercedes'),(140,150,'Leonardo Infante'),(141,151,'Pedro Zaraza'),(142,152,'Ortíz'),(143,153,'San Gerónimo de Guayabal'),(144,154,'San José de Guaribe'),(145,155,'Santa María de Ipire'),(146,160,'Andrés Eloy Blanco'),(147,161,'Crespo'),(148,162,'Iribarren'),(149,163,'Jiménez'),(150,164,'Morán'),(151,165,'Palavecino'),(152,166,'Simón Planas'),(153,167,'Torres'),(154,168,'Urdaneta'),(155,169,'Alberto Adriani'),(156,170,'Andrés Bello'),(157,171,'Antonio Pinto Salinas'),(158,172,'Sucre'),(159,173,'Tovar'),(160,174,'Tulio Febres Cordero'),(161,175,'Zea'),(162,176,'Aricagua'),(163,177,'Arzobispo Chacón'),(164,178,'Campo Elías'),(165,179,'Caracciolo Parra Olmedo'),(166,180,'Cardenal Quintero'),(167,181,'Guaraque'),(168,182,'Julio César Salas'),(169,183,'Justo Briceño'),(170,184,'Libertador'),(171,185,'Miranda'),(172,186,'Obispo Ramos de Lora'),(173,187,'Padre Noguera'),(174,188,'Pueblo Llano'),(175,189,'Rangel'),(176,190,'Rivas Dávila'),(177,191,'Santos Marquina'),(178,192,'Acevedo'),(179,193,'Andrés Bello'),(180,194,'Baruta'),(181,195,'Brión'),(182,196,'Buroz'),(183,197,'Carrizal'),(184,198,'Chacao'),(185,199,'Cristóbal Rojas'),(186,200,'El Hatillo'),(187,201,'Independencia'),(188,202,'Lander'),(189,203,'Los Salias'),(190,204,'Páez'),(191,205,'Paz Castillo'),(192,206,'Pedro Gual'),(193,207,'La Plaza'),(194,208,'Simón Bolívar'),(195,209,'Sucre'),(196,210,'Urdaneta'),(197,211,'Zamora'),(198,212,'Acosta'),(199,213,'Aguasay'),(200,214,'Cedeño'),(201,215,'Ezequiel Zamora'),(202,216,'Libertador'),(203,217,'Maturín'),(204,218,'Piar'),(205,219,'Punceres'),(206,220,'Santa Bárbara'),(207,221,'Sotillo'),(208,222,'Uracoa'),(209,223,'Bolívar'),(210,224,'Caripe'),(211,225,'Antolín del Campo'),(212,226,'Arismendi'),(213,227,'Díaz'),(214,228,'García'),(215,229,'Gómez'),(216,230,'Maneiro'),(217,231,'Marcano'),(218,232,'Mariño'),(219,233,'Península de Macanao'),(220,234,'Tubores'),(221,235,'Villalba'),(222,236,'Agua Blanca'),(223,237,'Araure'),(224,238,'Esteller'),(225,239,'Guanare'),(226,240,'Guanarito'),(227,241,'Monseñor José Vicenti de Unda'),(228,242,'Ospino'),(229,243,'Páez'),(230,244,'Papelón'),(231,245,'San Genaro de Boconoíto'),(232,246,'San Rafael de Onoto'),(233,247,'Santa Rosalía'),(234,248,'Sucre'),(235,249,'Turén'),(236,250,'Agua Blanca');
/*!40000 ALTER TABLE `tbl_municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_perfil`
--

DROP TABLE IF EXISTS `tbl_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_perfil`
--

LOCK TABLES `tbl_perfil` WRITE;
/*!40000 ALTER TABLE `tbl_perfil` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  `user` varchar(10) NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  `id_estatu_usuario` int(1) NOT NULL DEFAULT '0',
  `id_perfil` int(1) DEFAULT NULL,
  `imagen_perfil` varchar(100) DEFAULT NULL,
  `clave_correo` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `smtp_host` varchar(100) DEFAULT NULL,
  `smtp_port` varchar(5) DEFAULT '80',
  `smtp_secure` varchar(5) DEFAULT 'false',
  `direccion` text,
  `id_estado` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `id_municipio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (1,'william21enrique@gmail.com','we21','william','infante',1,1,NULL,'aWNpKzE3QlZkMlU0MSs5TVJ5TytVQT09','aWNpKzE3QlZkMlU0MSs5TVJ5TytVQT09',NULL,'80','false','calle 34 entre av 10 y 11',1,3,3);
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_danza'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-19 21:39:24
