-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2016 at 11:24 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-kims`
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

-- --------------------------------------------------------

--
-- Table structure for table `ims_product`
--

CREATE TABLE IF NOT EXISTS `ims_product` (
  `ims_productId` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
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
(0000000001, 'Mi Sedap Goreng', 1.00, '91G x 5pcs', 10, 6, 3, '46295831', '09/04/2016'),
(0000000002, 'Mi Sedap Sambal Goreng', 1.00, '88G x 5pcs', 10, 6, 3, '62371894', '09/04/2016'),
(0000000003, 'Maggi Noodle Kari', 3.00, '79gG x 5pcs', 10, 6, 5, '21458739', '09/04/2016'),
(0000000004, 'Maggi Noodle Chicken Flavour', 3.00, '77gG x 5pcs', 10, 6, 5, '43958167', '09/04/2016'),
(0000000005, 'Maggi Noodle Assam Laksa', 4.00, '78G x 5pcs', 10, 6, 5, '82967431', '09/04/2016'),
(0000000006, 'Maggi Noodle Tom Yam', 4.50, '83G x 5pcs', 10, 6, 5, '69524813', '09/04/2016'),
(0000000007, 'Maggi Mi Goreng Kari Ori', 4.00, '83G x 5pcs', 10, 6, 5, '38946275', '09/04/2016'),
(0000000008, 'Maggi BIG Noodles Kari', 5.50, '111G x 5pcs', 10, 6, 5, '57421896', '09/04/2016'),
(0000000009, 'Maggi Big Ayam', 5.50, '108G x 5pcs', 10, 6, 5, '29831675', '09/04/2016'),
(0000000010, 'Maggi Hot Cup Kari Kick', 1.80, '64G x 1pcs', 10, 6, 5, '52439718', '09/04/2016'),
(0000000011, 'Maggi Hot Cup Sup Ayam Special', 1.80, '64G x 1pcs', 10, 6, 5, '82715369', '09/04/2016'),
(0000000012, 'Maggi Hot Cup Tom Yam Kaw', 2.00, '72G x 1pcs', 10, 6, 5, '32759186', '09/04/2016'),
(0000000013, 'Maggi Cukup Rasa', 3.10, '100g', 10, 6, 5, '78516392', '09/04/2016'),
(0000000014, 'Kiub Pati Ayam Maggi', 5.50, '120g', 10, 6, 5, '78269415', '09/04/2016'),
(0000000015, 'Sos Cili Maggi', 2.90, '340g x 1pcs', 10, 6, 5, '93784651', '09/04/2016'),
(0000000016, 'Sos Tomato Maggi', 2.70, '325g x 1pcs', 10, 6, 5, '93457286', '09/04/2016'),
(0000000017, 'Sos Cili Thai Maggi', 3.60, '350g x 1pcs', 10, 6, 5, '81357694', '09/04/2016'),
(0000000018, 'Sos Tiram Maggi', 4.80, '340g x 1pcs', 10, 6, 5, '69478521', '09/04/2016'),
(0000000019, 'MARIGOLD HL Low Fat Milk Original', 6.00, '1 LITRE', 5, 2, 7, '62853714', '09/04/2016'),
(0000000020, 'MARIGOLD HL Low Fat Milk Chocolate', 6.00, '1 LITRE', 5, 2, 7, '16894532', '09/04/2016'),
(0000000021, 'MARIGOLD HL Low Fat Milk Strawberry', 6.00, '1 LITRE', 5, 2, 7, '54893712', '09/04/2016'),
(0000000022, 'MARIGOLD HL Low Fat Milk Original (200ML)', 2.30, '200 ML', 5, 2, 7, '79814263', '09/04/2016'),
(0000000023, 'MARIGOLD HL Low Fat Milk Choc (200ML)', 2.30, '200 ML', 5, 2, 7, '81459763', '09/04/2016'),
(0000000024, 'MARIGOLD HL Low Fat Milk Strawberry (200ML)', 2.30, '200 ML', 5, 2, 7, '72946185', '09/04/2016'),
(0000000025, 'MARIGOLD UHT Milk (250 ML)', 8.50, '250ML x 6pcs', 12, 2, 7, '75683921', '09/04/2016'),
(0000000026, 'Marigold Chocolate Flavoured Milk 6 x 250ml', 8.50, '250ML x 6pcs', 12, 2, 7, '85296731', '09/04/2016'),
(0000000027, 'Marigold Strawberry Flavoured Milk 6 x 250ml', 8.50, '250ML x 6pcs', 12, 2, 7, '29465718', '09/04/2016'),
(0000000028, 'MARIGOLD PEEL FRESH 1 Liter', 6.00, '1 LITRE', 5, 3, 7, '78269541', '09/04/2016'),
(0000000029, 'MARIGOLD PEEL FRESH 250ML', 2.20, '250ML', 5, 3, 7, '41759328', '09/04/2016'),
(0000000030, 'MARIGOLD UHT Fruit Drink Apple', 1.50, '250ML x 6pcs', 6, 3, 7, '21453879', '09/04/2016'),
(0000000031, 'MARIGOLD UHT Fruit Drink Orange', 1.50, '250ML x 6pcs', 6, 3, 7, '67125834', '09/04/2016'),
(0000000032, 'MARIGOLD UHT Fruit Drink Grape', 1.50, '250ML x 6pcs', 6, 3, 7, '12567349', '09/04/2016'),
(0000000033, 'MARIGOLD UHT Fruit Drink Mango', 1.50, '250ML x 6pcs', 6, 3, 7, '29168743', '09/04/2016'),
(0000000034, 'MARIGOLD Low Fat Yogurt Natural', 1.80, '135G', 3, 2, 7, '79362158', '09/04/2016'),
(0000000035, 'MARIGOLD Low Fat Yogurt Strawberry', 1.80, '135g', 3, 2, 7, '63794251', '09/04/2016'),
(0000000036, 'MARIGOLD Asian Drinks Chrysanthemum', 1.50, '250ML x 6pcs', 6, 3, 7, '58247391', '09/04/2016'),
(0000000037, 'MARIGOLD Asian Drinks Soya Bean', 1.50, '250ML x 6pcs', 6, 3, 7, '56724983', '09/04/2016'),
(0000000038, 'MARIGOLD Asian Drinks Lychee', 1.50, '250ML x 6pcs', 6, 3, 7, '59483276', '09/04/2016');

-- --------------------------------------------------------

--
-- Table structure for table `ims_purchaseOrder`
--

CREATE TABLE IF NOT EXISTS `ims_purchaseOrder` (
  `ims_purchaseId` int(11) NOT NULL AUTO_INCREMENT,
  `ims_purchaseDate` varchar(50) DEFAULT NULL,
  `ims_orderBy` int(11) DEFAULT NULL,
  `ims_productId` int(11) DEFAULT NULL,
  `ims_productQty` int(11) NOT NULL,
  `ims_productTotalprice` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`ims_purchaseId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ims_role`
--

CREATE TABLE IF NOT EXISTS `ims_role` (
  `ims_roleId` int(11) NOT NULL AUTO_INCREMENT,
  `ims_roleName` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ims_roleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ims_role`
