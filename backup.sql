-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

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
-- Table structure for table `hotel_rooms`
--

DROP TABLE IF EXISTS `hotel_rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel_rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotels_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `booking_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9F75D452F42F66C8` (`hotels_id`),
  CONSTRAINT `FK_9F75D452F42F66C8` FOREIGN KEY (`hotels_id`) REFERENCES `hotels` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_rooms`
--

LOCK TABLES `hotel_rooms` WRITE;
/*!40000 ALTER TABLE `hotel_rooms` DISABLE KEYS */;
INSERT INTO `hotel_rooms` VALUES (14,6,'Chambre Lits Jumeaux Deluxe avec Balcon','Vue sur Ville, Wi-Fi Gratuit, Parking gratuit, Superficie 55 m┬▓, 2 lits simples , Lits confortables, not├®s 8.9 (d\'apr├¿s 131 commentaires), ÔÇï Un parking gratuit et priv├® est disponible sur place (sans r├®servation pr├®alable).',50.00,'https://www.booking.com/hotel/ae/emirates-palace.fr.html?aid=1610680;label=fr-RznEekhZsAE5km4pYWEDWgS513276342476%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-10796016511%3Alp9000411%3Ali%3Adec%3Adm;sid=06b6a42b32ba37ee07e66d122bf5021a;all_sr_blocks=6','345800186-625ae46bc71bf166123912.jpg'),(15,6,'Suite Royale avec Balcon','Superficie 280 m┬▓, 1 tr├¿s grand lit double, Lits confortables, not├®s 8.9 (d\'apr├¿s 131 commentaires)',100.00,'https://www.booking.com/hotel/ae/emirates-palace.fr.html?aid=1610680;label=fr-RznEekhZsAE5km4pYWEDWgS513276342476%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-10796016511%3Alp9000411%3Ali%3Adec%3Adm;sid=06b6a42b32ba37ee07e66d122bf5021a;all_sr_blocks=6','350642188-625ae5f2a9ae2960743805.jpg'),(16,7,'Chambre Double ou Lits Jumeaux Premium','Situ├®e dans le b├ótiment principal, cette chambre dispose d\'un balcon avec vue lat├®rale sur les terres, la piscine ou la mer.',50.00,'https://www.booking.com/hotel/tr/mardan-palace.en-gb.html?aid=311984;label=mardan-palace-1YgvrOgIfhQBXJSmzPbGlwS393160854226%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-27881768438%3Alp9112211%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YTQUGSsRwx9','198589919-625aef983ac2e863886686.jpg'),(17,7,'Suite Duplex Premium','Situ├®e dans le b├ótiment principal, cette suite en duplex comprend 2 chambres reli├®es par une porte, acc├¿s direct acc├¿s ├á la piscine principale, Vue sur la mer Vue du jardin, Vue de la piscine',100.00,'https://www.booking.com/hotel/tr/mardan-palace.en-gb.html?aid=311984;label=mardan-palace-1YgvrOgIfhQBXJSmzPbGlwS393160854226%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-27881768438%3Alp9112211%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YTQUGSsRwx9','199498009-625af002a8aff737677279.jpg'),(18,8,'Chambre Lit King-Size Deluxe','Superficie 20 m┬▓, 1 tr├¿s grand lit double,  Lits confortables, not├®s 8.5 (d\'apr├¿s 23 commentaires).  ÔÇï Un parking priv├® est disponible ├á proximit├® (sans r├®servation pr├®alable).',45.00,'https://www.booking.com/hotel/it/westinexcelsiorflorence.fr.html#room_8124534','177030200-625af23b2f914516311867.jpg'),(19,8,'Chambre Double Deluxe Arno - Vue sur Fleuve Arno','Superficie 20 m┬▓, 1 tr├¿s grand lit double,  Lits confortables, not├®s 8.5 (d\'apr├¿s 23 commentaires).   ÔÇï Un parking priv├® est disponible ├á proximit├® (sans r├®servation pr├®alable)',45.00,'https://www.booking.com/hotel/it/westinexcelsiorflorence.fr.html#room_8124536','177030214-625af35e1a4de908333730.jpg'),(21,9,'Suite Panoramique en Duplex - 225 m┬▓ - Vue sur Mer','Superficie 225 m┬▓ 1 tr├¿s grand lit double  Lits confortables, not├®s 9.4 (d\'apr├¿s 93 commentaires) Un parking gratuit et priv├® est disponible sur place (sans r├®servation pr├®alable).',100.00,'https://www.booking.com/hotel/ae/burj-al-arab.fr.html?aid=318615;label=New_French_FR_FR_21427170385-y_vVwvyO_N%2AdSIDJHjR6LwS217244927943%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi2656114108%3Atiaud-297601666995%3Adsa-64415617705%3Alp9112211%3Ali%3Adec%3Adm','169285372-625af6b03f19d984179333.jpg'),(22,9,'Suite 2 Chambres Deluxe en Duplex - 335 m┬▓ - Vue s','Superficie 335 m┬▓ Chambre 1: 1 tr├¿s grand lit double  Chambre 2: 2 lits simples  Lits confortables, not├®s 9.4 (d\'apr├¿s 93 commentaires) ÔÇï Un parking gratuit et priv├® est disponible sur place (sans r├®servation pr├®alable).',120.00,'https://www.booking.com/hotel/ae/burj-al-arab.fr.html?aid=318615;label=New_French_FR_FR_21427170385-y_vVwvyO_N%2AdSIDJHjR6LwS217244927943%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi2656114108%3Atiaud-297601666995%3Adsa-64415617705%3Alp9112211%3Ali%3Adec%3Adm','169284637-625af6fb99607258952888.jpg'),(23,10,'Chambre Plaza','Superficie 44 m┬▓ 1 tr├¿s grand lit double  Lits confortables, not├®s 8.5 (d\'apr├¿s 26 commentaires)  Un parking public est disponible ├á proximit├® (sans r├®servation pr├®alable)',40.00,'https://www.booking.com/hotel/us/the-plaza.fr.html','32296573-625af9b8da7d1484351477.jpg'),(24,10,'Chambre Grand Luxe','Superficie 65 m┬▓ 1 tr├¿s grand lit double  Lits confortables, not├®s 8.5 (d\'apr├¿s 26 commentaires)  ÔÇï Un parking public est disponible ├á proximit├® (sans r├®servation pr├®alable)',90.00,'https://www.booking.com/hotel/us/the-plaza.fr.html','32295233-625afa5a6b5f9495938595.jpg'),(25,11,'Suite Royale Imp├®riale Premium avec 1 Chambre','Chambre 1: 1 tr├¿s grand lit double  Salon : 1 canap├®-lit  Suite priv├®e100 m┬▓,Vue sur la mer, Piscine',120.00,'https://www.booking.com/hotel/bs/royal-towers.fr.html?aid=304142;label=gen173bo-1DCAsoIUIMcm95YWwtdG93ZXJzSA1YA2hNiAEBmAENuAEXyAEM2AED6AEB-AECiAIBmAICqAIDuAKP9euSBsACAdICJGYxYWRlZjBmLWI2NDgtNGVmMC04ODI0LTUyZjk3OWM3MzcxNtgCBOACAQ;sid=06b6a42b32ba37ee07e66d','283466417-625afc066beca346824247.jpg'),(26,11,'Suite Royale Imp├®riale Premium avec 2 Chambres','Chambre 1: 1 tr├¿s grand lit double  Chambre 2: 2 grands lits doubles  Salon : 1 canap├®-lit  Suite priv├®e157 m┬▓, Vue sur la mer, Piscine',200.00,'https://www.booking.com/hotel/bs/royal-towers.fr.html?aid=304142;label=gen173bo-1DCAsoIUIMcm95YWwtdG93ZXJzSA1YA2hNiAEBmAENuAEXyAEM2AED6AEB-AECiAIBmAICqAIDuAKP9euSBsACAdICJGYxYWRlZjBmLWI2NDgtNGVmMC04ODI0LTUyZjk3OWM3MzcxNtgCBOACAQ;sid=06b6a42b32ba37ee07e66d','283466417-625afc3b2136b335088875.jpg'),(27,12,'Chambre Double Sup├®rieure','Cette chambre climatis├®e dispose d\'une t├®l├®vision ├á ├®cran plat',160.00,'https://www.booking.com/hotel/re/palm-ha-tel.fr.html#_','39656248-625afdc79c08d223670528.jpg'),(28,13,'Chambre 2 Lits Doubles - Casita','Superficie 51 m┬▓ 2 lits doubles  Lits confortables, not├®s 8.8 (d\'apr├¿s 20 commentaires)  ÔÇï Un parking public est disponible sur place (sans possibilit├® de r├®server) et un suppl├®ment est susceptible d\'├¬tre factur├®.',250.00,'https://www.booking.com/hotel/us/the-boulders-resort-the-waldorf-astoria-collection.fr.html#_','65285624-625afe12a0446794057262.jpg'),(29,14,'Studio Double Deluxe','2 lits simples  et 1 canap├®-lit ,  Superficie de 65 m┬▓',80.00,'https://www.booking.com/hotel/ai/cuisinart-golf-resort-amp-spa.fr.html#_','315933966-625afe49aa992687609165.jpg'),(30,15,'Suite Junior Lit King-Size - Vue sur Oc├®an','1 tr├¿s grand lit double  Ces suites de 60 m┬▓ offrent une vue sur lÔÇÖoc├®an et disposent dÔÇÖun lit king-size ou de deux lits doubles, sous r├®serve de disponibilit├®.',230.00,'https://www.booking.com/hotel/mx/marquis-los-cabos.fr.html#_','94746131-625afe8bd3871343744453.jpg');
/*!40000 ALTER TABLE `hotel_rooms` ENABLE KEYS */;
UNLOCK TABLES;
