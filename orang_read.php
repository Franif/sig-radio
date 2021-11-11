<?php include('header.php')?>
<?php include('rekap_header.php') ?>
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
    <a href="orang_create.php" class="btn btn-default">Tambah</a>
    <div class="card-body">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <form>
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Filter Peta</h3> -->
                <br>
                <table>
                	<tr>
                    <td>Dari Tanggal</td>
                    <td><input type="date" name="dari_tgl" required="required"></td>
                    <td>Sampai Tanggal</td>
                    <td><input type="date" name="sampai_tgl" required="required"></td>
                  </tr>
                </table>
              </div>
              <div class="card-footer">
                <button type="submit" name="filter" class="btn btn-primary" value="filter">Filter</button> 
              </div>
            </div>
            </form>
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
                    $dari_tgl = mysqli_real_escape_string($db, $_POST['dari_tgl']);
                    $sampai_tgl = mysqli_real_escape_string($db, $_POST['sampai_tgl']);
		  $query = $db->query("SELECT o.id, o.tanggal_penugasan, l.nama_stasiun, k.nama_koordinator, p.nama, t.tim, o.kerajinan, o.disiplin, o.etika, o.inisiatif, o.cerdas, o.kualitas, o.penguasaan, o.komunikasi, o.kerjasama, o.kejujuran, o.nilai, o.grade, o.ket  FROM orang AS o  
		  		LEFT JOIN lokasi AS l ON o.id_lokasi = l.id_stasiun
		  		LEFT JOIN koordinator AS k ON o.id_koordinator = k.nip
		  		LEFT JOIN profile AS p ON o.id_profile = p.nip
		  		LEFT JOIN tim_baru AS t ON o.id_tim = t.id_tim
		  		WHERE tanggal_penugasan BETWEEN '$dari_tgl' AND '$sampai_tgl'");
		}else{
		$query = $db->query("SELECT o.id, o.tanggal_penugasan, l.nama_stasiun, k.nama_koordinator, p.nama, t.tim, o.kerajinan, o.disiplin, o.etika, o.inisiatif, o.cerdas, o.kualitas, o.penguasaan, o.komunikasi, o.kerjasama, o.kejujuran, o.nilai, o.grade, o.ket  FROM orang AS o  
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
		      <a href="orang_update.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-block">Edit</a>
		      <a href="profile_delete.php?id=<?php echo $row['id'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Hapus</a>
		<?php
		  $no++;
		 } 
		?>
	      </tbody>
	    <!-- </table> -->
	  </div>
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('rekap_footer.php') ?>

