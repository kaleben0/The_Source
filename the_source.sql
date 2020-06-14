-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: the_source
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `bookmark`
--

DROP TABLE IF EXISTS `bookmark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `letter` char(1) NOT NULL,
  `category` text NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `fonta` longtext NOT NULL,
  `hashtag` text NOT NULL,
  `title` text NOT NULL,
  `status` text NOT NULL,
  `favorite` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=269 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookmark`
--

LOCK TABLES `bookmark` WRITE;
/*!40000 ALTER TABLE `bookmark` DISABLE KEYS */;
INSERT INTO `bookmark` VALUES (249,'f','design','https://fontawesome.com/','fab fa-font-awesome','#Font','Font Awesome ','enabled','yes'),(250,'d','environmental','http://www.darksky.net','fas fa-cloud-sun','#Weather','Dark Sky ','enabled','yes'),(251,'p','finance','http://www.paypal.com','fab fa-paypal','#Banking','PayPal ','enabled','yes'),(252,'d','game','https://discordapp.com/login','fab fa-discord','#Comms','Discord ','enabled','yes'),(253,'n','media','http://www.netflix.com','fas fa-film','#Streaming','Netflix','enabled','yes'),(254,'c','medical','https://www.cvs.com/pharmacy/v1/#/rxcenter ','fas fa-file-prescription','#Drugs','CVS','enabled','yes'),(255,'m','network','http://www.mxtoolbox.com','fas fa-network-wired','#IP','MXToolbox ','enabled','yes'),(256,'g','productivity','http://mail.google.com','far fa-envelope','#Comms','Gmail ','enabled','yes'),(257,'n','web','https://nixcraft.tumblr.com','far fa-newspaper','#Fun','NixCraft ','enabled','yes'),(258,'m','environmental','https://google.com/maps','far fa-map','#Navigation','Maps','enabled','yes'),(259,'o','network','https://www.opendns.com/','fas fa-network-wired','#DNS','OpenDNS','enabled','yes'),(260,'c','productivity','https://calendar.google.com/','far fa-address-card','#Calendar','Calendar','enabled','yes'),(262,'h','media','https://www.hulu.com','fas fa-photo-video','#Streaming','Hulu','enabled','yes'),(263,'i','web','https://www.imgur.com','fas fa-globe','#Images','Imgur','enabled','yes'),(264,'r','web','https://www.reddit.com','fab fa-reddit-alien','#FrontPage','Reddit','enabled','yes'),(265,'w','medical','https://www.webmd.com','fas fa-book-medical','#YourDead','WebMD','enabled','yes'),(266,'p','finance','https://pay.google.com','fas fa-file-invoice-dollar','#Money','Pay','enabled','yes'),(267,'s','game','https://store.steampowered.com/','fas fa-gamepad','#EmptyWallet','Steam','enabled','yes'),(268,'d','design','https://www.deviantart.com/','far fa-object-group','#Art','DeviantArt','enabled','yes');
/*!40000 ALTER TABLE `bookmark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `features` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` VALUES (1,'#calendar','block','feature','Google Calendar'),(2,'#privatebin','block','feature','PrivateBin'),(3,'#spotify','block','feature','Spotify'),(4,'#terminal','block','feature','Terminal'),(5,'#cal_search','block','search','Google Calendar'),(6,'#contacts','block','search','Google Contacts'),(7,'#drive','block','search','Google Drive'),(8,'#earth','block','search','Google Earth'),(9,'#keep','block','search','Google Keep'),(10,'#gmail','block','search','Google Keep'),(11,'#hangouts','block','search','Google Hangouts'),(12,'#maps','block','search','Google Maps'),(13,'#photos','block','search','Google Photos'),(14,'#play','block','search','Google Play'),(15,'#scholar','block','search','Google Scholar'),(16,'#g_search','block','search','Google Search'),(17,'#translate','block','search','Google Translate'),(18,'#youtube','block','search','YouTube'),(19,'#amazon','block','search','Amazon'),(20,'#awesome','block','search','Font Awesome'),(21,'#bing','block','search','Bing'),(22,'#codepen','block','search','CodePen'),(23,'#giphy','block','search','Giphy'),(24,'#hulu','block','search','Hulu'),(25,'#imdb','block','search','IMDB'),(26,'#imgur','block','search','Imgur'),(28,'#netflix','block','search','Netflix'),(30,'#overflow','block','search','Stack Overflow'),(31,'#reddit','block','search','Reddit'),(32,'#g_spotify','block','search','Spotify'),(33,'#steam','block','search','Steam'),(34,'#versus','block','search','Versus'),(35,'#wallhaven','block','search','WallHaven'),(36,'#watch','block','search','Just Watch'),(37,'#wikipedia','block','search','Wikipedia'),(38,'#wolfram','block','search','Wolfram Alpha'),(39,'#wowhead','block','search','Wowhead'),(40,'#github','block','search','GitHub');
/*!40000 ALTER TABLE `features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_url` varchar(255) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `country_code` varchar(20) DEFAULT NULL,
  `morning_message` varchar(255) DEFAULT NULL,
  `day_message` varchar(255) DEFAULT NULL,
  `dusk_message` varchar(255) DEFAULT NULL,
  `evening_message` varchar(255) DEFAULT NULL,
  `spot_url` varchar(255) DEFAULT NULL,
  `privatebin_url` varchar(255) DEFAULT NULL,
  `shellinabox_url` varchar(255) DEFAULT NULL,
  `google_embed` varchar(10000) DEFAULT NULL,
  `pagetitle` varchar(30) DEFAULT NULL,
  `font` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Your Domain Here','ann arbor','mi','48104','us','Good Morning','How are ya Now?','Good Evening','Why are you awake?','https://www.spotify.com','https://privatebin.info/','https://github.com/shellinabox/shellinabox','https//calendar.google.com','The Source','Quicksand');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'the_source'
--

--
-- Dumping routines for database 'the_source'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-08 15:43:47
