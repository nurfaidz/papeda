<?php

include '../../koneksi.php';

$no_kk          = $_POST['no_kk'];
$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$ttl            = $_POST['ttl'];
$alamat         = $_POST['alamat'];
$status         = $_POST['status'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$agama          = $_POST['agama'];
$pendidikan     = $_POST['pendidikan'];
$pekerjaan      = $_POST['pekerjaan'];

$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_penduduk WHERE nik='$nik'"));

  if ($cek > 0)
  {
    echo "<script>window.alert('No KK Sudah Ada')
    window.location='penduduk.php'</script>";
  }
  else
  {
    mysqli_query($koneksi, "INSERT INTO tb_penduduk values ('', '$no_kk', '$nik', '$nama', '$ttl', '$alamat','$status', '$jenis_kelamin', '$agama', '$pendidikan', '$pekerjaan')");
    echo "<script>window.alert('Berhasil Tersimpan')
    window.location='penduduk.php'</script>";
  }
 ?>
