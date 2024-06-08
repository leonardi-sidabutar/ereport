-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 08 Jun 2024 pada 08.53
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
-- Struktur dari tabel `tbl_auth`
--

DROP TABLE IF EXISTS `tbl_auth`;
CREATE TABLE IF NOT EXISTS `tbl_auth` (
  `id_auth` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id_auth`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_auth`
--

INSERT INTO `tbl_auth` (`id_auth`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$hPHQTFkqWilGce/Dz3aaO.LnKSHlaL.ztdr4OmqrKxQfveoiyTMzm', 'Admin'),
(2, 'user', '$2y$10$gpklc0uo7BQkBunB54nxaO2QiugxfWGCRn8RYyHh.w2SrW0fnc2pq', 'User');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id`, `pengerjaan`, `tanggal`, `q_progress`, `id_pekerjaan`) VALUES
(1, 'pengerjaan 1', '2024-06-12', 20, 2024),
(2, 'Pemasangan Pipa PE', '2024-06-18', 50, 2024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pekerjaan`
--

DROP TABLE IF EXISTS `tbl_pekerjaan`;
CREATE TABLE IF NOT EXISTS `tbl_pekerjaan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task` varchar(100) NOT NULL,
  `q_plan` double NOT NULL,
  `id_area` int NOT NULL,
  `date_start` varchar(20) NOT NULL,
  `date_end` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id`, `task`, `q_plan`, `id_area`, `date_start`, `date_end`) VALUES
(3, 'Pengerjaan Galian', 130, 2, '2024-06-15', '2024-06-12'),
(2, 'Penggalian', 120, 1, '2024-07-05', '2024-06-12'),
(4, 'Pekerjaan test', 230, 2, '2024-06-07', '2024-06-05'),
(5, 'Pekerjaan Penjajaran PIPA PE', 804, 4, '2024-06-06', '2024-06-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
