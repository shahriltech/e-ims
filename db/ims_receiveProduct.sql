-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2016 at 01:21 AM
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
-- Table structure for table `ims_receiveProduct`
--

CREATE TABLE IF NOT EXISTS `ims_receiveProduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ims_productId` int(11) DEFAULT NULL,
  `ims_dateInvoice` varchar(50) DEFAULT NULL,
  `ims_invoiceNo` int(11) DEFAULT NULL,
  `ims_qtyRec` int(11) DEFAULT NULL,
  `ims_totalPrice` decimal(10,2) DEFAULT NULL,
  `ims_productDesc` varchar(100) DEFAULT NULL,
  `ims_receiveBy` int(11) DEFAULT NULL,
  `ims_dateCreate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ims_receiveProduct`
--

INSERT INTO `ims_receiveProduct` (`id`, `ims_productId`, `ims_dateInvoice`, `ims_invoiceNo`, `ims_qtyRec`, `ims_totalPrice`, `ims_productDesc`, `ims_receiveBy`, `ims_dateCreate`) VALUES
(4, 2, '05/05/2016', 12345, 1, 6.00, 'rwrwr', 7, '04/05/2016'),
(5, 1, NULL, NULL, 1, 5.00, 'weeee', 7, '04/05/2016'),
(6, 2, NULL, NULL, 1, 5.00, 'ttrtr', 7, '04/05/2016'),
(7, 1, '05/05/2016', 55555, 1, 5.00, 'yyyyy', 7, '04/05/2016'),
(8, 2, '05/05/2016', 55555, 1, 5.00, 'qqqq', 7, '04/05/2016'),
(9, 3, '07/05/2016', 777777, 5, 5.00, 'hhhhh', 7, '04/05/2016'),
(10, 4, '07/05/2016', 777777, 5, 5.00, 'uuuu', 7, '04/05/2016'),
(11, 5, '12/05/2016', 6666555, 2, 5.00, 'qq', 7, '11/05/2016'),
(12, 32, '12/05/2016', 6666555, 9, 5.00, 'll', 7, '11/05/2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
