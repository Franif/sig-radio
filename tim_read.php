<?php include('tim_read_header.php') ?>
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
              <li class="breadcrumb-item"><a href="#">Tim</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
      <!-- Main content -->
      <section class="content">
       
        <div class="container-fluid">
	  <div class="card-body">
	    <div class="row">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <a href="tim_create.php" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambah</a></h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
	      <thead>
		<tr>
		  <th>No</th>
		  <th>Id Tim</th>
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
		      <a href="tim_update.php?id_tim=<?php echo $row['id_tim'] ?>" class="btn btn-secondary btn-block">Edit</a>
		      <a href="tim_delete.php?id_tim=<?php echo $row['id_tim'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-block">Hapus</a>
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
<?php include('tim_read_footer.php') ?>

