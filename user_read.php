<?php include('user_read_header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
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
                <h3 class="card-title">
	  <a href="user_create.php" class="btn btn-block btn-primary"><i class="fas fa-plus"></i>Tambah</a>
	  </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
		<tr>
		  <th>No</th>
		  <th>Username</th>
		  <th>Nama Karyawan</th>
		  <th>Password</th>
		  <th>Level</th>
		  <th>Aksi</th>
		</tr>
	      </thead>
	      <tbody>
		<?php 
		  $query = $db->query("SELECT p.nip, u.nama_karyawan, u.password, l.level_user FROM user_new AS u
		  	LEFT JOIN profile AS p ON u.id_profile = p.nip
		  	LEFT JOIN level_user AS l ON u.id_level_user = l.id
		   ");
		  $no = 1;
		  while ($row = $query->fetch_assoc()) {
		?>
		  <tr>
		    <td><?php echo $no ?></td>
		    <td><?php echo $row['nip']?></td>
		    <td><?php echo $row['nama_karyawan'] ?></td>
		    <td><?php echo $row['password'] ?></td>
		    <td><?php echo $row['level_user'] ?></td>
		    <td>
		      <a href="user_update.php?nip=<?php echo $row['nip'] ?>" class="btn btn-secondary btn-block">Edit</a>
		      <a href="user_delete.php?nip=<?php echo $row['nip'] ?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Hapus</a>
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
<?php include('user_read_footer.php') ?>

