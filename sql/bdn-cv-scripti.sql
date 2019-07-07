# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.31-MariaDB)
# Database: bdn-cv-scripti
# Generation Time: 2019-07-07 09:04:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table brkdndr_deneyimlerim
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brkdndr_deneyimlerim`;

CREATE TABLE `brkdndr_deneyimlerim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dny_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `dny_firma_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `dny_calisma_tarihleri` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dny_aciklama` text COLLATE utf8_turkish_ci,
  `dny_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `yazar_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

LOCK TABLES `brkdndr_deneyimlerim` WRITE;
/*!40000 ALTER TABLE `brkdndr_deneyimlerim` DISABLE KEYS */;

INSERT INTO `brkdndr_deneyimlerim` (`id`, `dny_adi`, `dny_firma_adi`, `dny_calisma_tarihleri`, `dny_aciklama`, `dny_durum`, `yazar_id`, `createdAt`, `updatedAt`)
VALUES
	(1,'Yazılı Geliştirici','Firma','Mart 2018 - Ocak 2019','','1',1,'2019-07-06 13:26:21','2019-07-07 10:53:51'),
	(2,'Web Developer','Firma','Mart 2019 - Devam Ediyor','','1',1,'2019-07-07 09:36:52','2019-07-07 10:53:34');

/*!40000 ALTER TABLE `brkdndr_deneyimlerim` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table brkdndr_egitimlerim
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brkdndr_egitimlerim`;

CREATE TABLE `brkdndr_egitimlerim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eg_okul_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `eg_bolum_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `eg_bolum_icerigi` text COLLATE utf8_turkish_ci,
  `eg_not_ortalamasi` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `eg_tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `eg_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `yazar_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

LOCK TABLES `brkdndr_egitimlerim` WRITE;
/*!40000 ALTER TABLE `brkdndr_egitimlerim` DISABLE KEYS */;

INSERT INTO `brkdndr_egitimlerim` (`id`, `eg_okul_adi`, `eg_bolum_adi`, `eg_bolum_icerigi`, `eg_not_ortalamasi`, `eg_tarih`, `eg_durum`, `yazar_id`, `createdAt`, `updatedAt`)
VALUES
	(1,'Anadolu Üniversitesi','Yönetim Bilişim Sistemleri','','2.10','2019 - Devam Ediyor','1',1,'2019-07-06 14:11:05','2019-07-07 10:28:11'),
	(2,'Sakarya Üniversitesi','Bilgisayar Programcılığı','','3.0','Eylül 2014 - Haziran 2016','1',1,'2019-07-07 09:47:07','2019-07-07 10:54:08');

/*!40000 ALTER TABLE `brkdndr_egitimlerim` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table brkdndr_genel_ayarlar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brkdndr_genel_ayarlar`;

CREATE TABLE `brkdndr_genel_ayarlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` text COLLATE utf8_turkish_ci NOT NULL,
  `site_description` text COLLATE utf8_turkish_ci NOT NULL,
  `site_keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `site_facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `site_twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `site_linkedin` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `site_github` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `updatedAt` datetime NOT NULL,
  `guncelleyen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

LOCK TABLES `brkdndr_genel_ayarlar` WRITE;
/*!40000 ALTER TABLE `brkdndr_genel_ayarlar` DISABLE KEYS */;

INSERT INTO `brkdndr_genel_ayarlar` (`id`, `site_title`, `site_description`, `site_keywords`, `site_facebook`, `site_twitter`, `site_linkedin`, `site_github`, `updatedAt`, `guncelleyen_id`)
VALUES
	(1,'Burak Dündar - Software Developer','Burak Dündar - Software Developer','Php, MySQL, Javascript, Burak Dündar','https://www.facebook.com/desponres','https://www.twitter.com/desponres','https://www.linkedin.com/in/desponres','https://www.github.com/desponres','2019-07-07 09:31:18',1);

/*!40000 ALTER TABLE `brkdndr_genel_ayarlar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table brkdndr_hakkimda
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brkdndr_hakkimda`;

CREATE TABLE `brkdndr_hakkimda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hk_ad_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `hk_email` varchar(255) COLLATE utf8_turkish_ci DEFAULT '',
  `hk_adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT '',
  `hk_icerik` text COLLATE utf8_turkish_ci,
  `hk_resim` text COLLATE utf8_turkish_ci NOT NULL,
  `updatedAt` datetime NOT NULL,
  `guncelleyen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

LOCK TABLES `brkdndr_hakkimda` WRITE;
/*!40000 ALTER TABLE `brkdndr_hakkimda` DISABLE KEYS */;

