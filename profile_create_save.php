<?php include('config.php') ?>

<?php 

  $post = $_POST;
  /* print_r($post); */
  // exit;
  $sql = "INSERT INTO profile (nip, nama, tanggal_lahir, jenis_kelamin, agama, jenjang_pendidikan, golongan, jabatan, alamat) VALUES ('".$post['nip']."', '".$post['nama']."', '".$post['tanggal_lahir']."', '".$post['jenis_kelamin']."', '".$post['agama']."', '".$post['jenjang_pendidikan']."','".$post['golongan']."', '".$post['jabatan']."', '".$post['alamat']."')";

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
  header("Location: profile_read.php");
  // die();
  exit();
?>

