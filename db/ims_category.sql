-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2016 at 01:20 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `ims_category`
--

CREATE TABLE IF NOT EXISTS `ims_category` (
  `ims_categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `ims_categoryName` varchar(250) DEFAULT NULL,
  `ims_categoryDesc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ims_categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ims_category`
--

INSERT INTO `ims_category` (`ims_categoryId`, `ims_categoryName`, `ims_categoryDesc`) VALUES
(1, 'Food & Service', 'Including fast food, bread, ice cream and more'),
(2, 'Perishables', 'Food or beverages that are easily damaged if not stored in the refrigerator'),
(3, 'Non-alcoholic & beverages', 'Beverages which do not contain alcohol'),
(4, 'Non-food', 'Products are not to eat or drink as medicines, batteries, tissues, and so on'),
(5, 'Snack', 'Snacks that will not satisfy, snack eaten simply for placing the stomach in any event. For example, twisties, potato chips and so on.'),
(6, 'Grocery', 'Foodstuffs and various household supplies. For example, flour, canned sardines, cooking oil, rice, sugar, salt, chili sauce, and others'),
(7, 'Confectionery', 'Candy and other sweets considered collectively. For examples, cadbury, kitkat, lolipop and others.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
