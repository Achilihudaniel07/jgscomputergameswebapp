-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2024 at 06:56 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeffreygbemudu_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `unique_id`, `product`, `product_id`, `price`, `status`) VALUES
(12, 'customer1', '747yyrtwvc', 'call of duty', '1049319719', '10', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'IsaacChukwudulue', 'zikkyychukwudulue@gmail.com', 'call of duty - $10\r\n', '15/05/2024'),
(2, 'DanielAchilihu', 'achilihudaniel53@gmail.com', 'call of duty - $10\r\n', '16/05/2024'),
(4, 'DanielAchilihu', 'achilihudaniel53@gmail.com', 'call of duty - $10\r\n', '19/05/2024');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `op_a` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `email`, `phone`, `unique_id`, `title`, `description`, `filename`, `type`, `size`, `status`, `brand`, `specification`, `op_a`, `price`, `product_id`, `category`, `tag`, `date`) VALUES
(1, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'GOD OF WAR', 'lorem ipsium', '', 'PS4', '', '', '', '', '', '45', '123456', 'Single Player', 'Mythology', '13/05/2024'),
(2, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'call of duty', 'This is a mobile army game\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Est, voluptas sed quam aliquam odit aut explicabo maxime quibusdam at eos unde architecto minima, adipisci nihil laborum. Aspernatur sint deserunt alias!', 'products/830946crop.jpg', 'PS4', '28GB', 'available', 'EA Sports', 'Device', 'Computer', '10', '1049319719', 'Multi-Player', 'War', '13-05-24'),
(3, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'weer', 'hsdhfjfjf', 'products/952763download (1).jpg', 'PS4', '28GB', 'available', 'EA Sports', 'Device', 'Computer', '50', '1497368198', 'Multi-Player', 'War', '13-05-24'),
(20, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/574368jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '618845911', 'Single player', 'War', '14-05-24'),
(19, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/845732jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '184576586', 'Single player', 'War', '14-05-24'),
(18, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/931417jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '304115345', 'Single player', 'War', '14-05-24'),
(17, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/196437jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '1301322665', 'Single player', 'War', '14-05-24'),
(16, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/704794jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '523891383', 'Single player', 'War', '14-05-24'),
(15, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/871735jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '529419539', 'Single player', 'War', '14-05-24'),
(14, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/581629jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '1831622974', 'Single player', 'War', '14-05-24'),
(13, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/885398jeff11.jpg', 'k', 'u', 'available', 'EA Sports', 'Device', 'Computer', '8', '1530587352', 'Single player', 'War', '14-05-24'),
(21, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/304455jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '1080549399', 'Single player', 'War', '14-05-24'),
(22, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/934919jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '175785516', 'Single player', 'War', '14-05-24'),
(23, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/214044jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '235390824', 'Single player', 'War', '14-05-24'),
(25, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/373393jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '1598359027', 'Single player', 'War', '14-05-24'),
(27, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/894575jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '1864262895', 'Single player', 'War', '14-05-24'),
(28, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/166123jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '526593575', 'Single player', 'War', '14-05-24'),
(29, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'o2', 'asdghjhgjhgyyyyyyyuuuiikh', 'products/214581jeff11.jpg', 'kf', 'uvrff', 'available', 'EA Sports', 'Device', 'Computer', '83', '66907131', 'Single player', 'War', '14-05-24'),
(30, 'Chukwudulue Isaac', 'zikkyychukwudulue@gmail.com', '08156095945', '9pF0jVbgKu', 'DOTA 2', 'DOTA DOTA DOTA', 'products/914928categories-02.jpg', 'PC', '20GB', 'available', 'EA Sports', 'Device', 'Computer', '54', '333538893', 'Single player', 'War', '14-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phone`, `unique_id`, `date`, `position`) VALUES
(1, 'Chukwudulue Isaac', 'Isaac', 'zikkyychukwudulue@gmail.com', '123a', '08156095945', '9pF0jVbgKu', '13/05/2024', 'admin'),
(2, 'admin', 'admin', 'admin', 'admin', '00001111', '12wyet4567', '13/05/2024', 'admin'),
(3, 'customer1', 'customer1', 'customer1', 'customer1', '0000111122', '747yyrtwvc', '13/05/2024', 'user'),
(4, 'customer2', 'customer2', 'customer2', 'customer2', '000011112233', '747yjhsbj', '13/05/2024', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
