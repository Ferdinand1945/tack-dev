-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2018 at 02:16 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tackapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `menuItems`
--

CREATE TABLE `menuItems` (
  `id` int(11) NOT NULL,
  `menuName` varchar(255) NOT NULL,
  `menuURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuItems`
--

INSERT INTO `menuItems` (`id`, `menuName`, `menuURL`) VALUES
(1, 'Recomendaciones', '#'),
(2, 'Vegetariano', '#'),
(3, 'Bebidas', '#');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_items`
--

CREATE TABLE `shopping_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_items`
--

INSERT INTO `shopping_items` (`id`, `item_name`, `item_desc`, `item_id`, `item_image`, `item_price`, `category`) VALUES
(1, 'Chivito', 'Some Description here.....', 'item_id_1', 'chivito.jpg', '80', 'Recomendaciones'),
(2, 'Pilsen', 'Some Description here.....', 'item_id_2', 'pilsen.jpg', '90', 'Bebidas'),
(3, 'Pizza', 'Some Description here.....', 'item_id_3', 'pizza_trad_alfredo.png', '70', 'Recomendaciones'),
(4, 'Faina', 'Some Description here.....', 'item_id_4', 'maxresdefault.jpg', '50', 'Recomendaciones'),
(5, 'Sushi', 'Some Description here.....', 'item_id_5', 'sushi.jpg', '200', 'Recomendaciones'),
(6, 'Coca cola', 'Some Description here.....', 'item_id_6', 'cocacola_PNG22.png', '20', 'Bebidas'),
(7, 'Veggi', 'Some Description here.....', 'item_id_7', '5871.jpg', '180', 'Vegetariano'),
(8, 'Ensalada', 'Some Description here.....', 'item_id_8', 'ensalada.jpg', '100', 'Vegetariano'),
(9, 'Pasta', 'Some Description here.....', 'item_id_9', 'alimentos-vegetarianos.jpg', '120', 'Vegetariano');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menuItems`
--
ALTER TABLE `menuItems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_items`
--
ALTER TABLE `shopping_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menuItems`
--
ALTER TABLE `menuItems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shopping_items`
--
ALTER TABLE `shopping_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
