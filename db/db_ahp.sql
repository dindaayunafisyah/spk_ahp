-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2022 pada 17.46
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
  `dokumentasi` double DEFAULT NULL,
  `paham_laksana_k3` double DEFAULT NULL,
  `paham_sop` double DEFAULT NULL,
  `paham_tools` double DEFAULT NULL,
  `hadir` double DEFAULT NULL,
  `disiplin` double DEFAULT NULL,
  `inisiatif` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_analisa_op`
--

INSERT INTO `tb_analisa_op` (`id_anop`, `productivity`, `kerjasamadankom`, `pelaksana5r`, `dokumentasi`, `paham_laksana_k3`, `paham_sop`, `paham_tools`, `hadir`, `disiplin`, `inisiatif`) VALUES
(1, 1, 4, 5, 5, 7, 7, 7, 3, 5, 5),
(2, 0.25, 1, 2, 2, 3, 3, 3, 0.33333333333333, 2, 2),
(3, 0.2, 0.5, 1, 0.33333333333333, 2, 3, 3, 0.25, 0.5, 0.5),
(4, 0.2, 0.5, 3, 1, 3, 3, 3, 0.25, 0.5, 0.33333333333333),
(5, 0.14285714285714, 0.33333333333333, 0.5, 0.33333333333333, 1, 0.5, 0.5, 0.2, 0.25, 0.25),
(6, 0.14285714285714, 0.33333333333333, 0.33333333333333, 0.33333333333333, 2, 1, 2, 0.2, 0.25, 0.25),
(7, 0.14285714285714, 0.33333333333333, 0.33333333333333, 0.33333333333333, 2, 0.5, 1, 0.2, 0.25, 0.25),
(8, 0.33333333333333, 3, 4, 4, 5, 5, 5, 1, 3, 3),
(9, 0.2, 0.5, 2, 2, 4, 4, 4, 0.33333333333333, 1, 2),
(10, 0.2, 0.5, 2, 3, 4, 4, 4, 0.33333333333333, 0.5, 1);

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
('KOP004', 'Dokumentasi'),
('KOP005', 'Pemahaman dan Pelaksanaan K3'),
('KOP006', 'Pemahaman SOP'),
('KOP007', 'Pemahaman Tools'),
('KOP008', 'Kehadiran'),
('KOP009', 'Kedisiplinan'),
('KOP01', 'Inisiatif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matriks_op`
--

