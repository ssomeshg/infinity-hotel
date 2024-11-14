-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 01:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects_infinity_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `encrypt_password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `email`, `password`, `encrypt_password`, `status`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'infinity@12#', '$2y$10$1.3AIj4KfyV2SYYNDRdelO8nQ1tkjt3AokFqtez3MomSB3EFnspRe', 0, '2024-09-26 04:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `type_id` varchar(255) NOT NULL,
  `package_content` longtext NOT NULL,
  `standard_cost` varchar(255) NOT NULL,
  `standard_price` varchar(255) NOT NULL,
  `standard_description` longtext DEFAULT NULL,
  `luxury_cost` varchar(255) DEFAULT NULL,
  `luxury_price` varchar(255) DEFAULT NULL,
  `luxury_description` longtext DEFAULT NULL,
  `royal_cost` varchar(255) DEFAULT NULL,
  `royal_price` varchar(255) DEFAULT NULL,
  `royal_description` longtext DEFAULT NULL,
  `adult` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `day_plans` longtext NOT NULL,
  `package_heading` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `package_inclusion` longtext NOT NULL,
  `package_exclusions` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_bundle` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_category`
--

CREATE TABLE `tbl_package_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_package_category`
--

INSERT INTO `tbl_package_category` (`id`, `category_name`, `image`, `status`, `create_at`, `updated_at`) VALUES
(1, 'Family package', '19196134701731583541.jpg', '1', '2024-11-14 11:25:41', '2024-11-14 11:25:41'),
(2, 'Romance package', '13859559731731583838.jpg', '1', '2024-11-14 11:30:38', '2024-11-14 11:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_plans`
--

CREATE TABLE `tbl_package_plans` (
  `id` int(11) NOT NULL,
  `package_id` varchar(255) NOT NULL,
  `plan_title` varchar(255) NOT NULL,
  `plan_description` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_type`
--

CREATE TABLE `tbl_package_type` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_package_type`
--

INSERT INTO `tbl_package_type` (`id`, `category_name`, `category_type`, `image`, `status`, `create_at`, `updated_at`) VALUES
(1, 'Destination Vacation', '3 Nights 4 Days', '17813107571731583958.jpg', '1', '2024-11-14 11:32:38', '2024-11-14 11:32:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package_category`
--
ALTER TABLE `tbl_package_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package_plans`
--
ALTER TABLE `tbl_package_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_package_category`
--
ALTER TABLE `tbl_package_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_package_plans`
--
ALTER TABLE `tbl_package_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
