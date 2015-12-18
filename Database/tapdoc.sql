-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 04:32 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `am`
--

INSERT INTO `am` (`a_ID`, `a_NoiDung`, `a_DuongDanGhiAm`, `a_BaiHoc`) VALUES
(1, 'a', 'upload/GhiAm/Am/a.wav', 2),
(2, 'á', 'upload/GhiAm/Am/a sac.wav', 2),
(3, 'à', 'upload/GhiAm/Am/a huyen.wav', 2),
(4, 'ạ', 'upload/GhiAm/Am/a nang.wav', 2),
(5, 'ã', 'upload/GhiAm/Am/a nga.wav', 2),
(6, 'ả', 'upload/GhiAm/Am/a hoi.wav', 2);

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
  `bh_SoLanChon` int(11) NOT NULL,
  PRIMARY KEY (`bh_ID`),
  KEY `fk_baihoc_loaibaihoc_idx` (`bh_LoaiBaiHoc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `baihoc`
--

INSERT INTO `baihoc` (`bh_ID`, `bh_TenBaiHoc`, `bh_LoaiBaiHoc`, `bh_NgayTao`, `bh_HinhDaiDien`, `bh_SoLanChon`) VALUES
(1, 'Bài 1', 2, '2015-12-04 00:00:00', 'upload/HinhAnh/doccau.png', 10),
(2, 'Âm "a"', 1, '2015-12-08 00:00:00', 'upload/HinhAnh/Am/bangchucai.png', 11),
(3, 'Hình Ảnh 1', 4, '2015-12-08 00:00:00', 'upload/HinhAnh/HinhAnh/bangchucai.png', 12);

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

-- --------------------------------------------------------

--
-- Table structure for table `gioitinh`
--

CREATE TABLE IF NOT EXISTS `gioitinh` (
  `gt_ID` int(11) NOT NULL AUTO_INCREMENT,
  `gt_LoaiGioiTinh` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`gt_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gioitinh`
--

INSERT INTO `gioitinh` (`gt_ID`, `gt_LoaiGioiTinh`) VALUES
(1, 'Nam'),
(2, 'Nữ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`ha_ID`, `ha_NoiDung`, `ha_DuongDanHinhAnh`, `ha_DuongDanGhiAm`, `ha_BaiHoc`) VALUES
(1, 'Con Bò', 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/HinhAnh/con bo.mp3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lichsubaihoc`
--

CREATE TABLE IF NOT EXISTS `lichsubaihoc` (
  `lsbh_ID` int(11) NOT NULL AUTO_INCREMENT,
  `lsbh_TaiKhoan` int(11) NOT NULL,
  `lsbh_BaiHoc` int(11) NOT NULL,
  `lsbh_ThoiGian` datetime NOT NULL,
  `lsbh_SoLanHoc` int(11) NOT NULL,
  PRIMARY KEY (`lsbh_ID`),
  KEY `fk_lichsubaihoc_baihoc_idx` (`lsbh_BaiHoc`),
  KEY `fk_lichsubaihoc_taikhoan_idx` (`lsbh_TaiKhoan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lichsubaihoc`
--

INSERT INTO `lichsubaihoc` (`lsbh_ID`, `lsbh_TaiKhoan`, `lsbh_BaiHoc`, `lsbh_ThoiGian`, `lsbh_SoLanHoc`) VALUES
(2, 1, 1, '2015-12-17 00:00:00', 2),
(3, 1, 2, '2015-12-18 19:20:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lichsubaitap`
--

CREATE TABLE IF NOT EXISTS `lichsubaitap` (
  `lsbt_ID` int(11) NOT NULL AUTO_INCREMENT,
  `lsbt_TaiKhoan` int(11) NOT NULL,
  `lsbt_BaiTap` int(11) NOT NULL,
  `lsbt_NgayLam` datetime NOT NULL,
  `lsbt_SoCauDung` int(11) NOT NULL,
  `lsbt_DiemSo` float NOT NULL,
  PRIMARY KEY (`lsbt_ID`),
  KEY `fk_lichsubaitap_taikhoan_idx` (`lsbt_TaiKhoan`),
  KEY `fk_lichsubaitap_baitap_idx` (`lsbt_BaiTap`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lichsubaitap`
--

INSERT INTO `lichsubaitap` (`lsbt_ID`, `lsbt_TaiKhoan`, `lsbt_BaiTap`, `lsbt_NgayLam`, `lsbt_SoCauDung`, `lsbt_DiemSo`) VALUES
(1, 1, 1, '2015-12-18 10:01:45', 1, 1),
(2, 1, 1, '2015-12-18 10:06:18', 2, 2),
(3, 1, 1, '2015-12-18 02:39:23', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `loaibaihoc`
--

CREATE TABLE IF NOT EXISTS `loaibaihoc` (
  `lbh_ID` int(11) NOT NULL AUTO_INCREMENT,
  `lbh_LoaiBaiHoc` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`lbh_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `loaibaihoc`
--

INSERT INTO `loaibaihoc` (`lbh_ID`, `lbh_LoaiBaiHoc`) VALUES
(1, 'Phát Âm Theo Âm'),
(2, 'Phát Âm Từ ngữ'),
(3, 'Phát ÂM Theo Câu'),
(4, 'Phát Âm Theo Hình Ảnh');

-- --------------------------------------------------------

--
-- Table structure for table `loainguoidung`
--

CREATE TABLE IF NOT EXISTS `loainguoidung` (
  `lnd_ID` int(11) NOT NULL AUTO_INCREMENT,
  `lnd_LoaiNguoiDung` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`lnd_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `loainguoidung`
--

INSERT INTO `loainguoidung` (`lnd_ID`, `lnd_LoaiNguoiDung`) VALUES
(1, 'Học sinh'),
(2, 'Quản trị');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `tk_ID` int(11) NOT NULL AUTO_INCREMENT,
  `tk_HoTen` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tk_GioiTinh` int(11) NOT NULL,
  `tk_TenDangNhap` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tk_MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tk_DangNhapLanCuoi` datetime NOT NULL,
  `tk_LoaiNguoiDung` int(11) NOT NULL,
  PRIMARY KEY (`tk_ID`),
  KEY `fk_taikhoan_gioitinh_idx` (`tk_GioiTinh`),
  KEY `fk_taikhoan_loainguoidung_idx` (`tk_LoaiNguoiDung`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tk_ID`, `tk_HoTen`, `tk_GioiTinh`, `tk_TenDangNhap`, `tk_MatKhau`, `tk_DangNhapLanCuoi`, `tk_LoaiNguoiDung`) VALUES
(1, 'ABC', 1, 'test', '123', '0000-00-00 00:00:00', 1),
(3, 'asdasfds', 1, 'test123', '123456', '0000-00-00 00:00:00', 1),
(6, 'Hoc Sinh', 1, 'hocsinh123', '123456', '0000-00-00 00:00:00', 1),
(7, 'fghdgdfg', 1, 'testasdfs', 'asfdfsdg', '0000-00-00 00:00:00', 1),
(8, 'sdfsdf', 1, 'abc1234', '1234567', '0000-00-00 00:00:00', 1),
(9, 'sdfgdsgdf', 2, 'hoangnam123', '1234567', '0000-00-00 00:00:00', 1),
(10, 'Nguyễn Văn A', 1, 'hocsinhabc', '1234567', '0000-00-00 00:00:00', 1),
(11, 'Nguyễn Văn V', 1, 'hocsinh123', '1234567', '0000-00-00 00:00:00', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tu`
--

INSERT INTO `tu` (`t_ID`, `t_NoiDung`, `t_DuongDanGhiAm`, `t_BaiHoc`) VALUES
(1, 'Con heo', 'upload/GhiAm/Tu/con heo.mp3', 1),
(2, 'Con bò', 'upload/GhiAm/Tu/con bo.mp3', 1),
(3, 'Con cá', 'upload/GhiAm/Tu/con ca.mp3', 1),
(4, 'Con chuột', 'upload/GhiAm/Tu/con chuot.mp3', 1),
(5, 'Con gấu', 'upload/GhiAm/Tu/con gau.mp3', 1),
(6, 'Con khỉ', 'upload/GhiAm/Tu/con khi.mp3', 1),
(7, 'Con mèo', 'upload/GhiAm/Tu/con meo.mp3', 1),
(8, 'Con ngựa', 'upload/GhiAm/Tu/con ngua.mp3', 1),
(9, 'Con trâu', 'upload/GhiAm/Tu/con trau.mp3', 1),
(10, 'Con voi', 'upload/GhiAm/Tu/con voi.mp3', 1);

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
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `fk_cauhoi_baitap` FOREIGN KEY (`ch_BaiTap`) REFERENCES `baitap` (`bt_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lichsubaihoc`
--
ALTER TABLE `lichsubaihoc`
  ADD CONSTRAINT `fk_lichsubaihoc_baihoc` FOREIGN KEY (`lsbh_BaiHoc`) REFERENCES `baihoc` (`bh_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lichsubaihoc_taikhoan` FOREIGN KEY (`lsbh_TaiKhoan`) REFERENCES `taikhoan` (`tk_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lichsubaitap`
--
ALTER TABLE `lichsubaitap`
  ADD CONSTRAINT `fk_lichsubaitap_baitap` FOREIGN KEY (`lsbt_BaiTap`) REFERENCES `baitap` (`bt_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lichsubaitap_taikhoan` FOREIGN KEY (`lsbt_TaiKhoan`) REFERENCES `taikhoan` (`tk_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_taikhoan_gioitinh` FOREIGN KEY (`tk_GioiTinh`) REFERENCES `gioitinh` (`gt_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_taikhoan_loainguoidung` FOREIGN KEY (`tk_LoaiNguoiDung`) REFERENCES `loainguoidung` (`lnd_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tu`
--
ALTER TABLE `tu`
  ADD CONSTRAINT `fk_tu_baihoc` FOREIGN KEY (`t_BaiHoc`) REFERENCES `baihoc` (`bh_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
