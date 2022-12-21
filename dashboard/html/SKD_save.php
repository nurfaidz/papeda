<?php
session_start();
include '../../koneksi.php';
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:login.php?pesan=gagal");
}
$tanggal = date("Y-m-d H:i:s");
$nik = $_GET['nik'];
$no_surat = $_GET['no_surat'];
$nama_pejabat = $_GET['nama_pejabat'];
$nama = $_GET['nama'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$alamat =$_GET['alamat'];
$ttl = $_GET['ttl'];
$agama = $_GET['agama'];
$pekerjaan =$_GET['pekerjaan'];
$query_simpan = "INSERT INTO tb_suratketerangan VALUES ('','Surat Keterangan Domisili','$no_surat','$nik','','$tanggal','$nama_pejabat','selesai')";

mysqli_query($koneksi,$query_simpan);
header('location:surat_keluar.php');

?>