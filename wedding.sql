-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Feb 2018 pada 06.00
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(11) NOT NULL,
  `Username_admin` varchar(225) NOT NULL,
  `Password_admin` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Id_admin`, `Username_admin`, `Password_admin`) VALUES
(1, 'Admin', '4438fc033f8aef433f9db5348b70e8e5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invite`
--

CREATE TABLE `invite` (
  `Id_invit` int(12) NOT NULL,
  `Invited` varchar(225) NOT NULL,
  `Id_office` int(12) NOT NULL,
  `Username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invite`
--

INSERT INTO `invite` (`Id_invit`, `Invited`, `Id_office`, `Username`) VALUES
(1, 'Bagus', 1, 'bagus.pgri3'),
(2, 'andhikab57', 2, 'andhikab57.bass'),
(3, 'Testing user ke 3', 3, 'testing-user.sengkaling'),
(9, 'Riko', 1, 'Riko.pgri3'),
(10, 'qwert', 4, 'qwert.morodadi'),
(11, 'Bapak', 6, 'Bapak.Disnaker'),
(14, 'Drs. Yoyok Wardoyo, MM', 6, 'yoyok.kab'),
(15, 'Eko Darmawan, SE', 6, 'eko.kab'),
(16, 'Drs. Hadi Widjaja', 6, 'hadi.kab'),
(17, 'Rely Achmad Nurul Yakin Al\'Awam, S. Sos', 6, 'rely.kab'),
(18, 'Yuli Iryawati', 6, 'yuli.kab'),
(19, 'Mahmud Nur Ajis, SAP.  ', 6, 'mahmud.kab'),
(20, 'Herman Wicaksono', 6, 'herman.kab'),
(21, 'Hardjito  ', 6, 'hardjito.kab'),
(22, 'Mia Afriza Fajarwati, SAP ', 6, 'mia.kab'),
(23, 'Gitta Dwi Wulansari, S.AB ', 6, 'gitta.kab'),
(24, 'Ahmadi', 6, 'ahmadi.kab'),
(25, 'Edi Sugiarto', 6, 'edi.kab'),
(26, 'Chandra Setia Eswanto, S. Kom', 6, 'chandrasetia.kab'),
(27, 'Nilla Kaprina Valentini, Spd', 6, 'nilla.kab'),
(28, 'Ari Kurniawan', 6, 'ari.kab'),
(29, 'Chandra Galuh Pradata', 6, 'chandragaluh.kab'),
(30, 'Achmad Djunaedi, SH ', 6, 'djunaedi.kab'),
(31, 'Sukardi, S Sos', 6, 'sukardi.kab'),
(32, 'Heru Budiono, SH', 6, 'heru.kab'),
(33, 'Apri Sasi Andayani\' S.Sos', 6, 'apri.kab'),
(34, 'Endri Murnayati, S.AP', 6, 'endrim.kab'),
(35, 'Setyawan, SE ', 6, 'setyawan.kab'),
(36, 'Endri Amintohari', 6, 'endria.kab'),
(37, 'Elza Dwi Aprilia Daeng W, S.Pd', 6, 'elza.kab'),
(38, 'Milatus Sholiha', 6, 'milatus.kab'),
(39, 'Dra. Kanti Ratnawati', 6, 'kanti.kab'),
(40, 'Lilik Faridah, SH, MM', 6, 'lilik.kab'),
(41, 'Rachmad Dardiri, S Sos', 6, 'rachmad.kab'),
(42, 'Iskandar Wijaya, SE', 6, 'iskandar.kab'),
(43, 'Rizki Wahyu Nugroho, S.Sos', 6, 'rizki.kab'),
(44, 'Enggar Agustiana M, S.Pd', 6, 'enggar.kab'),
(45, 'Wijayanto Yusuf Wibowo', 6, 'wijayanto.kab'),
(46, 'Achmad Rukmianto, SE, MM', 6, 'rukmianto.kab'),
(47, 'Rahmat Yuniman, SE, Msi', 6, 'rahmat.kab'),
(48, 'Yusnita Darayati, SH ', 6, 'yusnita.kab'),
(49, 'Novi Andrianto Cahyo Bagus, SH', 6, 'novi.kab'),
(50, 'Drs. Tri Wibowo', 6, 'triwibowo.kab'),
(51, 'Mudi Hartono, SH', 6, 'mudi.kab'),
(52, 'Dian Dharu Rohmadhoni, SH', 6, 'dian.kab'),
(53, 'Amiati, S.Sos', 6, 'amiati.kab'),
(54, 'Irma Yunita', 6, 'irma.kab'),
(55, 'Trisnawati Marlinneke Markani, BA', 6, 'trisnawati.kab'),
(56, 'Imam Safi\'i, S.Sos', 6, 'imam.kab'),
(57, 'Drs. Bambang Santoso', 6, 'bambang.kab'),
(58, 'Dra. Wahyuning Sri Suharti, Msi', 6, 'wahyuning.kab'),
(59, 'Sentot Budi Ajaraji, SAP', 6, 'sentot.kab'),
(60, 'Hilda Eka Dwi Sapto', 6, 'hilda.kab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `office`
--

CREATE TABLE `office` (
  `Id_office` int(12) NOT NULL,
  `Office_name` varchar(225) NOT NULL,
  `Office_code` varchar(225) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `office`
--

INSERT INTO `office` (`Id_office`, `Office_name`, `Office_code`, `Description`) VALUES
(1, 'SMK PGRI 3 Malang Tlogomas', 'pgri3', 'Ini adalah'),
(2, 'Bumi Asri Sengkaling Selatan', 'bass', 'Group from vilage who I live there'),
(3, 'kantor_sengkaling', 'sengkaling', 'ini adalah kantor didepan sengkaling'),
(4, 'PT Morodadi Sumartra', 'morodadi', 'PT ini cuma testing'),
(5, 'PT Sidomultu barang antik', 'sidomutu', 'Perusahaaan tessting supaya bisa mauk ke select box custom'),
(6, 'Dinas Tenaga Kerja Kabupaten Malang', 'kab', 'Just for test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indexes for table `invite`
--
ALTER TABLE `invite`
  ADD PRIMARY KEY (`Id_invit`),
  ADD KEY `id_office` (`Id_office`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`Id_office`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invite`
--
ALTER TABLE `invite`
  MODIFY `Id_invit` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `Id_office` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `invite`
--
ALTER TABLE `invite`
  ADD CONSTRAINT `invite_ibfk_1` FOREIGN KEY (`Id_office`) REFERENCES `office` (`Id_office`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
