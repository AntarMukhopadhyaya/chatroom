-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2020 at 11:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `name`, `country`, `date`, `message`) VALUES
(1, 'arunmukhopadhyaya@gmail.com', 'Antar', 'India', '2020-03-25 21:50:59', 'Good'),
(2, 'helloworld@gmail.com', 'Antar', 'India', '2020-03-25 21:57:52', 'Loveyou'),
(3, 'apk-center@gmail.com', 'aNTAR', 'andaman', '2020-03-25 22:17:04', 'Hello'),
(4, 'apk-center@gmail.com', 'aNTAR', 'andaman', '2020-03-25 22:17:43', 'Hello'),
(5, 'apk-center@gmail.com', 'aNTAR', 'andaman', '2020-03-25 22:19:28', 'Hello'),
(6, 'apk-center@gmail.com', 'aNTAR', 'andaman', '2020-03-25 22:22:58', 'Hello'),
(7, 'apk-center@gmail.com', 'aNTAR', 'andaman', '2020-03-25 22:23:07', 'Hello'),
(8, 'apk-center@gmail.com', 'aNTAR', 'andaman', '2020-03-25 22:23:14', 'Hello'),
(9, 'apk-center@gmail.com', 'aNTAR', 'andaman', '2020-03-25 22:23:56', 'Hello'),
(10, 'antar@gmail.com', 'antar2', 'India', '2020-03-26 18:33:50', 'Good site'),
(11, 'apk-center@gmail.com', 'Antar', 'MMwww', '2020-03-26 21:34:01', 'wdwdwefdwefd');

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `sno` int(11) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`sno`, `msg`, `room`, `ip`, `stime`) VALUES
(57, 'hello', 'admin', '::1', '2020-03-25 15:08:26'),
(58, 'ei bhai', 'admin', '::1', '2020-03-25 15:08:51'),
(59, 'Koi hai', 'admin', '::1', '2020-03-25 15:09:27'),
(60, 'Hiii antar', 'admin', '::1', '2020-03-25 15:10:20'),
(61, 'Bol', 'admin', '::1', '2020-03-25 15:10:48'),
(62, 'Ki choltesei', 'admin', '::1', '2020-03-25 15:10:57'),
(63, 'vondu ram', 'admin', '::1', '2020-03-25 15:13:32'),
(64, 'Hello', 'admin', '::1', '2020-03-25 15:13:37'),
(65, '', 'admin', '::1', '2020-03-25 15:13:38'),
(66, 'Thik achei', 'admin', '::1', '2020-03-25 15:13:50'),
(67, '', 'admin', '::1', '2020-03-25 15:18:52'),
(68, '', 'admin', '::1', '2020-03-25 15:18:57'),
(69, 'Hi hi', 'admin', '::1', '2020-03-25 15:33:21'),
(70, 'Hi hi', 'admin', '::1', '2020-03-25 15:33:27'),
(71, 'HELLO', 'admin', '::1', '2020-03-25 15:35:58'),
(72, 'KI KOROS', 'admin', '::1', '2020-03-25 15:36:08'),
(79, 'Hello', 'hello123', '::1', '2020-03-25 20:05:05'),
(87, 'Hello', 'anhhdeefef', '::1', '2020-03-26 19:57:11'),
(93, 'Hello', 'aasasasa', '::1', '2020-04-02 21:37:13'),
(94, 'Hell', 'aasasasa', '::1', '2020-04-02 21:38:20'),
(95, 'hjewjj', 'aasasasa', '::1', '2020-04-02 21:38:54'),
(96, 'boi]', 'aasasasa', '::1', '2020-04-02 21:39:45'),
(101, 'Hey man', 'adadadadadad', '::1', '2020-04-02 21:54:02'),
(102, 'How are you ', 'adadadadadad', '::1', '2020-04-02 21:54:07'),
(103, 'i Heard tha you are having s*x', 'adadadadadad', '::1', '2020-04-02 21:54:25'),
(104, 'oho', 'adadadadadad', '::1', '2020-04-02 21:54:31'),
(105, 'adada', 'adadadadadad', '::1', '2020-04-02 21:54:43'),
(106, '<script>alert(\"kutta hai tu\")</script>', 'adadadadadad', '::1', '2020-04-02 21:55:17'),
(107, '<script>alert(\"I am an alert box!\");</script>', 'adadadadadad', '::1', '2020-04-02 21:56:14'),
(108, '<?php echo \"Helo world\" ?>', 'adadadadadad', '::1', '2020-04-02 21:56:36'),
(109, 'CREATE DATABASE databasename;', 'adadadadadad', '::1', '2020-04-02 21:57:52'),
(110, 'aadadad', 'aadadadad', '::1', '2020-04-03 20:19:33'),
(111, 'hello', 'adadadadadadadadad', '::1', '2020-04-03 21:14:12'),
(112, 'hello', 'adadadadadadadadad', '::1', '2020-04-03 21:14:12'),
(113, 'adadad', 'adadadadadadadadad', '::1', '2020-04-03 21:14:19'),
(114, 'adadad', 'adadadadadadadadad', '::1', '2020-04-03 21:14:19'),
(125, 'Hello', 'dadadadadad', '::1', '2020-04-04 22:32:04'),
(126, 'adad', 'dadadadadad', '::1', '2020-04-04 22:32:23'),
(127, 'Haha', 'Danav', '::1', '2020-04-04 22:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `sno` int(11) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`sno`, `roomname`, `stime`) VALUES
(1, 'Hello', '2020-03-24 15:46:55'),
(2, 'Antar', '2020-03-24 15:56:01'),
(3, 'ddd', '2020-03-24 15:58:49'),
(4, 'adad', '2020-03-24 16:09:33'),
(6, 'adadaddaad', '2020-03-24 16:11:31'),
(7, 'antar123', '2020-03-25 13:12:45'),
(8, 'antartwdw', '2020-03-25 14:27:21'),
(14, 'hello123', '2020-03-25 19:58:46'),
(19, 'anhhdeefef', '2020-03-26 19:57:04'),
(20, 'whdiwhdiwhd', '2020-03-26 21:22:25'),
(23, 'aasasasa', '2020-04-02 21:37:07'),
(28, 'adadadadadad', '2020-04-02 21:53:57'),
(29, 'adadasdadad', '2020-04-03 20:02:34'),
(30, 'adadadadad', '2020-04-03 20:18:44'),
(31, 'aadadadad', '2020-04-03 20:19:26'),
(33, 'adadadadadadadadad', '2020-04-03 20:38:03'),
(34, 'adadadad', '2020-04-04 14:38:26'),
(36, 'dadadadadad', '2020-04-04 22:20:45'),
(37, 'Danav', '2020-04-04 22:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `date time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `upassword`, `date time`) VALUES
(1, 'admin', 'antar', '2020-04-05 12:37:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
