<?php include('loggedin.php')?>
<?php include('header.php')?>
<?php include('left_sidebar.php')?>
  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rekap Kerja Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="rekap_read.php">Rekap Kerja</a></li>
              <li class="breadcrumb-item">Rekap Kerja Karyawan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-md-12">
            <a href="kelompok_create.php" class="btn btn-success "><i class="fas fa-plus"></i> Tambah</a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Filter Tanggal</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Dari Tanggal</label>
                  <div class="col-sm-3 input-group date" id="tanggal" data-target-input="nearest" >
                    <input type="text" name="tanggal_dari" class="form-control datetimepicker-input" data-target="#tanggal" />
                      <div class="input-group-append" data-target="#tanggal" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Sampai Tanggal</label>
                  <div class="col-sm-3 input-group date" id="tanggal2" data-target-input="nearest">
                    <input type="text" name="tangal_sampai" class="form-control datetimepicker-input" data-target='#tanggal2'/>
                      <div class="input-group-append" data-target="#tanggal2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
                </div>
                <!-- card-body -->
              </div>
              <div class="card-footer">
                <button type="submit" name="filter" class="btn btn-primary" value="filter">Filter</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Id Rekap Karyawan</th>
                <th>Tanggal Penugasan</th>
                <th>Stasiun</th>
                <th>Koordinator</th>
                <th>Nama Karyawan</th>
                <th>Tim</th>
                <th>Kerajinan</th>
                <th>Disiplin Kerja</th>
                <th>Etika Bekerja</th>
                <th>Inisiatif, Kreatif dan Inofatif</th>
                <th>Bekerja Secara Cerdas</th>
                <th>Kualitas Hasil Kerja</th>
                <th>Penguasaan Pekerjaan</th>
                <th>Komunikasi</th>
                <th>Kerjasama Dalam Team Work</th>
                <th>Kejujuran</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
              <tbody>
                <?php
                $no = 1;
                 if(isset($_POST['filter'])){
                    $dari_tgl = mysqli_real_escape_string($db, $_POST['tanggal_dari']);
                    $sampai_tgl = mysqli_real_escape_string($db, $_POST['tanggal_sampai']);
                    $query = $db->query("
                      SELECT o.id,
                             o.tanggal_penugasan,
                             l.nama_stasiun,
                             k.nama_koordinator,
                             p.nama,
                             t.tim,
                             o.kerajinan,
                             o.disiplin,
                             o.etika,
                             o.inisiatif,
                             o.cerdas,
                             o.kualitas,
                             o.penguasaan,
                             o.komunikasi,
                             o.kerjasama,
                             o.kejujuran,
                             o.nilai,
                             o.grade,
                             o.ket
                      FROM orang AS o
                      LEFT JOIN lokasi AS l ON o.id_lokasi = l.id_stasiun
                      LEFT JOIN koordinator AS k ON o.id_koordinator = k.nip
                      LEFT JOIN profile AS p ON o.id_profile = p.nip
                      LEFT JOIN tim_baru AS t ON o.id_tim = t.id_tim
                      WHERE tanggal_penugasan BETWEEN '$dari_tgl' AND '$sampai_tgl'
                    ");
                }else{
                  $query = $db->query("
                    SELECT o.id,
                           o.tanggal_penugasan,
                           l.nama_stasiun,
                           k.nama_koordinator,
                           p.nama,
                           t.tim,
                           o.kerajinan,
                           o.disiplin,
                           o.etika,
                           o.inisiatif,
                           o.cerdas,
                           o.kualitas,
                           o.penguasaan,
                           o.komunikasi,
                           o.kerjasama,
                           o.kejujuran,
                           o.nilai,
                           o.grade,
                           o.ket
                    FROM orang AS o
                    LEFT JOIN lokasi AS l ON o.id_lokasi = l.id_stasiun
                    LEFT JOIN koordinator AS k ON o.id_koordinator = k.nip
                    LEFT JOIN profile AS p ON o.id_profile = p.nip
                    LEFT JOIN tim_baru AS t ON o.id_tim = t.id_tim
                  ");
                }
                  while ($row = $query->fetch_assoc()) {
                ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['tanggal_penugasan'] ?></td>
                    <td><?php echo $row['nama_stasiun'] ?></td>
                    <td><?php echo $row['nama_koordinator'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['tim'] ?></td>
                    <td><?php echo $row['kerajinan'] ?></td>
                    <td><?php echo $row['disiplin'] ?></td>
                    <td><?php echo $row['etika'] ?></td>
                    <td><?php echo $row['inisiatif'] ?></td>
                    <td><?php echo $row['cerdas'] ?></td>
                    <td><?php echo $row['kualitas'] ?></td>
                    <td><?php echo $row['penguasaan'] ?></td>
                    <td><?php echo $row['komunikasi'] ?></td>
                    <td><?php echo $row['kerjasama'] ?></td>
                    <td><?php echo $row['kejujuran'] ?></td>
                    <td><?php echo $row['nilai'] ?></td>
                    <td><?php echo $row['grade'] ?></td>
                    <td><?php echo $row['ket'] ?></td>
                    <td>
                      <a href="orang_update.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
                      <a href="profile_delete.php?id=<?php echo $row['id'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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

