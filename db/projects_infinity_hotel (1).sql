-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 01:38 PM
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
  `category_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `package_content` longtext DEFAULT NULL,
  `standard_cost` varchar(255) DEFAULT NULL,
  `standard_price` varchar(255) DEFAULT NULL,
  `standard_description` longtext DEFAULT NULL,
  `luxury_cost` varchar(255) DEFAULT NULL,
  `luxury_price` varchar(255) DEFAULT NULL,
  `luxury_description` longtext DEFAULT NULL,
  `royal_cost` varchar(255) DEFAULT NULL,
  `royal_price` varchar(255) DEFAULT NULL,
  `royal_description` longtext DEFAULT NULL,
  `adult` varchar(255) NOT NULL,
  `child` varchar(255) DEFAULT NULL,
  `day_plans` longtext DEFAULT NULL,
  `package_heading` varchar(255) NOT NULL,
  `place` varchar(255) DEFAULT NULL,
  `package_inclusion` longtext DEFAULT NULL,
  `package_exclusions` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_bundle` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `category_id`, `type_id`, `package_content`, `standard_cost`, `standard_price`, `standard_description`, `luxury_cost`, `luxury_price`, `luxury_description`, `royal_cost`, `royal_price`, `royal_description`, `adult`, `child`, `day_plans`, `package_heading`, `place`, `package_inclusion`, `package_exclusions`, `image`, `image_bundle`, `status`, `create_at`, `updated_at`) VALUES
