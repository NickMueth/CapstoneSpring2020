-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: capstone
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
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
 SET character_set_client = utf8mb4 ;
CREATE TABLE `breeds` (
  `Bre_id` int(11) DEFAULT NULL,
  `Bre_name` varchar(50) DEFAULT NULL,
  `Bre_code` char(3) DEFAULT NULL,
  `image` text,
  `age` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breeds`
--

LOCK TABLES `breeds` WRITE;
/*!40000 ALTER TABLE `breeds` DISABLE KEYS */;
INSERT INTO `breeds` VALUES (19,'Labrador Retriever','lab','/img/breeds/lab.jpg',13,75,'null'),(14,'German Shepherd','gmn','/img/breeds/gmn.jpg',12,82.5,'null'),(16,'Golden Retriever','gld','/img/breeds/gld.jpg',13,72.5,'null'),(13,'French Bulldog','fbd','/img/breeds/fbd.jpg',9,27,'null'),(11,'English Bulldog','ebd','/img/breeds/ebd.jpg',8,50,'null'),(2,'Beagle','bgl','/img/breeds/bgl.jpg',13,27.5,'There are two Beagle varieties: those standing under 13 inches at the shoulder, and those between 13 and 15 inches. Both varieties are sturdy, solid, and “big for their inches,” as dog folks say. They come in such pleasing colors as lemon, red and white, and tricolor. The Beagle’s fortune is in his adorable face, with its big brown or hazel eyes set off by long, houndy ears set low on a broad head.\nA breed described as “merry” by its fanciers, Beagles are loving and lovable, happy, and companionable—all qualities that make them excellent family dogs. No wonder that for years the Beagle has been the most popular hound dog among American pet owners. These are curious, clever, and energetic hounds who require plenty of playtime.\nResponsible breeders will screen their breeding stock for health conditions such as hip dysplasia, hypothyroidism, epilepsy, luxating patella (a dislocated kneecap), and eye disorders. As with all breeds, a Beagle’s ears should be checked weekly, and the teeth should be brushed regularly.'),(24,'Poodle (Standard)','pdl','/img/breeds/pdl.jpg',12,67.5,'null'),(26,'Rottweiler','rtw','/img/breeds/rtw.jpg',9,125,'null'),(15,'German Shorthaired Pointer','gsp','/img/breeds/gsp.jpg',12,67.5,'null'),(30,'Yorkshire Terrier','yst','/img/breeds/yst.jpg',13,7,'null'),(5,'Boxer','bxr','/img/breeds/bxr.jpg',11,76.5,'null'),(9,'Dachshund','dcs','/img/breeds/dcs.jpg',13,26,'null'),(22,'Pembroke Welsh Corgi','pwc','/img/breeds/pwc.jpg',13,28,'null'),(28,'Siberian Husky','sbh','/img/breeds/sbh.jpg',13,56.5,'null'),(1,'Australian Shepherd','aus','/img/breeds/aus.jpg',9,60,'The Australian Shepherd, the cowboy’s herding dog of choice, is a medium-sized worker with a keen, penetrating gaze in the eye. Aussie coats offer different looks, including merle (a mottled pattern with contrasting shades of blue or red). In all ways, they’re the picture of rugged and agile movers of stock. Aussies exhibit an irresistible impulse to herd, anything: birds, dogs, kids. This strong work drive can make Aussies too much dog for a sedentary pet owner. Aussies are remarkably intelligent, quite capable of hoodwinking an unsuspecting novice owner. In short, this isn’t the pet for everyone. But if you’re looking for a brainy, tireless, and trainable partner for work or sport, your search might end here.\nAussies are generally healthy dogs, and a responsible breeder will test breeding stock for health concerns such as hip dysplasia, epilepsy, cataracts and certain forms of cancer.  An Aussie’s ears should be checked regularly to remove foreign matter and avoid a buildup of wax, and his teeth should be brushed regularly.'),(17,'Great Dane','gtd','/img/breeds/gtd.jpg',7,165,'null'),(10,'Doberman Pinscher','dbp','/img/breeds/dbp.jpg',11,92.5,'null'),(7,'Cavalier King Charles Spaniel','ckc','/img/breeds/ckc.jpg',12,16.5,'null'),(21,'Miniature Schnauzer','mts','/img/breeds/mts.jpg',13,16.5,'null'),(29,'Shih Tzu','sht','/img/breeds/sht.jpg',14,14,'null'),(4,'Boston Terrier','btr','/img/breeds/btr.jpg',11,20,'null'),(3,'Bernese Mountain Dog','bmd','/img/breeds/bmd.jpg',8,107.5,'null'),(23,'Pomeranian','pmr','/img/breeds/pmr.jpg',10,6,'null'),(18,'Havanese','hvn','/img/breeds/hvn.jpg',11,11.5,'null'),(27,'Shetland Sheepdog','ssd','/img/breeds/ssd.jpg',13,22,'null'),(6,'Brittany','brt','/img/breeds/brt.jpg',13,37.5,'null'),(12,'English Springer Spaniel','ess','/img/breeds/ess.jpg',12,50,'null'),(25,'Pug','pug','/img/breeds/pug.jpg',11,17.5,'null'),(20,'Mastiff','msf','/img/breeds/msf.jpg',7,215,'null'),(8,'Cocker Spaniel','cks','/img/breeds/cks.jpg',12,55,'null');
/*!40000 ALTER TABLE `breeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connect_bd`
--

DROP TABLE IF EXISTS `connect_bd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `connect_bd` (
  `Dis_id` int(11) NOT NULL,
  `Bre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connect_bd`
--

LOCK TABLES `connect_bd` WRITE;
/*!40000 ALTER TABLE `connect_bd` DISABLE KEYS */;
INSERT INTO `connect_bd` VALUES (1,9),(1,16),(1,14),(1,19),(1,26),(6,26),(6,19),(6,14),(6,28),(6,12),(6,10),(10,19),(10,8),(10,10),(10,24),(10,12),(12,6),(14,24),(14,16),(14,8),(14,21),(14,17),(14,9),(14,10),(15,25),(15,20),(15,29),(15,4),(15,13),(15,11),(15,5),(16,20),(17,3),(20,5),(21,19),(21,14),(21,16),(24,14),(29,18),(29,23),(29,30),(29,29),(30,24),(31,24),(31,9),(31,2),(31,14),(31,4),(32,27),(32,15),(32,3),(32,9),(32,10),(32,14),(32,16),(32,22),(32,24);
/*!40000 ALTER TABLE `connect_bd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connect_bp`
--

DROP TABLE IF EXISTS `connect_bp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
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
 SET character_set_client = utf8mb4 ;
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
 SET character_set_client = utf8mb4 ;
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
INSERT INTO `connect_ds` VALUES (1,89),(1,70),(1,10),(1,63),(1,27),(1,94),(2,62),(2,63),(2,71),(2,43),(2,91),(2,59),(2,101),(2,31),(3,43),(3,63),(3,101),(3,26),(3,55),(3,23),(3,15),(3,102),(3,86),(4,97),(4,22),(4,63),(4,19),(4,43),(4,18),(5,43),(5,55),(5,26),(5,27),(5,62),(5,63),(5,15),(5,97),(5,22),(5,82),(5,73),(5,1),(5,53),(6,12),(6,22),(6,62),(6,63),(6,52),(6,43),(6,97),(6,83),(6,18),(7,22),(7,12),(7,88),(7,98),(7,96),(7,46),(7,97),(7,33),(7,47),(8,81),(8,50),(8,85),(8,84),(9,15),(9,62),(9,63),(9,101),(9,91),(9,23),(9,28),(10,62),(10,63),(10,101),(10,97),(10,41),(10,28),(10,82),(10,45),(11,62),(11,63),(11,55),(11,22),(11,86),(12,15),(12,23),(12,62),(12,93),(12,28),(12,43),(12,91),(13,75),(13,63),(13,72),(13,15),(13,22),(13,96),(13,17),(14,50),(14,8),(14,44),(14,100),(14,63),(14,66),(14,62),(14,87),(14,38),(14,57),(14,82),(15,15),(15,89),(15,27),(15,26),(15,43),(15,62),(15,23),(16,36),(16,15),(16,76),(16,27),(16,43),(16,62),(17,62),(17,95),(17,32),(17,69),(17,63),(17,101),(17,41),(17,45),(17,22),(17,97),(17,43),(17,90),(17,23),(18,97),(18,21),(18,74),(18,59),(18,23),(18,86),(19,90),(19,73),(19,82),(19,6),(19,11),(19,24),(19,99),(19,20),(20,12),(20,17),(20,22),(20,101),(20,97),(20,96),(20,55),(20,68),(20,11),(20,42),(20,64),(20,62),(20,49),(20,82),(20,73),(20,21),(20,86),(20,93),(20,85),(21,43),(21,97),(21,22),(21,101),(21,91),(21,33),(21,93),(22,43),(22,82),(22,73),(22,51),(22,35),(22,24),(22,60),(22,2),(22,58),(22,40),(22,48),(23,50),(23,37),(23,14),(23,77),(23,78),(23,79),(23,85),(24,19),(24,62),(24,63),(24,13),(24,4),(24,30),(24,60),(24,12),(24,10),(24,92),(24,93),(24,68),(24,55),(25,34),(25,80),(25,7),(26,62),(26,97),(26,91),(26,63),(26,15),(27,97),(27,22),(27,56),(27,90),(28,101),(28,22),(28,12),(28,3),(29,62),(29,61),(29,103),(29,104),(29,105),(30,5),(30,65),(30,37),(30,14),(30,81),(30,54),(30,86),(30,79),(31,41),(31,66),(31,99),(31,86),(31,50),(31,67),(31,62),(32,9),(32,10),(32,39),(13,3);
/*!40000 ALTER TABLE `connect_ds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connect_sp`
--

DROP TABLE IF EXISTS `connect_sp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
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
 SET character_set_client = utf8mb4 ;
CREATE TABLE `diseases` (
  `Dis_id` int(11) NOT NULL,
  `Dis_name` varchar(128) NOT NULL,
  `Dis_common` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`Dis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diseases`
--

LOCK TABLES `diseases` WRITE;
/*!40000 ALTER TABLE `diseases` DISABLE KEYS */;
INSERT INTO `diseases` VALUES (1,'Aspergillosis',''),(2,'Babesiosis',''),(3,'Blastomcosis',''),(4,'Canine Coronavirus','Coronavirus'),(5,'Canine Distemper','Distemper'),(6,'Canine Parvovirus','Parvo'),(7,'Clostridium',''),(8,'Fleas',''),(9,'Difofilaria Immitis','Heartworm'),(10,'Canine Hepatitis','Hepatitis'),(11,'Canine Herpesvirus','Herpes'),(12,'Histoplasmosis',''),(13,'Canine Ancylostoma','Hookworm'),(14,'Hypothyroidism',''),(15,'Canine Influenza','Dog Flu'),(16,'Canine Infectious Tracheobronchitis','Kennel Cough'),(17,'Lyme Disease',''),(18,'Mucormycosis',''),(19,'Neosporosis',''),(20,'Protothecosis',''),(21,'Pythiosis',''),(22,'Lyssavirus','Rabies'),(23,'Dermatophytosis','Ringworm'),(24,'Rocky Mountain Spotted Fever',''),(25,'Taeniasis','Tapeworm'),(26,'Toxocariasis','Roundworm'),(27,'Trichinosis','Pork Roundworm'),(28,'Trichuris Vulpis','Whipworm'),(29,'Legg-Calve-Perthes Disease',''),(30,'Sebaceous Adenitis',''),(31,'Hyperadrenocorticism','Cushing\'s Disease'),(32,'Von Willebrand\'s Disease','');
/*!40000 ALTER TABLE `diseases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problems`
--

DROP TABLE IF EXISTS `problems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
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
 SET character_set_client = utf8mb4 ;
CREATE TABLE `symptoms` (
  `Sym_id` int(11) NOT NULL,
  `Sym_name` varchar(128) NOT NULL,
  `Sym_area` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`Sym_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `symptoms`
--

LOCK TABLES `symptoms` WRITE;
/*!40000 ALTER TABLE `symptoms` DISABLE KEYS */;
INSERT INTO `symptoms` VALUES (1,'abnormal enlargement of pads','feet'),(2,'aggression','neuro'),(3,'anemia','blood'),(4,'arrhythmia','heart'),(5,'bad odor','general'),(6,'behavioral changes','neuro'),(7,'biting or scratching anus','genitals'),(8,'black patches on skin','skin'),(9,'bleeding from genitals','genitals'),(10,'bleeding from nose','nose'),(11,'blindness','eyes'),(12,'blood in stool','waste'),(13,'blood in urine','waste'),(14,'brittle hair','hair'),(15,'coughing','lungs'),(16,'dark colored urine','waste'),(17,'dark/tarry stool','waste'),(18,'dehydration','mouth'),(19,'depression','neuro'),(20,'dermatitis','skin'),(21,'development of nodules','general'),(22,'diarrhea','waste'),(23,'difficulty breathing','lungs'),(24,'difficulty swallowing','mouth'),(25,'discharge from ears','ear'),(26,'discharge from eyes','eyes'),(27,'discharge from nose','nose'),(28,'discoloration of gums','mouth'),(29,'discoloration of hair','hair'),(30,'discoloration of skin','skin'),(31,'discoloration of stool','waste'),(32,'discomfort in joints','joints'),(33,'discomfort of abdomen','abdomen'),(34,'dried white particles in feces or on fur','waste'),(35,'dropped jaw','mouth'),(36,'dry cough','lungs'),(37,'dry hair','hair'),(38,'ear infections','ear'),(39,'excessive or uncontrollable bleeding','blood'),(40,'excessive salivation','mouth'),(41,'excessive urination and thirst','waste'),(42,'extreme head tilt','neuro'),(43,'fever','general'),(44,'flaky skin','skin'),(45,'fluid build-up in abdomen','abdomen'),(46,'frequent defecation','waste'),(47,'frequent flatulence','waste'),(48,'frothy saliva','mouth'),(49,'gait problems','muscles'),(50,'hair loss','hair'),(51,'hydrophobia','mouth'),(52,'hypothermia','general'),(53,'hysteria','neuro'),(54,'infections along hair follicles','hair'),(55,'inflammation of eyes','eyes'),(56,'inflammation of muscles','muscles'),(57,'intolerance to cold','general'),(58,'irritability','neuro'),(59,'jaundice','skin'),(60,'lack of coordination','neuro'),(61,'lameness','general'),(62,'lethargy','muscles'),(63,'loss of appetite','mouth'),(64,'loss of muscle control','muscles'),(65,'matted hair','hair'),(66,'muscle loss','muscles'),(67,'obesity','weight'),(68,'pain around eyes','eyes'),(69,'pain around joints','joints'),(70,'pain around nose','nose'),(71,'pale gums','mouth'),(72,'pale skin','skin'),(73,'paralysis','neuro'),(74,'pneumonia','lungs'),(75,'poor body condition','general'),(76,'retching','mouth'),(77,'rough claws','feet'),(78,'scabby skin','skin'),(79,'scaling of skin','skin'),(80,'scooting','genitals'),(81,'scratching','skin'),(82,'seizures','neuro'),(83,'severe weight loss','weight'),(84,'skin infections','skin'),(85,'skin irritation','skin'),(86,'skin lesions','skin'),(87,'slowed heart rate','heart'),(88,'small stool','waste'),(89,'sneezing','nose'),(90,'stiffness','joints'),(91,'swelling of abdomen','abdomen'),(92,'swelling of limbs','limbs'),(93,'swelling of lymph nodes','general'),(94,'swelling of nose','nose'),(95,'swollen joints','limbs'),(96,'trouble defecating','waste'),(97,'vomiting','mouth'),(98,'watery stool','waste'),(99,'weakness','muscles'),(100,'weight gain','weight'),(101,'weight loss','weight'),(102,'wheezing','lungs'),(103,'pain around hips','abdomen'),(104,'loss of hip muscle mass','abdomen'),(105,'limping','general');
/*!40000 ALTER TABLE `symptoms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-15 14:52:05
