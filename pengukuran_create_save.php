<?php include('config.php') ?>

<?php 
$level1 = $_POST['level1']; 
$level2 = $_POST['level2'];
$level3 = $_POST['level3'];

            if ($level1 == "") {
                echo "";
            } else if ($level1 >= 60 && $level2 >= 60 && $level3 >=60) {
                echo $status = 'warning';
            } else if ($level1 >= 60 && $level2 <= 60 && $level3 <=60) {
                echo $status = 'warning';
            } else if ($level1 <= 60 && $level2 <= 60 && $level3 >=60) {
                echo $status = 'warning';
            } else if ($level1 <= 60 && $level2 <= 60 && $level3 >=60) {
                echo $status = 'warning';
            } else if ($level1 >= 60 && $level2 >= 60 && $level3 <=60) {
                echo $status = 'warning';
            } else if ($level1 >= 60 && $level2 <= 60 && $level3 >=60) {
                echo $status = 'warning';
            } else if ($level1 <= 60 && $level2 >= 60 && $level3 >=60) {
                echo $status = 'warning';
            } else if ($level1 <= 60 && $level2 <= 60 && $level3 <=60) {
                echo $status = 'Aman';
            }

  function ubah_data($date){
    $date_fmt = explode("/", $date);
    return $date_fmt[1]."-".$date_fmt[0]."-".$date_fmt[2]; 
 }
  $post = $_POST;
  $tanggal = ubah_data($_POST['tanggal_pengukuran']);
  /* print_r($post); */
  // exit;
  $sql = "INSERT INTO pengukuran (id, tanggal, id_stasiun, id_tim, kanal, frekuensi_terukur, pergeseran, level, bandwith, field_strength, daya_terukur,    kedalaman_modulasi, deviasi_frekuensi, erp, frekuensi1, level1, frekuensi2, level2, frekuensi3, level3, status) VALUES (
        '".$post['id']."', 
        '".$tanggal."',  
        '".$post['nama_stasiun']."', 
        '".$post['tim']."',
        '".$post['kanal']."', 
        '".$post['frekuensi_terukur']."', 
        '".$post['pergeseran']."', 
        '".$post['level']."', 
        '".$post['bandwith']."', 
        '".$post['field_strength']."', 
        '".$post['daya_terukur']."', 
        '".$post['kedalaman_modulasi']."', 
        '".$post['deviasi_frekuensi']."', 
        '".$post['erp']."', 
        '".$post['frekuensi1']."', 
        '".$post['level1']."', 
        '".$post['frekuensi2']."', 
        '".$post['level2']."', 
        '".$post['frekuensi3']."', 
        '".$post['level3']."', 
        '".$status."')";

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

