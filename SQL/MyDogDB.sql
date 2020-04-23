-- MySQL dump 10.13  Distrib 5.5.62, for Win32 (AMD64)
--
-- Host: localhost    Database: pdtmozeta_Capstone_1
-- ------------------------------------------------------
-- Server version	5.6.45-log

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
-- Table structure for table `breeds`
--

DROP TABLE IF EXISTS `breeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `breeds` (
  `Bre_id` int(11) DEFAULT NULL,
  `Bre_name` varchar(50) DEFAULT NULL,
  `Bre_code` char(3) DEFAULT NULL,
  `image` text,
  `age` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breeds`
--

LOCK TABLES `breeds` WRITE;
/*!40000 ALTER TABLE `breeds` DISABLE KEYS */;
INSERT INTO `breeds` VALUES (1,'Labrador Retriever','lab','lab.jpg',13,75),(2,'German Shepherd','gmn','gmn.jpg',12,82.5),(3,'Golden Retriever','gld','gld.jpg',13,72.5),(4,'French Bulldog','fbd','fbd.jpg',9,27),(5,'English Bulldog','ebd','ebd.jpg',8,50),(6,'Beagle','bgl','bgl.jpg',13,27.5),(7,'Poodle','pdl','pdl.jpg',12,67.5),(8,'Rottweiler','rtw','rtw.jpg',9,125),(9,'German Shorthaired Pointer','gsp','gsp.jpg',12,67.5),(10,'Yorkshire Terrier','yst','yst.jpg',13,7),(11,'Boxer','bxr','bxr.jpg',11,76.5),(12,'Dachshunds','dcs','dcs.jpg',13,26),(13,'Pembroke Welsh Corgi','pwc','pwc.jpg',13,28),(14,'Siberian Husky','sbh','sbh.jpg',13,56.5),(15,'Australian Shepherd','aus','aus.jpg',9,60),(16,'Great Dane','gtd','gtd.jpg',7,165),(17,'Doberman Pinscher','dbp','dbp.jpg',11,92.5),(18,'Cavalier King Charles Spaniel','ckc','ckc.jpg',12,16.5),(19,'Miniature Schnauzer','mts','mts.jpg',13,16.5),(20,'Shih Tzu','sht','sht.jpg',14,14),(21,'Boston Terrier','btr','btr.jpg',11,20),(22,'Bernese Mountain Dog','bmd','bmd.jpg',8,107.5),(23,'Pomeranian','pmr','pmr.jpg',10,6),(24,'Havanese','hvn','hvn.jpg',11,11.5),(25,'Shetland Sheepdog','ssd','ssd.jpg',13,22),(26,'Brittany','brt','brt.jpg',13,37.5),(27,'English Springer Spaniel','ess','ess.jpg',12,50),(28,'Pug','pug','pug.jpg',11,17.5),(29,'Mastiff','msf','msf.jpg',7,215),(30,'Cocker Spaniel','cks','cks.jpg',12,55);
/*!40000 ALTER TABLE `breeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connect_bd`
--

DROP TABLE IF EXISTS `connect_bd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `connect_bd` (
  `Bre_id` int(11) DEFAULT NULL,
  `Dis_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connect_bd`
--

LOCK TABLES `connect_bd` WRITE;
/*!40000 ALTER TABLE `connect_bd` DISABLE KEYS */;
/*!40000 ALTER TABLE `connect_bd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connect_bp`
--

DROP TABLE IF EXISTS `connect_bp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `connect_bp` (
  `Bre_id` int(11) DEFAULT NULL,
  `Prob_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connect_bp`
--

LOCK TABLES `connect_bp` WRITE;
/*!40000 ALTER TABLE `connect_bp` DISABLE KEYS */;
/*!40000 ALTER TABLE `connect_bp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connect_dp`
--

DROP TABLE IF EXISTS `connect_dp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `connect_dp` (
  `Dis_id` int(11) DEFAULT NULL,
  `Prob_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connect_dp`
--

LOCK TABLES `connect_dp` WRITE;
/*!40000 ALTER TABLE `connect_dp` DISABLE KEYS */;
/*!40000 ALTER TABLE `connect_dp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connect_ds`
--

DROP TABLE IF EXISTS `connect_ds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `connect_ds` (
  `Dis_id` int(11) DEFAULT NULL,
  `Sym_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connect_ds`
--

LOCK TABLES `connect_ds` WRITE;
/*!40000 ALTER TABLE `connect_ds` DISABLE KEYS */;
/*!40000 ALTER TABLE `connect_ds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connect_sp`
--

DROP TABLE IF EXISTS `connect_sp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `connect_sp` (
  `Sym_id` int(11) DEFAULT NULL,
  `Prob_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connect_sp`
--

LOCK TABLES `connect_sp` WRITE;
/*!40000 ALTER TABLE `connect_sp` DISABLE KEYS */;
/*!40000 ALTER TABLE `connect_sp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diseases`
--

DROP TABLE IF EXISTS `diseases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diseases` (
  `Dis_id` int(11) DEFAULT NULL,
  `Dis_name` varchar(50) DEFAULT NULL,
  `Dis_code` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diseases`
--

LOCK TABLES `diseases` WRITE;
/*!40000 ALTER TABLE `diseases` DISABLE KEYS */;
INSERT INTO `diseases` VALUES (1,'Rabies','RBS'),(2,'Canine Parvovirus','CPV'),(3,'Canine Coronavirus','CCV'),(4,'Canine Distemper','CDT'),(5,'Influeza','IFZ'),(6,'depatitis','DPT'),(7,'herpervirus','HEP'),(8,'pseudorabies','PDA'),(9,'minute virus','MTV'),(10,'kennel cough','KNC'),(11,'rocky mountain','RMN'),(12,'lyme disease','LDS'),(13,'clostridium','CLS'),(14,'blastomcosis','BLS'),(15,'histoplasmosis','HLS'),(16,'ringworm','RWM'),(17,'aspergillosis','ASP'),(18,'pythosis','PYT'),(19,'mucormycosis','MUC'),(20,'babesiosis','BAB'),(21,'neosporosis','NEO'),(22,'protothecosis','PRO'),(23,'trichinosis','TRH'),(24,'heartworm','HTM'),(25,'tape worm','TWM'),(26,'hook worm','HWM'),(27,'whip worm','WWM'),(28,'toxocariasis','TXC'),(29,'fleas','FLE'),(30,'ticks','TIK');
/*!40000 ALTER TABLE `diseases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problems`
--

DROP TABLE IF EXISTS `problems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problems` (
  `Prob_id` int(11) DEFAULT NULL,
  `Prob_name` varchar(50) DEFAULT NULL,
  `Prob_code` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problems`
--

LOCK TABLES `problems` WRITE;
/*!40000 ALTER TABLE `problems` DISABLE KEYS */;
INSERT INTO `problems` VALUES (1,'Limp','LMP'),(2,'fell','FLL'),(3,'tripped','TPP'),(4,'lost','LST'),(5,'anxious','ANX'),(6,'potty training','PTT'),(7,'vomiting','VMT'),(8,'toot fell out','TFO'),(9,'obesity','OBS'),(10,'weight loss','WEL'),(11,'poor appearance','PPP'),(12,'smelly','SML'),(13,'dry coat','DCT'),(14,'parasites','PAE'),(15,'walking','WKS'),(16,'car rides','CIS'),(17,'too excited','TXC'),(18,'barking','BKI'),(19,'eye problems','EPL'),(20,'paw pain','PPN'),(21,'leg pain','LPN'),(22,'frequent urination','FUN'),(23,'loud noises','DNO'),(24,'fireworks','FWK'),(25,'thunderstorms','TSK'),(26,'leash issues','SIS'),(27,'doesn?t like people','DLP'),(28,'training','TNN'),(29,'training locations','TNL'),(30,'training ideas','TNI');
/*!40000 ALTER TABLE `problems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `symptoms`
--

DROP TABLE IF EXISTS `symptoms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `symptoms` (
  `Sym_id` int(11) DEFAULT NULL,
  `Sym_name` varchar(50) DEFAULT NULL,
  `Sym_code` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `symptoms`
--

LOCK TABLES `symptoms` WRITE;
/*!40000 ALTER TABLE `symptoms` DISABLE KEYS */;
INSERT INTO `symptoms` VALUES (1,'Abdomen Pain','adp'),(2,'Abodomen Swollen','ABW'),(3,'Bad Breath','BBH'),(4,'Bleeding From Ear','BFE'),(5,'Bleeding From Nose','BFN'),(4,'Bleeding From Ear','BFE'),(5,'Bleeding From Nose','BFN'),(6,'Bleeding From Paw','BFP'),(7,'Chewing or licking at Skin','CLS'),(15,'Face Swollen','FCS'),(8,'Choking','CKI'),(9,' Circling','CLL'),(10,'Dandruff','DDF'),(11,'Deafness','DFN'),(12,'Defecation','DFC'),(13,'Ear Discharge','EDG'),(14,'Ear Odor','EOR'),(16,'Falling Down','FDN'),(17,'Gagging','GGG'),(18,'Gas','GAS'),(19,'Hair Loss','HRL'),(20,'Head Tilt','HDT'),(21,'Heart Rate','HAR'),(22,'Leg Swollen','LGS'),(23,'Lethargy','LTG'),(24,'Licking Skin','LKS'),(25,'Chewing Skin','CWS'),(26,'Lumps','LUP'),(27,'Losing Balance','LSB'),(28,'Panting','PNT'),(29,'Pregnancy','PGN'),(30,'Poisoning','POI'),(31,'Regurgitation','RGG'),(32,'Scooting','SCT');
/*!40000 ALTER TABLE `symptoms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table 10`
--

DROP TABLE IF EXISTS `table 10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table 10` (
  `COL 1` int(2) DEFAULT NULL,
  `COL 2` varchar(14) DEFAULT NULL,
  `COL 3` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table 10`
--

LOCK TABLES `table 10` WRITE;
/*!40000 ALTER TABLE `table 10` DISABLE KEYS */;
INSERT INTO `table 10` VALUES (15,'Face Swollen','FCS'),(16,'Falling Down','FDN'),(17,'Gagging','GGG'),(18,'Gas','GAS'),(19,'Hair Loss','HRL'),(20,'Head Tilt','HDT'),(21,'Heart Rate','HAR'),(22,'Leg Swollen','LGS'),(23,'Lethargy','LTG'),(24,'Licking Skin','LKS'),(25,'Chewing Skin','CWS'),(26,'Lumps','LUP'),(27,'Losing Balance','LSB'),(28,'Panting','PNT'),(29,'Pregnancy','PGN'),(30,'Poisoning','POI'),(31,'Regurgitation','RGG'),(32,'Scooting','SCT');
/*!40000 ALTER TABLE `table 10` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'pdtmozeta_Capstone_1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-20 11:54:01
