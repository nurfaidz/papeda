<?php 
include 'header.php';
$no = 1;
$Tampil = mysqli_query($koneksi, "SELECT tb_penduduk.nama, tb_suratketerangan.id_sk, tb_suratketerangan.jenis_surat, tb_suratketerangan.no_surat, tb_suratketerangan.nik, tb_suratketerangan.tanggal_surat FROM tb_penduduk LEFT JOIN tb_suratketerangan ON tb_suratketerangan.nik = tb_penduduk.nik WHERE tb_suratketerangan.status='selesai'");
?>
<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Surat Keluar</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Surat Keluar</li>
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
                                <h4 class="card-title">Data Surat Keluar</h4>
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                        class="table table-striped table-bordered display no-wrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Tangal</th>
                                                <th>No.Surat</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Jenis Surat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php if(mysqli_num_rows($Tampil)>0){
                                        $no = 1;
                                        while($row = mysqli_fetch_array($Tampil)){ ?>
                                            <tr>
                                                <td><?php echo $row['tanggal_surat']; ?></td>
                                                <td><?php echo $row['no_surat']; ?></td>
                                                <td><?php echo $row['nik']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['jenis_surat']; ?></td>
                                                <td>
                                                
                                                <?php  
                                                if($row['jenis_surat']=="Surat Keterangan"){
                                                ?>
                                                <a name="cetak" target="_blank" class="btn btn-outline-primary waves-effect waves-light btn-sm" href="SK_cetak.php?id=<?php echo $row['id_sk']; ?>"><b><span class="btn-label"><i class="icon-printer"></i></span> CETAK</b></a>
                                                <?php
                                                } else if($row['jenis_surat']=="Surat Keterangan Baik"){
                                                ?>
                                                <a name="cetak" target="_blank" class="btn btn-outline-primary waves-effect waves-light btn-sm" href='SKB_cetak.php?id=<?php echo $row['id_sk']; ?>'><b><span class="btn-label"><i class="icon-printer"></i></span> CETAK</b></a>
                                                <?php
                                                } else if($row['jenis_surat']=="Surat Permohonan SKCK"){
                                                ?>
                                                <a name="cetak" target="_blank" class="btn btn-outline-primary waves-effect waves-light btn-sm" href='SKCK_cetak.php?id=<?php echo $row['id_sk']; ?>'><b><span class="btn-label"><i class="icon-printer"></i></span> CETAK</b></a>
                                                <?php
                                                } else if($row['jenis_surat']=="Surat Keterangan Usaha"){
                                                ?>
                                                <a name="cetak" target="_blank" class="btn btn-outline-primary waves-effect waves-light btn-sm" href='SKIU_cetak.php?id=<?php echo $row['id_sk']; ?>'><b><span class="btn-label"><i class="icon-printer"></i></span> CETAK</b></a>
                                                <?php
                                                } else if($row['jenis_surat']=="Surat Izin Hajatan"){
                                                ?>
                                                <a name="cetak" target="_blank" class="btn btn-outline-primary waves-effect waves-light btn-sm" href='SIH_cetak.php?id=<?php echo $row['id_sk']; ?>'><b><span class="btn-label"><i class="icon-printer"></i></span> CETAK</b></a>
                                                <?php
                                                } else if($row['jenis_surat']=="Surat Keterangan Domisili"){
                                                ?>
                                                <a name="cetak" target="_blank" class="btn btn-outline-primary waves-effect waves-light btn-sm" href='SKD_cetak.php?id=<?php echo $row['id_sk']; ?>'><b><span class="btn-label"><i class="icon-printer"></i></span> CETAK</b></a>

                                                <?php
                                                }
                                                ?>
                                            </td>
                                            </tr>
                                            <?php
                                            }}
                                            ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php 
include 'footer.php';
?>