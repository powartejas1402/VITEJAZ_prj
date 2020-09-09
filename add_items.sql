-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 03:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitejaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_items`
--

CREATE TABLE `add_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` decimal(7,0) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_model_name` varchar(255) NOT NULL,
  `item_color` varchar(255) NOT NULL,
  `item_headphone_type` varchar(255) NOT NULL,
  `item_inline_remote` varchar(255) NOT NULL,
  `item_conn` varchar(255) NOT NULL,
  `item_design` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_items`
--

INSERT INTO `add_items` (`id`, `item_name`, `item_price`, `item_description`, `item_image`, `item_model_name`, `item_color`, `item_headphone_type`, `item_inline_remote`, `item_conn`, `item_design`) VALUES
(1, 'CIRCUM-AURAL PREMIUM WIRELESS HEADPHONES', '36000', 'All the best aspects of French acoustic quality are concentrated in Listen Wireless. These wireless headphones offer hours of intense listening, with their very comfortable and ergonomic ear-cups. High-end Focal sound, in total freedom.', 'images/focal_hpn.jpg', 'FOCAL WIRELESS HEADPHONES', 'Black High Gloss', 'On the ear', 'No', 'Wireless', 'French'),
(2, 'EarPods with 3.5 mm Headphone Plug', '2200', 'Unlike traditional, circular earbuds, the design of the EarPods is defined by the geometry of the ear. Which makes them more comfortable for more people than any other earbud-style headphones.', 'images/earpods.jpg', 'Headphone Plug', 'White Dove', 'In the ear', 'No', 'Wired', 'Circular EarPods'),
(3, 'Audio Technica ATH-M50 Headphones', '18000', 'Exceptional clarity throughout an extended frequency range with deep and accurate bass response', 'images/Audio_Technica_Headphones.jpg', 'ATH-M50X', 'Black', 'Over-ear', 'No', 'Wired', 'Comfort'),
(4, '1More Stylish True Wireless Earbuds', '7000', ' Experience true freedom with the 1MORE Stylish True Wireless Earbuds, enjoy faster transmission, stronger anti-interference, and a more stable connection with Bluetooth 5 enabling & AAC.', 'images/1More-Stylish-wireless-earbuds.jpg', 'Wireless Earbuds', 'Black', 'In the ear', 'Yes', 'Wireless', 'Comfort'),
(5, 'Crusher ANCâ„¢ Personalized, Noise Canceling Wireless Headphones', '15000', 'Behold the most immersive headphones ever made. Crusher ANC combines Adjustable Sensory Bass, Active Noise Cancellation, and Personal Sound to deliver a deeper audio experience thatâ€™s flawlessly tuned for your unique hearing.', 'images/shull_candy_headphone_red.png', 'Crusher ANCâ„¢', 'Deep Red', 'On the ear', 'Yes', 'Bluetooth 5.0', 'Comfort'),
(6, 'Indyâ„¢ Evo True Wireless Earbuds', '6000', 'A simple series of touches control everything directly from your buds. Answer calls, skip tracks, adjust volume, activate an assistant, switch EQ modes, even turn on Ambient Mode to hear more of your surroundingsâ€”all without ever touching your device.', 'images/skull_candy_earpods_green.png', 'Indyâ„¢ Evo', 'Pure Mint', 'In the ear', 'No', 'Wireless', 'Comfort'),
(7, 'Pushâ„¢ Ultra True Wireless Earbuds', '8000', 'Push Ultra earbuds redefine freedom. Freedom to move, sweat, explore and take your music farther than ever. And with up to 6 hours of playtime (and 34 more in the case), thatâ€™s pretty far.', 'images/skull_candy_black_jogg.png', 'Pushâ„¢ Ultra', 'Black', 'In the ear', 'Yes', 'Bluetooth 5', 'Comfort'),
(8, 'Beats Solo3 Bluetooth Headset', '20000', 'With an advanced acoustic platform and noise cancelling, Solo Pro ensures youâ€™ll always have the right sound for the right situation.', 'images/colorful_apple.jpg', ' Solo3', 'Ivory', 'On the ear', 'No', 'Bluetooth ', 'Comfort'),
(9, 'AirPods Pro', '21500', 'AirPods Pro are the only in-ear headphones with Active Noise Cancellation that continuously adapts to the geometry of your ear and the fit of the ear tips â€” blocking out the world so you can focus on what youâ€™re listening to.', 'images/airpods.jpg', 'Airpods-XA12', 'White Dove', 'In the ear', 'No', 'Bluetooth 5.0', 'Comfort');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_items`
--
ALTER TABLE `add_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_items`
--
ALTER TABLE `add_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
