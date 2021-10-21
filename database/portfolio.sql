-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for portfolio
CREATE DATABASE IF NOT EXISTS `portfolio` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `portfolio`;

-- Dumping structure for table portfolio.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.admin: ~2 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
	(1, 'admin', '123'),
	(2, 'waldika', 'waldika');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table portfolio.biodata
CREATE TABLE IF NOT EXISTS `biodata` (
  `id_biodata` int(11) NOT NULL AUTO_INCREMENT,
  `namaLengkap` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `aboutUs` text,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_biodata`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.biodata: ~2 rows (approximately)
/*!40000 ALTER TABLE `biodata` DISABLE KEYS */;
INSERT INTO `biodata` (`id_biodata`, `namaLengkap`, `profile`, `email`, `phone`, `aboutUs`, `id_admin`) VALUES
	(1, 'Waldika Irawan', 'Web Developer', 'waldika.irawan@gmail.com', '085695328450', 'Hai, saya Waldika Irawan, seorang mahasiswa biasa Teknik Informatika di Universitas Pembangunan Jaya yang senang dengan dunia web developer. Selain sebagai web developer, saya juga tertarik dengan dunia internet seperti blogging, mendengarkan musik seperti genre pop atau klasik. Saya juga tertarik dengan dunia Marketing seperti sosial media marketing, digital marketing. Saya juga tertarik dengan dunia game.', 1);
/*!40000 ALTER TABLE `biodata` ENABLE KEYS */;

-- Dumping structure for table portfolio.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` text,
  `alamat` text,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `github` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.contact: ~1 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id_contact`, `deskripsi`, `alamat`, `phone`, `email`, `github`, `facebook`, `instagram`, `id_admin`) VALUES
	(1, 'Hai, saya Waldika Irawan, seorang mahasiswa biasa Teknik Informatika di Universitas Pembangunan Jaya yang senang dengan dunia web developer. Selain sebagai web developer, saya juga tertarik dengan dunia internet seperti blogging, mendengarkan musik seperti genre pop atau klasik. Saya juga tertarik dengan dunia Marketing seperti sosial media marketing, digital marketing. Saya juga tertarik dengan dunia game.', 'Pondok Aren, Tangerang Selatan', '085695328450', 'waldika.irawan00@gmail.com', 'https://github.com', 'https://facebook.com', 'https://instagram.com', NULL);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table portfolio.education
CREATE TABLE IF NOT EXISTS `education` (
  `id_education` int(11) NOT NULL AUTO_INCREMENT,
  `kampus` varchar(50) DEFAULT NULL,
  `programStudi` varchar(50) DEFAULT NULL,
  `awalSekolah` varchar(50) DEFAULT NULL,
  `akhirSekolah` varchar(50) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_education`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.education: ~2 rows (approximately)
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` (`id_education`, `kampus`, `programStudi`, `awalSekolah`, `akhirSekolah`, `id_admin`) VALUES
	(1, 'SMK Bintang Nusantara', 'Teknik Komputer Jaringan', '2016', '2019', NULL),
	(2, 'Universitas Pembangunan Jaya', 'Teknik Informatika', '2019', 'Sekarang', NULL);
/*!40000 ALTER TABLE `education` ENABLE KEYS */;

-- Dumping structure for table portfolio.interests
CREATE TABLE IF NOT EXISTS `interests` (
  `id_interests` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` longtext,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_interests`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.interests: ~1 rows (approximately)
/*!40000 ALTER TABLE `interests` DISABLE KEYS */;
INSERT INTO `interests` (`id_interests`, `deskripsi`, `id_admin`) VALUES
	(1, 'Selain sebagai web developer, saya juga tertarik dengan dunia internet seperti blogging, mendengarkan musik seperti genre pop atau klasik. Saya juga tertarik dengan dunia Marketing seperti sosial media marketing, digital marketing. Saya juga tertarik dengan dunia game.', 1);
/*!40000 ALTER TABLE `interests` ENABLE KEYS */;

-- Dumping structure for table portfolio.testimoni
CREATE TABLE IF NOT EXISTS `testimoni` (
  `id_testimoni` int(11) NOT NULL AUTO_INCREMENT,
  `namaTestimoni` varchar(50) DEFAULT NULL,
  `deskripsi` longtext,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_testimoni`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table portfolio.testimoni: ~3 rows (approximately)
/*!40000 ALTER TABLE `testimoni` DISABLE KEYS */;
INSERT INTO `testimoni` (`id_testimoni`, `namaTestimoni`, `deskripsi`, `id_admin`) VALUES
	(7, 'Ryan', 'boleh juga', 1),
	(11, 'Hulk', 'asd', 1),
	(13, 'Tony Stark', 'tes', 1),
	(14, 'Stark', 'tes', 1);
/*!40000 ALTER TABLE `testimoni` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
