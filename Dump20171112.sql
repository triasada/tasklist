-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: tasklist
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `company_setting`
--

DROP TABLE IF EXISTS `company_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_setting`
--

LOCK TABLES `company_setting` WRITE;
/*!40000 ALTER TABLE `company_setting` DISABLE KEYS */;
INSERT INTO `company_setting` VALUES (1,'companyName','JICT'),(2,'companyAddress',NULL),(3,'companyContact',NULL),(4,'companyLogo','ICT TASKLIST');
/*!40000 ALTER TABLE `company_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groupStaff`
--

DROP TABLE IF EXISTS `groupStaff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groupStaff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupName` varchar(45) NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL,
  `role` text,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groupStaff`
--

LOCK TABLES `groupStaff` WRITE;
/*!40000 ALTER TABLE `groupStaff` DISABLE KEYS */;
INSERT INTO `groupStaff` VALUES (1,'Administrator','2017-11-11 10:39:29',1,'1|2|3|4|6|7|8|9',99),(2,'Manager','2017-11-11 10:40:01',1,'1|2|3|4|6|7|8|9',0),(3,'Staff','2017-11-11 10:51:52',1,'1|6|7|8|9',2),(4,'Oscr','2017-11-11 10:51:40',1,'1|6|9',3);
/*!40000 ALTER TABLE `groupStaff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuName` varchar(45) NOT NULL,
  `menuDesc` varchar(45) DEFAULT NULL,
  `parent` int(11) DEFAULT '0',
  `menuOrder` int(11) DEFAULT '0',
  `link` varchar(200) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Home','home',0,1,'home','2017-11-09 16:14:43',0),(2,'News','berita',0,2,'news','2017-11-09 16:14:43',0),(11,'ryrdyrtyd','rrtdydrtyasdasdas',0,3,'drtydrtydrtyjhgjhg','2017-11-09 16:38:13',1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(45) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `pclass` varchar(45) DEFAULT NULL,
  `descript` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'dashboard','2017-11-10 09:09:55',1,0,'fa-dashboard','Dashboard'),(2,'page','2017-11-09 22:57:03',1,0,'fa-file','Manage page'),(3,'group','2017-11-10 13:33:59',1,0,'fa-group','Manage Group'),(4,'user','2017-11-09 23:33:27',1,0,'fa-user-md','Manage User'),(6,'projectroot','2017-11-10 14:33:43',1,0,'fa-desktop','Project Wall'),(7,'project','2017-11-10 13:30:04',1,6,'fa-th-list','Manage Project'),(8,'tasklist','2017-11-10 13:45:16',1,6,'fa-tasks','Task List'),(9,'task','2017-11-11 10:38:18',1,6,'fa-suitcase','Task Process');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project` varchar(45) NOT NULL,
  `descript` varchar(45) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdby` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (1,'Gboss','Gboss Development 1','2017-11-10 09:27:17',1);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taskHistory`
--

DROP TABLE IF EXISTS `taskHistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taskHistory` (
  `taskid` int(11) NOT NULL,
  `statusid` int(11) NOT NULL,
  `progress` int(11) NOT NULL,
  `notes` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taskHistory`
--

LOCK TABLES `taskHistory` WRITE;
/*!40000 ALTER TABLE `taskHistory` DISABLE KEYS */;
INSERT INTO `taskHistory` VALUES (1,0,0,NULL,'2017-11-09 21:18:14',1,1),(1,1,5,NULL,'2017-11-10 16:03:02',2,2),(7,0,0,'','2017-11-11 10:13:46',1,7),(7,1,0,'','2017-11-11 17:30:54',2,8),(7,1,10,'','2017-11-11 18:15:24',2,9),(7,2,100,NULL,'2017-11-11 18:24:16',2,10),(7,3,100,'salah itu','2017-11-11 18:28:04',2,11),(7,1,100,'','2017-11-11 18:28:16',2,12),(7,2,100,NULL,'2017-11-11 18:28:46',2,13),(7,3,90,'masih salah','2017-11-11 18:28:58',2,14),(7,1,90,'ok','2017-11-11 18:29:08',2,15),(7,2,100,NULL,'2017-11-11 18:29:48',2,16),(7,4,100,NULL,'2017-11-11 18:33:15',2,17),(1,2,100,NULL,'2017-11-11 18:35:58',2,18),(1,3,10,'rak genah','2017-11-11 18:36:13',2,19),(1,1,10,'asem ya','2017-11-11 18:36:21',2,20),(1,2,100,NULL,'2017-11-11 18:36:26',2,21),(1,4,100,NULL,'2017-11-11 18:36:31',2,22),(8,0,0,'','2017-11-11 20:38:20',4,23),(8,1,0,'','2017-11-11 20:44:20',2,24),(8,2,100,NULL,'2017-11-11 20:45:20',2,25),(8,3,100,'salah kuwi lho','2017-11-11 20:45:50',4,26),(8,1,100,'yowes','2017-11-11 20:46:05',2,27),(8,2,100,NULL,'2017-11-11 20:46:09',2,28),(8,4,100,NULL,'2017-11-11 20:46:28',4,29);
/*!40000 ALTER TABLE `taskHistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasklist`
--

DROP TABLE IF EXISTS `tasklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasklist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` text NOT NULL,
  `project` varchar(45) NOT NULL,
  `resource` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasklist`
--

LOCK TABLES `tasklist` WRITE;
/*!40000 ALTER TABLE `tasklist` DISABLE KEYS */;
INSERT INTO `tasklist` VALUES (1,'tester','1','2','2017-11-10 15:52:09',1),(7,'nganu','1','4|2','2017-11-11 10:13:46',1),(8,'test lagi yang panjang text nya','1','2','2017-11-11 20:38:20',4);
/*!40000 ALTER TABLE `tasklist` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tasklist`.`tasklist_AFTER_INSERT` AFTER INSERT ON `tasklist` FOR EACH ROW
BEGIN

insert into tasklist.taskhistory (taskid,statusid,progress,notes,createdby) values ( new.id,0,0,'',new.createdby) ;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tasklist`.`tasklist_BEFORE_DELETE` BEFORE DELETE ON `tasklist` FOR EACH ROW
BEGIN
delete FROM tasklist.taskHistory where taskid= old.id;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `taskstatus`
--

DROP TABLE IF EXISTS `taskstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taskstatus` (
  `id` int(11) NOT NULL,
  `taskstatus` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taskstatus`
--

LOCK TABLES `taskstatus` WRITE;
/*!40000 ALTER TABLE `taskstatus` DISABLE KEYS */;
INSERT INTO `taskstatus` VALUES (0,'New Entry'),(1,'Process'),(2,'Need Review'),(3,'Revision'),(4,'Done');
/*!40000 ALTER TABLE `taskstatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `user`
--

DROP TABLE IF EXISTS `user`;
/*!50001 DROP VIEW IF EXISTS `user`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `user` AS SELECT 
 1 AS `id`,
 1 AS `username`,
 1 AS `password`,
 1 AS `createDate`,
 1 AS `groupid`,
 1 AS `name`,
 1 AS `groupName`,
 1 AS `fname`,
 1 AS `lname`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `updateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updateBy` int(11) NOT NULL,
  `message` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userlog`
--

LOCK TABLES `userlog` WRITE;
/*!40000 ALTER TABLE `userlog` DISABLE KEYS */;
INSERT INTO `userlog` VALUES (1,4,'2017-11-04 07:20:24',1,'update username and Pass',''),(2,4,'2017-11-04 07:21:14',1,'update username and Pass',''),(3,4,'2017-11-04 07:21:43',1,'update username',''),(4,4,'2017-11-04 07:21:56',1,NULL,''),(5,4,'2017-11-04 07:26:32',1,'No Data Found',''),(6,4,'2017-11-04 07:27:29',1,'No Change detected',''),(7,4,'2017-11-04 07:28:07',1,'No Change detected',''),(8,4,'2017-11-04 07:28:22',1,'Update username ',''),(9,4,'2017-11-04 14:15:55',1,'Update username And Password',''),(10,4,'2017-11-04 14:29:48',1,'No Change detected',''),(11,4,'2017-11-07 00:46:33',1,'No Change detected',''),(12,4,'2017-11-07 00:52:26',1,'No Change detected',''),(13,4,'2017-11-07 00:52:44',1,'No Change detected',''),(14,4,'2017-11-07 00:53:11',1,'No Change detected',''),(15,4,'2017-11-07 00:53:19',1,'No Change detected',''),(16,4,'2017-11-07 00:53:32',1,'No Change detected',''),(17,4,'2017-11-07 00:53:50',1,'No Change detected',''),(18,4,'2017-11-07 00:53:56',1,'No Change detected',''),(19,4,'2017-11-07 00:53:58',1,'No Change detected',''),(20,4,'2017-11-07 00:54:01',1,'No Change detected',''),(21,4,'2017-11-07 00:54:06',1,'Update user Success ',''),(22,4,'2017-11-07 00:55:28',1,'No Change detected',''),(23,4,'2017-11-07 00:55:35',1,'Update user Success ',''),(24,4,'2017-11-07 00:56:28',1,'No Change detected',''),(25,4,'2017-11-07 00:56:34',1,'No Change detected',''),(26,4,'2017-11-07 00:56:39',1,'Update user Success ',''),(27,4,'2017-11-07 00:56:46',1,'Update user Success ',''),(28,4,'2017-11-07 00:56:48',1,'No Change detected',''),(29,4,'2017-11-07 00:57:25',1,'No Change detected',''),(30,4,'2017-11-07 00:57:28',1,'No Change detected',''),(31,4,'2017-11-07 00:57:32',1,'Update user Success ',''),(32,4,'2017-11-07 00:57:50',1,'No Change detected',''),(33,4,'2017-11-07 00:57:55',1,'Update user Success ',''),(34,4,'2017-11-07 00:58:27',1,'No Change detected',''),(35,4,'2017-11-07 00:58:29',1,'No Change detected',''),(36,4,'2017-11-07 00:58:32',1,'No Change detected',''),(37,4,'2017-11-07 00:58:34',1,'Update user Success ',''),(38,4,'2017-11-07 01:02:02',1,'No Change detected',''),(39,4,'2017-11-07 01:02:39',1,'No Change detected',''),(40,4,'2017-11-07 01:02:43',1,'Update user Success ',''),(41,4,'2017-11-07 01:03:38',1,'No Change detected',''),(42,4,'2017-11-07 01:03:41',1,'Update user Success ',''),(43,4,'2017-11-07 01:05:08',1,'No Change detected',''),(44,4,'2017-11-07 01:05:14',1,'Update user Success ',''),(45,4,'2017-11-07 01:06:26',1,'No Change detected',''),(46,4,'2017-11-07 01:06:29',1,'No Change detected',''),(47,4,'2017-11-07 01:06:34',1,'Update user Success ',''),(48,4,'2017-11-07 01:07:16',1,'No Change detected',''),(49,4,'2017-11-07 01:07:20',1,'Update user Success ',''),(50,4,'2017-11-07 01:07:47',1,'No Change detected',''),(51,4,'2017-11-07 01:07:53',1,'No Change detected',''),(52,4,'2017-11-07 01:07:55',1,'No Change detected',''),(53,4,'2017-11-07 01:08:10',1,'No Change detected',''),(54,4,'2017-11-07 01:08:16',1,'Update user Success ',''),(55,4,'2017-11-07 01:11:44',1,'No Change detected',''),(56,4,'2017-11-07 01:11:46',1,'No Change detected',''),(57,4,'2017-11-07 01:12:29',1,'No Change detected',''),(58,4,'2017-11-07 01:12:32',1,'No Change detected',''),(59,4,'2017-11-07 01:12:33',1,'No Change detected',''),(60,4,'2017-11-07 01:14:58',1,'No Change detected',''),(61,4,'2017-11-07 01:15:00',1,'No Change detected',''),(62,4,'2017-11-07 01:16:32',1,'No Change detected',''),(63,4,'2017-11-07 01:17:13',1,'No Change detected',''),(64,4,'2017-11-07 01:18:00',1,'No Change detected',''),(65,4,'2017-11-07 01:20:23',1,'No Change detected',''),(66,4,'2017-11-07 12:23:29',1,'No Change detected',''),(67,4,'2017-11-07 12:25:15',1,'No Change detected',''),(68,4,'2017-11-07 12:25:23',1,'Update user Success ',''),(69,4,'2017-11-07 12:25:59',1,'No Change detected',''),(70,4,'2017-11-07 12:26:02',1,'Update user Success ',''),(71,4,'2017-11-07 12:26:46',1,'No Change detected',''),(72,4,'2017-11-07 12:26:50',1,'Update user Success ',''),(73,4,'2017-11-07 12:32:10',1,'No Change detected',''),(74,4,'2017-11-07 12:40:06',1,'No Change detected',''),(75,4,'2017-11-07 12:40:11',1,'Update user Success ',''),(76,4,'2017-11-07 12:41:02',1,'No Change detected',''),(77,4,'2017-11-07 12:41:06',1,'Update user Success ',''),(78,4,'2017-11-07 12:44:51',1,'No Change detected',''),(79,4,'2017-11-07 12:44:58',1,'Update user Success ',''),(80,4,'2017-11-07 12:45:41',1,'No Change detected',''),(81,4,'2017-11-07 12:45:46',1,'Update user Success ',''),(82,4,'2017-11-07 12:48:35',1,'No Change detected',''),(83,4,'2017-11-07 12:48:40',1,'No Change detected',''),(84,4,'2017-11-07 12:48:45',1,'No Change detected',''),(85,4,'2017-11-07 12:48:50',1,'No Change detected',''),(86,4,'2017-11-07 12:49:32',1,'Update user Success ',''),(87,4,'2017-11-07 12:51:24',1,'No Change detected',''),(88,4,'2017-11-07 12:51:26',1,'No Change detected',''),(89,4,'2017-11-07 12:51:29',1,'No Change detected',''),(90,4,'2017-11-07 12:51:35',1,'Update user Success ',''),(91,4,'2017-11-07 12:51:59',1,'No Change detected',''),(92,4,'2017-11-07 12:52:04',1,'Update user Success ',''),(93,4,'2017-11-07 12:56:00',1,'No Change detected',''),(94,4,'2017-11-07 12:56:10',1,'No Change detected',''),(95,4,'2017-11-07 13:01:02',1,'No Change detected',''),(96,4,'2017-11-07 13:01:13',1,'No Change detected',''),(97,4,'2017-11-07 13:01:35',1,'No Change detected',''),(98,4,'2017-11-07 13:02:03',1,'No Change detected',''),(99,4,'2017-11-07 13:02:30',1,'No Change detected',''),(100,4,'2017-11-07 13:02:39',1,'No Change detected',''),(101,4,'2017-11-07 13:02:43',1,'No Change detected',''),(102,4,'2017-11-07 13:03:00',1,'No Change detected',''),(103,4,'2017-11-07 13:03:15',1,'No Change detected',''),(104,4,'2017-11-07 13:03:36',1,'No Change detected',''),(105,4,'2017-11-07 13:03:57',1,'No Change detected',''),(106,4,'2017-11-07 13:05:37',1,'No Change detected',''),(107,4,'2017-11-07 13:05:43',1,'No Change detected',''),(108,4,'2017-11-07 13:06:49',1,'No Change detected',''),(109,4,'2017-11-07 13:06:55',1,'No Change detected',''),(110,4,'2017-11-07 13:06:57',1,'No Change detected',''),(111,4,'2017-11-07 13:06:59',1,'No Change detected',''),(112,4,'2017-11-07 13:07:02',1,'No Change detected',''),(113,4,'2017-11-07 13:08:10',1,'No Change detected',''),(114,4,'2017-11-07 13:08:17',1,'No Change detected',''),(115,4,'2017-11-07 13:09:25',1,'No Change detected',''),(116,4,'2017-11-07 14:33:10',1,'No Change detected',''),(117,4,'2017-11-07 14:39:55',1,'No Change detected',''),(118,4,'2017-11-07 14:42:26',1,'No Change detected',''),(119,4,'2017-11-07 14:43:40',1,'No Change detected',''),(120,4,'2017-11-07 14:47:19',1,'No Change detected',''),(121,4,'2017-11-07 14:47:40',1,'No Change detected',''),(122,4,'2017-11-07 14:49:13',1,'No Change detected',''),(123,4,'2017-11-07 14:50:08',1,'No Change detected',''),(124,4,'2017-11-07 14:50:42',1,'No Change detected',''),(125,4,'2017-11-07 14:50:51',1,'No Change detected',''),(126,4,'2017-11-07 14:51:35',1,'No Change detected',''),(127,4,'2017-11-07 14:51:55',1,'No Change detected',''),(128,4,'2017-11-07 14:52:05',1,'No Change detected',''),(129,4,'2017-11-07 14:53:00',1,'No Change detected',''),(130,4,'2017-11-07 14:53:13',1,'No Change detected',''),(131,4,'2017-11-07 14:54:02',1,'No Change detected',''),(132,4,'2017-11-07 14:59:20',1,'No Change detected',''),(133,4,'2017-11-07 15:00:00',1,'No Change detected',''),(134,4,'2017-11-07 15:00:10',1,'No Change detected',''),(135,4,'2017-11-07 15:04:48',1,'No Change detected',''),(136,4,'2017-11-07 15:07:44',1,'No Change detected',''),(137,4,'2017-11-07 15:07:53',1,'No Change detected',''),(138,4,'2017-11-07 15:09:45',1,'No Change detected',''),(139,4,'2017-11-07 15:11:59',1,'No Change detected',''),(140,4,'2017-11-07 15:12:43',1,'No Change detected',''),(141,4,'2017-11-07 15:13:30',1,'No Change detected',''),(142,4,'2017-11-07 15:13:50',1,'No Change detected',''),(143,4,'2017-11-07 15:14:04',1,'No Change detected',''),(144,4,'2017-11-07 15:25:16',1,'No Change detected',''),(145,4,'2017-11-07 15:26:00',1,'No Change detected',''),(146,4,'2017-11-07 15:26:02',1,'No Change detected',''),(147,4,'2017-11-07 15:26:28',1,'No Change detected',''),(148,4,'2017-11-07 15:26:46',1,'No Change detected',''),(149,4,'2017-11-07 15:26:51',1,'No Change detected',''),(150,4,'2017-11-07 15:27:11',1,'No Change detected',''),(151,4,'2017-11-07 15:28:51',1,'No Change detected',''),(152,9,'2017-11-09 10:13:49',4,'Deleted users success',''),(153,10,'2017-11-09 10:22:03',4,'Deleted users success',''),(154,11,'2017-11-09 10:22:39',4,'Deleted users success',''),(155,12,'2017-11-09 11:01:03',4,'Deleted users Failed',''),(156,2,'2017-11-09 20:43:32',1,'Update user Success ',''),(157,1,'2017-11-10 09:11:43',1,'Update user Success ',''),(158,3,'2017-11-10 16:28:36',1,'Update user Success ',''),(159,3,'2017-11-10 16:38:33',1,'Update user Success ',''),(160,3,'2017-11-10 19:46:33',1,'Update user Success ',''),(161,2,'2017-11-10 19:51:07',1,'Update user Success ',''),(162,2,'2017-11-10 19:52:44',1,'Update user Success ',''),(163,2,'2017-11-10 19:54:30',1,'No Change detected',''),(164,2,'2017-11-10 19:54:41',1,'No Change detected',''),(165,2,'2017-11-10 19:54:52',1,'No Change detected',''),(166,2,'2017-11-10 19:54:54',1,'No Change detected',''),(167,2,'2017-11-10 19:56:57',1,'No Change detected',''),(168,2,'2017-11-10 19:57:03',1,'No Change detected',''),(169,2,'2017-11-10 19:59:05',1,'No Change detected',''),(170,1,'2017-11-10 19:59:54',1,'Update user Success ',''),(171,3,'2017-11-10 20:00:10',1,'Update user Success ',''),(172,4,'2017-11-10 20:00:23',1,'Update user Success ',''),(173,1,'2017-11-11 08:47:10',1,'Update user Success ','');
/*!40000 ALTER TABLE `userlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userprofile`
--

DROP TABLE IF EXISTS `userprofile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userprofile` (
  `userid` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userprofile`
--

LOCK TABLES `userprofile` WRITE;
/*!40000 ALTER TABLE `userprofile` DISABLE KEYS */;
INSERT INTO `userprofile` VALUES (1,'Super','Admin',NULL,NULL),(2,'Satria','Persada','',''),(3,'Aries','Sulistyo','',''),(4,'Waskito','Waskito','','');
/*!40000 ALTER TABLE `userprofile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `groupid` int(11) NOT NULL,
  `createBy` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','2017-11-11 08:47:10',2,''),(2,'triasada','79e751070babd6b40acd4a396eb4c3e3','2017-11-09 20:43:32',4,'1'),(3,'farhan','79e751070babd6b40acd4a396eb4c3e3','2017-11-09 20:44:03',2,'1'),(4,'waskito','79e751070babd6b40acd4a396eb4c3e3','2017-11-09 20:44:42',3,'1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `v_history`
--

DROP TABLE IF EXISTS `v_history`;
/*!50001 DROP VIEW IF EXISTS `v_history`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_history` AS SELECT 
 1 AS `taskid`,
 1 AS `task`,
 1 AS `taskstatus`,
 1 AS `progress`,
 1 AS `notes`,
 1 AS `created`,
 1 AS `createdby`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `v_task`
--

DROP TABLE IF EXISTS `v_task`;
/*!50001 DROP VIEW IF EXISTS `v_task`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_task` AS SELECT 
 1 AS `projectname`,
 1 AS `id`,
 1 AS `task`,
 1 AS `project`,
 1 AS `resource`,
 1 AS `created`,
 1 AS `createdby`,
 1 AS `createdbyname`,
 1 AS `taskstatus`,
 1 AS `statusid`,
 1 AS `progress`,
 1 AS `lastupdate`,
 1 AS `updatedbyid`,
 1 AS `updatedbyname`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'tasklist'
--

--
-- Dumping routines for database 'tasklist'
--
/*!50003 DROP PROCEDURE IF EXISTS `addUser` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `addUser`(in iUserName varchar(30), 
in iPassword varchar(200),
in igroupid int, in ifname varchar(50), in ilname varchar (50), in iaddress text, in iemail varchar(200),in iCreateBy int,
out ErrorMessage varchar(200), out ErrorCode int )
BEGIN
declare iuserid INT(11);
declare counting INT(11);
declare effect_profile INT(11);

SELECT count(*) into counting FROM
    users
WHERE
    username = iUserName;
    
if counting = 0 then
	insert into users (username,password,createDate,groupid,createBy) values (iUserName,md5(iPassword),NOW(),igroupid,iCreateBy );
	set iuserid= LAST_INSERT_ID();
		if iuserid is not null then
			insert into userprofile values(iuserid,ifname,ilname,iaddress,iemail);
			set effect_profile = ROW_COUNT();
		end if;
		if effect_profile<>0 then
			set ErrorCode = 00;
			set errorMessage = 'Insert User Success';
		else
			set ErrorCode = 10;
			set errorMessage = 'Insert User Failed';
		end if;
else
	set ErrorCode = 11;
	set errorMessage = 'User Duplicate Found';
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `deleteUser` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUser`(in iuserid int ,
in iCreateBy int,
out ErrorMessage varchar(200), out ErrorCode int)
BEGIN
declare counting int;
declare userid int;
declare effect int;
declare msg varchar(200);

SELECT 
    COUNT(id)
INTO counting FROM
    users
WHERE
    id = iuserid;
if counting <> 0 then
delete from users where id = iuserid;
delete from userprofile where userid = iuserid;
set effect = ROW_COUNT();
else
set ErrorCode = 99;
set errorMessage = 'No Data Found';
insert into userlog (iduser,UpdateDate,UpdateBy,message,link) values(iuserid,now(),iCreateBy,errorMessage,'');
end if;

if effect<>0 then
set ErrorCode = 00;
set errorMessage = 'Deleted users success';
insert into userlog (iduser,UpdateDate,UpdateBy,message,link) values(iuserid,now(),iCreateBy,errorMessage,'');
else
set ErrorCode = 12;
set errorMessage = 'Deleted users Failed';
insert into userlog (iduser,UpdateDate,UpdateBy,message,link) values(iuserid,now(),iCreateBy,errorMessage,'');
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `editUser` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `editUser`(
in iuserid int ,
in iUserName varchar(30), 
in iGroupId int, 
in ifname varchar(200),
in ilname varchar(200),
in iCreateBy int,
out ErrorMessage varchar(200), 
out ErrorCode varchar(20) )
BEGIN
declare counting int;
declare effect_user int;
declare effect_profile int;
declare msg varchar(200);

SELECT 
    COUNT(id)
INTO counting FROM
    users
WHERE
    id = iuserid;
    
if counting <> 0 then

update userprofile  set fname = ifname, lname = ilname where userid = iuserid ;
set effect_profile = ROW_COUNT();
update users  set username = iUserName, groupid=iGroupId where id = iuserid ;
set effect_user = ROW_COUNT();
set msg = 'Update username And Password';

else
set ErrorCode = '99';
set errorMessage = 'No Data Found';
insert into userlog (iduser,UpdateDate,UpdateBy,message,link) values(iuserid,now(),iCreateBy,errorMessage,'');
end if; 

if effect_user<>0 or effect_profile<>0 then
set ErrorCode = '00';
set errorMessage = 'Update user Success ';
insert into userlog (iduser,UpdateDate,UpdateBy,message,link) values(iuserid,now(),iCreateBy,errorMessage,'');
else
set ErrorCode = '88';
set errorMessage = 'No Change detected';
insert into userlog (iduser,UpdateDate,UpdateBy,message,link) values(iuserid,now(),iCreateBy,errorMessage,'');
end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `user`
--

/*!50001 DROP VIEW IF EXISTS `user`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `user` AS select `a`.`id` AS `id`,`a`.`username` AS `username`,`a`.`password` AS `password`,`a`.`createDate` AS `createDate`,`a`.`groupid` AS `groupid`,concat(`b`.`fname`,' ',`b`.`lname`) AS `name`,`c`.`groupName` AS `groupName`,`b`.`fname` AS `fname`,`b`.`lname` AS `lname` from ((`users` `a` join `userprofile` `b` on((`a`.`id` = `b`.`userid`))) join `groupstaff` `c` on((`a`.`groupid` = `c`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_history`
--

/*!50001 DROP VIEW IF EXISTS `v_history`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_history` AS select `a`.`taskid` AS `taskid`,`b`.`task` AS `task`,`c`.`taskstatus` AS `taskstatus`,`a`.`progress` AS `progress`,`a`.`notes` AS `notes`,`a`.`created` AS `created`,concat(`d`.`fname`,' ',`d`.`lname`) AS `createdby` from (((`taskhistory` `a` join `tasklist` `b` on((`a`.`taskid` = `b`.`id`))) join `taskstatus` `c` on((`a`.`statusid` = `c`.`id`))) join `userprofile` `d` on((`a`.`createdby` = `d`.`userid`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_task`
--

/*!50001 DROP VIEW IF EXISTS `v_task`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_task` AS select `r`.`project` AS `projectname`,`a`.`id` AS `id`,`a`.`task` AS `task`,`a`.`project` AS `project`,`a`.`resource` AS `resource`,`a`.`created` AS `created`,`a`.`createdby` AS `createdby`,concat(`p`.`lname`,' ',`p`.`fname`) AS `createdbyname`,`c`.`taskstatus` AS `taskstatus`,`b`.`statusid` AS `statusid`,`b`.`progress` AS `progress`,`b`.`created` AS `lastupdate`,`b`.`createdby` AS `updatedbyid`,concat(`q`.`lname`,' ',`q`.`fname`) AS `updatedbyname` from (((((`tasklist` `a` join `taskhistory` `b` on((`a`.`id` = `b`.`taskid`))) join `taskstatus` `c` on((`b`.`statusid` = `c`.`id`))) join `userprofile` `p` on((`a`.`createdby` = `p`.`userid`))) join `userprofile` `q` on((`b`.`createdby` = `q`.`userid`))) join `project` `r` on((`a`.`project` = `r`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-12  5:23:37
