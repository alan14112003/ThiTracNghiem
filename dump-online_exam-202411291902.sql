-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: online_exam
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `answers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `quiz_attempt_id` bigint unsigned NOT NULL,
  `question_id` bigint unsigned NOT NULL,
  `option_id` bigint unsigned DEFAULT NULL,
  `user_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_quiz_attempt_id_foreign` (`quiz_attempt_id`),
  KEY `answers_question_id_foreign` (`question_id`),
  KEY `answers_option_id_foreign` (`option_id`),
  CONSTRAINT `answers_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `answers_quiz_attempt_id_foreign` FOREIGN KEY (`quiz_attempt_id`) REFERENCES `quiz_attempts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (140,53,58,220,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(141,53,59,224,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(142,53,60,229,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(143,53,61,231,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(144,53,62,237,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(145,53,63,239,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(146,53,64,246,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(147,53,65,248,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(148,53,66,251,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(149,53,67,257,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(150,53,68,259,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(151,53,69,265,NULL,'2024-11-29 11:47:46','2024-11-29 11:47:46'),(152,54,58,219,NULL,'2024-11-29 11:51:43','2024-11-29 11:51:43'),(153,54,59,223,NULL,'2024-11-29 11:51:43','2024-11-29 11:51:43'),(154,54,60,228,NULL,'2024-11-29 11:51:43','2024-11-29 11:51:43'),(155,54,61,232,NULL,'2024-11-29 11:51:43','2024-11-29 11:51:43'),(156,54,62,237,NULL,'2024-11-29 11:51:43','2024-11-29 11:51:43'),(157,54,63,240,NULL,'2024-11-29 11:51:43','2024-11-29 11:51:43'),(158,54,64,245,NULL,'2024-11-29 11:51:43','2024-11-29 11:51:43'),(159,54,65,247,NULL,'2024-11-29 11:51:43','2024-11-29 11:51:43'),(160,54,66,253,NULL,'2024-11-29 11:51:44','2024-11-29 11:51:44'),(161,54,67,255,NULL,'2024-11-29 11:51:44','2024-11-29 11:51:44'),(162,54,68,261,NULL,'2024-11-29 11:51:44','2024-11-29 11:51:44'),(163,54,69,264,NULL,'2024-11-29 11:51:44','2024-11-29 11:51:44'),(164,55,70,268,NULL,'2024-11-29 11:53:17','2024-11-29 11:53:17'),(165,55,71,NULL,'3','2024-11-29 11:53:17','2024-11-29 11:53:17');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('356a192b7913b04c54574d18c28d46e6395428ab','i:1;',1728445557),('356a192b7913b04c54574d18c28d46e6395428ab:timer','i:1728445557;',1728445557),('spatie.permission.cache','a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:114:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"view_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:15:\"view_any_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:13:\"create_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:13:\"update_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:14:\"restore_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:18:\"restore_any_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:16:\"replicate_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:14:\"reorder_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:13:\"delete_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:17:\"delete_any_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:19:\"force_delete_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:23:\"force_delete_any_answer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:15:\"view_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:19:\"view_any_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:17:\"create_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:17:\"update_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:18:\"restore_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:22:\"restore_any_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:20:\"replicate_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:18:\"reorder_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:17:\"delete_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:21:\"delete_any_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:23:\"force_delete_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:27:\"force_delete_any_exam::room\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:11:\"view_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:15:\"view_any_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:13:\"create_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:13:\"update_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:14:\"restore_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:18:\"restore_any_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:16:\"replicate_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:14:\"reorder_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:13:\"delete_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:17:\"delete_any_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:19:\"force_delete_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:23:\"force_delete_any_option\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:13:\"view_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:17:\"view_any_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:15:\"create_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:15:\"update_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:16:\"restore_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:20:\"restore_any_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:18:\"replicate_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:16:\"reorder_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:15:\"delete_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:19:\"delete_any_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:21:\"force_delete_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:25:\"force_delete_any_question\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:9:\"view_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:13:\"view_any_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:11:\"create_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:11:\"update_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:12:\"restore_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:16:\"restore_any_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:14:\"replicate_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:12:\"reorder_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:11:\"delete_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:15:\"delete_any_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:17:\"force_delete_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:21:\"force_delete_any_quiz\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:18:\"view_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:22:\"view_any_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:20:\"create_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:20:\"update_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:21:\"restore_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:25:\"restore_any_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:23:\"replicate_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:21:\"reorder_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:20:\"delete_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:24:\"delete_any_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:26:\"force_delete_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:30:\"force_delete_any_quiz::attempt\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:11:\"view_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:15:\"view_any_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:13:\"create_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:13:\"update_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:14:\"restore_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:18:\"restore_any_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:16:\"replicate_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:14:\"reorder_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:13:\"delete_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:17:\"delete_any_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:19:\"force_delete_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:23:\"force_delete_any_result\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:9:\"view_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:13:\"view_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:11:\"create_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:11:\"update_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:11:\"delete_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:15:\"delete_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:22:\"view_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:26:\"view_any_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:92;a:4:{s:1:\"a\";i:93;s:1:\"b\";s:24:\"create_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:93;a:4:{s:1:\"a\";i:94;s:1:\"b\";s:24:\"update_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:94;a:4:{s:1:\"a\";i:95;s:1:\"b\";s:25:\"restore_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:95;a:4:{s:1:\"a\";i:96;s:1:\"b\";s:29:\"restore_any_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:96;a:4:{s:1:\"a\";i:97;s:1:\"b\";s:27:\"replicate_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:97;a:4:{s:1:\"a\";i:98;s:1:\"b\";s:25:\"reorder_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:98;a:4:{s:1:\"a\";i:99;s:1:\"b\";s:24:\"delete_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:99;a:4:{s:1:\"a\";i:100;s:1:\"b\";s:28:\"delete_any_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:100;a:4:{s:1:\"a\";i:101;s:1:\"b\";s:30:\"force_delete_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:101;a:4:{s:1:\"a\";i:102;s:1:\"b\";s:34:\"force_delete_any_room::participant\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:102;a:4:{s:1:\"a\";i:103;s:1:\"b\";s:9:\"view_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:103;a:4:{s:1:\"a\";i:104;s:1:\"b\";s:13:\"view_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:104;a:4:{s:1:\"a\";i:105;s:1:\"b\";s:11:\"create_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:105;a:4:{s:1:\"a\";i:106;s:1:\"b\";s:11:\"update_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:106;a:4:{s:1:\"a\";i:107;s:1:\"b\";s:12:\"restore_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:107;a:4:{s:1:\"a\";i:108;s:1:\"b\";s:16:\"restore_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:108;a:4:{s:1:\"a\";i:109;s:1:\"b\";s:14:\"replicate_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:109;a:4:{s:1:\"a\";i:110;s:1:\"b\";s:12:\"reorder_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:110;a:4:{s:1:\"a\";i:111;s:1:\"b\";s:11:\"delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:111;a:4:{s:1:\"a\";i:112;s:1:\"b\";s:15:\"delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:112;a:4:{s:1:\"a\";i:113;s:1:\"b\";s:17:\"force_delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:113;a:4:{s:1:\"a\";i:114;s:1:\"b\";s:21:\"force_delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"super_admin\";s:1:\"c\";s:3:\"web\";}}}',1732952305);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classrooms`
