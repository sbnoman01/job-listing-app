-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2023 at 05:12 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job-listing-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_list`
--

CREATE TABLE `job_list` (
  `job_id` int NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_desc` varchar(255) NOT NULL,
  `job_salery` int NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `email_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job_list`
--

INSERT INTO `job_list` (`job_id`, `cat_id`, `company_name`, `job_title`, `job_desc`, `job_salery`, `job_location`, `user_contact`, `email_contact`) VALUES
(1, '1', 'Noman', 'Wordpress Dev', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aperiam consectetur repudiandae nostrum, ad atque quisquam natus distinctio quos nesciunt dolores ipsa dolor esse omnis iusto, laudantium blanditiis, vitae nam?\r\n', 50, 'Dhaka', '0155889966', 'sbnoman@gmail.com'),
(2, '2', 'Abdullah', 'Wordpress Dev', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aperiam consectetur repudiandae nostrum, ad atque quisquam natus distinctio quos nesciunt dolores ipsa dolor esse omnis iusto, laudantium blanditiis, vitae nam?\r\n', 30, 'Dhaka', '0155889966', 'ab@gmail.com'),
(3, '1', 'Jamal', 'Wordpress Dev', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto aperiam consectetur repudiandae nostrum, ad atque quisquam natus distinctio quos nesciunt dolores ipsa dolor esse omnis iusto, laudantium blanditiis, vitae nam?\r\n', 50, 'Dhaka', '0155889966', 'jamal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_list`
--
ALTER TABLE `job_list`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_list`
--
ALTER TABLE `job_list`
  MODIFY `job_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
