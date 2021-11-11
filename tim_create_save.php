<?php include('config.php') ?>

<?php 
 function ubah_data($date){
    $date_fmt = explode("/", $date);
    return $date_fmt[1]."-".$date_fmt[0]."-".$date_fmt[2]; 
 }
  $post = $_POST;
  $tanggal = ubah_data($_POST['tanggal_penugasan']);
  /* print_r($post); */
  // exit;
  $sql = "INSERT INTO tim_baru (id_tim, id_profile, tanggal_penugasan, tim, id_koordinator, id_lokasi) VALUES ('".$post['id_tim']."', '".$post['nama']."','".$tanggal."', '".$post['tim']."', '".$post['nama_koordinator']."', '".$post['nama_stasiun']."')";

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
  
  header("Location: tim_read.php");
  // die();
  exit();
?>

