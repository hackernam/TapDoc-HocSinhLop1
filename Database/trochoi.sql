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

CREATE TABLE IF NOT EXISTS `trochoi` (
  `tc_ID` int(11) NOT NULL AUTO_INCREMENT,
  `tc_TieuDe` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `tc_NgayTao` datetime DEFAULT NULL,
  PRIMARY KEY (`tc_ID`)
) 

--
-- Dumping data for table `trochoi`
--

INSERT INTO `trochoi` ( `tc_TieuDe`, `tc_NgayTao`) VALUES
( 'Xếp chữ', '0000-00-00 00:00:00')


CREATE TABLE `xepchu` (
  `xc_ID` int(11) NOT NULL,
  `xc_level` int(11) NOT NULL,
  `xc_DuongDanHinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `xc_DuongDanGhiAm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `xc_NoiDung` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `xc_Khoa` int(11) NOT NULL
  PRIMARY KEY (`xc_ID`)
)

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `xepchu` (`xc_ID`, `xc_level`, `xc_DuongDanHinhAnh`, `xc_DuongDanGhiAm`, `xc_NoiDung`, `xc_Khoa`) VALUES
(1, 1, 'upload/HinhAnh/BaiTap/bong_bong.png', 'upload/GhiAm/BaiTap/bong_bong.mp3', 'Bong Bóng', 0),
(2, 2, 'upload/HinhAnh/BaiTap/cai_khan.png', 'upload/GhiAm/BaiTap/cai_khan.mp3', 'Cái Khăn', 1),
(3, 3, 'upload/HinhAnh/BaiTap/con_ca.png', 'upload/GhiAm/BaiTap/con_ca.mp3', 'Con Cá', 1),
(4, 4, 'upload/HinhAnh/BaiTap/chiec_la.png', 'upload/GhiAm/BaiTap/chiec_la.mp3', 'Chiếc Lá', 1),
(5, 5, 'upload/HinhAnh/BaiTap/con_dao.png', 'upload/GhiAm/BaiTap/con_dao.mp3', 'Con Dao', 1),
(6, 6, 'upload/HinhAnh/BaiTap/con_de.png', 'upload/GhiAm/BaiTap/con_de.mp3', 'Con Dê', 1),
(7, 7, 'upload/HinhAnh/BaiTap/lau_dai.png', 'upload/GhiAm/BaiTap/lau_dai.mp3','Lâu Đài', 1),
(8, 8, 'upload/HinhAnh/BaiTap/trai_banh.png', 'upload/GhiAm/BaiTap/trai_banh.mp3', 'Trái Banh', 1)


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
