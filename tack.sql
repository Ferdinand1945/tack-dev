-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 02 nov 2018 kl 17:21
-- Serverversion: 5.7.24-0ubuntu0.18.04.1
-- PHP-version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `tack`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `Bares`
--

CREATE TABLE `Bares` (
  `Nombre` text NOT NULL,
  `Codigo` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla con los bares del sistema';

--
-- Dumpning av Data i tabell `Bares`
--

INSERT INTO `Bares` (`Nombre`, `Codigo`, `logo`) VALUES
('La Tortuguita', 1, ''),
('Hey Chop', 2, ''),
('Shannon', 3, '');

-- --------------------------------------------------------

--
-- Tabellstruktur `categorias`
--

CREATE TABLE `categorias` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `categorias`
--

INSERT INTO `categorias` (`codigo`, `nombre`) VALUES
(1, 'Tragos'),
(2, 'Recomendaciones'),
(3, 'Cafe'),
(4, 'Postre'),
(5, 'Soda'),
(6, 'Vegetariano'),
(7, 'Bebidas'),
(8, 'Pizzas'),
(9, 'Empanadas');

-- --------------------------------------------------------

--
-- Tabellstruktur `contenidoPedidos`
--

CREATE TABLE `contenidoPedidos` (
  `codigoContenido` int(11) NOT NULL,
  `codigoPedido` varchar(255) NOT NULL COMMENT 'codigo de tabla Pedidos',
  `codigoProducto` int(11) NOT NULL COMMENT 'codigo de Producto',
  `cantidad` int(11) NOT NULL COMMENT 'cantidad de "codigo de Producto" de este pedido'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `contenidoPedidos`
--

INSERT INTO `contenidoPedidos` (`codigoContenido`, `codigoPedido`, `codigoProducto`, `cantidad`) VALUES
(1, '7', 9, 3),
(2, '7', 11, 3),
(3, '8', 9, 3),
(4, '8', 11, 3),
(5, '10', 5, 100),
(6, '11', 5, 100),
(7, '12', 9, 1),
(8, '12', 11, 1),
(9, '12', 12, 2),
(10, '13', 19, 1),
(11, '14', 7, 3),
(12, '14', 11, 1),
(13, '15', 7, 1),
(14, '15', 8, 2),
(15, '15', 10, 1),
(16, '15', 12, 1),
(17, '16', 7, 1),
(18, '16', 12, 2),
(19, '16', 19, 3),
(20, '19', 7, 55),
(21, '19', 8, 25),
(22, '20', 7, 55),
(23, '20', 8, 25),
(24, '23', 7, 111),
(25, '23', 8, 222),
(26, '23', 9, 333),
(27, '23', 10, 444),
(28, '23', 11, 555),
(29, '23', 12, 666),
(30, '23', 19, 777),
(31, '24', 8, 1),
(32, '26', 1, 1),
(33, '27', 7, 2),
(34, '28', 5, 1),
(35, '28', 2, 1),
(36, '28', 4, 2),
(37, '29', 8, 2),
(38, '30', 7, 10),
(39, '31', 9, 3),
(40, '31', 11, 2),
(41, '31', 19, 1),
(42, '37', 1, 1),
(43, '37', 2, 2),
(44, '37', 3, 3),
(45, '38', 1, 1),
(46, '38', 2, 1),
(47, '39', 4, 1),
(48, '39', 8, 1),
(49, '40', 1, 2),
(50, '40', 3, 1),
(51, '40', 4, 1),
(52, '40', 5, 4),
(53, '41', 3, 2),
(54, '41', 2, 1),
(55, '41', 6, 1),
(56, '41', 8, 1),
(57, '42', 1, 1),
(58, '42', 3, 3),
(59, '51', 7, 1),
(60, '51', 5, 3),
(61, '51', 3, 1),
(62, '51', 6, 1),
(63, '51', 10, 1),
(64, '52', 10, 1),
(65, '53', 3, 1),
(66, '53', 1, 1),
(67, '54', 6, 1),
(68, '54', 2, 1),
(69, '55', 6, 2),
(70, '55', 7, 1),
(71, '55', 8, 1),
(72, '56', 2, 1),
(73, '56', 5, 1),
(74, '57', 2, 2),
(75, '57', 5, 3),
(76, '58', 2, 2),
(77, '58', 5, 3),
(78, '59', 2, 1),
(79, '59', 3, 1),
(80, '59', 4, 1),
(81, '60', 1, 1),
(82, '60', 5, 1),
(83, '61', 2, 1),
(84, '61', 5, 1),
(85, '62', 5, 1),
(86, '62', 2, 2),
(87, '63', 1, 1),
(88, '63', 2, 1),
(89, '66', 2, 1),
(90, '67', 2, 1),
(91, '67', 3, 1),
(92, '67', 4, 1),
(93, '67', 5, 1),
(94, '68', 4, 1),
(95, '68', 1, 1),
(96, '68', 2, 1),
(97, '68', 3, 1),
(98, '69', 2, 1),
(99, '69', 8, 1),
(100, '69', 1, 4),
(101, '69', 5, 3),
(102, '70', 11, 2),
(103, '71', 3, 1),
(104, '71', 7, 2),
(105, '71', 2, 2),
(106, '72', 7, 1),
(107, '73', 1, 3),
(108, '74', 20, 1),
(109, '74', 23, 1),
(110, '75', 40, 1),
(111, '75', 22, 1),
(112, '75', 28, 1),
(113, '76', 1, 1),
(114, '76', 33, 1),
(115, '77', 2, 1),
(116, '77', 7, 1),
(117, '78', 20, 2),
(118, '78', 24, 1),
(119, '78', 2, 1),
(120, '78', 28, 3),
(121, '79', 20, 1),
(122, '79', 2, 1),
(123, '79', 3, 1),
(124, '79', 43, 1),
(125, '80', 3, 1),
(126, '80', 4, 1),
(127, '81', 1, 1),
(128, '95', 45, 1),
(129, '96', 46, 1),
(130, '96', 50, 1),
(131, '96', 28, 1),
(132, '97', 1, 1),
(133, '97', 5, 1),
(134, '98', 2, 1),
(135, '98', 45, 1),
(136, '98', 53, 1),
(137, '98', 52, 1),
(138, '99', 28, 1),
(139, '99', 29, 1),
(140, '99', 30, 1),
(141, '99', 31, 1),
(142, '100', 1, 1),
(143, '100', 2, 1),
(144, '101', 38, 1),
(145, '101', 39, 1),
(146, '101', 1, 1),
(147, '102', 35, 1),
(148, '102', 37, 1),
(149, '104', 2, 1),
(150, '104', 1, 3),
(151, '105', 6, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `menuItems`
--

CREATE TABLE `menuItems` (
  `id` int(11) NOT NULL,
  `menuName` varchar(255) NOT NULL,
  `menuURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `menuItems`
--

INSERT INTO `menuItems` (`id`, `menuName`, `menuURL`) VALUES
(1, 'Recomendaciones', '#'),
(2, 'Vegetariano', '#'),
(3, 'Bebidas', '#'),
(4, 'Pizzas', '#'),
(5, 'Empanadas', '#');

-- --------------------------------------------------------

--
-- Tabellstruktur `Pedidos`
--

CREATE TABLE `Pedidos` (
  `codigoPedido` int(11) NOT NULL COMMENT 'codigo autogenerado del pedido',
  `codigoBar` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `mesa` varchar(40) NOT NULL,
  `tipoPedido` char(1) NOT NULL COMMENT 'M = mozo, P = pedido, C = cuenta',
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `Pedidos`
--

INSERT INTO `Pedidos` (`codigoPedido`, `codigoBar`, `estado`, `mesa`, `tipoPedido`, `hora`) VALUES
(7, 2, 0, '6', 'P', '2018-10-28 18:27:06'),
(8, 2, 0, '6', 'P', '2018-10-28 18:27:06'),
(10, 1, 0, '3', 'P', '2018-10-28 21:10:28'),
(11, 1, 0, '3', 'P', '2018-10-28 21:10:28'),
(12, 2, 0, '2', 'P', '2018-10-28 18:27:06'),
(13, 2, 0, '6', 'P', '2018-10-28 18:27:06'),
(14, 2, 0, '9', 'P', '2018-10-28 18:27:06'),
(15, 2, 0, '6', 'P', '2018-10-28 18:27:06'),
(16, 2, 0, '9', 'P', '2018-10-28 18:27:06'),
(17, 2, 0, '4', 'M', '2018-10-28 18:27:06'),
(18, 2, 0, '5', 'C', '2018-10-28 18:27:06'),
(19, 2, 0, '6', 'P', '2018-10-28 18:27:06'),
(20, 2, 0, '6', 'P', '2018-10-28 18:27:06'),
(21, 2, 0, '3', 'M', '2018-10-28 18:27:06'),
(22, 2, 0, '3', 'C', '2018-10-28 18:27:06'),
(23, 2, 0, '7', 'P', '2018-10-28 18:27:06'),
(24, 2, 0, '8', 'P', '2018-10-28 18:27:06'),
(25, 2, 0, '2', 'P', '2018-10-28 18:27:06'),
(26, 1, 0, '6', 'P', '2018-10-28 21:10:28'),
(27, 2, 0, '6', 'P', '2018-10-28 18:27:06'),
(28, 1, 0, '9', 'P', '2018-10-28 21:10:28'),
(29, 2, 0, '2', 'P', '2018-10-28 18:27:06'),
(30, 2, 0, '6', 'P', '2018-10-28 18:27:06'),
(31, 2, 0, '6', 'P', '2018-10-28 18:27:06'),
(32, 2, 0, '1', 'P', '2018-10-28 18:27:06'),
(33, 2, 0, '1', 'P', '2018-10-28 18:27:06'),
(34, 2, 0, '1', 'P', '2018-10-28 18:27:06'),
(35, 2, 0, '1', 'P', '2018-10-28 18:27:06'),
(36, 2, 0, '1', 'P', '2018-10-28 18:27:06'),
(37, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(38, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(39, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(40, 2, 0, '5', 'P', '2018-10-28 21:10:28'),
(41, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(42, 2, 0, '5', 'P', '2018-10-28 21:10:28'),
(43, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(44, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(45, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(46, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(47, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(48, 2, 0, '1', 'P', '2018-10-28 21:10:28'),
(49, 3, 0, '1', 'P', '2018-10-28 21:10:28'),
(50, 3, 0, '1', 'P', '2018-10-28 21:10:28'),
(51, 3, 0, '1', 'P', '2018-10-28 21:10:28'),
(52, 3, 0, '1', 'P', '2018-10-28 21:10:28'),
(53, 3, 0, '1', 'P', '2018-10-28 21:10:28'),
(54, 2, 0, '1', 'P', '2018-10-30 17:02:01'),
(55, 2, 0, '1', 'P', '2018-10-30 16:57:35'),
(56, 2, 0, '1', 'P', '2018-10-30 17:07:01'),
(57, 2, 0, '1', 'P', '2018-10-30 17:07:11'),
(58, 2, 0, '1', 'P', '2018-10-30 19:16:09'),
(59, 2, 0, '1', 'P', '2018-10-30 17:27:51'),
(60, 2, 0, '1', 'P', '2018-10-30 17:27:57'),
(61, 2, 0, '1', 'P', '2018-10-30 19:16:14'),
(62, 2, 0, '3', 'P', '2018-10-30 23:47:41'),
(63, 2, 0, '4', 'P', '2018-10-30 23:15:29'),
(64, 3, 0, '6', 'M', '2018-10-31 02:10:55'),
(65, 1, 1, '2', 'C', '2018-10-29 13:37:20'),
(66, 2, 0, '1', 'P', '2018-10-30 17:07:17'),
(67, 2, 0, '7', 'P', '2018-10-30 22:28:19'),
(68, 2, 0, '6', 'P', '2018-10-30 23:46:16'),
(69, 2, 1, '6', 'P', '2018-10-30 23:48:11'),
(70, 3, 1, '1', 'P', '2018-10-31 02:09:55'),
(71, 2, 0, '1', 'P', '2018-10-31 13:08:17'),
(72, 2, 1, '8', 'P', '2018-10-31 16:37:19'),
(73, 2, 1, '8', 'P', '2018-10-31 17:52:42'),
(74, 2, 1, '1', 'P', '2018-10-31 19:42:45'),
(75, 2, 1, '8', 'P', '2018-11-01 00:30:13'),
(76, 2, 1, '8', 'P', '2018-11-01 00:32:46'),
(77, 2, 1, '8', 'P', '2018-11-01 00:39:45'),
(78, 2, 1, '8', 'P', '2018-11-01 01:50:52'),
(79, 2, 0, '8', 'P', '2018-11-01 12:55:19'),
(80, 2, 1, '8', 'P', '2018-11-01 02:07:26'),
(81, 2, 0, '8', 'P', '2018-11-01 21:13:39'),
(82, 2, 1, '9', 'M', '2018-11-01 20:18:04'),
(83, 2, 1, '9', 'M', '2018-11-01 20:21:08'),
(84, 2, 1, '9', 'C', '2018-11-01 20:21:16'),
(85, 2, 0, '9', 'M', '2018-11-01 21:13:30'),
(86, 2, 1, '9', 'C', '2018-11-01 20:25:03'),
(87, 2, 1, '9', 'C', '2018-11-01 20:25:13'),
(88, 2, 1, '9', 'C', '2018-11-01 20:25:19'),
(89, 2, 1, '11', 'M', '2018-11-01 20:28:52'),
(90, 2, 0, '11', 'C', '2018-11-01 21:11:49'),
(91, 2, 0, '11', 'M', '2018-11-01 21:10:17'),
(92, 2, 0, '11', 'M', '2018-11-01 21:10:22'),
(93, 2, 1, '11', 'M', '2018-11-01 20:50:47'),
(94, 2, 0, '11', 'C', '2018-11-01 21:10:03'),
(95, 2, 1, '8', 'P', '2018-11-01 21:23:21'),
(96, 2, 1, '8', 'P', '2018-11-01 21:26:52'),
(97, 2, 1, '8', 'P', '2018-11-01 21:29:59'),
(98, 3, 1, '8', 'P', '2018-11-01 21:32:53'),
(99, 2, 1, '6', 'P', '2018-11-01 21:37:30'),
(100, 2, 1, '8', 'P', '2018-11-01 21:50:30'),
(101, 2, 1, '6', 'P', '2018-11-01 22:05:22'),
(102, 2, 1, '11', 'P', '2018-11-01 22:12:38'),
(103, 2, 1, '11', 'M', '2018-11-01 22:20:50'),
(104, 2, 1, '7', 'P', '2018-11-02 00:00:14'),
(105, 2, 1, '8', 'P', '2018-11-02 00:51:22'),
(106, 2, 1, '26', 'M', '2018-11-02 17:02:57'),
(107, 2, 1, '26', 'M', '2018-11-02 17:03:07'),
(108, 2, 1, '26', 'C', '2018-11-02 17:03:08');

-- --------------------------------------------------------

--
-- Tabellstruktur `Productos`
--

CREATE TABLE `Productos` (
  `codigo` bigint(20) UNSIGNED NOT NULL,
  `bar` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(11) NOT NULL,
  `categoria` text NOT NULL COMMENT 'comestible, pizza, cerveza, etc'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `Productos`
--

INSERT INTO `Productos` (`codigo`, `bar`, `descripcion`, `precio`, `categoria`) VALUES
(1, 1, 'Pizza con muzzarela', 100, 'pizza'),
(2, 1, 'Pizza con aceitunas', 120, 'pizza'),
(3, 1, 'Pizza con panceta', 120, 'pizza'),
(4, 1, 'faina', 90, 'pizza'),
(5, 1, 'cerveza Patricia', 230, 'cerveza'),
(6, 1, 'cerveza Zilertal', 250, 'cerveza'),
(7, 2, 'IPA Artesanal', 160, ''),
(8, 2, 'Blonde Artesanal', 160, ''),
(9, 2, 'Stout Artesanal', 160, ''),
(10, 2, 'Tabla de quesos', 250, ''),
(11, 2, 'Picada del mar', 320, ''),
(12, 2, 'Refresco linea coca-cola 600ml', 80, ''),
(13, 3, 'Pizzeta con pancenta', 250, ''),
(14, 3, 'Hamburguesa artesanal', 340, ''),
(15, 3, 'Cerveza rubia belga', 170, ''),
(16, 3, 'Cerveza negra belga', 170, ''),
(17, 3, 'Cerveza tirada ambar', 170, ''),
(18, 3, 'Cerveza tirada stout', 170, ''),
(19, 2, 'Stella Artois', 210, 'cerveza');

-- --------------------------------------------------------

--
-- Tabellstruktur `shopping_items`
--

CREATE TABLE `shopping_items` (
  `id` int(11) NOT NULL,
  `codigoBar` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `shopping_items`
--

INSERT INTO `shopping_items` (`id`, `codigoBar`, `item_name`, `item_desc`, `item_image`, `item_price`, `category`) VALUES
(1, 2, 'Chivito', 'Carne premium con jamon, queso, lechgua, tomate, huevo, panceta, rusa, pickles, firtas y papas bravas', 'chivito.jpg', '80', 'Recomendaciones'),
(2, 2, 'Pilsen 300 ml', 'Cerveza nacional que es una cagada', 'pilsen.jpg', '90', 'Bebidas'),
(3, 2, 'Pizza', 'salsa de tomate y oregano ', 'pizza_trad_alfredo.png', '70', 'Pizzas'),
(4, 2, 'Faina', 'clasico fainá', 'maxresdefault.jpg', '50', 'Pizzas'),
(5, 2, 'Sushi', '16 rolls que incluyen caiguali, tari-kaki, po cho lulo', 'sushi.jpg', '200', 'Recomendaciones'),
(6, 2, 'Coca cola', 'línea coca cola 250ml', 'cocacola_PNG22.png', '20', 'Soda'),
(7, 2, 'Veggi', 'Ensalada verde con lechuga, rúcula, rabanito, zanahoria, tomate, radicheta y pasto', '5871.jpg', '180', 'Vegetariano'),
(8, 2, 'Ensalada', 'Ensalada Cesar con pollo en trozos, lechuga, tomate, rúcula y cebolla', 'ensalada.jpg', '100', 'Vegetariano'),
(9, 2, 'Pasta', 'Fideos de ayer con la salsa de siempre', 'alimentos-vegetarianos.jpg', '120', 'Vegetariano'),
(10, 3, 'Pizza mediterranea', 'Albaca, tomate y oregano', '', '200', 'Vegetariano'),
(11, 3, 'Rubia Pale Ale', 'Cerveza tirada artesanl de cebada con tonos de malta en barril', '', '160', 'Bebidas'),
(12, 3, 'Rubia Pale Ale', 'Cerveza tirada artesanl de cebada con tonos de malta en barril', '', '160', 'Bebidas'),
(13, 3, 'Stout Indian Ale', 'Cerveza tirada artesanl IPA Cabezas', '', '160', 'Bebidas'),
(14, 3, 'Blonde', 'Cerveza rubia', '', '160', 'Bebidas'),
(15, 3, 'Zilertal', '1lt', '', '220', 'Bebidas'),
(16, 3, 'Coca-Cola', '600ml', '', '120', 'Bebidas'),
(17, 3, 'Sprite', '600ml', '', '160', 'Bebidas'),
(18, 3, 'Paso de los toros Pomelo', '600ml', '', '160', 'Bebidas'),
(19, 3, 'Paso de los toros Tónica', '600ml', '', '160', 'Bebidas'),
(20, 2, 'Empanada cuatro quesos', 'Empanada de masa casera con queso tipo cheddar, muzzarella, dambo y roquefort', '', '63', 'Empanadas'),
(21, 2, 'Empanada gallega', 'Empanada de masa casera rellena de pescado y atun', '', '63', 'Empanadas'),
(22, 2, 'Empanada griega', 'Empanada de masa casera con queso muzzarela, aceitunas y aceite de oliva', '', '63', 'Empanadas'),
(23, 2, 'Empanada dulce', 'Empanada de masa casera rellena de dulce de lecha y chocolate', '', '63', 'Empanadas'),
(24, 2, 'Capuchino largo', 'Capuchino en vaso de 300ml con una masita de acompañamiento', '', '90', 'Cafe'),
(25, 2, 'Expreso', 'Cafe expreso', '', '70', 'Cafe'),
(26, 2, 'Media lunas', 'Media luna de manteca', '', '40', 'Cafe'),
(27, 2, 'Te verde', 'Infusion de te aromatico verde', '', '80', 'Cafe'),
(28, 2, 'Lemon Pie', 'Tarta de limon y merengue', '', '150', 'Postre'),
(29, 2, 'Arroz con leche', 'Arroz con leche casero y canela', '', '150', 'Postre'),
(30, 2, 'Flan', 'Flan casero con dulce de leche', '', '150', 'Postre'),
(31, 2, 'Gelatina', 'Gelatina con gusto a quimico que sobro del hospital (la gelatina, el quimico es nuevo)', '', '90', 'Postre'),
(32, 2, 'Coca Cola', '600 ml', '', '90', 'Soda'),
(33, 2, 'Coca Cola light', '600 ml', '', '90', 'Soda'),
(34, 2, 'Sprite', '600 ml', '', '90', 'Soda'),
(35, 2, 'Paso de los toros tonica', '600 ml', '', '90', 'Soda'),
(36, 2, 'Sprite', '600 ml', '', '90', 'Soda'),
(37, 2, 'Paso de los toros pomelo', '600 ml', '', '90', 'Soda'),
(38, 2, 'Manhatan', 'Vodka, pichi de mono, soda cola y mucho hielo', '', '180', 'Tragos'),
(39, 2, 'Cosmopolitan', 'Ron, whiskey, granadina y jugo de naranja', '', '180', 'Tragos'),
(40, 2, 'Mojito', 'Ron, hierba buena, jugo de lima y un toce de limón', '', '180', 'Tragos'),
(41, 2, 'Daikiri de frutilla', 'Jugo natural de frutilla con ron', '', '180', 'Tragos'),
(42, 2, 'Daikiri de durazno', 'Jugo natural de durazno con ron', '', '180', 'Tragos'),
(45, 2, 'Volcanica Belgian Blonde 5.5% - 500 ml', 'Cerveza rubia y refrescante con un leve aroma frutado', '', '140', 'Bebidas'),
(46, 2, 'Volcanica Belgian Ipa 7.2% - 500 ml', 'Cerveza rubia amarga con notas cítricas en su sabor y aroma', '', '140', 'Bebidas'),
(49, 2, 'Volcanica Dubbel 6.9% - 500 ml', 'Cerveza roja con ligeras notas y aroma frutado', '', '140', 'Bebidas'),
(50, 2, 'Volcanica Belgian Dark Ale 8.0% - 500 ml', 'Cerveza oscura, dulce, maltosa con aroma intenso', '', '140', 'Bebidas'),
(51, 2, 'Davok American Ipa 6.2% - 500 ml', 'Cerveza rubia de gran carácter con aroma dulce y frutal', '', '140', 'Bebidas'),
(52, 2, 'English Pale Ale 5.0% - 500 ml', 'Cerveza roja equilibrada con notas dulces en su sabor y aroma', '', '160', 'Bebidas'),
(53, 2, 'Bizarra Ipa 6.7% - 500 ml', 'Equilibrada entre su dulzor, graduación alcoholica y amargor', '', '140', 'Bebidas'),
(54, 2, 'Bizarra Blond Ale 5.0% - 500 ml', 'Cerveza rubia, suave, delicada con un toque dulce', '', '150', 'Bebidas'),
(55, 2, 'Cabesas Scottish 5.6% - 500 ml', 'Cerveza ambar, notas dulces combinando malta, caramelo y frutos secos', '', '140', 'Bebidas'),
(56, 2, 'Cabesas Ipa Atomica 6.7% - 500 ml', 'Cerveza rubia, citrica y frutada, balanceada entre su amargor y dulzor', '', '150', 'Bebidas'),
(57, 2, 'Cabesas Sabotaje (Oatameal Stout) 6.1% - 500 ml', 'Cerveza negra, dulce con notas a cafe y chocolate amargo', '', '160', 'Bebidas'),
(58, 2, 'Cabesas Cabutia (Pumpkin Ale) 5.6% - 500 ml', 'Cerveza con zapallo de cabutia, sabor dulce y aroma a especias', '', '160', 'Bebidas'),
(59, 2, 'Jugo de naranja natural 250 ml', 'Vaso de jugo de naranja exprimido', '', '120', 'Cafe'),
(60, 2, 'Empanada Napolitana', 'Empanada de masa casera rellena de muzzarella, jamon, tomate, sal y especias ', '', '63', 'Empanadas');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `Bares`
--
ALTER TABLE `Bares`
  ADD PRIMARY KEY (`Codigo`);

--
-- Index för tabell `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`codigo`);

--
-- Index för tabell `contenidoPedidos`
--
ALTER TABLE `contenidoPedidos`
  ADD PRIMARY KEY (`codigoContenido`);

--
-- Index för tabell `menuItems`
--
ALTER TABLE `menuItems`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `Pedidos`
--
ALTER TABLE `Pedidos`
  ADD PRIMARY KEY (`codigoPedido`);

--
-- Index för tabell `Productos`
--
ALTER TABLE `Productos`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Index för tabell `shopping_items`
--
ALTER TABLE `shopping_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `categorias`
--
ALTER TABLE `categorias`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT för tabell `contenidoPedidos`
--
ALTER TABLE `contenidoPedidos`
  MODIFY `codigoContenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT för tabell `menuItems`
--
ALTER TABLE `menuItems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT för tabell `Pedidos`
--
ALTER TABLE `Pedidos`
  MODIFY `codigoPedido` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo autogenerado del pedido', AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT för tabell `Productos`
--
ALTER TABLE `Productos`
  MODIFY `codigo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT för tabell `shopping_items`
--
ALTER TABLE `shopping_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
