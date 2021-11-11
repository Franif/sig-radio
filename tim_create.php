<?php include('tim_read_header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tim</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="tim_read.php">Tim</a></li>
                <li class="breadcrumb-item client">Tambah Tim</li>
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
                <h3 class="card-title">Tambah Tim<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        <form method="POST" action="tim_create_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_tim">Id Tim</label>
        <input type="text" id="id_tim" name="id_tim" class="form-control" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Karyawan</label>
                    <select name ="nama" id="nama" class="form-control" >
                      <option value="nama" hidden selected>---Pilih Karyawan---</option>
                    <?php $query_nama = $db->query("SELECT * FROM profile"); ?>
                    <?php while($row_nama = $query_nama->fetch_assoc()): ?>
                      <option value="<?php echo $row_nama['nip']; ?>" ><?php echo $row_nama['nama']; ?></option>
                    <?php endwhile; ?>
                    </select>
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
                    <label for="tim">Tim</label>
        <input type="text" name="tim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="nama_koordinator">Nama Koordinator</label>
                    <select name ="nama_koordinator" id="nama_koordinator" class="form-control" >
                      <option value="" hidden selected>---Pilih Koordinator---</option>
                    <?php $query_nama_koordinator = $db->query("SELECT * FROM koordinator"); ?>
                    <?php while($row_nama_koordinator = $query_nama_koordinator->fetch_assoc()): ?>
                      <option value="<?php echo $row_nama_koordinator['nip']; ?>" ><?php echo $row_nama_koordinator['nama_koordinator']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_stasiun">Stasiun</label>
                    <select name ="nama_stasiun" id="nama_stasiun" class="form-control" >
                      <option value="" hidden selected>---Pilih Stasiun---</option>
                    <?php $query_s = $db->query("SELECT * FROM lokasi"); ?>
                    <?php while($row_s = $query_s->fetch_assoc()): ?>
                      <option value="<?php echo $row_s['id_stasiun']; ?>" ><?php echo $row_s['nama_stasiun']; ?></option>
                    <?php endwhile; ?>
                    </select>
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

    <script type="text/javascript">   
    <?php   
    echo $a; ?>  
    function changeValue(nip){  
    document.getElementById('nama').value = nama[nip].nama;  
                   
    };  
    </script> 
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('tim_read_footer.php') ?>

