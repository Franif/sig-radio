<?php include('stasiun_read_header.php') ?>
<?php
$query_kota = $db->query("SELECT * FROM kota");

$query_kecamatan = $db->query("SELECT kec.id, kec.nama_kecamatan, k.nama_kota FROM kecamatan AS kec
  LEFT JOIN kota AS k ON kec.id_kota = k.id
  WHERE kec.id_kota = '".$_GET['kota']."' ");

$query_servis = $db->query("SELECT * FROM servis");

$query_subservis = $db->query("SELECT * FROM subservis");
$query_klien = $db->query("SELECT * FROM klien AS kl ORDER BY kl.nama_klien ASC");
$query_ikon = $db->query("SELECT * FROM ikon");

$query = $db->query("SELECT l.id, l.nama_stasiun, l.latitude, l.longitude, l.alamat, l.telepon, l.id_kecamatan, kec.nama_kecamatan, kec.id_kota, k.nama_kota, l.frekuensi, l.id_servis, s.servis, l.id_subservis, sb.subservis, l.id_klien, kl.nama_klien, l.id_ikon_marker, i.path
  FROM lokasi AS l 
  LEFT JOIN kecamatan AS kec ON l.id_kecamatan = kec.id
  LEFT JOIN kota AS k ON kec.id_kota = k.id
  LEFT JOIN servis AS s ON l.id_servis = s.id
  LEFT JOIN subservis AS sb ON l.id_subservis = sb.id
  LEFT JOIN klien AS kl ON l.id_klien = kl.id
  LEFT JOIN ikon AS i ON l.id_ikon_marker = i.id
  WHERE l.id = '".$_GET['id']."' ");
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
                    <select name="kota" id="kota" class="form-control">
                    <?php while($row_kota = $query_kota->fetch_assoc()): ?>
                      <option value="<?php echo $row_kota['id'] ?>" 
                    <?php if($row['id_kota'] ===  $row_kota['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_kota['nama_kota'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="kec">Kecamatan</label>
                    <select name="kec" id="kec" class="form-control">
                    <?php while($row_kec = $query_kecamatan->fetch_assoc()): ?>
                      <option value="<?php echo $row_kec['id'] ?>"
                    <?php if($row['id_kecamatan'] === $row_kec['id'] ) : ?>
                      selected
                    <?php endif; ?> >
                      <?php echo $row_kec['nama_kecamatan'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="frekuensi">Frekuensi</label>
                    <div class="input-group">
                      <input type="text" name="frekuensi" value="<?php echo $row['frekuensi']?>" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text">MHz</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="servis">Servis</label>
                    <select name="servis" class="form-control">
                    <?php while($row_servis = $query_servis->fetch_assoc()): ?>
                      <option value="<?php echo $row_servis['id'] ?>" 
                    <?php if($row['id_servis'] ===  $row_servis['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_servis['servis'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="subservis">Sub Servis</label>
                    <select name="subservis" class="form-control">
                    <?php while($row_subservis = $query_subservis->fetch_assoc()): ?>
                      <option value="<?php echo $row_subservis['id'] ?>" 
                    <?php if($row['id_subservis'] ===  $row_subservis['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_subservis['subservis'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="klien">Nama Klien</label>
                    <select name="klien" class="form-control">
                    <?php while($row_klien = $query_klien->fetch_assoc()): ?>
                      <option value="<?php echo $row_klien['id'] ?>" 
                    <?php if($row['id_klien'] ===  $row_klien['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_klien['nama_klien'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="ikon">Path Ikon Peta</label>
                    <select name="ikon" class="form-control">
                    <?php while($row_ikon = $query_ikon->fetch_assoc()): ?>
                      <option value="<?php echo $row_ikon['id'] ?>" 
                    <?php if($row['id_ikon_marker'] ===  $row_ikon['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_ikon['path'] ?>
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
<?php include('stasiun_read_footer.php') ?>

