    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
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
  <!-- Google Maps Javascript -->
  <script text="text/javascript">
      function initMap(){
        var radios = <?php echo $radios; ?>; 
        // Variabel untuk menyimpan informasi lokasi
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        //  Variabel berisi properti tipe peta
        var mapOptions = {
            mapTypeId: 'satellite'
          }; 
        // Pembuatan peta
        var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);      
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds(); 
        var infos = <?php echo $infos; ?>;
        var infoWindowContents = [
          <?php
            if($query_x->num_rows > 0):
              while($row = $query_x->fetch_assoc()): 
          ?>
                [
                  '<div class="info-content">' +
                  '<h3><?php echo $row['nama_stasiun'] ?></h3>' +
                  '<h4><?php echo $row['alamat'] ?></h4>' +
                  '<p><?php echo $row['telepon'] ?></p>' +
                  '</div>'
                ],
          <?php
              endwhile;
            endif;
          ?>];
        map.setTilt(100);
        for(i = 0; i < radios.length; i++){
          const radio = radios[i];
          const info = infos[i];
          console.log(info[0]);
          let position = new google.maps.LatLng(radio[1], radio[2]);
          let marker = new google.maps.Marker({
              position: position,
              map: map,
              icon: radio[3],
            });
          google.maps.event.addListener(marker, 'click', (function(marker, i){
              const infoWindowContent = infoWindowContents[i];
              return function(){
                infoWindow.setContent(infoWindowContent[0]);
                infoWindow.open(map, marker);
              }
            })(marker, i));
          bounds.extend(position);
          map.fitBounds(bounds);
        }
      }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9-xRbyMcTIO6RL96myTGq7wfLzaLNUtg&callback=initMap"></script>

  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="dist/js/pages/dashboard2.js"></script> -->
</body>
</html>
