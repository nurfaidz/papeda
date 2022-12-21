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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Penduduk</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Data Penduduk</li>
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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Penduduk<button class="btn btn-outline-info btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>  Tambah Data</button></h4>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>

                                            <tr>
                                                <th>No KK</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>TTL</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $data = mysqli_query($koneksi, "select * from tb_penduduk");
                                          while ($d = mysqli_fetch_array($data))
                                          {

                                           ?>
                                           <tr>
                                             <td><?php echo $d['no_kk']; ?></td>
                                             <td><?php echo $d['nik']; ?></td>
                                             <td><?php echo $d['nama']; ?></td>
                                             <td><?php echo $d['ttl']; ?></td>
                                             <td><?php echo $d['alamat']; ?></td>
                                             <td>
                                               <a href="detail.php?id_penduduk=<?php echo $d['id_penduduk']; ?>"><div class="btn" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-search-plus"></i></div></a>
                                               <a href="hapus.php?id_penduduk=<?php echo $d['id_penduduk']; ?>" onclick="return confirm('Yakin hapus');"><div class="btn" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash-alt"></i></div></a>
                                               <a href="edit.php?id_penduduk=<?php echo $d['id_penduduk']; ?>"><div class="btn" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></div></a>
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
                  <form action="simpan.php" method="POST">

                  <div class="modal-body">

                  <!-- input states -->
                  <div class="form-group">
                    <label class="control-label">No KK</label>
                    <input type="text" name="no_kk" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">NIK</label>
                    <input type="text" name="nik" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Nama</label>
                    <input type="text" name="nama" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">TTL</label>
                    <input type="text" name="ttl" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Status</label>
                    <input type="text" name="status" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Agama</label>
                    <input type="text" name="agama" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control"placeholder="Masukan data..." required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control"placeholder="Masukan data..." required>
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
