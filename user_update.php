<?php include('user_read_header.php') ?>
<?php
$query_nama= $db->query("SELECT * FROM profile");

$query_level_user = $db->query("SELECT * FROM level_user");


$query = $db->query("SELECT u.id_profile, p.nip, u.nama_karyawan, u.password, u.id_level_user, l.level_user FROM user_new AS u
        LEFT JOIN profile AS p ON u.id_profile = p.nip
        LEFT JOIN level_user AS l ON u.id_level_user = l.id
        WHERE u.id_profile = '".$_GET['nip']."'");
$no = 1;
$row = $query->fetch_assoc();
?>
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
                <li class="breadcrumb-item "><a href="user_read.php">User</a></li>
                <li class="breadcrumb-item">Edit User</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
     
      <!-- Main content -->
      <section class="content">
       
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah User<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form method="POST" action="user_update_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nip">Username</label>
                    <input type="text" name="nip" value="<?php echo $row['nip'] ?>" class="form-control" readonly value="">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Karyawan</label>
        <input type="text" name="nama" value="<?php echo $row['nama_karyawan'] ?>" class="form-control" disabled="disabled">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
        <input type="text" name="password" value="<?php echo $row['password'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
                    <select name="level" id="level" class="form-control">
                    <?php while($row_level_user = $query_level_user->fetch_assoc()): ?>
                      <option value="<?php echo $row_level_user['id'] ?>" 
                    <?php if($row['id_level_user'] ===  $row_level_user['id']) : ?> 
                      selected 
                    <?php endif; ?> >
                      <?php echo $row_level_user['level_user'] ?>
                      </option>
                    <?php endwhile; ?>
                    </select>
                  </div>              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('user_read_footer.php') ?>

