-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2015 at 03:40 AM
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
-- Table structure for table `am`
--

CREATE TABLE IF NOT EXISTS `am` (
  `a_ID` int(11) NOT NULL AUTO_INCREMENT,
  `a_NoiDung` varchar(50) CHARACTER SET utf8 NOT NULL,
  `a_DuongDanGhiAm` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `a_BaiHoc` int(11) NOT NULL,
  PRIMARY KEY (`a_ID`),
  KEY `fk_am_baihoc_idx` (`a_BaiHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `baihoc`
--

CREATE TABLE IF NOT EXISTS `baihoc` (
  `bh_ID` int(11) NOT NULL AUTO_INCREMENT,
  `bh_TenBaiHoc` varchar(150) CHARACTER SET utf8 NOT NULL,
  `bh_LoaiBaiHoc` int(11) NOT NULL,
  `bh_NgayTao` datetime NOT NULL,
  `bh_HinhDaiDien` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`bh_ID`),
  KEY `fk_baihoc_loaibaihoc_idx` (`bh_LoaiBaiHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cau`
--

CREATE TABLE IF NOT EXISTS `cau` (
  `c_ID` int(11) NOT NULL AUTO_INCREMENT,
  `c_NoiDung` varchar(200) CHARACTER SET utf8 NOT NULL,
  `c_DuongDanGhiAm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `c_BaiHoc` int(11) NOT NULL,
  PRIMARY KEY (`c_ID`),
  KEY `fk_cau_baihoc_idx` (`c_BaiHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gioitinh`
--

CREATE TABLE IF NOT EXISTS `gioitinh` (
  `gt_ID` int(11) NOT NULL AUTO_INCREMENT,
  `gt_LoaiGioiTinh` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`gt_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE IF NOT EXISTS `hinhanh` (
  `ha_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ha_NoiDung` varchar(150) CHARACTER SET utf8 NOT NULL,
  `ha_DuongDanHinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ha_DuongDanGhiAm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ha_BaiHoc` int(11) NOT NULL,
  PRIMARY KEY (`ha_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lichsubaihoc`
--

CREATE TABLE IF NOT EXISTS `lichsubaihoc` (
  `lsbh_ID` int(11) NOT NULL AUTO_INCREMENT,
  `lsbh_TaiKhoan` int(11) NOT NULL,
  `lsbh_BaiHoc` int(11) NOT NULL,
  `lsbh_ThoiGian` datetime NOT NULL,
  PRIMARY KEY (`lsbh_ID`),
  KEY `fk_lichsubaihoc_baihoc_idx` (`lsbh_BaiHoc`),
  KEY `fk_lichsubaihoc_taikhoan_idx` (`lsbh_TaiKhoan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loaibaihoc`
--

CREATE TABLE IF NOT EXISTS `loaibaihoc` (
  `lbh_ID` int(11) NOT NULL AUTO_INCREMENT,
  `lbh_LoaiBaiHoc` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`lbh_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `tk_ID` int(11) NOT NULL AUTO_INCREMENT,
  `tk_HoTen` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tk_GioiTinh` int(11) NOT NULL,
  `tk_TenDangNhap` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tk_MatKhau` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tk_ID`),
  KEY `fk_taikhoan_gioitinh_idx` (`tk_GioiTinh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tu`
--

CREATE TABLE IF NOT EXISTS `tu` (
  `t_ID` int(11) NOT NULL AUTO_INCREMENT,
  `t_NoiDung` varchar(100) CHARACTER SET utf8 NOT NULL,
  `t_DuongDanGhiAm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `t_BaiHoc` int(11) NOT NULL,
  PRIMARY KEY (`t_ID`),
  KEY `fk_tu_baihoc_idx` (`t_BaiHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `am`
--
ALTER TABLE `am`
  ADD CONSTRAINT `fk_am_baihoc` FOREIGN KEY (`a_BaiHoc`) REFERENCES `baihoc` (`bh_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `baihoc`
--
ALTER TABLE `baihoc`
  ADD CONSTRAINT `fk_baihoc_loaibaihoc` FOREIGN KEY (`bh_LoaiBaiHoc`) REFERENCES `loaibaihoc` (`lbh_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cau`
--
ALTER TABLE `cau`
  ADD CONSTRAINT `fk_cau_baihoc` FOREIGN KEY (`c_BaiHoc`) REFERENCES `baihoc` (`bh_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lichsubaihoc`
--
ALTER TABLE `lichsubaihoc`
  ADD CONSTRAINT `fk_lichsubaihoc_baihoc` FOREIGN KEY (`lsbh_BaiHoc`) REFERENCES `baihoc` (`bh_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lichsubaihoc_taikhoan` FOREIGN KEY (`lsbh_TaiKhoan`) REFERENCES `taikhoan` (`tk_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_taikhoan_gioitinh` FOREIGN KEY (`tk_GioiTinh`) REFERENCES `gioitinh` (`gt_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tu`
--
ALTER TABLE `tu`
  ADD CONSTRAINT `fk_tu_baihoc` FOREIGN KEY (`t_BaiHoc`) REFERENCES `baihoc` (`bh_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
