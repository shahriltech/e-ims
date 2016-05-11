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
-- Table structure for table `ims_purchaseOrder`
--

CREATE TABLE IF NOT EXISTS `ims_purchaseOrder` (
  `ims_purchaseId` int(11) NOT NULL AUTO_INCREMENT,
  `ims_supplierId` int(11) DEFAULT NULL,
  `ims_productId` int(11) DEFAULT NULL,
  `ims_productQty` int(11) DEFAULT NULL,
  `ims_productTotalprice` decimal(10,2) DEFAULT NULL,
  `ims_orderBy` int(11) DEFAULT NULL,
  `ims_purchaseDate` varchar(50) DEFAULT NULL,
  `ims_invoicePurchaseno` varchar(20) DEFAULT NULL,
  `ims_statusOrder` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ims_purchaseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ims_purchaseOrder`
--

INSERT INTO `ims_purchaseOrder` (`ims_purchaseId`, `ims_supplierId`, `ims_productId`, `ims_productQty`, `ims_productTotalprice`, `ims_orderBy`, `ims_purchaseDate`, `ims_invoicePurchaseno`, `ims_statusOrder`) VALUES
(1, 5, 3, 2, 6.00, 7, '08 May 2016', '7519063', 'Pending'),
(2, 5, 16, 7, 18.90, 7, '08 May 2016', '4265307', 'Pending'),
(3, 5, 18, 4, 19.20, 7, '08 May 2016', '4265307', 'Pending'),
(4, 3, 1, 6, 6.00, 7, '08 May 2016', '1985034', 'Pending'),
(5, 3, 2, 6, 6.00, 7, '08 May 2016', '1985034', 'Pending'),
(6, 7, 37, 5, 7.50, 7, '08 May 2016', '8041269', 'Pending'),
(9, 5, 13, 3, 9.30, 7, '09 May 2016', '6831549', 'Pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