--

INSERT INTO `ims_role` (`ims_roleId`, `ims_roleName`) VALUES
(1, 'Admin'),
(2, 'Employee');

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

-- --------------------------------------------------------

--
-- Table structure for table `ims_user`
--

CREATE TABLE IF NOT EXISTS `ims_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ims_fname` varchar(250) DEFAULT NULL,
  `ims_address` varchar(300) DEFAULT NULL,
  `ims_phone` varchar(50) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `ims_nickname` varchar(100) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `auth_key` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '10',
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ims_user`
--

INSERT INTO `ims_user` (`id`, `ims_fname`, `ims_address`, `ims_phone`, `role`, `ims_nickname`, `password_hash`, `auth_key`, `status`, `email`) VALUES
(4, 'shahril', 'shah alam', '0195676442', 1, 'shahril9', '$2y$13$57p13OMo/cZw6iVmSM4c/OeenhwJnKqcYusvRKOnUi9eF29wbVswu', 'wjOiM_b1gPfoVxqh0XAvYvMV870tcYOt', 10, 'silenttech9@gmail.com'),
(7, 'Muhammad Hariz Bin Zubair', 'Sitiwan, Perak', '019123456', 2, 'hariz', '$2y$13$NBWAlZCZ5b2Ky6GmdzEBdumPZud.z31mFeuZ457kGdjem2gAiPB7W', 'OAc6bsgTZZYo7Dzeg6J2w3go8HkoBzcW', 10, 'hariz@gmail.com'),
(9, 'Muhamad Farid Bin Fariz', 'Tambun Ipoh, \r\nPerak', '0124122313', 2, 'farid', '$2y$13$vwNhirU7ReA4cp.UVMDscOzV7O.H7KaQZUNwTLKBck4z.ENQi7wKq', 'xOWYTEhoO94tKJBb36bZpjD0PSgBWn3U', 10, 'farid@gmai.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
