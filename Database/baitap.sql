-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2015 at 03:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tapdoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `baitap`
--

CREATE TABLE IF NOT EXISTS `baitap` (
  `bt_ID` int(11) NOT NULL AUTO_INCREMENT,
  `bt_TieuDe` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `bt_NgayTao` datetime DEFAULT NULL,
  PRIMARY KEY (`bt_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `baitap`
--

INSERT INTO `baitap` (`bt_ID`, `bt_TieuDe`, `bt_NgayTao`) VALUES
(1, 'bài 1', '0000-00-00 00:00:00'),
(2, 'bài 2', '0000-00-00 00:00:00'),
(3, 'bài 3', '0000-00-00 00:00:00'),
(4, 'bài 4', '0000-00-00 00:00:00'),
(5, 'bài 5', '0000-00-00 00:00:00'),
(6, 'bài 6', '0000-00-00 00:00:00'),
(7, 'bài 7', '0000-00-00 00:00:00'),
(8, 'bài 8', '0000-00-00 00:00:00'),
(9, 'bài 9', '0000-00-00 00:00:00'),
(10, 'bài 10', '0000-00-00 00:00:00'),
(11, 'bài 11', '0000-00-00 00:00:00'),
(12, 'bài 12', '0000-00-00 00:00:00'),
(13, 'bài 13', '0000-00-00 00:00:00'),
(14, 'bài 14', '0000-00-00 00:00:00'),
(15, 'bài 15', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
