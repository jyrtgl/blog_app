-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 09:34 AM
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
-- Database: `blog_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_content` varchar(255) DEFAULT NULL,
  `date_posted` varchar(255) DEFAULT NULL,
  `date_updated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `username`, `post_title`, `post_content`, `date_posted`, `date_updated`) VALUES
(4, 'Sample', 'Title 3', 'Content 3', 'Thursday 15th of December 2022 08:46:36 AM', NULL),
(5, 'Sample', 'Title 2', 'Content 2', 'Thursday 15th of December 2022 08:32:05 AM', NULL),
(6, 'Sample2', 'Title 6', 'Content 6', 'Thursday 15th of December 2022 09:19:48 AM', 'Thursday 15th of December 2022 09:19:48 AM'),
(7, 'Sample2', 'Title 7', 'Create Content', 'Thursday 15th of December 2022 09:19:46 AM', 'Thursday 15th of December 2022 09:19:46 AM'),
(8, 'Sample2', 'Create New Post', 'This post is all about how to create a new post', 'Thursday 15th of December 2022 09:23:42 AM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Sample', 'user1@gmail.com', 'user', '579a2b293c7b6aa5ea71955ce2c91757'),
(2, 'Sample2', 'user2@gmail.com', 'user', '65a81a80d27ab634e9d6afa8ecfb63b7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
