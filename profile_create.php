<?php include('profile_read_header.php') ?>
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
                <li class="breadcrumb-item client">Tambah Data Karyawan</li>
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
                <h3 class="card-title">Tambah Data Karyawan<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form id="form" method="POST" action="profile_create_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nip">NIP</label>
        <input type="text" id="nip" name="nip" class="form-control" autofocus>
        
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="tanggal_lahir" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name ="jenis_kelamin" id="jenis_kelamin" class="form-control" >
                      <option value="" hidden selected>---Pilih Jenis Kelamin ---</option>
                    <?php $query_jenis_kelamin = $db->query("SELECT * FROM jenis_kelamin"); ?>
                    <?php while($row_jenis_kelamin = $query_jenis_kelamin->fetch_assoc()): ?>
                      <option value="<?php echo $row_jenis_kelamin['id']; ?>" ><?php echo $row_jenis_kelamin['jenis_kelamin']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name ="agama" id="agama" class="form-control" >
                      <option value="" hidden selected>---Pilih Agama ---</option>
                    <?php $query_a = $db->query("SELECT * FROM agama"); ?>
                    <?php while($row_a = $query_a->fetch_assoc()): ?>
                      <option value="<?php echo $row_a['id']; ?>" ><?php echo $row_a['agama']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
                    <select name ="jenjang_pendidikan" id="jenjang_pendidikan" class="form-control" >
                      <option value="" hidden selected>---Pilih Jenjang Pendidikan ---</option>
                    <?php $query_p = $db->query("SELECT * FROM pendidikan"); ?>
                    <?php while($row_p = $query_p->fetch_assoc()): ?>
                      <option value="<?php echo $row_p['id']; ?>" ><?php echo $row_p['jenjang_pendidikan']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="golongan">Golongan</label>
                    <select name ="golongan" id="golongan" class="form-control" >
                      <option value="" hidden selected>---Pilih Golongan ---</option>
                    <?php $query_g = $db->query("SELECT * FROM golongan"); ?>
                    <?php while($row_g = $query_g->fetch_assoc()): ?>
                      <option value="<?php echo $row_g['id']; ?>" ><?php echo $row_g['golongan']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select name ="jabatan" id="jabatan" class="form-control" >
                      <option value="" hidden selected>---Pilih Jabatan ---</option>
                    <?php $query_j = $db->query("SELECT * FROM jabatan"); ?>
                    <?php while($row_j = $query_j->fetch_assoc()): ?>
                      <option value="<?php echo $row_j['id']; ?>" ><?php echo $row_j['jabatan']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control">
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

