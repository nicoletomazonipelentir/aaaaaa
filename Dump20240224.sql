CREATE DATABASE  IF NOT EXISTS `galeria` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `galeria`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: galeria
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `imagens`
--

DROP TABLE IF EXISTS `imagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imagens` (
  `idimagens` int NOT NULL AUTO_INCREMENT,
  `link` varchar(1000) NOT NULL,
  PRIMARY KEY (`idimagens`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagens`
--

LOCK TABLES `imagens` WRITE;
/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
INSERT INTO `imagens` VALUES (11,'https://renata.com.br/images/receitas/5/renata-imagem-receitas-macarrao-ao-molho-carbonara-share.jpg'),(12,'https://www.google.com/url?sa=i&url=https%3A%2F%2Fanagiovanna.com.br%2Fblog%2Ftecnologia%2Ffotos-para-colocar-no-perfil-do-whatsapp%2F&psig=AOvVaw1qW4gq8F91eBNlTBpbRftb&ust=1708900193090000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCOC2muKDxYQDFQAAAAAdAAAAABAE'),(13,'https://unsplash.com/pt-br/fotografias/uma-mulher-sentada-em-uma-cadeira-com-um-pedaco-de-papel-no-rosto-YB9FpU2a9go'),(14,'https://unsplash.com/pt-br/fotografias/uma-mulher-sentada-em-uma-cadeira-com-um-pedaco-de-papel-no-rosto-YB9FpU2a9go'),(15,'https://unsplash.com/pt-br/fotografias/uma-mulher-sentada-em-uma-cadeira-com-um-pedaco-de-papel-no-rosto-YB9FpU2a9go'),(16,'https://ciclovivo.com.br/wp-content/uploads/2018/10/iStock-536613027-1024x683.jpg'),(17,'https://ciclovivo.com.br/wp-content/uploads/2018/10/iStock-536613027-1024x683.jpg');
/*!40000 ALTER TABLE `imagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'galeria'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-24 20:14:20
