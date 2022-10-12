-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 03:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asgwebprog1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nim` char(10) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  CHECK(`E-mail` LIKE '%@%')
) ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama`, `E-mail`, `Alamat`) VALUES
('2401960435', 'Reynaldy Sentosa', 'reysnts@mail.com', 'Jalan Kampung Duri 11 No. 7'),
('2401960851', 'Vania', 'pancai@mail.com', 'Jalan Meranti 9 No. 15'),
('2440045211', 'Ryu Aprijanto', 'ryuryu@mail.com', 'Jalan Pal Putih 6 No. 28'),
('2440050615', 'Ellin Anggriani', 'virgories@mail.com', 'Jalan Nusa Dua 5 No. 12'),
('2440068051', 'Leonard Theodorus', 'leeeleonard@mail.com', 'Jalan Permata 2 No. 9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
