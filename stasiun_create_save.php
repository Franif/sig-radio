<?php include('config.php') ?>

<?php 

  $post = $_POST;
  /* print_r($post); */
  // exit;
  $sql = "INSERT INTO lokasi (nama_stasiun, latitude, longitude, alamat, telepon, kota, kecamatan, frekuensi) VALUES ('".$post['nama_stasiun']."', '".$post['latitude']."', '".$post['longitude']."', '".$post['alamat']."', '".$post['telepon']."', '".$post['kota']."', '".$post['kecamatan']."', '".$post['frekuensi']."')";

  if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // if (headers_sent()) {
  //     die("Redirect failed. Please click on this link: <a href=...>");
  // }
  // else{
  //     exit(header("Location: /user.php"));
  // }
  header("Location: stasiun_read.php");
  // die();
  exit();
?>

