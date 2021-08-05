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
       
        <div class="container-fluid">
	  <a href="profile_create.php" class="btn btn-default">Tambah</a>
	  <div class="card-body">
	    <table class="table table-bordered">
	      <thead>
		<tr>
		  <th>No</th>
		  <th>NIP</th>
		  <th>Nama</th>
		  <th>Tanggal Lahir</th>
		  <th>Jenis Kelamin</th>
		  <th>Agama</th>
		  <th>Jenjang Pendidikan</th>
		  <th>Golongan</th>
		  <th>Jabatan</th>
		  <th>Alamat</th>
		  <th>Aksi</th>
		</tr>
	      </thead>
	      <tbody>
		<?php 
		  $query = $db->query("SELECT * FROM profile ");
		  $no = 1;
		  while ($row = $query->fetch_assoc()) {
		?>
		  <tr>
		    <td><?php echo $no ?></td>
		    <td><?php echo $row['nip'] ?></td>
		    <td><?php echo $row['nama'] ?></td>
		    <td><?php echo $row['tanggal_lahir'] ?></td>
		    <td><?php echo $row['jenis_kelamin'] ?></td>
		    <td><?php echo $row['agama'] ?></td>
		    <td><?php echo $row['jenjang_pendidikan'] ?></td>
		    <td><?php echo $row['golongan'] ?></td>
		    <td><?php echo $row['jabatan'] ?></td>
		    <td><?php echo $row['alamat'] ?></td>
		    <td>
		      <a href="profile_update.php?id=<?php echo $row['id'] ?>" class="btn btn-default">Edit</a>
		      <a href="profile_delete_save.php?id=<?php echo $row['id'] ?>" class="btn btn-default">Hapus</a>
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
<?php include('profile_read_footer.php') ?>

