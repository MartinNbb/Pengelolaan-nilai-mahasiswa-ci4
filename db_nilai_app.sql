-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2023 pada 14.21
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nilai_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `nilai_id` int(11) NOT NULL,
  `npm` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`nilai_id`, `npm`, `nama`, `matakuliah`, `dosen`, `nilai`, `type`) VALUES
(5, 21753021, 'Martin Gedeon Nababan', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'uts'),
(6, 21753007, 'Asya Ayati', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'uts'),
(8, 21753028, 'Putri Kartika Yuandari', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'uts'),
(9, 21753006, 'Antika Susmita', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'uts'),
(10, 21753035, 'Weny Agustin', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'uts'),
(11, 21753021, 'Martin Gedeon Nababan', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '87', 'uas'),
(12, 21753006, 'Antika Susmita', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '81', 'uas'),
(13, 21753007, 'Asya Ayati', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '82', 'uas'),
(14, 21753028, 'Putri Kartika Yuandari', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '82', 'uas'),
(15, 21753035, 'Weny Agustin', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '82', 'uas'),
(16, 21753021, 'Martin Gedeon Nababan', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'nilai_akhir'),
(17, 21753035, 'Weny Agustin', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'nilai_akhir'),
(18, 21753006, 'Antika Susmita', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'nilai_akhir'),
(19, 21753007, 'Asya Ayati', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'nilai_akhir'),
(20, 21753028, 'Putri Kartika Yuandari', 'Pemrograman Web Framework', 'Dwirgo Sahlinal, S.T, M.Eng', '80', 'nilai_akhir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nilai_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
