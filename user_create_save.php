<?php include('config.php') ?>

<?php

  $post = $_POST;
  $hash = password_hash($post['password'], PASSWORD_DEFAULT);
  /* print_r($post); */
  // exit;
  $sql = "INSERT INTO user_new (id_profile, nama_karyawan, password, id_level_user) 
          VALUES (
          '".$post['nip']."',
          '".$post['nama']."',
          '".$hash."', 
          '".$post['level']."')";

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
  // // // }
  header("Location: user_read.php");
  // // // die();
  exit();
?>

