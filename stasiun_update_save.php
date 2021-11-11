<?php include('config.php') ?>

<?php 

  $post = $_POST;
  print_r($post);
  // exit;
  $sql = "UPDATE lokasi SET id_stasiun='".$post['id_stasiun']."', nama_stasiun='".$post['nama_stasiun']."', latitude='".$post['latitude']."', longitude='".$post['longitude']."' , alamat='".$post['alamat']."', telepon='".$post['telepon']."', id_kecamatan='".$post['kec']."', frekuensi='".$post['frekuensi']."', id_servis ='".$post['servis']."' , id_subservis ='".$post['subservis']."' , id_klien ='".$post['klien']."' , id_ikon_marker ='".$post['ikon']."'  WHERE id_stasiun='".$post['id_stasiun']."'";

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
  // header("Location: stasiun_read.php");
  // die();
  exit();
?>

