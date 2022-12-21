<?php

include 'header.php';

?>

 <!-- Content Wrapper. Contains page content -->
    <div class="page-wrapper">
    <!-- Content Header (Page header) -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Request Box</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a class="text-muted">Home</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Request Box</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Main content -->

<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="#">
                <div class="form-body">
              <div class="row">
            <div class="col-md-6 lg-2">
          </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                  <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Folders</h3>
                <div class="card-tools">
                </div>
            </div>
            <?php

            $data_req = mysqli_query($koneksi,"select * from tb_reqdata");

            $jumlah_req = mysqli_num_rows($data_req);

            ?>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                    <a href="kotakpermintaan.php" class="nav-link">
                    <i class="fas fa-inbox"></i> Req Masuk
                    <span class="badge btn-outline_primary float-right"><?php echo "$jumlah_req"; ?></span>
                    </a>
                </li>
            </ul>
            </div>
            <!-- /.card-body -->
        </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9 lg-9">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title">Req Masuk</h3>

              <div class="card-tools">
                <form class="mt-2" action="kotakpermintaan.php" method="get">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div id="livesearch" class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
                </form>
              </div>
              <!-- /.card-tools -->
            </div>


                        <?php
                        $data = mysqli_query($koneksi, "select * from tb_reqdata");
                        while ($d = mysqli_fetch_array($data))
                        {
                        ?>


              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped" id="zero_config">
                  <tbody>
                  <tr>

                    <td class="mailbox-name"><?php echo $d['no_kk']; ?></a></td>
                    <td class="mailbox-name"><a href="read-mail.html"><?php echo $d['nama']; ?></a></td>
                    <td class="mailbox-subject"><b><?php echo $d['jenis']; ?></td>
                    </td>
                    <td class="mailbox-attachment"><?php echo $d['status']; ?></td>
                    <td class="mailbox-date"><?php echo $d['tgl']; ?></td>
                    <td><a href=""><div class="btn"><i class="fa fa-trash-alt"></i></div></a></td>
                  </tr>

                  <?php } ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
</div>
</div>

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

<?php

include 'footer.php';

?>
