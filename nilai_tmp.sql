-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2019 pada 09.40
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_tmp`
--

CREATE TABLE `nilai_tmp` (
  `id` int(11) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `soal` longtext,
  `waktu_habis` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_tmp`
--

INSERT INTO `nilai_tmp` (`id`, `id_ujian`, `id_pengguna`, `waktu_mulai`, `soal`, `waktu_habis`) VALUES
(30, 35, 4, '2019-12-04 15:34:11', '[{\"id_soal\":\"43\",\"id_ujian\":\"35\",\"soal\":\"<p>jepret<\\/p>\",\"jawaban_soal_a\":\"<p>goyang<\\/p>\",\"jawaban_soal_b\":\"<p>ndak ulfa<\\/p>\",\"jawaban_soal_c\":\"<p>cari di<\\/p>\",\"jawaban_soal_d\":\"<p>macam macam<\\/p>\",\"jawaban_soal_e\":\"<p>apa apa<\\/p>\",\"kunci_jawaban\":\"<p>ndak ulfa<\\/p>\",\"tgl_buat_soal\":\"2019-11-30 15:14:18\"},{\"id_soal\":\"41\",\"id_ujian\":\"35\",\"soal\":\"<p>adasad<\\/p>\",\"jawaban_soal_a\":\"<p>jihad<\\/p>\",\"jawaban_soal_b\":\"<p>bagus<\\/p>\",\"jawaban_soal_c\":\"<p>ulfa<\\/p>\",\"jawaban_soal_d\":\"<p>trio<\\/p>\",\"jawaban_soal_e\":\"<p>ismi<\\/p>\",\"kunci_jawaban\":\"<p>bagus<\\/p>\",\"tgl_buat_soal\":\"2019-11-30 15:11:50\"},{\"id_soal\":\"42\",\"id_ujian\":\"35\",\"soal\":\"<p>nampak<\\/p>\",\"jawaban_soal_a\":\"<p>foto<\\/p>\",\"jawaban_soal_b\":\"<p>kalian<\\/p>\",\"jawaban_soal_c\":\"<p>konflik<\\/p>\",\"jawaban_soal_d\":\"<p>kek gitu<\\/p>\",\"jawaban_soal_e\":\"<p>menikmati<\\/p>\",\"kunci_jawaban\":\"<p>menikmati<\\/p>\",\"tgl_buat_soal\":\"2019-11-30 15:13:29\"}]', '2019-12-04 15:49:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nilai_tmp`
--
ALTER TABLE `nilai_tmp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilai_tmp`
--
ALTER TABLE `nilai_tmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
