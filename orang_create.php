<?php include('rekap_header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <link href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Rekap Kerja Karyawan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item "><a href="rekap_read.php">Rekap Kerja</a></li>
                <li class="breadcrumb-item "><a href="orang_read.php">Rekap Kerja Karyawan</a></li>
                <li class="breadcrumb-item">Tambah Rekap Kerja Karyawan</li>               
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
                <h3 class="card-title">Tambah Rekap Kerja Karyawan<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form method="POST" action="orang_create_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">Id</label>
        <input type="id" name="id" class="form-control" autofocus>
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
                    <label for="nama_stasiun">Stasiun</label>
                    <select name ="nama_stasiun" id="nama_stasiun" class="form-control" >
                      <option value="" hidden selected></option>
                    <?php $query_s = $db->query("SELECT * FROM lokasi"); ?>
                    <?php while($row_s = $query_s->fetch_assoc()): ?>
                      <option value="<?php echo $row_s['id_stasiun']; ?>" ><?php echo $row_s['nama_stasiun']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_koordinator">Nama Koordinator</label>
                    <select name ="nama_koordinator" id="nama_koordinator" class="form-control" >
                      <option value="" hidden selected></option>
                    <?php $query_k = $db->query("SELECT * FROM koordinator"); ?>
                    <?php while($row_k = $query_k->fetch_assoc()): ?>
                      <option value="<?php echo $row_k['nip']; ?>" ><?php echo $row_k['nama_koordinator']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Karyawan</label>
                    <select name ="nama" id="nama" class="form-control" >
                      <option value="" hidden selected></option>
                    <?php $query_n = $db->query("SELECT * FROM profile"); ?>
                    <?php while($row_n = $query_n->fetch_assoc()): ?>
                      <option value="<?php echo $row_n['nip']; ?>" ><?php echo $row_n['nama']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_tim">Tim</label>
                    <select name ="nama_tim" id="nama_tim" class="form-control" >
                      <option value="" hidden selected></option>
                    <?php $query_t = $db->query("SELECT * FROM tim_baru"); ?>
                    <?php while($row_t = $query_t->fetch_assoc()): ?>
                      <option value="<?php echo $row_t['id_tim']; ?>" ><?php echo $row_t['tim']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kerajinan">Kerajinan</label>
        <input type="number" step="any" name="kerajinan" id="kerajinan" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="disiplin">Disiplin Kerja</label>
        <input type="number" step="any" name="disiplin" id="disiplin" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="etika">Etika Bekerja</label>
        <input type="number" step="any" name="etika" id="etika" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="inisiatif">Inisiatif, Kreatif dan Inofatif</label>
        <input type="number" step="any" name="inisiatif" id="inisiatif" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="cerdas">Bekerja Secara Cerdas</label>
        <input type="number" step="any" name="cerdas" id="cerdas" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="kualitas">Kualitas Hasil Kerja</label>
        <input type="number" step="any" name="kualitas" id="kualitas" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="penguasaan">Penguasaan Pekerjaan</label>
        <input type="number" step="any" name="penguasaan" id="penguasaan" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="komunikasi">Komunikasi</label>
        <input type="number" step="any" name="komunikasi" id="komunikasi" class="form-control" max="10" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="kerjasama">Kerjasama dalam Team Work</label>
        <input type="number" step="any" name="kerjasama" id="kerjasama" class="form-control" min="0" value="0">
                  </div>
                  <div class="form-group">
                    <label for="kejujuran">Kejujuran</label>
        <input type="number" step="any" name="kejujuran" id="kejujuran" class="form-control" min="0" max="10" value="0">
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

    <script type="text/javascript">   
    <?php   
    echo $a; ?>  
    function changeValue(nip){  
    document.getElementById('nama').value = nama[nip].nama;  
                   
    };  
    </script> 
    
<script type="text/javascript">

$("#kerajinan").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});

$("#disiplin").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});

$("#etika").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});

$("#inisiatif").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});

$("#cerdas").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});

$("#kualitas").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});

$("#penguasaan").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});

  $("#komunikasi").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});

  $("#kerjasama").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});
 
$("#kejujuran").keyup(function(){
  var a = parseInt($("#kerajinan").val());
  var b = parseInt($("#etika").val());
  var c = parseInt($("#etika").val());
  var d = parseInt($("#inisiatif").val());
  var e = parseInt($("#cerdas").val());
  var f = parseInt($("#kualitas").val());
  var g = parseInt($("#penguasaan").val());
  var h = parseInt($("#komunikasi").val());
  var i = parseInt($("#kerjasama").val());
  var j = parseInt($("#kejujuran").val());
  var k = (a+b+c+d+e+f+g+h+i+j)/10;
  $("#nilai").val(k);
});
</script>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('rekap_footer.php') ?>

