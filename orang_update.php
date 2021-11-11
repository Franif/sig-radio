<?php include('rekap_header.php') ?>
<?php
$query_stasiun = $db->query("SELECT * FROM lokasi");
$query_koordinator = $db->query("SELECT * FROM koordinator");
$query_profile = $db->query("SELECT * FROM profile");
$query_tim = $db->query("SELECT * FROM tim_baru");

$query = $db->query("SELECT o.id, o.tanggal_penugasan, o.id_lokasi, l.nama_stasiun, o.id_koordinator, k.nama_koordinator, o.id_profile, p.nama, o.id_tim, t.tim, o.kerajinan, o.disiplin, o.etika, o.inisiatif, o.cerdas, o.kualitas, o.penguasaan, o.komunikasi, o.kerjasama, o.kejujuran, o.nilai, o.grade, o.ket  FROM orang AS o  
                      LEFT JOIN lokasi AS l ON o.id_lokasi = l.id_stasiun
                      LEFT JOIN koordinator AS k ON o.id_koordinator = k.nip
                      LEFT JOIN profile AS p ON o.id_profile = p.nip
                      LEFT JOIN tim_baru AS t ON o.id_tim = t.id_tim
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
              <h1 class="m-0">Data Karyawan</h1>
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
                <h3 class="card-title">Edit Data Karyawan<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form method="POST" action="orang_update_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">Id Rekap Karyawan</label>
        <input type="text" name="id" value="<?php echo $row['id'] ?>" class="form-control" readonly value="">
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
                  <div class="form-group">
                    <label for="nama_koordinator">Nama Koordinator</label>
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
                    <label for="nama_karyawan">Nama Karyawan</label>
                    <select name="nama_karyawan" id="nama_karyawan" class="form-control">
                    <?php while($row_profile = $query_profile->fetch_assoc()): ?>
                      <option value="<?php echo $row_profile['nip'] ?>" 
                    <?php if($row['id_profile'] ===  $row_profile['nip']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_profile['nama'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tim">Tim</label>
                    <select name="tim" id="tim" class="form-control">
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
                    <label for="kerajinan">Kerajinan</label>
        <input type="number" name="kerajinan" max="10" min="0" value="<?php echo $row['kerajinan'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="disiplin">Disiplin Kerja</label>
        <input type="number" name="disiplin" max="10" min="0" value="<?php echo $row['disiplin'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="etika">Etika Bekerja</label>
        <input type="number" name="etika" max="10" min="0" value="<?php echo $row['etika'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inisiatif">Inisiatif, Kreatif dan Inovatif</label>
        <input type="number" name="inisiatif" max="10" min="0" value="<?php echo $row['inisiatif'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="cerdas">Bekerja Secara Cerdas</label>
        <input type="number" name="cerdas" max="10" min="0" value="<?php echo $row['cerdas'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kualitas">Kualitas Hasil Kerja</label>
        <input type="number" name="kualitas" max="10" min="0" value="<?php echo $row['kualitas'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="penguasaan">Penguasaan Pekerjaan</label>
        <input type="number" name="penguasaan" max="10" min="0" value="<?php echo $row['penguasaan'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="komunikasi">Komunikasi</label>
        <input type="number" name="komunikasi" max="10" min="0" value="<?php echo $row['komunikasi'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kerjasama">Kerjasama dalam Teamwork</label>
        <input type="number" name="kerjasama" max="10" min="0" value="<?php echo $row['kerjasama'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kejujuran">Kerjujuran</label>
        <input type="number" name="kejujuran" max="10" min="0" value="<?php echo $row['kejujuran'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="nilai">Nilai</label>
        <input type="text" name="nilai" id="nilai" value="<?php echo $row['nilai'] ?>" class="form-control" readonly value="0">
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
<?php include('rekap_footer.php') ?>

