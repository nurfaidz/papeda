<?php

include '../../koneksi.php';

$pengirim       = $_POST['pengirim'];
$tgl_surat      = $_POST['tgl_surat'];
$tgl_terima     = $_POST['tgl_terima'];
$no_surat       = $_POST['no_surat'];
$perihal        = $_POST['perihal']; 
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "gambar/".$fotobaru;

if(move_uploaded_file($tmp, $path)){
	$query = "INSERT INTO tb_suratmasuk values ('','$pengirim','$tgl_surat','$tgl_terima','$no_surat','$perihal','$fotobaru')";
  $sql = mysqli_query($koneksi, $query);
  

	if($sql){
    echo "<script>window.alert('Berhasil Tersimpan')
    window.location='surat_masuk.php'</script>";
	}else{
		header("location:surat_masuk.php?alert=gagal_simpan");
	}
}else{
	header("location:surat_masuk.php?alert=gagal_upload");
}
?>