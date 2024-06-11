-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 11 Jun 2024 pada 15.23
-- Versi server: 8.2.0
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ereport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_area`
--

DROP TABLE IF EXISTS `tbl_area`;
CREATE TABLE IF NOT EXISTS `tbl_area` (
  `id_area` int NOT NULL AUTO_INCREMENT,
  `area` varchar(150) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `tbl_area`
--

INSERT INTO `tbl_area` (`id_area`, `area`) VALUES
(7, 'Medan Sunggal'),
(5, 'Medan Amplas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_auth`
--

DROP TABLE IF EXISTS `tbl_auth`;
CREATE TABLE IF NOT EXISTS `tbl_auth` (
  `id_auth` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id_auth`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `tbl_auth`
--

INSERT INTO `tbl_auth` (`id_auth`, `name`, `email`, `jabatan`, `username`, `password`, `role`) VALUES
(1, 'Reza', 'reza@gmail.com', 'Admin', 'admin', '$2y$10$hPHQTFkqWilGce/Dz3aaO.LnKSHlaL.ztdr4OmqrKxQfveoiyTMzm', 'Admin'),
(2, 'Shabrina', 'shabrina@gmail.com', 'Karyawan', 'user', '$2y$10$gpklc0uo7BQkBunB54nxaO2QiugxfWGCRn8RYyHh.w2SrW0fnc2pq', 'User'),
(3, 'admin', 'asdf@gmail.com', 'asdf', 'asdf', '$2y$10$0BWX8pYC7JDmKFoQH15TTOmZbDstLJWayEGZZQxHSQ2fo1mL3aVQa', 'User'),
(4, 'Rico', 'rico@gmail.com', 'Staff', 'rico22', '$2y$10$0U2nMB/t6gvby5mQBQaAQe1f0yb9wGOVNM2gCtyvDPJK81pwZhvsi', 'User'),
(5, 'Leonardi', 'leo@gmail.com', 'Karyawan', 'leo', '$2y$10$N56SXim9Ug20da3aHcJZ0uhqTrQQ0g9usGehI4ZJKkvRqqMLF/CFu', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laporan`
--

DROP TABLE IF EXISTS `tbl_laporan`;
CREATE TABLE IF NOT EXISTS `tbl_laporan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pengerjaan` varchar(150) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `q_progress` double NOT NULL,
  `id_pekerjaan` int NOT NULL,
  `diameter` double NOT NULL,
  `tebal` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id`, `pengerjaan`, `tanggal`, `q_progress`, `id_pekerjaan`, `diameter`, `tebal`) VALUES
(7, 'Pengerjaan Pipa', '2024-06-11', 10, 7, 125, 120),
(8, 'Penjajaran PIPA', '2024-06-11', 100, 9, 125, 0),
(6, 'asdf', '2024-06-13', 123, 7, 123, 213),
(9, 'Bongkaran Lap Beton', '', 30, 7, 125, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pekerjaan`
--

DROP TABLE IF EXISTS `tbl_pekerjaan`;
CREATE TABLE IF NOT EXISTS `tbl_pekerjaan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task` varchar(100) NOT NULL,
  `sub_task` varchar(150) NOT NULL,
  `q_plan` double NOT NULL,
  `id_area` int NOT NULL,
  `date_start` varchar(20) NOT NULL,
  `date_end` varchar(20) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `volume` double NOT NULL,
  `harga_satuan` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id`, `task`, `sub_task`, `q_plan`, `id_area`, `date_start`, `date_end`, `satuan`, `volume`, `harga_satuan`) VALUES
(7, 'Pekerjaan Bongkaran Lap Beton Bertulang Pipa PE', 'PEKERJAAN BONGKARAN DAN GALIAN', 190.8, 7, '2024-06-10', '2024-06-17', 'M\'', 100, 122131),
(8, 'Penggalian', 'PEKERJAAN KHUSUS', 100, 5, '2024-05-29', '2024-06-18', 'Ls', 20, 123),
(9, 'Pekerjaan Penjajaran PIPA Pe', 'PEKERJAAN PEMASANGAN', 804, 7, '2024-06-11', '2024-06-18', 'M\'', 1, 1165);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
