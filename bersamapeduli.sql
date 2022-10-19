-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 02:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bersamapeduli`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', '$2y$10$ZypMEBGh70s5MP1M.kh/S.et9iegr9oFOprLTOAODSBpMs9IITvWK');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `jml`, `email`) VALUES
(1, 'asda', 100000, 'oaps@gmail.com'),
(2, 'icang', 100000, 'oaps@gmail.com'),
(3, 'asdasd', 500000, 'oaps@gmail.com'),
(4, 'asdasd', 500000, 'oaps@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `tgllahir` date NOT NULL,
  `tmplahir` varchar(255) NOT NULL,
  `motiv` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`id`, `nama`, `asal`, `tgllahir`, `tmplahir`, `motiv`, `foto`) VALUES
(4, 'ICANG', 'jawa', '0121-12-12', 'tes', 'mantap', 'Frame 1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `relawan`
--
ALTER TABLE `relawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
