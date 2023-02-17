-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2023 at 08:13 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job-listing`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Web Developer'),
(2, 'Web Designer');

-- --------------------------------------------------------

--
-- Table structure for table `job_list`
--

CREATE TABLE `job_list` (
  `job_id` int(11) NOT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_salery` int(11) NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_list`
--

INSERT INTO `job_list` (`job_id`, `cat_id`, `company_name`, `job_title`, `job_desc`, `job_salery`, `job_location`, `user_contact`, `email_contact`) VALUES
(1, '1', 'WP noman', 'Noman wp', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aperiam consectetur repudiandae nostrum, ad atque quisquam natus distinctio quos nesciunt dolores ipsa dolor esse omnis iusto, laudantium blanditiis, vitae nam?\r\n', 50, 'Dhaka', '0155889966', 'sbnoman@gmail.com'),
(2, '1', 'Abdullah An Noman', 'Wordpress Dev', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aperiam consectetur repudiandae nostrum, ad atque quisquam natus distinctio quos nesciunt dolores ipsa dolor esse omnis iusto, laudantium blanditiis, vitae nam?\r\n', 50, 'Dhaka', '0155889966', 'sbnoman@gmail.com'),
(3, '1', 'Jamal', 'Wordpress Dev', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aperiam consectetur repudiandae nostrum, ad atque quisquam natus distinctio quos nesciunt dolores ipsa dolor esse omnis iusto, laudantium blanditiis, vitae nam?\r\n', 50, 'Dhaka', '0155889966', 'jamal@gmail.com'),
(4, '2', 'Unlocklive IT', 'Wordpress Developer', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without ', 2500, 'Dhaka', '018789', 's@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `job_list`
--
ALTER TABLE `job_list`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_list`
--
ALTER TABLE `job_list`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
