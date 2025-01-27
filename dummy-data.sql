-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 27, 2025 at 06:33 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notnim-yad`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(128) NOT NULL,
  `name` varchar(64) NOT NULL,
  `under12` tinyint(1) NOT NULL,
  `messageId` varchar(128) NOT NULL,
  `ip` varchar(32) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `name`, `under12`, `messageId`, `ip`, `createdAt`) VALUES
('asdas@xzcx.xxz', 'יקיר הזגס', 0, 'miss_you', NULL, '2024-11-03 12:44:51'),
('info@unleashedgallery.com', 'Webra Web Development (Yakir Reznik)', 0, 'it_will_be_good', NULL, '2024-10-31 10:12:41'),
('o1xx105320909@gmail.com', 'יקיר רזניק', 1, 'gave_hand', NULL, '2024-10-31 09:13:48'),
('oxx105320909@gmail.com', 'יקיר רזניק', 0, 'gave_hand', NULL, '2024-10-31 09:07:50'),
('user10@example.com', 'Name10', 0, '', NULL, '2024-02-22 07:02:31'),
('user11@example.com', 'Name11', 0, '', NULL, '2023-12-23 07:02:31'),
('user12@example.com', 'Name12', 0, 'want_you_home', NULL, '2024-09-30 06:02:31'),
('user13@example.com', 'Name13', 0, '', NULL, '2023-12-01 07:02:31'),
('user14@example.com', 'Name14', 0, '', NULL, '2024-03-01 07:02:31'),
('user15@example.com', 'Name15', 1, '', NULL, '2024-05-21 06:02:31'),
('user16@example.com', 'Name16', 1, '', NULL, '2024-05-11 06:02:31'),
('user17@example.com', 'בת אל דוידי', 1, 'miss_you', NULL, '2024-10-23 06:02:31'),
('user18@example.com', 'Name18', 0, '', NULL, '2024-09-13 06:02:31'),
('user19@example.com', 'Name19', 1, '', NULL, '2024-06-29 06:02:31'),
('user1@example.com', 'Name1', 1, '', NULL, '2024-04-07 06:02:31'),
('user20@example.com', 'Name20', 0, '', NULL, '2024-07-30 06:02:31'),
('user21@example.com', 'Name21', 0, '', NULL, '2024-01-07 07:02:31'),
('user22@example.com', 'Name22', 1, '', NULL, '2024-08-03 06:02:31'),
('user23@example.com', 'Name23', 0, '', NULL, '2024-07-22 06:02:31'),
('user24@example.com', 'Name24', 0, 'want_you_home', NULL, '2024-09-29 06:02:31'),
('user25@example.com', 'Name25', 0, '', NULL, '2024-09-01 06:02:31'),
('user26@example.com', 'Name26', 1, '', NULL, '2024-06-26 06:02:31'),
('user27@example.com', 'Name27', 1, '', NULL, '2024-09-11 06:02:31'),
('user28@example.com', 'Name28', 0, '', NULL, '2024-04-28 06:02:31'),
('user29@example.com', 'Name29', 0, '', NULL, '2024-05-10 06:02:31'),
('user2@example.com', 'Name2', 0, '', NULL, '2024-05-05 06:02:31'),
('user30@example.com', 'Name30', 0, '', NULL, '2024-05-18 06:02:31'),
('user31@example.com', 'Name31', 0, '', NULL, '2024-06-14 06:02:31'),
('user32@example.com', 'Name32', 0, 'it_will_be_good', NULL, '2024-08-29 06:02:31'),
('user33@example.com', 'Name33', 0, '', NULL, '2023-12-23 07:02:31'),
('user34@example.com', 'Name34', 1, '', NULL, '2024-01-24 07:02:31'),
('user35@example.com', 'Name35', 0, '', NULL, '2023-11-26 07:02:31'),
('user36@example.com', 'Name36', 1, '', NULL, '2024-01-21 07:02:31'),
('user37@example.com', 'Name37', 0, '', NULL, '2024-06-11 06:02:31'),
('user38@example.com', 'Name38', 1, '', NULL, '2024-05-29 06:02:31'),
('user39@example.com', 'Name39', 1, '', NULL, '2024-03-30 06:02:31'),
('user3@example.com', 'Name3', 0, '', NULL, '2024-08-14 06:02:31'),
('user40@example.com', 'Name40', 0, '', NULL, '2024-06-15 06:02:31'),
('user41@example.com', 'Name41', 0, '', NULL, '2023-12-07 07:02:31'),
('user42@example.com', 'Name42', 1, '', NULL, '2024-02-06 07:02:31'),
('user43@example.com', 'Name43', 0, '', NULL, '2023-12-21 07:02:31'),
('user44@example.com', 'Name44', 0, '', NULL, '2024-01-15 07:02:31'),
('user45@example.com', 'Name45', 0, '', NULL, '2024-06-29 06:02:31'),
('user46@example.com', 'Name46', 0, '', NULL, '2024-07-15 06:02:31'),
('user47@example.com', 'Name47', 1, '', NULL, '2024-03-27 07:02:31'),
('user48@example.com', 'Name48', 1, '', NULL, '2024-02-20 07:02:31'),
('user49@example.com', 'Name49', 1, '', NULL, '2023-12-27 07:02:31'),
('user4@example.com', 'Name4', 1, '', NULL, '2024-03-07 07:02:31'),
('user50@example.com', 'Name50', 1, '', NULL, '2023-12-21 07:02:31'),
('user5@example.com', 'Name5', 0, '', NULL, '2024-05-13 06:02:31'),
('user6@example.com', 'משה כהן', 0, 'gave_hand', NULL, '2024-10-11 06:02:31'),
('user7@example.com', 'Name7', 1, '', NULL, '2024-01-09 07:02:31'),
('user8@example.com', 'Name8', 1, '', NULL, '2023-11-21 07:02:31'),
('user9@example.com', 'Name9', 1, '', NULL, '2024-02-21 07:02:31'),
('yakir.reznik+zzz@gmail.com', '', 0, 'want_you_home', '::1', '2024-11-08 09:14:09'),
('yakir.reznik@gmail.com', 'יקיר רזניק', 0, 'want_you_home', NULL, '2024-10-31 10:18:58'),
('yakir.reznikxzczxcxzc@gmail.com', 'Yakir Reznik', 0, 'want_you_home', '::1', '2024-11-05 06:12:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email_index` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
