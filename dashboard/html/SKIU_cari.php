<?php
include 'header.php';

if(isset($_GET['pesan'])){
if($_GET['pesan']=="gagal"){
echo "<div class='alert alert-danger'><center>NIK Anda tidak terdaftar. Silahkan hubungi Kantor Desa!</center></div>";
}
}

?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Input Surat</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Input Surat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card-body">
                                <h4 class="card-title">Verifikasi Data NIK</h4>
                                <form class="mt-2" action="SKUI_form.php" method="get">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="cari">
                                    </div>
                                    <input type="submit" value="Cari" class="btn waves-effect waves-light btn-rounded btn-outline-secondary"> </input>
                                </form>
                            </div>
                    </div>

<?php 
include 'footer.php';
?>