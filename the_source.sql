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
  `subcategory` text,
  `title` text NOT NULL,
  `status` text NOT NULL,
  `favorite` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookmark`
--

LOCK TABLES `bookmark` WRITE;
/*!40000 ALTER TABLE `bookmark` DISABLE KEYS */;
INSERT INTO `bookmark` VALUES (1,'f','1','https://fontawesome.com/','fab fa-font-awesome','Font','Font Awesome ','enabled','yes'),(2,'d','2','http://www.darksky.net','fas fa-cloud-sun','Weather','Dark Sky ','enabled','yes'),(3,'p','3','http://www.paypal.com','fab fa-paypal','Banking','PayPal ','enabled','yes'),(4,'d','4','https://discordapp.com/login','fab fa-discord','Comms','Discord ','enabled','yes'),(5,'n','5','http://www.netflix.com','fas fa-film','Streaming','Netflix','enabled','yes'),(6,'c','6','https://www.cvs.com ','fas fa-file-prescription','Drugs','CVS','enabled','yes'),(7,'m','7','http://www.mxtoolbox.com','fas fa-network-wired','IP','MXToolbox ','enabled','yes'),(8,'g','8','http://mail.google.com','far fa-envelope','Comms','Gmail ','enabled','yes'),(9,'n','9','https://nixcraft.tumblr.com','far fa-newspaper','Fun','NixCraft ','enabled','yes'),(10,'m','2','https://google.com/maps','far fa-map','Navigation','Maps','enabled','yes'),(11,'o','7','https://www.opendns.com/','fas fa-network-wired','DNS','OpenDNS','enabled','yes'),(12,'c','8','https://calendar.google.com/','far fa-address-card','Calendar','Calendar','enabled','yes'),(13,'h','5','https://www.hulu.com','fas fa-photo-video','Streaming','Hulu','enabled','yes'),(14,'i','9','https://www.imgur.com','fas fa-globe','Images','Imgur','enabled','yes'),(15,'r','9','https://www.reddit.com','fab fa-reddit-alien','FrontPage','Reddit','enabled','yes'),(16,'w','6','https://www.webmd.com','fas fa-book-medical','YourDead','WebMD','enabled','yes'),(17,'p','3','https://pay.google.com','fas fa-file-invoice-dollar','Money','Google Pay','enabled','yes'),(18,'s','4','https://store.steampowered.com/','fas fa-gamepad','EmptyWallet','Steam','enabled','yes'),(19,'d','1','https://www.deviantart.com/','far fa-object-group','Art','DeviantArt','enabled','yes'),(20,'x','10','https://xkcd.com/','far fa-user-circle','XKCD','XKCD','enabled','yes');
/*!40000 ALTER TABLE `bookmark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category1_number` varchar(255) DEFAULT NULL,
  `category1_name` varchar(255) DEFAULT NULL,
  `category1_fa` varchar(255) DEFAULT NULL,
  `category2_number` varchar(255) DEFAULT NULL,
  `category2_name` varchar(255) DEFAULT NULL,
  `category2_fa` varchar(255) DEFAULT NULL,
  `category3_number` varchar(255) DEFAULT NULL,
  `category3_name` varchar(255) DEFAULT NULL,
  `category3_fa` varchar(255) DEFAULT NULL,
  `category4_number` varchar(255) DEFAULT NULL,
  `category4_name` varchar(255) DEFAULT NULL,
  `category4_fa` varchar(255) DEFAULT NULL,
  `category5_number` varchar(255) DEFAULT NULL,
  `category5_name` varchar(255) DEFAULT NULL,
  `category5_fa` varchar(255) DEFAULT NULL,
  `category6_number` varchar(255) DEFAULT NULL,
  `category6_name` varchar(255) DEFAULT NULL,
  `category6_fa` varchar(255) DEFAULT NULL,
  `category7_number` varchar(255) DEFAULT NULL,
  `category7_name` varchar(255) DEFAULT NULL,
  `category7_fa` varchar(255) DEFAULT NULL,
  `category8_number` varchar(255) DEFAULT NULL,
  `category8_name` varchar(255) DEFAULT NULL,
  `category8_fa` varchar(255) DEFAULT NULL,
  `category9_number` varchar(255) DEFAULT NULL,
  `category9_name` varchar(255) DEFAULT NULL,
  `category9_fa` varchar(255) DEFAULT NULL,
  `category10_number` varchar(255) DEFAULT NULL,
  `category10_name` varchar(255) DEFAULT NULL,
  `category10_fa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'1','Design','far fa-object-group','2','Environmental','fas fa-cloud-sun','3','Finance','fas fa-file-invoice-dollar','4','Games','fas fa-gamepad','5','Media','fas fa-photo-video','6','Medical','far fa-hospital','7','Network','fas fa-photo-video','8','Productivity','far fa-address-card','9','Web','fas fa-globe','10','Misc','fas fa-grip-horizontal');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` VALUES (1,'#cal_search','block','search','Google Calendar'),(2,'#contacts','block','search','Google Contacts'),(3,'#drive','block','search','Google Drive'),(4,'#earth','block','search','Google Earth'),(5,'#keep','block','search','Google Keep'),(6,'#gmail','block','search','Google Keep'),(7,'#hangouts','block','search','Google Hangouts'),(8,'#maps','block','search','Google Maps'),(9,'#photos','block','search','Google Photos'),(10,'#play','block','search','Google Play'),(11,'#scholar','block','search','Google Scholar'),(12,'#g_search','block','search','Google Search'),(13,'#translate','block','search','Google Translate'),(14,'#youtube','block','search','YouTube'),(33,'#password_nav','block','feature','Password'),(34,'#search_nav','block','feature','Search'),(35,'#design_toggle','block','category','Design'),(36,'#enviro_toggle','block','category','Environmental'),(37,'#game_toggle','block','category','Games'),(38,'#media_toggle','block','category','Media'),(39,'#medical_toggle','block','category','Medical'),(40,'#network_toggle','block','category','Network'),(41,'#prod_toggle','block','category','Productivity'),(42,'#web_toggle','block','category','Web'),(46,'#finance_toggle','block','category','Finance');
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
  `frame1_width` char(4) DEFAULT NULL,
  `frame1_height` char(4) DEFAULT NULL,
  `frame1_icon` varchar(255) DEFAULT NULL,
  `frame2_title` varchar(255) DEFAULT NULL,
  `frame2_url` varchar(255) DEFAULT NULL,
  `frame2_width` char(4) DEFAULT NULL,
  `frame2_height` char(4) DEFAULT NULL,
  `frame2_icon` varchar(255) DEFAULT NULL,
  `frame3_title` varchar(255) DEFAULT NULL,
  `frame3_url` varchar(255) DEFAULT NULL,
  `frame3_width` char(4) DEFAULT NULL,
  `frame3_height` char(4) DEFAULT NULL,
  `frame3_icon` varchar(255) DEFAULT NULL,
  `frame4_title` varchar(255) DEFAULT NULL,
  `frame4_url` varchar(255) DEFAULT NULL,
  `frame4_width` char(4) DEFAULT NULL,
  `frame4_height` char(4) DEFAULT NULL,
  `frame4_icon` varchar(255) DEFAULT NULL,
  `frame5_title` varchar(255) DEFAULT NULL,
  `frame5_url` varchar(255) DEFAULT NULL,
  `frame5_width` char(4) DEFAULT NULL,
  `frame5_height` char(4) DEFAULT NULL,
  `frame5_icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frames`
--

LOCK TABLES `frames` WRITE;
/*!40000 ALTER TABLE `frames` DISABLE KEYS */;
INSERT INTO `frames` VALUES (1,'Spotify','https://open.spotify.com/embed/playlist/37i9dQZF1DXdLEN7aqioXM','350','500','fab fa-spotify','Murmur','https://asoftmurmur.com/','1050','750','far fa-file-audio','Calendar','https://calendar.google.com/calendar/u/0/embed?src=aHQzamxmYWFjNWxmZDYyNjN1bGZoNHRxbDhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ','900','750','fas fa-calendar','MXToolbox','https://www.mxtoolbox.com/','1050','700','fas fa-network-wired','Just Watch','https://www.justwatch.com/us/','900','780','fas fa-photo-video');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
INSERT INTO `search` VALUES (1,'Bing','fas fa-search','https://www.bing.com/search?q='),(2,'DeviantArt','fas fa-brush','https://www.deviantart.com/search?q='),(3,'Steam','fab fa-steam','http://store.steampowered.com/search/?term='),(4,'Reddit','fab fa-reddit-alien','https://www.reddit.com/search/?q='),(5,'Wolfram','fas fa-superscript','http://www.wolframalpha.com/input/?i='),(6,'Wowhead','fas fa-chess','http://www.wowhead.com/search?q='),(7,'Amazon','fab fa-amazon','https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords='),(8,'Codepen','fab fa-codepen','https://codepen.io/search/pens?q='),(9,'DuckDuckGo','fab fa-searchengin','https://duckduckgo.com/?q='),(10,'eBay','fab fa-ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=p2380057.m570.l1313.TR11.TRC2.A0.H0.XSTuff.TRS1&_nkw='),(11,'Font Awesome','fab fa-font-awesome-flag','https://fontawesome.com/icons?d=gallery&m=free&q='),(12,'GitHub','fab fa-github','https://github.com/search?q='),(13,'Giphy','fas fa-file-image','https://giphy.com/search/'),(14,'Hulu','fas fa-film','https://www.hulu.com/search?q='),(15,'IMDb','fab fa-imdb','http://www.imdb.com/find?ref_=nv_sr_fn&q='),(16,'Imgur','fas fa-arrow-alt-circle-up','https://imgur.com/search?q='),(17,'Just Watch','fas fa-photo-video','https://www.justwatch.com/us/search?q='),(18,'Netflix','fas fa-film','https://www.netflix.com/search?q='),(19,'Overflow','fab fa-stack-overflow','https://open.spotify.com/search/'),(20,'Spotify','fab fa-spotify','https://open.spotify.com/search/'),(21,'Wallhaven','far fa-file-image','https://wallhaven.cc/search?q='),(22,'Wikipedia','fab fa-wikipedia-w','https://en.wikipedia.org/wiki/'),(23,'empty','',''),(24,'empty','','');
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
  `morning_message` varchar(255) DEFAULT NULL,
  `day_message` varchar(255) DEFAULT NULL,
  `dusk_message` varchar(255) DEFAULT NULL,
  `evening_message` varchar(255) DEFAULT NULL,
  `pagetitle` varchar(30) DEFAULT NULL,
  `font` varchar(30) DEFAULT NULL,
  `weather` varchar(2000) DEFAULT NULL,
  `list` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'https://thesource.rednet.dev/','Good Morning','How are ya now?','Good Evening','Why are you awake?','The Source','Quicksand','<a class=\"weatherwidget-io\" href=\"https://forecast7.com/en/42d28n83d74/ann-arbor/?unit=us\" data-label_1=\"ANN ARBOR\" data-label_2=\"WEATHER\" data-font=\"Fira Sans\" data-icons=\"Climacons Animated\" data-theme=\"dark\" data-basecolor=\"\" >ANN ARBOR WEATHER</a>\n<script>\n!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\'https://weatherwidget.io/js/widget.min.js\';fjs.parentNode.insertBefore(js,fjs);}}(document,\'script\',\'weatherwidget-io-js\');\n</script>','disabled');
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

-- Dump completed on 2020-10-26 13:46:43
