-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Okt 2016 pada 07.47
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_assta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_data_keluarga`
--

CREATE TABLE IF NOT EXISTS `as_data_keluarga` (
  `id_data_keluarga` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `hub_keluarga` int(11) NOT NULL COMMENT '0 : Pegawai 		1 : pasangan 		2 : anak',
  `nama_anggota` varchar(100) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL COMMENT '1:Laki-Laki, 0: Perempuan',
  `kandung` int(11) NOT NULL COMMENT '0 : Kandung 		1 : Bukan Kandung',
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_keg_sosial`
--

CREATE TABLE IF NOT EXISTS `as_keg_sosial` (
  `id_keg_sosial` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tahun_mulai` date NOT NULL,
  `tahun_selesai` date NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `jenis_organisasi` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_keluarga`
--

CREATE TABLE IF NOT EXISTS `as_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `status_pernikahan` tinyint(2) NOT NULL COMMENT '0 : Belum Menikah 		1 : Menikah 		2 : Janda 		3 : Duda',
  `nama_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `anak_kandung` int(11) NOT NULL,
  `bukan_anak_kandung` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `jumlah_saudara_kandung` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_keluarga`
--

INSERT INTO `as_keluarga` (`id_keluarga`, `id_pegawai`, `status_pernikahan`, `nama_pasangan`, `pekerjaan_pasangan`, `anak_kandung`, `bukan_anak_kandung`, `nama_ayah`, `nama_ibu`, `jumlah_saudara_kandung`) VALUES
(1, 7, 1, '-', '-', 0, 0, '-', '-', 0),
(2, 8, 1, '-', '-', 0, 0, '-', '-', 0),
(3, 9, 1, '-', '-', 0, 0, '-', '-', 0),
(4, 52, 1, '-', '-', 0, 0, '-', '-', 0),
(5, 51, 1, '-', '-', 0, 0, '-', '-', 0),
(6, 166, 1, '-', '-', 0, 0, '-', '-', 0),
(7, 108, 0, '-', '-', 0, 0, '-', '-', 0),
(8, 140, 1, '-', '-', 0, 0, '-', '-', 0),
(9, 47, 0, '-', '-', 0, 0, '-', '-', 0),
(10, 53, 1, '-', '-', 0, 0, '-', '-', 0),
(11, 24, 1, '-', '-', 0, 0, '-', '-', 0),
(12, 40, 1, '-', '-', 0, 0, '-', '-', 0),
(13, 156, 1, '-', '-', 0, 0, '-', '-', 0),
(14, 136, 1, '-', '-', 0, 0, '-', '-', 0),
(15, 187, 0, '-', '-', 0, 0, '-', '-', 0),
(16, 86, 1, '', '', 0, 0, '', '', 0),
(17, 54, 1, '', '', 0, 0, '', '', 0),
(18, 185, 1, '', '', 0, 0, '', '', 0),
(19, 204, 0, '', '', 0, 0, '', '', 0),
(20, 35, 0, '', '', 0, 0, '', '', 0),
(21, 55, 1, '', '', 0, 0, '', '', 0),
(22, 56, 1, '', '', 0, 0, '', '', 0),
(23, 93, 0, '', '', 0, 0, '', '', 0),
(24, 121, 0, '', '', 0, 0, '', '', 0),
(25, 205, 0, '', '', 0, 0, '', '', 0),
(26, 194, 0, '', '', 0, 0, '', '', 0),
(27, 113, 0, '', '', 0, 0, '', '', 0),
(28, 201, 0, '', '', 0, 0, '', '', 0),
(29, 148, 0, '', '', 0, 0, '', '', 0),
(30, 191, 0, '', '', 0, 0, '', '', 0),
(31, 117, 0, '', '', 0, 0, '', '', 0),
(32, 30, 0, '', '', 0, 0, '', '', 0),
(33, 44, 0, '', '', 0, 0, '', '', 0),
(34, 57, 1, '', '', 0, 0, '', '', 0),
(35, 198, 0, '', '', 0, 0, '', '', 0),
(36, 102, 0, '', '', 0, 0, '', '', 0),
(37, 42, 0, '', '', 0, 0, '', '', 0),
(38, 133, 1, '', '', 0, 0, '', '', 0),
(39, 134, 1, '', '', 0, 0, '', '', 0),
(40, 157, 1, '', '', 0, 0, '', '', 0),
(41, 58, 1, '', '', 0, 0, '', '', 0),
(42, 43, 0, '', '', 0, 0, '', '', 0),
(43, 150, 0, '', '', 0, 0, '', '', 0),
(44, 31, 0, '', '', 0, 0, '', '', 0),
(45, 10, 1, '', '', 0, 0, '', '', 0),
(46, 59, 1, '', '', 0, 0, '', '', 0),
(47, 135, 1, '', '', 0, 0, '', '', 0),
(48, 122, 0, '', '', 0, 0, '', '', 0),
(49, 129, 1, '', '', 0, 0, '', '', 0),
(50, 60, 1, '', '', 0, 0, '', '', 0),
(51, 158, 1, '', '', 0, 0, '', '', 0),
(52, 65, 1, '', '', 0, 0, '', '', 0),
(53, 159, 1, '', '', 0, 0, '', '', 0),
(54, 155, 1, '', '', 0, 0, '', '', 0),
(55, 64, 1, '', '', 0, 0, '', '', 0),
(56, 190, 1, '', '', 0, 0, '', '', 0),
(57, 137, 1, '', '', 0, 0, '', '', 0),
(58, 63, 1, '', '', 0, 0, '', '', 0),
(59, 160, 1, '', '', 0, 0, '', '', 0),
(60, 62, 1, '', '', 0, 0, '', '', 0),
(61, 111, 1, '', '', 0, 0, '', '', 0),
(62, 123, 0, '', '', 0, 0, '', '', 0),
(63, 11, 1, '', '', 0, 0, '', '', 0),
(64, 39, 0, '', '', 0, 0, '', '', 0),
(65, 104, 1, '', '', 0, 0, '', '', 0),
(66, 12, 1, '', '', 0, 0, '', '', 0),
(67, 97, 1, '', '', 0, 0, '', '', 0),
(68, 105, 1, '', '', 0, 0, '', '', 0),
(69, 130, 1, '', '', 0, 0, '', '', 0),
(70, 182, 0, '', '', 0, 0, '', '', 0),
(71, 26, 1, '', '', 0, 0, '', '', 0),
(72, 161, 1, '', '', 0, 0, '', '', 0),
(73, 197, 0, '', '', 0, 0, '', '', 0),
(74, 49, 1, '', '', 0, 0, '', '', 0),
(75, 61, 1, '', '', 0, 0, '', '', 0),
(76, 199, 0, '', '', 0, 0, '', '', 0),
(77, 37, 0, '', '', 0, 0, '', '', 0),
(78, 85, 0, '', '', 0, 0, '', '', 0),
(79, 33, 0, '', '', 0, 0, '', '', 0),
(80, 13, 1, '', '', 0, 0, '', '', 0),
(81, 70, 1, '', '', 0, 0, '', '', 0),
(82, 116, 0, '', '', 0, 0, '', '', 0),
(83, 146, 0, '', '', 0, 0, '', '', 0),
(84, 124, 0, '', '', 0, 0, '', '', 0),
(85, 131, 1, '', '', 0, 0, '', '', 0),
(86, 186, 1, '', '', 0, 0, '', '', 0),
(87, 106, 1, '', '', 0, 0, '', '', 0),
(88, 100, 1, '', '', 0, 0, '', '', 0),
(89, 154, 1, '', '', 0, 0, '', '', 0),
(90, 181, 0, '', '', 0, 0, '', '', 0),
(91, 127, 0, '', '', 0, 0, '', '', 0),
(92, 95, 1, '', '', 0, 0, '', '', 0),
(93, 87, 1, '', '', 0, 0, '', '', 0),
(94, 206, 0, '', '', 0, 0, '', '', 0),
(95, 14, 1, '', '', 0, 0, '', '', 0),
(96, 152, 0, '', '', 0, 0, '', '', 0),
(97, 88, 1, '', '', 0, 0, '', '', 0),
(98, 69, 1, '', '', 0, 0, '', '', 0),
(99, 162, 1, '', '', 0, 0, '', '', 0),
(100, 25, 0, '', '', 0, 0, '', '', 0),
(101, 188, 0, '', '', 0, 0, '', '', 0),
(102, 163, 1, '', '', 0, 0, '', '', 0),
(103, 38, 0, '', '', 0, 0, '', '', 0),
(104, 48, 1, '', '', 0, 0, '', '', 0),
(105, 68, 1, '', '', 0, 0, '', '', 0),
(106, 165, 1, '', '', 0, 0, '', '', 0),
(107, 132, 1, '', '', 0, 0, '', '', 0),
(108, 196, 0, '', '', 0, 0, '', '', 0),
(109, 107, 0, '', '', 0, 0, '', '', 0),
(110, 67, 1, '', '', 0, 0, '', '', 0),
(111, 41, 0, '', '', 0, 0, '', '', 0),
(112, 167, 1, '', '', 0, 0, '', '', 0),
(113, 15, 1, '', '', 0, 0, '', '', 0),
(114, 66, 1, '', '', 0, 0, '', '', 0),
(115, 96, 1, '', '', 0, 0, '', '', 0),
(116, 50, 1, '', '', 0, 0, '', '', 0),
(117, 103, 0, '', '', 0, 0, '', '', 0),
(118, 168, 1, '', '', 0, 0, '', '', 0),
(119, 71, 1, '', '', 0, 0, '', '', 0),
(120, 147, 0, '', '', 0, 0, '', '', 0),
(121, 145, 1, '', '', 0, 0, '', '', 0),
(122, 203, 0, '', '', 0, 0, '', '', 0),
(123, 90, 1, '', '', 0, 0, '', '', 0),
(124, 84, 1, '', '', 0, 0, '', '', 0),
(125, 114, 0, '', '', 0, 0, '', '', 0),
(126, 16, 1, '', '', 0, 0, '', '', 0),
(127, 195, 1, '', '', 0, 0, '', '', 0),
(128, 22, 1, '', '', 0, 0, '', '', 0),
(129, 45, 0, '', '', 0, 0, '', '', 0),
(130, 94, 1, '', '', 0, 0, '', '', 0),
(131, 202, 0, '', '', 0, 0, '', '', 0),
(132, 149, 0, '', '', 0, 0, '', '', 0),
(133, 153, 0, '', '', 0, 0, '', '', 0),
(134, 178, 1, '', '', 0, 0, '', '', 0),
(135, 72, 1, '', '', 0, 0, '', '', 0),
(136, 36, 0, '', '', 0, 0, '', '', 0),
(137, 119, 1, '', '', 0, 0, '', '', 0),
(138, 73, 1, '', '', 0, 0, '', '', 0),
(139, 176, 1, '', '', 0, 0, '', '', 0),
(140, 138, 1, '', '', 0, 0, '', '', 0),
(141, 109, 0, '', '', 0, 0, '', '', 0),
(142, 183, 0, '', '', 0, 0, '', '', 0),
(143, 170, 1, '', '', 0, 0, '', '', 0),
(144, 115, 1, '', '', 0, 0, '', '', 0),
(145, 74, 1, '', '', 0, 0, '', '', 0),
(146, 200, 0, '', '', 0, 0, '', '', 0),
(147, 177, 1, '', '', 0, 0, '', '', 0),
(148, 46, 0, '', '', 0, 0, '', '', 0),
(149, 34, 1, '', '', 0, 0, '', '', 0),
(150, 17, 1, '', '', 0, 0, '', '', 0),
(151, 120, 0, '', '', 0, 0, '', '', 0),
(152, 192, 0, '', '', 0, 0, '', '', 0),
(153, 142, 1, '', '', 0, 0, '', '', 0),
(154, 91, 1, '', '', 0, 0, '', '', 0),
(155, 101, 1, '', '', 0, 0, '', '', 0),
(156, 125, 0, '', '', 0, 0, '', '', 0),
(157, 139, 1, '', '', 0, 0, '', '', 0),
(158, 184, 0, '', '', 0, 0, '', '', 0),
(159, 76, 1, '', '', 0, 0, '', '', 0),
(160, 75, 1, '', '', 0, 0, '', '', 0),
(161, 110, 1, '', '', 0, 0, '', '', 0),
(162, 171, 1, '', '', 0, 0, '', '', 0),
(163, 172, 1, '', '', 0, 0, '', '', 0),
(164, 141, 1, '', '', 0, 0, '', '', 0),
(165, 144, 1, '', '', 0, 0, '', '', 0),
(166, 18, 1, '', '', 0, 0, '', '', 0),
(167, 77, 1, '', '', 0, 0, '', '', 0),
(168, 89, 1, '', '', 0, 0, '', '', 0),
(169, 78, 1, '', '', 0, 0, '', '', 0),
(170, 79, 1, '', '', 0, 0, '', '', 0),
(171, 98, 1, '', '', 0, 0, '', '', 0),
(172, 80, 1, '', '', 0, 0, '', '', 0),
(173, 169, 1, '', '', 0, 0, '', '', 0),
(174, 81, 1, '', '', 0, 0, '', '', 0),
(175, 28, 0, '', '', 0, 0, '', '', 0),
(176, 151, 1, '', '', 0, 0, '', '', 0),
(177, 118, 0, '', '', 0, 0, '', '', 0),
(178, 92, 1, '', '', 0, 0, '', '', 0),
(179, 32, 1, '', '', 0, 0, '', '', 0),
(180, 173, 1, '', '', 0, 0, '', '', 0),
(181, 112, 0, '', '', 0, 0, '', '', 0),
(182, 189, 0, '', '', 0, 0, '', '', 0),
(183, 99, 0, '', '', 0, 0, '', '', 0),
(184, 19, 1, '', '', 0, 0, '', '', 0),
(185, 20, 1, '', '', 0, 0, '', '', 0),
(186, 27, 0, '', '', 0, 0, '', '', 0),
(187, 29, 0, '', '', 0, 0, '', '', 0),
(188, 21, 1, '', '', 0, 0, '', '', 0),
(189, 82, 1, '', '', 0, 0, '', '', 0),
(190, 174, 1, '', '', 0, 0, '', '', 0),
(191, 83, 1, '', '', 0, 0, '', '', 0),
(192, 175, 1, '', '', 0, 0, '', '', 0),
(193, 128, 0, '', '', 0, 0, '', '', 0),
(194, 179, 1, '', '', 0, 0, '', '', 0),
(195, 180, 1, '', '', 0, 0, '', '', 0),
(196, 126, 0, '', '', 0, 0, '', '', 0),
(197, 23, 1, '', '', 0, 0, '', '', 0),
(198, 143, 1, '', '', 0, 0, '', '', 0),
(199, 193, 0, '', '', 0, 0, '', '', 0),
(200, 207, 0, '', '', 0, 0, '', '', 0),
(201, 225, 1, '', '', 0, 0, '', '', 0),
(202, 211, 1, '', '', 0, 0, '', '', 0),
(203, 230, 1, '', '', 0, 0, '', '', 0),
(204, 213, 1, '', '', 0, 0, '', '', 0),
(205, 214, 1, '', '', 0, 0, '', '', 0),
(206, 226, 1, '', '', 0, 0, '', '', 0),
(207, 229, 1, '', '', 0, 0, '', '', 0),
(208, 221, 1, '', '', 0, 0, '', '', 0),
(209, 234, 0, '', '', 0, 0, '', '', 0),
(210, 231, 1, '', '', 0, 0, '', '', 0),
(211, 235, 0, '', '', 0, 0, '', '', 0),
(212, 232, 0, '', '', 0, 0, '', '', 0),
(213, 216, 1, '', '', 0, 0, '', '', 0),
(214, 217, 1, '', '', 0, 0, '', '', 0),
(215, 228, 1, '', '', 0, 0, '', '', 0),
(216, 227, 1, '', '', 0, 0, '', '', 0),
(217, 209, 1, '', '', 0, 0, '', '', 0),
(218, 218, 1, '', '', 0, 0, '', '', 0),
(219, 224, 1, '', '', 0, 0, '', '', 0),
(220, 236, 1, '', '', 0, 0, '', '', 0),
(221, 208, 1, '', '', 0, 0, '', '', 0),
(222, 215, 1, '', '', 0, 0, '', '', 0),
(223, 237, 1, '', '', 0, 0, '', '', 0),
(224, 210, 1, '', '', 0, 0, '', '', 0),
(225, 219, 1, '', '', 0, 0, '', '', 0),
(226, 220, 1, '', '', 0, 0, '', '', 0),
(227, 212, 1, '', '', 0, 0, '', '', 0),
(228, 233, 0, '', '', 0, 0, '', '', 0),
(229, 222, 1, '', '', 0, 0, '', '', 0),
(230, 223, 1, '', '', 0, 0, '', '', 0),
(231, 238, 1, '', '', 0, 0, '', '', 0),
(232, 259, 1, '', '', 0, 0, '', '', 0),
(233, 245, 1, '', '', 0, 0, '', '', 0),
(234, 250, 0, '', '', 0, 0, '', '', 0),
(235, 240, 1, '', '', 0, 0, '', '', 0),
(236, 239, 1, '', '', 0, 0, '', '', 0),
(237, 247, 0, '', '', 0, 0, '', '', 0),
(238, 254, 1, '', '', 0, 0, '', '', 0),
(239, 256, 1, '', '', 0, 0, '', '', 0),
(240, 249, 1, '', '', 0, 0, '', '', 0),
(241, 255, 1, '', '', 0, 0, '', '', 0),
(242, 246, 1, '', '', 0, 0, '', '', 0),
(243, 263, 0, '', '', 0, 0, '', '', 0),
(244, 262, 1, '', '', 0, 0, '', '', 0),
(245, 241, 1, '', '', 0, 0, '', '', 0),
(246, 244, 1, '', '', 0, 0, '', '', 0),
(247, 242, 1, '', '', 0, 0, '', '', 0),
(248, 251, 0, '', '', 0, 0, '', '', 0),
(249, 266, 0, '', '', 0, 0, '', '', 0),
(250, 257, 0, '', '', 0, 0, '', '', 0),
(251, 252, 0, '', '', 0, 0, '', '', 0),
(252, 260, 1, '', '', 0, 0, '', '', 0),
(253, 264, 0, '', '', 0, 0, '', '', 0),
(254, 253, 0, '', '', 0, 0, '', '', 0),
(255, 267, 1, '', '', 0, 0, '', '', 0),
(256, 265, 0, '', '', 0, 0, '', '', 0),
(257, 243, 1, '', '', 0, 0, '', '', 0),
(258, 261, 0, '', '', 0, 0, '', '', 0),
(259, 248, 1, '', '', 0, 0, '', '', 0),
(260, 258, 1, '', '', 0, 0, '', '', 0),
(261, 291, 0, '', '', 0, 0, '', '', 0),
(262, 302, 1, '', '', 0, 0, '', '', 0),
(263, 297, 0, '', '', 0, 0, '', '', 0),
(264, 269, 1, '', '', 0, 0, '', '', 0),
(265, 288, 1, '', '', 0, 0, '', '', 0),
(266, 303, 0, '', '', 0, 0, '', '', 0),
(267, 282, 1, '', '', 0, 0, '', '', 0),
(268, 287, 1, '', '', 0, 0, '', '', 0),
(269, 298, 0, '', '', 0, 0, '', '', 0),
(270, 293, 0, '', '', 0, 0, '', '', 0),
(271, 283, 1, '', '', 0, 0, '', '', 0),
(272, 301, 0, '', '', 0, 0, '', '', 0),
(273, 270, 1, '', '', 0, 0, '', '', 0),
(274, 290, 0, '', '', 0, 0, '', '', 0),
(275, 268, 1, '', '', 0, 0, '', '', 0),
(276, 275, 1, '', '', 0, 0, '', '', 0),
(277, 271, 1, '', '', 0, 0, '', '', 0),
(278, 278, 1, '', '', 0, 0, '', '', 0),
(279, 274, 1, '', '', 0, 0, '', '', 0),
(280, 294, 0, '', '', 0, 0, '', '', 0),
(281, 295, 0, '', '', 0, 0, '', '', 0),
(282, 279, 0, '', '', 0, 0, '', '', 0),
(283, 289, 0, '', '', 0, 0, '', '', 0),
(284, 277, 1, '', '', 0, 0, '', '', 0),
(285, 292, 1, '', '', 0, 0, '', '', 0),
(286, 276, 1, '', '', 0, 0, '', '', 0),
(287, 272, 1, '', '', 0, 0, '', '', 0),
(288, 280, 0, '', '', 0, 0, '', '', 0),
(289, 281, 1, '', '', 0, 0, '', '', 0),
(290, 300, 0, '', '', 0, 0, '', '', 0),
(291, 299, 0, '', '', 0, 0, '', '', 0),
(292, 286, 2, '', '', 0, 0, '', '', 0),
(293, 284, 1, '', '', 0, 0, '', '', 0),
(294, 296, 0, '', '', 0, 0, '', '', 0),
(295, 273, 1, '', '', 0, 0, '', '', 0),
(296, 304, 0, '', '', 0, 0, '', '', 0),
(297, 285, 0, '', '', 0, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_nonformal`
--

CREATE TABLE IF NOT EXISTS `as_nonformal` (
  `id_nonformal` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `tahun` date NOT NULL,
  `lamanya` varchar(100) NOT NULL,
  `jenis` tinyint(2) NOT NULL COMMENT '1.Pelathan,2.Kursus,3.Job Training',
  `diutus` tinyint(2) NOT NULL COMMENT '1.Ya,0.Tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_pegawai`
--

CREATE TABLE IF NOT EXISTS `as_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `foto_pegawai` varchar(200) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `gelar_depan` varchar(100) NOT NULL,
  `gelar_belakang` varchar(100) NOT NULL,
  `jenis_kelamin` tinyint(2) NOT NULL COMMENT '1.Laki-Laki 2.Perempuan',
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat_ktp` longtext NOT NULL,
  `rt_ktp` int(11) NOT NULL,
  `rw_ktp` int(11) NOT NULL,
  `kelurahan_ktp` varchar(100) NOT NULL,
  `kecamatan_ktp` varchar(100) NOT NULL,
  `kota_ktp` varchar(100) NOT NULL,
  `alamat_tinggal` longtext NOT NULL,
  `rt_tinggal` int(11) NOT NULL,
  `rw_tinggal` int(11) NOT NULL,
  `kelurahan_tinggal` varchar(100) NOT NULL,
  `kecamatan_tinggal` varchar(100) NOT NULL,
  `kota_tinggal` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `handphone` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_input` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=305 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_pegawai`
--

INSERT INTO `as_pegawai` (`id_pegawai`, `foto_pegawai`, `nik`, `nama_lengkap`, `gelar_depan`, `gelar_belakang`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat_ktp`, `rt_ktp`, `rw_ktp`, `kelurahan_ktp`, `kecamatan_ktp`, `kota_ktp`, `alamat_tinggal`, `rt_tinggal`, `rw_tinggal`, `kelurahan_tinggal`, `kecamatan_tinggal`, `kota_tinggal`, `no_telepon`, `handphone`, `id_user`, `tanggal_input`) VALUES
(7, '', '', 'Nefiriyanti', '', ', S.Pd', 2, 'Banyumas', '1976-11-11', 'islam', 'Cluster Bumi Pajajaran 3 Blok A/5 Poris Plawad Utara', 0, 0, 'Poris Plawad Utara', '', 'Tangerang', 'Cluster Bumi Pajajaran 3 Blok A/5 Poris Plawad Utara', 0, 0, 'Poris Plawad Utara', '', 'Tangerang', '', '081382305682', 6, '2016-08-25 12:01:33'),
(8, '', '', 'Arlinda Puspa dewi', '', ', S.Pd.I', 2, 'Jakarta', '1968-08-28', 'islam', 'Kel. Poris Plawad Utara Gg. Annur II Rt. 05 Rw. 01 Kec. Cipondoh Kota Tangerang', 5, 1, '', 'Cipondoh', 'Tangerang', 'Kel. Poris Plawad Utara Gg. Annur II Rt. 05 Rw. 01 Kec. Cipondoh Kota Tangerang', 5, 1, '', 'Cipondoh', 'Tangerang', '55755809', '082114749077', 6, '2016-08-25 13:04:08'),
(9, '', '-', 'Atikah', '', '', 2, 'Tangerang', '1960-03-02', 'islam', 'Kel. Buaran Wetan Rt. 03 Rw. 15  Kec. Tangerang', 3, 5, '', 'Tangerang', 'Tangerang', 'Kel. Buaran Wetan Rt. 03 Rw. 15  Kec. Tangerang', 3, 5, '', 'Tangerang', 'Tangerang', '0215542571', '', 6, '2016-08-26 06:31:24'),
(10, '', '-', 'Eva Rahmawati', '', ', S.Pd.I', 2, 'Jakarta', '1974-04-08', 'islam', 'Jl.KH. Hasyim Ashari Rt.02 Rw. 03 Kel. Poris Plawad Indah Kota Tangerang', 2, 3, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Jl.KH. Hasyim Ashari Rt.02 Rw. 03 Kel. Poris Plawad Indah Kota Tangerang', 2, 3, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '', '02194961883', 6, '2016-08-26 06:43:48'),
(11, '', '', 'Irma Haryanti', '', ', S.Pd.I', 2, 'Jakarta', '1974-01-04', 'islam', 'Jl.Bali Raya Blok DM 15 No. 10 Rt. 03 Rw. 06 Kunciran Mas Permai Kota Tangerang', 3, 6, 'Kunciran', '', 'Tangerang', 'Jl.Bali Raya Blok DM 15 No. 10 Rt. 03 Rw. 06 Kunciran Mas Permai Kota Tangerang', 3, 6, 'Kunciran', '', 'Tangerang', '02173443940', '085399666657', 6, '2016-08-26 06:58:36'),
(12, '', '', 'Irmaida Syawir', '', ', S.Pd', 2, 'Padang', '1976-05-06', 'islam', 'Komp. PDK Jln. Seruni no. 154 Cipondoh Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', 'Komp. PDK Jln. Seruni no. 154 Cipondoh Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', '', '081310520630', 6, '2016-08-26 07:16:14'),
(13, '', '', 'Lina Wati', '', ', S.Pd.I', 2, 'Tangerang', '1971-10-10', 'islam', 'Jl. Pengairan  No. 41 C Rt.03 Rw.05 Kel. Sukarasa Kec. Tangerang', 3, 5, 'Sukarasa', 'Tangerang', 'Tangerang', 'Jl. Pengairan  No. 41 C Rt.03 Rw.05 Kel. Sukarasa Kec. Tangerang', 3, 5, 'Sukarasa', 'Tangerang', 'Tangerang', '0215581912', '085883214797', 6, '2016-08-26 07:26:48'),
(14, '', '', 'Mujiati', '', ', S.Pd.I', 2, 'Tangerang', '1983-06-05', 'islam', 'Jl.Maulana Hasanudin Rt.03 Rw. 02 Kel.Poris Jaya Kec. Batu Ceper Kota Tangerang ', 3, 2, 'Poris Jaya', 'Batu Ceper', 'Tangerang', 'Jl.Maulana Hasanudin Rt.03 Rw. 02 Kel.Poris Jaya Kec. Batu Ceper Kota Tangerang ', 3, 2, 'Poris Jaya', 'Batu Ceper', 'Tangerang', '02123717482', '0888809912920', 6, '2016-08-26 07:44:11'),
(15, '', '', 'Nurdiana', '', ', S.Pd.I', 2, 'Yogyakarta', '1963-10-22', 'islam', 'Jl. Swadaya I No.7 Rt. 03 Rw.03 Kel. Kali Deres Jakarta Barat', 3, 3, 'Kali Deres', '', 'Jakarta Barat', 'Jl. Swadaya I No.7 Rt. 03 Rw.03 Kel. Kali Deres Jakarta Barat', 3, 3, 'Kali Deres', '', 'Jakarta Barat', '02154392446', '081317605463', 6, '2016-08-26 07:46:21'),
(16, '', '', 'R. Rani Damayanti', '', ', S.Pd', 2, 'Bandung', '1967-11-12', 'islam', 'Jl.Seroja Blok A.52 Rt.02 Rw. 03 Komp. Kunciran Mas Permai Kota Tangerang', 2, 3, '', '', 'Tangerang', 'Jl.Seroja Blok A.52 Rt.02 Rw. 03 Komp. Kunciran Mas Permai Kota Tangerang', 2, 3, '', '', 'Tangerang', '0217302887', '081311028892', 6, '2016-08-26 07:48:05'),
(17, '', '', 'Siti Haulah', '', ',S.Pd.I', 2, 'Tangerang', '1977-04-09', 'islam', 'Kampung Baru Jl. Ki Saiman I Rt. 01 Rw.05 Pasar Baru Kota Tangerang', 1, 5, 'Pasar Baru', '', 'Tangerang', 'Kampung Baru Jl. Ki Saiman I Rt. 01 Rw.05 Pasar Baru Kota Tangerang', 1, 5, 'Pasar Baru', '', 'Tangerang', '', '087878561027', 6, '2016-08-26 07:49:36'),
(18, '', '', 'Subarsih', '', '', 2, 'Jakarta', '1972-11-10', 'islam', 'Cluster Sakinah Blok C/09. Jln. Tugu Karya 1 rt 05/03 Poris Plawad Utara- Cipondoh Tangerang', 5, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Cluster Sakinah Blok C/09. Jln. Tugu Karya 1 rt 05/03 Poris Plawad Utara- Cipondoh Tangerang', 5, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '02155755827', '083890108769', 6, '2016-08-26 08:00:18'),
(19, '', '', 'Wahyu Astuti', '', ', S.Pd', 2, 'Jakarta', '1980-09-11', 'islam', 'Jl. Sempor VII No. 14 Perumnas II Rt. 08 Rw.11 Kota Tangerang', 8, 11, '', '', 'Tangerang', 'Jl. Sempor VII No. 14 Perumnas II Rt. 08 Rw.11 Kota Tangerang', 8, 11, '', '', 'Tangerang', '', '089654482583', 6, '2016-08-26 08:01:36'),
(20, 'asset/images/photos/_20160826_080858.jpg', '', 'Wahyuni', '', ', S.Pd.I', 2, 'Jakarta', '1978-12-08', 'islam', 'Jl.KH.Hasyim Ashari Kel. Poris Plawad Utara Rt.03 Rw. 01 Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Kel. Poris Plawad Utara Rt.03 Rw. 01 Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '02192441355', '081314953177', 6, '2016-08-26 08:08:58'),
(21, '', '', 'Wiwi Wahyuni', '', '', 2, 'Tangerang', '1972-12-21', 'islam', 'Jl. Peta Selatan No. 60 Rt. 04 Rw. 03 Kel. Kali Deres Jakarta Barat', 4, 3, 'Kali Deres', '', 'Jakarta Barat', 'Jl. Peta Selatan No. 60 Rt. 04 Rw. 03 Kel. Kali Deres Jakarta Barat', 4, 3, 'Kali Deres', '', 'Jakarta Barat', '02155771883', '95622409', 6, '2016-08-26 08:11:40'),
(22, '', '', 'Retno Sugiarti', '', ', S.Pd', 2, 'Jakarta', '1980-10-05', 'islam', 'Komp. Kunciran Mas Permai Rt.01 Rw. 06 Jl. Irian 3 No.21 Kec. Pinang Kota Tangerang', 1, 6, '', 'Pinang', 'Tangerang', 'Komp. Kunciran Mas Permai Rt.01 Rw. 06 Jl. Irian 3 No.21 Kec. Pinang Kota Tangerang', 1, 6, '', 'Pinang', 'Tangerang', '02173446876', '081382334548', 6, '2016-08-26 08:23:29'),
(23, '', '', 'Yuyun Miswahyuni', '', ', A.Ma', 2, 'Cilacap', '1977-06-26', 'islam', 'Kel. Mekarsari Rt. 01 Rw. 05 Kec. Neglasari Kota Tangerang', 1, 5, 'Mekarsari', 'Neglasari', 'Tangerang', 'Kel. Mekarsari Rt. 01 Rw. 05 Kec. Neglasari Kota Tangerang', 1, 5, 'Mekarsari', 'Neglasari', 'Tangerang', '02155792701', '081584080013', 6, '2016-08-26 08:24:55'),
(24, '', '', 'Afriana', '', ', S.Pd.I', 2, 'Tangerang', '1990-04-07', 'islam', 'Jl.Al-Furqon Poris Plawad Utara Rt.02 Rw.03 Cipondoh', 2, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.Al-Furqon Poris Plawad Utara Rt.02 Rw.03 Cipondoh', 2, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '085697364848', 6, '2016-08-26 08:25:51'),
(25, '', '', 'Nailah', '', ', S.Pd.I', 2, 'Tangerang', '1991-01-05', 'islam', 'Jl.Kisamaun Jl. Palem Rt. 02 Rw.07 Kota Tangerang', 2, 7, '', '', 'Tangerang', 'Jl.Kisamaun Jl. Palem Rt. 02 Rw.07 Kota Tangerang', 2, 7, '', '', 'Tangerang', '02195775800', '083878628670', 6, '2016-08-26 08:29:06'),
(26, '', '', 'Karlina', '', ', S.Pd.I', 2, 'Tangerang', '1990-01-11', 'islam', 'Tanjung Pasir Rt.01 Rw.01 Kel. Tanjung Pasir Kab. Tangerang', 1, 1, 'Tanjung Pasir', '', 'Kabupaten Tangerang', 'Tanjung Pasir Rt.01 Rw.01 Kel. Tanjung Pasir Kab. Tangerang', 1, 1, 'Tanjung Pasir', '', 'Kabupaten Tangerang', '', '085714214656', 6, '2016-08-26 08:30:43'),
(27, '', '', 'Wardatul Jannah', '', ', A.Md', 2, 'Tangerang', '1986-07-26', 'islam', 'Jl.KH.Hasyim Ashari Gg.H.Asnawi No.105 Kel.Poris Plawad Indah Rt.02 Rw.02 Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.H.Asnawi No.105 Kel.Poris Plawad Indah Rt.02 Rw.02 Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '0215549960', '0815174221865', 6, '2016-08-26 08:32:33'),
(28, '', '', 'Syifa Fauziyah', '', ', S.Pd.I', 2, 'Purwakarta', '1991-12-24', 'islam', 'Jl.KH.Hasyim Ashari Gg. Halimah Kota Tangerang', 0, 0, '', '', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg. Halimah Kota Tangerang', 0, 0, '', '', 'Tangerang', '', '085718489233', 6, '2016-08-26 08:33:21'),
(29, '', '', 'Winda Widianti', '', ', S.Pd.I', 2, 'Tangerang', '1987-01-02', 'islam', 'Jl. Kampung Buaran PLN Rt. 001/005 Kec. Cikokol Kota Tangerang.', 1, 5, '', 'Cikokol', 'Tangerang', 'Jl. Kampung Buaran PLN Rt. 001/005 Kec. Cikokol Kota Tangerang.', 1, 5, '', 'Cikokol', 'Tangerang', '', '085693068930', 6, '2016-08-26 08:34:22'),
(30, '', '', 'Dadi Ni''matul M', '', '', 2, 'Tegal', '1986-07-29', 'islam', 'Perum 1 Jl. Nila Raya No. 159 Kec. Karawaci Kota Tangerang', 0, 0, '', 'Karawaci', 'Tangerang', 'Perum 1 Jl. Nila Raya No. 159 Kec. Karawaci Kota Tangerang', 0, 0, '', 'Karawaci', 'Tangerang', '', '081906414530', 6, '2016-08-26 08:35:37'),
(31, '', '', 'Erna Mariana', '', ', S.Pd.I', 2, 'Jakarta', '1988-12-16', 'islam', 'Jl. H.Mansur Kel. Gondrong Rt. 003 Rw. 003 Kec. Cipondoh Kota Tangerang Kode Pos 15141', 2, 3, 'Gondrong', 'Cipondoh', 'Tangerang', 'Jl. H.Mansur Kel. Gondrong Rt. 003 Rw. 003 Kec. Cipondoh Kota Tangerang Kode Pos 15141', 2, 3, 'Gondrong', 'Cipondoh', 'Tangerang', '', '085692046649', 6, '2016-08-26 08:36:52'),
(32, '', '', 'Tri Sunarti', '', ', S.Pd', 2, 'Tangerang', '1985-09-08', 'islam', 'Jl. Raden Saleh Rt. 002 Rw. 004 Kel. Karang Tengah Kec. Ciledug Kota Tangerang', 2, 4, 'Karang Tengah', 'Ciledug', 'Tangerang', 'Jl. Raden Saleh Rt. 002 Rw. 004 Kel. Karang Tengah Kec. Ciledug Kota Tangerang', 2, 4, 'Karang Tengah', 'Ciledug', 'Tangerang', '0215542661', '02196530226', 6, '2016-08-26 08:50:39'),
(33, '', '', 'Lilis Rusiana', '', ', S.Pd.I', 2, 'Tangerang', '1986-05-06', 'islam', 'KP.Sawah dalam Kel. Panunggangan Utara Rt.005 Rw.004 Kec. Pinang Kota Tangerang ', 5, 4, 'Panunggangan Utara', 'Pinang', 'Tangerang', 'KP.Sawah dalam Kel. Panunggangan Utara Rt.005 Rw.004 Kec. Pinang Kota Tangerang ', 5, 4, 'Panunggangan Utara', 'Pinang', 'Tangerang', '02198824395', '085770546984', 6, '2016-08-26 08:52:39'),
(34, '', '', 'Siti Halwati', '', ', S.Pd.I', 2, 'Tangerang', '1992-02-17', 'islam', 'Jln. KH. Kuding Batu Ceper', 0, 0, '', 'Batu Ceper', 'Tangerang', 'Jln. KH. Kuding Batu Ceper', 0, 0, '', 'Batu Ceper', 'Tangerang', '', '083879367912', 6, '2016-08-26 08:53:43'),
(35, '', '', 'Anik Setiyowati', '', ', S.Pd', 2, 'Jakarta', '1976-07-30', 'islam', 'Kel. Sudimara Pinang Rt. 005/002 Kec. Pinang Kode Pos. 15142', 5, 2, 'Sudimara', 'Pinang', 'Tangerang', 'Kel. Sudimara Pinang Rt. 005/002 Kec. Pinang Kode Pos. 15142', 5, 2, 'Sudimara', 'Pinang', 'Tangerang', '', '', 6, '2016-08-26 08:55:05'),
(36, '', '', 'Ropiah Tuddarojah', '', ', S.Pd.I', 2, 'Jakarta', '1991-08-05', 'islam', 'Kel. Pegadungan  Jl. Tanjung Pura 2 Rt.011/04 No. 53 Kode Pos 11830 Kec. Kalideres Jakarta Barat.', 11, 4, 'Pegadungan', 'Kalideres', 'Jakarta Barat', 'Kel. Pegadungan  Jl. Tanjung Pura 2 Rt.011/04 No. 53 Kode Pos 11830 Kec. Kalideres Jakarta Barat.', 11, 4, 'Pegadungan', 'Kalideres', 'Jakarta Barat', '', '', 6, '2016-08-26 08:56:56'),
(37, '', '', 'Lena Agnia Julianti', '', '', 2, 'Tasikmalaya', '1995-05-07', 'islam', 'Kel. Poris Plawad Utara Rt. 003/005 Kec. Cipondoh Kota Tangerang', 3, 5, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Kel. Poris Plawad Utara Rt. 003/005 Kec. Cipondoh Kota Tangerang', 3, 5, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '085723858334', 6, '2016-08-26 08:58:29'),
(38, '', '', 'Neneng Hasanah', '', '', 2, 'Tangerang', '1995-09-13', 'islam', 'Jl. Nyimas Melati Rt. 002 Rw.002 Kota Tangerang', 2, 2, '', '', 'Tangerang', 'Jl. Nyimas Melati Rt. 002 Rw.002 Kota Tangerang', 2, 2, '', '', 'Tangerang', '', '088213250682', 6, '2016-08-26 09:07:34'),
(39, '', '', 'Irma Nur''athaya', '', '', 2, 'Garut', '1992-07-29', 'islam', 'Jl.HR.Rasuna Said No.116 Rt.002 Rw.002 Kel. Kunciran Jaya Kec. Pinang Kota Tangerang ', 2, 2, 'Kunciran Jaya', 'Pinang', 'Tangerang', 'Jl.HR.Rasuna Said No.116 Rt.002 Rw.002 Kel. Kunciran Jaya Kec. Pinang Kota Tangerang ', 2, 2, 'Kunciran Jaya', 'Pinang', 'Tangerang', '', '08387079068', 6, '2016-08-26 09:08:46'),
(40, '', '', 'Agus Sar''an', '', '', 1, 'Pandeglang', '1986-02-13', 'islam', 'Kel. Buaran Indah Gg. Jambu Rt. 006 Rw.06 Kec. Tangerang', 6, 6, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Kel. Buaran Indah Gg. Jambu Rt. 006 Rw.06 Kec. Tangerang', 6, 6, 'Buaran Indah', 'Tangerang', 'Tangerang', '', '083813831548', 6, '2016-08-26 09:09:58'),
(41, '', '', 'Nur Fitria', '', '', 2, 'Jakarta', '1994-11-01', 'islam', 'Komp. Kunciran Mas Permai  Rt. 001 Rw.001 Jl. Walet Blok. K1 No.2 Kec. Pinang Kota Tangerang', 1, 1, '', 'Pinang', 'Tangerang', 'Komp. Kunciran Mas Permai  Rt. 001 Rw.001 Jl. Walet Blok. K1 No.2 Kec. Pinang Kota Tangerang', 1, 1, '', 'Pinang', 'Tangerang', '', '089602462783', 6, '2016-08-26 09:11:01'),
(42, '', '', 'Dede Samanah', '', '', 2, 'Pandeglang', '1992-03-17', 'islam', 'Jl. Puri Dewata Indah Blok C4 No. 19 Rt.002 Rw.004 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 4, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl. Puri Dewata Indah Blok C4 No. 19 Rt.002 Rw.004 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 4, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '089699639242', 6, '2016-08-26 09:12:25'),
(43, '', '', 'Dwi Amelia', '', '', 2, 'Tangerang', '1997-11-10', 'islam', 'Jl.KH.Musthofa Kel. Poris Plawad Utara Rt. 003 Rw. 004 Kec. Cipondoh Kota Tangerang', 3, 4, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Musthofa Kel. Poris Plawad Utara Rt. 003 Rw. 004 Kec. Cipondoh Kota Tangerang', 3, 4, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '088213164688', 6, '2016-08-26 09:14:13'),
(44, '', '', 'Decca Syifa Novani', '', '', 2, 'Yogyakarta', '1996-11-20', 'islam', 'Jl. Masjid Asholihin Rt. 002 Rw.003 Kel. Cipondoh Indah Kec. Cipondoh Kota Tangerang', 2, 3, 'Cipondoh Indah', 'Cipondoh', 'Tangerang', 'Jl. Masjid Asholihin Rt. 002 Rw.003 Kel. Cipondoh Indah Kec. Cipondoh Kota Tangerang', 2, 3, 'Cipondoh Indah', 'Cipondoh', 'Tangerang', '', '089657405585', 6, '2016-08-26 09:15:07'),
(45, '', '', 'Riska Choirunnisa', '', '', 2, 'Tangerang', '1994-08-29', 'islam', 'Jl. Baru No. 98 Kel. Poris Plawad Utara Rt. 003 Rw. 002 Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl. Baru No. 98 Kel. Poris Plawad Utara Rt. 003 Rw. 002 Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '08128317717', 6, '2016-08-26 09:15:56'),
(46, '', '', 'Siti Aisah', '', '', 2, 'Lebak', '1997-08-24', 'islam', 'Perum. Alam Indah Kel. Poris Plawad Indah Rt. 004 Rw.004 Kec. Cipondoh Kota Tangerang', 4, 4, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Perum. Alam Indah Kel. Poris Plawad Indah Rt. 004 Rw.004 Kec. Cipondoh Kota Tangerang', 4, 4, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '', '085929962681', 6, '2016-08-26 09:20:19'),
(47, '', '', 'Ade Eka Nur Afni Hanifah', '', '', 2, 'Purworejo', '1997-07-30', 'islam', 'Jl.KH.Maulana Hasanuddin Gg. Gema IV Rt. 003/001 Kec. Batuceper Kota Tangerang', 3, 1, '', 'Batu Ceper', 'Tangerang', 'Jl.KH.Maulana Hasanuddin Gg. Gema IV Rt. 003/001 Kec. Batuceper Kota Tangerang', 3, 1, '', 'Batu Ceper', 'Tangerang', '', '081269419918', 6, '2016-08-26 09:21:31'),
(48, '', '', 'Neti', '', '', 2, 'Tangerang', '1969-10-05', 'islam', 'Jl.KH. Hasyim Ashari Rt.03 Rw.05 Kel. Buaran Indah Kota Tangerang', 3, 5, 'Buaran Indah', '', 'Tangerang', 'Jl.KH. Hasyim Ashari Rt.03 Rw.05 Kel. Buaran Indah Kota Tangerang', 3, 5, 'Buaran Indah', '', 'Tangerang', '02155757914', '', 6, '2016-08-26 09:24:32'),
(49, '', '', 'Kuserin', '', ', S.HI', 1, 'Gresik', '1975-12-25', 'islam', 'Jl.Tanah Seratus Kel. Sudimara Jaya Rt. 05 Rw.09 Kec. Ciledug Kota Tangerang', 5, 9, 'Sudimara', 'Ciledug', 'Tangerang', 'Jl.Tanah Seratus Kel. Sudimara Jaya Rt. 05 Rw.09 Kec. Ciledug Kota Tangerang', 5, 9, 'Sudimara', 'Ciledug', 'Tangerang', '', '081316801276', 6, '2016-08-26 13:33:27'),
(50, '', '', 'Nurhidayah', '', ', SH', 2, 'Tangerang', '1971-07-06', 'islam', 'Jl. Bunga Matahari No. 169 Komp. PDK Rt. 05 Rw.05 Kec. Cipondoh Kota Tangerang', 5, 5, '', 'Cipondoh', 'Tangerang', 'Jl. Bunga Matahari No. 169 Komp. PDK Rt. 05 Rw.05 Kec. Cipondoh Kota Tangerang', 5, 5, '', 'cipondoh', 'Tangerang', '02155752282', '08158948507', 6, '2016-08-26 13:37:04'),
(51, '', '', 'Abdul Haris', '', '', 1, 'Tangerang', '1978-08-15', 'islam', 'Jl.H.Mansur Rt. 04 Rw.05 Kel. Gondrong Kec.Cipondoh Kota Tangerang', 4, 5, 'Gondrong', 'Cipondoh', 'Tangerang', 'Jl.H.Mansur Rt. 04 Rw.05 Kel. Gondrong Kec.Cipondoh Kota Tangerang', 4, 5, 'Gondrong', 'cipondoh', 'Tangerang', '', '081314993272', 6, '2016-08-26 13:40:32'),
(52, '', '', 'Aas Hasbulloh', '', '', 1, 'Tasikmalaya', '1970-10-10', 'islam', 'Jl.KH.Hasyim Ashari Kel. Poris Plawad Utara Rt.05 Rw.02 No. 67 Kec. Cipondoh Kota Tangerang', 5, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Kel. Poris Plawad Utara Rt.05 Rw.02 No. 67 Kec. Cipondoh Kota Tangerang', 5, 2, 'Poris Plawad Utara', 'cipondoh', 'Tangerang', '', '081318731576', 6, '2016-08-26 13:40:39'),
(53, '', '', 'Adiana Susanti', '', ',  S.Pd.I', 2, 'Jakarta', '1972-02-27', 'islam', 'Jl.KH.Hasyim Mustopa Rt.02/04 Cluster Baiti I No. 19 Kel.Poris Plawad Utara Cipondoh Kota Tangerang', 2, 4, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Mustopa Rt.02/04 Cluster Baiti I No. 19 Kel.Poris Plawad Utara Cipondoh Kota Tangerang', 2, 4, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '081310945115', 6, '2016-08-26 13:44:05'),
(54, '', '', 'Al Furqon', '', ', S.Kom', 1, 'Tangerang', '1979-08-30', 'islam', 'Jl. Sektor 13 Rt. 01 Rw. 10 Kel. Sudimara Jaya Kec. Ciledug Kota Tangerang', 1, 10, 'Sudimara Jaya', 'Ciledug', 'Tangerang', 'Jl. Sektor 13 Rt. 01 Rw. 10 Kel. Sudimara Jaya Kec. Ciledug Kota Tangerang', 1, 10, 'Sudimara Jaya', 'Ciledug', 'Tangerang', '', '085773174937', 6, '2016-08-26 13:44:08'),
(55, '', '', 'Anita Silviyanti', '', ', S.Pd', 2, 'Tangerang', '1976-06-15', 'islam', 'Jl. Letda Dadang Suprapto Rt. 04 Rw.05 Kel. Grendeng Kec. Karawaci Kota Tangerang ', 4, 5, 'Gredeng', 'Karawaci', 'Tangerang', 'Jl. Letda Dadang Suprapto Rt. 04 Rw.05 Kel. Grendeng Kec. Karawaci Kota Tangerang ', 4, 5, 'Gredeng', 'Karawaci', 'Tangerang', '02155791143', '081286083043', 6, '2016-08-26 13:49:45'),
(56, '', '', 'Anwari', '', ', S.Pd.I', 1, 'Tangerang', '1982-01-02', 'islam', 'KP.Kamurang atas Rt. 04 Rw.01 Kel. Paku Alam Kec. Serpong Utara Tangerang Selatan', 4, 1, 'Paku Alam', 'Serpong Utara', 'Tangerang Selatan', 'KP.Kamurang atas Rt. 04 Rw.01 Kel. Paku Alam Kec. Serpong Utara Tangerang Selatan', 4, 1, 'Paku Alam', 'Serpong Utara', 'Tangerang Selatan', '', '08567162797', 6, '2016-08-26 13:49:47'),
(57, '', '', 'Dede Ami Mustopa', '', ', S.Pd.I', 1, 'Tangerang', '1984-11-26', 'islam', 'Jl.KH. Muhammad Cup Rt. 09 Rw.01 Kel. Pinang Kec. Pinang Kota Tangerang', 9, 1, 'Pinang', 'Pinang', 'Tangerang', 'Jl.KH. Muhammad Cup Rt. 09 Rw.01 Kel. Pinang Kec. Pinang Kota Tangerang', 9, 1, 'Pinang', 'Pinang', 'Tangerang', '02180281426', '085781866254', 6, '2016-08-26 13:49:49'),
(58, '', '', 'Dini Mailani', '', ', S.Pd', 2, 'Bogor', '1971-05-25', 'islam', 'Perum. Banjar Wijaya Blok.A25 No.11 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Perum. Banjar Wijaya Blok.A25 No.11 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Utara', 'cipondoh', 'Tangerang', '02155700081', '085781845064', 6, '2016-08-26 13:55:03'),
(59, '', '', 'Farah Dibba', '', '', 2, 'Jakarta', '1977-02-12', 'islam', 'Komp.Kodam Rt. 10 Rw. 05 Blok. K2-233 Kec. Kalideres Jakarta Barat', 10, 5, '', 'Kalideres', 'Jakarta Barat', 'Komp.Kodam Rt. 10 Rw. 05 Blok. K2-233 Kec. Kalideres Jakarta Barat', 10, 5, '', 'Kalideres', 'Jakarta Barat', '0215419814', '08811865492', 6, '2016-08-26 13:55:05'),
(60, '', '', 'Gunawan', '', '', 1, 'Tangerang', '1981-06-08', 'islam', 'Kp.Blok Malang Rt.002/002 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Kp.Blok Malang Rt.002/002 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '0897970414', 6, '2016-08-26 13:55:07'),
(61, '', '', 'Kustanti', '', ', S.Pd', 2, 'Wonogiri', '1978-10-27', 'islam', 'Jl.KH.Hasyim Ashari Rt.03 Rw.01 No. 18 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Rt.03 Rw.01 No. 18 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '0215584278', '081310399953', 6, '2016-08-26 14:03:31'),
(62, '', '', 'Inayah Kurniati', '', ', S.Pd', 2, 'Jakarta', '1980-01-03', 'islam', 'Perum. Cluster Buaran Indah B2 Cipondoh Kota Tangerang Propinsi Banten', 0, 0, '', 'Cipondoh', 'Tangerang', 'Perum. Cluster Buaran Indah B2 Cipondoh Kota Tangerang Propinsi Banten', 0, 0, '', 'Cipondoh', 'Tangerang', '02199062946', '081212057368', 6, '2016-08-26 14:03:32'),
(63, '', '', 'Ijang Ruhiyat', '', ', S.Pd.I', 1, 'Garut', '1972-03-04', 'islam', 'Jl. Tugu Karya Perum. Sakinah Residence Blok. C15 Rt.005/003 Kel.Poris Plawad Utara Kec. Cipondoh', 5, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl. Tugu Karya Perum. Sakinah Residence Blok. C15 Rt.005/003 Kel.Poris Plawad Utara Kec. Cipondoh', 5, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '081911007654', 6, '2016-08-26 14:03:34'),
(64, '', '', 'Hendi Suhendi', '', '', 1, 'Lebak', '1978-10-03', 'islam', 'Kp. Babakan Sari Rt. 02 Rw.04 Kel. Kujang Jaya Kec. Cibeber Kab. Lebak', 2, 4, 'Kujang Jaya', 'Cibeber', 'Lebak', 'Kp. Babakan Sari Rt. 02 Rw.04 Kel. Kujang Jaya Kec. Cibeber Kab. Lebak', 2, 4, 'Kujang Jaya ', 'Cibeber', 'Lebak', '', '081808095728', 6, '2016-08-26 14:04:29'),
(65, '', '', 'Hamidah', '', ', S.Pd.I', 2, 'Tangerang', '1974-07-15', 'islam', 'Jl. KH. Hasyim Ashari Gg. Parit No. 4 Cipondoh Kota Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', 'Jl. KH. Hasyim Ashari Gg. Parit No. 4 Cipondoh Kota Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', '', '081382441179', 6, '2016-08-26 14:04:32'),
(66, '', '', 'Nurhasanah', '', ', S.Pd', 2, 'Jakarta', '1977-11-08', 'islam', 'Kp. Malang Rt.02 Rw.03 Kel.Semanan Kec. Kalideres Kotamadya Jakarta Barat', 2, 3, 'Semanan', 'Kalideres', 'Jakarta Barat', 'Kp. Malang Rt.02 Rw.03 Kel.Semanan Kec. Kalideres Kotamadya Jakarta Barat', 2, 3, 'Semanan', 'Kalideres', 'Jakarta Barat', '0215458885', '082216223495', 6, '2016-08-26 14:10:45'),
(67, '', '', 'Nunung Nurjanah', '', ', S.Pd.I', 2, 'Jakarta', '1985-04-12', 'islam', 'Jl.Asahan V No.I Kel. Bencongan Rt.04 Rw. 15 Kec. Kelapa Dua Tangerang', 4, 5, 'Bencongan', 'Kelapa Dua', 'Tangerang', 'Jl.Asahan V No.I Kel. Bencongan Rt.04 Rw. 15 Kec. Kelapa Dua Tangerang', 4, 5, 'Bencongan', 'Kelapa Dua', 'Tangerang', '0215912876', '081511425569', 6, '2016-08-26 14:14:16'),
(68, '', '', 'Nina Triyana Kaepiyah', '', ',SP', 2, 'Majalengka', '1980-09-04', 'islam', 'Jl.Jambu Cluster Buaran Indah Blok D/8 Rt. 05 Rw.03 Kel. Buaran Indah Kec. Tangerang Kota Tangerang ', 5, 3, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Jl.Jambu Cluster Buaran Indah Blok D/8 Rt. 05 Rw.03 Kel. Buaran Indah Kec. Tangerang Kota Tangerang ', 5, 3, 'Buaran Indah', 'Tangerang', 'Tangerang', '0215582543', '081311200223', 6, '2016-08-26 14:14:18'),
(69, '', '', 'Murtafiah', '', ', M.Pd.I', 2, 'Jakarta', '1967-01-06', 'islam', 'Jl. Duri Kosambi Rt. 13 Rw. 07 Kel. Duri Kosambi Kec. Cengkareng Jakarta Barat', 13, 7, 'Duri Kosambi', 'Cengkareng', 'Jakarta Barat', 'Jl. Duri Kosambi Rt. 13 Rw. 07 Kel. Duri Kosambi Kec. Cengkareng Jakarta Barat', 13, 7, 'Duri Kosambi', 'Cengkareng', 'Jakarta Barat', '02154396458', '081574835591', 6, '2016-08-26 14:14:20'),
(70, '', '', 'Lintang Nawangsari', '', ', S.Hum', 2, 'Jakarta', '1976-10-29', 'islam', 'Gg.Al-Furqon Rt.003/08 No.116 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 8, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Gg.Al-Furqon Rt.003/08 No.116 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 8, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '085915917689', 6, '2016-08-26 14:15:31'),
(71, '', '', 'Nurjati Nugrahani', '', ', S.Pd', 2, 'Jakarta', '1973-06-06', 'islam', 'Jl.KH.Mustopa Rt.02/04 Cluster Baiti No.4 Kec. Cipondoh Kota Tangerang', 2, 4, '', 'Cipondoh', 'Tangerang', 'Jl.KH.Mustopa Rt.02/04 Cluster Baiti No.4 Kec. Cipondoh Kota Tangerang', 2, 4, '', 'Cipondoh', 'Tangerang', '0217304573', '085780925773', 6, '2016-08-26 14:26:15'),
(72, '', '', 'Romdhon', '', '', 1, 'Jakarta', '1965-02-09', 'islam', 'Gg. Annur 1 Rt. 03 Rw. 01 Kel. Poris Plawad Utara  Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Gg. Annur 1 Rt. 03 Rw. 01 Kel. Poris Plawad Utara  Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '0813893880109', 6, '2016-08-26 14:27:02'),
(73, '', '', 'Rus''an ', '', ', M.Pd.I', 1, 'Sambas', '1973-03-01', 'islam', 'Komp.Puri Dewata Indah Blok.E1 No.21 Rt. 05 Rw. 01 Kel.Poris Plawad Utara Cipondoh - Tangerang', 5, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Komp.Puri Dewata Indah Blok.E1 No.21 Rt. 05 Rw. 01 Kel.Poris Plawad Utara Cipondoh - Tangerang', 5, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '02192614277', '087882108664', 6, '2016-08-26 14:28:02'),
(74, '', '', 'Sevi Yenti', '', ', SE', 2, 'Padang', '1970-09-19', 'islam', 'Perum Grand Permata Blok O No.7 Kec. Sepatan Kab. Tangerang Propinsi Banten', 0, 0, '', 'Sepatan', 'Tangerang', 'Perum Grand Permata Blok O No.7 Kec. Sepatan Kab. Tangerang Propinsi Banten', 0, 0, '', 'Sepatan', 'Tangerang', '', '081310044290', 6, '2016-08-26 14:29:17'),
(75, '', '', 'Sohiyah Chariri', '', ', S.Pd', 2, 'Jakarta', '1974-03-14', 'islam', 'Kp. Duri Semanan Rt. 09 Rw. 01 Kel.Semanan Kec. Kalideres Jakarta Barat', 9, 1, 'Semanan', 'Kalideres', 'Jakarta Barat', 'Kp. Duri Semanan Rt. 09 Rw. 01 Kel.Semanan Kec. Kalideres Jakarta Barat', 9, 1, 'Semanan', 'Kalideres', 'Jakarta Barat', '02155458848', '08128566952', 6, '2016-08-26 14:30:33'),
(76, '', '', 'Sofyan', '', ', S.IP', 1, 'Jakarta', '1978-05-04', 'islam', 'Jl.Sekretaris Gg.H.Jangkung Rt.001/03 Kel. Cipete Kec. Pinang Kota Tangerang', 1, 3, 'Cipete', 'Pinang', 'Tangerang', 'Jl.Sekretaris Gg.H.Jangkung Rt.001/03 Kel. Cipete Kec. Pinang Kota Tangerang', 1, 3, 'Cipete', 'Pinang', 'Tangerang', '02196612934', '081212098545', 6, '2016-08-26 15:04:15'),
(77, '', '', 'Suharto', '', ', S.Pd.I', 1, 'Tegal', '1965-11-10', 'islam', 'Jl. Zeta V/375 Cimone Permai Kel. Karawaci BA R4 Rt. 04 Rw. 05 Kec. Karawaci Kota Tangerang', 4, 5, 'Karawaci', 'Karawaci', 'Tangerang', 'Jl. Zeta V/375 Cimone Permai Kel. Karawaci BA R4 Rt. 04 Rw. 05 Kec. Karawaci Kota Tangerang', 4, 5, 'Karawaci', 'Karawaci', 'Tangerang', '02155796210', '081315392965', 6, '2016-08-26 15:05:08'),
(78, '', '', 'Suramto', '', ', S.Hut', 1, 'Sragen', '1981-04-15', 'islam', 'Jl. Salira 3 No. 12 Perum 2 Rt. 04 Rw. 12 Kota Tangerang', 4, 12, '', '', 'Tangerang', 'Jl. Salira 3 No. 12 Perum 2 Rt. 04 Rw. 12 Kota Tangerang', 4, 12, '', '', 'Tangerang', '02155653219', '081808978979', 6, '2016-08-26 15:05:56'),
(79, '', '', 'Susilowati', '', ', S.Pd', 2, 'Jakarta', '1978-01-13', 'islam', 'Perum Puri Megah Jl.Akasia II Blok B2 No.20 Cipondoh Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', 'Perum Puri Megah Jl.Akasia II Blok B2 No.20 Cipondoh Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', '0215825944', '081514677901', 6, '2016-08-26 15:06:42'),
(80, '', '', 'Syahida', '', ', S.Pd.I', 1, 'Sukabumi', '1970-02-09', 'islam', 'Jl.Irahi Komp.PDK Rt. 01 Rw.10 Kel. Cipondoh Kota Tangerang', 1, 10, 'Cipondoh', '', 'Tangerang', 'Jl.Irahi Komp.PDK Rt. 01 Rw.10 Kel. Cipondoh Kota Tangerang', 1, 10, 'Cipondoh', '', 'Tangerang', '02190546016', '087808891101', 6, '2016-08-26 15:07:40'),
(81, '', '', 'Syamsiah', '', ', S.Pd.I', 2, 'Tangerang', '1976-03-05', 'islam', 'Jl.KH.Hasyim Ashari Kel. Kenanga Rt.01 Rw.02 Kec. Cipondoh Kota Tangerang', 1, 2, 'Kenanga', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Kel. Kenanga Rt.01 Rw.02 Kec. Cipondoh Kota Tangerang', 1, 2, 'Kenanga', 'Cipondoh', 'Tangerang', '02155746684', '083894397522', 6, '2016-08-26 15:10:24'),
(82, '', '', 'Yahya', '', ', S.Pd', 1, 'Tangerang', '1970-03-17', 'islam', 'Jl.KH.Hasyim Ashari Gg. Kosambi Rt.01 Rw.01 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg. Kosambi Rt.01 Rw.01 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '0215541229', '088212073467', 6, '2016-08-26 15:11:19'),
(83, '', '', 'Yati Duriat Ningsih', '', ', A.Ma', 2, 'Pandeglang', '1983-08-11', 'islam', 'Jl.Mahoni I No. 14 Perumnas II Rt. 02 Rw. 14 Kec. Cibodas Kota Tangerang', 2, 14, '', 'Cibodas', 'Tangerang', 'Jl.Mahoni I No. 14 Perumnas II Rt. 02 Rw. 14 Kec. Cibodas Kota Tangerang', 2, 14, '', 'Cibodas', 'Tangerang', '', '081213912341', 6, '2016-08-28 15:23:12'),
(84, '', '', 'Puji Astuti', '', ', S.Si', 2, 'Kulon Progo', '1972-01-01', 'islam', 'Kebon Nanas Rt. 01 Rw. 01 Kel. Panunggangan Utara Kec. Pinang Kota Tangerang', 1, 1, 'Panunggangan Utara', 'Pinang', 'Tangerang', 'Kebon Nanas Rt. 01 Rw. 01 Kel. Panunggangan Utara Kec. Pinang Kota Tangerang', 1, 1, 'Panunggangan Utara', 'Pinang', 'Tangerang', '', '089601512866', 6, '2016-08-28 15:23:14'),
(85, '', '', 'Lilis Aryani', '', ', ST', 2, 'Tangerang', '1980-01-15', 'islam', 'Kp. Laban Bulan Kel. Marga Sari Rt. 03 Rw.08 Kec. Karawaci Kota Tangerang', 3, 8, 'Marga sari', 'Karawaci', 'Tangerang', 'Kp. Laban Bulan Kel. Marga Sari Rt. 03 Rw.08 Kec. Karawaci Kota Tangerang', 3, 8, 'Marga Sari', 'Karawaci', 'Tangerang', '0215524025', '', 6, '2016-08-28 15:23:20'),
(86, '', '', 'Aif Hafiddin', '', ', S.Pd.I', 1, 'Cirebon', '1970-02-17', 'islam', 'Jl.KH.Dero No. 46 Rt.003/04 Kel. Panunggangan Kec. Pinang Kota Tangerang', 3, 4, 'Panunggangan', 'Pinang', 'Tangerang', 'Jl.KH.Dero No. 46 Rt.003/04 Kel. Panunggangan Kec. Pinang Kota Tangerang', 3, 4, 'Panunggangan', 'Pinang', 'Tangerang', '0215398741', '081254219138', 6, '2016-08-28 15:23:24'),
(87, '', '', 'Muchammad Mufid', '', '', 1, 'Temanggung', '1981-11-10', 'islam', 'Jl.KH.Mansur No.15 Rt.03 Rw. 03 Kel.Poris Plawad Indah Kec. Cipondoh - Tangerang', 3, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Mansur No.15 Rt.03 Rw. 03 Kel.Poris Plawad Indah Kec. Cipondoh - Tangerang', 3, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '0215544524', '081210785597', 6, '2016-08-28 15:23:27'),
(88, '', '', 'Murnah', '', ', A.Ma', 2, 'Tangerang', '1976-08-07', 'islam', 'Jl.Tugu Karya Perum. Sakinah Residence Blok. C15 Rt.005/003 Kel. Poris Plawad Utara Cpondoh- Tng', 5, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.Tugu Karya Perum. Sakinah Residence Blok. C15 Rt.005/003 Kel. Poris Plawad Utara Cpondoh- Tng', 5, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '087774417271', 6, '2016-08-28 15:23:31'),
(89, '', '', 'Suhendar', '', ', S.Pd.I', 1, 'Lampung', '1978-11-11', 'islam', 'Perum Griya Sarana BSD Blok G No.7 Rt.02 Rw.05 Kel.Pagedangan Kec.Pagedangan - Tangerang', 2, 5, 'Pagedangan', 'Pagedangan', 'Tangerang', 'Perum Griya Sarana BSD Blok G No.7 Rt.02 Rw.05 Kel.Pagedangan Kec.Pagedangan - Tangerang', 2, 5, 'Pagedangan', 'Pagedangan', 'Tangerang', '', '087771764363', 6, '2016-08-28 15:23:35'),
(90, '', '', 'Pasto Hanif', '', '', 1, 'Bojonegoro', '1971-01-06', 'islam', 'Poris Gaga Baru Rt. 02 Rw. 02 Kec. Cipondoh Kota Tangerang', 2, 2, '', 'Cipondoh', 'Tangerang', 'Poris Gaga Baru Rt. 02 Rw. 02 Kec. Cipondoh Kota Tangerang', 2, 2, '', 'Cipondoh', 'Tangerang', '', '081295102964', 6, '2016-08-28 15:58:47'),
(91, '', '', 'Siti Muchlisoh', 'Hj', ',S.Sos.I', 2, 'Tangerang', '1984-01-10', 'islam', 'Cluster Halimah Indah No.16B Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Cluster Halimah Indah No.16B Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '087774369691', 6, '2016-08-28 15:58:49'),
(92, '', '', 'Tika Pujiyanti', '', ', S.Pd.I', 2, 'Tangerang', '1987-04-28', 'islam', 'Kp. Marga  Jaya  Kel. Pakulonan Rt. 01 Rw.04 Kec. Serpong  Kab. Tangerang', 1, 4, 'Pakulonan', 'Serpong', 'Tangerang', 'Kp. Marga  Jaya  Kel. Pakulonan Rt. 01 Rw.04 Kec. Serpong  Kab. Tangerang', 1, 4, 'Pakulonan', 'Serpong', 'Tangerang', '0215399982', '085782631671', 6, '2016-08-28 15:58:51'),
(93, '', '', 'Arif Ita Wahyudi', '', '', 1, 'Subang', '1989-12-28', 'islam', 'Kamp. Buaran Betung Rt. 02 Rw.13  Kel. Cikokol Kota Tangerang', 2, 13, 'Cikokol', '', 'Tangerang', 'Kamp. Buaran Betung Rt. 02 Rw.13  Kel. Cikokol Kota Tangerang', 2, 13, '', 'Cikokol', 'Tangerang', '', '087887693595', 6, '2016-08-28 15:58:53'),
(94, '', '', 'Rizki Mubarok', '', ', S.Pd', 1, 'Tangerang', '1985-03-01', 'islam', 'Jl. Kemuning Perum. Banjar Wijaya Depan Kolam Renang Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Jl. Kemuning Perum. Banjar Wijaya Depan Kolam Renang Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '0215521148', '085693416693', 6, '2016-08-28 15:58:55'),
(95, '', '', 'Muadz Jamaludin', '', ',S.Pd.I', 1, 'Tangerang', '1988-10-26', 'islam', 'Jl.Irigasi Sipon Mesjid Raudlatusallam Kp.Gunung Cipondoh Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', 'Jl.Irigasi Sipon Mesjid Raudlatusallam Kp.Gunung Cipondoh Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', '0215549615', '085717167560', 6, '2016-08-28 15:58:57'),
(96, '', '', 'Nurhasim Hasbullah', '', ', SH.I', 1, 'Tangerang', '1989-04-02', 'islam', 'Jl.H.Baan Kel.Poris Plawad Indah Rt. 02 Rw.04 Kec. Cipondoh Kota Tangerang', 2, 4, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Jl.H.Baan Kel.Poris Plawad Indah Rt. 02 Rw.04 Kec. Cipondoh Kota Tangerang', 2, 4, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '02198523745', '081286398659', 6, '2016-08-28 15:59:00'),
(97, '', '', 'Istiningsih', '', ', S.Pd.I', 2, 'Magetan', '1981-05-23', 'islam', 'Pondok Arum Blok. D9  No.12A Rt.06 Rw.03 Kec. Karawaci Kota Tangerang', 6, 3, '', 'Karawaci', 'Tangerang', 'Pondok Arum Blok. D9  No.12A Rt.06 Rw.03 Kec. Karawaci Kota Tangerang', 6, 3, '', 'Karawaci', 'Tangerang', '', '08127440840', 6, '2016-08-28 16:17:43'),
(98, '', '', 'Suyati, S.Pd.I', '', '', 2, 'Pacitan', '1970-01-06', 'islam', 'Komp. Taman Kota Permai VI Keroncong Kel. Jati Uwung Rt. 04 Rw. 07 Tangerang', 4, 7, 'Jati Uwung', '', 'Tangerang', 'Komp. Taman Kota Permai VI Keroncong Kel. Jati Uwung Rt. 04 Rw. 07 Tangerang', 4, 7, 'Jati Uwung', '', 'Tangerang', '02196570598', '081280245614', 6, '2016-08-28 16:17:46'),
(99, '', '', 'Venny Supryati', '', ', S.Pd', 2, 'Jakarta', '1979-12-27', 'islam', 'Perum Permata Sepatan Blok. A/13 No.6 Rt.003/006 Sepatan Kab. Tangerang', 3, 6, '', 'Sepatan', 'Tangerang', 'Perum Permata Sepatan Blok. A/13 No.6 Rt.003/006 Sepatan Kab. Tangerang', 3, 6, '', 'Sepatan', 'Tangerang', '', '085215022250', 6, '2016-08-28 16:17:48'),
(100, '', '', 'Masuha', '', '', 2, 'Tangerang', '1981-01-17', 'islam', 'Gg. Jambu Kel. Buaran Indah Rt.002 Rw.06 - Kec. Tanah Tinggi Kota Tangerang', 2, 6, 'Buaran Indah', 'Tanah  Tinggi', 'Tangerang', 'Gg. Jambu Kel. Buaran Indah Rt.002 Rw.06 - Kec. Tanah Tinggi Kota Tangerang', 2, 6, 'Buaran Indah', 'Tanah Tinggi', 'Tangerang', '', '082125601876', 6, '2016-08-28 16:17:50'),
(101, '', '', 'Siti Mulyanah', '', ', S.Pd.I', 2, 'Tangerang', '1986-12-20', 'islam', 'Jl.Kihajar Dewantara No.15 Kel. Gondrong  Rt.01 Rw.06 Kec. Cipondoh Tangerang', 1, 6, 'Gondrong', 'Cipondoh', 'Tangerang', 'Jl.Kihajar Dewantara No.15 Kel. Gondrong  Rt.01 Rw.06 Kec. Cipondoh Tangerang', 1, 6, 'Gondrong', 'Cipondoh', 'Tangerang', '0215549055', '02190553069', 6, '2016-08-28 16:17:52'),
(102, '', '', 'Dede Rizkiyah', '', ', S.Pd.I', 2, 'Tangerang', '1986-05-06', 'islam', 'Jl.Kihadjar Dewantara No.01 Kel.Gondrong Rt. 01 Rw.06 Kec. Cipondoh Kota Tangerang', 1, 6, 'Gondrong', 'Cipondoh', 'Tangerang', 'Jl.Kihadjar Dewantara No.01 Kel.Gondrong Rt. 01 Rw.06 Kec. Cipondoh Kota Tangerang', 1, 6, 'Gondrong', 'Cipondoh', 'Tangerang', '', '081322886067', 6, '2016-08-28 16:17:55'),
(103, '', '', 'Nurina Ayuningtyas', '', ', S.Pd', 2, 'Bogor', '1988-05-11', 'islam', 'Komp. Segneg Blok. E5 No. 19 Kel. Panunggangan  Rt. 16 Rw. 003 Kec. Cipete Kota Tangerang ', 16, 3, 'Panunggangan', 'Cipete', 'Tangerang', 'Komp. Segneg Blok. E5 No. 19 Kel. Panunggangan  Rt. 16 Rw. 003 Kec. Cipete Kota Tangerang ', 16, 3, 'Panunggangan', 'Cipete', 'Tangerang', '02155740076', '085710177633', 6, '2016-08-28 16:17:57'),
(104, '', '', 'Irma Safitri', '', ', S.Pd.I', 2, 'Serang', '1990-01-04', 'islam', 'Jl.Irigasi Sipon Mesjid Raudlatusallam Kp.Gunung Cipondoh Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', 'Jl.Irigasi Sipon Mesjid Raudlatusallam Kp.Gunung Cipondoh Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', '', '085717167520', 6, '2016-08-28 18:33:31'),
(105, '', '', 'Istiningsih', '', ', S.Pd.I', 2, 'Tangerang', '1978-04-04', 'islam', 'Jl. KH.Hasyim Ashari  Kel. Buaran Indah Rt. 001 Rw. 008 Kec. Tangerang Kota Tangerang', 1, 8, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Jl. KH.Hasyim Ashari  Kel. Buaran Indah Rt. 001 Rw. 008 Kec. Tangerang Kota Tangerang', 1, 8, 'Buaran Indah', 'Tangerang', 'Tangerang', '', '085714704769', 6, '2016-08-28 18:34:43'),
(106, '', '', 'Mariatul Qibtiyah', '', ', S.Pd.I', 2, 'Tangerang', '1978-04-04', 'islam', 'Jl. KH.Hasyim Ashari  Kel. Buaran Indah Rt. 004 Rw. 002 Kec. Tangerang Kota Tangerang', 4, 2, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Jl. KH.Hasyim Ashari  Kel. Buaran Indah Rt. 004 Rw. 002 Kec. Tangerang Kota Tangerang', 4, 2, 'Buaran Indah', 'Tangerang', 'Tangerang', '', '02197203736', 6, '2016-08-28 18:35:58'),
(107, '', '', 'Novi Lutiawati', '', ', S.Pd.I', 2, 'Kediri', '1990-11-09', 'islam', 'Jl.KH.Hasyim Ashari Gg.An-Nuur 2 No.69 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.An-Nuur 2 No.69 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '085716191539', 6, '2016-08-28 18:37:02'),
(108, '', '', 'Abdul Wajid', '', '', 1, 'Tangerang', '1991-01-10', 'islam', 'Jl.KH.Mursan Gg. Masjid Al Munawaroh Rt.002/001  Kel. Belendung Kec. Benda Kota Tangerang', 2, 1, 'Belendung', 'Banda', 'Tangerang', 'Jl.KH.Mursan Gg. Masjid Al Munawaroh Rt.002/001  Kel. Belendung Kec. Benda Kota Tangerang', 2, 1, 'Belendung', 'Benda', 'Tangerang', '', '089513719241', 6, '2016-08-28 18:38:38'),
(109, '', '', 'Sayyid Mubarok', '', '', 1, 'Jakarta', '1994-09-03', 'islam', 'Jl. Pasar Minggu Kel. Kembangan Selatan Rt. 007/001 Jakarta', 7, 1, 'Kembang Selatan', '', 'Jakarta', 'Jl. Pasar Minggu Kel. Kembangan Selatan Rt. 007/001 Jakarta', 7, 1, 'Kembang Selatan', '', 'Jakarta', '', '081277665566', 6, '2016-08-28 18:39:47'),
(110, '', '', 'Solikhah', '', '', 2, 'Sampit', '1990-08-10', 'islam', 'Jl.KH.Hasyim Ashari Gg.Jambu Rt.003/005 Kel. Buaran Indah Kec. Tangerang Kota Tangerang', 3, 5, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.Jambu Rt.003/005 Kel. Buaran Indah Kec. Tangerang Kota Tangerang', 3, 5, 'Buaran Indah', 'Tangerang', 'Tangerang', '', '08999284361', 6, '2016-08-28 18:41:58'),
(111, '', '', 'Intan Novita Sari', '', ', SH.I', 2, 'Tangerang', '1985-11-11', 'islam', 'Jl. Maulana Hasanudin No.7 Kel. Cipondoh Rt.002/008 Kec. Cipondoh Kota Tangerang', 2, 8, 'Cipondoh', 'Cipondoh', 'Tangerang', 'Jl. Maulana Hasanudin No.7 Kel. Cipondoh Rt.002/008 Kec. Cipondoh Kota Tangerang', 2, 8, 'cipondoh', 'Cipondoh', 'Tangerang', '', '081803623811', 6, '2016-08-28 18:43:22'),
(112, '', '', 'Ulpah Alawiyah, S.Pd.I', '', '', 2, 'Tangerang', '1992-11-23', 'islam', 'Jl.KH.Ahmad Dahlan Rt.006/010 No.18 Kel. Petir Kec. Cipondoh Kota Tangerang', 6, 10, 'Petir', 'Cipondoh', 'Tangerang', 'Jl.KH.Ahmad Dahlan Rt.006/010 No.18 Kel. Petir Kec. Cipondoh Kota Tangerang', 6, 10, 'Petir', 'Cipondoh', 'Tangerang', '', '089636591915', 6, '2016-08-28 18:44:51'),
(113, '', '', 'Ayu Anistania', '', ', S.Pd', 2, 'Tangerang', '1992-09-28', 'islam', 'Jl. Nurul Yaqin Rt.004/04 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 4, 4, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Jl. Nurul Yaqin Rt.004/04 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 4, 4, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '', '082213222133', 6, '2016-08-28 18:46:08'),
(114, '', '', 'Putriyani', '', ', S.Pd', 2, 'Tangerang', '1991-03-06', 'islam', 'Jl.KH.Maulana Hasanudin No.16 Rt. 002 Rw.001 Tangerang', 2, 1, '', '', 'Tangerang', 'Jl.KH.Maulana Hasanudin No.16 Rt. 002 Rw.001 Tangerang', 2, 1, '', '', 'Tangerang', '', '089637616591', 6, '2016-08-28 18:47:55'),
(115, '', '', 'Selpiyanah', '', ', S.Pd', 2, 'Tangerang', '1992-09-05', 'islam', 'Jl.KH.Dewantoro Gg.H.Halim Rt.004 Rw.003 Kel. Gondrong Kota Tangerang', 4, 3, 'Gondrong', '', 'Tangerang', 'Jl.KH.Dewantoro Gg.H.Halim Rt.004 Rw.003 Kel. Gondrong Kota Tangerang', 4, 3, 'Gondrong', '', 'Tangerang', '', '083812135244', 6, '2016-08-28 18:49:27'),
(116, '', '', 'Litha Indriasti', '', ', S.Pd. SD', 2, 'Tangerang', '1992-08-02', 'islam', 'Jl. Damai No. 15 Rt.003/002 Kel. Kunciran Kec. Pinang Kota Tangerang', 3, 2, 'Kunciran', 'Pinang', 'Tangerang', 'Jl. Damai No. 15 Rt.003/002 Kel. Kunciran Kec. Pinang Kota Tangerang', 3, 2, 'Kunciran', 'Pinang', 'Tangerang', '', '085693812797', 6, '2016-08-29 05:26:21'),
(117, '', '', 'Bunga Juniarta', '', ', S.Pd.I', 2, 'Tangerang', '1989-06-21', 'islam', 'Jl. Kecubung 3 B 43 No.9 Rt. 007/005 Pondok Rezeki, Kutabaru Kota Tangerang', 7, 5, 'Kutabaru', '', 'Tangerang', 'Jl. Kecubung 3 B 43 No.9 Rt. 007/005 Pondok Rezeki, Kutabaru Kota Tangerang', 7, 5, 'Kutabaru', '', 'Tangerang', '', '08990760440', 6, '2016-08-29 05:27:43'),
(118, '', '', 'Tika Novalia', '', ', S.Pd. SD', 2, 'Pekan', '1989-11-10', 'islam', 'Gg. Annur Rt.001 Rw.005 Kel. Nerogtog Kec. Pinang Kota Tangerang', 1, 5, 'Nerogtog', 'Pinang', 'Tangerang', 'Gg. Annur Rt.001 Rw.005 Kel. Nerogtog Kec. Pinang Kota Tangerang', 1, 5, 'Nerogtog', 'Pinang', 'Tangerang', '', '082183521125', 6, '2016-08-29 05:29:05'),
(119, '', '', 'Rudi', '', '', 1, 'Tangerang', '1979-10-17', 'islam', 'Jl.KH.Agus Salim Gg. Masjid I Rt.002/006 Kec. Cipondoh Kota Tangerang', 2, 6, '', 'Cipondoh', 'Tangerang', 'Jl.KH.Agus Salim Gg. Masjid I Rt.002/006 Kec. Cipondoh Kota Tangerang', 2, 6, '', 'Cipondoh', 'Tangerang', '', '085694916670', 6, '2016-08-29 05:29:58'),
(120, '', '', 'Siti Herdiyanti', '', ', S.Pd', 2, 'Tangerang', '1991-07-10', 'islam', 'Kp. Jayanti Desa Cikande Rt. 015 Rw. 03Kec. Jayanti Kab. Tangerang ', 15, 3, '', 'Jayanti', 'Tangerang', 'Kp. Jayanti Desa Cikande Rt. 015 Rw. 03Kec. Jayanti Kab. Tangerang ', 15, 3, '', 'Jayanti', 'Tangerang', '', '081280101367', 6, '2016-08-29 05:31:04'),
(121, '', '', 'Asna Adhinurrofiq', '', ', S.Pd', 2, 'Surakarta', '1991-12-05', 'islam', 'Mertoudan Rt.008 Rw.009 Mojosongo Jebres Kab. Surakarta', 8, 9, '', '', 'Surakarta', 'Mertoudan Rt.008 Rw.009 Mojosongo Jebres Kab. Surakarta', 8, 9, '', '', 'Surakarta', '', '085600154202', 6, '2016-08-29 05:32:09'),
(122, '', '', 'Fitri Nuryanti Mardia', '', ', S.Pd', 2, 'Madiun', '1992-04-05', 'islam', 'Kp. Kelapa Indah Rt.001 Rw.004 No. 44 Kec. Kelapa Indah Kota Tangerang', 1, 4, '', 'Kelapa Indah', 'Tangerang', 'Kp. Kelapa Indah Rt.001 Rw.004 No. 44 Kec. Kelapa Indah Kota Tangerang', 1, 4, '', 'Kelapa Indah', 'Tangerang', '', '085692436361', 6, '2016-08-29 05:33:22'),
(123, '', '', 'Ipan Panduwinata', '', '', 1, 'Tangerang', '1997-03-27', 'islam', 'Jl. Pondok Aren No. 192  Kel. Pondok Aren Rt. 001 Rw.005 Kec. Pondok Aren Tangerang', 1, 5, 'Pondok Aren', 'Pondok Aren', 'Tangerang', 'Jl. Pondok Aren No. 192  Kel. Pondok Aren Rt. 001 Rw.005 Kec. Pondok Aren Tangerang', 1, 5, 'Pondok Aren', 'Pondok Aren', 'Tangerang', '', '089671595897', 6, '2016-08-29 05:34:46'),
(124, '', '', 'M. Rizki Noviadi', '', ', S.Kom', 1, 'Jakarta', '1990-11-27', 'islam', 'Perum. Dasana Indah Blok UC6/15 Kel. Bojong Nangka Kec. Kelapa dua Rt. 10 Rw.25 Kab. Tangerang', 10, 25, 'Bojong Nangka', 'Kelapa Dua', 'Tangerang', 'Perum. Dasana Indah Blok UC6/15 Kel. Bojong Nangka Kec. Kelapa dua Rt. 10 Rw.25 Kab. Tangerang', 10, 25, 'Bojong Nangka', 'Kelapa Dua', 'Tangerang', '', '08568519540', 6, '2016-08-29 05:40:54'),
(125, '', '', 'Siti Nihla Izzati', '', ', S.Pd', 2, 'Tangerang', '1991-07-13', 'islam', 'Jl. H.Kimung No.5 Kel. Belendung Rt. 004 Rw. 003 Kec. Benda Kota Tangerang', 4, 3, 'Belendung', 'Benda', 'Tangerang', 'Jl. H.Kimung No.5 Kel. Belendung Rt. 004 Rw. 003 Kec. Benda Kota Tangerang', 4, 3, 'Belendung', 'Benda', 'Tangerang', '', '082299594656', 6, '2016-08-29 05:42:04'),
(126, '', '', 'Yulianti Pratiwi', '', ', S.Pd', 2, 'Serang', '1993-07-26', 'islam', 'Jl. Letjen R Suprapto No. 24 Rt. 009 Rw. 004 Kota Cilegon', 9, 4, '', '', 'Cilegon', 'Jl. Letjen R Suprapto No. 24 Rt. 009 Rw. 004 Kota Cilegon', 9, 4, '', '', 'Cilegon', '', '081291208891', 6, '2016-08-29 05:44:36'),
(127, '', '', 'Miskah', '', ', S.Pd.I', 2, 'Tangerang', '1992-11-02', 'islam', 'Jl.KH.Mursan Kel. Belendung Rt. 003 Rw.005 Kec. Benda Kota Tangerang', 3, 5, 'Belendung', 'Benda', 'Tangerang', 'Jl.KH.Mursan Kel. Belendung Rt. 003 Rw.005 Kec. Benda Kota Tangerang', 3, 5, 'Belendung', 'Benda', 'Tangerang', '', '0838894699201', 6, '2016-08-29 05:45:59'),
(128, '', '', 'Yeni Febrina', '', ', S.Pd', 2, 'Tangerang', '1990-02-20', 'islam', 'Jl. Pepaya 4 No. 31 Pondok Makmur Kel.Kutabaru Rt.005 Rw. 007  Kec. Pasar Kemis Kab. Tangerang', 5, 7, 'Kutabaru', 'Pasar Kemis', 'Tangerang', 'Jl. Pepaya 4 No. 31 Pondok Makmur Kel.Kutabaru Rt.005 Rw. 007  Kec. Pasar Kemis Kab. Tangerang', 5, 7, 'Kutabaru', 'Pasar Kemis', 'Tangerang', '', '081808361252', 6, '2016-08-29 05:47:37'),
(129, '', '', 'Fitriah', '', ', S.Kom', 2, 'Jakarta', '1991-05-25', 'islam', 'Kp. Pulo Duri Kosambi RT.005 Rw.003 Kel. Kota Bambu Selatan Kec. Pal Merah Jakarta Barat', 5, 3, 'Bambu Selatan', 'Pal Merah', 'Jakarta Barat', 'Kp. Pulo Duri Kosambi RT.005 Rw.003 Kel. Kota Bambu Selatan Kec. Pal Merah Jakarta Barat', 5, 3, 'Bambu Selatan', 'Pal Merah', 'Jakarta Barat', '', '081297843013', 6, '2016-08-29 05:49:02'),
(130, '', '', 'Iyus Yusroh', '', '', 2, 'Lebak', '1990-04-05', 'islam', 'Kp. Bulak Teko Rt.003 Rw.011 Kel. Kali Deres Kec. Kali Deres  Jakarta Barat.', 3, 11, 'Kalideres', 'Kalideres', 'Jakarta Barat', 'Kp. Bulak Teko Rt.003 Rw.011 Kel. Kali Deres Kec. Kali Deres  Jakarta Barat.', 3, 11, 'Kalideres', 'Kalideres', 'Jakarta Barat', '', '089624463720', 6, '2016-08-29 05:50:40'),
(131, '', '', 'Mamat Rahmat', '', ', S.Pd', 1, 'Lebak', '1961-07-05', 'islam', 'Gg. Mesjid I Kel. Kenanga Rt. 03 Rw. 01 Kec. Cipondoh Kota Tangerang', 3, 1, 'Kenang', 'Cipondoh', 'Tangerang', 'Gg. Mesjid I Kel. Kenanga Rt. 03 Rw. 01 Kec. Cipondoh Kota Tangerang', 3, 1, 'Kenanga', 'Cipondoh', 'Tangerang', '02155741437', '081387402961', 6, '2016-08-29 09:45:02'),
(132, '', '', 'Nono Darsono', '', ', SE.I', 1, 'Pandeglang', '1978-09-20', 'islam', 'Gg. Annur I Rt. 03 Rw. 01 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Gg. Annur I Rt. 03 Rw. 01 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '081911007648', 6, '2016-08-29 09:46:00'),
(133, '', '', 'Dede Suryati', 'Hj. ', ', S.Pd', 2, 'Tangerang', '1967-06-21', 'islam', 'Jl.KH.Hasyim Ashari Gg.Hj.Halimah Rt.02 Rt.01 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.Hj.Halimah Rt.02 Rt.01 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '02155744754', '02194286254', 6, '2016-08-29 09:47:38'),
(134, '', '', 'Diana', '', ', S.Pd', 2, 'Jakarta', '1978-10-05', 'islam', 'Jl. Maulana Hasanuddin Kel. Poris Jaya Rt. 01 Rw. 03 Kec. Cipondoh Kota Tangerang', 1, 3, 'Poris Jaya', 'Cipondoh', 'Tangerang', 'Jl. Maulana Hasanuddin Kel. Poris Jaya Rt. 01 Rw. 03 Kec. Cipondoh Kota Tangerang', 1, 3, 'Poris Jaya', 'Cipondoh', 'Tangerang', '02155741855', '02198587158', 6, '2016-08-29 09:49:19'),
(135, '', '', 'Farida Kesuma Dewi', '', ',S.Kom', 2, 'Jakarta', '1980-06-10', 'islam', 'Jl.Nuri 1 No.64 Kel. Pinang Rt.09 Rw.01 Kec.Pinang Kota Tangerang', 9, 1, 'Pinang', 'Pinang', 'Tangerang', 'Jl.Nuri 1 No.64 Kel. Pinang Rt.09 Rw.01 Kec.Pinang Kota Tangerang', 9, 1, 'Pinang', 'Pinang', 'Tangerang', '0217315645', '081211653135', 6, '2016-08-29 09:50:29'),
(136, '', '', 'Agus Tani', '', '', 1, 'Tangerang', '1982-08-09', 'islam', 'Jl.KH.Hasyim Ashari Gg.Halimah Rt.02 Rw.01 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.Halimah Rt.02 Rw.01 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '02193964351', 6, '2016-08-29 09:51:54'),
(137, '', '', 'Ida Farida', '', ', S.Pd', 2, 'Tangerang', '1976-08-15', 'islam', 'Jl.KH.Hasyim Ashari Kel. Poris Plawad Utara Rt.03 Rw.01 Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Kel. Poris Plawad Utara Rt.03 Rw.01 Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '55751226', '081513801781', 6, '2016-08-29 09:53:10'),
(138, '', '', 'Sawanih', '', ', S.Pd', 1, 'Tangerang', '1973-11-11', 'islam', 'Jl.KH.Hasyim Ashari Gg.Kosambi Rt.01 Rw.01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.Kosambi Rt.01 Rw.01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '081519682524', 6, '2016-08-29 09:54:28');
INSERT INTO `as_pegawai` (`id_pegawai`, `foto_pegawai`, `nik`, `nama_lengkap`, `gelar_depan`, `gelar_belakang`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat_ktp`, `rt_ktp`, `rw_ktp`, `kelurahan_ktp`, `kecamatan_ktp`, `kota_ktp`, `alamat_tinggal`, `rt_tinggal`, `rw_tinggal`, `kelurahan_tinggal`, `kecamatan_tinggal`, `kota_tinggal`, `no_telepon`, `handphone`, `id_user`, `tanggal_input`) VALUES
(139, '', '', 'Siti Romlah', '', ', S.Pd', 2, 'Tangerang', '1985-04-24', 'islam', 'Jl.KH.Hasyim Ashari Gg.Kosambi Rt.01 Rw.01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.Kosambi Rt.01 Rw.01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '02195392044', 6, '2016-08-29 09:56:25'),
(140, '', '', 'Achmad Fadillah', '', ', S.Pd', 1, 'Tangerang', '1980-02-28', 'islam', 'Jl. KH.Hasyim Ashari Gang H.Husin RT 01/02 Poris Plawad Indah Cipondoh', 1, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Jl. KH.Hasyim Ashari Gang H.Husin RT 01/02 Poris Plawad Indah Cipondoh', 1, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '0215545596', '087881324871', 6, '2016-08-29 09:57:53'),
(141, '', '', 'Sri Sulastri', 'Dra. Hj.', '', 2, 'Tangerang', '1968-06-03', 'islam', 'Komp. Buana Permai Blok D4 Kel. Cipondoh Rt. 01 Rw. 09 Kota Tangerang', 1, 9, 'Cipondoh', '', 'Tangerang', 'Komp. Buana Permai Blok D4 Kel. Cipondoh Rt. 01 Rw. 09 Kota Tangerang', 1, 9, 'Cipondoh', '', 'Tangerang', '0215541013', '94678891', 6, '2016-08-29 09:59:11'),
(142, '', '', 'Siti Marini', '', ', S.pd', 2, 'Tangerang', '1979-12-26', 'islam', 'Jl. TMP Taruna C.2 No. 17 Rt. 001 Rw. 003 Kel. Sukaasih Kota Tangerang', 1, 3, 'Sukaasih', '', 'Tangerang', 'Jl. TMP Taruna C.2 No. 17 Rt. 001 Rw. 003 Kel. Sukaasih Kota Tangerang', 1, 3, 'Sukaasih', '', 'Tangerang', '', '02194883763', 6, '2016-08-29 10:00:40'),
(143, '', '', 'Zainil', '', ', S.Pd.I', 1, 'Palembang', '1973-05-16', 'islam', 'Perum Grand Permata Blok O No.7 Kec. Sepatan Kab. Tangerang Propinsi Banten', 0, 0, '', 'Sepatan', 'Tangerang', 'Perum Grand Permata Blok O No.7 Kec. Sepatan Kab. Tangerang Propinsi Banten', 0, 0, '', 'Sepatan', 'Tangerang', '', '02193411796', 6, '2016-08-29 10:04:27'),
(144, '', '', 'Suaebi', '', ', S.Ag', 1, 'Lebak', '1968-07-07', 'islam', 'Jl.Peta Selatan No. 68 Rt. 07 Rw.01 Kalideres Jakarta Barat', 7, 1, '', '', 'Jakarta Barat', 'Jl.Peta Selatan No. 68 Rt. 07 Rw.01 Kalideres Jakarta Barat', 7, 1, '', '', 'Jakarta Barat', '', '02195015210', 6, '2016-08-29 10:05:35'),
(145, '', '', 'Nurul Apriyanti', '', ', S.Pd', 2, 'Tangerang', '1990-04-03', 'islam', 'Jl.KH.Hasyim Ashari  Rt. 04 Rw.02  No. 84 Kel. Kenanga Kec. Cipondoh Kota Tangerang', 4, 2, 'Kenanga', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari  Rt. 04 Rw.02  No. 84 Kel. Kenanga Kec. Cipondoh Kota Tangerang', 4, 2, 'Kenanga', 'Cipondoh', 'Tangerang', '', '085697684165', 6, '2016-08-29 10:10:01'),
(146, '', '', 'Luqman Bani Hakim', '', '', 1, 'Tangerang', '1989-09-03', 'islam', 'Kp.Buaran Betung Kel. Cikokol Rt. 001/013 Kec. Tangerang Kota Tangerang', 1, 13, 'Cikokol', 'Tangerang', 'Tangerang', 'Kp.Buaran Betung Kel. Cikokol Rt. 001/013 Kec. Tangerang Kota Tangerang', 1, 13, 'Cikokol', 'Tangerang', 'Tangerang', '', '085711331039', 6, '2016-08-29 10:11:31'),
(147, '', '', 'Nurnaini', '', ', S.Pd.I', 2, 'Jakarta', '1986-11-11', 'islam', 'Perum Mediterania Blok. D1 No.22 Rt. 36 Rw.10  Tangerang', 36, 10, '', '', 'Tangerang', 'Perum Mediterania Blok. D1 No.22 Rt. 36 Rw.10  Tangerang', 36, 10, '', '', 'Tangerang', '', '085695705095', 6, '2016-08-29 10:19:05'),
(148, '', '', 'Budi Santoso', '', '', 1, 'Madura', '1982-08-15', 'islam', 'Jl. Jati Bunder Kel. Tanah Abang Rt. 011 Rw.014 Kec. Kebon Melati', 11, 14, 'Tanah Abang', 'Kebon Melati', 'Jakarta Pusat', 'Jl. Jati Bunder Kel. Tanah Abang Rt. 011 Rw.014 Kec. Kebon Melati', 11, 14, 'Tanah Abang', 'Kebon Melati', 'Jakarta Pusat', '', '087878623871', 6, '2016-08-29 10:20:42'),
(149, '', '', 'Rizki Taufik Rumoma', '', '', 1, 'Jakarta', '1997-08-18', 'islam', 'Jl.KH.Hasyim Ashari Gg.H.Husin Rt.003/002 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.H.Husin Rt.003/002 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '', '085244483346', 6, '2016-08-29 10:21:42'),
(150, '', '', 'Erlina Efendi', '', '', 2, 'Bogor', '1995-10-20', 'islam', 'Kp. Lio Rt. 001 Rw. 003 Desa Setu Kec. Jasinga Kab. Bogor', 1, 3, '', 'Jasinga', 'Bogor', 'Kp. Lio Rt. 001 Rw. 003 Desa Setu Kec. Jasinga Kab. Bogor', 1, 3, '', 'Jasinga', 'Bogor', '', '085719635527', 6, '2016-08-29 10:23:00'),
(151, '', '', 'Taufik Hidayat', '', ', S.Pd', 1, 'Sukabumi', '1981-08-16', 'islam', 'Kel. Cibodas Kecil Jl. Mastam Rt.002 Rw.003 Kec. Cimone Kota Tangerang', 2, 3, 'Cibodas', 'Cimone', 'Tangerang', 'Kel. Cibodas Kecil Jl. Mastam Rt.002 Rw.003 Kec. Cimone Kota Tangerang', 2, 3, 'Cibodas', 'Cimone', 'Tangerang', '', '085888747491', 6, '2016-08-29 10:24:06'),
(152, '', '', 'Mumlikah Hasanah', '', ', S.Pd', 2, 'Tangerang', '1993-07-04', 'islam', 'Jl. Irigasi Kp. Gunung  Kel. Cipondoh Rt. 001 Rw.009 Kec. Cipondoh Kota Tangerang', 1, 9, 'Cipondoh', 'Cipondoh', 'Tangerang', 'Jl. Irigasi Kp. Gunung  Kel. Cipondoh Rt. 001 Rw.009 Kec. Cipondoh Kota Tangerang', 1, 9, 'Cipondoh', 'Cipondoh', 'Tangerang', '', '085780355745', 6, '2016-08-29 10:25:09'),
(153, '', '', 'Robby Arie Koeswinarno', '', ', S.Pd', 1, 'Tangerang', '1988-11-23', 'islam', 'Perum. Alam Indah Blok. C4/2 Kel. Cipondoh Rt.001 Rw.005 Kec. Cipondoh Kota Tangerang', 1, 5, 'Cipondoh', 'Cipondoh', 'Tangerang', 'Perum. Alam Indah Blok. C4/2 Kel. Cipondoh Rt.001 Rw.005 Kec. Cipondoh Kota Tangerang', 1, 5, 'Cipondoh', 'Cipondoh', 'Tangerang', '', '081336670667', 6, '2016-08-29 10:26:15'),
(154, '', '', 'Matali Firmansyah', '', ', S.Ag', 1, 'Tangerang', '1973-08-05', 'islam', 'Jl.Karyawan II  Rt.03 Rw.09 Kel. Karang Tengah Kec. Karang Tengah Kota Tangerang', 3, 9, 'Karang Tengah', 'Karang Tengah', 'Tangerang', 'Jl.Karyawan II  Rt.03 Rw.09 Kel. Karang Tengah Kec. Karang Tengah Kota Tangerang', 3, 9, 'Karang Tengah', 'Karang Tengah', 'Tangerang', '0217336680', '081513029945', 6, '2016-08-29 12:30:58'),
(155, '', '', 'Haudoh', '', ', S.Pd', 2, 'Tangerang', '1972-10-17', 'islam', 'Jl. Al-Furqon Rt. 02 Rw. 03 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl. Al-Furqon Rt. 02 Rw. 03 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '0215544516', '02126262365', 6, '2016-08-29 12:32:08'),
(156, '', '', 'Agus Setiawan', '', ', S.Pd', 1, 'Jakarta', '1967-11-24', 'islam', 'Jl.H.Ridan 1 Rt. 01 Rw.01 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Jl.H.Ridan 1 Rt. 01 Rw.01 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '0215855371', '081315070617', 6, '2016-08-29 12:33:22'),
(157, '', '', 'Didih Murdiana', '', ', S.Ag', 1, 'Bogor', '1969-07-27', 'islam', 'Perum.Griya Karawaci Rt.01 Rw.19 Blok. B3 No.4 Curug Kab. Tangerang', 1, 19, '', '', 'Tangerang', 'Perum.Griya Karawaci Rt.01 Rw.19 Blok. B3 No.4 Curug Kab. Tangerang', 1, 19, '', '', 'Tangerang', '0215987260', '088977794129', 6, '2016-08-29 12:34:20'),
(158, '', '', 'Hadijah', '', ', S.Pd.I', 2, 'Tangerang', '1980-10-14', 'islam', 'Jl.KH.Hasyim Ashari Kel.Buaran Indah Rt.01 Rw.08 Kota Tangerang', 1, 8, 'Buaran Indah', '', 'Tangerang', 'Jl.KH.Hasyim Ashari Kel.Buaran Indah Rt.01 Rw.08 Kota Tangerang', 1, 8, 'Buaran Indah', '', 'Tangerang', '', '08567730981', 6, '2016-08-29 12:35:25'),
(159, '', '', 'Hanifah Maiyani', '', ', S.Pd.I', 2, 'Tangerang', '1983-05-22', 'islam', 'Jl.Perintis 3 No. 17 Rt. 03 Rw.06 Kel. Sukasari Kota Tangerang', 3, 6, 'Sukasari', '', 'Tangerang', 'Jl.Perintis 3 No. 17 Rt. 03 Rw.06 Kel. Sukasari Kota Tangerang', 3, 6, 'Sukasari', '', 'Tangerang', '0215583488', '02193812617', 6, '2016-08-29 12:37:06'),
(160, '', '', 'Imas Yuyun', '', ', S.Sos', 2, 'Tasikmalaya', '1977-01-01', 'islam', 'Graha Sevilla T II No. 29  Rt. 03 Rw. 07 Citra Raya Ciakar Panongan Tangerang', 3, 7, '', '', 'Tangerang', 'Graha Sevilla T II No. 29  Rt. 03 Rw. 07 Citra Raya Ciakar Panongan Tangerang', 3, 7, '', '', 'Tangerang', '02133558085', '08128526715', 6, '2016-08-29 12:38:13'),
(161, '', '', 'Komalasari', '', ', S.Pd.I', 2, 'Jakarta', '1980-08-30', 'islam', 'Perum. Dasana Indah TF.2 No. 16 Tangerang', 0, 0, '', '', 'Tangerang', 'Perum. Dasana Indah TF.2 No. 16 Tangerang', 0, 0, '', '', 'Tangerang', '0215462912', '02195414619', 6, '2016-08-29 12:40:13'),
(162, '', '', 'Nahwan Setiawan', '', ', M.Pd.I', 1, 'Tangerang', '1974-06-29', 'islam', 'Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '', '0818918325', 6, '2016-08-29 12:57:36'),
(163, '', '', 'Nani Nurmaya', '', ', S.Pd.I', 2, 'Tangerang', '1969-08-01', 'islam', 'Jl.KH.Hasyim Ashari Gg.Kramat Nerogtog Rt. 03 Rw.02 Kec. Pinang Kota Tangerang', 3, 2, '', 'Pinang', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.Kramat Nerogtog Rt. 03 Rw.02 Kec. Pinang Kota Tangerang', 3, 2, '', 'Pinang', 'Tangerang', '02155756709', '085697395206', 6, '2016-08-29 12:59:03'),
(165, '', '', 'Nining Nur''aini', '', ', S.Pd.I', 1, 'Tangerang', '1978-06-04', 'islam', 'Jl.KH. Agus Salim Rt. 01 Rw. 06 Kec. Cipondoh Kota Tangerang', 1, 6, '', 'Cipondoh', 'Tangerang', 'Jl.KH. Agus Salim Rt. 01 Rw. 06 Kec. Cipondoh Kota Tangerang', 1, 6, '', 'Cipondoh', 'Tangerang', '02155793045', '081218398363', 6, '2016-08-29 13:06:10'),
(166, '', '', 'Abdul Roup', '', ', M.Pd.I', 1, 'Jakarta', '1967-08-22', 'islam', 'Jl.Panglima Polim Kel. Poris Plawad Utara Rt. 02 Rw.02 Kec. Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.Panglima Polim Kel. Poris Plawad Utara Rt. 02 Rw.02 Kec. Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '081316627357', 6, '2016-08-29 13:41:53'),
(167, '', '', 'Nurasiah Jamil', '', ', S.Pd.I', 2, 'Tangerang', '1977-03-07', 'islam', 'Jl.Hr. Rasuna Said Rt. 03 Rw.03 Kel. Cipete Kec. Pinang Kota Tangerang', 3, 3, 'Cipete', 'Pinang', 'Tangerang', 'Jl.Hr. Rasuna Said Rt. 03 Rw.03 Kel. Cipete Kec. Pinang Kota Tangerang', 3, 3, 'Cipete', 'Pinang', 'Tangerang', '', '08156046598', 6, '2016-08-29 13:42:57'),
(168, '', '', 'Nurjanah', '', ', S.Pd.I', 2, 'Jakarta', '1970-04-27', 'islam', 'Jl.KH.Hasyim Ashari Kel. Sudimara Pinang Rt. 01 Rw. 03 Kec. Pinang Kota Tangerang', 1, 3, 'Sudimara', 'Pinang', 'Tangerang', 'Jl.KH.Hasyim Ashari Kel. Sudimara Pinang Rt. 01 Rw. 03 Kec. Pinang Kota Tangerang', 1, 3, 'Sudimara', 'Pinang', 'Tangerang', '', '081806723825', 6, '2016-08-29 13:44:40'),
(169, '', '', 'Syaiful Hayat', '', '. M.Pd', 1, 'Tangerang', '1976-06-20', 'islam', 'Jl. Panglima Polim Rt. 01 Rw. 03 Cipondoh Kota Tangerang', 1, 3, '', 'Cipondoh', 'Tangerang', 'Jl. Panglima Polim Rt. 01 Rw. 03 Cipondoh Kota Tangerang', 1, 3, '', 'Cipondoh', 'Tangerang', '02155740505', '02192136567', 6, '2016-08-29 13:46:44'),
(170, '', '', 'Selamet', '', ', S.Ag', 1, 'Tangerang', '1970-03-14', 'islam', 'Jl.KH.Hasyim Ashari Rt. 02 Rw.05 Kel. Buaran Indah Tangerang', 2, 5, 'Buaran Indah', '', 'Tangerang', 'Jl.KH.Hasyim Ashari Rt. 02 Rw.05 Kel. Buaran Indah Tangerang', 2, 5, 'Buaran Indah', '', 'Tangerang', '02155743365', '081323706163', 6, '2016-08-29 13:47:58'),
(171, '', '', 'Sri Bejo', '', '', 1, 'Cilacap', '1973-03-29', 'islam', 'Jl.Karyawan II Karang Tengah Rt.03 Rw.09 Kec. Cileduk Kota Tangerang', 3, 9, '', 'Cileduk', 'Tangerang', 'Jl.Karyawan II Karang Tengah Rt.03 Rw.09 Kec. Cileduk Kota Tangerang', 3, 9, '', 'Cileduk', 'Tangerang', '', '081314825007', 6, '2016-08-29 13:49:09'),
(172, '', '', 'Sri Mulyani', '', ', S.Pd.I', 2, 'Tangerang', '1979-07-14', 'islam', 'Jl.KH.Mansur Rt.01 Rw.03 Kec. Pinang Kota Tangerang', 1, 3, '', 'Pinang', 'Tangerang', 'Jl.KH.Mansur Rt.01 Rw.03 Kec. Pinang Kota Tangerang', 1, 3, '', 'Pinang', 'Tangerang', '0217300485', '02198987437', 6, '2016-08-29 13:50:27'),
(173, '', '', 'Tuti Herawati', '', ', S.Pd', 2, 'Tangerang', '1976-05-05', 'islam', 'Jl.Puskesmas Rt.03 Rw.05 Kel. Pondok Aren Kec.Pondok Aren Kota Tangerang', 3, 5, 'Pondok Aren', 'Pondok Aren', 'Tangerang', 'Jl.Puskesmas Rt.03 Rw.05 Kel. Pondok Aren Kec.Pondok Aren Kota Tangerang', 3, 5, 'Pondok Aren', 'Pondok Aren', 'Tangerang', '02196619018', '', 6, '2016-08-29 13:51:38'),
(174, '', '', 'Yanto Hartono', '', ', S.Pd', 1, 'Majalengka', '1980-08-09', 'islam', 'Perum. Dasana Indah TF.2 No. 16 Tangerang', 0, 0, '', '', 'Tangerang', 'Perum. Dasana Indah TF.2 No. 16 Tangerang', 0, 0, '', '', 'Tangerang', '02195414619', '', 6, '2016-08-29 13:53:40'),
(175, '', '', 'Yayan Melly Apriyani', '', ', S.TP', 2, 'Tangerang', '1975-04-17', 'islam', 'Jl.Cempedak No. 157 / 32 Sukaasih Kota Tangerang', 0, 0, '', '', 'Tangerang', 'Jl.Cempedak No. 157 / 32 Sukaasih Kota Tangerang', 0, 0, '', '', 'Tangerang', '0215518458', '081513869414', 6, '2016-08-29 13:54:44'),
(176, '', '', 'Sarah', '', '', 2, 'Tangerang', '1965-07-19', 'islam', 'Kel. Buaran Indah Rt. 03 Rw. 15 Tangerang', 3, 15, '', '', 'Tangerang', 'Kel. Buaran Indah Rt. 03 Rw. 15 Tangerang', 3, 15, '', '', 'Tangerang', '', '', 6, '2016-08-29 13:58:13'),
(177, '', '', 'Siti Ahadiyat', '', ', S.Pd', 2, 'Rangkas Bitung', '1987-07-25', 'islam', 'Jl.Khatim Rangkas Bitung Rt. 03 Rw. 03 Lebak Banten', 3, 3, '', '', 'Banten', 'Jl.Khatim Rangkas Bitung Rt. 03 Rw. 03 Lebak Banten', 3, 3, '', '', 'Banten', '', '081389707104', 6, '2016-08-29 14:01:04'),
(178, '', '', 'Rohati', '', ', S.Pd', 2, 'Tangerang', '1980-07-16', 'islam', 'Jl. HR. Rasuna Said  Kel. Cipete Rt. 001 Rw. 003 Kec. Pinang Kota Tangerang', 1, 3, 'Cipete', 'Pinang', 'Tangerang', 'Jl. HR. Rasuna Said  Kel. Cipete Rt. 001 Rw. 003 Kec. Pinang Kota Tangerang', 1, 3, 'Cipete', 'Pinang', 'Tangerang', '02196755552', '02197774405', 6, '2016-08-29 14:02:18'),
(179, '', '', 'Yudi Sutaryo', '', '', 1, 'Tangerang', '1977-11-06', 'islam', 'Kom. Taman Permata Blok.B/12 Rt. 001 Rw. 007 Kel. Cipondoh Kota Tangerang', 1, 7, 'Cipondoh', '', 'Tangerang', 'Kom. Taman Permata Blok.B/12 Rt. 001 Rw. 007 Kel. Cipondoh Kota Tangerang', 1, 7, 'Cipondoh', '', 'Tangerang', '', '082330169559', 6, '2016-08-29 14:03:38'),
(180, '', '', 'Yuli  Wahyudin ', '', ', S.Pd.I', 2, 'Tangerang', '1973-06-23', 'islam', 'Jl. Kisamaun Jl. Perintis III No. 5 Kel. Sukasari Kota Tangerang', 0, 0, 'Sukasari', '', 'Tangerang', 'Jl. Kisamaun Jl. Perintis III No. 5 Kel. Sukasari Kota Tangerang', 0, 0, 'Sukasari', '', 'Tangerang', '', '081210360101', 6, '2016-08-29 14:04:37'),
(181, '', '', 'Mawaddah Warohmah', '', ',S.Pd', 2, 'Tangerang', '1991-06-20', 'islam', 'Jl. Salak No.11 No. 54 Pasar anyar  Rt.002/04 Kota  Tangerang', 2, 4, '', '', 'Tangerang', 'Jl. Salak No.11 No. 54 Pasar anyar  Rt.002/04 Kota  Tangerang', 2, 4, '', '', 'Tangerang', '', '083815429219', 6, '2016-08-30 05:42:21'),
(182, '', '', 'Jelita Aprianingsih', '', ', S.Pd.I', 2, 'Jakarta', '1991-03-30', 'islam', 'Kp. Sawah Dalam Rt. 02 Rw.05 Kel. Panunggangan Utara  Kec.Pinang Kota Tangerang', 2, 5, 'Panunggangan Utara', 'Pinang', 'Tangerang', 'Kp. Sawah Dalam Rt. 02 Rw.05 Kel. Panunggangan Utara  Kec.Pinang Kota Tangerang', 2, 5, 'Panunggangan Utara', 'Pinang', 'Tangerang', '', '083895970893', 6, '2016-08-30 05:43:33'),
(183, '', '', 'Sekar Indah Septiani', '', ', S.Pd', 2, 'Tangerang', '1990-09-19', 'islam', 'Jl.Maulana Hasanudin Rt. 06 Rw.03 Kec. Cipondoh Kota Tangerang', 6, 3, '', 'Cipondoh', 'Tangerang', 'Jl.Maulana Hasanudin Rt. 06 Rw.03 Kec. Cipondoh Kota Tangerang', 6, 3, '', 'Cipondoh', 'Tangerang', '', '082117888978', 6, '2016-08-30 05:44:31'),
(184, '', '', 'Siti Wardah', '', ', S.Pd', 2, 'Jakarta', '1992-06-22', 'islam', 'Jl. Alfallah I Duri Kosambi Kel. Cengkareng Rt. 10 Rw. 08 Jakarta Barat', 10, 8, '', 'Cengkareng', 'Jakarta Barat', 'Jl. Alfallah I Duri Kosambi Kel. Cengkareng Rt. 10 Rw. 08 Jakarta Barat', 10, 8, '', 'Cengkareng', 'Jakarta Barat', '', '083898393962', 6, '2016-08-30 05:45:57'),
(185, '', '', 'Alit Kurnia', '', '', 2, 'Tangerang', '1974-11-07', 'islam', 'Cluster Halimah Indah Rt. 02 Rw. 01 Kel. Poris Plawad Utara Cipondoh Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Cluster Halimah Indah Rt. 02 Rw. 01 Kel. Poris Plawad Utara Cipondoh Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '02192587332', 6, '2016-08-30 05:46:57'),
(186, '', '', 'Mardani', '', '', 1, 'Tangerang', '1987-07-26', 'islam', 'Jl.KH.Hasyim Ashari Km.3 Gg.Annur 2 Rt. 05 Rw.01 Kel. Poris Plawad Utara Kec. Cipondoh - Tangerang', 5, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Km.3 Gg.Annur 2 Rt. 05 Rw.01 Kel. Poris Plawad Utara Kec. Cipondoh - Tangerang', 5, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '02199232600', 6, '2016-08-30 05:48:09'),
(187, '', '', 'Ahmad Jubaedi', '', ', S.Pd.I', 1, 'Majalengka', '1989-11-24', 'islam', 'Kel. Pasar Baru Rt.005/002 Tangerang', 5, 2, 'Pasar Baru', '', 'Tangerang', 'Kel. Pasar Baru Rt.005/002 Tangerang', 5, 2, 'Pasar Baru', '', 'Tangerang', '', '085711294214', 6, '2016-08-30 05:49:42'),
(188, '', '', 'Nana Putri Fikriyani', '', ', S.Pd', 2, 'Tangerang', '1992-02-23', 'islam', 'Jl. Raden Saleh Gg.Daarul Falah No.4 Kel. Karang Tengah Rt.002/013 Kec. Karang Tengah Kota Tangerang', 2, 13, 'Karang Tengah', 'Karang Tengah', 'Tangerang', 'Jl. Raden Saleh Gg.Daarul Falah No.4 Kel. Karang Tengah Rt.002/013 Kec. Karang Tengah Kota Tangerang', 2, 13, 'Karang Tengah', 'Karang Tengah', 'Tangerang', '', '089664165493', 6, '2016-08-30 05:51:02'),
(189, '', '', 'Uswatun Hasanah', '', ', S.Pd', 2, 'Ngawi', '1984-03-12', 'islam', 'Komp.LP anak Pria Kel. Sukaasih Rt.001 /001 Kec. Cipondoh Kota Tangerang', 1, 1, 'Sukaasih', 'Cipondoh', 'Tangerang', 'Komp.LP anak Pria Kel. Sukaasih Rt.001 /001 Kec. Cipondoh Kota Tangerang', 1, 1, 'Sukaasih', 'Cipondoh', 'Tangerang', '', '089631841185', 6, '2016-08-30 05:52:25'),
(190, '', '', 'Herlinda', '', ', S.Pd', 2, 'Kuningan', '1989-02-11', 'islam', 'Jl.Kalimantan 11 DM17 Kel. Kunciran Kec. Pinang Tangerang', 0, 0, 'Kunciran', 'Pinang', 'Tangerang', 'Jl.Kalimantan 11 DM17 Kel. Kunciran Kec. Pinang Tangerang', 0, 0, 'Kunciran', 'Pinang', 'Tangerang', '', '085711513530', 6, '2016-08-30 05:53:59'),
(191, '', '', 'Bunga Desnia', '', ', S.S', 2, 'Jakarta ', '1989-12-08', 'islam', 'Jl.KH.Maulana Hasanuddin Kom.Puri Permata H2/19 Kel. Cipondoh Rt.006 Rw.012 Kec. Cipondoh Kota Tangerang', 6, 12, 'Cipondoh', 'Cipondoh', 'Tangerang', 'Jl.KH.Maulana Hasanuddin Kom.Puri Permata H2/19 Kel. Cipondoh Rt.006 Rw.012 Kec. Cipondoh Kota Tangerang', 6, 12, 'Cipondoh', 'Cipondoh', 'Tangerang', '', '08989255185', 6, '2016-08-30 06:08:38'),
(192, '', '', 'Siti Maisyaroh', '', ', S.Pd.I', 2, 'Lampung', '1980-07-20', 'islam', 'Kamp.Kamurang atas Kel. Paku alam Rt.005/001 Kec. Serpong Utara Kab. Tangerang', 5, 1, 'Paku Alam', 'Serpong Utara', 'Tangerang', 'Kamp.Kamurang atas Kel. Paku alam Rt.005/001 Kec. Serpong Utara Kab. Tangerang', 5, 1, 'Paku Alam', 'Serpong', 'Tangerang', '', '087770088464', 6, '2016-08-30 06:09:54'),
(193, '', '', 'Zainudin Rusadi', '', '', 1, 'Kuningan', '1990-11-30', 'islam', 'Jl.Taman Asri Lama No. 79 Kel. Cipadu Rt.006/08 Kec. Larangan Kota Tangerang', 6, 8, 'Cipadu', 'Larangan', 'Tangerang', 'Jl.Taman Asri Lama No. 79 Kel. Cipadu Rt.006/08 Kec. Larangan Kota Tangerang', 6, 8, 'Cipadu', 'Larangan', 'Tangerang', '', '081316792863', 6, '2016-08-30 06:11:13'),
(194, '', '', 'Atika Sari', '', ', S.Pd', 2, 'Pampangan Oki,', '1990-06-13', 'islam', 'Jl.Meteorologi Gg. Sirsak Rt.001 Rw.011 Kel. Tanah Tinggi Kota Tangerang', 1, 11, 'Tanah Tinggi', '', 'Tangerang', 'Jl.Meteorologi Gg. Sirsak Rt.001 Rw.011 Kel. Tanah Tinggi Kota Tangerang', 1, 11, 'Tanah Tinggi', '', 'Tangerang', '', '08980806431', 6, '2016-08-30 06:13:57'),
(195, '', '', 'Rahman', '', '', 1, 'Tangerang, ', '1967-05-07', 'islam', 'Kel. Poris Plawad Rt. 001 Rw.003 Kec. Cipondoh Kota Tangerang', 1, 3, 'Poris Plawad', 'Cipondoh', 'Tangerang', 'Kel. Poris Plawad Rt. 001 Rw.003 Kec. Cipondoh Kota Tangerang', 1, 3, 'Poris Plawad', 'Cipondoh', 'Tangerang', '', '085966176805', 6, '2016-08-30 06:17:27'),
(196, '', '', 'Noor Choirul', '', ', S.Pd', 1, 'Sleman', '1991-12-06', 'islam', 'Jl. Irmas Kp. Buaran Betung Rt.001/ Rw.013 No.11 Kel. Cikokol  Kota Tangerang', 1, 13, 'Cikokol', '', 'Tangerang', 'Jl. Irmas Kp. Buaran Betung Rt.001/ Rw.013 No.11 Kel. Cikokol  Kota Tangerang', 1, 13, 'Cikokol', '', 'Tangerang', '', '08978349946', 6, '2016-08-30 06:26:55'),
(197, '', '', 'Kurniasih', '', ', S.Pd.I', 2, 'Tangerang', '1991-10-28', 'islam', 'Kp. Ketapang Rt. 002 Rw.004 Kel. Ketapang Kec. Cipondoh Kota Tangerang', 2, 4, 'Ketapang', 'Cipondoh', 'Tangerang', 'Kp. Ketapang Rt. 002 Rw.004 Kel. Ketapang Kec. Cipondoh Kota Tangerang', 2, 4, 'Ketapang', 'Cipondoh', 'Tangerang', '', '08998193527', 6, '2016-08-30 06:29:51'),
(198, '', '', 'Dede Gusliawati', '', '', 2, 'Tangerang ', '1993-08-29', 'islam', 'Kel.Karang Tengah Jl.Karyawan 1 Rt.006/005 No.82 Kec. Karang Tengah Kota Tangerang', 6, 5, 'Karang Tengah', 'Karang Tengah', 'Tangerang', 'Kel.Karang Tengah Jl.Karyawan 1 Rt.006/005 No.82 Kec. Karang Tengah Kota Tangerang', 6, 5, 'Karang Tengah', 'Karang Tengah', 'Tangerang', '', '089601450747', 6, '2016-08-30 06:48:24'),
(199, '', '', 'Lela Rismawati', '', ', S.Pd', 2, 'Tangerang ', '1989-09-14', 'islam', 'Perum.Bangun Reksa Indah Jl.Sunan Giri Rt.008/006 Blok.Q.6 Kel. Ciledug Kota Tangerang', 8, 6, 'Ciledug', '', 'Tangerang', 'Perum.Bangun Reksa Indah Jl.Sunan Giri Rt.008/006 Blok.Q.6 Kel. Ciledug Kota Tangerang', 8, 6, 'Ciledug', '', 'Tangerang', '', '085719422697', 6, '2016-08-30 06:51:49'),
(200, '', '', 'Silmi Nadiyah', '', '', 2, 'Jakarta', '1996-04-27', 'islam', 'Perum. Periuk Jaya Permai Jl. Angsana X No.105 Rt.006 Rw.005 Kota Tangerang', 6, 5, '', '', 'Tangerang', 'Perum. Periuk Jaya Permai Jl. Angsana X No.105 Rt.006 Rw.005 Kota Tangerang', 6, 5, '', '', 'Tangerang', '', '08561720332', 6, '2016-08-30 06:52:55'),
(201, '', '', 'Briliani Tihar', '', 'S.Pd', 2, 'Jakarta', '1992-07-30', 'islam', '-', 0, 0, '', '', '-', '-', 0, 0, '', '', '-', '', '', 6, '2016-08-30 06:54:49'),
(202, '', '', 'Rizki Ramadhan', '', '', 1, 'Tangerang', '1995-03-03', 'islam', 'Jl. Karyawan 1 Rt.001 Rw.005 Kel. Karang Tengah Kota Tangerang', 1, 5, 'Karang Tengah', '', 'Tangerang', 'Jl. Karyawan 1 Rt.001 Rw.005 Kel. Karang Tengah Kota Tangerang', 1, 5, 'Karang Tengah', '', 'Tangerang', '', '083877222337', 6, '2016-08-30 06:55:45'),
(203, '', '', 'Nurul Fazriah', '', ', S.Pd', 2, 'Pandeglang', '1993-09-13', 'islam', 'Perum. Bumi Indah Blok FR.10 Rt. 004 Rw. 10 Kel. Sukamantri Kec. Pasar Kemis Kab. Tangerang', 4, 10, 'Sukamantri', 'Pasar Kemis', 'Tangerang', 'Perum. Bumi Indah Blok FR.10 Rt. 004 Rw. 10 Kel. Sukamantri Kec. Pasar Kemis Kab. Tangerang', 4, 10, 'Sukamantri', 'Pasar Kemis', 'Tangerang', '', '085775938812', 6, '2016-08-30 06:58:06'),
(204, '', '', 'Amanda Aristya Noviandari', '', ',SH.I', 2, 'Lhokseumawe', '1991-11-15', 'islam', 'Jl. Pesantren Al-Makmur No. 66B  Kel. Kreo Selatan Rt. 002 Rw. 007 Kec. Larangan  Kota Tangerang', 2, 7, 'Kreo Selatan', 'Larangan', 'Tangerang', 'Jl. Pesantren Al-Makmur No. 66B  Kel. Kreo Selatan Rt. 002 Rw. 007 Kec. Larangan  Kota Tangerang', 2, 7, 'Kreo Selatan', 'Larangan', 'Tangerang', '', '082331508233', 6, '2016-08-30 06:59:15'),
(205, '', '', 'Aspiul Aspia', '', ', S.Pd.I', 2, 'Bandung', '1992-04-21', 'islam', 'Jl. Islamic Raya No.1 Kelapa Dua Rt. 007 Rw.014 Kab. Tangerang', 7, 12, '', '', 'Tangerang', 'Jl. Islamic Raya No.1 Kelapa Dua Rt. 007 Rw.014 Kab. Tangerang', 7, 14, '', '', 'Tangerang', '', '087808692054', 6, '2016-08-30 07:00:14'),
(206, '', '', 'Muhammad Mu''taz Syafiq', '', '', 1, 'Tangerang', '0000-00-00', 'islam', 'Serdang Asri  2 Jl. Rajawali Blok. E9 No.11 Perum. Citra Raya Cikupa Kab. Tangerang ', 0, 0, '', '', 'Tangerang', 'Serdang Asri  2 Jl. Rajawali Blok. E9 No.11 Perum. Citra Raya Cikupa Kab. Tangerang ', 0, 0, '', '', 'Tangerang', '', '083813019230', 6, '2016-08-30 07:01:24'),
(207, '', '', 'Wachyudin Farabi', '', '', 1, 'Jakarta', '1995-01-11', 'islam', 'Jl. Dr.Cipto Mangunkusumo Rt.002 Rw.007 No.29 Kec. Peninggilan Kota Tangerang', 2, 7, '', 'Peninggilan', 'Tangerang', 'Jl. Dr.Cipto Mangunkusumo Rt.002 Rw.007 No.29 Kec. Peninggilan Kota Tangerang', 2, 7, '', 'Peninggilan', 'Tangerang', '', '08999911283', 6, '2016-08-31 08:16:21'),
(208, '', '', 'Pratama', '', ', M.Pd', 1, 'Klaten', '1971-04-27', 'islam', 'Taman Kota Permai Blok. A3 No.12 Rt. 04 Rw. 07 Kel. Keroncong Kec. Jatiuwung Kota Tangerang', 4, 7, 'Keroncog', 'Jatiuwung', 'Tangerang', 'Taman Kota Permai Blok. A3 No.12 Rt. 04 Rw. 07 Kel. Keroncong Kec. Jatiuwung Kota Tng', 4, 7, 'Keroncong', 'Jatiuwung', 'Tangerang', '02195247816', '081393240620', 6, '2016-09-06 06:24:15'),
(209, '', '', 'Mohammad Haifan', 'Ir. ', ', M.Agr', 1, 'Purworejo ', '1963-11-17', 'islam', 'Jl. Intan II Blok BB-13 Villa Mutiara, Ciputat Tangerang Selatan 15413', 0, 0, '', '', 'Tangerang', 'Jl. Intan II Blok BB-13 Villa Mutiara, Ciputat Tangerang Selatan 15413', 0, 0, '', '', 'Tangerang', '0217498368', '0818908752', 6, '2016-09-06 06:26:51'),
(210, '', '', 'Sanusi HMA', 'H. ', ', S.Ag,MM', 1, 'Tangerang ', '1970-10-14', 'islam', 'Jl.KH. Agus Salim Gg. Masjid II Rt. 03 Rw. 04 Kec. Cipondoh Kota Tangerang', 3, 4, '', 'Cipondoh', 'Tangerang', 'Jl.KH. Agus Salim Gg. Masjid II Rt. 03 Rw. 04 Kec. Cipondoh Kota Tangerang', 3, 4, '', 'Cipondoh', 'Tangerang', '02155763139', '08128482726', 6, '2016-09-06 06:28:16'),
(211, '', '', 'Agus Priyatna', '', ', SE', 1, 'Tangerang', '1972-08-22', 'islam', 'Jl.KH.Hasyim Ashari Gg.H.Saidi Rt.01 Rw.01 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.H.Saidi Rt.01 Rw.01 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tng', 0, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '0215541889', '08128356978', 6, '2016-09-06 06:31:42'),
(212, '', '', 'Tajul Anwar', '', '', 1, 'Tangerang ', '1981-06-27', 'islam', 'Jl.Harapan 1 No.1 Kel. Babakan Rt. 02 Rw.03 Kota Tangerang', 2, 3, '', '', 'Tangerang', 'Jl.Harapan 1 No.1 Kel. Babakan Rt. 02 Rw.03 Kota Tangerang', 2, 3, '', '', 'Tangerang', '', '02194264369', 6, '2016-09-06 06:33:50'),
(213, '', '', 'Deni Hendra', '', ' MD.', 1, 'Jakarta', '1971-06-25', 'islam', 'Cluster Cipondoh Blok. A5 No.3 Rt.06 Rw.03 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 6, 3, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Cluster Cipondoh Blok. A5 No.3 Rt.06 Rw.03 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 6, 3, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '0215539187', '081310646420', 6, '2016-09-06 06:38:52'),
(214, '', '', 'Elfi Mardianih', '', ', SE', 2, 'Tangerang ', '1977-05-04', 'islam', 'Jl.KH.Agus Salim No.12 Rt. 03 Rw. 04 Kel. Poris Plawad Kec. Cipondoh Kota Tangerang', 3, 4, 'Poris Plawad', 'Cipondoh', 'Tangerang', 'Jl.KH.Agus Salim No.12 Rt. 03 Rw. 04 Kel. Poris Plawad Kec. Cipondoh Kota Tangerang', 3, 4, 'Poris Plawad', 'Cipondoh', 'Tangerang', '02155763139', '081317564705', 6, '2016-09-06 06:45:30'),
(215, '', '', 'Radi Harto', '', '', 1, 'Jakarta ', '1970-06-07', 'islam', 'Sawangan Elok Blok A3 No.4 Kel.Duren Seribu Kec. Sawangan - Depok', 0, 0, '', 'Sawangan', 'Depok', 'Sawangan Elok Blok A3 No.4 Kel.Duren Seribu Kec. Sawangan - Depok', 0, 0, '', 'Sawangan', 'Depok', '02516799179', '085217902052', 6, '2016-09-06 07:02:09'),
(216, '', '', 'Joni Suhandri', '', '', 1, 'Tangerang', '1977-04-15', 'islam', 'Jl.Panglima Polim Kel. Poris Plawad Utara Rt. 02 Rw.02 Kec. Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.Panglima Polim Kel. Poris Plawad Utara Rt. 02 Rw.02 Kec. Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '02192624838', 6, '2016-09-06 07:03:17'),
(217, '', '', 'Jumirah', '', ', S.Pd.I', 2, 'Sleman', '1968-12-15', 'islam', 'Kel. Poris Plawad Indah Rt. 03 Rw. 02 Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Kel. Poris Plawad Indah Rt. 03 Rw. 02 Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '0215521340', '085292578031', 6, '2016-09-06 07:10:25'),
(218, '', '', 'Muhammad', '', '', 1, 'Tangerang', '1978-05-10', 'islam', 'Gg. Annur Rt. 05 Rw. 01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 5, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Gg. Annur Rt. 05 Rw. 01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 5, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '085714524130', 6, '2016-09-06 07:13:16'),
(219, '', '', 'Sopiyan', '', '', 1, 'Tangerang', '1977-09-16', 'islam', 'Gg. Sadar I Kel. Kenanga Rt. 05 Rw. 02 Kec. Cipondoh Kota Tangerang', 5, 2, 'Kenanga', 'Cipondoh', 'Tangerang', 'Gg. Sadar I Kel. Kenanga Rt. 05 Rw. 02 Kec. Cipondoh Kota Tangerang', 5, 2, 'Kenanga', 'Cipondoh', 'Tangerang', '', '081317498837', 6, '2016-09-06 07:15:44'),
(220, '', '', 'T o n i', '', '', 1, 'Tangerang', '1981-05-24', 'islam', 'Jl.KH.Hasyim Ashari Gg.Halimah Rt.02 Rw.01 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.Halimah Rt.02 Rw.01 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '02199513745', 6, '2016-09-06 07:17:54'),
(221, '', '', 'H. Asdi', '', '', 1, 'Tangerang', '1952-10-15', 'islam', 'Jl.KH.Hasyim Ashari Kel. Buaran Indah Rt. 01 Rw.08 No.39 Tangerang', 1, 8, 'Buaran Indah', '', 'Tangerang', 'Jl.KH.Hasyim Ashari Kel. Buaran Indah Rt. 01 Rw.08 No.39 Tangerang', 1, 8, 'Buaran Indah', '', 'Tangerang', '', '', 6, '2016-09-06 07:18:53'),
(222, '', '', 'Ummu Habibah', '', '', 2, 'Tangerang', '1982-10-12', 'islam', 'Komp. Yayasan Islam Asy-Syukriyyah Rt. 03 Rw. 02 Cipondoh Kota Tangerang', 3, 2, '', 'Cipondoh', 'Tangerang', 'Komp. Yayasan Islam Asy-Syukriyyah Rt. 03 Rw. 02 Cipondoh Kota Tangerang', 3, 2, '', 'Cipondoh', 'Tangerang', '0215521339', '085697704811', 6, '2016-09-06 07:25:37'),
(223, '', '', 'Wahyudin', '', '', 1, 'Tangerang', '0000-00-00', 'islam', 'Jl.Hr. Rasuna Said Kel. Cipete Rt. 02 Rw. 03 Kec. Pinang Kota Tangerang', 2, 3, 'Cipete', 'Pinang', 'Tangerang', 'Jl.Hr. Rasuna Said Kel. Cipete Rt. 02 Rw. 03 Kec. Pinang Kota Tangerang', 2, 3, 'Cipete', 'Pinang', 'Tangerang', '', '085692499336', 6, '2016-09-06 08:38:59'),
(224, '', '', 'Nina Sholeha Nabiyyah', '', '', 2, 'Tangerang', '1990-06-30', 'islam', 'Gg. Nurul Yaqin Rt.03 Rw.04 Kel.Poris Plawad Indah Kec.Cipondoh Kota Tng', 3, 4, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Gg. Nurul Yaqin Rt.03 Rw.04 Kel.Poris Plawad Indah Kec.Cipondoh Kota Tng', 3, 4, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '02198283875', '08561548481', 6, '2016-09-06 08:40:18'),
(225, '', '', 'Abdul Hakim Fajarullah', '', '', 1, 'Tangerang', '1989-08-20', 'islam', 'Jl.KH.Hasyim Ashari Kel. Buaran Indah Rt. 01 Rw. 08 Kec. Tangerang Kota Tangerang', 1, 8, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Jl.KH.Hasyim Ashari Kel. Buaran Indah Rt. 01 Rw. 08 Kec. Tangerang Kota Tangerang', 1, 8, 'Buaran Indah', 'Tangerang', 'Tangerang', '02155754871', '08999775551', 6, '2016-09-06 08:41:41'),
(226, '', '', 'Engkus Kusnadi', '', '', 1, 'Tangerang', '1980-08-15', 'islam', 'Jl.Baitusalam Kel. Poris Plawad Rt. 04 Rw. 03 Kec. Cipondoh Kota Tangerang', 4, 3, 'Poris Plawad', 'Cipondoh', 'Tangerang', 'Jl.Baitusalam Kel. Poris Plawad Rt. 04 Rw. 03 Kec. Cipondoh Kota Tangerang', 4, 3, 'Poris Plawad', 'Cipondoh', 'Tangerang', '02150341880', '02191655324', 6, '2016-09-06 08:43:01'),
(227, '', '', 'Ma''mun Gafar', '', '', 1, 'Tangerang', '1981-08-10', 'islam', 'Jl.KH.Hasyim Ashari Km. 3 Gg.Annur 1 Rt. 03 Rw. 01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Km. 3 Gg.Annur 1 Rt. 03 Rw. 01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '02198581057', 6, '2016-09-06 08:44:13'),
(228, '', '', 'M.Soleh', '', '', 1, 'Tangerang', '1995-06-06', 'islam', 'Jl.KH.Hasyim Ashari Gg. Jambu Rt. 03 Rw.05 Kel. Buaran Indah Kec. Tangerang - Tangerang', 3, 5, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg. Jambu Rt. 03 Rw.05 Kel. Buaran Indah Kec. Tangerang - Tangerang', 3, 5, 'Buaran Indah', 'Tangerang', 'Tangerang', '', '085715239030', 6, '2016-09-06 08:45:18'),
(229, '', '', 'Evan Hamzah Muchtar', '', ', ME.Sy', 1, 'Jakarta', '1983-05-22', 'islam', 'Claster Halimah Rt.002/001 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Claster Halimah Rt.002/001 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '087877970633', 6, '2016-09-06 08:46:27'),
(230, '', '', 'Ahmad Nashirulhaq', '', ', SE.I', 1, 'Tangerang', '1989-06-23', 'islam', 'Jl.KH.Hasyim Ashari Km.3 Rt.03 Rw.02 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Km.3 Rt.03 Rw.02 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '0215521340', '081298598167', 6, '2016-09-06 08:49:50'),
(231, '', '', 'Indra Utama', '', '', 1, 'Tangerang', '1982-06-17', 'islam', 'Jl.KH.Hasyim Ashari Km.3 Rt.03 Rw.01 Kel. Poris Plawad Utara  Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Km.3 Rt.03 Rw.01 Kel. Poris Plawad Utara  Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '083808634445', 6, '2016-09-06 08:54:17'),
(232, '', '', 'Izzatunnisa', '', ', S.Kom.I', 2, 'Tangerang', '1991-01-22', 'islam', 'Jl.KH.Hasyim Ashari Km.3 Rt.03 Rw.02 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Km.3 Rt.03 Rw.02 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 3, 2, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '0215521340', '081282475197', 6, '2016-09-06 08:56:15'),
(233, '', '', 'Tania Febriani Nufus', '', ',Am.Keb', 2, 'Tangerang', '1989-06-23', 'islam', 'Komplek. P&K Jl. Bunga Matahari Rt.003 Rw.005 Kel. Cipondoh Kota Tangerang', 3, 5, 'Cipondoh', '', 'Tangerang', 'Komplek. P&K Jl. Bunga Matahari Rt.003 Rw.005 Kel. Cipondoh Kota Tangerang', 3, 5, 'Cipondoh', '', 'Tangerang', '', '089502738264', 6, '2016-09-06 08:57:26'),
(234, '', '', 'Heni Kurniawati', '', '', 2, 'Banyumas', '1994-01-27', 'islam', 'Kel. Poris Plawad Utara Rt. 002 Rw.003 Kec. Cipondoh Kota Tangerang', 2, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Kel. Poris Plawad Utara Rt. 002 Rw.003 Kec. Cipondoh Kota Tangerang', 2, 3, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '085694903803', 6, '2016-09-06 08:59:05'),
(235, '', '', 'Indri Dwi Astuti', '', ', SE', 2, 'Jakarta', '1994-10-08', 'islam', 'Kp. Bojong Kel. Kunciran Indah Rt. 003 Rw.010 Kec. Pinang Kota Tangerang', 3, 10, 'Kunciran Indah', 'Pinang', 'Tangerang', 'Kp. Bojong Kel. Kunciran Indah Rt. 003 Rw.010 Kec. Pinang Kota Tangerang', 3, 10, 'Kunciran Indah', 'Pinang', 'Tangerang', '', '081545096083', 6, '2016-09-06 09:00:34'),
(236, '', '', 'Nurhidayat', '', ', SE.I', 1, 'Tangerang', '1985-09-19', 'islam', 'Jl. H.Yusuf Kel. Peninggilan Rt. 002 Rw.011 Kec. Ciledug Kota Tangerang', 2, 11, 'Peninggilan', 'Ciledug', 'Tangerang', 'Jl. H.Yusuf Kel. Peninggilan Rt. 002 Rw.011 Kec. Ciledug Kota Tangerang', 2, 11, 'Peninggilan', 'Ciledug', 'Tangerang', '', '083815508855', 6, '2016-09-06 09:01:55'),
(237, '', '', 'Sa''adih', '', '', 1, 'Tangerang', '1979-07-02', 'islam', 'Kel. Poris Plawad Utara Rt. 01 Rw. 01 Kec. Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Kel. Poris Plawad Utara Rt. 01 Rw. 01 Kec. Cipondoh Kota Tangerang', 1, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '085216885117', 6, '2016-09-06 09:03:02'),
(238, '', '', 'Zuhroni', '', '', 1, 'Jakarta', '1976-07-27', 'islam', 'Kel. Buaran Indah Gg. Jambu Rt. 003 Rw.006 Kec. Tangerang Kota Tangerang', 3, 6, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Kel. Buaran Indah Gg. Jambu Rt. 003 Rw.006 Kec. Tangerang Kota Tangerang', 3, 6, 'Buaran Indah', 'Tangerang', 'Tangerang', '', '087809317359', 6, '2016-09-06 09:04:15'),
(239, '', '', 'Dita', '', ', MM', 1, 'Majalengka', '1969-07-10', 'islam', 'Jl. Banjar Wijaya Gg. Al-Hasaniyah Rt. 01 Rw. 03 Kel. Cipete Kec. Pinang Kota Tangerang', 1, 3, 'Cipete', 'Pinang', 'Tangerang', 'Jl. Banjar Wijaya Gg. Al-Hasaniyah Rt. 01 Rw. 03 Kel. Cipete Kec. Pinang Kota Tangerang', 1, 3, 'Cipete', 'Pinang', 'Tangerang', '02183340613', '081584091207', 6, '2016-09-07 06:20:04'),
(240, '', '', 'Didi Maksudi', '', ', SE', 1, 'Lebak', '1973-09-09', 'islam', 'Taman Royal 3 Jl.Cluster Cemara No.38 Kel.Poris Plawad Utara Rt.07 Rw.15', 7, 15, 'Poris Plawad Utara', '', 'Tangerang', 'Taman Royal 3 Jl.Cluster Cemara No.38 Kel.Poris Plawad Utara Rt.07 Rw.15', 7, 15, 'Poris Plawad Utara', '', 'Tangerang', '02191016133', '081315134977', 6, '2016-09-07 06:22:12'),
(241, '', '', 'Maryuti', '', ', S.Pd', 2, 'Tangerang', '1968-03-02', 'islam', 'Jl.KH. Ahmad Dahlan Gg. H.Lebe Rt. 10 Rw. 01 Kel. Petir Kec. Cipondoh Kota Tangerang', 10, 1, 'Petir', 'Cipondoh', 'Tangerang', 'Jl.KH. Ahmad Dahlan Gg. H.Lebe Rt. 10 Rw. 01 Kel. Petir Kec. Cipondoh Kota Tangerang', 10, 1, 'Petir', 'Cipondoh', 'Tangerang', '0215549581', '085888540808', 6, '2016-09-07 06:23:30'),
(242, '', '', 'Pahrul Rozi', '', ', S.Ag', 1, 'Tangerang', '1979-08-26', 'islam', 'Jl.KH.Maulana Hasanuddin Kel. Poris Jaya Rt. 03 Rw. 02 Kec. Batu Ceper Kota Tangerang', 3, 2, 'Poris Jaya', 'Batu Ceper', 'Tangerang', 'Jl.KH.Maulana Hasanuddin Kel. Poris Jaya Rt. 03 Rw. 02 Kec. Batu Ceper Kota Tangerang', 3, 2, 'Poris Jaya', 'Batu Ceper', 'Tangerang', '0215459427', '081311458206', 6, '2016-09-07 06:25:41'),
(243, '', '', 'Wahyu Sri Hastuti', '', ', S. Pd', 2, 'Magetan', '1974-02-22', 'islam', 'Claster Halimah Indah Rt. 02 Rw.01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Claster Halimah Indah Rt. 02 Rw.01 Kel.Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '', 6, '2016-09-07 06:26:46'),
(244, '', '', 'Mokhamad Yogi Ginanjar', '', ', S.Pd', 1, 'Depok', '1989-02-20', 'islam', 'Villa Tangerang Indah Blok. GA-2 No. 17 Rt. 04/13 Tangerang', 4, 13, '', '', 'Tangerang', 'Villa Tangerang Indah Blok. GA-2 No. 17 Rt. 04/13 Tangerang', 4, 13, '', '', 'Tangerang', '', '082260202545', 6, '2016-09-07 06:27:56'),
(245, '', '', 'Aris Setyawan', '', ', M.Pd', 1, 'Ngawi', '1990-08-04', 'islam', 'Perum Griya Curug Blok.D6 No. 12A Rt.002/011 Kec. Legok Kab. Tangerang', 2, 11, '', 'Legok', 'Tangerang', 'Perum Griya Curug Blok.D6 No. 12A Rt.002/011 Kec. Legok Kab. Tangerang', 2, 11, '', 'Legok', 'Tangerang', '', '085653872387', 6, '2016-09-07 06:29:41'),
(246, '', '', 'Ike Hilatun Nisa', '', ', S.Sos', 2, 'Tangerang', '1979-12-11', 'islam', 'Jl.KH.Hasyim Ashari Km.3 Kel. Buaran Indah Rt. 003 Rw. 007 Kec. Tangerang Kota Tangerang', 3, 7, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Jl.KH.Hasyim Ashari Km.3 Kel. Buaran Indah Rt. 003 Rw. 007 Kec. Tangerang Kota Tangerang', 3, 7, 'Buaran Indah', 'Tangerang', 'Tangerang', '', '0818624432', 6, '2016-09-07 06:31:09'),
(247, '', '', 'Endun Arif Jumroni', '', ', S.Pd', 2, 'Karawang', '1963-04-02', 'islam', 'Jl.SLTP Prasetya No. 34 Rt. 001/002 Kel. Kunciran Induk Kec. Pinang Kota Tangerang', 1, 2, 'Kunciran Induk', 'Pinang', 'Tangerang', 'Jl.SLTP Prasetya No. 34 Rt. 001/002 Kel. Kunciran Induk Kec. Pinang Kota Tangerang', 1, 2, 'Kunciran Induk', 'Pinang', 'Tangerang', '', '081385437376', 6, '2016-09-07 06:33:07'),
(248, '', '', 'Yahya Wijaya', '', '', 1, 'Pandeglang', '1974-12-02', 'islam', 'Kel. Panunggangan Rt. 01 Rw. 02 Kebon Nanas Kec. Pinang Kota Tangerang', 1, 2, 'Panunggangan', 'Pinang', 'Tangerang', 'Kel. Panunggangan Rt. 01 Rw. 02 Kebon Nanas Kec. Pinang Kota Tangerang', 1, 2, 'Panunggangan', 'Pinang', 'Tangerang', '', '085697576693', 6, '2016-09-07 06:36:34'),
(249, '', '', 'Harun Zein', '', ', S.Si', 1, 'Tangerang', '1982-04-04', 'islam', 'Jl. Daarussalam 2 Kel. Ketapang Rt. 01 Rw. 01 Cipondoh Kota Tangerang', 1, 1, 'Ketapang', 'Cipondoh', 'Tangerang', 'Jl. Daarussalam 2 Kel. Ketapang Rt. 01 Rw. 01 Cipondoh Kota Tangerang', 1, 1, 'Ketapang', 'Cipondoh', 'Tangerang', '', '085697576693', 6, '2016-09-07 06:38:09'),
(250, '', '', 'Dewi Arini Wulandari', '', ', S.Pd', 2, 'Tangerang', '1991-08-03', 'islam', 'Kp.Poncol Kel. Pedurenan Rt.002/001 Kec. Karang Tengah Kota Tangerang', 2, 1, 'Pedurenan', 'Karang Tengah', 'Tangerang', 'Kp.Poncol Kel. Pedurenan Rt.002/001 Kec. Karang Tengah Kota Tangerang', 2, 1, 'Pedurenan', 'Karang Tengah', 'Tangerang', '', '083876007604', 6, '2016-09-07 08:08:05'),
(251, '', '', 'Pangesti Sri Atika', '', ', S.Pd', 2, 'Jakarta', '1991-12-11', 'islam', 'Jl.H.Jali Kel. Kunciran Jaya Rt.003/003 Kec. Pinang Kota Tangerang', 3, 3, 'Kunciran Jaya', 'Pinang', 'Tangerang', 'Jl.H.Jali Kel. Kunciran Jaya Rt.003/003 Kec. Pinang Kota Tangerang', 3, 3, 'Kunciran Jaya', 'Pinang', 'Tangerang', '', '081510873107', 6, '2016-09-07 08:18:28'),
(252, '', '', 'Restu Okta Pujiani', '', ', S.Pd', 2, 'Tangerang', '1990-10-27', 'islam', 'Jl.M.Siban Kel. Kunciran Indah Rt.004/ Rw.008 No. 32 Kec. Pinang Kota Tangerang ', 4, 8, 'Kunciran Indah', 'Pinang', 'Tangerang', 'Jl.M.Siban Kel. Kunciran Indah Rt.004/ Rw.008 No. 32 Kec. Pinang Kota Tangerang ', 4, 8, 'Kunciran Indah', 'Pinang', 'Tangerang', '', '083876885548', 6, '2016-09-07 08:19:52'),
(253, '', '', 'Sulastri', '', ', S.Pd', 2, 'Tangerang', '1991-09-16', 'islam', 'Jl.KH.A.Dahlan Kel. Petir Rt. 010/001 Kec. Cipondoh Kota Tangerang', 10, 1, 'Petir', 'Cipondoh', 'Tangerang', 'Jl.KH.A.Dahlan Kel. Petir Rt. 010/001 Kec. Cipondoh Kota Tangerang', 10, 1, 'Petir', 'Cipondoh', 'Tangerang', '', '08998103429', 6, '2016-09-07 08:28:02'),
(254, '', '', 'Giena Amalia Sabrina', '', ', A.Md', 2, 'Tangerang', '1992-10-06', 'islam', 'Perum Cipondoh Permai Jl. Shello L5 Rt.009/006 Kel. Cipondoh Kec. Cipondoh Kota Tangerang', 9, 6, 'Cipondoh', 'Cipondoh', 'Tangerang', 'Perum Cipondoh Permai Jl. Shello L5 Rt.009/006 Kel. Cipondoh Kec. Cipondoh Kota Tangerang', 9, 6, 'Cipondoh', 'Cipondoh', 'Tangerang', '', '081286263254', 6, '2016-09-07 08:29:59'),
(255, '', '', 'Heru Ubaidilah', 'H. ', ', S.Kom', 1, 'Tangerang', '1973-06-20', 'islam', 'Perum Royal I Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Perum Royal I Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 0, 0, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '081310858155', 6, '2016-09-07 08:31:12'),
(256, '', '', 'Gustiningsih', '', ', ST', 2, 'Bukit Tinggi', '1982-08-19', 'islam', 'Jl.Sawah dalam Ketapang Kec. Cipondoh Kota Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', 'Jl.Sawah dalam Ketapang Kec. Cipondoh Kota Tangerang', 0, 0, '', 'Cipondoh', 'Tangerang', '', '081374505047', 6, '2016-09-07 08:32:11'),
(257, '', '', 'Resti Alfianda', '', ', S.Pd', 2, 'Tangerang', '1992-06-16', 'islam', 'Taman Permata Cipondoh Blok L3 Rt.004 Rw.007 Kel. Cipondoh Kota Tangerang', 4, 7, 'Cipondoh', '', 'Tangerang', 'Taman Permata Cipondoh Blok L3 Rt.004 Rw.007 Kel. Cipondoh Kota Tangerang', 4, 7, '', 'Cipondoh', 'Tangerang', '', '085717323937', 6, '2016-09-07 08:33:16'),
(258, '', '', 'Yockie Marlan', '', ', S.Pd.I', 1, 'Tangerang', '1984-04-27', 'islam', 'Jl. Inpres 4B Larangan Utara Rt. 002 Rw.009 Kota Tangerang', 2, 9, '', '', 'Tangerang', 'Jl. Inpres 4B Larangan Utara Rt. 002 Rw.009 Kota Tangerang', 2, 9, '', '', 'Tangerang', '', '085310119400', 6, '2016-09-07 08:34:08'),
(259, '', '', 'Anggie Adytia Saputra', '', ', A.Md', 1, 'Tangerang', '0000-00-00', 'islam', 'Jl.H.Som Rt. 002/006 Kel. Pondok Pucung Kec. Pondok Aren Kota Tangerang Selatan', 2, 6, 'Pondok Pucung', 'Pondok Aren', 'Tangerang', 'Jl.H.Som Rt. 002/006 Kel. Pondok Pucung Kec. Pondok Aren Kota Tangerang Selatan', 2, 6, 'Pondok Pucung', 'Pondok Aren', 'Tangerang', '', '085945744200', 6, '2016-09-07 08:35:22'),
(260, '', '', 'Riana Haryani', '', '', 2, 'Tangerang', '1989-05-23', 'islam', 'Kel.Buaran Indah Gg. Jambu Rt.003/006 Kec. Tangerang Kota Tangerang', 3, 6, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Kel.Buaran Indah Gg. Jambu Rt.003/006 Kec. Tangerang Kota Tangerang', 3, 6, 'Buaran Indah', 'Tangerang', 'Tangerang', '', '083806391342', 6, '2016-09-07 08:46:08'),
(261, '', '', 'Widya Wijayanti', '', ', S.Pd', 2, 'Serang', '1992-06-05', 'islam', 'Perum.Bumi Indah THP 5 KH.16 Rt. 004/07 Kel. Pasar Kemis Kab. Tangerang', 4, 7, 'Pasar Kemis', '', 'Tangerang', 'Perum.Bumi Indah THP 5 KH.16 Rt. 004/07 Kel. Pasar Kemis Kab. Tangerang', 4, 7, 'Pasar Kemis', '', 'Tangerang', '', '081213913799', 6, '2016-09-07 08:47:15'),
(262, '', '', 'Mail', '', '', 1, 'Tangerang', '1985-06-12', 'islam', 'Jl.KH.Hasyim Ashari Gg.Halimah Rt.05 Rw.05 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tangerang', 5, 5, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.KH.Hasyim Ashari Gg.Halimah Rt.05 Rw.05 Kel. Poris Plawad Utara Kec.Cipondoh Kota Tng', 5, 5, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '082297212861', 6, '2016-09-07 08:49:08'),
(263, '', '', 'M.Amirullah Moelia', '', ', S.Pd.I', 1, 'Jakarta', '1993-05-30', 'islam', 'Jl. Camar Blok.A 15 No.7 Rt. 008 Rw.007 Kel. Kunciran Jaya Kec. Pinang Kota Tangerang', 8, 7, 'Kunciran Jaya', 'Pinang', 'Tangerang', 'Jl. Camar Blok.A 15 No.7 Rt. 008 Rw.007 Kel. Kunciran Jaya Kec. Pinang Kota Tangerang', 8, 7, 'Kunciran Jaya', 'Pinang', 'Tangerang', '', '085714340701', 6, '2016-09-07 08:53:04'),
(264, '', '', 'Sibgatulah Mahyunda', '', ', S.Pd', 2, 'Bandung', '1992-10-14', 'islam', 'Perum. Bugel Mas Indah Blok. C19/11 Rt. 004 Rw.009 Kota Tangerang', 4, 9, '', '', 'Tangerang', 'Perum. Bugel Mas Indah Blok. C19/11 Rt. 004 Rw.009 Kota Tangerang', 4, 9, '', '', 'Tangerang', '', '08998092101', 6, '2016-09-07 08:54:19'),
(265, '', '', 'Tiara Hani Saputri', '', ', S.Pd', 2, 'Bukit Tinggi', '1991-06-10', 'islam', 'Perum. Taman Royal I Jl. Mahoni V No. 78 Rt. 006 Rw.015 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 6, 15, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Perum. Taman Royal I Jl. Mahoni V No. 78 Rt. 006 Rw.015 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 6, 15, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '085691676852', 6, '2016-09-07 08:55:53'),
(266, '', '', 'Raden Maftuhullah', '', '', 1, 'Tangerang', '1992-02-28', 'islam', 'Kp. Blok Kelapa Rt. 003 Rw. 005 Kec. Legok Kab. Tangerang', 3, 5, '', 'Legok', 'Tangerang', 'Kp. Blok Kelapa Rt. 003 Rw. 005 Kec. Legok Kab. Tangerang', 3, 5, '', 'Legok', 'Tangerang', '', '085770634743', 6, '2016-09-07 08:56:59'),
(267, '', '', 'Thea Fitri Astarani', '', ', ST', 2, 'Jakarta', '1990-04-25', 'islam', 'Jl. Bidar 12 no.3 Perumnas Bumi Kelapa Dua Rt. 004 Rw. 006 Kec. Kelapa Dua Kab. Tangerang', 4, 6, '', 'Kelapa Dua', 'Tangerang', 'Jl. Bidar 12 no.3 Perumnas Bumi Kelapa Dua Rt. 004 Rw. 006 Kec. Kelapa Dua Kab. Tangerang', 4, 6, '', 'Kelapa Dua', 'Tangerang', '', '085722772828', 6, '2016-09-07 08:58:09'),
(268, '', '', 'Mairatu Sisriyeni', '', ', S.Pd', 2, 'Padang', '1977-05-28', 'islam', 'Royal 3 Blok A 11 No.7 Rt. 03 Rw.01 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Royal 3 Blok A 11 No.7 Rt. 03 Rw.01 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 3, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '08129437664', 6, '2016-09-08 16:49:52'),
(269, '', '', 'Arief Budi Kurniadi', '', ', S.Ag', 1, 'Jakarta', '1974-10-08', 'islam', 'Komp.Buana Permai  Blok.I/28 Kel. Cipondoh Kec. Cipondoh Kota Tangerang', 0, 0, 'Cipondoh', 'Cipondoh', 'Tangerang', 'Komp.Buana Permai  Blok.I/28 Kel. Cipondoh Kec. Cipondoh Kota Tangerang', 0, 0, 'Cipondoh', 'Cipondoh', 'Tangerang', '', '08131431474', 6, '2016-09-08 16:50:53'),
(270, '', '', 'Iwan Wahyudi', '', ', SE.I', 1, 'Wonogiri', '1980-04-20', 'islam', 'Kel. Poris Plawad Utara Gg. Annur 2 Rt. 05 Rw. 01 Kec. Cipondoh Kota Tangerang', 5, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Kel. Poris Plawad Utara Gg. Annur 2 Rt. 05 Rw. 01 Kec. Cipondoh Kota Tangerang', 5, 1, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '02146465712', '081388604148', 6, '2016-09-08 16:52:11'),
(271, '', '', 'Mudiar', '', '', 1, 'Tangerang', '1972-05-03', 'islam', 'Jl.KH.Hasyim Ashari  Rt.07 Rw.07 Kel.Buaran Indah Kota Tangerang', 7, 7, 'Buaran Indah', '', 'Tangerang', 'Jl.KH.Hasyim Ashari  Rt.07 Rw.07 Kel.Buaran Indah Kota Tangerang', 7, 7, 'Buaran Indah', '', 'Tangerang', '', '08170715097', 6, '2016-09-08 16:53:11'),
(272, '', '', 'Rama Alka', '', '', 1, 'Lubuk Linggau', '1982-07-12', 'islam', 'Jl. Jeruk 175 B Kel. Kunciran Indah Rt. 01 Rw. 05 Kec. Pinang Kota Tangerang', 1, 5, 'Kunciran Indah', 'Pinang', 'Tangerang', 'Jl. Jeruk 175 B Kel. Kunciran Indah Rt. 01 Rw. 05 Kec. Pinang Kota Tangerang', 1, 5, 'Kunciran Indah', 'Pinang', 'Tangerang', '0217325121', '085774197776', 6, '2016-09-08 16:54:26'),
(273, '', '', 'Wiwin Fitriani', '', ', S.Pd', 2, 'Serang', '1983-06-26', 'islam', 'Jl. Natuna Blok. C1 No. 36 Rt. 01 Rw. 07 Kel. Gembor Kec. Priuk Kota Tangerang', 1, 7, 'Gembor', 'Priuk', 'Tangerang', 'Jl. Natuna Blok. C1 No. 36 Rt. 01 Rw. 07 Kel. Gembor Kec. Priuk Kota Tangerang', 1, 7, 'Gembor', 'Priuk', 'Tangerang', '0215874568', '08159389483', 6, '2016-09-08 16:58:38'),
(274, '', '', 'Musadih', '', ', SH.I', 1, 'Jakarta', '1982-09-07', 'islam', 'Kp. Gaga Kel. Semanan Rt. 06 Rw. 09 Kec. Kalideres - Jakarta Barat', 6, 9, 'Semanan', 'Kalideres', 'Jakarta Barat', 'Kp. Gaga Kel. Semanan Rt. 06 Rw. 09 Kec. Kalideres - Jakarta Barat', 6, 9, 'Semanan', 'Kalideres', 'Jakarta Barat', '', '08571477611', 6, '2016-09-08 17:01:31');
INSERT INTO `as_pegawai` (`id_pegawai`, `foto_pegawai`, `nik`, `nama_lengkap`, `gelar_depan`, `gelar_belakang`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat_ktp`, `rt_ktp`, `rw_ktp`, `kelurahan_ktp`, `kecamatan_ktp`, `kota_ktp`, `alamat_tinggal`, `rt_tinggal`, `rw_tinggal`, `kelurahan_tinggal`, `kecamatan_tinggal`, `kota_tinggal`, `no_telepon`, `handphone`, `id_user`, `tanggal_input`) VALUES
(275, '', '', 'Maryono', '', ', S.Pd', 1, 'Pacitan', '1985-01-27', 'islam', 'Jl.Raden Fatah Kp. Dukuh Rt.01/07 No.2 Sudimara Selatan Ciledug Kota Tangerang', 1, 7, '', '', 'Tangerang', 'Jl.Raden Fatah Kp. Dukuh Rt.01/07 No.2 Sudimara Selatan Ciledug Kota Tangerang', 1, 7, '', '', 'Tangerang', '02199167262', '081315866299', 6, '2016-09-08 17:04:35'),
(276, '', '', 'Qoni''ah', '', ', S.Pd.I', 2, 'Rembang', '1979-08-25', 'islam', 'Jl.Blok Malang Rt. 02 Rw.02 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl.Blok Malang Rt. 02 Rw.02 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 2, 2, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '91714335', 6, '2016-09-08 17:06:14'),
(277, '', '', 'Nurbaiti', '', '', 2, 'Tangerang', '1978-10-28', 'islam', 'Gg. Jambu Kel. Buaran Indah Kec. Tangerang Kota Tangerang', 0, 0, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Gg. Jambu Kel. Buaran Indah Kec. Tangerang Kota Tangerang', 0, 0, 'Buaran Indah', 'Tangerang', 'Tangerang', '', '081319122469', 6, '2016-09-08 17:07:29'),
(278, '', '', 'Mulyadi', '', '', 1, 'Karawang', '1986-10-01', 'islam', 'Komplek. Yayasan Islam Asy-Syukriyyah Tangerang', 0, 0, '', '', 'Tangerang', 'Komplek. Yayasan Islam Asy-Syukriyyah Tangerang', 0, 0, '', '', 'Tangerang', '', '085810731662', 6, '2016-09-08 17:09:08'),
(279, '', '', 'Nur Chazanah', '', ', ST', 2, 'Magetan', '1980-04-01', 'islam', 'Komp.Banjar Wijaya Cluster Italy B51/09  Tangerang', 0, 0, '', '', 'Tangerang', 'Komp.Banjar Wijaya Cluster Italy B51/09  Tangerang', 0, 0, '', '', 'Tangerang', '', '081328542053', 6, '2016-09-08 17:10:29'),
(280, '', '', 'Ricky Adiputra', '', ', SE,SY', 1, 'Tangerang', '1988-08-29', 'islam', 'Jl.Krakatau V No.80 Perumnas 1 Kec. Cibodas Tangerang', 0, 0, '', 'Cibodas', 'Tangerang', 'Jl.Krakatau V No.80 Perumnas 1 Kec. Cibodas Tangerang', 0, 0, '', 'Cibodas', 'Tangerang', '0215914881', '081511664485', 6, '2016-09-08 17:11:48'),
(281, '', '', 'Ridwan Suhardi', '', ', S.Pd.I', 1, 'Kuningan', '1978-09-27', 'islam', 'Jl.H. Rausin No.59 Rt.02 Rw.08 Kel. Kelapa Dua Kebun Jeruk Jakarta Barat', 2, 8, 'Kelapa Dua', '', 'Jakarta Barat', 'Jl.H. Rausin No.59 Rt.02 Rw.08 Kel. Kelapa Dua Kebun Jeruk Jakarta Barat', 2, 8, 'Kelapa Dua', '', 'Tangerang', '', '081219050109', 6, '2016-09-08 17:13:33'),
(282, '', '', 'Dina', '', ', SE.I', 2, 'Serang', '1985-02-03', 'islam', 'Jl.Raya Mauk KM7 Kp.Cadas Desa Karet Rt.06 Rw.01 Kec. Sepatan Kab. Tangerang', 6, 1, 'Sepatan', '', 'Tangerang', 'Jl.Raya Mauk KM7 Kp.Cadas Desa Karet Rt.06 Rw.01 Kec. Sepatan Kab. Tangerang', 6, 1, '', 'Sepatan', 'Tangerang', '91360319', '02191943154', 6, '2016-09-08 17:15:48'),
(283, '', '', 'Irawan', '', ', S.Pd.I', 1, 'Cianjur', '1987-06-17', 'islam', 'Komp. P&K Jl. Mataram IX No. 03 Rt. 006 Rw. 018 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 6, 18, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', 'Komp. P&K Jl. Mataram IX No. 03 Rt. 006 Rw. 018 Kel. Poris Plawad Indah Kec. Cipondoh Kota Tangerang', 6, 18, 'Poris Plawad Indah', 'Cipondoh', 'Tangerang', '', '081280496985', 6, '2016-09-08 17:23:22'),
(284, '', '', 'Sumaryono', '', '', 1, 'Klaten', '1969-04-04', 'islam', 'Kampung Gebang raya Rt. 002/002 Kel. Periuk Kota Tangerang', 2, 2, 'Periuk', '', 'Tangerang', 'Kampung Gebang raya Rt. 002/002 Kel. Periuk Kota Tangerang', 2, 2, 'Periuk', '', 'Tangerang', '02191943154', '085693903141', 6, '2016-09-08 17:36:58'),
(285, '', '', 'Zaenal Abidin', '', ', S.Pd.I', 1, 'Pekalongan', '1989-06-02', 'islam', 'Jl.Maulana Hasanudin No.05 Rt.005 Rw. 010 Kel.Cipondoh Makmur Kec.Cipondoh Kota Tangerang 15149', 5, 10, 'Cipondoh Makmur', 'Cipondoh', 'Tangerang', 'Jl.Maulana Hasanudin No.05 Rt.005 Rw. 010 Kel.Cipondoh Makmur Kec.Cipondoh Kota Tangerang 15149', 5, 10, 'Cipondoh Makmur', 'Cipondoh', 'Tangerang', '', '083870856018', 6, '2016-09-08 17:39:43'),
(286, '', '', 'Siti Saadah', '', ', S.Sos.I', 2, 'Tangerang', '1980-04-21', 'islam', 'Jl. Dharma Bhakti  Kel. Sudimara Rt. 008 Rw. 003 Kec. Pinang Kota Tangerang', 8, 3, 'Sudimara', 'Pinang', 'Tangerang', 'Jl. Dharma Bhakti  Kel. Sudimara Rt. 008 Rw. 003 Kec. Pinang Kota Tangerang', 8, 3, 'Sudimara', 'Pinang', 'Tangerang', '', '085211442121', 6, '2016-09-08 17:40:58'),
(287, '', '', 'Endang Wahyuningsih', '', '', 2, 'Purworejo', '1969-05-24', 'islam', 'Cluster Akasia 2 AS 15 No.25 Taman Royal 3 Cipondoh Tangerang', 0, 0, '', '', 'Tangerang', 'Cluster Akasia 2 AS 15 No.25 Taman Royal 3 Cipondoh Tangerang', 0, 0, '', '', 'Tangerang', '', '08158076634', 6, '2016-09-08 17:42:08'),
(288, '', '', 'Ayub Prawibowo', '', ', S.Pd', 1, 'Banyumas', '1986-12-15', 'islam', 'Jl.H.Mean VI No. 105 Rt. 01/02 Kec. Karang Tengah Kota Tangerang', 1, 2, '', 'Karang Tengah', 'Tangerang', 'Jl.H.Mean VI No. 105 Rt. 01/02 Kec. Karang Tengah Kota Tangerang', 1, 2, '', 'Karang Tengah', 'Tangerang', '', '08561772913', 6, '2016-09-09 06:37:10'),
(289, '', '', 'Nur Ulumiyah', '', ', S.Pd', 2, 'Tangerang', '1991-12-21', 'islam', 'Jl. Adi Sucipto  Rt. 03/03 Kel. Pajang  Kec. Benda Kota Tangerang', 3, 3, 'Pajang', 'Benda', 'Tangerang', 'Jl. Adi Sucipto  Rt. 03/03 Kel. Pajang  Kec. Benda Kota Tangerang', 3, 3, 'Pajang', 'Benda', 'Tangerang', '', '085694640020', 6, '2016-09-09 06:38:57'),
(290, '', '', 'Luthfatul Laila', '', '', 2, 'Jakarta', '1993-11-12', 'islam', 'Jl.KH.Agus Salim Gg. Masjid 1 Kel. Poris Plawad Rt. 002 Rw. 006 Kec. Cipondoh Kota Tangerang', 2, 6, 'Poris Plawad', 'Cipondoh', 'Tangerang', 'Jl.KH.Agus Salim Gg. Masjid 1 Kel. Poris Plawad Rt. 002 Rw. 006 Kec. Cipondoh Kota Tangerang', 2, 6, 'Poris Plawad', 'Cipondoh', 'Tangerang', '', '083899011166', 6, '2016-09-09 06:41:00'),
(291, '', '', 'Abdul Gopar', '', ', S.Kom', 1, 'Tangerang', '1984-07-24', 'islam', 'Gg.Jambu Kel. Buaran Indah Rt. 07 Rw.05 Kec. Tangerang', 7, 5, 'Buaran Indah', 'Tangerang', 'Tangerang', 'Gg.Jambu Kel. Buaran Indah Rt. 07 Rw.05 Kec. Tangerang', 7, 5, 'Buaran Indah', 'Tangerang', 'Tangerang', '02199803217', '085697744341', 6, '2016-09-09 06:45:25'),
(292, '', '', 'Putri Zakiyah', '', ', SE', 2, 'Jakarta', '1986-07-01', 'islam', 'Jl.Jati 1 N0.15 Rt.002/12 Kel. Cibodas Baru Kec. Cibodas Kota Tangerang', 2, 12, 'Cibodas', 'Cibodas', 'Tangerang', 'Jl.Jati 1 N0.15 Rt.002/12 Kel. Cibodas Baru Kec. Cibodas Kota Tangerang', 2, 12, 'Cibodas', 'Cibodas', 'Tangerang', '', '085960478444', 6, '2016-09-09 09:10:38'),
(293, '', '', 'Indry Woro', '', ', S.Pd', 2, 'Tangerang', '1991-08-27', 'islam', 'Kel. Buaran Kandang Besar Rt. 004/005 Kec. Babakan Kota Tangerang', 4, 5, 'Buaran Kandang Besar', 'Babakan', 'Tangerang', 'Kel. Buaran Kandang Besar Rt. 004/005 Kec. Babakan Kota Tangerang', 4, 5, 'Buarang Kandang Besar', 'Babakan', 'Tangerang', '0215544796', '085711757957', 6, '2016-09-09 09:12:08'),
(294, '', '', 'Ni''matul Barkah', '', ', S.Pd', 2, 'Jakarta', '1992-04-10', 'islam', 'Jl.KH.Mustopa Kel. Poris Jaya Rt. 002/007 Kec. Batu Ceper Kota Tangerang', 2, 7, 'Poris Jaya', 'Batu Ceper', 'Tangerang', 'Jl.KH.Mustopa Kel. Poris Jaya Rt. 002/007 Kec. Batu Ceper Kota Tangerang', 2, 7, 'Poris Jaya', 'Batu Ceper', 'Tangerang', '', '089621521914', 6, '2016-09-09 09:13:25'),
(295, '', '', 'Noviani Utami', '', ', S.Pd', 2, 'Tangerang', '1989-11-08', 'islam', 'Jl. Daan Mogot Kel. Tanah Tinggi Rt.002/007 Kec. Tangerang', 2, 7, 'Tanah Tinggi', 'Tangerang', 'Tangerang', 'Jl. Daan Mogot Kel. Tanah Tinggi Rt.002/007 Kec. Tangerang', 2, 7, 'Tanah Tinggi', 'Tangerang', 'Tangerang', '0215581464', '085691545937', 6, '2016-09-09 09:14:50'),
(296, '', '', 'Thayibatul Aslamiyah', '', '', 2, 'Tangerang', '1991-03-05', 'islam', 'Jl.Raya Mauk Km. 14 Kel. Gintung Rt.006/002 Kec. Sukadiri Kab. Tangerang', 6, 2, 'Gintung', 'Sukadiri', 'Tangerang', 'Jl.Raya Mauk Km. 14 Kel. Gintung Rt.006/002 Kec. Sukadiri Kab. Tangerang', 6, 2, 'Gintung', 'Sukadiri', 'Tangerang', '', '085717884246', 6, '2016-09-09 09:29:28'),
(297, '', '', 'Ahmad Nasrullah', '', ', S.Pd', 1, 'Jakarta', '1990-07-25', 'islam', 'Jl.Basmol Rt.001/006 No.159  Kembangan Utara Jakarta Barat', 1, 6, '', '', 'Jakarta Barat', 'Jl.Basmol Rt.001/006 No.159  Kembangan Utara Jakarta Barat', 1, 6, '', '', 'Jakarta Barat', '', '087782193338', 6, '2016-09-09 09:31:44'),
(298, '', '', 'Fitri Nurjanah', '', ', S.Pd', 2, 'Tangerang', '1991-11-06', 'islam', 'Jl.Tugu Karya 3 Cipondoh Rt.004/001 Kec. Cipondoh Kota Tangerang ', 4, 1, '', 'Cipondoh', 'Tangerang', 'Jl.Tugu Karya 3 Cipondoh Rt.004/001 Kec. Cipondoh Kota Tangerang ', 4, 1, '', 'Cipondoh', 'Tangerang', '', '081286360896', 6, '2016-09-09 09:33:10'),
(299, '', '', 'Siti  Nur Latifah', '', ', S.Pd', 2, 'Rangkas Bitung', '1990-07-20', 'islam', 'Jl. Ampera Rt.002/001 Kel. Poris Gaga Kec. Batu Ceper Kota Tangerang', 1, 1, 'Poris Gaga', 'Batu Ceper', 'Tangerang', 'Jl. Ampera Rt.002/001 Kel. Poris Gaga Kec. Batu Ceper Kota Tangerang', 2, 1, 'Poris Gaga', 'Batu Ceper', 'Tangerang', '', '081906210677', 6, '2016-09-09 09:34:27'),
(300, '', '', 'Sielmy Kaafah', '', '', 2, 'Tangerang', '1997-01-21', 'islam', 'Jl. Kp. Gebang  Rt. 001 Rw. 002 Kec. Priuk Kab. Tangerang', 1, 2, '', 'Priuk', 'Tangerang', 'Jl. Kp. Gebang  Rt. 001 Rw. 002 Kec. Priuk Kab. Tangerang', 1, 2, '', 'Priuk', 'Tangerang', '', '08128317024', 6, '2016-09-09 09:38:09'),
(301, '', '', 'Irwansyah', '', ', S.Pd.I', 1, 'Lebak', '1993-11-04', 'islam', 'Kel. Poris Gaga Baru Rt. 005 Rw.001 Kec. Batuceper Kota  Tangerang', 5, 1, 'Poris Gaga Baru', 'Batu Ceper', 'Tangerang', 'Kel. Poris Gaga Baru Rt. 005 Rw.001 Kec. Batuceper Kota  Tangerang', 5, 1, 'Poris Gaga Baru', 'Batu Ceper', 'Tangerang', '', '089504227552', 6, '2016-09-09 09:41:20'),
(302, 'asset/images/photos/_20160929_112854.jpg', '', 'Abdul Roup', '', '', 1, 'Tangerang', '1987-08-26', 'islam', 'Jl. KH. Mustopa Rt.004 Rw. 004 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 4, 4, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', 'Jl. KH. Mustopa Rt.004 Rw. 004 Kel. Poris Plawad Utara Kec. Cipondoh Kota Tangerang', 4, 4, 'Poris Plawad Utara', 'Cipondoh', 'Tangerang', '', '089646731069', 6, '2016-09-09 09:44:52'),
(303, '', '', 'Deden Hidayatullah', '', '', 1, 'Tangerang', '1993-01-09', 'islam', 'Jl. Aster 1 No.12 Bumi Indah Pasar Kemis Rt.007 Rw.006 Kel. Kuta Jaya Kec. Pasar Kemis Kab. Tangerang', 7, 6, 'Kuta Jaya', 'Pasar Kemis', 'Tangerang', 'Jl. Aster 1 No.12 Bumi Indah Pasar Kemis Rt.007 Rw.006 Kel. Kuta Jaya Kec. Pasar Kemis Kab. Tangerang', 7, 6, 'Kuta Jaya', 'Pasar Kemis', 'Tangerang', '', '08999353593', 6, '2016-09-09 09:47:27'),
(304, '', '', 'Yogi', '', '', 1, 'Tangerang', '1993-03-03', 'islam', 'Kel. Bintaro Rt. 002 Rw.001 Kec. Pondok Pucung  Kab. Tangerang', 2, 1, 'Bintaro', 'Pondok Pucung', 'Tangerang', 'Kel. Bintaro Rt. 002 Rw.001 Kec. Pondok Pucung  Kab. Tangerang', 2, 1, 'Bintaro', 'Pondok Pucung', 'Tangerang', '', '089664540308', 6, '2016-09-09 09:48:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_pendidikan`
--

CREATE TABLE IF NOT EXISTS `as_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `pendidikan_terakhir` tinyint(2) NOT NULL COMMENT '0: Tidak sekolah, 1: SD, 2: SMP, 3: SMA, 4: D1, 5: D2, 6: D3, 7: D4, 8: S1, 9: S2, 10: S3, 11: Paket B, C',
  `nama_pt` varchar(200) NOT NULL COMMENT 'nama institusi pendidkan terakhir',
  `pendidikan_ditempuh` tinyint(2) NOT NULL COMMENT '0: Tidak sekolah, 1: SD, 2: SMP, 3: SMA, 4: D1, 5: D2, 6: D3, 7: D4, 8: S1, 9: S2, 10: S3, 11: Paket B, C',
  `program_pd` varchar(100) NOT NULL,
  `jurusan_pd` varchar(100) NOT NULL,
  `tahun_masuk_pd` date NOT NULL,
  `nama_pt_pd` varchar(100) NOT NULL COMMENT 'nama perguruan tinggi pendidikan ditempuh'
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_pendidikan`
--

INSERT INTO `as_pendidikan` (`id_pendidikan`, `id_pegawai`, `pendidikan_terakhir`, `nama_pt`, `pendidikan_ditempuh`, `program_pd`, `jurusan_pd`, `tahun_masuk_pd`, `nama_pt_pd`) VALUES
(1, 7, 8, 'Univ. Muhamadiyyah Jkt', 0, '', '', '0000-00-00', ''),
(2, 52, 3, 'MA Cipasung Tasikmalaya', 0, '', '', '0000-00-00', ''),
(3, 51, 3, 'SMAN 3 Tangerang', 0, '', '', '0000-00-00', ''),
(4, 166, 9, 'Tarbiyah, Univ. Muhammadiyah Jkt', 0, '', '', '0000-00-00', ''),
(5, 108, 3, '14 Negeri Tangerang', 0, '', '', '0000-00-00', ''),
(6, 140, 8, 'AMIK Masa Depan', 0, '', '', '0000-00-00', ''),
(7, 47, 3, 'Gontor Ponorogo', 0, '', '', '0000-00-00', ''),
(8, 53, 8, 'Analisis Kimia,Akademi Kimia Anl', 0, '', '', '0000-00-00', ''),
(9, 24, 8, 'Univ. Muhamadiyyah Tng', 0, '', '', '0000-00-00', ''),
(10, 40, 2, 'Daarul Huda', 0, '', '', '0000-00-00', ''),
(11, 156, 8, 'Man.Informatika, STMIK Budi Luhur', 0, '', '', '0000-00-00', ''),
(12, 136, 3, 'Paket C PKBM Bina Insani', 0, '', '', '0000-00-00', ''),
(13, 187, 8, 'Univ.Islam Syek Yusuf Tng', 0, '', '', '0000-00-00', ''),
(14, 86, 8, 'UIN Syarif Hidayatullah', 0, '', '', '0000-00-00', ''),
(15, 54, 8, 'Teknik Informatika,STMIK Budi Lhr', 0, '', '', '0000-00-00', ''),
(16, 185, 4, 'PGTK Darul Qolam', 0, '', '', '0000-00-00', ''),
(17, 204, 8, 'Institut Islam Darusalam Gontor', 0, '', '', '0000-00-00', ''),
(18, 35, 8, 'Univ. Muhammadiyah Jkt', 0, '', '', '0000-00-00', ''),
(19, 55, 8, 'Univ.Uhamka JKT', 0, '', '', '0000-00-00', ''),
(20, 56, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(21, 93, 3, 'Negeri 1 Purwadadi Subang', 0, '', '', '0000-00-00', ''),
(22, 8, 8, 'KPGTKI Cut Mutiah Jakarta', 0, '', '', '0000-00-00', ''),
(23, 121, 8, 'Univ.Muhamadiyyah Surakarta', 0, '', '', '0000-00-00', ''),
(24, 205, 8, 'STIT Islamic Village', 0, '', '', '0000-00-00', ''),
(25, 194, 8, 'Univ. PGRI Palembang', 0, '', '', '0000-00-00', ''),
(26, 9, 1, 'Sekolah Dasar', 0, '', '', '0000-00-00', ''),
(27, 113, 8, 'Univ.Islam Syekh Yusup Tng', 0, '', '', '0000-00-00', ''),
(28, 201, 8, 'S1', 0, '', '', '0000-00-00', ''),
(29, 148, 4, 'Ma''had Utsman Bin Affan', 0, '', '', '0000-00-00', ''),
(30, 191, 8, 'Univ. Negeri Jakarta', 0, '', '', '0000-00-00', ''),
(31, 117, 8, 'Univ. Muhammadiyah Tng', 0, '', '', '0000-00-00', ''),
(32, 30, 3, 'Negeri 1 slawi', 0, '', '', '0000-00-00', ''),
(33, 44, 3, 'SMA(SMK)Motivasi Insani', 0, '', '', '0000-00-00', ''),
(34, 57, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(35, 198, 3, 'SMA(SMK)PGRI Ciledug', 0, '', '', '0000-00-00', ''),
(36, 102, 8, 'STAI Al-Falah', 0, '', '', '0000-00-00', ''),
(37, 42, 3, 'MAN 2 Tangerang', 0, '', '', '0000-00-00', ''),
(38, 133, 8, 'Bahasa Indonesia, Univ. Terbuka', 0, '', '', '0000-00-00', ''),
(39, 134, 8, 'Univ. Muhamadiyyah UHAMKA', 0, '', '', '0000-00-00', ''),
(40, 157, 8, 'Perdata Pidana Islam, IAIN SGD Bandung', 0, '', '', '0000-00-00', ''),
(41, 58, 8, 'Bahasa Inggris', 0, '', '', '0000-00-00', ''),
(42, 43, 3, 'MAN 2 Tangerang', 0, '', '', '0000-00-00', ''),
(43, 150, 3, 'Negeri 1 Jasinga Bogor', 0, '', '', '0000-00-00', ''),
(44, 31, 8, 'Univ. Muhammadiyah Jkt', 0, '', '', '0000-00-00', ''),
(45, 10, 8, 'Univ. Muhammadiyah Tng', 0, '', '', '0000-00-00', ''),
(46, 59, 3, 'SMEA Jakarta', 0, '', '', '0000-00-00', ''),
(47, 135, 8, 'Sis. Informasi,  STMIK Budi Luhur', 0, '', '', '0000-00-00', ''),
(48, 122, 8, 'Univ. Muhammadiyah Tng', 0, '', '', '0000-00-00', ''),
(49, 129, 8, 'STMIK Antar Bangsa', 0, '', '', '0000-00-00', ''),
(50, 60, 3, 'MAN Tangerang', 0, '', '', '0000-00-00', ''),
(51, 158, 8, 'PAI, STAI Muhammadiyah Tng', 0, '', '', '0000-00-00', ''),
(52, 65, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(53, 159, 8, 'STAI  Darul Qolam', 0, '', '', '0000-00-00', ''),
(54, 155, 8, 'PGTK Darul Qalam Jakarta', 0, '', '', '0000-00-00', ''),
(55, 64, 1, 'SD Tunjang Jaya 1 Lebak', 0, '', '', '0000-00-00', ''),
(56, 190, 8, 'UNINUS Bandung', 0, '', '', '0000-00-00', ''),
(57, 137, 8, 'FKIP UHAMKA', 0, '', '', '0000-00-00', ''),
(58, 63, 8, 'STAI Attaqawa Bekas', 0, '', '', '0000-00-00', ''),
(59, 160, 8, 'STIA-LAN Jakarta', 0, '', '', '0000-00-00', ''),
(60, 62, 8, 'Pend. Fisika UNJ', 0, '', '', '0000-00-00', ''),
(61, 111, 8, 'UIN Syarif Hidayatullah JKT', 0, '', '', '0000-00-00', ''),
(62, 123, 3, 'SMA(SMK)Negeri 2 Kota Tangsel', 0, '', '', '0000-00-00', ''),
(63, 11, 8, 'PAI, STAI Darul Qalam Tng', 0, '', '', '0000-00-00', ''),
(64, 39, 3, 'SMK Muhamaddiyah 1', 0, '', '', '0000-00-00', ''),
(65, 104, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(66, 12, 8, 'Tata Busana,  IKIP Padang', 0, '', '', '0000-00-00', ''),
(67, 97, 8, 'IAIN Imam Bonjol Padang', 0, '', '', '0000-00-00', ''),
(68, 105, 8, 'Universitas Djuanda', 0, '', '', '0000-00-00', ''),
(69, 130, 8, 'Univ. Untirta Serang', 0, '', '', '0000-00-00', ''),
(70, 182, 8, 'Univ.Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(71, 26, 8, 'Stai Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(72, 161, 8, 'Tarbiyah, IAIN SGD Bandung', 0, '', '', '0000-00-00', ''),
(73, 197, 8, 'Univ.Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(74, 49, 8, 'Syaria''ah Az Ziyadah Jakarta', 0, '', '', '0000-00-00', ''),
(75, 61, 8, 'Analisis Kimia, Univ.Setia Budi Srk', 0, '', '', '0000-00-00', ''),
(76, 199, 8, 'Univ.Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(77, 37, 3, 'SMA(SMK)Negeri Manonjaya', 0, '', '', '0000-00-00', ''),
(78, 85, 8, 'Universitas Mercu Buana', 0, '', '', '0000-00-00', ''),
(79, 33, 8, 'Univ.Muhammadiyah Tng', 0, '', '', '0000-00-00', ''),
(80, 13, 8, 'PGTK Darul Qalam Tangerang', 0, '', '', '0000-00-00', ''),
(81, 70, 8, 'Universitas Indonesia', 0, '', '', '0000-00-00', ''),
(82, 116, 8, 'Univ. Muhammadiyah Tng', 0, '', '', '0000-00-00', ''),
(83, 146, 6, 'LP3I Jakarta', 0, '', '', '0000-00-00', ''),
(84, 124, 8, 'STMIK Raharja', 0, '', '', '0000-00-00', ''),
(85, 131, 8, 'STKIP Suluh Bangsa', 0, '', '', '0000-00-00', ''),
(86, 186, 3, 'Bina Insani Tangerang', 0, '', '', '0000-00-00', ''),
(87, 106, 8, 'Universitas Djuanda', 0, '', '', '0000-00-00', ''),
(88, 100, 1, 'Poris Plawad 5 ', 0, '', '', '0000-00-00', ''),
(89, 154, 8, 'PAI, IAIN Syarif Hidayatullah Jkt', 0, '', '', '0000-00-00', ''),
(90, 181, 8, 'Univ Negeri Jakarta', 0, '', '', '0000-00-00', ''),
(91, 127, 8, 'IIQ Jakarta', 0, '', '', '0000-00-00', ''),
(92, 95, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(93, 87, 5, 'Shadah Khotmil Qur''an', 0, '', '', '0000-00-00', ''),
(94, 206, 3, 'SMAIT Darul Qur''an Mulia', 0, '', '', '0000-00-00', ''),
(95, 14, 8, 'STAI  Darul Qolam', 0, '', '', '0000-00-00', ''),
(96, 152, 8, 'Uhamka Jakarta', 0, '', '', '0000-00-00', ''),
(97, 88, 5, 'IAIN Sunan Gunung Jati Bandung', 0, '', '', '0000-00-00', ''),
(98, 69, 9, 'Syariah, IIQ Jakarta', 0, '', '', '0000-00-00', ''),
(99, 162, 9, 'Unis Syech Yusuf Tangerang', 0, '', '', '0000-00-00', ''),
(100, 25, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(101, 188, 8, 'Uhamka Jakarta', 0, '', '', '0000-00-00', ''),
(102, 163, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(103, 38, 3, 'Daarul Barkah', 0, '', '', '0000-00-00', ''),
(104, 48, 1, 'Sekolah Dasar', 0, '', '', '0000-00-00', ''),
(105, 68, 8, 'Budi Daya Pertanian, IPB', 0, '', '', '0000-00-00', ''),
(106, 165, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(107, 132, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(108, 196, 8, 'Univ.Muhamadiyyah UHAMKA', 0, '', '', '0000-00-00', ''),
(109, 107, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(110, 67, 8, 'STAIS Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(111, 41, 3, 'Negeri 5 Tangerang', 0, '', '', '0000-00-00', ''),
(112, 167, 8, 'Unis Syech Yusuf Tangerang', 0, '', '', '0000-00-00', ''),
(113, 15, 8, 'Univ.Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(114, 66, 8, 'Sejarah, Univ. Negeri Jakarta', 0, '', '', '0000-00-00', ''),
(115, 96, 8, 'IAI Al-Aqidah Jakarta', 0, '', '', '0000-00-00', ''),
(116, 50, 8, 'Hukum, Univ. Indonesia', 0, '', '', '0000-00-00', ''),
(117, 103, 8, 'Univ. Negeri Jakarta', 0, '', '', '0000-00-00', ''),
(118, 168, 8, 'Univ. Muhammadiyah Jakarta', 0, '', '', '0000-00-00', ''),
(119, 71, 8, 'B.Indonesia,IKIP Muhamamdiah', 0, '', '', '0000-00-00', ''),
(120, 147, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(121, 145, 8, 'Univ.UHAMKA Jakarta', 0, '', '', '0000-00-00', ''),
(122, 203, 8, 'Univ.Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(123, 90, 4, 'BSI Jakarta', 0, '', '', '0000-00-00', ''),
(124, 84, 8, 'FMIPA-Kimia, UGM Yogyakarta', 0, '', '', '0000-00-00', ''),
(125, 114, 8, 'UIN Syarif Hidayatullah', 0, '', '', '0000-00-00', ''),
(126, 16, 8, 'Pendidikan Guru Paud UMJ', 0, '', '', '0000-00-00', ''),
(127, 195, 3, 'YP Karya Cipondoh Tangerang', 0, '', '', '0000-00-00', ''),
(128, 22, 8, 'Univ. Muhammadiyah Jkt', 0, '', '', '0000-00-00', ''),
(129, 45, 3, 'Daarul Muttaqien', 0, '', '', '0000-00-00', ''),
(130, 94, 8, 'UIN Syahid', 0, '', '', '0000-00-00', ''),
(131, 202, 3, 'Yapera', 0, '', '', '0000-00-00', ''),
(132, 149, 3, 'Man Cipondoh', 0, '', '', '0000-00-00', ''),
(133, 153, 8, 'Univ. Negeri Malang', 0, '', '', '0000-00-00', ''),
(134, 178, 8, 'Univ. Muhamadiyah Jakarta', 0, '', '', '0000-00-00', ''),
(135, 72, 1, 'SD Islam Ihsan Jatinegara', 0, '', '', '0000-00-00', ''),
(136, 36, 8, 'Univ. Muhammadiyah Jakarta', 0, '', '', '0000-00-00', ''),
(137, 119, 3, 'YP Karya Cipondoh', 0, '', '', '0000-00-00', ''),
(138, 73, 9, 'STAIS Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(139, 176, 1, 'Sekolah Dasar', 0, '', '', '0000-00-00', ''),
(140, 138, 8, 'STKIP Pasundan', 0, '', '', '0000-00-00', ''),
(141, 109, 3, 'Al Itqom Jakarta Barat', 0, '', '', '0000-00-00', ''),
(142, 183, 8, 'Univ.UHAMKA Jakarta', 0, '', '', '0000-00-00', ''),
(143, 170, 8, 'Peradilan Agama, IAIN SGD Bdg', 0, '', '', '0000-00-00', ''),
(144, 115, 8, 'Univ.Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(145, 74, 8, 'Manajemen, Univ. Andalas', 0, '', '', '0000-00-00', ''),
(146, 200, 3, 'Asyfa Boording School', 0, '', '', '0000-00-00', ''),
(147, 177, 8, 'STKIP PGRI Bandar Lampung', 0, '', '', '0000-00-00', ''),
(148, 46, 3, 'Mathla''ul Anwar MLP', 0, '', '', '0000-00-00', ''),
(149, 34, 8, 'Univ.Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(150, 17, 8, 'Pendidikan Agama Islam Paud', 0, '', '', '0000-00-00', ''),
(151, 120, 8, 'Univ.Syekh Yusuf Tangerang', 0, '', '', '0000-00-00', ''),
(152, 192, 8, 'STAIS Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(153, 142, 8, 'IAIN Sunan Gunung Jati ', 0, '', '', '0000-00-00', ''),
(154, 91, 8, 'UIN Syarif Hidayatullah', 0, '', '', '0000-00-00', ''),
(155, 101, 8, 'IAI Cipasung', 0, '', '', '0000-00-00', ''),
(156, 125, 8, 'Univ.UHAMKA Jakarta', 0, '', '', '0000-00-00', ''),
(157, 139, 8, 'STKIP Kusuma Negara Jakar', 0, '', '', '0000-00-00', ''),
(158, 184, 8, 'Univ.UHAMKA Jakarta', 0, '', '', '0000-00-00', ''),
(159, 76, 8, 'Hub. Int'' Universitas Jakarta', 0, '', '', '0000-00-00', ''),
(160, 75, 8, 'MIPA, Univ. Islam As-Syafi''iyah', 0, '', '', '0000-00-00', ''),
(161, 110, 3, 'Al-Hikmah Brebes Jateng', 0, '', '', '0000-00-00', ''),
(162, 171, 2, 'Paket B Bina Harapan Tangerang', 0, '', '', '0000-00-00', ''),
(163, 172, 8, 'Tarbiyah, STAIN Hasanudin Banten', 0, '', '', '0000-00-00', ''),
(164, 141, 8, 'IAIN Jakarta', 0, '', '', '0000-00-00', ''),
(165, 144, 8, 'IAIN Syarif Hidayatullah Jakarta', 0, '', '', '0000-00-00', ''),
(166, 18, 4, 'PGTK Arrahman Jakarta', 0, '', '', '0000-00-00', ''),
(167, 77, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(168, 89, 8, 'Kridawisata Lampung', 0, '', '', '0000-00-00', ''),
(169, 78, 8, 'Man. Hutan Univ. Lampung', 0, '', '', '0000-00-00', ''),
(170, 79, 8, 'IKK Teknik Univ.Negeri Jakarta', 0, '', '', '0000-00-00', ''),
(171, 98, 8, 'Daarul Qalam ', 0, '', '', '0000-00-00', ''),
(172, 80, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(173, 169, 9, 'Universitas Indraprasta (PGRI)', 0, '', '', '0000-00-00', ''),
(174, 81, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(175, 28, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(176, 151, 8, 'STKIP Kusuma Negara Jakarta', 0, '', '', '0000-00-00', ''),
(177, 118, 8, 'STKIP Ahlussunah BukitTinggi', 0, '', '', '0000-00-00', ''),
(178, 92, 8, 'STIT Islamic Vilage', 0, '', '', '0000-00-00', ''),
(179, 32, 8, 'Univ Matlaul Anwar Banten', 0, '', '', '0000-00-00', ''),
(180, 173, 8, 'Univ.UHAMKA Jakarta', 0, '', '', '0000-00-00', ''),
(181, 112, 8, 'UIN Syarif Hidayatullah', 0, '', '', '0000-00-00', ''),
(182, 189, 8, 'Univ.Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(183, 99, 8, '-', 0, '', '', '0000-00-00', ''),
(184, 19, 8, 'STAI Darul Qalam Tangerang', 0, '', '', '0000-00-00', ''),
(185, 20, 8, 'Univ.Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(186, 27, 6, 'Bina Sarana Informatika', 0, '', '', '0000-00-00', ''),
(187, 29, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(188, 21, 4, 'PGTK Darul Qalam Jakarta', 0, '', '', '0000-00-00', ''),
(189, 82, 8, 'STKIP Pasundan', 0, '', '', '0000-00-00', ''),
(190, 174, 8, 'STIE Muhamadiyyah', 0, '', '', '0000-00-00', ''),
(191, 83, 4, 'BSI Jakarta', 0, '', '', '0000-00-00', ''),
(192, 175, 8, 'Teknologi Pertanian, IPB Bogor', 0, '', '', '0000-00-00', ''),
(193, 128, 8, 'Univ. Indra Prasta Jakarta', 0, '', '', '0000-00-00', ''),
(194, 179, 4, 'Univ. Brawijaya Politehnik', 0, '', '', '0000-00-00', ''),
(195, 180, 8, 'Unis Syech Yusuf Tangerang', 0, '', '', '0000-00-00', ''),
(196, 126, 8, 'Untirta Serang', 0, '', '', '0000-00-00', ''),
(197, 23, 5, 'PGSD Darul Qolam', 0, '', '', '0000-00-00', ''),
(198, 143, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(199, 193, 6, 'Bina Sarana Informatika', 0, '', '', '0000-00-00', ''),
(200, 207, 3, 'SMA(SMK)Budi Mulia Ciledug Tangerang', 0, '', '', '0000-00-00', ''),
(201, 225, 3, 'MAN Al-Fitroh', 0, '', '', '0000-00-00', ''),
(202, 211, 8, 'Manajemen Pemasaran, IKOPIN', 0, '', '', '0000-00-00', ''),
(203, 230, 8, 'SEBI Jakarta', 0, '', '', '0000-00-00', ''),
(204, 213, 3, 'SMAN 1 Tangerang', 0, '', '', '0000-00-00', ''),
(205, 214, 8, 'AKSEMA LEPISI Tangerang', 0, '', '', '0000-00-00', ''),
(206, 226, 3, 'SMK Giri Putra', 0, '', '', '0000-00-00', ''),
(207, 229, 9, 'Univ. Azzahra', 0, '', '', '0000-00-00', ''),
(208, 221, 1, 'Sekolah Dasar', 0, '', '', '0000-00-00', ''),
(209, 234, 3, 'PKBN Bina Harapan Tng', 0, '', '', '0000-00-00', ''),
(210, 231, 3, ' Negeri 4 Tangerang', 0, '', '', '0000-00-00', ''),
(211, 235, 8, 'STIE Widya Wiwaha YK', 0, '', '', '0000-00-00', ''),
(212, 232, 8, 'UIN Jakarta', 0, '', '', '0000-00-00', ''),
(213, 216, 3, 'STM Prog. Listrik, Yuppentek IV Tng', 0, '', '', '0000-00-00', ''),
(214, 217, 8, 'STAI Asy-Syukriyyah Tng', 0, '', '', '0000-00-00', ''),
(215, 228, 2, 'Miftahu Salam', 0, '', '', '0000-00-00', ''),
(216, 227, 3, 'Yupentek 1 Tangerang', 0, '', '', '0000-00-00', ''),
(217, 209, 9, 'Gifu University, Japan', 0, '', '', '0000-00-00', ''),
(218, 218, 2, 'Negeri  3 Tangerang', 0, '', '', '0000-00-00', ''),
(219, 224, 3, 'Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(220, 236, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(221, 208, 9, 'Adm. Pendidikan UHAMKA Jkt', 0, '', '', '0000-00-00', ''),
(222, 215, 3, 'Sampagita Jakarta', 0, '', '', '0000-00-00', ''),
(223, 237, 3, 'Paket C', 0, '', '', '0000-00-00', ''),
(224, 210, 9, 'STIE IPWIJA Jakarta', 0, '', '', '0000-00-00', ''),
(225, 219, 3, 'Negeri  1  TeluknagaTangerang', 0, '', '', '0000-00-00', ''),
(226, 220, 3, 'Yupentek  Tangerang', 0, '', '', '0000-00-00', ''),
(227, 212, 3, 'Ponpes Khusnul Khotimah Kng', 0, '', '', '0000-00-00', ''),
(228, 233, 6, 'STIKES YATSI', 0, '', '', '0000-00-00', ''),
(229, 222, 3, 'Ponpes Khusnul Khotimah Kng', 0, '', '', '0000-00-00', ''),
(230, 223, 6, 'LDSI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(231, 238, 2, 'Negeri 2 Cimanggis Bogor', 0, '', '', '0000-00-00', ''),
(232, 259, 6, 'Bina Sarana Informatika', 0, '', '', '0000-00-00', ''),
(233, 245, 9, 'STKIP Kusuma Bangsa JKT', 0, '', '', '0000-00-00', ''),
(234, 250, 8, 'Uhamka Jakarta', 0, '', '', '0000-00-00', ''),
(235, 240, 9, 'Manajemen, STIE YP Karya Tangerang', 0, '', '', '0000-00-00', ''),
(236, 239, 9, 'Pend. Biologi, IKIP Jakarta', 0, '', '', '0000-00-00', ''),
(237, 247, 8, 'STKIP Jakarta', 0, '', '', '0000-00-00', ''),
(238, 254, 6, 'Amik BSI Jakarta', 0, '', '', '0000-00-00', ''),
(239, 256, 8, 'Fak.Teknik Sipil UNAND', 0, '', '', '0000-00-00', ''),
(240, 249, 8, 'Univ Jendral Sudirman', 0, '', '', '0000-00-00', ''),
(241, 255, 8, '-', 0, '', '', '0000-00-00', ''),
(242, 246, 8, 'Univ. Islam Bandung', 0, '', '', '0000-00-00', ''),
(243, 263, 8, 'Institut PTIQ Jakarta', 0, '', '', '0000-00-00', ''),
(244, 262, 1, 'Poris Plawad', 0, '', '', '0000-00-00', ''),
(245, 241, 8, 'STKIP Setia Budhi Rangkasbitung', 0, '', '', '0000-00-00', ''),
(246, 244, 8, 'Univ. Negeri Jakarta', 0, '', '', '0000-00-00', ''),
(247, 242, 8, 'Univ. Islam Indonesia /Tarbiyah', 0, '', '', '0000-00-00', ''),
(248, 251, 8, 'Univ.Negeri Jakarta', 0, '', '', '0000-00-00', ''),
(249, 266, 3, 'Daar El Qolam', 0, '', '', '0000-00-00', ''),
(250, 257, 8, 'Univ.Muhammadiyah ', 0, '', '', '0000-00-00', ''),
(251, 252, 8, 'FKIP Unis Tangerang', 0, '', '', '0000-00-00', ''),
(252, 260, 2, 'An Najiyah Pondok Aren TNG', 0, '', '', '0000-00-00', ''),
(253, 264, 8, 'Univ. Muhamadiyyah Tangerang', 0, '', '', '0000-00-00', ''),
(254, 253, 8, 'Univ. Negeri Jakarta', 0, '', '', '0000-00-00', ''),
(255, 267, 8, 'InstitutTeknologi Telkom', 0, '', '', '0000-00-00', ''),
(256, 265, 8, 'Univ. Negeri Jakarta', 0, '', '', '0000-00-00', ''),
(257, 243, 8, 'MIPA, IKIP Malang', 0, '', '', '0000-00-00', ''),
(258, 261, 8, 'Univ.Muhammadiyah Tng', 0, '', '', '0000-00-00', ''),
(259, 248, 2, 'Pandeglang', 0, '', '', '0000-00-00', ''),
(260, 258, 8, 'STAI Asy-Syukriyyah Tng', 0, '', '', '0000-00-00', ''),
(261, 291, 8, 'STMIK PGRI Tangerang', 0, '', '', '0000-00-00', ''),
(262, 302, 3, 'SMK Otomotif Waskita Tangerang', 0, '', '', '0000-00-00', ''),
(263, 297, 8, 'UIN Syarif Hidayatullah', 0, '', '', '0000-00-00', ''),
(264, 269, 8, 'Tafsir Hadits, IAIN Jakarta', 0, '', '', '0000-00-00', ''),
(265, 288, 8, 'STKIP Kusuma Bangsa', 0, '', '', '0000-00-00', ''),
(266, 303, 3, 'Negeri 4 Tangerang', 0, '', '', '0000-00-00', ''),
(267, 282, 8, 'Muamalah', 0, '', '', '0000-00-00', ''),
(268, 287, 6, 'Ikip Jakarta', 0, '', '', '0000-00-00', ''),
(269, 298, 8, 'UIN SyarifHidayatullah JKT', 0, '', '', '0000-00-00', ''),
(270, 293, 8, 'Univ. Negeri Yogyakarta', 0, '', '', '0000-00-00', ''),
(271, 283, 8, 'UNIS Tangerang', 0, '', '', '0000-00-00', ''),
(272, 301, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(273, 270, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(274, 290, 3, 'SMK Negeri 2 Kota Tangerang', 0, '', '', '0000-00-00', ''),
(275, 268, 8, 'Univ. Bung Hatta Pdg', 0, '', '', '0000-00-00', ''),
(276, 275, 8, 'Universitas Indraprasta PGRI', 0, '', '', '0000-00-00', ''),
(277, 271, 3, 'SMK Negeri Tangerang', 0, '', '', '0000-00-00', ''),
(278, 278, 3, 'Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(279, 274, 8, 'Syariah, Ins. Studi Islam Darussalam', 0, '', '', '0000-00-00', ''),
(280, 294, 8, 'UNTIRTA Serang', 0, '', '', '0000-00-00', ''),
(281, 295, 8, 'Univ. Sultan Ageng Tirtayasa', 0, '', '', '0000-00-00', ''),
(282, 279, 8, 'UPN Veteran Yogyakarta', 0, '', '', '0000-00-00', ''),
(283, 289, 8, 'Univ. UHAMKA Jakarta', 0, '', '', '0000-00-00', ''),
(284, 277, 2, 'PGRI 1 Cikokol Tangerang', 0, '', '', '0000-00-00', ''),
(285, 292, 8, 'Univ.Muhammadiyah Tangerang', 0, '', '', '0000-00-00', ''),
(286, 276, 8, ' Riyadlotut Tholabah', 0, '', '', '0000-00-00', ''),
(287, 272, 4, 'El-Rahma, Surabaya', 0, '', '', '0000-00-00', ''),
(288, 280, 8, 'La Tansa', 0, '', '', '0000-00-00', ''),
(289, 281, 8, 'STAI Asy-Syukriyyah', 0, '', '', '0000-00-00', ''),
(290, 300, 3, 'Binaul Ummah', 0, '', '', '0000-00-00', ''),
(291, 299, 8, 'UNTIRTA Serang', 0, '', '', '0000-00-00', ''),
(292, 286, 8, 'UIN Syarif Hidayatullah', 0, '', '', '0000-00-00', ''),
(293, 284, 3, 'STM Muhammadiyah klaten', 0, '', '', '0000-00-00', ''),
(294, 296, 3, 'Negeri 1 Sepatan', 0, '', '', '0000-00-00', ''),
(295, 273, 8, 'Bahasa & Sastra, UNJ', 0, '', '', '0000-00-00', ''),
(296, 304, 3, 'PGRI II Ciledug', 0, '', '', '0000-00-00', ''),
(297, 285, 8, 'Muhamadiyyah 2', 0, '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_pendidikan_formal`
--

CREATE TABLE IF NOT EXISTS `as_pendidikan_formal` (
  `id_pendidikan_normal` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `tingkat` varchar(100) NOT NULL COMMENT '1:SD,2:SMP,3.SMA',
  `tahun_masuk` date NOT NULL,
  `tahun_selesai` date NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_riwayat_jabatan`
--

CREATE TABLE IF NOT EXISTS `as_riwayat_jabatan` (
  `id_riwayat_jabatan` int(11) NOT NULL,
  `id_riwayat_kerja` int(11) NOT NULL,
  `tahun_mulai` date NOT NULL,
  `tahun_selesai` date NOT NULL,
  `unit` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_riwayat_jabatan_diluar`
--

CREATE TABLE IF NOT EXISTS `as_riwayat_jabatan_diluar` (
  `id_riwayat_jabatan_diluar` int(11) NOT NULL,
  `id_riwayat_kerja` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alasan_keluar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_riwayat_kerja`
--

CREATE TABLE IF NOT EXISTS `as_riwayat_kerja` (
  `id_riwayat_kerja` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `unit_kerja` tinyint(3) NOT NULL COMMENT '0: Tidak Ada, 1: Dept. Support, 2: LPIA, 3: LDSM, 4: LPP, 5: LEKU, 6: TK Islam, 7: SDIT, 8: MI Plus, 9: MTS Plus, 10: SMPIT, 11: SMAIT, 12: Lainnya',
  `unit_kerja_sebelumnya` tinyint(2) NOT NULL COMMENT '0: Tidak Ada, 1: Dept. Support, 2: LPIA, 3: LDSM, 4: LPP, 5: LEKU, 6: TK Islam, 7: SDIT, 8: MI Plus, 9: MTS Plus, 10: SMPIT, 11: SMAIT, 12: Lainnya',
  `mulai_tugas` int(4) NOT NULL,
  `status_kepegawaian` int(11) NOT NULL COMMENT '1 : Pegawai Tetap ,2 : Honorer , 3: Kontrak 4 : Calon Pegawai Tetap ,5: DPK / GBS, ',
  `pengangkatan_calon_tetap` date NOT NULL,
  `pengangkatan_tetap` date NOT NULL,
  `fungsi` int(11) NOT NULL COMMENT '1 : Guru ,2 : Non guru / Tenaga Kependidikan',
  `status_sertifikasi` tinyint(2) NOT NULL COMMENT '1: Ya, 2: Dalam Proses, 3: Belum/Tidak',
  `tahun_sertifikasi` int(4) NOT NULL,
  `sertifikasi_pendidik` varchar(100) NOT NULL,
  `status_aktif` int(11) NOT NULL COMMENT '0.Aktif 1.Non Aktif'
) ENGINE=InnoDB AUTO_INCREMENT=299 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_riwayat_kerja`
--

INSERT INTO `as_riwayat_kerja` (`id_riwayat_kerja`, `id_pegawai`, `jabatan`, `unit_kerja`, `unit_kerja_sebelumnya`, `mulai_tugas`, `status_kepegawaian`, `pengangkatan_calon_tetap`, `pengangkatan_tetap`, `fungsi`, `status_sertifikasi`, `tahun_sertifikasi`, `sertifikasi_pendidik`, `status_aktif`) VALUES
(1, 7, 'Kepala Sekolah', 6, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(2, 8, 'Guru Kelas', 6, 0, 1999, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(3, 9, 'Office Woman', 6, 0, 2000, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(4, 52, 'Guru Al''qur''an', 7, 0, 1999, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(5, 51, 'Office Boy', 7, 0, 1998, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(6, 166, 'Wakabid. Kesiswaan', 8, 0, 2001, 5, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(7, 108, 'Piket', 7, 0, 2013, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(8, 140, 'Wakasek.Bid. Kurikulum', 9, 0, 2009, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(9, 47, 'Guru Save', 6, 0, 2016, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(10, 53, 'Walas 5A', 7, 0, 1997, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(11, 24, 'Guru Kelas', 6, 0, 2010, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(12, 40, 'Kebersihan', 6, 0, 2015, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(13, 156, 'Guru Tik', 8, 0, 2000, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(14, 136, 'Office Boy', 9, 0, 2008, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(15, 187, 'Guru Agama', 8, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(16, 86, 'Walas 3A1', 7, 0, 2009, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(17, 54, 'Walas 4B', 7, 0, 2003, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(18, 185, 'Koordinator Sentra', 8, 0, 2009, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(19, 204, 'Guru Save', 8, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(20, 35, 'Guru Kelas', 6, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(21, 55, 'Walas 2A1', 7, 0, 2002, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(22, 56, 'Wakasek. Bid. Kesiswaan', 7, 0, 2003, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(23, 93, 'Guru OlahRaga', 7, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(24, 121, 'Guru Kelas', 6, 0, 1999, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(25, 205, 'Guru Al''qur''an', 8, 0, 2016, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(26, 194, 'Walas 3 Cordova C', 8, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(27, 113, 'Guru Save', 7, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(28, 201, 'Guru Pend. 4 Mekkah', 8, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(29, 148, 'Guru Al''qur''an', 9, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(30, 191, 'Walas 3 Cordova D', 8, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(31, 117, 'Walas 3D2', 7, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(32, 30, 'Guru Kelas', 6, 0, 2012, 4, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(33, 44, 'Guru Kelas', 6, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(34, 57, 'Guru PAI', 7, 0, 2006, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(35, 198, 'Guru Pend. 3 Mekkah', 8, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(36, 102, 'Walas 3D1', 7, 0, 2010, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(37, 42, 'Guru Shadow', 6, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(38, 133, 'Guru Bendahara', 9, 0, 1989, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(39, 134, 'Guru Biologi', 9, 0, 1999, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(40, 157, 'Walas 5 Mekkah', 8, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(41, 58, 'Walas 4A', 7, 0, 2004, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(42, 43, 'Guru Kelas', 6, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(43, 150, 'Guru Al''qur''an', 9, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(44, 31, 'Guru Kelas', 6, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(45, 10, 'Guru Kelas', 6, 0, 2005, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(46, 59, 'Walas 1A2', 7, 0, 2002, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(47, 135, 'Guru /Walas IXB', 9, 0, 2002, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(48, 122, 'Guru Bid. Studi', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(49, 129, 'Guru Al''qur''an', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(50, 60, 'Tata Usaha', 7, 0, 2003, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(51, 158, 'Walas 1 Cordova E', 8, 0, 2002, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(52, 65, 'Walas 1B1', 7, 0, 2005, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(53, 159, 'Walas 3 Mekkah', 8, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(54, 155, 'Walas 1 Cordova B', 8, 0, 1993, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(55, 64, 'Office Boy', 7, 0, 2000, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(56, 190, 'Walas 5 Cordova B', 8, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(57, 137, 'Guru IPS', 9, 0, 2006, 4, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(58, 63, 'Guru Al''qur''an', 7, 0, 2005, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(59, 160, 'Wakabid. Sarpra', 8, 0, 2003, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(60, 62, 'Guru/Walas 3B2', 7, 0, 2007, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(61, 111, 'Guru Al''qur''an', 7, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(62, 123, 'Pustakawan', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(63, 11, 'Wakasek.Bid. Kurikulum', 6, 0, 1994, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(64, 39, 'Guru Kelas', 6, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(65, 104, 'Walas 3 C2', 7, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(66, 12, 'Wakasek Bid. Sarpra', 6, 0, 2001, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(67, 97, 'Guru Save 2', 7, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(68, 105, 'Guru Al''qur''an', 7, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(69, 130, 'Guru Al''qur''an', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(70, 182, 'Walas 2 Cordova C', 8, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(71, 26, 'Guru Kelas', 6, 0, 2010, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(72, 161, 'Walas 1 Cordova C', 8, 0, 2004, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(73, 197, 'Walas 3 Cordova A', 8, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(74, 49, 'Kepala Sekolah', 7, 0, 2005, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(75, 61, 'Wakabid. Kurikulum', 7, 0, 2004, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(76, 199, 'Walas 1 Cordova A', 8, 0, 2015, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(77, 37, 'Guru Shadow', 6, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(78, 85, 'Walas 2 B1', 7, 0, 2007, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(79, 33, 'Guru Kelas', 6, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(80, 13, 'Guru Kelas', 0, 0, 1993, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(81, 70, 'Walas 5B', 7, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(82, 116, 'Walas 2C2', 7, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(83, 146, 'Tata Usaha', 8, 0, 2014, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(84, 124, 'Guru Bid. Studi', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(85, 131, 'Kepala Sekolah', 9, 0, 1990, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(86, 186, 'Tata Usaha', 8, 0, 2013, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(87, 106, 'Walas 3A2', 7, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(88, 100, 'Office Woman', 7, 0, 2010, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(89, 154, 'Kepala Sekolah', 8, 0, 2002, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(90, 181, 'Walas 4 Cordova C', 8, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(91, 127, 'Guru Al''qur''an', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(92, 95, 'Guru Al''qur''an', 7, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(93, 87, 'Guru Al''qur''an', 7, 0, 2003, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(94, 206, 'Guru Al''qur''an', 8, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(95, 14, 'Guru Kelas', 6, 0, 2006, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(96, 152, 'Guru Bid. Studi', 9, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(97, 88, 'Guru Al''qur''an', 7, 0, 2009, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(98, 69, 'Walas 2A2', 7, 0, 1996, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(99, 48, 'Office Woman', 6, 0, 2005, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(100, 162, 'Walas 6 Madinah', 8, 0, 1995, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(101, 25, 'Guru Kelas', 6, 0, 2010, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(102, 188, 'Walas 1 Cordova D', 8, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(103, 163, 'Walas 4 Mekkah', 8, 0, 1989, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(104, 38, 'Guru Save', 6, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(105, 68, 'Walas 2C1', 7, 0, 2005, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(106, 165, 'Walas 3 Cordova E', 8, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(107, 132, 'Wakasek. Bid. Kesiswaan', 9, 0, 2003, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(108, 196, 'Guru Bid. Studi', 8, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(109, 107, 'Walas 2D1', 7, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(110, 67, 'Guru PAI', 7, 0, 2005, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(111, 41, 'Guru Kelas', 6, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(112, 167, 'Walas 4 Cordova D', 9, 0, 2004, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(113, 15, 'Guru Kelas', 6, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(114, 66, 'Guru/Walas 6B', 7, 0, 2002, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(115, 96, 'Guru Al''qur''an', 7, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(116, 50, 'Walas 6A', 7, 0, 1998, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(117, 103, 'Walas 2D2', 7, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(118, 168, 'Walas 4 Cordova E', 8, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(119, 71, 'Walas 6C', 7, 0, 1998, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(120, 147, 'Guru Al''qur''an', 9, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(121, 145, 'Guru Bid. Studi', 9, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(122, 203, 'Guru Bid. Studi', 8, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(123, 90, 'Bendahara', 7, 0, 2008, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(124, 84, 'Walas 3B1', 7, 0, 2007, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(125, 114, 'Walas 1C1', 7, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(126, 16, 'Guru Kelas', 6, 0, 2003, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(127, 195, 'Office Boy', 8, 0, 2015, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(128, 22, 'Guru', 6, 0, 2008, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(129, 45, 'Guru`', 6, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(130, 94, 'Guru Al''qur''an', 7, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(131, 202, 'Guru Bid. Studi', 8, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(132, 149, 'Guru Piket', 9, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(133, 153, 'Guru Bid. Studi', 9, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(134, 178, 'Walas 2 Cordova F', 8, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(135, 72, 'Office Boy', 7, 0, 1996, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(136, 36, 'Guru Kelas', 6, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(137, 119, 'Office Boy', 7, 0, 2015, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(138, 73, 'Guru PAI', 7, 0, 1996, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(139, 176, 'Office Woman', 8, 0, 2008, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(140, 138, 'Guru Penjas', 9, 0, 2004, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(141, 109, 'Guru Al''qur''an', 7, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(142, 183, 'Walas 1 Cordova F', 8, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(143, 170, 'Walas 5 Madinah', 8, 0, 1997, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(144, 115, 'Walas 1B2', 7, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(145, 74, 'Guru', 7, 0, 1998, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(146, 200, 'Guru Al''qur''an', 8, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(147, 177, 'Walas 6 Mekkah', 8, 0, 2011, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(148, 46, 'Guru Shadow', 6, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(149, 34, 'Guru Kelas', 6, 0, 2000, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(150, 17, 'Wakabid. Kesiswaan', 6, 0, 2005, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(151, 120, 'Guru Bid. Studi', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(152, 192, 'Walas 4 Cordova B', 8, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(153, 142, 'Guru Mtk', 9, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(154, 91, 'Koord. Sentra', 7, 0, 2008, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(155, 101, 'Walas 1 D1', 7, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(156, 125, 'Guru Bid. Studi', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(157, 139, 'Guru /Walas IXA', 9, 0, 2004, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(158, 184, 'Walas 2 Cordova A', 8, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(159, 76, 'Walas 4C', 7, 0, 2002, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(160, 75, 'Walas 6D', 7, 0, 2002, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(161, 110, 'Guru Al''qur''an', 7, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(162, 171, 'Office Boy', 8, 0, 2004, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(163, 172, 'Walas 3 Cordova B', 8, 0, 2003, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(164, 141, 'Guru/Walas VIIIA', 9, 0, 1991, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(165, 144, 'Guru/Walas VIIIB', 9, 0, 2007, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(166, 18, 'Guru Kelas', 6, 0, 2000, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(167, 77, 'Walas 5C', 7, 0, 1996, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(168, 89, 'Koordinator Qur''an', 7, 0, 2009, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(169, 78, 'Wakabid. Sarpra', 7, 0, 2004, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(170, 79, 'Walas 1A1', 7, 0, 2004, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(171, 98, 'Walas 2B2', 7, 0, 2010, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(172, 80, 'KA.TU', 7, 0, 1996, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(173, 169, 'Guru Bhs Inggris', 8, 0, 2005, 4, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(174, 81, 'Walas 3C1', 7, 0, 2005, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(175, 28, 'Guru Kelas', 6, 0, 2011, 4, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(176, 151, 'Guru Bid. Studi', 9, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(177, 118, 'Guru Save', 7, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(178, 92, 'Walas 1C2', 7, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(179, 32, 'Guru Kelas', 6, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(180, 173, 'Guru Piket', 8, 0, 1999, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(181, 112, 'Guru Al''qur''an', 7, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(182, 189, 'Walas 2 Cordova E', 8, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(183, 99, 'Guru Al''qur''an', 7, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(184, 207, 'Guru Bid. Studi', 8, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(185, 19, 'Guru Kelas', 6, 0, 2006, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(186, 20, 'Guru Save', 6, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(187, 27, 'Guru Kelas', 6, 0, 2010, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(188, 29, 'TU', 6, 0, 2012, 4, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(189, 21, 'Guru Kelas', 6, 0, 2004, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(190, 82, 'Guru OlahRaga', 7, 0, 1990, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(191, 174, 'Wakabid. Kurikulum', 8, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(192, 83, 'Walas 1D2', 7, 0, 2006, 1, '0000-00-00', '0000-00-00', 0, 0, 0, '', 0),
(193, 175, 'Walas 4 Cordova A', 8, 0, 2001, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(194, 128, 'Guru Save', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(195, 179, 'Koordinator TU', 8, 0, 2012, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(196, 180, 'Guru Al''qur''an', 8, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(197, 126, 'Guru Save', 7, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(198, 23, 'Guru Kelas', 6, 0, 2008, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(199, 143, 'Wakasek.Bid. Sarpra', 9, 0, 2006, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(200, 193, 'Walas 2 Cordova B', 8, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(201, 0, '', 0, 0, 0, 0, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(202, 225, 'Resepsionis', 12, 0, 2009, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(203, 211, 'Ka. Div. Adm & SDM', 3, 0, 2004, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(204, 230, 'Staf Fas & Linkungan', 12, 0, 2015, 2, '0000-00-00', '0000-00-00', 0, 0, 0, '', 0),
(205, 213, 'Ka. Div Keuangan', 12, 0, 1996, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(206, 214, 'Accounting', 12, 0, 2001, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(207, 226, 'Security', 12, 0, 2009, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(208, 229, 'Direktur LEKU', 5, 0, 2013, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(209, 221, 'Office Boy', 12, 0, 1986, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(210, 234, 'Staf Leku', 5, 0, 2015, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(211, 231, 'Adm. Piutang', 12, 0, 2015, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(212, 235, 'Staf Leku', 5, 0, 2016, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(213, 232, 'Adm. Piutang', 12, 0, 2015, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(214, 216, 'Security', 12, 0, 2000, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(215, 217, 'Kasir', 12, 0, 2002, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(216, 228, 'Office Boy', 12, 0, 2011, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(217, 227, 'Security', 12, 0, 2009, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(218, 209, 'Direktur LPP', 4, 0, 2003, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(219, 218, 'Office Boy', 12, 0, 2003, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(220, 224, 'Kasir', 12, 0, 2009, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(221, 236, 'Admin Web', 12, 0, 2016, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(222, 208, 'Direktur LPIA', 2, 0, 0, 5, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(223, 215, 'STAF LPIA', 2, 0, 0, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(224, 237, 'Security', 12, 0, 2016, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(225, 210, 'Kepala LDSM', 3, 0, 0, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(226, 219, 'Staf Umum', 12, 0, 1998, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(227, 220, 'Security', 12, 0, 2004, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(228, 212, 'Staf Umum', 12, 0, 2007, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(229, 233, 'Staf Leku', 5, 0, 2015, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(230, 222, 'Juru Bayar', 12, 0, 2004, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(231, 223, 'Security', 12, 0, 1997, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(232, 238, 'Kebersihan', 12, 0, 2016, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(233, 259, 'Tata Usaha', 11, 0, 2015, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(234, 245, 'Wali Kelas XI', 11, 0, 2013, 4, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(235, 250, 'Wali Kelas X2', 11, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(236, 240, 'Guru TIK', 11, 0, 2004, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(237, 239, 'Kepala Sekolah', 11, 0, 1999, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(238, 247, 'Guru SBK', 11, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(239, 254, 'Bendahara', 11, 0, 2014, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(240, 256, 'Koordinator Qur''an', 11, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(241, 249, 'Wakasek. Bid. Kesiswaan', 11, 0, 2010, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(242, 255, 'Guru TIK', 11, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(243, 246, 'Pembina Osis', 11, 0, 2012, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(244, 263, 'Guru Al''qur''an', 11, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(245, 262, 'Kebersihan', 11, 0, 2005, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(246, 241, 'Ka. Perpustakaan', 11, 0, 2003, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(247, 244, 'Guru OlahRaga', 11, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(248, 242, 'Guru PAI', 11, 0, 2001, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(249, 251, 'Guru Bid. Studi', 11, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(250, 266, 'Guru Bid. Studi', 11, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(251, 257, 'Wali Kelas XI', 11, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(252, 252, 'Wali Kelas X3', 11, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(253, 260, 'Office Woman', 11, 0, 2015, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(254, 264, 'Guru Bid. Studi', 11, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(255, 253, 'Wakasek.Bid. Kurikulum', 11, 0, 2014, 4, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(256, 267, 'Guru Al''qur''an', 11, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(257, 265, 'Guru Bid. Studi', 11, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(258, 243, 'Wk. Bid. SarPra', 11, 0, 2001, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(259, 261, 'Walas XII Ipa2', 11, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(260, 248, 'Office Boy', 11, 0, 2013, 4, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(261, 258, 'Guru Al''qur''an', 11, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(262, 291, 'Guru/Walas VII C', 10, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(263, 302, 'Office Boy', 10, 0, 2016, 1, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(264, 297, 'Guru/Pembina Pramuka', 10, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(265, 269, 'Guru/Walas VIII A', 10, 0, 2002, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(266, 288, 'Guru/Walas VIIID', 10, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(267, 303, 'Guru Bid. Studi', 10, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(268, 282, 'Tata Usaha', 10, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(269, 287, 'Guru/Koord. Mentoring', 10, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(270, 298, 'Guru', 10, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(271, 293, 'Guru', 10, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(272, 283, 'Guru/Walas VIID', 10, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(273, 301, 'Guru Al''qur''an', 10, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(274, 270, 'Wakabid. Sarpra', 10, 0, 2004, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(275, 290, 'Guru', 10, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(276, 268, 'Kepala Sekolah', 10, 0, 2002, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(277, 275, 'WakasekBid. Kesiswaan', 10, 0, 2011, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(278, 271, 'Guru/Koord. Liftskill', 10, 0, 2002, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(279, 278, 'Tata Usaha', 10, 0, 2011, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(280, 274, 'Wakabid. Kurikulum', 10, 0, 2011, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 1),
(281, 294, 'Guru', 10, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 1),
(282, 295, 'Guru/Koord. Lab', 10, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(283, 279, 'Guru/Walas IXB', 10, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(284, 289, 'Guru', 10, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(285, 277, 'Kebersihan', 10, 0, 2011, 4, '0000-00-00', '0000-00-00', 2, 0, 0, '', 0),
(286, 292, 'Guru/Walas VIIIB', 10, 0, 2013, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(287, 276, 'Guru/ Bendahara', 10, 0, 2008, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(288, 272, 'Guru', 10, 0, 2005, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(289, 280, 'Guru/Koord. Qur''an', 10, 0, 2010, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(290, 281, 'Koord.Qur''an LPIA', 10, 0, 2010, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(291, 300, 'Guru Al-Qur''an', 10, 0, 2016, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(292, 299, 'Guru', 10, 0, 2015, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(293, 286, 'Guru/Walas VIIIC', 10, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(294, 284, 'Pustakawan &Guru Piket', 10, 0, 2010, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(295, 296, 'Guru', 10, 0, 2014, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(296, 273, 'Guru/Koord. Bimbel', 10, 0, 2006, 1, '0000-00-00', '0000-00-00', 1, 0, 0, '', 0),
(297, 304, 'Office Boy', 10, 0, 2016, 2, '0000-00-00', '0000-00-00', 2, 0, 0, '', 1),
(298, 285, 'Guru/Walas VIIB', 10, 0, 2012, 2, '0000-00-00', '0000-00-00', 1, 0, 0, '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_saudara_kandung`
--

CREATE TABLE IF NOT EXISTS `as_saudara_kandung` (
  `id_saudara_kandung` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL,
  `nama_saudara_kandung` varchar(100) NOT NULL,
  `jenis_kelamin` tinyint(2) NOT NULL COMMENT '1:Laki-Laki,0:Perempuan',
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `as_user`
--

CREATE TABLE IF NOT EXISTS `as_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1:Kepegawaian,2:IT,3:Keuangan,4:Yayasan,',
  `date_register` datetime NOT NULL,
  `fullname` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `as_user`
--

INSERT INTO `as_user` (`id_user`, `username`, `password`, `email`, `role`, `date_register`, `fullname`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 2, '2016-08-09 10:39:32', ''),
(2, 'rikyachmad', '827ccb0eea8a706c4c34a16891f84e7b', 'ralifer@ralifer.com', 1, '2016-08-09 09:51:36', ''),
(5, 'rikkobambang', '7815696ecbf1c96e6894b779456d330e', 'ralifer@ralifer.com', 1, '2016-08-09 10:10:18', ''),
(6, 'zarkasih', 'a8f5f167f44f4964e6c998dee827110c', 'zarkasih@gmail.com', 1, '2016-08-25 02:19:27', 'zarkasih'),
(7, 'dayat', 'a8f5f167f44f4964e6c998dee827110c', 'dayat@gmail.com', 2, '2016-08-25 04:55:02', 'dayat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_data_keluarga`
--
ALTER TABLE `as_data_keluarga`
  ADD PRIMARY KEY (`id_data_keluarga`);

--
-- Indexes for table `as_keg_sosial`
--
ALTER TABLE `as_keg_sosial`
  ADD PRIMARY KEY (`id_keg_sosial`);

--
-- Indexes for table `as_keluarga`
--
ALTER TABLE `as_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `as_nonformal`
--
ALTER TABLE `as_nonformal`
  ADD PRIMARY KEY (`id_nonformal`);

--
-- Indexes for table `as_pegawai`
--
ALTER TABLE `as_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `as_pendidikan`
--
ALTER TABLE `as_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `as_pendidikan_formal`
--
ALTER TABLE `as_pendidikan_formal`
  ADD PRIMARY KEY (`id_pendidikan_normal`);

--
-- Indexes for table `as_riwayat_jabatan`
--
ALTER TABLE `as_riwayat_jabatan`
  ADD PRIMARY KEY (`id_riwayat_jabatan`);

--
-- Indexes for table `as_riwayat_jabatan_diluar`
--
ALTER TABLE `as_riwayat_jabatan_diluar`
  ADD PRIMARY KEY (`id_riwayat_jabatan_diluar`);

--
-- Indexes for table `as_riwayat_kerja`
--
ALTER TABLE `as_riwayat_kerja`
  ADD PRIMARY KEY (`id_riwayat_kerja`);

--
-- Indexes for table `as_saudara_kandung`
--
ALTER TABLE `as_saudara_kandung`
  ADD PRIMARY KEY (`id_saudara_kandung`);

--
-- Indexes for table `as_user`
--
ALTER TABLE `as_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `as_data_keluarga`
--
ALTER TABLE `as_data_keluarga`
  MODIFY `id_data_keluarga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `as_keg_sosial`
--
ALTER TABLE `as_keg_sosial`
  MODIFY `id_keg_sosial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `as_keluarga`
--
ALTER TABLE `as_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=298;
--
-- AUTO_INCREMENT for table `as_nonformal`
--
ALTER TABLE `as_nonformal`
  MODIFY `id_nonformal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `as_pegawai`
--
ALTER TABLE `as_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=305;
--
-- AUTO_INCREMENT for table `as_pendidikan`
--
ALTER TABLE `as_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=298;
--
-- AUTO_INCREMENT for table `as_pendidikan_formal`
--
ALTER TABLE `as_pendidikan_formal`
  MODIFY `id_pendidikan_normal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `as_riwayat_jabatan`
--
ALTER TABLE `as_riwayat_jabatan`
  MODIFY `id_riwayat_jabatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `as_riwayat_jabatan_diluar`
--
ALTER TABLE `as_riwayat_jabatan_diluar`
  MODIFY `id_riwayat_jabatan_diluar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `as_riwayat_kerja`
--
ALTER TABLE `as_riwayat_kerja`
  MODIFY `id_riwayat_kerja` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=299;
--
-- AUTO_INCREMENT for table `as_saudara_kandung`
--
ALTER TABLE `as_saudara_kandung`
  MODIFY `id_saudara_kandung` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `as_user`
--
ALTER TABLE `as_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
