<?php

include '../../koneksi.php';
$id=$_GET['id'];

mysqli_query($koneksi, "DELETE FROM tb_suratmasuk WHERE id = $id");

header('location:surat_masuk.php');



 ?>
