-- phpMyAdmin SQL Dump

-- version 4.2.11

-- http://www.phpmyadmin.net

--

-- Host: localhost

-- Generation Time: Apr 25, 2021 at 06:13

-- Server version: 5.6.21

-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8 */

;

--

-- Database: `arrayan_store`

--

-- --------------------------------------------------------

--

-- Table structure for table `berita`

--

DROP TABLE IF EXISTS `berita` ;
FLUSH TABLES `berita` ;

CREATE TABLE
    IF NOT EXISTS `berita` (
        `id_berita` int(11) NOT NULL DEFAULT '0',
        `id_user` int(11) NOT NULL,
        `jenis_berita` varchar(20) NOT NULL,
        `judul_berita` varchar(255) NOT NULL,
        `slug_berita` varchar(255) NOT NULL,
        `keywords` text,
        `status_berita` varchar(20) NOT NULL,
        `keterangan` text NOT NULL,
        `gambar` varchar(255) NOT NULL,
        `tanggal_post` datetime NOT NULL,
        `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- --------------------------------------------------------

--

-- Table structure for table `gambar`

--

DROP TABLE IF EXISTS `gambar` ;

FLUSH TABLES `gambar` ;

CREATE TABLE
    IF NOT EXISTS `gambar` (
        `id_gambar` int(11) NOT NULL,
        `id_produk` int(11) NOT NULL,
        `judul_gambar` varchar(255) DEFAULT NULL,
        `gambar` varchar(255) NOT NULL,
        `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = latin1;

--

-- Dumping data for table `gambar`

--

INSERT INTO
    `gambar` (
        `id_gambar`,
        `id_produk`,
        `judul_gambar`,
        `gambar`,
        `tanggal_update`
    )
VALUES (
        1,
        4,
        'samsung s8 ok ',
        'S8-plus.jpg',
        '2021-03-03 05:01:30'
    ), (
        5,
        4,
        ' s10',
        'S10.jpg',
        '2021-03-08 05:45:27'
    );

-- --------------------------------------------------------

--

-- Table structure for table `header_transaksi`

--

DROP TABLE IF EXISTS `header_transaksi` ;

FLUSH TABLES `header_transaksi` ;

CREATE TABLE
    IF NOT EXISTS `header_transaksi` (
        `id_header_transaksi` int(11) NOT NULL,
        `id_pelanggan` int(11) NOT NULL,
        `nama_pelanggan` varchar(50) DEFAULT NULL,
        `email` varchar(255) DEFAULT NULL,
        `telepon` varchar(50) DEFAULT NULL,
        `alamat` varchar(300) DEFAULT NULL,
        `id_user` int(11) NOT NULL,
        `kode_transaksi` varchar(255) NOT NULL,
        `tanggal_transaksi` datetime NOT NULL,
        `jumlah_transaksi` int(11) NOT NULL,
        `status_bayar` varchar(20) NOT NULL,
        `jumlah_bayar` int(11) DEFAULT NULL,
        `rekening_pembayaran` varchar(255) DEFAULT NULL,
        `rekening_pelanggan` varchar(255) DEFAULT NULL,
        `bukti_bayar` varchar(255) DEFAULT NULL,
        `id_rekening` int(11) DEFAULT NULL,
        `tanggal_bayar` varchar(255) DEFAULT NULL,
        `nama_bank` varchar(255) DEFAULT NULL,
        `tanggal_post` datetime NOT NULL,
        `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB AUTO_INCREMENT = 10 DEFAULT CHARSET = latin1;

--

-- Dumping data for table `header_transaksi`

--

INSERT INTO
    `header_transaksi` (
        `id_header_transaksi`,
        `id_pelanggan`,
        `nama_pelanggan`,
        `email`,
        `telepon`,
        `alamat`,
        `id_user`,
        `kode_transaksi`,
        `tanggal_transaksi`,
        `jumlah_transaksi`,
        `status_bayar`,
        `jumlah_bayar`,
        `rekening_pembayaran`,
        `rekening_pelanggan`,
        `bukti_bayar`,
        `id_rekening`,
        `tanggal_bayar`,
        `nama_bank`,
        `tanggal_post`,
        `tanggal_update`
    )
VALUES (
        1,
        4,
        'Sukmono',
        'sukmono@gmail.com',
        '0811255282',
        'ngemplak kidul',
        0,
        '09032021OL9MKWLJ',
        '2021-03-09 00:00:00',
        3500000,
        'Belum',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        '2021-03-09 11:51:02',
        '2021-03-09 10:51:02'
    ), (
        2,
        4,
        'Sukmono',
        'sukmono@gmail.com',
        '0811255282',
        'ngemplak kidul',
        0,
        '09032021IFBJV94A',
        '2021-03-09 00:00:00',
        0,
        'Belum',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        '2021-03-09 11:51:58',
        '2021-03-09 10:51:58'
    ), (
        3,
        4,
        'Sukmono',
        'sukmono@gmail.com',
        '0811255282',
        'ngemplak kidul',
        0,
        '09032021MYRUCPLN',
        '2021-03-09 00:00:00',
        11500000,
        'Belum',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        '2021-03-09 11:52:23',
        '2021-03-09 10:52:23'
    ), (
        4,
        4,
        'Sukmono',
        'sukmono@gmail.com',
        '0811255282',
        'ngemplak kidul',
        0,
        '09032021KH1HMWZS',
        '2021-03-09 00:00:00',
        9000000,
        'Konfirmasi',
        9000000,
        '32345235',
        'Sukmono',
        'Screenshot_from_2020-07-18_16-14-54.png',
        2,
        ' 11-03-2021',
        'BANK MANDIRI',
        '2021-03-09 11:56:35',
        '2021-03-11 10:05:31'
    ), (
        5,
        4,
        'Sukmono',
        'sukmono@gmail.com',
        '0811255282',
        'ngemplak kidul',
        0,
        '0903202143WP6TME',
        '2021-03-09 00:00:00',
        3500000,
        'Konfirmasi',
        3500000,
        '01122435',
        'Sukmono',
        'Screenshot_from_2020-07-13_09-34-37.png',
        1,
        '   11-03-2021',
        'BCA',
        '2021-03-09 11:58:15',
        '2021-03-11 10:05:01'
    ), (
        6,
        5,
        'Muhammad Muzni',
        'muzna@gmail.com',
        '08122345566',
        'kajen margoyoso pati',
        0,
        '09032021ELSJ5HU9',
        '2021-03-09 00:00:00',
        0,
        'Belum',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        '2021-03-09 13:20:30',
        '2021-03-09 12:20:30'
    ), (
        7,
        5,
        'Muhammad Muzni',
        'muzna@gmail.com',
        '08122345566',
        'kajen margoyoso pati',
        0,
        '100320216NRWJB2I',
        '2021-03-10 00:00:00',
        3500000,
        'Belum',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        '2021-03-10 05:44:59',
        '2021-03-10 04:44:59'
    ), (
        8,
        5,
        'Muhammad Muzni',
        'muzna@gmail.com',
        '08122345566',
        'kajen margoyoso pati',
        0,
        '10032021JVYJGFG4',
        '2021-03-10 00:00:00',
        3500000,
        'Belum',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        '2021-03-10 06:06:41',
        '2021-03-10 05:06:41'
    ), (
        9,
        4,
        'Sukmono Putra',
        'sukmono@gmail.com',
        '0811255282',
        'ngemplak kidul',
        0,
        '24042021ODEQTJXY',
        '2021-04-24 00:00:00',
        1500000,
        'Konfirmasi',
        1500000,
        'asdasdasd',
        'asdasd',
        'asset-2@2x.png',
        2,
        ' 24-04-2021',
        'asdasd',
        '2021-04-24 09:40:21',
        '2021-04-24 07:41:19'
    );

-- --------------------------------------------------------

--

-- Table structure for table `kategori`

--

DROP TABLE IF EXISTS `kategori` ;

FLUSH TABLES `kategori` ;

CREATE TABLE
    IF NOT EXISTS `kategori` (
        `id_kategori` int(11) NOT NULL,
        `slug_kategori` varchar(255) NOT NULL,
        `nama_kategori` varchar(255) NOT NULL,
        `urutan` int(11) DEFAULT NULL,
        `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB AUTO_INCREMENT = 8 DEFAULT CHARSET = latin1;

--

-- Dumping data for table `kategori`

--

INSERT INTO
    `kategori` (
        `id_kategori`,
        `slug_kategori`,
        `nama_kategori`,
        `urutan`,
        `tanggal_update`
    )
VALUES (
        4,
        'galaxy-s-series',
        ' Galaxy S Series',
        1,
        '2021-03-03 09:54:11'
    ), (
        5,
        'galaxy-note-series',
        ' Galaxy Note Series',
        2,
        '2021-03-03 09:54:25'
    ), (
        6,
        'galaxy-a-series',
        ' Galaxy A Series',
        3,
        '2021-03-03 09:54:34'
    ), (
        7,
        'galaxy-m-series',
        ' Galaxy M Series',
        4,
        '2021-03-03 09:55:21'
    );

-- --------------------------------------------------------

--

-- Table structure for table `konfigurasi`

--

DROP TABLE IF EXISTS `konfigurasi` ;

FLUSH TABLES `konfigurasi` ;

CREATE TABLE
    IF NOT EXISTS `konfigurasi` (
        `id_konfigurasi` int(11) NOT NULL,
        `namaweb` varchar(255) NOT NULL,
        `tagline` varchar(255) DEFAULT NULL,
        `email` varchar(255) DEFAULT NULL,
        `website` varchar(255) DEFAULT NULL,
        `keyword` text,
        `metatext` text,
        `telepon` varchar(50) DEFAULT NULL,
        `alamat` varchar(300) DEFAULT NULL,
        `facebook` varchar(255) DEFAULT NULL,
        `instagram` varchar(255) DEFAULT NULL,
        `deskripsi` text,
        `logo` varchar(255) DEFAULT NULL,
        `icon` varchar(255) DEFAULT NULL,
        `rekening_pembayaran` varchar(255) DEFAULT NULL,
        `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB AUTO_INCREMENT = 2 DEFAULT CHARSET = latin1;

--

-- Dumping data for table `konfigurasi`

--

INSERT INTO
    `konfigurasi` (
        `id_konfigurasi`,
        `namaweb`,
        `tagline`,
        `email`,
        `website`,
        `keyword`,
        `metatext`,
        `telepon`,
        `alamat`,
        `facebook`,
        `instagram`,
        `deskripsi`,
        `logo`,
        `icon`,
        `rekening_pembayaran`,
        `tanggal_update`
    )
VALUES (
        1,
        'Ar Rayan Store',
        'Inovation in you',
        'arrayan-store@gmail.com',
        ' http://arrayanstore.com',
        '                         ok \r\n                    ',
        '                         ok \r\n                    ',
        ' 085325224829',
        ' Tanjungrejo, Margoyoso, Pati ',
        ' http://facebook.com/arrayanstore',
        ' http://instagram.com/arrayanstore',
        '                         ok \r\n                    ',
        'Logo-samsung.png',
        'icon.png',
        '                         ok \r\n                    ',
        '2021-03-03 10:41:54'
    );

-- --------------------------------------------------------

--

-- Table structure for table `pelanggan`

--

DROP TABLE IF EXISTS `pelanggan` ;

FLUSH TABLES `pelanggan` ;

CREATE TABLE
    IF NOT EXISTS `pelanggan` (
        `id_pelanggan` int(11) NOT NULL,
        `id_user` int(11) NOT NULL,
        `status_pelanggan` varchar(20) NOT NULL,
        `nama_pelanggan` varchar(50) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `telepon` varchar(64) DEFAULT NULL,
        `alamat` varchar(300) DEFAULT NULL,
        `tanggal_daftar` datetime NOT NULL,
        `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = latin1;

--

-- Dumping data for table `pelanggan`

--

INSERT INTO
    `pelanggan` (
        `id_pelanggan`,
        `id_user`,
        `status_pelanggan`,
        `nama_pelanggan`,
        `email`,
        `password`,
        `telepon`,
        `alamat`,
        `tanggal_daftar`,
        `tanggal_update`
    )
VALUES (
        4,
        0,
        'Pending',
        'Sukmono Putra',
        'sukmono@gmail.com',
        '$2y$10$cDSvuNJPjvbxMowfNNoJ9O9ulPgVBsfDmI/Mx3/Y5cb8PCWfa4Pcy',
        '0811255282',
        'ngemplak kidul',
        '2021-03-09 10:48:20',
        '2021-03-11 03:27:08'
    ), (
        5,
        0,
        'Pending',
        'Muhammad Muzni',
        'muzna@gmail.com',
        '$2y$10$cDSvuNJPjvbxMowfNNoJ9O9ulPgVBsfDmI/Mx3/Y5cb8PCWfa4Pcy',
        '08122345566',
        'kajen margoyoso pati',
        '2021-03-09 13:19:40',
        '2021-03-09 12:19:40'
    );

-- --------------------------------------------------------

--

-- Table structure for table `produk`

--

DROP TABLE IF EXISTS `produk` ;

FLUSH TABLES `produk` ;

CREATE TABLE
    IF NOT EXISTS `produk` (
        `id_produk` int(11) NOT NULL,
        `id_user` int(11) NOT NULL,
        `id_kategori` int(11) NOT NULL,
        `kode_produk` varchar(20) NOT NULL,
        `nama_produk` varchar(255) NOT NULL,
        `slug_produk` varchar(255) NOT NULL,
        `keterangan` text NOT NULL,
        `keyword` text,
        `harga` int(11) NOT NULL,
        `stok` int(11) DEFAULT NULL,
        `gambar` varchar(255) NOT NULL,
        `berat` float DEFAULT NULL,
        `ukuran` varchar(255) DEFAULT NULL,
        `status_produk` varchar(20) NOT NULL,
        `tanggal_post` datetime NOT NULL,
        `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB AUTO_INCREMENT = 14 DEFAULT CHARSET = latin1;

--

-- Dumping data for table `produk`

--

INSERT INTO
    `produk` (
        `id_produk`,
        `id_user`,
        `id_kategori`,
        `kode_produk`,
        `nama_produk`,
        `slug_produk`,
        `keterangan`,
        `keyword`,
        `harga`,
        `stok`,
        `gambar`,
        `berat`,
        `ukuran`,
        `status_produk`,
        `tanggal_post`,
        `tanggal_update`
    )
VALUES (
        4,
        9,
        4,
        's8',
        'Samsung Galaxy S8',
        'samsung-galaxy-s8-s8',
        'Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;',
        'samsung galaxy S8\r\n                     \r\n                     \r\n                     \r\n                     \r\n                     \r\n                    ',
        8000000,
        29,
        'S8.jpg',
        270,
        '20x20',
        'Publish',
        '2021-03-03 05:17:04',
        '2021-03-08 09:59:59'
    ), (
        5,
        9,
        4,
        's10',
        'Samsung Galaxy S10+',
        'samsung-galaxy-s10-s10',
        '&lt;p&gt;121323&lt;/p&gt;\r\n',
        'asdasd    \r\n                     \r\n                     \r\n                     \r\n                     \r\n                     \r\n                     \r\n                     \r\n                    ',
        10000000,
        12,
        'S10-plus-02.jpg',
        12,
        '12x12',
        'Publish',
        '2021-03-03 06:23:34',
        '2021-03-08 09:57:06'
    ), (
        6,
        9,
        4,
        ' galaxy s7 edge',
        ' Samsung Galaxy S7 Edge',
        'samsung-galaxy-s7-edge-galaxy-s7-edge',
        '&lt;p&gt;samsung galaxy S7 edge&lt;/p&gt;\r\n',
        'samsung galaxy S7 edge',
        7500000,
        10,
        'S7-edge.jpg',
        200,
        ' 10x10',
        'Publish',
        '2021-03-03 11:00:17',
        '2021-03-03 10:00:17'
    ), (
        7,
        9,
        4,
        '   galaxy note 8 ',
        '    Samsung Galaxy Noete 8',
        'samsung-galaxy-noete-8-galaxy-note-8',
        '&lt;p&gt;galaxy note 8&lt;/p&gt;\r\n',
        '                                                                           galaxy note 8  \r\n                     \r\n                     \r\n                    ',
        8500000,
        10,
        'Note8.jpg',
        200,
        '   10x10',
        'Publish',
        '2021-03-03 11:01:39',
        '2021-03-03 10:16:16'
    ), (
        8,
        9,
        5,
        'galaxy note 9 ',
        ' Samsung Galaxy Note 9',
        'samsung-galaxy-note-9-galaxy-note-9',
        '&lt;p&gt;galaxy note 9&lt;/p&gt;\r\n',
        'galaxy note 9                ',
        9500000,
        10,
        'Note9.jpg',
        200,
        '10x10',
        'Publish',
        '2021-03-03 11:02:18',
        '2021-03-03 10:02:18'
    ), (
        9,
        9,
        5,
        '  galaxy note 10',
        '  Samsung Galaxy Noete 10',
        'samsung-galaxy-noete-10-galaxy-note-10',
        '&lt;p&gt;galaxy note 10&lt;/p&gt;\r\n',
        '                                                  galaxy note 10         \r\n                     \r\n                    ',
        11000000,
        5,
        'Note10.jpg',
        200,
        '  10x10',
        'Publish',
        '2021-03-03 11:02:47',
        '2021-03-03 10:09:27'
    ), (
        10,
        9,
        6,
        ' galaxy A 40',
        ' Samsung Galaxy A 40',
        'samsung-galaxy-a-40-galaxy-a-40',
        '&lt;p&gt;&amp;nbsp;galaxy A 40&lt;/p&gt;\r\n',
        ' galaxy A 40         ',
        4500000,
        5,
        'A40.jpg',
        200,
        '10x10',
        'Publish',
        '2021-03-03 11:03:30',
        '2021-03-03 10:03:30'
    ), (
        11,
        9,
        6,
        'galaxy A 50',
        'Samsung Galaxy A 50 ',
        'samsung-galaxy-a-50-galaxy-a-50',
        '&lt;p&gt;galaxy A 50&lt;/p&gt;\r\n',
        'galaxy A 50',
        5500000,
        5,
        'A50.jpg',
        200,
        '10x10',
        'Publish',
        '2021-03-03 11:05:53',
        '2021-03-03 10:05:53'
    ), (
        12,
        9,
        6,
        ' galaxy A 60',
        'Samsung Galaxy A 60',
        'samsung-galaxy-a-60-galaxy-a-60',
        '&lt;p&gt;&amp;nbsp;galaxy A 60&lt;/p&gt;\r\n',
        ' galaxy A 60     ',
        6500000,
        5,
        'A60.jpg',
        200,
        '10x10',
        'Publish',
        '2021-03-03 11:06:31',
        '2021-03-03 10:06:31'
    ), (
        13,
        9,
        7,
        ' galaxy M10',
        ' Samsung Galaxy M10',
        'samsung-galaxy-m10-galaxy-m10',
        '&lt;p&gt;&amp;nbsp;galaxy M10&lt;/p&gt;\r\n',
        ' galaxy M10         ',
        1500000,
        6,
        'M10.jpg',
        200,
        '10x10',
        'Publish',
        '2021-03-03 11:07:20',
        '2021-03-03 10:07:20'
    );

-- --------------------------------------------------------

--

-- Table structure for table `rekening`

--

DROP TABLE IF EXISTS `rekening` ;

FLUSH TABLES `rekening` ;

CREATE TABLE
    IF NOT EXISTS `rekening` (
        `id_rekening` int(11) NOT NULL,
        `nama_bank` varchar(255) NOT NULL,
        `nomor_rekening` varchar(20) NOT NULL,
        `nama_pemilik` varchar(255) NOT NULL,
        `gambar` varchar(255) DEFAULT NULL,
        `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB AUTO_INCREMENT = 3 DEFAULT CHARSET = latin1;

--

-- Dumping data for table `rekening`

--

INSERT INTO
    `rekening` (
        `id_rekening`,
        `nama_bank`,
        `nomor_rekening`,
        `nama_pemilik`,
        `gambar`,
        `tanggal_post`
    )
VALUES (
        1,
        'BANK BRI',
        '427428578',
        ' Muh Arip',
        NULL,
        '2021-03-11 04:09:28'
    ), (
        2,
        ' BANK BRI SYARIAH',
        '22774299',
        ' Ekhwan Juvana',
        NULL,
        '2021-03-11 04:10:12'
    );

-- --------------------------------------------------------

--

-- Table structure for table `transaksi`

--

DROP TABLE IF EXISTS `transaksi` ;

FLUSH TABLES `transaksi` ;

CREATE TABLE
    IF NOT EXISTS `transaksi` (
        `id_transaksi` int(11) NOT NULL,
        `id_user` int(11) NOT NULL,
        `id_pelanggan` int(11) NOT NULL,
        `kode_transaksi` varchar(255) NOT NULL,
        `id_produk` int(11) NOT NULL,
        `harga` int(11) NOT NULL,
        `jumlah` int(11) NOT NULL,
        `total_harga` int(11) NOT NULL,
        `tanggal_transaksi` datetime NOT NULL,
        `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB AUTO_INCREMENT = 10 DEFAULT CHARSET = latin1;

--

-- Dumping data for table `transaksi`

--

INSERT INTO
    `transaksi` (
        `id_transaksi`,
        `id_user`,
        `id_pelanggan`,
        `kode_transaksi`,
        `id_produk`,
        `harga`,
        `jumlah`,
        `total_harga`,
        `tanggal_transaksi`,
        `tanggal_update`
    )
VALUES (
        1,
        0,
        4,
        '09032021OL9MKWLJ',
        15,
        3500000,
        1,
        3500000,
        '2021-03-09 00:00:00',
        '2021-03-09 10:51:02'
    ), (
        2,
        0,
        4,
        '09032021MYRUCPLN',
        12,
        6500000,
        1,
        6500000,
        '2021-03-09 00:00:00',
        '2021-03-09 10:52:23'
    ), (
        3,
        0,
        4,
        '09032021MYRUCPLN',
        14,
        2500000,
        2,
        5000000,
        '2021-03-09 00:00:00',
        '2021-03-09 10:52:23'
    ), (
        4,
        0,
        4,
        '09032021KH1HMWZS',
        15,
        3500000,
        1,
        3500000,
        '2021-03-09 00:00:00',
        '2021-03-09 10:56:35'
    ), (
        5,
        0,
        4,
        '09032021KH1HMWZS',
        11,
        5500000,
        1,
        5500000,
        '2021-03-09 00:00:00',
        '2021-03-09 10:56:35'
    ), (
        6,
        0,
        4,
        '0903202143WP6TME',
        15,
        3500000,
        1,
        3500000,
        '2021-03-09 00:00:00',
        '2021-03-09 10:58:15'
    ), (
        7,
        0,
        5,
        '100320216NRWJB2I',
        15,
        3500000,
        1,
        3500000,
        '2021-03-10 00:00:00',
        '2021-03-10 04:44:59'
    ), (
        8,
        0,
        5,
        '10032021JVYJGFG4',
        15,
        3500000,
        1,
        3500000,
        '2021-03-10 00:00:00',
        '2021-03-10 05:06:41'
    ), (
        9,
        0,
        4,
        '24042021ODEQTJXY',
        13,
        1500000,
        1,
        1500000,
        '2021-04-24 00:00:00',
        '2021-04-24 07:40:21'
    );

-- --------------------------------------------------------

--

-- Table structure for table `user`

--

DROP TABLE IF EXISTS `user` ;

FLUSH TABLES `user` ;

CREATE TABLE
    IF NOT EXISTS `user` (
        `id_user` int(11) NOT NULL,
        `nama` varchar(50) NOT NULL,
        `email` varchar(255) NOT NULL,
        `username` varchar(32) NOT NULL,
        `password` varchar(256) NOT NULL,
        `akses_level` varchar(20) NOT NULL,
        `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB AUTO_INCREMENT = 12 DEFAULT CHARSET = latin1;

--

-- Dumping data for table `user`

--

INSERT INTO
    `user` (
        `id_user`,
        `nama`,
        `email`,
        `username`,
        `password`,
        `akses_level`,
        `tanggal_update`
    )
VALUES (
        2,
        'Ekhwan Juvana',
        'isaylees@gmail.com',
        ' ekhwan ',
        '$2y$10$IKV14.6reJ5J0/5F/6bTgeDoBED6kUXkQRR89sbCJdvomlwPnQFdq',
        'Admin',
        '2021-03-03 00:32:55'
    ), (
        9,
        'Muh Arip',
        'islahekka@gmail.com',
        'Aripee',
        '$2y$10$3YN7uc5zrh7JYGGkr2txr.eCv1KY1cC.PL45EkAOH.PK4giFouJoC',
        'Admin',
        '2021-03-02 04:14:42'
    ), (
        10,
        '   Eri',
        'eri@gamail.com',
        'erilukman',
        '$2y$10$0m06DOh8EVZcGfcbMl3Vz.a/t.uF.clf.BTMs7jgI2XDD7pGwmGAy',
        'Admin',
        '2021-03-02 04:11:26'
    ), (
        11,
        '  Tata Redha Al Fath',
        'tataredhaalfath13@gmail.com',
        ' Redha13',
        '$2y$10$e5kbxdwI6pqjmcYFenYeYeKKwJDMC7nY7ONDHwpOGqJyYt.A3m7Ce',
        'Admin',
        '2021-03-03 00:32:25'
    );

--

-- Indexes for dumped tables

--

--

-- Indexes for table `berita`

--

ALTER TABLE `berita` ADD PRIMARY KEY (`id_berita`);

--

-- Indexes for table `gambar`

--

ALTER TABLE `gambar` ADD PRIMARY KEY (`id_gambar`);

--

-- Indexes for table `header_transaksi`

--

ALTER TABLE `header_transaksi`
ADD
    PRIMARY KEY (`id_header_transaksi`),
ADD
    UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--

-- Indexes for table `kategori`

--

ALTER TABLE `kategori` ADD PRIMARY KEY (`id_kategori`);

--

-- Indexes for table `konfigurasi`

--

ALTER TABLE `konfigurasi` ADD PRIMARY KEY (`id_konfigurasi`);

--

-- Indexes for table `pelanggan`

--

ALTER TABLE `pelanggan`
ADD
    PRIMARY KEY (`id_pelanggan`),
ADD UNIQUE KEY `email` (`email`);

--

-- Indexes for table `produk`

--

ALTER TABLE `produk`
ADD
    PRIMARY KEY (`id_produk`),
ADD
    UNIQUE KEY `kode_produk` (`kode_produk`);

--

-- Indexes for table `rekening`

--

ALTER TABLE `rekening`
ADD
    PRIMARY KEY (`id_rekening`),
ADD
    UNIQUE KEY `nomor_rekening` (`nomor_rekening`);

--

-- Indexes for table `transaksi`

--

ALTER TABLE `transaksi` ADD PRIMARY KEY (`id_transaksi`);

--

-- Indexes for table `user`

--

ALTER TABLE `user`
ADD PRIMARY KEY (`id_user`),
ADD
    UNIQUE KEY `username` (`username`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `gambar`

--

ALTER TABLE
    `gambar` MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

--

-- AUTO_INCREMENT for table `header_transaksi`

--

ALTER TABLE
    `header_transaksi` MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 10;

--

-- AUTO_INCREMENT for table `kategori`

--

ALTER TABLE
    `kategori` MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 8;

--

-- AUTO_INCREMENT for table `konfigurasi`

--

ALTER TABLE
    `konfigurasi` MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--

-- AUTO_INCREMENT for table `pelanggan`

--

ALTER TABLE
    `pelanggan` MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

--

-- AUTO_INCREMENT for table `produk`

--

ALTER TABLE
    `produk` MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 14;

--

-- AUTO_INCREMENT for table `rekening`

--

ALTER TABLE
    `rekening` MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

--

-- AUTO_INCREMENT for table `transaksi`

--

ALTER TABLE
    `transaksi` MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 10;

--

-- AUTO_INCREMENT for table `user`

--

ALTER TABLE
    `user` MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 12;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;