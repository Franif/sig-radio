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
              <li class="breadcrumb-item"><a href="index.php">Stasiun</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">

        <div class="container-fluid">
          <div class="row">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <a href="stasiun_create.php" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambah</a></h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id Stasiun</th>
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
                    $query = $db->query("SELECT l.id_stasiun, l.nama_stasiun, l.latitude, l.longitude, l.alamat, l.telepon, kec.id_kota, k.nama_kota, kec.nama_kecamatan, l.frekuensi, s.servis, sb.subservis, kl.nama_klien FROM lokasi AS l
                      LEFT JOIN kecamatan AS kec ON l.id_kecamatan = kec.id
                      LEFT JOIN kota AS k ON kec.id_kota = k.id
                      LEFT JOIN klien_baru AS kl ON l.id_klien = kl.id_klien
                      LEFT JOIN ikon AS i ON l.id_ikon_marker = i.id
                      LEFT JOIN servis AS s ON l.id_servis = s.id
                      LEFT JOIN subservis AS sb ON l.id_subservis = sb.id
                    ");
                    $no = 1;
                    while ($row = $query->fetch_assoc()) {
                  ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $row['id_stasiun'] ?></td>
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
                      <a href="stasiun_update.php?id_stasiun=<?php echo $row['id_stasiun'] ?>&&kota=<?php echo $row['id_kota']?>" class="btn btn-secondary btn-block">Edit</a>
                      <a href="stasiun_delete.php?id_stasiun=<?php echo $row['id_stasiun'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('stasiun_read_footer.php') ?>

