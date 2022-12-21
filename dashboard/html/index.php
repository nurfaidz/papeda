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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat Datang <?php echo $_SESSION['username']; ?></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a class="text-muted">Dashboard</a>
                                    </li>
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
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                        <a href="penduduk.php">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                    <?php
                                    $data_penduduk = mysqli_query($koneksi,"select * from tb_penduduk");

                                    $jumlah_penduduk = mysqli_num_rows($data_penduduk);

                                    ?>
                                    <h2 class="text-dark mb-1 font-weight-medium"><?php echo "$jumlah_penduduk"; ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Penduduk</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                </div>
                            </div>
                        </a>
                        </div>

                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                        <a href="surat_keluar.php">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                <?php
                                    $surat_keluar = mysqli_query($koneksi,"select * from tb_suratketerangan");

                                    $jumlah_sk = mysqli_num_rows($surat_keluar);

                                    ?>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><?php echo "$jumlah_sk"; ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Surat Keluar
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="mail"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Surat Masuk</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="mail"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <br><br>
                    
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

<?php

include 'footer.php';

?>
