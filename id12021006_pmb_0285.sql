-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Mar 2020 pada 09.19
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12021006_pmb_0285`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `No_Pendaftaran_0285` int(11) NOT NULL,
  `Nama0285` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Program_Studi` varchar(30) DEFAULT NULL,
  `Jenis_Kelamin` varchar(100) DEFAULT NULL,
  `Tempat_Lahir` varchar(100) DEFAULT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` varchar(10) DEFAULT NULL,
  `Alamat_Lengkap` varchar(100) DEFAULT NULL,
  `No_Telepon` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`No_Pendaftaran_0285`, `Nama0285`, `Email`, `Program_Studi`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `Alamat_Lengkap`, `No_Telepon`) VALUES
(3, 'Arifff', 'Arifmahardika@students.amikom.ac.id', 'Manajemen', '', 'Klaten', '2016-09-14', 'Islam', 'Desa', 854125455),
(26, 'rasyid', 'rasyid.0285@students.amikom.ac', 'Manajemen', 'Perempuanfddsf', 'Kebumen', '2019-06-13', 'Islam', 'DesaSjljlACdCxxxxxxxxxx', 2147483647),
(28, 'Deska', 'Deska@gmail.com', 'D3', 'Perempuan', 'Magelang', '2020-01-07', 'Islam', 'Magelangg', 897532468);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'rasyidr', 'rasyidr', '12345'),
(2, 'rasyid', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`No_Pendaftaran_0285`),
  ADD KEY `No_Pendaftaran_0291` (`No_Pendaftaran_0285`,`Nama0285`,`Email`,`Program_Studi`,`Jenis_Kelamin`,`Tempat_Lahir`,`Agama`,`Alamat_Lengkap`,`No_Telepon`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `No_Pendaftaran_0285` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
