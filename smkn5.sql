-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 04:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn5`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`) VALUES
(100, 'Pak Hendra'),
(101, 'Pak Mahali'),
(102, 'Pak Raka'),
(1001, 'Bu Tere'),
(1002, 'Bu Dwi'),
(1004, 'Pak Nanang'),
(1005, 'Pak Wahyu Prabowo'),
(10022, 'Bu Sulastri'),
(12213, 'Bu Tri Octa'),
(151212, 'Pak Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`) VALUES
(1, 'Pengembangan Perangkat Lunak dan Game'),
(2, 'Desain Komunikasi Visual'),
(3, 'Teknik Komputer dan Jaringan'),
(4, 'Tata Busana'),
(6, 'Animasi'),
(7, 'Kriya Tekstil'),
(8, 'Kriya Keramik '),
(9, 'Kriya Kayu dan Rotan');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(5) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `id_jurusan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `id_jurusan`) VALUES
(7, 'XI PPLG 1', 1),
(8, 'XI PPLG 2', 1),
(9, 'XI PPLG 3', 1),
(10, 'XI TBS 1', 4),
(11, 'XI TKJ 2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama`) VALUES
(1, 'Matematika'),
(2, 'KPPLG'),
(3, 'PKDK'),
(7, 'Sejarah'),
(8, 'BK'),
(9, 'Bahasa Jawa'),
(10, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `nilai` int(3) NOT NULL,
  `mapel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nis`, `nilai`, `mapel`) VALUES
(13, 62864980, 88, 30),
(14, 62864971, 80, 29),
(15, 62864971, 88, 30),
(16, 62864971, 87, 24),
(18, 62864980, 98, 26),
(19, 62864980, 95, 24),
(20, 62864980, 80, 29),
(21, 62863380, 90, 36),
(22, 6286890, 90, 38),
(23, 6286890, 80, 37);

-- --------------------------------------------------------

--
-- Table structure for table `setting_guru_mapel`
--

CREATE TABLE `setting_guru_mapel` (
  `id` int(5) NOT NULL,
  `id_mapel` int(5) NOT NULL,
  `nip` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_guru_mapel`
--

INSERT INTO `setting_guru_mapel` (`id`, `id_mapel`, `nip`, `id_kelas`) VALUES
(24, 2, 100, 7),
(25, 2, 10022, 8),
(26, 1, 151212, 7),
(29, 8, 12213, 7),
(30, 3, 10022, 7),
(33, 1, 1002, 8),
(34, 1, 1001, 9),
(36, 1, 151212, 10),
(37, 8, 151212, 11),
(38, 1, 1002, 11);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `id_kelas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `alamat`, `id_kelas`) VALUES
(110101, 'Abdul Moni', 'Blimbing, Malang', 7),
(110102, 'Ade Vina Puspitasari', 'Tidar, Malang', 7),
(110103, 'Adella Galuh Saputri', 'Karangploso, Malang', 7),
(110104, 'Afrizal Maulana Ilyas', 'Lowokwaru, Malang', 7),
(110105, 'Ahmad Fathul Alim', 'Dau, Malang', 7),
(110106, 'Ahmad Khilmy Maulana', 'Sulfat, Malang', 7),
(110107, 'Aisyah Maratussholihah', 'Lowokwaru, Malang', 7),
(110108, 'Ananda Tri Wijaya', 'Blimbing, Malang', 7),
(6286890, 'Melvin Sandra Dadi', 'Karangploso, Malang', 11),
(62863380, 'Indys Nurmilla S.', 'Malang', 10),
(62864230, 'Nirwana Candha M.', 'Polowijen, Malang', 9),
(62864971, 'Ivan Bagos Sadewo', 'Dinoyo, Malang', 7),
(62864975, 'Jeni Astina S.', 'Ngijo, Malang', 8),
(62864980, 'Gerrardo Arlen Thadeus S.', 'Lowokwaru, Malang', 7),
(62864982, 'Diky Agustian S.', 'Buring, Malang', 7),
(62864999, 'Faathir Rizki S.', 'Sulfat, Malang', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`),
  ADD KEY `mapel` (`mapel`);

--
-- Indexes for table `setting_guru_mapel`
--
ALTER TABLE `setting_guru_mapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kls` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `nip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10123248;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `setting_guru_mapel`
--
ALTER TABLE `setting_guru_mapel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9223372036854775807;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`mapel`) REFERENCES `setting_guru_mapel` (`id`);

--
-- Constraints for table `setting_guru_mapel`
--
ALTER TABLE `setting_guru_mapel`
  ADD CONSTRAINT `id_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`),
  ADD CONSTRAINT `nip` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `setting_guru_mapel_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `id_kls` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
