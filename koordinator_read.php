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
            <h1 class="m-0">Koordinator</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item client">Koordinator</li>
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
                <h3 class="card-title">Data Koordinator</h3>
                <div class="card-tools">
                  <a href="koordinator_create.php" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama Koordinator</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $query = $db->query("SELECT * FROM koordinator
                      ");
                      $no = 1;
                      while ($row = $query->fetch_assoc()) {
                    ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $row['nip'] ?></td>
                      <td><?php echo $row['nama_koordinator'] ?></td>
                      <td>
                        <a href="koordinator_update.php?nip=<?php echo $row['nip'] ?>" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></a>
                        <a href="koordinator_delete.php?nip=<?php echo $row['nip'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
<?php include('footer.php') ?>

