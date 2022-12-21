<?php
include 'header.php';

	if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $qry_cari="select * from tb_penduduk where nik like '%$cari%'";				
    }else {
        header("location:SK_cari.php?pesan=gagal");
    }

    $data = mysqli_query($koneksi,$qry_cari);
	$no = 1;
	while($d = mysqli_fetch_array($data)){
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
                                    <li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
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
                <form method="GET" action="SKB_save.php">
                <div class="row">
                    <div class="col-sm-12 col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Verivikasi Data Penduduk</h4>
                                    <div class="form-group row">
                                        <label for="inputHorizontal"
                                            class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control is-valid"
                                               name="nik" value="<?php echo $d['nik']; ?>" readonly>
                                            <div class="valid-feedback">NIK Berhasil di temukkan.</div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>    

                    <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">No. Surat</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                                name="no_surat"> 
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nama Pengesah Surat</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                            name="nama_pejabat"> 
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                    <h6 class="container-fluid" align="left"><i class="fas fa-user"></i> Informasi Pribadi</h6><hr width="97%">
                    <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nama Lengkap</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                                name="nama" value="<?php echo $d['nama']; ?>" readonly> 
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Jenis Kelamin</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                            name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>" readonly> 
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Alamat</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <textarea type="text" class="form-control"
                                            name="alamat" readonly> <?php echo $d['alamat']; ?></textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tempat Tanggal Lahir</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                               name="ttl" value="<?php echo $d['ttl']; ?>" readonly>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Agama</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                            name="agama" value="<?php echo $d['agama']; ?>" readonly>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pekerjaan</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"
                                            name="pekerjaan" value="<?php echo $d['pekerjaan']; ?>" readonly>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="container-fluid" align="left"><i class="fas fa-edit"></i> Formulir Surat</h6><hr width="97%">
                    <div class="col-sm-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Keperluan</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control"
                                                name="keperluan" placeholder="Masukkan keperluan surat"> </input>
                                        </div>
                                    </div>
                                    <input type="submit" value="simpan" class="btn btn-outline-secondary">
                        </div>
                    </div>
    </form>

                    <hr width="97%">
                
<?php 
}
include 'footer.php';
?>