INSERT INTO `brkdndr_hakkimda` (`id`, `hk_ad_soyad`, `hk_email`, `hk_adres`, `hk_icerik`, `hk_resim`, `updatedAt`, `guncelleyen_id`)
VALUES
	(1,'Burak Dündar','burak@burakdundar.com','adresim yok benim','Hakkımda bilgiler buraya daha sonra eklenecektir :)','min_pp1.jpg','2019-07-07 10:54:46',1);

/*!40000 ALTER TABLE `brkdndr_hakkimda` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table brkdndr_iletisim
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brkdndr_iletisim`;

CREATE TABLE `brkdndr_iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gonderen_ad_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gonderen_email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `konu` text COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_durum` int(1) NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;



# Dump of table brkdndr_ilgi_alanlarim
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brkdndr_ilgi_alanlarim`;

CREATE TABLE `brkdndr_ilgi_alanlarim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ilg_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `guncelleyen_id` int(11) NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

LOCK TABLES `brkdndr_ilgi_alanlarim` WRITE;
/*!40000 ALTER TABLE `brkdndr_ilgi_alanlarim` DISABLE KEYS */;

INSERT INTO `brkdndr_ilgi_alanlarim` (`id`, `ilg_icerik`, `guncelleyen_id`, `updatedAt`)
VALUES
	(1,'paranoyak ve sinirli kafa',1,'2019-07-06 14:53:32');

/*!40000 ALTER TABLE `brkdndr_ilgi_alanlarim` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table brkdndr_sertifikalarim
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brkdndr_sertifikalarim`;

CREATE TABLE `brkdndr_sertifikalarim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sertifika_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `sertifika_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `yazar_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

LOCK TABLES `brkdndr_sertifikalarim` WRITE;
/*!40000 ALTER TABLE `brkdndr_sertifikalarim` DISABLE KEYS */;

INSERT INTO `brkdndr_sertifikalarim` (`id`, `sertifika_adi`, `sertifika_durum`, `yazar_id`, `createdAt`, `updatedAt`)
VALUES
	(1,'Google Analytics Certified Developer','1',1,'2019-07-06 15:05:20','0000-00-00 00:00:00'),
	(2,'Mobile Web Specialist - Google Certification','1',1,'2019-07-06 15:05:26','0000-00-00 00:00:00'),
	(3,'1st Place - University of Colorado Boulder - Emerging Tech Competition 2009','1',1,'2019-07-06 15:05:33','0000-00-00 00:00:00'),
	(4,'1st Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)','1',1,'2019-07-06 15:05:38','0000-00-00 00:00:00'),
	(5,'3rd Place - James Buchanan High School - Hackathon 2005','1',1,'2019-07-06 15:05:43','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `brkdndr_sertifikalarim` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table brkdndr_uyeler
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brkdndr_uyeler`;

CREATE TABLE `brkdndr_uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` int(1) NOT NULL,
  `sifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `isActive` int(1) NOT NULL,
  `user_role` int(1) NOT NULL,
  `ekleyen_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedat` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

LOCK TABLES `brkdndr_uyeler` WRITE;
/*!40000 ALTER TABLE `brkdndr_uyeler` DISABLE KEYS */;

INSERT INTO `brkdndr_uyeler` (`id`, `ad_soyad`, `email`, `telefon`, `cinsiyet`, `sifre`, `isActive`, `user_role`, `ekleyen_id`, `createdAt`, `updatedat`)
VALUES
	(1,'Burak Dündar','admin@admin.com','05555555555',1,'ec473d90c37bf91bb29f6b4414baf161',1,4,1,'2018-07-28 07:50:11','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `brkdndr_uyeler` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table brkdndr_yeteneklerim
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brkdndr_yeteneklerim`;

CREATE TABLE `brkdndr_yeteneklerim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yetenek_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `yetenek_yuzde` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yetenek_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `yazar_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

LOCK TABLES `brkdndr_yeteneklerim` WRITE;
/*!40000 ALTER TABLE `brkdndr_yeteneklerim` DISABLE KEYS */;

INSERT INTO `brkdndr_yeteneklerim` (`id`, `yetenek_baslik`, `yetenek_yuzde`, `yetenek_durum`, `yazar_id`, `createdAt`, `updatedAt`)
VALUES
	(1,'PHP','80','1',1,'2019-07-06 17:24:47','2019-07-06 18:06:57'),
	(2,'MySQL','90','1',1,'2019-07-06 17:25:06','2019-07-06 17:58:36'),
	(4,'Kotlin','80','1',1,'2019-07-06 17:55:14','2019-07-06 18:06:42'),
	(5,'Unity','45','1',1,'2019-07-06 18:20:12','0000-00-00 00:00:00'),
	(6,'Javascript','70','1',1,'2019-07-07 10:09:30','0000-00-00 00:00:00'),
	(7,'Java','80','1',1,'2019-07-07 10:09:37','0000-00-00 00:00:00'),
	(8,'Swift','95','1',1,'2019-07-07 10:18:20','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `brkdndr_yeteneklerim` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
