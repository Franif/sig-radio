<?php include('profile_read_header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabel Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
      <!-- Main content -->
      <section class="content">
       
        <div div class="container-fluid">
          <div class="row">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <!-- <a href="profile_create.php" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Tambah</a></h3> -->
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                	<thead>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['id'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Penugasan</td>
			<td>:</td>
			<td><?php echo $_POST['tanggal_penugasan']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['nama_stasiun']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['nama_koordinator']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['nip']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['nama']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['nama_tim']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['kerajinan']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['disiplin']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['etika']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['inisiatif']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['cerdas']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['kualitas']?></td>
		</tr>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><?php echo $_POST['penguasaan']?></td>
		</tr>
		<tr>
			<td>Tanggal Penugasan</td>
			<td>:</td>
			<td><?php echo $_POST['komunikasi']?></td>
		</tr>
		<tr>
			<td>Tanggal Penugasan</td>
			<td>:</td>
			<td><?php echo $_POST['kerjasama']?></td>
		</tr>
		<tr>
			<td>Tanggal Penugasan</td>
			<td>:</td>
			<td><?php echo $_POST['kejujuran']?></td>
		</tr>

			<!-- <th>Tanggal Penugasan</th>
			<th>Stasiun</th>
			<th>Koordinator</th>>
			<th>NIP</th>
			<th>Nama Lengkap</th>
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
			<th>Aksi</th> -->
		</tr>
	      </thead>
	      <tbody>
		<!-- <?php 
		  $query = $db->query("SELECT o.id, o.tanggal_penugasan, l.nama_stasiun, k.nama, p.nip, o.nama, t.nama_tim, o.kerajinan, o.disiplin, o.etika, o.inisiatif, o.cerdas, o.kualitas, o.penguasaan, o.komunikasi, o.kerjasama, o.kejujuran  FROM orang AS o  
		  		LEFT JOIN lokasi AS l ON o.id_lokasi = l.id
		  		LEFT JOIN koordinator AS k ON o.id_koordinator = k.nip
		  		LEFT JOIN profile AS p ON o.id_profile = p.nip
		  		LEFT JOIN tim AS t ON o.id_tim = t.id
		  	");
		  $no = 1;
		  while ($row = $query->fetch_assoc()) {
		?> -->
		  <!-- <tr>
		    <td><?php echo $no ?></td>
		    <td><?php echo $row['id'] ?></td>
		    <td><?php echo $row['tanggal_penugasan'] ?></td>
		    <td><?php echo $row['nama_stasiun'] ?></td>
		    <td><?php echo $row['nama'] ?></td>
		    <td><?php echo $row['nip'] ?></td>
		    <td><?php echo $row['nama'] ?></td>
		    <td><?php echo $row['nama_tim'] ?></td>
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
		    <td>
		      <a href="profile_update.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-block">Edit</a>
		      <a href="profile_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Hapus</a> -->
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
<?php include('profile_read_footer.php') ?>

