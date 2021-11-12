<?php include('adminonly.php') ?>
<?php include('header.php') ?>
<?php include('left_sidebar.php') ?>
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
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item client">Data Karyawan</li>
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
                <h3 class="card-title">Data Karyawan</h3>
                <div class="card-tools">
                  <a href="profile_create.php" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Golongan</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                      </thead>
                      <tbody>
                  <?php
                    $query = $db->query("
                            SELECT p.nip, p.nama, p.tanggal_lahir, j.jenis_kelamin, a.agama, pen.jenjang_pendidikan, g.golongan, jab.jabatan, p.alamat FROM profile AS p
                            LEFT JOIN jenis_kelamin AS j ON p.id_jenis_kelamin = j.id
                            LEFT JOIN agama AS a ON p.id_agama = a.id
                            LEFT JOIN pendidikan AS pen ON p.id_pendidikan = pen.id
                            LEFT JOIN golongan AS g ON p.id_golongan = g.id
                            LEFT JOIN jabatan AS jab ON p.id_jabatan = jab.id
                      ");
                    $no = 1;
                    while ($row = $query->fetch_assoc()) {
                  ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $row['nip'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['tanggal_lahir'] ?></td>
                      <td><?php echo $row['jenis_kelamin'] ?></td>
                      <td><?php echo $row['agama'] ?></td>
                      <td><?php echo $row['jenjang_pendidikan'] ?></td>
                      <td><?php echo $row['golongan'] ?></td>
                      <td><?php echo $row['jabatan'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td>
                        <a href="profile_update.php?nip=<?php echo $row['nip'] ?>" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></a>
                        <a href="profile_delete.php?nip=<?php echo $row['nip'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
<?php include('footer.php') ?>
