<?php include('header-json.php') ?>
  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <form>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Filter Peta</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body p-3">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill row" style="">
                    <div class="form-group col-md-3 col-sm-6 col-12">
                      <label>Kota</label>
                      <select name="kota" class="form-control"> 
                        <option value="" disabled selected hidden>---Pilih Kota/Kabupaten---</option>
                      <?php $query_s = $db->query("SELECT * FROM kota"); ?>
                      <?php if($query_s->num_rows > 0): ?>
                      <?php   while($row = $query_s->fetch_assoc()): ?>
                        <option value="<?php echo $row['id'] ?>" ><?php echo $row['nama_kota'] ?></option>
                      <?php   endwhile; ?>
                      <?php endif; ?>
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 col-12">
                      <label>Kota</label>
                      <select name="" class="form-control">
                        <option value="" disabled selected hidden></option>
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 col-12">
                      <label>Kota</label>
                      <select name="" class="form-control">
                        <option value="" disabled selected hidden></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Filter</button> 
              </div>
            </div>
            </form>
          </div>
        </div>
        
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Peta Radio</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 500px; overflow: hidden">
                      <div id="googleMap" style="width:100%;height:500px;color:#000000"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    <section>

  </div>
<?php include('footer-json.php') ?>
