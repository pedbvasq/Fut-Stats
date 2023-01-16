-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: footballstats
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams` (
  `idteams` int NOT NULL,
  `nameteam` varchar(45) NOT NULL,
  `ab` varchar(45) NOT NULL,
  `budget` int NOT NULL,
  `idleague` int NOT NULL,
  `points` int NOT NULL,
  `titles` int NOT NULL,
  PRIMARY KEY (`idteams`),
  KEY `fk_liga_idx` (`idleague`),
  CONSTRAINT `fk_liga` FOREIGN KEY (`idleague`) REFERENCES `league` (`idleague`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (0,'Manchester City','MC',10000,0,93,8),(10,'Liverpool','LIV',15000,0,92,20),(11,'Real Madrid','RM',1554780,1,86,35),(12,'FC Barcelona','FCB',15854780,1,73,26),(13,'Atletico de Madrid','ATM',158780,1,71,11),(14,'Sevilla','SVL',158880,1,70,1),(15,'Betis','RB',15880,1,65,1),(16,'Real Sociedad','RS',1580,1,62,2),(17,'Villareal','VR',15380,1,59,0),(18,'valencia','VC',15380,1,48,6),(19,'Osasuna','OS',15380,1,47,0),(20,'Chelsea','CHE',15600,0,74,6),(30,'Tottenham','TOT',15450,0,71,2),(40,'Arsenal','ARS',154450,0,69,13),(50,'Manchester United','MU',1564450,0,58,20),(60,'West Ham','WH',15640,0,56,0),(70,'Leicester City','LC',156840,0,59,1),(80,'Brighton','BC',1540,0,51,0),(90,'Wolves','WB',15540,0,51,3);
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-10 12:05:44
