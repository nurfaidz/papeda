<?php

include '../../koneksi.php';

$id_penduduk     = $_POST['id_penduduk'];
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

mysqli_query($koneksi, "UPDATE tb_penduduk SET
                          no_kk='$no_kk',
                          nik='$nik',
                          nama='$nama',
                          ttl='$ttl',
                          alamat='$alamat',
                          status='$status',
                          jenis_kelamin='$jenis_kelamin',
                          agama='$agama',
                          pendidikan='$pendidikan',
                          pekerjaan='$pekerjaan'
                          WHERE id_penduduk='$id_penduduk'
                          ");

header('location:penduduk.php')

 ?>
