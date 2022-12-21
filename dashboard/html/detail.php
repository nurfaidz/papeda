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
                        <li class="breadcrumb-item text-muted active" aria-current="page">Detail</li>
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
                    $query_bukadata = "SELECT * FROM tb_penduduk WHERE id_penduduk=$kondisi";
                    $tampil_bukadata = mysqli_query($koneksi, $query_bukadata);
                    $d = mysqli_fetch_array($tampil_bukadata);
                    ?>

                     <tr>
                       <th>NO KK</th>
                       <td><?php echo $d['no_kk']; ?></td>
                     </tr>
                     <tr>
                       <th>NIK</th>
                       <td><?php echo $d['nik']; ?></td>
                     </tr>
                     <tr>
                       <th>Nama</th>
                       <td><?php echo $d['nama']; ?></td>
                     </tr>
                     <tr>
                       <th>TTL</th>
                       <td><?php echo $d['ttl']; ?></td>
                     </tr>
                     <tr>
                       <th>Alamat</th>
                       <td><?php echo $d['alamat']; ?></td>
                     </tr>
                     <tr>
                       <th>Status</th>
                       <td><?php echo $d['status']; ?></td>
                     </tr>
                     <tr>
                       <th>Jenis Kelamin</th>
                       <td><?php echo $d['jenis_kelamin']; ?></td>
                     </tr>
                     <tr>
                       <th>Agama</th>
                       <td><?php echo $d['agama']; ?></td>
                     </tr>
                     <tr>
                       <th>Pendidikan</th>
                       <td><?php echo $d['pendidikan']; ?></td>
                     </tr>
                     <tr>
                       <th>Pekerjaan</th>
                       <td><?php echo $d['pekerjaan']; ?></td>

                     </tr>
                   </table>
                   <a href="penduduk.php" class="btn btn-primary">Kembali</a>
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
