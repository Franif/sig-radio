<?php include('config.php') ?>
<?php 

  $post = $_POST;
  print_r($post);
  // exit;
  $sql = "UPDATE tim_baru SET tanggal_penugasan='".$post['tanggal_penugasan']."', tim='".$post['tim']."', id_koordinator='".$post['nama_koordinator']."', id_lokasi ='".$post['nama_stasiun']."' WHERE id_tim='".$post['id']."'";

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
  header("Location: tim_read.php");
  // die();
  exit();
?>

