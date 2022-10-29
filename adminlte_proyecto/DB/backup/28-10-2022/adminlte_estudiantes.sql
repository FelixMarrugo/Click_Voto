-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: adminlte
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiantes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cursos_id` bigint unsigned NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `estudiantes_cursos_id_foreign` (`cursos_id`),
  CONSTRAINT `estudiantes_cursos_id_foreign` FOREIGN KEY (`cursos_id`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,'12345','Yerson Joel','Garcia Merlano',25,'on','2022-10-20 00:34:22','2022-10-20 00:34:22'),(2,'654','Felix Manuel','Marrugo Paternina',24,'on','2022-10-20 00:34:36','2022-10-20 00:34:36'),(3,'65421','Jose David','Vicente Marrugo',23,'on','2022-10-20 00:34:57','2022-10-20 00:34:57'),(4,'9754','Javier Eduardo','Perez Diaz',22,'on','2022-10-20 00:35:12','2022-10-20 00:35:12'),(5,'852741','Daniela Alejandra','Espinosa Torres',21,'on','2022-10-20 00:35:58','2022-10-20 00:35:58'),(6,'98755','Yesenia','Pedilla Pedilla',21,'on','2022-10-20 00:43:40','2022-10-20 00:43:40'),(7,'852369','Elians Enrique','Rocha Muñoz',20,'on','2022-10-20 00:44:14','2022-10-20 00:44:14'),(8,'8521477','Juan','Ayala',1,'on','2022-10-21 12:20:58','2022-10-21 12:20:58'),(9,'989656','Juan Jose','Nieto Alarcon',4,'on','2022-10-21 12:21:18','2022-10-21 12:21:18'),(10,'98755','Antonio','Bermudez',6,'on','2022-10-21 12:21:43','2022-10-21 12:21:43'),(11,'9875555','Carlos','Cuesta Montiel',5,'on','2022-10-21 12:22:02','2022-10-21 12:22:02'),(12,'963852741','Graciela','Paternina Polo',25,'on','2022-10-21 13:04:26','2022-10-21 13:04:26'),(13,'85478547','Martha','Marrugo Meza',17,'on','2022-10-21 13:05:03','2022-10-21 13:05:03'),(14,'1232211111','Angie','Espinosa Torres',18,'on','2022-10-21 13:06:47','2022-10-21 13:06:47'),(15,'105145168023','Juan David','Paternina Sierra',2,'on','2022-10-21 13:16:53','2022-10-21 13:16:53'),(16,'122211122','Gabriela','Arango',15,'on','2022-10-23 10:39:25','2022-10-23 10:39:25'),(17,'785455555','Camilo','Echeveria',12,'on','2022-10-23 10:43:27','2022-10-23 10:43:27'),(18,'9632456','Juana','Torres Arnedo',19,'on','2022-10-23 11:08:02','2022-10-23 11:08:02'),(19,'114525252','Abigail','Diaz Espinosa',25,'on','2022-10-23 11:24:28','2022-10-23 11:24:28'),(20,'987514141','Emanuel','Diaz Espinosa',14,'on','2022-10-23 11:30:37','2022-10-23 11:30:37'),(21,'89898989','Sara Esther','Zuñiga Rosado',18,'on','2022-10-23 11:33:05','2022-10-23 11:33:05'),(22,'8585858','Sofia','Arnedo Cantillo',17,'on','2022-10-23 11:45:09','2022-10-23 11:45:09'),(23,'852963741','Manuel Francisco','Espinosa Meza',18,'on','2022-10-23 11:46:12','2022-10-23 11:46:12'),(24,'78787899966','Gabriel','Piña',18,'on','2022-10-23 11:47:53','2022-10-23 11:47:53'),(25,'78885544411','Matias','Fantochesco',23,'on','2022-10-23 11:49:46','2022-10-23 11:49:46'),(26,'47455221100','Gonzalo','Alarcon',23,'on','2022-10-23 11:51:17','2022-10-23 11:51:17'),(27,'7885569302010','Vivian','Gonzales',10,'on','2022-10-23 11:51:54','2022-10-23 11:51:54'),(28,'1236520120','Enis','Polo',15,'on','2022-10-23 11:53:46','2022-10-23 11:53:46'),(29,'98665633','Katherine','Jimenez Paternina',3,'on','2022-10-23 11:55:11','2022-10-23 11:55:11'),(30,'969696','Santiago','Leal Marrugo',1,'on','2022-10-23 11:57:49','2022-10-23 11:57:49'),(31,'99963320','Ricardo','Paternina Polo',25,'on','2022-10-23 12:03:44','2022-10-23 12:03:44'),(32,'7888555','Ricardo','Paternina Sierra',24,'on','2022-10-23 12:04:53','2022-10-23 12:04:53');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-28 21:48:35
