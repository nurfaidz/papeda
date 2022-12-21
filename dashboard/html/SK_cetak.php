<?php 
include '../../koneksi.php';

  	$id = $_GET['id'];
  	$qCek = mysqli_query($koneksi,"SELECT tb_penduduk.*, tb_suratketerangan.* FROM tb_penduduk LEFT JOIN tb_suratketerangan ON tb_suratketerangan.nik = tb_penduduk.nik WHERE tb_suratketerangan.id_sk='$id'");
  	while($row = mysqli_fetch_array($qCek)){
?>

<html>
<head>
	<title>CETAK SURAT</title>
	<style type="text/css" media="print">
	    @page { margin: 0; }
  		body { 
  			margin: 1cm;
  			margin-left: 2cm;
  			margin-right: 2cm;
  			font-family: "Times New Roman", Times, serif;
  		}
	</style>
</head>
<body>
<div>
	<table width="100%">
		<br>
		<div align="center"><u><h4 class="kop">SURAT KETERANGAN</h4></u></div>
		<div align="center"><h4 class="kop3">Nomor :&nbsp;&nbsp;&nbsp;<?php echo $row['no_surat']; ?></h4></div>
	</table>
	<br>
	<div class="clear"></div>
	<div id="isi3">
		<table width="100%">
			<tr>
				<td >Yang bertanda tangan di bawah ini, Kepala desa, menerangkan dengan sebenarnya bahwa :
				</td>
			</tr>
		</table>
		<br><br>
		<table width="100%" style="text-transform: capitalize;">
			<tr>
				<td width="30%" >N&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;A</td>
				<td width="2%">:</td>
				<td width="68%" style="text-transform: uppercase; font-weight: bold;"><?php echo $row['nama']; ?></td>
			</tr>
			<tr>
				<td >Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $row['jenis_kelamin']; ?></td>
			</tr>
			<tr>
				<td >Tempat/Tgl. Lahir</td>
				<td>:</td>
				<td><?php echo $row['ttl']; ?></td>
			</tr>
			<tr>
				<td >Agama</td>
				<td>:</td>
				<td><?php echo $row['agama']; ?></td>
			</tr>
			<tr>
				<td >Pekerjaan</td>
				<td>:</td>
				<td><?php echo $row['pekerjaan']; ?></td>
			</tr>
			<tr>
				<td >NIK</td>
				<td>:</td>
				<td><?php echo $row['nik']; ?></td>
			</tr>
			<tr>
				<td >Alamat</td>
				<td>:</td>
				<td><?php echo $row['alamat']; ?></td>
			</tr>
		</table>
		<br><br>
		<table width="100%">
			<tr>
				<td >Orang tersebut diatas benar-benar penduduk kami Dusun. Bahwa nama yang bersangkutan tidak berada di rumah dan tidak diketahui keberadaannya.</td>
			</tr>
		</table><br>
		<table width="100%">
			<tr>
				<td >Surat keterangan ini dipergunakan untuk <a style="text-transform: capitalize;"><u><b><?php echo $row['keperluan']; ?>.</a></u></b></td>
			</tr>
		</table><br>
		<table width="100%">
			<tr>
				<td >Demikian surat keterangan ini dibuat dengan sebenar-benarnya dan digunakan sebagaimana mestinya.</td>
			</tr>
		</table>
	</div>
	<br>
	<table width="100%" style="text-transform: capitalize;">
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td width="10%"></td>
			<td width="30%"></td>
			<td width="10%"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td align="center">Kepala Desa</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td align="center" style="text-transform: uppercase;"><u><b><?php echo $row['nama_pejabat']; ?></b></u></td>
		</tr>
	</table>
</div>
<script>
	window.print();
</script>
</body>
</html>

<?php
  	}
?>