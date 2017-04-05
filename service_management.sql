-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 04:02 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wwwudaip_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_management`
--

CREATE TABLE IF NOT EXISTS `service_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `sub_service_id` int(11) NOT NULL,
  `categroy_type` varchar(200) NOT NULL COMMENT '1==Discount 2== Door To Door',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `service_management`
--

INSERT INTO `service_management` (`id`, `vendor_id`, `service_id`, `sub_service_id`, `categroy_type`) VALUES
(1, 1, 1, 1, '2'),
(2, 2, 1, 2, '2'),
(3, 19, 1, 3, '2'),
(4, 4, 1, 4, '2'),
(5, 5, 1, 5, '2'),
(6, 5, 1, 6, '2'),
(7, 2, 1, 10, '2'),
(8, 20, 1, 11, '2'),
(9, 7, 1, 12, '2'),
(10, 8, 2, 23, '2'),
(11, 9, 2, 14, '2'),
(12, 9, 2, 15, '2'),
(13, 9, 2, 16, '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
