<?php include('rekap_header.php') ?>
<?php
$query_tim = $db->query("SELECT * FROM tim_baru");

$query_koordinator = $db->query("SELECT * FROM Koordinator");

$query = $db->query("SELECT o.id, o.nama_penilai, o.tanggal_penugasan, o.id_tim, t.tim, o.id_koordinator, l.nama_koordinator, o.ketepatan, o.inisiatif, o.penerimaan, o.atur, o.kemampuan, o.disiplin, o.kualitas, o.tanggung_jawab, o.nilai, o.grade, o.keterangan FROM kelompok AS o
                      LEFT JOIN tim_baru AS t ON o.id_tim = t.id_tim
                      LEFT JOIN Koordinator AS l ON o.id_koordinator = l.nip
                      WHERE o.id = '".$_GET['id']."'");
$no = 1;
$row = $query->fetch_assoc();
?>
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
                <li class="breadcrumb-item">Edit Rekap Kerja Tim</li>
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
                <h3 class="card-title">Edit Rekap Kerja Tim<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form method="POST" action="kelompok_update_save.php">
                <div class="card-body">
                  <div class="form-group">
		    <!-- <input type="hidden" name="id" value="<?php echo $row['id'] ?>"  class="form-control" > -->
                    <label for="id">Id Rekap Tim</label>
        <input type="text" name="id" value="<?php echo $row['id'] ?>" class="form-control" readonly value="">
                  </div>
                  <div class="form-group">
                    <label for="penilai">Nama Penilai</label>
        <input type="text" name="penilai" value="<?php echo $row['nama_penilai'] ?>" class="form-control" autofocus>
                  </div>
                 <div class="form-group">
                    <label for="tanggal_penugasan">Tanggal Penugasan</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="tanggal_penugasan" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $row['tanggal_penugasan']; ?>" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_tim">Tim</label>
                    <select name="nama_tim" id="nama_tim" class="form-control">
                    <?php while($row_tim = $query_tim->fetch_assoc()): ?>
                      <option value="<?php echo $row_tim['id_tim'] ?>" 
                    <?php if($row['id_tim'] ===  $row_tim['id_tim']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_tim['tim'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_koordinator">Koordinator</label>
                    <select name="nama_koordinator" id="nama_koordinator" class="form-control">
                    <?php while($row_koordinator = $query_koordinator->fetch_assoc()): ?>
                      <option value="<?php echo $row_koordinator['nip'] ?>" 
                    <?php if($row['id_koordinator'] ===  $row_koordinator['nip']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_koordinator['nama_koordinator'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="ketepatan">Ketepatan Waktu dalam Menyelesaikan Pekerjaan</label>
        <input type="text" name="ketepatan" value="<?php echo $row['ketepatan'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inisiatif">Inisiatif</label>
        <input type="text" name="inisiatif" value="<?php echo $row['inisiatif'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="penerimaan">Penerimaan</label>
        <input type="text" name="penerimaan" value="<?php echo $row['penerimaan'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="atur">Kemampuan Mengatur Pekerjaan dan Sistem Kerja</label>
        <input type="text" name="atur" value="<?php echo $row['atur'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kemampuan">Kemampuan Kerjasama Tim dalam Menyelesaikan Masalah</label>
        <input type="text" name="kemampuan" value="<?php echo $row['kemampuan'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="disiplin">Disiplin</label>
        <input type="text" name="disiplin" value="<?php echo $row['disiplin'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kualitas">Kualitas Tim</label>
        <input type="text" name="kualitas" value="<?php echo $row['kualitas'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="tanggung_jawab">Tanggung Jawab</label>
        <input type="number" name="tanggung_jawab" value="<?php echo $row['tanggung_jawab'] ?>" class="form-control" max="10" min="0" step="any">
                  </div>
                  <div class="form-group">
                    <label for="nilai">Nilai</label>
        <input type="text" name="nilai" Readonly value="<?php echo $row['nilai'] ?>" class="form-control">
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

