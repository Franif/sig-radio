<?php include('header.php') ?>
<?php
  $query_m = $db->query("SELECT lokasi_baru.nama_stasiun, lokasi_baru.latitude, lokasi_baru.longitude, ikon.path 
    FROM lokasi_baru 
    JOIN ikon ON lokasi_baru.id_ikon_marker = ikon.id");
  $query_i = $db->query("SELECT * FROM lokasi_baru");
  /* if(isset($_GET[''])){ */
  /* } */  
    /* $query_m = $db->query("SELECT * FROM stasiunradio LEFT JOIN ikon_peta ON stasiunradio.id_ikon_peta = ikon_peta.id"); */  
    /* $query_i = $db->query("SELECT * FROM stasiunradio"); */
  /* } */


?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- Main row -->
          <div class="row">
            <form>
                <div class="card-body row">
                  <div class="form-group col-md-3 col-sm-6 col-12">
                    <label>Kota</label>
                    <select name="kotakab" class="form-control" placeholder="Pilih Kota/Kabupaten">
                      <option value="" disabled selected hidden>---Pilih Kota/Kabupaten---</option>
                      <?php $query_s = $db->query("SELECT * FROM kota"); ?>
                      <?php while($row = $query_s->fetch_assoc()){ ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['nama_kota'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-3 col-sm-6 col-12">
                    <label>Kecamatan</label>
                    <select name="kecamatan" class="form-control" placeholder="Pilih Kecamatan">
                      <option value="" disabled selected hidden>---Pilih Kecamatan---</option>
                      <?php $query_s = $db->query("SELECT * FROM kecamatan"); ?>
                      <?php while($row = $query_s->fetch_assoc()){ ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['nama_kecamatan'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-3 col-sm-6 col-12">
                    <label>Kecamatan</label>
                    <select name="kecamatan" class="form-control" placeholder="Pilih Sub Service">
                      <option value="" disabled selected hidden>---Pilih Sub Service---</option>
                      <?php $query_s = $db->query("SELECT * FROM subservis"); ?>
                      <?php while($row = $query_s->fetch_assoc()){ ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['nama_subservis'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-default">Cari</button>
              </form>
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
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="d-md-flex">
                    <div class="p-1 flex-fill" style="overflow: hidden">
                      <!-- Map will be created here -->
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
        
                          var markers = [
                              <?php 
                                if($query_m->num_rows > 0){
                                  while($row = $query_m->fetch_assoc()){
                                    // echo'["'.$row['nama_stasiun'].'", "'.$row['latitude'].'", "'.$row['longitude'].'", "'.$row['jalur_ikon'].'"],';
                                    echo'["'.$row['nama_stasiun'].'", "'.$row['latitude'].'", "'.$row['longitude'].'"],';
                                  }
                                }
                              ?>
                            ];

                          var infoWindowContent = [
                              <?php
                                if($query_i->num_rows > 0){
                                  while($row = $query_i->fetch_assoc()){ 
                              ?>
                                    [
                                      '<div class="info-content">' +
                                      '<h3><?php echo $row['nama_stasiun'] ?></h3>' +
                                      '<p><?php echo $row['alamat'] ?></p>' +
                                      '<p><?php echo $row['telepon'] ?></p>' +
                                      '</div>'
                                    ],
                              <?php
                                  }
                                }
                              ?>
                            ];

        map.setTilt(100);

        for(i = 0; i < markers.length; i++){
          let position = new google.maps.LatLng(markers[i][1], markers[i][2]);
          let marker = new google.maps.Marker({
                                position: position,
                                map: map,
                                // icon: markers[i][3],
                                /* title: markers[i][0] */
                              });

          google.maps.event.addListener(marker, 'click', (function(marker, i){
                                return function(){
                                  infoWindow.setContent(infoWindowContent[i][0]);
                                  /* infoWindow.setContent(); */
                                  infoWindow.open(map, marker);
                                }
                              })(marker, i));

          bounds.extend(position);
          map.fitBounds(bounds);
        }
      }
                      </script>
                      <div id="world-map-markers" style="width:100%; height: 400px; overflow: hidden">
                        <div id="googleMap" style="width:100%; height:400px; color:#000000"></div>
                      </div>
                    </div>
                  </div><!-- /.d-md-flex -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include('footer.php') ?>
