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


-- Dumping database structure for news__content
CREATE DATABASE IF NOT EXISTS `news__content` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `news__content`;

-- Dumping structure for table news__content.contactdata
CREATE TABLE IF NOT EXISTS `contactdata` (
  `id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `company__name` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `telephone__number` text COLLATE utf8_unicode_ci,
  `subject` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table news__content.contactdata: ~0 rows (approximately)
/*!40000 ALTER TABLE `contactdata` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactdata` ENABLE KEYS */;

-- Dumping structure for table news__content.newscards
CREATE TABLE IF NOT EXISTS `newscards` (
  `ID` bigint(20) NOT NULL DEFAULT '0',
  `headerImage` text COLLATE utf8_unicode_ci,
  `cardTitle` text COLLATE utf8_unicode_ci,
  `blurb` text COLLATE utf8_unicode_ci,
  `footerImage` text COLLATE utf8_unicode_ci,
  `createdBy` text COLLATE utf8_unicode_ci,
  `dateOfPost` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table news__content.newscards: ~3 rows (approximately)
/*!40000 ALTER TABLE `newscards` DISABLE KEYS */;
REPLACE INTO `newscards` (`ID`, `headerImage`, `cardTitle`, `blurb`, `footerImage`, `createdBy`, `dateOfPost`) VALUES
	(1, '../assets/streamlined-customer-engagement-FCsK.webp', 'Streamlined Customer Engagement with Salesfor...', 'Taking your store online is a big jump for anyone, whether youre launching your new retail idea or...', '../assets/jake.webp', 'Posted by Jake Tuley', '2022-02-09'),
	(2, '../assets/trainee-it-tech.webp', 'Trainee IT Technician', 'Salary Range National Minimum Wage Hours 40 hours per week, Monday to Friday Location Wymondham, Gorl...\r\n', '../assets/rob-george-zFWY.webp', 'Posted by Rob George', '2021-02-10'),
	(3, '../assets/why-social-media-kCQN.webp', 'Why Social Media Marketing is Valuable', 'At Netmatters we are a fully rounded digital agency, with a well-developed digital marketing depart.', '../assets/jasmin-rusted-LGUa.webp', 'Posted by Jasmin Rusted', '2021-02-17');
/*!40000 ALTER TABLE `newscards` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
