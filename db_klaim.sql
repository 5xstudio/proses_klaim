-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: db_klaim
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Current Database: `db_klaim`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `db_klaim` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_klaim`;

--
-- Table structure for table `db_ban`
--

DROP TABLE IF EXISTS `db_ban`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_ban` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `grup` enum('PCR','MC') NOT NULL,
  `alur_ban` double(8,1) NOT NULL DEFAULT '0.0',
  `pattern` varchar(100) NOT NULL,
  `brand` enum('Achilles','Corsa') NOT NULL,
  `type` enum('Tubeless','Tubetipe') NOT NULL,
  `harga` varchar(100) NOT NULL,
  `li` varchar(50) DEFAULT NULL,
  `si` varchar(50) DEFAULT NULL,
  `ukuran_ban` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_ban`
--

LOCK TABLES `db_ban` WRITE;
/*!40000 ALTER TABLE `db_ban` DISABLE KEYS */;
INSERT INTO `db_ban` VALUES (1,'S01709014TT','70/90 - 14 M/C 34P Corsa S01 (Tube type)','MC',4.3,'S 01','Corsa','Tubetipe','130000',NULL,NULL,NULL),(2,'S01809014TT','80/90 - 14 M/C 40P Corsa S01 (Tube type)','MC',4.8,'S 01','Corsa','Tubetipe','156000',NULL,NULL,NULL),(3,'S01909014TT','90/90-14 46P Corsa S01 (Tube type)','MC',5.8,'S 01','Corsa','Tubetipe','190000',NULL,NULL,NULL),(4,'S01709017TT','70/90 - 17 M/C 38P Corsa S01 (Tube type)','MC',4.8,'S 01','Corsa','Tubetipe','156000',NULL,NULL,NULL),(5,'S01808017TT','80/80 - 17 M/C 41P Corsa S01 (Tube type)','MC',4.8,'S 01','Corsa','Tubetipe','175000',NULL,NULL,NULL),(6,'S01809017TT','80/90 - 17 M/C 44P Corsa S01 (Tube type)','MC',4.8,'S 01','Corsa','Tubetipe','193000',NULL,NULL,NULL),(7,'S01908017TT','90/80 - 17 M/C 46P CORSA S01 (Tube type)','MC',5.8,'S 01','Corsa','Tubetipe','219000',NULL,NULL,NULL),(8,'S33709017TT','70/90-17 M/C 38P Corsa S33 T/T (Tube Type)','MC',4.8,'S 33','Corsa','Tubetipe','156000',NULL,NULL,NULL),(9,'S33808017TT','80/80-17 M/C 41P Corsa S33 T/T (Tube Type)','MC',4.8,'S 33','Corsa','Tubetipe','175000',NULL,NULL,NULL),(10,'S33809017TT','80/90-17 M/C 44P Corsa S33 T/T (Tube Type)','MC',4.8,'S 33','Corsa','Tubetipe','193000',NULL,NULL,NULL),(11,'S33908017TT','90/80-17 M/C 46P Corsa S33 T/T (Tube Type)','MC',5.8,'S 33','Corsa','Tubetipe','219000',NULL,NULL,NULL),(12,'S22709014TT','70/90-14 M/C 34P Corsa S22 T/T (Tube Type)','MC',4.3,'S22','Corsa','Tubetipe','130000',NULL,NULL,NULL),(13,'S22809014TT','80/90-14 M/C 40P Corsa S22 T/T (Tube Type)','MC',4.8,'S22','Corsa','Tubetipe','156000',NULL,NULL,NULL),(14,'S22909014TT','90/90-14 M/C 46P Corsa S22 T/T (Tube Type)','MC',5.8,'S22','Corsa','Tubetipe','190000',NULL,NULL,NULL),(15,'S22709017TT','70/90-17 M/C 38P Corsa S22 T/T (Tube Type)','MC',4.3,'S88','Corsa','Tubetipe','156000',NULL,NULL,NULL),(16,'S22809017TT','80/90-17 M/C 44P Corsa S22 T/T (Tube Type)','MC',4.8,'S88','Corsa','Tubetipe','193000',NULL,NULL,NULL),(17,'SS09T25018TT','2.50 - 18 40L Corsa SS09T (Tube type)','MC',4.8,'SS 09T','Corsa','Tubetipe','166000',NULL,NULL,NULL),(18,'SS09T27518TT','2.75 - 18 42P Corsa SS09T (Tube type)','MC',4.8,'SS 09T','Corsa','Tubetipe','209000',NULL,NULL,NULL),(19,'SS09T30018TT','3.00 - 18 47S Corsa SS09T (Tube type)','MC',4.8,'SS 09T','Corsa','Tubetipe','242000',NULL,NULL,NULL),(20,'SS18608017TT','60/80 - 17 M/C 27P Corsa SS18 (Tube type)','MC',4.4,'SS 18','Corsa','Tubetipe','131000',NULL,NULL,NULL),(21,'SS18708017TT','70/80 - 17 M/C 35P Corsa SS18 (Tube type)','MC',4.8,'SS 18','Corsa','Tubetipe','139000',NULL,NULL,NULL),(22,'SS18709017TT','70/90 - 17 M/C 38P CORSA SS18 (Tube type)','MC',4.8,'SS 18','Corsa','Tubetipe','156000',NULL,NULL,NULL),(23,'SS18808017TT','80/80 - 17 M/C 41P Corsa SS18 (Tube type)','MC',4.8,'SS 18','Corsa','Tubetipe','175000',NULL,NULL,NULL),(24,'SS18809017TT','80/90 - 17 M/C 44P CORSA SS18 (Tube type)','MC',4.8,'SS 18','Corsa','Tubetipe','193000',NULL,NULL,NULL),(25,'SS18908017TT','90/80 - 17 M/C 46P Corsa SS18 (Tube type)','MC',5.8,'SS 18','Corsa','Tubetipe','219000',NULL,NULL,NULL),(26,'ST0822517TT','2.25 - 17 33L Corsa ST08 (Tube type)','MC',4.6,'ST 08','Corsa','Tubetipe','124000',NULL,NULL,NULL),(27,'ST0825017TT','2.50 - 17 38L Corsa ST08 (Tube type)','MC',4.8,'ST 08','Corsa','Tubetipe','151000',NULL,NULL,NULL),(28,'ST0827517TT','2.75 - 17 41P Corsa ST08 (Tube type)','MC',4.8,'ST 08','Corsa','Tubetipe','189000',NULL,NULL,NULL),(29,'TER709017TT','70/90-17 M/C 38P CORSA Terminat 012 (Tube type)','MC',4.8,'TERMINAT 012','Corsa','Tubetipe','156000',NULL,NULL,NULL),(30,'TER808017TT','80/80-17 M/C 41P CORSA Terminat 012 (Tube type)','MC',4.8,'TERMINAT 012','Corsa','Tubetipe','175000',NULL,NULL,NULL),(31,'TER809017TT','80/90-17 M/C 44P CORSA Terminat 012 (Tube type)','MC',4.8,'TERMINAT 012','Corsa','Tubetipe','193000',NULL,NULL,NULL),(32,'TER908017TT','90/80-17 M/C 46P CORSA Terminat 012 (Tube type)','MC',5.8,'TERMINAT 012','Corsa','Tubetipe','219000',NULL,NULL,NULL),(33,'AT27517TT','2.75-17 M/C 41P Corsa AT-007 T/T (Tube type)','MC',7.7,'AT 007','Corsa','Tubetipe','187000',NULL,NULL,NULL),(34,'AT30017TT','300-17 M/C 45S Corsa AT-007 T/T (Tube type)','MC',7.9,'AT 007','Corsa','Tubetipe','224000',NULL,NULL,NULL),(35,'AT00730018TT','300-18 M/C 47S Corsa AT-007 T/T (Tube type)','PCR',7.9,'AT 007','Corsa','Tubeless','247000','32','12',NULL),(36,'AT0125017TT','2.50-17 38L Corsa AT01 T/T (Tube type)','MC',5.8,'AT 01','Corsa','Tubetipe','151000',NULL,NULL,NULL),(37,'AT027517TT','2.75-17 41P Corsa AT02 T/T (Tube type)','MC',5.8,'AT 02','Corsa','Tubetipe','187000',NULL,NULL,NULL),(38,'S01709014TL','70/90 - 14 M/C 34P Corsa S01 TL (Tubeless)','MC',4.3,'S 01','Corsa','Tubeless','162000',NULL,NULL,NULL),(39,'S01809014TL','80/90 - 14 M/C 4OP Corsa S01 TL (Tubeless)','MC',4.8,'S 01','Corsa','Tubeless','185000',NULL,NULL,NULL),(40,'S01909014TL','90/90 - 14 M/C 46P Corsa S01 TL (Tubeless)','MC',5.8,'S 01','Corsa','Tubeless','223000',NULL,NULL,NULL),(41,'S01709017TL','70/90 - 17 M/C 38P Corsa S01 TL (Tubeless)','MC',4.8,'S 01','Corsa','Tubeless','189000',NULL,NULL,NULL),(42,'S01808017TL','80/80 -17 M/C 41P Corsa S01 (Tubeless)','MC',4.8,'S 01','Corsa','Tubeless','219000',NULL,NULL,NULL),(43,'S01809017TL','80/90 - 17 M/C 44P Corsa S01 TL (Tubeless)','MC',4.8,'S 01','Corsa','Tubeless','227000',NULL,NULL,NULL),(44,'S01908017TL','90/80 -17 M/C 46P Corsa S01 (Tubeless)','MC',5.8,'S 01','Corsa','Tubeless','278000',NULL,NULL,NULL),(45,'S011008017TL','100/80 - 17 M/C 52S CORSA S01 T/L','MC',6.0,'S 01','Corsa','Tubeless','331000',NULL,NULL,NULL),(46,'S22709016TL','70/90-16 36P Corsa S 22 (Tubeless)','MC',4.8,'S 22','Corsa','Tubeless','195000',NULL,NULL,NULL),(47,'S22809016TL','80/90-16 43P Corsa S 22 (Tubeless)','MC',4.8,'S 22','Corsa','Tubeless','230000',NULL,NULL,NULL),(48,'S33808014TL','80/80 - 14 M/C 38P Corsa S33 TL (Tubeless)','MC',4.8,'S 33','Corsa','Tubeless','183000',NULL,NULL,NULL),(49,'S33908014TL','90/80 - 14 M/C 43P Corsa S33 TL (Tubeless)','MC',5.8,'S 33','Corsa','Tubeless','219000',NULL,NULL,NULL),(50,'S331008014TL','100/80 - 14 M/C 48S Corsa S33 TL (Tubeless)','MC',6.0,'S 33','Corsa','Tubeless','262000',NULL,NULL,NULL),(51,'S331108014TL','110/80 - 14 M/C 53S Corsa S33 TL (Tubeless)','MC',6.0,'S 33','Corsa','Tubeless','295000',NULL,NULL,NULL),(52,'S33709017TL','70/90-17 M/C 38P Corsa S33 T/L (Tubeless)','MC',4.8,'S 33','Corsa','Tubeless','189000',NULL,NULL,NULL),(53,'S33808017TL','80/80-17 M/C 41P Corsa S33 T/L (Tubeless)','MC',4.8,'S 33','Corsa','Tubeless','219000',NULL,NULL,NULL),(54,'S33809017TL','80/90-17 M/C 44P Corsa S33 T/L (Tubeless)','MC',4.8,'S 33','Corsa','Tubeless','227000',NULL,NULL,NULL),(55,'S33908017TL','90/80-17 M/C 46P Corsa S33 T/L (Tubeless)','MC',5.8,'S 33','Corsa','Tubeless','278000',NULL,NULL,NULL),(56,'S331108017TL','110/80 - 17 M/C 57S Corsa S33 T/L (Tubeless)','MC',6.2,'S 33','Corsa','Tubeless','368000',NULL,NULL,NULL),(57,'S331307017TL','130/70 - 17 M/C 62S Corsa S33 T/L (Tubeless)','MC',6.7,'S 33','Corsa','Tubeless','492000',NULL,NULL,NULL),(58,'S22709014TL','70/90-14 M/C 34P Corsa S22 T/L (Tubeless)','MC',4.3,'S22','Corsa','Tubeless','162000',NULL,NULL,NULL),(59,'S22809014TL','80/90-14 40P Corsa S 22 (Tubeless)','MC',4.8,'S22','Corsa','Tubeless','185000',NULL,NULL,NULL),(60,'S22909014TL','90/90-14 46P Corsa S 22 (Tubeless)','MC',5.8,'S22','Corsa','Tubeless','223000',NULL,NULL,NULL),(61,'S88808014TL','80/80 - 14 43P CORSA S88 TL (Tubeless)','MC',4.8,'S88','Corsa','Tubeless','183000',NULL,NULL,NULL),(62,'S88908014TL','90/80 - 14 43P CORSA S88 TL (Tubeless)','MC',5.3,'S88','Corsa','Tubeless','219000',NULL,NULL,NULL),(63,'S881108014TL','110/80 - 14 53S CORSA S88 TL (Tubeless)','MC',5.8,'S88','Corsa','Tubeless','262000',NULL,NULL,NULL),(64,'S881008014TL','100/80 - 14 48S CORSA S88 TL (Tubeless)','MC',5.8,'S88','Corsa','Tubeless','295000',NULL,NULL,NULL),(65,'S88709017TL','70/90-17 M/C 44P Corsa S88 TL (Tubeless)','MC',4.3,'S88','Corsa','Tubeless','189000',NULL,NULL,NULL),(66,'S88809017TL','80/90-17 M/C 44P Corsa S88 TL (Tubeless)','MC',4.8,'S88','Corsa','Tubeless','227000',NULL,NULL,NULL),(67,'S88909017TL','90/90-17 M/C 44P Corsa S88 TL (Tubeless)','MC',5.3,'S88','Corsa','Tubeless','269000',NULL,NULL,NULL),(68,'SPR1008014TL','100/80-14 M/C 48S Corsa Sport Rain T/L (Tubeless)','MC',6.2,'SPORT RAIN','Corsa','Tubeless','262000',NULL,NULL,NULL),(69,'SPR1207014TL','120/70 - 14 M/C 55S Corsa Sport Rain TL (Tubeless)','MC',6.2,'SPORT RAIN','Corsa','Tubeless','316000',NULL,NULL,NULL),(70,'SPR709017TL','70/90-17 M/C 38P Corsa Sport Rain T/L (Tubeless)','MC',4.3,'SPORT RAIN','Corsa','Tubeless','189000',NULL,NULL,NULL),(71,'SPR809017TL','80/90-17 M/C 44P Corsa Sport Rain T/L (Tubeless)','MC',4.8,'SPORT RAIN','Corsa','Tubeless','227000',NULL,NULL,NULL),(72,'SPR908017TL','90/80-17 M/C 46S Corsa SPORT RAIN T/L (Tubeless)','MC',5.6,'SPORT RAIN','Corsa','Tubeless','278000',NULL,NULL,NULL),(73,'SPR1008017TL','100/80-17 M/C 46P Corsa SPORT RAIN T/L (Tubeless)','MC',5.8,'SPORT RAIN','Corsa','Tubeless','331000',NULL,NULL,NULL),(74,'SS18709014TL','70/90 - 14 M/C 34P Corsa SS18 TL (Tubeless)','MC',4.3,'SS 18','Corsa','Tubeless','162000',NULL,NULL,NULL),(75,'SS18809014TL','80/90 - 14 M/C 40P Corsa SS18 TL (Tubeless)','MC',4.8,'SS 18','Corsa','Tubeless','185000',NULL,NULL,NULL),(76,'SS18909014TL','90/90 - 14 M/C 46P Corsa SS18 TL (Tubeless)','MC',5.8,'SS 18','Corsa','Tubeless','223000',NULL,NULL,NULL),(77,'SS18808017TL','80/80 - 17 M/C 41P Corsa SS18 TL (Tubeless)','MC',4.8,'SS 18','Corsa','Tubeless','219000',NULL,NULL,NULL),(78,'SS18908017TL','90/80 - 17 M/C 46P Corsa SS18 TL (Tubeless)','MC',5.8,'SS 18','Corsa','Tubeless','278000',NULL,NULL,NULL),(79,'SS181008017TL','100/80-17 M/C 52S Corsa SS18 TL','MC',6.0,'SS 18','Corsa','Tubeless','331000',NULL,NULL,NULL),(80,'SS181208017TL','120/80-17 M/C 61S Corsa SS18 TL','MC',6.5,'SS 18','Corsa','Tubeless','424000',NULL,NULL,NULL),(81,'S123709017TL','70/90-17 M/C 38P Corsa S123 TL (Tubeless)','MC',4.8,'S 123','Corsa','Tubeless','189000',NULL,NULL,NULL),(82,'S123809017TL','80/90-17 M/C 44P Corsa S123 TL (Tubeless)','MC',4.8,'S 123','Corsa','Tubeless','227000',NULL,NULL,NULL),(83,'S123907017TL','90/70 - 17 M/C 45S Corsa S123 TL (Tubeless)','MC',5.8,'S 123','Corsa','Tubeless','270000',NULL,NULL,NULL),(84,'S123909017TL','90/90-17 M/C 49P Corsa S123 T/L (Tubeless)','MC',5.8,'S 123','Corsa','Tubeless','269000',NULL,NULL,NULL),(85,'S1231007017HTL','100/70 - 17 M/C 49H Corsa S123 TL (Tubeless)','MC',6.0,'S 123','Corsa','Tubeless','328000',NULL,NULL,NULL),(86,'S1231009017TL','100/90-17 M/C 55P CORSA S123 T/L','MC',6.0,'S 123','Corsa','Tubeless','331000',NULL,NULL,NULL),(87,'S1231107017TL','110/70 - 17 M/C 54S Corsa S123 TL (Tubeless)','MC',6.2,'S 123','Corsa','Tubeless','372000',NULL,NULL,NULL),(88,'S1231108017TL','110/80-17 M/C 57S CORSA S123 T/L','MC',6.0,'S 123','Corsa','Tubeless','368000',NULL,NULL,NULL),(89,'S1231207017TL','120/70 - 17 M/C 58S Corsa S123 TL (Tubeless)','MC',6.5,'S 123','Corsa','Tubeless','410000',NULL,NULL,NULL),(90,'S1231208017TL','120/80 - 17 M/C 61S CORSA S123 T/L','MC',6.5,'S 123','Corsa','Tubeless','424000',NULL,NULL,NULL),(91,'S1231307017TL','130/70 - 17 M/C 62S Corsa S123 TL (Tubeless)','MC',6.7,'S 123','Corsa','Tubeless','492000',NULL,NULL,NULL),(92,'S1231506017TL','150/60-17 M/C 66S Corsa S123 T/L (Tubeless)','MC',6.7,'S 123','Corsa','Tubeless','577000',NULL,NULL,NULL),(93,'S123909018TL','90/90-18 M/C 51P CORSA S123 T/L','MC',5.8,'S 123','Corsa','Tubeless','313000',NULL,NULL,NULL),(94,'S1231008018TL','100/80 - 18 M/C 53S Corsa S123 TL (Tubeless)','MC',6.0,'S 123','Corsa','Tubeless','372000',NULL,NULL,NULL),(95,'S1231108018TL','110/80 - 18 M/C 58S Corsa S123 TL (Tubeless)','MC',6.2,'S 123','Corsa','Tubeless','413000',NULL,NULL,NULL),(96,'TER709014TL','70/90-14 M/C 34P CORSA Terminat 012 T/L (Tubeless)','MC',4.3,'TERMINAT 012','Corsa','Tubeless','162000',NULL,NULL,NULL),(97,'TER809014TL','80/90-14 M/C 34P CORSA Terminat 012 T/L (Tubeless)','MC',4.8,'TERMINAT 012','Corsa','Tubeless','185000',NULL,NULL,NULL),(98,'TER909014TL','90/90-14 M/C 34P CORSA Terminat 012 T/L (Tubeless)','MC',5.3,'TERMINAT 012','Corsa','Tubeless','223000',NULL,NULL,NULL),(99,'TER709017TL','70/90-17 M/C 38P CORSA Terminat 012 T/L (Tubeless)','MC',4.8,'TERMINAT 012','Corsa','Tubeless','189000',NULL,NULL,NULL),(100,'TER808017TL','80/80-17 M/C 41P CORSA Terminat 012 T/L (Tubeless)','MC',4.8,'TERMINAT 012','Corsa','Tubeless','219000',NULL,NULL,NULL),(101,'TER809017TL','80/90-17 M/C 48P CORSA Terminat 012 T/L (Tubeless)','MC',4.8,'TERMINAT 012','Corsa','Tubeless','227000',NULL,NULL,NULL),(102,'TER908017TL','90/80-17 M/C 46P CORSA Terminat 012 T/L (Tubeless)','MC',5.8,'TERMINAT 012','Corsa','Tubeless','278000',NULL,NULL,NULL),(103,'MT00725017TT','2.50 - 17 38L Corsa MT007 (Tube type)','MC',5.8,'MT 007','Corsa','Tubetipe','148000',NULL,NULL,NULL),(104,'MT00727517TT','2.75 - 17 41P Corsa MT007 (Tube type)','MC',5.8,'MT 007','Corsa','Tubetipe','181000',NULL,NULL,NULL),(105,'MTC25017TT','2.50-17 M/C 38M Corsa MT-Cross T/T (Tube type)','MC',9.1,'MT CROSS','Corsa','Tubetipe','153000',NULL,NULL,NULL),(106,'MTC27517TT','2.75-17 M/C 41M Corsa MT-Cross T/T (Tube type)','MC',9.6,'MT CROSS','Corsa','Tubetipe','185000',NULL,NULL,NULL),(107,'MTC30017TT','300-17 M/C 45M Corsa MT CROSS (Tube type)','MC',10.1,'MT CROSS','Corsa','Tubetipe','221000',NULL,NULL,NULL),(108,'MTX7010014TT','70/100 - 14 M/C 49M Corsa MT-Cross X (Tube Type)','MC',10.1,'MT Cross-X','Corsa','Tubetipe','320000',NULL,NULL,NULL),(109,'MTX9010014TT','90/100 - 14 M/C 49M Corsa MT-Cross X (Tube Type)','MC',10.1,'MT Cross-X','Corsa','Tubetipe','355000',NULL,NULL,NULL),(110,'MTX9010016TT','90/100 - 16 M/C 51M Corsa MT-Cross X (Tube Type)','MC',13.4,'MT Cross-X','Corsa','Tubetipe','400000',NULL,NULL,NULL),(111,'MTX8010017TT','80/100 - 17 46 M Corsa MT-Cross X TT (Tube Type)','MC',12.0,'MT Cross-X','Corsa','Tubetipe','328000',NULL,NULL,NULL),(112,'MTX9010017TT','90/100 - 17 M/C 53M Corsa MT-Cross X (Tube Type)','MC',13.4,'MT Cross-X','Corsa','Tubetipe','337000',NULL,NULL,NULL),(113,'MTX10010018TT','100/100 - 18 M/C 59M Corsa MT-Cross X (Tube Type)','MC',15.8,'MT Cross-X','Corsa','Tubetipe','508000',NULL,NULL,NULL),(114,'MTX7010019TT','70/100 - 19 42 M Corsa MT-Cross X TT (Tube Type)','MC',8.6,'MT Cross-X','Corsa','Tubetipe','380000',NULL,NULL,NULL),(115,'MTR1109019TT','110/90 - 19 62 M Corsa MT-Cross R TT (Tube Type)','MC',15.8,'MT Cross-X','Corsa','Tubetipe','608000',NULL,NULL,NULL),(116,'MTR11010018TT','110/100 - 18 64 M Corsa MT-Cross R TT (Tube Type)','MC',15.8,'MT Cross-R','Corsa','Tubetipe','563000',NULL,NULL,NULL),(117,'MTR1109019TT','110/90 - 19 62 M Corsa MT-Cross R TT (Tube Type)','MC',15.8,'MT Cross-R','Corsa','Tubetipe','587000',NULL,NULL,NULL),(118,'MTR8010021TT','80/100 - 21 59M Corsa MT-Cross R (Tube Type)','MC',12.0,'MT Cross-R','Corsa','Tubetipe','405000',NULL,NULL,NULL),(119,'D01509017TT','50/90-17 M/C 21S Corsa D 01 (Tube type)','MC',2.9,'D 01','Corsa','Tubetipe','165000',NULL,NULL,NULL),(120,'D01608017TT','60/80-17 M/C 27S Corsa D 01 (Tube type)','MC',2.9,'D 01','Corsa','Tubetipe','219000',NULL,NULL,NULL),(121,'R46808014TL','80/80-14 M/C 43S Corsa R46 T/L (Tubeless)','MC',3.1,'R 46','Corsa','Tubeless','250000',NULL,NULL,NULL),(122,'R46908014TL','90/80-14 M/C 43S Corsa R46 T/L (Tubeless)','MC',3.4,'R 46','Corsa','Tubeless','284000',NULL,NULL,NULL),(123,'R461008014TL','100/80-14 M/C 43S Corsa R46 T/L (Tubeless)','MC',3.5,'R 46','Corsa','Tubeless','310000',NULL,NULL,NULL),(124,'R46908017TL','90/80-17 M/C 46S Corsa R 46 T/L (Tubeless)','MC',3.1,'R 46','Corsa','Tubeless','364000',NULL,NULL,NULL),(125,'R461206017TL','120/60 - 17 M/C 55S Corsa R 46 T/L (Tubeless)','MC',3.8,'R 46','Corsa','Tubeless','660000',NULL,NULL,NULL),(126,'R461506017TL','150/60 - 17 M/C 66S Corsa R 46 T/L (Tubeless)','MC',4.4,'R 46','Corsa','Tubeless','860000',NULL,NULL,NULL),(127,'R26808014TL','80/80 - 14 38S Corsa Platinum R26 TL (Tubeless)','MC',4.8,'R26','Corsa','Tubeless','186000',NULL,NULL,NULL),(128,'R26908014TL','90/80 - 14 43S Corsa Platinum R26 TL (Tubeless)','MC',5.3,'R26','Corsa','Tubeless','232000',NULL,NULL,NULL),(129,'R261008014TL','100/80 - 14 48S Corsa Platinum R26 TL (Tubeless)','MC',5.8,'R26','Corsa','Tubeless','273000',NULL,NULL,NULL),(130,'R26708017TL','70/80 - 17 35S Corsa Platinum R26 TL (Tubeless)','MC',4.3,'R26','Corsa','Tubeless','185000',NULL,NULL,NULL),(131,'R26808017TL','80/80 - 17 41S Corsa Platinum R26 TL (Tubeless)','MC',4.8,'R26','Corsa','Tubeless','228000',NULL,NULL,NULL),(132,'R26908017TL','90/80 - 17 46S Corsa Platinum R26 TL (Tubeless)','MC',5.3,'R26','Corsa','Tubeless','289000',NULL,NULL,NULL),(133,'R2610070-17TL','100/70-17 49S Corsa Platinum R26 TL (Tubeless)','MC',4.8,'R26','Corsa','Tubeless','340000',NULL,NULL,NULL),(134,'R261008017TL','100/80 - 17 52S Corsa Platinum R26 TL (Tubeless)','MC',5.8,'R26','Corsa','Tubeless','340000',NULL,NULL,NULL),(135,'R261107017TL','110/70-17 54S Corsa Platinum R26 TL (Tubeless)','MC',4.8,'R26','Corsa','Tubeless','377000',NULL,NULL,NULL),(136,'R261108017TL','110/80-17 57S Corsa Platinum R26 TL (Tubeless)','MC',5.8,'R26','Corsa','Tubeless','379000',NULL,NULL,NULL),(137,'R261207017TL','120/70-17 58S Corsa Platinum R26 TL (Tubeless)','MC',6.2,'R26','Corsa','Tubeless','432000',NULL,NULL,NULL),(138,'R261307017TL','130/70-17 62S Corsa Platinum R26 TL (Tubeless)','MC',6.2,'R26','Corsa','Tubeless','507000',NULL,NULL,NULL),(139,'R931107017TL','110/70-17 54S Corsa Platinum R26 TL (Tubeless)','MC',4.8,'R93','Corsa','Tubeless','530000',NULL,NULL,NULL),(140,'R931206017TL','120/60 - 17 55H Corsa Platinum R93 TL (Tubeless)','MC',4.0,'R93','Corsa','Tubeless','580000',NULL,NULL,NULL),(141,'R931307017TL','130/70-17 M/C 62H Corsa Platinum R93 (Tubeless)','MC',6.2,'R93','Corsa','Tubeless','660000',NULL,NULL,NULL),(142,'R931506017TL','150/60 - 17 66H Corsa Platinum R93 TL (Tubeless)','MC',5.6,'R93','Corsa','Tubeless','817000',NULL,NULL,NULL),(143,'R931606017TL','160/60 - 17 69H Corsa Platinum R93 TL (Tubeless)','MC',6.3,'R93','Corsa','Tubeless','900000',NULL,NULL,NULL),(144,'R99808014TL','80/80 - 14 38S Corsa Platinum R99 TL (Tubeless)','MC',4.8,'R99','Corsa','Tubeless','189000',NULL,NULL,NULL),(145,'R99908014TL','90/80 - 14 43S Corsa Platinum R99 TL (Tubeless)','MC',5.3,'R99','Corsa','Tubeless','232000',NULL,NULL,NULL),(146,'R991008014TL','100/80 - 14 48S Corsa Platinum R99 TL (Tubeless)','MC',5.8,'R99','Corsa','Tubeless','273000',NULL,NULL,NULL),(147,'R991108014TL','110/80 - 14 53S Corsa Platinum R99 TL (Tubeless)','MC',5.8,'R99','Corsa','Tubeless','311000',NULL,NULL,NULL),(148,'R991207014TL','120/70 - 14 55S Corsa Platinum R99 TL (Tubeless)','MC',6.2,'R99','Corsa','Tubeless','336000',NULL,NULL,NULL),(149,'R99908017TL','90/80 - 17 46S Corsa Platinum R99 TL (Tubeless)','MC',5.3,'R99','Corsa','Tubeless','289000',NULL,NULL,NULL),(150,'R991008017TL','100/80 - 17 52S Corsa Platinum R99 TL (Tubeless)','MC',5.8,'R99','Corsa','Tubeless','357000',NULL,NULL,NULL),(151,'R991107017TL','110/70 - 17 54S Corsa Platinum R99 TL (Tubeless)','MC',6.2,'R99','Corsa','Tubeless','396000',NULL,NULL,NULL),(152,'R991307017TL','130/70 - 17 62S Corsa Platinum R99 TL (Tubeless)','MC',6.2,'R99','Corsa','Tubeless','521000',NULL,NULL,NULL),(153,'V22709014TL','70/90-14 34P Corsa Platinum V22 TL (Tubeless)','MC',4.8,'V22','Corsa','Tubeless','177000',NULL,NULL,NULL),(154,'V22809014TL','80/90 - 14 40P Corsa Platinum V22 TL (Tubeless)','MC',5.3,'V22','Corsa','Tubeless','204000',NULL,NULL,NULL),(155,'V22909014TL','90/90 - 14 46P Corsa Platinum V22 TL (Tubeless)','MC',5.8,'V22','Corsa','Tubeless','236000',NULL,NULL,NULL),(156,'V22709017TL','70/90-17 38P Corsa Platinum V22 TL (Tubeless)','MC',4.8,'V22','Corsa','Tubeless','199000',NULL,NULL,NULL),(157,'V22809017TL','80/90 - 17 44P Corsa Platinum V22 TL (Tubeless)','MC',5.8,'V22','Corsa','Tubeless','238000',NULL,NULL,NULL),(158,'V33709014TT','70/90-14 34P Corsa Platinum V33 TL (Tube Type)','MC',4.8,'V33','Corsa','Tubetipe','143000',NULL,NULL,NULL),(159,'V33809014TT','80/90-14 40P Corsa Platinum V33 TL (Tube Type)','MC',5.3,'V33','Corsa','Tubetipe','175000',NULL,NULL,NULL),(160,'V33909014TT','90/90-14 46P Corsa Platinum V33 TL (Tube Type)','MC',5.8,'V33','Corsa','Tubetipe','211000',NULL,NULL,NULL),(161,'V33709017TT','70/90-17 38P Corsa Platinum V33 TL (Tube Type)','MC',4.8,'V33','Corsa','Tubetipe','164000',NULL,NULL,NULL),(162,'V33809017TT','80/90-17 44P Corsa Platinum V22 TL (Tube Type)','MC',5.8,'V33','Corsa','Tubetipe','211000',NULL,NULL,NULL),(163,'CRS1107013TL','110/70-13 48P Corsa Platinum Cross S TL (Tubeless)','MC',4.8,'Cross S','Corsa','Tubeless','285000',NULL,NULL,NULL),(164,'CRS1207013TL','120/70-13 53S Corsa Platinum Cross S TL (Tubeless)','MC',4.8,'Cross S','Corsa','Tubeless','325000',NULL,NULL,NULL),(165,'CRS1307013TL','130/70-13 57S Corsa Platinum Cross S TL (Tubeless)','MC',5.8,'Cross S','Corsa','Tubeless','350000',NULL,NULL,NULL),(166,'CRS1407013TL','140/70-13 61S Corsa Platinum Cross S TL (Tubeless)','MC',5.8,'Cross S','Corsa','Tubeless','390000',NULL,NULL,NULL),(167,'CRS809014TL','80/90 - 14 40P Corsa Platinum Cross S TL (Tubeless)','MC',5.6,'Cross S','Corsa','Tubeless','201000',NULL,NULL,NULL),(168,'CRS909014TL','90/90 - 14 46P Corsa Platinum Cross S TL (Tubeless)','MC',6.0,'Cross S','Corsa','Tubeless','230000',NULL,NULL,NULL),(169,'CRS908014TL','90/80 - 14 43P Corsa Platinum Cross S TL (Tubeless)','MC',6.0,'Cross S','Corsa','Tubeless','240000',NULL,NULL,NULL),(170,'CRS1008014TL','100/80-14 48P Corsa Platinum Cross S TL (Tubeless)','MC',6.2,'Cross S','Corsa','Tubeless','272000',NULL,NULL,NULL),(171,'CRS1108014TL','110/80-14 53P Corsa Platinum Cross S TL (Tubeless)','MC',6.5,'Cross S','Corsa','Tubeless','313000',NULL,NULL,NULL),(172,'CRS709017TL','70/90 - 17 38P Corsa Platinum Cross S TL (Tubeless)','MC',4.8,'Cross S','Corsa','Tubeless','197000',NULL,NULL,NULL),(173,'CRS809017TL','80/90-17 44P Corsa Platinum Cross S TL (Tubeless)','MC',5.8,'Cross S','Corsa','Tubeless','239000',NULL,NULL,NULL),(174,'CRS909017TL','90/90 - 17 49P Corsa Platinum Cross S TL (Tubeless)','MC',6.0,'Cross S','Corsa','Tubeless','286000',NULL,NULL,NULL),(175,'CRS1008017TL','100/80-17 52S Corsa Platinum Cross S TL (Tubeless)','MC',6.2,'Cross S','Corsa','Tubeless','340000',NULL,NULL,NULL),(176,'CRS1108017TL','110/80-17 57S Corsa Platinum Cross S TL (Tubeless)','MC',6.5,'Cross S','Corsa','Tubeless','378000',NULL,NULL,NULL),(177,'CRS1208017TL','120/80-17 61S Corsa Platinum Cross S TL (Tubeless)','MC',7.2,'Cross S','Corsa','Tubeless','432000',NULL,NULL,NULL),(178,'CRS1308017TL','130/80-17 65S Corsa Platinum Cross S TL (Tubeless)','MC',8.2,'Cross S','Corsa','Tubeless','527000',NULL,NULL,NULL),(179,'CRS1408017TL','140/80-17 69S Corsa Platinum Cross S TL (Tubeless)','MC',8.4,'Cross S','Corsa','Tubeless','610000',NULL,NULL,NULL),(180,'CRS1108019TL','110/80-19 69S Corsa Platinum Cross S TL (Tubeless)','MC',6.5,'Cross S','Corsa','Tubeless','750000',NULL,NULL,NULL),(181,'M51107013TL','110/70-13 48P Corsa Platinum M5 (Tubeless)','MC',4.8,'M5','Corsa','Tubeless','270000',NULL,NULL,NULL),(182,'M51207013TL','120/70-13 53S Corsa Platinum M5 (Tubeless)','MC',4.8,'M5','Corsa','Tubeless','325000',NULL,NULL,NULL),(183,'M51307013TL','130/70-13 57S Corsa Platinum M5 (Tubeless)','MC',5.8,'M5','Corsa','Tubeless','350000',NULL,NULL,NULL),(184,'M51407013TL','140/70-13 61S Corsa Platinum M5 (Tubeless)','MC',5.8,'M5','Corsa','Tubeless','390000',NULL,NULL,NULL),(185,'M51506013TL','150/60-13 61S Corsa Platinum M5 (Tubeless)','MC',5.8,'M5','Corsa','Tubeless','420000',NULL,NULL,NULL);
/*!40000 ALTER TABLE `db_ban` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_distributor`
--

