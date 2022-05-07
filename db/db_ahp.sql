-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2022 pada 12.57
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ahp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kuisioner_kasi`
--

CREATE TABLE `data_kuisioner_kasi` (
  `id_kuis_kasi` varchar(10) NOT NULL,
  `id_kriteria_kasi` varchar(10) NOT NULL,
  `kuis_kasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kuisioner_kasi`
--

INSERT INTO `data_kuisioner_kasi` (`id_kuis_kasi`, `id_kriteria_kasi`, `kuis_kasi`) VALUES
('KS001', 'KKS001', 'sadhusaydy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kuisioner_op`
--

CREATE TABLE `data_kuisioner_op` (
  `id_kuis_op` varchar(10) NOT NULL,
  `id_kriteria_op` varchar(10) NOT NULL,
  `kuis_op` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kuisioner_op`
--

INSERT INTO `data_kuisioner_op` (`id_kuis_op`, `id_kriteria_op`, `kuis_op`) VALUES
('KP001', 'KOP001', 'dadada'),
('KP002', 'KOP001', 'lilili'),
('KP003', 'KOP001', 'nananna'),
('KP004', 'KOP001', 'y'),
('KP005', 'KOP001', 'dadada'),
('KP006', 'KOP001', 'yayys'),
('KP007', 'KOP001', 'ghgkjgk'),
('KP008', 'KOP001', 'fjgfyfyy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_banding`
--

CREATE TABLE `nilai_banding` (
  `id_nilai` varchar(10) NOT NULL,
  `nama_nilai` varchar(50) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_banding`
--

INSERT INTO `nilai_banding` (`id_nilai`, `nama_nilai`, `nilai`) VALUES
('NL001', 'Sama Penting dengan', 1),
('NL002', 'Mendekati sedikit lebih penting dari', 2),
('NL003', 'Sedikit lebih penting dari', 3),
('NL004', 'Mendekati lebih penting dari', 4),
('NL005', 'Lebih penting dari ', 5),
('NL006', 'Nilai diantara penilaian yang sama', 6),
('NL007', 'Sangat penting dari', 7),
('NL008', 'Nilai diantara penilaian yang sama', 8),
('NL009', 'Ekstrim penting dari', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_analisa_op`
--

CREATE TABLE `tb_analisa_op` (
  `id_anop` int(11) NOT NULL,
  `productivity` double DEFAULT NULL,
  `kerjasamadankom` double DEFAULT NULL,
  `pelaksana5r` double DEFAULT NULL,
  `dokumentasi` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_analisa_op`
--

INSERT INTO `tb_analisa_op` (`id_anop`, `productivity`, `kerjasamadankom`, `pelaksana5r`, `dokumentasi`) VALUES
(1, 1, 4, 5, 5),
(2, 0.25, 1, 2, 2),
(3, 0.5, 0.5, 1, 0.33333333333333),
(4, 0.5, 0.5, 3, 1),
(5, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_divisi` varchar(10) NOT NULL,
  `nama_divisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_divisi`
--

INSERT INTO `tb_divisi` (`id_divisi`, `nama_divisi`) VALUES
('DV001', 'Welding'),
('DV002', 'Blower'),
('DV003', 'Aoutomotive');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
('JB001', 'HRD'),
('JB002', 'Manajer'),
('JB003', 'Kepala Divisi'),
('JB004', 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `id_divisi` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nik`, `id_jabatan`, `id_divisi`, `nama_karyawan`) VALUES
(2, '13333', 'JB004', 'DV003', 'Wilda Minisiti'),
(3, '111110', 'JB004', 'DV002', 'Kusuma Wijaya'),
(12, '15050', 'JB003', 'DV001', 'Usman Adi'),
(13, '15050', 'JB004', 'DV001', 'Indra Kesma'),
(14, '12345', 'JB003', 'DV002', 'Yuni Indrawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria_kasi`
--

CREATE TABLE `tb_kriteria_kasi` (
  `id_kriteria_kasi` varchar(10) NOT NULL,
  `nama_kriteria_kasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kriteria_kasi`
--

INSERT INTO `tb_kriteria_kasi` (`id_kriteria_kasi`, `nama_kriteria_kasi`) VALUES
('KKS001', 'Leadership');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria_operator`
--

CREATE TABLE `tb_kriteria_operator` (
  `id_kriteria_op` varchar(10) NOT NULL,
  `nama_kriteria_op` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kriteria_operator`
--

INSERT INTO `tb_kriteria_operator` (`id_kriteria_op`, `nama_kriteria_op`) VALUES
('KOP001', 'Productivity'),
('KOP002', 'Komunikasi dan Kerjasama'),
('KOP003', 'Pelaksanaan 5R'),
('KOP004', 'Dokumentasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subrange_kasi`
--

CREATE TABLE `tb_subrange_kasi` (
  `id_subrange_kasi` int(11) NOT NULL,
  `id_kriteria_kasi` varchar(10) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `nama_subrange_kasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subrange_op`
--

CREATE TABLE `tb_subrange_op` (
  `id_subrange_op` varchar(10) NOT NULL,
  `id_kriteria_op` varchar(10) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `nama_subrange_op` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` enum('HRD','Manajer','Kepala Divisi','') NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `status`) VALUES
(1, 'Bahrul', 'bahrul', 'kasi', 'Kepala Divisi', ''),
(2, 'Atim', 'atim', 'manajer', 'Manajer', ''),
(3, 'Rendi', 'rendi', 'hrd', 'HRD', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kuisioner_kasi`
--
ALTER TABLE `data_kuisioner_kasi`
  ADD PRIMARY KEY (`id_kuis_kasi`),
  ADD KEY `id_kriteria_kasi` (`id_kriteria_kasi`);

--
-- Indeks untuk tabel `data_kuisioner_op`
--
ALTER TABLE `data_kuisioner_op`
  ADD PRIMARY KEY (`id_kuis_op`),
  ADD KEY `id_kriteria_op` (`id_kriteria_op`);

--
-- Indeks untuk tabel `nilai_banding`
--
ALTER TABLE `nilai_banding`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tb_analisa_op`
--
ALTER TABLE `tb_analisa_op`
  ADD PRIMARY KEY (`id_anop`);

--
-- Indeks untuk tabel `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_jabatan` (`id_jabatan`,`id_divisi`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indeks untuk tabel `tb_kriteria_kasi`
--
ALTER TABLE `tb_kriteria_kasi`
  ADD PRIMARY KEY (`id_kriteria_kasi`);

--
-- Indeks untuk tabel `tb_kriteria_operator`
--
ALTER TABLE `tb_kriteria_operator`
  ADD PRIMARY KEY (`id_kriteria_op`);

--
-- Indeks untuk tabel `tb_subrange_kasi`
--
ALTER TABLE `tb_subrange_kasi`
  ADD PRIMARY KEY (`id_subrange_kasi`),
  ADD KEY `id_kriteria_kasi` (`id_kriteria_kasi`,`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `tb_subrange_op`
--
ALTER TABLE `tb_subrange_op`
  ADD PRIMARY KEY (`id_subrange_op`),
  ADD KEY `id_kriteria_op` (`id_kriteria_op`,`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_kuisioner_kasi`
--
ALTER TABLE `data_kuisioner_kasi`
  ADD CONSTRAINT `data_kuisioner_kasi_ibfk_1` FOREIGN KEY (`id_kriteria_kasi`) REFERENCES `tb_kriteria_kasi` (`id_kriteria_kasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_kuisioner_op`
--
ALTER TABLE `data_kuisioner_op`
  ADD CONSTRAINT `data_kuisioner_op_ibfk_1` FOREIGN KEY (`id_kriteria_op`) REFERENCES `tb_kriteria_operator` (`id_kriteria_op`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD CONSTRAINT `tb_karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_karyawan_ibfk_2` FOREIGN KEY (`id_divisi`) REFERENCES `tb_divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_subrange_kasi`
--
ALTER TABLE `tb_subrange_kasi`
  ADD CONSTRAINT `tb_subrange_kasi_ibfk_1` FOREIGN KEY (`id_kriteria_kasi`) REFERENCES `tb_kriteria_kasi` (`id_kriteria_kasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_subrange_kasi_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_subrange_op`
--
ALTER TABLE `tb_subrange_op`
  ADD CONSTRAINT `tb_subrange_op_ibfk_1` FOREIGN KEY (`id_kriteria_op`) REFERENCES `tb_kriteria_operator` (`id_kriteria_op`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_subrange_op_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
