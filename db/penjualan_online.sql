-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 26. Januari 2019 jam 03:03
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjualan_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`username`, `email`, `password`, `nama_pelanggan`, `no_telp`) VALUES
('Ely', 'elyagustin@gmail.com', '14121996', 'Ely Agustina', '+628 2387675654'),
('Kiky', 'kikysuhayati@gmail.com', '14121996', 'Kiky Suhayati', '+628 2376890978');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_pembelian` int(10) NOT NULL,
  PRIMARY KEY (`id_pembelian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `username`, `tanggal_pembelian`, `nama_produk`, `harga_produk`, `jumlah`, `total_pembelian`) VALUES
(1, 'Ely', '2019-01-02', 'Fiqih Wanita', 90000, 2, 180000),
(2, 'Kiky', '2019-01-03', 'Fiqih Sholat', 134000, 1, 134000),
(3, 'Ely', '2019-01-24', 'Tasbih Biru', 45000, 2, 90000),
(4, 'Ely', '2019-01-23', 'Rehal Plastik', 43000, 2, 86000),
(5, 'Kiky', '2019-01-08', 'Muhammad Sang Yatim', 95000, 2, 190000),
(6, 'Kiky', '2019-01-07', 'Tasbih Gold', 65000, 2, 130000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(5) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(10) NOT NULL,
  `foto_produk` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `keterangan`) VALUES
(1, 'Halal & Haram', 125000, 'BK1.jpg', ''),
(2, 'Fiqih Wanita', 90000, 'BK2.jpg', ''),
(3, 'Fiqih Sholat', 134000, 'BK3.jpg', ''),
(5, 'Bimbingan Islam Untuk Hidup', 175000, 'BK5.jpg', ''),
(6, 'Muhammad Sang Yatim', 95000, 'BK6.jpg', ''),
(7, 'Biografi Umar Bin Khattab', 189000, 'BK7.jpg', ''),
(8, 'Biografi Utsman Bin Affan', 189000, 'BK8.jpg', ''),
(9, 'Biografi Abu Bakar Siddiq', 189000, 'BK9.jpg', ''),
(10, 'Biografi Ali Bin Abi Tholib', 189000, 'BK10.jpg', ''),
(16, 'AL-Quran Tafsir Per Kata', 180000, 'QT8.jpg', ''),
(17, 'Tasbih Biru ', 45000, 'TSB1.jpg', ''),
(18, 'Tasbih Biru Putih', 34000, 'TSB2.jpg', ''),
(19, 'Tasbih Biru Hitam', 49000, 'TSB3.jpg', ''),
(20, 'Tasbih Gold', 65000, 'TSB4.jpg', ''),
(21, 'Tasbih Kayu Coklat', 67000, 'TSB5.jpg', ''),
(22, 'Tasbih Kayu Gold', 78000, 'TSB9.jpg', ''),
(23, 'Tasbih Hijau', 50000, 'TSB11.jpg', ''),
(24, 'Rehal Ukir', 123000, 'RH3.jpg', ''),
(25, 'Rehal Ukir Biasa', 90000, 'RH4.jpg', ''),
(26, 'Rehal Meja', 230000, 'RH5.jpg', ''),
(27, 'Rehal Plastik', 43000, 'RH7.jpg', ''),
(28, 'Mukenah Merah', 167000, 'MK1.jpg', ''),
(29, 'Mukenah Batik Pink', 154000, 'MK6.jpg', ''),
(30, 'Mukenah Batik Ungu', 156000, 'MK7.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('Widodo', 'fa191e5f5d99b978d97ea7500f067eeb', 'bagoeswidodogallery@gmail.com', 'Bagoes Widodo', 1, 'WEB Developer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
