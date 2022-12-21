<?php

include 'header.php';

 ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Surat Masuk</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Surat Masuk</li>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Surat Masuk<button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>  Tambah Data</button></h4>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>

                                            <tr>
                                                <th>Pengirim</th>
                                                <th>Tanggal Surat</th>
                                                <th>Tanggal Diterima</th>
                                                <th>No. Surat</th>
                                                <th>Perihal</th>
                                                <th>Lampiran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $data = mysqli_query($koneksi, "select * from tb_suratmasuk");
                                          while ($d = mysqli_fetch_array($data))
                                          {

                                           ?>
                                           <tr>
                                             <td><?php echo $d['pengirim']; ?></td>
                                             <td><?php echo $d['tgl_surat']; ?></td>
                                             <td><?php echo $d['tgl_terima']; ?></td>
                                             <td><?php echo $d['no_surat']; ?></td>
                                             <td><?php echo $d['perihal']; ?></td>
                                             <td><a href="gambar/<?php echo $d['lampiran_file']; ?>" target="_blank"><?php echo "<img src='gambar/".$d['lampiran_file']."' width='100' height='100'>"; ?> </a></td>
                                             <td>
                                               <a href="sm_hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin hapus');"><div class="btn" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash-alt"></i></div></a>
                                               <a href="sm_edit.php?id=<?php echo $d['id']; ?>"><div class="btn" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></div></a>
                                            </td>
                                           </tr>
                                         <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->



            <!-- general form elements disabled -->
            <div class="modal fade" id="exampleModal" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Input Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="sm_simpan.php" method="POST" enctype="multipart/form-data">

                  <div class="modal-body">

                  <!-- input states -->
                  <div class="form-group">
                    <label class="control-label">Pengirim</label>
                    <input type="text" name="pengirim" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Tanggal Surat</label>
                    <input type="date" name="tgl_surat" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Tanggal Terima</label>
                    <input type="date" name="tgl_terima" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">No. Surat</label>
                    <input type="text" name="no_surat" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Perihal</label>
                    <input type="text" name="perihal" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="custom-file">
                  <input type="file" name="foto" >
                   
                  </div>
                  <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                  <button type="submit" class="btn btn-primary float-right">Simpan</button>

                  </div>
                  </form>
              </div>
              <!-- /.card-body -->



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
<?php

include 'footer.php';

 ?>
