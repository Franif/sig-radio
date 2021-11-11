<?php include('profile_read_header.php') ?>
<?php
$query_jenis_kelamin = $db->query("SELECT * FROM jenis_kelamin");

$query_agama = $db->query("SELECT * FROM agama");

$query_pendidikan = $db->query("SELECT * FROM pendidikan");
$query_golongan = $db->query("SELECT * FROM golongan");
$query_jabatan = $db->query("SELECT * FROM jabatan");

$query = $db->query("SELECT p.nip, p.nama, p.tanggal_lahir, p.id_jenis_kelamin, j.jenis_kelamin, p.id_agama, a.agama, p.id_pendidikan, pen.jenjang_pendidikan, p.id_golongan, g.golongan, p.id_jabatan, jab.jabatan, p.alamat FROM profile AS p
                      LEFT JOIN jenis_kelamin AS j ON p.id_jenis_kelamin = j.id
                      LEFT JOIN agama AS a ON p.id_agama = a.id
                      LEFT JOIN pendidikan AS pen ON p.id_pendidikan = pen.id
                      LEFT JOIN golongan AS g ON p.id_golongan = g.id
                      LEFT JOIN jabatan AS jab ON p.id_jabatan = jab.id
                      WHERE p.nip = '".$_GET['nip']."'");
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
                <li class="breadcrumb-item"><a href="profile_read.php">Data Karyawan</a></li>
                <li class="breadcrumb-item client">Edit Data Karyawan</li>
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
	      <form method="POST" action="profile_update_save.php">
                <div class="card-body">
                  <div class="form-group">
		    <!-- <input type="hidden" name="id" value="<?php echo $row['id'] ?>"  class="form-control" > -->
                    <label for="nip">NIP</label>
        <input type="text" name="nip" value="<?php echo $row['nip'] ?>" class="form-control" readonly value="">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?php echo $row['nama'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="tanggal_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $row['tanggal_lahir']; ?>" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <?php while($row_jenis_kelamin = $query_jenis_kelamin->fetch_assoc()): ?>
                      <option value="<?php echo $row_jenis_kelamin['id'] ?>" 
                    <?php if($row['id_jenis_kelamin'] ===  $row_jenis_kelamin['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_jenis_kelamin['jenis_kelamin'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name="agama" id="agama" class="form-control">
                    <?php while($row_agama = $query_agama->fetch_assoc()): ?>
                      <option value="<?php echo $row_agama['id'] ?>" 
                    <?php if($row['id_agama'] ===  $row_agama['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_agama['agama'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pendidikan">Jenjang Pendidikan</label>
                    <select name="pendidikan" id="pendidikan" class="form-control">
                    <?php while($row_pendidikan = $query_pendidikan->fetch_assoc()): ?>
                      <option value="<?php echo $row_pendidikan['id'] ?>" 
                    <?php if($row['id_pendidikan'] ===  $row_pendidikan['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_pendidikan['jenjang_pendidikan'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="golongan">Golongan</label>
                    <select name="golongan" id="golongan" class="form-control">
                    <?php while($row_golongan = $query_golongan->fetch_assoc()): ?>
                      <option value="<?php echo $row_golongan['id'] ?>" 
                    <?php if($row['id_golongan'] ===  $row_golongan['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_golongan['golongan'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select name="jabatan" id="jabatan" class="form-control">
                    <?php while($row_jabatan = $query_jabatan->fetch_assoc()): ?>
                      <option value="<?php echo $row_jabatan['id'] ?>" 
                    <?php if($row['id_jabatan'] ===  $row_jabatan['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_jabatan['jabatan'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
        <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control">
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
<?php include('profile_read_footer.php') ?>

