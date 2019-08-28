-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 06:15 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'goal', '<p>Description of achievement</p>\r\n', 'http://localhost/uploads/08-28-2019-02-05-03-pm-01.png', '2019-08-28 17:13:25', NULL, NULL),
(2, 'achieve 1', '<p>Description of achievement</p>\r\n', 'http://localhost/uploads/08-28-2019-02-03-09-pm-02.png', '2019-08-28 17:33:09', NULL, NULL),
(3, 'achieve 2', '<p>Description of achievement</p>\r\n', 'http://localhost/uploads/08-28-2019-02-03-24-pm-03.png', '2019-08-28 17:33:24', NULL, NULL),
(4, 'achieve 3', '<p>Description of achievement</p>\r\n', 'http://localhost/uploads/08-28-2019-02-03-42-pm-04.png', '2019-08-28 17:33:42', NULL, NULL),
(5, 'achieve 5', '<p>Description of achievement</p>\r\n', 'http://localhost/uploads/08-28-2019-02-03-59-pm-05.png', '2019-08-28 17:33:59', NULL, NULL),
(6, 'achieve 6', '<p>Description of achievement</p>\r\n', 'http://localhost/uploads/08-28-2019-02-04-18-pm-06.png', '2019-08-28 17:34:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, 'admin', '2019-08-27 07:16:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text,
  `created_by` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `description` text,
  `image` varchar(191) DEFAULT NULL,
  `content` text,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `created_by`, `created_at`, `description`, `image`, `content`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator Blog11111111111', 'admin', '2019-08-27 22:32:02', 'test description', 'http://localhost/uploads/08-27-2019-08-42-02-pm-slide-01-1920x810.jpg', '<p>Main Content of Blog</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>About Us</h2>\r\n\r\n<p>Printer Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>\r\n\r\n<h2>About Us</h2>\r\n\r\n<p>Printer Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>\r\n\r\n<h2>About Us</h2>\r\n\r\n<p>Printer Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley.nown printer took a galley.nown printer took a galley.</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, NULL),
(2, 'blog 7', 'lirash', '2019-08-27 22:33:17', 'This is from blog 6', 'http://localhost/uploads/08-28-2019-02-19-52-pm-02.jpg', '<p>Main Cntent of Blog</p>\r\n', NULL, NULL),
(3, 'blog 5', 'james goasling', '2019-08-27 22:36:02', 'This is from blog 5', 'http://localhost/uploads/08-28-2019-02-18-29-pm-blog-img1.jpg', '<p>Main Content of Blog</p>\r\n', NULL, NULL),
(4, 'test title', 'admin', '2019-08-27 22:38:17', 'test desc', 'http://localhost/uploads/08-27-2019-08-05-16-pm-1521018917.png', '<p>Test Main Content of Blog</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, NULL),
(5, 'blog 4', 'admin', '2019-08-27 23:22:59', 'This is from blog 4', 'http://localhost/uploads/08-28-2019-02-15-34-pm-05.png', '<p>Main Content of Blog</p>\r\n', NULL, NULL),
(6, 'test bost', 'admin', '2019-08-28 09:18:45', 'to create multilple commands using blog', 'http://localhost/uploads/08-28-2019-05-48-45-am-blog-img3.jpg', '<p>This is my first blog</p>\r\n', NULL, NULL),
(7, 'blog 1', 'admin', '2019-08-28 17:42:25', 'this is from blog', 'http://localhost/uploads/08-28-2019-02-12-25-pm-02.jpg', '<p>Main Content of Blog</p>\r\n', NULL, NULL),
(8, 'blog 2 ', 'Robert', '2019-08-28 17:43:14', 'This is from blog 2', 'http://localhost/uploads/08-28-2019-02-13-14-pm-04.png', '<p>Main Content of Blog</p>\r\n', NULL, NULL),
(9, 'blog 3', 'Richard', '2019-08-28 17:44:04', 'This is from blog 3', 'http://localhost/uploads/08-28-2019-02-14-04-pm-03.png', '<p>Main Content of Blog</p>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_basic`
--

CREATE TABLE `cms_basic` (
  `id` int(11) NOT NULL,
  `purpose` varchar(191) NOT NULL,
  `link` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_basic`
--

INSERT INTO `cms_basic` (`id`, `purpose`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'facebook', 'https://facebook.com', '2019-08-27 12:18:58', '2019-08-27 17:40:34', NULL),
(2, 'twitter', 'https://twitter.com', '2019-08-27 12:19:03', '2019-08-27 17:40:34', NULL),
(3, 'instagram', 'https://instagrame.com', '2019-08-27 12:18:36', '2019-08-27 17:40:34', NULL),
(4, 'title', 'Infiniti', '2019-08-27 12:10:32', '2019-08-27 17:40:32', NULL),
(5, 'address', 'Chennai 600008', '2019-08-27 12:10:32', '2019-08-27 17:40:32', NULL),
(6, 'contact', '987643', '2019-08-27 12:10:32', '2019-08-27 17:40:32', NULL),
(7, 'company_mail', 'info@4678', '2019-08-27 12:10:32', '2019-08-27 17:40:32', NULL),
(8, 'google', 'https://google.com', '2019-08-27 12:18:13', '2019-08-27 17:40:34', NULL),
(9, 'logo', 'http://localhost/uploads/infiniti.png', '2019-08-28 03:31:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `comment` text,
  `commented_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `image` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'product3', '<p>Description of Productadsfa333333333333333</p>\r\n', 'http://localhost/uploads/08-28-2019-12-45-48-pm-01.png', '2019-08-28 01:23:09', '2019-08-27 19:53:09', NULL),
(2, 'asdfasdf', '<p>Description of Productadsfa</p>\r\n', 'http://localhost/uploads/08-27-2019-10-14-43-pm-blog-img3.jpg', '2019-08-28 01:23:56', '2019-08-27 19:53:56', NULL),
(3, 'cycle product', '<p>Description of Product</p>\r\n', 'http://localhost/uploads/08-28-2019-12-44-08-pm-01.png', '2019-08-28 16:14:08', '2019-08-28 10:44:08', NULL),
(4, 'product2', '<p>Description of Product</p>\r\n', 'http://localhost/uploads/08-28-2019-12-44-27-pm-03.png', '2019-08-28 16:14:27', '2019-08-28 10:44:27', NULL),
(5, 'hitech', '<p>Description of Product</p>\r\n', 'http://localhost/uploads/08-28-2019-12-44-41-pm-04.png', '2019-08-28 16:14:41', '2019-08-28 10:44:41', NULL),
(6, 'product 4', '<p>Description of Product</p>\r\n', 'http://localhost/uploads/08-28-2019-12-50-49-pm-05.png', '2019-08-28 16:20:49', '2019-08-28 10:50:49', NULL),
(7, 'product 4', '<p>Description of Product</p>\r\n', 'http://localhost/uploads/08-28-2019-12-58-04-pm-05.png', '2019-08-28 16:28:04', '2019-08-28 10:58:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `image` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'laravel', '<p>second entry</p>\r\n', 'http://localhost/uploads/08-28-2019-11-20-00-am-infiniti-logo_web-01.png', '2019-08-28 12:17:12', NULL, NULL),
(2, 'javascript', '<p>This is from technology</p>\r\n', 'http://localhost/uploads/08-28-2019-11-18-46-am-expenseout-250x250.png', '2019-08-28 14:48:46', NULL, NULL),
(3, 'website', '<p>This is from technology</p>\r\n', 'http://localhost/uploads/08-28-2019-12-11-52-pm-t1.jpg', '2019-08-28 15:41:52', NULL, NULL),
(4, 'macbook', '<p>Description of technology</p>\r\n', 'http://localhost/uploads/08-28-2019-12-23-39-pm-Flying-Macbook-Comms.png', '2019-08-28 15:53:39', NULL, NULL),
(5, 'macbook', '<p>Description of technology</p>\r\n', 'http://localhost/uploads/08-28-2019-12-25-58-pm-Flying-Macbook-Comms.png', '2019-08-28 15:55:58', NULL, NULL),
(6, 'telechips', '<p>Description of technology</p>\r\n', 'http://localhost/uploads/08-28-2019-12-26-17-pm-20190108_085512-TelechipsCES2019_1.png', '2019-08-28 15:56:17', NULL, NULL),
(7, 'home', '<p>Description of technology</p>\r\n', 'http://localhost/uploads/08-28-2019-12-26-41-pm-home_banner.png', '2019-08-28 15:56:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'demouser', 'demouser@gmail.com', '2019-08-28 00:00:00', 'demouser', '2019-08-28 14:44:33', NULL, NULL),
(2, 'king', 'king@king.com', NULL, 'king', '2019-08-28 15:39:24', NULL, NULL),
(3, 'banu', 'banu@gmail.com', NULL, 'banu', '2019-08-28 16:05:50', NULL, NULL),
(4, 'banu', 'banu@gmail.com', NULL, 'banu', '2019-08-28 16:07:56', NULL, NULL),
(5, 'testname', 'testmail@gmail.com', NULL, 'testmail', '2019-08-28 16:12:14', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_basic`
--
ALTER TABLE `cms_basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
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
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cms_basic`
--
ALTER TABLE `cms_basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
