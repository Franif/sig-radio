<?php include('config.php') ?>
<?php 
  $post = $_POST;
  $sql = "INSERT INTO lokasi (nama_stasiun, latitude, longitude, alamat, telepon, id_kecamatan, frekuensi, id_servis, id_subservis, id_klien, id_ikon_marker) 
          VALUES (
            '".$post['nama_stasiun']."', 
            '".$post['latitude']."', 
            '".$post['longitude']."', 
            '".$post['alamat']."', 
            '".$post['telepon']."', 
            '".$post['kecamatan']."', 
            '".$post['frekuensi']."',-
            '".$post['servis']."',-
            '".$post['subservis']."',-
            '".$post['klien']."',-
            '".$post['ikon']."'
          )";

  if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // if (headers_sent()) {
  //     die("Redirect failed. Please click on this link: <a href=...>");
  // }
  // else{
  //     exit(header("Location: /user.php"));
  // }
  header("Location: stasiun_read.php");
  // die();
  exit();
?>

