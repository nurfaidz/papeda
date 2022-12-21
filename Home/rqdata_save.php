<?php
// cek apakah yang mengakses halaman ini sudah login

include 'koneksi.php';

$jenis          = $_GET['jenis'];
$nama           = $_GET['nama'];
$no_kk          = $_GET['no_kk'];
$ttl            = $_GET['ttl'];
$alamat         = $_GET['alamat'];
$jenis_kelamin     = $_GET['jenis_kelamin'];
$no_telp        = $_GET['no_telp'];
$tgl = date("Y-m-d H:i:s");

$query_simpan = "INSERT INTO tb_reqdata VALUES ('','$jenis', '$nama', '$no_kk', '$ttl', '$alamat', '$jenis_kelamin', '$no_telp', '$tgl','pending')";
if ($koneksi->query($query_simpan) === TRUE) {
  echo "<script>window.alert('Format Anda Berhasil Terkirim!')
  window.location='request.php'</script>";
} else {
  echo "Query Error: " . $query_simpan . "<br>" . $koneksi->error;
}



?>