(1, 1, 1, '<p>Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</p>', '45000', '55000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '45000', '55000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '45000', '55000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '2', '1', '3 Nights 4 Days', 'Destination Vacation', 'PORTBLAIR(02 NIGHTS) – HAVELOCK (SWARAJ DWEEP)(01 NIGHT)', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '13788007431731652352.jpg', '13087384001731652352.jpg,1247799761731652352.jpg,2696756601731652352.jpg', '1', '2024-11-15 06:32:32', '2024-11-15 06:32:32'),
(2, 2, 1, '<p>Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</p>', '45000', '55000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '45000', '55000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '45000', '55000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '2', '1', '3 Nights 4 Days', 'Destination Vacation', 'PORTBLAIR(02 NIGHTS) – HAVELOCK (SWARAJ DWEEP)(01 NIGHT)', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '10515698171731668875.jpg', '1009143981731668875.jpg,9823644741731668875.jpg,6070301101731668875.jpg', '1', '2024-11-15 11:07:55', '2024-11-15 11:07:55'),
(3, 3, 1, '<p>Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</p>', '45000', '55000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '45000', '55000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '45000', '55000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '3', '1', '3 Nights 4 Days', 'Destination Vacation', 'PORTBLAIR(02 NIGHTS) – HAVELOCK (SWARAJ DWEEP)(01 NIGHT)', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '15586739771731669104.jpg', '4052834811731669104.jpg,18487722501731669104.jpg,482553941731669104.jpg', '1', '2024-11-15 11:11:44', '2024-11-15 11:11:44'),
(4, 1, 2, '<p>Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</p>', '25000', '45000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '25000', '45000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '25000', '45000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '3', '1', '4 Nights 5 Days', 'Destination Vacation', 'PORTBLAIR(02 NIGHTS) – HAVELOCK (SWARAJ DWEEP)(01 NIGHT)', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '17981067921731670241.jpg', '1540392131731670241.png,20013048531731670241.jpg,11834153131731670241.jpg', '1', '2024-11-15 11:30:41', '2024-11-15 11:30:41'),
(5, 1, 3, '<p>Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</p>', '24950', '35000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '24950', '35000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '24950', '35000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '3', '2', '5 Nights6 Days', 'Destination Vacation', 'PORTBLAIR(02 NIGHTS) – HAVELOCK (SWARAJ DWEEP)(01 NIGHT)', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '14222669151731670933.jpg', '13261208331731670933.jpg,15700580241731670933.jpg', '1', '2024-11-15 11:42:13', '2024-11-15 11:42:13'),
(6, 1, 4, '<p>Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</p>', '34950', '45000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '34950', '45000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '34950', '45000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '3', '2', '6 Nights 7 Days', 'Destination Vacation', 'PORTBLAIR(02 NIGHTS) – HAVELOCK (SWARAJ DWEEP)(01 NIGHT)', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '16418872481731671268.jpg', '16029779891731671268.jpg,2900251841731671268.jpg', '1', '2024-11-15 11:47:49', '2024-11-15 11:47:49'),
(7, 2, 2, '<p>Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</p>', '32550', '45000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '32550', '45000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '32550', '45000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '3', '2', '4 Nights 5 Days', 'Destination Vacation', 'PORTBLAIR(02 NIGHTS) – HAVELOCK (SWARAJ DWEEP)(01 NIGHT)', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '17065204641731671727.jpg', '10905670671731671727.jpg,13786125751731671727.jpg,13816561881731671727.jpg', '1', '2024-11-15 11:55:27', '2024-11-15 11:55:27'),
(8, 3, 2, '<p>Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</p>', '10999', '20000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '10999', '20000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '10999', '20000', '<ul class=\"list-unstyled\">\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n<li>Hotel Aparupa</li>\r\n<li>Hotel Grand Paradise</li>\r\n<li>Haywizz</li>\r\n<li>Sundaze Beach resort</li>\r\n<li>Shangri Las</li>\r\n<li>Outback resorts</li>\r\n</ul>', '3', '0', '4 Nights 5 Days', 'Destination Vacation', 'PORTBLAIR(02 NIGHTS) – HAVELOCK (SWARAJ DWEEP)(01 NIGHT)', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '<ul class=\"list-unstyled\">\r\n<li>Hotels (Standard, Luxury, Royale)</li>\r\n<li>Beach resort in Havelock</li>\r\n<li>Cabs</li>\r\n<li>03 Island visit</li>\r\n<li>2 way luxury cruze</li>\r\n<li>All entry tickets</li>\r\n<li>Light and sound show at Cellular Jail</li>\r\n<li>Complimentary Jetski</li>\r\n<li>Breakfast</li>\r\n</ul>', '3196792791731672762.jpg', '10986199331731672762.jpg', '1', '2024-11-15 12:12:42', '2024-11-15 12:12:42');

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
(2, 'Romance package', '13859559731731583838.jpg', '1', '2024-11-14 11:30:38', '2024-11-14 11:30:38'),
(3, 'Group package', '9988906361731667043.jpg', '1', '2024-11-15 10:37:23', '2024-11-15 10:37:23');

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

--
-- Dumping data for table `tbl_package_plans`
--

INSERT INTO `tbl_package_plans` (`id`, `package_id`, `plan_title`, `plan_description`, `status`, `create_at`, `updated_at`) VALUES
(1, '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 07:16:56', '2024-11-15 07:16:56'),
(2, '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 07:16:56', '2024-11-15 07:16:56'),
(3, '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 07:16:56', '2024-11-15 07:16:56'),
(4, '2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 11:24:36', '2024-11-15 11:24:36'),
(5, '2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 11:24:36', '2024-11-15 11:24:36'),
(6, '3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 11:25:01', '2024-11-15 11:25:01'),
(7, '3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 11:25:01', '2024-11-15 11:25:01'),
(8, '4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 11:34:20', '2024-11-15 11:34:20'),
(9, '4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 11:34:20', '2024-11-15 11:34:20'),
(10, '4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ut.', '<p>Lorem ipsum dolor sit amet, porro quisquam lies est, qui dolorem ipsu. Lorem ipsum dolor sit a nui met, porro quisquam. qui dolorem ipsu quia dolor sit amet,consectetur, adipisci velit.</p>', '1', '2024-11-15 11:34:20', '2024-11-15 11:34:20');

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
(1, 'Destination Vacation', '3 Nights 4 Days', '17813107571731583958.jpg', '1', '2024-11-14 11:32:38', '2024-11-14 11:32:38'),
(2, 'Destination Vacation', '4 Nights 5 Days', '15488521371731667628.jpg', '1', '2024-11-15 10:47:08', '2024-11-15 10:47:08'),
(3, 'Destination Vacation', '5 Nights 6 Days', '17147252781731667640.jpg', '1', '2024-11-15 10:47:20', '2024-11-15 10:47:20'),
(4, 'Destination Vacation', '6 Nights 7 Days', '11016783981731668721.jpg', '1', '2024-11-15 11:05:21', '2024-11-15 11:05:21');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_package_category`
--
ALTER TABLE `tbl_package_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_package_plans`
--
ALTER TABLE `tbl_package_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
