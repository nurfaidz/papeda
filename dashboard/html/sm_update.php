<?php
include "../../koneksi.php";
$id             = $_POST['id'];
$pengirim       = $_POST['pengirim'];
$tgl_surat      = $_POST['tgl_surat'];
$tgl_terima     = $_POST['tgl_terima'];
$no_surat       = $_POST['no_surat'];
$perihal        = $_POST['perihal']; 

if(isset($_POST['ubah_foto'])){
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	
	$fotobaru = date('dmYHis').$foto;
	$path = "gambar/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
		$query = "SELECT * FROM tb_suratmasuk WHERE id='$id'";
		$sql = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($sql);

		if(is_file("gambar/".$data['foto']))
			unlink("gambar/".$data['foto']);
		
		$query = "UPDATE tb_suratmasuk SET
                    pengirim = '$pengirim',
                    tgl_surat = '$tgl_surat',
                    tgl_terima = '$tgl_terima',
                    no_surat = '$no_surat',
                    perihal = '$perihal',
                    lampiran_file = '$fotobaru' WHERE id='$id';";
		$sql = mysqli_query($koneksi, $query);

		if($sql){ 
			header("location: surat_masuk.php");
		}else{
			header("location: sm_edit.php?alert=gagal_simpan");
		}
	}else{
		header("location: sm_edit.php?alert=gagal_upload");
	}
}else{
	$query = "UPDATE tb_suratmasuk SET
                    pengirim = '$pengirim',
                    tgl_surat = '$tgl_surat',
                    tgl_terima = '$tgl_terima',
                    no_surat = '$no_surat',
                    perihal = '$perihal' WHERE id='$id';";
	$sql = mysqli_query($koneksi, $query);

	if($sql){ 
		header("location: surat_masuk.php");
	}else{
		header("location: sm_edit.php?alert=gagal_simpan");
	}
}
?>