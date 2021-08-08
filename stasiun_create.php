<?php include('stasiun_read_header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Stasiun</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Stasiun</li>
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
                <h3 class="card-title">Tambah Stasiun<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="stasiun_create_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_stasiun">Nama Stasiun</label>
                    <input type="text" name="nama_stasiun" class="form-control" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="latitude">Latitude</label>
                    <input type="text" name="latitude" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="longitude">Longitude</label>
                    <input type="text" name="longitude" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" name="telepon" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kota">Kota</label>
                    <select name ="kota" id="kota" class="form-control" >
                      <option value="" hidden selected>---Pilih Kota/Kabupaten ---</option>
                    <?php $query_kota = $db->query("SELECT * FROM kota"); ?>
                    <?php while($row_kota = $query_kota->fetch_assoc()): ?>
                      <option value="<?php echo $row_kota['id']; ?>" ><?php echo $row_kota['nama_kota']; ?></option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <select name ="kecamatan" id="kec" class="form-control">
                      <option value="" hidden selected>---Pilih Kecamatan---</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="frekuensi">Frekuensi</label>
                    <input type="text" name="frekuensi" class="form-control">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              <!-- /.form -->
            </div>
            <!-- /.card -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('stasiun_read_footer.php') ?>
