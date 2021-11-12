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
            <h1 class="m-0">Pengukuran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengukuran</a></li>
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
                <h3 class="card-title">Data Pengukuran</h3>
              <?php if($_SESSION['level'] == 1) : ?>
              <div class="card-tools">
                <a href="pengukuran_create.php" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambah</a>
              </div>
              <?php endif; ?>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Id Pengukuran</th>
                      <th>Tanggal</th>
                      <th>Nama Stasiun</th>
                      <th>Tim</th>
                      <th>Kanal</th>
                      <th>Frekuensi Terukur (MHz)</th>
                      <th>Pergeseran (MHz)</th>
                      <th>Level (dBm)</th>
                      <th>Bandwith (KHz)</th>
                      <th>Field Strength (dBuV/m)</th>
                      <th>Daya Terukur Tx (Watt)</th>
                      <th>Kedalaman Modulasi (%)</th>
                      <th>Deviasi Frekuensi (KHz)</th>
                      <th>ERP (dBi)</th>
                      <th>Frekuensi 1 (MHz)</th>
                      <th>Level 1 (dB)</th>
                      <th>Frekuensi 2 (MHz)</th>
                      <th>Level 2 (dB)</th>
                      <th>Frekuensi 3 MHz)</th>
                      <th>Level 3 (dB)</th>
                      <th>Status</th>
                    <?php if($_SESSION['level'] == 1) : ?>
                      <th>Aksi</th>
                    <?php endif; ?>
                    </tr>
                  </thead>
                  <tbody>
              <?php
                $query = $db->query("SELECT a.id, a.tanggal, b.nama_stasiun, t.tim, a.kanal, a.frekuensi_terukur, a.pergeseran, a.level, a.bandwith, a.field_strength, a.daya_terukur, a.kedalaman_modulasi, a.deviasi_frekuensi, a.erp, a.frekuensi1, a.level1, a.frekuensi2, a.level2, a.frekuensi3, a.level3, a.status FROM pengukuran AS a
                     LEFT JOIN lokasi AS b ON a.id_stasiun = b.id_stasiun
                     LEFT JOIN tim_baru AS t ON a.id_tim = t.id_tim
                          ");
                $no = 1;
                while ($row = $query->fetch_assoc()) {
              ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['tanggal'] ?></td>
                    <td><?php echo $row['nama_stasiun'] ?></td>
                    <td><?php echo $row['tim'] ?></td>
                    <td><?php echo $row['kanal'] ?></td>
                    <td><?php echo $row['frekuensi_terukur'] ?></td>
                    <td><?php echo $row['pergeseran'] ?></td>
                    <td><?php echo $row['level'] ?></td>
                    <td><?php echo $row['bandwith'] ?></td>
                    <td><?php echo $row['field_strength'] ?></td>
                    <td><?php echo $row['daya_terukur'] ?></td>
                    <td><?php echo $row['kedalaman_modulasi'] ?></td>
                    <td><?php echo $row['deviasi_frekuensi'] ?></td>
                    <td><?php echo $row['erp'] ?></td>
                    <td><?php echo $row['frekuensi1'] ?></td>
                    <td><?php echo $row['level1'] ?></td>
                    <td><?php echo $row['frekuensi2'] ?></td>
                    <td><?php echo $row['level2'] ?></td>
                    <td><?php echo $row['frekuensi3'] ?></td>
                    <td><?php echo $row['level3'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                  <?php if($_SESSION['level'] == 1) : ?>
                    <td>
                      <a href="pengukuran_update.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></a>
                      <a href="pengukuran_delete.php?id=<?php echo $row['id'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  <?php endif; ?>
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

