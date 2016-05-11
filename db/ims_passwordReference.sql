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
-- Table structure for table `ims_passwordReference`
--

CREATE TABLE IF NOT EXISTS `ims_passwordReference` (
  `ims_passrefId` int(11) NOT NULL AUTO_INCREMENT,
  `ims_password` varchar(20) DEFAULT NULL,
  `ims_userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`ims_passrefId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ims_passwordReference`
--

INSERT INTO `ims_passwordReference` (`ims_passrefId`, `ims_password`, `ims_userid`) VALUES
(1, 'shahril9', 4),
(3, 'hariz', 7),
(5, '1234567', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
