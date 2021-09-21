-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 09:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deduplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, 'me.png', '2021-09-05 08:41:13', '2021-09-05 08:41:13'),
(2, 'yo2.pdf', '2021-09-05 08:41:13', '2021-09-05 14:33:21'),
(3, '3327-home.php', '2021-09-05 14:25:44', '2021-09-05 14:25:44'),
(4, '5291-Icew.m4a', '2021-09-05 14:35:19', '2021-09-05 14:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `folder_files`
--

CREATE TABLE `folder_files` (
  `id` int(11) NOT NULL,
  `user_file_id` int(11) NOT NULL,
  `user_folder_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `folder_files`
--

INSERT INTO `folder_files` (`id`, `user_file_id`, `user_folder_id`, `created_at`) VALUES
(1, 1, 1, '2021-09-05 09:17:00'),
(2, 2, 1, '2021-09-05 09:17:00'),
(3, 3, 1, '2021-09-05 14:32:12'),
(4, 4, 1, '2021-09-05 14:32:48'),
(5, 5, 1, '2021-09-05 14:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Archie Thomas', 'archie.thomas@example.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-09-04 22:29:39', '2021-09-04 22:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_files`
--

CREATE TABLE `user_files` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `title` varchar(110) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_files`
--

INSERT INTO `user_files` (`id`, `user_id`, `file_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '12345', '2021-09-05 08:42:50', '2021-09-05 08:42:50'),
(2, 2, 2, '3456789', '2021-09-05 08:42:50', '2021-09-05 08:42:50'),
(3, 2, 3, 'Arrangements to Meet', '2021-09-05 14:32:12', '2021-09-05 14:32:12'),
(4, 2, 3, 'Heuristic Evaluation', '2021-09-05 14:32:48', '2021-09-05 14:32:48'),
(5, 2, 4, 'Pong', '2021-09-05 14:35:19', '2021-09-05 14:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_folders`
--

CREATE TABLE `user_folders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `folder_name` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_folders`
--

INSERT INTO `user_folders` (`id`, `user_id`, `folder_name`, `created_at`) VALUES
(1, 2, 'Jerkyl', '2021-09-05 06:06:59'),
(2, 2, 'Musics', '2021-09-05 06:06:59'),
(3, 2, 'Papper', '2021-09-05 11:16:53'),
(4, 2, 'Super', '2021-09-05 12:07:40'),
(5, 2, 'Super2', '2021-09-05 12:09:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folder_files`
--
ALTER TABLE `folder_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_files`
--
ALTER TABLE `user_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_folders`
--
ALTER TABLE `user_folders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `folder_files`
--
ALTER TABLE `folder_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_files`
--
ALTER TABLE `user_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_folders`
--
ALTER TABLE `user_folders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
