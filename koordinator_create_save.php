<?php include('config.php') ?>

<?php 

  $post = $_POST;
  /* print_r($post); */
  // exit;
  $sql = "INSERT INTO koordinator (nip, nama_koordinator) VALUES ('".$post['nip']."', '".$post['nama']."')";

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
  header("Location: koordinator_read.php");
  // die();
  exit();
?>

