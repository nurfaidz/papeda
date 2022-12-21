-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2021 pada 00.14
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `papeda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_disposisi`
--

CREATE TABLE `tb_disposisi` (
  `id` int(11) NOT NULL,
  `tindak_lanjut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenisreqdata`
--

CREATE TABLE `tb_jenisreqdata` (
  `id_jenisreqdata` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jenisreqdata`
--

INSERT INTO `tb_jenisreqdata` (`id_jenisreqdata`, `jenis`) VALUES
(1, 'Perbaikan Data'),
(2, 'Penambahan Data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenissurat`
--

CREATE TABLE `tb_jenissurat` (
  `id` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jenissurat`
--

INSERT INTO `tb_jenissurat` (`id`, `jenis_surat`) VALUES
(1, 'Surat Keterangan'),
(2, 'Surat Laporan Hajatan'),
(3, 'Surat Pengantar SKCK'),
(4, 'Surat Keterangan Usaha'),
(5, 'Surat Keterangan Berkelakuan Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `no_kk` int(18) NOT NULL,
  `nik` int(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `no_kk`, `nik`, `nama`, `ttl`, `alamat`, `status`, `jenis_kelamin`, `agama`, `pendidikan`, `pekerjaan`) VALUES
(4, 19330015, 1933001520, 'Muhamad Dedi Yusup', 'Wonogiri, 07 August ', 'Wonogiri', 'Belom Nikah', 'Laki-Laki', 'Islam', 'S3', 'Psikolog'),
(6, 12345678, 1234567, 'Indah Cendana Wati', 'Yogyakarta, 08 -10-2', 'Yogyakarta', 'Belum Menikah', 'Perempuan', 'Islam', 'S2', 'Pelajar/Mahasis'),
(7, 221112211, 22441122, 'Boy Anastasya', 'Wonogiri, 07,08,2000', 'Wonogiri', 'Belum Menikah', 'L', 'islam', 'S1', 'Mahasiswa'),
(9, 201912091, 2019120001, 'Diancahya', 'Bekasi, 15-06-2000', 'Bekasi', 'Belum Kawin', 'Perempuan', 'Islam', 'D3', 'Bidan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_reqdata`
--

CREATE TABLE `tb_reqdata` (
  `id_reqdata` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_reqdata`
--

INSERT INTO `tb_reqdata` (`id_reqdata`, `jenis`, `nama`, `no_kk`, `ttl`, `alamat`, `jenis_kelamin`, `no_telp`, `tgl`, `status`) VALUES
(1, 'Perbaikan Data', 'DianCahya', '201921', 'Tangerang, 20-20-2000', 'Tangerang', 'Perempuan', '08812xxxxxx', '2021-01-11', 'pending'),
(2, 'Perbaikan Data', 'Nanda Arum', '2019212', 'Tangerang, 12-09-1999', 'Tangerang', 'Perempuan', '0812918291', '2021-01-11', 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratkeluar`
--

CREATE TABLE `tb_suratkeluar` (
  `id` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_surat` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `penanda_tangan` varchar(50) NOT NULL,
  `lampiran_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratketerangan`
--

CREATE TABLE `tb_suratketerangan` (
  `id_sk` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `no_surat` varchar(15) NOT NULL,
  `nik` int(18) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama_pejabat` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_suratketerangan`
--

INSERT INTO `tb_suratketerangan` (`id_sk`, `jenis_surat`, `no_surat`, `nik`, `keperluan`, `tanggal_surat`, `nama_pejabat`, `status`) VALUES
(22, 'Surat Keterangan', '12/COBA/21', 22441122, 'melamar pekerjaan', '2021-01-04', 'Muhamad Dedi Yusup', 'selesai'),
(23, 'Surat Keterangan Baik', '12/COBA/22', 1933001520, 'melamar pekerjaan', '2021-01-04', 'Muhamad Dedi Yusup', 'selesai'),
(25, 'Surat Keterangan', '12/COBA/10', 1234567, 'Melamar Pekerjaan', '2021-01-04', 'Muhamad Dedi Yusup', 'selesai'),
(26, 'Surat Permohonan SKCK', '12/COBA/112', 22441122, 'Permohonan SKCK Untuk Melamar Pekerjaan', '2021-01-04', 'Damar Setyawan', 'selesai'),
(27, 'Surat Keterangan Baik', '01/SKM/222/2021', 1234567, 'melamar pekerjaan', '2021-01-05', 'Roby', 'selesai'),
(28, 'Surat Keterangan', '12/SK2/2', 2019120001, 'Keterangan', '2021-01-10', 'Nur', 'selesai'),
(31, 'Surat Keterangan Usaha', '12/COBA/10', 1933001520, 'Permohonan Pendirian Usaha dengan Jenis dan Alamat Sebagai berikut : Ternak Lele, Jetis KM 14', '2021-01-11', 'Muhamad', 'selesai'),
(34, 'Surat Izin Hajatan', '01/SKM/2/2021', 1234567, 'Sunat Masal', '2021-01-11', 'Roby', 'selesai'),
(35, 'Surat Keterangan Domisili', '01/SKM/222/2021', 1234567, '', '2021-01-11', 'Roby', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id` int(11) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `lampiran_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id`, `pengirim`, `tgl_surat`, `tgl_terima`, `no_surat`, `perihal`, `lampiran_file`) VALUES
(5, 'Provinsi Sleman', '2021-01-10', '2021-01-13', '01/SKM/222/2021', 'Undangan', '11012021163507surat.png'),
(6, 'Provinsi Sleman', '2021-01-10', '2021-01-13', '01/SKM/222/2021', 'Undangan', '11012021163507surat.png'),
(7, 'Desa Muntilan', '2021-01-10', '2021-01-13', '01/SKM/222/2021', 'Undangan', '11012021164025Screenshot_22.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Muhamad Dedi Yusup', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_usergrup`
--

CREATE TABLE `tb_usergrup` (
  `grupid` int(11) NOT NULL,
  `tipe_akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_usergrup`
--

INSERT INTO `tb_usergrup` (`grupid`, `tipe_akses`) VALUES
(1, 'Administrator'),
(2, 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jenisreqdata`
--
ALTER TABLE `tb_jenisreqdata`
  ADD PRIMARY KEY (`id_jenisreqdata`);

--
-- Indeks untuk tabel `tb_jenissurat`
--
ALTER TABLE `tb_jenissurat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tb_reqdata`
--
ALTER TABLE `tb_reqdata`
  ADD PRIMARY KEY (`id_reqdata`),
  ADD KEY `no_kk` (`no_kk`);

--
-- Indeks untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_suratketerangan`
--
ALTER TABLE `tb_suratketerangan`
  ADD PRIMARY KEY (`id_sk`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- Indeks untuk tabel `tb_usergrup`
--
ALTER TABLE `tb_usergrup`
  ADD PRIMARY KEY (`grupid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jenisreqdata`
--
ALTER TABLE `tb_jenisreqdata`
  MODIFY `id_jenisreqdata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_jenissurat`
--
ALTER TABLE `tb_jenissurat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_reqdata`
--
ALTER TABLE `tb_reqdata`
  MODIFY `id_reqdata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_suratketerangan`
--
ALTER TABLE `tb_suratketerangan`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_usergrup`
--
ALTER TABLE `tb_usergrup`
  MODIFY `grupid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_suratketerangan`
--
ALTER TABLE `tb_suratketerangan`
  ADD CONSTRAINT `tb_suratketerangan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`);

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `tb_usergrup` (`grupid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
