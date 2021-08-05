<?php include('config.php') ?>

<?php 

  $post = $_POST;
  /* print_r($post); */
  // exit;
  $sql = "INSERT INTO pengukuran (tanggal, id_stasiun, kanal, frekuensi_terukur, pergeseran, level, bandwith, field_strength, daya_terukur, kedalaman_modulasi, deviasi_frekuensi, erp, frekuensi1, level1, frekuensi2, level2, frekuensi3, level3) VALUES ('".$post['tanggal']."', '".$post['id_stasiun']."', '".$post['kanal']."', '".$post['frekuensi_terukur']."', '".$post['pergeseran']."', '".$post['level']."', '".$post['bandwith']."', '".$post['field_strength']."', '".$post['daya_terukur']."', '".$post['kedalaman_modulasi']."', '".$post['deviasi_frekuensi']."', '".$post['erp']."', '".$post['frekuensi1']."', '".$post['level1']."', '".$post['frekuensi2']."', '".$post['level2']."', '".$post['frekuensi3']."', '".$post['level3']."')";

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
  header("Location: pengukuran_read.php");
  // die();
  exit();
?>

