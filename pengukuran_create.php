<?php include('pengukuran_read_header.php') ?>
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
                <li class="breadcrumb-item active">Pengukuran</li>
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
                <h3 class="card-title">Tambah Data Pengukuran<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form method="POST" action="pengukuran_create_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
        <input type="text" name="tanggal" class="form-control" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="id_stasiun">Nama Stasiun</label>
        <input type="text" name="id_stasiun" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kanal">Kanal</label>
        <input type="text" name="kanal" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="frekuensi_terukur">Frekuensi Terukur</label>
        <input type="text" name="frekuensi_terukur" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="pergeseran">Pergeseran</label>
        <input type="text" name="pergeseran" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
        <input type="text" name="level" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="bandwith">Bandwith</label>
        <input type="text" name="bandwith" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="field_strength">Field Strength</label>
        <input type="text" name="field_strength" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="daya_terukur">Daya Terukut Tx</label>
        <input type="text" name="daya_terukur" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kedalaman_modulasi">Kedalaman Modulasi</label>
        <input type="text" name="kedalaman_modulasi" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="deviasi_frekuensi">Deviasi Frekuensi</label>
        <input type="text" name="deviasi_frekuensi" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="erp">ERP</label>
        <input type="text" name="erp" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="frekuensi1">Frekuensi 1</label>
        <input type="text" name="frekuensi1" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="level1">Level 1</label>
        <input type="text" name="level1" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="frekuensi2">Frekuensi 2</label>
        <input type="text" name="frekuensi2" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="level2">Level 2</label>
        <input type="text" name="level2" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="frekuensi3">Frekuensi 3</label>
        <input type="text" name="frekuensi3" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                    <label for="level3">Level 3</label>
        <input type="text" name="level3" class="form-control">
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

