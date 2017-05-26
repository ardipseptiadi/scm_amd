/*
SQLyog Community v12.2.0 (64 bit)
MySQL - 10.1.19-MariaDB : Database - scm_amidis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`scm_amidis` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `am_agen` */

DROP TABLE IF EXISTS `am_agen`;

CREATE TABLE `am_agen` (
  `id_agen` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `telepon` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = aktif, 2 = tidak aktif',
  PRIMARY KEY (`id_agen`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `am_agen` */

insert  into `am_agen`(`id_agen`,`nama`,`alamat`,`telepon`,`email`,`status`) values 
(1,'giant','jl. angkasa',NULL,NULL,1),
(2,'Kings','Jl. Merdeka','','',1),
(3,'google','Jl. dunia','','',1),
(4,'Nashir','Jl. Sadang Serang','081234234','nashir@gmail.com',1);

/*Table structure for table `am_inventory_material` */

DROP TABLE IF EXISTS `am_inventory_material`;

CREATE TABLE `am_inventory_material` (
  `id_material` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_material` varchar(50) NOT NULL,
  `rata_rata_per_bulan` float DEFAULT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_inventory_material` */

/*Table structure for table `am_jabatan` */

DROP TABLE IF EXISTS `am_jabatan`;

CREATE TABLE `am_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(15) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `am_jabatan` */

insert  into `am_jabatan`(`id_jabatan`,`jabatan`) values 
(1,'direktur');

/*Table structure for table `am_karyawan` */

DROP TABLE IF EXISTS `am_karyawan`;

CREATE TABLE `am_karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = aktif, 2 = tidak aktif',
  `id_jabatan` int(11) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `am_karyawan` */

insert  into `am_karyawan`(`id_karyawan`,`nip`,`nama`,`telepon`,`email`,`status`,`id_jabatan`) values 
(1,'10112233','Agus Susilo','0812001122333','agus@susilo.com',1,1);

/*Table structure for table `am_kendaraan` */

DROP TABLE IF EXISTS `am_kendaraan`;

CREATE TABLE `am_kendaraan` (
  `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT,
  `no_polisi` varchar(15) DEFAULT NULL,
  `jenis` tinyint(1) DEFAULT NULL COMMENT '1 = engkel, 2 = fuso',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = aktif, 2 = tidak aktif',
  PRIMARY KEY (`id_kendaraan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `am_kendaraan` */

insert  into `am_kendaraan`(`id_kendaraan`,`no_polisi`,`jenis`,`status`) values 
(1,'D 7011 AA',0,1);

/*Table structure for table `am_material` */

DROP TABLE IF EXISTS `am_material`;

CREATE TABLE `am_material` (
  `id_material` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(10) DEFAULT NULL,
  `satuan` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `am_material` */

insert  into `am_material`(`id_material`,`nama`,`harga`,`satuan`) values 
(1,'cap',70000,NULL),
(2,'cap seal',50000,NULL),
(3,'tissue',50000,NULL),
(4,'stiker',40000,NULL);

/*Table structure for table `am_material_stok` */

DROP TABLE IF EXISTS `am_material_stok`;

CREATE TABLE `am_material_stok` (
  `id_material_stok` int(11) NOT NULL AUTO_INCREMENT,
  `id_material` int(11) NOT NULL,
  `tanggal_stok` date DEFAULT NULL,
  `jumlah_pada_stok` int(10) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_material_stok`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_material_stok` */

/*Table structure for table `am_pemesanan` */

DROP TABLE IF EXISTS `am_pemesanan`;

CREATE TABLE `am_pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_agen` int(11) NOT NULL,
  `no_order` varchar(30) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `is_verifikasi` tinyint(1) NOT NULL DEFAULT '0',
  `status_pemesanan` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = order',
  `created_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `am_pemesanan` */

insert  into `am_pemesanan`(`id_pemesanan`,`id_agen`,`no_order`,`tanggal_pengiriman`,`tanggal_pemesanan`,`is_verifikasi`,`status_pemesanan`,`created_at`,`is_deleted`) values 
(19,3,'po/2017/05/000001','2017-05-01','2017-05-04',0,1,NULL,0);

/*Table structure for table `am_pemesanan_detail` */

DROP TABLE IF EXISTS `am_pemesanan_detail`;

CREATE TABLE `am_pemesanan_detail` (
  `id_pemesanan_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `no_order` varchar(50) DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `is_verifikasi` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pemesanan_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `am_pemesanan_detail` */

insert  into `am_pemesanan_detail`(`id_pemesanan_detail`,`id_pemesanan`,`id_produk`,`no_order`,`harga`,`qty`,`jumlah`,`is_verifikasi`,`created_at`,`is_deleted`) values 
(7,19,1,'po/2017/05/000001',NULL,1,NULL,0,NULL,0);

/*Table structure for table `am_pengadaan` */

DROP TABLE IF EXISTS `am_pengadaan`;

CREATE TABLE `am_pengadaan` (
  `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_supplier` int(11) NOT NULL,
  `no_pengadaan` varchar(50) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `tanggal_pengadaan` date DEFAULT NULL,
  `is_verifikasi` tinyint(1) NOT NULL DEFAULT '0',
  `status_pengadaan` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pengadaan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `am_pengadaan` */

insert  into `am_pengadaan`(`id_pengadaan`,`id_supplier`,`no_pengadaan`,`tanggal_pengiriman`,`tanggal_pengadaan`,`is_verifikasi`,`status_pengadaan`,`created_at`,`is_deleted`) values 
(1,1,'1','2017-04-30','2017-05-18',0,0,NULL,0);

/*Table structure for table `am_pengiriman` */

DROP TABLE IF EXISTS `am_pengiriman`;

CREATE TABLE `am_pengiriman` (
  `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `no_order` varchar(11) DEFAULT NULL,
  `tgl_pengiriman` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pengiriman`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `am_pengiriman` */

insert  into `am_pengiriman`(`id_pengiriman`,`id_pemesanan`,`id_kendaraan`,`id_karyawan`,`no_order`,`tgl_pengiriman`,`status`,`created_at`,`is_deleted`) values 
(3,19,1,1,NULL,'0000-00-00',1,NULL,0),
(4,19,1,1,NULL,'2017-05-06',1,NULL,0);

/*Table structure for table `am_peramalan` */

DROP TABLE IF EXISTS `am_peramalan`;

CREATE TABLE `am_peramalan` (
  `id_peramalan` int(11) NOT NULL AUTO_INCREMENT,
  `bulan_mulai` date DEFAULT NULL,
  `bulan_selesai` date DEFAULT NULL,
  `bulan_peramalan` date DEFAULT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_peramalan` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_peramalan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_peramalan` */

/*Table structure for table `am_persediaan` */

DROP TABLE IF EXISTS `am_persediaan`;

CREATE TABLE `am_persediaan` (
  `id_persediaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_material` int(11) NOT NULL,
  `stok` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_persediaan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `am_persediaan` */

insert  into `am_persediaan`(`id_persediaan`,`id_material`,`stok`) values 
(1,1,260),
(2,2,1000),
(3,3,491000);

/*Table structure for table `am_persediaan_safety` */

DROP TABLE IF EXISTS `am_persediaan_safety`;

CREATE TABLE `am_persediaan_safety` (
  `id_persediaan_safety` int(11) NOT NULL AUTO_INCREMENT,
  `id_persediaan` int(11) NOT NULL,
  `safety_stok` int(10) NOT NULL,
  `tgl_persediaan` date NOT NULL,
  PRIMARY KEY (`id_persediaan_safety`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `am_persediaan_safety` */

insert  into `am_persediaan_safety`(`id_persediaan_safety`,`id_persediaan`,`safety_stok`,`tgl_persediaan`) values 
(1,1,25000,'2017-05-20');

/*Table structure for table `am_produk` */

DROP TABLE IF EXISTS `am_produk`;

CREATE TABLE `am_produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(10) DEFAULT NULL,
  `jenis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `am_produk` */

insert  into `am_produk`(`id_produk`,`kode_produk`,`jenis`) values 
(1,'BTL','botol'),
(2,'GLN','galon'),
(3,'CUP','gelas');

/*Table structure for table `am_produk_billofmaterials` */

DROP TABLE IF EXISTS `am_produk_billofmaterials`;

CREATE TABLE `am_produk_billofmaterials` (
  `id_billofmaterials` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `qty_used` int(20) DEFAULT NULL,
  `material_price` int(20) DEFAULT NULL,
  `name_bom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_billofmaterials`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_produk_billofmaterials` */

/*Table structure for table `am_produk_inventory` */

DROP TABLE IF EXISTS `am_produk_inventory`;

CREATE TABLE `am_produk_inventory` (
  `id_inventory` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_inventory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_produk_inventory` */

/*Table structure for table `am_riwayat_persediaan` */

DROP TABLE IF EXISTS `am_riwayat_persediaan`;

CREATE TABLE `am_riwayat_persediaan` (
  `id_riwayat_persediaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_material` int(11) NOT NULL,
  `stok` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '1 = tambah, 2 = kurang',
  `tanggal` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_riwayat_persediaan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `am_riwayat_persediaan` */

insert  into `am_riwayat_persediaan`(`id_riwayat_persediaan`,`id_material`,`stok`,`status`,`tanggal`,`created_at`) values 
(2,1,5,1,'2017-05-26','2017-05-26 06:36:02'),
(3,3,10000,2,'2017-05-26','2017-05-26 06:45:13');

/*Table structure for table `am_supplier` */

DROP TABLE IF EXISTS `am_supplier`;

CREATE TABLE `am_supplier` (
  `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `telepon` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = aktif, 2 = tidak aktif',
  `id_material` int(11) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `am_supplier` */

insert  into `am_supplier`(`id_supplier`,`nama`,`alamat`,`telepon`,`email`,`status`,`id_material`) values 
(1,'PT Makmur','jalan Soreang\r\n','021345','makmur@mail.com',1,0);

/*Table structure for table `am_supplier_item` */

DROP TABLE IF EXISTS `am_supplier_item`;

CREATE TABLE `am_supplier_item` (
  `id_supplier_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_supplier` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `tgl_pengadaan` datetime DEFAULT NULL,
  `disetujui` tinyint(1) NOT NULL DEFAULT '0',
  `jumlah_pengadaan` int(10) DEFAULT NULL,
  `harga_beli` int(15) DEFAULT NULL,
  `mulai_pengadaan` date DEFAULT NULL,
  `selesai_pengadaan` date DEFAULT NULL,
  `leadtime_pengadaan` int(5) DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_supplier_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_supplier_item` */

/*Table structure for table `am_transaksi_agen` */

DROP TABLE IF EXISTS `am_transaksi_agen`;

CREATE TABLE `am_transaksi_agen` (
  `id_transaksi_agen` int(11) NOT NULL AUTO_INCREMENT,
  `id_agen` int(11) NOT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `no_transaksi` varchar(10) DEFAULT NULL,
  `is_verifikasi` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_transaksi_agen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_transaksi_agen` */

/*Table structure for table `am_transaksi_agen_detail` */

DROP TABLE IF EXISTS `am_transaksi_agen_detail`;

CREATE TABLE `am_transaksi_agen_detail` (
  `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi_agen` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `is_verifikasi` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_transaksi_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_transaksi_agen_detail` */

/*Table structure for table `am_transaksi_tipe` */

DROP TABLE IF EXISTS `am_transaksi_tipe`;

CREATE TABLE `am_transaksi_tipe` (
  `id_tipe_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipe_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_transaksi_tipe` */

/*Table structure for table `am_user` */

DROP TABLE IF EXISTS `am_user`;

CREATE TABLE `am_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(15) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `am_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
