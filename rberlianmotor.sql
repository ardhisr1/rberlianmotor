-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2020 pada 16.37
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rberlianmotor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `consumer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `consumer_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_transaction`
--

CREATE TABLE `det_transaction` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategory_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategory_id`, `category`) VALUES
(3, 'cat 1'),
(4, 'cat 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merks`
--

CREATE TABLE `merks` (
  `merk_id` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merks`
--

INSERT INTO `merks` (`merk_id`, `merk`) VALUES
(7, 'merk 1'),
(8, 'merk 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `merk_id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `pict` text NOT NULL,
  `stok` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `kategori_id`, `merk_id`, `type_id`, `price`, `description`, `pict`, `stok`) VALUES
(5, 'Gear motor edit', 3, 7, 4, 100000, 'description edit', 'ecf0637687bfc526fccaeed2e34f882f.jpg', 0);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `show_products`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `show_products` (
`product_id` int(11)
,`name` varchar(50)
,`kategori_id` int(11)
,`merk_id` int(11)
,`type_id` int(11)
,`price` int(11)
,`description` text
,`pict` text
,`stok` int(11)
,`merk` varchar(50)
,`category` varchar(50)
,`type` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` varchar(20) NOT NULL,
  `transaction_date` date NOT NULL,
  `consumer_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`type_id`, `type`) VALUES
(4, 'type1'),
(5, 'type2');

-- --------------------------------------------------------

--
-- Struktur untuk view `show_products`
--
DROP TABLE IF EXISTS `show_products`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `show_products`  AS  select `p`.`product_id` AS `product_id`,`p`.`name` AS `name`,`p`.`kategori_id` AS `kategori_id`,`p`.`merk_id` AS `merk_id`,`p`.`type_id` AS `type_id`,`p`.`price` AS `price`,`p`.`description` AS `description`,`p`.`pict` AS `pict`,`p`.`stok` AS `stok`,`m`.`merk` AS `merk`,`k`.`category` AS `category`,`t`.`type` AS `type` from (((`products` `p` join `merks` `m` on((`m`.`merk_id` = `p`.`merk_id`))) join `types` `t` on((`t`.`type_id` = `p`.`type_id`))) join `kategori` `k` on((`k`.`kategory_id` = `p`.`kategori_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `crt` (`consumer_id`,`product_id`),
  ADD KEY `cart_ibfk_1` (`product_id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`consumer_id`);

--
-- Indeks untuk tabel `det_transaction`
--
ALTER TABLE `det_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dt` (`transaction_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategory_id`);

--
-- Indeks untuk tabel `merks`
--
ALTER TABLE `merks`
  ADD PRIMARY KEY (`merk_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `prod` (`name`,`kategori_id`),
  ADD KEY `merks` (`merk_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `st` (`product_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `ts` (`consumer_id`);

--
-- Indeks untuk tabel `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `consumer_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `det_transaction`
--
ALTER TABLE `det_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `merks`
--
ALTER TABLE `merks`
  MODIFY `merk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`consumer_id`) REFERENCES `customers` (`consumer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `det_transaction`
--
ALTER TABLE `det_transaction`
  ADD CONSTRAINT `det_transaction_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`transaction_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `det_transaction_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategory_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`merk_id`) REFERENCES `merks` (`merk_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_5` FOREIGN KEY (`type_id`) REFERENCES `types` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`consumer_id`) REFERENCES `customers` (`consumer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
