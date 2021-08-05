<?php include('config.php') ?>

<?php 

  $post = $_POST;
  print_r($post);
  // exit;
  $sql = "UPDATE pengukuran SET tanggal='".$post['tanggal']."', id_stasiun='".$post['id_stasiun']."', kanal='".$post['kanal']."' , frekuensi_terukur='".$post['frekuensi_terukur']."', pergeseran='".$post['pergeseran']."', level='".$post['level']."', bandwith='".$post['bandwith']."', field_strength='".$post['field_strength']."', daya_terukur='".$post['daya_terukur']."', kedalaman_modulasi='".$post['kedalaman_modulasi']."', deviasi_frekuensi='".$post['deviasi_frekuensi']."', erp='".$post['erp']."', frekuensi1='".$post['frekuensi1']."', level1='".$post['level1']."', frekuensi2='".$post['frekuensi2']."', level2='".$post['level2']."', frekuensi3='".$post['frekuensi3']."', level3='".$post['level3']."' WHERE id='".$post['id']."'";

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

