-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 06:56 PM
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
-- Database: `selflearning2`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `nik` varchar(16) NOT NULL,
  `namaDepan` varchar(30) NOT NULL,
  `namaTengah` varchar(30) NOT NULL,
  `namaBelakang` varchar(30) NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `wargaNegara` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `noHP` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `kodePos` varchar(10) NOT NULL,
  `profPic` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`nik`, `namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodePos`, `profPic`, `username`, `password`) VALUES
('9876543210987654', 'Adam', 'John', 'Carlsen', 'Bandung', '2000-06-21', 'Indonesia', 'adamcarlsen@gmail.com', '081288776212', 'Jalan bunga hitam no 34', '17211', 'profPic/pc2.jpg', 'adamcarl', 'biolab26'),
('1234567887654321', 'Michelle', 'Pauline', 'Kusuma', 'Jakarta', '2000-01-28', 'Indonesia', 'michellepaulinn@gmail.com', '081287422012', 'Jalan p.maluku raya c1/6', '17111', 'profPic/2021-10-31 (3).png', 'misell', 'asdf1234'),
('1234567890987654', 'Olive', 'Smith', 'Carlsen', 'Jakarta', '2001-04-26', 'Indonesia', 'Olivesc@gmail.com', '081298533456', 'Jalan Mangga no 5', '17133', 'profPic/pc1.jpg', 'olivesc', 'hypothes1s');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
