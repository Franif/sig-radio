<?php include('klien_read_header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Client</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="klien_read.php ?>">Client</a></li>
                <li class="breadcrumb-item client">Tambah Client</li>                
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
                <h3 class="card-title">Tambah Client<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form method="POST" action="klien_create_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_klien">Id Client</label>
        <input type="text" name="id_klien" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="nama_klien">Nama Client</label>
        <input type="text" name="nama_klien" class="form-control">
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
<?php include('klien_read_footer.php') ?>

