CREATE DATABASE  IF NOT EXISTS `alfina` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `alfina`;
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
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengguna`
--

LOCK TABLES `pengguna` WRITE;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_aktif_mahasiswa`
--

DROP TABLE IF EXISTS `surat_aktif_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_aktif_mahasiswa` (
  `id` int(11) NOT NULL,
  `bahasa` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_aktif_mahasiswa`
--

LOCK TABLES `surat_aktif_mahasiswa` WRITE;
/*!40000 ALTER TABLE `surat_aktif_mahasiswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_aktif_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_berkelakuan_baik`
--

DROP TABLE IF EXISTS `surat_berkelakuan_baik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_berkelakuan_baik` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `deskripsi_tujuan` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_berkelakuan_baik`
--

LOCK TABLES `surat_berkelakuan_baik` WRITE;
/*!40000 ALTER TABLE `surat_berkelakuan_baik` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_berkelakuan_baik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_dispensasi`
--

DROP TABLE IF EXISTS `surat_dispensasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_dispensasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tujuan` varchar(300) DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `tanggal_mulai` varchar(45) DEFAULT NULL,
  `tanggal_selesai` varchar(45) DEFAULT NULL,
  `link_eksternal` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_dispensasi`
--

LOCK TABLES `surat_dispensasi` WRITE;
/*!40000 ALTER TABLE `surat_dispensasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_dispensasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_pengantar_kp`
--

DROP TABLE IF EXISTS `surat_pengantar_kp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_pengantar_kp` (
  `id` int(11) NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_pengantar_kp`
--

LOCK TABLES `surat_pengantar_kp` WRITE;
/*!40000 ALTER TABLE `surat_pengantar_kp` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_pengantar_kp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_pengantar_mata_kuliah`
--

DROP TABLE IF EXISTS `surat_pengantar_mata_kuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_pengantar_mata_kuliah` (
  `id` int(11) NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_pengantar_mata_kuliah`
--

LOCK TABLES `surat_pengantar_mata_kuliah` WRITE;
/*!40000 ALTER TABLE `surat_pengantar_mata_kuliah` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_pengantar_mata_kuliah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_pengantar_ta`
--

DROP TABLE IF EXISTS `surat_pengantar_ta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_pengantar_ta` (
  `id` int(11) NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_pengantar_ta`
--

LOCK TABLES `surat_pengantar_ta` WRITE;
/*!40000 ALTER TABLE `surat_pengantar_ta` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_pengantar_ta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_rekomendasi_beasiswa`
--

DROP TABLE IF EXISTS `surat_rekomendasi_beasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_rekomendasi_beasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `nama_beasiswa` varchar(300) DEFAULT NULL,
  `link_eksternal` text DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `format_surat` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_rekomendasi_beasiswa`
--

LOCK TABLES `surat_rekomendasi_beasiswa` WRITE;
/*!40000 ALTER TABLE `surat_rekomendasi_beasiswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_rekomendasi_beasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_tugas_kompetisi`
--

DROP TABLE IF EXISTS `surat_tugas_kompetisi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_tugas_kompetisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `bahasa` varchar(45) DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `tanggal_kompetisi` varchar(45) DEFAULT NULL,
  `jenis_kompetisi` varchar(100) DEFAULT NULL,
  `url` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_tugas_kompetisi`
--

LOCK TABLES `surat_tugas_kompetisi` WRITE;
/*!40000 ALTER TABLE `surat_tugas_kompetisi` DISABLE KEYS */;
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

-- Dump completed on 2024-10-17  7:47:32
