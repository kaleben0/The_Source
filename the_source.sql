-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: source
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
) ENGINE=InnoDB AUTO_INCREMENT=264 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookmark`
--

LOCK TABLES `bookmark` WRITE;
/*!40000 ALTER TABLE `bookmark` DISABLE KEYS */;
INSERT INTO `bookmark` VALUES (1,'a','design','https://creativecloud.adobe.com/','fab fa-adobe','Graphics','Adobe CC ','enabled','no'),(2,'a','environmental','https://www.accuweather.com/','fas fa-cloud-sun','Weather','Accuweather ','enabled','no'),(4,'a','media','https://asoftmurmur.com/','far fa-file-audio','Audio','A Soft Murmur ','enabled','no'),(5,'a','finance','https://www.affirm.com/u/#/signin','far fa-credit-card','Credit','Affirm ','enabled','yes'),(6,'a','finance','https://www.ally.com/auto/','far fa-credit-card','Credit','Ally Auto ','enabled','no'),(7,'a','web','http://www.amazon.com','fab fa-amazon','Shopping','Amazon ','enabled','yes'),(8,'a','finance','https://www.synchronycredit.com/eSecurity/Login/login.action?clientId=amazon&accountType=plcc&langId=en','far fa-credit-card','Credit','Amazon Store Card ','enabled','no'),(9,'a','media','https://www.amazon.com/Amazon-Video/b/ref=sv_mov_8?ie=UTF8&node=2858778011','fas fa-film','Streaming','Amazon Video ','enabled','yes'),(10,'m','productivity','https://messages.android.com/','fab fa-android','SMS','Messages ','enabled','no'),(11,'a','design','http://animista.net/','fas fa-font','Code','Animista ','enabled','no'),(12,'a','game','http://www.arcgames.com/en/games','fas fa-gamepad','MMO','Arc Games ','enabled','no'),(13,'a','game','https://account.arena.net/login','fas fa-gamepad','MMO','ArenaNet ','enabled','no'),(14,'a','finance','https://auth.americanstrategic.com/core/login?signin=cb2058b0313f979e1cddb9aacee20737','fas fa-house-damage','Insurance','ASI/Progressive ','enabled','no'),(15,'a','productivity','https://atheneum.rednet.dev/shelves/','fas fa-book','Document','Atheneum ','enabled','yes'),(16,'a','design','https://flawlessapp.io/designtools','fas fa-compact-disc','Software','Awesome Design ','enabled','no'),(17,'a','design','https://github.com/Hack-with-Github/Awesome-Hacking','fas fa-compact-disc','Software','Awesome Hacking ','enabled','no'),(18,'a','design','https://github.com/luong-komorebi/Awesome-Linux-Software','fas fa-compact-disc','Software','Awesome Linux ','enabled','no'),(19,'a','design','https://github.com/friskfrysefrugt/awesome-networking','fas fa-compact-disc','Software','Awesome Network ','enabled','no'),(20,'a','design','https://github.com/Kickball/awesome-selfhosted','fas fa-compact-disc','Software','Awesome Selfhosted ','enabled','no'),(21,'a','design','https://github.com/n1trux/awesome-sysadmin','fas fa-compact-disc','Software','Awesome SysAdmin ','enabled','no'),(22,'a','design','https://github.com/Awesome-Windows/Awesome','fas fa-compact-disc','Software','Awesome Windows ','enabled','no'),(23,'b','game','http://battle.net','fab fa-battle-net','MMO','Battle.net ','enabled','yes'),(24,'b','design','https://www.beautifyconverter.com/','fas fa-code','Code','Beautify Converter ','enabled','no'),(25,'b','medical','https://www.bcbsm.com/','far fa-hospital','Insurance','Blue Care Network ','enabled','yes'),(26,'b','design','https://bootstrap.build/','fab fa-bootstrap','Code','Bootstrap Build ','enabled','no'),(27,'b','medical','http://www.bodywisdommassage.net/','fas fa-running','Health','Body Wisdom ','enabled','no'),(28,'c','network ','https://cacti.rednet.dev','fas fa-network-wired','Monitoring','Cacti ','enabled','yes'),(29,'c','design','https://www.canva.com/font-combinations/','fas fa-font','Font','Canva ','enabled','no'),(30,'c','finance','http://www.chase.com','fas fa-piggy-bank','Banking','Chase ','enabled','yes'),(31,'c','design','https://codepen.io/','fab fa-codepen','Code','CodePen ','enabled','no'),(32,'c','design','https://lecoupa.github.io/awesome-cheatsheets/','fas fa-code','Code','Coding Cheatsheets ','enabled','no'),(33,'c','game','https://coh.rednet.dev','fas fa-gamepad','Tool','COH Codex ','enabled','no'),(34,'c','design','http://www.colorhexa.com/','fas fa-code','Code','Colorhexa ','enabled','no'),(35,'c','finance','https://customer.xfinity.com/','fas fa-tv','Utility','Comcast ','enabled','yes'),(36,'c','environmental','https://www.crimemapping.com/map/location/48130?id=','fas fa-user-secret','Crime','Crime Mapping ','enabled','yes'),(37,'c','network','https://crontab-generator.org/','fas fa-asterisk','SysAdmin','CronTab Generator ','enabled','no'),(38,'c','design','https://cssgrid-generator.netlify.com/','fas fa-code','Code','CSS Grid ','enabled','no'),(39,'c','design','https://www.cssmatic.com','fas fa-code','Code','CSSmatic ','enabled','no'),(40,'c','design','http://www.cssportal.com/','fas fa-code','Code','CSS Portal ','enabled','no'),(41,'c','game','https://www.curseforge.com/','fas fa-gamepad','Add-On','CurseForge ','enabled','no'),(42,'c','medical','https://www.cvs.com/pharmacy/v1/#/rxcenter ','fas fa-file-prescription','Drugs','CVS ','enabled','yes'),(43,'d','environmental','http://www.darksky.net','fas fa-cloud-sun','Weather','Dark Sky ','enabled','yes'),(44,'d','game','http://deathgenerator.com','fas fa-image','Fun','Death Generator ','enabled','no'),(45,'d','finance','https://bsaonline.com/?uid=386&sitetransition=true','fas fa-dumpster','Utility','Dexter Utilities ','enabled','no'),(46,'w','medical','https://www.dexterwellness.org/','fas fa-running','Health','Wellness ','enabled','no'),(47,'d','network','https://www.digwebinterface.com/','fas fa-sitemap','DNS','Dig Web','enabled','no'),(48,'d','game','https://discordapp.com/login','fab fa-discord','Comms','Discord ','enabled','yes'),(49,'d','finance','https://www.mysynchrony.com/?gemid1=StmtAvl','far fa-credit-card','Credit','Discount Tire Card ','enabled','no'),(50,'d','media','https://www.disneyplus.com/login','fas fa-film','Streaming','Disney+ ','enabled','no'),(51,'d','network','https://www.dnsape.com/','fas fa-sitemap','DNS','DNSApe ','enabled','no'),(52,'d','finance','https://www.dollarshaveclub.com/login','fas fa-file-invoice-dollar','Health','Dollar Shave ','enabled','no'),(53,'d','design','http://draw.rednet.dev','fas fa-image','Graphics','Draw.io ','enabled','yes'),(54,'d','medical','http://www.drugs.com','fas fa-file-prescription','Drugs','Drugs.com ','enabled','no'),(55,'d','finance','https://www.newlook.dteenergy.com/wps/wcm/connect/dte-web/home','fas fa-plug','Utility','DTE Energy ','enabled','no'),(56,'d','network','https://admin.duosecurity.com/login?next=%2F','fas fa-shield-alt','Security','DUO Admin ','enabled','no'),(57,'e','web','http://www.ebay.com','fab fa-ebay','Shopping','eBay ','enabled','yes'),(58,'e','web','http://www.etsy.com','fab fa-etsy','Shopping','Etsy ','enabled','no'),(59,'f','finance','https://firefly.rednet.dev','fas fa-piggy-bank','Banking','Firefly ','enabled','yes'),(60,'f','productivity','https://file.rednet.dev','far fa-hdd','Storage','FileRun ','disabled','no'),(61,'f','design','https://css-tricks.com/snippets/css/a-guide-to-flexbox/','fas fa-code','Code','Flexbox ','enabled','no'),(62,'f','design','https://fontawesome.com/','fab fa-font-awesome','Font','Font Awesome ','enabled','yes'),(63,'f','finance','https://www.myidmanager.com/dashboard','fas fa-user-secret','Security','FraudScout ','enabled','no'),(64,'f','design','https://freesound.org','fas fa-volume-up','Audio','Freesound ','enabled','no'),(65,'g','design','http://www.gamethemesongs.com/','fas fa-volume-up','Audio','Game Theme Songs ','enabled','no'),(66,'g','media','https://giphy.com','fas fa-file-image','Fun','Giphy ','enabled','no'),(67,'g','design','https://github.com','fab fa-github','Code','GitHub ','enabled','yes'),(68,'g','productivity','http://mail.google.com','far fa-envelope','Comms','Gmail ','enabled','yes'),(69,'g','design','https://script.google.com','fas fa-code','Code','Google Script','enabled','no'),(70,'g','media','https://books.google.com/books?op=library&hl=en','fas fa-book','Books','Google Books ','enabled','no'),(71,'g','productivity','http://calendar.google.com','far fa-calendar-alt','Schedule','Google Calendar ','enabled','yes'),(72,'g','web','http://classroom.google.com','fas fa-chalkboard-teacher','Education','Google Classroom ','enabled','no'),(73,'g','productivity','http://contacts.google.com','far fa-address-card','Comms','Google Contacts ','enabled','no'),(74,'g','network','http://domains.google.com','fas fa-sitemap','DNS','Google Domains ','enabled','yes'),(75,'g','productivity','http://drive.google.com','fab fa-google-drive','Storage','Google Drive ','enabled','yes'),(76,'g','environmental','https://earth.google.com/web/','fas fa-globe-americas','Mapping','Google Earth ','enabled','no'),(77,'g','design','http://fonts.google.com','fas fa-font','Fonts','Google Fonts ','enabled','no'),(78,'g','productivity','http://hangouts.google.com','far fa-comment-dots','Comms','Google Hangouts ','enabled','no'),(79,'g','productivity','http://history.google.com','fas fa-history','Security','Google History ','enabled','no'),(80,'g','productivity','http://keep.google.com','fas fa-tasks','Project','Google Keep ','enabled','yes'),(81,'g','productivity','https://jamboard.google.com/','fas fa-chalkboard','Comms','Google Jamboard ','enabled','no'),(82,'g','environmental','http://maps.google.com','far fa-map','Mapping','Google Maps ','enabled','yes'),(83,'g','productivity','https://passwords.google.com','fas fa-unlock-alt','Security','Google Passwords ','enabled','no'),(84,'g','finance','https://pay.google.com','fab fa-google-wallet','Banking','Google Pay ','enabled','no'),(85,'g','media','http://photos.google.com','fas fa-file-image','Photo','Google Photos ','enabled','no'),(86,'g','media','http://play.google.com','fab fa-google-play','Software','Google Play ','enabled','no'),(87,'g','productivity','https://scholar.google.com','fas fa-graduation-cap','Education','Google Scholar ','enabled','no'),(88,'g','productivity','http://translate.google.com','fas fa-language','Comms','Google Translate ','enabled','no'),(89,'g','web','https://transparencyreport.google.com','fas fa-user-secret','Security','Google Report','enabled','no'),(90,'g','design','https://www.gradient-animator.com/','fas fa-image','Code','Gradient Animator ','enabled','no'),(91,'h','productivity','http://www.hellofax.com','fas fa-fax','Comms','Hellofax ','enabled','no'),(92,'h','productivity','http://www.hemingwayapp.com/','far fa-edit','Writing','Hemingway ','enabled','no'),(93,'h','media','http://www.hulu.com','fas fa-film','Streaming','Hulu ','enabled','yes'),(94,'h','finance','https://members.legalplans.com/Home/','fas fa-balance-scale','Insurance','Hyatt Legal ','enabled','no'),(95,'i','network','https://iwp.rednet.dev/v3/','fab fa-wordpress','SysAdmin','InfiniteWP ','enabled','yes'),(96,'i','web','http://www.ifunny.co','fas fa-file-image','Fun','Ifunny','enabled','yes'),(97,'i','media','http://www.imdb.com','fab fa-imdb','Movies','IMDB ','enabled','no'),(98,'i','web','https://imgur.com/new/time','fas fa-arrow-alt-circle-up','Fun','Imgur ','enabled','yes'),(99,'j','medical','https://jbinteractive.azurewebsites.net/SGAccount/MyLogin','fas fa-file-prescription','Drugs','J & B Medical ','enabled','yes'),(100,'j','media','https://www.justwatch.com/us','fas fa-photo-video','Streaming','Just Watch ','enabled','no'),(101,'k','web','http://www.kickassfacts.com/','far fa-newspaper','Education','KickAssFacts ','enabled','no'),(102,'k','media','https://www.kimcartoon.to','fas fa-film','Streaming','KimCartoon ','enabled','no'),(103,'l','design','https://loading.io','fas fa-image','Graphics','Loading.io ','enabled','no'),(104,'l','network','https://www.looking.house','fas fa-network-wired','IP','Looking House ','enabled','no'),(105,'l','design','https://selfhostedsource.tech/','fas fa-compact-disc','Software','Lucid Index ','enabled','no'),(106,'m','media','http://www.madparadox.com','fas fa-film','Streaming','Mad Paradox ','enabled','no'),(107,'m','design','https://dev.materialdesignicons.com/icons','fas fa-image','Graphics','Material Design Icons ','enabled','no'),(108,'m','finance','http://www.finance.umich.edu/treasury/mcard/discounts','fas fa-coins','Discounts','MCard Discounts ','enabled','no'),(109,'m','environmental','https://mdotjboss.state.mi.us/MiDrive/map','fas fa-traffic-light','Traffic','MDOT MiDrive ','enabled','no'),(110,'m','medical','https://mp.medimpact.com/umh','fas fa-file-prescription','Drugs','MedImpact ','enabled','no'),(111,'m','productivity','https://msc-dr.merit.edu','fas fa-house-damage','Merit','Merit DR ','enabled','no'),(112,'m','finance','https://citiretailservices.citibankonline.com/RSauth/signon?pageName=signon&siteId=PLCN_MEIJER&langId=en_US','far fa-credit-card','Credit','Meijer Credit Card ','enabled','no'),(113,'m','productivity','https://mind.rednet.dev','fas fa-project-diagram','Project','MindMaps ','enabled','no'),(114,'m','finance','https://mperks.meijer.com','fas fa-coins','Discounts','MPerks ','enabled','no'),(115,'m','network','http://www.mxtoolbox.com','fas fa-network-wired','IP','MXToolbox ','enabled','no'),(116,'m','medical','https://www.myuofmhealth.org/MyChart-PRD/','fas fa-notes-medical','Healthcare','MyChart ','enabled','yes'),(117,'n','game','http://www.fantasynamegenerators.com/','far fa-edit','Writing','Name Generator ','enabled','no'),(118,'n','finance','https://navient.com/','fas fa-landmark','Loans','Navient ','enabled','yes'),(119,'n','network','https://net.rednet.dev/','fas fa-database','Document','Netbox ','enabled','yes'),(120,'n','media','http://www.netflix.com','fas fa-film','Streaming','Netflix ','enabled','yes'),(121,'n','web','https://nixcraft.tumblr.com','far fa-newspaper','Fun','NixCraft ','enabled','no'),(122,'n','network','https://www.no-ip.com','fas fa-sitemap','DNS','No-IP ','enabled','no'),(123,'o','media','https://ololo.to/','fas fa-photo-video','Piracy','Ololo ','enabled','yes'),(124,'o','medical','https://onetouchreveal.com/login','fas fa-syringe','Database','OneTouch','enabled','yes'),(125,'o','network','https://www.opendns.com/','fas fa-sitemap','DNS','OpenDNS ','enabled','no'),(126,'o','network','https://dexter.rednet.dev:48530','far fa-comment-dots','Comms','Openfire','enabled','no'),(127,'o','game','https://www.origin.com/usa/en-us/store','fas fa-gamepad','Games','Origin ','enabled','no'),(129,'p','productivity','https://pbolt.rednet.dev','fas fa-unlock-alt','Security','Passbolt ','enabled','yes'),(130,'p','design','https://public-apis.xyz/','fas fa-code','Code','Public API ','enabled','no'),(131,'p','finance','https://account.progressive.com/access/login','fas fa-car-crash','Insurance','Progressive ','enabled','no'),(132,'p','design','https://bin.rednet.dev','far fa-clipboard','Security','PrivateBin ','enabled','no'),(133,'p','game','https://www.plot-generator.org.uk/story-ideas/','far fa-edit','Writing','Plot Generator ','enabled','no'),(134,'p','media','https://newsletter.rednet.dev','fas fa-envelope-open-text','Streaming','Plex Newsletter ','enabled','no'),(135,'p','media','https://plex.rednet.dev:32400/web/','fas fa-film','Streaming','Plex ','enabled','yes'),(136,'p','design','https://pixlr.com/editor/','fas fa-image','Graphics','Pixlr ','enabled','no'),(137,'p','finance','https://bavarianperks.com/home/','fas fa-coins','Discounts','Perks Club ','enabled','no'),(138,'p','web','https://pcpartpicker.com/','far fa-newspaper','Config','PC PartPicker ','enabled','no'),(139,'p','finance','http://www.paypal.com','fab fa-paypal','Banking','PayPal ','enabled','yes'),(140,'p','network','https://pihole.rednet.dev','fab fa-raspberry-pi','DNS','Pi-Hole ','enabled','yes'),(141,'p','network','https://ping.pe/','fas fa-network-wired','IP','Ping.Pe ','enabled','no'),(142,'q','design','https://www.the-qrcode-generator.com/','fas fa-image','Graphics','QR Code ','enabled','no'),(143,'q','web','https://www.goodrichqualitytheaters.com/michigan/quality-16','fas fa-ticket-alt','Movies','Quaility 16 ','enabled','no'),(144,'r','web','http://www.reddit.com ','fab fa-reddit-alien','Fun','Reddit ','enabled','yes'),(145,'g','network','http://10.0.0.1','fas fa-network-wired','Rednet','Gateway ','enabled','rednet'),(146,'s','network','https://status.rednet.dev','fas fa-signal','Rednet','Status ','enabled','rednet'),(147,'r','productivity','https://rednetuniversity.rednet.dev','fas fa-chalkboard-teacher','Education','Rednet University ','enabled','no'),(148,'r','media','https://my.roku.com/signin','fas fa-film','Streaming','Roku ','enabled','no'),(149,'r','game','http://rollforfantasy.com/','fas fa-dice','Writing','Roll for Fantasy ','enabled','no'),(150,'r','design','https://code.rednet.dev/','fas fa-laptop-code','Code','RStudio ','enabled','yes'),(151,'s','medical','https://www.stjoeshealthcancerportal.com/login','far fa-hospital','Healthcare','St. Joes Cancer ','enabled','no'),(152,'s','design','https://stackoverflow.com/','fab fa-stack-overflow','Code','Stack Overflow ','enabled','yes'),(153,'s','finance','https://milogin.michigan.gov/eai/login/authenticate?URL=/mga/sps/auth','fas fa-flag-usa','Gov','State of Michigan ','enabled','no'),(154,'s','game','http://store.steampowered.com/','fab fa-steam','Games','Steam ','enabled','yes'),(155,'r','web','https://rss.rednet.dev','fas fa-rss','News','RSS','enabled','yes'),(156,'s','environmental','https://safeandfound.sprint.com/','fas fa-map-pin','Tracking','Safe & Found ','enabled','yes'),(157,'s','design','https://sketch.io/sketchpad/','fas fa-image','Graphics','Sketch.io ','enabled','no'),(158,'s','media','https://player.siriusxm.com/','far fa-file-audio','Audio','SiriusXM ','enabled','no'),(159,'s','network','https://beta.speedtest.net/','fas fa-tachometer-alt','IP','Speedtest ','enabled','no'),(160,'s','media','https://open.spotify.com/browse/','fab fa-spotify','Audio','Spotify ','enabled','no'),(161,'s','finance','https://www.sprint.com/','fas fa-mobile-alt','Comms','Sprint ','enabled','no'),(162,'s','finance','https://secure.ssa.gov/RIL/SiView.do','fas fa-money-check','Disabilty','Social Security ','enabled','no'),(163,'s','finance','http://www.square.com','fas fa-cash-register','Sales','Square ','enabled','no'),(164,'s','finance','http://www.squaretrade.com','fas fa-file-invoice-dollar','Warranty','Squaretrade ','enabled','no'),(165,'s','network','https://www.sslforfree.com/login','fas fa-certificate','Security','SSL for Free ','enabled','no'),(166,'t','game','https://tarra.rednet.dev/','far fa-edit','Writing','Tarra ','enabled','no'),(167,'t','network','https://plex.rednet.dev:48540','fas fa-film','Piracy','Tautulli ','enabled','yes'),(168,'t','web','https://www.teahaus.com/','fas fa-mug-hot','Food','Teahaus ','enabled','no'),(169,'t','productivity','https://10minutemail.com/','far fa-envelope','Security','Ten Min Mail ','enabled','no'),(170,'t','design','https://www.textfx.co/','fas fa-font','Font','Text Effects ','enabled','no'),(171,'t','design','https://textmechanic.com/','fas fa-font','Font','Text Mechanic ','enabled','no'),(172,'t','environmental','https://www.timeanddate.com/worldclock/converter.html','fas fa-hourglass-half','Time','Time Zone ','enabled','no'),(173,'t','web','http://tonsoffacts.com','far fa-newspaper','Education','Tons of Facts ','enabled','no'),(174,'t','productivity','https://toolstud.io/','fas fa-tools','Tools','Toolstud.io ','enabled','no'),(175,'t','design','https://www.transparenttextures.com/','fas fa-image','Graphics','Transparent Textures ','enabled','no'),(176,'t','game','http://www.twitch.tv/','fab fa-twitch','Streaming','Twitch ','enabled','yes'),(177,'u','medical','https://hr.umich.edu/benefits-wellness','far fa-hospital','Merit','UM HR ','enabled','no'),(178,'u','design','https://uigradients.com/','fas fa-image','Code','UIGradients ','enabled','no'),(179,'u','productivity','https://www.ups.com/lasso/login','fab fa-ups','Shipping','UPS ','enabled','no'),(180,'u','productivity','https://informeddelivery.usps.com','fab fa-usps','Shipping','USPS ','enabled','no'),(181,'v','environmental','http://www.ventusky.com','fas fa-wind','Weather','Ventusky ','enabled','no'),(182,'v','productivity','https://versusutil.com/','far fa-edit','Writing','Versus ','enabled','no'),(183,'v','network','https://my.vultr.com','fas fa-server','VPS','Vultr ','enabled','yes'),(184,'w','media','https://wallhaven.cc/','fas fa-file-image','Graphics','Wallhaven ','enabled','no'),(185,'w','environmental','https://www.waze.com/livemap','fab fa-waze','Traffic','Waze ','enabled','no'),(186,'w','environmental','http://www.weather.com','fas fa-cloud-sun','Weather','Weather.com ','enabled','no'),(187,'w','environmental','http://www.weatherunderground.com','fas fa-cloud-sun','Weather','W-Ground','enabled','yes'),(188,'w','medical','https://www.webmd.com/','fas fa-book-medical','Database','WebMD ','enabled','no'),(189,'w','web','https://weboas.is/','far fa-newspaper','Hacking','Web Oasis ','enabled','no'),(190,'w','productivity','https://meritnetworkinc.wheniwork.com/','fas fa-business-time','Merit','When I Work ','enabled','no'),(191,'w','network','https://whois.domaintools.com/','fas fa-sitemap','DNS','Whois ','enabled','no'),(192,'w','network','https://www.wireshark.org/tools/','fas fa-network-wired','IP','WireShark ','enabled','no'),(193,'w','environmental','http://www.windy.com','fas fa-wind','Weather','Windy ','enabled','no'),(194,'w','productivity','https://www.wikipedia.org','fab fa-wikipedia-w','Education','Wikipedia ','enabled','no'),(195,'w','productivity','http://www.wolframalpha.com','fas fa-calculator','Education','WolfRam Alpha ','enabled','no'),(196,'w','finance','https://classic.wolverineaccess.umich.edu/f/u24l1s13/normal/render.uP','fas fa-money-check','Merit','Wolverine','enabled','no'),(197,'w','game','http://www.wowhead.com/','fas fa-chess-rook','WoW','Wowhead ','enabled','yes'),(198,'w','design','https://workbench.rednet.dev','fas fa-tasks','Project','Workbench ','enabled','yes'),(199,'w','game','https://worldofwarcraft.com/en-us/','fas fa-gamepad','MMO','World of Warcraft ','enabled','yes'),(200,'w','game','https://wow.gamepedia.com/Portal:Main','fas fa-gamepad','WoW','Wowpedia ','enabled','no'),(201,'w','design','http://wwwhere.io/','fas fa-compact-disc','Software','WWWhere ','enabled','no'),(202,'x','web','http://www.xkcd.com','far fa-user-circle','Fun','XKCD ','enabled','no'),(203,'x','media','https://tv.xfinity.com/','fas fa-film','Streaming','Xfinity TV ','enabled','no'),(204,'y','media','http://www.youtube.com','fab fa-youtube','Streaming','YouTube','enabled','yes'),(205,'y','productivity','https://www.youmail.com','fas fa-voicemail','Comms','YouMail ','enabled','no'),(206,'z','network','https://zmap.io/','fas fa-network-wired','IP','ZMap Project ','enabled','no'),(207,'s','media','http://app.synclounge.tv/','fas fa-sync-alt','Streaming','SyncLounge','enabled','no'),(208,'d','design','https://www.deviantart.com/','fas fa-palette','Art','DeviantArt','enabled','no'),(209,'w','design','https://wallhaven.cc/','far fa-image','Wallpaper','WallHaven','enabled','no'),(210,'i','productivity','https://www.icollege.co/','fas fa-graduation-cap','Certs','iCollege','enabled','no'),(211,'z','productivity','https://umich.zoom.us/','fas fa-headset','Conference','Zoom','enabled','no'),(212,'k','design','https://keycode.info/','far fa-keyboard','Javascript','Keycode','enabled','no'),(213,'h','media','https://play.hbomax.com/','fas fa-film','Streaming','HBO Max','enabled','yes'),(214,'d','network','https://dexter.rednet.dev:48500/','fas fa-server dexter','Rednet','-Dexter-','enabled','rednet'),(215,'c','network','https://chicago.rednet.dev:48500/','fas fa-server chicago','Rednet','-Chicago-','enabled','rednet'),(216,'d','network','https://dallas.rednet.dev:48500/','fas fa-server dallas','Rednet','-Dallas-','enabled','rednet'),(218,'s','network','https://seattle.rednet.dev:48500/','fas fa-server seattle','Rednet','-Seattle-','enabled','rednet'),(219,'b','web','https://www.bing.com','fas fa-search','Search','Bing','enabled','no'),(220,'d','web','https://duckduckgo.com/','fab fa-searchengin','Search','DuckDuckGo','enabled','no'),(221,'d','environmental','https://outage.dteenergy.com/map','fas fa-plug','Power','DTE Outage','enabled','yes'),(222,'c','web','https://www.codecademy.com/','fas fa-code-branch','Coding','Codecademy','enabled','no'),(223,'b','media','https://www.boomerang.com/login','fas fa-photo-video','Cartoons','Boomerang','enabled','no'),(224,'c','finance','https://accounts.creditkarma.com/authorize','fas fa-file-invoice-dollar\r\n','Credit','Credit Karma','enabled','no'),(225,'d','game','https://auth.daybreakgames.com/login','fas fa-gamepad','MMO','DayBreak Games','enabled','no'),(226,'g','network','https://hostingmanager.godaddy.com/AccountPanel.aspx','fas fa-sitemap','CCDN','GoDaddy','enabled','no'),(227,'j','web','https://online.jetspizza.com/orderlogin.do','fas fa-pizza-slice','Food','Jets','enabled','no'),(228,'l','game','https://gamesdb.launchbox-app.com/account/signin','fas fa-gamepad','Classic','LaunchBox','enabled','no'),(229,'m','game','https://account.mojang.com/login','fas fa-cube','MineCraft','Mojang','enabled','no'),(230,'o','web','https://togo.outbackonlineordering.com/','fas fa-utensils','Steak','Outback','enabled','no'),(231,'s','media','https://watch.sling.com/','fas fa-tv','Streaming','Sling','enabled','no'),(233,'u','game','https://club.ubisoft.com/en-US/','fas fa-gamepad','Developer','Ubisoft','enabled',' no'),(234,'s','game','https://membership.square-enix.com/users/sign_in','fas fa-gamepad','Developer','Square-Enix','enabled','no'),(235,'m','web','https://www.mlive.com','far fa-newspaper','News','MLive','enabled','no'),(236,'e','finance','https://usa.experian.com/login/index','far fa-credit-card','Credit','Experian','enabled','no'),(237,'p','media','https://www.pandora.com/','fas fa-headphones','Music','Pandora','enabled','no'),(238,'w','game','https://wowwiki.fandom.com/wiki/Portal:Main','fas fa-gamepad','WoW','WowWiki','enabled','no'),(239,'b','design','https://bitbucket.org/','far fa-object-group','Code','BitBucket','enabled','no'),(240,'c','web','https://cheatography.com/','fas fa-globe','Info','Cheatography','enabled','no'),(241,'j','design','https://jsfiddle.net/','far fa-object-group','Testing','JSFiddle','enabled','no'),(242,'w','design','https://www.w3schools.com/','far fa-object-group','Coding','W3Schools','enabled','no'),(249,'a','design','https://customers.asmallorange.com/clientarea.php','far fa-object-group','Webhosting','A Small Orange','enabled','no'),(250,'i','game','https://itch.io/my-collections','fas fa-gamepad','Bundle','itch.io','enabled','no'),(251,'s','web','https://screenrant.com/','fas fa-ticket-alt','Movies','ScreenRant','enabled','no'),(253,'m','medical','https://magellan.adaptiverx.com/webSearch/index?key=cnhmbGV4LnBsYW4uUGxhblBkZlR5cGUtNTcy','fas fa-file-prescription','Drugs','Magellan','enabled','yes'),(254,'n','web','https://9gag.com/','fas fa-globe','Funny','9Gag','enabled','yes'),(255,'h','medical','https://www.myherbology.com/michigan/ann-arbor/','far fa-hospital','Drugs','Herbology','enabled','yes'),(256,'s','game','https://steamdb.info/','fab fa-steam','Steam','Steam DB','enabled','no'),(257,'c','game','https://champions.rednet.dev/','fas fa-gamepad','Roleplay','Champions','enabled','no'),(258,'p','media','https://www.peacocktv.com/signin','fas fa-photo-video','Streaming','Peacock','enabled','no'),(259,'r','productivity','https://recipe.rednet.dev','fas fa-utensils','Food','Recipe Box','enabled','no'),(260,'m','game','https://itch.io/jam/mini-jam','fas fa-gamepad','Mini-Game','Mini-Jam','enabled','no'),(261,'t','productivity','https://ticktick.com/webapp/','fas fa-tasks','Organize','TickTick','enabled','yes'),(262,'b','productivity','https://umich.bluejeans.com/','fas fa-headset','VideoCall','BlueJeans','enabled','no'),(263,'w','productivity','https://merit.webex.com/','fas fa-headset','VideoCall','WebEx','enabled','no');
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
  `status` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` VALUES (5,'#cal_search','block','search','Google Calendar'),(6,'#contacts','block','search','Google Contacts'),(7,'#drive','block','search','Google Drive'),(8,'#earth','block','search','Google Earth'),(9,'#keep','block','search','Google Keep'),(10,'#gmail','block','search','Google Keep'),(11,'#hangouts','block','search','Google Hangouts'),(12,'#maps','block','search','Google Maps'),(13,'#photos','block','search','Google Photos'),(14,'#play','block','search','Google Play'),(15,'#scholar','block','search','Google Scholar'),(16,'#g_search','block','search','Google Search'),(17,'#translate','block','search','Google Translate'),(18,'#youtube','block','search','YouTube'),(41,'#shortcut_nav','block','feature','Shortcuts'),(43,'#password_nav','block','feature','Password'),(44,'#search_nav','block','feature','Search'),(45,'#design_toggle','block','category','Design'),(46,'#enviro_toggle','block','category','Environmental'),(47,'#finance_toggle','block','category','Fianace'),(48,'#game_toggle','block','category','Games'),(49,'#media_toggle','block','category','Media'),(50,'#medical_toggle','block','category','Medical'),(51,'#network_toggle','block','category','Network'),(52,'#prod_toggle','block','category','Productivity '),(53,'#web_toggle','block','category','Web');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frames`
--

LOCK TABLES `frames` WRITE;
/*!40000 ALTER TABLE `frames` DISABLE KEYS */;
INSERT INTO `frames` VALUES (1,'Spotify','https://open.spotify.com/embed/playlist/6Qm6Rht1n5AjtnkRW1Z6X3','350','500','fab fa-spotify','PrivateBin','https://bin.rednet.dev','1050','750','fas fa-dumpster','TickTick','https://ticktick.com/webapp/#q/all/tasks','900','750','fas fa-tasks','Terminal','https://source.rednet.dev/ssh-red','1050','650','fas fa-terminal','Openfire','https://dexter.rednet.dev:7443/jsxc','600','780','far fa-comment');
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
INSERT INTO `search` VALUES (1,'Bing','fas fa-search','https://www.bing.com/search?q='),(2,'DeviantArt','fas fa-brush','https://www.deviantart.com/search?q='),(3,'Steam','fab fa-steam','http://store.steampowered.com/search/?term='),(4,'Reddit','fab fa-reddit-alien','https://www.reddit.com/search/?q='),(5,'Wolfram','fas fa-superscript','http://www.wolframalpha.com/input/?i='),(6,'Wowhead','fas fa-chess','http://www.wowhead.com/search?q='),(7,'Ololo','fas fa-skull-crossbones','https://ololo.to/s/'),(8,'KimCartoon','fas fa-video','https://kimcartoon.to/'),(9,'Amazon','fab fa-amazon','https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords='),(10,'Codepen','fab fa-codepen','https://codepen.io/search/pens?q='),(11,'DuckDuckGo','fab fa-searchengin','https://duckduckgo.com/?q='),(12,'eBay','fab fa-ebay','https://www.ebay.com/sch/i.html?_from=R40&_trksid=p2380057.m570.l1313.TR11.TRC2.A0.H0.XSTuff.TRS1&_nkw='),(13,'Font Awesome','fab fa-font-awesome-flag','https://fontawesome.com/icons?d=gallery&m=free&q='),(14,'GitHub','fab fa-github','https://github.com/search?q='),(15,'Giphy','fas fa-file-image','https://giphy.com/search/'),(16,'Hulu','fas fa-film','https://www.hulu.com/search?q='),(17,'IMDb','fab fa-imdb','http://www.imdb.com/find?ref_=nv_sr_fn&q='),(18,'Imgur','fas fa-arrow-alt-circle-up','https://imgur.com/search?q='),(19,'Just Watch','fas fa-photo-video','https://www.justwatch.com/us/search?q='),(20,'Netflix','fas fa-film','https://www.netflix.com/search?q='),(21,'Overflow','fab fa-stack-overflow','https://open.spotify.com/search/'),(22,'Spotify','fab fa-spotify','https://open.spotify.com/search/'),(23,'Wallhaven','far fa-file-image','https://wallhaven.cc/search?q='),(24,'Wikipedia','fab fa-wikipedia-w','https://en.wikipedia.org/wiki/');
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
INSERT INTO `settings` VALUES (1,'source.rednet.dev','Good Morning','How are ya now?','Good Evening','Why are you up?','Rednet.Dev','Quicksand','<a class=\"weatherwidget-io\" href=\"https://forecast7.com/en/42d34n83d89/dexter/?unit=us\" data-label_1=\"DEXTER\" data-font=\"Fira Sans\" data-icons=\"Climacons Animated\" data-theme=\"dark\" data-basecolor=\"\" >DEXTER</a>\n<script>\n!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\'https://weatherwidget.io/js/widget.min.js\';fjs.parentNode.insertBefore(js,fjs);}}(document,\'script\',\'weatherwidget-io-js\');\n</script>','disabled');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'source'
--

--
-- Dumping routines for database 'source'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-24 11:07:50
