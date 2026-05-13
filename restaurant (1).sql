-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2026 at 10:50 AM
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
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `parent_id`) VALUES
(1, 'Appetizers', NULL),
(2, 'Main Course', NULL),
(3, 'Beverages', NULL),
(4, 'Desserts', NULL),
(5, 'Desi', 2),
(6, 'Chinese', 2),
(7, 'Fast Food', 2),
(8, 'Side Dishes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `description`, `price`, `image`, `category_id`) VALUES
(3, 'Rice Crackers', 'Light and crispy crackers served with seasoning', 250.00, 'images/Crakers.jpg', 1),
(4, 'Fish Tacos', 'Soft tortillas filled with crispy fish and fresh veggies', 250.00, 'images/Fish tacos.jpg', 1),
(5, 'Nachos', 'Crispy tortilla chips topped with melted cheese and sauces', 250.00, 'images/Nachos1.jpg', 1),
(6, 'Chicken Biryani', 'Aromatic rice cooked with spices and chicken', 350.00, 'images/Biryani.jpg', 2),
(7, 'Beef Karahi', 'Traditional spicy beef curry cooked in rich masala', 900.00, 'images/Beef karahi.jpg', 2),
(8, 'Chicken Karahi', 'Spicy chicken curry cooked with tomatoes and spices', 250.00, 'images/chicken Karahi.jpg', 2),
(9, 'Haleem', 'Slow-cooked blend of meat, lentils, and wheat', 300.00, 'images/Haleem.jpg', 2),
(10, 'Nihari', 'Slow-cooked beef stew with rich spices', 600.00, 'images/nihari.jpg', 2),
(11, 'Yakhni Pulao', 'Rice cooked in meat broth with tender meat', 250.00, 'images/yakhni pulao.jpg', 2),
(12, 'Sea Kabab', 'Grilled seafood kebabs with spices', 250.00, 'images/sea kabab.jpg', 2),
(13, 'Chicken Tikka', 'Grilled chicken marinated in spices', 450.00, 'images/tikka.jpg', 2),
(14, 'Naan', 'Soft butter naan freshly baked', 50.00, 'images/naan.jpg', 8),
(15, 'Roti', 'Soft whole wheat flatbread served hot', 50.00, 'images/roti.jpg', 8),
(16, 'Raita', 'Yogurt mixed with herbs and spices', 80.00, 'images/raita.jpg', 8),
(17, 'Salad', 'Fresh vegetable salad', 80.00, 'images/Salad.jpg', 8),
(18, 'Chicken Chow Mein', 'Stir-fried noodles with chicken and vegetables', 500.00, 'images/chicken chowmein.jpg', 6),
(19, 'Chicken Manchurian', 'Crispy chicken balls in tangy sauce', 80.00, 'images/chicken manchurian.jpg', 6),
(20, 'Fried Rice', 'Rice stir-fried with vegetables and sauces', 80.00, 'images/fried rice.jpg', 6),
(21, 'Dumplings', 'Soft dough filled with meat or vegetables', 50.00, 'images/dumplings.jpg', 6),
(22, 'Zinger Burger', 'Crispy chicken burger with sauces', 450.00, 'images/Chicken burger.jpg', 7),
(23, 'Beef Burger', 'Juicy beef patty with fresh toppings', 500.00, 'images/Beef burger.jpg', 7),
(24, 'Loaded Fries', 'Fries topped with cheese and sauces', 250.00, 'images/loaded fries.jpg', 7),
(25, 'Shawarma', 'Chicken wrap with garlic sauce', 250.00, 'images/Shawarma.jpg', 7),
(26, 'Chicken Tikka Pizza', 'Pizza topped with spicy chicken tikka', 250.00, 'images/tikka pizza.jpg', 7),
(27, 'Chicken Fajita', 'Grilled chicken with capsicum and onions', 250.00, 'images/fajita.jpg', 7),
(28, 'Chicken Tandoori Pizza', 'Smoky tandoori chicken pizza', 250.00, 'images/chicken tandoori pizza.jpg', 7),
(29, 'Cheese Pizza', 'Classic cheese-loaded pizza', 250.00, 'images/cheese.jpg', 7),
(30, 'Soft Drinks', 'Cola, Lemon, Orange flavors', 120.00, 'images/soft drink.jpg', 3),
(31, 'Tea', 'Refreshing green tea', 150.00, 'images/tea.jpg', 3),
(32, 'Milk Tea', 'Traditional milk tea with sugar', 150.00, 'images/milk tea.jpg', 3),
(33, 'Cold Coffee', 'Chilled coffee with milk and ice', 150.00, 'images/cold coffee.jpg', 3),
(34, 'Cappuccino', 'Espresso with frothy milk foam', 150.00, 'images/cappuccino.jpg', 3),
(35, 'Latte', 'Smooth coffee with steamed milk', 150.00, 'images/latte.jpg', 3),
(36, 'Juices', 'Fresh fruit juices (mango, apple, orange, pomegranate)', 150.00, 'images/juices.jpg', 3),
(37, 'Slush', 'Ice-blended cold drink', 150.00, 'images/slush.jpg', 3),
(38, 'Shakes', 'Creamy milkshakes with flavors', 150.00, 'images/shakes.jpg', 3),
(39, 'Pastries', 'Soft layered creamy desserts', 300.00, 'images/pastry.jpg', 4),
(40, 'Gulab Jamun', 'Sweet syrup-soaked dessert balls', 200.00, 'images/gulab jamun.jpg', 4),
(41, 'Kheer', 'Traditional rice pudding', 200.00, 'images/kheer.jpg', 4),
(42, 'Gajar Halwa', 'Carrot dessert cooked in milk and sugar', 150.00, 'images/gajarhalwa.jpg', 4),
(43, 'Jalebi', 'Crispy spiral sweet soaked in syrup', 150.00, 'images/Jalebi.jpg', 4),
(44, 'Sheer Khurma', 'Milk dessert with vermicelli and dates', 150.00, 'images/Sheer khurma.jpg', 4),
(45, 'Cookies', 'Fresh baked cookies', 150.00, 'images/cookies.jpg', 4),
(46, 'Donuts', 'Soft fried dough with glaze or chocolate', 150.00, 'images/donut.jpg', 4),
(52, 'Chicken Biryani', 'Aromatic rice cooked with spices and chicken', 350.00, 'images/Biryani.jpg', 5),
(53, 'Beef Karahi', 'Traditional spicy beef curry cooked in rich masala', 900.00, 'images/Beef karahi.jpg', 5),
(54, 'Chicken Karahi', 'Spicy chicken curry cooked with tomatoes and spices', 250.00, 'images/chicken Karahi.jpg', 5),
(55, 'Haleem', 'Slow-cooked blend of meat, lentils, and wheat', 300.00, 'images/Haleem.jpg', 5),
(56, 'Nihari', 'Slow-cooked beef stew with rich spices', 600.00, 'images/nihari.jpg', 5),
(57, 'Yakhni Pulao', 'Rice cooked in meat broth with tender meat', 250.00, 'images/yakhni pulao.jpg', 5),
(58, 'Sea Kabab', 'Grilled seafood kebabs with spices', 250.00, 'images/sea kabab.jpg', 5),
(59, 'Chicken Tikka', 'Grilled chicken marinated in spices', 450.00, 'images/tikka.jpg', 5),
(60, 'Soup', 'Warm and comforting soup made with fresh ingredients', 250.00, 'images/Soup.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `request` text DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `guests`, `date`, `time`, `request`, `status`) VALUES
(1, 'maryam ', 'qwe@gmail.com', '+921234456767', 2, '2026-04-28', '08:35:00', '', 'Confirmed'),
(2, 'maryam ', 'qwe@gmail.com', '+921234456767', 4, '2026-05-01', '21:06:00', '', 'Cancelled'),
(3, 'maryam ', 'qwe@gmail.com', '+921234456767', 5, '2026-05-01', '13:04:00', 'no', 'Confirmed'),
(4, 'nayab', 'qwe@gmail.com', '+921234456767', 4, '2026-04-29', '14:00:00', 'excjhgf', 'Pending'),
(5, 'eman', 'qwe@gmail.com', '+921234456767', 6, '2026-04-29', '23:46:00', 'no', 'Confirmed'),
(6, 'nehan', 'qwe@gmail.com', '+921234456767', 5, '2026-05-11', '09:13:00', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `message`, `rating`, `created_at`) VALUES
(1, 'maryam uzair', 'qwe@gmail.com', 'well done', 4, '2026-04-28 03:32:32'),
(2, 'arfa', 'qas@gmail.com', 'well done', 3, '2026-04-28 07:55:20'),
(3, 'eman', 'eman234@gmail.com', 'Bravo', 4, '2026-04-28 07:59:10'),
(4, 'aimen', 'aimenhaq@gmail.com', 'Excellent ', 5, '2026-04-28 08:00:03'),
(5, 'sara', 'qwe@gmail.com', 'fantastic work\r\n', 4, '2026-04-30 15:39:27'),
(6, 'ali', 'ali@gmail.com', 'keep it up \r\nvery tasty food\r\nfast serving', 5, '2026-04-30 16:15:55'),
(7, 'nayab', 'qwe@gmail.com', 'good', 5, '2026-05-11 03:45:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
