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
                        <li class="breadcrumb-item text-muted active" aria-current="page">Data Penduduk</li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                    <option selected>Aug 19</option>
                    <option value="1">July 19</option>
                    <option value="2">Jun 19</option>
                </select>
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
                    <h4 class="card-title">Detail Data Penduduk</h4>
                    <div class="table-responsive">
                      <table id="zero_config" class="table table-striped table-bordered no-wrap">
                      <?php

                      $kondisi=$_GET['id_penduduk'];
                      $query_opendata = "SELECT * FROM tb_penduduk WHERE id_penduduk=$kondisi";
                      $tampil_opendata = mysqli_query($koneksi, $query_opendata);
                      $d = mysqli_fetch_array($tampil_opendata);
                      ?>



                      <form action="update.php" method="POST">
                        <div class="form-group" >
                          <label>NO KK</label>
                          <input type="hidden" name="id_penduduk" class="form-control" value="<?php echo $d['id_penduduk']; ?>">
                          <input type="text" name="no_kk" class="form-control" value="<?php echo $d['no_kk']; ?>">
                        </div>

                        <div class="form-group">
                          <label>NIK</label>
                          <input type="text" name="nik" class="form-control" value="<?php echo $d['nik']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>">
                        </div>

                        <div class="form-group">
                          <label>TTL</label>
                          <input type="text" name="ttl" class="form-control" value="<?php echo $d['ttl']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Status</label>
                          <input type="text" name="status" class="form-control" value="<?php echo $d['status']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select class="form-control" name="jenis_kelamin"  value="<?php echo $d['jenis_kelamin']; ?>">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Agama</label>
                          <input type="text" name="agama" class="form-control" value="<?php echo $d['agama']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Pendidikan</label>
                          <input type="text" name="pendidikan" class="form-control" value="<?php echo $d['pendidikan']; ?>">
                        </div>

                        <div class="form-group">
                          <label>Pekerjaan</label>
                          <input type="text" name="pekerjaan" class="form-control" value="<?php echo $d['pekerjaan']; ?>">
                        </div>

                          <a href="penduduk.php" class="btn btn-primary">Kembali</a>
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
