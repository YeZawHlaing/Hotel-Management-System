-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2024 at 07:11 AM
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
-- Database: `hotel_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `payment_code` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `u_name`, `email`, `ph_no`, `payment_code`, `date`, `room_no`) VALUES
(1, 'PhyuSinTun', 'phyu1@gmail.com', '09683776164', '6544675775777853008', '2024-09-07', 103);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'MgMg', 'Mg12@gmail.com', 'hello', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab temporibus nostrum officia. Distinctio, perspiciatis adipisci repudiandae libero quos vel dolorem sunt qui doloribus, reprehenderit, neque assumenda totam possimus laudantium temporibus.   Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2024-09-08'),
(2, 'Yell Zaw', 'yezaw1@gmail.com', 'booking', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab temporibus nostrum officia. Distinctio, perspiciatis adipisci repudiandae libero quos vel dolorem sunt qui doloribus, reprehenderit, neque assumenda totam possimus laudantium temporibus.   Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2024-09-08'),
(3, 'Zin Min Thet', 'zinminthet@gmail.com', 'SRS document', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab temporibus nostrum officia. Distinctio, perspiciatis adipisci', '2024-09-08'),
(4, 'Min Min Thu', 'min12@gmail.com', 'Wedding Celebrating', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab temporibus nostrum officia. Distinctio, perspiciatis adipisci', '2024-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(11) NOT NULL,
  `image` varchar(60) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `image`, `title`, `description`, `date`) VALUES
(1, 'hero4.jpg', 'Unplugged', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab temporibus nostrum officia. Distinctio, perspiciatis adipisci repudiandae libero quos vel dolorem sunt qui doloribus, reprehenderit, neque assumenda totam possimus laudantium temporibus.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab temporibus nostrum officia. Distinctio, perspiciatis adipisci repudiandae libero quos vel dolorem sunt qui doloribus, reprehenderit, neque assumenda totam possimus laudantium temporibus.', '2024-09-08'),
(3, 'hackaton.jpg', 'AI Hackaton', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab temporibus nostrum officia. Distinctio, perspiciatis adipisci repudiandae libero quos vel dolorem sunt qui doloribus, reprehenderit, neque assumenda totam possimus laudantium temporibus.   Lorem ipsum dolor sit amet consectetur adipisicing elit. ', '2024-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_view` varchar(60) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `bed` varchar(20) NOT NULL,
  `adult` int(11) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_view`, `type`, `price`, `bed`, `adult`, `size`) VALUES
(13, 'hero1.jpg', 'Standard', 120, '01 double', 3, '25m'),
(14, 'room1.jpg', 'Single room', 80, '01 king bed', 3, '25m'),
(16, 'room double bed.jpg', 'Double Room', 100, '01 king bed', 2, '25m'),
(17, 'hero2.jpg', 'Special room', 80, '2 king bed', 2, '23m'),
(18, 'breakfast area.jpg', 'fdskfwef', 123, '2 bed', 3, '24m');

-- --------------------------------------------------------

--
-- Table structure for table `room_avaliable`
--

CREATE TABLE `room_avaliable` (
  `av_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1 Active=2 InActive',
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_avaliable`
--

INSERT INTO `room_avaliable` (`av_id`, `room_no`, `status`, `room_id`) VALUES
(1, 101, 0, 14),
(3, 102, 0, 13),
(4, 103, 1, 14),
(6, 104, 0, 16),
(7, 100, 0, 13),
(8, 105, 0, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `room_no` (`room_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_avaliable`
--
ALTER TABLE `room_avaliable`
  ADD PRIMARY KEY (`av_id`),
  ADD UNIQUE KEY `room_no` (`room_no`),
  ADD KEY `Test` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `room_avaliable`
--
ALTER TABLE `room_avaliable`
  MODIFY `av_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `Test1` FOREIGN KEY (`room_no`) REFERENCES `room_avaliable` (`room_no`);

--
-- Constraints for table `room_avaliable`
--
ALTER TABLE `room_avaliable`
  ADD CONSTRAINT `Test` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
