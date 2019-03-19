-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 09:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `old`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id_col` int(11) NOT NULL,
  `name_col` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `date_term`
--

CREATE TABLE `date_term` (
  `id_det` int(11) NOT NULL,
  `id_stu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_ter` int(11) NOT NULL,
  `datesum` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_col` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `majer`
--

CREATE TABLE `majer` (
  `id_m` int(11) NOT NULL,
  `id_col` int(11) NOT NULL,
  `majer_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id_da` int(11) NOT NULL,
  `id_gov` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `mak` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id_per` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `create_at`, `update_at`) VALUES
(1, 'head', '2019-02-19 06:25:51', '0000-00-00 00:00:00'),
(2, 'Student Register ', '2019-03-12 05:38:49', '0000-00-00 00:00:00'),
(3, 'Register mark', '2019-03-12 05:39:32', '0000-00-00 00:00:00'),
(4, 'Query ', '2019-03-12 05:39:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_gov` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_col` int(11) NOT NULL,
  `id_maj` int(11) NOT NULL,
  `loc` text COLLATE utf8_unicode_ci NOT NULL,
  `start` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id_sub` int(11) NOT NULL,
  `id_maj` int(11) NOT NULL,
  `id_trm` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `sub_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id_trm` int(11) NOT NULL,
  `name_ter` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id_trm`, `name_ter`, `create_at`, `update_at`) VALUES
(1, 'المستوى الاول', '2019-02-19 18:17:29', '0000-00-00 00:00:00'),
(2, 'المستوى الثاني ', '2019-02-19 18:17:29', '0000-00-00 00:00:00'),
(3, 'المستوى الثالث', '2019-02-19 18:18:14', '0000-00-00 00:00:00'),
(4, 'المستوى الرابع', '2019-02-19 18:18:14', '0000-00-00 00:00:00'),
(5, 'المستوى الخامس', '2019-02-19 18:18:40', '0000-00-00 00:00:00'),
(6, 'المستوى السادس', '2019-02-19 18:18:40', '0000-00-00 00:00:00'),
(7, 'االمستوى السابع', '2019-02-19 18:19:05', '0000-00-00 00:00:00'),
(8, 'المستوى الثامن ', '2019-02-19 18:19:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `permission` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id_col`);

--
-- Indexes for table `date_term`
--
ALTER TABLE `date_term`
  ADD PRIMARY KEY (`id_det`),
  ADD KEY `id_ter` (`id_ter`),
  ADD KEY `id_stu` (`id_stu`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id_col` (`id_col`);

--
-- Indexes for table `majer`
--
ALTER TABLE `majer`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `id_col` (`id_col`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD KEY `id_da` (`id_da`),
  ADD KEY `id_gov` (`id_gov`),
  ADD KEY `id_sub` (`id_sub`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id_per`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_gov`),
  ADD KEY `id_col` (`id_col`),
  ADD KEY `id_maj` (`id_maj`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_maj` (`id_maj`),
  ADD KEY `id` (`id_trm`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id_trm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id_col` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `date_term`
--
ALTER TABLE `date_term`
  MODIFY `id_det` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `majer`
--
ALTER TABLE `majer`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id_trm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `date_term`
--
ALTER TABLE `date_term`
  ADD CONSTRAINT `date_term_ibfk_1` FOREIGN KEY (`id_ter`) REFERENCES `term` (`id_trm`) ON UPDATE CASCADE,
  ADD CONSTRAINT `date_term_ibfk_2` FOREIGN KEY (`id_stu`) REFERENCES `student` (`id_gov`) ON UPDATE CASCADE;

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id_col`) REFERENCES `college` (`id_col`) ON UPDATE CASCADE;

--
-- Constraints for table `majer`
--
ALTER TABLE `majer`
  ADD CONSTRAINT `majer_ibfk_1` FOREIGN KEY (`id_col`) REFERENCES `college` (`id_col`) ON UPDATE CASCADE;

--
-- Constraints for table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `mark_ibfk_1` FOREIGN KEY (`id_sub`) REFERENCES `subject` (`id_sub`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mark_ibfk_2` FOREIGN KEY (`id_da`) REFERENCES `date_term` (`id_det`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_col`) REFERENCES `college` (`id_col`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`id_maj`) REFERENCES `majer` (`id_m`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`id_maj`) REFERENCES `majer` (`id_m`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`role_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
