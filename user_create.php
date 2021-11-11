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
                <li class="breadcrumb-item "><a href="user_read.php">User</a></li>
                <li class="breadcrumb-item">Tambah User</li>
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
	      <form method="POST" action="user_create_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nip">Username</label>
        <!-- <input type="text" id="nip" name="nip" class="form-control"> -->
        
                    <?php   
                          $config = mysqli_connect("localhost","root","marblegrumble","fs_broadcast_stations");  
                      ?>
                    <td><select name="nip" id="nip" class="form-control" onchange='changeValue(this.value)' required >
                    <option value="" disabled selected hidden>---Pilih Username---</option>  
                          <?php   
                          $query = mysqli_query($config, "select nip, nama from profile order by nip ");  
                          $result = mysqli_query($config, "select nip, nama from profile");  
                          $a          = "var nama = new Array();\n;";    
                          while ($row = mysqli_fetch_array($result)) {  
                               echo '<option name="nip" value="'.$row['nip'] . '">' . $row['nip'] . '</option>';   
                          $a .= "nama['" . $row['nip'] . "'] = {nama:'" . addslashes($row['nama'])."'};\n";  
                          }  
                          ?>  
                     </select></td>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama _karyawan</label>
        <input value="" id="nama" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
        <input type="text" name="password" class="form-control" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
                    <select name ="level" id="level" class="form-control" >
                      <option value="" hidden selected>---Pilih Level ---</option>
                    <?php $query_level = $db->query("SELECT * FROM level_user"); ?>
                    <?php while($row_level = $query_level->fetch_assoc()): ?>
                      <option value="<?php echo $row_level['id']; ?>" ><?php echo $row_level['level_user']; ?></option>
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
      <script src="plugins/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>

    <script type="text/javascript">   
    <?php   
    echo $a; ?>  
    function changeValue(nip){  
    document.getElementById('nama').value = nama[nip].nama;  
                   
    };  
    </script> 
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('user_read_footer.php') ?>

