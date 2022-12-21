<?php

include '../../koneksi.php';

$pengirim       = $_POST['pengirim'];
$tgl_surat      = $_POST['tgl_surat'];
$tgl_terima     = $_POST['tgl_terima'];
$no_surat       = $_POST['no_surat'];
$perihal        = $_POST['perihal'];
$lampiran_file  = $_POST['lampiran_file'];

$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_suratmasuk WHERE no_kk='$no_surat'"));

  if ($cek > 0)
  {
    echo "<script>window.alert('Surat Sudah di inputkan')
    window.location='surat_masuk.php'</script>";
  }
  else
  {
    mysqli_query($koneksi, "INSERT INTO tb_suratmasuk values ('','$pengirim','$tgl_surat','$tgl_terima','$no_surat','$perihal','$lampiran_file')");
    echo "<script>window.alert('Berhasil Tersimpan')
    window.location='surat_masuk.php'</script>";
  }
 ?>
