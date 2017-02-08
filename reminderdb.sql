-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.8 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for reminderdb
CREATE DATABASE IF NOT EXISTS `reminderdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `reminderdb`;


-- Dumping structure for table reminderdb.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table reminderdb.categories: ~0 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`category_id`, `category_name`) VALUES
	(1, 'Bills'),
	(2, 'Beauty'),
	(3, 'gab'),
	(4, 'jehu'),
	(5, '123123'),
	(6, 'gab');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table reminderdb.reminder
CREATE TABLE IF NOT EXISTS `reminder` (
  `reminder_id` int(11) NOT NULL AUTO_INCREMENT,
  `reminder_title` varchar(255) DEFAULT NULL,
  `reminder_description` varchar(255) DEFAULT NULL,
  `reminder_date` date DEFAULT NULL,
  `reminder_cat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`reminder_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table reminderdb.reminder: ~0 rows (approximately)
DELETE FROM `reminder`;
/*!40000 ALTER TABLE `reminder` DISABLE KEYS */;
INSERT INTO `reminder` (`reminder_id`, `reminder_title`, `reminder_description`, `reminder_date`, `reminder_cat`) VALUES
	(1, 'sadasd', 'asdasd', '3333-12-30', 'Beauty'),
	(2, '123123', '123123', '2323-12-30', 'Business'),
	(3, 'karate', 'asdasdad', '2323-12-30', 'Kids'),
	(4, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `reminder` ENABLE KEYS */;


-- Dumping structure for table reminderdb.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table reminderdb.users: ~3 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_name`) VALUES
	(21, 'gabzvaldez1', '12345', 'Gavriel Emmanuelle L. Valdez'),
	(22, 'regina', 'oca', 'reg racho'),
	(23, 'bkid', 'bkid', 'Bryan kit Caponhag Valmoria');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
