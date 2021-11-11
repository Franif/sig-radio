<?php include('tim_read_header.php') ?>
<?php
$query_koordinator = $db->query("SELECT * FROM koordinator");
$query_profile = $db->query("SELECT * FROM profile");
$query_stasiun = $db->query("SELECT * FROM lokasi");

$query = $db->query("SELECT t.id_tim, t.id_profile, p.nama, t.tanggal_penugasan, t.tim, t.id_koordinator, k.nama_koordinator, t.id_lokasi, l.nama_stasiun FROM tim_baru AS t
        LEFT JOIN profile AS p ON t.id_profile = p.nip
        LEFT JOIN koordinator AS k ON t.id_koordinator = k.nip
        LEFT JOIN lokasi AS l ON t.id_lokasi = l.id_stasiun
        WHERE t.id_tim = '".$_GET['id_tim']."' ");
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
              <h1 class="m-0">Tim</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="tim_read.php">Tim</a></li>
                <li class="breadcrumb-item client">Edit Tim</li>
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
                <h3 class="card-title">Edit Tim<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="tim_update_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">Id Tim</label>
                    <input type="text" name="id" value="<?php echo $row['id_tim'] ?>" class="form-control" readonly value="">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Karyawan</label>
                    <input type="nama" name="nama" value="<?php echo $row['nama'] ?>" class="form-control">
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
                    <label for="tim">Tim</label>
                    <input type="text" name="tim" value="<?php echo $row['tim'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="nama_koordinator"> Nama Koordinator</label>
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
                    <label for="nama_stasiun">Nama Stasiun</label>
                    <select name="nama_stasiun" id="nama_stasiun" class="form-control">
                    <?php while($row_stasiun = $query_stasiun->fetch_assoc()): ?>
                      <option value="<?php echo $row_stasiun['id_stasiun'] ?>" 
                    <?php if($row['id_lokasi'] ===  $row_stasiun['id_stasiun']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_stasiun['nama_stasiun'] ?>
                      </option>
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
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('tim_read_footer.php') ?>