DROP TABLE IF EXISTS `db_distributor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_distributor` (
  `id_distributor` int(200) NOT NULL AUTO_INCREMENT,
  `kode_distributor` varchar(100) NOT NULL,
  `nama_distributor` varchar(100) NOT NULL,
  `grup` enum('Internasional','Lokal') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `area` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telepon` int(100) NOT NULL,
  PRIMARY KEY (`id_distributor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_distributor`
--

LOCK TABLES `db_distributor` WRITE;
/*!40000 ALTER TABLE `db_distributor` DISABLE KEYS */;
INSERT INTO `db_distributor` VALUES (3,'L0004','Pelumas','Lokal','gasghrrh','indonesia','hsjjuru',2147483647);
/*!40000 ALTER TABLE `db_distributor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_karyawan`
--

DROP TABLE IF EXISTS `db_karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_karyawan` (
  `id_karyawan` int(50) NOT NULL AUTO_INCREMENT,
  `NIK` int(50) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_karyawan`
--

LOCK TABLES `db_karyawan` WRITE;
/*!40000 ALTER TABLE `db_karyawan` DISABLE KEYS */;
INSERT INTO `db_karyawan` VALUES (1,123142141,'M. Sulkan Arif','TS'),(3,2147483647,'Reny','TS');
/*!40000 ALTER TABLE `db_karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_kerusakan`
--

DROP TABLE IF EXISTS `db_kerusakan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_kerusakan` (
  `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kerusakan` varchar(20) NOT NULL,
  `nama_kerusakan` varchar(100) NOT NULL,
  `sebab` enum('Pabrik','Pemakai') NOT NULL,
  `disposisi` enum('Ganti','Tolak') NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kerusakan`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_kerusakan`
--

LOCK TABLES `db_kerusakan` WRITE;
/*!40000 ALTER TABLE `db_kerusakan` DISABLE KEYS */;
INSERT INTO `db_kerusakan` VALUES (5,'T002','Sidewall Separation','Pabrik','Ganti','Factory'),(12,'A002','SCP','Pemakai','Tolak','Bego Lo'),(13,'A002','S CBU','Pabrik','Ganti','-'),(14,'A001','TCP','Pemakai','Tolak','Bego Lo'),(15,'A003','BTB K','Pemakai','Ganti','fasfsafe'),(16,'A001','LCU','Pabrik','Ganti','Bego Lo');
/*!40000 ALTER TABLE `db_kerusakan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_klaim`
--

DROP TABLE IF EXISTS `db_klaim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_klaim` (
  `id_klaim` int(11) NOT NULL AUTO_INCREMENT,
  `no_klaim` varchar(20) NOT NULL,
  `grup` varchar(20) NOT NULL,
  `id_distributor` int(1) NOT NULL,
  `tgl_klaim` date DEFAULT NULL,
  `keterangan` text,
  `status` enum('Open','Done') NOT NULL DEFAULT 'Open',
  `tgl_selesai` datetime DEFAULT NULL,
  PRIMARY KEY (`id_klaim`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_klaim`
--

LOCK TABLES `db_klaim` WRITE;
/*!40000 ALTER TABLE `db_klaim` DISABLE KEYS */;
INSERT INTO `db_klaim` VALUES (1,'CL000000001','PCR',3,'2019-07-20','Your Bluetooth switch needs to be on before Ubuntu will detect it. Most laptops have a switch or physical button you need to push to actually turn on the Bluetooth module.','Done','2019-08-09 00:37:22'),(2,'CL000000002','MC',3,'2019-07-20',NULL,'Done','2019-08-09 00:37:22'),(7,'CL000000007','PCR',3,'2019-02-01','Input keterangan disini','Done','2019-08-09 00:43:27'),(8,'CL000000008','PCR',3,'2019-02-01','Input keterangan disini','Done','2019-08-10 12:33:09'),(9,'CL000000009','PCR',3,'2019-02-01','Input keterangan disini','Done','2019-08-11 23:24:53'),(10,'CL000000010','PCR',3,'2019-02-01','Input keterangan disini','Open','2019-08-09 00:37:22'),(12,'CL000000012','PCR',3,'2019-02-01','Input keterangan disini','Open','2019-08-09 00:37:22'),(13,'CL000000013','PCR',3,'2019-02-01','Input keterangan disini','Open','2019-08-09 00:37:22'),(14,'CL000000014','PCR',3,'2019-02-01','Input keterangan disini','Open','2019-08-09 00:37:22'),(15,'CL000000015','PCR',3,'2019-02-01','Input keterangan disini','Open','2019-08-09 00:37:22'),(16,'CL000000016','PCR',3,'2019-02-01','Input keterangan disini','Open','2019-08-09 00:37:22');
/*!40000 ALTER TABLE `db_klaim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_klaim_detail`
--

DROP TABLE IF EXISTS `db_klaim_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_klaim_detail` (
  `id_klaim_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_klaim` int(11) NOT NULL,
  `id_ban` int(11) DEFAULT NULL,
  `id_toko` int(11) DEFAULT NULL,
  `keterangan` text,
  `id_kerusakan` text,
  `sisa_alur` decimal(8,1) DEFAULT NULL,
  PRIMARY KEY (`id_klaim_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_klaim_detail`
--

LOCK TABLES `db_klaim_detail` WRITE;
/*!40000 ALTER TABLE `db_klaim_detail` DISABLE KEYS */;
INSERT INTO `db_klaim_detail` VALUES (1,8,15,1,'xsss','15',2.1),(9,8,4,1,'ss','12',4.0),(10,9,1,1,'kuda','5',4.3),(11,9,1,1,'kuda','5',2.0),(12,9,1,1,'kuda','5',2.0);
/*!40000 ALTER TABLE `db_klaim_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_toko`
--

DROP TABLE IF EXISTS `db_toko`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_toko` (
  `id_toko` int(11) NOT NULL AUTO_INCREMENT,
  `kode_toko` varchar(50) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telepon` int(100) NOT NULL,
  PRIMARY KEY (`id_toko`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_toko`
--

LOCK TABLES `db_toko` WRITE;
/*!40000 ALTER TABLE `db_toko` DISABLE KEYS */;
INSERT INTO `db_toko` VALUES (1,'T001','maju motor','buntu','makasar',86721),(2,'T002','vsvdsv','sini','kendari',857253213);
/*!40000 ALTER TABLE `db_toko` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `db_user`
--

DROP TABLE IF EXISTS `db_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `akses` enum('TS','Distributor') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_user`
--

LOCK TABLES `db_user` WRITE;
/*!40000 ALTER TABLE `db_user` DISABLE KEYS */;
INSERT INTO `db_user` VALUES (1,'ts','c4ca4238a0b923820dcc509a6f75849b','m sulkan arif','TS'),(2,'dist','202cb962ac59075b964b07152d234b70','admin distributor','Distributor'),(3,'xxx','63a9f0ea7bb98050796b649e85481845','kuda poni','TS');
/*!40000 ALTER TABLE `db_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-12  1:07:15
