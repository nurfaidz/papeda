<?php
include 'header.php';
 ?>

 <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

     <div class="container">
         <div class="row align-items-center">

             <div class="col-6 col-lg-2">
                 <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">PAPEDA</a></h1>
             </div>

             <div class="col-12 col-md-10 d-none d-lg-block">
                 <nav class="site-navigation position-relative text-right" role="navigation">

                     <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                         <li class=""><a href="index.php" class="nav-link">Beranda</a></li>
                         <li><a href="contact.php" class="nav-link active">Tentang kami</a></li>
                     </ul>
                 </nav>
             </div>

             <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

                 <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                     <span></span>
                 </a>
             </div>

         </div>
     </div>

 </header>

 <main id="main">

     <section class="hero-section inner-page">
         <div class="wave">

             <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                 <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                         <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                     </g>
                 </g>
             </svg>

         </div>

         <div class="container">
             <div class="row align-items-center">
                 <div class="col-12">
                     <div class="row justify-content-center">
                         <div class="col-md-7 text-center hero-text">
                           <h1 data-aos="fade-up" data-aos-delay="">Request data</h1>
                           <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Program Aplikasi Persuratan Desa</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </section>

     <section class="section">
         <div class="container">


             <div class="row">
                 <div class="col-md-12" data-aos="fade-up" data-aos-delay="">
                     <div class="feature-1 text-center">
                         <div class="wrap-icon icon-1">
                             <span class="icon la la-search"></span>
                         </div>
                         <h3 class="mb-3">Perbaikan Data</h3>
                         <p>Jika data Anda tidak dapat ditemukan atau terjadi kesalahan, Isi Format dibawah sesuai Data</p>
                     </div>
                 </div>
             </div>

         </div>
     </section>






<div class="container">
  <div class="row">
                   <div class="col-sm-12 col-md-12 col-lg-10">
                     <form method="GET" action="rqdata_save.php">
                       <div class="card">
                           <div class="card-body">
                               <h4 class="card-title">Isi Format Anda</h4>
                               <div class="col-mt-5 col-md-10" data-aos="fade-up">
                                     <div class="col-sm-12 col-md-12">
                                       <br>


                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Jenis</h4>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="jenis" value="Perbaikan Data" readonly>
                                <div class="validate"></div>
                      </div>
                    </div>
                </div>
            </div>


                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nama</h4>
                        <div class="form-group row">
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="nama" data-msg="Wajib diisi" placeholder="Masukkan Data Anda...">
                                <div class="validate"></div>
                      </div>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">No KK</h4>
                    <div class="form-group row">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="no_kk"data-rule="minlen:4" data-msg="Wajib diisi" placeholder="Masukkan Data Anda...">
                          <div class="validate"></div>
                  </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <h4 class="card-title">TTL</h4>
                <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="ttl" data-msg="Wajib diisi" placeholder="Masukkan Data Anda...">
                      <div class="validate"></div>
                  </div>
              </div>
            </div>
        </div>



<div class="card">
    <div class="card-body">
        <h4 class="card-title">Alamat</h4>
        <div class="form-group row">
            <div class="col-sm-12">
              <input type="text" class="form-control" name="alamat" data-msg="Wajib diisi" placeholder="Masukkan Data Anda...">
              <div class="validate"></div>
          </div>
      </div>
    </div>
</div>


<div class="card">
    <div class="card-body">
        <h4 class="card-title">Jenis Kelamin</h4>
        <div class="form-group row">
            <div class="col-sm-12">
              <input type="text" class="form-control" name="jenis_kelamin" data-msg="Wajib diisi" placeholder="Masukkan Data Anda...">
              <div class="validate"></div>
          </div>
      </div>
    </div>
</div>


<div class="card">
    <div class="card-body">
        <h4 class="card-title">No Telp</h4>
        <div class="form-group row">
            <div class="col-sm-12">
              <input type="text" class="form-control" name="no_telp" data-msg="Wajib diisi" placeholder="Masukkan Data Anda...">
              <div class="validate"></div>
          </div>
      </div>
    </div>
</div>
                  <div class="col-md-12 col-mb-12 form-group">
                      <input type="submit" class="btn btn-primary w-65 float-right" value="Kirim">
                  </div>

                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>


<br>
<br>
 </main><!-- End #main -->
<?php
include 'footer.php';
?>
