<?php

include 'header.php';

 ?>

<div class="page-wrapper">

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Detail</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Surat Masuk</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- basic table -->
                <?php
                if(isset($_GET['alert'])){
                    if($_GET['alert']=='gagal_simpan'){
                        ?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_upload"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Maaf, Gambar gagal untuk diupload.
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Surat Masuk</h4>
                    <div class="table-responsive">
                      <table id="zero_config" class="table table-striped table-bordered no-wrap">
                      <?php
                      $kondisi=$_GET['id'];
                      $query_opendata = "SELECT * FROM tb_suratmasuk WHERE id=$kondisi";
                      $tampil_opendata = mysqli_query($koneksi, $query_opendata);
                      $d = mysqli_fetch_array($tampil_opendata);
                      ?>

                      <form action="sm_update.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group" >
                          <label>Pengirim</label>
                          <input type="hidden" name="id" class="form-control" value="<?php echo $d['id']; ?>">
                          <input type="text" name="pengirim" class="form-control" value="<?php echo $d['pengirim']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Tanggal Surat</label>
                          <input type="date" name="tgl_surat" class="form-control" value="<?php echo $d['tgl_surat']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Tanggal Terima</label>
                          <input type="date" name="tgl_terima" class="form-control" value="<?php echo $d['tgl_terima']; ?>">
                        </div>

                        <div class="form-group">
                          <label>No. Surat</label>
                          <input type="text" name="no_surat" class="form-control" value="<?php echo $d['no_surat']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Perihal</label>
                          <input type="text" name="perihal" class="form-control" value="<?php echo $d['perihal']; ?>">
                        </div>
                        <div class="form-grup">
                        <label> Lampiran File</label><br>
                        <a href="gambar/<?php echo $d['lampiran_file']; ?>" target="_blank"><?php echo "<img style='border:1px solid #0404B4;' src='gambar/".$d['lampiran_file']."' width='120' height='140'>"; ?> </a>
                        <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                        <input type="file" name="foto">
                        </div><br>

                          <a href="surat_masuk.php" class="btn btn-primary">Kembali</a>
                          <button type="submit" class="btn btn-primary float-right">Simpan</button>
                      </form>

                   </table>

                 </div>
           </div>
       </div>
   </div>
</div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php

include 'footer.php';

 ?>
