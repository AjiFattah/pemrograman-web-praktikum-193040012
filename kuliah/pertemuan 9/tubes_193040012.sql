-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Apr 2020 pada 03.59
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040012`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
  `Nama_makanan` varchar(20) NOT NULL,
  `asal_makanan` varchar(15) NOT NULL,
  `rasa_makanan` varchar(10) NOT NULL,
  `harga_makanan` int(11) NOT NULL,
  `jumlah_makanan` int(11) DEFAULT NULL,
  `Gambar_makanan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`Nama_makanan`, `asal_makanan`, `rasa_makanan`, `harga_makanan`, `jumlah_makanan`, `Gambar_makanan`) VALUES
('Bika ambon', 'sumatera utara', 'manis', 37000, 10, 'bika.jpg'),
('rendang', 'sumatera barat', 'gurih', 70000, 20, 'rdg.jpg'),
('gulai ikan patin ', 'jambi', 'gurih', 75000, 5, 'gulai.jpg'),
('pempek', 'sumsel', 'gurih', 80000, 8, 'pempek.jpg'),
('coto makasar', 'makasar', 'gurih', 50000, 14, 'coto.png'),
('karedok', 'jawa barat', 'pedas ', 20000, 6, 'krdk.jpg'),
('kerak telor', 'jakarta', 'pedas', 20000, 16, 'kerak.jpg'),
('model', 'sumsel', 'manis', 15000, 12, 'model.jpg'),
('soto betawi', 'jakarta', 'gurih', 25000, 15, 'sobet.png'),
('nasi goreng', 'jawa barat', 'pedas', 15000, 5, 'nasgor.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
