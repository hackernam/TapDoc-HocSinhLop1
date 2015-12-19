-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2015 at 06:09 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapdoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `am`
--

CREATE TABLE `am` (
  `a_ID` int(11) NOT NULL,
  `a_NoiDung` varchar(50) CHARACTER SET utf8 NOT NULL,
  `a_DuongDanGhiAm` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `a_BaiHoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `baihoc` (
  `bh_ID` int(11) NOT NULL,
  `bh_TenBaiHoc` varchar(150) CHARACTER SET utf8 NOT NULL,
  `bh_LoaiBaiHoc` int(11) NOT NULL,
  `bh_NgayTao` datetime NOT NULL,
  `bh_HinhDaiDien` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bh_SoLanChon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(18, 'Bài 3', 4, '2015-12-04 00:00:00', 'upload/HinhAnh/HinhAnh/bong_bong.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `baitap`
--

CREATE TABLE `baitap` (
  `bt_ID` int(11) NOT NULL,
  `bt_TieuDe` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `bt_NgayTao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `cau` (
  `c_ID` int(11) NOT NULL,
  `c_NoiDung` varchar(200) CHARACTER SET utf8 NOT NULL,
  `c_DuongDanGhiAm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `c_BaiHoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cau`
--

INSERT INTO `cau` (`c_ID`, `c_NoiDung`, `c_DuongDanGhiAm`, `c_BaiHoc`) VALUES
(1, 'Cánh đồng xanh rì', 'upload/GhiAm/Am/a.wav', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `ch_ID` int(11) NOT NULL,
  `ch_BaiTap` int(11) NOT NULL,
  `ch_DuongDanHinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ch_DuongDanGhiAm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ch_LuaChon1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ch_LuaChon2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ch_LuaChon3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ch_LuaChon4` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ch_DapAn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `gioitinh` (
  `gt_ID` int(11) NOT NULL,
  `gt_LoaiGioiTinh` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `hinhanh` (
  `ha_ID` int(11) NOT NULL,
  `ha_NoiDung` varchar(150) CHARACTER SET utf8 NOT NULL,
  `ha_DuongDanHinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ha_DuongDanGhiAm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ha_BaiHoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`ha_ID`, `ha_NoiDung`, `ha_DuongDanHinhAnh`, `ha_DuongDanGhiAm`, `ha_BaiHoc`) VALUES
(1, 'Con Bò', 'upload/HinhAnh/HinhAnh/conbo.jpg', 'upload/GhiAm/Hinh/con bo.mp3', 3),
(2, 'Cám', 'upload/HinhAnh/HinhAnh/cam.png', 'upload/GhiAm/Hinh/cam.mp3', 3),
(3, 'Chiếc lá', 'upload/HinhAnh/HinhAnh/chiec_la.png', 'upload/GhiAm/Hinh/chiec_la.mp3', 17),
(4, 'Con Dao', 'upload/HinhAnh/HinhAnh/con_dao.png', 'upload/GhiAm/Hinh/con_dao.mp3', 17),
(5, 'Lâu Đài', 'upload/HinhAnh/HinhAnh/lau_dai.png', 'upload/GhiAm/Hinh/lau_dai.mp3', 18);

-- --------------------------------------------------------

--
-- Table structure for table `lichsubaihoc`
--

CREATE TABLE `lichsubaihoc` (
  `lsbh_ID` int(11) NOT NULL,
  `lsbh_TaiKhoan` int(11) NOT NULL,
  `lsbh_BaiHoc` int(11) NOT NULL,
  `lsbh_ThoiGian` datetime NOT NULL,
  `lsbh_SoLanHoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lichsubaihoc`
--

INSERT INTO `lichsubaihoc` (`lsbh_ID`, `lsbh_TaiKhoan`, `lsbh_BaiHoc`, `lsbh_ThoiGian`, `lsbh_SoLanHoc`) VALUES
(2, 1, 1, '2015-12-17 00:00:00', 9),
(3, 1, 2, '2015-12-18 19:20:54', 8),
(4, 1, 3, '2015-12-18 23:04:16', 8),
(5, 1, 4, '2015-12-18 23:48:13', 6),
(6, 1, 5, '2015-12-19 00:27:14', 6),
(7, 1, 6, '2015-12-19 00:35:49', 2),
(8, 1, 8, '2015-12-19 00:46:14', 1),
(9, 1, 11, '2015-12-19 09:19:08', 6),
(10, 1, 12, '2015-12-19 09:29:19', 6),
(11, 1, 13, '2015-12-19 09:37:06', 1),
(12, 1, 14, '2015-12-19 09:42:05', 3),
(13, 1, 15, '2015-12-19 09:45:34', 2),
(14, 1, 16, '2015-12-19 09:47:29', 8),
(15, 1, 17, '2015-12-19 09:48:44', 13),
(16, 1, 18, '2015-12-19 10:26:14', 5);

-- --------------------------------------------------------

--
-- Table structure for table `lichsubaitap`
--

CREATE TABLE `lichsubaitap` (
  `lsbt_ID` int(11) NOT NULL,
  `lsbt_TaiKhoan` int(11) NOT NULL,
  `lsbt_BaiTap` int(11) NOT NULL,
  `lsbt_NgayLam` datetime NOT NULL,
  `lsbt_SoCauDung` int(11) NOT NULL,
  `lsbt_DiemSo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `loaibaihoc` (
  `lbh_ID` int(11) NOT NULL,
  `lbh_LoaiBaiHoc` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `loainguoidung` (
  `lnd_ID` int(11) NOT NULL,
  `lnd_LoaiNguoiDung` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `taikhoan` (
  `tk_ID` int(11) NOT NULL,
  `tk_HoTen` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tk_GioiTinh` int(11) NOT NULL,
  `tk_TenDangNhap` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tk_MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tk_DangNhapLanCuoi` datetime NOT NULL,
  `tk_LoaiNguoiDung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `tu` (
  `t_ID` int(11) NOT NULL,
  `t_NoiDung` varchar(100) CHARACTER SET utf8 NOT NULL,
  `t_DuongDanGhiAm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `t_BaiHoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `am`
--
ALTER TABLE `am`
  ADD PRIMARY KEY (`a_ID`),
  ADD KEY `fk_am_baihoc_idx` (`a_BaiHoc`);

--
-- Indexes for table `baihoc`
--
ALTER TABLE `baihoc`
  ADD PRIMARY KEY (`bh_ID`),
  ADD KEY `fk_baihoc_loaibaihoc_idx` (`bh_LoaiBaiHoc`);

--
-- Indexes for table `baitap`
--
ALTER TABLE `baitap`
  ADD PRIMARY KEY (`bt_ID`);

--
-- Indexes for table `cau`
--
ALTER TABLE `cau`
  ADD PRIMARY KEY (`c_ID`),
  ADD KEY `fk_cau_baihoc_idx` (`c_BaiHoc`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`ch_ID`),
  ADD KEY `fk_cauhoi_baitap_idx` (`ch_BaiTap`);

--
-- Indexes for table `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`gt_ID`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`ha_ID`);

--
-- Indexes for table `lichsubaihoc`
--
ALTER TABLE `lichsubaihoc`
  ADD PRIMARY KEY (`lsbh_ID`),
  ADD KEY `fk_lichsubaihoc_baihoc_idx` (`lsbh_BaiHoc`),
  ADD KEY `fk_lichsubaihoc_taikhoan_idx` (`lsbh_TaiKhoan`);

--
-- Indexes for table `lichsubaitap`
--
ALTER TABLE `lichsubaitap`
  ADD PRIMARY KEY (`lsbt_ID`),
  ADD KEY `fk_lichsubaitap_taikhoan_idx` (`lsbt_TaiKhoan`),
  ADD KEY `fk_lichsubaitap_baitap_idx` (`lsbt_BaiTap`);

--
-- Indexes for table `loaibaihoc`
--
ALTER TABLE `loaibaihoc`
  ADD PRIMARY KEY (`lbh_ID`);

--
-- Indexes for table `loainguoidung`
--
ALTER TABLE `loainguoidung`
  ADD PRIMARY KEY (`lnd_ID`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tk_ID`),
  ADD KEY `fk_taikhoan_gioitinh_idx` (`tk_GioiTinh`),
  ADD KEY `fk_taikhoan_loainguoidung_idx` (`tk_LoaiNguoiDung`);

--
-- Indexes for table `tu`
--
ALTER TABLE `tu`
  ADD PRIMARY KEY (`t_ID`),
  ADD KEY `fk_tu_baihoc_idx` (`t_BaiHoc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `am`
--
ALTER TABLE `am`
  MODIFY `a_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `baihoc`
--
ALTER TABLE `baihoc`
  MODIFY `bh_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `baitap`
--
ALTER TABLE `baitap`
  MODIFY `bt_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cau`
--
ALTER TABLE `cau`
  MODIFY `c_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `ch_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `gt_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `ha_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lichsubaihoc`
--
ALTER TABLE `lichsubaihoc`
  MODIFY `lsbh_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `lichsubaitap`
--
ALTER TABLE `lichsubaitap`
  MODIFY `lsbt_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `loaibaihoc`
--
ALTER TABLE `loaibaihoc`
  MODIFY `lbh_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `loainguoidung`
--
ALTER TABLE `loainguoidung`
  MODIFY `lnd_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `tk_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tu`
--
ALTER TABLE `tu`
  MODIFY `t_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
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
