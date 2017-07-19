-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2017 at 11:10 PM
-- Server version: 5.7.18-0ubuntu0.16.10.1
-- PHP Version: 7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `app_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `app_author` varchar(11) NOT NULL,
  `app_deadline` datetime NOT NULL,
  `app_status` int(11) NOT NULL,
  `app_prev_approval` int(11) NOT NULL,
  `app_description` text NOT NULL,
  `app_type` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `oblast` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `spv` int(11) NOT NULL,
  `business_builder` int(11) NOT NULL,
  `tse` int(11) NOT NULL,
  `customer_code` int(11) NOT NULL,
  `customer_reg_name` int(11) NOT NULL,
  `trade_category` int(11) NOT NULL,
  `customer_subtype` int(11) NOT NULL,
  `customer_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_id`, `user_id`, `app_date`, `app_author`, `app_deadline`, `app_status`, `app_prev_approval`, `app_description`, `app_type`, `country`, `area`, `region`, `oblast`, `city`, `spv`, `business_builder`, `tse`, `customer_code`, `customer_reg_name`, `trade_category`, `customer_subtype`, `customer_address`) VALUES
(1, 0, '2017-06-04 21:00:00', '2', '2017-06-15 00:00:00', 2, 3, 'lorem ipsum', 1, 1, 23, 233, 33, 12, 44, 33, 33, 33, 33, 33, 33, 33),
(1, 0, '2017-06-04 21:00:00', '2', '2017-06-15 00:00:00', 2, 3, 'lorem ipsum', 1, 1, 23, 233, 33, 12, 44, 33, 33, 33, 33, 33, 33, 33),
(5, 16, '2017-06-04 21:00:00', '16', '2017-06-07 00:00:00', 5, 1, 'kdsjglhklahalhlhlahglahlahlhlkahdfvjksdvjkabvflvb\r\nfvjdfvkadfvbkdvbjkfvbafjkvbfjkb', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 16, '2017-06-04 21:00:00', '16', '2017-06-09 00:00:00', 3, 1, 'fdbklafhafklghmchgmldshmcdh\r\ndcglkhgdsfkjghm\r\ndfcg,dgklj,', 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(7, 16, '2017-06-04 21:00:00', '16', '2017-06-10 00:00:00', 2, 1, 'cbdsfdbdsbgbgbsfb', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `application_type`
--

CREATE TABLE `application_type` (
  `app_id` int(11) NOT NULL,
  `app_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application_type`
--

INSERT INTO `application_type` (`app_id`, `app_type`) VALUES
(1, 'app_type_1'),
(2, 'app_type_2'),
(3, 'app_type_3'),
(4, 'app_type_4'),
(5, 'app_type_5'),
(1, 'app_type_1'),
(2, 'app_type_2'),
(3, 'app_type_3'),
(4, 'app_type_4'),
(5, 'app_type_5');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`) VALUES
(1, 'East'),
(2, 'West'),
(1, 'East'),
(2, 'West'),
(3, 'South'),
(4, 'North'),
(3, 'South'),
(4, 'North');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `areas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `branch_top`
--

CREATE TABLE `branch_top` (
  `branch_id` int(11) NOT NULL,
  `rait_index` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `buss_builders`
--

CREATE TABLE `buss_builders` (
  `builder_id` int(11) NOT NULL,
  `builder_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buss_builders`
--

INSERT INTO `buss_builders` (`builder_id`, `builder_name`) VALUES
(1, 'BB Shostka'),
(2, 'BB Konotop'),
(1, 'BB Shostka'),
(2, 'BB Konotop');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(1, 'Hoholeve'),
(2, 'Pyriatyn'),
(1, 'Hoholeve'),
(2, 'Pyriatyn');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Ukraine'),
(2, 'USA'),
(1, 'Ukraine'),
(2, 'USA'),
(3, 'Iran'),
(4, 'France'),
(5, 'Georgia'),
(6, 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_code` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_reg_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_code`, `customer_name`, `customer_reg_name`, `address`) VALUES
(13800167, 'Magazyn KOLO', 'KOLO MPP', ''),
(13800169, 'Semafor', 'Troianochka-Polisianochka PP', ''),
(13800167, 'Magazyn KOLO', 'KOLO MPP', ''),
(13800169, 'Semafor', 'Troianochka-Polisianochka PP', '');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`) VALUES
(1, 'Novgorod-Siverskyi district'),
(2, 'Pyriatynskyi district'),
(1, 'Novgorod-Siverskyi district'),
(2, 'Pyriatynskyi district');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`) VALUES
(1, 'Poltavskaya'),
(2, 'Chernigovskaya'),
(1, 'Poltavskaya'),
(2, 'Chernigovskaya');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `region_name`) VALUES
(1, 'Poltava'),
(2, 'Kiev'),
(1, 'Poltava'),
(2, 'Kiev');

-- --------------------------------------------------------

--
-- Table structure for table `spv`
--

CREATE TABLE `spv` (
  `spv_id` int(11) NOT NULL,
  `spv_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spv`
--

INSERT INTO `spv` (`spv_id`, `spv_name`) VALUES
(1, 'SPV Ter. NE (Poltava)'),
(2, 'SPV Ter. NE (Sumy)'),
(1, 'SPV Ter. NE (Poltava)'),
(2, 'SPV Ter. NE (Sumy)');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'New'),
(2, 'Inwork'),
(3, 'Rework'),
(4, 'Rejected'),
(5, 'Complited'),
(6, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `trade_categores`
--

CREATE TABLE `trade_categores` (
  `tr_cat_id` int(11) NOT NULL,
  `tr_cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trade_categores`
--

INSERT INTO `trade_categores` (`tr_cat_id`, `tr_cat_name`) VALUES
(1, 'Grosery'),
(2, 'Kiosk'),
(1, 'Grosery'),
(2, 'Kiosk'),
(1, 'Cash & Carry'),
(2, 'Grocery'),
(1, 'Cash & Carry'),
(2, 'Grocery');

-- --------------------------------------------------------

--
-- Table structure for table `tse`
--

CREATE TABLE `tse` (
  `tse_id` int(11) NOT NULL,
  `tse_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tse`
--

INSERT INTO `tse` (`tse_id`, `tse_name`) VALUES
(1, 'TSE Poltava'),
(2, 'TSE Poltava South'),
(1, 'TSE Poltava'),
(2, 'TSE Poltava South');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(2) NOT NULL,
  `function` int(11) NOT NULL,
  `login` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `reg_date`, `lastname`, `firstname`, `middlename`, `email`, `password`, `role_id`, `function`, `login`) VALUES
(1, '2017-05-31 06:41:22', 'Slavko', 'Alex', 'Victorovich', 'slavko.alexandr@gmail.com', '1', 1, 0, '1'),
(2, '2017-05-31 06:41:22', 'Ivanov', 'Ivan', 'Ivanovich', 'i.ivanov@gmail.com', '111', 2, 0, '2'),
(3, '2017-05-31 06:41:22', 'Ivanov', 'Ivan', 'Ivanovich', 'i.ivanov@gmail.com', '111', 2, 0, '2'),
(16, '2017-05-31 06:42:17', 'Ivanivich', 'Nikolay', 'Alrxeev', 'nirol@gmail.com', '55', 2, 2, 'nik_alx'),
(30, '2017-05-31 13:13:32', 'Slacko', 'Nikolay', 'Vvvv', 'slacko.s@gmail.com', '33', 2, 3, 'alex12'),
(39, '2017-05-31 15:20:13', 'Slavko', 'Nikolay', 'Alrxeev', 'slavko.alexandr@gmail.com', '22', 3, 4, 'nik_alx'),
(40, '2017-05-31 15:33:39', 'Slavko', 'Nikolay', 'Alrxeev', 'slavko.alexandr@gmail.com', '22', 3, 4, 'nik_alx'),
(41, '2017-05-31 15:46:30', 'Slacko', 'Nikolay', 'Vict', 'slavko.alexandr@gmail.com', '556', 3, 3, 'nik_alx556');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
