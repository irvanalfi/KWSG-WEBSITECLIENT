-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2021 pada 05.24
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwsg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mas_peg`
--

CREATE TABLE `mas_peg` (
  `ID` double NOT NULL,
  `NO_PEG` varchar(7) DEFAULT NULL,
  `NO_PPH` varchar(7) DEFAULT NULL,
  `NA_PEG` varchar(25) DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL,
  `ALAMAT_DMS` varchar(100) DEFAULT NULL,
  `ALAMAT_FASKES` varchar(100) DEFAULT NULL,
  `TEMPAT_LHR` varchar(20) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `TGL_MASUK` date DEFAULT NULL,
  `TGL_DINAS` date DEFAULT NULL,
  `TGL_AKIR` date DEFAULT NULL,
  `TGL_AGOL` date DEFAULT NULL,
  `TGL_AJAB` date DEFAULT NULL,
  `JEN_KEL` varchar(1) DEFAULT NULL,
  `KD_STATUS` varchar(4) DEFAULT NULL,
  `KD_STRATA` varchar(2) DEFAULT NULL,
  `KD_DIDIK` varchar(3) DEFAULT NULL,
  `KD_JAB` varchar(2) DEFAULT NULL,
  `KD_GOL` varchar(3) DEFAULT NULL,
  `KD_UNIT` varchar(4) DEFAULT NULL,
  `KD_AREA` varchar(2) DEFAULT NULL,
  `KD_JOB` varchar(3) DEFAULT NULL,
  `UNIT_AKA` varchar(4) DEFAULT NULL,
  `UNIT_PEN` varchar(4) DEFAULT NULL,
  `NO_REK` varchar(19) DEFAULT NULL,
  `NO_REKDPLK` varchar(14) DEFAULT NULL,
  `BANK` varchar(10) DEFAULT NULL,
  `KD_BANK` varchar(1) DEFAULT NULL,
  `NO_KPJ` varchar(11) DEFAULT NULL,
  `TJ_PROF` double DEFAULT NULL,
  `TJ_MANAJ` double DEFAULT NULL,
  `ANGGOTA_IP` varchar(1) DEFAULT NULL,
  `POT_IP` double DEFAULT NULL,
  `TGL_PEN` date DEFAULT NULL,
  `TGL_KELUAR` date DEFAULT NULL,
  `KELUAR` varchar(1) DEFAULT NULL,
  `STATUS_PEG` varchar(1) DEFAULT NULL,
  `NON_OBAT` varchar(1) DEFAULT NULL,
  `PAKDIN` bigint(20) DEFAULT NULL,
  `NO_NPWP` varchar(50) DEFAULT NULL,
  `ALAMATNPWP` varchar(100) DEFAULT NULL,
  `KD_STATPEG` varchar(2) DEFAULT NULL,
  `TJ_POSKO` double DEFAULT 0,
  `TJ_TUGAS` double DEFAULT 0,
  `TJ_PROYEK` double DEFAULT 0,
  `TJ_TRANS` double DEFAULT 0,
  `TJ_TEMPAT` double DEFAULT 0,
  `TJ_LEMBUR` varchar(1) DEFAULT '0',
  `NO_PEG_UNIT` varchar(15) DEFAULT NULL,
  `NM_IBU` varchar(25) DEFAULT NULL,
  `KD_NPP` varchar(15) DEFAULT NULL,
  `KD_VA` varchar(15) DEFAULT NULL COMMENT 'vitur bank',
  `NO_KTP` varchar(40) DEFAULT '-',
  `NO_KK` varchar(40) DEFAULT NULL,
  `KD_PTOS` varchar(3) DEFAULT NULL,
  `KD_KES` varchar(15) DEFAULT '-' COMMENT 'BPJS KESEHATAN',
  `EMAIL` varchar(50) DEFAULT NULL,
  `TOKEN` varchar(200) DEFAULT NULL,
  `NO_REKSINAR` varchar(15) DEFAULT '-',
  `NO_REKCAR` varchar(15) DEFAULT '-',
  `IP_ADDRESS` varchar(25) DEFAULT NULL,
  `USER_ID` varchar(25) DEFAULT NULL,
  `TGL_UPDATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `NOTIF_EMAIL` varchar(100) DEFAULT NULL,
  `MAC_ADDRESS` varchar(100) DEFAULT NULL,
  `ID_SENDER_ANDROID` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mas_peg`
--

INSERT INTO `mas_peg` (`ID`, `NO_PEG`, `NO_PPH`, `NA_PEG`, `ALAMAT`, `ALAMAT_DMS`, `ALAMAT_FASKES`, `TEMPAT_LHR`, `TGL_LAHIR`, `TGL_MASUK`, `TGL_DINAS`, `TGL_AKIR`, `TGL_AGOL`, `TGL_AJAB`, `JEN_KEL`, `KD_STATUS`, `KD_STRATA`, `KD_DIDIK`, `KD_JAB`, `KD_GOL`, `KD_UNIT`, `KD_AREA`, `KD_JOB`, `UNIT_AKA`, `UNIT_PEN`, `NO_REK`, `NO_REKDPLK`, `BANK`, `KD_BANK`, `NO_KPJ`, `TJ_PROF`, `TJ_MANAJ`, `ANGGOTA_IP`, `POT_IP`, `TGL_PEN`, `TGL_KELUAR`, `KELUAR`, `STATUS_PEG`, `NON_OBAT`, `PAKDIN`, `NO_NPWP`, `ALAMATNPWP`, `KD_STATPEG`, `TJ_POSKO`, `TJ_TUGAS`, `TJ_PROYEK`, `TJ_TRANS`, `TJ_TEMPAT`, `TJ_LEMBUR`, `NO_PEG_UNIT`, `NM_IBU`, `KD_NPP`, `KD_VA`, `NO_KTP`, `NO_KK`, `KD_PTOS`, `KD_KES`, `EMAIL`, `TOKEN`, `NO_REKSINAR`, `NO_REKCAR`, `IP_ADDRESS`, `USER_ID`, `TGL_UPDATE`, `NOTIF_EMAIL`, `MAC_ADDRESS`, `ID_SENDER_ANDROID`) VALUES
(11256555, 'KW16005', NULL, 'MUCHAMAD BAGUS RACHMAT D', NULL, NULL, '-', 'GRESIK', NULL, NULL, NULL, NULL, NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, 0, 0, '0', NULL, NULL, NULL, '', '2', NULL, NULL, '-', NULL, '01', 0, 0, 0, 0, 0, '0', NULL, '-', '-', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-04-11 05:23:30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasitabungan`
--

