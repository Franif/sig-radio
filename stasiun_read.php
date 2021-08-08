<?php include('stasiun_read_header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabel Stasiun</h1>
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
          <a href="stasiun_create.php" class="btn btn-default">Tambah</a>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lokasi</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Kota</th>
                    <th>Kecamatan</th>
                    <th>Frekuensi</th>
                    <th>Service</th>
                    <th>Sub Service</th>
                    <th>Klien</th> 
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $query = $db->query("SELECT * FROM lokasi AS l
                    LEFT JOIN kecamatan AS kec ON l.id_kecamatan = kec.id
                    LEFT JOIN kota ON kec.id_kota = kota.id
                    LEFT JOIN klien ON l.id_klien = klien.id
                    LEFT JOIN ikon ON l.id_ikon_marker = ikon.id
                    LEFT JOIN servis ON l.id_servis = servis.id
                    LEFT JOIN subservis ON l.id_subservis = subservis.id
                  ");
                  $no = 1;
                  while ($row = $query->fetch_assoc()) {
                ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['nama_stasiun'] ?></td>
                    <td><?php echo $row['latitude'] ?></td>
                    <td><?php echo $row['longitude'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['telepon'] ?></td>
                    <td><?php echo $row['nama_kota'] ?></td>
                    <td><?php echo $row['nama_kecamatan'] ?></td>
                    <td><?php echo $row['frekuensi'] ?></td>
                    <td><?php echo $row['servis'] ?></td>
                    <td><?php echo $row['subservis'] ?></td>
                    <td><?php echo $row['nama_klien'] ?></td>
                    <td>
                      <a href="stasiun_update.php?id=<?php echo $row['id'] ?>" class="btn btn-default">Edit</a>
                      <a href="stasiun_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                <?php
                    $no++;
                  }  
                ?>
                </tbody>
              </table>
            </div>
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('stasiun_read_footer.php') ?>

