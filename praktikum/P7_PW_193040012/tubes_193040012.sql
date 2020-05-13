-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2020 at 09:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.7
SET
  SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET
  time_zone
= "+00:00";
--
-- Database: `tubes_193040012`
--
-- --------------------------------------------------------
--
-- Table structure for table `makanan`
--
CREATE TABLE `makanan`
(
    `id` int
(11) UNSIGNED NOT NULL,
    `nama_makanan` varchar
(255) NOT NULL DEFAULT '',
    `asal_makanan` varchar
(255) NOT NULL DEFAULT '',
    `rasa_makanan` varchar
(255) NOT NULL DEFAULT '',
    `harga_makanan` int
(11) NOT NULL,
    `jumlah_makanan` int
(11) DEFAULT NULL,
    `gambar_makanan` varchar
(255) NOT NULL DEFAULT ''
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;
--
-- Dumping data for table `makanan`
--
INSERT INTO `makanan` (
    `
id`,
`nama_makanan
`,
    `asal_makanan`,
    `rasa_makanan`,
    `harga_makanan`,
    `jumlah_makanan`,
    `gambar_makanan`
  )
VALUES
(
    1,
    'Bika ambonas',
    'sumatera utara',
    'manis',
    37000,
    10,
    'bika.jpg'
  ),
(
    2,
    'rendang',
    'sumatera barat',
    'gurih',
    70000,
    20,
    'rendang.jpeg'
  ),
(
    3,
    'gulai ikan patin ',
    'jambi',
    'gurih',
    75000,
    5,
    'gulai.jpg'
  ),
(
    4,
    'pempek',
    'sumsel',
    'gurih',
    80000,
    8,
    'pempek.jpg'
  ),
(
    5,
    'coto makasar',
    'makasar',
    'gurih',
    50000,
    14,
    'coto.jpg'
  ),
(
    6,
    'karedok',
    'jawa barat',
    'pedas ',
    20000,
    6,
    'karedok.jpg'
  ),
(
    7,
    'kerak telor',
    'jakarta',
    'pedas',
    20000,
    16,
    'kerak.jpg'
  ),
(
    8,
    'model',
    'sumsel',
    'manis',
    15000,
    12,
    'model.jpg'
  ),
(
    9,
    'soto betawi',
    'jakarta',
    'gurih',
    25000,
    15,
    'sobet.png'
  ),
(
    10,
    'nasi goreng',
    'jawa barat',
    'pedas',
    15000,
    5,
    'nasgor.png'
  ),
(
    11,
    'adskndjk',
    'jkhdajkhjk',
    'jkhjhsdjka',
    7657,
    67567,
    'nbmnbm'
  );
-- --------------------------------------------------------
--
-- Table structure for table `user`
--
CREATE TABLE `user`
(
    `id` int
(11) UNSIGNED NOT NULL,
    `username` varchar
(255) DEFAULT NULL,
    `password` varchar
(255) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
-- Dumping data for table `user`
--
INSERT INTO `user`
  (`id`, `username

`, `password`)
VALUES
(
    1,
    'admin',
    '$2y$10$L6UzJZvJE9IpQoPlChrExOnKPlNIxs1KI/fsStkaOPE8rWJbj1Pr6'
  );
--
-- Indexes for dumped tables
--
--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
ADD
  PRIMARY KEY
(`id`);
--
-- Indexes for table `user`
--
ALTER TABLE `user`
ADD
  PRIMARY KEY
(`id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
MODIFY
  `id` int
(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY
  `id` int
(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;