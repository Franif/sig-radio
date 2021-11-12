<?php include('loggedin.php') ?>
<?php include('header.php') ?>
<?php include('left_sidebar.php') ?>
<?php
if(isset($_GET['kota']) && isset($_GET['kec']) && isset($_GET['subservis'])){
    $query_m = $db->query("
      SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path
      FROM lokasi AS l
      JOIN ikon ON l.id_ikon_marker = ikon.id
      JOIN kecamatan ON l.id_kecamatan = kecamatan.id
      JOIN kota ON kecamatan.id_kota = kota.id
      JOIN subservis ON l.id_subservis = subservis.id
      WHERE kota.id = ".$_GET['kota']." AND kecamatan.id = ".$_GET['kec']." AND subservis.id = ".$_GET['subservis']."
      ");

    $query_i = $db->query("
      SELECT l.nama_stasiun, l.alamat, l.telepon
      FROM lokasi AS l
      JOIN kecamatan ON l.id_kecamatan = kecamatan.id
      JOIN kota ON kecamatan.id_kota = kota.id
      JOIN subservis ON l.id_subservis = subservis.id
      WHERE kota.id = ".$_GET['kota']." AND kecamatan.id = ".$_GET['kec']." AND subservis.id = ".$_GET['subservis']."
      ");
  }elseif(isset($_GET['kota'])){
    $query_m = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path
      FROM lokasi AS l
      JOIN ikon ON l.id_ikon_marker = ikon.id
      JOIN kecamatan ON l.id_kecamatan = kecamatan.id
      JOIN kota ON kecamatan.id_kota = kota.id
      WHERE kota.id = ".$_GET['kota']."");

    $query_i = $db->query("
      SELECT l.nama_stasiun, l.alamat, l.telepon
      FROM lokasi AS l
      JOIN kecamatan ON l.id_kecamatan = kecamatan.id
      JOIN kota ON kecamatan.id_kota = kota.id
      JOIN subservis ON l.id_subservis = subservis.id
      WHERE kota.id = ".$_GET['kota']."
      ");
  }elseif(isset($_GET['subservis'])){
    $query_m = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path
      FROM lokasi AS l
      JOIN ikon ON l.id_ikon_marker = ikon.id
      JOIN subservis ON l.id_subservis = subservis.id
      WHERE subservis.id = ".$_GET['subservis']."");
    $query_i = $db->query("
      SELECT l.nama_stasiun, l.alamat, l.telepon
      FROM lokasi AS l
      JOIN kecamatan ON l.id_kecamatan = kecamatan.id
      JOIN kota ON kecamatan.id_kota = kota.id
      JOIN subservis ON l.id_subservis = subservis.id
      WHERE subservis.id = ".$_GET['subservis']."
      ");
  }else{
    $query_m = $db->query("
      SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path
      FROM lokasi AS l
      JOIN ikon ON l.id_ikon_marker = ikon.id
      ");
    $query_i = $db->query("
      SELECT l.nama_stasiun, l.alamat, l.telepon
      FROM lokasi AS l
      ");
  }
?>
  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
                      <select name="kota" id="kota" class="form-control">
                        <option value="" disabled selected hidden>---Pilih Kota/Kabupaten---</option>
                      <?php $query_s_k = $db->query("SELECT * FROM kota"); ?>
                      <?php if($query_s_k->num_rows > 0): ?>
                      <?php   while($row = $query_s_k->fetch_assoc()): ?>
                        <option value="<?php echo $row['id'] ?>" ><?php echo $row['nama_kota'] ?></option>
                      <?php   endwhile; ?>
                      <?php endif; ?>
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 col-12">
                      <label>Kecamatan</label>
                      <select name="kec" id="kec" class="form-control">
                        <option value="" disabled selected hidden></option>
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 col-12">
                      <label>Subservis</label>
                      <select name="subservis" class="form-control">
                        <option value="" disabled selected hidden>---Pilih Sub Service---</option>
                      <?php $query_s_sub = $db->query("SELECT * FROM subservis"); ?>
                      <?php if($query_s_sub->num_rows > 0): ?>
                      <?php   while($row = $query_s_sub->fetch_assoc()): ?>
                        <option value="<?php echo $row['id'] ?>" ><?php echo $row['subservis'] ?></option>
                      <?php   endwhile; ?>
                      <?php endif; ?>
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
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Peta Stasiun Radio Di Kepulauan Riau</h3>
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
          <div class="col-md-4">
              <!-- Info Boxes Style 2 -->
              <div class="info-box mb-3 bg-info">
                <span class="info-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Jumlah Stasiun Radio</span>
                  <span class="info-box-number">
                    <?php echo $query_m->num_rows ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
        </div>

      </div>
    <section>

  </div>

  <!-- Google Maps Javascript -->
  <script text="text/javascript">
      function initMap(){
        // Variabel untuk menyimpan informasi lokasi
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        //  Variabel berisi properti tipe peta
        var mapOptions = {
            mapTypeId: 'roadmap'
          };
        // Pembuatan peta
        var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();
        var radios = [
          <?php
            if($query_m->num_rows > 0){
              while($row = $query_m->fetch_assoc()){
                echo '["'.$row['nama_stasiun'].'", "'.$row['latitude'].'", "'.$row['longitude'].'", "'.$row['path'].'"],';
              }
            }
          ?>];

        var infoWindowContent = [
          <?php
            if($query_i->num_rows > 0){
              while($row = $query_i->fetch_assoc()){
          ?>
                [
                  '<div class="info-content" style="">' +
                  '<h3><?php echo $row['nama_stasiun'] ?></h3>' +
                  '<h4><?php echo $row['alamat'] ?></h4>' +
                  '<p><?php echo $row['telepon'] ?></p>' +
                  '</div>'
                ],
          <?php
              }
            }
          ?>];
        map.setTilt(100);
        for(i = 0; i < radios.length; i++){
          const radio = radios[i];
          let position = new google.maps.LatLng(radio[1], radio[2]);
          let marker = new google.maps.Marker({
              position: position,
              map: map,
              icon: radio[3],
            });
          google.maps.event.addListener(marker, 'click', (function(marker, i){
              return function(){
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
              }
            })(marker, i));
          bounds.extend(position);
          map.fitBounds(bounds);
        }
      }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9-xRbyMcTIO6RL96myTGq7wfLzaLNUtg&callback=initMap"></script>

<?php include('footer.php') ?>
