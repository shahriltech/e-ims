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
-- Table structure for table `ims_supplier`
--

CREATE TABLE IF NOT EXISTS `ims_supplier` (
  `ims_supplierId` int(11) NOT NULL AUTO_INCREMENT,
  `ims_supplierName` varchar(250) DEFAULT NULL,
  `ims_supplierPhone` varchar(250) DEFAULT NULL,
  `ims_supplierAddress` varchar(250) DEFAULT NULL,
  `ims_supplierEmail` varchar(200) DEFAULT NULL,
  `ims_supplierOfficephone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ims_supplierId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ims_supplier`
--

INSERT INTO `ims_supplier` (`ims_supplierId`, `ims_supplierName`, `ims_supplierPhone`, `ims_supplierAddress`, `ims_supplierEmail`, `ims_supplierOfficephone`) VALUES
(1, 'F&N Beverages Marketing Sdn Bhd', '0195676442', 'Jalan Bukit Belimbing 26/28, 40400 Shah Alam, Selangor, Malaysia', 'silenttech9@gmail.com', '+60 3-5101 4288'),
(2, 'PERMANIS SDN BHD', '0195676442', '5, Jalan P/5, Seksyen 13, Kawasan Perushaan, bandar Baru Bangi, 43650, Bandar Baru Bangi, Selangor, Malaysia', 'silenttech9@gmail.com', '+60 3-8725 3333'),
(3, 'Southern Products Marketing Sdn. Bhd', '0195676442', '66-70, Jalan Dato Hamzah, Klang, 41000, Klang, Selangor, 41000, Malaysia', 'silenttech9@gmail.com', '+60 3-3372 2024'),
(4, 'Gardenia Bakeries (KL) Sdn Bhd', '0195676442', 'Lot, 3, Jalan Pelabur 23/1, Kawasan Miel, 40300 Shah Alam, Selangor, Malaysia', 'silenttech9@gmail.com', '+60 3-5542 3228'),
(5, 'Nestle Products Sdn Bhd', '0195676442', '22-1, 22nd Floor, Menara Surian,, No.1, Jalan PJU 7/3, Mutiara Damansara, 47810 Petaling Jaya, Selangor, Malaysia', 'silenttech9@gmail.com', '+60 3-7965 6000'),
(6, 'Cadbury Confectionery Malaysia Sdn Bhd', '0195676442', 'No. 8,, Persiaran Raja Muda, Seksyen 15, 40200 Shah Alam, Selangor, Malaysia', 'silenttech9@gmail.com', '+60 3-5544 5200'),
(7, 'Cotra Enterprises Sdn Bhd', '0195676442', 'No. 7, Jalan 19/1, 46300 Petaling Jaya, Selangor Darul Ehsan, Malaysia', 'silenttech9@gmail.com', '+603-7955 4388'),
(8, 'Mondelez Malaysia Sales Sdn Bhd', '0195676442', 'Level 9, 1 First Avenue, 2A, Dataran Bandar Utama Bandar Utama Damasara 47800 Petaling Jaya, Selangor, Malaysia', 'silenttech9@gmail.com', ' +603 7872 6688'),
(9, 'Yeo Hiap Seng (Malaysia) Bhd.', '0195676442', '7, Jalan Tandang 204a, Seksyen 51, 46050 Petaling Jaya, Selangor, Malaysia', 'silenttech9@gmail.com', '+60 3-7787 3888');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
