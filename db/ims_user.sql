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
