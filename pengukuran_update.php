<?php include('pengukuran_read_header.php') ?>
<?php 

$query_lokasi = $db->query("SELECT * FROM lokasi");
$query_tim = $db->query("SELECT * FROM tim_baru");

$query = $db->query("SELECT a.id, a.tanggal, a.id_stasiun, b.nama_stasiun, a.id_tim, t.tim, a.kanal, a.frekuensi_terukur, a.pergeseran, a.level, a.bandwith, a.field_strength, a.daya_terukur, a.kedalaman_modulasi, a.deviasi_frekuensi, a.erp, a.frekuensi1, a.level1, a.frekuensi2, a.level2, a.frekuensi3, a.level3, a.status FROM pengukuran AS a 
           LEFT JOIN lokasi AS b ON a.id_stasiun = b.id_stasiun
           LEFT JOIN tim_baru AS t ON a.id_tim = t.id_tim
                      WHERE a.id = '".$_GET['id']."'");
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
              <h1 class="m-0">Pengukuran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="pengukuran_read.php">Pengukuran</a></li>
                <li class="breadcrumb-item client">Edit Pengukuran</li>
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
                <h3 class="card-title">Edit Pengukuran<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form method="POST" action="stasiun_update_save.php">
                <div class="card-body">
                  <div class="form-group">
		    <label for="id">Id Pengukuran</label>
        <input type="text" name="id" value="<?php echo $row['id'] ?>" class="form-control" readonly value="">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_pengukuran">Tanggal Pengukuran</label>
                    <div class="input-group date" id="reservationdate">
                      <input type="text" name="tanggal_pengukuran" class="form-control datetimepicker-input" value="<?php echo $row['tanggal'] ?>" data-target="#reservationdate"/>
                       <!-- <div class="input-group date" id="reservationdate" data-target-input="nearest"> -->
                        <!-- <input type="text" name="tanggal_pengukuran" class="form-control datetimepicker-input" value="<?php echo $row['tanggal'] ?>" data-target="#reservationdate"/>
 -->                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_stasiun">Nama Stasiun</label>
                    <select name="nama_stasiun" id="nama_stasiun" class="form-control">
                    <?php while($row_lokasi = $query_lokasi->fetch_assoc()): ?>
                      <option value="<?php echo $row_lokasi['id_stasiun'] ?>" 
                    <?php if($row['id_stasiun'] ===  $row_lokasi['id_stasiun']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_lokasi['nama_stasiun'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tim">Tim</label>
                    <select name="tim" id="tim" class="form-control">
                    <?php while($row_tim = $query_tim->fetch_assoc()): ?>
                      <option value="<?php echo $row_tip['id_tim'] ?>" 
                    <?php if($row['id_tim'] ===  $row_tim['id_tim']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_tim['tim'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kanal">Kanal</label>
        <input type="text" name="kanal" value="<?php echo $row['kanal'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="frekuensi_terukur">Frekuensi Terukur</label>
                    <div class="input-group">
        <input type="text" name="frekuensi_terukur" value="<?php echo $row['frekuensi_terukur'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">MHz</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pergeseran">Pergeseran</label>
                     <div class="input-group">
        <input type="text" name="pergeseran" value="<?php echo $row['pergeseran'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">MHz</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
                     <div class="input-group">
        <input type="text" name="level" value="<?php echo $row['level'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">dBm</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bandwith">Bandwith</label>
                     <div class="input-group">
        <input type="text" name="bandwith" value="<?php echo $row['bandwith'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">KHz</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="field_strength">Field Strength</label>
                     <div class="input-group">
        <input type="text" name="field_strength" value="<?php echo $row['field_strength'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">dBuV/m</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="daya_terukur">Daya Terukut Tx</label>
                     <div class="input-group">
        <input type="text" name="daya_terukur" value="<?php echo $row['daya_terukur'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">Watt</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kedalaman_modulasi">Kedalaman Modulasi</label>
                     <div class="input-group">
        <input type="text" name="kedalaman_modulasi" value="<?php echo $row['kedalaman_modulasi'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">%</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="deviasi_frekuensi">Deviasi Frekuensi</label>
                     <div class="input-group">
        <input type="text" name="deviasi_frekuensi" value="<?php echo $row['deviasi_frekuensi'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">KHz</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="erp">ERP</label>
                     <div class="input-group">
        <input type="text" name="erp" value="<?php echo $row['erp'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">dBi</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="frekuensi1">Frekuensi 1</label>
                     <div class="input-group">
        <input type="text" name="frekuensi1" value="<?php echo $row['frekuensi1'] ?>"class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">MHz</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="level1">Level 1</label>
                     <div class="input-group">
        <input type="text" name="level1" value="<?php echo $row['level1'] ?>"class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">dB</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="frekuensi2">Frekuensi 2</label>
                     <div class="input-group">
        <input type="text" name="frekuensi2" value="<?php echo $row['frekuensi2'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">MHz</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="level2">Level 2</label>
                     <div class="input-group">
        <input type="text" name="level2" value="<?php echo $row['level2'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">dB</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="frekuensi3">Frekuensi 3</label>
                     <div class="input-group">
        <input type="text" name="frekuensi3" value="<?php echo $row['frekuensi3'] ?>"class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">MHz</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="level3">Level 3</label>
                     <div class="input-group">
        <input type="text" name="level3" value="<?php echo $row['level3'] ?>" class="form-control">
        <div class="input-group-append">
                        <span class="input-group-text">dB</span>
                      </div>
                    </div>
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
<?php include('pengukuran_read_footer.php') ?>

