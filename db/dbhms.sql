-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 09:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhms`
--
CREATE DATABASE IF NOT EXISTS `dbhms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbhms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `admin_password` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_password` (`admin_password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(60) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'vorta'),
(2, 'dal'),
(3, 'rice'),
(5, 'chicken item');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(150) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `price` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food_name`, `subcategory_id`, `price`) VALUES
(1, 'Vat', 6, '10'),
(2, 'dal', 5, '50tk'),
(3, 'curry', 7, '80tk'),
(4, 'curry', 7, '80'),
(5, 'vorta', 5, '10tk');

-- --------------------------------------------------------

--
-- Table structure for table `guest_info`
--

DROP TABLE IF EXISTS `guest_info`;
CREATE TABLE IF NOT EXISTS `guest_info` (
  `guest_id` int(11) NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(100) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_type` varchar(11) NOT NULL,
  `guest_sex` varchar(100) NOT NULL,
  `guest_nid` int(11) NOT NULL,
  `guest_phone` int(11) NOT NULL,
  `guest_roomType` varchar(11) NOT NULL,
  `guest_roomnumber` int(11) NOT NULL,
  `guest_address` text NOT NULL,
  PRIMARY KEY (`guest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_info`
--

INSERT INTO `guest_info` (`guest_id`, `guest_name`, `guest_email`, `guest_type`, `guest_sex`, `guest_nid`, `guest_phone`, `guest_roomType`, `guest_roomnumber`, `guest_address`) VALUES
(18, 'sohag', '', 'native', 'male', 0, 0, 'AC', 0, 'dfasffsdaef'),
(19, 'miraj', '', 'native', 'male', 0, 0, 'AC', 0, 'dfdsafsaf'),
(20, 'asssdghg', '', 'native', 'male', 0, 0, 'NON AC', 0, 'asfsdfasd'),
(21, 'sharifa khatun', 's.an@gmail.com', 'internation', 'female', 12345678, 1956470121, 'NON AC', 23, 'H:03 r:12 sec:14 ');

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

DROP TABLE IF EXISTS `oder`;
CREATE TABLE IF NOT EXISTS `oder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `odder_date` date NOT NULL,
  `order_time` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oder_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `price` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

DROP TABLE IF EXISTS `receptionist`;
CREATE TABLE IF NOT EXISTS `receptionist` (
  `receptonist_id` int(11) NOT NULL AUTO_INCREMENT,
  `receptionist_name` varchar(100) NOT NULL,
  `receptionist_picture` varchar(100) NOT NULL,
  `receptionist_email` varchar(100) NOT NULL,
  `receptionist_nid` int(11) NOT NULL,
  `receptionist_phone` int(11) NOT NULL,
  `receptionist_dob` varchar(100) NOT NULL,
  `receptionist_sex` varchar(100) NOT NULL,
  `receptionist_address` text NOT NULL,
  `receptionist_qulification_name` varchar(100) NOT NULL,
  `receptionist_result` varchar(100) NOT NULL,
  PRIMARY KEY (`receptonist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`receptonist_id`, `receptionist_name`, `receptionist_picture`, `receptionist_email`, `receptionist_nid`, `receptionist_phone`, `receptionist_dob`, `receptionist_sex`, `receptionist_address`, `receptionist_qulification_name`, `receptionist_result`) VALUES
(1, 'sohag', '', 'miraj@gmail.com', 123, 123, '123', 'male', 'jdflsfhjdfkjsdf', 'ssc', '3.4'),
(2, 'sohag', '', 'miraj@gmail.com', 123, 123, '123', 'male', 'jdflsfhjdfkjsdf', 'ssc', '3.4'),
(3, 'sohag', '', 'miraj@gmail.com', 123, 123, '123', 'male', 'jdflsfhjdfkjsdf', 'ssc', '3.4'),
(4, 'sharifa khatun', '', 's.an@gmail.com', 123333, 23455, '2333', 'female', 'fsdjdhsjdkl', 'hsc', '4:00'),
(5, 'sharifa khatun', '', 's.an@gmail.com', 123333, 23455, '2333', 'female', 'fsdjdhsjdkl', 'hsc', '4:00'),
(6, 'miraj', 'profile/BF1DDWn.jpg', 'sk@gmail.com', 125, 1256, '6767', 'male', 'adfdhgvj', 'hsc', '2'),
(7, 'nafisa tabassum', 'profile/actor_daniel_radcliffe_music_headphones_player_34058_1366x768.jpg', 'nt55@gmail.com', 2147483647, 195647021, '22/08/1994', 'female', 'house:10 road:12 sector:14', 'hsc', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_number` int(11) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_number`, `room_type`) VALUES
(1, 506, 'NON AC');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcategory_name` varchar(150) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`subcategory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(5, 'shutki', 1),
(6, 'alu', 1),
(7, 'chicken curry', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
