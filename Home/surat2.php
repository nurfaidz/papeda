<?php

include 'header.php';

 ?>

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
                             <h1 data-aos="fade-up" data-aos-delay="">Pengajuan Surat</h1>
                             <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Surat Lapor Hajatan</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </section>

<section class="section">
<div class="container">
    <div class="row align-items-center">
    </div>
    <div class="col-md-6" data-aos="fade-left">
        <img src="assets/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
    </div>
</div>
</div>
</section>
<div class="container">
<div class="col-md-8 mb-6 mb-md-0" data-aos="fade-up">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">

        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Jenis Surat</label>
                <input type="text" class="form-control" id="nametext1" value="Surat Lapor Hajatan" disabled>
            </div>
            <div class="col-md-12 form-group">
                <label for="name">Nama</label>
                <input type="email" class="form-control" name="nama" id="email" data-rule="email" data-msg="Wajib diisi" />
                <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group">
                <label for="name">NO. KK</label>
                <input type="text" class="form-control" name="NO. KK" id="NO. KK" data-rule="minlen:4" data-msg="Wajib diisi" />
                <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group">
                <label for="name">NIK</label>
                <input type="text" class="form-control" name="NIK" id="subject" data-rule="minlen:4" data-msg="Wajib diisi" />
                <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group">
                <label for="name">ALAMAT</label>
                <input type="text" class="form-control" name="Alamat" id="Alamat" data-rule="minlen:4" data-msg="Wajib diisi" />
                <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group">
                <label for="name">No. Telp</label>
                <input type="text" class="form-control" name="No. Telp" id="No. Telp" data-rule="minlen:4" data-msg="Wajib diisi" />
                <div class="validate"></div>
            </div>

            <div class="col-md-12 mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>

            <div class="col-md-4 form-group">
                <input type="submit" class="btn btn-primary d-block w-100" value="Send">
            </div>
        </div>

    </form>
</div>

</div>
</section>


<section class="section">
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right">
            <img src="assets/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
        </div>
    </div>
</div>
</section>


 <?php

 include 'footer.php';

  ?>
