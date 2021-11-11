<?php
include('config.php');

    $query_m = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path 
      FROM lokasi AS l
      JOIN ikon ON l.id_ikon_marker = ikon.id");
    $query_m2 = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path 
      FROM lokasi AS l
      JOIN ikon ON l.id_ikon_marker = ikon.id");
    $query_m3 = $db->query("SELECT l.nama_stasiun, l.latitude, l.longitude, ikon.path 
      FROM lokasi AS l
      JOIN ikon ON l.id_ikon_marker = ikon.id");
while($row = $query_m->fetch_assoc()){
  $name = $row['nama_stasiun'];
  $lat = floatval($row['latitude']);
  $lng = floatval($row['longitude']);
  $radios_data[] = [$name, $lat, $lng];
}
$radios = json_encode($radios_data);
?>
<!DOCTYPE html>
<body>
  <div id="googleMap" style="width:100%;height:400px"></div>
</body>
<script type='text/javascript'>
function initMap(){
        var mapOptions = {
            mapTypeId: 'satellite',
            zoom:10,
center: { lat: -33.9, lng: 151.2 },
          }; 
        var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
  setMarkers(map);
}
var radios = <?php echo $radios;?>;
function setMarkers(map){
  for(let i = 0; i < radios.length; i++){
    const radio = radios[i];
            marker = new google.maps.Marker({
                position: {lat: radio[1], lng: radio[2]},
                name:name,
                map: map
            });
  }
}
</script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9-xRbyMcTIO6RL96myTGq7wfLzaLNUtg&callback=initMap"></script>
