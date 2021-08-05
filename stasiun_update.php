<?php include('stasiun_read_header.php') ?>
<?php 
$query_kota = $db->query("SELECT * FROM kota");
$kota = [];
while ($rowkota = $query_kota->fetch_assoc()) {
  $kota[$rowkota['id']] = $rowkota['nama_kota'];
}

$query_kecamatan = $db->query("SELECT * FROM kecamatan");
$kecamatan = [];
while ($rowkecamatan = $query_kecamatan->fetch_assoc()) {
  $kecamatan[$rowkecamatan['id']] = $rowkecamatan['nama_kecamatan'];
}

$query_servis = $db->query("SELECT * FROM servis");
$servis = [];
while ($rowservis = $query_servis->fetch_assoc()) {
  $servis[$rowservis['id']] = $rowservis['servis'];
}

$query_subservis = $db->query("SELECT * FROM subservis");
$subservis = [];
while ($rowsubservis = $query_subservis->fetch_assoc()) {
  $subservis[$rowsubservis['id']] = $rowsubservis['subservis'];
}

  $query = $db->query("SELECT * FROM lokasi_baru WHERE id = '".$_GET['id']."' ");
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
		    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="form-control" >
                    <label for="nama_stasiun">Nama Stasiun</label>
		    <input type="text" name="nama_stasiun" value="<?php echo $row['nama_stasiun'] ?>" class="form-control" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="latitude">Latitude</label>
		    <input type="text" name="latitude" value="<?php echo $row['latitude'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="longitude">Longitude</label>
		    <input type="text" name="longitude" value="<?php echo $row['longitude'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
		    <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="telepon">Telepon</label>
		    <input type="text" name="telepon" value="<?php echo $row['telepon'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="kota">Kota</label>
                    <select name="id_kota" class="form-control">
                        <?php foreach($kota as $key=>$value) {   ?>
                          <option value="<?php echo $key; ?>"><?php echo $value ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <select name="id_kecamatan" class="form-control">
                        <?php foreach($kecamatan as $key=>$value) {   ?>
                          <option value="<?php echo $key; ?>"><?php echo $value ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="frekuensi">Frekuensi</label>
		    <input type="text" name="frekuensi" value="<?php echo $row['frekuensi'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="servis">Servis</label>
                    <select name="id_servis" class="form-control">
                        <?php foreach($servis as $key=>$value) {   ?>
                          <option value="<?php echo $key; ?>"><?php echo $value ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="subservis">Sub Servis</label>
                    <select name="id_subservis" class="form-control">
                        <?php foreach($subservis as $key=>$value) {   ?>
                          <option value="<?php echo $key; ?>"><?php echo $value ?></option>
                        <?php } ?>
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
<?php include('stasiun_read_footer.php') ?>

