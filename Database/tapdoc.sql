-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2016 at 02:39 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `am`
--

INSERT INTO `am` (`a_ID`, `a_NoiDung`, `a_DuongDanGhiAm`, `a_BaiHoc`) VALUES
(1, 'a', 'upload/GhiAm/Am/a.wav', 2),
(2, 'á', 'upload/GhiAm/Am/a sac.wav', 2),
(3, 'à', 'upload/GhiAm/Am/a huyen.wav', 2),
(4, 'ạ', 'upload/GhiAm/Am/a nang.wav', 2),
(5, 'ã', 'upload/GhiAm/Am/a nga.wav', 2),
(6, 'ả', 'upload/GhiAm/Am/a hoi.wav', 2),
(7, 'B', 'upload/GhiAm/Am/b.mp3', 5),
(8, 'C', 'upload/GhiAm/Am/c.mp3', 6),
(9, 'D', 'upload/GhiAm/Am/d.mp3', 7),
(10, 'Đ', 'upload/GhiAm/Am/đ.mp3', 8),
(11, 'E', 'upload/GhiAm/Am/e.mp3', 9),
(12, 'Ê', 'upload/GhiAm/Am/ê.mp3', 10);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `baihoc`
--

INSERT INTO `baihoc` (`bh_ID`, `bh_TenBaiHoc`, `bh_LoaiBaiHoc`, `bh_NgayTao`, `bh_HinhDaiDien`, `bh_SoLanChon`) VALUES
(1, 'Bài 1', 2, '2015-12-04 00:00:00', 'upload/HinhAnh/doccau.png', 10),
(2, 'Âm "a"', 1, '2015-12-08 00:00:00', 'upload/HinhAnh/Am/bangchucai.png', 11),
(3, 'Bài 1', 4, '2015-12-08 00:00:00', 'upload/HinhAnh/HinhAnh/bangchucai.png', 12),
(4, 'Bài 1', 3, '2015-12-18 00:00:00', 'upload/HinhAnh/Cau/bangchucai.png', 1),
(5, 'Bài 2', 1, '2015-12-19 00:00:00', 'upload/HinhAnh/Am/conbo.jpg', 0),
(6, 'Bài 3', 1, '2015-12-19 00:00:00', 'upload/HinhAnh/Am/conca.jpg', 0),
(7, 'Bài 4', 1, '2015-12-19 00:00:00', 'upload/HinhAnh/Am/conde.jpg', 0),
(8, 'Bài 5', 1, '2015-12-19 00:00:00', 'upload/HinhAnh/Am/bodoi.jpg', 0),
(9, 'Bài 6', 1, '2015-12-19 00:00:00', 'upload/HinhAnh/Am/conve.jpg', 0),
(10, 'Bài 7', 1, '2015-12-19 00:00:00', 'upload/HinhAnh/Am/caighe.jpg', 0),
(11, 'Bài 2', 2, '2015-12-04 00:00:00', 'upload/HinhAnh/caica.png', 0),
(12, 'Bài 3', 2, '2015-12-04 00:00:00', 'upload/HinhAnh/xemay.jpg', 0),
(13, 'Bài 4', 2, '2015-12-04 00:00:00', 'upload/HinhAnh/dudu.jpg', 0),
(14, 'Bài 5', 2, '2015-12-04 00:00:00', 'upload/HinhAnh/quacam.jpg', 0),
(15, 'Bài 6', 2, '2015-12-04 00:00:00', 'upload/HinhAnh/quanho.jpg', 0),
(16, 'Bài 7', 2, '2015-12-04 00:00:00', 'upload/HinhAnh/conga.jpg', 0),
(17, 'Bài 2', 4, '2015-12-04 00:00:00', 'upload/HinhAnh/HinhAnh/cai_khan.png', 0),
(18, 'Bài 3', 4, '2015-12-04 00:00:00', 'upload/HinhAnh/HinhAnh/bong_bong.png', 0),
(19, 'Bài 2', 3, '2015-12-28 00:00:00', 'upload/HinhAnh/Cau/bo.jpg', 0),
(20, 'Bài 3', 3, '2015-12-28 00:00:00', 'upload/HinhAnh/Cau/be.png', 0),
(21, 'Bài 4', 3, '2015-12-28 00:00:00', 'upload/HinhAnh/Cau/keo.jpg', 0),
(22, 'Bài 5', 3, '2015-12-28 00:00:00', 'upload/HinhAnh/Cau/boho.gif', 0),
(23, 'Bài 6', 3, '2015-12-28 00:00:00', 'upload/HinhAnh/Cau/qua.jpg', 0),
(24, 'Bài 7', 3, '2015-12-28 00:00:00', 'upload/HinhAnh/Cau/du.jpg', 0),
(25, 'Bài 8', 3, '2015-12-28 00:00:00', 'upload/HinhAnh/Cau/xe.png', 0),
(26, 'Bài 9', 3, '2015-12-28 00:00:00', 'upload/HinhAnh/Cau/yen.jpg', 0),
(27, 'Bài 10', 3, '2015-12-28 00:00:00', 'upload/HinhAnh/Cau/yen.jpg', 0),
(28, 'Bài 4', 4, '2015-12-28 00:00:00', 'upload/HinhAnh/HinhAnh/chim.png', 0),
(29, 'Bài 5', 4, '2015-12-28 00:00:00', 'upload/HinhAnh/HinhAnh/cho.gif', 0),
(30, 'Bài 6', 4, '2015-12-28 00:00:00', 'upload/HinhAnh/HinhAnh/trau.png', 0),
(31, 'Bài 7', 4, '2015-12-28 00:00:00', 'upload/HinhAnh/HinhAnh/tre.png', 0),
(32, 'Bài 8', 4, '2015-12-28 00:00:00', 'upload/HinhAnh/HinhAnh/antoan.jpg', 0),
(33, 'Bài 9', 4, '2015-12-28 00:00:00', 'upload/HinhAnh/HinhAnh/lam.gif', 0),
(34, 'Bài 10', 4, '2015-12-28 00:00:00', 'upload/HinhAnh/HinhAnh/am.jpg', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `cau`
--

INSERT INTO `cau` (`c_ID`, `c_NoiDung`, `c_DuongDanGhiAm`, `c_BaiHoc`) VALUES
(1, 'Ba câu cá', 'upload/GhiAm/Cau/bacauca.mp3', 4),
(2, 'Ba em làm trên rẫy', 'upload/GhiAm/Cau/baemlamtrenray.mp3', 4),
(3, 'Ba tặng quà', 'upload/GhiAm/Cau/batangqua.mp3', 4),
(4, 'Nhà em có một con bò', 'upload/GhiAm/Cau/nhaemcomotconbo.mp3', 4),
(5, 'Con bò ăn cỏ', 'upload/GhiAm/Cau/conboanco.mp3', 19),
(6, 'Cây dừa cao chót vót', 'upload/GhiAm/Cau/cayduacaochotvot.mp3', 19),
(7, 'Em đạt được điểm cao', 'upload/GhiAm/Cau/emdatduocdiemcao.mp3', 19),
(8, 'Ve kêu hè về', 'upload/GhiAm/Cau/vekeuheve.mp3', 19),
(9, 'Bé vẽ bê', 'upload/GhiAm/Cau/bevebe.mp3', 20),
(10, 'Gà gáy mỗi sáng', 'upload/GhiAm/Cau/gagaymoisang.mp3', 20),
(11, 'Em thích ca hát', 'upload/GhiAm/Cau/emthichcahat.mp3', 20),
(12, 'Em chơi bắn bi', 'upload/GhiAm/Cau/emchoibanbi.mp3', 20),
(13, 'Đây là cây kéo', 'upload/GhiAm/Cau/daylacaykeo.mp3', 21),
(14, 'Em thích ăn lê', 'upload/GhiAm/Cau/emthichanle.mp3', 21),
(15, 'Meo mẹ chăm mèo con', 'upload/GhiAm/Cau/meomechammeocon.mp3', 21),
(16, 'Em là nam, em gái là nữ', 'upload/GhiAm/Cau/emlanamemgailanu.mp3', 21),
(17, 'Con cò đi trên cỏ', 'upload/GhiAm/Cau/concoditrenco.mp3', 22),
(18, 'Ô tô chạy trên đường', 'upload/GhiAm/Cau/otochaytrenduong.mp3', 22),
(19, 'Em đi dạo bờ hồ', 'upload/GhiAm/Cau/emdidaoboho.mp3', 22),
(20, 'Em ăn phở trên phố', 'upload/GhiAm/Cau/emanphotrenpho.mp3', 22),
(21, 'Quạ không ăn quýt', 'upload/GhiAm/Cau/quakhonganquyt.mp3', 23),
(22, 'Em để cá trong rổ', 'upload/GhiAm/Cau/emdecatrongro.mp3', 23),
(23, 'Con sáo màu đen', 'upload/GhiAm/Cau/consaomauden.mp3', 23),
(24, 'Dượng sáu em nuôi tôm', 'upload/GhiAm/Cau/duongsauemnuoitom.mp3', 23),
(25, 'Ông cụ cầm cây dù', 'upload/GhiAm/Cau/ongcucamcaydu.mp3', 24),
(26, 'Em thích môn lịch sử', 'upload/GhiAm/Cau/emthichmonlichsu.mp3', 24),
(27, 'Chim yến bay trên trời', 'upload/GhiAm/Cau/chimyenbaytrentroi.mp3', 24),
(28, 'Em thích nuôi chó', 'upload/GhiAm/Cau/emthichnuoicho.mp3', 24),
(29, 'Em thích nuôi chó', 'upload/GhiAm/Cau/emthichnuoicho.mp3', 25),
(30, 'Trâu nằm dưới lũy tre', 'upload/GhiAm/Cau/traunamduoiluytre.mp3', 25),
(31, 'Bà ngồi trên ghế', 'upload/GhiAm/Cau/bangoitrenghe.mp3', 25),
(32, 'Thời gian là vàng bạc', 'upload/GhiAm/Cau/thoigianlavangbac.mp3', 25),
(33, 'Ông cụ cầm cây dù', 'upload/GhiAm/Cau/ongcucamcaydu.mp3', 26),
(34, 'Thời gian là vàng bạc', 'upload/GhiAm/Cau/thoigianlavangbac.mp3', 26),
(35, 'Chị ngã em nâng', 'upload/GhiAm/Cau/chingaemnang.mp3', 26),
(36, 'Mẹ em thích nghe nhạc', 'upload/GhiAm/Cau/meemthichnghenhac.mp3', 26),
(37, 'Nhà em ở quận năm', 'upload/GhiAm/Cau/nhaemoquannam.mp3', 27),
(38, 'Bà em thổi bếp mỗi sáng', 'upload/GhiAm/Cau/baemthoibepmoisang.mp3', 27),
(39, 'Khỉ ăn khế', 'upload/GhiAm/Cau/khiankhe.mp3', 27),
(40, 'Bác em là bác sĩ', 'upload/GhiAm/Cau/bacemlabacsi.mp3', 27);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

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
(9, 1, 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Tu/con bo.mp3', 'DA 1', 'DA 2', 'DA 3', 'DA 4', 1),
(10, 2, 'upload/HinhAnh/BaiTap/bong_bong.png', 'upload/GhiAm/BaiTap/bong_bong.mp3', 'Bong Bóng', 'Bóng Đá', 'Bóng Rổ', 'Bóng Bàn', 1),
(11, 2, 'upload/HinhAnh/BaiTap/cai_khan.png', 'upload/GhiAm/BaiTap/cai_khan.mp3', 'Tấm Thảm', 'Cái Khăn', 'Cái Áo', 'Cái Màn', 2),
(12, 2, 'upload/HinhAnh/BaiTap/con_ca.png', 'upload/GhiAm/BaiTap/con_ca.mp3', 'Con Gà', 'Con Mèo', 'Con Heo', 'Con Cá', 4),
(13, 3, 'upload/HinhAnh/BaiTap/cam.png', 'upload/GhiAm/BaiTap/cam.mp3', 'Gạo', 'Cơm', 'Cám', 'Xôi', 4),
(14, 3, 'upload/HinhAnh/BaiTap/chiec_la.png', 'upload/GhiAm/BaiTap/chiec_la.mp3', 'Cành Cây', 'Gốc Cây', 'Chiếc Lá', 'Thân Cây', 2),
(15, 4, 'upload/HinhAnh/BaiTap/con_dao.png', 'upload/GhiAm/BaiTap/con_dao.mp3', 'Chiếc Rìu', 'Con Dao', 'Cây Búa', 'Cây Súng', 2),
(16, 4, 'upload/HinhAnh/BaiTap/con_de.png', 'upload/GhiAm/BaiTap/con_de.mp3', 'Con Dê', 'Con Bò', 'Con Gà', 'Con Trâu', 1),
(17, 5, 'upload/HinhAnh/BaiTap/lau_dai.png', 'upload/GhiAm/BaiTap/lau_dai.mp3', 'Cái Nhà', 'Cái Bếp', 'Cái Cây', 'Lâu Đài', 4),
(19, 5, 'upload/HinhAnh/BaiTap/trai_banh.png', 'upload/GhiAm/BaiTap/trai_banh.mp3', 'Cái Cam', 'Trai Bưởi', 'Trái Banh', 'Trai Ổi', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`ha_ID`, `ha_NoiDung`, `ha_DuongDanHinhAnh`, `ha_DuongDanGhiAm`, `ha_BaiHoc`) VALUES
(1, 'Con Bò', 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Hinh/con bo.mp3', 3),
(2, 'Cám', 'upload/HinhAnh/HinhAnh/cam.png', 'upload/GhiAm/Hinh/cam.mp3', 3),
(3, 'Chiếc lá', 'upload/HinhAnh/HinhAnh/chiec_la.png', 'upload/GhiAm/Hinh/chiec_la.mp3', 17),
(4, 'Con Dao', 'upload/HinhAnh/HinhAnh/con_dao.png', 'upload/GhiAm/Hinh/con_dao.mp3', 17),
(5, 'Lâu Đài', 'upload/HinhAnh/HinhAnh/lau_dai.png', 'upload/GhiAm/Hinh/lau_dai.mp3', 18),
(6, 'Hòa Tấu', 'upload/HinhAnh/HinhAnh/hoatau.png', 'upload/GhiAm/Hinh/hoatau.mp3', 18),
(7, 'Bờ đê', 'upload/HinhAnh/HinhAnh/bo_de.png', 'upload/GhiAm/Hinh/bo_de.mp3', 28),
(8, 'Con gà', 'upload/HinhAnh/HinhAnh/con_ga.png', 'upload/GhiAm/Hinh/con_ga.mp3', 29),
(9, 'Trái lê', 'upload/HinhAnh/HinhAnh/trai_le.png', 'upload/GhiAm/Hinh/trai_le.mp3', 28),
(10, 'Gãy', 'upload/HinhAnh/HinhAnh/gay.png', 'upload/GhiAm/Hinh/gay.mp3', 29),
(11, 'Hình vẽ', 'upload/HinhAnh/HinhAnh/hinh_ve.png', 'upload/GhiAm/Hinh/hinh_ve.mp3', 30),
(12, 'Học bài', 'upload/HinhAnh/HinhAnh/hoc_bai.png', 'upload/GhiAm/Hinh/hoc_bai.mp3', 30),
(13, 'Hòn bi', 'upload/HinhAnh/HinhAnh/hon_bi.png', 'upload/GhiAm/Hinh/hon_bi.mp3', 31),
(14, 'Trái bí', 'upload/HinhAnh/HinhAnh/trai_bi.png', 'upload/GhiAm/Hinh/trai_bi.mp3', 31),
(15, 'La hét', 'upload/HinhAnh/HinhAnh/la_het.png', 'upload/GhiAm/Hinh/la_het.mp3', 32),
(16, 'Lò xo', 'upload/HinhAnh/HinhAnh/lo_xo.png', 'upload/GhiAm/Hinh/lo_xo.mp3', 32),
(17, 'Con mèo', 'upload/HinhAnh/HinhAnh/con_meo.png', 'upload/GhiAm/Hinh/con_meo.mp3', 33),
(18, 'Mẹ', 'upload/HinhAnh/HinhAnh/me.png', 'upload/GhiAm/Hinh/me.mp3', 33),
(19, 'Cái nhà', 'upload/HinhAnh/HinhAnh/cai_nha.png', 'upload/GhiAm/Hinh/cai_nha.mp3', 34),
(20, 'Trái nho', 'upload/HinhAnh/HinhAnh/trai_nho.png', 'upload/GhiAm/Hinh/trai_nho.mp3', 34);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `lichsubaihoc`
--

INSERT INTO `lichsubaihoc` (`lsbh_ID`, `lsbh_TaiKhoan`, `lsbh_BaiHoc`, `lsbh_ThoiGian`, `lsbh_SoLanHoc`) VALUES
(2, 1, 1, '2015-12-17 00:00:00', 10),
(3, 1, 2, '2015-12-18 19:20:54', 10),
(4, 1, 3, '2015-12-18 23:04:16', 8),
(5, 1, 4, '2015-12-18 23:48:13', 13),
(6, 1, 5, '2015-12-19 00:27:14', 6),
(7, 1, 6, '2015-12-19 00:35:49', 2),
(8, 1, 8, '2015-12-19 00:46:14', 2),
(9, 1, 11, '2015-12-19 09:19:08', 6),
(10, 1, 12, '2015-12-19 09:29:19', 7),
(11, 1, 13, '2015-12-19 09:37:06', 1),
(12, 1, 14, '2015-12-19 09:42:05', 3),
(13, 1, 15, '2015-12-19 09:45:34', 2),
(14, 1, 16, '2015-12-19 09:47:29', 8),
(15, 1, 17, '2015-12-19 09:48:44', 14),
(16, 1, 18, '2015-12-19 10:26:14', 10),
(17, 1, 19, '2015-12-28 09:28:44', 7),
(18, 1, 20, '2015-12-28 09:36:16', 11),
(19, 1, 21, '2015-12-28 10:01:36', 6),
(20, 1, 22, '2015-12-28 10:15:31', 8),
(21, 1, 23, '2015-12-28 10:33:13', 5),
(22, 1, 24, '2015-12-28 10:41:18', 6),
(23, 1, 25, '2015-12-28 10:55:01', 10),
(24, 1, 26, '2015-12-28 11:08:59', 8),
(25, 1, 27, '2015-12-28 11:15:00', 8),
(26, 1, 28, '2015-12-28 11:44:44', 6),
(27, 1, 29, '2015-12-28 11:44:49', 8),
(28, 1, 30, '2015-12-28 12:02:19', 4),
(29, 1, 31, '2015-12-28 12:38:27', 4),
(30, 1, 32, '2015-12-28 12:44:31', 5),
(31, 1, 33, '2015-12-28 12:48:49', 7),
(32, 1, 34, '2015-12-28 12:53:08', 5),
(33, 1, 7, '2015-12-31 18:24:53', 1),
(34, 1, 10, '2015-12-31 18:24:59', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lichsubaitap`
--

INSERT INTO `lichsubaitap` (`lsbt_ID`, `lsbt_TaiKhoan`, `lsbt_BaiTap`, `lsbt_NgayLam`, `lsbt_SoCauDung`, `lsbt_DiemSo`) VALUES
(1, 1, 1, '2015-12-18 10:01:45', 1, 1),
(2, 1, 1, '2015-12-18 10:06:18', 2, 2),
(3, 1, 1, '2015-12-18 02:39:23', 4, 4),
(4, 1, 1, '2015-12-18 06:05:59', 1, 1),
(5, 1, 1, '2015-12-18 06:07:20', 0, 0),
(6, 1, 1, '2015-12-18 06:09:15', 1, 1),
(7, 1, 1, '2015-12-18 06:11:04', 0, 0),
(8, 1, 1, '2015-12-18 06:13:50', 0, 0),
(9, 1, 1, '2015-12-18 06:14:36', 0, 0),
(10, 1, 1, '2015-12-18 06:15:58', 0, 0),
(11, 1, 1, '2015-12-18 06:17:09', 1, 1),
(12, 1, 1, '2015-12-19 04:55:53', 1, 1),
(13, 1, 2, '2015-12-19 05:09:15', 1, 1),
(14, 1, 2, '2015-12-19 05:10:12', 2, 2),
(15, 1, 2, '2015-12-19 05:13:05', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

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
(10, 'Con voi', 'upload/GhiAm/Tu/con voi.mp3', 1),
(15, 'Con dê', 'upload/GhiAm/Tu/con de.mp3\r\n', 11),
(16, 'Bộ đội', 'upload/GhiAm/Tu/bộ đội.mp3\r\n', 11),
(17, 'Con Ve', 'upload/GhiAm/Tu/con ve.mp3\r\n', 11),
(18, 'Cái Ghế', 'upload/GhiAm/Tu/cái ghế.mp3\r\n', 11),
(19, 'Con Gà', 'upload/GhiAm/Tu/con gà.mp3\r\n', 12),
(20, 'Bông Hoa', 'upload/GhiAm/Tu/bông hoa.mp3\r\n', 12),
(21, 'Đi Học', 'upload/GhiAm/Tu/đi học.mp3\r\n', 12),
(22, 'Que kem', 'upload/GhiAm/Tu/que kem.mp3\r\n', 12),
(23, 'Con Lợn', 'upload/GhiAm/Tu/con lợn.mp3\r\n', 13),
(24, 'Mặt Trời', 'upload/GhiAm/Tu/mattroi.mp3\r\n', 13),
(25, 'Ca No', 'upload/GhiAm/Tu/cano.mp3\r\n', 13),
(26, 'Quả Nho', 'upload/GhiAm/Tu/quanho.mp3\r\n', 13),
(27, 'Ô Tô', 'upload/GhiAm/Tu/oto.mp3\r\n', 14),
(28, 'Quả Bơ', 'upload/GhiAm/Tu/quabo.mp3\r\n', 14),
(29, 'Quả Cam', 'upload/GhiAm/Tu/quacam.mp3\r\n', 14),
(30, 'Chai Rượu', 'upload/GhiAm/Tu/chairuou.mp3\r\n', 14),
(31, 'Sung Sướng', 'upload/GhiAm/Tu/sungsuong.mp3\r\n', 15),
(32, 'Quả Táo', 'upload/GhiAm/Tu/quatao.mp3\r\n', 15),
(33, 'Đu Đủ', 'upload/GhiAm/Tu/dudu.mp3\r\n', 15),
(34, 'Củ Từ', 'upload/GhiAm/Tu/cutu.mp3\r\n', 15),
(35, 'Vui Vẻ', 'upload/GhiAm/Tu/vuive.mp3\r\n', 16),
(36, 'Xe Máy', 'upload/GhiAm/Tu/xemay.mp3\r\n', 16),
(37, 'Y Tá', 'upload/GhiAm/Tu/y tá.mp3\r\n', 16);

-- --------------------------------------------------------

--
-- Table structure for table `xepchu`
--

CREATE TABLE IF NOT EXISTS `xepchu` (
  `xc_ID` int(11) NOT NULL,
  `xc_level` int(11) NOT NULL,
  `xc_DuongDanHinhAnh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xc_DuongDanGhiAm` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xc_NoiDung` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `xc_Khoa` int(11) NOT NULL,
  PRIMARY KEY (`xc_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `xepchu`
--

INSERT INTO `xepchu` (`xc_ID`, `xc_level`, `xc_DuongDanHinhAnh`, `xc_DuongDanGhiAm`, `xc_NoiDung`, `xc_Khoa`) VALUES
(1, 1, 'upload/HinhAnh/BaiTap/bong_bong.png', 'upload/GhiAm/BaiTap/bong_bong.mp3', 'Bong Bóng', 0),
(2, 2, 'upload/HinhAnh/BaiTap/cai_khan.png', 'upload/GhiAm/BaiTap/cai_khan.mp3', 'Cái Khăn', 1),
(3, 3, 'upload/HinhAnh/BaiTap/con_ca.png', 'upload/GhiAm/BaiTap/con_ca.mp3', 'Con Cá', 1),
(4, 4, 'upload/HinhAnh/BaiTap/chiec_la.png', 'upload/GhiAm/BaiTap/chiec_la.mp3', 'Chiếc Lá', 1),
(5, 5, 'upload/HinhAnh/BaiTap/con_dao.png', 'upload/GhiAm/BaiTap/con_dao.mp3', 'Con Dao', 1),
(6, 6, 'upload/HinhAnh/BaiTap/con_de.png', 'upload/GhiAm/BaiTap/con_de.mp3', 'Con Dê', 1),
(7, 7, 'upload/HinhAnh/BaiTap/lau_dai.png', 'upload/GhiAm/BaiTap/lau_dai.mp3', 'Lâu Đài', 1),
(8, 8, 'upload/HinhAnh/BaiTap/trai_banh.png', 'upload/GhiAm/BaiTap/trai_banh.mp3', 'Trái Banh', 1),
(9, 9, 'upload/HinhAnh/BaiTap/bong_bong.png', 'upload/GhiAm/BaiTap/bong_bong.mp3', 'Bong Bóng', 1),
(10, 10, 'upload/HinhAnh/BaiTap/bong_bong.png', 'upload/GhiAm/BaiTap/bong_bong.mp3', 'Bong Bóng', 1),
(11, 11, 'upload/HinhAnh/BaiTap/cai_khan.png', 'upload/GhiAm/BaiTap/cai_khan.mp3', 'Cái Khăn', 1),
(12, 12, 'upload/HinhAnh/BaiTap/con_ca.png', 'upload/GhiAm/BaiTap/con_ca.mp3', 'Con Cá', 1),
(13, 13, 'upload/HinhAnh/BaiTap/chiec_la.png', 'upload/GhiAm/BaiTap/chiec_la.mp3', 'Chiếc Lá', 1),
(14, 14, 'upload/HinhAnh/BaiTap/con_dao.png', 'upload/GhiAm/BaiTap/con_dao.mp3', 'Con Dao', 1),
(15, 15, 'upload/HinhAnh/BaiTap/con_de.png', 'upload/GhiAm/BaiTap/con_de.mp3', 'Con Dê', 1),
(16, 16, 'upload/HinhAnh/BaiTap/lau_dai.png', 'upload/GhiAm/BaiTap/lau_dai.mp3', 'Lâu Đài', 1),
(17, 17, 'upload/HinhAnh/BaiTap/trai_banh.png', 'upload/GhiAm/BaiTap/trai_banh.mp3', 'Trái Banh', 1);

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
