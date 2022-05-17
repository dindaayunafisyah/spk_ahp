-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 04:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `data_kuisioner_kasi`
--

CREATE TABLE `data_kuisioner_kasi` (
  `id_kuis_kasi` varchar(10) NOT NULL,
  `id_kriteria_kasi` varchar(10) NOT NULL,
  `kuis_kasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kuisioner_kasi`
--

INSERT INTO `data_kuisioner_kasi` (`id_kuis_kasi`, `id_kriteria_kasi`, `kuis_kasi`) VALUES
('KS001', 'KKS001', 'Bagaimana Kemapuan karyawan dalam memimpin, mengkoordinasi, dan mengatur anggota dalam mecapai target dalam divisi\r\n'),
('KS002', 'KKS002', 'Berapa Prosentase Karyawan mampu menyelesaiakn pekerjaan dengan teliti sesuai waktu yang ditentukan \r\n'),
('KS003', 'KKS003', 'Bagiaman kemampuan karyawan dalam melakukan pemecahan masalah \r\n'),
('KS004', 'KKS004', 'Apakah karyawan mampu dalam merealisasikan SOP/SPK yang telah dibuat\r\n'),
('KS005', 'KKS005', 'Bagaimana kelengkapan dokumentasi yang dilakukan oleh karyawan \r\n'),
('KS006', 'KKS006', 'Bagaiamana kemampuan karyawan dalam melaksanakan kegaiatan 5R sehari hari\r\n'),
('KS007', 'KKS007', 'Bagaimana kemapuan karyawan dalam melaksanakan K3 dilingkungan kerja \r\n'),
('KS008', 'KKS008', 'Berapa Prosentase Kehadiran karyawan dalam bekerja\r\n'),
('KS009', 'KKS009', 'Bagaimana Kedisiplinan dan Ketaan karyawan terhadap tata tertib yang berlaku\r\n'),
('KS010', 'KSS010', 'Apakah karyawan memiliki inisiatif yang baik dalam pekerjaanya \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `data_kuisioner_op`
--

CREATE TABLE `data_kuisioner_op` (
  `id_kuis_op` varchar(10) NOT NULL,
  `id_kriteria_op` varchar(10) NOT NULL,
  `kuis_op` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kuisioner_op`
--

INSERT INTO `data_kuisioner_op` (`id_kuis_op`, `id_kriteria_op`, `kuis_op`) VALUES
('KP001', 'KOP001', 'Berapa Prosentase produktivitas karyawan dalam bekerja sesuai dengan target waktu yang diberikan'),
('KP002', 'KOP002', 'Bagaimana Kemampuan Karyawan dalam bekerjasama secara tim dan menjalin keharmonisan dengan karyawan lain \r\n'),
('KP003', 'KOP003', 'Bagaimana Kemampuan Pelaksanaan 5R yang dilakukan karyawan\r\n'),
('KP004', 'KOP004', 'Bagaimana kelengkapan Dokumentasi yang dilakukan oleh karyawan \r\n'),
('KP005', 'KOP005', 'Apakah Karyawan mampu memamhmi dan melaksanakan terkait K3\r\n'),
('KP006', 'KOP006', 'Apakah Karyawan mampu memahmi SOP/SPK yang telah dibuat \r\n'),
('KP007', 'KOP007', 'Bagaimana Kemapuan Karyawan dalam memahami Tools yang digunakan\r\n'),
('KP008', 'KOP008', 'Berapa Prosentase Kehadiran karyawan dalam bekerja \r\n'),
('KP009', 'KOP009', 'Bagaimana Tingkat kedisiplinan kerja dan Tata Tertib yang dimiliki oleh karyawan \r\n'),
('KP010', 'KOP01', 'Apakah Karyawan mampu dan memilki inisiatif yang baik dalam pekerjaanya \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_banding`
--

CREATE TABLE `nilai_banding` (
  `id_nilai` varchar(10) NOT NULL,
  `nama_nilai` varchar(50) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_banding`
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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_analisa_op`
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
-- Dumping data for table `tb_analisa_op`
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
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_divisi` varchar(10) NOT NULL,
  `nama_divisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`id_divisi`, `nama_divisi`) VALUES
('DV001', 'AUTOMOTIVE WELDING'),
('DV002', 'INDUSTRIAL WELDING'),
('DV003', 'BLOWER'),
('DV004', 'GENERAL AFFAIR'),
('DV005', 'INDUSTRIAL REPAIR'),
('DV006', 'VACUUM PUMP'),
('DV007', 'AUTOMOTIVE DAN MARKETING'),
('DV008', 'FABRIKASI'),
('DV009', 'COLTER'),
('DV010', 'CONNECTING ROOD'),
('DV011', 'CYLINDER COP'),
('DV012', 'DIGITAL MAREKETING'),
('DV013', 'ELECTRICAL'),
('DV014', 'FINANCE'),
('DV015', 'LATHE KONVENSIONAL'),
('DV016', 'LINE BORING'),
('DV017', 'MILLING'),
('DV018', 'SURFACE GRIDING'),
('DV019', 'WAREHOUSE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
('JB001', 'HRD'),
('JB002', 'Manajer'),
('JB003', 'Kepala Divisi'),
('JB004', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `id_divisi` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `status_penilaian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nik`, `id_jabatan`, `id_divisi`, `nama_karyawan`, `status_penilaian`) VALUES
(15, '3511456211782002', 'JB004', 'DV001', 'MUH DEBI ANDRI', ''),
(16, '3511082512000001', 'JB004', 'DV001', 'DONI IRAWAN', ''),
(17, '3503342117820002', 'JB004', 'DV001', 'AKBAR AMUALAN', ''),
(18, '3521998712000001', 'JB004', 'DV003', 'MUNGKI SATRIO', ''),
(19, '3576447103910003', 'JB004', 'DV003', 'AFDAN SAKURO', ''),
(20, '3528927821126002', 'JB004', 'DV003', 'SIGIT WIDARTO', ''),
(21, '3503678178970002', 'JB004', 'DV003', 'ANDI FAISAL NUGROHO', ''),
(22, '3527892512000001', 'JB004', 'DV003', 'WINAGIL CATUR ARIF', ''),
(23, '3507892612730003', 'JB004', 'DV003', 'M. RIDHO ADHE', ''),
(24, '3521998712678002', 'JB004', 'DV003', 'ABDUS SALAM', ''),
(25, '3523347821227002', 'JB004', 'DV003', 'GUFRON ARIF', ''),
(26, '3521998059600001', 'JB004', 'DV003', 'RAHMAT HIDAYAT', ''),
(27, '3503343457820002', 'JB004', 'DV003', 'FERDIANSYAH WICAKSONO', ''),
(28, '3501998712010001', 'JB004', 'DV003', 'SOFYAN ARIF', ''),
(29, '3507892319860003', 'JB004', 'DV003', 'VICKY CANDRA LESMANA', ''),
(30, '3521987678456000', 'JB004', 'DV003', 'AJI WAHYUDI', ''),
(31, '3504567894320003', 'JB004', 'DV009', 'M. BUSER', ''),
(32, '3517896452340001', 'JB004', 'DV009', 'NASIHUL UMAM', ''),
(33, '3216052104810009', 'JB004', 'DV009', 'TRI WAHYUDI', ''),
(34, '3216052205770004', 'JB004', 'DV009', 'AGUS PRIYANTO', ''),
(35, '3506607108790002', 'JB004', 'DV009', 'ALVIAN RAGIL', ''),
(36, '3506570804710005', 'JB004', 'DV009', 'M. RIDHO', ''),
(37, '3506575711700004', 'JB004', 'DV009', 'ADI SAPUTRA', ''),
(38, '3520986507770008', 'JB004', 'DV011', 'RENDI PERTAMADA', ''),
(39, '3519870304770010', 'JB004', 'DV011', 'SATRIA AGIL', ''),
(40, '3503342199820003', 'JB004', 'DV012', 'YAZIB HASBI', ''),
(41, '3519972102720001', 'JB004', 'DV012', 'PRAYOGA DWI YANTO', ''),
(42, '3520981301670002', 'JB004', 'DV012', 'ANANG MAHMUDI', ''),
(43, '3506545610780003', 'JB004', 'DV013', 'RICKY ANDIKA FITRA R', ''),
(44, '3507892211650004', 'JB004', 'DV013', 'BAGUS SUYANTO', ''),
(45, '3503340106700007', 'JB004', 'DV013', 'MUHAMMAD AYUB AHDAN', ''),
(46, '3504352906870003', 'JB004', 'DV013', 'MUHAMMAD IKHSAN', ''),
(47, '3506571105680005', 'JB004', 'DV013', 'NURUL JAILANI', ''),
(48, '3529672712920004', 'JB004', 'DV013', 'WISNU FIRMANSYAH', ''),
(49, '3505836608900005', 'JB004', 'DV013', 'M. DICKY SYAHPUTRA', ''),
(50, '3516026405680004', 'JB004', 'DV008', 'ADVAN CECON', ''),
(51, '3504316401620002', 'JB004', 'DV008', 'M. MAULANA ISHAQ', ''),
(52, '3507685508770011', 'JB004', 'DV008', 'NANANG HARIYANTO', ''),
(53, '3507876001750002', 'JB004', 'DV008', 'NURHOLIS', ''),
(54, '3520086401620002', 'JB004', 'DV008', 'KIKI KURNIAWAN', ''),
(55, '3523346306790007', 'JB004', 'DV008', 'IQBAL', ''),
(56, '3527635505790015', 'JB004', 'DV010', 'WAHYUDI', ''),
(57, '3505540405430001', 'JB004', 'DV010', 'LUKMAN HAKIKI', ''),
(58, '3509902402690004', 'JB004', 'DV010', 'MU\'AZD ROYNANSYAH', ''),
(59, '3513023112720014', 'JB004', 'DV010', 'AHMAD NURRUDIN', ''),
(60, '3524441711650004', 'JB004', 'DV007', 'SUWARNO', ''),
(61, '3503346702860004', 'JB004', 'DV007', 'ROFI\'I', ''),
(62, '3526661303780013', 'JB004', 'DV007', 'ANWAR ANAS', ''),
(63, '3506290207810003', 'JB004', 'DV007', 'ERWIN SUTIONO', ''),
(64, '3504881708770009', 'JB004', 'DV014', 'TRIVENA', ''),
(65, '3517357012810005', 'JB004', 'DV014', 'JUFTITA DEWI', ''),
(66, '3505524308750006', 'JB004', 'DV014', 'SITI ROHIMAH', ''),
(67, '3506690912710004', 'JB004', 'DV014', 'NUR HAYANI', ''),
(68, '3507646912660003', 'JB004', 'DV014', 'FARAH INTAN NUR OKTAVIA', ''),
(69, '3503381505430003', 'JB004', 'DV002', 'BAMBANG SUTIONO', ''),
(70, '3506676602800003', 'JB004', 'DV004', 'BASUKI HERMANU', ''),
(71, '3502311812750006', 'JB004', 'DV004', 'FAIZAL ROZZI', ''),
(72, '3505016310660004', 'JB004', 'DV004', 'TOTOK WIDYANTO', ''),
(73, '3502974709870006', 'JB004', 'DV004', 'SUPARTONO', ''),
(74, '3589906310940007', 'JB004', 'DV005', 'M.HASRUL RAMDANI', ''),
(75, '3589764508840003', 'JB004', 'DV005', 'R.FAJAR ZAINI', ''),
(76, '3518346109870002', 'JB004', 'DV005', 'M. FANIFATHUR ROHMAN', ''),
(77, '3528860102620002', 'JB004', 'DV005', 'FARIZ NANDO', ''),
(78, '3508230606680002', 'JB004', 'DV002', 'M. EFFENDI', ''),
(79, '3519460611810007', 'JB004', 'DV002', 'ARIF ABDILLAH', ''),
(80, '3507890801730006', 'JB004', 'DV002', 'DAUD MAULANA', ''),
(81, '3525670804700001', 'JB004', 'DV002', 'FATHUR ROHMAN', ''),
(82, '3516670901720007', 'JB004', 'DV002', 'ISMAIL', ''),
(83, '3505551003760007', 'JB004', 'DV002', 'GALUH', ''),
(84, '3506671312710003', 'JB004', 'DV016', 'AMIN', ''),
(85, '3506231410880002', 'JB004', 'DV016', 'FAJAR S', ''),
(86, '3528121509660003', 'JB004', 'DV016', 'PUGUH WIJI', ''),
(87, '3504441509760007', 'JB004', 'DV016', 'MASCHOIRUL ANWAR', ''),
(88, '3518901510830008', 'JB004', 'DV016', 'DIPTA BACHTIAR BAGASKARA', ''),
(89, '3508871511920008', 'JB004', 'DV015', 'LUGAS PRIAMBODO', ''),
(90, '3502221707900009', 'JB004', 'DV015', 'DAVID KURNIAWAN', ''),
(91, '3507682104810009', 'JB004', 'DV015', 'M RIZKY SAMSURI', ''),
(92, '3524952205770004', 'JB004', 'DV015', 'ALDI GUNAWAN', ''),
(93, '3517772410670002', 'JB004', 'DV015', 'M. ROFIKI', ''),
(94, '3507762412480001', 'JB004', 'DV015', 'GERY AFRIZAL', ''),
(95, '3527752702660001', 'JB004', 'DV015', 'AHMAD FAWAID', ''),
(96, '3529904105740007', 'JB004', 'DV015', 'GUNAWAN', ''),
(97, '3508454306780004', 'JB004', 'DV015', 'FAISAL', ''),
(98, '3516634312750003', 'JB004', 'DV017', 'DEDI BARATA', ''),
(99, '3509764401750010', 'JB004', 'DV017', 'SITI FARIDATUL', ''),
(100, '3526674612720004', 'JB004', 'DV017', 'SISWOKO', ''),
(101, '3509994704800008', 'JB004', 'DV007', 'IWANDRI', ''),
(102, '3504324710720006', 'JB004', 'DV007', 'M. HUSEIN', ''),
(103, '3508364801780009', 'JB004', 'DV007', 'JUM\'I', ''),
(104, '3507654904610003', 'JB004', 'DV007', 'FAHRUR ROZI', ''),
(105, '3526215012780014', 'JB004', 'DV007', 'YUSAK SUSILO', ''),
(106, '3504775205770007', 'JB004', 'DV018', 'AGUNG BUDI', ''),
(107, '3507765702700005', 'JB004', 'DV018', 'AHMAD HAMDANI', ''),
(108, '3510005909830005', 'JB004', 'DV018', 'LOUIS ALAN DIKA', ''),
(109, '3505526010930007', 'JB004', 'DV018', 'LUKMANUL HAKIM', ''),
(110, '3526896011840010', 'JB004', 'DV018', 'AHMAD FARHAN', ''),
(111, '3507446505860002', 'JB004', 'DV019', 'MUHAMMAD IRFAN', ''),
(112, '3506687001810003', 'JB004', 'DV019', 'FAUZI', ''),
(113, '3509342808690005', 'JB004', 'DV019', 'RISKI HAKIKI', ''),
(114, '3508921112930006', 'JB003', 'DV001', 'Zaenal Arifin', ''),
(115, '3508861104670008', 'JB003', 'DV002', 'Bahrul Rosi', ''),
(116, '3512110204740006', 'JB003', 'DV003', 'Cahyo Kumolo', ''),
(117, '3506990108840003', 'JB003', 'DV004', 'Elysa Anggraini', ''),
(118, '3527992809760003', 'JB003', 'DV005', 'Rufiyanto', ''),
(119, '3528875705770012', 'JB003', 'DV007', 'Arief Setiawan', ''),
(120, '3504941210740005', 'JB003', 'DV008', 'Dani Arief Bahtiar', ''),
(121, '3504373006850003', 'JB003', 'DV009', 'M. Rodi', ''),
(122, '3518505911790003', 'JB003', 'DV010', 'Rusmanto', ''),
(123, '3529976402770002', 'JB003', 'DV011', 'Halimin Eko Budianto', ''),
(124, '3528905212780008', 'JB003', 'DV012', 'Akbar Bintang', ''),
(125, '3526605009720010', 'JB003', 'DV013', 'Ahmad Doni Bait', ''),
(126, '3515335409720004', 'JB003', 'DV014', 'Denny Susanto', ''),
(127, '3508675702730008', 'JB003', 'DV015', 'Singgih Andriyanto', ''),
(128, '3506796312770001', 'JB003', 'DV016', 'Dhonny Ari', ''),
(129, '3509774406800015', 'JB003', 'DV017', 'Taufik Ismail', ''),
(130, '3507694303590003', 'JB003', 'DV018', 'Slamet Sulton', ''),
(131, '3510051408820007', 'JB003', 'DV019', 'Dimas Eka', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria_kasi`
--

CREATE TABLE `tb_kriteria_kasi` (
  `id_kriteria_kasi` varchar(10) NOT NULL,
  `nama_kriteria_kasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteria_kasi`
--

INSERT INTO `tb_kriteria_kasi` (`id_kriteria_kasi`, `nama_kriteria_kasi`) VALUES
('KKS001', 'Leadership'),
('KKS002', 'Productivity 		'),
('KKS003', 'Kemampuaan Pemecahan Masalah'),
('KKS004', 'Realisasi SOP/SPK'),
('KKS005', 'Dokumentasi'),
('KKS006', 'Pelaksanaan 5R'),
('KKS007', 'Pelaksanaan K3'),
('KKS008', 'Kehadiran'),
('KKS009', 'Kedisiplinan'),
('KSS010', 'Inisiatif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria_operator`
--

CREATE TABLE `tb_kriteria_operator` (
  `id_kriteria_op` varchar(10) NOT NULL,
  `nama_kriteria_op` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteria_operator`
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
-- Table structure for table `tb_matriks_op`
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
-- Dumping data for table `tb_matriks_op`
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
-- Table structure for table `tb_submatriks_komdanker`
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
-- Dumping data for table `tb_submatriks_komdanker`
--

INSERT INTO `tb_submatriks_komdanker` (`id_submatrix_kdk`, `sangat_baik`, `baik`, `kurang`, `tidak_mampu`, `jumlah`, `prioritas`, `eigen_value`) VALUES
(1, 0.59659090909091, 0.66176470588235, 0.53571428571429, 0.4375, 2.2315699006876, 0.55789247517189, 0.93513405362145),
(2, 0.19886363636364, 0.22058823529412, 0.32142857142857, 0.3125, 1.0533804430863, 0.26334511077158, 1.1938311688312),
(3, 0.11931818181818, 0.073529411764705, 0.10714285714286, 0.1875, 0.48749045072574, 0.12187261268144, 1.1374777183601),
(4, 0.085227272727271, 0.044117647058824, 0.035714285714285, 0.0625, 0.22755920550038, 0.056889801375095, 0.91023682200152);

-- --------------------------------------------------------

--
-- Table structure for table `tb_submatriks_pelaksana5r`
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
-- Dumping data for table `tb_submatriks_pelaksana5r`
--

INSERT INTO `tb_submatriks_pelaksana5r` (`id_submatrix_p5r`, `melaksanakan`, `kurang_melaksanakan`, `tidak_melaksanakan`, `jumlah`, `prioritas`, `eigen_value`) VALUES
(1, 0.75471698113208, 0.78947368421053, 0.66666666666667, 2.2108573320093, 0.73695244400309, 0.97646198830409),
(2, 0.15094339622642, 0.15789473684211, 0.25, 0.55883813306852, 0.18627937768951, 1.1797693920335),
(3, 0.094339622641509, 0.052631578947368, 0.083333333333333, 0.23030453492221, 0.076768178307404, 0.92121813968884);

-- --------------------------------------------------------

--
-- Table structure for table `tb_submatriks_productivity`
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
-- Dumping data for table `tb_submatriks_productivity`
--

INSERT INTO `tb_submatriks_productivity` (`id_submatrix_proc`, `pekerjaan_90`, `pekerjaan_80_90`, `pekerjaan_60_79`, `pekerjaan_59`, `jumlah`, `prioritas`, `eigen_value`) VALUES
(1, 0.60810810810811, 0.67924528301887, 0.48387096774194, 0.47368421052632, 2.2449085693952, 0.56122714234881, 0.92290685630692),
(2, 0.2027027027027, 0.22641509433962, 0.38709677419355, 0.31578947368421, 1.1320040449201, 0.28300101123002, 1.2499211329326),
(3, 0.12162162162162, 0.056603773584906, 0.096774193548387, 0.15789473684211, 0.43289432559702, 0.10822358139925, 1.1183103411256),
(4, 0.067567567567567, 0.037735849056605, 0.032258064516129, 0.052631578947368, 0.19019306008767, 0.047548265021917, 0.90341703541643);

-- --------------------------------------------------------

--
-- Table structure for table `tb_subrange_komdanker`
--

CREATE TABLE `tb_subrange_komdanker` (
  `id_subrange_kdk` int(11) NOT NULL,
  `sangat_baik` double DEFAULT NULL,
  `baik` double DEFAULT NULL,
  `kurang` double DEFAULT NULL,
  `tidak_mampu` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_subrange_komdanker`
--

INSERT INTO `tb_subrange_komdanker` (`id_subrange_kdk`, `sangat_baik`, `baik`, `kurang`, `tidak_mampu`) VALUES
(1, 1, 3, 5, 7),
(2, 0.33333333333333, 1, 3, 5),
(3, 0.2, 0.33333333333333, 1, 3),
(4, 0.14285714285714, 0.2, 0.33333333333333, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_subrange_op`
--

CREATE TABLE `tb_subrange_op` (
  `id_subrange_op` varchar(10) NOT NULL,
  `id_kriteria_op` varchar(10) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `nama_subrange_op` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_subrange_pelaksana5r`
--

CREATE TABLE `tb_subrange_pelaksana5r` (
  `id_subrange_p5r` int(11) NOT NULL,
  `melaksanakan` double DEFAULT NULL,
  `kurang_melaksanakan` double DEFAULT NULL,
  `tidak_melaksanakan` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_subrange_pelaksana5r`
--

INSERT INTO `tb_subrange_pelaksana5r` (`id_subrange_p5r`, `melaksanakan`, `kurang_melaksanakan`, `tidak_melaksanakan`) VALUES
(1, 1, 5, 8),
(2, 0.2, 1, 3),
(3, 0.125, 0.33333333333333, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_subrange_productivity`
--

CREATE TABLE `tb_subrange_productivity` (
  `id_subrange_proc` int(11) NOT NULL,
  `pekerjaan_90` double DEFAULT NULL,
  `pekerjaan_80_90` double DEFAULT NULL,
  `pekerjaan_60_79` double DEFAULT NULL,
  `pekerjaan_59` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_subrange_productivity`
--

INSERT INTO `tb_subrange_productivity` (`id_subrange_proc`, `pekerjaan_90`, `pekerjaan_80_90`, `pekerjaan_60_79`, `pekerjaan_59`) VALUES
(1, 1, 3, 5, 9),
(2, 0.33333333333333, 1, 4, 6),
(3, 0.2, 0.25, 1, 3),
(4, 0.11111111111111, 0.16666666666667, 0.33333333333333, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
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
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `status`) VALUES
(1, 'Bahrul', 'bahrul', 'kasi', 'Kepala Divisi', ''),
(2, 'Atim', 'atim', 'manajer', 'Manajer', ''),
(3, 'Rendi', 'rendi', 'hrd', 'HRD', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kuisioner_kasi`
--
ALTER TABLE `data_kuisioner_kasi`
  ADD PRIMARY KEY (`id_kuis_kasi`),
  ADD KEY `id_kriteria_kasi` (`id_kriteria_kasi`);

--
-- Indexes for table `data_kuisioner_op`
--
ALTER TABLE `data_kuisioner_op`
  ADD PRIMARY KEY (`id_kuis_op`),
  ADD KEY `id_kriteria_op` (`id_kriteria_op`);

--
-- Indexes for table `nilai_banding`
--
ALTER TABLE `nilai_banding`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_analisa_op`
--
ALTER TABLE `tb_analisa_op`
  ADD PRIMARY KEY (`id_anop`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_jabatan` (`id_jabatan`,`id_divisi`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `tb_kriteria_kasi`
--
ALTER TABLE `tb_kriteria_kasi`
  ADD PRIMARY KEY (`id_kriteria_kasi`);

--
-- Indexes for table `tb_kriteria_operator`
--
ALTER TABLE `tb_kriteria_operator`
  ADD PRIMARY KEY (`id_kriteria_op`);

--
-- Indexes for table `tb_matriks_op`
--
ALTER TABLE `tb_matriks_op`
  ADD PRIMARY KEY (`id_matop`);

--
-- Indexes for table `tb_submatriks_komdanker`
--
ALTER TABLE `tb_submatriks_komdanker`
  ADD PRIMARY KEY (`id_submatrix_kdk`);

--
-- Indexes for table `tb_submatriks_pelaksana5r`
--
ALTER TABLE `tb_submatriks_pelaksana5r`
  ADD PRIMARY KEY (`id_submatrix_p5r`);

--
-- Indexes for table `tb_submatriks_productivity`
--
ALTER TABLE `tb_submatriks_productivity`
  ADD PRIMARY KEY (`id_submatrix_proc`);

--
-- Indexes for table `tb_subrange_komdanker`
--
ALTER TABLE `tb_subrange_komdanker`
  ADD PRIMARY KEY (`id_subrange_kdk`);

--
-- Indexes for table `tb_subrange_op`
--
ALTER TABLE `tb_subrange_op`
  ADD PRIMARY KEY (`id_subrange_op`),
  ADD KEY `id_kriteria_op` (`id_kriteria_op`,`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tb_subrange_pelaksana5r`
--
ALTER TABLE `tb_subrange_pelaksana5r`
  ADD PRIMARY KEY (`id_subrange_p5r`);

--
-- Indexes for table `tb_subrange_productivity`
--
ALTER TABLE `tb_subrange_productivity`
  ADD PRIMARY KEY (`id_subrange_proc`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kuisioner_kasi`
--
ALTER TABLE `data_kuisioner_kasi`
  ADD CONSTRAINT `data_kuisioner_kasi_ibfk_1` FOREIGN KEY (`id_kriteria_kasi`) REFERENCES `tb_kriteria_kasi` (`id_kriteria_kasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_kuisioner_op`
--
ALTER TABLE `data_kuisioner_op`
  ADD CONSTRAINT `data_kuisioner_op_ibfk_1` FOREIGN KEY (`id_kriteria_op`) REFERENCES `tb_kriteria_operator` (`id_kriteria_op`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD CONSTRAINT `tb_karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_karyawan_ibfk_2` FOREIGN KEY (`id_divisi`) REFERENCES `tb_divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_subrange_op`
--
ALTER TABLE `tb_subrange_op`
  ADD CONSTRAINT `tb_subrange_op_ibfk_1` FOREIGN KEY (`id_kriteria_op`) REFERENCES `tb_kriteria_operator` (`id_kriteria_op`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_subrange_op_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
