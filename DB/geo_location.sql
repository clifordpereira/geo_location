-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 10:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geo_location`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `latitude` decimal(11,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `address`, `latitude`, `longitude`) VALUES
(1, 'Kollam', 'Ummannur, 691520', '8.87960000', '76.62290000'),
(3, 'Thiruvananthapuram', 'Valiya veli, 695021', '8.52413900', '76.93663800'),
(4, 'Nanjangud', 'Mysore, Karnataka', '12.12000000', '76.68000000'),
(5, 'Chittorgarh', 'Rajasthan, India', '24.87999900', '74.62999700'),
(6, 'Ratnagiri', 'Maharashtra, India', '16.99444400', '73.30000300'),
(7, 'Goregaon', 'Mumbai, Maharashtra', '19.15500100', '72.84999800'),
(8, 'Pindwara', 'Rajasthan, India', '24.79450000', '73.05500000'),
(9, 'Raipur', 'Chhattisgarh, India', '21.25000000', '81.62999700'),
(10, 'Gokak', 'Karnataka, India', '16.16670000', '74.83329800'),
(11, 'Lucknow', 'Uttar Pradesh, India', '26.85000000', '80.94999700'),
(12, 'Delhi', 'Delhi, India', '28.67907900', '77.06971000'),
(13, 'Mumbai', 'Maharashtra, India', '19.07609000', '72.87742600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
