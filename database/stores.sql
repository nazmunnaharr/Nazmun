-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 11:47 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



-- Database: `check`
--

-- --------------------------------------------------------

--
   Table structure for `admin`
--
--
CREATE TABLE `admin`
(
`ad_id` int(50) NOT NULL,
`F_Name` varchar(50) NOT NULL,
`L_Name` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,
`mob` int(15) NOT NULL,
`job_title` varchar(30) NOT NULL,
`address` varchar(80) NOT NULL,
`reg_date` TIMESTAMP
);


--
--Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `F_Name`, `L_Name`,`email`,`password`,`mob`,`job_title`,`address`) VALUES
(1830066, 'Mamun-ur','Rashid','mamun@gmail.com','123456','01303364267','Manager','Narayanganj_dhaka'),
(1830067, 'Emon','Alam','emonalam46@gmail.com','456123','01860524943','Employee','Khurnofully_Chittagong');






--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`,`brand`,`quantity`) VALUES
(1, 'code-g1', 2100,'top',10),
(2, 'code-g2', 4000,'cross stitch',10),
(3, 'code-g3', 3100,'nishat',15),
(4, 'code-g4', 3400,'Bareeze',12),
(13, 'code-b1', 2100,'Raymond',15),
(14, 'code-b2', 1800,'Bangali Babu',12),
(15, 'code-b3', 1900,'hindibazar',10),
(16, 'code-b4', 1750,'hussain',5),
(25, 'code-a1', 40000,'DSLR',10),
(26, 'code-a2', 37000,'DSLR-2',6),
(27, 'code-a3', 35000,'DSLR-3',5),
(28, 'code-a4', 32000,'DSLR-4',5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Naser Akber', 'naser@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '01303353648', 'Chittagong', 'Rahattarpul'),
(2, 'Mamun-ur Rashid', 'mamun14@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '01305343659', 'DHAKA', 'Narayangonj');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 2, 3, 'Added to cart'),
(8, 2, 4, 'Added to cart'),
(9, 2, 5, 'Added to cart'),
(10, 2, 11, 'Added to cart'),
(11, 1, 9, 'Added to cart'),
(12, 1, 2, 'Added to cart'),
(13, 1, 8, 'Added to cart'),
(14, 1, 2, 'Confirmed'),
(18, 2, 11, 'Added to cart'),
(20, 2, 5, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

