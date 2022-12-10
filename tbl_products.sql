-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2022 at 05:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `description`, `price`, `photo1`, `photo2`) VALUES
(1, 'Brown Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim vulputate tortor, sed ornare dui pharetra sed. Aliquam posuere eleifend eros nec aliquam. Aliquam ac risus a tellus mollis ultrices. Mauris tellus felis, luctus id metus nec, tristique molestie neque.', 550, 'product1A.jpg', 'product1B.jpg'),
(2, 'Gray Shirt', 'Aenean tincidunt mattis eros, non venenatis felis suscipit eu. Fusce a tempus nulla. Cras pretium purus augue, ut semper arcu pulvinar sit amet. Nam et est consectetur, mollis mi nec, pharetra nibh. Sed malesuada pellentesque ipsum, vel congue purus. Mauris eget velit vel metus ullamcorper lacinia. Sed in vestibulum erat.', 550, 'product2A.jpg', 'product2B.jpg'),
(3, 'White Blazer', 'Donec ac neque non turpis aliquet vehicula a in eros. Vestibulum ante mauris, condimentum nec ex eget, ultrices consequat felis. Curabitur nec consequat magna. Donec euismod magna tortor, eget ultrices mauris lobortis et. Etiam imperdiet aliquet porta. Maecenas magna felis, placerat et rhoncus quis, gravida in nunc.', 750, 'product3A.jpg', 'product3B.jpg'),
(4, 'Dark Blue Polo Shirt', 'Proin rutrum volutpat ultricies. In vitae lorem vitae augue blandit lobortis. Aenean vel elit malesuada, semper diam et, tristique quam. Praesent scelerisque ipsum vitae vehicula aliquet. Morbi odio risus, consectetur in tristique eget, scelerisque nec erat. Nulla porttitor erat eget risus scelerisque, vitae gravida tortor interdum. Aliquam commodo lacinia ante sit amet commodo.', 600, 'product4A.jpg', 'product4B.jpg'),
(5, 'Dark Blue Long Sleeves', 'Nullam pharetra sit amet lectus eu mattis. Cras nec blandit massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur volutpat, velit eu bibendum aliquet, justo justo sodales ligula, sit amet fermentum velit est id sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras eget scelerisque dui.', 800, 'product5A.jpg', 'product5B.jpg'),
(6, 'White Long Sleeves', 'Maecenas gravida viverra felis, in rutrum dolor. Nam pharetra mollis urna, eu sagittis odio luctus quis. Pellentesque vulputate arcu purus, non tincidunt ligula rutrum ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc et nibh sed massa vulputate sagittis. Fusce sit amet odio ut dui auctor venenatis eu non leo.', 800, 'product6A.jpg', 'product6B.jpg'),
(7, 'Dark Blue Blazer', 'Morbi pharetra nisi felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse pretium sem ut orci semper fermentum. Curabitur quis dui quis quam laoreet sollicitudin. Quisque sit amet faucibus ligula, quis pharetra lacus. Proin ut imperdiet lectus, sit amet placerat risus.', 750, 'product7A.jpg', 'product7B.jpg'),
(8, 'Floral Polo', 'Donec rutrum, ipsum ac molestie tristique, nisi leo hendrerit nibh, eu volutpat augue nibh in massa. Nulla molestie elit sit amet urna mattis, molestie pharetra tortor venenatis. In quis dolor sed urna maximus dignissim. Morbi aliquet nulla eget erat accumsan, id pretium ex varius.', 650, 'product8A.jpg', 'product8B.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
