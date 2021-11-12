<?php include('loggedin.php') ?>
<?php include('header.php') ?>
<?php include('left_sidebar.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tim</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item client">Tim</li>
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
                  <h3 class="card-title">Data Tim</h3>
                  <div class="card-tools">
                    <a href="tim_create.php" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID Tim</th>
                        <th>Nama</th>
                        <th>Tanggal Penugasan</th>
                        <th>Tim</th>
                        <th>Nama Koordinator</th>
                        <th>Nama Stasiun</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $query = $db->query("SELECT t.id_tim, p.nama, t.tanggal_penugasan, t.tim, k.nama_koordinator, l.nama_stasiun FROM tim_baru AS t
                          LEFT JOIN profile AS p ON t.id_profile = p.nip
                          LEFT JOIN koordinator AS k ON t.id_koordinator = k.nip
                          LEFT JOIN lokasi AS l ON t.id_lokasi = l.id_stasiun
                         ");
                        $no = 1;
                        while ($row = $query->fetch_assoc()) {
                      ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $row['id_tim'] ?></td>
                          <td><?php echo $row['nama'] ?></td></td>
                          <td><?php echo $row['tanggal_penugasan'] ?></td></td>
                          <td><?php echo $row['tim'] ?></td>
                          <td><?php echo $row['nama_koordinator'] ?></td>
                          <td><?php echo $row['nama_stasiun'] ?></td>
                          <td>
                            <a href="tim_update.php?id_tim=<?php echo $row['id_tim'] ?>" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></a>
                            <a href="tim_delete.php?id_tim=<?php echo $row['id_tim'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
<?php include('footer.php') ?>
