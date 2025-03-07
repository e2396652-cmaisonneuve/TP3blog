-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2025 at 01:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp1blog`
--
CREATE DATABASE IF NOT EXISTS `tp1blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tp1blog`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `users_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `users_id`, `categories_id`) VALUES
(3, 'Trump says 25% tariff on most Canadian goods will take effect March 4', 'U.S. President Donald Trump says he will end a month-long pause and slap a 25 per cent tariff on most Canadian goods as of March 4, claiming he needs to take action because \"drugs are still pouring into our country\" despite evidence that a crackdown at the border is working.', '2025-01-01', 11, 5),
(4, 'Once declared eradicated, measles is surging in parts of Canada', 'Measles was declared eradicated in Canada in 1998, but with vaccination rates dropping, new cases are surging. 95 people have been infected in just the first two months of this year, compared to 147 for all of 2025. Measles was declared eradicated in Canada in 1998, but with vaccination rates dropping, new cases are surging. 95 people have been infected in just the first two months of this year, compared to 147 for all of 2025.', '2025-03-06', 13, 9),
(5, 'American scientists say their work is under attack and ask Canadians for help', 'While fielding questions at the front of a packed conference room in Boston, Gretchen Goldman checks her phone. She\'s waiting to find out if her husband will be fired in the latest round of layoffs of federal scientists under U.S. President Donald Trump. A month ago, Goldman voluntarily left her own government job in D.C. as climate change research and technology director at the Department of Transportation. She saw the writing on the wall. Goldman is now the president of an advocacy group, the Union of Concerned Scientists, and can speak out while many of her former colleagues cannot over fear of losing their jobs. \"Science is under attack in the United States,\" she said in an interview after the panel. \"I think we\'re seeing a lot of fear and people not feeling they can speak up.\"', '2025-03-05', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Music'),
(2, 'TV'),
(3, 'Sports'),
(4, 'Science'),
(5, 'Politics'),
(6, 'Movies'),
(7, 'Travel'),
(8, 'Economy'),
(9, 'Health'),
(10, 'Tech');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `users_id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `message`, `date`, `users_id`, `articles_id`) VALUES
(3, 'Tabarnak!', '2025-01-01', 13, 3),
(4, 'I think we\'re seeing a lot of fear and people not feeling they can speak up', '2025-03-06', 14, 5),
(5, 'Science is under attack in the United States', '2025-03-06', 15, 5);

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

DROP TABLE IF EXISTS `dashboard`;
CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `adressIP` varchar(255) DEFAULT NULL,
  `dateTime` datetime DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

DROP TABLE IF EXISTS `privilege`;
CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `privilege` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `privilege`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'Subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `privilege_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `privilege_id`) VALUES
(11, 'admin', '$2y$10$cnhV7dK7Ib1y23A1ofC9.uBiZYM9y2fTtPzuRnLXgxp6hp0LSfeOe', 'admin', 'admin@admin.com', 1),
(12, 'editor', '$2y$10$sOY7r3mOe.2h4tZypXw/3OVW1Xg4Kr6bA5dFqrBZNCD/uPBcewDbm', 'editor', 'editor@gmail.com', 2),
(13, 'subscriber', '$2y$10$KfNOg4lFK4Qpd4XuqfdUZeVNpxn5X0hdj8y.i2ncfUJHg.JL22tYa', 'subscriber', 'subscriber@gmail.com', 3),
(14, 'peter123', '$2y$10$oIFOQsqvoPbcHbUoV.mNn.Cwp2rPCFbEUo1nTo4Rpo6XIunIXGiu6', 'Peter', 'peter@gmail.com', 3),
(15, 'nananeri', '$2y$10$Jg5qgAz1MFuC.6WAJraEoevS06dopA6JbWp1zqa0Njl225XQslXpG', 'Mariana', 'nananeri@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_articles_users_idx` (`users_id`),
  ADD KEY `fk_articles_categories1_idx` (`categories_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_users1_idx` (`users_id`),
  ADD KEY `fk_comments_articles1_idx` (`articles_id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_privilege1_idx` (`privilege_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_articles_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_articles1` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comments_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_privilege1` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
