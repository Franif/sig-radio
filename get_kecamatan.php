<?php
require_once('config.php');
$kota_id = $db->real_escape_string($_POST['kota_id']);
if($kota_id != ''){
  $query_kec = $db->query('SELECT * FROM kecamatan WHERE id_kota='.$kota_id.'');
  $options = "<option value='' hidden selected>---Pilih Kecamatan---</option>";
  while($row_kec = $query_kec->fetch_assoc()) {
    $options .= "<option value='".$row_kec['id']."'>".$row_kec['nama_kecamatan']."</option>";
  }
echo $options;
}
?>
