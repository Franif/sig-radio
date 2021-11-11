<?php include('koordinator_read_header.php') ?>
<?php 
  $query = $db->query("SELECT * FROM koordinator WHERE nip='".$_GET['nip']."'");
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
              <h1 class="m-0">Koordinator</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="koordinator_read.php">Koordinator</a></li>
                <li class="breadcrumb-item client">Edit Koordinator</li>
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
                <h3 class="card-title">Edit Koordinator<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        <form method="POST" action="koordinator_update_save.php">
                <div class="card-body">
                  <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>"  class="form-control" readonly value=""s>
                    <label for="nip">NIP</label>
        <input type="text" name="nip" value="<?php echo $row['nip'] ?>" class="form-control" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Koordinator</label>
        <input type="text" name="nama" value="<?php echo $row['nama_koordinator'] ?>" class="form-control">
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
<?php include('koordinator_read_footer.php') ?>

