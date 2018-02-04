-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 10:31 AM
-- Server version: 10.1.28-MariaDB
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(11) NOT NULL,
  `Username_admin` varchar(225) NOT NULL,
  `Password_admin` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_admin`, `Username_admin`, `Password_admin`) VALUES
(1, 'Admin', '4438fc033f8aef433f9db5348b70e8e5');

-- --------------------------------------------------------

--
-- Table structure for table `invite`
--

CREATE TABLE `invite` (
  `Id_invit` int(12) NOT NULL,
  `Invited` varchar(225) NOT NULL,
  `Id_office` int(12) NOT NULL,
  `Username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invite`
--

INSERT INTO `invite` (`Id_invit`, `Invited`, `Id_office`, `Username`) VALUES
(1, 'Bagus', 1, 'bagus.pgri3'),
(2, 'andhikab57', 2, 'andhikab57.bass'),
(3, 'Testing user ke 3', 3, 'testing-user.sengkaling'),
(9, 'Riko', 1, 'Riko.pgri3'),
(10, 'qwert', 4, 'qwert.morodadi'),
(11, 'Bapak', 6, 'Bapak.Disnaker');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `Id_office` int(12) NOT NULL,
  `Office_name` varchar(225) NOT NULL,
  `Office_code` varchar(225) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`Id_office`, `Office_name`, `Office_code`, `Description`) VALUES
(1, 'SMK PGRI 3 Malang Tlogomas', 'pgri3', 'Ini adalah'),
(2, 'Bumi Asri Sengkaling Selatan', 'bass', 'Group from vilage who I live there'),
(3, 'kantor_sengkaling', 'sengkaling', 'ini adalah kantor didepan sengkaling'),
(4, 'PT Morodadi Sumartra', 'morodadi', 'PT ini cuma testing'),
(5, 'PT Sidomultu barang antik', 'sidomutu', 'Perusahaaan tessting supaya bisa mauk ke select box custom'),
(6, 'Dinas Tenaga Kerja Kabupaten Malang', 'Disnaker', 'Just for test');

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
  MODIFY `Id_invit` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `Id_office` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invite`
--
ALTER TABLE `invite`
  ADD CONSTRAINT `invite_ibfk_1` FOREIGN KEY (`Id_office`) REFERENCES `office` (`Id_office`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
