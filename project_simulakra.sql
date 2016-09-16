-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2016 at 05:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_simulakra`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Pra Wedding', 'Enabled', '2016-09-16 14:30:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`contact_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`feedback_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`gallery_id` int(12) NOT NULL,
  `project_id` int(12) NOT NULL,
  `type` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `url` varchar(200) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE IF NOT EXISTS `general` (
`general_id` int(11) NOT NULL,
  `general_name` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`general_id`, `general_name`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Youtube Home Page', '', 'Enabled', '2016-09-16 15:42:48', '0000-00-00 00:00:00'),
(2, 'Instagram', '', 'Enabled', '2016-09-16 15:42:48', '0000-00-00 00:00:00'),
(3, 'Facebook', '', 'Enabled', '2016-09-16 15:43:24', '0000-00-00 00:00:00'),
(4, 'Twitter', '', 'Enabled', '2016-09-16 15:43:24', '0000-00-00 00:00:00'),
(5, 'Youtube Channel', '', 'Enabled', '2016-09-16 15:43:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hero_slider`
--

CREATE TABLE IF NOT EXISTS `hero_slider` (
`hero_slider_id` int(11) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
`media_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `file_name`, `status`, `created_at`) VALUES
(4, '09142016183616.jpg', 'Enabled', '2016-09-14 16:36:16'),
(5, '09142016183620.jpg', 'Enabled', '2016-09-14 16:36:20'),
(6, '09142016183623.jpg', 'Enabled', '2016-09-14 16:36:23'),
(7, '09142016183627.jpg', 'Enabled', '2016-09-14 16:36:27'),
(8, '09142016183631.jpg', 'Enabled', '2016-09-14 16:36:31'),
(9, '09142016183636.jpg', 'Enabled', '2016-09-14 16:36:36'),
(10, '09142016183641.jpg', 'Enabled', '2016-09-14 16:36:41'),
(11, '09142016183644.jpg', 'Enabled', '2016-09-14 16:36:44'),
(12, '09162016163152.jpg', 'Enabled', '2016-09-16 14:31:52'),
(13, '09162016163155.jpg', 'Enabled', '2016-09-16 14:31:55'),
(14, '09162016163201.jpg', 'Enabled', '2016-09-16 14:32:01'),
(15, '09162016163205.jpg', 'Enabled', '2016-09-16 14:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`profile_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`project_id` int(11) NOT NULL,
  `category_id` int(12) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_description` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL,
  `image_4` varchar(100) NOT NULL,
  `image_5` varchar(100) NOT NULL,
  `image_6` varchar(100) NOT NULL,
  `image_7` varchar(100) NOT NULL,
  `image_8` varchar(100) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `category_id`, `project_name`, `project_description`, `status`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `image_7`, `image_8`, `video_url`, `created_at`, `updated_at`) VALUES
(5, 9, 'Rheza & Riri', 'Udah putus tapi mau pra wedding aja', 'Enabled', '09162016163152.jpg', '09162016163155.jpg', '09162016163201.jpg', '09162016163205.jpg', '', '', '', '', 'http://simulakra.dev', '2016-09-16 14:32:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
`subscriber_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
 ADD PRIMARY KEY (`general_id`);

--
-- Indexes for table `hero_slider`
--
ALTER TABLE `hero_slider`
 ADD PRIMARY KEY (`hero_slider_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
 ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
 ADD PRIMARY KEY (`subscriber_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `gallery_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
MODIFY `general_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hero_slider`
--
ALTER TABLE `hero_slider`
MODIFY `hero_slider_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
