-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 12:08 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diskonkuyy`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapromo`
--

CREATE TABLE `datapromo` (
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `batas_promo` date NOT NULL,
  `harga_awal` int(10) NOT NULL,
  `harga_akhir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapromo`
--

INSERT INTO `datapromo` (`nama`, `keterangan`, `batas_promo`, `harga_awal`, `harga_akhir`) VALUES
('Aishiteru Ichigo', 'Strawberry Cheese Cake', '2022-12-31', 20000, 12000),
('Bakmi Special GM', 'Bakmi Rebus topping Ayam dan Jamur Saus Spesial', '2022-10-20', 33637, 24546),
('Baskin Robbins Half Gallon', 'Potongan 50%', '2022-10-31', 750000, 375000),
('Baskin Robbins Pint', 'Potongan 50%', '2022-10-31', 290000, 145000),
('Baskin Robbins Quart', 'Potongan 50%', '2022-10-31', 415000, 207500),
('Bihun Ayam Lada Cha', 'Bihun dengan topping ayam giling saus lada', '2022-10-20', 26364, 22000),
('Bihun Special GM', 'Bihun topping ayam giling dengan saus lada ala', '2022-10-20', 33637, 22000),
('Burger King Milo Float', 'Potongan 45%', '2022-10-25', 15000, 7000),
('Burger King Regular Fries', 'Potongan 25%', '2022-10-25', 8000, 6000),
('Buy 1 Get 1', 'Semua varian burger', '2022-12-31', 25000, 12500),
('Double Package Deals 1', '2 Grilled Chicken Steak + Oreo Fruit Blast + 2 Juice', '2022-10-31', 217000, 140000),
('Double Package Deals 2', '2 Battered Dory Fish + Oreo Fruit Blast + 2 Juice', '2022-10-31', 220000, 145000),
('Double Package Deals 3', '2 Sirloin NZ + Oreo Fruit Blast + 2 Juice', '2022-10-31', 297000, 240000),
('Nasi Ayam GM', 'Nasi Putih topping Ayam dan Jamur Saus Spesial', '2022-10-20', 30000, 22000),
('Pangsit Goreng', 'Potongan 22%', '2022-10-20', 31819, 24546),
('Pangsit Kuah Frozen', '10pcs Pangsit isi ayam yang sudah dibekukan', '2022-10-20', 23637, 22000),
('Weekend Deal A', '6pcs Aroma Chicken + 1pc Mozza Burger', '2022-11-30', 150000, 112000),
('Weekend Deal B', '3pcs Aroma Chicken + 2pcs Nasi', '2022-11-30', 75000, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `username` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`username`, `email`, `password`) VALUES
('divaariani', 'diva@gmail.com', '2512test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapromo`
--
ALTER TABLE `datapromo`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
