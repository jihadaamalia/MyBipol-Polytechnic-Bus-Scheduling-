-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Des 2016 pada 03.45
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mybipol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `no_jadwal` varchar(5) NOT NULL,
  `no_bis` char(3) NOT NULL,
  `tiba` time DEFAULT NULL,
  `nama_halte` varchar(25) NOT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`no_jadwal`, `no_bis`, `tiba`, `nama_halte`, `username`) VALUES
('01A01', '01A', '02:54:59', 'GSG', 'andisupratna'),
('01A02', '01A', '14:57:00', 'VOKASI A', 'andisupratna'),
('01A03', '01A', '14:59:00', 'VOKASI B', 'andisupratna'),
('01A04', '01A', '15:01:00', 'PNJ B', 'andisupratna'),
('01A05', '01A', '15:03:00', 'MIPA B', 'andisupratna'),
('01A06', '01A', '15:05:00', 'FKM B', 'andisupratna'),
('01A07', '01A', '15:07:00', 'RIK B', 'andisupratna'),
('01A08', '01A', '15:09:00', 'POCIN B', 'andisupratna'),
('01A09', '01A', '15:11:00', 'MUI B', 'andisupratna'),
('01A10', '01A', '15:13:00', 'HUKUM B', 'andisupratna'),
('01A11', '01A', '15:15:00', 'STUI B', 'andisupratna'),
('01A12', '01A', '15:17:00', 'GERBATAMA B', 'andisupratna'),
('01A13', '01A', '15:19:00', 'ASRAMA', 'andisupratna'),
('01A14', '01A', '15:21:00', 'GERBATAMA A', 'andisupratna'),
('01A15', '01A', '15:23:00', 'STUI A', 'andisupratna'),
('01A16', '01A', '15:25:00', 'HUKUM A', 'andisupratna'),
('01A17', '01A', '15:27:00', 'POCIN A', 'andisupratna'),
('01A18', '01A', '15:29:00', 'RIK A', 'andisupratna'),
('01A19', '01A', '15:31:00', 'FKM A', 'andisupratna'),
('01A20', '01A', '15:33:00', 'MIPA A', 'andisupratna'),
('01A21', '01A', '15:35:00', 'PNJ A', 'andisupratna'),
('02A01', '02A', '08:25:03', 'GSG', 'budianto'),
('02A02', '02A', '08:27:00', 'VOKASI A', 'budianto'),
('02A03', '02A', '08:29:00', 'VOKASI B', 'budianto'),
('02A04', '02A', '08:31:00', 'PNJ B', 'budianto'),
('02A05', '02A', '08:33:00', 'MIPA B', 'budianto'),
('02A06', '02A', '08:35:00', 'FKM B', 'budianto'),
('02A07', '02A', '08:37:00', 'RIK B', 'budianto'),
('02A08', '02A', '08:39:00', 'POCIN B', 'budianto'),
('02A09', '02A', '08:41:00', 'MUI B', 'budianto'),
('02A10', '02A', '08:43:00', 'HUKUM B', 'budianto'),
('02A11', '02A', '08:45:00', 'STUI B', 'budianto'),
('02A12', '02A', '08:47:00', 'GERBATAMA B', 'budianto'),
('02A13', '02A', '08:49:00', 'ASRAMA', 'budianto'),
('02A14', '02A', '08:51:00', 'GERBATAMA A', 'budianto'),
('02A15', '02A', '08:53:00', 'STUI A', 'budianto'),
('02A16', '02A', '08:55:00', 'HUKUM A', 'budianto'),
('02A17', '02A', '08:57:00', 'POCIN A', 'budianto'),
('02A18', '02A', '08:59:00', 'RIK A', 'budianto'),
('02A19', '02A', '09:01:00', 'FKM A', 'budianto'),
('02A20', '02A', '09:03:00', 'MIPA A', 'budianto'),
('02A21', '02A', '09:05:00', 'PNJ A', 'budianto'),
('02B01', '02B', '09:20:00', 'GSG', 'budianto'),
('02B02', '02B', '09:22:00', 'VOKASI A', 'budianto'),
('02B03', '02B', '09:24:00', 'VOKASI B', 'budianto'),
('02B04', '02B', '09:26:00', 'PNJ B', 'budianto'),
('02B05', '02B', '09:28:00', 'MIPA B', 'budianto'),
('02B06', '02B', '09:30:00', 'FKM B', 'budianto'),
('02B07', '02B', '09:32:00', 'RIK B', 'budianto'),
('02B08', '02B', '09:34:00', 'POCIN B', 'budianto'),
('02B09', '02B', '09:36:00', 'MUI B', 'budianto'),
('02B10', '02B', '09:38:00', 'HUKUM B', 'budianto'),
('02B11', '02B', '09:40:00', 'STUI B', 'budianto'),
('02B12', '02B', '09:42:00', 'GERBATAMA B', 'budianto'),
('02B13', '02B', '09:44:00', 'ASRAMA', 'budianto'),
('02B14', '02B', '09:46:00', 'GERBATAMA A', 'budianto'),
('02B15', '02B', '09:48:00', 'STUI A', 'budianto'),
('02B16', '02B', '09:50:00', 'HUKUM A', 'budianto'),
('02B17', '02B', '09:52:00', 'POCIN A', 'budianto'),
('02B18', '02B', '09:54:00', 'RIK A', 'budianto'),
('02B19', '02B', '09:56:00', 'FKM A', 'budianto'),
('02B20', '02B', '09:58:00', 'MIPA A', 'budianto'),
('02B21', '02B', '10:00:00', 'PNJ A', 'budianto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalfix`
--

CREATE TABLE IF NOT EXISTS `jadwalfix` (
  `jadwal_fix` varchar(8) NOT NULL,
  `no_bis` varchar(3) NOT NULL,
  `tiba` time NOT NULL,
  `nama_halte` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwalfix`
--

INSERT INTO `jadwalfix` (`jadwal_fix`, `no_bis`, `tiba`, `nama_halte`, `username`) VALUES
('01A01', '01A', '07:20:00', 'GSG', 'andisupratna'),
('01A02', '01A', '07:22:00', 'VOKASI A', 'andisupratna'),
('01A03', '01A', '07:24:00', 'VOKASI B', 'andisupratna'),
('01A04', '01A', '07:26:00', 'PNJ B', 'andisupratna'),
('01A05', '01A', '07:28:00', 'MIPA B', 'andisupratna'),
('01A06', '01A', '07:30:00', 'FKM B', 'andisupratna'),
('01A07', '01A', '07:32:00', 'RIK B', 'andisupratna'),
('01A08', '01A', '07:34:00', 'POCIN B', 'andisupratna'),
('01A09', '01A', '07:36:00', 'MUI B', 'andisupratna'),
('01A10', '01A', '07:38:00', 'HUKUM B', 'andisupratna'),
('01A11', '01A', '07:40:00', 'STUI B', 'andisupratna'),
('01A12', '01A', '07:42:00', 'GERBATAMA B', 'andisupratna'),
('01A13', '01A', '07:44:00', 'ASRAMA', 'andisupratna'),
('01A14', '01A', '07:46:00', 'GERBATAMA A', 'andisupratna'),
('01A15', '01A', '07:48:00', 'STUI A', 'andisupratna'),
('01A16', '01A', '07:50:00', 'HUKUM A', 'andisupratna'),
('01A17', '01A', '07:52:00', 'POCIN A', 'andisupratna'),
('01A18', '01A', '07:54:00', 'RIK A', 'andisupratna'),
('01A19', '01A', '07:56:00', 'FKM A', 'andisupratna'),
('01A20', '01A', '07:58:00', 'MIPA A', 'andisupratna'),
('01A21', '01A', '08:00:00', 'PNJ A', 'andisupratna'),
('02A01', '02A', '08:20:00', 'GSG', 'budianto'),
('02A02', '02A', '08:22:00', 'VOKASI A', 'budianto'),
('02A03', '02A', '08:24:00', 'VOKASI B', 'budianto'),
('02A04', '02A', '08:26:00', 'PNJ B', 'budianto'),
('02A05', '02A', '08:28:00', 'MIPA B', 'budianto'),
('02A06', '02A', '08:30:00', 'FKM B', 'budianto'),
('02A07', '02A', '08:32:00', 'RIK B', 'budianto'),
('02A08', '02A', '08:34:00', 'POCIN B', 'budianto'),
('02A09', '02A', '08:36:00', 'MUI B', 'budianto'),
('02A10', '02A', '08:38:00', 'HUKUM B', 'budianto'),
('02A11', '02A', '08:40:00', 'STUI B', 'budianto'),
('02A12', '02A', '08:42:00', 'GERBATAMA B', 'budianto'),
('02A13', '02A', '08:44:00', 'ASRAMA', 'budianto'),
('02A14', '02A', '08:46:00', 'GERBATAMA A', 'budianto'),
('02A15', '02A', '08:48:00', 'STUI A', 'budianto'),
('02A16', '02A', '08:50:00', 'HUKUM A', 'budianto'),
('02A17', '02A', '08:52:00', 'POCIN A', 'budianto'),
('02A18', '02A', '08:54:00', 'RIK A', 'budianto'),
('02A19', '02A', '08:56:00', 'FKM A', 'budianto'),
('02A20', '02A', '08:58:00', 'MIPA A', 'budianto'),
('02A21', '02A', '09:00:00', 'PNJ A', 'budianto'),
('02B01', '02B', '09:20:00', 'GSG', 'budianto'),
('02B02', '02B', '09:22:00', 'VOKASI A', 'budianto'),
('02B03', '02B', '09:24:00', 'VOKASI B', 'budianto'),
('02B04', '02B', '09:26:00', 'PNJ B', 'budianto'),
('02B05', '02B', '09:28:00', 'MIPA B', 'budianto'),
('02B06', '02B', '09:30:00', 'FKM B', 'budianto'),
('02B07', '02B', '09:32:00', 'RIK B', 'budianto'),
('02B08', '02B', '09:34:00', 'POCIN B', 'budianto'),
('02B09', '02B', '09:36:00', 'MUI B', 'budianto'),
('02B10', '02B', '09:38:00', 'HUKUM B', 'budianto'),
('02B11', '02B', '09:40:00', 'STUI B', 'budianto'),
('02B12', '02B', '09:42:00', 'GERBATAMA B', 'budianto'),
('02B13', '02B', '09:44:00', 'ASRAMA', 'budianto'),
('02B14', '02B', '09:46:00', 'GERBATAMA A', 'budianto'),
('02B15', '02B', '09:48:00', 'STUI A', 'budianto'),
('02B16', '02B', '09:50:00', 'HUKUM A', 'budianto'),
('02B17', '02B', '09:52:00', 'POCIN A', 'budianto'),
('02B18', '02B', '09:54:00', 'RIK A', 'budianto'),
('02B19', '02B', '09:56:00', 'FKM A', 'budianto'),
('02B20', '02B', '09:58:00', 'MIPA A', 'budianto'),
('02B21', '02B', '10:00:00', 'PNJ A', 'budianto'),
('09A01', '09A', '09:00:00', 'GSG', ''),
('09A02', '09A', '09:02:00', 'VOKASI A', ''),
('09A03', '09A', '09:04:00', 'VOKASI B', ''),
('09A04', '09A', '09:05:00', 'PNJ B', ''),
('09A05', '09A', '09:06:00', 'MIPA B', ''),
('09A06', '09A', '09:07:00', 'FKM B', ''),
('09A07', '09A', '09:08:00', 'RIK B', ''),
('09A08', '09A', '09:09:00', 'POCIN B', ''),
('09A09', '09A', '09:10:00', 'MUI B', ''),
('09A10', '09A', '09:13:00', 'HUKUM B', ''),
('09A11', '09A', '09:14:00', 'STUI B', ''),
('09A12', '09A', '09:15:00', 'GERBATAMA B', ''),
('09A13', '09A', '09:16:00', 'ASRAMA', ''),
('09A14', '09A', '09:17:00', 'GERBATAMA A', ''),
('09A15', '09A', '09:18:00', 'STUI A', ''),
('09A16', '09A', '09:20:00', 'HUKUM A', ''),
('09A17', '09A', '09:21:00', 'POCIN A', ''),
('09A18', '09A', '09:22:00', 'RIK A', ''),
('09A19', '09A', '09:23:00', 'FKM A', ''),
('09A20', '09A', '09:24:00', 'MIPA A', ''),
('09A21', '09A', '09:25:00', 'PNJ A', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` char(18) NOT NULL DEFAULT '',
  `Nama` varchar(30) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `no_telp` char(15) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) DEFAULT NULL,
  `no_bis` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `Nama`, `tgl_lahir`, `jabatan`, `no_telp`, `alamat`, `username`, `password`, `no_bis`) VALUES
('12345678', 'andi', '2016-06-14', 'Supir', '23466', 'Jl. Salak Timur no 3', 'andi', 'asdf1234', '09'),
('197103122003121001', 'Andi Supratna', '1971-10-31', 'Supir', '081293723930202', 'Jl. Ahmad Dahlan no 9', 'andisupratna', 'asdf1234', '01'),
('19691018200008001', 'Budianto', '1969-10-18', 'Supir', '085690123859', 'Jalan Salak Timur 9 Jakarta', 'budianto', 'asdf1234', '02'),
('197012122004101001', 'Didi Sudidi', '1970-12-12', 'Administrator', '08192738291', 'Jalan Indah Kencana 2 Depok', 'didisudidi', 'asdf1234', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`no_jadwal`), ADD KEY `username` (`username`), ADD FULLTEXT KEY `no_jadwal` (`no_jadwal`);

--
-- Indexes for table `jadwalfix`
--
ALTER TABLE `jadwalfix`
 ADD PRIMARY KEY (`jadwal_fix`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`username`,`nip`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`username`) REFERENCES `pegawai` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