CREATE TABLE `tb_matriks_op` (
  `id_matop` int(11) NOT NULL,
  `productivity` double DEFAULT NULL,
  `kerjasamadankom` double DEFAULT NULL,
  `pelaksana5r` double DEFAULT NULL,
  `dokumentasi` double DEFAULT NULL,
  `paham_laksana_k3` double DEFAULT NULL,
  `paham_sop` double DEFAULT NULL,
  `paham_tools` double DEFAULT NULL,
  `hadir` double DEFAULT NULL,
  `disiplin` double DEFAULT NULL,
  `inisiatif` double DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `prioritas` double DEFAULT NULL,
  `eigen_value` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_matriks_op`
--

INSERT INTO `tb_matriks_op` (`id_matop`, `productivity`, `kerjasamadankom`, `pelaksana5r`, `dokumentasi`, `paham_laksana_k3`, `paham_sop`, `paham_tools`, `hadir`, `disiplin`, `inisiatif`, `jumlah`, `prioritas`, `eigen_value`) VALUES
(1, 0.35563082133785, 0.36363636363636, 0.24793388429752, 0.27272727272727, 0.21212121212121, 0.2258064516129, 0.21538461538462, 0.49180327868853, 0.37735849056604, 0.34285714285714, 3.1052595332294, 0.31052595332294, 0.8731694068438),
(2, 0.088907705334463, 0.090909090909091, 0.099173553719008, 0.10909090909091, 0.090909090909091, 0.096774193548387, 0.092307692307692, 0.054644808743169, 0.15094339622642, 0.13714285714286, 1.0108032979311, 0.10108032979311, 1.1118836277242),
(3, 0.07112616426757, 0.045454545454545, 0.049586776859504, 0.018181818181818, 0.060606060606061, 0.096774193548387, 0.092307692307692, 0.040983606557377, 0.037735849056604, 0.034285714285714, 0.54704242112527, 0.054704242112527, 1.103202215936),
(4, 0.07112616426757, 0.045454545454545, 0.14876033057851, 0.054545454545455, 0.090909090909091, 0.096774193548387, 0.092307692307692, 0.040983606557377, 0.037735849056604, 0.022857142857143, 0.70145407008238, 0.070145407008238, 1.2859991284844),
(5, 0.050804403048263, 0.03030303030303, 0.024793388429752, 0.018181818181818, 0.03030303030303, 0.016129032258065, 0.015384615384615, 0.032786885245902, 0.018867924528302, 0.017142857142857, 0.25469698482563, 0.025469698482563, 0.84050004992459),
(6, 0.050804403048263, 0.03030303030303, 0.016528925619835, 0.018181818181818, 0.060606060606061, 0.032258064516129, 0.061538461538462, 0.032786885245902, 0.018867924528302, 0.017142857142857, 0.33901843073066, 0.033901843073066, 1.050957135265),
(7, 0.050804403048263, 0.03030303030303, 0.016528925619835, 0.018181818181818, 0.060606060606061, 0.016129032258065, 0.030769230769231, 0.032786885245902, 0.018867924528302, 0.017142857142857, 0.29212016770336, 0.029212016770336, 0.94939054503593),
(8, 0.11854360711262, 0.27272727272727, 0.19834710743802, 0.21818181818182, 0.15151515151515, 0.16129032258065, 0.15384615384615, 0.16393442622951, 0.22641509433962, 0.20571428571429, 1.8705152396851, 0.18705152396851, 1.1410142962079),
(9, 0.07112616426757, 0.045454545454545, 0.099173553719008, 0.10909090909091, 0.12121212121212, 0.12903225806452, 0.12307692307692, 0.054644808743169, 0.075471698113208, 0.13714285714286, 0.96542583888483, 0.096542583888483, 1.2791892365224),
(10, 0.07112616426757, 0.045454545454545, 0.099173553719008, 0.16363636363636, 0.12121212121212, 0.12903225806452, 0.12307692307692, 0.054644808743169, 0.037735849056604, 0.068571428571429, 0.91366401580225, 0.091366401580225, 1.3324266897116);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_submatriks_dokumentasi`
--

CREATE TABLE `tb_submatriks_dokumentasi` (
  `id_submatrix_doc` int(11) NOT NULL,
  `sgt_lkp_sesuai` double DEFAULT NULL,
  `lkp` double DEFAULT NULL,
  `krg_lkp_tdk_sesuai` double DEFAULT NULL,
  `tidak_mampu` double DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `prioritas` double DEFAULT NULL,
  `eigen_value` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_submatriks_dokumentasi`
--

INSERT INTO `tb_submatriks_dokumentasi` (`id_submatrix_doc`, `sgt_lkp_sesuai`, `lkp`, `krg_lkp_tdk_sesuai`, `tidak_mampu`, `jumlah`, `prioritas`, `eigen_value`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_submatriks_komdanker`
--

CREATE TABLE `tb_submatriks_komdanker` (
  `id_submatrix_kdk` int(11) NOT NULL,
  `sangat_baik` double DEFAULT NULL,
  `baik` double DEFAULT NULL,
  `kurang` double DEFAULT NULL,
  `tidak_mampu` double DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `prioritas` double DEFAULT NULL,
  `eigen_value` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_submatriks_komdanker`
--

INSERT INTO `tb_submatriks_komdanker` (`id_submatrix_kdk`, `sangat_baik`, `baik`, `kurang`, `tidak_mampu`, `jumlah`, `prioritas`, `eigen_value`) VALUES
(1, 0.59659090909091, 0.66176470588235, 0.53571428571429, 0.4375, 2.2315699006876, 0.55789247517189, 0.93513405362145),
(2, 0.19886363636364, 0.22058823529412, 0.32142857142857, 0.3125, 1.0533804430863, 0.26334511077158, 1.1938311688312),
(3, 0.11931818181818, 0.073529411764705, 0.10714285714286, 0.1875, 0.48749045072574, 0.12187261268144, 1.1374777183601),
(4, 0.085227272727271, 0.044117647058824, 0.035714285714285, 0.0625, 0.22755920550038, 0.056889801375095, 0.91023682200152);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_submatriks_pelaksana5r`
--

CREATE TABLE `tb_submatriks_pelaksana5r` (
  `id_submatrix_p5r` int(11) NOT NULL,
  `melaksanakan` double DEFAULT NULL,
  `kurang_melaksanakan` double DEFAULT NULL,
  `tidak_melaksanakan` double DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `prioritas` double DEFAULT NULL,
  `eigen_value` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_submatriks_pelaksana5r`
--

INSERT INTO `tb_submatriks_pelaksana5r` (`id_submatrix_p5r`, `melaksanakan`, `kurang_melaksanakan`, `tidak_melaksanakan`, `jumlah`, `prioritas`, `eigen_value`) VALUES
(1, 0.75471698113208, 0.78947368421053, 0.66666666666667, 2.2108573320093, 0.73695244400309, 0.97646198830409),
(2, 0.15094339622642, 0.15789473684211, 0.25, 0.55883813306852, 0.18627937768951, 1.1797693920335),
(3, 0.094339622641509, 0.052631578947368, 0.083333333333333, 0.23030453492221, 0.076768178307404, 0.92121813968884);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_submatriks_productivity`
--

CREATE TABLE `tb_submatriks_productivity` (
  `id_submatrix_proc` int(11) NOT NULL,
  `pekerjaan_90` double DEFAULT NULL,
  `pekerjaan_80_90` double DEFAULT NULL,
  `pekerjaan_60_79` double DEFAULT NULL,
  `pekerjaan_59` double DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `prioritas` double DEFAULT NULL,
  `eigen_value` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_submatriks_productivity`
--

INSERT INTO `tb_submatriks_productivity` (`id_submatrix_proc`, `pekerjaan_90`, `pekerjaan_80_90`, `pekerjaan_60_79`, `pekerjaan_59`, `jumlah`, `prioritas`, `eigen_value`) VALUES
(1, 0.60810810810811, 0.67924528301887, 0.48387096774194, 0.47368421052632, 2.2449085693952, 0.56122714234881, 0.92290685630692),
(2, 0.2027027027027, 0.22641509433962, 0.38709677419355, 0.31578947368421, 1.1320040449201, 0.28300101123002, 1.2499211329326),
(3, 0.12162162162162, 0.056603773584906, 0.096774193548387, 0.15789473684211, 0.43289432559702, 0.10822358139925, 1.1183103411256),
(4, 0.067567567567567, 0.037735849056605, 0.032258064516129, 0.052631578947368, 0.19019306008767, 0.047548265021917, 0.90341703541643);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subrange_dokumentasi`
--

CREATE TABLE `tb_subrange_dokumentasi` (
  `id_subrange_doc` int(11) NOT NULL,
  `sgt_lkp_sesuai` double DEFAULT NULL,
  `lkp` double DEFAULT NULL,
  `krg_lkp_tdk_sesuai` double DEFAULT NULL,
  `tidak_mampu` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_subrange_dokumentasi`
--

INSERT INTO `tb_subrange_dokumentasi` (`id_subrange_doc`, `sgt_lkp_sesuai`, `lkp`, `krg_lkp_tdk_sesuai`, `tidak_mampu`) VALUES
(1, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subrange_komdanker`
--

CREATE TABLE `tb_subrange_komdanker` (
  `id_subrange_kdk` int(11) NOT NULL,
  `sangat_baik` double DEFAULT NULL,
  `baik` double DEFAULT NULL,
  `kurang` double DEFAULT NULL,
  `tidak_mampu` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_subrange_komdanker`
--

INSERT INTO `tb_subrange_komdanker` (`id_subrange_kdk`, `sangat_baik`, `baik`, `kurang`, `tidak_mampu`) VALUES
(1, 1, 3, 5, 7),
(2, 0.33333333333333, 1, 3, 5),
(3, 0.2, 0.33333333333333, 1, 3),
(4, 0.14285714285714, 0.2, 0.33333333333333, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subrange_pelaksana5r`
--

CREATE TABLE `tb_subrange_pelaksana5r` (
  `id_subrange_p5r` int(11) NOT NULL,
  `melaksanakan` double DEFAULT NULL,
  `kurang_melaksanakan` double DEFAULT NULL,
  `tidak_melaksanakan` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_subrange_pelaksana5r`
--

INSERT INTO `tb_subrange_pelaksana5r` (`id_subrange_p5r`, `melaksanakan`, `kurang_melaksanakan`, `tidak_melaksanakan`) VALUES
(1, 1, 5, 8),
(2, 0.2, 1, 3),
(3, 0.125, 0.33333333333333, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_subrange_productivity`
--

CREATE TABLE `tb_subrange_productivity` (
  `id_subrange_proc` int(11) NOT NULL,
  `pekerjaan_90` double DEFAULT NULL,
  `pekerjaan_80_90` double DEFAULT NULL,
  `pekerjaan_60_79` double DEFAULT NULL,
  `pekerjaan_59` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_subrange_productivity`
--

INSERT INTO `tb_subrange_productivity` (`id_subrange_proc`, `pekerjaan_90`, `pekerjaan_80_90`, `pekerjaan_60_79`, `pekerjaan_59`) VALUES
(1, 1, 3, 5, 9),
(2, 0.33333333333333, 1, 4, 6),
(3, 0.2, 0.25, 1, 3),
(4, 0.11111111111111, 0.16666666666667, 0.33333333333333, 1);

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
-- Indeks untuk tabel `tb_matriks_op`
--
ALTER TABLE `tb_matriks_op`
  ADD PRIMARY KEY (`id_matop`);

--
-- Indeks untuk tabel `tb_submatriks_dokumentasi`
--
ALTER TABLE `tb_submatriks_dokumentasi`
  ADD PRIMARY KEY (`id_submatrix_doc`);

--
-- Indeks untuk tabel `tb_submatriks_komdanker`
--
ALTER TABLE `tb_submatriks_komdanker`
  ADD PRIMARY KEY (`id_submatrix_kdk`);

--
-- Indeks untuk tabel `tb_submatriks_pelaksana5r`
--
ALTER TABLE `tb_submatriks_pelaksana5r`
  ADD PRIMARY KEY (`id_submatrix_p5r`);

--
-- Indeks untuk tabel `tb_submatriks_productivity`
--
ALTER TABLE `tb_submatriks_productivity`
  ADD PRIMARY KEY (`id_submatrix_proc`);

--
-- Indeks untuk tabel `tb_subrange_dokumentasi`
--
ALTER TABLE `tb_subrange_dokumentasi`
  ADD PRIMARY KEY (`id_subrange_doc`);

--
-- Indeks untuk tabel `tb_subrange_komdanker`
--
ALTER TABLE `tb_subrange_komdanker`
  ADD PRIMARY KEY (`id_subrange_kdk`);

--
-- Indeks untuk tabel `tb_subrange_pelaksana5r`
--
ALTER TABLE `tb_subrange_pelaksana5r`
  ADD PRIMARY KEY (`id_subrange_p5r`);

--
-- Indeks untuk tabel `tb_subrange_productivity`
--
ALTER TABLE `tb_subrange_productivity`
  ADD PRIMARY KEY (`id_subrange_proc`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
