-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jul 2021 pada 10.22
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `Id` int(11) NOT NULL,
  `Kode` varchar(50) NOT NULL,
  `Menu` varchar(100) NOT NULL,
  `Reputasi` varchar(100) NOT NULL,
  `Harga` varchar(30) NOT NULL,
  `Jarak` varchar(50) NOT NULL,
  `Ranking` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`Id`, `Kode`, `Menu`, `Reputasi`, `Harga`, `Jarak`, `Ranking`) VALUES
(1, 'A1', '3', '11', '3', '4', ''),
(2, 'A2', '2', '12', '2', '2.5', ''),
(3, 'A3', '2', '8', '1', '1', ''),
(4, 'A4', '6', '5', '1', '1', ''),
(5, 'A5', '7', '4', '3', '3', ''),
(6, 'A6', '4', '3', '1', '3', ''),
(7, 'A7', '5', '5', '1', '3', ''),
(8, 'A8', '3', '6', '2', '1', ''),
(9, 'A9', '2', '8', '1', '4', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datarumahmakan`
--

CREATE TABLE `datarumahmakan` (
  `Id` int(11) NOT NULL,
  `IdRm` varchar(10) NOT NULL,
  `Menu` varchar(100) NOT NULL,
  `Harga` varchar(30) NOT NULL,
  `Jarak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datarumahmakan`
--

INSERT INTO `datarumahmakan` (`Id`, `IdRm`, `Menu`, `Harga`, `Jarak`) VALUES
(5, '3', 'Paket A:', '20000', ''),
(6, '3', 'Paket B:', '26000', ''),
(7, '3', 'Paket Komplit', '32000', ''),
(8, '5', 'Nasi Pecel', '20000', ''),
(9, '5', 'Paket B:', '25000', ''),
(10, '6', 'Paket A:', '12000', ''),
(11, '6', 'Paket B:', '13000', ''),
(12, '7', 'Paket A:', '7000', ''),
(13, '7', 'Paket B:', '7000', ''),
(14, '7', 'Paket B:', '7000', ''),
(15, '7', 'Paket C:', '10000', ''),
(16, '7', 'Paket D:', '12000', ''),
(17, '7', 'Paket E:', '10000', ''),
(18, '8', 'Paket A:', '27000', ''),
(19, '8', 'Paket B:', '25000', ''),
(20, '8', 'Paket C:', '40000', ''),
(21, '8', 'Paket D:', '25000', ''),
(22, '8', 'Paket E', '35000', ''),
(23, '8', 'Paket F:', '30000', ''),
(24, '8', 'Paket G:', '30000', ''),
(25, '9', 'Paket A:', '13000', ''),
(26, '9', 'Paket B:', '13000', ''),
(27, '9', 'Paket B:', '13000', ''),
(28, '9', 'Paket D:', '13000', ''),
(29, '10', 'Paket A:', '10000', ''),
(30, '10', 'Paket B:', '10000', ''),
(31, '10', 'Paket C:', '12000', ''),
(32, '10', 'Paket D:', '12000', ''),
(33, '10', 'Paket E:', '10000', ''),
(34, '11', 'Paket A:', '20000', ''),
(35, '11', 'Paket B:', '25000', ''),
(36, '11', 'Paket C:', '30000', ''),
(37, '12', 'Paket A:', '20000', ''),
(38, '12', 'Paket B:', '20000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `Id` int(11) NOT NULL,
  `Kriteria` varchar(50) NOT NULL,
  `Bobot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`Id`, `Kriteria`, `Bobot`) VALUES
(1, 'Menu', '20'),
(2, 'Reputasi', '30'),
(3, 'Harga', '30'),
(4, 'Jarak', '19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `normalisasi`
--

CREATE TABLE `normalisasi` (
  `Id` int(11) NOT NULL,
  `Kode` varchar(50) NOT NULL,
  `Menu` varchar(100) NOT NULL,
  `Reputasi` varchar(100) NOT NULL,
  `Harga` varchar(30) NOT NULL,
  `Jarak` varchar(50) NOT NULL,
  `Ranking` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `normalisasi`
--

INSERT INTO `normalisasi` (`Id`, `Kode`, `Menu`, `Reputasi`, `Harga`, `Jarak`, `Ranking`) VALUES
(1, 'A1', '0.4', '1.4', '0.3', '0.3', '65'),
(2, 'A2', '0.3', '1.5', '0.5', '0.4', '74'),
(3, 'A3', '0.3', '1', '1', '1', '85'),
(4, 'A4', '0.9', '0.6', '1', '1', '85'),
(5, 'A5', '1', '0.5', '0.3', '0.3', '50'),
(6, 'A6', '0.6', '0.4', '1', '0.3', '60'),
(7, 'A7', '0.7', '0.6', '1', '0.3', '68'),
(8, 'A8', '0.4', '0.8', '0.5', '1', '66'),
(9, 'A9', '0.3', '1', '1', '0.3', '72');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranking`
--

CREATE TABLE `ranking` (
  `Id` int(11) NOT NULL,
  `Kode` varchar(50) NOT NULL,
  `Ranking` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ranking`
--

INSERT INTO `ranking` (`Id`, `Kode`, `Ranking`) VALUES
(11, 'A1', ''),
(12, 'A2', ''),
(13, 'A3', ''),
(14, 'A4', ''),
(15, 'A5', ''),
(16, 'A6', ''),
(17, 'A7', ''),
(18, 'A8', ''),
(19, 'A9', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumahmakan`
--

CREATE TABLE `rumahmakan` (
  `Id` int(11) NOT NULL,
  `Kode` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Telepon` varchar(14) NOT NULL,
  `Reputasi` varchar(50) NOT NULL,
  `Jarak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumahmakan`
--

INSERT INTO `rumahmakan` (`Id`, `Kode`, `Nama`, `Alamat`, `Telepon`, `Reputasi`, `Jarak`) VALUES
(3, 'A1', 'Kang Yana', 'Karang Tengah', '08', '2010', '4'),
(5, 'A2', 'Cie Yeni', 'Jl. Siliwangi', '08', '2009', '2.5'),
(6, 'A3', 'RM Mekar Alam', 'Jl.Perintis Kemerdekaan', '08xxx', '2013', '1'),
(7, 'A4', 'RM Unin', 'Jl. Perintis Kemerdekaan', '08', '2016', '1'),
(8, 'A5', 'Tanjakan Kuring', 'Nagrak', '08', '2017', '3'),
(9, 'A6', 'RM Mata Air', 'Cibadak', '08', '2018', '3'),
(10, 'A7', 'RM Cibadak Raya', 'Cibadak', '08', '2016', '3'),
(11, 'A8', 'RM Ibu Elis', 'Karang Tengah', '08', '2015', '1'),
(12, 'A9', 'RM Ibu Gendut', 'Cibadak', '08', '2013', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`IdUser`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `datarumahmakan`
--
ALTER TABLE `datarumahmakan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rumahmakan`
--
ALTER TABLE `rumahmakan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `datarumahmakan`
--
ALTER TABLE `datarumahmakan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `rumahmakan`
--
ALTER TABLE `rumahmakan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
