<?php include('stasiun_read_header.php') ?>
<?php 
  $query = $db->query("SELECT * FROM pengukuran WHERE id='".$_GET['id']."'");
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
                <h3 class="card-title">Tambah Lokasi<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form method="POST" action="stasiun_update_save.php">
                <div class="card-body">
                  <div class="form-group">
		    <input type="hidden" name="id" value="<?php echo $row['id'] ?>"  class="form-control" >
                    <label for="tanggal">Tanggal</label>
        <input type="text" name="tanggal" value="<?php echo $row['tanggal'] ?>" class="form-control" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="id_stasiun">Nama Stasiun</label>
        <input type="text" name="id_stasiun" value="<?php echo $row['nama_stasiun'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kanal">Kanal</label>
        <input type="text" name="kanal" value="<?php echo $row['kanal'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="frekuensi_terukur">Frekuensi Terukur</label>
        <input type="text" name="frekuensi_terukur" value="<?php echo $row['frekuensi_terukur'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="pergeseran">Pergeseran</label>
        <input type="text" name="pergeseran" value="<?php echo $row['pergeseran'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
        <input type="text" name="level" value="<?php echo $row['level'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="bandwith">Bandwith</label>
        <input type="text" name="bandwith" value="<?php echo $row['bandwith'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="field_strength">Field Strength</label>
        <input type="text" name="field_strength" value="<?php echo $row['field_strength'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="daya_terukur">Daya Terukut Tx</label>
        <input type="text" name="daya_terukur" value="<?php echo $row['daya_terukur'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kedalaman_modulasi">Kedalaman Modulasi</label>
        <input type="text" name="kedalaman_modulasi" value="<?php echo $row['kedalaman_modulasi'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="deviasi_frekuensi">Deviasi Frekuensi</label>
        <input type="text" name="deviasi_frekuensi" value="<?php echo $row['deviasi_frekuensi'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="erp">ERP</label>
        <input type="text" name="erp" value="<?php echo $row['erp'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="frekuensi1">Frekuensi 1</label>
        <input type="text" name="frekuensi1" value="<?php echo $row['frekuensi1'] ?>"class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="level1">Level 1</label>
        <input type="text" name="level1" value="<?php echo $row['level1'] ?>"class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="frekuensi2">Frekuensi 2</label>
        <input type="text" name="frekuensi2" value="<?php echo $row['frekuensi2'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="level2">Level 2</label>
        <input type="text" name="level2" value="<?php echo $row['level2'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="frekuensi3">Frekuensi 3</label>
        <input type="text" name="frekuensi3" value="<?php echo $row['frekuensi3'] ?>"class="form-control">
                  </div>
                </div>
                <div class="form-group">
                    <label for="level3">Level 3</label>
        <input type="text" name="level3" value="<?php echo $row['level3'] ?>" class="form-control">
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
<?php include('stasiun_read_footer.php') ?>

