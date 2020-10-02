-- MySQL dump 10.13  Distrib 8.0.19, for Linux (x86_64)
--
-- Host: localhost    Database: gammu
-- ------------------------------------------------------
-- Server version	8.0.19-0ubuntu0.19.10.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `SAdmin`
--

DROP TABLE IF EXISTS `SAdmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SAdmin` (
  `Sid_Admin` int NOT NULL AUTO_INCREMENT,
  `Snama_Admin` varchar(50) NOT NULL,
  `id_Slogin` int DEFAULT NULL,
  `SJabatan` varchar(45) NOT NULL,
  PRIMARY KEY (`Sid_Admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SAdmin`
--

LOCK TABLES `SAdmin` WRITE;
/*!40000 ALTER TABLE `SAdmin` DISABLE KEYS */;
INSERT INTO `SAdmin` VALUES (1,'Taufiqqurahman',1,'kepala desa'),(2,'ovindra sigit kurnia',5,'Sekertaris Desa');
/*!40000 ALTER TABLE `SAdmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SBackup`
--

DROP TABLE IF EXISTS `SBackup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SBackup` (
  `idnew_table` int NOT NULL AUTO_INCREMENT,
  `SNoSurat` varchar(45) NOT NULL,
  `Ssifat` varchar(45) NOT NULL,
  `SHal` varchar(45) NOT NULL,
  `SisiSurat` varchar(255) NOT NULL,
  `STempat` varchar(45) NOT NULL,
  `STanggal` date NOT NULL,
  `SPengirim` varchar(45) NOT NULL,
  `SPenerima` varchar(45) NOT NULL,
  PRIMARY KEY (`idnew_table`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SBackup`
--

LOCK TABLES `SBackup` WRITE;
/*!40000 ALTER TABLE `SBackup` DISABLE KEYS */;
INSERT INTO `SBackup` VALUES (4,'XII/01','penting','pengumuman','ini adalah percobaan pertama','sukajaya','2020-04-30','taufiqqurrahman','RT'),(5,'XII/01','penting','pengumuman','kepada seluruh warga harap kumpul ya','sukajaya','0000-00-00','','Warga'),(6,'XII/01','penting','pengumuman','kepada seluruh warga harap kumpul','sukajaya','2020-05-05','taufiqqurrahman','Warga');
/*!40000 ALTER TABLE `SBackup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SData_penduduk`
--

DROP TABLE IF EXISTS `SData_penduduk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SData_penduduk` (
  `idSData_penduduk` int NOT NULL AUTO_INCREMENT,
  `SNama_Penduduk` varchar(45) DEFAULT NULL,
  `SNomor_Hp` varchar(45) DEFAULT NULL,
  `SJabatan` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idSData_penduduk`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SData_penduduk`
--

LOCK TABLES `SData_penduduk` WRITE;
/*!40000 ALTER TABLE `SData_penduduk` DISABLE KEYS */;
INSERT INTO `SData_penduduk` VALUES (1,'rendra','082251316196','RT'),(8,'wati','83189041','WARGA'),(9,'lulu','082251316196','Warga'),(10,'Rendra yusrimaelani','082251316196','Karang taruna');
/*!40000 ALTER TABLE `SData_penduduk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Slogin`
--

DROP TABLE IF EXISTS `Slogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Slogin` (
  `id_Slogin` int NOT NULL AUTO_INCREMENT,
  `Susername` varchar(20) NOT NULL,
  `Spassword` varchar(8) NOT NULL,
  `Srole` enum('admin','user') NOT NULL,
  PRIMARY KEY (`id_Slogin`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Slogin`
--

LOCK TABLES `Slogin` WRITE;
/*!40000 ALTER TABLE `Slogin` DISABLE KEYS */;
INSERT INTO `Slogin` VALUES (1,'Kepaladesa','kades','admin'),(5,'perangkat1','user','user');
/*!40000 ALTER TABLE `Slogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Srelasi`
--

DROP TABLE IF EXISTS `Srelasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Srelasi` (
  `idSrelasi` int NOT NULL AUTO_INCREMENT,
  `Sid_Admin` int NOT NULL,
  `idnew_table` int NOT NULL,
  PRIMARY KEY (`idSrelasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Srelasi`
--

LOCK TABLES `Srelasi` WRITE;
/*!40000 ALTER TABLE `Srelasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `Srelasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gammu`
--

DROP TABLE IF EXISTS `gammu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gammu` (
  `Version` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gammu`
--

LOCK TABLES `gammu` WRITE;
/*!40000 ALTER TABLE `gammu` DISABLE KEYS */;
INSERT INTO `gammu` VALUES (17);
/*!40000 ALTER TABLE `gammu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false',
  `Status` int NOT NULL DEFAULT '-1',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inbox`
--

LOCK TABLES `inbox` WRITE;
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outbox`
--

DROP TABLE IF EXISTS `outbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL,
  `Retries` int DEFAULT '0',
  `Priority` int DEFAULT '0',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error','Reserved') NOT NULL DEFAULT 'Reserved',
  `StatusCode` int NOT NULL DEFAULT '-1',
  PRIMARY KEY (`ID`),
  KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  KEY `outbox_sender` (`SenderID`(250))
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outbox`
--

LOCK TABLES `outbox` WRITE;
/*!40000 ALTER TABLE `outbox` DISABLE KEYS */;
INSERT INTO `outbox` VALUES ('2020-05-06 21:09:56','2020-05-06 13:08:32','2020-05-06 13:08:32','23:59:59','00:00:00',NULL,'83189041','Default_No_Compression',NULL,-1,'kepada seluruh warga harap kumpul',6,'false',-1,NULL,'2020-05-06 21:19:56','default','KantorDesaSukajaya',1,0,'Reserved',-1),('2020-05-06 21:09:55','2020-05-06 13:04:15','2020-05-06 13:04:15','23:59:59','00:00:00',NULL,'83189041','Default_No_Compression',NULL,-1,'kepada seluruh warga harap kumpul ya',5,'false',-1,NULL,'2020-05-06 21:10:55','default','KantorDesaSukajaya',0,0,'Reserved',-1);
/*!40000 ALTER TABLE `outbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outbox_multipart`
--

DROP TABLE IF EXISTS `outbox_multipart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int DEFAULT '-1',
  `TextDecoded` text,
  `ID` int unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error','Reserved') NOT NULL DEFAULT 'Reserved',
  `StatusCode` int NOT NULL DEFAULT '-1',
  PRIMARY KEY (`ID`,`SequencePosition`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outbox_multipart`
--

LOCK TABLES `outbox_multipart` WRITE;
/*!40000 ALTER TABLE `outbox_multipart` DISABLE KEYS */;
/*!40000 ALTER TABLE `outbox_multipart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `IMSI` varchar(35) NOT NULL,
  `NetCode` varchar(10) DEFAULT 'ERROR',
  `NetName` varchar(35) DEFAULT 'ERROR',
  `Client` text NOT NULL,
  `Battery` int NOT NULL DEFAULT '-1',
  `Signal` int NOT NULL DEFAULT '-1',
  `Sent` int NOT NULL DEFAULT '0',
  `Received` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`IMEI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phones`
--

LOCK TABLES `phones` WRITE;
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
INSERT INTO `phones` VALUES ('','2020-05-06 21:09:55','2020-05-06 21:09:49','2020-05-06 21:10:05','yes','yes','353054032139891','510103762287947','','','Gammu 1.40.0, Linux, kernel 5.3.0-45-generic (#37-Ubuntu SMP Thu Mar 26 20:41:27 UTC 2020), GCC 9.2',0,0,0,0);
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sentitems`
--

DROP TABLE IF EXISTS `sentitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int unsigned NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int NOT NULL DEFAULT '-1',
  `TPMR` int NOT NULL DEFAULT '-1',
  `RelativeValidity` int NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL,
  `StatusCode` int NOT NULL DEFAULT '-1',
  PRIMARY KEY (`ID`,`SequencePosition`),
  KEY `sentitems_date` (`DeliveryDateTime`),
  KEY `sentitems_tpmr` (`TPMR`),
  KEY `sentitems_dest` (`DestinationNumber`),
  KEY `sentitems_sender` (`SenderID`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sentitems`
--

LOCK TABLES `sentitems` WRITE;
/*!40000 ALTER TABLE `sentitems` DISABLE KEYS */;
INSERT INTO `sentitems` VALUES ('2020-04-30 08:14:04','2020-04-29 03:21:33','2020-04-30 08:14:04',NULL,'005400470061006D006D00750020006D006100750020006B006900720069006D00200073006D007300200062006F006C006500680020006E0067006B','082277712412','Default_No_Compression','','',-1,'TGammu mau kirim sms boleh ngk',1,'',1,'SendingError',-1,0,255,'01',500),('2020-04-30 08:34:35','2020-04-29 03:22:40','2020-04-30 08:34:35',NULL,'005400470061006D006D00750020006D006100750020006B006900720069006D00200073006D007300200062006F006C006500680020006E0067006B','082251316196','Default_No_Compression','','',-1,'TGammu mau kirim sms boleh ngk',2,'',1,'SendingError',-1,-1,255,'01',-1),('2020-04-30 08:38:05','2020-04-30 08:16:12','2020-04-30 08:38:05',NULL,'0069006E00690020006100640061006C0061006800200070006500720063006F006200610061006E002000700065007200740061006D0061','082251316196','Default_No_Compression','','',-1,'ini adalah percobaan pertama',3,'',1,'SendingError',-1,-1,255,'KantorDesaSukajaya',-1),('2020-04-30 08:41:36','2020-04-30 08:20:46','2020-04-30 08:41:36',NULL,'005400470061006D006D00750020006D006100750020006B006900720069006D00200073006D007300200062006F006C006500680020006E0067006B','082277712412','Default_No_Compression','','',-1,'TGammu mau kirim sms boleh ngk',4,'',1,'SendingError',-1,-1,255,'DESASUKAJAYA',-1);
/*!40000 ALTER TABLE `sentitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'gammu'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-11 20:17:36