CREATE TABLE `mutasitabungan` (
  `ID` bigint(20) NOT NULL,
  `Faktur` varchar(20) DEFAULT NULL,
  `Tgl` date NOT NULL DEFAULT '0000-00-00',
  `Rekening` varchar(20) DEFAULT NULL,
  `GolonganTabungan` varchar(2) DEFAULT NULL,
  `KodeTransaksi` char(2) DEFAULT NULL,
  `DK` char(1) DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL,
  `Jumlah` double(16,2) DEFAULT 0.00,
  `Debet` double(16,2) DEFAULT 0.00,
  `Kredit` double(16,2) DEFAULT 0.00,
  `UserName` varchar(20) DEFAULT NULL,
  `DateTime` datetime DEFAULT '0000-00-00 00:00:00',
  `status` char(1) DEFAULT '0',
  `StatusPrinter` char(1) DEFAULT '0',
  `StatusPrinterBank` char(1) DEFAULT '0',
  `StatusBukuBesar` char(1) DEFAULT '0',
  `StatusClosing` char(1) DEFAULT '0',
  `TrxId` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasitabungan`
--

INSERT INTO `mutasitabungan` (`ID`, `Faktur`, `Tgl`, `Rekening`, `GolonganTabungan`, `KodeTransaksi`, `DK`, `Keterangan`, `Jumlah`, `Debet`, `Kredit`, `UserName`, `DateTime`, `status`, `StatusPrinter`, `StatusPrinterBank`, `StatusBukuBesar`, `StatusClosing`, `TrxId`) VALUES
(718147, 'KP20160826000069', '2016-08-26', '0900007072', '09', '04', 'K', 'Transfer KUPON Agustus dari KWSG reff=2016-08', 270000.00, 0.00, 270000.00, '2016-08', '2016-08-26 07:51:19', '1', '0', '0', '0', '0', NULL),
(723114, '10120160830000075', '2016-08-30', '0900007072', '09', '05', 'D', 'Transfer KUPON ke  reff=28224375', 270000.00, 270000.00, 0.00, '353451043248101', '2016-08-30 19:41:09', '1', '0', '0', '0', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pass`
--

CREATE TABLE `m_pass` (
  `id` double NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `user_name` varchar(10) DEFAULT NULL,
  `no_pph` varchar(7) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0',
  `status_level1` varchar(1) NOT NULL DEFAULT '0',
  `status_level2` varchar(1) NOT NULL DEFAULT '0',
  `status_admin_pbb1` varchar(2) DEFAULT '0',
  `status_admin_pbb2` varchar(2) DEFAULT '0',
  `status_lembur` varchar(1) DEFAULT '0',
  `status_asset` varchar(1) DEFAULT '0',
  `status_kpi` varchar(1) DEFAULT '0',
  `status_entritt` varchar(1) DEFAULT '0',
  `pass_slip` varchar(6) DEFAULT '0X0X0X',
  `pass_slip_awal` varchar(6) DEFAULT 'XXXXXX',
  `kdunit` varchar(6) DEFAULT NULL,
  `kd_gudang` varchar(5) DEFAULT NULL,
  `ip_vpn` varchar(25) DEFAULT NULL,
  `kd_sdm` varchar(4) DEFAULT NULL,
  `kd_asset` varchar(5) DEFAULT NULL,
  `kd_akun` varchar(5) DEFAULT NULL COMMENT 'kd_akun asset',
  `kd_cab` varchar(5) DEFAULT NULL COMMENT 'cabang SP',
  `kd_od` varchar(1) DEFAULT '-',
  `user_id` varchar(35) DEFAULT NULL,
  `ip_address` varchar(25) DEFAULT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_pass`
--

INSERT INTO `m_pass` (`id`, `nama`, `user_name`, `no_pph`, `pass`, `status`, `status_level1`, `status_level2`, `status_admin_pbb1`, `status_admin_pbb2`, `status_lembur`, `status_asset`, `status_kpi`, `status_entritt`, `pass_slip`, `pass_slip_awal`, `kdunit`, `kd_gudang`, `ip_vpn`, `kd_sdm`, `kd_asset`, `kd_akun`, `kd_cab`, `kd_od`, `user_id`, `ip_address`, `tgl_update`) VALUES
(1, 'MUCHAMAD BAGUS RACHMAT D', 'KW16005', '', 'e10adc3949ba59abbe56e057f20f883e', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, '2021-01-22 16:16:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registernasabah`
--

CREATE TABLE `registernasabah` (
  `id` int(11) NOT NULL,
  `no_ang` varchar(10) NOT NULL DEFAULT '',
  `nm_ang` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_card` varchar(16) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `blokir` char(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registernasabah`
--

INSERT INTO `registernasabah` (`id`, `no_ang`, `nm_ang`, `password`, `no_card`, `datetime`, `username`, `blokir`) VALUES
(7031, '0720160005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', 'e10adc3949ba59abbe56e057f20f883e', '0000000000007072', '2016-07-28 00:00:00', 'KW85087', '0'),
(8, '0720160006', 'M. IRVAN ALFI HIDAYAT', 'e10adc3949ba59abbe56e057f20f883e', '0000000000007073', '2021-01-23 15:14:22', 'KW85088', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabungan`
--

CREATE TABLE `tabungan` (
  `id` bigint(20) NOT NULL,
  `Rekening` varchar(20) DEFAULT NULL,
  `Tgl` date DEFAULT '0000-00-00',
  `No_ang` varchar(10) DEFAULT NULL,
  `GolonganTabungan` varchar(6) DEFAULT NULL,
  `SaldoHistory` double(16,2) DEFAULT 0.00,
  `SaldoAkhir` double(16,2) DEFAULT 0.00,
  `SaldoMinimum` double(16,2) DEFAULT 0.00,
  `UserName` varchar(20) DEFAULT NULL,
  `DateTime` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabungan`
--

INSERT INTO `tabungan` (`id`, `Rekening`, `Tgl`, `No_ang`, `GolonganTabungan`, `SaldoHistory`, `SaldoAkhir`, `SaldoMinimum`, `UserName`, `DateTime`) VALUES
(21045, '0900007072', '2016-07-28', '0720160005', '09', 52607.00, 707.00, 0.00, 'KW85087', '2016-07-28 00:00:00'),
(21046, '1000007072', '2016-07-28', '0720160005', '10', 200.00, 0.00, 0.00, 'KW85087', '2016-07-28 00:00:00'),
(21047, '1100007072', '2016-07-28', '0720160005', '11', 0.00, 0.00, 0.00, 'KW85087', '2016-07-28 00:00:00'),
(21048, '1200007072', '2021-01-30', '0720160006', '09', 3400.00, 4000.00, 1000.00, 'KW85088', '2021-01-30 11:05:38'),
(21049, '1300007072', '2021-01-30', '0720160006', '10', 200.00, 150.00, 50.00, 'KW85088', '2021-01-30 11:13:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ang`
--

CREATE TABLE `tbl_ang` (
  `kd_ang` varchar(15) NOT NULL,
  `no_ang` varchar(15) NOT NULL,
  `no_peg` varchar(10) NOT NULL,
  `no_peglm` varchar(10) DEFAULT NULL,
  `sts_instansi` int(1) DEFAULT 0,
  `nm_ang` varchar(100) DEFAULT NULL,
  `jns_kel` varchar(1) DEFAULT NULL,
  `kt_lhr` varchar(50) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `nm_ibukdg` varchar(50) DEFAULT NULL,
  `nm_psg` varchar(100) DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `no_npwp` varchar(25) DEFAULT NULL,
  `alm_rmh` varchar(150) DEFAULT NULL,
  `tlp_hp` varchar(20) DEFAULT NULL,
  `kd_prsh` varchar(2) DEFAULT NULL,
  `nm_prsh` varchar(100) DEFAULT NULL,
  `kd_unit` varchar(10) DEFAULT NULL,
  `nm_unit` varchar(100) DEFAULT NULL,
  `kd_unit_potga` varchar(10) DEFAULT NULL,
  `nm_unit_potga` varchar(100) DEFAULT NULL,
  `kd_prsh_asal` varchar(2) DEFAULT NULL,
  `nm_prsh_asal` varchar(100) DEFAULT NULL,
  `kd_unit_asal` varchar(10) DEFAULT NULL,
  `nm_unit_asal` varchar(100) DEFAULT NULL,
  `tlp_kntr` varchar(20) DEFAULT NULL,
  `sts_pindah` int(1) DEFAULT 0,
  `ket_pindah` varchar(100) DEFAULT NULL,
  `kd_prsh_pindah` varchar(2) DEFAULT NULL,
  `nm_prsh_pindah` varchar(100) DEFAULT NULL,
  `kd_unit_pindah` varchar(10) DEFAULT NULL,
  `nm_unit_pindah` varchar(100) DEFAULT NULL,
  `kd_klp_pindah` varchar(10) DEFAULT NULL,
  `tgl_msk` date DEFAULT NULL,
  `id_klp` int(11) DEFAULT NULL,
  `kd_klp` varchar(5) DEFAULT NULL,
  `sts_ketua` int(1) DEFAULT 0,
  `gaji` double NOT NULL DEFAULT 0,
  `plafon_persen` double NOT NULL DEFAULT 0,
  `plafon` double NOT NULL DEFAULT 0,
  `plafon_pakai` double NOT NULL DEFAULT 0,
  `plafon_toko` double NOT NULL DEFAULT 0,
  `plafon_pakai_toko` double NOT NULL DEFAULT 0,
  `kd_gol_kredit` varchar(20) DEFAULT NULL,
  `nm_gol_kredit` varchar(50) DEFAULT NULL,
  `is_plafon_kredit_aktif` int(11) NOT NULL DEFAULT 0,
  `is_blokir_plafon_kredit` int(11) NOT NULL DEFAULT 0,
  `tgl_plf` date DEFAULT NULL,
  `rek_kpn` varchar(20) NOT NULL DEFAULT '0',
  `rek_shu` varchar(20) NOT NULL DEFAULT '0',
  `rek_suk` varchar(20) NOT NULL DEFAULT '0',
  `no_kartu` varchar(20) DEFAULT NULL,
  `pin` varchar(4) DEFAULT NULL,
  `pin_md5` varchar(40) DEFAULT NULL,
  `nm_mirror` varchar(100) DEFAULT NULL,
  `nm_bank` varchar(50) DEFAULT NULL,
  `no_rek_bank` varchar(50) NOT NULL DEFAULT '0',
  `status_keluar` varchar(1) NOT NULL DEFAULT '0',
  `tgl_keluar` date DEFAULT NULL,
  `id_alasan_keluar` varchar(2) DEFAULT NULL,
  `alasan_keluar` varchar(50) DEFAULT NULL,
  `ket_keluar` varchar(100) DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ang`
--

INSERT INTO `tbl_ang` (`kd_ang`, `no_ang`, `no_peg`, `no_peglm`, `sts_instansi`, `nm_ang`, `jns_kel`, `kt_lhr`, `tgl_lhr`, `nm_ibukdg`, `nm_psg`, `no_ktp`, `no_npwp`, `alm_rmh`, `tlp_hp`, `kd_prsh`, `nm_prsh`, `kd_unit`, `nm_unit`, `kd_unit_potga`, `nm_unit_potga`, `kd_prsh_asal`, `nm_prsh_asal`, `kd_unit_asal`, `nm_unit_asal`, `tlp_kntr`, `sts_pindah`, `ket_pindah`, `kd_prsh_pindah`, `nm_prsh_pindah`, `kd_unit_pindah`, `nm_unit_pindah`, `kd_klp_pindah`, `tgl_msk`, `id_klp`, `kd_klp`, `sts_ketua`, `gaji`, `plafon_persen`, `plafon`, `plafon_pakai`, `plafon_toko`, `plafon_pakai_toko`, `kd_gol_kredit`, `nm_gol_kredit`, `is_plafon_kredit_aktif`, `is_blokir_plafon_kredit`, `tgl_plf`, `rek_kpn`, `rek_shu`, `rek_suk`, `no_kartu`, `pin`, `pin_md5`, `nm_mirror`, `nm_bank`, `no_rek_bank`, `status_keluar`, `tgl_keluar`, `id_alasan_keluar`, `alasan_keluar`, `ket_keluar`, `tgl_update`) VALUES
('1', '0720160005', 'KW16005', NULL, 0, 'MUCHAMMAD BAGUS RACHMAT DIANTO', 'L', 'GRESIK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0, NULL, '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL),
('2', '0720160006', 'KW16005', NULL, 0, 'M. IRVAN ALFI HIDAYAT', 'L', 'BANYUWANGI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0, NULL, '0', '0', '0', NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, '2021-01-23 08:17:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prsh`
--

CREATE TABLE `tbl_prsh` (
  `kd_prsh` varchar(3) NOT NULL,
  `nm_prsh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_prsh`
--

INSERT INTO `tbl_prsh` (`kd_prsh`, `nm_prsh`) VALUES
('07', 'KWSG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pinjaman_ang`
--

CREATE TABLE `t_pinjaman_ang` (
  `no_pinjam` varchar(20) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_rilis` date DEFAULT NULL,
  `rilis` int(1) DEFAULT 0,
  `app_kabag` int(1) DEFAULT 0,
  `unit_adm` varchar(20) DEFAULT NULL,
  `no_ang` varchar(20) DEFAULT NULL,
  `no_peg` varchar(20) DEFAULT NULL,
  `nm_ang` varchar(100) DEFAULT NULL,
  `nm_ibukdg` varchar(100) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `alamat_ang` varchar(150) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_npwp` varchar(25) DEFAULT NULL,
  `status_bayar_asuransi` int(1) DEFAULT 0,
  `bukti_bayar_asuransi` varchar(20) DEFAULT NULL,
  `tgl_bayar_asuransi` date DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `jml_gaji` double NOT NULL DEFAULT 0,
  `rasio` double NOT NULL DEFAULT 0,
  `kd_prsh` varchar(5) DEFAULT NULL,
  `nm_prsh` varchar(100) DEFAULT NULL,
  `kd_unit` varchar(10) DEFAULT NULL,
  `nm_unit` varchar(100) DEFAULT NULL,
  `kd_pinjaman` varchar(2) DEFAULT NULL,
  `nm_pinjaman` varchar(50) DEFAULT NULL,
  `jenis_akad` varchar(50) DEFAULT NULL,
  `tgl_angs` date DEFAULT NULL,
  `tgl_jt` date DEFAULT NULL,
  `jml_pinjam` double NOT NULL DEFAULT 0,
  `tempo_bln` int(2) NOT NULL DEFAULT 0,
  `jns_jangka` varchar(10) DEFAULT NULL,
  `jns_bunga` varchar(10) DEFAULT NULL,
  `bunga_flat` double NOT NULL DEFAULT 0,
  `bunga_anuitas` double NOT NULL DEFAULT 0,
  `jml_bunga` double NOT NULL DEFAULT 0,
  `plafon` double NOT NULL DEFAULT 0,
  `angsuran` double NOT NULL DEFAULT 0,
  `saldo_angsuran` double NOT NULL DEFAULT 0,
  `sisa_plafon` double NOT NULL DEFAULT 0,
  `saldo_pinjaman` double NOT NULL DEFAULT 0,
  `jml_provisi` double NOT NULL DEFAULT 0,
  `jml_provisi_bln` double NOT NULL DEFAULT 0,
  `kd_asuransi` varchar(10) DEFAULT NULL,
  `nm_asuransi` varchar(50) DEFAULT NULL,
  `jml_asuransi` double NOT NULL DEFAULT 0,
  `jml_asuransi_kwsg` double NOT NULL DEFAULT 0,
  `jml_asuransi_total` double NOT NULL DEFAULT 0,
  `jml_simp_agunan` double NOT NULL DEFAULT 0,
  `jml_simp_sukarela` double NOT NULL DEFAULT 0,
  `jml_pelunasan` double NOT NULL DEFAULT 0,
  `jml_pot_bunga` double NOT NULL DEFAULT 0,
  `jml_potong` double NOT NULL DEFAULT 0,
  `jml_diterima` double NOT NULL DEFAULT 0,
  `jml_sukarela_masuk` double NOT NULL DEFAULT 0,
  `jml_sukarela_keluar` double NOT NULL DEFAULT 0,
  `jns_bayar` varchar(10) DEFAULT NULL,
  `no_rek_cek` varchar(50) DEFAULT NULL,
  `kd_bank_dana` varchar(10) DEFAULT NULL,
  `nm_bank_dana` varchar(50) DEFAULT NULL,
  `kd_bank_ke` varchar(10) DEFAULT NULL,
  `nm_bank_ke` varchar(50) DEFAULT NULL,
  `kd_cb` varchar(5) DEFAULT NULL,
  `nm_cb` varchar(50) DEFAULT NULL,
  `sts_lunas` int(1) NOT NULL DEFAULT 0,
  `blth_lunas` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='					';

--
-- Dumping data untuk tabel `t_pinjaman_ang`
--

INSERT INTO `t_pinjaman_ang` (`no_pinjam`, `tgl_pinjam`, `tgl_rilis`, `rilis`, `app_kabag`, `unit_adm`, `no_ang`, `no_peg`, `nm_ang`, `nm_ibukdg`, `tgl_lhr`, `alamat_ang`, `no_hp`, `no_npwp`, `status_bayar_asuransi`, `bukti_bayar_asuransi`, `tgl_bayar_asuransi`, `no_ktp`, `jml_gaji`, `rasio`, `kd_prsh`, `nm_prsh`, `kd_unit`, `nm_unit`, `kd_pinjaman`, `nm_pinjaman`, `jenis_akad`, `tgl_angs`, `tgl_jt`, `jml_pinjam`, `tempo_bln`, `jns_jangka`, `jns_bunga`, `bunga_flat`, `bunga_anuitas`, `jml_bunga`, `plafon`, `angsuran`, `saldo_angsuran`, `sisa_plafon`, `saldo_pinjaman`, `jml_provisi`, `jml_provisi_bln`, `kd_asuransi`, `nm_asuransi`, `jml_asuransi`, `jml_asuransi_kwsg`, `jml_asuransi_total`, `jml_simp_agunan`, `jml_simp_sukarela`, `jml_pelunasan`, `jml_pot_bunga`, `jml_potong`, `jml_diterima`, `jml_sukarela_masuk`, `jml_sukarela_keluar`, `jns_bayar`, `no_rek_cek`, `kd_bank_dana`, `nm_bank_dana`, `kd_bank_ke`, `nm_bank_ke`, `kd_cb`, `nm_cb`, `sts_lunas`, `blth_lunas`) VALUES
('PJAN0120190088', '2019-01-24', '2019-01-24', 1, 0, 'GRESIK', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', 'DIAN', NULL, '', '082245600785', '', 1, 'BA0120190031', '2019-01-26', '', 5000000, 22.62, '07', 'KWSG', '90H1', 'UNIT PENGEMBANGAN SOFTWARE', '1', 'MULTIGUNA', NULL, '2019-02-27', '2023-01-27', 40000000, 48, 'PANJANG', 'ANUITAS', 8.93, 15.87, 14288000, 2711500, 1131000, 0, 1580500, 0, 420000, 8750, 'LA00001', 'PT. JAMKRINDO', 440000, 0, 440000, 3139775, 0, 0, 0, 860000, 39140000, 0, 0, 'TRANSFER', NULL, '211', 'BANK MANDIRI', '211', 'BANK MANDIRI', '3507', 'REAL PINJ. JK. PANJANG KWSG', 1, '2020-01'),
('PJANO120190089', '2021-01-23', '2021-01-23', 1, 0, 'GRESIK', '0720160006', 'KW16005', 'M. IRVAN ALFI HIDAYAT', 'DIAN', '1998-06-23', 'BANYUWANGI', '082244922833', NULL, 1, 'BA0120190031', '2021-01-23', '3510192306980001', 6000000, 22, '06', 'KWSG', '90H2', 'UNIT KEAMANAN SISTEM', '1', 'MULTIGUNA', NULL, '2021-01-23', '2021-01-29', 70000000, 60, 'PANJANG', 'ANUITAS', 8.93, 15.87, 14288000, 2711500, 1500000, 0, 18000000, 0, 420000, 8750, 'LA00002', 'PT.JAMKERJA', 550000, 0, 550, 3, 0, 0, 0, 860000, 39140000, 0, 0, 'TRANSFER', NULL, '211', 'BANK MANDIRI', '211', 'BANK MANDIRI', '3507', 'REAL PINJ.JK.PANJANG KWSG', 1, '2020-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_saldo_pinjaman`
--

CREATE TABLE `t_saldo_pinjaman` (
  `id` int(11) NOT NULL,
  `blth` varchar(10) DEFAULT NULL,
  `jns` varchar(10) NOT NULL,
  `no_pinjam` varchar(20) NOT NULL,
  `tgl_rilis` date DEFAULT NULL,
  `bukti_lunas` varchar(20) DEFAULT NULL,
  `tgl_lunas` date DEFAULT NULL,
  `no_ang` varchar(20) DEFAULT NULL,
  `no_peg` varchar(20) DEFAULT NULL,
  `nm_ang` varchar(100) DEFAULT NULL,
  `kd_prsh` varchar(5) DEFAULT NULL,
  `nm_prsh` varchar(100) DEFAULT NULL,
  `kd_pinjaman` varchar(2) DEFAULT NULL,
  `nm_pinjaman` varchar(50) DEFAULT NULL,
  `tempo_bln` int(2) NOT NULL DEFAULT 0,
  `jml_pokok` double NOT NULL DEFAULT 0,
  `jml_bunga` double NOT NULL DEFAULT 0,
  `jml_lunas_pokok` double NOT NULL DEFAULT 0,
  `jml_lunas_pokok_pdk` double NOT NULL DEFAULT 0,
  `jml_lunas_pokok_pjg` double NOT NULL DEFAULT 0,
  `jml_lunas_bunga` double NOT NULL DEFAULT 0,
  `jml_pot_bunga` double NOT NULL DEFAULT 0,
  `saldo_akhir_pokok` double NOT NULL DEFAULT 0,
  `saldo_akhir_bunga` double NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_saldo_pinjaman`
--

INSERT INTO `t_saldo_pinjaman` (`id`, `blth`, `jns`, `no_pinjam`, `tgl_rilis`, `bukti_lunas`, `tgl_lunas`, `no_ang`, `no_peg`, `nm_ang`, `kd_prsh`, `nm_prsh`, `kd_pinjaman`, `nm_pinjaman`, `tempo_bln`, `jml_pokok`, `jml_bunga`, `jml_lunas_pokok`, `jml_lunas_pokok_pdk`, `jml_lunas_pokok_pjg`, `jml_lunas_bunga`, `jml_pot_bunga`, `saldo_akhir_pokok`, `saldo_akhir_bunga`) VALUES
(379565, '2020-00', '', 'PJAN0120190088', '2019-01-24', NULL, NULL, '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '07', 'KWSG', '1', 'MULTIGUNA', 48, 40000000, 0, 0, 0, 0, 0, 0, 30833333.37, 11013666.63),
(373072, '2020-01', 'PLNS', 'PJAN0120190088', NULL, 'PL01202000032', '2020-01-03', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '07', 'KWSG', '1', 'MULTIGUNA', 48, 0, 0, 29999999.88, 9166666.63, 20833333.25, 1131000, 9585000, -29999999.88, -10716000),
(373756, '2020-01', 'PLPG', 'PJAN0120190088', NULL, 'PG01202000331', '2020-01-27', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '07', 'KWSG', '1', 'MULTIGUNA', 48, 0, 0, 833333.33, 833333.33, 0, 297666.67, 0, -833333.33, -297666.67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_saldo_simpanan`
--

CREATE TABLE `t_saldo_simpanan` (
  `id` bigint(20) NOT NULL,
  `blth` varchar(10) DEFAULT NULL,
  `no_ang` varchar(15) DEFAULT NULL,
  `no_peg` varchar(15) DEFAULT NULL,
  `nm_ang` varchar(100) DEFAULT NULL,
  `kd_simpanan` varchar(5) DEFAULT NULL,
  `nm_simpanan` varchar(50) DEFAULT NULL,
  `kd_prsh` varchar(5) DEFAULT NULL,
  `nm_prsh` varchar(50) DEFAULT NULL,
  `kredit` double DEFAULT 0,
  `debet` double DEFAULT 0,
  `saldo_akhir` double NOT NULL DEFAULT 0,
  `sts_keluar` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_saldo_simpanan`
--

INSERT INTO `t_saldo_simpanan` (`id`, `blth`, `no_ang`, `no_peg`, `nm_ang`, `kd_simpanan`, `nm_simpanan`, `kd_prsh`, `nm_prsh`, `kredit`, `debet`, `saldo_akhir`, `sts_keluar`) VALUES
(2048364, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1111', 'SIMPANAN POKOK', '07', 'KWSG', 0, 0, 100000, 0),
(2048365, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1211', 'SIMPANAN WAJIB', '07', 'KWSG', 2040000, 0, 2160000, 0),
(2048366, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1321', 'SIMPANAN KHUSUS PERMANENT', '07', 'KWSG', 71923.85, 0, 71923.85, 0),
(2048367, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1331', 'SIMPANAN KHUSUS BERJANGKA', '07', 'KWSG', 23593.36, 0, 23593.36, 0),
(2048368, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1411', 'SIMPANAN SUKARELA TUNAI', '07', 'KWSG', 31350000, 52631000, -21281000, 0),
(2048369, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1413', 'SIMPANAN SUKARELA DARI POTONG GAJI', '07', 'KWSG', 8600000, 0, 8600000, 0),
(2048370, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1414', 'SIMPANAN SUKARELA DARI BUNGA', '07', 'KWSG', 301586.335595771, 0, 301586.335595771, 0),
(2048371, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1418', 'SIMPANAN SUKARELA DARI POKOK DEPOSITO', '07', 'KWSG', 20000000, 0, 20000000, 0),
(2048372, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1419', 'SIMPANAN SUKARELA DARI POKOK KH.BERJK.', '07', 'KWSG', 0, 0, 0, 0),
(2048373, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1420', 'SIMPANAN SUKARELA DARI BUNGA KH.BERJK.', '07', 'KWSG', 1814.05, 0, 1814.05, 0),
(2048374, '2021-00', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1510', 'DEPOSITO', '07', 'KWSG', 20000000, 20000000, 0, 0),
(2070912, '2021-01', '0720160005', 'KW16005', 'MUCHAMMAD BAGUS RACHMAT DIANTO', '1411', 'SIMPANAN SUKARELA TUNAI', '07', 'KWSG', 0, 300000, -300000, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mas_peg`
--
ALTER TABLE `mas_peg`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `NO_PEG` (`NO_PEG`,`KD_UNIT`,`NO_PPH`,`KD_JAB`,`KD_GOL`);

--
-- Indeks untuk tabel `mutasitabungan`
--
ALTER TABLE `mutasitabungan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `TrxId` (`TrxId`),
  ADD KEY `Faktur` (`Faktur`,`Tgl`,`ID`),
  ADD KEY `Rekening` (`Rekening`,`Tgl`,`ID`),
  ADD KEY `KodeTransaksi` (`KodeTransaksi`,`Tgl`,`ID`),
  ADD KEY `UserName` (`UserName`);

--
-- Indeks untuk tabel `m_pass`
--
ALTER TABLE `m_pass`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registernasabah`
--
ALTER TABLE `registernasabah`
  ADD PRIMARY KEY (`id`,`no_ang`);

--
-- Indeks untuk tabel `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `KodeRekening` (`No_ang`,`Rekening`),
  ADD KEY `Rekening` (`Rekening`);

--
-- Indeks untuk tabel `tbl_ang`
--
ALTER TABLE `tbl_ang`
  ADD PRIMARY KEY (`kd_ang`),
  ADD KEY `FK_tbl_ang_registernasabah` (`no_ang`);

--
-- Indeks untuk tabel `tbl_prsh`
--
ALTER TABLE `tbl_prsh`
  ADD PRIMARY KEY (`kd_prsh`);

--
-- Indeks untuk tabel `t_pinjaman_ang`
--
ALTER TABLE `t_pinjaman_ang`
  ADD PRIMARY KEY (`no_pinjam`);

--
-- Indeks untuk tabel `t_saldo_pinjaman`
--
ALTER TABLE `t_saldo_pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_saldo_simpanan`
--
ALTER TABLE `t_saldo_simpanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mas_peg`
--
ALTER TABLE `mas_peg`
  MODIFY `ID` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11258271;

--
-- AUTO_INCREMENT untuk tabel `mutasitabungan`
--
ALTER TABLE `mutasitabungan`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1323936;

--
-- AUTO_INCREMENT untuk tabel `m_pass`
--
ALTER TABLE `m_pass`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10472;

--
-- AUTO_INCREMENT untuk tabel `registernasabah`
--
ALTER TABLE `registernasabah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7477;

--
-- AUTO_INCREMENT untuk tabel `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23340;

--
-- AUTO_INCREMENT untuk tabel `t_saldo_pinjaman`
--
ALTER TABLE `t_saldo_pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=443093;

--
-- AUTO_INCREMENT untuk tabel `t_saldo_simpanan`
--
ALTER TABLE `t_saldo_simpanan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2070995;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
