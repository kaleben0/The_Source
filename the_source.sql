-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: the_source
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` VALUES (5,'#cal_search','block','search','Google Calendar'),(6,'#contacts','block','search','Google Contacts'),(7,'#drive','block','search','Google Drive'),(8,'#earth','block','search','Google Earth'),(9,'#keep','block','search','Google Keep'),(10,'#gmail','block','search','Google Keep'),(11,'#hangouts','block','search','Google Hangouts'),(12,'#maps','block','search','Google Maps'),(13,'#photos','block','search','Google Photos'),(14,'#play','block','search','Google Play'),(15,'#scholar','block','search','Google Scholar'),(16,'#g_search','block','search','Google Search'),(17,'#translate','block','search','Google Translate'),(18,'#youtube','block','search','YouTube'),(19,'#amazon','block','search','Amazon'),(20,'#awesome','block','search','Font Awesome'),(22,'#codepen','block','search','CodePen'),(23,'#giphy','block','search','Giphy'),(24,'#hulu','block','search','Hulu'),(25,'#imdb','block','search','IMDB'),(26,'#imgur','block','search','Imgur'),(28,'#netflix','block','search','Netflix'),(30,'#overflow','block','search','Stack Overflow'),(31,'#reddit','block','search','Reddit'),(32,'#g_spotify','block','search','Spotify'),(35,'#wallhaven','block','search','WallHaven'),(37,'#wikipedia','block','search','Wikipedia'),(40,'#github','block','search','GitHub'),(41,'#shortcut_nav','block','feature','Shortcuts'),(42,'#password_nav','block','feature','Password'),(43,'#search_nav','block','feature','Search'),(44,'#design_toggle','block','category','Design'),(45,'#enviro_toggle','block','category','Environmental'),(46,'#finance_toggle','block','category','Finance'),(47,'#game_toggle','block','category','Games'),(48,'#media_toggle','block','category','Media'),(49,'#medical_toggle','block','category','Medical'),(50,'#network_toggle','block','category','Network'),(51,'#prod_toggle','block','category','Productivity'),(52,'#web_toggle','block','category','Web'),(53,'#watch','block','search','Just Watch');
/*!40000 ALTER TABLE `features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frames`
--

DROP TABLE IF EXISTS `frames`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frames` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frame1_title` varchar(255) DEFAULT NULL,
  `frame1_url` varchar(255) DEFAULT NULL,
  `frame1_width` int(4) DEFAULT NULL,
  `frame1_height` int(4) DEFAULT NULL,
  `frame1_icon` varchar(255) DEFAULT NULL,
  `frame2_title` varchar(255) DEFAULT NULL,
  `frame2_url` varchar(255) DEFAULT NULL,
  `frame2_width` int(4) DEFAULT NULL,
  `frame2_height` int(4) DEFAULT NULL,
  `frame2_icon` varchar(255) DEFAULT NULL,
  `frame3_title` varchar(255) DEFAULT NULL,
  `frame3_url` varchar(255) DEFAULT NULL,
  `frame3_width` int(4) DEFAULT NULL,
  `frame3_height` int(4) DEFAULT NULL,
  `frame3_icon` varchar(255) DEFAULT NULL,
  `frame4_title` varchar(255) DEFAULT NULL,
  `frame4_url` varchar(255) DEFAULT NULL,
  `frame4_width` int(4) DEFAULT NULL,
  `frame4_height` int(4) DEFAULT NULL,
  `frame4_icon` varchar(255) DEFAULT NULL,
  `frame5_title` varchar(255) DEFAULT NULL,
  `frame5_url` varchar(255) DEFAULT NULL,
  `frame5_width` int(4) DEFAULT NULL,
  `frame5_height` int(4) DEFAULT NULL,
  `frame5_icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frames`
--

LOCK TABLES `frames` WRITE;
/*!40000 ALTER TABLE `frames` DISABLE KEYS */;
INSERT INTO `frames` VALUES (1,'Spotify','https://open.spotify.com/embed/playlist/37i9dQZF1DXdLEN7aqioXM',350,500,'fab fa-spotify','PrivateBin','https://privatebin.info',1050,750,'far fa-clipboard','Calendar','https://calendar.google.com/calendar/u/0/embed?src=aHQzamxmYWFjNWxmZDYyNjN1bGZoNHRxbDhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ',900,750,'fas fa-calendar','Terminal','https://github.com/shellinabox/shellinabox',1050,700,'fas fa-terminal','Just Watch','https://www.justwatch.com/us',900,750,'fas fa-photo-video');
/*!40000 ALTER TABLE `frames` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `search_title` varchar(255) DEFAULT NULL,
  `search_icon` varchar(255) DEFAULT NULL,
  `search_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
INSERT INTO `search` VALUES (1,'Bing','fas fa-search','https://www.bing.com/search?q='),(2,'Just Watch','fas fa-film','https://www.justwatch.com/us/search?q='),(3,'Steam','fab fa-steam','http://store.steampowered.com/search/?term='),(4,'Reddit','fab fa-reddit-alien','https://www.reddit.com/search/?q='),(5,'Wolfram','fas fa-superscript','http://www.wolframalpha.com/input/?i='),(6,'Wowhead','fas fa-chess','http://www.wowhead.com/search?q='),(7,'PCParts Picker','fas fa-laptop','https://pcpartpicker.com/search/?q='),(8,'Twitch','fab fa-twitch','https://www.twitch.tv/search?term=');
/*!40000 ALTER TABLE `search` ENABLE KEYS */;
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
  `weather` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'thesource.rednet.dev','ann arbor','mi','48104','us','Good Morning','How are ya Now?','Good Evening','Why are you awake?','https://open.spotify.com/embed/playlist/37i9dQZF1DXdLEN7aqioXM','https://privatebin.info/','https://github.com/shellinabox/shellinabox','https://calendar.google.com/calendar/u/0/embed?src=aHQzamxmYWFjNWxmZDYyNjN1bGZoNHRxbDhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ','The Source','Quicksand','<a class=\"weatherwidget-io\" href=\"https://forecast7.com/en/42d28n83d74/ann-arbor/?unit=us\" data-label_1=\"ANN ARBOR\" data-label_2=\"WEATHER\" data-font=\"Fira Sans\" data-icons=\"Climacons Animated\" data-theme=\"dark\" data-basecolor=\"\" >ANN ARBOR WEATHER</a>\r\n<script>\r\n!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\'https://weatherwidget.io/js/widget.min.js\';fjs.parentNode.insertBefore(js,fjs);}}(document,\'script\',\'weatherwidget-io-js\');\r\n</script>');
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

-- Dump completed on 2020-10-15 22:46:11
