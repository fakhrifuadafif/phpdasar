-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2023 pada 05.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(111) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(34, 'Fakhri Fuad Afif', '17180008', 'fakhrifuad@gmail.com', 'tekhnik Informatika', 'pp.jpeg'),
(35, 'Huswatun Haerani', '17180001', 'Huswatunhaerani@gmail.co.id', 'Teknik informatika', 'haerani.jpg'),
(37, 'Muhammad Fardi', '17180007', 'Fardi@gmail.com', 'Teknik informatika', 'fardi.jpg'),
(51, 'indah khairunnisa ahmad hutasuhut', '17180010', 'indah@gmail.com', 'teknik informatika', '63ccad8690ef0.jpg'),
(52, 'Ahmad Khairul', '17180006', 'arul@gmail.co.id', 'teknik informatika', '63ccadbe7e154.jpg'),
(53, 'Sulastri Meilita Lahinta', '17180009', 'meihe@gmail.com', 'Teknik informatika', '63ccae2d2489f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'fakhri', '$2y$10$WLRtG7pN9XOYqsSig.Ta.u9s97li77rx12HlKA77i01hl3k4z/yMO'),
(2, 'fuad', '$2y$10$B1ThM1/qy7TdSapKSVGaxuztNIIlDw6rxuosXYO1z2vsAlhhLYxCm'),
(3, 'afif', '$2y$10$M2B5L2U6hr8NRAgspAFKBeAX3WKEa18.v2frsua3sJPAVcB8Kc6Pi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
