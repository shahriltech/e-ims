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
-- Table structure for table `ims_product`
--

CREATE TABLE IF NOT EXISTS `ims_product` (
  `ims_productId` int(10) NOT NULL AUTO_INCREMENT,
  `ims_productName` varchar(250) DEFAULT NULL,
  `ims_productPrice` decimal(10,2) DEFAULT NULL,
  `ims_productDesc` varchar(250) DEFAULT NULL,
  `ims_totalProductQty` int(11) DEFAULT NULL,
  `ims_categoryId` int(11) DEFAULT NULL,
  `ims_supplierId` int(11) DEFAULT NULL,
  `ims_barcodeProduct` varchar(50) DEFAULT NULL,
  `ims_dateCreate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ims_productId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `ims_product`
--

INSERT INTO `ims_product` (`ims_productId`, `ims_productName`, `ims_productPrice`, `ims_productDesc`, `ims_totalProductQty`, `ims_categoryId`, `ims_supplierId`, `ims_barcodeProduct`, `ims_dateCreate`) VALUES
(1, 'Mi Sedap Goreng', 1.00, '91G x 5pcs', 13, 6, 3, '46295831', '09/04/2016'),
(2, 'Mi Sedap Sambal Goreng', 1.00, '88G x 5pcs', 13, 6, 3, '62371894', '09/04/2016'),
(3, 'Maggi Noodle Kari', 3.00, '79gG x 5pcs', 19, 6, 5, '21458739', '09/04/2016'),
(4, 'Maggi Noodle Chicken Flavour', 3.00, '77gG x 5pcs', 15, 6, 5, '43958167', '09/04/2016'),
(5, 'Maggi Noodle Assam Laksa', 4.00, '78G x 5pcs', 12, 6, 5, '82967431', '09/04/2016'),
(6, 'Maggi Noodle Tom Yam', 4.50, '83G x 5pcs', 10, 6, 5, '69524813', '09/04/2016'),
(7, 'Maggi Mi Goreng Kari Ori', 4.00, '83G x 5pcs', 10, 6, 5, '38946275', '09/04/2016'),
(8, 'Maggi BIG Noodles Kari', 5.50, '111G x 5pcs', 10, 6, 5, '57421896', '09/04/2016'),
(9, 'Maggi Big Ayam', 5.50, '108G x 5pcs', 10, 6, 5, '29831675', '09/04/2016'),
(10, 'Maggi Hot Cup Kari Kick', 1.80, '64G x 1pcs', 10, 6, 5, '52439718', '09/04/2016'),
(11, 'Maggi Hot Cup Sup Ayam Special', 1.80, '64G x 1pcs', 10, 6, 5, '82715369', '09/04/2016'),
(12, 'Maggi Hot Cup Tom Yam Kaw', 2.00, '72G x 1pcs', 10, 6, 5, '32759186', '09/04/2016'),
(13, 'Maggi Cukup Rasa', 3.10, '100g', 10, 6, 5, '78516392', '09/04/2016'),
(14, 'Kiub Pati Ayam Maggi', 5.50, '120g', 10, 6, 5, '78269415', '09/04/2016'),
(15, 'Sos Cili Maggi', 2.90, '340g x 1pcs', 10, 6, 5, '93784651', '09/04/2016'),
(16, 'Sos Tomato Maggi', 2.70, '325g x 1pcs', 10, 6, 5, '93457286', '09/04/2016'),
(17, 'Sos Cili Thai Maggi', 3.60, '350g x 1pcs', 10, 6, 5, '81357694', '09/04/2016'),
(18, 'Sos Tiram Maggi', 4.80, '340g x 1pcs', 10, 6, 5, '69478521', '09/04/2016'),
(19, 'MARIGOLD HL Low Fat Milk Original', 6.00, '1 LITRE', 5, 2, 7, '62853714', '09/04/2016'),
(20, 'MARIGOLD HL Low Fat Milk Chocolate', 6.00, '1 LITRE', 5, 2, 7, '16894532', '09/04/2016'),
(21, 'MARIGOLD HL Low Fat Milk Strawberry', 6.00, '1 LITRE', 5, 2, 7, '54893712', '09/04/2016'),
(22, 'MARIGOLD HL Low Fat Milk Original (200ML)', 2.30, '200 ML', 5, 2, 7, '79814263', '09/04/2016'),
(23, 'MARIGOLD HL Low Fat Milk Choc (200ML)', 2.30, '200 ML', 5, 2, 7, '81459763', '09/04/2016'),
(24, 'MARIGOLD HL Low Fat Milk Strawberry (200ML)', 2.30, '200 ML', 5, 2, 7, '72946185', '09/04/2016'),
(25, 'MARIGOLD UHT Milk (250 ML)', 8.50, '250ML x 6pcs', 12, 2, 7, '75683921', '09/04/2016'),
(26, 'Marigold Chocolate Flavoured Milk 6 x 250ml', 8.50, '250ML x 6pcs', 12, 2, 7, '85296731', '09/04/2016'),
(27, 'Marigold Strawberry Flavoured Milk 6 x 250ml', 8.50, '250ML x 6pcs', 12, 2, 7, '29465718', '09/04/2016'),
(28, 'MARIGOLD PEEL FRESH 1 Liter', 6.00, '1 LITRE', 5, 3, 7, '78269541', '09/04/2016'),
(29, 'MARIGOLD PEEL FRESH 250ML', 2.20, '250ML', 5, 3, 7, '41759328', '09/04/2016'),
(30, 'MARIGOLD UHT Fruit Drink Apple', 1.50, '250ML x 6pcs', 6, 3, 7, '21453879', '09/04/2016'),
(31, 'MARIGOLD UHT Fruit Drink Orange', 1.50, '250ML x 6pcs', 6, 3, 7, '67125834', '09/04/2016'),
(32, 'MARIGOLD UHT Fruit Drink Grape', 1.50, '250ML x 6pcs', 15, 3, 7, '12567349', '09/04/2016'),
(33, 'MARIGOLD UHT Fruit Drink Mango', 1.50, '250ML x 6pcs', 6, 3, 7, '29168743', '09/04/2016'),
(34, 'MARIGOLD Low Fat Yogurt Natural', 1.80, '135G', 3, 2, 7, '79362158', '09/04/2016'),
(35, 'MARIGOLD Low Fat Yogurt Strawberry', 1.80, '135g', 3, 2, 7, '63794251', '09/04/2016'),
(36, 'MARIGOLD Asian Drinks Chrysanthemum', 1.50, '250ML x 6pcs', 6, 3, 7, '58247391', '09/04/2016'),
(37, 'MARIGOLD Asian Drinks Soya Bean', 1.50, '250ML x 6pcs', 6, 3, 7, '56724983', '09/04/2016'),
(38, 'MARIGOLD Asian Drinks Lychee', 1.50, '250ML x 6pcs', 6, 3, 7, '59483276', '09/04/2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
