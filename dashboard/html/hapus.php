<?php

include '../../koneksi.php';
$id_penduduk=$_GET['id_penduduk'];

mysqli_query($koneksi, "DELETE FROM tb_penduduk WHERE id_penduduk = $id_penduduk");

header('location:penduduk.php');



 ?>
