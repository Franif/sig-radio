<?php include('config.php') ?>

<?php
if (preg_match("/^[0-9]*$/", $nip)) {
echo "No HP valid";
} else {
echo "No HP tidak valid";
}
?>


<?php 
 function ubah_data($date){
    $date_fmt = explode("/", $date);
    return $date_fmt[0]."-".$date_fmt[1]."-".$date_fmt[2]; 
 }
  $post = $_POST;
  $tanggal = ubah_data($_POST['tanggal_lahir']);
  /* print_r($post); */
  // exit;
  $sql = "INSERT INTO profile (nip, nama, tanggal_lahir, id_jenis_kelamin, id_agama, id_pendidikan, id_golongan, id_jabatan, alamat) VALUES ('".$post['nip']."', '".$post['nama']."', '".$tanggal."', '".$post['jenis_kelamin']."', '".$post['agama']."', '".$post['jenjang_pendidikan']."','".$post['golongan']."', '".$post['jabatan']."', '".$post['alamat']."')";

  if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

  // if (headers_sent()) {
  //     die("Redirect failed. Please click on this link: <a href=...>");
  // }
  // else{
  //     exit(header("Location: /user.php"));
  // }
  header("Location: profile_read.php");
  // die();
  exit();
?>

