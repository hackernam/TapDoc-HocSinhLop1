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
-- Table structure for table `cauhoi`
--

CREATE TABLE IF NOT EXISTS `cauhoi` (
  `ch_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ch_BaiTap` int(11) NOT NULL,
  `ch_DuongDanHinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ch_DuongDanGhiAm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ch_LuaChon1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ch_LuaChon2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ch_LuaChon3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ch_LuaChon4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ch_DapAn` int(11) NOT NULL,
  PRIMARY KEY (`ch_ID`),
  KEY `fk_cauhoi_baitap_idx` (`ch_BaiTap`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`ch_ID`, `ch_BaiTap`, `ch_DuongDanHinhAnh`, `ch_DuongDanGhiAm`, `ch_LuaChon1`, `ch_LuaChon2`, `ch_LuaChon3`, `ch_LuaChon4`, `ch_DapAn`) VALUES
(1, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 1),
(2, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 2),
(3, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 3),
(4, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 4),
(5, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 2),
(6, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 1),
(7, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 1),
(8, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 1),
(9, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `fk_cauhoi_baitap` FOREIGN KEY (`ch_BaiTap`) REFERENCES `baitap` (`bt_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
