-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 03:35 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surat2`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisibppka`
--

CREATE TABLE IF NOT EXISTS `disposisibppka` (
  `NO_DISPOSISI` varchar(20) NOT NULL,
  `NO` int(11) DEFAULT NULL,
  `JENIS_DISPOSISI` varchar(30) DEFAULT NULL,
  `KIRIM_DISPOSISI` date DEFAULT NULL,
  `TERIMA_DISPOSISI` date DEFAULT NULL,
  `NO_AGENDA` int(11) DEFAULT NULL,
  `TUJUAN_DISPOSISI` varchar(50) NOT NULL,
  `KLASIFIKASI_DISPOSISI` varchar(50) NOT NULL,
  `DISPOSISI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisibppka`
--

INSERT INTO `disposisibppka` (`NO_DISPOSISI`, `NO`, `JENIS_DISPOSISI`, `KIRIM_DISPOSISI`, `TERIMA_DISPOSISI`, `NO_AGENDA`, `TUJUAN_DISPOSISI`, `KLASIFIKASI_DISPOSISI`, `DISPOSISI`) VALUES
('d1', 19, '', '0000-00-00', '0000-00-00', 0, '15,', '18,', '');

-- --------------------------------------------------------

--
-- Table structure for table `disposisisekda`
--

CREATE TABLE IF NOT EXISTS `disposisisekda` (
  `NO_DISPOSISI1` varchar(20) NOT NULL,
  `NO` int(11) DEFAULT NULL,
  `JENIS_DISPOSISI1` varchar(30) DEFAULT NULL,
  `KIRIM_DISPOSISI1` date DEFAULT NULL,
  `TERIMA_DISPOSISI1` date DEFAULT NULL,
  `NO_AGENDA1` int(11) DEFAULT NULL,
  `TUJUAN_DISPOSISI1` varchar(50) NOT NULL,
  `KLASIFIKASI_DISPOSISI1` varchar(50) NOT NULL,
  `DISPOSISI1` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisisekda`
--

INSERT INTO `disposisisekda` (`NO_DISPOSISI1`, `NO`, `JENIS_DISPOSISI1`, `KIRIM_DISPOSISI1`, `TERIMA_DISPOSISI1`, `NO_AGENDA1`, `TUJUAN_DISPOSISI1`, `KLASIFIKASI_DISPOSISI1`, `DISPOSISI1`) VALUES
('d2', 19, 'sekda', '0000-00-00', '0000-00-00', 0, '1,', '17,', '');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE IF NOT EXISTS `klasifikasi` (
`ID_KLAS` int(4) NOT NULL,
  `NAMA_KLAS` varchar(100) NOT NULL,
  `STATUS_KLAS` enum('AKTIF','TIDAK AKTIF','','') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`ID_KLAS`, `NAMA_KLAS`, `STATUS_KLAS`) VALUES
(1, 'Amat Segera', 'AKTIF'),
(2, 'Segera', 'AKTIF'),
(3, 'Koordinasikan', 'AKTIF'),
(4, 'Konfirmasi', 'AKTIF'),
(6, 'Untuk Diketahui', 'AKTIF'),
(7, 'Laporkan Yth. Bapak Bupati', 'AKTIF'),
(8, 'Sarankan Yth. Bapak Bupati', 'AKTIF'),
(9, 'Tindak Lanjuti', 'AKTIF'),
(10, 'Sarankan', 'AKTIF'),
(11, 'Agar Menghadap Saya', 'AKTIF'),
(12, 'Laporkan Hasilnya', 'AKTIF'),
(13, 'Untuk Diwakili', 'AKTIF'),
(14, 'ACC', 'AKTIF'),
(15, 'Rapatkan', 'AKTIF'),
(16, 'Untuk Diproses', 'AKTIF'),
(17, 'Sampaikan Ybs.', 'AKTIF'),
(18, 'Siapkan', 'AKTIF'),
(19, 'Pertimbangkan', 'AKTIF'),
(20, 'Pedomani', 'AKTIF'),
(21, 'Lanjutkan2', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi2`
--

CREATE TABLE IF NOT EXISTS `klasifikasi2` (
`ID_KLAS2` int(11) NOT NULL,
  `NAMA_KLAS2` varchar(50) NOT NULL,
  `STATUS_KLAS` enum('AKTIF','TIDAK AKTIF','','') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `klasifikasi2`
--

INSERT INTO `klasifikasi2` (`ID_KLAS2`, `NAMA_KLAS2`, `STATUS_KLAS`) VALUES
(1, 'Segera', 'AKTIF'),
(2, 'Biasa', 'AKTIF'),
(3, 'ACC', 'AKTIF'),
(4, 'Tindak Lanjut', 'AKTIF'),
(5, 'Selesaikan', 'AKTIF'),
(6, 'Pedomani', 'AKTIF'),
(7, 'Sarankan', 'AKTIF'),
(8, 'Untuk Diketahui', 'AKTIF'),
(9, 'Untuk Diproses', 'AKTIF'),
(10, 'Sampaika Ybs.', 'AKTIF'),
(11, 'Siapkan', 'AKTIF'),
(12, 'Pertimbangkan', 'AKTIF'),
(13, 'Agar menghadap saya', 'AKTIF'),
(14, 'Periksa Posisi Saya di Dalam', 'AKTIF'),
(15, 'Agar Hadir', 'AKTIF'),
(16, 'Kompulir', 'AKTIF'),
(17, 'Agendakan', 'AKTIF'),
(18, 'Laporkan Hasilnya', 'AKTIF'),
(19, 'Untuk Diwakili', 'AKTIF'),
(20, 'Segerakan', 'TIDAK AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`ID_USER` int(11) NOT NULL,
  `NAMA_USER` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `LEVEL` varchar(10) DEFAULT NULL,
  `JK_USER` varchar(15) DEFAULT NULL,
  `EMAIL_USER` varchar(50) DEFAULT NULL,
  `HP_USER` varchar(12) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID_USER`, `NAMA_USER`, `USERNAME`, `PASSWORD`, `LEVEL`, `JK_USER`, `EMAIL_USER`, `HP_USER`) VALUES
(5, 'Susi Susanti', 'susi', 'susi2903', 'admin', 'Perempuan', 'susisusanti@gmail.com', '082303456787'),
(6, 'Febri Indra Ariyanto', 'febri', 'j4s4p3n4', 'admin', 'Laki-laki', 'FEBRI2@gmail.com', '082301932956'),
(7, 'Erwin Wahyu Ningsih', 'erwin2', 'erwin', 'admin', 'Laki-laki', 'erwin3@gmail.com', '082111000100');

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar`
--

CREATE TABLE IF NOT EXISTS `suratkeluar` (
  `NO_SURATK` varchar(30) DEFAULT NULL,
`NOK` int(11) NOT NULL,
  `TANGGAL_SURATK` date DEFAULT NULL,
  `TANGGAL_KIRIMK` date DEFAULT NULL,
  `SIFATK` varchar(20) DEFAULT NULL,
  `TUJUAN_SURATK` varchar(150) DEFAULT NULL,
  `PERIHAL_SURATK` varchar(200) DEFAULT NULL,
  `NO_AGENDAK` int(11) DEFAULT NULL,
  `KET` text,
  `TANGGAL_UPLOAD2` date DEFAULT NULL,
  `TIPE_FILE2` varchar(10) DEFAULT NULL,
  `UKURAN_FILE2` int(11) DEFAULT NULL,
  `FILE2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `suratkeluar`
--

INSERT INTO `suratkeluar` (`NO_SURATK`, `NOK`, `TANGGAL_SURATK`, `TANGGAL_KIRIMK`, `SIFATK`, `TUJUAN_SURATK`, `PERIHAL_SURATK`, `NO_AGENDAK`, `KET`, `TANGGAL_UPLOAD2`, `TIPE_FILE2`, `UKURAN_FILE2`, `FILE2`) VALUES
('', 2, '2017-08-03', '2017-08-19', 'Penting', 'Dinas Kesehatan Kab. Sumenep', 'Perbaikan kesehatan', 453, 'OK', '2017-08-22', 'pdf', 171804, '../files2/Soal UTS PPB.pdf'),
('surat/03', 7, '2017-08-16', '2017-08-12', 'penting sekali', 'Dinas Kesehatan Kab. Sumenep', 'kesehatan', 5678, 'ok', '2017-08-22', 'docx', 22528, '../files2/ppb translate-2.docx');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE IF NOT EXISTS `suratmasuk` (
`NO` int(11) NOT NULL,
  `NO_SURAT` varchar(30) DEFAULT NULL,
  `TANGGAL_SURAT` date DEFAULT NULL,
  `SIFAT` varchar(20) DEFAULT NULL,
  `PENGIRIM_SURAT` varchar(100) DEFAULT NULL,
  `PERIHAL_SURAT` text,
  `TANGGAL_UPLOAD` date DEFAULT NULL,
  `TIPE_FILE` varchar(20) DEFAULT NULL,
  `UKURAN_FILE` int(11) DEFAULT NULL,
  `FILE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `suratmasuk`
--

INSERT INTO `suratmasuk` (`NO`, `NO_SURAT`, `TANGGAL_SURAT`, `SIFAT`, `PENGIRIM_SURAT`, `PERIHAL_SURAT`, `TANGGAL_UPLOAD`, `TIPE_FILE`, `UKURAN_FILE`, `FILE`) VALUES
(19, 'surat1/002/2', '2017-08-03', 'Penting', 'dinas pendidikan', 'Anggaran ', '2017-08-21', 'docx', 303454, '../files/PPB UTS.docx'),
(20, 'rtytgf', '0000-00-00', '', '', 'fd', '2017-09-13', 'docx', 1779414, '../files/ppb translate-2.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE IF NOT EXISTS `tujuan` (
`ID_TUJUAN` int(11) NOT NULL,
  `NAMA_TUJUAN` varchar(60) NOT NULL,
  `STATUS_TUJUAN` enum('AKTIF','TIDAK AKTIF','','') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`ID_TUJUAN`, `NAMA_TUJUAN`, `STATUS_TUJUAN`) VALUES
(2, 'Kasubbag. Umum dan Kepegawaian', 'AKTIF'),
(3, 'Kasubbag. Program dan Perencanaan', 'AKTIF'),
(4, 'Kasubbag. Keuangan', 'AKTIF'),
(5, 'Kabid. Pendataan, Penetapan dan Pengendalian', 'AKTIF'),
(6, 'Kasubbid Pendataan dan Pendaftaran', 'AKTIF'),
(7, 'Kasubbid Penetapan', 'AKTIF'),
(8, 'Kasubbid Pengendalian', 'AKTIF'),
(9, 'Kabid. Pelayanan, Penagihan dan pembinaan ', 'AKTIF'),
(10, 'Kasubbid Pelayanan Pajak dan Restribusi Daerah', 'AKTIF'),
(11, 'Kasubbid Penagihan dan Pelayanan Keberatan', 'AKTIF'),
(12, 'Kabid Anggaran', 'AKTIF'),
(13, 'Kasubbid Perencanaan dan Penyusunan Anggaran Daerah', 'AKTIF'),
(14, 'Kasubbid Pengelolaan Anggaran', 'AKTIF'),
(15, 'Kabid. Pembendaharaan', 'AKTIF'),
(16, 'Kasubbid Belanja Langsung', 'AKTIF'),
(17, 'Kasubbid Belanja Tidak Langsung dan Pembiayaan', 'AKTIF'),
(18, 'Kasubbid Pengelolaan Kas Daerah', 'AKTIF'),
(19, 'Kabid. Akutansi dan Pelaporan', 'AKTIF'),
(20, 'Kasubbid Akuntansi Pendapaatan dan Pembiayaan ', 'AKTIF'),
(21, 'Kasubbid Akuntansi Belanja', 'AKTIF'),
(22, 'Kasubbid Evaluasi dan Pelaporan', 'AKTIF'),
(23, 'Kabid. Aset', 'AKTIF'),
(24, 'Kasubbid Analisa Kebutuhan Aset Daerah', 'AKTIF'),
(25, 'Kasubbid Penatausahaan Aset Daerah', 'AKTIF'),
(26, 'Kasubbid Pengendalian Aset Daerah', 'AKTIF'),
(27, 'Bendahara Penerimaan SKPKD', 'AKTIF'),
(28, 'Bendahara Pengeluaran SKPKD', 'AKTIF'),
(29, 'Bendahara Penerimaan SKPD', 'AKTIF'),
(30, 'BARU2', 'TIDAK AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan2`
--

CREATE TABLE IF NOT EXISTS `tujuan2` (
`ID_TUJUAN2` int(11) NOT NULL,
  `NAMA_TUJUAN2` varchar(50) NOT NULL,
  `STATUS_TUJUAN2` enum('AKTIF','TIDAK AKTIF','','') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `tujuan2`
--

INSERT INTO `tujuan2` (`ID_TUJUAN2`, `NAMA_TUJUAN2`, `STATUS_TUJUAN2`) VALUES
(1, 'Wakil Bupati', 'AKTIF'),
(2, 'Sekda', 'AKTIF'),
(3, 'Staf Ahli Bid. Hukum & Politik', 'AKTIF'),
(4, 'Staf Ahli Bid. Pemerintah', 'AKTIF'),
(5, 'Staf Ahli Bid. Pembangunan', 'AKTIF'),
(6, 'Staf Ahli Bid. Kemasy. & SDM', 'AKTIF'),
(7, 'Staf Ahli Bid. Ekonomi & Keu', 'AKTIF'),
(8, 'Asisten Pemerintahan', 'AKTIF'),
(9, 'Kabag. Pemerintah Umum & Otoda', 'AKTIF'),
(10, 'Kabag. Pemerintahan Desa', 'AKTIF'),
(11, 'Kabag Hukum', 'AKTIF'),
(12, 'Asisten Perekonomian & Pemb', 'AKTIF'),
(13, 'Kabag Perekonomian', 'AKTIF'),
(14, 'Kabag Kesejahteraan Masy', 'AKTIF'),
(15, 'Kabag Pembangunan', 'AKTIF'),
(16, 'Asisten Administrasi Umum', 'AKTIF'),
(17, 'Kabag. Umum', 'AKTIF'),
(18, 'Kasi Kabag. Organisas', 'AKTIF'),
(19, 'Kabag. Humas & Protokol', 'AKTIF'),
(20, 'Kadis. Pendidikan', 'AKTIF'),
(21, 'Kadis. Kesehatan', 'AKTIF'),
(22, 'Kadis. Sosial', 'AKTIF'),
(23, 'Kadis. Naker & Transmigrasi', 'AKTIF'),
(24, 'Kadis. Perhubungan', 'AKTIF'),
(25, 'Kadis. Kom. & Informatika', 'AKTIF'),
(26, 'Kadis. Kebudayaan, Perpora', 'AKTIF'),
(27, 'Kadis. PU Bina Marga', 'AKTIF'),
(28, 'Kadis. PU. Pengairan', 'AKTIF'),
(29, 'Kadis. PU. Cipta Karya & TR', 'AKTIF'),
(30, 'Kadis. Koperasi UKM', 'AKTIF'),
(31, 'Kadis. Kadis. Perindag', 'AKTIF'),
(32, 'Kadis. Kelautan & Perikanan', 'AKTIF'),
(33, 'Kadis. Pertanian Tanpang', 'AKTIF'),
(34, 'Kadis. Kehutanan & Perkebunan', 'AKTIF'),
(35, 'Kadis. Kependudukan & Capil', 'AKTIF'),
(36, 'Kadis. Peternakan', 'AKTIF'),
(37, 'Kadis. Kadis. PPKA', 'AKTIF'),
(38, 'Sekretaris DPRD', 'AKTIF'),
(39, 'Inspektur Kabupaten', 'AKTIF'),
(40, 'Kepala Bappeda', 'AKTIF'),
(41, 'Kaban. Kepeg. & Pendiklat', 'AKTIF'),
(42, 'Kaban. Lingkungan Hidup', 'AKTIF'),
(43, 'Kaban. PMP dan KB', 'AKTIF'),
(44, 'Kaban. Kesbangpol & Linmas', 'AKTIF'),
(45, 'Kaban. Pely. Perijinan Terpadu', 'AKTIF'),
(46, 'Kaban. Pen. Bencana Daerah', 'AKTIF'),
(47, 'Kaban. Kebers. & Pertamanan', 'AKTIF'),
(48, 'Kaban. Perpust, Arsip dan Dok', 'AKTIF'),
(49, 'Kaban. ESDM', 'AKTIF'),
(50, 'Kepala BNNK', 'AKTIF'),
(51, 'Kepala Satpol PP', 'AKTIF'),
(52, 'Dir. BLUD RS dr. H. Moh. Anwar', 'AKTIF'),
(53, 'Direktur PDAM', 'AKTIF'),
(54, 'Direktur PD. Sumekar', 'AKTIF'),
(55, 'Direktur BPRS', 'AKTIF'),
(56, 'Direktur PT. WUS', 'AKTIF'),
(57, 'Ketua Harian KONI', 'AKTIF'),
(58, 'Ketua TP PKK Kabupaten', 'AKTIF'),
(59, 'Camat', 'AKTIF'),
(60, 'Sekretariat DP Korpri', 'AKTIF'),
(61, 'SPRI', 'AKTIF'),
(62, 'COBA', 'AKTIF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisibppka`
--
ALTER TABLE `disposisibppka`
 ADD PRIMARY KEY (`NO_DISPOSISI`), ADD UNIQUE KEY `NO` (`NO`);

--
-- Indexes for table `disposisisekda`
--
ALTER TABLE `disposisisekda`
 ADD PRIMARY KEY (`NO_DISPOSISI1`), ADD KEY `disposisisekda_ibfk_1` (`NO`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
 ADD PRIMARY KEY (`ID_KLAS`);

--
-- Indexes for table `klasifikasi2`
--
ALTER TABLE `klasifikasi2`
 ADD PRIMARY KEY (`ID_KLAS2`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`ID_USER`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
 ADD PRIMARY KEY (`NOK`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
 ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
 ADD PRIMARY KEY (`ID_TUJUAN`);

--
-- Indexes for table `tujuan2`
--
ALTER TABLE `tujuan2`
 ADD PRIMARY KEY (`ID_TUJUAN2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
MODIFY `ID_KLAS` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `klasifikasi2`
--
ALTER TABLE `klasifikasi2`
MODIFY `ID_KLAS2` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
MODIFY `NOK` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
MODIFY `ID_TUJUAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tujuan2`
--
ALTER TABLE `tujuan2`
MODIFY `ID_TUJUAN2` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisibppka`
--
ALTER TABLE `disposisibppka`
ADD CONSTRAINT `disposisibppka_ibfk_1` FOREIGN KEY (`NO`) REFERENCES `suratmasuk` (`NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `disposisisekda`
--
ALTER TABLE `disposisisekda`
ADD CONSTRAINT `disposisisekda_ibfk_1` FOREIGN KEY (`NO`) REFERENCES `suratmasuk` (`NO`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
