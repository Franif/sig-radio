<?php include('config.php') ?>

<?php 

  $post = $_POST;
  print_r($post);
  // exit;
  $sql = "UPDATE koordinator SET nip='".$post['nip']."', nama='".$post['nama']."'  WHERE nip='".$post['nip']."'";

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
  header("Location: koordinator_read.php");
  // die();
  exit();
?>