--

DROP TABLE IF EXISTS `classrooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `classrooms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `classrooms_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classrooms`
--

LOCK TABLES `classrooms` WRITE;
/*!40000 ALTER TABLE `classrooms` DISABLE KEYS */;
INSERT INTO `classrooms` VALUES (1,'12A','123','2024-10-04 18:52:42','2024-10-04 18:52:42');
/*!40000 ALTER TABLE `classrooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam_rooms`
--

DROP TABLE IF EXISTS `exam_rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exam_rooms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` bigint unsigned NOT NULL,
  `created_by` bigint unsigned NOT NULL,
  `room_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `duration` int NOT NULL COMMENT 'Duration in minutes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `exam_rooms_room_code_unique` (`room_code`),
  KEY `exam_rooms_quiz_id_foreign` (`quiz_id`),
  KEY `exam_rooms_created_by_foreign` (`created_by`),
  CONSTRAINT `exam_rooms_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `exam_rooms_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_rooms`
--

LOCK TABLES `exam_rooms` WRITE;
/*!40000 ALTER TABLE `exam_rooms` DISABLE KEYS */;
INSERT INTO `exam_rooms` VALUES (1,20,1,'123124','kiểm tra giữa kì 1','2024-10-08 14:00:42',40,'2024-10-08 09:28:27','2024-10-08 09:32:47'),(2,1,1,'111111','Thi thử','2024-10-09 02:41:33',54,'2024-10-09 02:42:17','2024-10-09 03:28:32'),(3,1,1,'131313','thi','2024-10-09 09:48:13',36,'2024-10-09 09:16:20','2024-10-09 09:48:13');
/*!40000 ALTER TABLE `exam_rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_10_04_020243_create_quizzes_table',2),(5,'2024_10_04_020258_create_questions_table',2),(6,'2024_10_04_020308_create_options_table',2),(7,'2024_10_04_020324_create_quiz_attempts_table',2),(8,'2024_10_04_020333_create_answers_table',2),(9,'2024_10_04_020344_create_exam_rooms_table',2),(10,'2024_10_04_020354_create_room_participants_table',2),(11,'2024_10_04_020402_create_results_table',2),(12,'2024_10_04_024056_create_permission_tables',3),(13,'2024_10_05_004828_add_image_to_quizzes_table',4),(14,'2024_10_05_010228_create_classrooms_table',5),(15,'2024_10_05_010307_create_students_table',5),(16,'2024_10_06_120416_add_class_id_to_users_table',6),(17,'2024_10_06_123051_add_name_to_exam_rooms_table',7),(18,'2024_10_06_121018_add_violations_to_results_table',8),(19,'2024_10_06_122337_add_user_answer_to_answers_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint unsigned NOT NULL,
  `option_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `options_question_id_foreign` (`question_id`),
  CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (219,58,'2',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(220,58,'3',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(221,58,'4',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(222,58,'5',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(223,59,'isoamyl axetat',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(224,59,'etyl butirat',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(225,59,'etyl axetat',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(226,59,'geranyl axetat',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(227,60,'CH3COONa và C2H5OH',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(228,60,'HCOONa và CH3OH',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(229,60,'HCOONa và C2H5OH',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(230,60,'CH3COONa và CH3OH',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(231,61,'C6H5COOC6H5C6H5COOC6H5 (phenyl benzoat).',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(232,61,'CH3COO[CH2]2−OOCCH2CH3',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(233,61,'CH3OOC−COOCH3',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(234,61,'CH3COOC6H5CH3COOC6H5 (phenyl axetat).',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(235,62,'HCOOC2H5',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(236,62,'HCOOC3H7',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(237,62,' CH3COOCH3.',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(238,62,' CH3COOC2H5',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(239,63,'51%.',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(240,63,'49%.',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(241,63,'66%.',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(242,63,'34%.',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(243,64,'3',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(244,64,'4',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(245,64,'5',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(246,64,'6',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(247,65,'HCOOC4H7',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(248,65,'CH3COOC3H5',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(249,65,'C2H3COOC2H5',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(250,65,'C2H5COOC2H3',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(251,66,'19,8',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(252,66,'21,8',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(253,66,'14,2',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(254,66,'11,6',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(255,67,'2',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(256,67,'3',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(257,67,'3',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(258,67,'4',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(259,68,'30%.',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(260,68,'50%.',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(261,68,'60%.',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(262,68,'75%.',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(263,69,'6,48.',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(264,69,'7,28. ',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(265,69,'8,64',1,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(266,69,'5,6',0,'2024-10-06 05:22:32','2024-10-06 05:22:32'),(267,70,'123',1,'2024-10-09 02:25:51','2024-10-09 02:38:38'),(268,70,'4',0,'2024-10-09 02:25:51','2024-10-09 02:38:38'),(269,70,'23',0,'2024-10-09 02:25:51','2024-10-09 02:38:38'),(270,71,'2',1,'2024-10-09 08:39:51','2024-10-09 08:39:51');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'view_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(2,'view_any_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(3,'create_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(4,'update_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(5,'restore_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(6,'restore_any_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(7,'replicate_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(8,'reorder_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(9,'delete_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(10,'delete_any_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(11,'force_delete_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(12,'force_delete_any_answer','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(13,'view_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(14,'view_any_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(15,'create_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(16,'update_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(17,'restore_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(18,'restore_any_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(19,'replicate_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(20,'reorder_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(21,'delete_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(22,'delete_any_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(23,'force_delete_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(24,'force_delete_any_exam::room','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(25,'view_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(26,'view_any_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(27,'create_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(28,'update_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(29,'restore_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(30,'restore_any_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(31,'replicate_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(32,'reorder_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(33,'delete_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(34,'delete_any_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(35,'force_delete_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(36,'force_delete_any_option','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(37,'view_question','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(38,'view_any_question','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(39,'create_question','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(40,'update_question','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(41,'restore_question','web','2024-10-03 19:40:59','2024-10-03 19:40:59'),(42,'restore_any_question','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(43,'replicate_question','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(44,'reorder_question','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(45,'delete_question','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(46,'delete_any_question','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(47,'force_delete_question','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(48,'force_delete_any_question','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(49,'view_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(50,'view_any_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(51,'create_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(52,'update_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(53,'restore_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(54,'restore_any_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(55,'replicate_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(56,'reorder_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(57,'delete_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(58,'delete_any_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(59,'force_delete_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(60,'force_delete_any_quiz','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(61,'view_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(62,'view_any_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(63,'create_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(64,'update_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(65,'restore_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(66,'restore_any_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(67,'replicate_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(68,'reorder_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(69,'delete_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(70,'delete_any_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(71,'force_delete_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(72,'force_delete_any_quiz::attempt','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(73,'view_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(74,'view_any_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(75,'create_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(76,'update_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(77,'restore_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(78,'restore_any_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(79,'replicate_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(80,'reorder_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(81,'delete_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(82,'delete_any_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(83,'force_delete_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(84,'force_delete_any_result','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(85,'view_role','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(86,'view_any_role','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(87,'create_role','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(88,'update_role','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(89,'delete_role','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(90,'delete_any_role','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(91,'view_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(92,'view_any_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(93,'create_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(94,'update_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(95,'restore_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(96,'restore_any_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(97,'replicate_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(98,'reorder_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(99,'delete_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(100,'delete_any_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(101,'force_delete_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(102,'force_delete_any_room::participant','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(103,'view_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(104,'view_any_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(105,'create_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(106,'update_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(107,'restore_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(108,'restore_any_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(109,'replicate_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(110,'reorder_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(111,'delete_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(112,'delete_any_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(113,'force_delete_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00'),(114,'force_delete_any_user','web','2024-10-03 19:41:00','2024-10-03 19:41:00');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` bigint unsigned NOT NULL,
  `question_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('multiple_choice','true_false','value') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_quiz_id_foreign` (`quiz_id`),
  CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (58,20,'Ứng với công thức C4H8O2C4H8O2 có bao nhiêu este là đồng phân của nhau ? ','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(59,20,'Este có mùi dứa là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(60,20,'Đun nóng este HCOOCH3HCOOCH3 với một lượng vừa đủ dung dịch NaOH, sản phẩm thu được là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(61,20,'Este nào sau đây khi phản ứng với dung dịch NaOH dư, đun nóng không tạo ra hai muối ?','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(62,20,'Thuỷ phân hoàn toàn 3,7 gam chất X có công thức phân tử C3H6O2C3H6O2 trong 100 gam dung dịch NaOH 4%, cô cạn dung dịch sau phản ứng thu được 5,4 gam chất rắn. Công thức cấu tạo của X là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(63,20,'Thuỷ phân hoàn toàn hai este đơn chức X và Y là đồng phân cấu tạo của nhau cần 100 ml dung dịch NaOH 1M, thu được 7,64 gam hỗn hợp 2 muối và 3,76 gam hỗn hợp P gồm hai ancol Z và T (MzMz < MTMT). Phần trăm khối lượng của Z trong P là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(64,20,'Este X chứa vòng benzen có công thức phân từ là C8H8O2C8H8O2. Số công thức cấu tạo của X là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(65,20,'Este đơn chức X có tỉ khối hơi so với CH4CH4 là 6,25. Cho 20 gam X tác dụng với 300 ml dung dịch KOH 1M (đun nóng). Cô cạn dung dịch sau phản ứng thu được 28 gam chất rắn khan. Công thức của X là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(66,20,'Cho 13,6 gam phenyl axetat tác dụng với 250 ml dung dịch NaOH 1M, cô cạn dung dịch sau phản ứng được m gam chất rắn. Giá trị của m là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(67,20,'Este X không no, mạch hở, có tỉ khối hơi so với oxi bằng 3,125. Cho X tác dụng hoàn toàn với NaOH thu được một anđehit và một muối của axit hữu cơ. Số công thức cấu tạo phù hợp với X là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(68,20,'Cho 45 gam axit axetic phản ứng với 69 gam ancol etylic (xúc tác H2SO4H2SO4 đặc), đun nóng, thu được 39,6 gam etyl axetat. Hiệu suất của phản ứng este hoá là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(69,20,'Hỗn hợp X gồm axit HCOOH và CH3COOHCH3COOH có số mol bằng nhau. Cho 5,3 gam X tác dụng với 5,75 gam C2H5OHC2H5OH (xúc tác H2SO4H2SO4 đặc, đun nóng). Biết hiệu suất các phản ứng este hoá đều bằng 80%. Khối lượng hỗn hợp este thu được là','multiple_choice','2024-10-06 05:22:32','2024-10-06 05:22:32'),(70,1,'<p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;{3B7F5DF5-DAC0-469D-8E20-77E373EF8C3B}.png&quot;,&quot;filesize&quot;:5820,&quot;height&quot;:52,&quot;href&quot;:&quot;http://localhost:8000/storage/IP2vxgzIsqQJjuasiZY8NMh4A5AdRACOJQlnCWxV.png&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/IP2vxgzIsqQJjuasiZY8NMh4A5AdRACOJQlnCWxV.png&quot;,&quot;width&quot;:502}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"http://localhost:8000/storage/IP2vxgzIsqQJjuasiZY8NMh4A5AdRACOJQlnCWxV.png\"><img src=\"http://localhost:8000/storage/IP2vxgzIsqQJjuasiZY8NMh4A5AdRACOJQlnCWxV.png\" width=\"502\" height=\"52\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">{3B7F5DF5-DAC0-469D-8E20-77E373EF8C3B}.png</span> <span class=\"attachment__size\">5.68 KB</span></figcaption></a></figure></p>','multiple_choice','2024-10-09 02:25:51','2024-10-09 02:38:38'),(71,1,'<p>1 + 1 = ?</p>','value','2024-10-09 08:39:51','2024-10-09 08:39:51');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz_attempts`
--

DROP TABLE IF EXISTS `quiz_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quiz_attempts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `quiz_id` bigint unsigned NOT NULL,
  `score` int DEFAULT NULL,
  `status` enum('in_progress','completed','failed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `started_at` timestamp NULL DEFAULT NULL,
  `finished_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `violate_count` int unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `quiz_attempts_user_id_foreign` (`user_id`),
  KEY `quiz_attempts_quiz_id_foreign` (`quiz_id`),
  CONSTRAINT `quiz_attempts_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `quiz_attempts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz_attempts`
--

LOCK TABLES `quiz_attempts` WRITE;
/*!40000 ALTER TABLE `quiz_attempts` DISABLE KEYS */;
INSERT INTO `quiz_attempts` VALUES (53,1,20,5,'completed','2024-11-29 11:46:57','2024-11-29 11:47:46','2024-11-29 11:47:46','2024-11-29 11:47:46','storage/videos/2024-11-29-18-47-45-934558-webm.mp4',1),(54,1,20,4,'completed','2024-11-29 11:50:59','2024-11-29 11:51:43','2024-11-29 11:51:43','2024-11-29 11:51:44','storage/videos/2024-11-29-18-51-43-099425-webm.mp4',2),(55,1,1,0,'completed','2024-11-29 11:52:55','2024-11-29 11:53:17','2024-11-29 11:53:17','2024-11-29 11:53:17','storage/videos/2024-11-29-18-53-16-971471-webm.mp4',0);
/*!40000 ALTER TABLE `quiz_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quizzes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `total_questions` int NOT NULL,
  `duration` int NOT NULL COMMENT 'Duration in minutes',
  `level` enum('easy','medium','hard') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quizzes`
--

LOCK TABLES `quizzes` WRITE;
/*!40000 ALTER TABLE `quizzes` DISABLE KEYS */;
INSERT INTO `quizzes` VALUES (1,'15 Câu trắc nghiệm Este có đáp án','15 Câu trắc nghiệm Este có đáp án',15,20,'medium','quiz-images/01J9QNRD97THYV4K14JPGX5WNK.jpg','2024-10-04 17:49:41','2024-10-09 03:39:26'),(2,'Trắc nghiệm Este có đáp án (Nhận biết)','Trắc nghiệm Este có đáp án (Nhận biết)',15,25,'medium','quiz-images/01J9QNXKMSS8F0WJHY4WP0VYCQ.jpg','2024-10-04 17:50:36','2024-10-09 03:42:17'),(3,'Hóa học cơ bản - Bài 1','16 Câu trắc nghiệm Amin có đáp án\n',16,20,'easy','quiz-images/01J9QNY7TGFFT8QFSXDF28VT0N.jpg','2024-10-05 02:10:34','2024-10-09 03:42:37'),(4,'16 Câu trắc nghiệm PEPTIT và PROTEIN có đáp án\n','16 Câu trắc nghiệm PEPTIT và PROTEIN có đáp án\n',15,30,'medium','quiz-images/01J9QNYS2FCMFSPHMCDBX258J2.jpg','2024-10-05 02:10:34','2024-10-09 03:42:55'),(5,'15 câu hỏi trắc nghiệm Cấu tạo và tính chất của amin, amino axit và protein cực hay có đáp án\n','15 câu hỏi trắc nghiệm Cấu tạo và tính chất của amin, amino axit và protein cực hay có đáp án\n',15,15,'medium','quiz-images/01J9QNZAWHMKKM56N7DZJ5FHE7.jpg','2024-10-05 02:10:34','2024-10-09 03:43:13'),(6,'Trắc nghiệm Luyện tập: Cấu tạo và tính chất của amin, amino axit và protein có đáp án (Thông hiểu)\n','Trắc nghiệm Luyện tập: Cấu tạo và tính chất của amin, amino axit và protein có đáp án (Thông hiểu)\n',15,20,'hard','quiz-images/01J9QP09HDFTF590ACME52H2TN.jpg','2024-10-05 02:10:34','2024-10-09 03:43:45'),(7,'Đại cương Hóa học - Bài 5','Bài thi tổng hợp về các khái niệm và nguyên lý trong Hóa học.',25,150,'hard','quiz-images/01J9QP1Z3MZYAJEN8VT88RH9AA.avif','2024-10-05 02:10:34','2024-10-09 03:44:40'),(20,'Bài thi giữa kì hóa 12','Description 1',12,30,'easy','quiz-images/01J9QP2MX23X9PXB489C6JWF06.png','2024-10-06 05:22:32','2024-10-09 03:45:02');
/*!40000 ALTER TABLE `quizzes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `results` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `room_participant_id` bigint unsigned NOT NULL,
  `total_score` int NOT NULL,
  `correct_answers` int NOT NULL,
  `wrong_answers` int NOT NULL,
  `violations` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `results_room_participant_id_foreign` (`room_participant_id`),
  CONSTRAINT `results_room_participant_id_foreign` FOREIGN KEY (`room_participant_id`) REFERENCES `room_participants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(94,1),(95,1),(96,1),(97,1),(98,1),(99,1),(100,1),(101,1),(102,1),(103,1),(104,1),(105,1),(106,1),(107,1),(108,1),(109,1),(110,1),(111,1),(112,1),(113,1),(114,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super_admin','web','2024-10-03 19:40:59','2024-10-03 19:40:59');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_participants`
--

DROP TABLE IF EXISTS `room_participants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_participants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `exam_room_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `status` enum('pending','in_progress','completed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `room_participants_exam_room_id_foreign` (`exam_room_id`),
  KEY `room_participants_user_id_foreign` (`user_id`),
  CONSTRAINT `room_participants_exam_room_id_foreign` FOREIGN KEY (`exam_room_id`) REFERENCES `exam_rooms` (`id`) ON DELETE CASCADE,
  CONSTRAINT `room_participants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_participants`
--

LOCK TABLES `room_participants` WRITE;
/*!40000 ALTER TABLE `room_participants` DISABLE KEYS */;
INSERT INTO `room_participants` VALUES (1,1,1,'pending',0,'2024-10-08 10:23:11','2024-10-08 10:23:11'),(2,1,3,'pending',0,'2024-10-08 10:23:11','2024-10-08 10:23:11'),(3,2,1,'pending',0,'2024-10-09 02:42:24','2024-10-09 02:42:24'),(4,2,8,'pending',0,'2024-10-09 02:43:20','2024-10-09 02:43:20'),(5,3,1,'pending',0,'2024-10-09 09:16:30','2024-10-09 09:16:30');
/*!40000 ALTER TABLE `room_participants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('0EZXnGjmMtWKCDusBkMwaaNSJJTGK0Xp39Dcb9ZY',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiZFVRTU1kQ2ZldTFZekhnUkVjV0c2YWJEdzZkOWtPcjExcU1yWXFtZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9xdWl6LWF0dGVtcHRzLzU1L3ZpZGVvLXZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkcHlmcWIzZ3VaMkxHY1BzYVNZNE1RdWhtekZIbG9UdmtnNXIyWVlSc1FEcGMwTjlYVVBvZmkiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fXM6NjoidGFibGVzIjthOjM6e3M6MjU6Ikxpc3RRdWl6QXR0ZW1wdHNfcGVyX3BhZ2UiO3M6MzoiYWxsIjtzOjIwOiJMaXN0UmVzdWx0c19wZXJfcGFnZSI7czozOiJhbGwiO3M6MjA6Ikxpc3RPcHRpb25zX3Blcl9wYWdlIjtzOjM6ImFsbCI7fX0=',1732881427);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classroom_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_email_unique` (`email`),
  KEY `students_classroom_id_foreign` (`classroom_id`),
  CONSTRAINT `students_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `class_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_class_id_foreign` (`class_id`),
  CONSTRAINT `users_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'Trần Lê Hoàng Giang','trangiangzxc@gmail.com',NULL,'$2y$12$pyfqb3guZ2LGcPsaSY4MQuhmzFHloTvkg5r2YYRsQDpc0N9XUPofi','JmNvGoJspGxytZbRczcPu4uWbn939BrZOeLXXQ5RaaFghPyZGW9KtAH4Qm53','2024-10-03 18:42:30','2024-10-03 18:42:30'),(3,NULL,'12314123','trangiangzx23c@gmail.com',NULL,'$2y$12$S7NVu9sj4ZQ3v6XBa7jyBOc6NaW6Eh50QIj9oOW6V3/JZFuygoEuO',NULL,'2024-10-03 19:21:07','2024-10-03 19:21:07'),(4,1,'Giang Trần','trangiangzx1241c@gmail.com',NULL,'$2y$12$isr.xNcZAJSqDu2JQcxC/Oi5Ik9fK5QpVLUyAmzrtrfz43HKG/PFu',NULL,'2024-10-06 06:08:15','2024-10-06 06:32:19'),(5,1,'11412313','trangia3431ngzxc@gmail.com',NULL,'$2y$12$oZXbX8qnlLbvBVgboNXi9e3uPYK9dljgHDOOZVVi9Bymmfi8yjcpm',NULL,'2024-10-06 06:30:46','2024-10-06 06:30:46'),(6,1,'giangtran','trangiangzxc123123333@gmail.com',NULL,'$2y$12$zAdDMp3wRax88gUJhuE0xOUBoT/5eE3aDL98SNvcSHO6tbfMqU/xm',NULL,'2024-10-06 19:58:37','2024-10-06 19:58:37'),(7,1,'Violon ','trangiangzxc123123@gmail.com',NULL,'$2y$12$uIMqMsU2Xyn32cEX.vCSAeBh73I9Dd7cAre4snPKNejqlaN3OoqwS',NULL,'2024-10-08 13:14:44','2024-10-08 13:14:44'),(8,1,'Trần Lê Huy Hoàng','trangiangzxczxczxczxc@gmail.com',NULL,'$2y$12$nvQkpuuWLngdH8Y7dUFipezTZpY5lGQh2KuDwWxCj7cHS5m51wMPG',NULL,'2024-10-09 02:43:14','2024-10-09 02:43:14');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'online_exam'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-29 19:02:15
