<?php include('config.php') ?>

<?php 

  $post = $_POST;
  /* print_r($post); */
  // exit;
  $sql = "INSERT INTO klien_baru (id_klien, nama_klien) VALUES ('".$post['id_klien']."', '".$post['nama_klien']."')";

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
  header("Location: klien_read.php");
  // die();
  exit();
?>

