<?php include('config.php') ?>
<?php 
 function ubah_data($date){
    $date_fmt = explode("/", $date);
    return $date_fmt[2]."-".$date_fmt[1]."-".$date_fmt[0]; 
 }
  $post = $_POST;
  $tanggal = ubah_data($_POST['tanggal_lahir']);
  ?>
<?php 

  $post = $_POST;
  print_r($post);
  // exit;
  $sql = "UPDATE profile SET nip='".$post['nip']."', nama='".$post['nama']."', tanggal_lahir='".$post['tanggal_lahir']."' , id_jenis_kelamin='".$post['jenis_kelamin']."', id_agama='".$post['agama']."', id_pendidikan='".$post['pendidikan']."', id_golongan='".$post['golongan']."', id_jabatan='".$post['jabatan']."', alamat='".$post['alamat']."' WHERE nip='".$post['nip']."'";

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

