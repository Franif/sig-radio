    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="#">BalmonBatam.co.id</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>By :</b> @PutriNurzaini
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script>
    //Date picker
    $('#tanggal').datetimepicker({
        format: 'DD-MM-YYYY'
    });
    $('#tanggal2').datetimepicker({
        format: 'DD-MM-YYYY'
    });
  </script>
  <script>
  $('#kota').on('change', function(){
    var kota_id = this.value;
    $.ajax({
      type: "POST",
      url: "get_kecamatan.php",
      data:'kota_id='+kota_id,
      success: function(result){
        $("#kec").html(result);
      }
    });
  });
  </script>
  <script>
  $(function() {
       var pgurl = window.location.href.substr(window.location.href
  .lastIndexOf("/")+1);
       $("nav ul li a").each(function(){
            if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
            $(this).addClass("active");
       })
  });
  </script>
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
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="dist/js/pages/dashboard2.js"></script> -->
</body>
</html>
