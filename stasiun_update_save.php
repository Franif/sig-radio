<?php include('config.php') ?>

<?php 

  $post = $_POST;
  print_r($post);
  // exit;
  $sql = "UPDATE lokasi SET nama_stasiun='".$post['nama_stasiun']."', latitude='".$post['latitude']."', longitude='".$post['longitude']."' , alamat='".$post['alamat']."', telepon='".$post['telepon']."', kota='".$post['kota']."', kecamatan='".$post['kecamatan']."', frekuensi='".$post['frekuensi']."' WHERE id='".$post['id']."'";

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

