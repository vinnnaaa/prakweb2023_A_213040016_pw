-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2023 at 05:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2023_a_213040016`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int NOT NULL,
  `Judul_buku` varchar(50) NOT NULL,
  `Pengarang` varchar(25) NOT NULL,
  `Tahun_terbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `Judul_buku`, `Pengarang`, `Tahun_terbit`) VALUES
(1, 'Filosofi Teras', 'Hery Manampiring', '2018'),
(2, 'Dear Nathan', 'Erisca Febriani', '2016'),
(3, 'Sebuah seni untuk bersikap bodo amat', 'Mark manson', '2016'),
(4, 'Dilan 1990', 'Pidi Baiq', '2014'),
(5, 'Dilan 1991', 'Pidi Baiq', '2015'),
(6, 'Milea: Suara Dari Dilan', 'Pidi Baiq', '2016'),
(7, 'Ancika', 'Pidi Baiq', '2021'),
(8, 'Komik Dilan', 'Pidi Baiq', '2020'),
(9, 'Komik Dilan bagian 2', 'Pidi Baiq', '2020'),
(10, 'Laskar pelangi', 'Andrea hirata', '2005');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
