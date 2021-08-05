<?php include('pengukuran_read_header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabel Data Pengukuran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          
              <li class="breadcrumb-item active">Pengukuran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
      <!-- Main content -->
      <section class="content">
       
        <div class="container-fluid">
	  <a href="pengukuran_create.php" class="btn btn-default">Tambah</a>
	  <div class="card-body">
	    <table class="table table-bordered">
	      <thead>
		<tr>
		  <th>No</th>
		  <th>Tanggal</th>
		  <th>Nama Stasiun</th>
		  <th>Kanal</th>
		  <th>Frekuensi Terukur</th>
		  <th>Pergeseran</th>
		  <th>Level</th>
		  <th>Bandwith</th>
		  <th>Field Strength</th>
		  <th>Daya Terukur Tx</th>
		  <th>Kedalaman Modulasi</th>
		  <th>Deviasi Frekuensi</th>
		  <th>ERP</th>
		  <th>Frekuensi 1</th>
		  <th>Level 1</th>
		  <th>Frekuensi 2</th>
		  <th>Level 2</th>
		  <th>Frekuensi 3</th>
		  <th>Level 3</th>
		  <th>Aksi</th>
		</tr>
	      </thead>
	      <tbody>
		<?php 
		  $query = $db->query("SELECT a.id, a.tanggal, b.nama_stasiun, a.kanal, a.frekuensi_terukur, a.pergeseran, a.level, a.bandwith, a.field_strength, a.daya_terukur, a.kedalaman_modulasi, a.deviasi_frekuensi, a.erp, a.frekuensi1, a.level1, a.frekuensi2, a.level2, a.frekuensi3, a.level3 FROM `pengukuran` AS a JOIN lokasi AS b ON a.id_stasiun = b.id");
		  $no = 1;
		  while ($row = $query->fetch_assoc()) {
		?>
		  <tr>
		    <td><?php echo $no ?></td>
		    <td><?php echo $row['tanggal'] ?></td>
		    <td><?php echo $row['nama_stasiun'] ?></td>
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
		    <td>
		      <a href="pengukuran_update.php?id=<?php echo $row['id'] ?>" class="btn btn-default">Edit</a>
		      <a href="pengukuran_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-default">Hapus</a>
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
<?php include('pengukuran_read_footer.php') ?>

