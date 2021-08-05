<?php include('profile_read_header.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Stasiun</h1>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pengukuran<h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
	      <form method="POST" action="profile_create_save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nip">NIP</label>
        <input type="text" name="nip" class="form-control" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="text" name="tanggal_lahir" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
        <input type="text" name="agama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
        <input type="text" name="jenjang_pendidikan" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="golongan">Golongan</label>
        <input type="text" name="golongan" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control">
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
<?php include('profile_read_footer.php') ?>

