-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2026 pada 04.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_design`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `produk` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `ukuran_s` int(11) NOT NULL,
  `ukuran_m` int(11) NOT NULL,
  `ukuran_l` int(11) NOT NULL,
  `ukuran_xl` int(11) NOT NULL,
  `ukuran_xxl` int(11) NOT NULL,
  `ukuran_xxxl` int(11) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id`, `produk`, `jumlah`, `nama_pemesan`, `ukuran_s`, `ukuran_m`, `ukuran_l`, `ukuran_xl`, `ukuran_xxl`, `ukuran_xxxl`, `nomor_telepon`) VALUES
(1, 'Jersey', 6, '0', 1, 1, 1, 1, 1, 1, ''),
(2, 'Jersey', 6, '0', 1, 1, 1, 1, 1, 1, ''),
(3, 'Jersey', 6, '0', 1, 1, 1, 1, 1, 1, ''),
(4, 'PDL', 6, '0', 1, 1, 1, 1, 1, 1, ''),
(5, 'PDL', 6, '0', 1, 1, 1, 1, 1, 1, ''),
(6, 'Workshirt', 9, '0', 1, 1, 1, 1, 1, 1, ''),
(7, 'Workshirt', 9, '0', 1, 1, 1, 1, 1, 1, ''),
(8, 'Workshirt', 9, '0', 1, 1, 1, 1, 1, 1, ''),
(9, 'PDL', 6, '0', 1, 1, 1, 1, 1, 1, ''),
(10, 'PDL', 6, '0', 1, 1, 1, 1, 1, 1, '1111111111111'),
(11, 'PDL', 6, '0', 1, 1, 1, 1, 1, 1, '1111111111111'),
(12, 'PDL', 6, 'rilus', 1, 1, 1, 1, 1, 1, '1111111111111'),
(13, 'Jersey', 6, 'rilus', 1, 1, 1, 1, 1, 1, '1111111111111'),
(14, 'Jersey', 6, 'rilus', 1, 1, 1, 1, 1, 1, '1111111111111'),
(15, 'PDL', 6, 'rilus', 1, 1, 1, 1, 1, 1, '1111111111111'),
(16, 'Workshirt', 8, 'rilus', 2, 2, 1, 1, 1, 1, '1111111111111'),
(17, 'Workshirt', 8, 'rilus', 2, 2, 1, 1, 1, 1, '1111111111111'),
(18, 'Workshirt', 8, 'rilus', 2, 2, 1, 1, 1, 1, '1111111111111'),
(19, 'Jersey', 6, 'rilus', 1, 1, 1, 1, 1, 1, '1111111111111');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
