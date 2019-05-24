-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2019 pada 18.33
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `mahasiswa` varchar(100) NOT NULL,
  `predikat` varchar(50) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `mahasiswa`, `predikat`, `tingkat`, `tahun`, `kegiatan`) VALUES
(19, 'Dwi Setiawan', 'Juara 2', 'Nasional', 2019, 'Internet of Things Development Competition Technocorner UGM 2019'),
(20, 'Danang Wijaya', 'Juara 2', 'Nasional', 2019, 'Internet of Things Development Competition Technocorner UGM 2019'),
(21, 'Dwi Setiawan', 'Juara 2', 'Nasional', 2019, 'Joints App Inovation UGM 2019'),
(22, 'M Dzulfiqar Amin', 'Juara 2', 'Internasional', 2019, 'Joints App Inovation UGM 2019'),
(23, 'Danang Wijaya', 'Juara 2', 'Nasional', 2019, 'Joints App Inovation UGM 2019'),
(24, 'Setiawan Dwi', 'Juara 1', 'Provinsi', 2017, 'Cipta Kreasi Software Dikpora DIY 2017'),
(25, 'Wijaya Danang', 'Juara 2', 'Provinsi', 2017, 'Cipta Kreasi Software Dikpora DIY 2017'),
(26, 'Dwi Setiawan', 'Finalis', 'Nasional', 2018, 'Internet of Things Competition Elination 2018 UNY'),
(27, 'Setiawan Dwi', 'Favorite', 'Nasional', 2019, 'Software Development Competition UNITY #7 2019 UNY'),
(28, 'Rifky Ari Yunanto', 'Juara 1', 'Internasional', 2016, 'Debat Bahasa Jerman University of Malaya 2016'),
(29, 'Rifky Ari Yunanto', 'Juara 1', 'Internasional', 2017, 'Debat Bahasa Jerman University of Malaya 2017'),
(30, 'Ardian Martawijaya', 'Juara 1', 'Internasional', 2018, 'English Competition University of Singapore'),
(31, 'Yosia Ibnu', 'Juara 2', 'Internasional', 2019, 'English Competition University of Singapore'),
(32, 'Sarung Wadimor', 'Juara 1', 'Internasional', 2019, 'Sarung Kualitas Internasional'),
(34, 'Ahsan Himawan', 'Finalis', 'Provinsi', 2018, 'Lomba Cerdas Cermat Agama');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
