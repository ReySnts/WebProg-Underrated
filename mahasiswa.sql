-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 05:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET 
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET 
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_prog1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE 
  `mahasiswa` 
  (
    `NIM` CHAR(10) PRIMARY KEY,
    `Nama` VARCHAR(255) NOT NULL,
    `E-mail` VARCHAR(255) NOT NULL,
    `Alamat` VARCHAR(255) NOT NULL
  )   
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO 
  `mahasiswa` 
  (
    `NIM`, 
    `Nama`, 
    `E-mail`, 
    `Alamat`
  ) 
VALUES
(
  '2440068051', 
  'Leonard Theodorus', 
  'leeeleonard@mail.com', 
  'Jalan Permata 2 No. 9'
),
(
  '2401960435', 
  'Reynaldy Sentosa', 
  'reysnts@mail.com', 
  'Jalan Kampung Duri 11 No. 7'
),
(
  '2440045211', 
  'Ryu Aprijanto', 
  'ryuryu@mail.com', 
  'Jalan Pal Putih 6 No. 28'
),
(
  '2440050615', 
  'Ellin Anggriani', 
  'virgories@mail.com', 
  'Jalan Nusa Dua 5 No. 12'
),
(
  '2401960851', 
  'Vania', 
  'pancai@mail.com', 
  'Jalan Meranti 9 No. 15'
);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;