<?php include('loggedin.php')?>
<?php include('header.php')?>
<?php include('left_sidebar.php')?>
<?php
  $no = 1;

  /* if(isset($_GET['tanggal_dari'] && isset($_GET['tanggal_sampai']) )){ */
  /*   $query = $db->query(" */
  /*     SELECT o.id, o.nama_penilai, o.tanggal_penugasan, t.tim, l.nama_koordinator, o.ketepatan, o.inisiatif, o.penerimaan, o.atur, o.kemampuan, o.disiplin, o.kualitas, o.tanggung_jawab, o.nilai, o.grade, o.keterangan */
  /*     FROM kelompok AS o */
  /*     LEFT JOIN tim_baru AS t ON o.id_tim = t.id_tim */
  /*     LEFT JOIN Koordinator AS l ON o.id_koordinator = l.nip */
  /*     WHERE tanggal_penugasan BETWEEN ".$_GET['tanggal_dari']." AND "$_GET['tanggal_sampai']" */
  /*   "); */
  /* }else{ */
    $query = $db->query("
      SELECT o.id, o.nama_penilai, o.tanggal_penugasan, t.tim, l.nama_koordinator, o.ketepatan, o.inisiatif, o.penerimaan, o.atur, o.kemampuan, o.disiplin, o.kualitas, o.tanggung_jawab, o.nilai, o.grade, o.keterangan
      FROM kelompok AS o
      LEFT JOIN tim_baru AS t ON o.id_tim = t.id_tim
      LEFT JOIN Koordinator AS l ON o.id_koordinator = l.nip
      ");
  /* } */
?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rekap Kerja Tim</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="rekap_read.php">Rekap Kerja</a></li>
                <li class="breadcrumb-item client">Rekap Kerja Tim</li>
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
                <th>Id Rekap Tim</th>
                <th>Nama Penilai</th>
                <th>Tanggal Penugasan</th>
                <th>Tim</th>
                <th>Koordinator</th>
                <th>Ketepatan Waktu dalam Menyelesaikan Pekerjaan</th>
                <th>Inisiatif</th>
                <th>Penerimaan dalam Tugas Tambahan</th>
                <th>Kemampuan Mengatur Pekerjaan dan Sistem Kerja</th>
                <th>Kemampuan Kerjasama Tim dalam Menyelesaikan Masalah</th>
                <th>Disiplin</th>
                <th>Kualitas Tim</th>
                <th>Tanggung Jawab</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php while ($row = $query->fetch_assoc()) : ?>
                <td><?php echo $no ?></td>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['nama_penilai'] ?></td>
                <td><?php echo $row['tanggal_penugasan'] ?></td>
                <td><?php echo $row['tim'] ?></td>
                <td><?php echo $row['nama_koordinator'] ?></td>
                <td><?php echo $row['ketepatan'] ?></td>
                <td><?php echo $row['inisiatif'] ?></td>
                <td><?php echo $row['penerimaan'] ?></td>
                <td><?php echo $row['atur'] ?></td>
                <td><?php echo $row['kemampuan'] ?></td>
                <td><?php echo $row['disiplin'] ?></td>
                <td><?php echo $row['kualitas'] ?></td>
                <td><?php echo $row['tanggung_jawab'] ?></td>
                <td><?php echo $row['nilai'] ?></td>
                <td><?php echo $row['grade'] ?></td>
                <td><?php echo $row['keterangan'] ?></td>
                <td>
                <a href="kelompok_update.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></a>
                <a href="koordinator_delete.php?nip=<?php echo $row['id'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
              <?php endwhile; ?>
              </tr>
            <?php
                /* $no++; */
              /* } */
            ?>
            </tbody>
          </table>
        </div>
      </div>
    <section>
  </div>
<?php include('footer.php') ?>
