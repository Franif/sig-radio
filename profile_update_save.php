<?php include('config.php') ?>

<?php 

  $post = $_POST;
  print_r($post);
  // exit;
  $sql = "UPDATE profile SET nip='".$post['nip']."', nama='".$post['nama']."', tanggal_lahir='".$post['tanggal_lahir']."' , jenis_kelamin='".$post['jenis_kelamin']."', agama='".$post['agama']."', jenjang_pendidikan='".$post['jenjang_pendidikan']."', golongan='".$post['golongan']."', jabatan='".$post['jabatan']."', alamat='".$post['alamat']."' WHERE id='".$post['id']."'";

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

