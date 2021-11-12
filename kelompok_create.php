<?php include('loggedin.php') ?>
<?php include('header.php') ?>
<?php include('left_sidebar.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Rekap Kerja Tim</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item "><a href="rekap_read.php">Rekap Kerja</a></li>
                <li class="breadcrumb-item "><a href="kelompok_read.php">Rekap Kerja Tim</a></li>
                <li class="breadcrumb-item">Tambah Rekap Kerja Tim</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Rekap Kerja Tim<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        <form method="POST" action="kelompok_create_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">Id Rekap Tim</label>
        <input type="text" name="id" id="id" class="form-control" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="penilai">Nama Penilai</label>
        <input type="text" name="penilai" id="penilai" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_penugasan">Tanggal Penugasan</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="tanggal_penugasan" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_tim">Tim</label>
                    <select name ="nama_tim" id="nama_tim" class="form-control" >
                      <option value="" hidden selected>---Pilih Tim ---</option>
                    <?php $query_t = $db->query("SELECT * FROM tim_baru"); ?>
                    <?php while($row_t = $query_t->fetch_assoc()): ?>
                      <option value="<?php echo $row_t['id_tim']; ?>" ><?php echo $row_t['tim']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_koordinator">Koordinator</label>
                    <select name ="nama_koordinator" id="nama_koordinator" class="form-control" >
                      <option value="" hidden selected>---Pilih Koordinator ---</option>
                    <?php $query_k = $db->query("SELECT * FROM koordinator"); ?>
                    <?php while($row_k = $query_k->fetch_assoc()): ?>
                      <option value="<?php echo $row_k['nip']; ?>" ><?php echo $row_k['nama_koordinator']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="ketepatan">Ketepatan Waktu dalam Menyelesaikan Pekerjaan</label>
        <input type="number" step="any" name="ketepatan" id="ketepatan" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="inisiatif">Inisiatif</label>
        <input type="number" step="any" name="inisiatif" id="inisiatif" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="penerimaan">Penerimaan dalam Tugas Tambahan</label>
        <input type="number" step="any" name="penerimaan" id="penerimaan" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="atur">Kemampuan Mengatur Pekerjaan dan Sistem Kerja</label>
        <input type="number" step="any" name="atur" id="atur" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="kemampuan">Kemampuan Kerjasama Tim dalam Menyelesaikan Masalah</label>
        <input type="number" step="any" name="kemampuan" id="kemampuan" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="disiplin">Disiplin</label>
        <input type="number" step="any" name="disiplin" id="disiplin" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="kualitas">Kualitas Tim</label>
        <input type="number" step="any" name="kualitas" id="kualitas" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="tanggung_jawab">Tanggung Jawab</label>
        <input type="number" step="any" name="tanggung_jawab" id="tanggung_jawab" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="nilai">Nilai</label>
        <input type="text" name="nilai" id="nilai" class="form-control" readonly value="0">
                  </div>
                </div>
                                  <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div><!--/. container-fluid -->
      </section>
      <script src="plugins/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- <script type="text/javascript">
    <?php
    echo $a; ?>
    function changeValue(nip){
    document.getElementById('nama').value = nama[nip].nama;
    };
    </script>  -->
<script type="text/javascript">

$("#ketepatan").keyup(function(){
  var a = parseInt($("#ketepatan").val());
  var b = parseInt($("#inisiatif").val());
  var c = parseInt($("#penerimaan").val());
  var d = parseInt($("#atur").val());
  var e = parseInt($("#kemampuan").val());
  var f = parseInt($("#disiplin").val());
  var g = parseInt($("#kualitas").val());
  var h = parseInt($("#tanggung_jawab").val());
  var i = (a+b+c+d+e+f+g+h)/8;
  $("#nilai").val(i);
});

$("#inisiatif").keyup(function(){
  var a = parseInt($("#ketepatan").val());
  var b = parseInt($("#inisiatif").val());
  var c = parseInt($("#penerimaan").val());
  var d = parseInt($("#atur").val());
  var e = parseInt($("#kemampuan").val());
  var f = parseInt($("#disiplin").val());
  var g = parseInt($("#kualitas").val());
  var h = parseInt($("#tanggung_jawab").val());
  var i = (a+b+c+d+e+f+g+h)/8;
  $("#nilai").val(i);
});

$("#penerimaan").keyup(function(){
  var a = parseInt($("#ketepatan").val());
  var b = parseInt($("#inisiatif").val());
  var c = parseInt($("#penerimaan").val());
  var d = parseInt($("#atur").val());
  var e = parseInt($("#kemampuan").val());
  var f = parseInt($("#disiplin").val());
  var g = parseInt($("#kualitas").val());
  var h = parseInt($("#tanggung_jawab").val());
  var i = (a+b+c+d+e+f+g+h)/8;
  $("#nilai").val(i);
});

$("#atur").keyup(function(){
  var a = parseInt($("#ketepatan").val());
  var b = parseInt($("#inisiatif").val());
  var c = parseInt($("#penerimaan").val());
  var d = parseInt($("#atur").val());
  var e = parseInt($("#kemampuan").val());
  var f = parseInt($("#disiplin").val());
  var g = parseInt($("#kualitas").val());
  var h = parseInt($("#tanggung_jawab").val());
  var i = (a+b+c+d+e+f+g+h)/8;
  $("#nilai").val(i);
});

$("#kemampuan").keyup(function(){
  var a = parseInt($("#ketepatan").val());
  var b = parseInt($("#inisiatif").val());
  var c = parseInt($("#penerimaan").val());
  var d = parseInt($("#atur").val());
  var e = parseInt($("#kemampuan").val());
  var f = parseInt($("#disiplin").val());
  var g = parseInt($("#kualitas").val());
  var h = parseInt($("#tanggung_jawab").val());
  var i = (a+b+c+d+e+f+g+h)/8;
  $("#nilai").val(i);
});

$("#disiplin").keyup(function(){
  var a = parseInt($("#ketepatan").val());
  var b = parseInt($("#inisiatif").val());
  var c = parseInt($("#penerimaan").val());
  var d = parseInt($("#atur").val());
  var e = parseInt($("#kemampuan").val());
  var f = parseInt($("#disiplin").val());
  var g = parseInt($("#kualitas").val());
  var h = parseInt($("#tanggung_jawab").val());
  var i = (a+b+c+d+e+f+g+h)/8;
  $("#nilai").val(i);
});

$("#kualitas").keyup(function(){
  var a = parseInt($("#ketepatan").val());
  var b = parseInt($("#inisiatif").val());
  var c = parseInt($("#penerimaan").val());
  var d = parseInt($("#atur").val());
  var e = parseInt($("#kemampuan").val());
  var f = parseInt($("#disiplin").val());
  var g = parseInt($("#kualitas").val());
  var h = parseInt($("#tanggung_jawab").val());
  var i = (a+b+c+d+e+f+g+h)/8;
  $("#nilai").val(i);
});

  $("#tanggung_jawab").keyup(function(){
  var a = parseInt($("#ketepatan").val());
  var b = parseInt($("#inisiatif").val());
  var c = parseInt($("#penerimaan").val());
  var d = parseInt($("#atur").val());
  var e = parseInt($("#kemampuan").val());
  var f = parseInt($("#disiplin").val());
  var g = parseInt($("#kualitas").val());
  var h = parseInt($("#tanggung_jawab").val());
  var i = (a+b+c+d+e+f+g+h)/8;
  $("#nilai").val(i);
});

</script>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('rekap_footer.php') ?>

