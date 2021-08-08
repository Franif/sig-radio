<?php
require_once('config.php');
$kota_id = mysqli_real_escape_string($_POST['kota_id']);
if($kota_id != '')
{
$kecamatan = $db->query('SELECT * FROM KECAMATAN WHERE id_kota='.$kota_id.'');
$options = "<option value=''>---Pilih Kecamatan---</option>";
while($row = $kecamatan->fetch_assoc()) {
$options .= "<option value='".$row['id']."'>".$row['nama_kecamatan']."</option>";
}
echo $options;
}?>
