-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2023 pada 18.13
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `idhasil` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `hasil` text NOT NULL,
  `na` double NOT NULL,
  `idsiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`idhasil`, `waktu`, `hasil`, `na`, `idsiswa`) VALUES
(1, '2023-01-10 10:43:26', 'Jenis atau Kategori Pelanggaran Ringan', 24.333333333333, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikator`
--

CREATE TABLE `indikator` (
  `idindikator` int(11) NOT NULL,
  `indikator` text NOT NULL,
  `nilai` int(11) NOT NULL,
  `idkriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `indikator`
--

INSERT INTO `indikator` (`idindikator`, `indikator`, `nilai`, `idkriteria`) VALUES
(1, 'Bertindak tidak sopan kepada sesama siswa', 2, 1),
(2, 'Mengganggu ketenangan KBM', 4, 1),
(3, 'Berambut panjang terberai (bagi siswa putri)', 10, 3),
(4, 'Merusak sarana/ prasarana sekolah, software maupun hardware', 15, 2),
(5, 'Membawa HP, MP3, MP4, Headset, atau sejenisnya (dapat diambil orang tua)', 10, 2),
(6, 'Mengambil hak orang lain, berjudi', 20, 1),
(7, 'Tidak memasukkan baju seragam', 1, 3),
(8, 'Berambut gondrong (bagi siswa putra)', 2, 3),
(9, 'Baju seragam tidak sesuai dengan ketentuan sekolah', 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `idkriteria` int(11) NOT NULL,
  `kriteria` varchar(36) NOT NULL,
  `kategori` enum('Benefit','Cost') NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`idkriteria`, `kriteria`, `kategori`, `bobot`) VALUES
(1, 'Prosedur Sikap', 'Benefit', 30),
(2, 'Prosedur Perilaku', 'Benefit', 20),
(3, 'Prosedur Kerajinan', 'Benefit', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `indikator` text NOT NULL,
  `nilai` int(11) NOT NULL,
  `idkriteria` int(11) NOT NULL,
  `idsiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`idnilai`, `indikator`, `nilai`, `idkriteria`, `idsiswa`) VALUES
(1, 'Mengganggu ketenangan KBM', 4, 1, 1),
(2, 'Membawa HP, MP3, MP4, Headset, atau sejenisnya (dapat diambil orang tua)', 10, 2, 1),
(3, 'Tidak memasukkan baju seragam', 1, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `nama` varchar(63) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`nama`, `username`, `password`) VALUES
('Nama Guru BK', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sanksi`
--

CREATE TABLE `sanksi` (
  `idsanksi` int(11) NOT NULL,
  `sanksi` text NOT NULL,
  `batas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sanksi`
--

INSERT INTO `sanksi` (`idsanksi`, `sanksi`, `batas`) VALUES
(1, 'Jenis atau Kategori Pelanggaran Ringan', 30),
(2, 'Jenis atau Kategori Pelanggaran Sedang', 60),
(3, 'Jenis atau Kategori Pelanggaran Berat', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `idsiswa` int(11) NOT NULL,
  `nis` char(5) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama` varchar(63) NOT NULL,
  `jekel` enum('Pria','Wanita') NOT NULL,
  `kelas` varchar(9) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` char(14) NOT NULL,
  `wali` varchar(63) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `nis`, `nisn`, `nama`, `jekel`, `kelas`, `alamat`, `telepon`, `wali`, `status`, `poin`) VALUES
(1, '12345', '', 'Contoh Nama Siswa', 'Pria', 'X TPL 2', 'Pekalongan Utara', '', '', '1', 24),
(2, '23456', '', 'Contoh Nama Siswa Lainnya', 'Wanita', 'X TPL 1', 'Pekalongan', '', '', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`idhasil`);

--
-- Indeks untuk tabel `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`idindikator`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`idkriteria`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `sanksi`
--
ALTER TABLE `sanksi`
  ADD PRIMARY KEY (`idsanksi`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `idhasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `indikator`
--
ALTER TABLE `indikator`
  MODIFY `idindikator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `idkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sanksi`
--
ALTER TABLE `sanksi`
  MODIFY `idsanksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
