-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: alfina
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengguna`
--

LOCK TABLES `pengguna` WRITE;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` VALUES (130,'salsabilakusuma','salsa123','Salsabila Kusumaningrum','1301184110','mahasiswa','PERUMAHAN BUMI PUSPITEK ASRI SEKTOR 4 RW-07 RT-05 BLOK I NOMOR 10 SITUGADUNG PAGEDANGAN','S1 Informatika');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_aktif_mahasiswa`
--

DROP TABLE IF EXISTS `surat_aktif_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_aktif_mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bahasa` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `Lainnya` text NOT NULL,
  `Nama_Ortu` text NOT NULL,
  `Pekerjaan_Ortu` text NOT NULL,
  `Nip_Ortu` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_aktif_mahasiswa`
--

LOCK TABLES `surat_aktif_mahasiswa` WRITE;
/*!40000 ALTER TABLE `surat_aktif_mahasiswa` DISABLE KEYS */;
INSERT INTO `surat_aktif_mahasiswa` VALUES (1,'English','Untuk Beasiswa','Salsabila Kusumaningrum',NULL,'S1 Informatika','PERUMAHAN BUMI PUSPITEK ASRI SEKTOR 4 RW-07 RT-05 BLOK I NOMOR 10 SITUGADUNG PAGEDANGAN','Menunggu','2024-10-17','pppp','aaa','bbb','ccc'),(2,'Bahasa','Untuk Asuransi Kesehatan ','Salsabila Kusumaningrum','1301184110','S1 Informatika','Bandung','Disetujui','2024-10-17','','Sulistiana','Pegawai Negeri Sipil','1234567'),(3,'Bahasa','Untuk Kehilangan KTM','Salsabila Kusumaningrum','1301184110','S1 Informatika','Bandung','Ditolak','2024-10-17','','Sulistiana','PNS','1234567');
/*!40000 ALTER TABLE `surat_aktif_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_berkelakuan_baik`
--

DROP TABLE IF EXISTS `surat_berkelakuan_baik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_berkelakuan_baik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `deskripsi_tujuan` varchar(45) DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_berkelakuan_baik`
--

LOCK TABLES `surat_berkelakuan_baik` WRITE;
/*!40000 ALTER TABLE `surat_berkelakuan_baik` DISABLE KEYS */;
INSERT INTO `surat_berkelakuan_baik` VALUES (130,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Magang','Keperluan berkas untuk magang di perusahaan','2024-10-17','Disetujui'),(131,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Beasiswa','Keperluan berkas untuk beasiswa','2024-09-01','Disetujui'),(132,'Salsabila Kusumaningrum','1301204382','S1 Informatika','English','Pendaftaran Studi Magister','keperluan untuk berkas mendaftar S2','2024-08-15','Disetujui');
/*!40000 ALTER TABLE `surat_berkelakuan_baik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_dispensasi`
--

DROP TABLE IF EXISTS `surat_dispensasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_dispensasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tujuan` varchar(300) DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `tanggal_mulai` varchar(45) DEFAULT NULL,
  `tanggal_selesai` varchar(45) DEFAULT NULL,
  `link_eksternal` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_dispensasi`
--

LOCK TABLES `surat_dispensasi` WRITE;
/*!40000 ALTER TABLE `surat_dispensasi` DISABLE KEYS */;
INSERT INTO `surat_dispensasi` VALUES (130,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Magang','image','10/10/2023','10/11/2023',NULL,'2023-09-15','Disetujui'),(131,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Lomba Hackathon','image','2024-03-19','2024-03-20',NULL,'2024-03-04','Menunggu'),(132,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Lomba Paduan suara ','image','2023-06-25','2023-06-30',NULL,'2023-06-07','Ditolak');
/*!40000 ALTER TABLE `surat_dispensasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_pengantar_kp`
--

DROP TABLE IF EXISTS `surat_pengantar_kp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_pengantar_kp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `topik` varchar(200) DEFAULT NULL,
  `anggota` text DEFAULT NULL,
  `tanggal_mulai` varchar(45) DEFAULT NULL,
  `tanggal_selesai` varchar(45) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `nama_divisi` varchar(100) DEFAULT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `alamat_perusahaan` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_pengantar_kp`
--

LOCK TABLES `surat_pengantar_kp` WRITE;
/*!40000 ALTER TABLE `surat_pengantar_kp` DISABLE KEYS */;
INSERT INTO `surat_pengantar_kp` VALUES (130,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Software engineer','Salsabila Kusumaningrum','2023-06-01','2023-07-03','PT Mitra Digital Solusi','Teknologi Informasi (IT)\r\n','Analis Sistem','Jl. Jend. Sudirman No. 45, Jakarta Pusat, DKI Jakarta','2023-05-01','Disetujui'),(131,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Data Análisis','Salsabila Kusumaningrum, Kania Ardhani Putri, Larasati, Syahrul Foriawan','2023-04-04','2023-05-04','InnoByte Solutions','Data Science & Artificial Intelligence','Data Analyst','Gedung InnoHub, Lantai 5, Jl. Sultan Iskandar Muda, Surabaya 60123\r\n','2023-03-01','Disetujui'),(132,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','System support','Salsabila Kusumaningrum, Alfina Rahmawati','2024-02-01','2024-03-01','CyberGate Solutions','Keamanan Siber','Cybersecurity Specialist','Plaza CyberGate, Jl. Patriot No. 45, Jakarta Selatan','2023-12-01','Disetujui');
/*!40000 ALTER TABLE `surat_pengantar_kp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_pengantar_mata_kuliah`
--

DROP TABLE IF EXISTS `surat_pengantar_mata_kuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_pengantar_mata_kuliah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `mata_kuliah` varchar(100) DEFAULT NULL,
  `anggota` varchar(150) DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `nama_divisi` varchar(200) DEFAULT NULL,
  `nama_jabatan` varchar(200) DEFAULT NULL,
  `alamat_perusahaan` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_pengantar_mata_kuliah`
--

LOCK TABLES `surat_pengantar_mata_kuliah` WRITE;
/*!40000 ALTER TABLE `surat_pengantar_mata_kuliah` DISABLE KEYS */;
INSERT INTO `surat_pengantar_mata_kuliah` VALUES (130,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Struktur Data','Salsabila Kusumaningrum, Nabila Hana\' Salimah','PT Mitra Digital Solusi','Teknologi Informasi (IT)','Analis Sistem','Jl. Jend. Sudirman No. 45, Jakarta Pusat, DKI Jakarta','2024-10-17','Disetujui'),(131,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Verifikasi dan Validate Perangkat Lunar','Salsabila Kusumaningrum, Ridho Rosadi Asri, Octhovino','SoftSecure Innovations','Verifikasi dan Validasi Teknologi\r\n','Spesialis Validasi Sistem','alan Teknologi No. 10,\r\nKawasan Bisnis Digital,\r\nJakarta Selatan 12430, Indonesia','2024-10-17','Disetujui');
/*!40000 ALTER TABLE `surat_pengantar_mata_kuliah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_pengantar_ta`
--

DROP TABLE IF EXISTS `surat_pengantar_ta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_pengantar_ta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tipe_penelitian` varchar(100) DEFAULT NULL,
  `topik` varchar(200) DEFAULT NULL,
  `anggota` text DEFAULT NULL,
  `nama_perusahaan` varchar(200) DEFAULT NULL,
  `nama_divisi` varchar(100) DEFAULT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `alamat_perusahaan` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_pengantar_ta`
--

LOCK TABLES `surat_pengantar_ta` WRITE;
/*!40000 ALTER TABLE `surat_pengantar_ta` DISABLE KEYS */;
INSERT INTO `surat_pengantar_ta` VALUES (130,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Tugas Akhir','Ui ux','Salsabila Kusumaningrum','Direktorat Aset dan Sustainability Telkom University','Aset dan Sustainability','Direktur','Gedung E Kultubai Utara, Jl. Telekomunikasi, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257','2023-03-15','Disetujui');
/*!40000 ALTER TABLE `surat_pengantar_ta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_rekomendasi_beasiswa`
--

DROP TABLE IF EXISTS `surat_rekomendasi_beasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_rekomendasi_beasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `nama_beasiswa` varchar(300) DEFAULT NULL,
  `link_eksternal` text DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `format_surat` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_rekomendasi_beasiswa`
--

LOCK TABLES `surat_rekomendasi_beasiswa` WRITE;
/*!40000 ALTER TABLE `surat_rekomendasi_beasiswa` DISABLE KEYS */;
INSERT INTO `surat_rekomendasi_beasiswa` VALUES (130,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','orc',NULL,'image','file','2022-10-17','Disetujui'),(131,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','IDCloudhost',NULL,'image','file','2023-10-17','Disetujui'),(132,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','IGGS',NULL,'image','file','2024-10-17','Disetujui'),(134,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Testing','www.msn.com','SBB1729244670.pdf','SRJ1729244667.pdf','2024-10-18','Menunggu');
/*!40000 ALTER TABLE `surat_rekomendasi_beasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_tugas_kompetisi`
--

DROP TABLE IF EXISTS `surat_tugas_kompetisi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_tugas_kompetisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `Nama_lomba` text DEFAULT NULL,
  `tanggal_kompetisi` varchar(45) DEFAULT NULL,
  `jenis_kompetisi` varchar(100) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_tugas_kompetisi`
--

LOCK TABLES `surat_tugas_kompetisi` WRITE;
/*!40000 ALTER TABLE `surat_tugas_kompetisi` DISABLE KEYS */;
INSERT INTO `surat_tugas_kompetisi` VALUES (130,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Hackathon','2023-01-01','Kompetisi Nasional',NULL,'2023-02-01','Disetujui'),(131,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','ICStar','2023-06-01','Kompetisi Nasional',NULL,'2023-07-01','Disetujui'),(132,'Salsabila Kusumaningrum','1301184110','S1 Informatika','Bahasa','Gemastik','2024-01-01','Kompetisi Internasional',NULL,'2024-02-01','Disetujui');
/*!40000 ALTER TABLE `surat_tugas_kompetisi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-18 17:12:18
