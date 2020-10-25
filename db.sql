create database arkademy;

use arkademy;

CREATE TABLE `produk` (
  `id` int(11) NOT NULL auto_increment,
  `nama_produk` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
);