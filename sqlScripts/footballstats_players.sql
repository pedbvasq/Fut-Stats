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
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `players` (
  `idplayers` int NOT NULL,
  `firts_name` varchar(45) DEFAULT 'NO REGISTRADOS',
  `last_name` varchar(45) DEFAULT 'NO REGISTRADOS',
  `position` varchar(45) DEFAULT 'NO REGISTRADOS',
  `salary` float DEFAULT '0',
  `goals` int DEFAULT '0',
  `assists` int DEFAULT '0',
  `matches` int DEFAULT '0',
  `date_birth` date DEFAULT NULL,
  `idteam` int NOT NULL,
  PRIMARY KEY (`idplayers`),
  KEY `fk_team_idx` (`idteam`),
  CONSTRAINT `fk_team` FOREIGN KEY (`idteam`) REFERENCES `teams` (`idteams`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (0,'Pedri','Gonzales','MC',4567,8,8,25,'2000-07-03',12),(1,'Frankie','De Jong','MC',45645,7,12,33,'1995-04-04',12),(2,'Marc','Ter Stegen','PO',5463,0,0,38,'1989-09-06',12),(3,'Sergio','Busquet','MC',57348,3,2,32,'1985-09-06',12),(4,'Kevin','De Bruyne','MC',1034,10,15,35,'1989-06-15',0),(5,'Bernardo','Silva','MC',10534,9,15,38,'1989-04-15',0),(6,'Phill','Foden','MC',4657,3,3,20,'2000-01-03',0),(7,'Joao','Cancelo','LI',6583,4,4,34,'1990-03-03',0);
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
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
