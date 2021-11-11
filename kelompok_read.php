<?php include('rekap_header.php')?>
<?php include('config.php')?>
<?php
//   $query_i = $db->query("SELECT l.id, l.nama_stasiun, l.alamat, l.telepon FROM lokasi AS l");

// if(isset($_GET['kota']) && isset($_GET['kec']) && isset($_GET['subservis'])  && isset($_GET['stasiun'])){
//     $query_m = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path 
//       FROM lokasi AS l
//       JOIN ikon ON l.id_ikon_marker = ikon.id
//       JOIN kecamatan ON l.id_kecamatan = kecamatan.id
//       JOIN kota ON kecamatan.id_kota = kota.id
//       JOIN subservis ON l.id_subservis = subservis.id
//       WHERE kota.id = ".$_GET['kota']." AND kecamatan.id = ".$_GET['kec']." AND subservis.id = ".$_GET['subservis']." and l.id = ".$_GET['stasiun']." 
//         ");
//   }elseif(isset($_GET['kota']) && isset($_GET['kec']) && isset($_GET['subservis'])){
//     $query_m = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path 
//       FROM lokasi AS l
//       JOIN ikon ON l.id_ikon_marker = ikon.id
//       JOIN kecamatan ON l.id_kecamatan = kecamatan.id
//       JOIN kota ON kecamatan.id_kota = kota.id
//       JOIN subservis ON l.id_subservis = subservis.id
//       WHERE kota.id = ".$_GET['kota']." AND kecamatan.id = ".$_GET['kec']." AND subservis.id = ".$_GET['subservis']." ");
//   }elseif(isset($_GET['kota'])){
//     $query_m = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path 
//       FROM lokasi AS l
//       JOIN ikon ON l.id_ikon_marker = ikon.id
//       JOIN kecamatan ON l.id_kecamatan = kecamatan.id
//       JOIN kota ON kecamatan.id_kota = kota.id
//       WHERE kota.id = ".$_GET['kota']."");
//   }elseif(isset($_GET['subservis'])){
//     $query_m = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path 
//       FROM lokasi AS l
//       JOIN ikon ON l.id_ikon_marker = ikon.id
//       JOIN subservis ON l.id_subservis = subservis.id
//       WHERE subservis.id = ".$_GET['subservis']."");
//   }elseif(isset($_GET['stasiun'])){
//     $query_m = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path 
//       FROM lokasi AS l
//       JOIN ikon ON l.id_ikon_marker = ikon.id
//       WHERE l.id = ".$_GET['stasiun']."");
//   }else{  
//     $query_m = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path 
//       FROM lokasi AS l
//       JOIN ikon ON l.id_ikon_marker = ikon.id");
//   }
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
    <a href="kelompok_create.php" class="btn btn-default">Tambah</a>
    <div class="card-body">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <form>
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Filter Peta</h3> -->
                <br>
                <div class="form-group">
                  <label>Date range:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- <table>
                  <tr>
                    <td>Dari Tanggal</td>
                    <td><input type="date" name="dari_tgl" required="required"></td>
                    <td>Sampai Tanggal</td>
                    <td><input type="date" name="sampai_tgl" required="required"></td>
                  </tr>
                </table> -->
              </div>
              <!-- <div class="card-footer">
                <button type="submit" name="filter" class="btn btn-primary" value="filter">Filter</button> 
              </div> -->
            </div>
            </form>
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
                  <?php
                  $no = 1;
                  if(isset($_POST['filter'])){
                    $dari_tgl = mysqli_real_escape_string($db, $_POST['dari_tgl']);
                    $sampai_tgl = mysqli_real_escape_string($db, $_POST['sampai_tgl']);
                    $query = $db->query("SELECT o.id, o.nama_penilai, o.tanggal_penugasan, t.tim, l.nama_koordinator, o.ketepatan, o.inisiatif, o.penerimaan, o.atur, o.kemampuan, o.disiplin, o.kualitas, o.tanggung_jawab, o.nilai, o.grade, o.keterangan FROM kelompok AS o
                      LEFT JOIN tim_baru AS t ON o.id_tim = t.id_tim
                      LEFT JOIN Koordinator AS l ON o.id_koordinator = l.nip
                      WHERE tanggal_penugasan BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                  }else{
                    $query = $db->query("SELECT o.id, o.nama_penilai, o.tanggal_penugasan, t.tim, l.nama_koordinator, o.ketepatan, o.inisiatif, o.penerimaan, o.atur, o.kemampuan, o.disiplin, o.kualitas, o.tanggung_jawab, o.nilai, o.grade, o.keterangan FROM kelompok AS o
                      LEFT JOIN tim_baru AS t ON o.id_tim = t.id_tim
                      LEFT JOIN Koordinator AS l ON o.id_koordinator = l.nip
                      ");
                  }
                    while ($row = $query->fetch_assoc()) {
                  ?>
                    <tr>
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
                      <a href="kelompok_update.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-block">Edit</a>
                      <a href="koordinator_delete.php?nip=<?php echo $row['nip'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
        <!-- <div class="row"> -->
          <!-- Left col -->
          <!-- <div class="col-md-8"> -->
            <!-- MAP & BOX PANE -->
            <!-- <div class="card"> -->
              <!-- <div class="card-header"> -->
                <!-- <h3 class="card-title">Peta Radio</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0"> -->
                <!-- <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    !-- Map will be created here -->
                    <!-- div id="world-map-markers" style="height: 500px; overflow: hidden">
                      <div id="googleMap" style="width:100%;height:500px;color:#000000"></div>
                    </div>
                  </div>
                </div>
              </div> --><!--  -->
            <!-- </div>
          </div>
          <div class="col-md-4"> -->
              <!-- Info Boxes Style 2 -->
<!--               <div class="info-box mb-3 bg-info">
                <span class="info-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Marker</span>
                  <span class="info-box-number">
                    <?php echo $query_m->num_rows ?>
                  </span>
                </div>
                <!-/- /.info-box-content -->
              <!-- </div> -->
              <!-- /.info-box -->
        <!-- </div> --> 

      </div>
    <section>

  </div>
<?php include('rekap_footer.php') ?>
